<!DOCTYPE HTML>
<html>

<head>
    <title>Create Record</title>

</head>

<body>
<?php     
    include 'conn.php';
?>
    <h1>Add a Record</h1>

    <?php
    $action = isset($_POST['action']) ? $_POST['action'] : "";

    if ($action == 'create') {
        $query = "INSERT INTO tblbook SET accno = ?, title = ?, authors = ?, edition  = ?, publisher=?";

        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('issis', $_POST['accno'], $_POST['title'], $_POST['author'], $_POST['edition'], $_POST['publisher']);

        if ($stmt->execute()) {

            echo "Record was saved.";
        } else {
            die('Unable to save record.');
        }

    }

    ?>

    <form action='#' method='post' enctype="multipart/form-data">
        <table>
            <tr>
                <td>Accession Number</td>
                <td><input type='text' name='accno' /></td>
            </tr>
            <tr>
                <td>Title</td>
                <td><input type='text' name='title' /></td>
            </tr>
            <tr>
                <td>Author</td>
                <td><input type='text' name='author' /></td>
            </tr>
            <tr>
                <td>Edition</td>
                <td><input type='text' name='edition' /></td>
            </tr>
            <tr>
                <td>Publisher</td>
                <td><input type='text' name='publisher' /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type='hidden' name='action' value='create' />
                    <input type='submit' value='Save' />

                    <a href='index.php'>Back to index</a>
                </td>
            </tr>
        </table>
    </form>

</body>

</html>