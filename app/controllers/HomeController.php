<?php

namespace App\Controllers;

use App\Models\CartModel;
use App\Models\ProductModel;
use App\Request;
use App\Models\CategoryModel;
use App\Models\CommentModel;
use App\Models\UsersModel;



class HomeController extends Controller
{
    public function index()
    {
        $product_iddm = ProductModel::findOneIddm(6);
        $products = ProductModel::four_sp();
        $pk = ProductModel::pk_sp();
        $sale = ProductModel::sale();
        return $this->view('/home', ['products' => $products, 'product_iddm'=>$product_iddm, 'pk'=>$pk, 'sale'=>$sale]);
    }

    

    public function create()
    {
        $category = CategoryModel::all();

        return $this->view('products/add', ['category' => $category]);

    }


    public function pageIntroduce(){
        $this->view('/gioithieu');
    }

    public function category(Request $request){
        if(isset($request->getBody()['id'])){
            $products = ProductModel::findOneIddm($request->getBody()['id']);

        }
        else{
            $products = ProductModel::all();
        }
        $category = CategoryModel::all();
        

        $this->view('/danhmuc', ['category' => $category,
        'products' => $products]);
       
    }

    public function accessory(){
        $pksp_all = ProductModel::pksp_all();
        return $this->view('/phukien', ['pksp_all'=>$pksp_all]);
    }

    public function news(){
        $this->view('/tintuc');
    }

    public function contact(){
        $this->view('/lienhe');
    }

    public function login(){
        $this->view('/taikhoan/dangnhap');
    }



    public function sanpham_ct(Request $request)
    {
        $id = $request->getBody()['id'];
        $product = ProductModel::findOne($id);
        $categories = CategoryModel::all();
        $product_iddm = ProductModel::all();
        $users = UsersModel::all();
        $binhLuan = CommentModel::binhLuan($id);


        return $this->view(
            '/sanpham_ct',
            [
                'product' => $product,
                'categories' => $categories,
                'product_iddm' => $product_iddm,
                'users' => $users,
                'binhLuan' => $binhLuan
            ]
        );
    }

    public function store(Request $request)
    {
        var_dump($request->getBody());
        $product = $request->getBody();
        $product['image'] = $_FILES['image']['name'];

        move_uploaded_file($_FILES['image']['tmp_name'], "images/" . $_FILES['image']['name']);

        $p = new ProductModel();
        $p->insert($product);

        header("location:/product");
        die;
    }

    public function storeBl(Request $request){
        $commentId = $request->getBody()['id_product'];
        $comment = $request->getBody();
        

        $p = new CommentModel();
        $p->insert($comment);

        header("location:/sanpham_ct?id=$commentId");
        exit;
    }

    

    public function storeCart(Request $request){
        $cartId = $_SESSION['user']->id ;
        $myCart = $request->getBody();
        

        $p = new CartModel();
        $p->insert($myCart);
        header("location:/cart?id=$cartId");
        exit;
    }

    public function cart(Request $request){
        // $id = $request->getBody()['id'];
        $cartId = $_SESSION['user']->id;
        $cart = CartModel::cart($cartId);
        // $product = ProductModel::findOne($id);

        
        return $this->view(
            '/cart',
            [
                'cart' => $cart,
                // 'product' => $product
            ]
        );

    }


    public function show(Request $request)
    {
        $id = $request->getBody()['id'];
        $product = ProductModel::findOne($id);
        $categories = CategoryModel::all();

        return $this->view(
            'admin/products/edit',
            [
                'product' => $product,
                'categories' => $categories
            ]
        );
    }


    

    public function update(Request $request)
    {
        $data = $request->getBody();
        if ($_FILES['image']['size'] > 0) {
            $data['image'] = $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $data['image']);
        }
        $p = new ProductModel();
        $p->update($data['id'], $data);
        header("Location:/product");
        exit;
    }

    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new ProductModel();
        $p->delete($id);
        $yourURL = "/product";
        echo ("<script>location.href = ' $yourURL '</script>");
        exit();
    }

    public function deleteCart(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new CartModel();
        $p->delete($id);
        header("Location:/cart");
        exit;
    }




}