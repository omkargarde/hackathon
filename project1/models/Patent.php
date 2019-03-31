<?php
  class Patent {
    // DB stuff
    private $conn;
    private $table = 'faculty';

    // Post Properties
    public $id;
    public $name;
    public $address;
    public $patent_id;
    public $patent_pi;
    public $patent_budget;
    public $patent_status;
    public $patent_month;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Posts
    public function readALlPatent() {
      // Create query
      $query = 'SELECT p.id as patent_id,
                p.pi as patent_pi,
                p.budget as patent_budget,
                p.status as patent_status,
                p.month as patent_month,
                s.id,s.name
                FROM ' . $this->table . ' s
                LEFT JOIN
                patent p ON p.staff_id = s.id';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    public function getSinglePatent($id)
    {
      $query = 'SELECT p.id as patent_id,
                p.pi as patent_pi,
                p.budget as patent_budget,
                p.status as patent_status,
                p.month as patent_month,
                s.id,s.name
                FROM ' . $this->table . ' s
                LEFT JOIN
                patent p ON p.staff_id = s.id WHERE s.id ='.$id.'';

      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

  }
