const home = document.querySelector('.home');
const product = document.querySelector('.product');
const user = document.querySelector('.user');
const contact = document.querySelector('.contact');

const rendi1 = document.querySelector('.rendi1');
const rendi2 = document.querySelector('.rendi2');
const rendi3 = document.querySelector('.rendi3');
const rendi4 = document.querySelector('.rendi4');

if (home && product && user && contact && rendi1 && rendi2 && rendi3 && rendi4) {
    
    function fshehTeGjitha() {
        rendi1.style.display = 'none';
        rendi2.style.display = 'none';
        rendi3.style.display = 'none';
        rendi4.style.display = 'none';
    }

    function vazhdo() {
        fshehTeGjitha();
        rendi2.style.display = 'flex';
    }

    function vazhdo1() {
        fshehTeGjitha();
        rendi3.style.display = 'flex';
    }

    function vazhdo2() {
        fshehTeGjitha();
        rendi4.style.display = 'flex';
    }

    function vazhdo3() {
        fshehTeGjitha();
        rendi1.style.display = 'flex';
    }

    user.addEventListener('click', vazhdo);
    product.addEventListener('click', vazhdo1);
    home.addEventListener('click', vazhdo2);
    contact.addEventListener('click', vazhdo3);
    
} else {
    console.error("Diqka shkoj gabim");
}
