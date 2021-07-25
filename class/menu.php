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
    public $image;

    // Db connection
    public function __construct($db)
    {
        $this->conn = $db;
    }

    // GET ALL
    public function getMenu()
    {
         $sqlQuery = "SELECT
                        id, 
                        name, 
                        type,
                        price,
                        ingredients,                      
                        image,
                        created
                      FROM
                        " . $this->db_table . "             
                    LIMIT 20";
        $stmt = $this->conn->prepare($sqlQuery);
        $stmt->execute();
        return $stmt;
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
                        image,
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
        $this->type = $dataRow['type'];
        $this->price = $dataRow['price'];
        $this->ingredients = $dataRow['ingredients'];
        $this->image = $dataRow['image'];
        $this->created = $dataRow['created'];
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
                        created = :created,
                        image = :image";

        $stmt = $this->conn->prepare($sqlQuery);

        // sanitize
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->type = htmlspecialchars(strip_tags($this->type));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->ingredients = htmlspecialchars(strip_tags($this->ingredients));
        $this->created = htmlspecialchars(strip_tags($this->created));
        $this->image = htmlspecialchars(strip_tags($this->image));

        // bind data
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":ingredients", $this->ingredients);
        $stmt->bindParam(":created", $this->created);
        $stmt->bindParam(":image", $this->image);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }



    // UPDATE
    public function updateMenu()
    {
        $sqlQuery = "UPDATE
                        " . $this->db_table . "
                    SET
                        name = :name, 
                        type = :type, 
                        price = :price, 
                        ingredients = :ingredients, 
                        image = :image,
                        created = :created                     
                    WHERE 
                        id = :id";

        $stmt = $this->conn->prepare($sqlQuery);

        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->type = htmlspecialchars(strip_tags($this->type));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->ingredients = htmlspecialchars(strip_tags($this->ingredients));
        $this->image = htmlspecialchars(strip_tags($this->image));
        $this->created = htmlspecialchars(strip_tags($this->created));


        // bind data
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":type", $this->type);
        $stmt->bindParam(":price", $this->price);
        $stmt->bindParam(":ingredients", $this->ingredients);
        $stmt->bindParam(":image", $this->image);
        $stmt->bindParam(":created", $this->created);


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
