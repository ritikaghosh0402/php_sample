
<?php include 'Register.php';
session_start();
$n=$_SESSION['n'];
//echo $n;
if(empty($n)){
    header("location:login.php");
}
else{
    ?>
<!doctype html>
<html>
    <head>
        <title>welcome</title>
</head>
<body>
    welcome <?=$_SESSION['n']?>
    <br>
    <table border="1px">
        <br>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PHONE</th>
            <th>GENDER</th>
            <th>DEPARTMENT</th>
            <th>HOBBY</th>
            <th>BIO</th>
            <th>Action</th>
</tr>
                <?php foreach ($users as $u){?>
                    <tr>
                        <td><?php echo $u['id'];?></td>
                        <td><?= $u['NAME'];?></td>
                        <td><?= $u['MAIL'];?></td>
                        <td><?= $u['PHONE'];?></td>
                        <td><?= $u['GENDER'];?></td>
                        <td><?= $u['DEPARTMENT'];?></td>
                        <td><?= $u['HOBBY'];?></td>
                        <td><?= $u['BIO'];?></td>
                        <td><form action="Register.php" method='post'>
                            <input type="hidden" name="id" value="<?php echo $u['id']?>">
                            <input type="submit" name="dlt" value="d">
                            <!-- <input type="submit" name="edt" value="e"> -->
                                </form>
                            <a href="edit.php?id=<?=$u['id']
                            
                            ?>"> edit </a>
                            </td>
                </tr>

               <?php }?>
                </table>
</body>
    </html>
    <?php 
}
session_destroy();
?>