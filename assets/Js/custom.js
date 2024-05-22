
//collapsible
$(document).ready(function () {
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }

});



//Tejarat vizhe 
function mainslider() {
    jQuery('#owl-mainslider').owlCarousel({
        items: 1,
        nav: true,
        dots:false,
        //margin: 10,
        autoplay: true,
        loop: true,
        mouseDrag: true,
        touchDrag: true,
        autoplayHoverPause: true,
        smartSpeed: 1500,
        autoplayTimeout: 5000,
    });
}


//event
function owlevent1() {
    jQuery('.owl-event1').owlCarousel({
        //items: 3,
        rtl: true,
        loop: true,
        nav: true,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1500,
        autoplayTimeout: 8000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            410: {
                items: 2,
            },
            576: {
                items: 3,
            },
            769: {
                items: 4,
            },
            1200: {
                items: 5,
            }
        }
    });
}

function owlevent5() {
    jQuery('.owl-event5').owlCarousel({
        //items: 3,
        rtl: true,
        loop: true,
        nav: true,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1500,
        autoplayTimeout: 8000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            410: {
                items: 2,
            },
            576: {
                items: 3,
            },
            769: {
                items: 4,
            },
            1200: {
                items: 3,
            }
        }
    });
}


//event
function owldemo5() {
    jQuery('.owl-demo5').owlCarousel({
        rtl: true,
        loop: true,
        dots:true,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1500,
        autoplayTimeout: 8000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            490: {
                items: 2,
            },
            577: {
                items: 3,
            },
            769: {
                items: 4,
            },
            1200: {
                items: 5,
            }
        }
    });
}



//popular doctors_index_page
function owltoparticle() {
    jQuery('#owl-toparticle').owlCarousel({
        rtl: true,
        loop: true,
        nav: true,
        autoplay: true,
        smartSpeed: 2000,
        autoplayTimeout: 4000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            768: {
                items: 2,
            },
       
            1200: {
                items: 4
            }
              , 1367: {
                  items: 4,
              }
        }
    });
}


function owlevent4() {
    jQuery('.owl-event4').owlCarousel({
        //items: 3,
        rtl: true,
        loop: true,
        nav: true,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1500,
        autoplayTimeout: 8000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            490: {
                items: 2,
            },
           769: {
                items: 3,
            }
        }
    });
}



//function selectproduct() {
//    $("#single").select2({
//        allowClear: true
//    });
//    $("#single2").select2({
//        allowClear: true
//    });
//    $("#single3").select2({
//        allowClear: true
//    });

//}

//Tejarat vizhe 
function owlNtejari() {
    jQuery('#owl-Ntejari').owlCarousel({
        items: 1,
        nav: false,
        dots: true,
        margin:10,
        autoplay: true,
        loop: true,
        mouseDrag: true,
        touchDrag: true,
        autoplayHoverPause: true,
        smartSpeed: 1500,
        autoplayTimeout: 5000,
    });
}


//Tamin_vizhe 
function owlTamin() {
    jQuery('#owl-Tamin').owlCarousel({
        //items: 3,
        rtl: true,
        loop: true,
        dots:true,
        nav: false,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1300,
        autoplayTimeout: 4000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            480: {
                items: 3,
            },
            767: {
                items: 5,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 5,
            }
        }
    });
}


//Tamin_vizhe 
function owlcustomer() {
    jQuery('#owl-customer').owlCarousel({
        //items: 3,
        rtl: true,
        loop: true,
        dots: true,
        nav: false,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1300,
        autoplayTimeout: 3000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            480: {
                items: 3,
            },
            768: {
                items: 4,
            },
            992: {
                items: 5,
            },
            1200: {
                items: 6,
            }
        }
    });
}



//owl-story 
function owlStory() {
    jQuery('#owl-Story').owlCarousel({
        items:1,
        rtl: true,
        loop: true,
        dots: true,
        nav: false,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 1300,
        autoplayTimeout: 5000,
        });
}





//popular doctors_index_page
function owlcourse() {
    jQuery('.owl-course').owlCarousel({
        rtl: true,
        loop: true,
        nav: true,
        dots: true,
        autoplay: true,
        autoplayHoverPause: true,
        smartSpeed: 2000,
        autoplayTimeout: 5000,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            510: {
                items: 2,
            },
            830: {
                items: 3,
            },
    
            1200: {
                items: 3
            }
              , 1367: {
                  items: 4,
              }
        }
    });
}





//prcingtable
function prcingtable() {
    $("ul").on("click", "li", function () {
        var pos = $(this).index() + 2;
        $("tr").find('td:not(:eq(0))').hide();
        $('td:nth-child(' + pos + ')').css('display', 'table-cell');
        $("tr").find('th:not(:eq(0))').hide();
        $('li').removeClass('active');
        $(this).addClass('active');
    });

    // Initialize the media query
    var mediaQuery = window.matchMedia('(min-width: 640px)');

    // Add a listen event
    mediaQuery.addListener(doSomething);

    // Function to do something with the media query
    function doSomething(mediaQuery) {
        if (mediaQuery.matches) {
            $('.sep').attr('colspan', 6);
        } else {
            $('.sep').attr('colspan', 2);
        }
    }

    // On load
    doSomething(mediaQuery);
}


// teletype
function teletype() {
    jQuery('.animated-text').typed({
        strings: [

            " قالب چند منظوره شمیم :)  ",
            " سامانه جامع برترین کارشناسان  ",
            " تسهیل در خدمات ..  ",
            " طراحی انواع وب سایت ..  ",
        ],
        typeSpeed: 130,
        loop: true,
    });
}


/**** All function are called here ******/
$(document).ready(function () {

    mainslider(),
    owlNtejari(),
    owlTamin(),
    owlStory(),
    owlevent1(),
    owlevent4(),
    owlevent5(),
    owltoparticle(),
    owlcustomer(),
    owldemo5(),
    owlcourse(),
    teletype(),
    prcingtable();
});




//international phone
let telInput = $(".phone")
telInput.intlTelInput({
    initialCountry: 'ir',
    preferredCountries: ['ir', 'gb', 'br', 'ru', 'cn', 'es', 'it'],
    autoPlaceholder: 'aggressive',
    utilsScript: "Js/utils.js",
})





//myCarousel 2
$('#myCarousel').carousel({
    interval: 3000,
})


