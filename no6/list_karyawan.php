<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Gaji Karyawan</title>
</head>

<body>
    <header>
        <h3>Daftar Karyawan</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Work</th>
            <th>Salary</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM nama";
        $query = mysqli_query($db, $sql);

        while($name = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$name['id']."</td>";
            echo "<td>".$name['name']."</td>";
            echo "<td>".$name['id_work']."</td>";
            echo "<td>".$name['id_salary']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$name['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$name['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>