<?php
session_start();
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Our Communities</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <link rel="stylesheet" href="css/communities1style.css">

  <script type="module" src="https://unpkg.com/@splinetool/viewer@1.8.0/build/spline-viewer.js"></script>

</head>
<body>

<?php include 'navbar.php'; ?>

<div class="container-fluid" id="container-fluid">
  <div class="head">
    Explore Our Communities
  </div>
  <div class="des">
    Connect with others who share similar experiences and challenges, <br>
    share insights and advice, and participate in group challenges or activities.
  </div>
  <div class="wrapper">
    <div class="wrp">
      <div class="row">
        <?php
        $query = "SELECT com_id, com_name, image FROM communities";
        $result = $conn->query($query);
        $count = 0;

        while ($row = $result->fetch_assoc()) {
          if ($count % 3 == 0 && $count != 0) {
            echo '</div><div class="row">';
          }
          echo '<div class="col">';
          echo '<div class="colimg">';
          echo '<img src="' . htmlspecialchars($row["image"]) . '" alt="Community Image" class="img-fluid">';
          echo '</div>';
          echo '<div class="col2">';
          echo '<a href="communitiesFeed.php?com_id=' . htmlspecialchars($row["com_id"]) . '">';
          echo '<h4>' . htmlspecialchars($row["com_name"]) . '</h4>';
          echo '</a>';
          echo '</div>';
          echo '</div>';
          $count++;
        }
        ?>
      </div>
    </div>
  </div>
</div>

<div class="wrapper2">
  <p>Each of these communities has a group/community of people who have similar insights/ideas to
    share, related blogs, articles, and all resources in a single place. Be responsible and
    make the community a safe place for everyone who needs help.</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
