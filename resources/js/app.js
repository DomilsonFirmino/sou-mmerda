import './bootstrap';
import * as bootstrap from 'bootstrap';

const navigator = document.querySelector("#navigation");
const separator = document.querySelector("#sep");

const navobserver = new IntersectionObserver((entries)=>{
    navigator.classList.toggle("bg-secondary",!entries[0].isIntersecting);
});

navobserver.observe(separator);
