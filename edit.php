<?php

include 'DataFetch.php';
$id=$_GET['id'];
echo $id;
$use=getUser($id);
// print_r($use);
?>



<!DOCTYPE html>
<html>

<head>
    <title>Edit Form</title>
    <!-- <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet"> -->
    <h2><b>Edit Form</b></h2>
</head>

<body>
    <div>
        <form action="Register.php" method="post">

            <label> Name : </label>
            <input type="text" name="txt" class="text" value="<?=$use['NAME'];?>"> <br>
            <label> Email Id : </label>
            <input type="email" name="email" class="email" value="<?=$use['MAIL'];?>">
            <label> Phone No. : </label>
            <input type="number" name="numb" class="number" value="<?=$use['PHONE'];?>"><br>
            <label> Gender : </label>
            <label> Male </label>
            <input type="radio" name="gen" value="Male">
            <label> Female </label>
            <input type="radio" name="gen" value="Female"><br>
            <label> Department : </label>
            <select name="depart">
                <option value="CST">CST</option>
                <option value="CSE">CSE</option>
                <option value="EE">EE</option>
            </select><br>
            <label> Hobby : </label>
            <label> Reading Book </label>
            <input type="Checkbox" name="hobby[]" value="Reading Book">
            <label> Drawing </label>
            <input type="Checkbox" name="hobby[]" value="Drawing"><br>
            <label> Bio : </label>
            <textarea name="text" value="text" placeholder="Drop your thoughts"></textarea><br><br>
            
            <input type="hidden" name="id" value="<?php $use['id'];?>">
            <input type="Submit" value="edit" name="Update">
           
        </form>
        <!-- <a href="Register.php?id=$u['id']">
                               </a> -->
    </div>
</body>

</html>
