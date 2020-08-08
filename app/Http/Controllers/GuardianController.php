<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Guardian;

class GuardianController extends Controller
{
    function __construct()
    {
        $this->model=new Guardian();
    }

    public function index()
    {
    	$guardians = $this->model->orderBy('created_at','desc')->get();

    	return view('guardian.index',compact('guardians'));
    }

    public function create()
    {
    	return view('guardian.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'nik'=>'required | max: 10 | min:3',
            'gender'=>'required',
            'phone'=>'required',
            'birth_date'=>'required',
            'address'=>'required',
            'is_parent'=>'required',

        ]);
    	// $guar=new Guardian();
    	// $guar->name=$request->name;
    	// $guar->nik=$request->nik;
    	// $guar->gender=$request->gender;
    	// $guar->phone=$request->phone;
    	// $guar->birth_date=$request->date;
    	// $guar->address=$request->address;
    	// $guar->is_parent=$request->is_parent;

    	// $guar->save();
    	$this->model->create($request->all());
    	return redirect('/guardians');

    }

    public function edit($id)
    {

        $guardian=$this->model->find($id);
        return view('guardian.edit',compact('guardian'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'nik'=>'required | max: 10 | min:3',
            'gender'=>'required',
            'phone'=>'required',
            'birth_date'=>'required',
            'address'=>'required',
            'is_parent'=>'required',

        ]);
        
        $this->model->find($id)->update($request->all());
        return redirect('/guardians');
    }
    public function delete($id)
    {
        $this->model->find($id)->delete();
        return redirect('/guardians');
    }
}
