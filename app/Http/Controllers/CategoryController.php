<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
   public function index()
   {
        return view('backend.category.index');
   }
   public function create()
   {
        return view('backend.category.create');
   }
   public function show($id)
   {
        return view('backend.category.show', ['id'=>$id]);
   }
}
