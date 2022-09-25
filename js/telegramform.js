$(document).ready(function () {
  
  $(".form-element").submit(function () {
    if (SendConfirmed == true) {
      var DataToServ = JSON.stringify(sendData)
        $.ajax({
            type: "POST",
            url: '../php/send-message-to-telegram.php',
            data: {DataToServ},
            success: function (data) {
            console.log(data)
                $('.form-input__name').val("")
                $('.form-input__phone').val("")
              $('.form-message').text("Ваш заказ отпрпавлен, мы перезвоним вам в ближайшее время")
              setTimeout(() => {
                $('.form-message').text("");
              }, 3000);
              
            },
            error: function (jqXHR, text, error) {
              $('.form-message').text(`Cервис временно недоступен, но мы всегда вам ответим по телефону в шапке сайта`)
              setTimeout(() => {
                $('.form-message').text("");
              }, 3000);
            }
        });

        $.ajax({
          type: "POST",
          url: '../php/send-message-to-mail.php',
          cache: false,
          data: {DataToServ},
          dataType: 'html',
          success: function (data) {
            console.log('Данные с сервера пришли', data)
            
          },
          error: function (jqXHR, text, error) {
            console.log('Ошибка получения ответа с сервера', jqXHR, text, error)
          }
      });
        
    }
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



// })



