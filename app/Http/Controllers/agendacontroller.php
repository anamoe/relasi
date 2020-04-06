<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\agenda;

class agendacontroller extends Controller
{
    //
       //
    public function index() {

    return agenda::all();
    }

    public function create (Request $request){
    	$data = new agenda;
    	$data->nama = $request->input('nama');
    	$data->save();

    	return "Berhasil";
    }

    public function delete($id){
    	$data = agenda::find($id);
    	$data->delete();

    	return "Berhasil dihapus";
    }
}
