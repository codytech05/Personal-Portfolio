<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo safe_output($config['name']); ?> - Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="profile-section">
            <div class="profile-image">
                <img src="<?php echo safe_output($config['profile_image']); ?>" alt="<?php echo safe_output($config['name']); ?>">
            </div>
            
            <h1 class="name"><?php echo safe_output($config['name']); ?></h1>
            
            <p class="title"><?php echo safe_output($config['title']); ?></p>
            
            <div class="social-icons">
                <a href="<?php echo safe_output($config['social']['whatsapp']); ?>" class="social-icon whatsapp" target="_blank">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="<?php echo safe_output($config['social']['linkedin']); ?>" class="social-icon linkedin" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="<?php echo safe_output($config['social']['github']); ?>" class="social-icon github" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="<?php echo safe_output($config['social']['email']); ?>" class="social-icon email">
                    <i class="fas fa-envelope"></i>
                </a>
            </div>
            
            <div class="action-buttons">
                <a href="<?php echo safe_output($config['resume_url']); ?>" class="btn" download>Download Resume</a>
                <a href="projects.php" class="btn">Projects</a>
                <a href="experience.php" class="btn">Experience</a>
                <a href="certifications.php" class="btn">Certifications</a>
            </div>
        </div>
        
        <footer>
            <p><?php echo safe_output($config['copyright']); ?></p>
        </footer>
    </div>
</body>
</html> 