let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');

toggle.onclick = function(){
    navigation.classList.toggle('active');
    main.classList.toggle('active');
}

let list = document.querySelectorAll('.navigation li');
function activeLink() {
    list.forEach((item) =>
    item.classList.remove('hovered'));
    this.classList.add('hovered');
}
list.forEach((item) =>
item.addEventListener('mouseover', activeLink));

const tabLink = document.querySelectorAll('.tab-link');
const documento = document.querySelectorAll('.documentos');

for (let x = 0; x < tabLink.length; x++) {
    tabLink[x].addEventListener('click', ()=>{

        tabLink.forEach((tab)=> tab.classList.remove('active'));

        tabLink[x].classList.add('active');

        documento.forEach((form)=>form.classList.remove('active'));
        documento[x].classList.add('active');
    });

}