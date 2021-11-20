<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function addproduct()
    {
        if(Auth::id()){
            if(Auth::user()->usertype=='1'){
                return view('admin.addproduct');
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('login');
        }
    }
    public function uploadproduct(Request $request)
    {
        $data = new product();

        $image = $request->file;
        $imagename = time().'.'.$image->getClientOriginalExtension();
        $request->file->move('productimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message','Product added Successfully');
    }
    public function showproduct(){
        if(Auth::user()->usertype=='1'){
            $data = product::all();
            return view('admin.showproduct',compact('data'));
        }
        else {
            return redirect()->back();
        }
    }

    public function deleteproduct($id){
        $data = product::find($id);
        $data->delete();

        return redirect()->back()->with('message','Product delete Successfully');

    }
    public function updateview($id){
        $data = product::find($id);
        return view('admin.updateview',compact('data'));

    }
    public function updateproduct(Request $request ,$id)
    {
        $data = product::find($id);
        $image = $request->file;

        if ($image){
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->file->move('productimage', $imagename);
            $data->image = $imagename;
        }



        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;

        $data->save();

        return redirect()->back()->with('message','Product edited Successfully');

    }
    public function showorder(){
        if(Auth::user()->usertype=='1'){
            $order=Order::all();
            return view('admin.showorder',compact('order'));
        }
        else {
            return redirect()->back();
        }

    }

    public function updatestatus($id){
        $order=Order::find($id);
        $order->status='Delivered';
        $order->save();
        return redirect()->back();
    }


}
