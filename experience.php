<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience - Om Kumar Panchal</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .experience-container {
            max-width: 1000px;
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
        }
        
        .back-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
        }
        
        .experience-timeline {
            margin-top: 4rem;
        }
        
        .experience-item {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 2rem;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .experience-item:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .experience-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 1.5rem;
            flex-wrap: wrap;
            gap: 1rem;
        }
        
        .company-info h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #ffd700;
            margin-bottom: 0.5rem;
        }
        
        .position {
            font-size: 1.2rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 0.5rem;
        }
        
        .duration {
            background: rgba(255, 215, 0, 0.2);
            color: #ffd700;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        .experience-description {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .technologies-section {
            margin-bottom: 1.5rem;
        }
        
        .technologies-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            margin-bottom: 1rem;
        }
        
        .technologies-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
        }
        
        .tech-tag {
            background: rgba(255, 215, 0, 0.2);
            color: #ffd700;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }
        
        .achievements-section h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            margin-bottom: 1rem;
        }
        
        .achievements-list {
            list-style: none;
            padding: 0;
        }
        
        .achievements-list li {
            color: rgba(255, 255, 255, 0.8);
            margin-bottom: 0.5rem;
            padding-left: 1.5rem;
            position: relative;
        }
        
        .achievements-list li:before {
            content: "✓";
            color: #ffd700;
            font-weight: bold;
            position: absolute;
            left: 0;
        }
        
        .page-title {
            text-align: center;
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }
        
        .page-subtitle {
            text-align: center;
            font-size: 1.2rem;
            opacity: 0.8;
            margin-bottom: 3rem;
        }
        
        @media (max-width: 768px) {
            .experience-header {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .company-info h3 {
                font-size: 1.5rem;
            }
            
            .position {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-btn">
        <i class="fas fa-arrow-left"></i> Back to Portfolio
    </a>
    
    <div class="experience-container">
        <h1 class="page-title">Work Experience</h1>
        <p class="page-subtitle">My professional journey and achievements</p>
        
        <div class="experience-timeline">
            <?php foreach ($experiences as $experience): ?>
            <div class="experience-item">
                <div class="experience-header">
                    <div class="company-info">
                        <h3><?php echo htmlspecialchars($experience['company']); ?></h3>
                        <p class="position"><?php echo htmlspecialchars($experience['position']); ?></p>
                    </div>
                    <span class="duration"><?php echo htmlspecialchars($experience['duration']); ?></span>
                </div>
                

                
                <div class="technologies-section">
                    <h4 class="technologies-title">Technologies Used:</h4>
                    <div class="technologies-list">
                        <?php foreach ($experience['technologies'] as $tech): ?>
                        <span class="tech-tag"><?php echo htmlspecialchars($tech); ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="achievements-section">
                    <h4>Key Achievements:</h4>
                    <ul class="achievements-list">
                        <?php foreach ($experience['achievements'] as $achievement): ?>
                        <li><?php echo htmlspecialchars($achievement); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 