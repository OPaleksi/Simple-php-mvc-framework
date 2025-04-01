<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the product attributes based on the id.
    public function showAction($id, RouteCollection $routes)
    {
        $product = new \App\Models\Product();
        $product->read($id);

        require APP_ROOT . '/views/product.php';
    }


    

}

