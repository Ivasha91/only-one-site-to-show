<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Pricing example · Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        #enscart_my_wrapper {
          text-align: center;
          position: fixed;
          top: 80px;
          right: 20px;
          z-index: 1140;
      }
        #enscart_myimage_wrapper {
          background: #ffffff;
          border-radius: 30px;
          width: 60px;
          height: 60px;
          cursor: pointer;
          box-shadow: 0 0 20px 0 rgba(0,0,0,.4);
          -moz-transition: all .2s ease-out;
          -o-transition: all .2s ease-out;
          -webkit-transition: all .2s ease-out;
          transition: all .2s ease-out;
          z-index: 1140;
      }
        #enscart_my_wrapper img {
          height: 80%;
          width: auto;
          padding-top: 8px;
      }
        #enscart_my_counter_wrapper {
          cursor: pointer;
          min-width: 30px;
          height: 30px;
          background-color: #d62240;
          color: #fff;
          border-radius: 30px;
          position: absolute;
          right: -5px;
          top: -5px;
          text-align: center;
          line-height: 30px;
          font-family: Arial,sans-serif;
          margin: 0px 3px;
          z-index: 1150;
      }
      #easynetshop-cart {
          border: none;
          background-color: transparent;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <!-- <a href="#" class="navbar-brand"><img src="../img/Logo_1.png" alt=""></a> -->
        <button type="button" name="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a href="../index.html" class="nav-link">Главная</a>
            </li>
            <li class="nav-item">
              <a href="about.html" class="nav-link">О нас</a>
            </li>
            <li class="nav-item">
              <a href="contacts.html" class="nav-link">Контакты</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Сервисы</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Команда</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="card-deck mb-0 text-center">
        <div class="card mb-0 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Простой</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">100 <small class="text-muted">руб</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 пользователей</li>
              <li>2 GB диск</li>
              <li>Доступ к сервису поддержки</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Купить</button>
          </div>
        </div>
        <div class="card mb-0 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Базовый</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">200 <small class="text-muted">руб</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 пользователей</li>
              <li>10 GB диск</li>
              <li>Доступ к сервису поддержки</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Купить</button>
          </div>
        </div>
      </div>
    </div>
    <!-- корзина -->
    <div id="easynetshop-cart">
        <div id="enscart_my_wrapper">
          <div id="enscart_myimage_wrapper">
            <img src="https://i.ibb.co/ZfJ03Ns/shop1.png">
          </div>
          <div id="enscart_my_counter_wrapper"><span  id="easynetshop-cart-count"> 0 </span></div>
        </div>
      </div>
  </body>
</html>
