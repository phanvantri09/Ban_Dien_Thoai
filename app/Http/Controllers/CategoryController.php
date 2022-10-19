<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Category\updateRequest;
use App\Http\Requests\Category\createRequest;
class CategoryController extends Controller
{
    public function list()
    {
        $data = Category::orderBy('id','DESC')->search()->paginate(10);
        return view('admin.Category.list', compact('data'));
    }
    public function edit(Category $id)
    {
        return view('admin.Category.edit', compact('id'));
    }
    public function add()
    {
        return view('admin.Category.add');
    }
    public function create(createRequest $request)
    {
        
        if(Category::create([
            'name'=>$request->name,
        ]))
        {
            return redirect()->route('admin.listCategory')->with('success','successfully Add.');
        }
    }
    
    public function delete(Category $id)
    {   
        $id->delete();
        return redirect()->route('admin.listCategory')->with('success','Đã xóa sản phẩm');   
    }
    public function update(updateRequest $request, Category  $id)
    {
        
        //dd([$request->img3, $request->img2, $request->img1]);
        $id->name = $request->name;
        $id->save();
        //dd($request->only('name','amount','general','price','img1','img2','img3','level'));
        //$id->update($request->only('name','amount','general','price','img1','img2','img3','level'));
         return redirect()->route('admin.listCategory')->with('success',"Sửa thành công");
    }
}
