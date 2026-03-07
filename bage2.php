<?php  //fay 

// بداية كود PHP
// حالياً ما فيه معالجة  هنا
// الصفحة فقط تعرض نموذج الأسئلة (Quiz)

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
    <h2>Preferences Quiz</h2>

    <!-- نموذج الأسئلة
         method="post" لإرسال البيانات بشكل مخفي
         action="result.php" يعني إرسال الإجابات إلى صفحة النتائج -->
    <form method="post" action="result.php">

        <!-- السؤال الأول -->
        <p>What type of movies do you prefer?</p>

        <!-- خيارات الإجابة باستخدام radio button -->
        <!-- المستخدم يستطيع اختيار خيار واحد فقط -->
        <label><input type="radio" name="movies" value="action"> Action & Adventure</label><br>
        <label><input type="radio" name="movies" value="fantasy"> Fantasy & Adventure</label><br>
        <label><input type="radio" name="movies" value="horror"> Horror & Mystery</label><br>

        <!-- السؤال الثاني -->
        <p>Do you like anime or fantasy stories?</p>

        <!-- خيارات السؤال الثاني -->
        <label><input type="radio" name="anime" value="yes"> Yes, a lot</label><br>
        <label><input type="radio" name="anime" value="sometimes"> Sometimes</label><br>
        <label><input type="radio" name="anime" value="no"> I prefer realistic stories</label><br>

        <!-- السؤال الثالث -->
        <p>How do you like playing games?</p>

        <!-- خيارات أسلوب اللعب -->
        <label><input type="radio" name="gameplay" value="action"> Combat & Action</label><br>
        <label><input type="radio" name="gameplay" value="explore"> Exploring the world</label><br>
        <label><input type="radio" name="gameplay" value="puzzle"> Solving puzzles</label><br>

        <!-- السؤال الرابع -->
        <p>What type of experience do you prefer?</p>

        <!-- نوع التجربة في اللعبة -->
        <label><input type="radio" name="experience" value="story"> Deep story</label><br>
        <label><input type="radio" name="experience" value="competition"> Competitive gameplay</label><br>
        <label><input type="radio" name="experience" value="quests"> Missions & challenges</label><br>

        <!-- السؤال الخامس -->
        <p>Do you prefer playing:</p>

        <!-- طريقة اللعب المفضلة -->
        <label><input type="radio" name="playstyle" value="alone"> Alone</label><br>
        <label><input type="radio" name="playstyle" value="friends"> With friends</label><br>
        <label><input type="radio" name="playstyle" value="online"> Against other players</label><br>

        <br>

        <!-- زر إرسال الإجابات -->
        <button type="submit">Submit Quiz</button>

    </form>

</body>

</html>