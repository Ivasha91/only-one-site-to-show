<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Саженцы в Томске</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

  </head>
  <body>
    <!-- проверить все ли id = id, не лучше ли сделать класс -->
    <!-- при перехое с другой страницы вылезает текст с номером, его либо меньше, либо скрыть -->
    <!-- а где ротация элементов первого блока? медленно https://itchief.ru/bootstrap/carousel-->
    <!-- TODO: change all pages when change nav or footer.
    проверить страницы на всё то что проверял предыдущую, неиспользуемые стили, импортант и тп, добавить секшон и тп
    
        Проверить лишние div css сократить на всех страницах. сделать поиск на сайте и корзину.
        сделать переход из категорий в каталог-->
        <!-- разделить сайт на секции section + section header -->
    <!--header-->     <!-- in every file needed to change a.href, img.href-->
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/parts/header.php");?>
    <!--slider-->
    <div class="carousel slide" data-ride="carousel" id="slides">
      <ul class="carousel-indicators">
        <li data-target="#slides" data-slide-to="0" class="active"></li>
        <li data-target="#slides" data-slide-to="1"></li>
        <li data-target="#slides" data-slide-to="2"></li>
      </ul>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="img-fluid" src="img/slider_1.jpg" alt="Слайдер 1">
          <div class="carousel-caption">
            <h1 class="display-2">Саженцы в Томске</h1>
            <h4 id="underTopic">С доставкой на дом</h4>
            <button onclick="scrollToKatalog()" type="button" name="button" class="underTopicBtn btn btn-success">Каталог</button>
            <button type="button" name="button" class="underTopicBtn btn btn-warning active">Заказать</button></div>
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="img/slider_2.jpg" alt="Слайдер 2">
        </div>
        <div class="carousel-item">
          <img class="img-fluid" src="img/slider_3.jpg" alt="Слайдер 3">
        </div>
      </div>
      <!-- <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Предыдущий</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Следующий</span>
      </a> -->
    </div>
    <!--Charactrerisics--> <!-- TODO: убрать вертикал элаины и пр. и выровнять по высоте -->

      <div class="col-12 partGreen" style="display:flex;">
      <div style="margin: auto;">
        <h1 class="display-4"  id="mainTopic">Применение саженцев</h1>
      </div>
    </div>

    <div class="container padding" id="intro">
      <div class="row text-center alert">
        <div class="col-12">
          <p class="lead">
            (НАЗВАНИЕ)Магазин саженцев и садовых растений предлагает вам прекрасные растения по вполне доступным ценам.
            Мы Предъявляем высокие требования к производству посадочного материала и средствам ухода за ним,
            что гарантирует высокое качество всех приобретенных у нас саженцев.
            Каждый год мы обновляем ассортимент,
            тщательно отбираем только хорошо адаптированные образцы.
          </p>
        </div>
      </div>
    </div>
    <!--Section with pic-->
    <!-- <div class="col-12" id="partYellow">
      <h1 class="display-4">Что-то про Саженцы</h1>
    </div> -->
     <div class="container-fluid bg-dark" id="main">
      <div class="row">
        <div class="offset-sm-2 col-sm-4" id="mainContent">
          <h3 class="display-4">Что-то про Саженцы</h3>
          <p id="mainText">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus eius repellat eveniet nisi, eligendi nobis quis est
                possimus voluptas corrupti velit dicta, temporibus, fugiat.
                 Soluta laboriosam quam amet? Ipsam, unde.
              <br><br>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Accusamus eius repellat eveniet nisi, eligendi nobis quis est
                possimus voluptas corrupti velit dicta, temporibus, fugiat.
                 Soluta laboriosam quam amet? Ipsam, unde.
          </p>
          <a href="#" class="introBtn btn btn-success active">Заказать</a>
        </div>
        <div class="col-sm-6 noPadding" >
          <img src="img/additional_1.jpg" alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <!-- Cards    переход  с этих кнопок чётко на группу товаров, убрать id сделать class -->
    <div class="col-12 text-center" id="cardsTop">
      <h1 class="display-4">Каталог продукции</h1>
    </div>
    <div id="cards">
      <!-- <div class="container-fluid padding">
        <div class="row alert text-center">
        </div>
      </div> -->
      <div class="container padding">
        <div class="row padding">
          <div class="col-md-4">
            <div class="card">
              <img src="img/card_1.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h4 class="card-title">Цветы</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                <a href="http://o95280mn.beget.tech/pages/catalog.php#FlowersCards" class="cardsBtn btn btn-success">Посмотреть</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/card_2.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h4 class="card-title">Овощи</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                <a href="http://o95280mn.beget.tech/pages/catalog.php#VegetablesCards" class="cardsBtn btn btn-success">Посмотреть</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="img/card_3.jpg" class="card-img-top" alt="">
              <div class="card-body">
                <h4 class="card-title">Кустарники</h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                <a href="http://o95280mn.beget.tech/pages/catalog.php#BushesCards" class="cardsBtn btn btn-success">Посмотреть</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- TODO: advantages(преимущества покупки у нас типа рпиживутся, не замают много места, уход, натур материалы, автоматическое освещение) -->
    <!--Footer-->
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/parts/footer.php");?>
    
    <!--Scripts-->
    
    <script type="text/javascript" src="js/main.js"></script> <!-- in every file needed to change src-->
  </body>
</html>
