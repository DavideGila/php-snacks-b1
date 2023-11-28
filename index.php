
<?php 
// Snack-1
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
];

// Snack-2
if (isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["age"])){
    $name = $_GET["name"];
    $email = $_GET["email"];
    $age = $_GET["age"];
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snacks</title>
</head>
<body>
    <!-- Snack 1 -->
    <?php foreach ($matches as $match) {
        echo "<div> {$match['teamHome']} - {$match['teamAway']} | {$match['scoreHome']} - {$match['scoreAway']} </div>";
    } ?>  
    
    <!-- Snack 2 -->
    <form action="index.php" method="GET">
        <input type="text" name='name'>
        <input type="text" name='email'>
        <input type="text" name='age'>
        <button type='submit'>Invia</button>
    </form>

    <?php 
        if (!empty($name) && !empty($email) && !empty($age)) {
            if (strlen($name) > 3 && strpos($email, '.' ) && strpos($email, '@') && is_numeric($age)){
            echo "<div> Accesso riuscito </div>";
            } else {
                echo "<div> Accesso Negato</div>";
            }
    }
    ?> 
</body>
</html>