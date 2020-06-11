<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Subject;
use Route;
use Validator;
use Storage;
use Input;

class SubjectController extends Controller
{
 	// public function index()
	// {				
	// 	$subjects = Subject::all();			
	// 	return view('subject.index', ['subjects' => $subjects ]);  				
	// }

	public function create(){
		$subjects = Subject::all();	
		return view('subject.create', ['subjects' => $subjects ]);
	}

	public function store(Request $request)
	{	
		$subject = new Subject; 		
		$validatedData = $request->validate([			
			'name' => 'required|max:100',						
		]);
		$subject->name = request('name');			
		$subject->save();
		$subjects = Subject::all();				
		return redirect()->route('createSubject');
	}
}
