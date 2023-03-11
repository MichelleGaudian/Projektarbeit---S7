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
// Select the columns container element
const columns = document.querySelector('.columns');

// Define a function to check if an element is in view
function isInViewport(element) {
  const rect = element.getBoundingClientRect();
  return (
    rect.left >= 0 &&
    rect.top >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// Define a function to fade in an element
function fadeIn(element) {
  let opacity = 0;
  const timer = setInterval(() => {
    if (opacity >= 1) {
      clearInterval(timer);
    }
    element.style.opacity = opacity;
    opacity += 0.1;
  }, 50);
}

// Add an event listener to the window object to check for scroll events
window.addEventListener('scroll', () => {
  // If the columns container is in view, fade in each column
  if (isInViewport(columns)) {
    const columnElements = columns.querySelectorAll('.content-container');
    columnElements.forEach((column, index) => {
      setTimeout(() => {
        fadeIn(column);
      }, index * 200);
    });
  }
});



