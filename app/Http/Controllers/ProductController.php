<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Requests\Product\updateRequest;
use App\Http\Requests\Product\createRequest;
class ProductController extends Controller
{
    //
    public function list()
    {
        $data = Product::orderBy('id','DESC')->search()->paginate(10);
        return view('admin.product.list', compact('data'));
    }
    public function edit(Product $id)
    {
        return view('admin.product.edit', compact('id'));
    }
    public function add()
    {
        return view('admin.product.add');
    }
    public function create(createRequest $request)
    {
        if($request->has('img1'))
        {
            $img1 = $request->img1;
            $extension = $request->img1->extension();
            $img1Name = time().'-1.'.$extension;
            $img1->move(public_path('imgUploads'), $img1Name);
            $request->img1 = $img1Name;
        }
        if($request->has('img2'))
        {
            $img2 = $request->img2;
            $extension2 = $request->img2->extension();
            $img2Name = time().'-2.'.$extension2;
            $img2->move(public_path('imgUploads'), $img2Name);
            $request->img2 = $img2Name;
        }
        if($request->has('img3'))
        {
            $img3 = $request->img3;
            $extension3 = $request->img3->extension();
            $img3Name = time().'-3.'.$extension3;
            $img3->move(public_path('imgUploads'), $img3Name);
            $request->img3 = $img3Name;
        }
        if(Product::create([
            'name'=>$request->name,
            'amount'=>$request->amount,
            'general'=>$request->general,
            'price'=>$request->price,
            'level'=>$request->level,
            'img1'=>$request->img1,
            'img2'=>$request->img2,
            'img3'=>$request->img3
        ]))
        {
            return redirect()->route('admin.listProduct')->with('success','successfully Add.');
        }
    }
    
    public function delete(Product $id)
    {   
        $id->delete();
        return redirect()->route('admin.listProduct')->with('success','Đã xóa sản phẩm');   
    }
    public function update(updateRequest $request, Product  $id)
    {
        if($request->has('img1'))
        {
            $img1 = $request->img1;
            $extension = $request->img1->extension();
            $img1Name = time().'-1.'.$extension;
            $img1->move(public_path('imgUploads'), $img1Name);
            $request->img1 = $img1Name;
        }
        else{
            $request->img1= $request->img11;
        }
        if($request->has('img2'))
        {
            $img2 = $request->img2;
            $extension2 = $request->img2->extension();
            $img2Name = time().'-2.'.$extension2;
            $img2->move(public_path('imgUploads'), $img2Name);
            $request->img2 = $img2Name;
        }
        else{
            $request->img2= $request->img12;
        }
        if($request->has('img3'))
        {
            $img3 = $request->img3;
            $extension3 = $request->img3->extension();
            $img3Name = time().'-3.'.$extension3;
            $img3->move(public_path('imgUploads'), $img3Name);
            $request->img3 = $img3Name;
        }
        else{
            $request->img3= $request->img13;
        }
        //dd([$request->img3, $request->img2, $request->img1]);
        $id->name = $request->name;
        $id->amount = $request->amount;
        $id->general = $request->general;
        $id->price = $request->price;
        $id->level = $request->level;
        $id->img1 = $request->img1;
        $id->img2 = $request->img2;
        $id->img3 = $request->img3;
        $id->save();
        //dd($request->only('name','amount','general','price','img1','img2','img3','level'));
        //$id->update($request->only('name','amount','general','price','img1','img2','img3','level'));
         return redirect()->route('admin.listProduct')->with('success',"Sửa thành công");
    }
}
