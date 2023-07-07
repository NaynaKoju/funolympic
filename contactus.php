<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="assets/contact.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      background-image: url("./images/cont.png");
      background-repeat: no-repeat;
      background-size: cover;
      padding: 20px;
      color: #fff;
      text-align: center;
    }

    header {
      margin-bottom: 40px;
    }

    .back_btn a {
      color: white;
      text-decoration: none;
    }

    .back_btn a i {
      margin-right: 5px;
    }

    .content-form {
      display: flex;
      justify-content: center;
      gap: 40px;
      margin-top: 40px;
    }

    section {
      flex: 1;
    }

    section i {
      font-size: 32px;
      margin-bottom: 10px;
    }

    .media {
      margin-top: 40px;
      display: flex;
      justify-content: center;
    }

    .media a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
    }

    .media i:hover {
      color: goldenrod;
    }

    .faq-form {
      max-width: 550px;
    margin: 0 auto;
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    margin-top: 40px;
      /* max-width: 550px;
      margin: 0 auto;
      background-color: #f5f5f5;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      margin-top: 40px; */
    }

    .faq-form h2 {
      margin-top: 0;
      margin-bottom: 20px;
      color: white;
    }

    .faq-form form {
      display: flex;
      flex-direction: column;
    }

    .faq-form label {
      font-weight: bold;
    }

    .faq-form input,
    .faq-form textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 10px;
    }

    .faq-form button {
      padding: 10px 20px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
      width: 500px;
    }

    .faq-form button:hover {
      background-color: #45a049;
    }

    .formBox {
      max-width: 550px;
      margin: 0 auto;
      background: rgba(0, 0, 0, 0.7);
      color: #fff;
      border: 1px solid #ccc;
      border-radius: 5px;
      padding: 20px;
      margin-top: 40px;
    }

    .form_contents {
      margin-bottom: 20px;
      width: 500px;
    }
    .form-group{
      color: white;
      width:500px;
    }

    .formBox h2 {
      margin-top: 0;
      margin-bottom: 10px;
    }

    .formBox p {
      margin: 0;
    }

    .formBox input,
    .formBox textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      margin-bottom: 10px;
    }

    .formBox button {
      padding: 10px 20px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 3px;
      cursor: pointer;
    }

    .formBox button:hover {
      background-color: #45a049;
    }

    .empty {
      height: 300px; 
    }
    /* animation part */
    @keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

@keyframes slideIn {
  from {
    transform: translateX(-200px);
  }
  to {
    transform: translateX(0);
  }
}

@keyframes scaleIn {
  from {
    transform: scale(0);
  }
  to {
    transform: scale(1);
  }
}

.container {
  animation: fadeIn 1s ease-in-out;
}

.content {
  animation: slideIn 1s ease-in-out;
}

.faq-form,
.formBox {
  animation: scaleIn 1s ease-in-out;
}

.boxes-container {
  display: flex;
  justify-content: space-between;
}

.conthead{
        animation: bounce 1s infinite;
      }
      
      @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
          transform: translateY(0);
        }
        40% {
          transform: translateY(-20px);
        }
        60% {
          transform: translateY(-10px);
        }
      }
  </style>
</head>

<body>
  <div class="container">
    <header>
      <p class="back_btn">
        <a href="./home">
          <i class="fa fa-arrow-left"></i>BACK
        </a>
      </p>
      <h1 class="conthead">Contact Us</h1>
      <div class="media">
      <a href="https://www.facebook.com"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
      <a href="https://www.instagram.com"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
      <a href="https://www.whatsapp.com"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>
      <a href="https://www.twitter.com"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
    </div>
      <p>Welcome to our Olympic Live Broadcasting contact page. We are dedicated to bringing you the best live coverage
        of the Olympic Games. We value your feedback and inquiries, and we are here to assist you. We strive to respond
        to all inquiries within 24-48 hours.</p>
    </header>

    <div class="content-form">
      <section>
        <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
        <h2>Address</h2>
        <p>
         Kumaripati<br>
          Kathmandu, Nepal
        </p>
      </section>

      <section>
        <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
        <h2>Phone</h2>
        <p>01-6655972</p>
      </section>

      <section>
        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
        <h2>E-mail</h2>
        <p>funolympic@gmail.com</p>
      </section>
    </div>

    <div class="faq-form">
      <h2>Frequently Asked Questions</h2>
      <form action="#">
        <div class="form-group">
          <label for="name">Your Name:</label>
          <input type="text" id="name" name="name" placeholder="Nayna Koju" required>
        </div>

        <div class="form-group">
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" placeholder="nay@gmail.com" required>
        </div>

        <div class="form-group">
          <label for="question">Question:</label>
          <textarea id="question" name="question" required></textarea>
        </div>

        <button type="submit">Submit</button>
      </form>
    </div>

    <form>
      <div class="formBox">
        <div class="form_contents">
          <h2>Get in Touch</h2>
          <p>You will hear from us at the earliest!</p>
          <form action="#">
            <div class="nameInp">
              <i class="fa fa-user icon"></i>
              <input type="text" placeholder="Full Name" name="name" id="name" required>
            </div>
            <div class="mailInp">
              <i class="fa fa-envelope"></i>
              <input type="email" name="mail" id="mail" placeholder="Email" required>
            </div>
            <div class="phoneInp">
              <i class="fa fa-phone "></i>
              <input type="number" name="phone" id="phone" placeholder="Phone" min="100000" max="9999999999" required>
            </div>
            <div class="submitBtn">
              <button id="btn" onclick="notif()">Send</button>
            </div>
          </form>
        </div>
        <p class="extranum">You can also contact us at 111-1710-422</p>
      </div>
    </form>
  </div>
</body>

</html>
