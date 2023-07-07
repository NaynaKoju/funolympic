<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="assets/newss.css" />
    <!-- google fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway:wght@300;400;500;700;900&display=swap"
      rel="stylesheet"
    />
    <!-- fontawesome -->
    <script
      src="https://kit.fontawesome.com/dbed6b6114.js"
      crossorigin="anonymous"
    ></script>
    <style>
        /*
font-family: 'Montserrat', sans-serif;
font-family: 'Raleway', sans-serif;
*/

* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

:root {
  --heading: "Montserrat", sans-serif;
}

body {
  font-family: "Raleway", sans-serif;
  background: #fff;
}

/* global styling */

img {
  width: 100%;
}
ul {
  list-style: none;
}

a {
  text-decoration: none;
  color: #000;
}

hr {
  width: 95vw;
  margin: 0 auto;
}

/* header */

.top-head {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin: 0 auto;
  background: #252525;
  color: #fff;
  padding: 20px 30px;
}

.top-head .fas {
  font-size: 2rem;
  cursor: pointer;
}

/******* js related styling *****/

.times-btn {
  display: none;
}

.nav-bar {
  background: #333;
  height: 0;
  overflow: hidden;
}

.show-nav {
  height: auto;
}

/********************/

.nav-bar ul li {
  text-align: center;
  display: block;
  padding: 15px 0;
  transition: all 1s ease-in-out;
}

.nav-bar ul li:hover {
  background: #0e0e0e;
}

.nav-bar ul li a {
  color: #fff;
  text-transform: uppercase;
}

.nav-bar ul li a:hover {
  text-decoration: underline;
}

/* social -icons */
  .social-icons li {
    padding: 0px;
    margin: 0px;
    list-style: none;
    display: flex;
    gap: 0px; /* Adjust this value to reduce or increase the space between icons */
  }

  /* .social-icons li {
    display: inline-block;
  } */

/* banner */

.banner {
  min-height: auto;
  display: grid;
  grid-template-columns: 1fr;
  align-items: center;
  padding: 30px 0;
  margin-top: 8px;
}

.banner-main-content {
  padding: 0 2rem;
  /* line-height: 1.7; */
}

.banner-main-content h2 {
  font-size: 2rem;
  font-family: var(--heading);
}

.banner-main-content h3 {
  padding: 1rem 0;
}

.banner-main-content button {
  border: none;
  background: #252525;
  padding: 14px 18px;
  font-size: 1.2rem;
  font-family: "Montserrat", sans-serif;
  transition: background 1s ease;
}

.banner-main-content button a {
  color: #f3f3f3f3;
  transition: color 1s ease;
}

.banner-main-content button:hover {
  background: #fff;
}

.banner-main-content button:hover a {
  color: #0d0a0b;
}

.current-news-head {
  background: #fff;
  padding: 20px;
  font-size: 12px;
  margin: 20px 0;
}

.current-news-head h3 {
  padding: 6px;
  cursor: pointer;
  position: relative;
}

.current-news-head h3:hover::before {
  content: ">> ";
  position: absolute;
  left: -12px;
}

.current-news-head span {
  display: block;
  font-family: var(--heading);
  font-weight: 300;
  text-transform: uppercase;
}

.hot-topic {
  overflow: hidden;
  position: relative;
  width: 100%;
  padding: 12px;
  height: 300px;
}

.hot-topic img {
  display: block;
}

.hot-topic-content {
  position: absolute;
  bottom: 0;
  left: 20px;
  right: 20px;
  padding: 10px 20px;
  line-height: 1.3;
  color: #f3f3f3;
}

.hot-topic h2 {
  padding: 10px 0;
  font-size: 18px;
  text-shadow: 0 0 2px #000;
}

.hot-topic h3 {
  padding: 10px 0;
  font-size: 16px;
  text-shadow: 0 0 2px #000;
}

.hot-topic p {
  padding: 10px 0;
  font-size: 15px;
  text-shadow: 0 0 2px #000;
  padding: 12px 10px;
}

.hot-topic-content a {
  display: block;
  background: #f3f3f3;
  border: none;
  width: 95px;
  border-radius: 2px;
  text-align: center;
  padding: 7px 10px;
  font-size: 14px;
  margin: 10px 0 10px 10px;
}

.hot-topic-content a:hover {
  text-decoration: underline;
}

/** main ***/

main a {
  padding: 15px 0;
  display: block;
  transition: all 0.5s;
}

main span {
  transition: padding-left 0.5s;
}

main a:hover span {
  padding-left: 5px;
}

main a:hover {
  color: #7ac64d;
}

/* main container left */

.main-container-left {
  padding: 30px 10px;
}

.main-container-left > h2 {
  padding: 15px 0 15px 30px;
}

.main-container-left h3 {
  padding: 10px 0;
  font-size: 18px;
  font-family: var(--heading);
}

.main-container-left p {
  font-size: 15px;
  font-weight: 300;
}

.main-container-left article {
  padding: 10px;
}

.container-top-left {
  padding: 15px 30px;
}

.container-bottom-left {
  background: #f3f3f3;
  margin: 15px 30px;
}

/*** main container right */

.main-container-right {
  padding: 30px 10px;
}

.main-container-right > h2 {
  padding: 15px 0 15px 30px;
}

.main-container-right article {
  display: grid;
  grid-template-columns: 1fr 3fr 1fr;
  padding: 15px 0;
  border-bottom: 1px solid #7ac64d;
}

.main-container-right article:last-child {
  border-bottom: none;
}

.main-container-right img {
  width: 100px;
  height: 100px;
  align-self: center;
}

.main-container-right h4 {
  text-align: center;
  text-transform: uppercase;
  font-weight: 300;
  font-size: 12px;
  align-self: center;
}

.main-container-right article h2 {
  font-size: 18px;
  padding: 10px 0;
  font-family: var(--heading);
}

.main-container-right article p {
  font-size: 15px;
  font-weight: 300;
}

.main-container-right article div {
  margin-right: 10px;
}

/****** footer *****/

footer {
  background: #252525;
  color: #f3f3f3;
  padding: 30px;
}

footer h2 {
  padding: 10px 0;
}

footer p {
  padding: 10px 0;
  line-height: 1.3;
}

.footer-left,
.footer-right {
  margin: 0 20px;
}

footer > p {
  text-align: center;
  opacity: 0.8;
  margin-top: 20px;
}

.footer-right i {
  font-size: 1.8rem;
  color: #808080;
}

.footer-right input {
  font-size: 18px;
  border: none;
  background: transparent;
  outline: none;
  color: #808080;
  padding-right: 10px;
  width: 100%;
}

.footer-right div {
  display: flex;
  align-items: center;
  justify-content: start;
  width: 200px;
  padding: 10px 0;
  border-bottom: 1.6px solid #808080;
}

@media (max-width: 460px) {
  .hot-topic-content h2 {
    font-size: 16px;
  }

  .main-container-right article {
    display: block;
  }

  .main-container-right article img {
    display: none;
  }
}

@media (max-width: 500px) {
  .main-container-right article {
    grid-template-columns: 1fr 3fr;
    grid-template-rows: 1fr 1fr;
  }

  .main-container-right article h4 {
    grid-row: 1/2;
    grid-column: 1/2;
    align-self: flex-start;
  }

  .main-container-right article img {
    grid-row: 2/3;
    grid-column: 1/2;
  }

  .main-container-right article div {
    grid-row: 1/3;
    grid-column: 2/3;
  }
}

@media (min-width: 768px) {
  .banner-sub-content {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
  }

  .container-bottom-left {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (min-width: 800px) {
  /* nav */
  .ham-btn,
  .times-btn {
    display: none !important;
  }

  .navigation-container {
    display: flex;
    background: #025464;
    align-items: center;
    flex-wrap: wrap;
  }

  .top-head {
    flex: 0 0 15%;
  }

  .nav-bar {
    flex: 1 0 auto;
    height: 100%;
    background: transparent;
  }

  .nav-bar nav ul {
    display: flex;
    justify-content: center;
  }
  .nav-bar nav ul li {
    padding-right: 30px;
  }

  .nav-bar nav ul li:hover {
    background: none;
  }

  /* social icons */
  .social-icons {
    flex: 0 1 20%;
    display: block;
    margin: 0 auto;
  }

  .social-icons .fab {
    color: #fff;
    font-size: 2rem;
  }
  .social-icons ul {
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
  }
  .social-icons ul li {
    padding: 20px;
  }

  .footer-container {
    display: flex;
  }

  .footer-right,
  .footer-left {
    flex: 1;
  }
}

@media (min-width: 992px) {
  main {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (min-width: 1080px) {
  .banner {
    grid-template-columns: 1fr 2fr;
  }
}

    </style>
  </head>

  <body>
    <!-- header -->
    <header>
      <div class="navigation-container">
        <div class="top-head">
          <div class="web-name">
          <p class="back_btn">
        <a href="./home" style=" color: white;">
                        <i class="fa fa-arrow-left"></i>
                        BACK
                    </a>
                </p>
            <h1>FunOlympic</h1>
          </div>
          <div class="ham-btn">
            <span>
              <i class="fas fa-bars"></i>
            </span>
          </div>

          <div class="times-btn">
            <span>
              <i class="fas fa-times"></i>
            </span>
          </div>
        </div>

        <!-- nav bar -->

        <div class="nav-bar" id="nav-bar">
          <nav>
            <ul>
              <li><a href="/pd-nayna/home/">Home</a></li>
              <li><a href="/pd-nayna/aboutus.php">About</a></li>
              <li><a href="/pd-nayna/contactus.php">Contact</a></li>
              <li><a href="/pd-nayna/gallery.php">Gallery</a></li>
              <li><a href="/pd-nayna/news.php">Latest News</a></li>
            </ul>
          </nav>
        </div>

      

      </div>
    </header>

    <section class="banner">
      <div class="banner-main-content">
        <h2>Fetch the most up-to-date news</h2>
        <h3>Premier Global Gaming News Portal.</h3>

        <button>
          <a href="/pd-nayna/learnmore.php"> Learn More</a>
        </button>

        <div class="current-news-head">
          <h3>
            Exclusive: Behind the Scenes of Olympic Athletes' Preparation
            <span>Jhonson Mark</span>
          </h3>

          <h3>
            Incredible Moments: Watch Record-breaking Olympic Performances
            <span>Sampran Collin</span>
          </h3>

          <h3>
            Rising Stars: Emerging Talents in the Basketball World
            <span>Stevan Morron</span>
          </h3>

          <h3>
            Breaking News: Medal Tally Update and Noteworthy Achievements
            <span>Richard Brown</span>
          </h3>

          <h3>
            NBA Playoffs: Exciting Matchups and Playoff Predictions
            <span>Michael Curry</span>
          </h3>
        </div>
      </div>

      <div class="banner-sub-content">
        <div class="hot-topic">
          <img src="images/news1.jpg" alt="img" style="height: 370px" />

          <div class="hot-topic-content">
            <h2 style="color:white">
            Lewis Hamilton Clinches Victory at the Formula 1 Grand Prix</h2>
            <a href="/pd-nayna/news1R.php"> Read More</a>
          </div>
        </div>

        <div class="hot-topic">
          <img src="images/news2.jpg" alt="img" />

          <div class="hot-topic-content">
            <h2>Serena Williams Advances to the Semifinals of Wimbledon</h2>
            <a href="/pd-nayna/news2R.php">Read More</a>
          </div>
        </div>
      </div>
    </section>

    <hr />

    <main>
      <section class="main-container-left">
        <h2>Top Stories</h2>
        <div class="container-top-left">
          <article>
            <img src="images/pm.jpg" />

            <div>
              <h3>Paralympic Marvels</h3>

              <p>
                Marvel at the awe-inspiring performances of Paralympic athletes,
                defying limitations and inspiring millions worldwide.
              </p>

              <!-- <a href="#">Read More <span>>></span></a> -->
            </div>
          </article>
        </div>

        <div class="container-bottom-left">
          <article>
            <img src="images/ge.jpg" />
            <div>
              <h3>Gender Equality Milestones</h3>
              <p>
                Witness significant strides toward gender equality, with
                increased representation and opportunities for women in
                traditionally male-dominated sports.
              </p>
              <!-- <a href="#">Read More <span>>></span></a> -->
            </div>
          </article>

          <article>
            <img src="images/Generation-z.gif" />
            <div>
              <h3>Generation Z Trailblazers</h3>
              <p>
                Experience the rise of the next generation of athletes, as
                talented young individuals break records and captivate audiences
              </p>

              <!-- <a href="#">Read More <span>>></span></a> -->
            </div>
          </article>
        </div>
      </section>

      <section class="main-container-right">
        <h2>Latest Stories</h2>

        <?php
            include './config.php';
            $sql = 'SELECT * from news;';
            if ($result = $conn->query($sql)) {
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo '<article>';
                  echo '<h4>just in</h4>';
                  echo '<div>';
                  echo '<h2>'.$row['title'].'</h2>';
                  echo '<p style="display: -webkit-box; -webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;">' . $row['description'].'</p>';
                  echo '<a href="/pd-nayna/news-read-more.php?id='.$row['id'].'">Read More <span>>></span></a>';
                  echo '</div>';
                  echo '<img src="'.$row['image_url'].'" />';
                  echo '</article>';
                }
              }
            }
        ?>
      </section>
    </main>

    <footer>
      <div class="footer-container">
        <div class="footer-left">
          <h2>SportsNews</h2>
          <p>"Where Sports Stories Unfold"</p>
        </div>

        <div class="footer-right">
          <h2>Promotional Content</h2>
          <p>
            "Stay in the Olympic loop with real-time updates, exclusive
            interviews, and behind-the-scenes coverage on our comprehensive
            Olympic news site."
          </p>

          <div>
  <input type="text" placeholder="Email Address" />
  <a href="mailto:funolympic@gmail.com"><i class="fas fa-envelope"></i></a>
</div>
        </div>
      </div>
       <!--social icons -->
       <div class="social-icons">
  <ul>
    <li>
      <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
    </li>
    <li>
      <a href="https://www.twitter.com"><i class="fab fa-twitter"></i></a>
    </li>
    <li>
      <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
    </li>
    <li>
      <a href="https://www.youtube.com"><i class="fab fa-youtube"></i></a>
    </li>
  </ul>
</div>

      <p>Copyright &copy; 2023 All rights reserved |FunOlympic</p>
    </footer>

    <script src="assets/js/news.js" async defer></script>
  </body>
</html>
