<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Request;
use App\Models\CategoryModel;

class ProductController extends Controller
{
    public function index()
    {
        $category = CategoryModel::all();

        $products = ProductModel::all();
        return $this->view('admin/products/list', ['products' => $products,
        'category' => $category]);
    }

    public function create()
    {
        $category = CategoryModel::all();
        return $this->view('admin/products/add', ['category' => $category]);

    }




    public function store(Request $request)
    {
        // var_dump($request->getBody());
        $product = $request->getBody();
        $product['img'] = $_FILES['img']['name'];

        move_uploaded_file($_FILES['img']['tmp_name'], "src/img/" . $_FILES['img']['name']);

        $p = new ProductModel();
        $p->insert($product);

        header("location:/product");
        die;
    }

    public function show(Request $request)
    {
        $id = $request->getBody()['id'];
        $product = ProductModel::findOne($id);
        $category = CategoryModel::all();

        return $this->view(
            'admin/products/update',
            [
                'product' => $product,
                'category' => $category
            ]
        );
    }


    public function update(Request $request)
    {
        $data = $request->getBody();
        if ($_FILES['img']['size'] > 0) {
            $data['img'] = $_FILES['img']['name'];
            move_uploaded_file($_FILES['img']['tmp_name'], 'src/img' . $data['img']);
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
        header("Location:/product");
        exit;
    }

}