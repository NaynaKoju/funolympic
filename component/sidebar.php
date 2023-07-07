<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= "/pd-nayna/config.php";

$query = "SELECT * FROM category";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $options = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<aside style="padding-top: 24px; width: 240px">
    <section>
        <p><a style="<?php if (activeLinkContains('home') and !activeLinkContains('category'))
            echo "color: #025464; font-weight:bold;" ?>"
                href="/pd-nayna/home">Browse Broadcasts</a></p>
        <p><a style="<?php if (activeLinkContains('schedule.php'))
            echo "color: #025464; font-weight:bold;" ?>"
                href="/pd-nayna/schedule.php">View Schedule</a></p>
        <p><a style="<?php if (activeLinkContains('results.php'))
            echo "color: #025464; font-weight:bold;" ?>"
                href="/pd-nayna/results.php">View Results</a></p>
    </section>

    <?php
        if (isset($_SESSION['SESSION_ADMIN'])) {
            echo "<section>";
            echo '<h1 style="padding-top: 18px">Admin Section</h1>';
            echo '<p><a style="';
            if (activeLinkContains('user/'))
                echo "color: #025464; font-weight:bold;";
            echo '" href="/pd-nayna/user/user-d.php">User Management</a></p>';
            echo '<p><a style="';
            if (activeLinkContains('broadcast/'))
                echo "color: #025464; font-weight:bold;";
            echo '" href="/pd-nayna/broadcast/broadcast-d.php">Broadcast Management</a></p>';
            echo '<p><a style="';
            if (activeLinkContains('category/'))
                echo "color: #025464; font-weight:bold;";
            echo '" href="/pd-nayna/category/category-d.php">Category Management</a></p>';
            echo '<p><a style="';
            if (activeLinkContains('news/'))
                echo "color: #025464; font-weight:bold;";
            echo '" href="/pd-nayna/news/news-d.php">News Management</a></p>';
            echo '</section>';
        }
        ?>

    <section>
        <h1 style="padding-top: 18px">Categories</h1>
        <?php
        foreach ($options as $option) {
            echo "<p><a style='";
            if (activeLinkContains("category=" . (int) $option['id']))
                echo "color: #025464; font-weight:bold;";
            echo "' href='/pd-nayna/home?category={$option['id']}'>{$option['name']}</a></p>";
        }
        ?>
    </section>
</aside>