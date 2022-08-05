var usernameInput = document.getElementById("username");
var divUsername = document.getElementById("username-label");
var passwordInput = document.getElementById("password");
var divPassword = document.getElementById("password-label");

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

document.forms["form_login"].addEventListener("submit", async (event) => {
    event.preventDefault();
    const resp = await fetch(event.target.action, {
      method: "POST",
      body: new URLSearchParams(new FormData(event.target)),
    });
    const body = await resp.json();
    if(body.error === 1){
        alert(body.msg);
    }else{
        location.href = "home.php";
    }
});