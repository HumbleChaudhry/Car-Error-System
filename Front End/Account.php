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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    
    <link rel="stylesheet" href="style.css" />
   


    <title>My Account</title>
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
      <li>
          <a href="#" onclick='return logout()'>Logout</a>
        </li>
        <li >
          <div id="user-icon">
            <a class="active" href="Account.php"><i class="glyphicon glyphicon-user"></i></a>
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

    <div id="banner">
        <div id="parts-container">
          <div class="container-style">
            <h1 class="form__title">My Account</h1>

          
            <button class="form__button" onclick = "return purchases()">See Purchases</button>
            <button class="form__button" onclick = "return deleteAccount()">Delete Account</button>
           
            </div>
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
   

    <script>
      if(localStorage.getItem('boolLogin') == "false"){
        document.location.replace('./login.php');
      }
      function logout(){
        localStorage.setItem('boolLogin', "false");
        document.location.replace('./login.php');
      }

      function purchases(){
        
        // localStorage.getItem('password');

        let url = "../API/api/account/getInfo.php?un=" + localStorage.getItem('username') 

        fetch(url)
    .then(function (response) {
      return response.json();
    })
    .then(function(obj){
      console.log(obj.data);
    })
    .catch(function (error) {
      console.error(error);
    });
      }

      function deleteAccount(){

        let url = "../API/api/account/delete.php?id=" + localStorage.getItem('username') 
        console.log(localStorage.getItem('username') );
        // var obj;
          fetch(url)
            .then(function (response) {
            return response.json();
            })
            .then(function(obj){
            console.log(obj);
            })
            .catch(function (error) {
            console.error(error);
            });
        localStorage.setItem('boolLogin', "false");
        document.location.replace('./login.php');
      }

    </script>
    <script src="main.js"></script>
    
  </body>
</html>