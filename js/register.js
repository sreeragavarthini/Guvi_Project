$(document).ready(function () {
  $('form').submit(function (e) {
    e.preventDefault();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var email = $('#email').val();
    var mobile = $('#mobile').val();
    var password = $('#password').val();
    var confirmPassword = $('#cpassword').val();
    if (password != confirmPassword) {
      return window.alert("Password doesn't match");
    }
    // console.log(name + "   "+ email+"  "+ age+'  '+dob+"   "+mobile+"   "+password+"   "+confirmPassword);
    $.ajax({
      type: 'POST',
      url: './php/register.php',
      data: {
        "fname": fname,
        "lname": lname,
        "email": email,
        "mobile": mobile,
        "password": password,
      },
      success: function (response) {
        console.log(response);
        
      },
    });
    
    // window.location.href="/login.html";
  });
});
