<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <div class="form-container">
            <form action="" method="POST">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="example@example.com"><br>
                <div class="buttons">
                    <input id="submit-btn" type="submit" name="submit" value="SUBMIT">
                    <a id="link_see" href="all_records.php">See Info</a>
                </div>
            </form>     
        </div>
    </main>
</body>
</html>