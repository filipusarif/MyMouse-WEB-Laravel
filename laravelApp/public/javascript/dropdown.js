//profile
const button2 = document.getElementById("btnDrop3");
const list2 = document.getElementById("drop3");
list2.style.display = "none";

button2.addEventListener("click", (event) =>{
    if (list2.style.display == "none") {
        list2.style.display = "block";
        list2.style.opacity = "1";
    } else {
        list2.style.display = "none";
        list2.style.opacity = "0";
    }
})