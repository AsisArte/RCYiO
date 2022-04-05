<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubmitRequest;
use Illuminate\Http\Request;
use App\Models\SubmitModel;

class SubmitController extends Controller
{
    public  function submit(SubmitRequest $req){
     
        $form = new SubmitModel();
        $form->name = $req->user()->name;
        $form->fio = $req->input('fio');
        $form->email = $req->input('email');
        $form->org = $req->input('org');
        $form->obr = $req->input('obr');

        $form->save();

        return redirect()->route('dashboard');
    }

    public  function delete($id){
     
        SubmitModel::find($id)->delete();
        return redirect()->route('dashboard');
     }

    public  function show(SubmitRequest $req){
        $form = new SubmitModel();
        return view('dashboard', ['data' => $form->orderBy('updated_at', 'desc')->where( 'name', $req->user()->name)->get()]);
    }
}
