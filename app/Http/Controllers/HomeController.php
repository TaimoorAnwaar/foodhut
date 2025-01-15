<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Cart;
use App\Models\Food;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     public function my_home( User $user){
        $food=Food::all();
        return  view('home.index',compact('food','user'));

       }
    public function index(User $user)
    {
       if( Auth::id()){
            $usertype=Auth::user()->usertype;
            if($usertype=="admin"){
$total_user=User::where('usertype','=','user')->count();
$total_food=Food::count();
$total_order=Order::count();
$total_deliver=Order::where('delivery_status','=','Delivered')->count();
$total_inprogress=Order::where('delivery_status','=','In Progress')->count();
$total_cancelled=Order::where('delivery_status','=','Cancelled')->count();



                return view('admin.dashboard',compact('total_user','total_food','total_order','total_deliver','total_inprogress','total_cancelled'));
            }
            $food=Food::all();
            return  view('home.index',compact('food','user'));
    
        }
    }

    // public function AddCart(Request $request,$id){

    //     if( Auth::id()){
            
    //         $food=Food::findOrFail($id);
            

    //         $cart_title=$food->title;
    //         $cart_detail=$food->detail;
    //         $cart_price=$food->price;
    //         $cart_image=$food->image;


           
    //         $cart=new Cart;
    //         $cart->detail=$cart_detail;
    //         $cart->title=$cart_title;
    //         $cart->price=$cart_price * $request->qty;
    //         $cart->image=$cart_image;
    //         $cart->quantity=$request->qty;
    //         $cart->userid=Auth::user()->id;
           
    //         $cart->save();

    //         return redirect()->back();


    //     }
    //     else {
    //         return redirect('login');
    //     }


    // }

   
    public function AddCart(Request $request, $id)
    {
        if (Auth::id()) {
            $food = Food::findOrFail($id);
     
           
            $existingCartItem = Cart::where('userid', '=',Auth::user()->id)
                                    ->where('title', '=',$food->title)
                                    ->first();
    
            if ($existingCartItem) {
                
                $existingCartItem->quantity += $request->qty;
                $existingCartItem->price += $food->price * $request->qty;
                $existingCartItem->save();
            } else {
                
                $cart = new Cart;
                $cart->title = $food->title;
                $cart->detail = $food->detail;
                $cart->price = $food->price * $request->qty;
                $cart->image = $food->image;
                $cart->quantity = $request->qty;
                $cart->userid = Auth::user()->id;
                $cart->save();
            }
    
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }
    
    public function MyCart(){

$userid=Auth::user()->id;

$cart=Cart::where('userid','=',$userid)->get();

        return view('home.my_cart',compact('cart'));
    }


    public function RemoveCart($id){
        $cart=Cart::find($id);
        $cart->delete();
        return redirect()->back();
    }
      
    
    public function ConfirmOrder(Request $request){

        $userid=Auth::user()->id;
        $carts=Cart::where('userid','=',$userid)->get();
foreach($carts as $cart){

    $order= new Order;
    $order->name=$request->name;
    $order->email=$request->email;
    $order->phone=$request->phone;
    $order->address=$request->address;
    $order->title=$cart->title;
    $order->quantity=$cart->quantity;
    $order->price=$cart->price;
    $order->image=$cart->image;

    $order->save();
    $cart->delete();



}
return redirect()->back();
    }

    public function BookTable(Request $request){
        
        $book=new Book;
        $book->phone=$request->phone;
        $book->guest=$request->n_guest;
        $book->time=$request->time;
        $book->date=$request->date;
        $book->save();

        return redirect()->back(); 
    }
    
     
    
}
