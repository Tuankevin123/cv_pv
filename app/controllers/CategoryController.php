<?php

namespace App\Controllers;
use App\Models\ProductModel;
use App\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
{
    public function index()
    {
        $categorys = CategoryModel::all();
        return $this->view('admin/categorys/list', ['categorys' => $categorys]);
    }

    public function create()
    {
         $this->view('admin/categorys/add');

    }

    public function home_admin()
    {
         $this->view('admin/home-admin');

    }


    public function store(Request $request)
    {
        // var_dump($request->getBody());
        // $product = $request->getBody();
        // $product['img'] = $_FILES['img']['name'];

        // move_uploaded_file($_FILES['img']['tmp_name'], "src/img" . $_FILES['img']['name']);
        $data=$request->getBody();
        $p = new CategoryModel();
        $p->insert($data);

        header("location:/category");
        die;
    }

    public function show(Request $request)
    {
        $id = $request->getBody()['id'];
        $category = CategoryModel::findOne($id);
        // $categories = CategoryModel::all();

        return $this->view(
            'admin/categorys/update',
            [
                'category' => $category
            ]
        );
    }


    public function update(Request $request)
    {
        $data = $request->getBody();
        // if ($_FILES['img']['size'] > 0) {
        //     $data['img'] = $_FILES['img']['name'];
        //     move_uploaded_file($_FILES['img']['tmp_name'], 'src/img' . $data['img']);
        // }
        $p = new CategoryModel();
        $p->update($data['id'], $data);
        header("Location:/category");
        exit;
    }

    public function delete(Request $request)
    {
        $id = $request->getBody()['id'];
        $p = new CategoryModel();
        $p->delete($id);
        header("Location:/category");
        exit;
    }

}