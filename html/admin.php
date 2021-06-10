<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf 8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="This page is about life below water and how to protect it from human behavior.">
  <meta name="keywords" content="sealife, marine, water">
  <meta name="author" content="C. Christidis, A. Georgopoulou, C. Pozrikidou, M. Zikou">

  <title>Siren</title>

  <link rel="icon" type="image/png" href="../imgs/favicon.ico" />
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

</head>

<body>
  <!-- Loading icon -->
  <div class="loader"></div>

  <div class="navbar">
    <div class="nav-bar-siren">
      <div class="siren-icon"></div>
      <a href="home.php" class="active">SIREN</a>
    </div>

    <div class="right-navbar" id="navbarID">
      <ul id="nav">
        <li><a href="home.php">Home</a></li>
        <li><a id="sub-menu-hover">Learn More</a>
          <ul id="sub-menu">
            <li><a href="causes.php">Causes</a> </li>
            <li><a href="effects.php">Effects</a></li>
            <li><a href="resources.php">Resources</a></li>
          </ul>
        </li>
        <li><a href="help.php">How to help</a></li>
        <li><a href="contact.php">Contact us</a></li>
        <?php if(isset($_SESSION['username'])&&($_SESSION['username']=='admin')):?>
					<li><a href="admin.php"><?php echo $_SESSION['username'];?></a></li> <?php endif?>
					<?php if(isset($_SESSION['username'])&&($_SESSION['username']!='admin')): ?>
					<li><a href="profile.php"><?php echo $_SESSION['username'];?></a></li> <?php endif?>
					<?php if(!isset($_SESSION['username'])): ?>
					<li><a href="login.php">Login/Register</a></li> <?php endif ?>


      </ul>
      <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <div class="menu-icon"></div>
      </a>

    </div>
  </div>

  <div id="page-view">
    <div class="sticky-title">! You are logged in as admin !</div>
  </div>

  <div id="admin-container">

  <div class="login-section">
            <form class="login-form" action="server.php" method="post">
                  <button type="submit" style="width:150px;" name="logout" id="logout">Logout</button>     <!-- TEMPORARY LOGOUT BUTTON -->
            </form>
          </div>


    <p id="admin-actions">Actions you can take...</p>
    <div id="admin-actions-container">

      <div class="admin-action-panel" onclick="callAddArticle()">
        <p>Add a new Article</p>
        <div class="admin-action-image" id="action-image1"></div>
      </div>
     <div class="admin-action-panel" onclick="callSeeMessages()">
        <p>See user messages</p>
        <div class="admin-action-image" id="action-image2"></div> 

        <div class="popup" id="id02">
          <div class="overlay"></div>
          <div class="content-pop2">
            <div class="close-btn" onClick="callSeeMessages()">&times;</div>

            <div class = "contact-inbox">
              <ul>
                <li>
                  <div class="messages">
                    <div class="list-left">
                      <div class="name-display"> Chrysa Pozrikidou </div>
                    </div>
                    <div class="list-right">
                      <div class="message">
                        <div class="mail-display">xrysa123@gmail.com</div>
                        <div class="msg-display">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                          molestiae quas vel sint commodi repudiandae consequuntur.</div>
                      </div>
                      <div class="time-status">
                        <div class="time">10H</div>
                        <div class="status"></div>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="messages">
                    <div class="list-left">
                      <div class="name-display"> Reina Papav </div>
                    </div>
                    <div class="list-right">
                      <div class="message">
                        <div class="mail-display">reinayoyo3@gmail.com</div>
                        <div class="msg-display">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                          molestiae quas vel sint commodi repudiandae consequuntur.</div>
                      </div>
                      <div class="time-status">
                        <div class="time">10H</div>
                        <div class="status"></div>
                      </div>
                    </div>
                  </div>
                </li>

                <li>
                  <div class="messages">
                    <div class="list-left">
                      <div class="name-display"> Johnathan Smiths </div>
                    </div>
                    <div class="list-right">
                      <div class="message">
                        <div class="mail-display">yourstruly@gmail.com</div>
                        <div class="msg-display">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                          molestiae quas vel sint commodi repudiandae consequuntur.</div>
                      </div>
                      <div class="time-status">
                        <div class="time">10H</div>
                        <div class="status"></div>
                      </div>
                    </div>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          </div>
        <!--</div>-->

      <button class="admin-action-button" onclick="callAddArticle()">Add Article</button>
      <button class="admin-action-button" onclick="callSeeMessages()">See Messages</button>
    </div>
  </div>




  <div class="box" id="add-article" class="popup">
    <center>
      <div class="profile-img">
        <img id="photo-prof" src="../imgs/siren.png"></image>
        <form action="server.php" method="post" enctype="multipart/form-data">
          <input type="file" name="image" id="image" accept="image/*">
          <input type="submit" value="Upload Image" name="upload" value="Upload">
        </form>
      </div>

      <input type="text" name="" placeholder="User Name">
      <input type="text" name="" placeholder="Age">
      <input type="text" name="" placeholder="Gender">

      <button class="profile-button" style="float:left; margin:10px 0 0 18.2%">DONE</button>

      <div class="login-section">
        <form class="login-form" action="server.php" method="post">
          <button type="submit" style="width:150px;" name="logout" id="logout">Logout</button> <!-- LOGOUT BUTTON -->
        </form>
      </div>

    </center>
  </div>

  <script src="../js/javascript.js"> </script>


  <!--footer-->
  <footer>
    <div class="footer-content">
      <div class="row">
        <div class="col about">
          <h4>About Us</h4>
          <p class="footer-about">We are a group of university students hoping to motivate you to take action. We are providing you
            with a bunch of useful articles, documentaries and links to research the matter yourself.
            <br> We should not sit back and watch our planet get destroyed.<br>We must protect it.
          </p>
        </div>

        <div class="col contact-info">
          <h4 class="contact-footer">Contact Us</h4>
          <ul>
            <li><span><i class="fas fa-map-marker-alt"></i>&nbsp; Thessaloniki, Greece</span></li>
            <li><span><i class="fas fa-phone"></i>&nbsp; 2310-097834</span></li>
            <li><span><i class="fas fa-envelope"></i>&nbsp; info@sirenauth.com</span></li>
          </ul>
        </div>

        <div class="col follow-us">
          <h4 class="follow-footer">Follow us</h4>
          <div class="social-links">
            <a href="https://www.facebook.com/siren.auth/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://twitter.com/AuthSiren" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/siren_auth/" target="_blank"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        &copy; Siren 2021
      </div>
    </div>
  </footer>
  <!-- /.footer -->
</body>

</html>