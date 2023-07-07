<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Olympics Landing Page</title>
    <link rel="stylesheet" href="./css/homepage.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style>
      <style>
  .athlete {
    width: 25%;
    display: inline-block;
    text-align: center;
  }

  .athlete img {
    width: 50%%;
    height: 70%;
  }
</style>
      </style>
  </head>
  <body>
    <?php include './component/header.php' ?>

    <div id="home" class="parallax-section">
      <h1>Welcome to FunOlympics Broadcasting</h1>
      <p>Watch live games and highlights from the Olympic Games</p>
      <br /><br />
      <a href="/pd-nayna/home" class="cta-button">Get Started</a>
    </div>
    <section id="newsletter" class="newsletter-section">
      <div class="container">
        <h2>Sign up for Newsletter</h2>
        <p>
          Stay updated with the latest news, events, and highlights from the
          Olympic Games. Subscribe to our newsletter to receive regular updates
          delivered straight to your inbox.
        </p>
        <form action="#" method="POST" class="newsletter-form">
          <input
            type="email"
            name="email"
            placeholder="Enter your email address"
            required
          />
          <button type="submit">Subscribe</button>
        </form>
      </div>
    </section>

    <div id="gallery" class="parallax-section">
      <h2>Featured Athletes</h2>
      <div class="image-container">
        <div class="athlete">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/LeBron_James_%2851959977144%29_%28cropped2%29.jpg/800px-LeBron_James_%2851959977144%29_%28cropped2%29.jpg"
            alt="Athlete 1"
          />
          <h3>Lebron James</h3>
        </div>
        <div class="athlete">
          <img
            src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/11/22/16/nadal.jpg"
            alt="Athlete 2"
          />
          <h3>Rafael Nadal</h3>
        </div>
        <div class="athlete">
          <img
            src="https://img.olympicchannel.com/images/image/private/t_s_w1340/t_s_16_9_g_auto/f_auto/primary/hhfs9tf9mck02d8ilnqq"
            alt="Athlete 3"
          />
          <h3>Michael Phelps</h3>
        </div>
        <div class="athlete">
          <img
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/eb/Jujhar_Khaira.jpg/800px-Jujhar_Khaira.jpg"
            alt="Athlete 1"
          />
          <h3>Jujhar Khaira</h3>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="footer-logo">
          <img
            src="images/olylogo.png"
            alt="Olympics Logo"
          />
          <h3 class="footer-logo-text">Olympics</h3>
        </div>
        <div class="footer-content">
          <div class="footer-column">
            <h4>About Us</h4>
            <p>
              Welcome to the official website of the Olympics! We are dedicated
              to celebrating the spirit of sportsmanship, unity, and athletic
              excellence. Our mission is to inspire and bring people together
              through the power of the Olympic Games.
            </p>
          </div>
          <div class="footer-column">
          </div>
          <div class="footer-column">
            <h4>Follow Us</h4>
            <ul class="social-icons">
            <li>
      <a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
    </li>
    <li>
      <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
    </li>
    <li>
      <a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
    </li>
    <li>
      <a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
    </li>
            </ul>
          </div>
        </div>
      </div>
      <p style="text-align:center; font-size: 11px;">Copyright &copy; 2023 All rights reserved || FunOlympic</p>
    </footer>
  </body>
</html>
