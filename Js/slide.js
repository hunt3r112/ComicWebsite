var slideIndex = -1;
var slide = document.getElementById('slide-wrapper');
var slideItems = document.getElementsByClassName('slide-items');
showSlides();

function showSlides() {
    if(slideIndex >= slideItems.length - 8)
        slideIndex = -1;
    slideIndex++;
    slide.style.transform = "translateX("+(slideIndex*-152)+"px)";
    setTimeout(showSlides, 5000);
}
// var nextBtn = document.getElementById('next-button');
// nextBtn.addEventListener('click',showSlides);
document.getElementById('next-button').addEventListener('click',moveSlideNext);
document.getElementById('prev-button').addEventListener('click',moveSlideBack);
function moveSlideNext() {
    if(slideIndex >= slideItems.length - 8)
        slideIndex = -1;
    slideIndex++;
    slide.style.transform = "translateX("+(slideIndex*-152)+"px)";
}
function moveSlideBack() {
    if(slideIndex <= 0)
        slideIndex = slideItems.length - 8 + 1;
    slideIndex--;
    slide.style.transform = "translateX("+(slideIndex*-152)+"px)";
}