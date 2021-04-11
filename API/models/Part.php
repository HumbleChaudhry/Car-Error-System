<?php
class Part
{
    //DB stuff
    private $conn;
    private $table = 'part';

    //Attributes
    public $id;
    public $name;
    public $price;
    public $rating;
    public $cat_title;
    public $retailer;

    //Constructor
    public function __construct($db)
    {
        $this->conn = $db;
    }

    //Get all
    public function getParts()
    {
        $query = 'CALL read_all_parts()';

        //Prepare statment
        $stmt = $this->conn->prepare($query);

        //Execute query
        $stmt->execute();

        return $stmt;
    }

    //Get one part
    public function getOnePart()
    {
        $query = 'CALL read_one_part(?,?)';

        //Prepare statment
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->id);
        $stmt->bindParam(2, $this->name);

        //Execute query
        $stmt->execute();

        return $stmt;
    }
    public function insertPart()
    {
        $query = 'CALL insert_part(?,?,?,?,?)';


        //Prepare statment
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->id);
        $stmt->bindParam(2, $this->name);
        $stmt->bindParam(3, $this->price);
        $stmt->bindParam(4, $this->cat_title);
        $stmt->bindParam(5, $this->retailer);

        //Execute query
        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function deletePart()
    {
        $query = 'CALL delete_part(?,?)';

        //Prepare statment
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(1, $this->id);
        $stmt->bindParam(2, $this->name);


        //Execute query
        $result = $stmt->execute();

        return $result;
    }
}
