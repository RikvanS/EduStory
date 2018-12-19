 $(document).ready(function(){
    $(window).scroll(function(){

        var scrollPos = $(document).scrollTop(),
            fadein = $(".fadein");

        var i = 1;
        $.each(fadein, function(index, element){
            $(element).addClass("fadein-"+i)
            i++
        });


        var j = 1;
        $.each(fadein, function(){
            if(scrollPos > $(".fadein-"+j).offset().top-800){
                $(".fadein-"+j).addClass("active");
            } else {
                $(".fadein-"+j).removeClass("active");
            }
            j++
        })
    })
})