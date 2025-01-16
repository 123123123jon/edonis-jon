let i =0;
let arreylist = [
    "../img/switch.png",
    "../img/modul.png",
    "../img/wifi.png"
];

function vazhdo(){
    document.getElementById("drejto").src=arreylist[i];
        if(i<arreylist.length-1){
            i++;
        }else{
            i=0;
        }
        setTimeout("vazhdo()", 2600);
}
document.addEventListener('load', vazhdo());

