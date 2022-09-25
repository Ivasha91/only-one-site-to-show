let sendData = []; //массив или объект для передачи через пост. нужна очистка после отправки или дэл.
let cardsRow = document.getElementsByClassName("cardsRow");
var FormName = ""
var FormPhone = ""
var FormValid = false
var SendConfirmed = false

if (document.readyState == "loading") {
  document.addEventListener("DOMContentLoaded", ready);
} else {
  ready();
  }

window.onload = () => { cardMinHeight(), noPadding() };

function ready() {
    let removeCartItemButtons = document.getElementsByClassName("btnDelItem");
    for (let i = 0; i < removeCartItemButtons.length; i++) {
        let button = removeCartItemButtons[i];
        button.addEventListener("click", removeCartItem);
    }
    

    let quantityInputs = document.getElementsByClassName("cart-quantity-input");
    for (let i = 0; i < quantityInputs.length; i++) {
        let input = quantityInputs[i];
        input.addEventListener("change", quantityChanged);
    }

    let addToCartButtons = document.getElementsByClassName("cardsBtn");
    for (let i = 0; i < addToCartButtons.length; i++) {
        let button = addToCartButtons[i];
        button.addEventListener("click", addToCartClicked);
    }

    document.getElementsByClassName("btn-purchase-2")[0].addEventListener("click", purchaseClicked);

    boxPos();

    window.addEventListener("resize", () => {
      boxPos();
      cardMinHeight();
      noPadding();
    });
    
    removeHash()
    
}


function removeHash () { 
    // для новых браузеров
    
    // history.pushState("", document.title, window.location.pathname + window.location.search);

    var scrollV, scrollH, loc = window.location;
    if ("pushState" in history)
        history.pushState("", document.title, loc.pathname + loc.search);
    else {
        // Prevent scrolling by storing the page's current scroll offset
        scrollV = document.body.scrollTop;
        scrollH = document.body.scrollLeft;

        loc.hash = "";

        // Restore the scroll offset, should be flicker free
        document.body.scrollTop = scrollV;
        document.body.scrollLeft = scrollH;
    }
    // добавить выполение скрипта по присвоению класса к верхней кнопке
}


function noPadding() {
  Object.values(cardsRow).forEach((item, i) => {
    if (document.documentElement.clientWidth < 420) {
    item.classList.remove("padding");
    } else {
      if (item.classList.contains("padding")) {}
      else { item.classList.add("padding"); }
      }
  });
}

function cardMinHeight() {
  for (let j = 0; j < cardsRow.length; j++) {
    let cardsTop = cardsRow[j].getElementsByClassName("card-title");
    let cardsText = cardsRow[j].getElementsByClassName("card-text");
    textMinHeight(cardsTop);
    textMinHeight(cardsText);
  }
}

function textMinHeight(text) {
  let arr = [];
  for (let i = 0; i < text.length; i++) {
    text[i].style.removeProperty("min-height");
    arr.push(text[i].offsetHeight);
  }
  let max = Math.max(...arr);
  for (let i = 0; i < text.length; i++) {
    text[i].style.minHeight = max + "px";
  }
}

function boxPos(){
  let box = document.getElementsByClassName("icon-cart")[0];
  let row = document.getElementsByClassName("cardsRow")[0];
  let rowLeft = row.getBoundingClientRect().left;
  let boxWidth = box.offsetWidth;
  let col = document.getElementsByClassName("col-md-4")[0];
  let colLeft = col.getBoundingClientRect().left;

  if (document.documentElement.clientWidth < 1024) {
  box.style.right = colLeft + "px";
  } else {
  box.style.right = rowLeft - boxWidth + "px";
    }
}

function purchaseClicked() {
  SendConfirmed = false
  FormName = $('.form-input__name').val().trim();
    FormPhone = $('.form-input__phone').val().trim();
    
  if (FormValidation ()) {
    let firstCartItem = document.getElementsByClassName("cart-items")[0];
    sendData.length = 0;
    let i = 2;
    sendData.push(FormName, FormPhone)
    while (firstCartItem.hasChildNodes()) {
      let cartLineText = firstCartItem.firstChild.innerText;
      let cartLineValue = firstCartItem.firstChild.querySelector(".cart-quantity-input").value;
      sendData[i] = cartLineText + " " + cartLineValue + "шт";
      sendData[i] = sendData[i].replace("Удалить","");
      sendData[i] = sendData[i].replace(/\n/g," ");
      firstCartItem.removeChild(firstCartItem.firstChild);
        i++;
    }
    let cards = document.querySelectorAll(".card");
    cards.forEach((item) => {
        item.querySelector(".cardsBtn").classList.remove("clicked");
        item.querySelector(".cardsBtn").classList.add("unClicked");
        item.querySelector(".cardsBtn").style.backgroundColor = null;
        setTimeout(() => item.querySelector(".cardsBtn").classList.remove("unClicked"), 250);
      });
    updateCartTotal();

    // document.getElementById("cartPurchased").style.display = "block";
    // document.getElementById("overflow").style.display = "block";
    // setTimeout(() => document.getElementById("cartPurchased").style.display = "none", 2000);
    // document.getElementById("overflow").style.display = "block";
    // setTimeout(() => document.getElementById("overflow").style.display = "none", 2000);
    // функция отправки sendData по почте с последующей очисткой
    sendDataFunc();
    FormValid = false
  }
}
function FormValidation (){
       
     if(FormName =="" || FormName.length<3) {
      //  сделать появление на 5 сек
      $('.form-message').text("Введите имя");
      // проверка минимальной длины
      setTimeout(() => {
        $('.form-message').text("");
      }, 2000); 
      return false;
    } else if(FormPhone =="" || isNaN(FormPhone) || FormPhone.length<5) {
      // проверка на цифры
      $('.form-message').text("Введите телефон");
      setTimeout(() => {
        $('.form-message').text("");
      }, 2000); 
      return false;
    } else{
      // переменная для подтверждения отправки
      SendConfirmed = true
      // $('.form-message').text("Ваш заказ отправлен");
      // setTimeout(() => {
      //   $('.form-message').text("");
      // }, 2000); 
      return true
      // сделать функцию для текста, чтобы не повторять надписи
  // переменная для отправки данных и показывания сообщения об отправке, верхнее удалить
    }
}

function removeCartItem(event) {
    let buttonClicked = event.target;
    let srchElem = buttonClicked.parentElement.parentElement.querySelector(".cart-item-title").innerText;
    let cards = document.querySelectorAll(".card");
    cards.forEach((item) => {
      if (item.querySelector(".card-title").innerText === srchElem) {
        item.querySelector(".cardsBtn").classList.remove("clicked");
        item.querySelector(".cardsBtn").classList.add("unClicked");
        item.querySelector(".cardsBtn").style.backgroundColor = null;
        setTimeout(() => item.querySelector(".cardsBtn").classList.remove("unClicked"), 250);
      } else {return};
    });
    buttonClicked.parentElement.parentElement.remove();
    updateCartTotal();
};

function quantityChanged(event) {
    let input = event.target;
    if (isNaN(input.value) || input.value <= 0) {
        input.value = 1;
    };
    updateCartTotal();
};

function addToCartClicked(event) {
    let button = this;
    let shopItem = button.parentElement.parentElement;
    let title = shopItem.getElementsByClassName("card-title")[0].innerText;
    let price = shopItem.getElementsByClassName("card-price")[0].innerText;
    let imageSrc = shopItem.getElementsByClassName("card-img")[0].src;
    addItemToCart(title, price, imageSrc);
    updateCartTotal();
    buttonAnim(button);
};

function addItemToCart(title, price, imageSrc) {
    let cartRow = document.createElement("div");
    cartRow.classList.add("cart-row");
    let firstCartItem = document.getElementsByClassName("cart-items")[0];
    let cartItemNames = firstCartItem.getElementsByClassName("cart-item-title");
    for (let i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) {
          document.getElementById("cartItemAdded").style.display = "block";
          setTimeout(() => document.getElementById("cartItemAdded").style.display = "none", 3000);
          return;
        };
    };

    let cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger btnDelItem" type="button">Удалить</button>
        </div>`;
    cartRow.innerHTML = cartRowContents;
    firstCartItem.append(cartRow);
    cartRow.getElementsByClassName("btnDelItem")[0].addEventListener("click", removeCartItem);
    cartRow.getElementsByClassName("cart-quantity-input")[0].addEventListener("change", quantityChanged);
};

function updateCartTotal() {
    let cartItemContainer = document.getElementsByClassName("cart-items")[0];
    let cartRows = cartItemContainer.getElementsByClassName("cart-row");
    let numCartRows = cartRows.length;
    let total = 0;
    for (let i = 0; i < cartRows.length; i++) {
        let cartRow = cartRows[i];
        let priceElement = cartRow.getElementsByClassName("cart-price")[0];
        let quantityElement = cartRow.getElementsByClassName("cart-quantity-input")[0];
        let price = parseFloat(priceElement.innerText.replace("р", ""));
        let quantity = quantityElement.value;
        total = total + (price * quantity);
    };

    total = Math.round(total * 100) / 100;
    document.getElementsByClassName("cart-total-price")[0].innerText = total + "р";
    document.getElementsByClassName("b-cart__count")[0].innerText = numCartRows + " " + boxText(numCartRows);
};

function boxText(num){
  if (num != 11 && num != 12 && num != 13 && num != 14 && num != 15) {
    return boxNum(num)
  } else {return "Товаров";};
};

function boxNum(num) {
  if (num >= 10) {
    return boxNum(num - 10);
  } else {
    if (num == 1) {
      return "Товар";
    }  else if (num == 2 || num == 3|| num == 4) {
       return "Товара";
       }  else {
          return "Товаров";
          }
    }
};

function buttonAnim(button) {
	button.classList.add("clicked");
  button.setAttribute("style", "background-color:#d39e00 !important");
};

// Double click icon-cart evading
$(".icon-cart").on("click",() =>{
  if ($(".icon-cart")[0].disabled) {
    return;
  } else {
    $("html, body").animate({
      scrollTop: $(".cart-header").offset().top
    }, 500);
      $(".icon-cart").prop("disabled",true);
  };
  setTimeout(() => { $(".icon-cart").prop("disabled",false) }, 2000);
});

// cart Shaking
 $(".cardsBtn").on("click", function () {
   let cart = $(".icon-cart");
   let imgtodrag = $(this).parent(".card-body").parent(".card").find("img").eq(0);
   if($(this).hasClass("clicked")){
     return;
   } else {
     if (imgtodrag) {
       let imgclone = imgtodrag.clone()
             .offset({
             top: imgtodrag.offset().top,
             left: imgtodrag.offset().left
         })
             .css({
             "opacity": "0.8",
                 "position": "absolute",
                 "height": "150px",
                 "width": "150px",
                 "z-index": "100"
         })
             .appendTo($("body"))
             .animate({
             "top": cart.offset().top + 10,
                 "left": cart.offset().left + 10,
                 "width": 75,
                 "height": 75
         }, 1000, "easeInOutExpo");

         setTimeout(function () {
             cart.effect("shake", {
                 times: 2
             }, 200);
         }, 1500);

         imgclone.animate({
             "width": 0,
                 "height": 0
         }, function () {
             $(this).detach()
         });
     }
  }
});

// тестовое пространство
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("Btn_buyer_data");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function sendDataFunc() {
//  можно преобразовать в текст для отправки

      console.log(sendData);
      console.log(sendData.toString());
//   // Сохраняем в переменную form id текущей формы, на которой сработало событие submit
//
//   let message = "";
//
//
//       $.ajax({
//         url: "../php/send-message-to-telegram.php",
//         type: "POST",
//         data: sendData,
//         processData: false,
//         contentType: false,
//         success: function success(res) {
//           let respond = $.parseJSON(res);
//           if (respond.err) {
//             message.html(respond.err).css("color","#d42121");
//             setTimeout(()=> {
//               message.text("");
//             }, 3000);
//           } else if(respond.okSend) {
//             message.html(respond.okSend).css("color","#21d4bb");
//             setTimeout(()=> {
//               message.text("");
//             }, 3000);
//           } else {
//             alert ("Необработанная ошибка. Проверьте консоль и устраните.");
//           }
//         },
//       });
//
}


//   // Сохраняем в переменную form id текущей формы, на которой сработало событие submit
//   let form = $("#" + $(this).attr("id"))[0];
//
//   // Сохраняем в переменную класс с параграфом для вывода сообщений
//   let message = $(this).find(".contact-form__message");
//
//   let fd = new FormData(form);
//   $.ajax({
//     url: "/telegramform/php/send-message-to-telegram.php",
//     type: "POST",
//     data: fd,
//     processData: false,
//     contentType: false,
//     success: function success(res) {
//       let respond = $.parseJSON(res);
//       if (respond.err) {
//         message.html(respond.err).css("color","#d42121");
//         setTimeout(()=> {
//           message.text("");
//         }, 3000);
//       } else if(respond.okSend) {
//         message.html(respond.okSend).css("color","#21d4bb");
//         setTimeout(()=> {
//           message.text("");
//         }, 3000);
//       } else {
//         alert ("Необработанная ошибка. Проверьте консоль и устраните.");
//       }
//     },
//   });
// });
//
// }(jQuery));





 // добавить англ подписи, разделить код на блоки


// проверить что стили в порядке логическом расположены
//  убрать important где не надо
// одни единицы измерения
// убрать лишние пробелы, заменить стили(без тире)
// убрать лишние пустые строки
// все относительные единиы и нет привести к одному виду
// поменять настройки карусели не в основном css а в карусельном
// добавить alt ко всем картинкам

// сделать общие css для общиъ элементов
// если товаров 0, то соответствующий текст в сообщении

// На сайте в js сделать формирование card, категорий и секций. Просто добавляя индекс,если картинка или название существует. или сделать уже на след сайте


//  во все следующие проекты:
// повторноиспользуемые переменные перенести наверх структуры
// сократить слова функции И условия if
// перед сдачей проверить кроссбраузерность, кроссплатформенность
// начать делать проект с node.js и установкой плагинов для авто добавления кроссбраузерности и пр
// camelCase для переменных и методов.
// PascalCase для типов и классов.
// UPPER_CASE_SNAKE_CASE для констант.
// название файла через snake_case
// html id и class snake_case, если button под form(класс send) например то send__button
// убрать пробелы заменить табами



// перенести всё с большой кнопки заказать, на ту что возникает при записи контактов
// удалить с этой и той кнопок лишние классы и тп


// сделать отдельный css на хэдэра и футера и подключать отдельно. ИЛИ в catalog.php подлючить main.css, т.к. стили текста не применились в header