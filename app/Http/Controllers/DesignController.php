<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DesignRequest;
use App\Models\Design;


class DesignController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index()  {
        return view('Designs.Dashboard', ['data' => Design::select('id','name')->orderBy('name')->get('')]);
    }

    public function add() {
        return view('Designs.Add', ['data' => Design::select('id','name')->orderBy('name')->get()]);
    }   

    public function edit($id) {
        return view('Designs.Edit', ['data' => Design::select('id','name')->orderBy('name')->get(), 'edit' => Design::find($id)]);
    } 




    public function editsave($id, DesignRequest $req) {
        $designs = Design::find($id);
        $designs->name  = $req->input('name');
        if ($req->input('content')) {
            $designs->content = $req->input('content');
        } else {
            $designs->content =''; 
        }
        $designs->save();  
        return redirect()->route('design-edit',$designs->id)->with('success','Сохранено'); 
    }

    public function delete($id) {
        Design::find($id)->delete();
        return redirect()->route('design')->with('success','Сообщение было Удалено'); 
    }



    public function addsave(DesignRequest $req) {
        $designs = new Design();
		$designs->name  = $req->input('name');
		if ($req->input('content')) {
            $designs->content = $req->input('content');
        } else {
            $designs->content =''; 
        }
		$designs->save();  
		return redirect()->route('design-edit',$designs->id)->with('success','Домавлено'); 
    }
} 
