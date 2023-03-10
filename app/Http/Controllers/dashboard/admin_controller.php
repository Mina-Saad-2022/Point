<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;


class admin_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $admin = User::all();
        return view('dashboard.admin.index',['users'=> $admin]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('dashboard.admin.create') ;

    }

    public function edit($id)
    {

         $user = User::find($id);
        return view('dashboard.admin.edit',compact('user'));
    }




    public function destroy(User $user)
    {
        return view('dashboard.admin.delete');
    }
}
