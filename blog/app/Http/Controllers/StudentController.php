<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=Students::orderBy('id','asc')->paginate(3);
        return view('Student.index',compact('students'));
    }
    // data view 
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students=Students::all();
        return view('Student.create',compact('students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //form validation
        $request->validate([
        'student_id' => 'required',
        'student_name' => 'required',
        'student_address' => 'required|max:255',
        'student_email' => 'required|unique:students',
        'student_mobile' => 'required|unique:students',
    ]);
        $data_add=$request->all();
        Students::create($data_add);
        return redirect('/students')->with('success', 'Data inserted successfully');
        // $data_add=$request->all();
        // Students::create($data_add);
        // return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $data_show=Students::find($id);
       return view('Student.edit',compact('data_show'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $update, $id)
    {
        $data=Students::find($id);
        $update_data=$update->all();
        $data->update($update_data);
        return redirect('/students')->with('success','Student information update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data_show=Students::find($id);
        $data_show->destroy();
        //return back dile delete hoye oi page thakbe
        return back()->with('success',"Delete this data");
        // redirect je page debo delete hoye se page a jabe
        return redirect('/students')->with('success',"Delete this data");
    }
}
