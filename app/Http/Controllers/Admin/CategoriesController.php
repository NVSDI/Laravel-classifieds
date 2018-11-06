<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use App\Http\Requests\CategoryFormRequest;
use App\Category;


class CategoriesController extends Controller
{
    
    public function create()
    {    
        // re:turn view('categories.create');
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryFormRequest  $request)
    {
        
        $categoryObj = new Category( array(
            'title' => $request->get('title'),
            'description' => $request->get('description'),
            'img' => $request->get('img')
        ));

        $categoryObj->save();

        // ret:urn redirect('/categories/create')->with('status', 'new category has been created! ');
        return redirect('/admin/createnew/category')->with('status', 'new category has been created! ');
    }


	public function show($id)
    {
        $category = Category::whereId($id)->firstOrFail();

        $adverts = $category->adverts()->get(); // find adverts which belong to this CATEGORY


        // return view('categories.show', compact('adverts') );
        return view('backend.categories.show', compact(['adverts', 'category']) );
        
        
        /* 
        $data = array(
            'adverts' => $adverts, 
            'category' => $category 
        );
        return view('categories.show')->with($data);
        */
    }

}
