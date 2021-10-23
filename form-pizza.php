<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Form-pizza.html">
</head>
<body>
    <table>
        <tr>
            <td>Nama</td>
            <td><?php echo $_POST['username'] ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $_POST['alamat'] ?></td>
        </tr>
        <tr>
            <td>Telephone Number</td>
            <td><?php echo $_POST['contact'] ?></td>
        </tr>
        <tr>
            <td>email</td>
            <td><?php echo $_POST['instruction'] ?></td>
        </tr>
    </table>
</body>
</html>