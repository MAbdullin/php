<?php

$answers = [
        ['id' => 1, 'text'=> 'Привет'],
        ['id' => 2, 'text'=> '23'],
        ['id' => 3, 'text'=> 'При434вет'],
        ['id' => 4, 'text'=> 'При22вет'],
        ['id' => 5, 'text'=> '1111Привет'],

];

?>

<?php foreach ($answers as $answer) : ?>
    <?php print_r($answer) ?>
    Значение: <?php echo  $answer['text'] ?>
<br>
<?php endforeach; ?>
