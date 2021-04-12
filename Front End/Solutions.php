<?php 
session_start();
  $_SESSION;
?>

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
    <link rel="stylesheet" href ="solutions.css" />

    <title>Solutions</title>
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
          <a href="index.php">Home</a>
        </li>
        <li>
          <a class="active" href="Solutions.php">Solutions</a>
        </li>
        <li>
          <a href="Parts.php">Parts</a>
        </li>
      </div>
        <li >
          <div id="user-icon">
            <a href="Login.php"><i class="glyphicon glyphicon-user"></i></a>
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
      <div id="banner">
        <div id="parts-container">
          <div class="container-style">
            <h1 class="form__title">Solution Search</h1>
            <div class="container-selector">

              <div class="select-box">
                <div class="options-container">
                  <div class="option">
                    <input
                      type="radio"
                      class="radio"
                      id="Issue"
                      value="Issue"
                      name="category"
                    />
                    <label for="Issue">Issue</label>
                  </div>
        
                  <div class="option">
                    <input type="radio" class="radio" id="Car" value="Car" name="category" />
                    <label for="Car">Car</label>
                  </div>
                </div>
        
                <div class="selected">
                  Select Solution
                </div>
              </div>

              <div class="select-box-make " >
                <div class="options-container-make">
                  <div class="option-make">
                    <input
                      type="radio"
                      class="radio"
                      id="Honda"
                      name="category"
                    />
                    <label for="Name">Honda</label>
                  </div>
        
                  <div class="option-make">
                    <input type="radio" class="radio" id="Ford" name="category" />
                    <label for="Engine">Ford</label>
                  </div>
  
                  <div class="option-make">
                    <input type="radio" class="radio" id="Mazda" name="category" />
                    <label for="Transmission">Mazda</label>
                  </div>
  
                  <div class="option-make">
                    <input type="radio" class="radio" id="Dodge" name="category" />
                    <label for="Chassis">Dodge</label>
                  </div>
                  
                </div>
        
                <div id = "selected-make" class="selected-make form--hidden" >
                  Select Make
                </div>
              </div>
  
              <div class="select-box-model">
                <div class="options-container-model">
                  <div class="option-model">
                    <input
                      type="radio"
                      class="radio"
                      id="Name"
                      name="category"
                    />
                    <label for="Name">Name</label>
                  </div>
                
                  <div class="option-model">
                    <input type="radio" class="radio" id="Engine" name="category" />
                    <label for="Engine">Engine</label>
                  </div>
                
                  <div class="option-model">
                    <input type="radio" class="radio" id="Transmission" name="category" />
                    <label for="Transmission">Transmission</label>
                  </div>
                
                  <div class="option-model">
                    <input type="radio" class="radio" id="Chassis" name="category" />
                    <label for="Chassis">Chassis</label>
                  </div>
                  
                </div>
                
                <div class="selected-model form--hidden">
                  Select Model
                </div>
                </div>

                <div class="select-box-year">
                  <div class="options-container-year">
                    <div class="option-year">
                      <input
                        type="radio"
                        class="radio"
                        id="Name"
                        name="category"
                      />
                      <label for="Name">Name</label>
                    </div>
                  
                    <div class="option-year">
                      <input type="radio" class="radio" id="Engine" name="category" />
                      <label for="Engine">Engine</label>
                    </div>
                  
                    <div class="option-year">
                      <input type="radio" class="radio" id="Transmission" name="category" />
                      <label for="Transmission">Transmission</label>
                    </div>
                  
                    <div class="option-year">
                      <input type="radio" class="radio" id="Chassis" name="category" />
                      <label for="Chassis">Chassis</label>
                    </div>
                    
                  </div>
                  
                  <div class="selected-year form--hidden">
                    Select year
                  </div>
                  </div>
               
                  
            <div class="select-box-issue-name">
              <div class="options-container-issue-name">
                <div class="option-issue-name">
                  <input type="radio" class="radio" id="Name" name="category" />
                  <label for="Name">Name</label>
                </div>
            
                <div class="option-issue-name">
                  <input type="radio" class="radio" id="Engine" name="category" />
                  <label for="Engine">Engine</label>
                </div>
            
                <div class="option-issue-name">
                  <input type="radio" class="radio" id="Transmission" name="category" />
                  <label for="Transmission">Transmission</label>
                </div>
            
                <div class="option-issue-name">
                  <input type="radio" class="radio" id="Chassis" name="category" />
                  <label for="Chassis">Chassis</label>
                </div>
              </div>
            
              <div class="selected-issue-name form--hidden">Select Issue Name</div>
            </div>
            </div>
        <form  class="form" id="searchParts">
          
          <div class="form__input-group">
          </div>
          <button class="partSearch__button" type="partSearchSubmit">Continue</button>
      </form>
    </div>
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

    <script src="solutions.js"></script>
    <script src="main.js"></script>
  </body>
</html>