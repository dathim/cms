<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages;
use App\Models\Design;


class SiteController extends Controller
{

	public function index() {
		//seach curent page
		$all_tree =  Pages::select('id','name', 'parent','path')->get();
		$request_path = explode("/",$str = ltrim($_SERVER['REQUEST_URI'],"/"));


		foreach ($all_tree as $a) {
			if ($a->parent == 0){
				$memory_id = $a->id;
				break;
			}
		}

		if ($_SERVER['REQUEST_URI'] != "/"){
			foreach ($request_path as $r) {
				$preside_id = $memory_id;
				foreach ($all_tree as $a) {
					if (($a->path == $r) && ($memory_id == $a->parent)){
						$memory_id = $a->id;
						break;
					} 
				}
				if ($memory_id == $preside_id){
				//print 404 page
					foreach ($all_tree as $a) {
						if ($a->name == "404"){
							$memory_id = $a->id;
						}
					}
					break;
				}
			}
		} 



		echo $memory_id;
		$page = Pages::find($memory_id);
		$design = Design::find($page->design);

	//search @pagecontent
		$design->content = str_replace("@pagecontent",$page->content, $design->content); 
		$design->content = str_replace("@pagecode",eval('?>'.$page->code), $design->content); 

 // print curent page
		echo $design->content;
	}

}
