<?php

namespace Controllers;

use Models\Product;

class ProductController
{
    public function __construct()
    {
        //вызывается всегда при инициализации
        $this->product = new Product();
    }

    public function view($params)
    {
        $id = $params['id'];
        // Отдаем views/products.php
        $product = $this->product->getOne($id);
        if (!$product) {
            print_r('Товар не найден');
            die();
        }
        $editable = false;
        include_once dirname(__FILE__) . '/../views/products.php';
    }
    /*public function execute($method, $action, $id = null)
    {
        $_product = new Product();
        if ($method === 'GET') {
            if ($action === 'view' || $action === 'edit') {
                // Отдаем views/products.php
                $product = $_product->getOne($id);
                if (!$product) {
                    print_r('Товар не найден');
                    die();
                }
                $editable = false;
                if ($action === 'edit') {
                    $editable = true;
                }
                include_once dirname(__FILE__) . '/../views/products.php';
            }
        } else if ($method === 'POST') {
            if ($action === 'edit') {
                $_product->update($id, $_POST);
            } else if ($action === 'delete') {
                $_product->delete($id);
            } else if ($action === 'create') {
                $_product->create($_POST);
            }
            header('location:/lessons/15_1/');
        }
    }*/
}