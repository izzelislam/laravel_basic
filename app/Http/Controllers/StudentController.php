<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Student;
use App\Model\Guardian;


class StudentController extends Controller
{
    function __construct()
    {
        $this->model=new student();
    }

    public function index()
    {
    	$students = $this->model->all();

    	return view('student.index',compact('students'));
    }

    public function create()
    {
        $guardians=$this->model->all();
    	return view('student.create', compact('guardians'));

    }

    public function store(Request $request)
    {
    	// $student=new student();
    	// $student->name=$request->name;
    	// $student->nik=$request->nik;
    	// $student->gender=$request->gender;
    	// $student->phone=$request->phone;
    	// $student->birth_date=$request->date;
    	// $student->address=$request->address;
    	// $student->is_parent=$request->is_parent;

    	// $student->save();
    	$this->model->create($request->all());
    	return redirect('/students');

    }

    public function edit($id)
    {
        $student=$this->model->find($id);
        return view('student.edit',compact('student'));
    }

    public function update(Request $request, $id)
    {
        $this->model->find($id)->update($request->all());
     
        return redirect('/students');
    }
    public function delete($id)
    {
        $this->model->find($id)->delete();
        return redirect('/students');
    }
}

