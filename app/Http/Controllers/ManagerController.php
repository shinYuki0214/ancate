<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class ManagerController extends Controller
{
    //
    public function __construct()
    {
       $this->middleware('auth');
    }
    public function index(){
       $datas = Form::all();
       return view('manager.index', compact('datas'));
    }
}
