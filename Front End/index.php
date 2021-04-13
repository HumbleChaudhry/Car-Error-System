

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
    <link rel="stylesheet" href="slider.css" />


    <title>Car Error System</title>
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
          <a class="active" href="index.php">Home</a>
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
    
    
    <div class="slider">
      <div class="slides">
          <div class="slide">
              <div class="slide-data">
                  <h1>We Have The SOLUTION For You</h1>
                  <p>                      </p>
                  <a href="Solutions.php">
                  <button>SEE MORE</button>
                  </a>
              </div>
          </div>
          <div class="slide">
            <div class="slide-data">
                <h1>REV UP THOSE ENGINES</h1>
                <p>                  </p>
                <button>SEE MORE</button>
            </div>
        </div>
          <div class="slide">
              <div class="slide-data">
                  <h1>Most Reliable Transmissions in the World</h1>
                  <p>                    </p>
                  <button>SEE MORE</button>
              </div>
          </div>
          <div class="slide">
              <div class="slide-data">
                  <h1>First Class Chassis</h1>
                  <p>                      </p>
                  <button>SEE MORE</button>
              </div>
          </div>
      </div>

      <button class="arrows prev" onclick="plusslide(-1)">
          <span><i class="fas fa-angle-left"></i></span>
      </button>
      <button class="arrows next" onclick="plusslide(1)">
          <span><i class="fas fa-angle-right"></i></span>
      </button>

      <div class="dots">
          <span onclick="currentslide(1)"></span>
          <span onclick="currentslide(2)"></span>
          <span onclick="currentslide(3)"></span>
          <span onclick="currentslide(4)"></span>
      </div>
  </div>

    <main>
      <a href="Parts.php">
        <h2 class="section-heading">Parts</h2>
      </a>
      <section>
        <div class="card">
          <div class="card-image">
            <a href="#">
              <img src="img/sportcars.jpg" alt="Sport Car Image" />
            </a>
          </div>

          <div class="card-description">
            <a href="#">
              <h3>Parts Descriptions</h3>
            </a>
            <p>
              Providing the best parts to get you back on the road. Choose from a 
              variety of parts for your specific car. We know it is challenging 
              for mechanics to have to deal with finding parts, so we have made it 
              easier!
            </p>
            <a href="Parts.php" class="btn-readmore">Take Me To Parts!</a>
          </div>
        </div>
      </section>

      <a href="Solutions.php">
      <h2 class="section-heading">Solutions</h2>
      </a> 
      <section id = "section-solutions">
        <p>
          The best chosen solutions around the world. We know that others have ran into the 
          same problems, so why the hassle of trying to figure out the solution yourself? 
          Got an issue? We've got you! Solutions will be based off of your car or your specific issue. 
          With our elaborate and thorough guides, we ensure you will find what you need to fix that whip!  
        </p>
        <a href="Solutions.php" class="btn-readmore">Take Me To Solutions!</a>
      </section>
    </main>
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
   

    
    <script src="main.js"></script>
    <script src="script.js"></script>
  </body>
</html>
