type = "text/javascript" >
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('nav');
        nav.classList.toggle("sticky", window.scrollY > 0);
    });


$('.food-slider').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }
    ]
});


var x = document.getElementById("login");
var y = document.getElementById("register");
var z = document.getElementById("btn");

function register() {
    x.style.left = "-400px";
    y.style.left = "50px";
    z.style.left = "110px";
}

function login() {
    x.style.left = "50px";
    y.style.left = "450px";
    z.style.left = "0";
}

function toggle() {
    var blur = document.getElementById('experts');
    blur.classList.toggle('active');
    var popup = document.getElementById('popup');
    popup.classList.toggle('active');
}

function validate(number) {
    var inputList = document.getElementsByClassName('input-field');
    if (number == 0) {
        //login
        if (inputList[0].value == "" || inputList[1].value == "") {
            alert("Please fill the data");
        } else {
            alert('Login successful');
        }
    } else if (number == 1) {
        //register
        if (inputList[0].value == "" || inputList[1].value == "" || inputList[2].value == "") {
            alert("Please fill the data");
        } else {
            alert('Register successful');
        }
    }
}