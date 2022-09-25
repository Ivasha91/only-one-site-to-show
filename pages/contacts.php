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
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>
    <!--header-->
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/parts/header.php");?>
    <!--Contacts-->
    <div class="container">
        <div class="col-12 text-center cardsTop">
          <h1 class="display-4" id="FlowersCards">Контакты:</h1>
          <div class="row">
              <div class="col-md-6">
                  <h4 class="contacts_info">Телефон:</h4>
              </div>
              <div class="col-md-6">
                  <h4 class="contacts_info">89999999999</h4>
              </div>
          </div>
          <hr>
          <div class="row">
              <div class="col-md-6">
                  <h4 class="contacts_info">Email:</h4>
              </div>
              <div class="col-md-6">
                  <h4 class="contacts_info">hochu_sagenci@gmail.com</h4>
              </div>
          </div>
          <hr>
          <div class="row">
                <div class="col-md-6" style="margin:auto;"><h4 class="contacts_info">Карта проезда:</h4></div>
                <div class="col-md-6" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/67/tomsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Томск</a><a href="https://yandex.ru/maps/67/tomsk/?ll=84.964365%2C56.510489&mode=whatshere&utm_medium=mapframe&utm_source=maps&whatshere%5Bpoint%5D=84.959107%2C56.510964&whatshere%5Bzoom%5D=16&z=16" style="color:#eee;font-size:12px;position:absolute;top:14px;">Севастопольская улица, 49 — Яндекс.Карты</a><iframe id="map" src="https://yandex.ru/map-widget/v1/-/CCUm6-tthB"  frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
        </div>
        </div>
        
  
        <div class="col-12 text-center cardsTop">
          <h1 class="display-4" id="FlowersCards">Есть вопрос?</h1>
        </div>
      <form id="mailForm" method="POST" class="form-element" autocomplete="off">
        <input type="email" name="email" placeholder="Ваш Email" id="email" class="form-control"><br>
        <input type="text" name="name" placeholder="Имя" id="name" class="form-control" required><br>
        <input type="phone" name="phone" placeholder="Телефон" pattern="^[ 0-9]+$" id="phone" class="form-control" required><br>
        <textarea name="message" rows="8" cols="80" id="message" placeholder="Сообщение"></textarea><br>
        <button type="submit" name="button" id="sendMail" class="btn btn-success" type="submit">Отправить</button>
      </form>
      <div id="errorMess" ></div>
    </div>
    <!--Footer-->
    <?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/parts/footer.php");?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/formMail_ask.js"></script>
    <script type="text/javascript" src="../js/main.js"></script>
  </body>
</html>
