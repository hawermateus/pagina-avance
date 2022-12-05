const video = document.querySelector("#video");

let videoSection = document.querySelectorAll(".video__section");
let videoSectionLast = videoSection [videoSection.length -1];

const btnleft = document.querySelector("#btn-left");
const btnRight = document.querySelector("#btn-right");

video.insertAdjacentElement('afterbegin', sliderSectionLast);

function Next() {
    let videoSectionFirst = document.querySelectorAll(".video__section")[0];
    video.style.marginleft = "-200%";
    video.style.transition = "all 0.5s";
    setTimeout(function(){
        video.style.transition = "none";
        video.insertAdjacentElement('beforeend', videoSectionFirst);
        video.style.marginleft = "-100%";
    }, 500);
}

function Prev() {
    let videoSectionFirst = document.querySelectorAll(".video__section")[0];
    let videoSectionLast = videoSection [videoSection.length -1];
    video.style.marginleft = "0";
    video.style.transition = "all 0.5s";
    setTimeout(function(){
        video.style.transition = "none";
        video.insertAdjacentElement('afterbegin', videoSectionLast);
        video.style.marginleft = "-100%";
    }, 500);
}

btnRight.addEventListener('click', function(){
    Next();
});

btnleft.addEventListener('click', function(){
    Prev();
});

setInterval(function(){
    Next();
}, 5000);