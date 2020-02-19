var slideIndex = -1;
showSlides();

function showSlides() {
    var slide = document.getElementById('slide-wrapper');
    var slideItems = document.getElementsByClassName('slide-items');
    slideIndex++;
    slide.style.transform = "translateX("+(slideIndex*-152)+"px)";
    if(slideIndex == slideItems.length - 8)
        slideIndex = -1;
    setTimeout(showSlides, 5000);
}