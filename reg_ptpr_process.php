<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $fName = $_POST['fName'];
        $lName = $_POST['lName'];
        $mName = $_POST['mName'];
        $mncpl = $_POST['mncpl'];
        $brgy = $_POST['brgy'];
        $conNum = $_POST['conNum'];
        $prov = $_POST['cprov'];
        $brgy_loc = $_POST['brgy_loc'];
        $mncpl_loc = $_POST['mncpl_loc'];
        $prov_loc = $_POST['prov_loc'];
        $taxDecNum = $_POST['taxDecNum'];
        $totArea = $_POST['totArea'];
        $totAreaPlant = $_POST['totAreaPlant'];
        $species = $_POST['species'];
        $quantity = $_POST['quantity'];
        $volProd = $_POST['volProd'];
        $taxDec = $_POST['taxDec'];
        $pow_Atty = $_POST['powAtty'];
        
    // Server Details
    include 'db_connect.php';

    // Check for duplicate username and email
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO ptpr_registration (fName, lName, mName, mncpl, brgy, conNum, prov, brgy_loc, mncpl_loc, prov_loc, taxDecNum, totArea, totAreaPlant, species, quantity, volProd, taxDec, pow_Atty) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fName, $lName, $mName, $mncpl, $brgy, $conNum, $prov, $brgy_loc, $mncpl_loc, $prov_loc, $taxDecNum, $totArea, $totAreaPlant, $species, $quantity, $volProd, $taxDec, $pow_Atty]);
        
        echo "New Record created Successfully";
        header("Location: ". $_SERVER['PHP_SELF']);
        
    } catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

?>
