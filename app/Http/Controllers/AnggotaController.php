<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota_model;

class AnggotaController extends Controller
{
    public function index (){
        // return ("Testing Katalog");
        $myanggota = new Anggota_model();
         $anggota = $myanggota->tampil_anggota();
         
         $data = array('anggota' => $anggota);
         return view('anggota/index', $data);
     }
     public function tambah(){
         // return ('Testing');
         return view('anggota/tambah');
      }
  
      public function tambah_proses(Request $request){
          // return ('Testing Proses');
          $query = \DB::table('anggota')
          ->insert([
            'nama_anggota' => $request->nama_anggota,
            'alamat'  =>  $request->alamat,
            'no_hp'  =>  $request->no_hp,
              
          ]);
          return redirect('anggota');
      }
      public function edit_yosi($id_anggota){
         // return ('Testing');
         $views_master_yosi = \DB::table('anggota')->where('id_anggota', $id_anggota)->first();
         //dd($views_master);
         $data = array('anggota => $anggota);
         return view('anggota/edit', $id_anggota);
     }
 
     public function edit_proses_yosi(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('anggota')->where('id_perkiraan',$request->id_perkiraan)
         ->update([
            'nama_anggota' => $request->nama_anggota,
            'alamat'  =>  $request->alamat,
            'no_hp'  =>  $request->no_hp,
              ]);
         return redirect('views_master_yosi');
     }
 
     public function delete_yosi ($id_perkiraan){
         $query = \DB::table('anggota')->where('id_perkiraan',$id_perkiraan)->delete();
         return redirect('views_master_yosi');
     }
 }
 