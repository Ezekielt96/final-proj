
  

<!DOCTYPE HTML>  
<html>
<head>
</head>
<body> 
<?php
$text = "Date";
print "<h3>".$text ."</h3>";
echo $_POST["date"];
echo "<br>";
?>
<?php
$text = "Time";
print "<h3>".$text ."</h3>";
echo $_POST["Time"] ;
echo "<br>";
?>
<?php
$text = "Calories";
print "<h3>".$text ."</h3>";
echo $_POST["calories"];
echo "<br>";
?>
<?php
$text = "Pulse Rate";
print "<h3>".$text ."</h3>";
echo $_POST["pulse"];
echo "<br>";
?>
<?php
$text = "Comments";
print "<h3>".$text ."</h3>";
echo $_POST["
comments"];
echo "<br>";
?>
<p>Select an Exercise Type?

<select name="exercisetype">

  <option value="">Select...</option>

  <option value="Weightlifitng">Weightlifting</option>

  <option value="Running">Running </option>

</select>
</p>
    <form action="final.php" method="post">
Date: <input type="text" name="date"><br>
Time: <input type="text" name="Time"><br>
Calories Burned: <input type="text" name="calories"><br>
Maximum Pulse Rate : <input type="text" name="pulse"><br>
<h4>Comment on your Workout</h4>
<textarea name ="comments" cols = "100" rows = "10" placeholder = "Add any comment From your workout Here..."> </textarea>
<input type="submit">

</form>
</body> 