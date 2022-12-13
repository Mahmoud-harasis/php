<?php
//all uppercase letters
print(strtoupper("the quick brown fox jumps over the lazy dog."))."\n";
//all lowercase letters
print(strtolower("THE QUICK BROWN FOX JUMPS OVER THE LAZY DOG"))."\n";
// make a string's first character uppercase
print(ucfirst("the quick brown fox jumps over the lazy dog."))."\n";
// make a string's first character of all the words uppercase
print(ucwords("the quick brown fox jumps over the lazy dog."))."\n";
?>
<br>
<?php
$dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
echo $dt;
?>
<br>
<?php
$str1 = 'The quick brown fox jumps over the lazy dog.';
if (strpos($str1,'jumps') !== false) 
 {
    echo 'The specific word is present.';
 }
else
 {
    echo 'The specific word is not present.';
 }
?>
<br>
<?php
$path = 'www.example.com/public_html/index.php';
$file_name = substr(strrchr($path, "/"), 1);
echo $file_name."\n"; // "index.php"
?>
<br>
<?php
$mailid  = 'rayy@example.com';
$user = strstr($mailid, '@', true);
echo $user."\n";
?>
<br>
<?php
$str1 = 'rayy@example.com';
echo substr($str1, -3)."\n";
?>
<br>
<?php
function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";
?>
<br>
<?php
$str = 'the quick brown fox jumps over the lazy dog.';
echo preg_replace('/the/', 'That', $str, 1)."\n"; 
?>
<br>
<?php
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
?>
<br>
<?php
$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
?>
<br>
<?php
$cha = 'a';
$next_cha = ++$cha; 
//The following if condition prevent you to go beyond 'z' or 'Z' and will reset to 'a' or 'A'.
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
?>
<br>
<?php
$original_string = 'The brown fox';
$string_to_insert ='quick';
$insert_pos = 4;
$new_string = substr_replace($original_string, $string_to_insert.' ', $insert_pos, 0);
echo $new_string."\n";
?>
<br>
<?php
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
?>
<br>
<?php
$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";
?>
<br>
<?php
$str1 = "$12,334.00A";
echo preg_replace("/[^0-9,.]/", "", $str1)."\n";
?>
<br>
<?php
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";
?>
<br>
<?php
$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }
?>
<br>
<?php
for ($x = ord('a'); $x <= ord('z'); $x++)
 echo chr($x);
 echo "\n"
?>
<br>
 <?php

echo "تم الصنع من قبل مواقع الانترنت نسخ لصق "
?>