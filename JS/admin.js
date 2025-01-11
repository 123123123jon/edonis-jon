const home = document.querySelector('.home');
const product = document.querySelector('.product');
const user = document.querySelector('.user');

let rendi2, rendi3, rendi4;

function vazhdo() {
    rendi2 = document.querySelector('.rendi2');
    rendi2.style.display = 'flex';
    rendi3.style.display='none';
}

user.addEventListener('click', vazhdo);

function vazhdo1() {
    rendi3 = document.querySelector('.rendi3');
    rendi3.style.display = 'flex';
    rendi2.style.display = 'none';
}

product.addEventListener('click', vazhdo1);