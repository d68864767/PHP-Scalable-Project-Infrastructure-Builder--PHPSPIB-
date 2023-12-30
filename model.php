```php
<?php
class Model {
    private $connection;

    public function __construct() {
        $this->connectDB();
    }

    private function connectDB() {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function query($sql) {
        $result = $this->connection->query($sql);

        if ($result === TRUE) {
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->connection->error;
            return false;
        }
    }

    public function select($sql) {
        $result = $this->connection->query($sql);

        if ($result->num_rows > 0) {
            $data = [];
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return [];
        }
    }

    public function __destruct() {
        $this->connection->close();
    }
}
?>
```
