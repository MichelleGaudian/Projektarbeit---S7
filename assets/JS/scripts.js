// Funktion zur Prüfung ob JS geladen wurde (ändern der Klasse "no-js" im HTML-Tag)
function jsLoaded() {
    const htmlTag = document.querySelector('html')
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
    
}




// Show/Hide To-Top Button
function showToTop(){
    const toTopButton = document.getElementById('to-top')
    if(window.scrollY > 200){
        toTopButton.classList.add('show')
    } else {
        toTopButton.classList.remove('show')
    }
}


// scroll to top bei Button Klick
document.getElementById('to-top').addEventListener('click', function(){
    document.body.scrollTop = 0
    document.documentElement.scrollTop = 0
})

// GK Event Listner "scroll" wird nur ausgeführt wenn gescrollt wird - wenn der arber fehlt, dann wird bei scroll nichts ausgelöst, button dann weg
document.addEventListener('scroll', function() {

    showToTop()
    elementInViewport()

})

// Event Listner "resize" wird nur bei Veränderung der Fenstergröße ausgeführt
window.addEventListener('resize', function(){

    elementInViewport()

})

  

// bilder 4 stück einrücken
/*
$(window).scroll(function() {
    var scrollBottom = $(window).scrollTop() + $(window).height();
    var columnsTop = $(".columns").offset().top;
    
    if (scrollBottom > columnsTop) {
      $(".content-container img-container").each(function(index) {
        $(this).delay(index * 250).animate({opacity: 1}, 1000);
      });
      
      $(".content-container h3, .content-container p").delay(1000).animate({opacity: 1}, 1000);
    }
  });
  */



