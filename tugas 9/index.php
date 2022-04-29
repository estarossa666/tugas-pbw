<?php

include("connection.php");

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='style.css'>

    <title>Tugas 10</title>
</head>
<body>
<br>
<h1>Data Mahasiswa</h1>

<table class="container">
	<thead>
		<tr>
			<th><h1>NPM</h1></th>
			<th><h1>Nama</h1></th>
			<th><h1>Asal</h1></th>
			<th><h1>Jurusan</h1></th>
            <th><h1>Nilai Akhir</h1></th>
		</tr>
	</thead>
	<tbody>
    <?php
        $sql = "SELECT * FROM mhs";
        $query = mysqli_query($conn,$sql);
        $data = mysqli_fetch_array($query);
        ?>
        <?php foreach ($query as $row) : ?>
            <tr>
                <td><?= $row['npm']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['asal']; ?></td>
                <td><?= $row['jurusan']; ?></td>
                <td><?= $row['nilai_akhir']; ?></td>    
            </tr>
        <?php endforeach; ?>
	</tbody>
</table>
<h2>Template by : <a href="https://github.com/pablorgarcia" target="_blank">Pablo García</a></h2>
</body>
</html>