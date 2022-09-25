$(".form-element").submit(function () {
  var formID = $(this).attr('id');
  var formNm = $('#' + formID);
  $.ajax({
      type: "POST",
      url: '../php/send-message-to-mail_2.php',
      data: formNm.serialize(),
      success: function (data) {
        console.log(data)
        // сделать обнуление полей и сообщение об ошибке и добавить его в html
            $('#name').val("")
            $('#phone').val("")
            $('#message').val("")
            $('#email').val("")
          $('#errorMess').text("Ваш вопрос отпрпавлен, мы уже ищем ответ...")
          setTimeout(() => {
            $('#errorMess').text("");
          }, 3000);
          
        },
        error: function (jqXHR, text, error) {
          $('#errorMess').text(`Cервис временно недоступен, но мы всегда вам ответим по телефону в шапке сайта`)
          setTimeout(() => {
            $('#errorMess').text("");
          }, 3000);
        }
    });
  return false;
});

