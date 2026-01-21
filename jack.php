<?php
require_once 'theme.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $theme['site_title']; ?></title>
    <style>
        <?php echo getThemeStyles($theme); ?>
    </style>
</head>
<body>

<section class="hero">
    <h1>Discover Your Next Favorite Game</h1>
    <p>
        Experience the best in gaming with Xbox. Play the latest titles,
        explore new worlds, and connect with friends.
    </p>
    <button>Join Game Pass</button>
</section>

<nav class="icon-bar">
    <a href="index.php" class="icon"><span>📝</span>Form</a>
    <a href="jack.php" class="icon"><span>🎮</span>Home</a>
    <a href="function.php" class="icon"><span>📊</span>Submissions</a>
</nav>

<section class="content">
    <h2>Featured Content</h2>

    <div class="grid">
        <div class="card">
            <img src="https://via.placeholder.com/400x225" alt="New Releases">
            <div class="card-body">
                <h3>New Releases</h3>
                <p>Explore the newest games available now.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/400x225" alt="Top Rated">
            <div class="card-body">
                <h3>Top Rated</h3>
                <p>Play the highest rated titles on Xbox.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/400x225" alt="Coming Soon">
            <div class="card-body">
                <h3>Coming Soon</h3>
                <p>Get ready for upcoming releases.</p>
            </div>
        </div>

        <div class="card">
            <img src="https://via.placeholder.com/400x225" alt="Game Pass Picks">
            <div class="card-body">
                <h3>Game Pass Picks</h3>
                <p>Hand-picked games included with Game Pass.</p>
            </div>
        </div>
    </div>
</section>

</body>
</html>
