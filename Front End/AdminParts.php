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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="issue.css" />
    <link rel="stylesheet" href ="selector.css" />
    
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <script src='jquery-3.6.0.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <style>
    th{ 
        cursor: pointer;
        color:black;
            }
    .guideButton{

        color: black;
        border: 3px solid black;
        transition: 0.2s;
        display: flex;
        margin-bottom: 22px;
        margin-left: 2px;
        font-weight: bold;
        cursor: pointer;
        background: gold;
    }
    .guideButton:hover{
        background: orangered;
        text-decoration: none;
        color: white;
        text-align: center;
    }

    .flex-wrapper {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
  justify-content: space-between;
}

.select-box-category-name {
  display: flex;
  width: 400px;
  flex-direction: column;
}

.select-box-category-name .options-container-category-name {
  background: gold;
  color: black;
  border: 3px solid black;
  max-height: 0;
  width: 100%;
  opacity: 0;
  transition: all 1s;
  border-radius: 8px;
  overflow: hidden;

  order: 1;
}

.selected-category-name {
  background: gold;
  border-radius: 8px;
  margin-bottom: 8px;
  color: black;
  position: relative;
  border: 3px solid black;
  order: 0;
  font-weight: bold;
}

.selected-category-name::after {
  content: "";
  background: url("img/arrow-down.png");
  background-size: contain;
  background-repeat: no-repeat;
  color: black;
  position: absolute;
  height: 100%;
  width: 20px;
  right: 10px;
  top: 20px;
  transition: all 0.8s;
}

.select-box-category-name .options-container-category-name.active {
  max-height: 240px;
  opacity: 1;
  overflow-y: scroll;
}

.select-box-category-name
  .options-container-category-name.active
  + .selected-category-name::after {
  transform: rotateX(180deg);
  top: -20px;
}

.select-box-category-name .options-container-category-name::-webkit-scrollbar {
  width: 8px;
  background: black;
  color: black;
  border-radius: 0 8px 8px 0;
}

.select-box-category-name
  .options-container-category-name::-webkit-scrollbar-thumb {
  background: black;
  color: black;
  border-radius: 0 8px 8px 0;
}

.select-box-category-name .option-category-name,
.selected-category-name {
  /* padding: 12px 24px; */
  cursor: pointer;
}

.select-box-category-name .option-category-name:hover {
  background: yellow;
}

.select-box-category-name label {
  cursor: pointer;
  display: block;
  padding: 12px 24px;
}

.select-box-category-name .option-category-name .radio {
  display: none;
}


  .container-selector {
  padding: 32px;
}
.selected-category-name {
  padding: 12px 24px;
} 

.select-box-retailer-name {
  display: flex;
  width: 400px;
  flex-direction: column;
}

.select-box-retailer-name .options-container-retailer-name {
  background: gold;
  color: black;
  border: 3px solid black;
  max-height: 0;
  width: 100%;
  opacity: 0;
  transition: all 1s;
  border-radius: 8px;
  overflow: hidden;

  order: 1;
}

.selected-retailer-name {
  background: gold;
  border-radius: 8px;
  margin-bottom: 8px;
  color: black;
  position: relative;
  border: 3px solid black;
  order: 0;
  font-weight: bold;
}

.selected-retailer-name::after {
  content: "";
  background: url("img/arrow-down.png");
  background-size: contain;
  background-repeat: no-repeat;
  color: black;
  position: absolute;
  height: 100%;
  width: 20px;
  right: 10px;
  top: 20px;
  transition: all 0.8s;
}

.select-box-retailer-name .options-container-retailer-name.active {
  max-height: 240px;
  opacity: 1;
  overflow-y: scroll;
}

.select-box-retailer-name
  .options-container-retailer-name.active
  + .selected-retailer-name::after {
  transform: rotateX(180deg);
  top: -20px;
}

.select-box-retailer-name .options-container-retailer-name::-webkit-scrollbar {
  width: 8px;
  background: black;
  color: black;
  border-radius: 0 8px 8px 0;
}

.select-box-retailer-name
  .options-container-retailer-name::-webkit-scrollbar-thumb {
  background: black;
  color: black;
  border-radius: 0 8px 8px 0;
}

.select-box-retailer-name .option-retailer-name,
.selected-retailer-name {
  /* padding: 12px 24px; */
  cursor: pointer;
}

.select-box-retailer-name .option-retailer-name:hover {
  background: yellow;
}

.select-box-retailer-name label {
  cursor: pointer;
  display: block;
  padding: 12px 24px;
}

.select-box-retailer-name .option-retailer-name .radio {
  display: none;
}

.selected-retailer-name {
  padding: 12px 24px;
}

.select-box-rating-name {
  display: flex;
  width: 400px;
  flex-direction: column;
}

.select-box-rating-name .options-container-rating-name {
  background: gold;
  color: black;
  border: 3px solid black;
  max-height: 0;
  width: 100%;
  opacity: 0;
  transition: all 1s;
  border-radius: 8px;
  overflow: hidden;

  order: 1;
}

.selected-rating-name {
  background: gold;
  border-radius: 8px;
  margin-bottom: 8px;
  color: black;
  position: relative;
  border: 3px solid black;
  order: 0;
  font-weight: bold;
}

.selected-rating-name::after {
  content: "";
  background: url("img/arrow-down.png");
  background-size: contain;
  background-repeat: no-repeat;
  color: black;
  position: absolute;
  height: 100%;
  width: 20px;
  right: 10px;
  top: 20px;
  transition: all 0.8s;
}

.select-box-rating-name .options-container-rating-name.active {
  max-height: 240px;
  opacity: 1;
  overflow-y: scroll;
}

.select-box-rating-name
  .options-container-rating-name.active
  + .selected-rating-name::after {
  transform: rotateX(180deg);
  top: -20px;
}

.select-box-rating-name .options-container-rating-name::-webkit-scrollbar {
  width: 8px;
  background: black;
  color: black;
  border-radius: 0 8px 8px 0;
}

.select-box-rating-name
  .options-container-rating-name::-webkit-scrollbar-thumb {
  background: black;
  color: black;
  border-radius: 0 8px 8px 0;
}

.select-box-rating-name .option-rating-name,
.selected-rating-name {
  /* padding: 12px 24px; */
  cursor: pointer;
}

.select-box-rating-name .option-rating-name:hover {
  background: yellow;
}

.select-box-rating-name label {
  cursor: pointer;
  display: block;
  padding: 12px 24px;
}

.select-box-rating-name .option-rating-name .radio {
  display: none;
}

.selected-rating-name {
  padding: 12px 24px;
}



.container2-style {
  width: 500px;
  /* max-width: 1500px; */
  max-height: 1000px;
  margin: 1rem;
  padding: 20px;
  box-shadow: 0 0 40px rgba(0, 0, 0, 0.2);
  border-radius: 25px;
  border: var(--border-radius);
  background: #ffffff;
  padding: 20px;
  overflow-y: auto;
}
.container2-style,
 {
  font: 500 1rem "Roboto Condensed", sans-serif;
  font-size: 22px;
  text-transform: none;
}
</style>


    <title>Issue</title>
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
          <a  href="Solutions.php">Solutions</a>
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
            <a class="active" href="Admin.php"><i class="glyphicon glyphicon-user"></i></a>
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
    
    <div id="banner" >
      <div id="parts-container" >
        <div id= "containerStyles" class="container-style">
        <div id ="part-list">
            <h1 class="form__title">Admin Parts</h1>

            <table class="table table-striped">
            <tr  class="bg-warning">
            <th   data-colname="name" data-order="desc">Part Id </th>
            <th   data-colname="name" data-order="desc">Name </th>
            <th   data-colname="name" data-order="desc">Category </th>
            <th   data-colname="name" data-order="desc">Rating </th>
            <th   data-colname="name" data-order="desc">Retailer </th>
            <th   data-colname="name" data-order="desc">Price </th>
            <th  data-colname="age" data-order="desc"></th>

            </tr>
            <tbody id="myTable">

            </tbody>
            </table>
            </table>
            <button class="partSearch__button" onclick="showAdd()">Add a part</button>
            <br>
            <button class="partSearch__button" onclick="myAdmin()">Admin Portal</button>
        </div>
       


            <div id="add-part" class="smaller form--hidden">
                <h1 class="form__title">Add Part</h1>
                <div class="form__message form__message--error"></div>
                <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="Part ID" name= "PartID" id="partId">
                
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" autofocus placeholder="Name" name= "Name" id="name">
                    
                </div>
                <div class="form__input-group">
                    <input type="text" class="form__input" autofocus placeholder="Price" name= "Price" id="price">
                
                </div>
                <div class="container-selector">

                <form id = "partForm">
                <div class="select-box-category-name">
                <div id="categoryOp" class="options-container-category-name">

                <!-- <div class="option-category-name">
                  <input type="radio" class="radio" id="Dead Battery" value ="Dead Battery" name="categories" />
                  <label for="Dead Battery">Dead Battery</label>
                </div>
            
                <div class="option-category-name">
                  <input type="radio" class="radio" id="EVAP System Leak" value ="EVAP System Leak" name="categories" />
                  <label for="EVAP System Leak">EVAP System Leak</label>
                </div>
            
                <div class="option-category-name">
                  <input type="radio" class="radio" id="Faulty IAC" value ="Faulty IAC" name="categories" />
                  <label for="Faulty IAC">Faulty IAC</label>
                </div>
            
                <div class="option-category-name">
                  <input type="radio" class="radio" id="No fuel to engine" value ="No fuel to engine" name="categories" />
                  <label for="No fuel to engine">No fuel to engine</label>
                </div>

                <div class="option-category-name">
                  <input type="radio" class="radio" id="Worn Brakes" value ="Worn Brakes" name="categories" />
                  <label for="Worn Brakes">Worn Brakes</label>
                </div>

                <div class="option-category-name">
                  <input type="radio" class="radio" id="Worn Spark Plugs" value ="Worn Spark Plugs" name="categories" />
                  <label for="Worn Spark Plugs">Worn Spark Plugs</label>
                </div>

                <div class="option-category-name">
                  <input type="radio" class="radio" id="Worn Wheel Bearing" value ="Worn Wheel Bearing" name="categories" />
                  <label for="Worn Wheel Bearing">Worn Wheel Bearing</label>
                </div> -->
              </div>
            
              
              <div class="selected-category-name">Select Category Name</div>
                </div>
                    
                <div  class="select-box-retailer-name">
  <div id="retailersOp" class="options-container-retailer-name">
    <!-- <div class="option-retailer-name">
      <input type="radio" class="radio" id="Dead Battery" value ="Dead Battery" name="retailers" />
      <label for="Dead Battery">Dead Battery</label>
    </div>

    <div class="option-retailer-name">
      <input type="radio" class="radio" id="EVAP System Leak" value ="EVAP System Leak" name="retailers" />
      <label for="EVAP System Leak">EVAP System Leak</label>
    </div>

    <div class="option-retailer-name">
      <input type="radio" class="radio" id="Faulty IAC" value ="Faulty IAC" name="retailers" />
      <label for="Faulty IAC">Faulty IAC</label>
    </div>

    <div class="option-retailer-name">
      <input type="radio" class="radio" id="No fuel to engine" value ="No fuel to engine" name="retailers" />
      <label for="No fuel to engine">No fuel to engine</label>
    </div>

    <div class="option-retailer-name">
      <input type="radio" class="radio" id="Worn Brakes" value ="Worn Brakes" name="retailers" />
      <label for="Worn Brakes">Worn Brakes</label>
    </div>

    <div class="option-retailer-name">
      <input type="radio" class="radio" id="Worn Spark Plugs" value ="Worn Spark Plugs" name="retailers" />
      <label for="Worn Spark Plugs">Worn Spark Plugs</label>
    </div>

    <div class="option-retailer-name">
      <input type="radio" class="radio" id="Worn Wheel Bearing" value ="Worn Wheel Bearing" name="retailers" />
      <label for="Worn Wheel Bearing">Worn Wheel Bearing</label>
    </div> -->
  </div>

  <div class="selected-retailer-name">Select Retailer Name</div>
</div>


<div  class="select-box-rating-name">
    <div id="ratingsOp" class="options-container-rating-name">


    <div class="option-rating-name">
        <input type="radio" class="radio" id="One" value ="1" name="ratings" />
        <label for="One">1</label>
      </div>

      <div class="option-rating-name">
        <input type="radio" class="radio" id="Two" value ="2" name="ratings" />
        <label for="Two">2</label>
      </div>


      <div class="option-rating-name">
        <input type="radio" class="radio" id="Three" value ="3" name="ratings" />
        <label for="Three">3</label>
      </div>

      <div class="option-rating-name">
        <input type="radio" class="radio" id="Four" value ="4" name="ratings" />
        <label for="Four">4</label>
      </div>
  
      <div class="option-rating-name">
        <input type="radio" class="radio" id="Five" value ="5" name="ratings" />
        <label for="Five">5</label>
      </div>
  
      <div class="option-rating-name">
        <input type="radio" class="radio" id="Six" value ="6" name="ratings" />
        <label for="Six">6</label>
      </div>
  
      <div class="option-rating-name">
        <input type="radio" class="radio" id="Seven" value ="7" name="ratings" />
        <label for="Seven">7</label>
      </div>
  
      <div class="option-rating-name">
        <input type="radio" class="radio" id="Eight" value ="8" name="ratings" />
        <label for="Eight">8</label>
      </div>
  
      <div class="option-rating-name">
        <input type="radio" class="radio" id="Nine" value ="9" name="ratings" />
        <label for="Nine">9</label>
      </div>
  
      <div class="option-rating-name">
        <input type="radio" class="radio" id="Ten" value ="10" name="ratings" />
        <label for="Ten">10</label>
      </div>
    </div>
  
    <div class="selected-rating-name">Select Rating</div>
  </div>

                </div>
                </form>
            <button class="partSearch__button" onclick="addPart()">Add Part</button>
            <br>
            <button class="partSearch__button" onclick="cancelPart()">Cancel</button>
            
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



      <script>
    if(localStorage.getItem('adminLogin') == "false"){
        document.location.replace('./LoginAdmin.php');
      }


function logout(){
     localStorage.setItem('adminLogin', "false");
     document.location.replace('./LoginAdmin.php');
    }
let url = "../API/api/part/getEvery.php"
    fetch(url)
    .then(function (response) {
    return response.json();
    })
    .then(function(obj){
    localStorage.setObj('myAdminParts', obj.data);   
    console.log(obj.data);
    })
    .catch(function (error) {
    console.error(error);
    });

var myArray = JSON.parse(localStorage.getItem('myAdminParts'));


buildTable(myArray)
var retailer;
var partname;
function buildTable(data){
    console.log(myArray);
    var table = document.getElementById('myTable')
    table.innerHTML = ''
    for (var i = 0; i < data.length; i++){
        var colname = `name-${i}`
        var colage = `age-${i}`
        var colbirth = `birth-${i}`

        part = data[i].part_id;
        partname = data[i].name;
        if (data[i].guide == "NULL"){
            data[i].guide = "none";
        }
        var row = `<tr>
                        <td>${data[i].part_id}</td>
                        <td>${data[i].name}</td>
                        <td>${data[i].category}</td>
                        <td>${data[i].rating}</td>
                        <td>${data[i].retailer}</td>
                        <td>${data[i].price}</td>
                        <td><input id = '${part}' class='guideButton' type='button' value='Delete' name = '${partname}'onclick = "return deletePart(id,name)"/></td>
    
                   </tr>`
        table.innerHTML += row
    }
}
Storage.prototype.setObj = function(key, obj) {
    return this.setItem(key, JSON.stringify(obj))
}
Storage.prototype.getObj = function(key) {
    return JSON.parse(this.getItem(key))
}

    let urlCategories = "../API/api/part/getCategories.php"
    fetch(urlCategories)
    .then(function (response) {
    return response.json();
    })
    .then(function(obj){
    localStorage.setObj('myCategories', obj.data);    
    console.log(obj.data);
    })
    .catch(function (error) {
    console.error(error);
    });

    var myCategoriesArray = JSON.parse(localStorage.getItem('myCategories'));

    buildCategories(myCategoriesArray);
    console.log(myCategoriesArray);
    function buildCategories(data){
    
    var table = document.getElementById('categoryOp')
    table.innerHTML = ''
    for (var i = 0; i < data.length; i++){
        var colname = `name-${i}`
        var colage = `age-${i}`
        var colbirth = `birth-${i}`

        var row =
                  `<div class="option-category-name">
                  <input type="radio" class="radio" id="${data[i].title}" value="${data[i].title}" name="categories" />
                  <label for="${data[i].title}">${data[i].title}</label>
                  </div>`
        table.innerHTML += row
    }
}


const partForm = document.getElementById("partForm");
  let categoryForm;


  var category = document.forms["partForm"].elements["categories"];
for(var i = 0, max = category.length; i < max; i++) {
    category[i].onclick = function() {
    categoryForm = this.value; 
    // alert(this.value);
       
    }
}

let ratingForm;


var ratings = document.forms["partForm"].elements["ratings"];
for(var i = 0, max = ratings.length; i < max; i++) {
    ratings[i].onclick = function() {
    ratingForm = this.value; 
//   alert(this.value);
     
  }
}



let urlRetailers = "../API/api/part/getRetailers.php";
fetch(urlRetailers)
  .then(function (response) {
    return response.json();
  })
  .then(function (obj) {
    localStorage.setObj("myRetailers", obj.data);
    console.log(obj.data);
  })
  .catch(function (error) {
    console.error(error);
  });

var myRetailersArray = JSON.parse(localStorage.getItem("myRetailers"));

buildRetailers(myRetailersArray);
console.log(myRetailersArray);
function buildRetailers(data) {
  var table = document.getElementById("retailersOp");
  table.innerHTML = "";
  for (var i = 0; i < data.length; i++) {
    var colname = `name-${i}`;
    var colage = `age-${i}`;
    var colbirth = `birth-${i}`;

    var row = `<div class="option-retailer-name">
              <input type="radio" class="radio" id="${data[i].name}" value="${data[i].name}" name="retailers" />
              <label for="${data[i].name}">${data[i].name}</label>
              </div>`;
    table.innerHTML += row;
  }
}

let retailersForm;

var retailers = document.forms["partForm"].elements["retailers"];
for (var i = 0, max = retailers.length; i < max; i++) {
  retailers[i].onclick = function () {
    retailersForm = this.value;
    // alert(this.value);
  };
}



function deletePart(string, string2) {
  // localStorage.getItem('password');
//   console.log(guide);
  let url = "../API/api/part/delete.php?id="  + string + "&name=" + string2;

  fetch(url).then(response => response.json()).then(data => {
          // Work with JSON data here
        //   localStorage.setObj('myArray', data);
        //   document.location.href = './Issue.php';
          console.log(data.Result);
          if(data.Result == "True"){
            console.log("Part Deleted");
            getParts();
            buildTable(myArray);
          }
        }).catch(err => {
          // Do something for an error here
          console.log("Error Reading data " + err);
        });


}


function getSuccess(){

    
    document.location.href = './SuccessfulAddPart.php'; 

}



function getParts(){
    let url = "../API/api/part/getEvery.php"
    fetch(url)
    .then(function (response) {
    return response.json();
    })
    .then(function(obj){
    localStorage.setObj('myAdminParts', obj.data);   
    document.location.href = './AdminParts.php'; 
    console.log(obj.data);
    })
    .catch(function (error) {
    console.error(error);
    });
}

function showAdd(){

    const partList = document.querySelector("#part-list");
    const addList = document.querySelector("#add-part");

    addList.classList.remove("form--hidden");
    partList.classList.add("form--hidden");

    const containerStyles = document.querySelector("#containerStyles");

    containerStyles.classList.remove("container-style");
    containerStyles.classList.add("container2-style");

}

function addPart(){

        const partList = document.querySelector("#part-list");
        const addList = document.querySelector("#add-part");
        const containerStyles = document.querySelector("#containerStyles");

        var partId = document.getElementById("partId").value; 
        var name = document.getElementById("name").value; 
        var price = document.getElementById("price").value; 
        // var category = document.getElementById("category").value; 
        // var retailer = document.getElementById("retailer").value; 
        


        let url = "../API/api/part/insert.php?id="  + partId + "&name=" + name + "&price=" + price + "&category=" + categoryForm + "&retailer=" + retailersForm + "&rating=" + ratingForm;

        fetch(url).then(response => response.json()).then(data => {
        // Work with JSON data here
        console.log(data.Result);
        if(data.Result == "True"){
          console.log("Part Added");
        //   addList.classList.add("form--hidden");
        //   partList.classList.remove("form--hidden");
        //   containerStyles.classList.add("container-style");
        //   containerStyles.classList.remove("container2-style");

          getSuccess();
        //   buildTable(JSON.parse(localStorage.getItem('myAdminParts')));
        }
      }).catch(err => {
        // Do something for an error here
        console.log("Error Reading data " + err);
      });

}

function cancelPart(){
    const partList = document.querySelector("#part-list");
    const addList = document.querySelector("#add-part");
    addList.classList.add("form--hidden");
    partList.classList.remove("form--hidden");

    const containerStyles = document.querySelector("#containerStyles");

    containerStyles.classList.add("container-style");
    containerStyles.classList.remove("container2-style");
}
function myAdmin(){
    location.href = "./Admin.php";
}

</script>

    <script src="selectorAdminPart.js"></script>
    <script src="main.js"></script>
    
  </body>
</html>