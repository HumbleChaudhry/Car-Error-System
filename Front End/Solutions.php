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
      <li>
          <a href="#" onclick='return logout()'>Logout</a>
        </li>
        <li >
          <div id="user-icon">
            <a href="Account.php"><i class="glyphicon glyphicon-user"></i></a>
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
            <h1 class="form__title">Solution Search</h1>
            <div class="container-selector">
            <form id = "solutionForm">
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
                      value="Honda"
                      name="make"
                    />
                    <label for="Honda">Honda</label>
                  </div>
        
                  <div class="option-make">
                    <input type="radio" class="radio" id="Ford" value="Ford" name="make" />
                    <label for="Ford">Ford</label>
                  </div>
  
                  <div class="option-make">
                    <input type="radio" class="radio" id="Mazda" value="Mazda" name="make" />
                    <label for="Mazda">Mazda</label>
                  </div>
  
                  <div class="option-make">
                    <input type="radio" class="radio" id="Dodge" value="Dodge" name="make" />
                    <label for="Dodge">Dodge</label>
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
                      id="Challenger"
                      value="Challenger"
                      name="model"
                    />
                    <label for="Challenger">Challenger</label>
                  </div>
                
                  <div class="option-model">
                    <input type="radio" class="radio" id="Escape" value="Escape" name="model" />
                    <label for="Escape">Escape</label>
                  </div>
                
                  <div class="option-model">
                    <input type="radio" class="radio" id="Focus" value="Focus" name="model" />
                    <label for="Focus">Focus</label>
                  </div>
                
                  <div class="option-model">
                    <input type="radio" class="radio" id="Accord" value="Accord" name="model" />
                    <label for="Accord">Accord</label>
                  </div>
                  

                  <div class="option-model">
                    <input type="radio" class="radio" id="Civic" value="Civic" name="model" />
                    <label for="Civic">Civic</label>
                  </div>

                  <div class="option-model">
                    <input type="radio" class="radio" id="Prelude" value="Prelude" name="model" />
                    <label for="Prelude">Prelude</label>
                  </div>

                  <div class="option-model">
                    <input type="radio" class="radio" id="Mazda3" value="Mazda3" name="model" />
                    <label for="Mazda3">Mazda3</label>
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
                        id="1992".
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
                  
                  <div class="selected-year form--hidden">
                    Select year
                  </div>
                  </div>

                  
            <div class="select-box-issue-name">
              <div class="options-container-issue-name">

                <div class="option-issue-name">
                  <input type="radio" class="radio" id="Dead Battery" value ="Dead Battery" name="iName" />
                  <label for="Dead Battery">Dead Battery</label>
                </div>
            
                <div class="option-issue-name">
                  <input type="radio" class="radio" id="EVAP System Leak" value ="EVAP System Leak" name="iName" />
                  <label for="EVAP System Leak">EVAP System Leak</label>
                </div>
            
                <div class="option-issue-name">
                  <input type="radio" class="radio" id="Faulty IAC" value ="Faulty IAC" name="iName" />
                  <label for="Faulty IAC">Faulty IAC</label>
                </div>
            
                <div class="option-issue-name">
                  <input type="radio" class="radio" id="No fuel to engine" value ="No fuel to engine" name="iName" />
                  <label for="No fuel to engine">No fuel to engine</label>
                </div>

                <div class="option-issue-name">
                  <input type="radio" class="radio" id="Worn Brakes" value ="Worn Brakes" name="iName" />
                  <label for="Worn Brakes">Worn Brakes</label>
                </div>

                <div class="option-issue-name">
                  <input type="radio" class="radio" id="Worn Spark Plugs" value ="Worn Spark Plugs" name="iName" />
                  <label for="Worn Spark Plugs">Worn Spark Plugs</label>
                </div>

                <div class="option-issue-name">
                  <input type="radio" class="radio" id="Worn Wheel Bearing" value ="Worn Wheel Bearing" name="iName" />
                  <label for="Worn Wheel Bearing">Worn Wheel Bearing</label>
                </div>
              </div>
            
              <div class="selected-issue-name form--hidden">Select Issue Name</div>
            </div>
            <button class="partSearch__button" type="submit">Continue</button>
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

      <script src='jquery-3.6.0.min.js'></script>     

  <script>


var flag1 = true;
document.addEventListener("DOMContentLoaded", (e) => {
  var radios = document.querySelectorAll('input[name="category"]');
  for (var i = 0, max = radios.length; i < max; i++) {
    radios[i].onclick = function () {
      if (this.value == "Car") {
        selectedIssueName.classList.add("form--hidden");
        selectedMake.classList.remove("form--hidden");
        selectedModel.classList.remove("form--hidden");
        selectedYear.classList.remove("form--hidden");
        flag1 = false;
        console.log(flag1);
      } else {
        flag1 = true;
        console.log(flag1);
        selectedMake.classList.add("form--hidden");
        selectedModel.classList.add("form--hidden");
        selectedYear.classList.add("form--hidden");
        selectedIssueName.classList.remove("form--hidden");
      }
    };
  }
});

    const solutionForm = document.getElementById("solutionForm");
let makeForm;
let modelForm;
let yearForm;
let issueForm;


var make = document.forms["solutionForm"].elements["make"];
for (var i = 0, max = make.length; i < max; i++) {
  make[i].onclick = function () {
    makeForm = this.value;
  };
}

var model = document.forms["solutionForm"].elements["model"];
for (var i = 0, max = model.length; i < max; i++) {
  model[i].onclick = function () {
    modelForm = this.value;
  };
}

var year = document.forms["solutionForm"].elements["year"];
for (var i = 0, max = year.length; i < max; i++) {
  year[i].onclick = function () {
    yearForm = this.value;
  };
}

var iname = document.forms["solutionForm"].elements["iName"];
for (var i = 0, max = iname.length; i < max; i++) {
  iname[i].onclick = function () {
    issueForm = this.value;
  };
}

solutionForm.addEventListener("submit", (e) => {
  if(!flag1){
  e.preventDefault();
  console.log(flag1);
  

  console.log(makeForm);
  console.log(modelForm);
  console.log(yearForm);

  let url =
    "../API/api/car/issues.php?make=" +
    makeForm +
    "&model=" +
    modelForm +
    "&year=" +
    yearForm;
  let urlHome = "/index.php";
  var textResponse;
  var obj;
  var myArray = [];
  fetch(url)
    .then(function (response) {
      return response.json();
    })
    .then(function (obj) {
      console.log(obj);
    })
    .catch(function (error) {
      console.error(error);
    });
  }
  else{
    e.preventDefault();
    console.log(issueForm);

    let url ="../API/api/issue/getInfo.php?name=" + decodeURI(issueForm);
    // let url ="../API/api/issue/getInfo.php?name=Worn Brakes";
    var obj;  
    Storage.prototype.setObj = function(key, obj) {
    return this.setItem(key, JSON.stringify(obj))
}
Storage.prototype.getObj = function(key) {
    return JSON.parse(this.getItem(key))
}
    
    fetch(url).then(response => response.json()).then(data => {
          // Work with JSON data here
          localStorage.setObj('myArray', data);
          document.location.replace('./Issue.php');
          console.log(data);
        }).catch(err => {
          // Do something for an error here
          console.log("Error Reading data " + err);
        });
  }
});

  </script>
        <script>
      if(localStorage.getItem('boolLogin') == "false"){
        document.location.replace('./login.php');
      }
      function logout(){
        localStorage.setItem('boolLogin', "false");
        document.location.replace('./login.php');
      }
    </script>

    <script src="solutions.js"></script>
    <script src="main.js"></script>
  </body>
</html>
