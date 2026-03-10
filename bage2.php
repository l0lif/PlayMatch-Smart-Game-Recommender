
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
    <h2>WWhich type of movies do you prefer?</h2>
    <label><input type="radio" name="start" value="combat"> Action and chases</label><br>
    <label><input type="radio" name="start" value="story">Fantasy and adventure</label><br>
    <label><input type="radio" name="start" value="mechanics"> Horror and mystery</label><br>

    <!-- Question 2 -->
    <h2>Do you like anime or fantasy stories?</h2>
    <label><input type="radio" name="challenge" value="skill">Yes, very much</label><br>
    <label><input type="radio" name="challenge" value="strategy"> Sometimes</label><br>
    <label><input type="radio" name="challenge" value="explore">  No, I prefer realistic stories</label><br>

    <!-- Question 3 -->
    <h2>How do you prefer to spend your time in a game?</h2>
    <label><input type="radio" name="style" value="combat"> Combat and action</label><br>
    <label><input type="radio" name="style" value="tactic"> Exploring the game world</label><br>
    <label><input type="radio" name="style" value="story"> Solving puzzles or planning</label><br>

    <!-- Question 4 -->
    <h2> What kind of experience do you prefer?</h2>
    <label><input type="radio" name="role" value="attacker">A deep story </label><br>
    <label><input type="radio" name="role" value="leader"> Competition with other players </label><br>
    <label><input type="radio" name="role" value="support">Challenges and missions </label><br>

    <!-- Question 5 -->
    <h2>How do you prefer to play?</h2>
    <label><input type="radio" name="world" value="realistic">Alone</label><br>
    <label><input type="radio" name="world" value="fantasy"> With friends</label><br>
    <label><input type="radio" name="world" value="future"> Against other players</label><br>

    <!-- Question 6 -->
    <h2>Which type of world attracts you the most?</h2>
    <label><input type="radio" name="motivation" value="competition"> A realistic worls</label><br>
    <label><input type="radio" name="motivation" value="progress">A fantasy world</label><br>
    <label><input type="radio" name="motivation" value="discover"> A futuristic world</label><br>

    <!-- Question 7 -->
    <h2>How do you like games to be?</h2>
    <label><input type="radio" name="difficulty" value="practice"> Fast and full of action</label><br>
    <label><input type="radio" name="difficulty" value="strategy"> Require thinking and strategy</label><br>
    <label><input type="radio" name="difficulty" value="explore">Calm and exploratory</label><br>

    <!-- Question 8 -->
    <h2>Which experience sounds the most enjoyable to you?</h2>
    <label><input type="radio" name="fun" value="battle"> Fighting enemies and completing levels</label><br>
    <label><input type="radio" name="fun" value="plan">Building a strategy to wint</label><br>
    <label><input type="radio" name="fun" value="story"> Exploring a story and a new world</label><br>

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
    <h2>When you start a new game, what attracts you the most at the beginning?</h2>
    <label><input type="radio" name="start" value="combat"> Combat system and action</label><br>
    <label><input type="radio" name="start" value="story"> Story and world</label><br>
    <label><input type="radio" name="start" value="mechanics"> Mechanics and strategies</label><br>

    <!-- Question 2 -->
    <h2>What type of challenges do you prefer in games?</h2>
    <label><input type="radio" name="challenge" value="skill"> Fast reflexes and skill</label><br>
    <label><input type="radio" name="challenge" value="strategy"> Planning and decision making</label><br>
    <label><input type="radio" name="challenge" value="explore"> Exploring the world and solving puzzles</label><br>

    <!-- Question 3 -->
    <h2>Which gameplay style do you enjoy the most?</h2>
    <label><input type="radio" name="style" value="combat"> Direct combat against enemies</label><br>
    <label><input type="radio" name="style" value="tactic"> Resource management and tactics</label><br>
    <label><input type="radio" name="style" value="story"> Exploring the world and interacting with the story</label><br>

    <!-- Question 4 -->
    <h2>When playing with others, what role do you prefer?</h2>
    <label><input type="radio" name="role" value="attacker"> Main attacker in the team</label><br>
    <label><input type="radio" name="role" value="leader"> Tactical planner or leader</label><br>
    <label><input type="radio" name="role" value="support"> Support or explorer</label><br>

    <!-- Question 5 -->
    <h2>What type of worlds do you prefer in games?</h2>
    <label><input type="radio" name="world" value="realistic"> Realistic or military worlds</label><br>
    <label><input type="radio" name="world" value="fantasy"> Fantasy worlds with magic and creatures</label><br>
    <label><input type="radio" name="world" value="future"> Futuristic or sci-fi worlds</label><br>

    <!-- Question 6 -->
    <h2>What makes you keep playing a game for a long time?</h2>
    <label><input type="radio" name="motivation" value="competition"> Competing with other players</label><br>
    <label><input type="radio" name="motivation" value="progress"> Character and skill progression</label><br>
    <label><input type="radio" name="motivation" value="discover"> Discovering secrets of the world and story</label><br>

    <!-- Question 7 -->
    <h2>When you face a difficult challenge in a game, what do you usually do?</h2>
    <label><input type="radio" name="difficulty" value="practice"> Improve your skill until you beat it</label><br>
    <label><input type="radio" name="difficulty" value="strategy"> Change your strategy or playstyle</label><br>
    <label><input type="radio" name="difficulty" value="explore"> Look for different ways to solve the problem</label><br>

    <!-- Question 8 -->
    <h2>Which experience sounds the most fun to you?</h2>
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