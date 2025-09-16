<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="receive_page.php" method="post">
        <label for="">Firstname:</label>
        <input type="text" name="fname">
        <br>
        <label for="">Lastname:</label>
        <input type="text" name="lname">
        <br>
        <label for="">Gender:</label>
        <select name="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <br>
        <input type="submit" name="btnSubmit">
    </form>
</body>
</html>