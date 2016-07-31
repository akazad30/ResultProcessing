<?php namespace App\Http\Controllers;
use DB;
use Input;
use App\StudentReg;
use App\resultMarking;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ResultComputing extends Controller {

	public function resultCompute(Request $request)
	{
		$class = $request['semester'];
		$data = DB::table('student_regs')->select('fullName')->where('class',$class)->get();
		
		var_dump($data);

		//return view('ResultComputing.preResultSheet',compact('data'));

		//return view('ResultComputing.rc',compact('data'));

	}


	public function getClass()
	{
		return view('inputClass');
	}

	public function postClass(Request $request)
	{
			$class = $request['class'];
			$data = DB::table('student_regs')->select('fullName')->where('class',$class)->get();
		
			var_dump($data);

			return view('ResultComputing.rc',compact('data','class'));
	}


	public function postResult()
	{
		$result = new resultMarking;

		$result->class = input::get('semester');
		$result->subject = input::get('subject_id');
		$result->session = input::get('session');
		$result->fullName = input::get('student');
		$result->test1 = input::get('test1');
		$result->test2 = input::get('test2');
		$result->test3 = input::get('test3');
		$result->exam = input::get('exam');
		//var_dump($result);

		$res = $result->save();

		if($res)
		{
			return 'successfully inserted';
		}
		else
		{
			return 'Something is Missing Azad :)';
		}

	}

	public function indexResult()
	{
		return view('result.indexResult');
	}

	public function resultDetail(Request $request)
	{

			$class = $request['class'];
			$session = $request['session'];

			$data = DB::table('student_regs')->select('fullName')->where('class',$class)->where('session',$session)->get();
		
		
			//var_dump($data);

			return view('result.showDetail',compact('class','session','data'));
	}


	public function resultDetailWithTotal(Request $request)
	{
		$class = $request['class'];
		$session = $request['session'];
		$student = $request['student'];

		$data = DB::table('resultmarkings')->select('subject','test1','test2','test3','exam')
							->where('fullName',$student)
							->where('session',$session)
							->where('class',$class)->get();



		//var_dump($sum);

		   return view('result.DetailWithTotal',compact('class','session','student','data'));
		
	}



	public function finalResultSheet()
	{
		return view('result.finalResultSheetIndividual');
	}

	public function postFinalResult(Request $request)
	{

		$class = $request['class'];
		$session = $request['session'];
		$student = $request['student'];

		$total_subject = count(DB::table('resultmarkings')->groupBy('subject')
							->where('fullName',$student)
							->where('session',$session)
							->where('class',$class)->get());

							

		$data = DB::table('resultmarkings')->select('subject','test1','test2','test3','exam')
							->where('fullName',$student)
							->where('session',$session)
							->where('class',$class)->get();



		//var_dump($total_subject);

		

		return view('result.GetYourResultMan',compact('class','session','student','total_subject','data'));

	}

}
