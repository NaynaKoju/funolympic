<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SportsGallery</title>
    <link rel="stylesheet" href="assets/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <style>
        .galcontainer {
  width: 100%;
  text-align: center;
  size-adjust: inherit;
  overflow: scroll;
}

.galcontainer .top-container .buttons.active {
  color: rgb(15, 2, 129);
  font-weight: bolder;
}

.galcontainer h1 {
  font-weight: normal;
  font-size: 35px;
  position: relative;
  margin: 40px 0;
}
.galcontainer h1::before {
  content: "";
  position: absolute;
  width: 100px;
  height: 3px;
  background-color: darkgreen;
  bottom: -10px;
  left: 50%;
  transform: translateX(-50%);
  animation: animate 4s linear infinite;
}
@keyframes animate {
  0% {
    width: 100px;
  }
  50% {
    width: 200px;
  }
  100% {
    width: 100px;
  }
}
.topcontainer {
  background-color: rgb(243, 243, 243);
  width: 95%;
  margin: 0 auto 20px auto;
  height: 40px;
  display: flex;
  align-items: center;
  border-radius: 8px;
  box-shadow: 3px 3px 5px lightblue;
}
.back_btn{
  margin-left: 90%;
  margin-top: -1%;
}
.topcontainer h3 {
  height: 20px;
  line-height: 20px;
  padding: 0 10px;
  color: brown;
}
.topcontainer label {
  display: inline-block;
  height: 60%;
  padding: 0 5px;
  margin: 0 9px;
  font-size: 19px;
  color: grey;
  cursor: pointer;
  transition: color 0.4s;
  font-weight: 500;
}
.topcontainer label:hover {
  color: black;
}
.gallery {
  width: 90%;
  margin: auto;
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-gap: 12px;
  overflow: scroll;
}
.pic {
  position: relative;
  height: 230px;
  cursor: pointer;
  border-radius: 8px;
  box-shadow: 2px 3px 4px lightblue;
  overflow: hidden;
}
.pic img {
  width: 100%;
  height: 100%;
  border-radius: 8px;
  transition: 0.5s;
}

.pic img:hover {
  transform: scale(1.5);
}

.pic::before {
  content: "Sport";
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: whitesmoke;
  font-size: 22px;
  font-weight: bold;
  width: 100%;
  margin-top: -100px;
  opacity: 0;
  transition: 0.3s;
  transition-delay: 0.2s;
  z-index: 1;
}
.pic::after {
  content: "";
  position: absolute;
  width: 100%;
  bottom: 0;
  left: 0;
  border-radius: 10px;
  height: 0;
  background-color: rgba(0, 0, 0, 0.4);
  transition: 0.3s;
}
.pic:hover::after {
  height: 100%;
}
.pic:hover::before {
  margin-top: 0;
  opacity: 1;
}
.top-line {
  border-top: 8px solid black;
}
.custom-radio {
  transform: scale(1.5); 
}

#filter-all:checked ~ .gallery .pic {
  display: block;
  opacity: 0;
  transform: scale(0);
  position: relative;
}
#filter-Basketball:checked ~ .gallery .basketball {
  opacity: 0;
  transform: scale(0);
  position: relative;
}
#filter-Cricket:checked ~ .gallery .cricket,
#filter-Hocky:checked ~ .gallery .hocker,
#filter-Swimming:checked ~ .gallery .swimming,
#filter-Football:checked ~ .gallery .football,
#filter-Volleyball:checked ~ .gallery .volleyball,
#filter-Gymnastics:checked ~ .gallery .gymnastics,
#filter-Fencing:checked ~ .gallery .fencing {
  display: block;
  opacity: 0;
  transform: scale(0);
  position: absolute;
}
    </style>
  </head>
  <body>
  <input type="radio" class="custom-radio" name="sports" id="sport1" checked />
<input type="radio" class="custom-radio" name="sports" id="sport2" />
<input type="radio" class="custom-radio" name="sports" id="sport3" />
    <input type="radio" class="custom-radio" name="sports" id="sport4" />
    <input type="radio" class="custom-radio" name="sports" id="sport5" />
    <input type="radio" class="custom-radio"name="sports" id="sport6" />
    <input type="radio" class="custom-radio" name="sports" id="sport7" />
    <input type="radio" class="custom-radio" name="sports" id="sport8" />
    <input type="radio" class="custom-radio" name="sports" id="sport9" />

    <p class="back_btn">
        <a href="./home" style=" color: black;">
                        <i class="fa fa-arrow-left"></i>
                        BACK
                    </a>
                </p>
                <div class="top-line"></div>

    <div class="galcontainer">
      <h1>HERE? To our gallery</h1>
      <div class="topcontainer">
        <h3>Sports category</h3>
        <label for="sport1" class="buttons active" data-filter="all"
          >All Photos</label
        >
        <label for="sport2" class="buttons" data-filter="basketball"
          >Basketball</label
        >
        <label for="sport3" class="buttons" data-filter="cricket"
          >Cricket</label
        >
        <label for="sport4" class="buttons" data-filter="hocker">Hockey</label>
        <label for="sport5" class="buttons" data-filter="swimming"
          >Swimming</label
        >
        <label for="sport6" class="buttons" data-filter="football"
          >Football</label
        >
        <label for="sport7" class="buttons" data-filter="volleyball"
          >Volleyball</label
        >
        <label for="sport8" class="buttons" data-filter="gymnastic"
          >Gymnastics</label
        >
        <label for="sport9" class="buttons" data-filter="fencing"
          >Fencing</label
        >
      </div>
      <div class="gallery">
        <div class="basketball pic">
          <img src="images/bb1.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cr1.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hoc1.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/sw1.jpg" />
        </div>
        <div class="football pic">
          <img src="images/fb1.jpg" />
        </div>
        <div class="volleyball pic">
          <img src="images/vb1.jpg" />
        </div>
        <div class="gymnastic pic">
          <img src="images/gm1.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fn1.jpg" />
        </div>
        <div class="basketball pic">
          <img src="images/bb2.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cr2.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hoc2.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/sw2.jpg" />
        </div>
        <div class="football pic">
          <img src="images/fb2.jpg" />
        </div>
        <div class="volleyball pic">
          <img src="images/vb2.jpg" />
        </div>
        <div class="gymnastic pic">
          <img src="images/gm2.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fn2.jpg" />
        </div>
        <div class="basketball pic">
          <img src="images/bb3.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cr3.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hoc3.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/sw3.jpg" />
        </div>
        <div class="football pic">
          <img src="images/fb3.jpg" />
        </div>
        <div class="volleyball pic">
          <img src="images/vb3.jpg" />
        </div>
        <div class="gymnastic pic">
          <img src="images/gm3.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fn3.jpg" />
        </div>
        <div class="basketball pic">
          <img src="images/bb4.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cr4.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hoc4.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/sw4.jpg" />
        </div>
        <div class="football pic">
          <img src="images/fb4.jpg" />
        </div>
        <div class="volleyball pic">
          <img src="images/vb4.jpg" />
        </div>
        <div class="gymnastic pic">
          <img src="images/gm4.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fn4.jpg" />
        </div>
        <div class="basketball pic">
          <img src="images/bb5.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cr5.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hoc5.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/sw5.jpg" />
        </div>
        <div class="football pic">
          <img src="images/fb5.jpg" />
        </div>
        <div class="volleyball pic">
          <img src="images/vb5.jpg" />
        </div>
        <div class="gymnastic pic">
          <img src="images/gm5.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fn5.jpg" />
        </div>
        <div class="basketball pic">
          <img src="images/bb6.jpg" />
        </div>
        <div class="cricket pic">
          <img src="images/cr6.jpg" />
        </div>
        <div class="hocker pic">
          <img src="images/hoc6.jpg" />
        </div>
        <div class="swimming pic">
          <img src="images/sw6.jpg" />
        </div>
        <div class="football pic">
          <img src="images/fb6.jpg" />
        </div>
        <div class="volleyball pic">
          <img src="images/vb6.jpg" />
        </div>
        <div class="gymnastic pic">
          <img src="images/gm6.jpg" />
        </div>
        <div class="fencing pic">
          <img src="images/fn6.jpg" />
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
      $(document).ready(function () {
        $(".buttons").click(function () {
          $(this).addClass("active").siblings().removeClass("active");

          var filter = $(this).attr("data-filter");

          if (filter == "all") {
            $(".pic").show(400);
          } else {
            $(".pic")
              .not("." + filter)
              .hide(200);
            $(".pic")
              .filter("." + filter)
              .show(400);
          }
        });

        $(".gallery").magnificPopup({
          delegate: "a",
          type: "pic",
          gallery: {
            enabled: true,
          },
        });
      });
    </script>
  </body>
</html>
