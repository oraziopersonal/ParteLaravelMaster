<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view ("students.index", compact ("students"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("student.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storedata = $request-> validate(
            ["nome"=>"required | max:255",
            "cognome"=>"required | max:255",
            "telefono"=>"required | max:255",
            "e-mail"=>"required | max:255"
            ]
        );
        $student=Student::create($storedata);
        return redirect ("students")->with ("Completatao","studente salvato correttamente");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = $student::find ($id);
        return view ('students.show')->with ('student', $students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = $student::find ($id);
        return view ('studentsedit')->with ('student', $students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = $student::find ($id);
        $input = $request->all();
        $student->update ($input);
        return redirect ("students")->with ("Completatao","studente aggiornato correttamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = $student::find ($id);
        $student->delete();
        return redirect ("students")->with ("Completatao","studente eliminato correttamente");
    }
}
