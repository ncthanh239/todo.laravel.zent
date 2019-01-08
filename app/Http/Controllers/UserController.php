<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Avatar;
use App\Product;
use App\Attribute;
use App\Value;
use App\Color;
use App\Size;
use App\Product_image;
use App\Color_size;

use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;
class UserController extends Controller
{
 public function list(){
  return view('admin_user.user');
}

public function getUsers(){	
  return Datatables::of(User::query())
  ->editColumn('email', function ($user) {
    return '<a href="mailto:'.$user->email.'" >'.$user->email.' </a>';
  })
  ->addColumn('action', function ($user) {
    return '<button class="btn btn-sm btn-primary btn-user" data-id="'.$user->id.'"><i class="fa fa-eye" aria-hidden="true"></i></button>
    <button class="btn btn-sm btn-warning btn-edit" data-id="'.$user->id.'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
    <button class="btn btn-sm btn-info btn-uploada" data-id="'.$user->id.'"><i class="fa fa-upload" aria-hidden="true"></i></button>
    <button class="btn btn-sm btn-danger" data-id="'.$user->id.'"><i class="fa fa-trash-o" aria-hidden="true"></i></button>';
  })
  ->addColumn('avatar', function ($user) {
    $avatar=Avatar::where('user_id', $user->id)->first();
    
    if(isset($avatar))
      return '<img style="width: 40px; height: 40px; border-radius:50%;" src="http://todo.laravel.zent:8080/storage/'.$avatar->link_avatar.'" >';
  })
  ->rawColumns(['email','action','avatar'])
  ->make(true);
}

public function destroy($id){
 User::find($id)->delete();
 return response()->json([
  'message'=>'Da xoa',
]);
}

public function edit($id){
 $users=User::find($id);

 return response()->json([
  'users'=>$users,
]);
}

public function update(Request $request,$id){
  $data=$request->only('name', 'email', 'address', 'phone');
      // dd($data->request);
  $user = User::find($id)->update($data);

  return response()->json([
    'data'=>$user,
  ]);
}

public function show($id){
  $data = array();
  $user=User::find($id);
  $avatar=Avatar::where('id', $user->id)->first();
  $data['user']=$user;
  $data['avatar']=$avatar;
  
  return response()->json([
    'data'=>$data,
  ]);
}

public function create(){
  return view('userview.checkout');
}
public function store(Request $request){
  // dd($request->password);
  $data=$request;
  $data['password']=Hash::make($request->password);
  $user=User::store($request->all());
  return response()->json([
    'error'=>false,
    'data'=>$user
  ]); 
}

public function update1(Request $request,$id){

 $data=$request->only('name', 'email', 'address', 'phone');
     
 $user = User::find($id)->update($data);

 return response()->json([
  'data'=>$user,
]);
}




}
