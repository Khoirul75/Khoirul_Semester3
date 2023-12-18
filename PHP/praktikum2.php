<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>PHP Form Validation</h2>
    <form action="proses.php" method="post">
        <label for = "name">Name : </label>
        <input type="text" name="name" required>
        <span class="error">*</span>
        <br><br>

        <label for = "email">E-mail : </label>
        <input type="email" name="email" required>
        <span class="error">*</span>
        <br><br>

        <label for = "website">Website : </label>
        <input type="text" name="website">
        <br><br>

        <label for = "Comment">Comment : </label>
        <textarea name="comment"></textarea>
        <br><br>

        <label>Gender :</label>
        <input type="radio" name="gender" value="female" required>Female
        <input type="radio" name="gender" value="male" required>Male
        <span class="error">* </span>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>