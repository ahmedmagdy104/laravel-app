<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use mysql_xdevapi\Exception;
use Illuminate\Http\Request;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try
        {
            $categories = Category::all();
            return view('dashboard.category.index',compact('categories'));
        }catch(Exception $e)
        {
            return $e ;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try
        {
            return view('dashboard.category.newCategory');
        }
        catch(Exception $e)
        {
            return $e ;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        try
        {
            $category=Category::create([
                'name'=>$request->name,
            ])->save();
            toastr()->success('successful create category');
            return redirect()->route('category.index');
        }
        catch(Exception $e)
        {
            toastr()->error('error create category');
            return redirect()->route('category.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try
        {
            $category= Category::find($id);
            return view('dashboard.category.updateCategory',compact('category'));
        }
        catch(Exception $e)
        {
            return $e ;            
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request)
    {
        try
        {
            $category=Category::find($request->id);
            $category->update([
                'name'=> $request->name,
            ]);
            toastr()->success('Update Category Successfully');
            return redirect()->route('category.index');
        }
        catch(Exception $e)
        {
            toastr()->error('update Category error');
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        try
        {
            $category = Category::find($request->id);
            $category->delete();
            toastr()->success('Delete Category successful');
            return redirect()->route('category.index');
        }
        catch(Exception $e)
        {
            toastr()->error('Delete Caegory Error');
            return redirect()->route('category.index');
        }
    }
}
