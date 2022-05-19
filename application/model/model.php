<?php
class Model {

    public $pdo;

	public function __construct() {
        // CONNECTING TO DATABASE
        $dsn = DATABASE_PATH;
        $user = 'user';
        $pass = 'password';
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
        return $this->pdo->prepare("SELECT * FROM BRANDS")->execute()->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getModelData() {
        return $this->pdo->prepare("SELECT * FROM MODELS")->execute()->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getDisplayCards($page) {
        $sql = "SELECT * FROM DISPLAY_CARDS dc LEFT JOIN BRANDS b ON b.id = dc.brand_id WHERE page = :page";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(["page"=>$page]);
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }



    // public function dbCreateTables() {
    //     try {
    //         $this->pdo->exec("
    //             CREATE TABLE IF NOT EXISTS Brands (
    //                 id INTEGER UNSIGNED UNIQUE AUTO_INCREMENT PRIMARY KEY,
    //                 name TEXT UNIQUE
    //             )"
    //         );

    //         $this->pdo->exec("
    //             CREATE TABLE IF NOT EXISTS Model_3D (
    //                 id INTEGER UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //                 brand_id INTEGER,
    //                 FOREIGN KEY("brand_id") REFERENCES "BRANDS"("id"),
    //                 x3dModelTitle TEXT,
    //                 x3dCreationMethod TEXT,
    //                 modelTitle TEXT,
    //                 modelSubtitle TEXT,
    //                 modelDescription TEXT
    //             )"
    //         );
    //     }
    //     catch (PDOException $e) {
    //         print new Exception($e->getMessage());
    //     }
    // }

}
?>