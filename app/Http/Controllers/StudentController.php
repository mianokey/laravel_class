<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students= Student::all();

        return view('index',['students'=>@$students]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $student=[
            ['name'=>'mercy','email'=>'mcy@g.com','contact'=>'12345678'],
            ['name'=>'miano','email'=>'miano@g.com','contact'=>'123489898'],
            ['name'=>'jack','email'=>'jack@g.com','contact'=>'1268778'],
            ['name'=>'bilha','email'=>'bilha@g.com','contact'=>'90885678']
        ];

        $len=count($student);
        
        for ($i=0; $i <$len ; $i++) { 
            $stude= new Student();
            $stude->name=$student[$i]['name'];
            $stude->email=$student[$i]['email'];
            $stude->contact=$student[$i]['contact'];
            $stude->save();
            
        }
        
       

        
        return "success";

        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
}
