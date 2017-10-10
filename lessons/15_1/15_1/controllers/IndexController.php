<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05.10.2017
 * Time: 19:28
 */

namespace Controllers;

use Models\Product;
use Models\Review;

class IndexController
{
    public function index()
    {
        $products = (new Product()) ->getAll();
        $reviews = (new Review()) ->getAll();
        include_once dirname(__FILE__) . "/../views/list.php";

    }

}