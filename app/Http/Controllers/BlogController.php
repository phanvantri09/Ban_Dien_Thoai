<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Requests\Blog\updateRequest;
use App\Http\Requests\Blog\createRequest;

class BlogController extends Controller
{
    //
    public function list()
    {
        $data = Blog::orderBy('id','DESC')->search()->paginate(10);
        return view('admin.blog.list', compact('data'));
    }
    public function edit(Blog $id)
    {
        return view('admin.blog.edit', compact('id'));
    }
    public function add()
    {
        return view('admin.blog.add');
    }
    public function create(createRequest $request)
    {
        //dd($request->all());
        if($request->has('img'))
        {
            $img1 = $request->img;
            $extension = $request->img->extension();
            $img1Name = time().'-1.'.$extension;
            $img1->move(public_path('imgUploads'), $img1Name);
            $request->img = $img1Name;
        }
        if(Blog::create([
            'name'=>$request->name,
            'content'=>$request->content,
            'img'=>$request->img
        ]))
        {
            return redirect()->route('admin.listBlog')->with('success','successfully Add.');
        }
    }
    
    public function delete(Blog $id)
    {   
        $id->delete();
        return redirect()->route('admin.listBlog')->with('success','Đã xóa sản phẩm');   
    }
    public function update(updateRequest $request, Blog  $id)
    {
        if($request->has('img'))
        {
            $img = $request->img;
            $extension = $request->img->extension();
            $imgName = time().'-1.'.$extension;
            $img->move(public_path('imgUploads'), $imgName);
            $request->img = $imgName;
        }
        else{
            $request->img= $request->img11;
        }
        $id->name = $request->name;
        $id->content = $request->content;
        $id->img = $request->img;
        $id->save();
         return redirect()->route('admin.listBlog')->with('success',"Sửa thành công");
    }
}
