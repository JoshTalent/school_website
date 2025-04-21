<?php
include('../component/connection.php');

if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];

    $sql = "DELETE FROM `report`  WHERE id = '$delete_id'";

    $re = mysqli_query($con, $sql);

    if ($re) {
?>
<script>
window.location.href = "./report.php";
</script>
<?php
    }
}

?>