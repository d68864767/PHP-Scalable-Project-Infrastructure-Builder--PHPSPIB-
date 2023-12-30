```php
<?php
abstract class Controller {
    protected $model;
    protected $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    abstract public function index();
}

class HomeController extends Controller {
    public function index() {
        $data = $this->model->getData();
        $this->view->render('home', $data);
    }
}

class AboutController extends Controller {
    public function index() {
        $data = $this->model->getData();
        $this->view->render('about', $data);
    }
}

class ContactController extends Controller {
    public function index() {
        $data = $this->model->getData();
        $this->view->render('contact', $data);
    }
}
?>
```
