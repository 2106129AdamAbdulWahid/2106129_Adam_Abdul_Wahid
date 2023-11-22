<!DOCTYPE html>
<html lang="en">

<head>
    <title>from daftar pangkas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    

        <div class="kotak">
            <table border='0'>
                <h1><B>BAHBER</B></h1>
                <br>
                <h2>Pendaftaran Cukur Rambut </h2>
                <form action="addtamu.php" method="post">
                    <tr>
                        <td><label for="nama">NAMA</label></td>
                        <td><input type="text" name="nama" class="from-input" maxlength="100" required></td>
                    </tr>

                    <tr>
                        <td><label for="email">EMAIL</label></td>
                        <td><input type="email" name="email" class="from-input" maxlength="100" required></td>
                    </tr>

                    <tr>
                        <td><label for="umur">Umur</label></td>
                        <td><input type="number" name="umur" class="from-input" maxlength="100" required></td>
                    </tr>

                    <tr>
                        <td><label for="alamat">Alamat</label></td>
                        <td><input type="text" name="alamat" class="from-input" maxlength="100" required></td>
                    </tr>

                    <tr>
                        <td><label for="jenis" >Jenis Kelamin</label></td>
                        <td><input type="radio" name="jenis" value="L" required>Laki-laki
                            <input type="radio" name="jenis" value="P" required>Perempuan
                        </td>
                    </tr>

                    <tr>
                        <td><label for="service">Service Rambut</label></td>
                        <td>
                            <select name="service" id="ser" required>
                                <option value="HAIRCUT">HAIRCUT</option>
                                <option value="PERM">PERM</option>
                                <option value="SMOTHHING">SMOTHHING</option>
                                <option value="COLORING">COLORING</option>
                            </select>
                        </td>
                    </tr>



                    <tr>
                        <td><label for="rambut" >Jenis Rambut</label></td>
                        <td>
                            <select name="rambut" id="ram" required>
                            <option value="STRAIGHT / LURUS">STRAIGHT / LURUS</option>
                            <option value="CURLY / KERITING">CURLY / KERITING</option>
                            <option value="WAVY / IKAL">WAVY / IKAL</option>
                            <option value="COILY /KRIBO">COILY /KRIBO</option>
                            </select>
                        </td>
                    </tr>

                    <tr>
                        <td><label for="tanggal" >Tanggal Boking</label>
                        <td><input type="date" name="tangagl" required></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"><button type="submit" id="btn-kirim">✔KIRIM❤</button></td>
                    </tr>

                    <tr>
                        <td colspan="2" align="center"><a href="tampil.php">Lihat Data</a></td>
                    </tr>

                </form>
            </table>
        </div>

    

</body>

</html>