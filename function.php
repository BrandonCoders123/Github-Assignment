<?php
require_once 'theme.php';

$dbFile = "data.json";
$submissions = [];

if (file_exists($dbFile)) {
    $submissions = json_decode(file_get_contents($dbFile), true);
    if (!is_array($submissions)) {
        $submissions = [];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $theme['site_title']; ?> - Submissions</title>
    <style>
        <?php echo getThemeStyles($theme); ?>
        
        .submissions-container {
            padding: <?php echo $theme['spacing_large']; ?>;
        }
        
        .submission-card {
            background-color: <?php echo $theme['card_background']; ?>;
            border-radius: <?php echo $theme['border_radius']; ?>;
            padding: <?php echo $theme['spacing_medium']; ?>;
            margin-bottom: <?php echo $theme['spacing_medium']; ?>;
        }
        
        .submission-card h3 {
            color: <?php echo $theme['primary_color']; ?>;
            margin-bottom: <?php echo $theme['spacing_small']; ?>;
        }
        
        .submission-card p {
            color: <?php echo $theme['text_muted']; ?>;
            margin-bottom: 5px;
        }
        
        .submission-card strong {
            color: <?php echo $theme['text_color']; ?>;
        }
        
        .no-submissions {
            text-align: center;
            padding: <?php echo $theme['spacing_large']; ?>;
            color: <?php echo $theme['text_muted']; ?>;
        }
    </style>
</head>
<body>

<nav class="icon-bar">
    <a href="index.php" class="icon"><span>📝</span>Form</a>
    <a href="jack.php" class="icon"><span>🎮</span>Home</a>
    <a href="function.php" class="icon"><span>📊</span>Submissions</a>
</nav>

<div class="submissions-container">
    <h2>All Submissions</h2>
    
    <?php if (empty($submissions)): ?>
        <div class="no-submissions">
            <p>No submissions yet. <a href="index.php">Fill out the form</a> to add one!</p>
        </div>
    <?php else: ?>
        <?php foreach ($submissions as $index => $entry): ?>
            <div class="submission-card">
                <h3><?php echo htmlspecialchars($entry['first_name'] . ' ' . $entry['last_name']); ?></h3>
                <p><strong>Date of Birth:</strong> <?php echo htmlspecialchars($entry['date_of_birth']); ?></p>
                <p><strong>Gender:</strong> <?php echo htmlspecialchars($entry['gender']); ?> (<?php echo htmlspecialchars($entry['pronouns']); ?>)</p>
                <p><strong>Hobbies:</strong> <?php echo htmlspecialchars($entry['hobbies']); ?></p>
                <p><strong>Likes:</strong> <?php echo htmlspecialchars($entry['likes']); ?></p>
                <p><strong>Dislikes:</strong> <?php echo htmlspecialchars($entry['dislikes']); ?></p>
                <p><strong>Job:</strong> <?php echo htmlspecialchars($entry['job']); ?></p>
                <p><strong>College:</strong> <?php echo htmlspecialchars($entry['college']); ?></p>
                <p><strong>GPA:</strong> <?php echo htmlspecialchars($entry['gpa']); ?></p>
                <p><strong>BFF:</strong> <?php echo htmlspecialchars($entry['bff']); ?></p>
                <p><strong>Zodiac:</strong> <?php echo htmlspecialchars($entry['zodiac']); ?></p>
                <p><strong>Sports:</strong> <?php echo htmlspecialchars($entry['sports']); ?></p>
                <p><strong>Favorite Food:</strong> <?php echo htmlspecialchars($entry['fav_food']); ?></p>
                <p><strong>Least Favorite Food:</strong> <?php echo htmlspecialchars($entry['least_fav_food']); ?></p>
                <p><strong>Height:</strong> <?php echo htmlspecialchars($entry['height']); ?></p>
                <p><strong>Favorite Pet:</strong> <?php echo htmlspecialchars($entry['fav_pet']); ?></p>
                <p><strong>Favorite Place:</strong> <?php echo htmlspecialchars($entry['fav_place']); ?></p>
                <p><strong>Favorite Song:</strong> <?php echo htmlspecialchars($entry['fav_song']); ?></p>
                <p><strong>Submitted:</strong> <?php echo htmlspecialchars($entry['submitted_at']); ?></p>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

</body>
</html>
