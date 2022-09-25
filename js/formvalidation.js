// var FormName = ""
// var FormPhone = ""
// var FormValid = false
// $(".btn-purchase-2").on("click", function() {
//   FormName = $('.form-input__name').val().trim();
//   FormPhone = $('.form-input__phone').val().trim();
  
    
//    if(FormName =="") {
//     //  сделать появление на 5 сек
//     $('.form-message').text("Введите имя"); 
//     return false;
//   } else if(FormPhone =="") {
//     $('.form-message').text("Введите телефон");
//     return false;
//   } else{
//     $('.form-message').text("Ваш заказ отправлен");
//     FormValid = true
//     // сделать функцию для текста, чтобы не повторять надписи
// // переменная для отправки данных и показывания сообщения об отправке, верхнее удалить
//   }


//   $("errorMess").text("");

//   $.ajax({
//     url: '../ajax/mail.php',
//     type: 'POST',
//     cache: false,
//     data: {'name': name, 'phone': phone, 'email': email, 'message': message},
//     dataType: 'html',
//     beforeSend: function(){
//       $("#sendMail").prop("disabled", true);
//     },
//     success: function(data){
//       if (!data) {
//         alert("Были ошибки сообщение не отправленог");
//         $("#sendMail").prop("disabled", false);
//       }
//       else {
//         $("#mailForm").trigger("reset");
//       $("#sendMail").prop("disabled", false);
//       }
//     },
//   })
// })  
