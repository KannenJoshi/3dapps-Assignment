<?php    
    $dsn = '/~kj265/3dapp/assignment/db/3dapp.db';
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
        PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
    ];

    try {
        $pdo = new PDO("sqlite:".$dsn);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        // foreach ($options as $k=>$v) {
        //     $this->pdo->setAttribute($k,$v);
        // }

        $sql = "SELECT * FROM HOME h LEFT JOIN BRANDS b ON b.id = h.brand_id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($results);
        $pdo = NULL;
    }
    catch (PDOException $e) {
        echo new Exception($e->getMessage());
    }
?>