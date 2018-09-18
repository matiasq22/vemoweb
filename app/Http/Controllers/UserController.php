<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
class UserController extends Controller
{
    public function index(){

    $users = User::all();
    //dd($users);
      // $users = User::class->select('id');
      // $title = 'Listado de usuarios';
      //
      // return view('user s.index',compact('title', 'users'));

      $title = 'Listado de Usuarios';
       return view('users.index', compact('title','users'));
    }

    public function show(user $user){
      //$user = User::findOrFail($id);

      //return response()->view('errors.404', [], 404);

      return view('users.show', compact('user'));
    }

    public function create(){
      return view('users.create');
    }

    public function store(){
      return 'Processing information....';
    }
}
