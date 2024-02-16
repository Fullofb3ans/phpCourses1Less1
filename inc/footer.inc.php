<!-- Практическая 1.2 -->
<footer class="footer">
    <div class="container">
      <span class="text-muted">2020 &copy; Интернет-магазин Книжка</span>
    </div>
    <div style = 'display: flex; flex-direction: column; border: 1px solid black; align-items: center;'>
    <?php
    include ('./config.php');
    // 1
    // const AUTHOR = 'Gazinskiy I.V.';
    echo AUTHOR, '<br>';
    // const YEAR = '2024';
    echo YEAR, '<br>';
    // const DBHOST = '';
    // const DBLOGIN = '';
    // const DBPASS = '';
    // const DBNAME = '';
    // 2
    $firstName = 'Igor';
    $lastName = 'Gazinskiy';
    $email = 'igorgazinskii6@gmail.com';
    $address = 'Saratov';
    // 3
    $successOrder = "$firstName, спасибо за покупку";
    echo $successOrder, '<br>';
    // 4
    $categories = ['Action', 'Fantastic', 'Horror', 'Romantic'];
    echo "$categories[0], $categories[1], $categories[2], $categories[3]", '<br>';
    $publisher = ['Новая книга', 'Современность', 'Бука'];
    echo "$publisher[0], $publisher[1], $publisher[2]", '<br>';
    // 5
    $book =['idbook' => 'ID Книги', 'title' => 'Название книги', 'author'=> 'Автор', 'price'=> 'Цена', 'description'=> 'Описание'];
    // , title,author, price, description
    echo $book['idbook'];
    // 6
    $menu = ['firstRow'=> 'Action', 'secondRow'=>'Another Action', 'thirdRow'=>'Something else here'];
    $page = 'index';
    ?>
    </div>
  </footer>