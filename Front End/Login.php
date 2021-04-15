



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
            <h1 class="form__title">Login</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" autocapitalize="none" class="form__input un" autofocus placeholder="un" name = "un" >
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
                <a  class="form__link" href="./" id="linkRegister">Don't have an account? Register</a>
            </p>
            <p class="form__text">
                <a href="LoginAdmin.php" class="form__link">Admin Login</a>
            </p>
        </form>

        <form  class="form--hidden" id="register">
            <h1 class="form__title">Register</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="AccountID" name= "un" id="un">
                <div class="form__input-error-message"></div> 
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Email" name= "email" id="email">
                <div class="form__input-error-message"></div> 
            </div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Shipping Address" name= "address" id="address">
                <div class="form__input-error-message"></div> 
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input form__input--error" autofocus placeholder="Password" name= "pass"  id="pass">
                <div class="form__input-error-message"></div> 
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input form__input--error" autofocus placeholder="Confirm Password" name= "conf">
                <div class="form__input-error-message"></div> 
            </div>
            <button class="form__button" type="submit">Continue</button>
            <p class="form__text">
                <a  class="form__link" href="./" id="linkLogin">Already have an account? Login Here</a>
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
      const registerForm = document.querySelector("#register");
      const myForm = document.getElementById('login');
      const myRegForm = document.getElementById('register');


      myForm.addEventListener("submit", (e) => {
      e.preventDefault();

      const formData = new FormData(myForm);

      var endpoint = $(myForm).serialize(); 

      let url = "../API/api/account/login.php?" + endpoint;
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
              localStorage.setItem('boolLogin', obj);
              
              var taste = localStorage.getItem('boolLogin');
              console.log(taste);

              if(obj == true){
                localStorage.setItem('username', document.querySelector(".un").value);
                localStorage.setItem('password', document.querySelector(".pass").value);
                document.location.href = './index.php';
              console.log("Its Cierto");
          }
          else{
            console.log("Its Falso");
          }
              console.log(obj);
            }).catch(function (error) {
              console.error(error);
            })
            
          });

        myRegForm.addEventListener("submit", (e) => {
          e.preventDefault();
          var registerUn = document.getElementById("un").value; 
          var registerEmail = document.getElementById("email").value; 
          var registerAddress = document.getElementById("address").value; 
          var registerPass = document.getElementById("pass").value; 

          
          let url = "../API/api/account/register.php?un=" +registerUn+"&pass=" + registerPass + "&email=" + registerEmail + "&address=" + registerAddress;
          // let url = "../API/api/account/register.php?un=run&pass=run2me&email=run@gmail.com&address=78 GOBBLE cres"
          var obj;
          fetch(url)
    .then(function (response) {
      return response.text();
    })
    .then(function(text){
      obj = JSON.parse(text);
      if(obj == true){
      loginForm.classList.remove("form--hidden");
      registerForm.classList.add("form--hidden");
      }
      console.log(obj);
    })
    .catch(function (error) { 
      console.error(error);
    });
  });  
      </script>
      
    <script src="login.js"></script>
  </body>
</html>
