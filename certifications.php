<?php include 'config.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certifications - <?php echo safe_output($config['name']); ?></title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .certifications-container {
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
        
        .certifications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 4rem;
        }
        
        .certification-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
            aspect-ratio: 1.4;
        }
        
        .certification-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        
        .certificate-image-container {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background: linear-gradient(45deg, #667eea, #764ba2);
        }
        
        .certificate-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .certification-card:hover .certificate-image {
            transform: scale(1.05);
        }
        
        .certificate-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .certification-card:hover .certificate-overlay {
            opacity: 1;
        }
        
        .certificate-name {
            color: white;
            font-size: 1.3rem;
            font-weight: 600;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
            padding: 1rem;
            line-height: 1.4;
        }
        
        .no-image-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(45deg, #667eea, #764ba2);
            color: white;
            font-size: 4rem;
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
        
        .stats-section {
            display: flex;
            justify-content: center;
            gap: 3rem;
            margin-bottom: 3rem;
            flex-wrap: wrap;
        }
        
        .stat-item {
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 1.5rem;
            min-width: 150px;
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: #ffd700;
            margin-bottom: 0.5rem;
        }
        
        .stat-label {
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.9rem;
        }
        
        @media (max-width: 768px) {
            .certifications-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
                gap: 1.5rem;
            }
            
            .certification-card {
                margin-bottom: 1rem;
            }
            
            .page-title {
                font-size: 2rem;
            }
            
            .certificate-name {
                font-size: 1.1rem;
            }
        }
    </style>
</head>
<body>
    <a href="index.php" class="back-btn">
        <i class="fas fa-arrow-left"></i> Back to Portfolio
    </a>
    
    <div class="certifications-container">
        <h1 class="page-title">Certifications</h1>
        <p class="page-subtitle">Professional certifications and achievements</p>
        

        
        <div class="certifications-grid">
            <?php foreach ($certifications as $cert): ?>
            <div class="certification-card">
                <div class="certificate-image-container">
                    <?php if (isset($cert['logo']) && file_exists($cert['logo'])): ?>
                        <img src="<?php echo htmlspecialchars($cert['logo']); ?>" alt="<?php echo htmlspecialchars($cert['name']); ?>" class="certificate-image">
                    <?php else: ?>
                        <div class="no-image-placeholder">
                            <i class="fas fa-certificate"></i>
                        </div>
                    <?php endif; ?>
                    <div class="certificate-overlay">
                        <div class="certificate-name"><?php echo htmlspecialchars($cert['name']); ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html> 