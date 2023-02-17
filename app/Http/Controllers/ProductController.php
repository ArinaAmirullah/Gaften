<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{

    function searchproduct(Request $req){
       
        return view('control',['listofproduct' => DB::table('products')
        ->select(DB::raw('id, pname, category, desc, price, size, colour, created_at, updated_at'))
        ->where('pname', 'like', '%' . $req->q . '%')
        ->orWhere('pname', 'like', '%' . $req->q . '%')
        ->paginate(2)]);
        
    } 


    function add(Request $req)
    {
        //return $req->input();

        try{
        DB::insert('INSERT INTO products(pname,category,desc, price, size, colour, created_at) VALUES (?,?,?,?,?,?,?)',
        [$req->pname,$req->category,$req->desc,$req->price, $req->size, $req->colour, now()]);

        return redirect('/control?sucess=added');
        } catch (\Exception){
            return redirect('/add?sucess=failed');
        }
    }
    
    function deleteproduct(Request $req) {
        DB::table('products')
        ->where('id', $req->rid)
        ->delete();
        return redirect('/productlist?sucess=deleted')->with('success', 'Product deleted successfully.');
    }

    function getproduct(Request $req) {
    
        $data = DB::table('products')
        //->join('table2','table2.id','=','users.id')
        ->where('id', $req->rid)
        ->first();
        return view('productedit',['products'=>$data]);
    }

    function editproduct(Request $req) {
    
        DB::table('products')->where('id',$req->rid)
        ->update(array(
            'pname' => $req->pname,
            'category' => $req->category,
            'desc' => $req->desc,
            'price' => $req->price,
            'size' => $req->size,
            'colour' => $req->colour,
            //'updated_at' => now()
            'updated_at' => DB::raw('now()'
        )));

        return redirect('productview?rid='.$req->rid.'&success=1')->with('success', 'Product updated successfully.');;
    }

    function viewproduct(Request $req) {
    
        $data = DB::table('products')
        //->join('table2','table2.id','=','users.id')
        ->where('id', $req->rid)
        ->first();
        return view('productview',['products'=>$data]);
    }

}