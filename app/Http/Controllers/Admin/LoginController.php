<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;

class LoginController extends Controller
{
    // 后台登录界面
	public function index(){
		return view("admin.login");
	}
	
	// 后台登录处理
	public function check(Request $request){
		// 获取表单数据
		$user=$request->username;
		$pwd=$request->password;
		
		// 数据库中查找
		// $result=DB::select('select * from admin_table where username=? and password=?',[$user,md5($pwd)]);
		$result=DB::table('admin_table')->where("username",$user)->where("password",md5($pwd))->first();
		
		// 判断结果集
		if($result){
			// 给session中存值
			// Session::put("userid",$result['userid']);
			Session::put("username",$user);
			// session(['username'=>$user]);
			
			$res=['code'=>1,'msg'=>'登录成功','data'=>$result];
		}else{
			$res=['code'=>0,'msg'=>'登录失败'];
		}
		
		// 返回json结果数据
		return(response()->json($res));
	}
		
	// 退出登录
	public function logout(Request $request){
		Session::forget("username");
		if($request->session()->has("username")){
			$res=['code'=>0,'msg'=>'未退出登录'];
		}else{
			$res=['code'=>1,'msg'=>'退出登录'];
		}
		
		return(response()->json($res));
	}
}
