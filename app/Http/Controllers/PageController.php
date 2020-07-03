<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use App\Models\Pages;
use App\Models\Design;

//фцвфцв
class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function index()
    {
    	$mainpage = Pages::where('parent', 0)->get('id')->first();
    	if ($mainpage === null) {
   			Pages::insert([
   				'name' => 'Main page', 
   				'parent' => 0,
   				'en_menu' => 1,
   				'en_show' => 1,
   				'use_as_data' => 0
			]);
		}

	  	return view('Pages.Dashboard', [
            'pagetree' => Pages::select('id','name', 'parent')->get(), 
            'id'=> 0]);
    }

    public function add($id)
    {
       	return view('Pages.Add', [
            'pagetree' => Pages::select('id','name', 'parent')->get(),
       		'designs' => Design::select('id','name')->get(),
            'id'=> $id]);
    }

    public function edit($id)    {
        return view('Pages.Edit', [
            'pagetree' => Pages::select('id','name', 'parent')->get(), 
            'edit' => Pages::find($id),
            'id'=> $id]);
    }


    public function delete($id)    {
    	$chek_main = Pages::find($id);
        if ($chek_main->parent != 0) {
        	Pages::find($id)->delete();
        	return redirect()->route('page')->with('success','Удалено'); 
    	} else {
			return redirect()->route('page')->with('success','Нельзя удалить главную страницу'); 
    	}
        
    }


    public function settings($id)    {
        return view('Pages.Settings', [
            'pagetree' => Pages::select('id','name', 'parent')->get(),
			'edit' => Pages::find($id),
			'designs' => Design::select('id','name')->get(),
            'id'=> $id]);
    }

    public function settings_save($id, PagesRequest $req){
		$pages = Pages::find($id);
		$pages->name  = $req->input('name');
		$pages->path  = $req->input('path');


		if ($req->input('title')) {
            $pages->title  = $req->input('title');
        } 

        if ($req->input('descr')) {
            $pages->descr  = $req->input('descr');
        } 

		if ($req->input('parent')) {
            $pages->parent  = $req->input('parent');
        } else {
            $pages->parent  =''; 
        }


        if ($req->input('en_menu')) {
            $pages->en_menu  = $req->input('en_menu');
        } else {
            $pages->en_menu  = 0; 
        }

        if ($req->input('en_show')) {
            $pages->en_show  = $req->input('en_show');
        } else {
            $pages->en_show  = 0; 
        }

        if ($req->input('use_as_data')) {
            $pages->use_as_data  = $req->input('use_as_data');
        } else {
            $pages->use_as_data  = 0; 
        }

		$pages->design  = $req->input('design');
		$pages->subdesign  = $req->input('subdesign');
		$pages->name  = $req->input('name');
		$pages->save();  
		return redirect()->route('page-settings',$pages->id)->with('success','Сохранено'); 

    }



    public function addsave(PagesRequest $req) {
       	$pages = Pages::find($id);
		$pages->name  = $req->input('name');
		$pages->path  = $req->input('path');


		if ($req->input('title')) {
            $pages->title  = $req->input('title');
        } 

        if ($req->input('descr')) {
            $pages->descr  = $req->input('descr');
        } 

		if ($req->input('parent')) {
            $pages->parent  = $req->input('parent');
        } else {
            $pages->parent  =''; 
        }


        if ($req->input('en_menu')) {
            $pages->en_menu  = $req->input('en_menu');
        } else {
            $pages->en_menu  = 0; 
        }

        if ($req->input('en_show')) {
            $pages->en_show  = $req->input('en_show');
        } else {
            $pages->en_show  = 0; 
        }

        if ($req->input('use_as_data')) {
            $pages->use_as_data  = $req->input('use_as_data');
        } else {
            $pages->use_as_data  = 0; 
        }

		$pages->design  = $req->input('design');
		$pages->subdesign  = $req->input('subdesign');
		$pages->name  = $req->input('name');
		$pages->save();  
		return redirect()->route('page-settings',$pages->id)->with('success','Сохранено'); 
    }


    public function editsave($id, Request $req)
    {
    	$pages = Pages::find($id);
		$pages->content  = $req->input('content');
		$pages->code  = $req->input('code');
		$pages->save();   
        return redirect()->route('page-edit',$pages->id)->with('success','Сохранено'); 
    }

}

