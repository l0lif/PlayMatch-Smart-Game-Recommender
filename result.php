<!-- fay -->
 
<html> <!--Maryam-->

<head>
    <!-- ربط ملف التنسيق CSS الخاص بالصفحة -->
    <link rel="stylesheet" href="play.css">
</head>

<body>
    
</body>

</html>

<?php

// استقبال الإجابات
$start = $_POST['start'] ?? '';
$challenge = $_POST['challenge'] ?? '';
$style = $_POST['style'] ?? '';
$role = $_POST['role'] ?? '';
$world = $_POST['world'] ?? '';
$motivation = $_POST['motivation'] ?? '';
$difficulty = $_POST['difficulty'] ?? '';
$fun = $_POST['fun'] ?? '';


// نقاط أنواع الألعاب
$action = 0;
$adventure = 0;
$gacha = 0;
$horror = 0;



// Question 1
if($start == "combat"){
    $action++;
}
elseif($start == "story"){
    $adventure++;
}
else{
    $gacha++;
}


// Question 2
if($challenge == "skill"){
    $action++;
}
elseif($challenge == "strategy"){
    $gacha++;
}
else{
    $adventure++;
}


// Question 3
if($style == "combat"){
    $action++;
}
elseif($style == "tactic"){
    $gacha++;
}
else{
    $adventure++;
}


// Question 4
if($role == "attacker"){
    $action++;
}
elseif($role == "leader"){
    $gacha++;
}
else{
    $adventure++;
}


// Question 5
if($world == "realistic"){
    $action++;
}
elseif($world == "fantasy"){
    $adventure++;
}
else{
    $gacha++;
}


// Question 6
if($motivation == "competition"){
    $action++;
}
elseif($motivation == "progress"){
    $gacha++;
}
else{
    $adventure++;
}


// Question 7
if($difficulty == "practice"){
    $action++;
}
elseif($difficulty == "strategy"){
    $gacha++;
}
else{
    $adventure++;
}


// Question 8
if($fun == "battle"){
    $action++;
}
elseif($fun == "plan"){
    $gacha++;
}
else{
    $horror++;
}



echo "<h2>Recommended Game For You</h2>";


// اختيار نوع اللعبة
if($action >= $adventure && $action >= $gacha && $action >= $horror){

    $games = [
        "Devil May Cry 5",
        "Sekiro: Shadows Die Twice",
        "Ninja Gaiden",
        "Metal Gear Rising"
    ];

}
elseif($adventure >= $action && $adventure >= $gacha && $adventure >= $horror){

    $games = [
        "The Legend of Zelda",
        "The Witcher 3",
        "Skyrim",
        "Horizon Zero Dawn"
    ];

}
elseif($gacha >= $action && $gacha >= $adventure && $gacha >= $horror){

    $games = [
        "Genshin Impact",
        "Goddess of Victory Nikke",
        "Wuthering Waves",
        "Zenless Zone Zero"
    ];

}
else{

    $games = [
        "Resident Evil 4 remack",
        "Silent Hill 2",
        "Outlast",
        "Amnesia: The Dark Descent"
    ];

}


// اختيار لعبة عشوائية
$recommendedGame = $games[array_rand($games)];

echo "<h3>$recommendedGame</h3>";
echo "<p>This game matches your quiz answers.</p>";

?> 