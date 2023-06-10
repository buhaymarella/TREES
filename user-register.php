<?php
// Confirm form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Assign form input values to variables
    $fname = $_POST['fName'];
    $lname = $_POST['lName'];
    $mname = $_POST['mName'];
    $suffix = $_POST['suff'];
    $brgy = $_POST['brgy'];
    $municipality = $_POST['mncpl'];
    $cprov = $_POST['cprov'];
    $pID = $_POST['pId'];
    $birth = $_POST['dBirth'];
    $age = $_POST['age'];
    $occup = $_POST['occ'];
    $telNum = $_POST['tNum'];
    $email = $_POST['email'];
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $uName = $_POST['uName'];
    $pass = $_POST['Gpass'];
    $pass = filter_var($pass, FILTER_SANITIZE_STRING);
    $cEmail = $_POST['cEmail'];
    $type_User = $_POST['type_User'];
    // Check if the email matches
    if ($email !== $cEmail) {
        die("Email does not match");
    }

    $encrypted_password = md5($pass);
    $status = "Not Yet Registered";

    // Server Details
    include 'db_connect.php';

    // Format the date
    date_default_timezone_set('Asia/Manila');
    $formattedDate = date('Y-m-d', strtotime($_POST['dBirth']));

    // Check for duplicate username and email
    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $dbusername, $dbpassword);

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO users (fname, lname, mname, suffix, brgy, municipality, cprov, pID, birth, age, occup, telNum, email, uName, pass, type_User, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([$fname, $lname, $mname, $suffix, $brgy, $municipality, $cprov, $pID, $formattedDate, $age, $occup, $telNum, $email, $uName, $encrypted_password, $type_User, $status]);
        
        echo "New Record created Successfully";
        header("Location: ". $_SERVER['PHP_SELF']);
        
    } catch(PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

?>
