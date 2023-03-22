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

//  Event Listner "scroll" wird nur ausgeführt wenn gescrollt wird - wenn der arber fehlt, dann wird bei scroll nichts ausgelöst, button dann weg
document.addEventListener('scroll', function() {

    showToTop()
    elementInViewport()

})

// Event Listner "resize" wird nur bei Veränderung der Fenstergröße ausgeführt
window.addEventListener('resize', function(){

    elementInViewport()

})

  




