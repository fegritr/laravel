<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Data;


class MainController extends Controller
{
    
    public function index(){

        $data = Data::all();        
        return view('welcome', ['datas'=>$data]);
        
    }

    public function create(){
        return view('create');
    }

    public function insert(Request $request){

        $this->validate($request,[
            'item' => 'required',
            'count'=> 'required',
            'price'=> 'required',
            'paid'=> 'required'
        ]);
        
        Data::create([
            'item'=> $request->item,
            'count'=> $request->count,
            'price'=> $request->price,
            'paid'=> $request->paid
        ]);

        return redirect('/');
    }

    public function edit($id){
        $data = Data::find($id);
        return view('edit',['datas'=>$data]);
    }

    public function update(Request $request, $id){
        date_default_timezone_set('Asia/Jakarta');
        $date = date('m/d/Y h:i:s');

        Data::find($id)->update([
            'item'=>$request->item,
            'count'=>$request->count,
            'price'=>$request->price,
            'paid'=>$request->paid 
        ]);

        return redirect('/');
    }

    public function delete($id){
        
        $data = Data::find($id);
        $data->delete();
        return redirect('/');
    }

    


}
