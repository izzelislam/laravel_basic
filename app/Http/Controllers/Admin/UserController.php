<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        return view('Admin.index');
    }

 
    public function create()
    {
        dd('ini create');
    }

    public function store(Request $request)
    {
        dd('ini store');
    }


    public function show($id)
    {
        dd('ini show');
    }


    public function edit($id)
    {
        dd('ini edit');
    }

    public function update(Request $request, $id)
    {
        dd('ini update');
    }


    public function destroy($id)
    {
        dd('ini destroy');
    }
}
