<?php 

namespace App\Controllers;

use App\Models\Patient;
use Symfony\Component\Routing\RouteCollection;

class ProductController
{
    // Show the patient attributes based on the id.
	public function showAction(string $ipp, RouteCollection $routes)
	{
        $product = new Product();
        $product->read($ipp);

        require_once APP_ROOT . '/views/product.php';
	}
}