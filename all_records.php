<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dataRow.css">
    <title>Information</title>
</head>
<body>
    <h3>People info</h3>
    <table border="1" class="table-container">
        <tr>
            <td id="fName">First Name</td>
            <td id="lName">Last Name</td>
            <td id="email">Email</td>
        </tr>

    <?php
        include "dbConn.php";
        $records = mysqli_query($db, "SELECT * FROM peoplle;");

        while($data = mysqli_fetch_array($records)) {
    ?>            
        <tr>
            <td class="row"><?php echo $data['fName']; ?></td>
            <td class="row"><?php echo $data['lName']; ?></td>
            <td class="row"><?php echo $data['email']; ?></td>
        </tr>
    <?php
        }
    ?>
    </table>
</body>
</html>