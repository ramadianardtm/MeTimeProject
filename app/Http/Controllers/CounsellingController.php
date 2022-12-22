<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Choose;
use App\Models\Consult;
use App\Models\CreateConsult;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CounsellingController extends Controller
{
    public function index()
    {
        $counselling = Choose::all();

        return view('counselling.counselling')->with('counselling',$counselling)->with('title','counselling');

    }

    /**
     * 
     * @return \Illuminate\Http\Response
     */


    public function getdokter($id){
        $consult = Choose::find($id);

        return view('counselling.choose')->with('consult',$consult)->with('title','select schedule');
    }
    public function createa(Consult $consult)
    {
        return view('counselling.choose', [
            "title" => "select schedule",
            "choose" => $consult,
            
        ]);

        return redirect('/user.choose')->with('status', 'Jadwal Ditambahkan');

    }
    public function store(Request $request)
     {
         $validatedData = $request->validate([
             'dokter' => 'required',
             'tanggal' => 'required',
             'waktu' => 'required',
             'tempat' => 'required',
             'namars' => 'required'
         ]);
         
         $create = new CreateConsult();
         $create->dokter = $request->dokter;
         $create->user_id = Auth::user()->id;
         $create->namars = $request->namars;
         $create->tanggal = $request->tanggal;
         $create->waktu = $request->waktu;
         $create->tempat = $request->tempat;

         $create->save();

         return redirect('/profile')->with('success', 'Registration Successful, Please Login!');
     
     }
}
