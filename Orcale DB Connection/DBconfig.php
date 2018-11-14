<?php
/*
$tns = "
    (DESCRIPTION =
        (ADDRESS = (PROTOCOL = TCP)(HOST = localhost)(PORT = 1521))
        (CONNECT_DATA =
            (SERVER = DEDICATED)
            (SERVICE_NAME = servicename)
        )
    )
";

$pdo_string = 'oci:dbname='.$tns;

try {
    $dbh = new PDO($pdo_string, 'system', 'suraj');
} catch (PDOException $e) {
    echo "Failed to obtain database handle: " . $e->getMessage();
    exit;
}
 
$query = "SELECT * FROM student;"; 
$stmt = $dbh->prepare($query);
if ($stmt->execute()) {
    echo "<h4>$query</h4>";
    echo "<pre>";
    while ($row = $stmt->fetch()) {
        print_r($row);
    }
    echo "</pre>";
}

*/

 
print_r(PDO::getAvailableDrivers());

?>

<?php
    try
    {
        $user='system'; // Enter your DB User Name.
        $pass='suraj'; // Enter your DB Password.
        $dataBaseName='RAILWAY'; // Enter your Database Name.
        $dbh = new PDO('OCI:dbname='.$dataBaseName.'charset=UTF-8', $user, $pass);
        echo "Connection Successful";
    }
    catch (PDOException $e)
    {
        print "Error!: " . $e->getMessage() . "
";
        die();
    }
?>
