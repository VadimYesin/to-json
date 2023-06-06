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
$zodiacs = [
    'Ari' => 'Aries (Овен)',
    'Tau' => 'Taurus (Телец)',
    'Gem' => 'Gemini (Близнецы)',
    'Can' => 'Cancer (Рак)',
    'Leo' => 'Lion (лев)',
    'Vir' => 'Virgo (Дева)',
    'Lib' => 'Libra (Весы)',
    'Sco' => 'Scorpius (Скорпион)',
    'Sag' => 'Sagittarius (Стрелец)',
    'Cap' => 'Capricorn (Козерог)',
    'Aqu' => 'Aquarius (Водолей)',
    'Pis' => 'Рыбы (Pisces)'
];
?>

<div class="container">
    <h1>Zodiacs:</h1>
    <form action="/zodiacs.php" method="POST">
        <?php foreach ($planets as $planet) : ?>
            <?php foreach ($zodiacs as $k_zodiac => $zodiac) : ?>
                <h3><?= $planet . ' -> ' . $zodiac ?></h3>
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="zodiacs[<?=$planet?>][Zodiacs][<?=$k_zodiac?>][Title]" placeholder="Введіть заголовок">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" name="zodiacs[<?=$planet?>][Zodiacs][<?=$k_zodiac?>][Description]" placeholder="Введіть опис"></textarea>
                </div>
            <?php endforeach; ?>
        <?php endforeach; ?>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
</div>