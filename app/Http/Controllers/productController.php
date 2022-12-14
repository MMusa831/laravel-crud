<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class productController extends Controller
{
    function insert(Request $req) {
        $name = $req->get('product_name');
        $price = $req->get('product_price');
        $image = $req->file('product_image')->getClientOriginalName();


        $req->product_image->move(public_path('images'), $image);

        $prod = new product();
        $prod->product_name = $name;
        $prod->product_price = $price;
        $prod->product_image = $image;

        $prod->save();

        return redirect('/');
    }

    function getData() {
        $prodData = product::all();
        return view('insert', ['data'=>$prodData]);
    }

        
    function updateOrdelete(Request $req)
    {
        $id = $req->get('id');
        $name = $req->get('product_name');
        $price = $req->get('product_price');

        if ($req->get('update') == 'Edite') {
            return view('update', ['product_id' => $id, 'product_name' => $name, 'product_price' => $price]);
        } else {
            $prod = product::find($id);
            $prod->delete();
        }
        return redirect('/');
    }

    function update(Request $req) {
        $id = $req->get('id');
        $name = $req->get('product_name');
        $price = $req->get('product_price');

        $prod = product::find($id);
        $prod->product_name = $name;
         $prod->product_price = $price;
         $prod->save();

        return redirect('/');
    }
}

