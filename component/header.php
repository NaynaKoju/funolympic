<?php
  function active($page){
    $url_array = explode('/', $_SERVER['REQUEST_URI']);
    $url = end($url_array);
    if ($page == $url) {
      return TRUE;
    }
    return FALSE;
  }

  function activeLinkContains($keyword){
    if (strpos($_SERVER['REQUEST_URI'], $keyword) !== false) {
      return TRUE;
    }
    return FALSE;
  }
?>

<style>
  .navigation > a{
    transition: all 300ms ease-out;
  }
  .navigation > a:hover{
    transform: scale(0.9);
  }

  /* Dropdown Button */
  .dropbtn {
    background-color: transparent;
    color: white;
    font-size: 16px;
    border: none;
  }

  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown p{
    transition: all 300ms ease-out;
  }

  .dropdown p:hover{
    transform: scale(0.9);
  }

  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }

  /* Links inside the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }

  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: #ddd;}

  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {display: block;}
</style>

<!-- Change background color here -->
<div style="background-color: #025464;">
  <div style="display: flex; justify-content: space-between; align-items:center;margin-inline: 62px; margin-block: 16px;">
    <a href="/pd-nayna/"><img src="/pd-nayna/images/olylogo.png"  height="42px"/></a>
    <nav class='navigation' style="display: flex; gap: 18px;">
      <a style="color: white <?php if (activeLinkContains('home') or active('schedule.php'))
      echo "font-weight:bold; text-decoration: underline; color: white;" ?>" href="/pd-nayna/home">Home</a>
      <a style="color: white <?php if (active('about.php'))
      echo "font-weight:bold; text-decoration: underline; color: white;" ?>" href="/pd-nayna/aboutus.php">About</a>
      <a style="color: white <?php if (active('contact.php'))
      echo "font-weight:bold; text-decoration: underline; color: white;" ?>" href="/pd-nayna/contactus.php">Contact</a>
      <a style="color: white <?php if (active('gallery.php'))
      echo "font-weight:bold; text-decoration: underline; color: white;" ?>" href="/pd-nayna/gallery.php">Gallery</a>
      <a style="color: white <?php if (active('news.php'))
      echo "font-weight:bold; text-decoration: underline; color: white;" ?>" href="/pd-nayna/news.php">Latest News</a>
      <div class="dropdown">
        <button class="dropbtn"><p>Broadcasts</p></button>
        <div class="dropdown-content">
          <a href="/pd-nayna/home/index.php">Live Broadcasts</a>
          <a href="/pd-nayna/schedule.php">Schedule</a>
          <a href="/pd-nayna/results.php">View Results</a>
        </div>
      </div>
      <?php
        if(isset($_SESSION['SESSION_ADMIN'])){
          if($_SESSION['SESSION_ADMIN'] == TRUE){
            echo '<div class="dropdown">';
            echo '<button class="dropbtn"><p>Admin</p></button>';
            echo '<div class="dropdown-content">';
            echo '<a href="/pd-nayna/user/user-d.php">User</a>';
            echo '<a href="/pd-nayna/broadcast/broadcast-d.php">Broadcast</a>';
            echo '<a href="/pd-nayna/category/category-d.php">Category</a>';
            echo '<a href="/pd-nayna/news/news-d.php">News</a>';
            echo '</div>';
            echo '</div>';
          }
        }
      ?>
    </nav>
    <div>
      <?php
        if(isset($_SESSION['SESSION_ID'])){
          $notificationPath = $_SERVER['DOCUMENT_ROOT'];
          $notificationPath .= '/pd-nayna/notify.php';
          include $notificationPath;
        }
      ?>
      <?php
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/pd-nayna/config.php";

        include $path;
        $sessionEmail = isset($_SESSION['SESSION_EMAIL']) ? $_SESSION['SESSION_EMAIL'] : FALSE;

        $query = mysqli_query($conn, "SELECT * FROM users WHERE email='{$sessionEmail}'");

        if (mysqli_num_rows($query) == 1) {
          echo '<a class="log" style="color: white" href="/pd-nayna/logout.php">Logout</a>';
        } else {
          echo '<a class="log" style="color: white" href="/pd-nayna/login.php">Login</a>';
        }
      ?>
    </div>
  </div>
</div>
