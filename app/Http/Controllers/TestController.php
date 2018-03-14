<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function template1()
{
	return view('test1');
}

public function template2()
{
	return view('test2');
}

public function template3()
{
	return view('test3');
}

public function template4()
{
	return view('test4');
}

public function template5()
{
	return view('test5');
}
}
