let i = 0;
let arreylist = [
    "../img/switch.png",
    "../img/modul.png",
    "../img/wifi.png"
];

document.addEventListener("DOMContentLoaded", function() {
    vazhdo(); // Fillon slider-i kur DOM-i është ngarkuar
});

function vazhdo() {
    document.getElementById("drejto").src = arreylist[i];
    if (i < arreylist.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout(vazhdo, 2600);
}

function previousImage() {
    if (i > 0) {
        i--;
    } else {
        i = arreylist.length - 1;
    }
    document.getElementById("drejto").src = arreylist[i];
}
