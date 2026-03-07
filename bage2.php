
<?php  //fay 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $type = $_POST['gamer'] ?? '';

    if ($type == "new") {
        echo "Welcome new gamer!";
?>

<html>

<head>  <!--Maryam-->
    <!-- ربط ملف التنسيق CSS لتصميم الصفحة -->
    <link rel="stylesheet" href="play.css">
</head>

<body>

    <!-- مسافات لإنزال المحتوى قليلاً في الصفحة -->
    <br><br><br><br>

    <!-- عنوان الاختبار -->
    <h2>Preferences Quiz (New Gamer)</h2>

    <!-- Quiz Form -->
    <form method="post" action="result.php">

    <!-- Question 1 -->
    <p>When you start a new game, what attracts you the most at the beginning?</p>
    <label><input type="radio" name="start" value="combat"> Combat system and action</label><br>
    <label><input type="radio" name="start" value="story"> Story and world</label><br>
    <label><input type="radio" name="start" value="mechanics"> Mechanics and strategies</label><br>

    <!-- Question 2 -->
    <p>What type of challenges do you prefer in games?</p>
    <label><input type="radio" name="challenge" value="skill"> Fast reflexes and skill</label><br>
    <label><input type="radio" name="challenge" value="strategy"> Planning and decision making</label><br>
    <label><input type="radio" name="challenge" value="explore"> Exploring the world and solving puzzles</label><br>

    <!-- Question 3 -->
    <p>Which gameplay style do you enjoy the most?</p>
    <label><input type="radio" name="style" value="combat"> Direct combat against enemies</label><br>
    <label><input type="radio" name="style" value="tactic"> Resource management and tactics</label><br>
    <label><input type="radio" name="style" value="story"> Exploring the world and interacting with the story</label><br>

    <!-- Question 4 -->
    <p>When playing with others, what role do you prefer?</p>
    <label><input type="radio" name="role" value="attacker"> Main attacker in the team</label><br>
    <label><input type="radio" name="role" value="leader"> Tactical planner or leader</label><br>
    <label><input type="radio" name="role" value="support"> Support or explorer</label><br>

    <!-- Question 5 -->
    <p>What type of worlds do you prefer in games?</p>
    <label><input type="radio" name="world" value="realistic"> Realistic or military worlds</label><br>
    <label><input type="radio" name="world" value="fantasy"> Fantasy worlds with magic and creatures</label><br>
    <label><input type="radio" name="world" value="future"> Futuristic or sci-fi worlds</label><br>

    <!-- Question 6 -->
    <p>What makes you keep playing a game for a long time?</p>
    <label><input type="radio" name="motivation" value="competition"> Competing with other players</label><br>
    <label><input type="radio" name="motivation" value="progress"> Character and skill progression</label><br>
    <label><input type="radio" name="motivation" value="discover"> Discovering secrets of the world and story</label><br>

    <!-- Question 7 -->
    <p>When you face a difficult challenge in a game, what do you usually do?</p>
    <label><input type="radio" name="difficulty" value="practice"> Improve your skill until you beat it</label><br>
    <label><input type="radio" name="difficulty" value="strategy"> Change your strategy or playstyle</label><br>
    <label><input type="radio" name="difficulty" value="explore"> Look for different ways to solve the problem</label><br>

    <!-- Question 8 -->
    <p>Which experience sounds the most fun to you?</p>
    <label><input type="radio" name="fun" value="battle"> Fast and intense battles</label><br>
    <label><input type="radio" name="fun" value="plan"> Building a strategy to defeat the opponent</label><br>
    <label><input type="radio" name="fun" value="story"> Exploring a large world full of stories</label><br>

    <br>

    <!-- زر إرسال الإجابات -->
    <button type="submit">Submit Quiz</button>

    </form>

</body>

</html>

<?php
    } 
    elseif ($type == "old") {
        echo "Welcome back old gamer!";
?>

<html>

<head>  <!--Maryam-->
    <!-- ربط ملف التنسيق CSS لتصميم الصفحة -->
    <link rel="stylesheet" href="play.css">
</head>

<body>

    <!-- مسافات لإنزال المحتوى قليلاً في الصفحة -->
    <br><br><br><br>

    <!-- عنوان الاختبار -->
    <h2>Preferences Quiz (Old Gamer)</h2>

    <!-- Quiz Form -->
    <form method="post" action="result.php">

    <!-- Question 1 -->
    <p>When you start a new game, what attracts you the most at the beginning?</p>
    <label><input type="radio" name="start" value="combat"> Combat system and action</label><br>
    <label><input type="radio" name="start" value="story"> Story and world</label><br>
    <label><input type="radio" name="start" value="mechanics"> Mechanics and strategies</label><br>

    <!-- Question 2 -->
    <p>What type of challenges do you prefer in games?</p>
    <label><input type="radio" name="challenge" value="skill"> Fast reflexes and skill</label><br>
    <label><input type="radio" name="challenge" value="strategy"> Planning and decision making</label><br>
    <label><input type="radio" name="challenge" value="explore"> Exploring the world and solving puzzles</label><br>

    <!-- Question 3 -->
    <p>Which gameplay style do you enjoy the most?</p>
    <label><input type="radio" name="style" value="combat"> Direct combat against enemies</label><br>
    <label><input type="radio" name="style" value="tactic"> Resource management and tactics</label><br>
    <label><input type="radio" name="style" value="story"> Exploring the world and interacting with the story</label><br>

    <!-- Question 4 -->
    <p>When playing with others, what role do you prefer?</p>
    <label><input type="radio" name="role" value="attacker"> Main attacker in the team</label><br>
    <label><input type="radio" name="role" value="leader"> Tactical planner or leader</label><br>
    <label><input type="radio" name="role" value="support"> Support or explorer</label><br>

    <!-- Question 5 -->
    <p>What type of worlds do you prefer in games?</p>
    <label><input type="radio" name="world" value="realistic"> Realistic or military worlds</label><br>
    <label><input type="radio" name="world" value="fantasy"> Fantasy worlds with magic and creatures</label><br>
    <label><input type="radio" name="world" value="future"> Futuristic or sci-fi worlds</label><br>

    <!-- Question 6 -->
    <p>What makes you keep playing a game for a long time?</p>
    <label><input type="radio" name="motivation" value="competition"> Competing with other players</label><br>
    <label><input type="radio" name="motivation" value="progress"> Character and skill progression</label><br>
    <label><input type="radio" name="motivation" value="discover"> Discovering secrets of the world and story</label><br>

    <!-- Question 7 -->
    <p>When you face a difficult challenge in a game, what do you usually do?</p>
    <label><input type="radio" name="difficulty" value="practice"> Improve your skill until you beat it</label><br>
    <label><input type="radio" name="difficulty" value="strategy"> Change your strategy or playstyle</label><br>
    <label><input type="radio" name="difficulty" value="explore"> Look for different ways to solve the problem</label><br>

    <!-- Question 8 -->
    <p>Which experience sounds the most fun to you?</p>
    <label><input type="radio" name="fun" value="battle"> Fast and intense battles</label><br>
    <label><input type="radio" name="fun" value="plan"> Building a strategy to defeat the opponent</label><br>
    <label><input type="radio" name="fun" value="story"> Exploring a large world full of stories</label><br>

    <br>

    <!-- زر إرسال الإجابات -->
    <button type="submit">Submit Quiz</button>

    </form>

</body>

</html>

<?php
    } 
    else {
        echo "Please choose an option.";
    }

}
?>