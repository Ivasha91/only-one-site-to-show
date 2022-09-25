$(document).ready(function () {
    $(".form-element").submit(function () {
        var formID = $(this).attr('id');
        var formNm = $('#' + formID);
        var message = $(formNm).find(".form-message");
        var formTitle = $(formNm).find(".form-title");
        $.ajax({
            type: "POST",
            url: '../php/send-message-to-telegram.php',
            data: formNm.serialize(),
            success: function (data) {
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


// // тестовый ajax для отправки данный карточек в дальнейшем можно создать другой файл

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
//       "powers": [
//         "Radiation resistance",
//         "Turning tiny",
//         "Radiation blast"
//       ]
//     },
//     {
//       "name": "Madame Uppercut",
//       "age": 39,
//       "secretIdentity": "Jane Wilson",
//       "powers": [
//         "Million tonne punch",
//         "Damage resistance",
//         "Superhuman reflexes"
//       ]
//     },
//     {
//       "name": "Eternal Flame",
//       "age": 1000000,
//       "secretIdentity": "Unknown",
//       "powers": [
//         "Immortality",
//         "Heat Immunity",
//         "Inferno",
//         "Teleportation",
//         "Interdimensional travel"
//       ]
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
//     data: {data_to_serv3},
//     dataType: 'json',
//   success: function (data) {
//     console.log('Данные с сервера пришли', data)},
//   error: function(jqXHR, textStatus, errorThrown){
//     console.log('Ошибка получения ответа с сервера', jqXHR, textStatus, errorThrown)},
// });
// });

// })



