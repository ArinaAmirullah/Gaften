<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function product()
    {
        return view('admin.product');
    }

    public function uploadproduct(Request $req)
    {
        $data=new product;

        $image=$req->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $req->file->move('productimage', $imagename);

        $data->image=$imagename;

        $data->title=$req->title;
        $data->price=$req->price;
        $data->description=$req->des;
        $data->quantity=$req->quantity;

        $data->save();

        return redirect()->back()->with('message','Product Added Succesfully');

    }

    public function showproduct()
    {
        $data=product::all();
        return view('admin.showproduct',compact('data'));
    }

    public function deleteproduct($id)
    {
        $data=product::find($id);
        
        $data->delete();

        return redirect()->back()->with('message','Product Deleted Succesfully');
    }

    public function updateview($id)
    {
        $data=product::find($id);
        return view('admin.updateview',compact('data'));
    }

    public function updateproduct(Request $req, $id)
    {
        $data=product::find($id);
        
        $image=$req->file;

        if($image)
        {

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $req->file->move('productimage', $imagename);

        $data->image=$imagename;
    }

        $data->title=$req->title;
        $data->price=$req->price;
        $data->description=$req->des;
        $data->quantity=$req->quantity;

        $data->save();

        return redirect()->back()->with('message','Product Updated Succesfully');
    }

    public function showorder()
    {
        $order=order::all();

        return view('admin.showorder',compact('order'));
    }

    public function updatestatus($id)
    {
        $order=order::find($id);
        $order->status='delivered';

        $order->save();

        return redirect()->back();
    }
}

