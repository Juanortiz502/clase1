<?php
namespace App\Controllers;
use Src\Controller;
use App\Models\Product;
use App\Models\InputProduct;

class productController extends Controller{

    public function index(){
        $this->view->products = Product::all();
        $this->view->render('product', 'admin');
    }
    public function save(){
        Product::insert($_POST);
        header('location: /product');//Redireccionar a dashboard
    }
    public function saveInput(){
        InputProduct::insert($_POST);
        header('location: /product');//Redireccionar a dashboard
    }

}