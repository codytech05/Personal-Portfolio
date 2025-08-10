<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects - Om Kumar Panchal</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .projects-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .back-btn {
            position: fixed;
            top: 2rem;
            left: 2rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            text-decoration: none;
            transition: all 0.3s ease;
            z-index: 1000;
        }
        
        .back-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
            margin-top: 4rem;
        }
        
        .project-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 20px;
            padding: 0;
            transition: all 0.4s ease;
            overflow: hidden;
            position: relative;
        }
        
        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            border-color: rgba(255, 215, 0, 0.3);
        }
        
        .project-image {
            width: 100%;
            height: 220px;
            overflow: hidden;
            position: relative;
        }
        
        .project-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.4s ease;
        }
        
        .project-card:hover .project-image img {
            transform: scale(1.1);
        }
        
        .project-image-placeholder {
            width: 100%;
            height: 220px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 3.5rem;
            position: relative;
        }
        
        .project-image-placeholder::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0.05) 100%);
        }
        
        .project-content {
            padding: 1.5rem;
        }
        
        .project-title {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: white;
            line-height: 1.3;
        }
        
        .project-technologies {
            display: flex;
            flex-wrap: wrap;
            gap: 0.6rem;
            margin-bottom: 1.5rem;
        }
        
        .tech-tag {
            background: linear-gradient(135deg, rgba(255, 215, 0, 0.15) 0%, rgba(255, 215, 0, 0.25) 100%);
            color: #ffd700;
            padding: 0.4rem 0.9rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            border: 1px solid rgba(255, 215, 0, 0.3);
            transition: all 0.3s ease;
        }
        
        .tech-tag:hover {
            background: rgba(255, 215, 0, 0.3);
            transform: translateY(-1px);
        }
        
        .github-link {
            display: inline-flex;
            align-items: center;
            gap: 0.6rem;
            background: linear-gradient(135deg, #333 0%, #555 100%);
            color: white;
            text-decoration: none;
            font-weight: 600;
            padding: 0.8rem 1.5rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 0.95rem;
        }
        
        .github-link:hover {
            background: linear-gradient(135deg, #444 0%, #666 100%);
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            color: #ffd700;
        }
        
        .github-link i {
            font-size: 1.1rem;
        }
        
        .page-title {
            text-align: center;
            font-size: 3.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background: linear-gradient(135deg, #ffd700 0%, #ffed4e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .page-subtitle {
            text-align: center;
            font-size: 1.3rem;
            opacity: 0.9;
            margin-bottom: 3rem;
            color: rgba(255, 255, 255, 0.9);
        }
        
        @media (max-width: 768px) {
            .projects-grid {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
            
            .page-title {
                font-size: 2.5rem;
            }
            
            .project-content {
                padding: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-btn">
        <i class="fas fa-arrow-left"></i> Back to Portfolio
    </a>
    
    <div class="projects-container">
        <h1 class="page-title">My Projects</h1>
        <p class="page-subtitle">Here are some of the projects I've worked on</p>
        
        <div class="projects-grid">
            <?php foreach ($projects as $project): ?>
            <div class="project-card">
                <?php if (isset($project['image']) && file_exists($project['image'])): ?>
                <div class="project-image">
                    <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                </div>
                <?php else: ?>
                <div class="project-image-placeholder">
                    <i class="fas fa-code"></i>
                </div>
                <?php endif; ?>
                
                <div class="project-content">
                    <h3 class="project-title"><?php echo htmlspecialchars($project['title']); ?></h3>
                    
                    <div class="project-technologies">
                        <?php foreach ($project['technologies'] as $tech): ?>
                        <span class="tech-tag"><?php echo htmlspecialchars($tech); ?></span>
                        <?php endforeach; ?>
                    </div>
                    
                    <?php if (isset($project['github']) && $project['github'] !== '#'): ?>
                    <a href="<?php echo htmlspecialchars($project['github']); ?>" class="github-link" target="_blank">
                        <i class="fab fa-github"></i> View on GitHub
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 