<?php
session_start();
include("connection.php");

// Validate and sanitize input parameters
// $com_id = isset($_GET['com_id']) ? intval($_GET['com_id']) : 0;
// $article_id = isset($_GET['article_id']) ? intval($_GET['article_id']) : 0;

// if ($com_id <= 0 || $article_id <= 0) {
//     die("Invalid community ID or article ID");
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clicked Article</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/comArticleStyle.css">

</head>
<body>

    <div class="container-fluid">
        <div class="wrapper1">
            <div class="topic">
                <div class="comname">
                    <?php
                    // Prepared statement to fetch community name
                    $stmt = $conn->prepare("SELECT com_name FROM communities WHERE com_id = ?");
                    $stmt->bind_param("i", $com_id);
                    $stmt->execute();
                    $stmt->bind_result($community_name);
                    if ($stmt->fetch()) {
                        echo htmlspecialchars($community_name);
                    } else {
                        echo "Community not found";
                    }
                    $stmt->close();
                    ?>
                </div>
                <div class="btn">
                    <button>Follow Topic</button>
                </div>      
            </div>
            <div class="navi">
                <ul class="nav nav-underline">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" href="#">Feed</a>
                    </li>
                    <li class="nav-item" id="navlink">
                      <a class="nav-link" href="#">Collection</a>
                    </li>
                    <li class="nav-item" id="navlink">
                      <a class="nav-link" href="#">Communities</a>
                    </li>
                  </ul>
            </div>
            <div class="wrapper2">
                <?php
                // Prepared statement to fetch article details
                $stmt = $conn->prepare("SELECT * FROM article WHERE article_id = ?");
                $stmt->bind_param("i", $article_id);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='topic1'>" . htmlspecialchars($row["com_id"]) . "</div>";
                        echo "<div class='topic1' id='t1'>" . htmlspecialchars($row["article_name"]) . "</div>";
                        echo "<div class='topicArt'>
                                <div class='dp'>
                                    <img src='" . htmlspecialchars($row["image"]) . "' alt=''>
                                </div>
                                <div class='wrap'>
                                    <div class='wrap2'>
                                        <div class='t1'>
                                            <p>" . htmlspecialchars($row["User_id"]) . " <span style='margin-left: 50px;'>Follow</span></p>
                                        </div>
                                        <div class='t1'>
                                            Last Update
                                        </div>
                                    </div>
                                </div>
                              </div>";
                        echo "<div class='art'>
                                <div class='cover'>
                                    <img src='" . htmlspecialchars($row["image"]) . "' alt=''>
                                </div>
                                <div class='content'>
                                    <p>" . htmlspecialchars($row["content"]) . "</p>
                                </div>
                              </div>";
                    }
                } else {
                    echo "Article not found";
                }
                $stmt->close();
                $conn->close();
                ?>
            </div>
        </div>
    </div>
    
</body>
</html>
