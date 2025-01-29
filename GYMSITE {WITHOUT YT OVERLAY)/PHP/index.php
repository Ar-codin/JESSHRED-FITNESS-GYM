<?php 








$sql = "select * FROM users";
$users = $con->query($sql) or die ($con->error);
$row = $users->fetch_assoc();


?>

<html>
    <a href="add.php">ADD</a>
    <body>
        <table style="border: 2px solid red; padding: 10px 10px;">
        <?php do { ?>    
        <tr>
            <td style="border: 2px solid blue; padding: 10px 10px;"><?php echo $row['nickname'].'<br>' ?></td>    
        </tr>
        <?php }while ($row = $users->fetch_assoc()) ?>      
        </table>
    </body>
</html>