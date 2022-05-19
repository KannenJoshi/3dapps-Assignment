<?php
class Model {

    public $pdo;

	public function __construct() {
        // CONNECTING TO DATABASE
        $dsn = DATABASE_PATH;
        $options = [
			PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
			PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
		];

        try {
            $this->pdo = new PDO("sqlite:".$dsn);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
            // foreach ($options as $k=>$v) {
            //     $this->pdo->setAttribute($k,$v);
            // }
        }
        catch (PDOException $e) {
            echo new Exception($e->getMessage());
        }
	}


    public function getBrands() {
        //Get from BRANDS table, with FK for each
        $res = json_encode($this->pdo->prepare("SELECT * FROM BRANDS")->execute()->fetchAll(PDO::FETCH_ASSOC));
        $this->pdo = NULL;
        return $res;
    }

    public function getModelData() {
        $res =  json_encode($this->pdo->prepare("SELECT * FROM MODELS")->execute()->fetchAll(PDO::FETCH_ASSOC));
        $this->pdo = NULL;
        return $res;
    }

    public function getDisplayCards() {
        $sql = "SELECT * FROM HOME h LEFT JOIN BRANDS b ON b.id = h.brand_id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $res =  json_encode($results);
        $this->pdo = NULL;
        return $res;
    }

}
?>