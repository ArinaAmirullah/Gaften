<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class UserController extends Controller
{
    function login(Request $req)
    {
        // return $req;
        $user = User::where(['email' => $req ->email])
        ->where(['password' => $req ->password])
        ->first();

        if($user == true) {
            $req->session()->put('user', $user);
            return redirect('/dashboard?success=true');
        } else {
            return redirect('/signup?success=false');
        }
    }


    public function index()
    {
        if(Auth::id()){
            return login('');
        } else {

            $data = product::paginate(6);

            return view('user.home', compact('data'));
        }
       
    }

    public function dashboard()
    {
        if(Auth::id()){
            return login('');
        } else {

            $data = product::paginate(6);

            $user = session()->get('user');

            $count=cart::where('phone',$user->phone)->count();

            return view('user.dashboard', compact('data','count'));
        }
        
    }

    public function viewprofile()
    {
        $data=User::all();
        return view('user.viewprofile',compact('data'));
    }

    function register(Request $req)
    {
        //return $req->input();

        try{
        DB::insert('INSERT INTO users(name,email,date, password, address, phone, created_at) VALUES (?,?,?,?,?,?,?)',
        [$req->fullname,$req->email,$req->date,$req->password, $req->address, $req->phone, now()]);

        return redirect('/signup?sucess=registered');
        } catch (\Exception){
            return redirect('/?sucess=failed');
        }
    }

    public function search(Request $req){
        
        $search=$req->search;

        if($search=='') {

            $data = product::paginate(3);

            return view('user.dashboard', compact('data'));
        }

        $data=product::where('title','Like','%'.$search.'%')->get();

        return view('user.dashboard',compact('data'));
        
    } 

    public function updateprofile(Request $req)
    {
        $user = session()->get('user');

        $user->fullname=$req->name;
        $user->email=$req->email;
        $user->phone=$req->phone;
        $user->password=$req->password;
        $user->date=$req->date;
        $user->address=$req->address;

        return redirect()->back()->with('message','Profile Updated Succesfully');
    }


    public function addcart(Request $req, $id)
    {

            $user=auth()->user();

            $product=product::find($id);
            $cart=new cart;

            $cart->name=session()->get('user')->name;
            $cart->phone=session()->get('user')->phone;
            $cart->address=session()->get('user')->address;
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->quantity=$req->quantity;

            $cart->save();

            return redirect()->back()->with('message', 'Product Added to Cart Successfully');

    }

    public function showcart()
    {

        $user = session()->get('user');

        $cart=cart::where('phone',$user->phone)->get();

        $count=cart::where('phone',$user->phone)->count();

        return view('user.showcart',compact('count', 'cart'));
       
    }

    public function deletecart($id)
    {
        $data=cart::find($id);

        $data->delete();

        return redirect()->back()->with('message', 'Product Removed Successfully from the Cart');
    }



    public function confirmorder(Request $req)
    {
        $user=auth()->user(); 

        $name=session()->get('user')->name;
        $phone=session()->get('user')->phone;
        $address=session()->get('user')->address;

        foreach($req->productname as $key=>$productname)
        {
            $order=new order;

            $order->product_name=$req->productname[$key];
            $order->price=$req->price[$key];
            $order->quantity=$req->quantity[$key];

            $order->name=$name;
            $order->phone=$phone;
            $order->address=$address;
            $order->status='not delivered';

            $order->save();

        }

        DB::table('carts')->where('phone',$phone)->delete();

        return redirect()->back()->with('message', 'Product Ordered Successfully');
    }

    public function showuser()
    {
        $data=User::all();
        return view('admin.showuser',compact('data'));
    }

    public function editprofile()
    {
        $data=User::all();
        return view('user.editprofile',compact('data'));
    }


}