
const loginForm = document.getElementById('loginForm');
const usernameField = document.getElementById('username');
const passwordField = document.getElementById('password');
const error = document.getElementById('error');


loginForm.addEventListener('submit', function (e) {

    const username = usernameField.value.trim();
    const password = passwordField.value.trim();

    if(!username || !password) {
        error.textContent = "Te plotsohen te gjitha fushat, OBLIGATIVE";
        return;
    }

    if(username.length < 4) {
        error.textContent = "Username duhet te permbaj te pakte 4 karaktere.";
        return;
    }
    if(password.length < 9) {
        error.textContent = "Password duhet te ket te pakten 9 karaktere.";
        return;
    }
});
