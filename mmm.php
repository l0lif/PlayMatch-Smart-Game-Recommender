<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<table border = '1' collpadding = '5'>";
echo "<tr><th>Distance</th><th>Cost</th></tr>";
$distance = 50;
while($distance <= 250){
echo "<tr><td align= 'center'> $distance </td><td align ='center'>"
echo ($distance / 10)."</td></tr>";
$distance += 50;



}
echo "</table>";

?>
</body>
</html>

