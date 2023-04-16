<?php

namespace App\Controllers;

use App\controllers\Controller;
use App\Models\CommentModel;
use App\Models\ProductModel;
use App\Models\UsersModel;
use App\Request;

class CommentController extends Controller{

    public function index(){
        $users = UsersModel::all();

        $products = ProductModel::all();

        return $this->view('sanpham_ct', ['products' => $products,
        'users' => $users]);
    }

    public function store(Request $request){
        $commentId = $request->getBody()['id_product'];
        $comment = $request->getBody();
        // $products = ProductModel::all();

        $p = new CommentModel();
        $p->insert($comment);

        header(`location:/sanpham_ct?id=$commentId`);
        exit;
    }

}