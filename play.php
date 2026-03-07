<!-- fay -->
<?php
// هذا الشرط يتأكد أن الصفحة استقبلت البيانات باستخدام POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // استقبال اسم المستخدم من الفورم
    // لو ما كان موجود يحط قيمة فاضية
    $user = $_POST['user'] ?? '';
    
    // استقبال الايميل من الفورم
    // لو ما كان موجود يحط قيمة فاضية
    $email = $_POST['email'] ?? '';

    // طباعة رسالة ترحيب باسم المستخدم
    echo "<p>hello . $user<p>";
}
?>
<html>  <!--Maryam-->

<head>
    <!-- ربط ملف التنسيق CSS الخاص بالصفحة -->
    <link rel="stylesheet" href="play.css">
</head>

<body>
    <!-- مسافات عشان تنزل الفورم شوي تحت -->
    <br><br><br><br>

    <!-- الفورم يرسل البيانات باستخدام POST إلى صفحة bage2.php -->
    <form method="POST" action="bage2.php">
        
        <!-- عنوان السؤال -->
        <h2>are you an old Gammer?</h2>

       <!-- خيار نعم -->
       <div class="form-check">
           <!-- زر اختيار (radio button) -->
           <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault1">
           
           <!-- النص المرتبط بزر الاختيار -->
           <label class="form-check-label" for="radioDefault1">
               Yes,old Gammer
           </label>
       </div>

       <!-- خيار لا -->
       <div class="form-check">
           <!-- زر اختيار ثاني -->
           <input class="form-check-input" type="radio" name="radioDefault" id="radioDefault2" checked>
           
           <!-- النص المرتبط بزر الاختيار -->
           <label class="form-check-label" for="radioDefault2">
               No,new Gamme
           </label>
       </div>

       <!-- زر إرسال الفورم -->
       <div class="col-12">
           <button class="btn btn-primary" type="submit">Submit form</button>
       </div>

       <br> <br>
    </form>
</body>

</html>
