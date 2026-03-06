<!-- fay -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'] ?? '';
    $email = $_POST['email'] ?? '';

    echo "hello " . $user;
}
?>