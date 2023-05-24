<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Description;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      $category = Category::all();
      return view('category/index',['category'=>$category]);
       // $category = new Category();
       // $cat = $category->ambil();
        //foreach ($cat as $ct) {
          //  echo "Ada kategori {$ct} <br>";
        //}
       // return view('category/index',['cat'=>$cat]);
    }
    public function show($id)
    {
        $category = Category::find($id);
        return view('category.show',['category'=>$category]);
    }

    public function create()
    {
        return view('category.create');
    }

    public function form()
    {
      return view('category/update');
    }
    
    public function edit($id)
    {
        $category = Category::find($id);
        return view('category.edit',['category'=>$category]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required',
            'description' => 'required'
        ]);
        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->description = $request->description;
        $category->save();


        return redirect()->route('category.index')->with('success','Data kategori sudah berhasil diubah!'); 
      }
      public function store(Request $request)
      {
          $this->validate($request, [
              'file_cover' => 'required|file|image|mimes:jpeg,png,jpg',
              'category_name' => 'required',
              'description' => 'required',
          ]);
          $category = new Category();
          $file = $request->file('file_cover');
  
  
          $file_name = time()."_".$file->getClientOriginalName();
          $destination = 'cover';
          $file->move($destination,$file_name);
  
  
          $category->category_name = $request->category_name;
          $category->description = $request->description;
          $category->file_cover = $file_name;
          $category->save();
          return redirect()->route('category.index')->with('success','Data kategori sudah berhasil ditambahkan!');
      }
  
      public function delete($id)
      {
          $category = Category::find($id);
          $category->delete();
          return redirect()->route('category.index')->with('success','Data kategori sudah berhasil dihapus!');
      }
  
    // public function update()
    // {
    //     Category::create([
    //         'title' => request('title'),
    //         'description' => request('description'),
    //     ]);
 
    //     return redirect()->back();
    // }
}
