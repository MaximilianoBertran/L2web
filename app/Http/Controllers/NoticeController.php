<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateNoticeRequest;
use App\Models\Notice;
use Illuminate\Http\Request;
 
class NoticeController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth')->except('show', 'index');
    }
    public function index(){
        return view('home', [
            'notices'=>Notice::latest()->paginate()//orderby('created_at', 'DESC')
        ]);
    }
    public function show(){

    }
    public function store(){

    }
    public function edit(){

    }
    public function update(){

    }
    public function destroy(){

    }
}
