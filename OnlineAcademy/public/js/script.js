console.log("hello");

const navLinks=document.querySelector('.nav-links');
const menu=document.getElementById('menu-btn');
const close=document.getElementById('menu-close');

menu.addEventListener('click',(e)=>{
    e.preventDefault();
    navLinks.style.right='0';
})
close.addEventListener('click',(e)=>{
    e.preventDefault();
    navLinks.style.right='-220px';
})
console.log(navLinks);