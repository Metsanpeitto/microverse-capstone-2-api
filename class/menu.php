<?php
class Menu
{

    // Connection
    private $conn;

    // Table
    private $db_table = "Menu";

    // Columns
    public $id;
    public $name;
    public $type;
    public $price;
    public $ingredients;
    public $description;
    public $created;

    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // GET ALL
    public function getMenu()
    {
        $sqlQuery = "SELECT id, name, type, price, ingredients, description, created FROM " . $this->db_table . "";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
    }

    // CREATE
    public function createMenu()
    {
        $sqlQuery = "INSERT INTO
                        " . $this->db_table . "
                    SET
                        name = :name, 
                        type = :type, 
                        price = :price, 
                        ingredients = :ingredients,
                        description = :description, 
                        created = :created";

        $stmt = $this->conn->prepare($sqlQuery);

        // sanitize
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->type = htmlspecialchars(strip_tags($this->type));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->ingredients = htmlspecialchars(strip_tags($this->ingredients));
        $this->description = htmlspecialchars(strip_tags($this->description));
        $this->created = htmlspecialchars(strip_tags($this->created));

        // bind data
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":ingredients", $this->ingredients);
        $stmt->bindParam(":description", $this->description);
        $stmt->bindParam(":created", $this->created);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // READ single
    public function getSingleMenu()
    {
        $sqlQuery = "SELECT
                        id, 
                        name, 
                       type,
                       price,
                       ingredients,
                       description, 
                        created
                      FROM
                        " . $this->db_table . "
                    WHERE 
                       id = ?
                    LIMIT 0,1";

        $stmt = $this->conn->prepare($sqlQuery);

        $stmt->bindParam(1, $this->id);

        $stmt->execute();

        $dataRow = $stmt->fetch(PDO::FETCH_ASSOC);

        $this->name = $dataRow['name'];
        $this->email = $dataRow['email'];
        $this->age = $dataRow['age'];
        $this->designation = $dataRow['designation'];
        $this->created = $dataRow['created'];
    }

    // UPDATE
    public function updateMenu()
    {
        $sqlQuery = "UPDATE
                        " . $this->db_table . "
                    SET
                        name = :name, 
                        email = :email, 
                        age = :age, 
                        designation = :designation, 
                        created = :created
                    WHERE 
                        id = :id";

        $stmt = $this->conn->prepare($sqlQuery);

        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->age = htmlspecialchars(strip_tags($this->age));
        $this->designation = htmlspecialchars(strip_tags($this->designation));
        $this->created = htmlspecialchars(strip_tags($this->created));
        $this->id = htmlspecialchars(strip_tags($this->id));

        // bind data
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":age", $this->age);
        $stmt->bindParam(":designation", $this->designation);
        $stmt->bindParam(":created", $this->created);
        $stmt->bindParam(":id", $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    // DELETE
    function deleteMenu()
    {
        $sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ?";
        $stmt = $this->conn->prepare($sqlQuery);

        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }
}
