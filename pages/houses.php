<?php
$planets = [
    'Sun',
    'Moon',
    'Mercury',
    'Venus',
    'Mars',
    'Jupiter',
    'Saturn',
    'Uranus',
    'Neptune',
    'Pluto',
];
$houses = [
    'First House',
    'Second House',
    'Third House',
    'Fourth House',
    'Fifth House',
    'Sixth House',
    'Seventh House',
    'Eighth House',
    'Ninth House',
    'Tenth House',
    'Eleventh House',
    'Twelfth House'
];
?>

<div class="container">
    <h1>Houses:</h1>
    <form action="/houses.php" method="POST">
        <?php foreach ($planets as $planet) : ?>
            <?php foreach ($houses as $house) : ?>
                <h3><?= $planet . ' -> ' . $house ?></h3>
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="houses[<?=$planet?>][Houses][<?=$house?>][Title]" placeholder="Введіть заголовок">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" name="houses[<?=$planet?>][Houses][<?=$house?>][Description]" placeholder="Введіть опис"></textarea>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
</div>