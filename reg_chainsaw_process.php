<?php
// Confirm form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $mName = $_POST['mName'];
    $suff = $_POST['suff'];
    $brgy = $_POST['brgy'];
    $mncpl = $_POST['mncpl'];
    $city = $_POST['city'];
    $pID = $_POST['pId'];
    $storeName = $_POST['cStore'];
    $cBrand = $_POST['cBrand'];
    $cModel = $_POST['cModel'];
    $sNum = $_POST['sNum'];
    $dAcq = $_POST['dAcq'];
    $eDisplace = $_POST['eDisplace'];
    $lBlade = $_POST['lBlade'];
    $cOrig = $_POST['cOrig'];
    $cPrice = $_POST['cPrice'];
    $chainsawReceipt = $_POST['chainsawReceipt'];
    $mayorsPermit = $_POST['mayorsPermit'];

    // Server Details
    include 'db_connect.php';
    include 'profilepage.php';


    // Connect to the DB
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "<br>";
    }
    // Format the date
    date_default_timezone_set('Asia/Manila');
    $formattedDate = date('Y-m-d', strtotime($_POST['dAcq']));

    $uName = $_SESSION['uName'];

    //get ID
    $getID = "select * from users where uName = '$uName'";
    $res = mysqli_query($conn, $getID);
    if(mysqli_num_rows($res) > 0){
        foreach($res as $row){
            $last_id = $row['id'];
        }
    }
    
    if(isset($_POST['draft'])){
        $stmt = $conn->prepare("INSERT INTO chainsaw_reg_draft (permit_type, fName, lName, mName, suff, brgy, mncpl, city, pId, cStore, cBrand, cModel, sNum, dAcq, eDisplace, lBlade, cOrig, cPrice, chainsawReceipt, mayorsPermit, chain_id_fk) VALUES ('Chainsaw Registration', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("ssssssssssssssssssss", $fName, $lName, $mName, $suff, $brgy, $mncpl, $city, $pID, $storeName, $cBrand, $cModel, $sNum, $formattedDate, $eDisplace, $lBlade, $cOrig, $cPrice, $chainsawReceipt, $mayorsPermit, $last_id);

        if ($stmt->execute()) {
            echo "<script>alert('Saved to Draft');</script>";
        } else {
            echo "Registration failed: " . $stmt->error;
        }

        $stmt->close();
    } elseif (isset($_POST['submit'])) {
        $stmt = $conn->prepare("INSERT INTO chainsaw_registration (permit_type, fName, lName, mName, suff, brgy, mncpl, city, pId, cStore, cBrand, cModel, sNum, dAcq, eDisplace, lBlade, cOrig, cPrice, chainsawReceipt, mayorsPermit, chainsaw_id_fk) VALUES ('Chainsaw Registration', ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        if (!$stmt) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("ssssssssssssssssssss",  $fName, $lName, $mName, $suff, $brgy, $mncpl, $city, $pID, $storeName, $cBrand, $cModel, $sNum, $formattedDate, $eDisplace, $lBlade, $cOrig, $cPrice, $chainsawReceipt, $mayorsPermit, $last_id);

        if ($stmt->execute()) {
            echo "<script>alert('Data Inserted Successfully');</script>";
        } else {
            echo "Registration failed: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "<script>alert('No Data was Submitted');</script>";
    }

    $conn->close();
}
?>
