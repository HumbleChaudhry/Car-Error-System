



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed|Roboto+Slab"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" />

    <title>Login</title>
  </head>
  <body>
    <div id="slideout-menu">
      <ul>
        <li>
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="Solutions.php">Solutions</a>
        </li>
        <li>
          <a href="Parts.php">Parts</a>
        </li>
        <li>
          <a href="Login.php">Login</a>
        </li>
        <li>
          <input type="text" placeholder="Search Here" />
        </li>
      </ul>
    </div>

    <nav>
        <div id="logo-img">
          <a href="index.php">
            <img src="img/Car Error System Logo.png" alt="CES Logo" />
          </a>
        </div>
        <div id="menu-icon">
          <i class="fas fa-bars"></i>
        </div>
        <ul>
          
          <div id = "links">
          <li>
            <a  href="index.php">Home</a>
          </li>
          <li>
            <a href="Solutions.php">Solutions</a>
          </li>
          <li>
            <a href="Parts.php">Parts</a>
          </li>
        </div>
          <li >
            <div id="user-icon">
              <a class="active" href="Login.php"><i class="glyphicon glyphicon-user"></i></a>
            </div>
          </li>
          <li >
            <div id="search-icon">
              <i class="fas fa-search"></i>
            </div>
          </li>
        </ul>
      </nav>

    <div id="searchbox">
      <input type="text" placeholder="Search Here" />
    </div>

    <div id="container">
        <div class="container-style">
        <form  class="form" id="login">
            <h1 class="form__title">Admin Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text"  autocapitalize="none" class="form__input un" autofocus placeholder="un" name = "un" >
                <div class="form__input-error-message"></div> 
            </div>
            <div class="form__input-group">
                <!-- <input type="password" class="form__input form__input--error" autofocus placeholder="Password"> -->
                <input type="password" class="form__input pass" autofocus placeholder="pass" name = "pass" >
                <div class="form__input-error-message"></div> 
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a href="#" class="form__link">Forgot your password?</a>
            </p>
            <p class="form__text">
                <a href="Login.php" class="form__link">Mechanic Login</a>
            </p>
        </form>

    </div>
    </div>

      <footer>
        <div id="left-footer">
          <h3>Quick Links</h3>
          <p>
            <ul>
              <li>
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">Solutions</a>
              </li>
              <li>
                <a href="#">Parts</a>
              </li>
              <li>
                <a href="#">Contact</a>
              </li>
              <li>
                <a href="#">About</a>
              </li>
            </ul>
          </p>
        </div>
      </footer>

      <script src='jquery-3.6.0.min.js'></script>
      <script>
        
      
      
      
      const loginForm = document.querySelector("#login");
      
      const myForm = document.getElementById('login');
     

      function setFormMessage(formElement, type, message) {
  const messageElement = formElement.querySelector(".form__message");

  messageElement.textContent = message;
  messageElement.classList.remove(
    "form__message--success",
    "form__message--error"
  );
  messageElement.classList.add(`form__message--${type}`);
}

function setInputError(inputElement, message) {
  inputElement.classList.add("form__input--error");
  inputElement.parentElement.querySelector(
    ".form__input-error-message"
  ).textContent = message;
}

function clearInputError(inputElement) {
  inputElement.classList.remove("form__input--error");
  inputElement.parentElement.querySelector(
    ".form__input-error-message"
  ).textContent = "";
}


      myForm.addEventListener("submit", (e) => {
      e.preventDefault();

      const formData = new FormData(myForm);

      var endpoint = $(myForm).serialize(); 

      let url = "../API/api/account/adminLogin.php?" + endpoint;
      let urlHome = "/index.php";
      var textResponse;
      var obj;
          fetch(url, {
            method: "post",
            body: formData,
          }).then(function (response) {
              return response.text();
            }).then(function (text) {
              
              obj = JSON.parse(text);
              localStorage.setItem('adminLogin', obj);
              var taste = localStorage.getItem('adminLogin');
              console.log(taste);

              if(obj == true){
                localStorage.setItem('adminUsername', document.querySelector(".un").value);
                document.location.replace('./Admin.php');
              console.log("Its Cierto");
          }
          else{
            setFormMessage(loginForm, "error", "Invalid ID/password combination");
            console.log("Its Falso");
          }
              console.log(obj);
            }).catch(function (error) {
              console.error(error);
            })
           
          });

      </script>
      
    <script src="loginAdmin.js"></script>
  </body>
</html>
