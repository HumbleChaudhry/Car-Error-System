
function setFormMessage(formElement, type, message) {
    const messageElement = formElement.querySelector(".form__message");

    messageElement.textContent = message;
    messageElement.classList.remove("form__message--success", "form__message--error");
    messageElement.classList.add(`form__message--${type}`);
}

function setInputError(inputElement, message) {
    inputElement.classList.add("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = "";
}


document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const registerForm = document.querySelector("#register");

    document.querySelector("#linkRegister").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        registerForm.classList.remove("form--hidden");
    });

    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        registerForm.classList.add("form--hidden");
    });

    loginForm.addEventListener("submit", e => {
        e.preventDefault();

        // Perform your AJAX/Fetch login
        const formData = new FormData(loginForm); 

        fetch('./API/api/account/login.php', {
            method: 'get',
            body: formData
        }).then(function (response){
            return response.text();
        }).then(function (text){
            console.log(text);
        }).catch(function (error){
            console.error(error);
        })

        setFormMessage(loginForm, "error", "Invalid ID/password combination");
    });

    document.querySelectorAll(".form__input").forEach(inputElement => {
        inputElement.addEventListener("blur", e => {
            if (e.target.id === "signupID" && e.target.value.length > 0 && e.target.value.length > 20) {
                setInputError(inputElement, "AccountID must be less than 20 characters in length");
            }
        });

        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        });
    });
});

const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const searchIcon = document.getElementById("search-icon");
const searchBox = document.getElementById("searchbox");

searchIcon.addEventListener('click', function () {
    if (searchBox.style.top == '72px') {
      searchBox.style.top = '24px';
      searchBox.style.pointerEvents = 'none';
      searchIcon.style.color = 'darkgreen'; 
    } else {
      searchBox.style.top = '72px';
      searchBox.style.pointerEvents = 'auto'; 
      searchIcon.style.color = 'orchid'; 
    }
  });

menuIcon.addEventListener('click', function () {
    if (slideoutMenu.style.opacity == "1") {
      slideoutMenu.style.opacity = '0';
      slideoutMenu.style.pointerEvents = 'none';
    } else {
      slideoutMenu.style.opacity = '1';
      slideoutMenu.style.pointerEvents = 'auto';
    }
  })