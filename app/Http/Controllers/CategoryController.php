<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function storeCategory(Request $request) {
        $cat = new Category();
        $cat->name = $request->name;
        $cat->code = $request->code;
        $cat->description = $request->description;
        $cat->active = $request->active;
        $cat->save();

        return $cat;
    }
}
