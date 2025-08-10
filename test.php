<?php
// Simple test file to verify PHP is working
echo "<h1>PHP Portfolio Test</h1>";
echo "<p>If you can see this, PHP is working correctly!</p>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Current Date: " . date('Y-m-d H:i:s') . "</p>";

// Test configuration
if (file_exists('config.php')) {
    echo "<p style='color: green;'>✓ Configuration file found</p>";
} else {
    echo "<p style='color: red;'>✗ Configuration file not found</p>";
}

// Test required extensions
$required_extensions = ['json', 'mbstring'];
foreach ($required_extensions as $ext) {
    if (extension_loaded($ext)) {
        echo "<p style='color: green;'>✓ $ext extension loaded</p>";
    } else {
        echo "<p style='color: red;'>✗ $ext extension not loaded</p>";
    }
}

echo "<p><a href='index.php'>Go to Portfolio</a></p>";
?> 