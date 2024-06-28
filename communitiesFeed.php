<?php
session_start();
include("connection.php");

// Check if com_id is set in the URL
if (isset($_GET['com_id'])) {
    $com_id = intval($_GET['com_id']); // Convert to integer for safety

    // Fetch community name
    $community_query = "SELECT com_name, com_des FROM communities WHERE com_id = ?";
    $stmt = $conn->prepare($community_query);
    $stmt->bind_param("i", $com_id);
    $stmt->execute();
    $community_result = $stmt->get_result();
    $community = $community_result->fetch_assoc();
    $community_name = $community['com_name'];
    $community_des = $community['com_des'];

    // Fetch articles related to the community
    $article_query = "SELECT article_id, article_name, content, User_id, article_image FROM article WHERE com_id = ?";
    $stmt = $conn->prepare($article_query);
    $stmt->bind_param("i", $com_id);
    $stmt->execute();
    $article_result = $stmt->get_result();

    // Fetch author names and user images
    $authors = [];
    $articles = [];
    while ($article = $article_result->fetch_assoc()) {
        $user_id = $article['User_id'];
        if (!array_key_exists($user_id, $authors)) {
            $author_query = "SELECT User_Name, user_image FROM user WHERE User_id = ?";
            $stmt = $conn->prepare($author_query);
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $author_result = $stmt->get_result();
            $author = $author_result->fetch_assoc();
            $authors[$user_id] = [
                'User_Name' => $author['User_Name'],
                'user_image' => $author['user_image']
            ];
        }
        $articles[] = [
            'article_id' => $article['article_id'],
            'article_name' => $article['article_name'],
            'content' => $article['content'],
            'author' => $authors[$user_id]['User_Name'],
            'article_image' => $article['article_image'],
            'user_image' => $authors[$user_id]['user_image']
        ];
    }
    $stmt->close();
} else {
    // Redirect to another page if com_id is not set
    header("Location: index.php");
    exit();
}

function truncate_text($text, $max_length) {
    if (strlen($text) > $max_length) {
        $shortened_text = substr($text, 0, $max_length);
        $last_space = strrpos($shortened_text, " ");
        $shortened_text = substr($shortened_text, 0, $last_space);
        $shortened_text .= '...';
        return $shortened_text;
    } else {
        return $text;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communities Feed</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&family=Sue+Ellen+Francisco&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="css/comFeedstyle.css">

</head>
<body>

<?php
    include 'navbar.php';
?>
    
    <div class="container-fluid" id="container-fluid">
        <div class="wrapper1">
            <div class="topic">
                <div class="comname">
                    <h3><?php echo htmlspecialchars($community_name); ?></h3> 
                </div>
                <div class="btn">
                    <button>Follow Topic</button>
                </div>      
            </div>
            <div class="navi">
                <ul class="nav nav-underline">
                    <li class="nav-item">
                      <a class="nav-link " id="nav-link" aria-current="page" href="#">Feed</a>
                    </li>
                    <li class="nav-item" id="navlink">
                      <a class="nav-link" id="nav-link" href="#">Collection</a>
                    </li>
                    <li class="nav-item" id="navlink">
                      <a class="nav-link" id="nav-link" href="#">Communities</a>
                    </li>
                  </ul>
            </div>
            <div class="wrapper2">
                <div class="div1">
                    <p><?php echo htmlspecialchars($community_des); ?></p>
                </div>
                <div class="div2">
                    <div class="ft">
                        <h4>Featured</h4>
                    </div>
                    <?php if (empty($articles)): ?>
                        <p>No articles found for this community.</p>
                    <?php else: ?>
                        <?php foreach ($articles as $article): ?>
                            <div class="content">
                                <div class="cover" style="background-image: url('<?php echo htmlspecialchars($article['article_image']); ?>');">
                                </div>
                                <div class="title">
                                    <div class="dp">
                                        <div class="dp2">
                                            <img src="<?php echo htmlspecialchars($article['user_image']); ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="title2">
                                        <div class="author">
                                            <h3><?php echo htmlspecialchars($article['author']); ?></h3>
                                        </div>
                                        <div class="com">
                                            <h4><?php echo htmlspecialchars($community_name); ?></h4>
                                        </div>
                                    </div>
                                </div>
                                <a href="comArticle.php?articleID=<?php echo htmlspecialchars($article['article_id']); ?>" id="article_link">
                                <div class="art">
                                    <div class="title3">
                                        <h5><?php echo htmlspecialchars($article['article_name']); ?></h5>
                                    </div>
                                    <div class="cnt">
                                        <p><?php echo htmlspecialchars(truncate_text($article['content'], 200)); ?></p>
                                        <a href="comArticle.php?articleID=<?php echo htmlspecialchars($article['article_id']); ?>" id="see_more_link">See more</a>
                                    </div>

                                </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
