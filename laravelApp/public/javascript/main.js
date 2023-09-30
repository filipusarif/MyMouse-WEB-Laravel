const menuToggle = document.querySelector('.hamburger input');
const nav = document.querySelector('.navigation');

menuToggle.addEventListener('click',function(){
    nav.classList.toggle('slide');
});

const button = document.getElementById("btnDrop1");
const list = document.getElementById("drop1");
list.style.display = "none";

button.addEventListener("click", (event) =>{
    if (list.style.display == "none") {
        list.style.display = "block"
    } else {
        list.style.display = "none"
    }
})

const button1 = document.getElementById("btnDrop2");
const list1 = document.getElementById("drop2");
list1.style.display = "none";

button1.addEventListener("click", (event) =>{
    if (list1.style.display == "none") {
        list1.style.display = "block"
    } else {
        list1.style.display = "none"
    }
})


// console.log('helo');


