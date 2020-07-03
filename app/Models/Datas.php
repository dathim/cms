<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Datas extends Model
{
	//App\Flight::firstOrCreate(['name' => 'Flight 10']);
	protected $fillable = [
		'name',
		'en_name',
		'pre_code',
		'item_code',
		'post_code'
	];
	public static function create_data($name="test", $enname="test2"){
		if (Datas::where('en_name', $enname)->get()->isEmpty()){
			//Create main records
			$datas = new Datas();
			$datas->name  = $name;
			$datas->en_name  = $enname;
			$datas->pre_code = "#start_datas";
			$datas->item_code = "#item_datas";
			$datas->post_code = "#end_datas";
			$datas->save();
			// create table

			// create fieldes function

			return true;
		} else {
			return false;
		}








	}
}
