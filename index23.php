<?php
// ___________________________1
$arr=array("red","green","white");

echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the".$arr[0]."  carpet,
 
the ".$arr[1]." lawn, the ".$arr[2]."  house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
echo "<hr>";
// ___________________________2
echo"<ul>
  <li>$arr[0]</li>
  <li>$arr[1]</li>
  <li>$arr[2]</li>
</ul>";
echo "<hr>";
// ___________________________3
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 


foreach($cities as $key => $value)
{
  echo "The capital of ".$key." is ".$value."<br>";
}
echo "<hr>";
// ___________________________4
$colorr = array (4 => 'white', 6 => 'green', 11=> 'red');
echo current($colorr );
echo "<hr>";
// ___________________________5

// $num= array (1,2,3,4,5);
// array_push($num, 14);
// print_r($num);
// echo count($num);

$original = array( 1,2,3,4,5 );
$inserted = array( '$' );
 
array_splice( $original, 3, 0, $inserted );
print_r($original);
echo "<hr>";
// ___________________________6

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
print_r($fruits);
echo "<br>";
foreach($fruits as $key => $value)
{
  echo $key."= ".$value."<br>";
}
echo "<hr>";
// ___________________________7
$temp_array = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73];
$tot_temp = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $tot_temp += $temp;
}
 $avg_high_temp = $tot_temp/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp."<br>
"; 
sort($temp_array);
echo " List of seven  lowest temperatures :";
for ($i=0; $i< 7; $i++)
{ 
echo $temp_array[$i].", ";
}
echo "<br>";
echo "List of seven  highest temperatures :";
for ($i=($temp_array_length-7); $i< ($temp_array_length); $i++)
{
echo $temp_array[$i].", ";
}
echo "<hr>";
// ___________________________8
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
echo '<pre>';
print_r($result);
echo '</pre>';
echo "<hr>";
// ___________________________9
$colorsss = array("red","blue", "white","yellow");
foreach($colorsss  as $value){
  $value = strtoupper($value);
  echo $value."<br>"  ;
}
echo "<hr>";
// _________________________10
$colorss = array("RED","BLUE", "WHITE","YELLOW"); 
  $rrr = array();
foreach($colorss  as $value){
    $value = strtolower($value);
    echo $value."<br>"  ;
 
array_push($rrr ,$value);

  }
  echo '<pre>';
  print_r($rrr);
  echo '</pre>';
// ___________________________11
for ($i = 200 ; $i <250 ;$i+=4){
    echo $i . ",";
    
}
echo "<hr>";

// ___________________________12

// $max=0;
// $min=1000;
// $words =  array("abcd","abc","de","hjjj","g","wer");
// for ($i = 0 ; $i < count($words); $i++){
//     $a= strlen($words[$i]);
//     $l= strlen($words[$i]);
//     if ($l<$min){
//         $min =$l;
//         $z=$i;
        
        
//     } 
//     if ($a>$max){
//         $max =$a;
//         $q=$i;
        
//     }
    
// } 
// echo "The shortest  array length is $l and value is $words[$z] " ;
// echo "<br>"; 
// echo "The longest array length is $a and value is $words[$q] ";
// echo "<br>";

$words =  array("abcd","abc","de","hjjj","g","wer");
$s=[];
for ($i = 0 ; $i < count($words); $i++){
    array_push ($s,strlen($words[$i]));


    
}
sort($s);
echo "The shortest  array length is " . $s[0] .".";
echo "The longest array length is " . $s[count($s)-1] . ".";
echo "<br>";


echo "<hr>";

// ___________________________13
for ($i=0;$i<=10;$i++){
    echo rand(11,20).",";
}

// ___________________________14

echo "<hr>";
echo "<br>";
echo "<br>";
$array1 = array( 2, 0, 10, 12, 6);
$arr2=[0];
echo min(array_diff($array1, $arr2))

 ?>


