<?php 
function renderCategories($categories){
    echo '<h4>Категория</h4>';
    foreach ($categories as $category) {
        echo "
        <div class=\"row\">
          <a class=\"dropdown-item\" href=\"#\">$category</a>
        </div>";
    }
};

function renderPublisher($publishers){
   echo '<h4>Издательство</h4>
   <div class="row">
   <ul class="list-group col-md-12 col-sm-12">';

   foreach ($publishers as $publisher) {
    echo "<li class=\"list-group-item\">
        <input type=\"checkbox\"   id=\"exampleCheck1$publisher\">
        <label class=\"form-check-label\" for=\"exampleCheck1$publisher\">$publisher</label>
      </li>";
    }
    echo "</ul>
        </div>";
};

function renderMenu($menu){

};

function saveOrder($firstName, $lastName, $email, $address){
    if($firstName && $lastName && $email && $address){
        echo $firstName .  $lastName . $email . $address;
        return true;
    } else {
        echo 'Что-то пропущено';
    }
};

function getBooksByCategories($category){
$book =['category'=>'horror', 'idbook' => '1', 'title' => 'Книга1', 'author'=> 'Автор1', 'price'=> 'Цена1', 'description'=> 'Описание1'];
  $book2 =['category'=>'action', 'idbook' => '2', 'title' => 'Книга2', 'author'=> 'Автор2', 'price'=> 'Цена2', 'description'=> 'Описание2'];
  $books = [$book, $book2];
  for ($i=0; $i < count($books); $i++) { 
    if($books[$i]['category'] == $category){
       print_r($books[$i]);
    }
  }
};

function calcAmount($delta=0){
static $a = 1;
return $delta+=$a;
};

?>