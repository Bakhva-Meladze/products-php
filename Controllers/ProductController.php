<?php

namespace Controllers;

use model\Database;


class ProductController
{
    public function Index()
    {
        include('view/Productlist.php');
    }

    public function Create()
    {
        include('view/create.php');
    }

    public function Store($request)
    {
        $type = 'model\\'.$request['type'];
        $product = new $type();
        $product->save($request);

        include('view/create.php');
    }

    public function Delete($request)
    {
        $product_delete = new Database();
        $delete = $request['id'];
        foreach ($delete as $del) {
            $product_delete->delete($del);
        }

        include('view/Productlist.php');
    }
}
