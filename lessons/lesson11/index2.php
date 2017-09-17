<?php

$answers = [
        ['id' => 1, 'text'=> 'Привет', [1, [23, 54], 98]],
        ['id' => 2, 'text'=> '23', [1, [23, 54], 98]],
        ['id' => 3, 'text'=> 'При434вет', [1, [23, 54], 98]],

];

?>

<?php foreach ($answers as $answer) : ?>
    <?php echo($answer[0][1][1]) ?>
    Значение: <?php echo  $answer['text'] ?>
<br>
<?php endforeach; ?>
