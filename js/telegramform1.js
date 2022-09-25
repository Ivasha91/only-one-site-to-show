$(document).ready(function () {
    $(".form-contact").submit(function () {
      var DataToServ = JSON.stringify(sendData)
        $.ajax({
            type: "POST",
            url: '../php/send-message-to-telegram.php',
            data: {DataToServ},
            success: function (data) {

              // $('.form-message').text(data)
              // setTimeout(() => {
              //   $('.form-message').text("");
              // }, 3000);
              // Вывод сообщения об успешной отправке
              message.html(data);
              formTitle.css("display","none");
              setTimeout(function(){
                formTitle.css("display","block");
                message.html('<span>ВСЁ ОК</span>');
                $('input').not(':input[type=submit], :input[type=hidden]').val('');
              }, 3000);
            },
            error: function (jqXHR, text, error) {
                console.log(error);
            //   $('.form-message').text(text)
            //   setTimeout(() => {
            //     $('.form-message').text("");
            //   }, 3000);
                // Вывод сообщения об ошибке отправки
                message.html(error);
                formTitle.css("display","none");
                setTimeout(function(){
                  formTitle.css("display","block");
                  message.html('');
                  $('input').not(':input[type=submit], :input[type=hidden]').val('');
                }, 3000);
            }
        });
        return false;
    });
});
// в саксес показать что всё отправлено в сообщении, а в ерор в том же сообщении написать что сервис временно недоступен, звоните по телефону в шапке сайта
// убрать саксес или сделать не него переменную, которая становится тру при получении ответа и затем выводит нужный текст на валидейт форм
// тестовый ajax для отправки данный карточек в дальнейшем можно создать другой файл

// $(document).ready(function () {
//     var data_to_serv2 = {
//   "squadName": "Super hero squad",
//   "homeTown": "Metro City",
//   "formed": 2016,
//   "secretBase": "Super tower",
//   "active": true,
//   "members": [
//     {
//       "name": "Molecule Man",
//       "age": 29,
//       "secretIdentity": "Dan Jukes",
//       "powers": "no"
//     },
//     {
//       "name": "Eternal Flame",
//       "age": 1000000,
//       "secretIdentity": "Unknown",
//       "powers": "no"
//     }
//   ]
// }
//     var data_to_serv3 = JSON.stringify(data_to_serv2)
//   var data_to_serv = "asd"
//   $("#json").on("click", function() {
          
//     $.ajax({
//       url: '../ajax/json.php',
//       type: 'POST',
//       cache: false,
//       data: {data_to_serv3},
//       dataType: 'html',
//     success: function (data) {
//       console.log('Данные с сервера пришли', data)},
//     error: function(jqXHR, textStatus, errorThrown){
//       console.log('Ошибка получения ответа с сервера', jqXHR, textStatus, errorThrown)},
//   });
// });

// $("#mail").on("click", function() {
//   $.ajax({
//     url: '../ajax/mail2.php',
//     type: 'POST',
//     cache: false,
//     data: {data_to_serv},
//     dataType: 'html',
//   success: function (data) {
//     console.log('Данные с сервера пришли', data)},
//   error: function(jqXHR, textStatus, errorThrown){
//     console.log('Ошибка получения ответа с сервера', jqXHR, textStatus, errorThrown)},
// });
// });

// })



