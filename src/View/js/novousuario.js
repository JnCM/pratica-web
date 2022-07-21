var usernameInput = document.getElementById("username");
var divUsername = document.getElementById("username-label");
var passwordInput = document.getElementById("password");
var divPassword = document.getElementById("password-label");
var confirmPasswordInput = document.getElementById("confirm_password");
var divConfirmPassword = document.getElementById("confirm-password-label");

usernameInput.onfocus = () => {
    divUsername.classList.add("active");
}

usernameInput.onblur = () => {
    if(usernameInput.value == ""){
        divUsername.classList.remove("active");
    }
}

passwordInput.onfocus = () => {
    divPassword.classList.add("active");
}

passwordInput.onblur = () => {
    if(passwordInput.value == ""){
        divPassword.classList.remove("active");
    }
}

confirmPasswordInput.onfocus = () => {
    divConfirmPassword.classList.add("active");
}

confirmPasswordInput.onblur = () => {
    if(confirmPasswordInput.value == ""){
        divConfirmPassword.classList.remove("active");
    }
}

document.getElementById("voltar").onclick = () => {
    location.href = "./index.html";
}