<!DOCTYPE html>
<html>

<head>
    <title>Registration Form</title>
    <!-- <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet"> -->
    <h2><b>Registration Form</b></h2>
</head>

<body>
    <div>

    
        <form action="Register.php" method="post" enctype="multipart/form-data">
            <label> Name : </label>
            <input type="text" name="txt" class="text"><br>
            <label> Email Id : </label>
            <input type="email" name="email" class="email"><br>
            <label>Password</label>  
            <input type="password" name="pass" class="password">
            <label> Phone No. : </label>
            <input type="number" name="numb" class="number"><br>
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
            <label>Profile : </label>  
            <input type="file" name="profile" class="profile">
            <input type="Submit" value="Register" name="Submit"><br>
        </form>
    </div>
    <a href="login.php">LOGIN</a>
</body>

</html>
