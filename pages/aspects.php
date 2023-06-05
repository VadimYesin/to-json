<?php
    $planets = [
        //'Sun',
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
    $aspects = [
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
        'First House',
        'Tenth House'
    ];
    $types = [
        'conjunction',
        'sextile',
        'square',
        'trine',
        'opposition'
    ];
?>

<div class="container">
    <h1>Aspects:</h1>
    <form action="/aspects.php" method="POST">
        <?php foreach ($planets as $planet) : ?>
            <?php foreach ($types as $type) : ?>
                <?php foreach ($aspects as $aspect) : ?>
                <?php if ($planet === $aspect) { continue; } ?>
                    <?php if ($aspect === 'First House') : ?>
                        <h3><?= $planet . ' -> ' . $type . ' -> ' . 'Ascendent' ?></h3>
                    <?php elseif ($aspect === 'Tenth House') : ?>
                        <h3><?= $planet . ' -> ' . $type . ' -> ' . 'MC' ?></h3>
                    <?php else : ?>
                        <h3><?= $planet . ' -> ' . $type . ' -> ' . $aspect ?></h3>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" class="form-control" name="aspects[<?=$planet?>][Aspects][<?=$aspect?>][<?=$type?>][Title]" placeholder="Введіть заголовок">
                    </div>
                    <div class="form-group">
                        <label for="description">Description:</label>
                        <textarea class="form-control" name="aspects[<?=$planet?>][Aspects][<?=$aspect?>][<?=$type?>][Description]" placeholder="Введіть опис"></textarea>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
</div>