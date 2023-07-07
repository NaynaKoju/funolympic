<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AboutUs</title>
    <!-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    /> -->
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
        />
    <link rel="stylesheet" href="assets/about.css" />
    <style>
        /* aboutussssssssss */
* {
  margin: 0;
  padding: 0;
}

body {
  font-family: var(--body-font);
  font-weight: initial;
  background-color: #025464;
}
.back{
  margin-left:-95%;
  margin-top: 0%;
}
.sport img {
  width: 100%;
  height: 357px;
  background-color: rgb(0, 0, 0);
}
.MIVIAC {
  text-align: center;
}
.listitems {
  /* color: black; */
  /* background-image: url("./images/olympicpic.png"); */
  margin-left: 2%;
  margin-right: 2%;
}
.abtbody {
  overflow: hidden;
  background-color: lightgray;
  /* overflow: scroll; */
}
.abtus-1 {
  background-color: #b7b7b7;
  margin: 30px;
  margin-top: 0;
  padding: 5px;
}
.abtus-1 h1 {
  text-align: center;
  color: black;
  font-weight: bold;
}

.abtus-1 .welc {
  text-align: center;
  font-size: 18px;
  font-weight: bolder;
}

.abtus-1 p {
  text-align: center;
  padding: 3px;
  color: black;
}
/* __________ */
.abt-list {
  background-color: #f7f7f7;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
}

.abt-list i {
  font-size: 24px;
  margin-bottom: 10px;
}

.abt-list h3 {
  font-size: 18px;
  margin-bottom: 10px;
  text-decoration: underline;
}

.abt-list hr {
  border: none;
  /* margin: 10px 0; */
}
.for-row {
  display: flex;
  justify-content: space-between;
}
.col-md-4 {
  flex: 0 0 32%;
}

.abt-list p {
  font-size: 16px;
}

footer {
  position: relative;
  margin-top: auto;
  text-align: center;
  align-items: center;
  font-weight: bolder;
}

.cpr {
  background-color: lightgreen;
  opacity: 0.5;
}

.abt-list:hover {
  background-color: lightblue;
  /* overflow: scroll; */
}
    </style>
  </head>
  <body>
    <?php include './component/header.php' ?>
    <div class="abtbody">
      <section id="abtus">
        <div class="abtus-1">
          <div class="main_home">
            <div class="nav_bar">
                <div class="sport">
                    <img src="https://images.unsplash.com/photo-1519315901367-f34ff9154487?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" style="object-fit:cover;">                 
                </div>
          <h1 style="margin-top: 18px">GET TO KNOW US</h1>
          <p class="welc" style="margin-top: 12px">
            Welcome to FunOlympic, your ultimate destination for live coverage
            of the Olympic Games.
          </p>
          <p style="margin-bottom: 18px; text-align: justify;
    line-height: 1.5;
    max-width: 1300px;
    margin: 0 auto;" >
            We are committed to bringing you the most exciting moments of the
            Olympics, right to your screens. Our dedicated team of professionals
            works tirelessly to capture every victory, every record-breaking
            performance, and every inspiring story from the Games. Whether
            you're a fan of athletics, swimming, gymnastics, or any other
            Olympic sport, we've got you covered. With our state-of-the-art
            broadcasting technology, you won't miss a single moment of the
            action. Stay tuned for the upcoming Olympic Games and be part of the
            global celebration of athleticism and sportsmanship. Join us as we
            witness history in the making and showcase the world's greatest
            athletes as they compete for glory.
            <br>
            Welcome to Fun Olympics! Our mission is to bring joy, laughter, and friendly competition to participants of all ages and backgrounds. We believe in the power of sports to unite people, foster camaraderie, and promote a healthy and active lifestyle.

Fun Olympics was founded with the vision of creating a unique and inclusive sporting event that focuses on enjoyment rather than intense competition. Since our humble beginnings, we have grown into a beloved community tradition, attracting participants from near and far.

At Fun Olympics, we offer a wide range of fun and unconventional sports designed to challenge participants' skills, teamwork, and creativity. From wacky relay races to silly obstacle courses and outrageous costumes, our event provides a one-of-a-kind experience that creates lasting memories.

We welcome everyone to join in the excitement and celebration at Fun Olympics. Whether you're a seasoned athlete or just looking to have a great time, there's a place for you at our event. Grab your friends, family, and colleagues, and get ready to embark on a thrilling adventure filled with laughter and friendly competition.

Stay tuned for upcoming event dates, registration details, and updates by following us on social media and subscribing to our newsletter. We can't wait to see you at the next Fun Olympics!
          </p>
        </div>
        <div class="abtus-2"></div>
        <div class="MIVIAC">
          <div class="listitems">
            <div class="for-row">
              <div class="col-md-4">
                <div class="abt-list text-center">
                  <i class="fa fa-book"></i>
                  <h3>Legacy</h3>
                  <hr />
                  <p>
                  The Olympic Legacy refers to the enduring impact and cultural significance left by the Olympic Games. It encompasses the values of sportsmanship, unity, and global cooperation fostered by the Olympics. The Olympic Legacy celebrates the rich history and traditions of the Games, highlighting their role in promoting peace, understanding, and the pursuit of excellence in sports.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="abt-list text-center">
                  <i class="fa fa-globe"></i>
                  <h3>Our Commitment</h3>
                  <hr />
                  <p>
                  At this site, we are committed to promoting the Olympic spirit and values. Our commitment lies in fostering inclusivity, encouraging fair play, and providing a platform for athletes from diverse backgrounds to showcase their talents. We strive to create an environment where athletes can compete at their best while upholding principles of integrity, respect, and sportsmanship.
                  </p>
                </div>
              </div>
              <div class="col-md-4">
                <div class="abt-list text-center">
                  <i class="fa fa-pencil"></i>
                  <h3>Inspiring Athletics</h3>
                  <hr />
                  <p>
                  Discover the stories of extraordinary athletes, inspired the world through their Olympic journey. These athletes exemplify dedication, pursuit of greatness. From overcoming obstacles to achieving remarkable feats, they embody the spirit, serve as role models for aspiring athletes worldwide. Through their stories, we aim to inspire and motivate individuals to pursue dreams and reach full potential.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <div class="cpr">
      <footer>
        <p style="padding: 24px; margin: 0; color: black;">
          Copyright &copy; 2023 All rights reserved by FunOlympic Yokyo
        </p>
      </footer>
    </div>
  </body>
</html>
