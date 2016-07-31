<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentReg extends Model {

	protected $table = 'student_regs';
	protected $fillable = ['surName','fullName','email','class','session'];
}
