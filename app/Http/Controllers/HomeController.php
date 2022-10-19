<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Bill;
use App\Models\Blog;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Bill\createRequest;
class HomeController extends Controller
{
    public function shop($id){
        if(!empty(Auth::user()->id)){
            $amount = 0;
            $total =0;
            $idUser = Auth::user()->id;
            $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
            if($id==0){
                $data = Product::orderBy('id','DESC')->search()->paginate(20);
            }
            else{
                $data = Product::where('level','=',$id)->orderBy('id','DESC')->search()->paginate(4);
            }
            $data3 = Product::orderBy('id','DESC')->search()->paginate(4);
            $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
            $data2 = Product::all();
            foreach($cart as $car){
                if($car->idUser == $idUser && $car->genaral == 1){
                    $product =Product::find($car->idProduct); 
                    if(!empty($product)) 
                    {
                        $total = $total + ($product->price * $car->amount);
                        $amount++;
                    }
                    else
                    {
                        $total = 0;
                        $amount = 0;
                    }
                }
            }
            //return view('page.content.home', compact(['products']));
            return view('page.content.shop',compact(['data3','data','data1','data2', 'total','amount','id']))->with('success','Successfully');
            }
            else{
                $data2 = Product::all();
                $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
                if($id==0){
                    $data = Product::orderBy('id','DESC')->search()->paginate(20);
                    
                }
                else{
                    $data = Product::where('level','=',$id)->orderBy('id','DESC')->search()->paginate(20);
                }
                $data3 = Product::orderBy('id','DESC')->search()->paginate(4);
                return view('page.content.shop',compact(['data2','data','data1','id']))->with('success','Successfully');
            }
    }
    // 1 trái cây
    // 2 thịt
    // 3 cá
    // 4 đông lạnh
    // 5 gói hàng
    public function index()
    {
        if(!empty(Auth::user()->id)){
        $amount = 0;
        $total =0;
        $idUser = Auth::user()->id;
        $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        $data = Product::orderBy('id','DESC')->search()->paginate(30);
        $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
        $data2 = Product::all();
        foreach($cart as $car){
            if($car->idUser == $idUser && $car->genaral == 1){
                $product =Product::find($car->idProduct); 
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                    $amount++;
                }
                else
                {
                    $total = 0;
                    $amount = 0;
                }
            }
        }
        //return view('page.content.home', compact(['products']));
        return view('page.content.home',compact(['data','data1','data2', 'total','amount']))->with('success','Successfully');
        }
        else{
            $data2 = Product::all();
            $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
            $data = Product::orderBy('id','DESC')->search()->paginate(20);
            return view('page.content.home',compact(['data2','data','data1']))->with('success','Successfully');
        }
    }
    public function thit()
    {
        $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
        if(!empty(Auth::user()->id)){
        $amount = 0;
        $total =0;
        $idUser = Auth::user()->id;
        $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        $data = Product::where('level','=',1)->orderBy('id','DESC')->search()->paginate(20);
        foreach($cart as $car){
            if($car->idUser == $idUser && $car->genaral == 1){
                $product =Product::find($car->idProduct); 
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                    $amount++;
                }
                else
                {
                    $total = 0;
                    $amount = 0;
                }
            }
        }
        //return view('page.content.home', compact(['products']));
        return view('page.content.thit',compact(['data','data1', 'total','amount']))->with('success','Successfully');
        }
        else{
            $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
            $data = Product::where('level','=',1)->orderBy('id','DESC')->search()->paginate(20);
            return view('page.content.thit',compact(['data','data1']));
        }
    }
    public function haisan()
    {
        $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
        if(!empty(Auth::user()->id)){
        $amount = 0;
        $total =0;
        $idUser = Auth::user()->id;
        $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        $data = Product::where('level','=',2)->orderBy('id','DESC')->search()->paginate(20);
        foreach($cart as $car){
            if($car->idUser == $idUser && $car->genaral == 1){
                $product =Product::find($car->idProduct); 
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                    $amount++;
                }
                else
                {
                    $total = 0;
                    $amount = 0;
                }
            }
        }
        //return view('page.content.home', compact(['products']));
        return view('page.content.haisan',compact(['data','data1', 'total','amount']))->with('success','Successfully');
        }
        else{
            $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
            $data = Product::where('level','=',2)->orderBy('id','DESC')->search()->paginate(20);
            return view('page.content.haisan',compact(['data','data1']))->with('success','Successfully');
        }
    }
    public function donglanh()
    {
        $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
        if(!empty(Auth::user()->id)){
        $amount = 0;
        $total =0;
        $idUser = Auth::user()->id;
        $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        $data = Product::where('level','=',3)->orderBy('id','DESC')->search()->paginate(20);
        foreach($cart as $car){
            if($car->idUser == $idUser && $car->genaral == 1){
                $product =Product::find($car->idProduct); 
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                    $amount++;
                }
                else
                {
                    $total = 0;
                    $amount = 0;
                }
            }
        }
        //return view('page.content.home', compact(['products']));
        return view('page.content.donglanh',compact(['data', 'total','amount','data1']))->with('success','Successfully');
        }
        else{
            $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
            $data = Product::where('level','=',3)->orderBy('id','DESC')->search()->paginate(20);
            return view('page.content.donglanh',compact(['data','data1']));
        }
    }
    public function goihang()
    {
        $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
        if(!empty(Auth::user()->id)){
        $amount = 0;
        $total =0;
        $idUser = Auth::user()->id;
        $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        $data = Product::where('level','=',4)->orderBy('id','DESC')->search()->paginate(20);
        foreach($cart as $car){
            if($car->idUser == $idUser && $car->genaral == 1){
                $product =Product::find($car->idProduct); 
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                    $amount++;
                }
                else
                {
                    $total = 0;
                    $amount = 0;
                }
            }
        }
        //return view('page.content.home', compact(['products']));
        return view('page.content.goihang',compact(['data', 'total','amount','data1']));
        }
        else{
            $data1 = Blog::orderBy('id','DESC')->search()->paginate(6);
            $data = Product::where('level','=',4)->orderBy('id','DESC')->search()->paginate(20);
            return view('page.content.goihang',compact(['data','data1']));
        }
    }
    public function cartUser($idUser){
        $amount = 0;
        $total =0;
        $idUser = Auth::user()->id;
        $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        $products = Product::all();
        foreach($cart as $car){
            if($car->idUser == $idUser && $car->genaral == 1){
                $product =Product::find($car->idProduct);
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                    $amount++;
                }
                else
                {
                    $total = 0;
                    $amount = 0;
                }
            }
        }
        $data = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        return view('page.content.cart', compact('products','data', 'total','amount'))->with('success','Successfully');
    }
    // có 3 trạng thái giỏ hàng: 
    // 1 -> đã thêm vào giỏ chờ thanh toán
    // 2 -> đã thanh toán
    // 3 -> trả hàng
    public function addcart($idUser , $idProduct){
        $cardData = Cart::all();
        //dd($cardData);
        foreach($cardData as $key => $card)
        {
            $empryData =($card->idProduct == $idProduct) && ($card->idUser == $idUser) && ($card->genaral == 1) && ($card->amount >= 1);
            //dd($k);
            if($empryData == true)
            {
                $cardRowUpdate = Cart::find($card->id);
                $cardRowUpdate->amount = $card->amount + 1;
                $cardRowUpdate->save();
                return redirect()->route('home')->with('success','Successfully add card ');
            }
        }
        if(Cart::create([
            'idUser'=>$idUser,
            'idProduct'=>$idProduct,
            'genaral'=>1,
            'amount'=>1
        ])){
            return redirect()->route('home')->with('success','Successfully add card ');
        }
        else{
            return redirect()->route('home')->with('success','error add card ');
        }
    }
    public function themcart($idUser , $idProduct){
        $cardData = Cart::all();
        //dd($cardData);
        foreach($cardData as $key => $card)
        {
            $empryData =($card->idProduct == $idProduct) && ($card->idUser == $idUser) && ($card->genaral == 1) && ($card->amount >= 1);
            //dd($k);
            if($empryData == true)
            {
                $cardRowUpdate = Cart::find($card->id);
                $cardRowUpdate->amount = $card->amount + 1;
                $cardRowUpdate->save();
                return redirect()->route('home.cartUser',Auth::user()->id)->with('success','Successfully');
            }
        }
        if(Cart::create([
            'idUser'=>$idUser,
            'idProduct'=>$idProduct,
            'genaral'=>1,
            'amount'=>1
        ])){
            return redirect()->route('home')->with('success','Successfully add card ');
        }
        else{
            return redirect()->route('home')->with('success','error add card ');
        }
    }
    public function trucart($idUser , $idProduct){
        $cardData = Cart::all();
        //dd($cardData);
        foreach($cardData as $key => $card)
        {
            $empryData =($card->idProduct == $idProduct) && ($card->idUser == $idUser) && ($card->genaral == 1);
            //dd($k);
            if($empryData == true && ($card->amount >= 2))
            {
                $cardRowUpdate = Cart::find($card->id);
                $cardRowUpdate->amount = $card->amount - 1;
                $cardRowUpdate->save();
                return redirect()->route('home.cartUser',Auth::user()->id)->with('success','Successfully');
            }
            if($empryData == true && ($card->amount = 1)){
                $card->delete();
                return redirect()->route('home.cartUser',Auth::user()->id)->with('success','Successfully');
            }
        }
        if(Cart::create([
            'idUser'=>$idUser,
            'idProduct'=>$idProduct,
            'genaral'=>1,
            'amount'=>1
        ])){
            return redirect()->route('home')->with('success','Successfully add card ');
        }
        else{
            return redirect()->route('home')->with('success','error add card ');
        }
    }

    public function viewProduct($idProduct){
        $data =Product::find($idProduct);
        $amount = 0;
        $total =0;
        $idUser = Auth::user()->id;
        $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        //$data = Product::orderBy('id','DESC')->search()->paginate(20);
        foreach($cart as $car){
            if($car->idUser == $idUser && $car->genaral == 1){
                $product =Product::find($car->idProduct); 
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                    $amount++;
                }
                else
                {
                    $total = 0;
                    $amount = 0;
                }
            }
        }
        return view("page.content.product", compact('data', 'total','amount'));
    }
    public function delete(Cart $id)
    {   
        $id->delete();
        return redirect()->route('home.cartUser',Auth::user()->id)->with('success','Successfully');   
    }
    public function pay(){
        $amount = 0;
        $total =0;
        $idUser = Auth::user()->id;
        $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        $products = Product::all();
        foreach($cart as $car){
            if($car->idUser == $idUser && $car->genaral == 1){
                $product =Product::find($car->idProduct); 
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                    $amount++;
                }
                else
                {
                    $total = 0;
                    $amount = 0;
                }
            }
        }
        $data = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        return view("page.content.infobook", compact('data', 'total','amount', 'products'));
    }
    public function postthanhtoan(createRequest $request){
        // dd($request->all());
        if(Bill::create([
            'idUser'=>Auth::user()->id,
            'name'=>$request->name,
            'email'=>$request->email,
            'genaral'=>1,
            'price'=>$request->price,
            'numberPhone'=>$request->numberPhone,
            'address'=>"Số-Đường :".$request->sonha."/Xã :".$request->xa."/Huyện-Quận :".$request->huyen."/Tỉnh :".$request->tinh
        ]))
        {
            $cartUser = Cart::where('idUser', '=', Auth::user()->id)->where('genaral','=',1)->get();
            //dd($cartUser);
            foreach($cartUser as $car){
                //$pro = Product::where('id', '=', $car->idProduct)->get();
                $pro =Product::find($car->idProduct); 
                //dd($pro);
                $pro->amount = $pro->amount - $car->amount;
                $pro->save();
                $car->genaral = 2;
                $car->save();
            }
            return redirect()->route('home')->with('success','Successfully.');
        }
    }
    public function mycart(){
        $amount = 0;
        $total =0;
        $idUser = Auth::user()->id;
        $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        $products = Product::all();
        foreach($cart as $car){
            if($car->idUser == $idUser && $car->genaral == 1){
                $product =Product::find($car->idProduct);
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                    $amount++;
                }
                else
                {
                    $total = 0;
                    $amount = 0;
                }
            }
        }
        $bill = Bill::where('genaral','=',1)->where('idUser','=',$idUser)->get();
        $data = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        //dd(empty($data[0]->id));
        $datanext = Cart::where('idUser','=',$idUser)->where('genaral','=',2)->get();
        return view('page.content.checkout', compact('products','data', 'total','amount','datanext', 'bill'));
    }
    public function blog($idBlog){
        $data =Blog::find($idBlog);
        $amount = 0;
        $total =0;
        $idUser = Auth::user()->id;
        $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        //$data = Product::orderBy('id','DESC')->search()->paginate(20);
        foreach($cart as $car){
            if($car->idUser == $idUser && $car->genaral == 1){
                $product =Product::find($car->idProduct); 
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                    $amount++;
                }
                else
                {
                    $total = 0;
                    $amount = 0;
                }
            }
        }
        return view("page.content.blog", compact('data', 'total','amount'));
    }
    public function suatan(){
        $amount = 0;
        $total =0;
        $idUser = Auth::user()->id;
        $cart = Cart::where('idUser','=',$idUser)->where('genaral','=',1)->get();
        //$data = Product::orderBy('id','DESC')->search()->paginate(20);
        foreach($cart as $car){
            if($car->idUser == $idUser && $car->genaral == 1){
                $product =Product::find($car->idProduct); 
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                    $amount++;
                }
                else
                {
                    $total = 0;
                    $amount = 0;
                }
            }
        }
        return view("page.content.suatan", compact( 'total','amount'));
    }
}
