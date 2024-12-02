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

const showButton = document.querySelectorAll("#show");
const closeButton = document.querySelectorAll("#close");

const dialog = document.querySelectorAll('dialog');

// if(closeButton !== null && showButton !== null && dialog !== null){
//    showButton.addEventListener("click", function (){
//         dialog.showModal();
//    });

//    closeButton.addEventListener("click", function (){
//         dialog.close();
//     });
// }


showButton.forEach((showButton,i) => {
    if(showButton !== null && dialog !== null){
        showButton.addEventListener("click", function (){
            dialog[i].showModal();
        });
    }
});

closeButton.forEach((closeButton,i) => {
    if(closeButton !== null && dialog !== null){
        closeButton.addEventListener("click", function (){
            dialog[i].close();
        });
    }
});
