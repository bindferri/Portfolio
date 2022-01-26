let login = document.querySelector(".login");
let overlay = document.querySelector(".overlay");

let openLoginForm = function (e){
    e.preventDefault();
    overlay.classList.remove("hidden");
    login.classList.remove("hidden");
}

let closeLoginForm = function (){
    overlay.classList.add("hidden");
    login.classList.add("hidden");
}

document.querySelector(".open-overlay").addEventListener("click",openLoginForm)


document.querySelector(".close-login").addEventListener("click",closeLoginForm)

document.addEventListener("keydown",function (e){
    if (e.key === 'Escape' && !login.classList.contains("hidden")){
        closeLoginForm();
    }
})