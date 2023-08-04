<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Database\Seeder;

class TestController extends Controller
{
    function index()
    {
        return student::all();
    }
    function store(Request $request)
    {


        $company = $request->company;
        $browser = $request->browser;
        $product = new student;
        $product->company = $request->company;
        $product->product = $request->browser;
        $product->save();

        return student::all();
    }


    function update(Request $request, $id)
    {
        $product = student::find($id);

        $product->product = $request->product;
        $product->save();

        return student::all();
    }
}
