<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index(){

        $data = ["students" => DB::table('students')->orderBy('created_at', 'desc')->paginate(10)];
        return view('students.index', $data);
    }

    public function create(){
        return view('students.create')->with('title', 'add student');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'age' => ['required'],
            'gender' => ['required'],
            'email' => ['required', Rule::unique('students', 'email')]
        ]);


        Students::create($validated);

        return redirect('/')->with('message', 'new student was added successfully!');
    }
}
