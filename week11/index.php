<!DOCTYPE HTML>
<html>
<head>
    <title>Read Records</title>
</head>

<body>

    <h2>Read Records</h2>

    <?php

    include 'conn.php';
    if (isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";

    if ($action == 'deleted') {
        echo "User was deleted.";
    }

    $query = "select * from tblbook";
    $stmt = $mysqli->prepare($query);


    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    $num_results = $result->num_rows;

    echo "<div><a href='add.php'>Create New Record</a></div>";

    if ($num_results) {
        echo "<table border='1'>";

        echo "<tr>";
        echo "<th>Accession number</th>";
        echo "<th>Title</th>";
        echo "<th>Authors</th>";
        echo "<th>Edition</th>";
        echo "<th>Publisher</th>";
        echo "<td>Action</td>";
        echo "</tr>";


        while ($row = $result->fetch_assoc()) {
            extract($row);

            echo "<tr>";
            echo "<td>{$accno}</td>";
            echo "<td>{$title}</td>";
            echo "<td>{$authors}</td>";
            echo "<td>{$edition}</td>";
            echo "<td>{$publisher}</td>";
            echo "<td>";
            echo "<a href='edit.php?accno={$accno}'>Edit</a>";
            //echo " / ";
    
            echo "<a href='#' onclick='delete_user( {$accno} );'>Delete</a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No records found.";
    }
    $result->free();
    $mysqli->close();
    ?>

    <script type='text/javascript'>
        function delete_user(accno) {

            var answer = confirm('Are you sure?');


            if (answer) {
                window.location = 'delete.php?id=' + accno;
            }
        }
        function book_suggestion() {
            var book = document.getElementById("book").value;
            var xhr;
            if (window.XMLHttpRequest) {
                xhr = new XMLHttpRequest();
            } else if (window.ActiveXObject) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");
            }
            var data = "title=" + book;
            xhr.open("POST", "search.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.send(data);
            xhr.onreadystatechange = display_data;
            function display_data() {
                if (xhr.readyState == 4) {
                    if (xhr.status == 200) {

                        document.getElementById("suggestion").innerHTML = xhr.responseText;
                    } else {
                        alert('There was a problem with the request.');
                    }
                }
            }
        }
    </script>
    <br />
    <h2>Search book Record</h2>
    <div>
        <form>
            <label for="book">Search book </label>
            <div>
                <input type="text" id="book" onKeyUp="book_suggestion()">
                <div id="suggestion"></div>
            </div>

        </form>
    </div>
</body>

</html>