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
    <link rel="stylesheet" href ="selector.css" />

    <title>Parts</title>
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
          <a href="Solutions.php">Solutions</a>
        </li>
        <li>
          <a class="active" href="Parts.php">Parts</a>
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
      <div id="parts-container">
        <div class="container-style">
        <h1 class="form__title">Part Search</h1>
            <div class="container-selector">

              

      <form id = "partForm">
    <div class="select-box-maker">
    <div class="options-container-maker">
      <div class="option-maker">
        <input
          type="radio"
          class="radio"
          id="Honda"
          value="Honda"
          name="maker"
        />
        <label for="Honda">Honda</label>
      </div>
    
      <div class="option-maker">
        <input type="radio" class="radio" id="Ford" value="Ford" name="maker" />
        <label for="Ford">Ford</label>
      </div>
    
      <div class="option-maker">
        <input type="radio" class="radio" id="Mazda" value="Mazda" name="maker" />
        <label for="Mazda">Mazda</label>
      </div>
    
      <div class="option-maker">
        <input type="radio" class="radio" id="Dodge" value="Dodge" name="maker" />
        <label for="Dodge">Dodge</label>
      </div>
    </div>
    
    <div class="selected-maker">
      Select Make
    </div>
  </div>

              <div class="select-box-model">
                <div class="options-container-model">
                  <div class="option-model">
                    <input
                      type="radio"
                      class="radio"
                      id="Challenger"
                      value= "Challenger"
                      name="model"
                    />
                    <label for="Challenger">Challenger</label>
                  </div>
                
                  <div class="option-model">
                    <input type="radio" class="radio" id="Escape"   value= "Escape" name="model" />
                    <label for="Escape">Escape</label>
                  </div>
                
                  <div class="option-model">
                    <input type="radio" class="radio" id="Focus" value= "Focus" name="model" />
                    <label for="Focus">Focus</label>
                  </div>
                
                  <div class="option-model">
                    <input type="radio" class="radio" id="Accord" value= "Accord" name="model" />
                    <label for="Accord">Accord</label>
                  </div>
                  

                  <div class="option-model">
                    <input type="radio" class="radio" id="Civic" value= "Civic" name="model" />
                    <label for="Civic">Civic</label>
                  </div>

                  <div class="option-model">
                    <input type="radio" class="radio" id="Prelude" value= "Prelude" name="model" />
                    <label for="Prelude">Prelude</label>
                  </div>

                  <div class="option-model">
                    <input type="radio" class="radio" id="Mazda3" value= "Mazda3" name="model" />
                    <label for="Mazda3">Mazda3</label>
                  </div>
                </div>
                
                <div class="selected-model ">
                  Select Model
                </div>
                </div>

                <div class="select-box-year">
                  <div class="options-container-year">
                    <div class="option-year">
                      <input
                        type="radio"
                        class="radio"
                        id="1992"
                        value="1992"
                        name="year"
                      />
                      <label for="1992">1992</label>
                    </div>
                  
                    <div class="option-year">
                      <input type="radio" class="radio" id="2000" value="2000" name="year" />
                      <label for="2000">2000</label>
                    </div>
                  
                    <div class="option-year">
                      <input type="radio" class="radio" id="2002" value="2002" name="year" />
                      <label for="2002">2002</label>
                    </div>
                  
                    <div class="option-year">
                      <input type="radio" class="radio" id="2007" value="2007" name="year" />
                      <label for="2007">2007</label>
                    </div>
                    <div class="option-year">
                      <input type="radio" class="radio" id="2010" value="2010" name="year" />
                      <label for="2010">2010</label>
                    </div>
                  
                    <div class="option-year">
                      <input type="radio" class="radio" id="2012" value="2012" name="year" />
                      <label for="2012">2012</label>
                    </div>
                  
                    <div class="option-year">
                      <input type="radio" class="radio" id="2015" value="2015" name="year" />
                      <label for="2015">2015</label>
                    </div>


                  </div>
                  
                  <div class="selected-year ">
                    Select year
                  </div>
                </div>

        
                <button class="partSearch__button" type="submit">Continue</button>
              </form>
          </div>
        </div>
      </div>
   </div>

          
      <!-- <form  class="form" id="searchParts">
        
        <div class="form__input-group">
        </div>
        <button class="partSearch__button" type="partSearchSubmit">Continue</button>
    </form> -->


  
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
document.addEventListener("DOMContentLoaded", (e) => {
  var radios = document.querySelectorAll('input[name="category"]');
  for (var i = 0, max = radios.length; i < max; i++) {
    radios[i].onclick = function () {
      if (this.value == "Car") {
        selectedIssueName.classList.add("form--hidden");
        selectedMake.classList.remove("form--hidden");
        selectedModel.classList.remove("form--hidden");
        selectedYear.classList.remove("form--hidden");
      } else {
        selectedMake.classList.add("form--hidden");
        selectedModel.classList.add("form--hidden");
        selectedYear.classList.add("form--hidden");
        selectedIssueName.classList.remove("form--hidden");
  
      }
    };
  }
});



var formData = new FormData();

const partForm = document.getElementById("partForm");
  let makeForm;
  let modelForm;
  let yearForm;

  var make = document.forms["partForm"].elements["maker"];
for(var i = 0, max = make.length; i < max; i++) {
  make[i].onclick = function() {
    makeForm = this.value; 
        
    }
}


  var model = document.forms["partForm"].elements["model"];
for(var i = 0, max = model.length; i < max; i++) {
  model[i].onclick = function() {
    modelForm = this.value;
    }
}


  var year = document.forms["partForm"].elements["year"];
for(var i = 0, max = year.length; i < max; i++) {
  year[i].onclick = function() {
    yearForm = this.value;
    }
}


partForm.addEventListener("submit", (e) => {
  e.preventDefault();

  console.log(makeForm);
  console.log(modelForm);
  console.log(yearForm);

  let url = "../API/api/part/getAll.php?make=" + makeForm + "&model=" + modelForm + "&year=" + yearForm;
  let urlHome = "/index.php";
  var textResponse;
  var obj;
  var myArray = [];
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
});
    </script>

    <script src="main.js"></script>
    <script src="selector.js"></script>
  </body>
</html>
