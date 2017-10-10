<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 10.10.2017
 * Time: 18:25
 */

namespace Controllers;

use Models\Product;
use Models\Review;
class ReviewController
{
    public function execute($method, $action, $id)
    {
        $_review = new Review();
        if ($method === 'GET') {
            if ($action === 'view' || $action === 'edit') {
                // Отдаем views/products.php
                $review = $_review->getOne($id);
                if (!$review) {
                    print_r('Отзыв не найден');
                    die();
                }
                $editable = false;
                if ($action === 'edit') {
                    $editable = true;
                }
                include_once dirname(__FILE__) . '/../views/reviews.php';
            }
        } else if ($method === 'POST'){
            if ($action === 'edit'){
                $_review-> update($id, $_POST);
            } else if ($action === 'delete'){
                $_review-> delete($id, $_POST);
            } else if ($action === 'create'){
                $_review-> create($id, $_POST);
            }
        }
    }
}