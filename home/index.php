<?php
session_start();

function getStatus($startsAt, $endsAt)
{
    $currentTime = time();

    $convertedStartsAt = strtotime($startsAt);
    $convertedEndsAt = strtotime($endsAt);

    if ($currentTime < $convertedStartsAt) {
        return "NOT YET AIRED";
    } elseif ($currentTime > $convertedEndsAt) {
        return "COMPLETED";
    } else {
        return "ONGOING";
    }
}

$sql;
require "../config.php";

$viewingBroadcasts = true;
$userId = isset($_SESSION['SESSION_ID']) ? (int) $_SESSION['SESSION_ID'] : FALSE;

if (isset($_GET['broadcast'])) {
    $viewingBroadcasts = false;
    $broadcastId = (int) mysqli_real_escape_string($conn, $_GET['broadcast']);
    $_SESSION["SESSION_CURRENT_BROADCAST"] = $broadcastId;
    $sql = "SELECT b.id, b.title, b.description, b.image_url, c.name as category, b.url, b.location, b.gender_representation, b.starts_at, b.ends_at FROM broadcast b INNER JOIN category c on b.category_id = c.id WHERE b.id={$broadcastId};";

    if ($resultSelect = $conn->query("SELECT * from broadcast_notification bn left join broadcast b on bn.broadcast_id=b.id where bn.user_id=$userId AND bn.broadcast_id=$broadcastId AND b.starts_at < NOW()")){
        if ($resultSelect->num_rows == 1){
            $sqlNotifyUpdate = "UPDATE broadcast_notification SET notify='0', mark_as_read='0' where user_id=$userId AND broadcast_id=$broadcastId"; 
            $result =mysqli_query($conn, $sqlNotifyUpdate);
        }else{
      }
    }
} else {
    if (isset($_GET['category'])) {
        $categoryId = (int) mysqli_real_escape_string($conn, $_GET['category']);
        $sql = 'SELECT b.id, b.title, b.description, b.image_url, b.category_id, c.name as category, b.location, b.gender_representation, b.starts_at, b.ends_at FROM broadcast b INNER JOIN category c on b.category_id = c.id where b.category_id=' . $categoryId . ';';
    } else {
        $sql = 'SELECT b.id, b.title, b.description, b.image_url, b.category_id, c.name as category, b.location, b.gender_representation, b.starts_at, b.ends_at FROM broadcast b INNER JOIN category c on b.category_id = c.id;';
    }
    $viewingBroadcasts = true;
}
?>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/pd-nayna/config.php";

$query = "SELECT * FROM category";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>title-placeholder</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="/pd-nayna/css/style.css">
    <link
        rel="stylesheet"
        href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
        crossorigin="anonymous"
        />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;600&display=swap');
html {
  box-sizing: border-box;
  font-size: 100%;
}
/* html, body {
  height: 100%;
} */
/* *, *:before, *:after {
  box-sizing: inherit;
} */
/* img {
  max-width: 100%;
  height: auto;
} */
body {
  -webkit-text-size-adjust: 100%;
  font-variant-ligatures: none;
  text-rendering: optimizeLegibility;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  font-size: 100%;
  font-family: 'Fira Sans', sans-serif;
}
/* h1, h2, h3, h4, h5 {
  font-weight: 800;
  margin-top: 0;
  margin-bottom: 0;
} */
/* body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0;
  padding: 0;
  height: 100vh;
  color: #1F1D42;
  background-color: #F0F8E1;
} */
.card-hover {
  width: 360px;
  height: 500px;
  position: relative;
  overflow: hidden;
  box-shadow: 0 0 32px -10px rgba(0, 0, 0, 0.08);
}
.card-hover:has(.card-hover__link:hover) .card-hover__extra {
  transform: translateY(0);
  transition: transform 0.35s;
}
.card-hover:hover .card-hover__content {
  background-color: #DEE8C2;
  bottom: 100%;
  transform: translateY(100%);
  padding: 50px 60px;
  transition: all 0.35s cubic-bezier(0.1, 0.72, 0.4, 0.97);
}
.card-hover:hover .card-hover__link {
  opacity: 1;
  transform: translate(-50%, 0);
  transition: all 0.3s 0.35s cubic-bezier(0.1, 0.72, 0.4, 0.97);
}
.card-hover:hover img {
  transform: scale(1);
  transition: 0.35s 0.1s transform cubic-bezier(0.1, 0.72, 0.4, 0.97);
}
.card-hover__content {
  width: 100%;
  text-align: center;
  background-color: #86B971;
  padding: 0 60px 50px;
  position: absolute;
  bottom: 0;
  left: 0;
  transform: translateY(0);
  transition: all 0.35s 0.35s cubic-bezier(0.1, 0.72, 0.4, 0.97);
  will-change: bottom, background-color, transform, padding;
  z-index: 1;
}
.card-hover__content::before, .card-hover__content::after {
  content: '';
  width: 100%;
  height: 120px;
  background-color: inherit;
  position: absolute;
  left: 0;
  z-index: -1;
}
.card-hover__content::before {
  top: -80px;
  clip-path: ellipse(60% 80px at bottom center);
}
.card-hover__content::after {
  bottom: -80px;
  clip-path: ellipse(60% 80px at top center);
}
.card-hover__title {
  font-size: 1.5rem;
  margin-bottom: 1em;
}
.card-hover__title span {
  color: #2d7f0b;
}
.card-hover__text {
  font-size: 0.75rem;
}
.card-hover__link {
  position: absolute;
  bottom: 1rem;
  left: 50%;
  transform: translate(-50%, 10%);
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  text-decoration: none;
  color: #2d7f0b;
  opacity: 0;
  padding: 10px;
  transition: all 0.35s;
}
.card-hover__link:hover svg {
  transform: translateX(4px);
}
.card-hover__link svg {
  width: 18px;
  margin-left: 4px;
  transition: transform 0.3s;
}
.card-hover__extra {
  height: 50%;
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  width: 100%;
  font-size: 1.5rem;
  text-align: center;
  background-color: #86b971;
  padding: 80px;
  bottom: 0;
  z-index: 0;
  color: #dee8c2;
  transform: translateY(100%);
  will-change: transform;
  transition: transform 0.35s;
}
.card-hover__extra span {
  color: #2d7f0b;
}
.card-hover img {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  z-index: -1;
  transform: scale(1.2);
  transition: 0.35s 0.35s transform cubic-bezier(0.1, 0.72, 0.4, 0.97);
}

    </style>
</head>

<body>
    <?php require "../component/header.php" ?>
    <div class="contain-main">
        <div class="box">
            <div>
                <?php
                if ($viewingBroadcasts) {
                    echo '<div class="contain-title" style="padding-bottom: 24px;">';
                    echo '<h1>Broadcasts</h1>';
                    echo "<div style='display: flex; justify-content: flex-start; align-items:center; gap: 18px; margin-top: 18px;'>";
                    echo "<a style='background-color: transparent; border: none; padding: 0; margin: 0;color: #333; font-weight: 400;";
                    if(!activeLinkContains("category")) echo "color: #2c746b; font-weight:bold;text-decoration: underline;";
                    echo "' href='/pd-nayna/home'>All</a>";

                    foreach ($options as $option) {
                        echo "<a style='background-color: transparent; border: none; padding: 0; margin: 0;color: #333; font-weight: 400;";
                        if(activeLinkContains("category=" . (int)$option['id'])) echo "color: #2c746b; font-weight:bold;text-decoration: underline;";
                        echo "' href='/pd-nayna/home?category={$option['id']}'>{$option['name']}</a>";
                    }
                    echo "</div>";
                    echo '</div>';
                    echo '<div class="grid-container" style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 60px;">';
                    if ($result = $conn->query($sql)) {
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $status = getStatus($row['starts_at'], $row['ends_at']);
                                $broadcastId = (int) $row['id'];
                                // $query = "SELECT * from broadcast_notification where broadcast_id=" . $broadcastId . " and user_id=" . $userId . ";";
                                // $checked;

                                // if ($r = $conn->query($query)) {
                                //     if ($r->num_rows > 0) {
                                //         $ro = $r->fetch_assoc();
                                //         $checked = $ro['notify'] === '1' ? TRUE : FALSE;
                                //     } else {
                                //         $checked = FALSE;
                                //     }
                                // }
                                
                                if ($status == 'ONGOING') {
                                    // echo '<div style="border-radius: 4px; border: 2px solid rgba(0, 0, 0, 0.2);max-height: 400px; overflow: hidden; box-shadow: 4px 4px 6px 0px #888888;">';
                                    // echo '<img src="'. $row['image_url'] .'" />';
                                    // echo '<h3 style="padding-bottom: 12px;">' . $row['title'] . '</h3>';
                                    // echo '<p style="max-height: 72px; overflow: hidden;display: -webkit-box; -webkit-box-orient: vertical;-webkit-line-clamp: 3;">' . $row['description'] . '</p>';
                                    // echo '<div style="margin-top: 12px; font-weight: bold; border: 1px solid rgba(0, 0, 0, 0.2); display: inline-block; padding: 6px 12px; border-radius: 8px;">' . $status . '</div>';
                                    // echo '<div style="display: flex; justify-content: flex-end;">';
                                    // echo '<a href="/pd-nayna/home?broadcast=' . $row['id'] . '" style="padding: 10px 14px; border-radius: 6px; background-color: cornflowerblue; border: none; color: white; font-weight: bold; cursor: pointer;">VIEW BROADCAST</a>';
                                    // // if ($status == 'NOT YET AIRED') {
                                    //     // echo '<label role="button" style="display: flex; align-items: center; gap: 6px; margin-top: 12px; cursor: pointer;">';
                                    //     // echo '<input type="checkbox" ';
                                    //     // echo $checked ? 'checked' : "";
                                    //     // echo ' data-broadcast-id="' . $row['id'] . '" onclick="check(this);" value="' . $row['id'] . '" />';
                                    //     // echo 'Get Notified?';
                                    //     // echo '</label>';
                                    // // } else {
                                    //     // echo '<a href="/pd-nayna/home?broadcast=' . $row['id'] . '" style="padding: 10px 14px; border-radius: 6px; background-color: cornflowerblue; border: none; color: white; font-weight: bold; cursor: pointer;">VIEW BROADCAST</a>';
                                    // // }
                                    // echo '</div>';
                                    // echo '</div>';

                                    echo '<div class="card-hover">';
                                    echo '<div class="card-hover__content">';
                                    echo '<h3 class="card-hover__title">';
                                    echo $row['title'];
                                    echo '</h3>';
                                    echo '<p class="card-hover__text" style="max-height: 72px; overflow: hidden;display: -webkit-box; -webkit-box-orient: vertical;-webkit-line-clamp: 4;">'.$row['description'].'</p>';
                                    echo '<a href="/pd-nayna/home?broadcast=' . $row['id'] . '" class="card-hover__link" style="margin-top: 18px;">';
                                    echo '<span>Watch Now</span>';
                                    echo '<svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">';
                                    echo '<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />';
                                    echo '</svg>';        
                                    echo '</a>';
                                    echo '</div>';
                                    echo '<div class="card-hover__extra">';
                                    echo '<h4>Watch <span>'.$row['category'].'</span> broadcast live at <span>'.$row['location'].'</span></h4>';
                                    echo '</div>';
                                    echo '<img src="'.$row['image_url'].'" alt="">';
                                    echo '</div>';
                                }
                            }
                        } else {
                            echo "<p style='font-size: 18px;'>Broadcast with such category not found</p>";
                        }
                    }
                    echo "</div>";
                } else {
                    // Single Broadcast
                    if ($result = $conn->query($sql)) {
                        if ($result->num_rows == 1) {
                            $row = $result->fetch_assoc();
                            echo "<div>";
                            echo '<h1 style="padding-bottom: 24px;">' . $row['title'] . '</h1>';
                            echo '<h3 style="padding-bottom: 8px;">Live Broadcast</h3>';
                            echo "<div style='display:flex;'>";
                            echo '<div style="flex: 9; position:relative;height:500px;overflow:hidden;"> <iframe style="width:100%;height:100%;position:absolute;left:0px;top:0px;overflow:hidden" frameborder="0" type="text/html" src="'.$row['url'].'" width="100%" height="100%" allowfullscreen title="Dailymotion Video Player" allow="autoplay"> </iframe> </div>';
                            require './chat.php';
                            echo "</div>";
                            echo '<h3 style="padding-top: 16px;">Description</h3>';
                            echo '<p>' . $row['description'] . '</p>';
                            echo '<h3 style="padding-top: 16px">Status</h3>';
                            echo '<p>' . $row['starts_at'] . ' - ' . $row['ends_at'] . '</p>';
                            echo '<div style="margin-top: 12px; font-weight: bold; border: 1px solid rgba(0, 0, 0, 0.2); display: inline-block; padding: 6px 12px; border-radius: 8px;">LIVE</div>';
                            echo '</div>';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <?php require "../component/footer.php" ?>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script>
        function check(cb) {
            const broadcastId = cb.getAttribute("data-broadcast-id");
            if ($(cb).is(":checked")) {
                $.getScript('./actions/checkCheckbox.php?broadcast=' + broadcastId);
            } else {
                $.getScript('./actions/uncheckCheckbox.php?broadcast=' + broadcastId);
            }
        }
    </script>
    <script src="js/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script src="js/chat.js"></script>
    <script src="js/signup.js"></script>
    <script src="js/contentmenu.js"></script>
    <script>
        window.onload = function () {
            console.log('loaded');
            var usernameInput = document.getElementById('username');
            var submitButton = document.getElementById('btn-submit');

            // Retrieve value from cookie with key "userName"
            var userNameCookie = $.cookie('userName');

            if (userNameCookie) {
                // Add value to the input field
                usernameInput.value = userNameCookie;

                // Simulate a click event on the button
                submitButton.click();
            }
        };
    </script>
</body>

</html>