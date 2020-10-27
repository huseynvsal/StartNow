<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{
    public function mainpage(){
        return view('mainpage');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function halls($cat){
        $main_datas = DB::table('main_table')
        ->where('category',"ilike", "%".$cat."%")
        ->paginate(8);
        return view('halls',[
            'main_datas' =>$main_datas
        ]);
    }
    public function hall(){
        $main_datas = DB::table('main_table')
        ->paginate(8);
        return view('halls',[
            'main_datas' =>$main_datas
        ]);
    }

    public function search(Request $request){
        $name = $request->name;
        $result = DB::table('main_table')
        ->where('name',"ilike", "%".strtolower($name)."%")
        ->get();

        return response()->json([
            'status'=>'success',
            'result' =>$result,
        ]);
    }
    public function add_info(Request $request){
        $id = $request->id;
        $result = DB::table('main_table')
        ->where('id',"=", $id)
        ->get();

        return response()->json([
            'status'=>'success',
            'result' =>$result,
        ]);
    }
    public function current_hall($id){
        $main_datas = DB::table('main_table')
        ->where('id', $id)
        ->get();
        $additional_pictures = DB::table('main_table')
        ->leftJoin('additional_pictures', 'main_table.id', '=', 'additional_pictures.place_id')
        ->select('additional_pictures.additional_picture','additional_pictures.place_id')
        ->where('place_id',$id)
        ->get();
        return view('current_hall',[
            'main_datas' =>$main_datas,
            'additional_pictures' =>$additional_pictures
        ]);
    }
    public function login(){
        return view('login');
    }
}
