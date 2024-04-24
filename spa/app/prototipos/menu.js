let nav = document.getElementById("nav");
let open = document.getElementById("openMenu");
let close = document.getElementById("closeMenu");

open.addEventListener("click", () =>{
    nav.classList.add("visible");
})

close.addEventListener("click" , () =>{
    nav.classList.remove("visible");
})

