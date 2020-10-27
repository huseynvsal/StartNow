<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\Add_main_table;
use App\Http\Requests\Add_users_table;
use App\Http\Requests\Messages;
use Faker\Provider\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class HomeController extends Controller
{
    public function main_table(){
        $main_datas = DB::table('main_table')->get();
        return view('Admin.table',[
                'main_datas' =>$main_datas
            ]);
    }

    public function messages_table(){
        $message_datas = DB::table('messages')->get();
        return view('Admin.messages_table',[
            'message_datas' =>$message_datas
        ]);
    }

    public function add_messages_table(Messages $request){
        $name = $request->name;
        $surname = $request->surname;
        $email = $request->email;
        $message = $request->message;
        DB::table('messages')->insert([
            'name' => $name,
            'surname' => $surname,
            'email' => $email,
            'message' => $message,
            'seen' => 0
        ]);
        return response()->json(['status'=>'success']);
    }

    public function additional_pictures_table(){
        $place_names = DB::table('main_table')->get();
        $add_pic_datas = DB::table('additional_pictures')
        ->leftJoin('main_table', 'main_table.id', '=', 'additional_pictures.place_id')
        ->select('main_table.name as place_name', 'additional_pictures.additional_picture','additional_pictures.id')
        ->get();
        return view('Admin.additional_pictures_table',[
            'add_pic_datas' =>$add_pic_datas,
            'place_names' =>$place_names
        ]);
    }

    public function add_additional_pictures_table(Request $request){
        $add_picture = $request->file('add_picture')->getClientOriginalName();
        $request->add_picture->move("../public/startnow/images", $add_picture);
        $place_id = $request->input('id');
        $id = DB::table('additional_pictures')->insertGetId([
            'place_id' => $place_id,
            'additional_picture' => $add_picture,
        ]);
        return response()->json(['status'=>'success','message'=>$id]);
    }

    public function add_pic_delete(Request $request){
        $id = $request->id;
        DB::table('additional_pictures')->where('id', '=', $id)->delete();
        return response()->json(['status'=>'success']);
    }

    public function add_main_table(Add_main_table $request){
        $place_name = $request->input('place_name');
        $coach_name_surname = $request->input('coach_name_surname');
        $location = $request->input('location');
        $main_picture = $request->file('main_picture')->getClientOriginalName();
        $request->main_picture->move("../public/startnow/images", $main_picture);
        $category = $request->input('category');
        $information = $request->input('information');
        $price = $request->input('price');
        $discount_rate = $request->input('discount_rate');
        $number = $request->input('number');
        $city = $request->input('city');
        $website = $request->input('website');
        $facebook = $request->input('facebook');
        $instagram = $request->input('instagram');
        $prices_info = $request->input('prices_info');
        $location_link = $request->input('location_link');
        $id = DB::table('main_table')->insertGetId([
            'name' => $place_name,
            'coach_name_surname' => $coach_name_surname,
            'location' => $location,
            'main_picture' => $main_picture,
            'category' => $category,
            'information' => $information,
            'price' => $price,
            'discount_rate' => $discount_rate,
            'number' => $number,
            'city' => $city,
            'website' => $website,
            'facebook' => $facebook,
            'instagram' => $instagram,
            'prices_info' => $prices_info,
            'location_link' => $location_link
        ]);
        return response()->json(['status'=>'success','message'=>$id]);
    }

    public function place_delete(Request $request){
        $id = $request->id;
        DB::table('main_table')->where('id', '=', $id)->delete();
        return response()->json(['status'=>'success']);
    }

    public function message_delete(Request $request){
        $id = $request->id;
        DB::table('messages')->where('id', '=', $id)->delete();
        return response()->json(['status'=>'success']);
    }

    public function place_update(Add_main_table $request)
    {
        $place_name = $request->input('place_name');
        $coach_name_surname = $request->input('coach_name_surname');
        $location = $request->input('location');
        $check=false;
        $id = $request->id;
        $main_picture = $request->file('main_picture');
        if(isset($main_picture)){
            $check = true;
            $main_picture = $request->file('main_picture')->getClientOriginalName();
            $request->main_picture->move("../public/startnow/images", $main_picture);
            $old_name = DB::table('main_table')
                        ->where('id', '=', $id)
                        ->select('main_picture')
                        ->get();
            $default_main_picture =$old_name[0]->main_picture;
            $imagePath = app_path('../public/startnow/images/'.$default_main_picture);
            unlink($imagePath);
        }
        else{
            $main_picture = $request->input('default_main_picture');
        }
        $category = $request->input('category');
        $information = $request->input('information');
        $price = $request->input('price');
        $discount_rate = $request->input('discount_rate');
        $number = $request->input('number');
        $city = $request->input('city');

        $website = $request->input('website');
        $facebook = $request->input('facebook');
        $instagram = $request->input('instagram');
        $prices_info = $request->input('prices_info');
        $location_link = $request->input('location_link');
        if($check)
        {
            DB::table('main_table')
                ->where('id','=',$id)
                ->update([
                    'main_picture'=>$main_picture,
                ]);
        }

        DB::table('main_table')
            ->where('id','=',$id)
            ->update(['name'=>$place_name,
                'coach_name_surname'=>$coach_name_surname,
                'location'=>$location,
                'information'=>$information,
                'price'=>$price,
                'discount_rate'=>$discount_rate,
                'category'=>$category,
                'number'=>$number,
                'city'=>$city,
                'website'=>$website,
                'facebook'=>$facebook,
                'instagram'=>$instagram,
                'prices_info'=>$prices_info,
                'location_link'=>$location_link]);


        return response()->json(['status'=>'success','id'=>$id]);
    }

    public function message_seen(Request $request)
    {
        $id = $request->id;
        DB::table('messages')
            ->where('id','=',$id)
            ->update(['seen'=>1]);

        return response()->json(['status'=>'success']);
    }
}
