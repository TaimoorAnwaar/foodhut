<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Food;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AddFood(){
        return view('admin.add_food');
    }
    public function UploadFood( Request $request){
        
        $data=new Food;
        $data->title=$request->title;
        $data->detail=$request->details;
        $data->price=$request->price;

        $image=$request->img;

        $filename = time() . '.' . $image->getClientOriginalExtension();
        $request->img->move('food_image',$filename);
$data->image=$filename;


        $data->save();

        return redirect()->back();


    }
    public function ViewFood(){
        $food =Food::paginate(5);

        return view('admin.view_food', compact('food'));

    }

    public function UpdateFood(Request $request,$id){
$food=Food::find($id);


        return view('admin.update_food',compact('food'));

    }

    public function EditFood(Request $request,$id){
$food=Food::findOrFail($id);

$food->title=$request->title;
$food->detail=$request->details;
$food->price=$request->price;

$image=$request->img;
if($image){
    $imagename=time().'.'.$image->getClientOrignalExtension();

    $request->img->move('/food_image',$imagename);

    $food->image=$imagename;
}


$food->save(); 
return redirect('view_food');

    }
    public function DeleteFood(Food $food){
        
        $food->delete();
        return redirect()->back();

    }

    public function ViewOrders(){

$orders=Order::paginate(5);


        return view('admin.view_orders', compact('orders'));
    }
public function ChangeStatus($id , $status){

    $order=Order::find($id );
    $order->delivery_status=$status;
    $order->save(); 
    return redirect()->back();
}

Public function Reservations(){


    $book=Book::all();
    return view('admin.reservations',compact('book'));
}

}
