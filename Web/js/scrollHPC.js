document.addEventListener('DOMContentLoaded', function() {
    var header2 = document.querySelector(".myheader2");
    var topheader = document.querySelector(".topheader");
    console.log(200);
    console.log(topheader);
    console.log(header2);


    function scrolled(){
        var topheaderHeight = topheader.offsetHeight,
            currentScroll = document.body.scrollTop || document.documentElement.scrollTop;


        if(currentScroll > topheaderHeight*1.15)
        {
            //header2.classList.remove("myheader2");
            header2.classList.add("fixed");

        }
        else if(currentScroll == 0)
        {
            header2.classList.remove("fixed");
            header2.classList.add("myheader2");

        }


    }

    addEventListener("scroll", scrolled, false);
});