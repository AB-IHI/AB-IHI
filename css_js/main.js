// console.log(flexCheckDefault)
// let worms = document.querySelector("#def .bge ")
let checkbox = document.querySelectorAll(".form-check-input")
function hop() {
    let r = Math.random()*255
    let g = Math.random()*255
    let b = Math.random()*255
    if (x.matches) { // If media query matches
    checkbox.forEach((document) => {
        document.style.border  = "3px solid rgb("+r+","+g+","+b+")"
    // flexCheckDefault2.style.border = "3px solid rgb("+r+","+g+","+b+") "
    })
    //     body.style.background = "rgb("+r+","+g+","+b+")"
    // worms.classList.toggle("big")
//     checkbox.onclick = function(){background = none
//         };
}
}
var x = window.matchMedia("(max-width: 991px)")
setInterval(hop, 500)
setTimeout(hop, 500)

function darken_screen(yesno){
    if( yesno == true ){
        document.querySelector('.screen-darken').classList.add('active');
    }
    else if(yesno == false){
        document.querySelector('.screen-darken').classList.remove('active');
    }
}

function close_offcanvas(){
    darken_screen(false);
    document.querySelector('.mobile-offcanvas.show').classList.remove('show');
    document.body.classList.remove('offcanvas-active');
}

function show_offcanvas(offcanvas_id){
    darken_screen(true);
    document.getElementById(offcanvas_id).classList.add('show');
    document.body.classList.add('offcanvas-active');
}

document.addEventListener("DOMContentLoaded", function(){

    document.querySelectorAll('[data-trigger]').forEach(function(everyelement){
        let offcanvas_id = everyelement.getAttribute('data-trigger');
        everyelement.addEventListener('click', function (e) {
            e.preventDefault();
            show_offcanvas(offcanvas_id);
        });
    });

    document.querySelectorAll('.btn-close').forEach(function(everybutton){
        everybutton.addEventListener('click', function (e) {
            close_offcanvas();
        });
    });

    document.querySelector('.screen-darken').addEventListener('click', function(event){
        close_offcanvas();
    });

    document.querySelector('.go_to_section').addEventListener('click', function (event) {
        close_offcanvas();
    });

});
// below code to manage the multilevel dropdown on mobile

//	window.addEventListener("resize", function() {
//		"use strict"; window.location.reload();
//	});


document.addEventListener("DOMContentLoaded", function(){


    /////// Prevent closing from click inside dropdown
    document.querySelectorAll('.dropdown-menu').forEach(function(element){
        element.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    })



    // make it as accordion for smaller screens
    if (window.innerWidth < 992) {

        // close all inner dropdowns when parent is closed
        document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
            everydropdown.addEventListener('hidden.bs.dropdown', function () {
                // after dropdown is hidden, then find all submenus
                this.querySelectorAll('.submenu').forEach(function(everysubmenu){
                    // hide every submenu as well
                    everysubmenu.style.display = 'none';
                });
            })
        });

        document.querySelectorAll('.dropdown-menu a').forEach(function(element){
            element.addEventListener('click', function (e) {

                let nextEl = this.nextElementSibling;
                if(nextEl && nextEl.classList.contains('submenu')) {
                    // prevent opening link if link needs to open dropdown
                    e.preventDefault();
                    console.log(nextEl);
                    if(nextEl.style.display == 'block'){
                        nextEl.style.display = 'none';
                    } else {
                        nextEl.style.display = 'block';
                    }

                }
            });
        })
    }
    // end if innerWidth

});



// DOMContentLoaded  end
