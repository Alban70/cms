document.addEventListener('DOMContentLoaded', function() {
    console.log(1000);
    var ID_h_hm_crm_nav_bar3 = document.getElementById('h_hm_crm_nav_bar3');
    var ID_fonctNav = document.getElementById('fonctNav');
    var ID_fonctNav3 = document.getElementById('fonctNav3');
    var ID_fonctNav4 = document.getElementById('fonctNav4');
    var ID_fonctNav5 = document.getElementById('fonctNav5');
    var seoAuditD = document.getElementById('seoAuditD');
    var seoAuditM = document.getElementById('seoAuditM');
    var seoAudit = document.getElementById('seoAudit');
    var fonct6 = document.getElementById('fonct6');
    //var seoPrest = document.getElementById('seoPrest');
    console.log(1005);
    console.log(ID_fonctNav4);
    var fonctions = document.getElementById('CM');

    var dHamburger = document.getElementById('dHamburger');
    var dCross = document.getElementById('dCross');

    var dHamburger2 = document.getElementById('dHamburger2');
    var dCross2 = document.getElementById('dCross2');

    var dHamburger3 = document.getElementById('dHamburger3');
    var dCross3 = document.getElementById('dCross3');

    var dHamburger4 = document.getElementById('dHamburger4');
    var dCross4 = document.getElementById('dCross4');

    var dHamburger5 = document.getElementById('dHamburger5');
    var dCross5 = document.getElementById('dCross5');

    var hamburger = document.getElementById('hamburger');
    var cross = document.getElementById('cross');
    //var txtMenu = document.getElementById('txtMenu');
    //var hpTop = document.getElementsByClassName('hpTop');
    var hamburger2 = document.getElementById('hamburger2');
    var cross2 = document.getElementById('cross2');
    var txtMenu2 = document.getElementById('txtMenu2');

    var hamburger3 = document.getElementById('hamburger3');
    var cross3 = document.getElementById('cross3');

    var hamburger4 = document.getElementById('hamburger4');
    var cross4 = document.getElementById('cross4');

    var hamburger5 = document.getElementById('hamburger5');
    var cross5 = document.getElementById('cross5');

    var txtMenu3 = document.getElementById('txtMenu3');


/*var dHamburger = document.querySelector(".container");
var dCross = document.querySelector(".changeCacher");

var dHamburger2 = document.querySelector(".container");
var dCross2 = document.querySelector(".changeCacher");

var hamburger = document.querySelector(".txt");
var cross = document.querySelector(".menuCacher");

var txtMenu = document.querySelector(".txt_menu_white_centre");*/

    var CM = document.getElementById('CM');


if(ID_h_hm_crm_nav_bar3) {
    if (dHamburger) {
        dHamburger.addEventListener("click", function () {
            console.log(1);
            dHamburger.classList.remove("container");
            dHamburger.classList.add("containerCacher");
            dCross.classList.remove("changeCacher");
            dCross.classList.add("change");

            hamburger.classList.remove("content");
            hamburger.classList.add("contentCacher");

            //cross.classList.add("CPmenu");
            cross.classList.add("menu-menu-header-container");
            cross.classList.remove("contentCacher");
            fonct6.classList.remove("contentDesktop");
            fonct6.classList.add("contentCacher");

        });
    }
    ;

    if (dCross) {
        dCross.addEventListener("click", function () {
            console.log(2);
            dCross.classList.remove("change");
            dCross.classList.add("changeCacher");
            dHamburger.classList.remove("containerCacher");
            dHamburger.classList.add("container");

            hamburger.classList.remove("contentCacher");
            hamburger.classList.add("content");

            cross.classList.add("contentCacher");
            //cross.classList.remove("CPmenu");
            cross.classList.remove("menu-menu-header-container");
            fonct6.classList.remove("contentCacher");
            fonct6.classList.add("contentDesktop");
        });
    };

    if (CM) {
        //txtMenu.innerHTML = "DÉCOUVREZ NOS LOGICIELS MÉTIERS";
        //hpTop.style.backgroundColor = "#005a8b";
    };
};

    /*if(seoAudit) {
        console.log(1001);
        if (dHamburger4) {
            dHamburger4.addEventListener("click", function () {
                dHamburger4.classList.remove("hpTop");
                dHamburger4.classList.add("contentCacher");
                dCross4.classList.remove("contentCacher");
                dCross4.classList.add("hpTop");
                cross4.classList.add("menu_fonct_HP");
                cross4.classList.remove("contentCacher");
                addEventListener("scroll", scrolled, false);
                function scrolled() {
                    currentScroll == 0
                };

            });
        };

        if (dCross4) {
            console.log(1002);
            dCross4.addEventListener("click", function () {
                dCross4.classList.remove("hpTop");
                dCross4.classList.add("contentCacher");
                dHamburger4.classList.remove("contentCacher");
                dHamburger4.classList.add("hpTop");
                cross4.classList.add("contentCacher");
                cross4.classList.remove("menu_fonct_HP");
            });
        };
    };*/

    if(seoAudit) {
        console.log(1001);
        if (dHamburger4) {
            dHamburger4.addEventListener("click", function () {
                dHamburger4.classList.remove("hpTop");
                dHamburger4.classList.add("contentCacher");
                dCross4.classList.remove("contentCacher");
                dCross4.classList.add("hpTop");

                //hamburger4.classList.remove("txt");
                //hamburger4.classList.add("txtCacher");
                //cross4.classList.add("menu_fonct_HP");
                cross4.classList.add("menu-menu-prestation-container");
                cross4.classList.remove("contentCacher");

                //fonctions.classList.remove("content");
                //fonctions.classList.add("fonctions_Padding");


                addEventListener("scroll", scrolled, false);
                function scrolled() {
                    currentScroll == 0
                };

            });
        };

        if (dCross4) {
            console.log(1002);
            dCross4.addEventListener("click", function () {
                dCross4.classList.remove("hpTop");
                dCross4.classList.add("contentCacher");
                dHamburger4.classList.remove("contentCacher");
                dHamburger4.classList.add("hpTop");

                //fonctions.classList.add("content");
                //fonctions.classList.remove("fonctions_Padding");

                //hamburger4.classList.remove("txtCacher");
                //hamburger4.classList.add("txt");
                cross4.classList.add("contentCacher");
                cross4.classList.remove("menu-menu-prestation-container");
                //cross4.classList.remove("menu_fonct_HP");
            });
        };

        /*if (CM) {
            txtMenu.innerHTML = "Modules Additionnels";
        };*/
    };
    if(seoAuditM) {
        console.log(2980);
        if (dHamburger5) {
            dHamburger5.addEventListener("click", function () {
                dHamburger5.classList.remove("hpTop");
                dHamburger5.classList.add("contentCacher");
                dCross5.classList.remove("contentCacher");
                dCross5.classList.add("hpTop");

                //hamburger4.classList.remove("txt");
                //hamburger4.classList.add("txtCacher");
                //cross4.classList.add("menu_fonct_HP");
                console.log(2983);
                cross5.classList.add("menu-menu-prestation-container");
                cross5.classList.remove("contentCacher");

                //fonctions.classList.remove("content");
                //fonctions.classList.add("fonctions_Padding");


                addEventListener("scroll", scrolled, false);
                function scrolled() {
                    currentScroll == 0
                };

            });
        };

        if (dCross5) {
            console.log(1002);
            dCross5.addEventListener("click", function () {
                dCross5.classList.remove("hpTop");
                dCross5.classList.add("contentCacher");
                dHamburger5.classList.remove("contentCacher");
                dHamburger5.classList.add("hpTop");

                //fonctions.classList.add("content");
                //fonctions.classList.remove("fonctions_Padding");

                //hamburger4.classList.remove("txtCacher");
                //hamburger4.classList.add("txt");
                console.log(2984);
                cross5.classList.add("contentCacher");
                cross5.classList.remove("menu-menu-prestation-container");
                //cross4.classList.remove("menu_fonct_HP");
            });
        };

        /*if (CM) {
            txtMenu.innerHTML = "Modules Additionnels";
        };*/
    };
    if(seoAuditD) {
        console.log(1980);
        if (dHamburger4) {
            dHamburger4.addEventListener("click", function () {
                dHamburger4.classList.remove("hpTop");
                dHamburger4.classList.add("contentCacher");
                dCross4.classList.remove("contentCacher");
                dCross4.classList.add("hpTop");

                //hamburger4.classList.remove("txt");
                //hamburger4.classList.add("txtCacher");
                //cross4.classList.add("menu_fonct_HP");
                cross4.classList.add("menu-menu-prestation-container");
                cross4.classList.remove("contentCacher");

                //fonctions.classList.remove("content");
                //fonctions.classList.add("fonctions_Padding");


                addEventListener("scroll", scrolled, false);
                function scrolled() {
                    currentScroll == 0
                };

            });
        };

        if (dCross4) {
            console.log(1002);
            dCross4.addEventListener("click", function () {
                dCross4.classList.remove("hpTop");
                dCross4.classList.add("contentCacher");
                dHamburger4.classList.remove("contentCacher");
                dHamburger4.classList.add("hpTop");

                //fonctions.classList.add("content");
                //fonctions.classList.remove("fonctions_Padding");

                //hamburger4.classList.remove("txtCacher");
                //hamburger4.classList.add("txt");
                cross4.classList.add("contentCacher");
                cross4.classList.remove("menu-menu-prestation-container");
                //cross4.classList.remove("menu_fonct_HP");
            });
        };

        /*if (CM) {
            txtMenu.innerHTML = "Modules Additionnels";
        };*/
    };

    if(ID_fonctNav4) {
        console.log(1001);
        if (dHamburger4) {
            dHamburger4.addEventListener("click", function () {
                dHamburger4.classList.remove("hpTop");
                dHamburger4.classList.add("hpTopCacher");
                dCross4.classList.remove("hpTopCacher");
                dCross4.classList.add("hpTop");

                //hamburger4.classList.remove("txt");
                //hamburger4.classList.add("txtCacher");
                cross4.classList.add("menu_fonct_HP");
                cross4.classList.remove("menuCacher");

                //fonctions.classList.remove("content");
                //fonctions.classList.add("fonctions_Padding");


                addEventListener("scroll", scrolled, false);
                function scrolled() {
                    currentScroll == 0
                };

            });
        };

        if (dCross4) {
            console.log(1002);
            dCross4.addEventListener("click", function () {
                dCross4.classList.remove("hpTop");
                dCross4.classList.add("hpTopCacher");
                dHamburger4.classList.remove("hpTopCacher");
                dHamburger4.classList.add("hpTop");

                //fonctions.classList.add("content");
                //fonctions.classList.remove("fonctions_Padding");

                //hamburger4.classList.remove("txtCacher");
                //hamburger4.classList.add("txt");
                cross4.classList.add("menuCacher");
                cross4.classList.remove("menu_fonct_HP");
            });
        };

        /*if (CM) {
            txtMenu.innerHTML = "Modules Additionnels";
        };*/
    };

    if(ID_fonctNav5) {
        console.log(1001);
        if (dHamburger4) {
            dHamburger4.addEventListener("click", function () {
                dHamburger4.classList.remove("hpTop");
                dHamburger4.classList.add("hpTopCacher");
                dCross4.classList.remove("hpTopCacher");
                dCross4.classList.add("hpTop");

                //hamburger4.classList.remove("txt");
                //hamburger4.classList.add("txtCacher");
                cross4.classList.add("menu_fonct_HP");
                cross4.classList.remove("menuCacher");

                //fonctions.classList.remove("content");
                //fonctions.classList.add("fonctions_Padding");


                addEventListener("scroll", scrolled, false);
                function scrolled() {
                    currentScroll == 0
                };

            });
        };

        if (dCross4) {
            console.log(1002);
            dCross4.addEventListener("click", function () {
                dCross4.classList.remove("hpTop");
                dCross4.classList.add("hpTopCacher");
                dHamburger4.classList.remove("hpTopCacher");
                dHamburger4.classList.add("hpTop");

                //fonctions.classList.add("content");
                //fonctions.classList.remove("fonctions_Padding");

                //hamburger4.classList.remove("txtCacher");
                //hamburger4.classList.add("txt");
                cross4.classList.add("menuCacher");
                cross4.classList.remove("menu_fonct_HP");
            });
        };

        /*if (CM) {
            txtMenu.innerHTML = "Modules Additionnels";
        };*/
    };
});

