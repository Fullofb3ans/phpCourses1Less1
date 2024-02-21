<!-- #1 -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
// $time = date("H");
// // echo $time % 2 == 0 ?  "<body style='background-color: white;'></body>" :  "<body style='background-color: black'></body>";
?>
</html> -->


<!-- #2 -->
<?php
$memo = memory_get_usage();
if($memo < 134217728){
    echo "на скрипт выделяется объем памяти меньший 128Mb", '<hr/>';
}
// #3
$dayToday = date("N");
switch ($dayToday) {
    case '1':
      echo  "Сегодня понедельник", '<hr/>';
        break;
    case '2':
     echo   "Сегодня вторник", '<hr/>';
        break;
    case '3':
     echo   "Сегодня среда", '<hr/>';
        break;
    case '4':
      echo  "Сегодня четверг", '<hr/>';
        break;
    case '5':
     echo   "Сегодня пятница", '<hr/>';
        break;
    case '6':
      echo  "Сегодня суббота", '<hr/>';
        break;
    case '7':
      echo  "Сегодня воскресенье", '<hr/>';
        break;
}
// #4
for ($i=1; $i <=100 ; $i++) { 
echo $i . ' ';}
echo "<hr/>";
// #5
for ($i=23; $i <=78 ; $i++) { 
    echo $i . ' ';}
    echo "<hr/>";
// #6
echo "<li>";
for ($i=1; $i <=10 ; $i++) { 
    echo "<ul>$i</ul>";
}
    echo "</li>";

    echo "<hr/>";
// #7
$randomMass = [];
for ($i=0; $i < 100; $i++) { 
    array_push($randomMass, rand());
}
// #8
$a = 0;
while ($a < count($randomMass)-1) {
    echo $randomMass[$a];
$a++;
}
echo '<hr/>';
    foreach ($randomMass as $key => $value) {
        echo $value;
    }
echo '<hr/>';
// #9
echo '<div>';
$stringMass = [];
for ($i=0; $i <10 ; $i++) { 
    array_push($stringMass, strval('строка' . $i));
}
foreach ($stringMass as $key => $value) {
    echo $value, '<br>';
};
echo "</div>";
echo "<hr/>";
// #10
$item = ['title'=> 'Заголовок1', 'desc'=> 'Описание1', 'price'=> 'цена1'];
$item2 = ['title'=> 'Заголовок2', 'desc'=> 'Описание2', 'price'=> 'цена2'];
$keyMass=[$item, $item2];
for ($i=0; $i < count($keyMass); $i++) { 
   echo "<h2>" . $keyMass[$i]['title']. "</h2>"  . "<p>" . $keyMass[$i]['desc'] ."</p>" ."<a>" . $keyMass[$i]['price'] . "</a>" ;
}
echo "<hr/>";
// #11
$item = ['title'=> 'Заголовок1', 'desc'=> 'Описание1', 'price'=> 100];
$item2 = ['title'=> 'Заголовок2', 'desc'=> 'Описание2', 'price'=> 200];
$keyMass=[$item, $item2];
for ($i=0; $i < count($keyMass); $i++) { 
   echo "<h2>" . $keyMass[$i]['title']. "</h2>";
    echo "<p>" . $keyMass[$i]['desc'] ."</p>";
     echo $keyMass[$i]['price'] < 199 ? "<a style='background-color:red;'>" . $keyMass[$i]['price']. "</a>" : "<a>" . $keyMass[$i]['price'] . "</a>" ;
}
echo "<hr/>";
// #12
$randomMassTo50 = [];
$randomUnder72 = [];
for ($i=0; $i < 50; $i++) { 
    array_push($randomMassTo50, rand(0, 100));
    $randomMassTo50[$i]< 72 ? array_push($randomUnder72, $randomMassTo50[$i]) : '';
}
foreach ($randomMassTo50 as $key => $value) {
    echo $value, '<br>';
};
echo '<hr/>';
foreach ($randomUnder72 as $key => $value) {
    echo $value, '<br>';
};
echo '<hr/>';
// 13
for ($i=1; $i <=100 ; $i++) { 
    echo $i % 2 == 0 ? "<div>$i</div>" : "<div style='background-color:black; color:white;'>$i</div>";
}
echo "<hr/>";
// 14
for ($i=1; $i <=20 ; $i++) { 
    echo "<div class='accordion' id='accordionExample'>
    <div class='accordion-item'>
      <h2 class='accordion-header'>
        <button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
          Accordion Item #$i
        </button>
      </h2>
      <div id='collapseOne' class='accordion-collapse collapse show' data-bs-parent='#accordionExample'>
        <div class='accordion-body'>
          <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
        </div>
      </div>
    </div>
    </div>";
}
echo '<hr/>';
// #15
$item = ['title'=> 'Название', 'link'=> 'www.www.ru'];
for ($i=1; $i <count($item) ; $i++) {
  echo "<div class='accordion' id='accordionExample'>
    <div class='accordion-item'>
      <h2 class='accordion-header'>
        <button class='accordion-button' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='true' aria-controls='collapseOne'>
        {$item['link']} $i
        </button>
      </h2>
      <div id='collapseOne' class='accordion-collapse collapse show' data-bs-parent='#accordionExample'>
        <div class='accordion-body'>
          <strong>{$item['title']}</strong>
        </div>
      </div>
    </div>
  </div>";
}
echo '<hr/>';
// #16
echo "<div class='calendar'>
<table>
<caption><span>Февраль</span> 2024</caption>
    <tr>
        <th>Пн</th>
        <th>Вт</th>
        <th>Ср</th>
        <th>Чт</th>
        <th>Пт</th>
        <th>Сб</th>
        <th>Вс</th>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
    </tr>
    <tr>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        <td>9</td>
        <td>10</td>
        <td>11</td>
    </tr>
    <tr>
        <td>12</td>
        <td>13</td>
        <td>14</td>
        <td>15</td>
        <td>16</td>
        <td>17</td>
        <td>18</td>
    </tr>
    <tr>
        <td>19</td>
        <td>20</td>
        <td>21</td>
        <td>22</td>
        <td>23</td>
        <td>24</td>
        <td>25</td>
    </tr>
    <tr> 
        <td>26</td>
        <td>27</td>
        <td>28</td>
        <td>29</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
</table>
</div>";
?>

