```php
<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'database_name');

// API configuration
define('API_KEY', require_once 'api_key.php');

// Autoload classes
spl_autoload_register(function ($class_name) {
    $file = strtolower($class_name) . '.php';
    if(file_exists($file)) {
        require_once $file;
    } else {
        throw new Exception("Unable to load $file.");
    }
});

// Error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
```
