// Funktion zur Prüfung ob JS geladen wurde (ändern der Klasse "no-js" im HTML-Tag)
function jsLoaded() {
    const htmlTag = document.querySelector('html')
    htmlTag.classList.remove('no-js')
    htmlTag.classList.add('js')
    
}




// Anzeigen/Verstecken vom Top Button
function showToTop() {
    const toTopButton = document.getElementById('to-top')
    if(window.scrollY > 200) {
        toTopButton.classList.add('show')

    } else {
        toTopButton.classList.remove('show')
    }
}

// scoll to Top bei Button klick
document.getElementById('to-top').addEventListener('click', function() {
    document.body.scrollTop = 0
    document.documentElement.scrollTop = 0
})
// Funktion um Elementen die Klasse "animate" zuzuweisen
function elementAddAnimate() {
    let elements = document.querySelectorAll('h1, h2, p, .project, .post')
    for (let i = 0; i < elements.length; i++) {
        elements[i].classList.add('animate')
    }
    
}
