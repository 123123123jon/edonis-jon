const password_input = document.getElementById("password");
const feedback = document.getElementById("vlersimi");
const shtyp = document.getElementById("passwordForm");
const confirm = document.getElementById("confirm");

function validoPassword(password, confirm2){

    const errors=[];    

    if(!/[A-Z]/.test(password)){
        errors.push("Fjalkalimi duhet te kete se paku nje shkronje te madhe");
    }
    if(!/[!@#$%^&*()_\-+=<>?]/.test(password)){
        errors.push("Fjalkalimi duhet te perfshije gjithsesi nje simbole");
    }
    if(password.length< 9){
        errors.push("Fjalkalimi duhet te jete i gjate se paku 9-te karaktere");
    }
    if(!/[1234567890]/.test(password)){
        errors.push("Fjalkalimi duhet te permbaje nje numer");
    }
    if(password!=confirm2) {
        errors.push("Fjalëkalimi dhe konfirmimi nuk përputhen.");
    }

    return errors;
}

shtyp.addEventListener("submit", (e) => {
    const errors = validoPassword(password_input.value, confirm.value);
    if(errors.length){
        e.preventDefault();
        feedback.innerText = errors.join("\n");
        feedback.style.color="red";
    } else{
        feedback.innerText="Fjalkalimi eshte i vlefshem";
        feedback.style.color="green";
    }
})