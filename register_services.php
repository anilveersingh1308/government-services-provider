<?php
include ("loka_connection.php");
error_reporting(0);
?>

<!DOCTYPE HTML>
<html>
    <body>
        <div class="register">
            <div class="register services">
                <button>About</button>
                <form action="#" method="post">
                    <div class="service-content">
                        <label for="service-name">Service Name</label>
                        <input type="text" name="service_name">
                    </div>
                    <div class="service-content">
                        <label for="service_category">Service Category</label>
                        <input type="text" name="service_category">
                    </div>
                    <div class="service-content">
                        <label for="department">Department</label>
                        <input type="text" name="department">
                    </div>
                    <div class="service-content">
                        <label for="service-logo">Service Logo</label>
                        <input type="file" name="service_logo" value="upaload_logo">
                    </div>
                    <div class="service-content">
                        <input type="submit" name="submit" value="register">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

<?php
if(isset($_POST['submit']))
{
    $service = $_POST['service_name'];
    $department = $_POST['department'];
    $query = "INSERT INTO general_services (service_name, department) VALUES ('$service', '$department')";
    $data = mysqli_query($conn, $query);

    if($data){
        echo "inserted successfully";
        ?>
        <meta http-equiv="Refresh" content="0; url=http://localhost/loka/register_services.php">
        <?php
    }
    else{
        echo "failedd connection";
    }
}