// scroll animation start
const fade = document.querySelectorAll('.fade');
const right = document.querySelectorAll('.right');
const gotop = document.querySelectorAll('.gotop');

window.addEventListener('scroll', check);

function check(){
    const triggerBottom = window.innerHeight /5 * 4;

    fade.forEach((button) => {
        const boxTop = button.getBoundingClientRect().top;

        if(boxTop<=triggerBottom){
            button.classList.add('showFade');
        }else{
            button.classList.remove('showFade');
        }
    })
    right.forEach((button) => {
        const boxTop = button.getBoundingClientRect().top;

        if(boxTop<=triggerBottom){
            button.classList.add('showFade');
        }else{
            button.classList.remove('showFade');
        }
    })
    gotop.forEach((button) => {
        const boxTop = button.getBoundingClientRect().top;

        if(boxTop<=triggerBottom){
            button.classList.add('showFade');
        }else{
            button.classList.remove('showFade');
        }
    })
}
// scroll animation end