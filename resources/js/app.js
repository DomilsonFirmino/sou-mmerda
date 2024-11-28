import './bootstrap';
import * as bootstrap from 'bootstrap';

const navigator = document.querySelector("#navigation");
const separator = document.querySelector("#sep");

const navobserver = new IntersectionObserver((entries)=>{
    navigator.classList.toggle("bg-secondary",!entries[0].isIntersecting);
});

if(separator !== null){
    navobserver.observe(separator);
}

const showButton = document.querySelector("#show");
const closeButton = document.querySelector("#close");

const dialog = document.querySelector('dialog');

// if(closeButton !== null && showButton !== null && dialog !== null){
//    showButton.addEventListener("click", function (){
//         dialog.showModal();
//    });

//    closeButton.addEventListener("click", function (){
//         dialog.close();
//     });
// }

if(showButton !== null && dialog !== null){
    showButton.addEventListener("click", function (){
         dialog.showModal();
    });
}

if(closeButton !== null && dialog !== null){
   closeButton.addEventListener("click", function (){
        dialog.close();
    });
}
