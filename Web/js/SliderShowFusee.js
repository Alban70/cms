$( document ).ready(function() {


    //$("élément").parallax(xPosition, adjuster, inertia, outerHeight);
    //$("#parallax").parallax(xPosition, adjuster, inertia, outerHeight);
    //$("#parallax2").parallax(xPosition, adjuster, inertia, outerHeight);
        //$("#parallax").parallax("center", 0, 0.1, true);
        //$("#parallax2").parallax("center", 900, 0.1, true);
        //$('#slide3').parallax("center", 2900, 0.1, true);


    $( "#navPrest" ).hide();
    /*$( ".cta-fonct5" ).hide();*/
    $( "#txtMenu" ).show();
    $( "#decouvrirPrest" ).click(function() {

        if ($( "#navPrest" )){
        $( "#txtMenu" ).hide();
        /*$( "#navPrest" ).show();*/
        $( "#navPrest" ).hide(".contentCacher");
        //$(".cta-fonct5").animate({left: '1230px'});
        /*$( ".cta-fonct5" ).show("1000");*/
        $( "#navPrest" ).show("1000");
        $(".cta-fonct5").animate({left: '0px'});
        };
    });


        /*if ($( "#seoAudit")){
            $( "#seoAudit" ).hide();
        $("#seoAudit").animate({left: '1230px'});
        $( "#seoAudit" ).show("5000");
        $("#seoAudit").animate({left: '0px'});
};*/
    //$( "#accroche" ).hide(".view_content_baseline");
    $( "#accroche" ).hide(".view_content_baseline_cacher");
    $(".view_content_baseline").animate({left: '3230px'});
    $(".view_content_baseline").show("15000");

    $(".view_content_baseline").animate({left: '0px'});

        /*$( "#navPrest" ).hide(".contentCacher");
        $(".cta-fonct5").animate({left: '1230px'});
        $( ".cta-fonct5" ).show("1000");
        $(".cta-fonct5").animate({left: '0px'});*/


    $( "#i" ).hide(".deviceCacher");
    $(".device").animate({left: '1230px'});
    $( ".device" ).show("15000");
    $(".device").animate({left: '0px'});

    /*$( "#fonct6" ).hide(".contentCacher");
    $(".contentDesktop").animate({left: '1230px'});
    $( "#fonct6" ).show(".contentDesktop");
    $(".contentDesktop").animate({left: '0px'});*/
        
        $("#h").css('margin-left','7vw');
    
        $( "#u" ).hide(".hm_crm_baseline_text2Cacher");
    //$(".hm_crm_baseline_text2").animate({left: '1230px'});
    $( "#u" ).show(".hm_crm_baseline_text2");
    
    /*$( "#c" ).hide(".content_titre_slideCacher");
    $( "#c" ).show(".content_titre_slide");*/
    
    $( "#b" ).hide(".bouton_accorcheCacher");
    $( "#b" ).show(".bouton_accorche");
    
    //$( "#f" ).show(".fusee");
    $(".fusee").animate({top: '230px'});
    //$(".fusee").css('padding-bottom', '230px');
    $( ".fusee" ).hide(900);


    
/*$( ".hamburger" ).click(function() {
    $( ".menu" ).show();
    $(".menu").css('display','inline-block');
    $( ".cross" ).show();
    
    $( ".hamburger" ).hide();
    $(".txtCross").hide();
});

$( ".cross" ).click(function() {
   
    $( ".menu" ).hide();
    $( ".cross" ).hide();
   
    $( ".hamburger" ).show();
    $(".txtCross").show();
    
       
});*/
    
    $( ".cross" ).hide();
    $( ".menu" ).hide();



    $( "#logicielVente" ).hide();
    $( "#logicielMarketing" ).hide();
    $( "#logicielSc" ).hide();
    $( "#logicielGestion" ).hide();


});

$( "#contacts" ).click(function() {
    $( "#logicielMarketing" ).hide();
    $( "#logicielVente" ).hide();
    $( "#logicielSc" ).hide();
    $( "#logicielGestion" ).hide();
    $( "#logicielContacts" ).show();
});
$( "#vente" ).click(function() {
    $( "#logicielMarketing" ).hide();
    $( "#logicielContacts" ).hide();
    $( "#logicielSc" ).hide();
    $( "#logicielGestion" ).hide();
    $( "#logicielVente" ).show();
});
$( "#marketing" ).click(function() {
    $( "#logicielVente" ).hide();
    $( "#logicielContacts" ).hide();
    $( "#logicielSc" ).hide();
    $( "#logicielGestion" ).hide();
    $( "#logicielMarketing" ).show();
});
$( "#serviceClients" ).click(function() {
    $( "#logicielVente" ).hide();
    $( "#logicielContacts" ).hide();
    $( "#logicielMarketing" ).hide();
    $( "#logicielGestion" ).hide();
    $( "#logicielSc" ).show();
});
$( "#gestion" ).click(function() {
    $( "#logicielVente" ).hide();
    $( "#logicielContacts" ).hide();
    $( "#logicielMarketing" ).hide();
    $( "#logicielSc" ).hide();
    $( "#logicielGestion" ).show();
});

//$("#menuID").click(function() {
    //$("ul", $(this))
//$(this).each(function(e) {

    //$( ".menu-menu-header-container ul ul" ).css( 'display', 'block' );
    //$( ".view_content_nav" ).css( "visibility: visible" );
    //$( ".view_content_navBis" ).css( "visibility: visible" );
    //$(this).children()
    //e.stopPropagation();
    //return false;
//});
//});
console.log(122);
//$("menuID").click(function(e){
//$("ul").children().click(function(event){
//$("ul").children().click(function(){
    //$(this).each(function(e) {
        console.log(this);
    console.log(123);
        console.log(555);
        console.log(this);
        //$( "this > ul").css( 'display', 'block' );
        //$( "li > ul ul").css( 'display', 'block' );
    //$(".menu-menu-header-container ul ul" ).css( 'display', 'block' );
        //$( "li > ul" ).find(".menu-menu-header-container ul ul").css( 'display', 'block' );
        //$(this).children("ul");
        //$(this).css( 'display', 'block' );
        //e.stopPropagation();
        //e.preventDefault();
    //$( ".menu-menu-header-container ul ul > li" ).( ".menu-menu-header-container ul ul > li" ).css( 'display', 'block' );
    //$("#ref1").find(".menu-menu-header-container ul ul").css( 'display', 'block' );
//});
//});

$("#menuSeoId").click(function(){
    $( ".contentCacher" ).hide();
});