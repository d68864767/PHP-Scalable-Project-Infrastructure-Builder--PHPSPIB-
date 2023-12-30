```php
<?php
class View {
    public function render($viewName, $data = []) {
        if (file_exists("views/{$viewName}.php")) {
            include "views/{$viewName}.php";
        } else {
            throw new Exception("View {$viewName} not found");
        }
    }
}
?>
```
