<?php

include('config.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $status = mysqli_real_escape_string($db, $_POST['status']);

    mysqli_query($db, "UPDATE orders SET status='$status' WHERE id='$id'");

    header("Location: table.php");
}

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0) {
    $id = $_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM orders WHERE id=" . $_GET['id']);

    $row = mysqli_fetch_array($result);

    if ($row) {
        $name = $row['product_name'];
        $status = $row['status'];
    } else {
        echo "No results!";
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Items</title>
    <link rel="stylesheet" type="text/css" href="../style1.css">
</head>

<body>

    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>" />

        <table>

            <tr>
               <td colspan="2"><b><font color='#3498db'>Update Status </font></b></td>
            </tr>
            <tr>
                <td width="179"><b><font color='#3498db'>Product Name <em>*</em></font></b></td>
                <td>
                    <label style="font-weight: bold;">
                        <input type="text" name="product_name" value="<?php echo $name; ?>" readonly />
                    </label>
                </td>
            </tr>

            <tr>
                <td width="179"><b><font color='#34495e'>Status<em>*</em></font></b></td>
                <td>
                    <label style="font-weight: bold; color: #3498db;">
                        <select name="status" style="padding: 10px; font-size: 14px; width:450px">
                            <option value="Currently Ordering" <?php echo ($status == 'Currently Ordering') ? 'selected' : ''; ?>>Currently Ordering</option>
                            <option value="Cancelled" <?php echo ($status == 'Cancelled') ? 'selected' : ''; ?>>Cancelled</option>
                            <option value="Delivered" <?php echo ($status == 'Delivered') ? 'selected' : ''; ?>>Delivered</option>
			    <option value="To Recive" <?php echo ($status == 'To Recive') ? 'selected' : ''; ?>>To Recive</option>
                        </select>
                    </label>
                </td>
            </tr>

            <tr align="Right">
                <td colspan="2">
                    <label>
                        <center><input type="submit" name="submit" value="Update Status" style="background-color: #3498db; color: white; padding: 8px; font-size: 14px; cursor: pointer;"></center>
                    </label>
                </td>
            </tr>

        </table>
    </form>

</body>

</html>
