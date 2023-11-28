<!-- Snack 1 -->

<?php 
$matches = [
    [
        'teamHome' => 'Olimpia Milano',
        'teamAway' => 'Cantù',
        'scoreHome' => '55',
        'scoreAway' => '60',        
    ],
    [
        'teamHome' => 'Los Angeles Lakers',
        'teamAway' => 'Chicago Bulls',
        'scoreHome' => '70',
        'scoreAway' => '68',        
    ],
    [
        'teamHome' => 'Boston Celtics',
        'teamAway' => 'Phoenix Suns',
        'scoreHome' => '80',
        'scoreAway' => '35',        
    ],
    [
        'teamHome' => 'Miami Heat',
        'teamAway' => 'Golden State Warriors',
        'scoreHome' => '58',
        'scoreAway' => '46',        
    ]
]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks</title>
</head>
<body>
    <?php foreach ($matches as $match) {
        echo "<div> {$match['teamHome']} - {$match['teamAway']} | {$match['scoreHome']} - {$match['scoreAway']} </div>";
    } ?>      
</body>
</html>