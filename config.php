<?php
// Portfolio Configuration File
// Update this file to customize your portfolio information

// Personal Information
$config = [
    'name' => 'Om Kumar Panchal',
    'title' => 'DevOps Enthusiast | AWS Cloud Essential Certificate |  NDG Linux Essentials ',
    'email' => 'omkumar7009@gmail.com',
    
    // Social Media Links
    'social' => [
        'whatsapp' => 'https://wa.me/918619685629',
        'linkedin' => 'https://www.linkedin.com/in/ompanchal766/',
        'github' => 'https://github.com/codytech05',
        'email' => 'omkumar7009@gmail.com'
    ],
    
    // Resume Download Link
    'resume_url' => 'Image\final_2.2.pdf',
    
    // Profile Image
    'profile_image' => 'Image\OM_IP.jpg',
    
    // Copyright Information
    'copyright' => 'Built by Om Kumar Panchal © 2025',
    
    // Contact Information
    'contact' => [
        'email' => 'omkumar7009@gmail.com',
        'phone' => '8619685629',
        'location' => 'Mehsana, Gujarat, India'
    ]
];

// Projects Data
$projects = [
    [
        'title' => 'Serverless Web Application Deployment - AWS',
        'technologies' => ['IAM role', 'S3 Bucket', 'DynamoDB', 'Python','Lambda','API Gateway','CloudFront'],
        'image' => 'Image/Project/serverweb.png',
        'github' => 'https://github.com/codytech05/AWS_Serverless_deployment'
    ],
    [
        'title' => 'Login Registration Form - PHP',
        'technologies' => ['PHP', 'Social Authentication', 'CSS', 'JS', 'Validation'],
        'image' => 'Image\Project\Form.png',
        'github' => 'https://github.com/codytech05/LoginRegistration_Form'
    ]
];

// Experience Data
$experiences = [
    [
        'company' => 'Elevate Labs',
        'position' => 'SQL Developer',
        'duration' => 'Jun 2025 | July 2025',
        'description' => 'Working on cloud infrastructure projects, implementing DevOps practices, and developing scalable solutions for enterprise clients.',
        'technologies' => ['MySQL Workbench', 'DB Browser', 'SQL', 'DBMS'],
        'achievements' => [
            'Worked on real-time projects focused on data manipulation, performance tuning, and
 relational database best practices.',
            'Collaborated remotely with mentors to enhance problem-solving and debugging skills in SQL
 development.'
        ]
    ],
    [
        'company' => 'Ganpat University Mehsana',
        'position' => 'Caption Project',
        'duration' => 'Aug 2024 | May 2025',
        'description' => 'Developed web applications and contributed to various software development projects.',
        'technologies' => ['JavaScript', 'React', 'Node.js', 'MongoDB'],
        'achievements' => [
            'Built responsive web applications using modern frameworks',
            'Collaborated with cross-functional teams on agile projects',
            'Mentored junior developers and conducted code reviews'
        ]
    ]
];

// Certifications Data
$certifications = [
    [
        'name' => 'AWS Cloud Practitioner Essentials - AWS',
        'logo' => 'Image/certificate/AWS_cloud_essential.png'
    ],
    [
        'name' => 'NDG Linux Essentials - Cisco',
        'logo' => 'Image/certificate/NDG Linux Essential.png'
    ],
    [
        'name' => 'Cybersecurity Analyst Job Simulation - Forage',
        'logo' => 'Image/certificate/Cyber security.png'
    ],
    [
        'name' => 'Data Analytics Job Simulation - Deloitte',
        'logo' => 'Image/certificate/Data Analytics.png'
    ]
];

// Helper function to safely output data
function safe_output($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// Helper function to get current year
function get_current_year() {
    return date('Y');
}
?> 