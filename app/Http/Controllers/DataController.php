<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DatasRequest;
use App\Models\Pages;
use App\Models\Datas;
use App\Models\Datafields;

class DataController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{

		//DB::statement('ALTER TABLE projects AUTO_INCREMENT=123');

		return view('Datas.Dashboard', [
			'tables_list' => Datas::select('id','name')->get(), 
			'id'=> 0]);
	}

	public function add_table(){
		return view('Datas.Add', [
			'tables_list' => Datas::select('id','name')->get(), 
			'id'=> 0]);
	}

	public function add_table_save(DatasRequest $req){
		// 
		//use model
		//  unique enname 
		//  add tags
		//  create table
		//  create datafields
		//  
		//  
		//  
		//  
		//  
		//  
		//  
		if (Datas::create_data($req->input('name'),$req->input('en_name'))){
			echo "SUCCESS";
		}
		// $datas = new Datas();
		// $datas->name  = $req->input('name');
		// $datas->en_name  = $req->input('en_name');
		// $datas->pre_code = "#start_datas";
		// $datas->item_code = "#item_datas";
		// $datas->post_code = "#end_datas";
		// $datas->save();   
		return view('Datas.Dashboard', [
			'tables_list' => Datas::select('id','name')->get(), 
			'id'=> 0]);
	}

	public function brows($id){
		return view('Datas.Edit', [
			'tables_list' => Datas::select('id','name')->get(), 
			'curent_data' => Datas::find($id),
			'id'=> $id]);
	}
}

