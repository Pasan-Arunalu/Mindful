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

</head>

<body>

    <div class="container-fluid">
        <div class="head">
            Explore Our Communities
        </div>
        <div class="des">
            Connect with others who share similar experiences and challenges, <br>
            share insights and advice, and participate in group challenges or activities.
        </div>
        <div class="wrapper">
            <div class="row row-cols-1 row-cols-md-3 g-3">
                <?php
                $query = "SELECT com_id, com_name, image FROM communities";
                $result = $conn->query($query);

                // Check if there are results
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="col">
                                <div class="card">
                                    <img src="' . htmlspecialchars($row["image"]) . '" class="card-img-top" alt="Community Image">
                                    <div class="card-body">
                                        <h5 class="card-title">' . htmlspecialchars($row["com_name"]) . '</h5>
                                        <a href="comArticle.php?com_id=' . htmlspecialchars($row["com_id"]) . '" class="btn btn-primary">Explore</a>
                                    </div>
                                </div>
                              </div>';
                    }
                } else {
                    echo '<p>No communities found.</p>';
                }

                // Close connection
                $conn->close();
                ?>
            </div>
        </div>

        <div class="wrapper2">
            <p>Each of these communities has a group/community of people who have similar insights/ideas to 
              share, related blogs, articles, and all resources in a single place. Be responsible and 
              make the community a safe place for everyone who needs help.</p>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
