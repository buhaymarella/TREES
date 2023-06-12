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
    include 'profilepage.php';

    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        
    }
    
    
    $uName = $_SESSION['uName'];

    //get ID
    $getID = "select * from users where uName = '$uName'";
    $res = mysqli_query($conn, $getID);
    if(mysqli_num_rows($res) > 0){

        foreach($res as $row){
            $last_id = $row['id'];
        }
        
    }

    //data will be passed on table ini db based on the btn
    if(isset($_POST['draft'])){
        $stmt = $conn->prepare("INSERT INTO ptpr_draft (permit_type, fName, lName, mName, mncpl, brgy, conNum, prov, brgy_loc, mncpl_loc, prov_loc, taxDecNum, totArea, totAreaPlant, species, quantity, volProd, taxDec, pow_Atty, ptpr_id_fk) VALUES ('Private Tree Plantation Registration',?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
    
        $stmt->bind_param("sssssssssssssssssss", $fName, $lName, $mName, $mncpl, $brgy, $conNum, $prov, $brgy_loc, $mncpl_loc, $prov_loc, $taxDecNum, $totArea, $totAreaPlant, $species, $quantity, $volProd, $taxDec, $pow_Atty, $last_id);
    
    
        if ($stmt->execute()) {
            echo "<script>alert('Saved to Draft');</script>";
        } else {
            echo "Registration failed: " . $stmt->error;
        }
    }elseif(isset($_POST['submit'])){
        $stmt = $conn->prepare("INSERT INTO ptpr_registration (permit_type, fName, lName, mName, mncpl, brgy, conNum, prov, brgy_loc, mncpl_loc, prov_loc, taxDecNum, totArea, totAreaPlant, species, quantity, volProd, taxDec, pow_Atty, ptpr_id) VALUES ('Private Tree Plantation Registration', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }
    
        $stmt->bind_param("sssssssssssssssssss", $fName, $lName, $mName, $mncpl, $brgy, $conNum, $prov, $brgy_loc, $mncpl_loc, $prov_loc, $taxDecNum, $totArea, $totAreaPlant, $species, $quantity, $volProd, $taxDec, $pow_Atty, $last_id);
    
    
        if ($stmt->execute()) {
            echo "<script>alert('Data Inserted Successfully');</script>";
        } else {
            echo "Registration failed: " . $stmt->error;
        }
    }else {
        echo "<script>alert('No Data Submitted');</script>";
    }
    


    $conn->close();
}
?>
