<?php

/*
 * Taken from
 * https://github.com/laravel/framework/blob/5.3/src/Illuminate/Auth/Console/stubs/make/controllers/HomeController.stub
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Response
     */
	 public function carlist()
    {
        return view('adminlte::carlist');
    }
	 public function update()
    {
        return view('adminlte::update');
    }
	 public function delete()
    {
        return view('adminlte::delete');
    }
	 public function adminhome()
    {
        return view('adminlte::adminhome');
    }
		 public function carlistsd()
    {
        return view('adminlte::carlistsd');
    }

}