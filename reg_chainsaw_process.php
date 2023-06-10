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
    $cVerification = $_POST['cVerification'];
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


    // Connect to the DB
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } else {
        echo "Connection OK!";
        echo "<br>";
    }

    // Format the date
    date_default_timezone_set('Asia/Manila');
    $formattedDate = date('Y-m-d', strtotime($_POST['dAcq']));

    // Retrieve user ID from the users table
    $uName = $_POST['uName'];
    $stmt = $conn->prepare("SELECT id FROM users WHERE uName = ?");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }
    
    $stmt->bind_param("s", $uName);
    $stmt->execute();
    $stmt->bind_result($id_chainsaw);
    echo "Retrieved ID: " . $id_chainsaw; 
    $stmt->fetch();
    $stmt->close();

    $stmt = $conn->prepare("INSERT INTO chainsaw_registration (id_chainsaw, fName, lName, mName, suff, brgy, mncpl, city, pId, cVerification, cBrand, cModel, sNum, dAcq, eDisplace, lBlade, cOrig, cPrice, chainsawReceipt, mayorsPermit) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("isssssssssssssssssss", $id_chainsaw, $fName, $lName, $mName, $suff, $brgy, $mncpl, $city, $pID, $cVerification, $cBrand, $cModel, $sNum, $formattedDate, $eDisplace, $lBlade, $cOrig, $cPrice, $chainsawReceipt, $mayorsPermit);

    if ($stmt->execute()) {
        echo "Registration successful";
        header('Location: profilepage.php');
    } else {
        echo "Registration failed: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
