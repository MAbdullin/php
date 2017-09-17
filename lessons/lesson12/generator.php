<?php

//хранилище имен
$names = [
    'Александр',
    'Борис',
    'Валентин',
    'Геннадий',
    'Дмитрий',
    'Евгений',
];
//Хранилище фамилий
$surnames = [
    'Агутин',
    'Барсуков',
    'Всеволодов',
];

//Хранилище адрессов
$adresses = [
    'ул. Александрийская, д.1',
    'ул. Ботенчука, д.1',
    'ул. Вологодская, д.1',
    'ул. Городничая, д.1',
];
/*echo generatePhone();
echo getName($names);
echo getSurmane($surnames);
echo getAdress($adresses);*/

//Генерирует случайные данные персонажа
function generatePerson($names, $surnames, $adresses)
{
    return [
        'name'=>getName($names),
        'surname'=>getSurmane($surnames),
        'address'=>getAdress($adresses),
        'phone'=>generatePhone(),

    ];

}

//Итоговые данные персонажа
$person =[
    'name'=>getName($names),
    'surname'=>getSurmane($surnames),
    'address'=>getAdress($adresses),
    'phone'=>generatePhone(),
];

function getRandomElement($array)
{
    $arrayCount=count($array);

    return $array[rand(0, $arrayCount-1)];
}

function getName($names)
{
    return getRandomElement($names);
}

function getSurmane($surnames)
{
    return getRandomElement($surnames);
}

function getAdress($adresses)
{
    return getRandomElement($adresses);
}

function generatePhone()
{
    $phone = '+7'. rand(100,999).rand(1000000, 9999999);
    return $phone;
}