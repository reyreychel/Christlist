<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}


include 'include/header.php';
include 'include/nav.php';
?>



    <!-------------------------opening ----------------------------------------------------->
    
    
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in"><h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1></div>
        </div>
      </div>
    </header>

    <section class="bg-light" id="avatarline1">
      <div class="container">
        <!--<div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>-->
            <div class="row text-center">
                <div class="col">
                 <div class="avatarboxes">
                    <img class="img-fluid" src="images/exampleimage.JPG">
                  group id 1
                 </div>
                </div>
                <div class="col">
                <div class="avatarboxes">
                    <img class="img-fluid" src="images/exampleimage1.JPG">
                 2 of 3
                </div>
                </div>
                <div class="col">
                 <div class="avatarboxes">
                    3 of 3
                 </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light" id="avatarline2">
      <div class="container">          
            <div class="row text-center">
                <div class="col">
                 <div class="avatarboxes">
                 <img class="img-fluid" src="images/exampleimage1.JPG">
                 </div>
                </div>
                <div class="col">
                <div class="avatarboxes">
                 2 of 3
                </div>
                </div>
                <div class="col">
                 <div class="avatarboxes">
                 <img class="img-fluid" src="images/exampleimage.JPG">
                 </div>
                </div>
            </div>
        </div>
    </section>
    <!---------------- to try with the smll boxes--------------------------------------------->
        <!-- Portfolio Grid -->
        <section class="bg-light" id="claimedlist">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Claimed List</h2>
            <h3 class="section-subheading text-muted">This is your claimed list</h3>
          </div>
        </div>
        <div class="col-lg-12 text-center">
            Claimed list goes here
        </div>
      </div>
    </section>



    <!--------------- to put in later ---->
   
    <!-- Portfolio Grid -->
    <section class="bg-light" id="yourlist">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Your List</h2>
            <h3 class="section-subheading text-muted">This is your list</h3>
          </div>
        </div>
        <div class="col-lg-12 text-center">
            Your list goes here


            <div id="myDIV" class="header">
             <h2>My To Do List</h2>
             <input type="text" id="myInput" placeholder="Title...">
             <span onclick="newElement()" class="addBtn">Add</span>
            </div>

                <ul id="myUL">
                <li>Hit the gym</li>
                <li class="checked">Pay bills</li>
                <li>Meet George</li>
                <li>Buy eggs</li>
                <li>Read a book</li>
                <li>Organize office</li>
                </ul>
        </div>
      </div>
    </section>



    <!--------------- to put in later ---->
    <!-- Portfolio Grid 
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Portfolio</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Threads</h4>
              <p class="text-muted">Illustration</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Explore</h4>
              <p class="text-muted">Graphic Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Finish</h4>
              <p class="text-muted">Identity</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Lines</h4>
              <p class="text-muted">Branding</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Southwest</h4>
              <p class="text-muted">Website Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
        </div>
      </div>
    </section>
-->
<!---------------------------------- BODY END  -------------------------------------->
<?php
 include 'include/footer.php';
 ?>
