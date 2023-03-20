$(document).ready(function () {
    $("form").submit(function (e) { 
      e.preventDefault();
      var email = $("#email").val();
      var password = $("#password").val();
   
      $.ajax({
        type: 'POST',
        url: './php/login.php',
        data: {
          email: email,
          password: password,
        },
        success: function (response) {
          console.log(response);
        },
      });
    });
  });