<?php
$question = '';
$answers = [];
$result = '';

$steps = [
    [
        'id' => 1,
        'question' => 'Влево или вправо?',
        'answers' => [
            [
                'text' => 'Влево',
                'function' => 'next',
                'next_step' => 2,

            ],
            [
                'text' => 'Вправо',
                'function' => 'endGame',
            ]
        ]
    ],
    [
        'id' => 2,
        'question' => 'Прыгать или бежать',
        'answers' => [
            [
                'text' => 'Прыгать',
                'function' => 'endGame',

            ],
            [
                'text' => 'Бежать',
                'function' => 'next',
                'next_step' => 3,
            ]
        ]
    ],
    [
        'id' => 3,
        'question' => 'Вперед или назад',
        'answers' => [
            [
                'text' => 'Вперед',
                'function' => 'endGame',
            ],
            [
                'text' => 'Назад',
                'function' => 'win',
            ],

        ],

    ],

];

function findNextStep($id, $steps)
{
    $step = null; //создание переменной
    foreach ($steps as $_step) { //цикл
        if ($_step['id'] == $id) { // если id шага равно желаемому
            $step = $_step; // запись в переменную
        }
    }
    return $step;
}

;

function generateQuestion($step)
{
    return $step['question']; //возврат вопроса шага
}

function generateAnswers($step)
{
    return $step['answers']; //возврат вариантов шага
}

if (isset($_POST['submit'])) {
    $answer = json_decode($_POST['answer'], true);
    if ($answer['function'] === 'next'){
        $step = findNextStep($answer['next_step'], $steps);
        $question = generateQuestion($step);
        $answers = generateAnswers($step);
    } else if ($answer['function'] === 'endGame'){
        $result = 'Вы проиграли';
    } else if ($answer['function'] === 'win'){
        $result = 'Вы выиграли';
    }

} else {
    $step = findNextStep(1, $steps);
    $question = generateQuestion($step);
    $answers = generateAnswers($step);
}