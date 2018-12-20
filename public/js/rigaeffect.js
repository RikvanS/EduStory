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







function inView(opt) {
    if (opt.selector === undefined) {
      console.log('Valid selector required for inView');
      return false;
    }
    var elems = [].slice.call(document.querySelectorAll(opt.selector)),
      once = opt.once === undefined ? true : opt.once,
      offsetTop = opt.offsetTop === undefined ? 0 : opt.offsetTop,
      offsetBot = opt.offsetBot === undefined ? 0 : opt.offsetBot,
      count = elems.length,
      winHeight = 0,
      ticking = false;
  
    function update() {
      var i = count;
      while (i--) {
        var elem = elems[i],
          rect = elem.getBoundingClientRect();
        if (rect.bottom >= offsetTop && rect.top <= winHeight - offsetBot) {
          elem.classList.add('in-view');
          if (once) {
            count--;
            elems.splice(i, 1);
          }
        } else {
          elem.classList.remove('in-view');
        }
      }
      ticking = false;
    }
  
    function onResize() {
      winHeight = window.innerHeight;
      requestTick();
    }
  
    function onScroll() {
      requestTick();
    }
  
    function requestTick() {
      if (!ticking) {
        requestAnimationFrame(update);
        ticking = true;
      }
    }
  
    window.addEventListener('resize', onResize, false);
    document.addEventListener('scroll', onScroll, false);
    document.addEventListener('touchmove', onScroll, false);
  
    onResize();
  }
  
  inView({
    selector: '.view-poll',
    once: false,
    offsetTop: 0,
    offsetBot: 50
  });