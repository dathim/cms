<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
// 'password' => Hash::make($data['password']),


class UsersController extends Controller
{
	public function __construct() {
		$this->middleware('auth');
	}

	public function index()  {
		/*echo Auth::user()->name;
		echo Auth::user()->id;
		echo Auth::user()->rules;
		*/
		return view('Users.Dashboard', ['data' => Users::select('id','name')->orderBy('name')->get('')]);
	}

	public function add() {
		return view('Users.Add', ['data' => Users::select('id','name')->orderBy('name')->get()]);
	}   

	public function edit($id) {
		return view('Users.Edit', ['data' => Users::select('id','name')->orderBy('name')->get(), 'edit' => Users::find($id)]);
	} 




	public function editsave($id, UserRequest $req) {
		$users = Users::find($id);
		$users->name  = $req->input('name');
		$users->email  = $req->input('email');
		if ($req->input('password1') == $req->input('password2')){
			$users->password  = Hash::make($req->input('password1'));
		} 
		$users->rules  = $req->input('rules');
		$users->save();  
		return redirect()->route('user-edit',$users->id)->with('success','Сохранено'); 
	}

	public function delete($id) {
		if (Auth::user()->id != $id){
			Users::find($id)->delete();
			return redirect()->route('users')->with('success','Сообщение было Удалено'); 
		}
		
	}



	public function addsave(UserRequest $req) {
		if ($req->input('password1') == $req->input('password2')){
		 	$users = new Users();
			$users->name  = $req->input('name');
			$users->email  = $req->input('email');
			$users->password  = Hash::make($req->input('password1'));
			$users->name  = $req->input('name');
			$users->rules  = $req->input('rules');
			$users->save();  
			return redirect()->route('user-edit',$users->id)->with('success','Добавлено'); 
		} else {
			return redirect()->route('user-edit',$users->id)->with('success','Ошибка'); 	
		}
		
	}
} 
