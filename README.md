# Om Kumar Panchal - Portfolio Website

A modern, responsive portfolio website built with PHP, featuring a clean design with gradient backgrounds and interactive elements.

## Features

- **Modern Design**: Clean, professional layout with gradient backgrounds
- **Responsive**: Fully responsive design that works on all devices
- **Interactive Elements**: Hover effects and smooth transitions
- **Multiple Pages**: 
  - Home page with profile and social links
  - Projects showcase
  - Work experience timeline
  - Professional certifications
- **PHP Backend**: Dynamic content generation with PHP
- **Font Awesome Icons**: Professional iconography throughout

## File Structure

```
PORT/
├── index.php              # Main portfolio page
├── projects.php           # Projects showcase page
├── experience.php         # Work experience page
├── certifications.php     # Certifications page
├── styles.css            # Main stylesheet
├── README.md             # This file

```

## Setup Instructions

### Prerequisites

1. **PHP Server**: You need a PHP-enabled web server. You can use:
   - **XAMPP** (Windows/Linux/Mac)
   - **WAMP** (Windows)
   - **MAMP** (Mac)
   - **Built-in PHP server** (for development)

### Installation

1. **Clone or Download**: Place all files in your web server's document root directory
   - For XAMPP: `C:\xampp\htdocs\portfolio\`
   - For WAMP: `C:\wamp\www\portfolio\`
   - For built-in PHP server: Any directory

2. **Add Profile Image**: 
   - Add your profile picture as `profile.jpg` in the root directory
   - Recommended size: 300x300 pixels or larger
   - Format: JPG, PNG, or WebP

3. **Start the Server**:
   
   **Option A: Built-in PHP Server (Recommended for Development)**
   ```bash
   # Navigate to the project directory
   cd /path/to/your/portfolio
   
   # Start PHP development server
   php -S localhost:8000
   ```
   
   **Option B: XAMPP/WAMP/MAMP**
   - Start your web server (Apache)
   - Navigate to `http://localhost/portfolio/` in your browser

4. **Access the Website**:
   - Open your browser and go to `http://localhost:8000` (if using built-in server)
   - Or `http://localhost/portfolio/` (if using XAMPP/WAMP)

## Customization

### Personal Information
Edit the following files to customize your information:

- **`index.php`**: Update name, title, and social links
- **`projects.php`**: Modify the `$projects` array with your projects
- **`experience.php`**: Update the `$experiences` array with your work history
- **`certifications.php`**: Edit the `$certifications` array with your certifications

### Styling
- **`styles.css`**: Modify colors, fonts, and layout
- **Gradient Background**: Change the gradient in the `body` selector
- **Colors**: Update the color scheme by modifying CSS variables

### Social Links
Update the social media links in `index.php`:
```html
<a href="https://youtube.com/yourchannel" class="social-icon youtube">
<a href="https://linkedin.com/in/yourprofile" class="social-icon linkedin">
<a href="https://github.com/yourusername" class="social-icon github">
<a href="mailto:your.email@example.com" class="social-icon email">
```

## Features Breakdown

### Home Page (`index.php`)
- Circular profile image
- Name and professional title
- Social media icons with hover effects
- Action buttons for navigation
- Responsive design

### Projects Page (`projects.php`)
- Grid layout for project cards
- Technology tags
- Project descriptions
- Hover animations

### Experience Page (`experience.php`)
- Timeline-style layout
- Company information
- Technology stacks used
- Key achievements list

### Certifications Page (`certifications.php`)
- Certification cards with logos
- Credential IDs and validity dates
- Skills covered by each certification
- Statistics section

## Browser Compatibility

- ✅ Chrome (recommended)
- ✅ Firefox
- ✅ Safari
- ✅ Edge
- ⚠️ Internet Explorer (limited support)

## Performance Optimizations

- **Minified CSS**: Consider minifying `styles.css` for production
- **Image Optimization**: Compress profile image for faster loading
- **CDN**: Font Awesome is loaded from CDN for better performance

## Security Considerations

- **Input Sanitization**: All user data is properly escaped using `htmlspecialchars()`
- **XSS Prevention**: PHP output is sanitized
- **File Upload**: If adding file upload functionality, implement proper validation

## Deployment

### Local Development
```bash
php -S localhost:8000
```

### Production Deployment
1. Upload files to your web hosting server
2. Ensure PHP is enabled on your hosting
3. Update file permissions if necessary
4. Test all functionality

### Recommended Hosting
- **Shared Hosting**: cPanel-based hosts with PHP support
- **VPS**: DigitalOcean, AWS, or similar
- **Cloud Platforms**: Heroku, Vercel (with PHP support)

## Troubleshooting

### Common Issues

1. **Images not loading**:
   - Check file paths
   - Ensure image files exist
   - Verify file permissions

2. **PHP errors**:
   - Check PHP version (7.0+ recommended)
   - Enable error reporting for debugging
   - Verify PHP is installed and running

3. **Styling issues**:
   - Clear browser cache
   - Check CSS file path
   - Verify Font Awesome CDN is accessible

### Error Reporting (Development)
Add this to the top of PHP files for debugging:
```php
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
```

## License

This project is open source and available under the MIT License.

## Support

For issues or questions:
1. Check the troubleshooting section
2. Verify your PHP installation
3. Test with different browsers
4. Check browser console for errors

---

**Built with ❤️ using PHP, HTML, CSS, and Font Awesome** 
