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


// const serviceItems = document.getElementsByClassName(".imgBx");
// const popup = document.getElementsByClassName(".popup-box");
// serviceItems.addEventListener("click", function(event) {
//     if (event.target.tagName.toLowerCase() == "button") {
//         popupBox();
//     }
// });

// function popupBox() {
//     popup.classList.toggle("open");
// }

function toggle() {
    var blur = document.getElementById('expert');
    blur.classList.toggle('active');
    var popup = document.getElementById('popup');
    popup.classList.toggle('active');
}