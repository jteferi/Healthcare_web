$(window).resize(function(){location.reload();});

var signupbtn = document.querySelector(".dont-have-account span input");

var signinbtn = document.querySelector(".already-have-account span input");

var signuppage = document.querySelector(".signup-page");

var signinpage = document.querySelector(".signin-page");

$(document).ready(function(){
  $(signuppage).hide();
})

$(document).ready(function(){
  $(signupbtn).click(function(){
    $(signinpage).animate({
      top: '-738px'
    });

    $(signuppage).fadeIn(900);
  });
});

$(document).ready(function(){
  $(signinbtn).click(function(){
    $(signinpage).animate({
      top: '0px'
    });

    $(signuppage).fadeOut(800);
  });
});



