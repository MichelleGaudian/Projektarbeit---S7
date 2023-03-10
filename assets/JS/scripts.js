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

  

// bilder 4 stück einrücken
$(window).scroll(function() {
    var scrollBottom = $(window).scrollTop() + $(window).height();
    var containerTop = $(".image-container").offset().top;
    
    if (scrollBottom > containerTop) {
      $(".image-container img").each(function(index) {
        $(this).delay(index * 250).animate({opacity: 1}, 1000);
      });
      
      $(".image-container h3, .image-container p").delay(1000).animate({opacity: 1}, 1000);
    }
  });