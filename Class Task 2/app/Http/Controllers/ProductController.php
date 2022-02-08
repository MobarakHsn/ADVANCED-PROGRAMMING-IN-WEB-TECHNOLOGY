<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function CreateProduct()
    {
        return view('CreateProduct');
    }

    public function CreateProductValidate(Request $req)
    {
        $req->validate(
            [
                'name'=>'required|regex:/^[A-Z a-z]+$/',
                'price'=>'required|regex:/^[0-9]+$/',
                'quantity'=>'required|regex:/^[0-9]+$/',
                'description'=>'required'
            ]
        );
        $pr=new product();
        $pr->name=$req->name;
        $pr->price=$req->price;
        $pr->quantity=$req->quantity;
        $pr->description=$req->description;
        $pr->save();
        return "<h3>New Product Creation Successfull</h3>";
    }

    public function ViewProduct()
    {
        $products = product::all();
        return view('ViewProduct')->with('products',$products);
    }

    public function EditProduct(Request $req)
    {
        $product=product::where('id','=',$req->edit_id)->first();
        if($product==null)
            return "<h3>Invalid Id</h3>";
        else
            return view('EditProduct')->with('product',$product);
    }

    public function EditProductValidate(Request $req)
    {
        $req->validate(
            [
                'name'=>'required|regex:/^[A-Z a-z]+$/',
                'price'=>'required|regex:/^[0-9]+$/',
                'quantity'=>'required|regex:/^[0-9]+$/',
                'description'=>'required'
            ]
        );
        $product=product::where('id','=',$req->edit_id)->first();
        if($product==null)
            return "Invalid Request";
        else
        {
            $product=product::where('id','=',$req->edit_id)->first();
            $product->name=$req->name;
            $product->price=$req->price;
            $product->quantity=$req->quantity;
            $product->description=$req->description;
            $product->save();
            return "<h3>Product successfully updated<h3>";
        }
    }
    public function Delete()
    {
        return view('DeleteProduct');
    }
    public function DeleteProduct(Request $req)
    {
        $req->validate(
            [
                'id'=>'required|regex:/^[0-9]+$/'
            ]
        );
        $product=product::where('id','=',$req->id)->first();
        if($product==null)
            return "<h3>Invalid Id</h3>";
        else
        {
            $product->delete();
            return "<h3>Product Deleted</h3>";
        }
    }
}
