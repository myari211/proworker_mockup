// const { Dropdown } = require("bootstrap");

$(document).ready(function(){
    $(".preloader").fadeOut();
})

$(document).ready(function(){
    $(".add-more").click(function(){
        var html = $(".copy").html();
        $(".after-add-more").after(html);
    });

    $("body").on("click", ".remove", function(){
        $(this).parents(".control-group").remove();
    });
});

function Register(){
    window.location.assign('/register');
}

function Login(){
    window.location.assign('/login');
}

function Redirect(){
    window.location.assign('/signup');
}


$(document).ready(function(){
    $('.sidenav').sidenav();
});

$(document).ready(function(){
    $('.tabs').tabs();
  });



  $( document ).ready(function() {
    new WOW().init();
  });

$(document).ready(function(){
    $(".preloader").fadeOut();
})


