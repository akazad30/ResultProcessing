<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class resultmarking extends Model {

	protected $table ='resultmarkings';
	protected $fillable = ['class','subject','session','fullName','test1','test2','test3','exam'];

}
