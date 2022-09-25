<!-- переделать стили в PascalCase -->
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
    <!-- <link rel="stylesheet" href="../css/main.css">  вместо main css хэдэра и футера-->
    <link rel="stylesheet" href="../css/cartStyles.css" />
    <link rel="stylesheet" href="../css/main.css">
    
    <!-- сравнить meta -->
    
    <!-- Удалиться лишние стили в не main окнах -->
<!-- привести всё к одинаковому виду классов и тп либо через дефис либо Camel Case -->
<!--Кнопки к одному размеру,адаптивный текст снова, отнести корзину левее, бокс выше, конечную картинку правее.-->
<!-- в cartItem размер уравнять, он разный из-за разного количества строк текста -->
<!-- увеличивать размер корзины при увеличении экрана -->
<!-- в разрешении 4к элементы сильно сужены, надо сделать шире, убрав margin, посмотреть на max-width у container -->
<!-- на большом разрешении дальше увозить корзинку у кнопки -->
<!-- убрать лишние классы у кнопок и пр. -->
<!-- шрифт текста как на index html -->
<!--TODO: кнопки респонсив по размеру, ксс файлы по отношению к странице и + общие типа футера. мобайл фёрст вертска -->
<!-- обернуть cardstop, удалить лишний див внизу -->
<!-- TODO: сворачиваемые категории, коллапс, изменить футерф,хэдэры, разнести стили по разным файлам, привести js к одному виду, классы и ИД, далить 1 из скриптов на jquery снизу или сверху -->
<!-- проверить как всё работает на повернутом телефоне -->
<!-- настоить отступы во всей программе, смещение корзины на разных экранах, респонсив,корзину нормальной картинкой -->
  </head>
  <body>
  <!--header-->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/parts/header.php");?>
  <!--Catalog-->
    <main>
      <section>
        <div class="col-12 text-center cardsTop">
          <h1 class="display-4" id="FlowersCards">Цветы</h1>
        </div>
        <div class="cards">
          <div class="container">
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="../img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Астра</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor , earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Саливия</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet,rem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectet consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_3.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Агерации</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolorrem ipsum dolor sit amet, consectet sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Георгины</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Цепинария</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit rem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectetamet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_3.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Цемозия</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit ais ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Петуния</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor piciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Алисиция</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_3.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Портулак</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, con Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Бархатция</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adiprem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectetisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Циния</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspirem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectetciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_3.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Настурция</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatrem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectetis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Вьюни Фасоль</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Ладатера</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="col-12 text-center cardsTop">
          <h1 class="display-4" id="VegetablesCards">Овощи</h1>
        </div>
        <div class="cards">
          <div class="container">
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Помидоры</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Огурцы</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_3.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Капуста</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Баклажаны</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Перец сладкий</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_3.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Перец горький</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Тыква</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Кабачки</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_3.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Лук "порей"</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Базилик</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Сельдерей корешковый</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_3.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Сельдерей черешковый</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Арбуз</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Дыня</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="col-12 text-center cardsTop">
          <h1 class="display-4" id="BushesCards">Кусты</h1>
        </div>
        <div class="cards">
          <div class="container">
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body ">
                    <h4 class="card-title">Дивичий виноград</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Миндальное дерево</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>

                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_3.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Климатисы</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Виктория</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="col-12 text-center cardsTop">
          <h1 class="display-4">Многолетние Цветы</h1>
        </div>
        <div class="cards">
          <div class="container">
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Хоста</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Фиокси</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor rem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectetsit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_3.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Лилейник</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Пионы</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_2.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Лилии</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet,rem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectetrem ipsum dolor sit amet, consectet consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_3.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Астимобия</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ip inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <div class="row padding cardsRow">
              <div class="col-md-4">
                <div class="card">
                  <img src="img/card_1.jpg" class="card-img" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Мальда</h4>
                    <p class="card-price">10р</p>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis ipsa, earum. Eos, harum, inventore. Nostrum?</p>
                    <button class="cardsBtn btn btn-success" type="button">
                      <span class="add-to-cart">В корзину</span>
                      <span class="added">Добавлено</span>
                      <i class="fas fa-shopping-cart"></i>
                      <i class="fas fa-box"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  <!--Cart-->
    <section class="container content-section" id="Cart">
      <h1 class="cart-header display-4">Корзина</h1> <!-- изменить классы наводящие на корзину типа cart-header-->
      <div class="cart-row-header">
          <span class="cart-item-header cart-header cart-column">Товар</span>
          <span class="cart-price-header cart-header cart-column">Цена</span>
          <span class="cart-quantity-header cart-header cart-column">Количество</span>
      </div>
      <div class="cart-items"></div>
      <div class="cart-total">
          <strong class="cart-total-title">Сумма</strong>
          <span class="cart-total-price">0р</span>
      </div>
      <button class="btn btn-warning active btn-purchase" id="Btn_buyer_data" type="button">
        <span>Заказать</span>
      </button>
    </section>
    <div id="buyerPopUp">
      <div id="overflow"></div>
      <div id="cartPurchased">
        <span>Спасибо за покупку</span><br>
        <span>Мы перезвоним вам в ближайшее время</span>
      </div>
    </div>
  <!--Cart icon-->
    <div class="icon-cart">
      <span class="b-cart__count">0 Товаров</span>
    </div>
    <div id="cartItemAdded">
      <span>Товар уже добавлен в корзину</span>
    </div>
    <!-- тестовое пространство -->
   
    <!-- The Modal -->
    <div id="myModal" class="modal">
    
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <div class="form__wrapper">
          <form id="form-contact" method="POST" class="form-element" autocomplete="off">
            <h4 class="form-title">Введите ваши контактные данные :</h4>
            <p class="form-message"></p>
              <input name="name" type="text" class="form-input__name" tabindex="0" placeholder="Введите ваше имя" required>
              <input name="phone" type="tel" class="form-input__phone" tabindex="0" placeholder="Введите ваш телефон" required>
              <input name="theme" type="hidden" class="form-input__theme"  value="Заявка с сайта">
              <button class="btn btn-warning active btn-purchase btn-purchase-2" type="submit">
                <span>Заказать</span>
              </button>
          </form>
        </div>
      </div>
    
    </div>
    
<!-- тестовое пространство закончено -->
  <!--Footer-->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/pages/parts/footer.php");?>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> <!--для работы улёта картинки товара в корзину-->
  <!-- <script type="text/javascript" src="../js/formMail.js"></script> -->
    <script type="text/javascript" src="../js/formvalidation.js"></script>
    <!-- убрать main.js, перенести всё в cart.js -->
    <script type="text/javascript" src="../js/main.js"></script>  
    <script src="../js/cart.js" async></script>
    <script src="../js/telegramform.js"></script>
    
  </body>
</html>
