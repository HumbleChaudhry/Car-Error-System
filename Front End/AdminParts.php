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
        <div class="container-style">
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
        </div>
       
        <!-- <h1 class="form__title">Add Part</h1>
           
            <div class="form__input-group">
                <input type="text" autocapitalize="none" autofocus placeholder="Part ID" name = "PartID" id="partId">
            </div>
            <div class="form__input-group">
                <input type="text"  autofocus placeholder="Name" name = "Name" id="name">
            </div>
            <div class="form__input-group">
                <input type="text"  autofocus placeholder="Price" name = "Price" id="price">
            </div>
            <div class="form__input-group">
                <input type="text"  autofocus placeholder="Category" name = "Category" id="category">
            </div>
            <div class="form__input-group">
                <input type="text"  autofocus placeholder="Retailer" name = "Retailer" id="retailer">
            </div>
            
            <button class="partSearch__button" onclick="addPart()">Add Part</button> -->


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
                <input type="text" class="form__input" autofocus placeholder="Price Address" name= "Price" id="price">
               
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input form__input--error" autofocus placeholder="Category" name= "Category"  id="category">
                
            </div>
            <div class="form__input-group">
                <input type="password" class="form__input form__input--error" autofocus placeholder="Retailer" name= "Retailer" id="retailer">
               
            </div>
            <button class="partSearch__button" onclick="addPart()">Add Part</button>


    

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
}

function addPart(){

        const partList = document.querySelector("#part-list");
        const addList = document.querySelector("#add-part");
        

        var partId = document.getElementById("partId").value; 
        var name = document.getElementById("name").value; 
        var price = document.getElementById("price").value; 
        var category = document.getElementById("category").value; 
        var retailer = document.getElementById("retailer").value; 
        


        let url = "../API/api/part/insert.php?id="  + partId + "&name=" + name + "&price=" + price + "&category=" + category + "&retailer=" + retailer;

        fetch(url).then(response => response.json()).then(data => {
        // Work with JSON data here
      //   localStorage.setObj('myArray', data);
      //   document.location.href = './Issue.php';
        console.log(data.Result);
        if(data.Result == "True"){
          console.log("Part Added");
          addList.classList.add("form--hidden");
          partList.classList.remove("form--hidden");
          getParts();
          buildTable(myArray);
        }
      }).catch(err => {
        // Do something for an error here
        console.log("Error Reading data " + err);
      });

}
</script>
      <script src="main.js"></script>
    
  </body>
</html>