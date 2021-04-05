<?php
class Car
{
    //DB stuff
    private $conn;
    private $table = 'car';

    //Car Attributes
    public $id;
    public $make;
    public $model;
    public $year;

    //Constructor
    public function __construct($db)
    {
        $this->conn = $db;
    }

    //Get Cars
    public function read()
    {
        $query = 'CALL read_all_cars()';

        //Prepare statment
        $stmt = $this->conn->prepare($query);

        //Execute query
        $stmt->execute();

        return $stmt;
    }

    //Get Single car
    public function read_single()
    {
        $query = 'CALL read_single_car(?,?,?)';

        //Prepare statment
        $stmt = $this->conn->prepare($query);

        //Bind inputs
        $stmt->bindParam(1, $this->make);
        $stmt->bindParam(2, $this->model);
        $stmt->bindParam(3, $this->year);

        //Execute query
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        //Set properties
        $this->make = $row['make'] ?? 'nil';
        $this->model = $row['model'] ?? 'nil';
        $this->year = $row['year'] ?? 'nil';

        return $stmt;
    }
}
