<?php
// #1
function getPlus10($a){
    echo $a + 10;
}
getPlus10(10);
echo '<hr/>';
// #2
function anGetPlus10($a){
    return $a + 10;
}
$sum = anGetPlus10(10);
echo $sum;
echo '<hr/>';
// #3
function pythagoras($first, $second){
   echo $first**2 + $second**2;
}
pythagoras(3, 2);
echo '<hr/>';
// #4
function mortgage($s){
echo $s * ((6/100 * 12) / (1-(1+ (6/100 * 12)-12)));
}
echo mortgage(1000000);
echo '<hr/>';
// #5
function col(...$item){
    echo count($item);
}
col(12,6,123);
echo '<hr/>';
// #6
function countMid(...$items){
    $a = 0;
    foreach($items as $item){
        if(is_numeric($item)&&!is_float($item)){
        $a +=$item;}
    }
    echo $a;
}
countMid(1.2,6,123);
echo '<hr/>';
// #8
function op(int $num1, int $num2, $operator){
if ($operator == '+') 
{return $num1 + $num2;}

else if  ($operator == '-')
{return $num1 - $num2;}
  else if ($operator == '/') 
  {return $num1 / $num2;} 
  else if($operator == '*')
  {return $num1 * $num2;};
}
echo op(1, 2, '-');
echo '<hr/>';
// #10
function staticc(){
    static $a = 0;
    if($a>=1){echo 'Больше одного раза';}
    else {
    echo $a;
    ++$a;}
}
staticc();
staticc();
staticc();
echo '<hr/>';
// #11
function sumMass(...$arr){
    $a = '';
    foreach($arr as $ar){
        $a .= $ar;
    }
    echo $a;
}
sumMass('строка1 ', 'строка2 ');
echo '<hr/>';
// #13
echo strip_tags('<h1>Привет, мир!</h1>');
echo '<hr/>';
// 14
echo stripos('«Ехал Грека через реку»', 'ре');
echo '<hr/>';
// #15
echo mb_strlen('«Ехал Грека через реку»');
echo '<hr/>';
// #16
echo mb_strlen('«Ехал Грека через реку»', '8bit');
echo '<hr/>';
// #17
echo substr_count('«Ехал Грека через реку»', 'ре');
echo '<hr/>';
// #18
echo hypot(2, 3);
echo '<hr/>';
// #19
echo rand(45, 234);
echo '<hr/>';
// #20
echo rand(45, 234)/10;
echo '<hr/>';
// #21
$values=[];
 $arr = array('first'=>45, 'second'=>76, 'third'=>12);
 foreach($arr as $key => $value) {
    array_push($values, $value);
 }
 print_r($values);
 echo '<hr/>';
// #22
$values=[];
 $arr = array('first'=>45, 'second'=>76, 'third'=>12);
 foreach($arr as $key => $value) {
    array_push($values, $key);
 }
 print_r($values);
 echo '<hr/>';
 // #23
 $arr = [45, 'test', 100];
 print_r($arr);
 array_shift($arr);
 array_push($arr, 'тест2');
 print_r($arr);
 echo '<hr/>';
 //  #24
 $arr = array('first'=>45, 'second'=>76, 'third'=>12);
 print_r($arr);
 print_r(array_reverse($arr));
 echo '<hr/>';
 //  #25
 $arr = array_unique(array('45', '76', '12', '12', '45', '12'));
 echo count($arr);
?>