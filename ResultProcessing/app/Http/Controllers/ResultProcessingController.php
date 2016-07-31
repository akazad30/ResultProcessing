<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\StudentReg;

use App\subject;
use Input;


use Illuminate\Http\Request;

class ResultProcessingController extends Controller {
	public function home()
	{
		return view('HomePage.home');
	}

	public function studentRegistriationForm()
	{
		return view('StudentForm.studentRegistriationForm');
	}

	public function studentRegistraionPost()
	{
		$student = new StudentReg;

		//$student->student_id = input::get('student_id');
		$student->surName = input::get('surName');
		$student->fullName = input::get('fullName');
		$student->email = input::get('email');
		$student->class = input::get('class');
		$student->session = input::get('session');
		//var_dump($a,$b,$c,$d,$e,$f);

		//var_dump($a);

		
		$res = $student->save();
		if($res)
		{
			return 'successfully inserted';
		}

		else
		{
			return redirect()->back();
		}
		
	}

	public function subjectRegistriationForm()
	{
		return view('SubjectRegistration.SubjectRegistration');
	}

	public function subjectPost()
	{
		$subject = new Subject;

		$subject->class = input::get('semester');
		$subject->subjectName = input::get('subject_id');

		$res = $subject->save();
		if($res)
			{ return redirect()->back()->with('successfully inserted');
			}
		else
		{
			return 'not inserted';
		}
	}

}
