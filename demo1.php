<?php
include("loka_connection.php");
$query = "SELECT * FROM general_services";
$data = mysqli_query($conn, $query);
$num = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

if($num != 0){
?>
<h2 align="center">Displaying all records of registration</h2>
    <table border="1" cellspacing="7" width="90%" align="center">
        <tr>
            <th width="5%">id</th>
            <th width="50%">service_name</th>
            <th width="10%">Required_details</th>
            <th width="25%">department</th>
            <th width="10%">option</th>
        </tr>
    </table>
<?php
while($result){
    echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['service_name']."</td>
                <td>".$result['required_details']."</td>
                <td>".$result['department']."</td>

                <td><a href='demo1.php?id=$result[department]'><input type='submit' value='apply' class='updbtn'></a></td>
        </tr>";
}
}

?>