<?php
include("loka_connection.php");

$ID = $_GET['id'];
$query = "SELECT * FROM general_services WHERE category = '$ID'";
$data = mysqli_query($conn, $query);
$num = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
    <body>
        <div class="services">
            <div class="services-inside">
                <label for="title">Application for <?php echo $result["category"] ?> Services</label>
            </div>
            <div class="services-inside">
                <label for="service">Service Name</label>
                <select name="" id="" class="select">
                    <?php
                    if($num > 0){
                        while($resut){
                            ?>
                            <option name='service_name'><?php echo $result['service_name'] ?> </option>
                            <?php
                            $num++;
                        }
                    }
                    else{echo "No Records Found";}
                    ?>
                </select>
            </div>
        </div>
    </body>
</html>
