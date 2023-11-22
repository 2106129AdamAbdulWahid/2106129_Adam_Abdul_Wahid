<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tampil Data</title>
    <link rel="stylesheet" href="style.css">
    <style>
        table{
            border-collapse: collapse;
            width: 90%;
            margin: 20ox;

        }
        th,td {
            border: 1px solid black;
            text-align: left;
            padding: 10px;
        }
        th {
            background-color: brown;
        }

    </style>
</head>
<body>
    <div class='kotak'>
        <a href="index.php">Tamba Data</a>
        <table border="1">
            <tr>
                <th>Id</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Umur</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Service Type</th>
                <th>Jenis Rambut</th>
                <th>Tanggal Boking</th>
            </tr>
            <?php
                include('koneksi.php');
                $query = "SELECT * FROM pendaftaran";
                $pendaftaran = mysqli_query($koneksi, $query);
                while($data = mysqli_fetch_array($pendaftaran)){ ?>
                    <tr>
                        <td><?=$data['id']?></td>
                        <td><?=$data['Nama']?></td>
                        <td><?=$data['Email']?></td>
                        <td><?=$data['Umur']?></td>
                        <td><?=$data['Alamat']?></td>
                        <td><?=$data['Jenis Kelamin']?></td>
                        <td><?=$data['Service Type']?></td>
                        <td><?=$data['Jenis Rambut']?></td>
                        <td><?=$data['Tanggal']?></td>
                        
                        <td>
                            <a href="#">Edit</a>
                            <a href="#">Hapus</a>
                        </td>
                    </tr>
                    
                <?php }?>
        </table>

    </div>
</body>
</html>