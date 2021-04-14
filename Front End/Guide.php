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
          <a href="Solutions.php">Solutions</a>
        </li>
        <li>
          <a class="active" href="Parts.php">Parts</a>
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
        <h1 class="form__title">Guide</h1>

        <table class="table table-striped">
    <tr  class="bg-warning">
        <th   data-colname="name" data-order="desc">Rating </th>
        <th   data-colname="name" data-order="desc">Title </th>
        <th  data-colname="age" data-order="desc">Article </th>
        <th  data-colname="age" data-order="desc">Video </th>
        <th  data-colname="age" data-order="desc">Prof ID </th>
        <!-- <th  data-colname="birthdate" data-order="desc">Birthday </th> -->
        <th   data-colname="name" data-order="desc">Admin ID </th>
        <th  data-colname="name" data-order="desc">Issue Name </th>
        

    </tr>
    <tbody id="myTable">
        
    </tbody>
</table>
    </table>
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
// var myArray = [
//     {'name':'Michael', 'age':'30', 'birthdate':'11/10/1989'},
//     {'name':'Mila', 'age':'32', 'birthdate':'10/1/1989'},
//     {'name':'Paul', 'age':'29', 'birthdate':'10/14/1990'},
//     {'name':'Dennis', 'age':'25', 'birthdate':'11/29/1993'},
//     {'name':'Tim', 'age':'27', 'birthdate':'3/12/1991'},
//     {'name':'Erik', 'age':'24', 'birthdate':'10/31/1995'},
// ]
// Storage.prototype.setObj = function(key, obj) {
//     return this.setItem(key, JSON.stringify(obj))
// }
// Storage.prototype.getObj = function(key) {
//     return JSON.parse(this.getItem(key))
// }

var myArray = JSON.parse(localStorage.getItem('myGuide'));
// var myArray =[{"name": "Faulty IAC",
//     "description": "Computer cannot control air intake due to faulty IAC valve",
//     "commoness": "4",
//     "severity": "2",
//     "difficulty": "2",
//     "relatedpart":'fsedfsdafsdafsadfasd',
//     "guide": "NULL",
//     "dtc": "P0505"}
// ]

buildTable(myArray)
var guide;
function buildTable(data){
    console.log(myArray);
    var table = document.getElementById('myTable')
    table.innerHTML = ''
    for (var i = 0; i < data.length; i++){
        var colname = `name-${i}`
        var colage = `age-${i}`
        var colbirth = `birth-${i}`
        var row = `<tr>
                        <td>${data[i].rating}</td>
                        <td>${data[i].title}</td>
                        <td>${data[i].article}</td>
                        <td><a href ="${data[i].video}">${data[i].video}</a></td>
                        <td>${data[i].prof_id}</td>
                        <td>${data[i].admin_id}</td>
                        <td>${data[i].issueName}</td>

                   </tr>`
        table.innerHTML += row
    }
}

</script>
      <script src="main.js"></script>
    
  </body>
</html>