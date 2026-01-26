<?php
require_once '../theme.php';

$dbFile = "../data.json";
$weaver = null;

if (file_exists($dbFile)) {
    $data = json_decode(file_get_contents($dbFile), true);
    if (is_array($data)) {
        foreach ($data as $entry) {
            if (isset($entry['last_name']) && $entry['last_name'] === 'Weaver') {
                $weaver = $entry;
                break;
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $theme['site_title']; ?> - Jack Weaver</title>
    <style>
        <?php echo getThemeStyles($theme); ?>
        
        .profile-section {
            padding: <?php echo $theme['spacing_large']; ?> 60px;
        }
        
        .profile-card {
            background-color: <?php echo $theme['card_background']; ?>;
            border-radius: <?php echo $theme['border_radius']; ?>;
            padding: <?php echo $theme['spacing_large']; ?>;
            max-width: 800px;
            margin: 0 auto;
        }
        
        .profile-header {
            text-align: center;
            margin-bottom: <?php echo $theme['spacing_large']; ?>;
            padding-bottom: <?php echo $theme['spacing_medium']; ?>;
            border-bottom: 1px solid <?php echo $theme['border_color']; ?>;
        }
        
        .profile-header h1 {
            color: <?php echo $theme['primary_color']; ?>;
            font-size: 2.5rem;
            margin-bottom: 10px;
        }
        
        .profile-header .subtitle {
            color: <?php echo $theme['text_muted']; ?>;
            font-size: 1.1rem;
        }
        
        .profile-details {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: <?php echo $theme['spacing_medium']; ?>;
        }
        
        .detail-group {
            background-color: <?php echo $theme['background_color']; ?>;
            padding: <?php echo $theme['spacing_small']; ?>;
            border-radius: <?php echo $theme['border_radius']; ?>;
        }
        
        .detail-group h3 {
            color: <?php echo $theme['primary_color']; ?>;
            font-size: 0.9rem;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        
        .detail-group p {
            color: <?php echo $theme['text_color']; ?>;
            font-size: 1.1rem;
        }
        
        .not-found {
            text-align: center;
            padding: <?php echo $theme['spacing_large']; ?>;
            color: <?php echo $theme['text_muted']; ?>;
        }
    </style>
</head>
<body>

<nav class="icon-bar">
    <a href="../index.php" class="icon"><span>🏠</span>Students</a>
    <a href="jack.php" class="icon"><span>🎮</span>Home</a>
    <a href="../submissions.php" class="icon"><span>📊</span>Submissions</a>
</nav>

<section class="profile-section">
    <?php if ($weaver): ?>
        <div class="profile-card">
            <div class="profile-header">
                <h1><?php echo htmlspecialchars($weaver['first_name'] . ' ' . $weaver['last_name']); ?></h1>
                <p class="subtitle"><?php echo htmlspecialchars($weaver['pronouns']); ?> | <?php echo htmlspecialchars($weaver['zodiac']); ?></p>
            </div>
            
            <div class="profile-details">
                <div class="detail-group">
                    <h3>Date of Birth</h3>
                    <p><?php echo htmlspecialchars($weaver['date_of_birth']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Height</h3>
                    <p><?php echo htmlspecialchars($weaver['height']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Hobbies</h3>
                    <p><?php echo htmlspecialchars($weaver['hobbies']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Sports</h3>
                    <p><?php echo htmlspecialchars($weaver['sports']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Likes</h3>
                    <p><?php echo htmlspecialchars($weaver['likes']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Dislikes</h3>
                    <p><?php echo htmlspecialchars($weaver['dislikes']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Dream College</h3>
                    <p><?php echo htmlspecialchars($weaver['college']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>GPA</h3>
                    <p><?php echo htmlspecialchars($weaver['gpa']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Job</h3>
                    <p><?php echo htmlspecialchars($weaver['job']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>BFF</h3>
                    <p><?php echo htmlspecialchars($weaver['bff']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Favorite Food</h3>
                    <p><?php echo htmlspecialchars($weaver['fav_food']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Least Favorite Food</h3>
                    <p><?php echo htmlspecialchars($weaver['least_fav_food']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Favorite Pet</h3>
                    <p><?php echo htmlspecialchars($weaver['fav_pet']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Favorite Place</h3>
                    <p><?php echo htmlspecialchars($weaver['fav_place']); ?></p>
                </div>
                
                <div class="detail-group">
                    <h3>Favorite Song</h3>
                    <p><?php echo htmlspecialchars($weaver['fav_song']); ?></p>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="not-found">
            <h2>Weaver not found</h2>
            <p>No entry with the last name "Weaver" exists in the database.</p>
            <p><a href="index.php">Add a submission</a></p>
        </div>
    <?php endif; ?>
</section>

</body>
</html>
