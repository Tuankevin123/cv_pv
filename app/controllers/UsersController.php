<?php 

namespace App\Controllers;

use App\Models\ProductModel;
use App\Request;
use App\Models\UsersModel;


class UsersController extends Controller{
    public function showLogin(){
        return $this->view('taikhoan/dangnhap');
    }

    public function login(Request $request){
        
            $email = $request->getBody()['email'];
        $password = $request->getBody()['password'];
        $user = UsersModel::first($email,$password);
        
        if($user){
            
            if($user->email==$email && $user->password == $password){
                
                $_SESSION['user']=$user;
                $_SESSION['id'] = $user->id;
                $_SESSION['name'] = $user->name_kh;
                // echo $_SESSION['name'];
                $_SESSION['rols'] = $user->rols;
                header('location:/');
            }

            
        }else{
            $erro ="Sai mật khẩu hoặc email";
            $_SESSION['erro'] = $erro;
            return $this->view('taikhoan/dangnhap');
            
        }
        

    }

    // public function showCt(Request $request){
    //     $id = $request->getBody()['id'];
    //     $ct = ProductModel::findOne($id);
    //     return $this->view('user/ctsanpham',['ct'=>$ct]);
    // }

    public function unSession(){
        unset($_SESSION['user']);
        header('location:/');
    }

    public function showLogup(){
        return $this->view('taikhoan/dangky');
    }

    public function logup(Request $request){
        $data = $request->getBody();
        $p = new UsersModel;
        $p->insert($data);
        header('location:/dangnhap');
    }

    // public function sreach(Request $request){
    //     $name = $request->getBody()['name_sp'];

    // }

    public function binhluan(){
        
    }
    
}