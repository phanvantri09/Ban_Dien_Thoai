<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Bill;
use Illuminate\Http\Request;
use App\Http\Requests\Bill\updateRequest;
use App\Http\Requests\Bill\createRequest;

class BillsController extends Controller
{
    public function list()
    {
        //trạng thái 1 là chưa chuyển
        // 2 là đã chuyển 
        $data = Bill::where('genaral','=',1)->orderBy('id','DESC')->search()->paginate(10);
        return view('admin.bill.list', compact('data'));
    }
    public function edit(Bill $id)
    {
        return view('admin.bill.edit', compact('id'));
    }
    public function add()
    {
        return view('admin.bill.add');
    }
    public function create(createRequest $request)
    {
        if(Bill::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'price'=>$request->price,
            'numberPhone'=>$request->numberPhone,
            'genaral'=>1,
            'address'=>"Số-Đường :".$request->sonha."/Xã :".$request->xa."/Huyện-Quận :".$request->huyen."/Tỉnh :".$request->tinh
        ]))
        {
            return redirect()->route('admin.listBill')->with('success','Thêm thành công.');
        }
    }
    public function delete(Bill $id)
    {   
        $id->delete();
        return redirect()->route('admin.listBill')->with('success','Đã xóa sản phẩm');   
    }
    public function update(updateRequest $request, Bill  $id)
    {
        //dd($request->all());
        if($request->xa == null && $request->sonha == null && $request->huyen == null && $request->tinh == null){
            //$request->address = "Số-Đường :".$request->sonha."/Xã :".$request->xa."/Huyện-Quận :".$request->huyen."/Tỉnh :".$request->tinh;
            $id->name = $request->name;
            $id->email = $request->email;
            $id->price = $request->price;
            $id->address = $request->address;
            $id->numberPhone = $request->numberPhone;
            $id->save();
            return redirect()->route('admin.listBill')->with('success',"Sửa thành công");
        }
        elseif($request->xa == null || $request->sonha == null || $request->huyen == null || $request->tinh == null)
        {
            return redirect()->route('admin.editBill', $id->id)->with('error',"Thiếu các thàn phần : Số nhà - đường - Thôn xã - thị trấn - quận huyện - tỉnh - thành phố");
        }
        else{
            $request->address = "Số-Đường :".$request->sonha."/Xã :".$request->xa."/Huyện-Quận :".$request->huyen."/Tỉnh :".$request->tinh;
            $id->name = $request->name;
            $id->email = $request->email;
            $id->price = $request->price;
            $id->address = $request->address;
            $id->numberPhone = $request->numberPhone;
            $id->save();
            return redirect()->route('admin.listBill')->with('success',"Sửa thành công");
        }
    }
    public function sanpham($id, $idUser){
        $data = Cart::where('idUser','=',$idUser)->where('genaral','=',2)->get();
        $products = Product::all();
        $total =0;
        foreach($data as $car){
                $product =Product::find($car->idProduct); 
                if(!empty($product)) 
                {
                    $total = $total + ($product->price * $car->amount);
                }
                else
                {
                    $total = 0;
                }
        }
        return view('admin.bill.cartsp', compact(['id', 'data', 'total','products']));
    }
    public function change($id){
        $bill = Bill::find($id);
        $cart = Cart::all();
        if($bill->idUser != null){
            foreach($cart as $car){
                if($car->idUser == $bill->idUser && $car->genaral==2){
                    $car->delete();
                }
            }
            $bill->genaral = 2;
            $bill->save();
            return redirect()->route('admin.listBill')->with('success','Đã xác nhận giao hàng');
        }
        else{
            $bill->delete();
            return redirect()->route('admin.listBill')->with('success','Đã xác nhận giao hàng');
        }
    }
    public function history(){
        $data = Bill::where('genaral','=',2)->orderBy('id','DESC')->search()->paginate(10);
        $total = 0;
        foreach($data as $dat){
            $total = $total + $dat->price;
        }
        return view('admin.bill.history', compact('data','total'));
    }
}
