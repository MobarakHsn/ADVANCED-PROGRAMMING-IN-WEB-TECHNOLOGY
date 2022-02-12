<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\product;
session_start();

class CustomerController extends Controller
{
    public function LoginView()
    {
        return view('customer.login')->with('msg',"");
    }
    public function LoginControl(Request $req)
    {
        $req->validate(
            [
                'phone'=>'required|regex:/^[0-9]{11}+$/'
            ]
        );
        $customer=customer::where('phone','=',$req->phone)->first();
        if($customer==null)
            return view('customer.login')->with('msg',"Phone did not matched.");
        else
        {
            $_SESSION['customer_phone']=$customer->phone;
            return $this->OrderView();
        }
    }
    public function OrderView()
    {
        if(!isset($_SESSION['customer_phone']))
        {
            return $this->LoginView();
        }
        $products = product::all();
        return view('customer.order')->with('products',$products);
    }
    public function AddProduct($product)
    {
        $phone=$_SESSION['customer_phone'];
        $mycart="$phone"."_cart";
        $myjson;
        if(isset($_SESSION[$mycart]))
        {
            $myjson=$_SESSION[$mycart];
            $myjson=json_decode($myjson);
        }
        else
        {
            $myjson=[];
        }
        $myjson[]=$product;
        $jsonstr=json_encode($myjson);
        $_SESSION[$mycart]=$jsonstr;
    }
    public function OrderControl(Request $req)
    {
        $products = product::all();
        foreach($products as $p)
        {
            if(isset($_REQUEST[$p->id]))
            {
                $this->AddProduct($p);
            }
        }
        return $this->OrderView();
    }
    public function CartView()
    {
        if(!isset($_SESSION['customer_phone']))
        {
            return $this->LoginView();
        }
        $phone=$_SESSION['customer_phone'];
        $mycart="$phone"."_cart";
        $myjson=$_SESSION[$mycart];
        $myjson=json_decode($myjson);
        if($myjson==null)
            return "No item to show";
        else
            return view('customer.ViewCart')->with('products',$myjson);
    }
    public function OrderCheckoutView()
    {
        if(!isset($_SESSION['customer_phone']))
        {
            return $this->LoginView();
        }
        $phone=$_SESSION['customer_phone'];
        $mycart="$phone"."_cart";
        $myjson=$_SESSION[$mycart];
        $myjson=json_decode($myjson);
        if($myjson==null)
            return "No item to show";
        else
            return view('customer.checkout')->with('products',$myjson);
    }

    public function OrderCheckoutControl()
    {
        $phone=$_SESSION['customer_phone'];
        $mycart="$phone"."_cart";
        $myjson=$_SESSION[$mycart];
        $products=json_decode($myjson);
        $arr=[];
        foreach($products as $p)
        {
            $arr[$p->id]=0;
        }
        foreach($products as $p)
        {
            $arr[$p->id]=$arr[$p->id]+1;
        }
        foreach($products as $p)
        {
            if($arr[$p->id]!=0)
            {
                $product=product::where('id','=',$p->id)->first();
                $product->quantity=max(0,$product->quantity-$arr[$p->id]);
                $product->save();
            }
        }
        $_SESSION[$mycart]=null;
        return $this->OrderView();
    }
}
