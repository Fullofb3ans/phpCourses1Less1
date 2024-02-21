<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->

    <title>PHP часть 1. Основы PHP</title>

    <style>
    .card-deck{
      margin-top: 20px      
    }

    .card-body img{
      display: block;
      margin: 0 auto 15px;

    }
    .card-footer{
      background: transparent;
      border: 0;
    }
    </style>
  </head>
  <body>

   

      

 
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
  <a class="navbar-brand" href="/">Интернет-магазин Книжка</a>    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="книгу.." aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Найти!</button>
    </form>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="delivery.html">Доставка</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contacts.html">Контакты</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.html">Войти</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="basket.html">Корзина</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>

  </div>
  </div>
</nav>

<div class="container">

<div class="row">
<div class="col-md-3 col-sm-3 ">
  <!-- ПРАКТИЧЕСКАЯ 3.1 -->
  <!-- №2, №3 -->
<?php
include('./inc/lib.inc.php');
$categories = ['Action', 'Another action', 'Something else here', 'Action', 'Another action', 'Something else here'];
renderCategories($categories);
?>

 <hr>       
 <h4>Цена</h4>
  
  <div class="row">
    <div class="input-group mb-1">
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-default">от</span>
    </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"> &nbsp;
    <div class="input-group-prepend">
      <span class="input-group-text" id="inputGroup-sizing-sm">до</span>
    </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">&nbsp;

    <button type="button" class="btn btn-success">Найти</button>    
  </div>
  </div>
 <hr>  
<!-- №4 -->
<?php
$publishers = ['первое', 'второе', 'третье'];
renderPublisher($publishers);

// #5
$a = saveOrder('1', '2', '3', '4');
echo '<hr/>';
echo 'true? ' . $a;
echo '<hr/>';
// #6
$category = 'horror';
getBooksByCategories($category);
// #7
echo '</hr>';


echo calcAmount();
echo '</hr>';
echo calcAmount(1);
echo '</hr>', '<br/>';
// ПРАКТИЧЕСКАЯ 3.2
// #1
$firstName = ' Игорь ';
echo trim($firstName);
echo '<hr/>';
$tags = '<div>Разметка</div> <br/>';
echo strip_tags($tags);
// #2
const ORDERS = 'orders.txt';
function saveOrders(){
  $firstName = 'Igor ';
   $lastName = 'Gazinskiy ';
   $email='@mail.ru ';
    $address = 'Saratov ';
  global $ORDERS;
  $time = date("H:i:s");
  $order = [$firstName, $lastName, $email, $address, $time];
file_put_contents(ORDERS, $order);
}
saveOrders();
echo '<hr/>';
// #3

$orderForExplode = file_get_contents(ORDERS);
$orderMass = explode(' ', $orderForExplode);
foreach($orderMass as $item){
  echo $item, '<br/>';
} 
// #4
$page = 1;
switch ($page) {
  case '1':
    include('firstPage.php');
    break;
  
  case '2':
  include('secondPage.php');
  break;
}
// #5
$a = NULL;
$b = postParam($a);
function postParam(?string $a){
  return $a;
};
echo $b;
?>
<hr>
</div>

<div class="col-md-9 col-sm-9 ">
  <h1>Каталог</h1>

  <div class="card-deck"> 
      <div class="card">        
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">1200руб</h3>
          <p class="card-text"><small class="text-muted">Автор: dfgdfg</small></p>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. Издательство: <a href="#">Полезное</a></p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
       </div>

      <div class="card">
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">800руб</h3>
          <p class="card-text"><small class="text-muted">Автор: sdgfgfg</small></p>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">2100руб</h3>
          <p class="card-text"><small class="text-muted">Автор: dfgd</small></p>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
      </div>
      
  </div>


  <div class="card-deck">

      <div class="card">        
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">1200руб</h3>
          <p class="card-text"><small class="text-muted">Автор: dfgdfg</small></p>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. Издательство: <a href="#">Полезное</a></p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
       </div>

      <div class="card">
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">800руб</h3>
          <p class="card-text"><small class="text-muted">Автор: sdgfgfg</small></p>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
      </div>

      <div class="card">
        <div class="card-body">
          <img src="http://placehold.it/150x220"  alt="...">
          <h3 class="card-title">2100руб</h3>
          <p class="card-text"><small class="text-muted">Автор: dfgd</small></p>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <button type="button" class="btn btn-primary">В корзину</button>
        </div>
      </div>
      
  </div>


</div>

   
</div>

  
</div>

<div class="container">
     

  </div><!-- /.container -->

  <footer class="footer">
    <div class="container">
      <span class="text-muted">2020 &copy; Интернет-магазин Книжка</span>
    </div>
  </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>