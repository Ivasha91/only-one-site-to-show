<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-RU-Compatible"content="ie=edge">
    <title>Саженцы в Томске</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <!--header-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
      <div class="container-fluid">
        <a href="#" class="navbar-brand"><img src="../img/Logo_1.png" alt=""></a>
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
    <!--Contacts-->
    <div class="form__wrapper">
      <form id="form-contact" method="POST" class="form-element" autocomplete="off">
        <p class="form-title">Закажите обратный звонок и наш консультант свяжется с вами</p>
        <p class="form-message"></p>
          <input name="name" type="text" class="form-input__name" tabindex="0" placeholder="Введите ваше имя" required>
          <input name="phone" type="tel" class="form-input__phone" tabindex="0" pattern="^[ 0-9]+$" placeholder="Введите ваш телефон" required>
          <input name="theme" type="hidden" class="form-input__theme"  value="Заявка с сайта">
          <input type="submit" class="form-input__button" value="Отправить">
      </form>
    </div>
    <!--Footer-->
    <footer class="container-fluid">
      <div class="container-fluid">
        <div class="row padding text-center">
          <div class="col-12">
            <h2>Наши контакты</h2>
          </div>
          <div class="col-12 social padding">
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <script type="text/javascript" src="../js/formMail.js"></script> -->
    <script type="text/javascript" src="../js/main.js"></script>
    <script src="../js/telegramform.js"></script>
  </body>
</html>
