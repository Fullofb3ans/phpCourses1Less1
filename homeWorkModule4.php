<form method='POST'>
<input name='log'/>
<input name='pass'/>
<button type='submit'>Вывести</button>
</form>
<?php
// #1
if(isset($_POST['pass']) && isset($_POST['log'])){
echo  'pass=' . (string)$_POST['pass'], '<br/>';
echo  'log=' . (string)$_POST['log'];
}
?>
<!-- #2 -->
<form method='POST'>
<input name='city'/>
<button type='submit'>Вывести</button>
</form>
<?php
$cities = ['moscow', 'engels', 'chita', 'saratov'];
if (isset($_POST['city'])){
    foreach ($cities as $city) {
       if($city == $_POST['city']) {
        echo $city;
       }
    }
}
?>
<!-- #3 -->
<form method='POST'>
<input name='s'/>
<input name='p'/>
<input name='m'/>
<button type='submit'>Вывести</button>
</form>
<?php
if (isset($_POST['s']) && isset($_POST['p']) & isset($_POST['m'])){
$s = (int)$_POST['s'];
$p = (int)$_POST['p'];
$m = (int)$_POST['m'];
    $x = ($s*$p) / (1 - (1+$p)*(1 - $m));
    echo $x;
}
?>
<!-- №4 -->
<form method='POST'>
<input name='logJohn'/>
<input name='passJohn'/>
<button type='submit'>Вывести</button>
</form>
<?php
if(isset($_POST['logJohn']) && isset($_POST['passJohn'])){
if($_POST['logJohn'] == 'john' && $_POST['passJohn'] == 'qwerty')
{
    // include('Для примера.php');
    echo 'секретная часть страницы';
}
}
?>
<!-- #8 -->
<form method='GET'>
<input name='input'/>
<input type="checkbox" name="check" value='check' id=""/>
<input type="radio" name='radio' value='radio'/>
<select name='select'>
    <option value='1'>1</option>
</select>
<button type='submit'>Вывести</button>
</form>
<?php
print_r($_GET);
?>
<!-- #9 -->
<form method='POST' action='?param=2'>
<button type='submit'>Вывести</button>
</form>
<?php
print_r($_GET);
print_r($_POST);
?>