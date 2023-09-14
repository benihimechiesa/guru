<?php

namespace App\Http\Controllers;

use id;
use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $data = guru::all();
        return view('dataguru',compact('data'));
    }

    public function tambahguru(){
        return view('tambahguru');
    }

    public function inputguru(Request $request){
        guru::create([
            "kodeguru"=>$request->input('kodeguru'),
            "namaguru"=>$request->input('namaguru'),
            "mapel"=>$request->input('mapel'),
        ]);
        return redirect()->route('guru');
    }

    public function tampilguru($id){
        $data = guru::find($id);
        return view('tampilguru',compact('data'));
    }

    public function updateguru(Request $request,$id){
        guru::query()->where ('id',$id)->update([
        "kodeguru"=>$request->input('kodeguru'),
        "namaguru"=>$request->input('namaguru'),
        "mapel"=>$request->input('mapel'),
        ]);

        return redirect('/guru');  
    }

    public function hapusguru($id){
        guru::find($id)->delete();
        return redirect('/guru');
    }
    
}
