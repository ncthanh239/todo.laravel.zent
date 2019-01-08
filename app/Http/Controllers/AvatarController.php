<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Avatar;
use App\User;
class AvatarController extends Controller
{
    public function createav($id){
    	$user=User::find($id);
    	return view('admin_user.user', ['user'=>$user]);
    }

     public function uploadav(Request $request){
	   	
	   		$path=$request->file->storeAs('avatars', 'avatar'. time().'.png');

	   		Avatar::insert([
	   			'user_id'=>$request->user_id,
	   			'link_avatar'=>$path,
	   			
	   		]);

	   		return response()->json('ok');
	   }
}
