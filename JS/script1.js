var password_input = document.getElementById("password");


function validoPassword(password){

    const errors=[];

    var jon;

    if(!/[A-Z]/.test(password)){
        errors.push("Fjalkalimi duhet te kete se paku nje shkronje te madhe");
    }
    if(!/[!@#$%^&*()_\-+=<>?]/.test(password)){
        errors.push("Fjalkalimi duhet te perfshije gjithsesi nje simbole");
    }
    if(password.length< 9){
        errors.push("Fjalkalimi duhet te jete i gjate se puku 9-te karaktere");
    }
    if(!/[1234567890]/.test(password)){
        errors.push("Fjalkalimi duhet te permbaje nje numer");
    }

    return errors.length >0 ? errors : "Fjalkalimi eshte i sakt";
}

console.log(validoPassword(password_input.value));