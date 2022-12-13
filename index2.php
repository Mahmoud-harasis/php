<?php
$color = array('mahmoud','green','red','blue','black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"."\n";
?>
<br>
<?php
$color = array('white', 'green', 'red');
foreach ($color as $c)
{
echo "$c, ";
}
sort($color);
echo "<ul>";
foreach ($color as $y)
{
echo "<li>$y</li>";
}
echo "</ul>";
?>
<br>
<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
"Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
"Finland"=>"Helsinki", "France" => "Paris",
"Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
"Germany" => "Berlin", "Greece" => "Athens",
"Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
"Portugal"=>"Lisbon", "Spain"=>"Madrid",
"Sweden"=>"Stockholm", "United Kingdom"=>"London",
"Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
"Czech Republic"=>"Prague", "Estonia"=>"Tallin",
"Hungary"=>"Budapest", "Latvia"=>"Riga","Malta"=>"Valetta",
"Austria" => "Vienna", "Poland"=>"Warsaw") ;
asort($ceu) ;
foreach($ceu as $country => $capital)
{
echo "The capital of $country is $capital"."\n" ;
}
?>
<br>
<?php
 $x = array(1, 2, 3, 4, 5);
 var_dump($x);
 unset($x[3]);
 $x = array_values($x);
 echo '
';
var_dump($x);
?>
<br>
<?php
$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color)."\n";
?>
<br>
<?php
function w3rfunction($value,$key)
{
echo "$key : $value"."\n";
}
$a = '{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail":
{ 
"Publisher": "Little Brown"
 }
  }';
$j1 = json_decode($a,true);
array_walk_recursive($j1,"w3rfunction");
?>
<br>
<?php
$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo " \n After inserting '$' the array is : "."\n";
foreach ($original as $x) 
{echo "$x ";}
echo "\n"
?>
<br>
<?php
echo "
Associative array : Ascending order sort by value
";
$array2=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); asort($array2);
foreach($array2 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Ascending order sort by Key
";
$array3=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); ksort($array3);
foreach($array3 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Descending order sorting by Value
";
$age=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($age);
foreach($age as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
}
echo "
Associative array : Descending order sorting by Key
";
$array4=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40"); krsort($array4);
foreach($array4 as $y=>$y_value)
{
echo "Age of ".$y." is : ".$y_value."
";
} 
?>

<?php
function columns($uarr)
{
$n=$uarr;
if (count($n) == 0)
 return array();
else if (count($n) == 1)
 return array_chunk($n[0], 1);
array_unshift($uarr, NULL);
 $transpose = call_user_func_array('array_map', $uarr);
return array_map('array_filter', $transpose);
}
function bead_sort($uarr)
{
foreach ($uarr as $e)
 $poles []= array_fill(0, $e, 1);
return array_map('count', columns(columns($poles)));
}
echo 'Original Array : '.'
';
print_r(array(5,3,1,3,8,7,4,1,1,3));
echo '
'.'After Bead sort : '.'
';
print_r(bead_sort(array(5,3,1,3,8,7,4,1,1,3)));
?>
<br>
<?php
$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
function merge_arrays_by_index($x, $y)
{
$temp = array(); $temp[] = $x; if(is_scalar($y))
{
$temp[] = $y;
}
else
{
foreach($y as $k => $v)
{
$temp[] = $v;
}
}
return $temp;
}
echo '<pre>'; print_r(array_map('merge_arrays_by_index',$array2, $array1));
?>
<br>
<?php
function array_change_value_case($input, $ucase)
{
$case = $ucase;
$narray = array();
if (!is_array($input))
{
return $narray;
}
foreach ($input as $key => $value)
{
if (is_array($value))
{
$narray[$key] = array_change_value_case($value, $case);
 continue;
}
$narray[$key] = ($case == CASE_UPPER ? strtoupper($value) : strtolower($value));
}
return $narray;
}
$Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
echo 'Actual array ';
print_r($Color);
echo 'Values are in lower case.';
$myColor = array_change_value_case($Color,CASE_LOWER);
print_r($myColor);
echo 'Values are in upper case.';
$myColor = array_change_value_case($Color,CASE_UPPER);
print_r($myColor);
?>
<br>
<?php
 echo implode(",",range(200,250,4))."\n";
?>
<br>
<?php
$my_array = array("abcd","abc","de","hjjj","g","wer");
$new_array = array_map('strlen', $my_array);
// Show maximum and minimum string length using max() function and min() function 
echo "The shortest array length is " . min($new_array) .
". The longest array length is " . max($new_array).'.';
?>
<br>
<?php
$n=range(11,20);
shuffle($n);
for ($x=0; $x< 10; $x++)
{
echo $n[$x].' ';
}
echo "\n"
?>
<br>
<?php
$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
"Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
"Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
"Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
"United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=> "Valetta","Austria" => "Vienna", "Poland"=>"Warsaw") ;
$max_key = max( array_keys( $ceu) ); 
echo $max_key."\n";
?>
<br>
<?php
function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero(array(-1,0,1,12,-100,1))."\n");
?>
<br>
<?php
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third"));
echo $color["holes"][5]."\n"; // prints "second"
echo $color["color"]["a"]."\n"; // prints "Red"
?>