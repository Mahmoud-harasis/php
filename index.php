
<?php
   echo 'Tomorrow I ll learn PHP global variables. ';
?>
<br>
<?php
echo '  This is a bad command: del c:';
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <style>
#he{
    background: #000;
    color: aliceblue;
}
#he:hover{
    background: seagreen;
    color: sandybrown;
}
   </style>

</head>
   <body>
   <form method='POST'>
   <h2>Please input your name:</h2>
 <input type="text" name="name">
 <input id="he"  type="submit" value="Submit Name">
 </form>
<?php
$name = $_POST['name'];
echo "<h3> Hello $name </h3>";
?>
</body>
</html>

<?php  
echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  
?>  
<br>
<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
?>
<br>
<?php
$url = 'https://www.w3resource.com/php-exercises/php-basic-exercises.php';
$url=parse_url($url);
echo 'Scheme : '.$url['scheme']."\n";
echo 'Host : '.$url['host']."\n";
echo 'Path : '.$url['path']."\n";
?>
<br>
<?php
$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:purple;">\1</span>',$text);
echo $text;
?>
<br>
<?php
phpinfo();
?>
