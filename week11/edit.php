<!DOCTYPE HTML>
<html>

<head>
    <title>Update</title>
</head>

<body>

    <?php
    include 'conn.php';
    ?>
    <h1>Update a Record</h1>

    <?php
    if ($_POST) {
        $sql = "UPDATE tblbook SET title = ?, authors = ?, edition = ?, publisher  = ? WHERE accno= ?";

        $stmt = $mysqli->prepare($sql);

        $stmt->bind_param('ssisi', $_POST['title'], $_POST['author'], $_POST['edition'], $_POST['publisher'], $_POST['accno']);
        if ($stmt->execute()) {
            echo "book was updated.";
            $stmt->close();
        } else {
            die("Unable to update.");
        }
    }

    $accno = $_GET['accno'];
    $sql = "SELECT * from tblbook WHERE accno =?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $accno);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $row = $result->fetch_assoc();

    extract($row);

    $result->free();
    ?>

    <form action='edit.php?accno=<?php echo $accno; ?>' method='post'>

        <table>
            <?php

            $records = mysqli_query($mysqli, "SELECT * FROM `tblbook` where accno=$accno");
            if (mysqli_num_rows($records) > 0) {
                $row = mysqli_fetch_assoc($records)
            ?>

                <tr>
                    <td>Title</td>
                    <td><input type='text' name='title' value="<?php echo $row['title']; ?>" /></td>
                </tr>
                <tr>
                    <td>Author</td>
                    <td><input type='text' name='author' value="<?php echo $row['authors']; ?>" /></td>
                </tr>
                <tr>
                    <td>Edition</td>
                    <td><input type='text' name='edition' value="<?php echo $row['edition']; ?>" /></td>
                </tr>
                <tr>
                    <td>Publisher</td>
                    <td><input type='text' name='publisher' value="<?php echo $row['publisher']; ?>" /></td>
                </tr>
                <tr>
            <?php
            };
            $mysqli->close();
            ?>
                <td></td>
                <td>
                    <input type='hidden' name='accno' value='<?php echo $accno ?>' />
                    <input type='submit' value='Edit' />
                    <a href='index.php'>Back to index</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>