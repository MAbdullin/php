<?php
//Название, Цена, описание
    $products = [
        ['Шапка мужская', 100, 'Шапка Челубея', './img/1.png'],
        ['Штаны женские', 100, 'Штаны стильные', './img/2.png'],
        ['Мяч волейбольный', 100, 'Накачанный финским воздухом', './img/3.png'],
        ['Джинсы', 100, 'Потертые, рвань', './img/4.png'],
        ['Футболка', 100, 'Футбольная, с Роланду', './img/5.png'],
        ['Мяч волейбольный', 100, 'Это другой мяч', './img/6.png']
    ];

    function getName($product)
    {
        return $product[0];

    }

    function getPrice($product)
    {
        return $product[1];

    }

    function getDescription($product)
    {
        return $product[2];

    }

    function getImage($product)
    {
        return $product[3];

    }
