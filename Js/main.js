

/** Number counter Animation */ 

let nCount = function(selector)
{
   $(selector).each(function(){
        $(this).animate({
            counter:$(this).text()
        },
            {
                duration:4000,
                easing:"swing",
                step:function(value){
                    $(this).text(Math.ceil(value));
                }
            }
        );
   });
};
    let a = 0;

    $(window).scroll(function(){

    let Otop = $(".recom").offset().top - window.innerHeight;
    if(a == 0 && $(window).scrollTop() >= Otop){
       a++;
       nCount(".rect > h1");
    }
});