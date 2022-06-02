<!DOCTYPE html>
<html>
<head>
    <title>Menampilkan Data Dari Database PHP </title>
    <style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <h1>Sistem Informasi Klinik</h1>

	<h2>Tabel Pasien</h2>	
    <table>
        <thead>
            <tr>
                <td>No</td>
				<td>Id Pasien</td>
                <td>Nama Pasien</td>
                <td>Jenis Kelamin</td>
                <td>Umur</td>                
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM pasien');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_pasien'] ?></td>
                <td><?php echo $data['nama_pasien'] ?></td>
                <td><?php echo $data['jenis_kelamin'] ?></td>
                <td><?php echo $data['umur'] ?></td>
            </tr>
        <?php } ?>
    </table>

	
	<h2>Tabel Dokter</h2>	
    <table>
        <thead>
            <tr>
                <td>No</td>
				<td>Id Dokter</td>
                <td>Nama Dokter</td>               
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM dokter');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_dokter'] ?></td>
                <td><?php echo $data['nama_dokter'] ?></td>
            </tr>
        <?php } 
		?>
    </table>

	<h2>Tabel Berobat</h2>	
    <table>
        <thead>
            <tr>
                <td>No</td>
				<td>Id Berobat</td>
                <td>Id Pasien</td>
				<td>Id Dokter</td>
				<td>tgl Berobat date</td>               
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM berobat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_berobat'] ?></td>
                <td><?php echo $data['id_pasien'] ?></td>
				<td><?php echo $data['id_dokter'] ?></td>
				<td><?php echo $data['tgl_berobat'] ?></td>
				<td><?php echo $data['keluhan_pasien'] ?></td>
				<td><?php echo $data['hasil_diagnosa'] ?></td>
				<td><?php echo $data['penatalaksanaan'] ?></td>
            </tr>
        <?php } 
		?>
    </table>

	<h2>Tabel Resep Obat</h2>	
    <table>
        <thead>
            <tr>
                <td>No</td>
				<td>Id Resep</td>
                <td>Id Berobat</td>
                <td>Id Obat</td>       
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM Resep_Obat');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id_resep'] ?></td>
                <td><?php echo $data['id_berobat'] ?></td>
                <td><?php echo $data['id_obat'] ?></td>
            </tr>
        <?php } 
		?>
    </table>

    <h2>Tabel User</h2>	
    <table>
        <thead>
            <tr>
                <td>No</td>
				<td>Id</td>
                <td>User name</td>
                <td>Password</td> 
                <td>Nama Lengkap</td>      
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM User');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['nama_lengkap'] ?></td>
            </tr>
        <?php } 
		?>
    </table>

    <h2>Tabel User</h2>	
    <table>
        <thead>
            <tr>
                <td>No</td>
				<td>Id</td>
                <td>User name</td>
                <td>Password</td> 
                <td>Nama Lengkap</td>      
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM User');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['nama_lengkap'] ?></td>
            </tr>
        <?php } 
		?>
    </table>

    <h2>Tabel Insert Into Pasien </h2>	
    <table>
        <thead>
            <tr>
                <td>No</td>
				<td>Id</td>
                <td>User name</td>
                <td>Password</td> 
                <td>Nama Lengkap</td>      
            </tr>
        </thead>
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($conn, 'SELECT * FROM User');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
				<td><?php echo $data['id'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['password'] ?></td>
                <td><?php echo $data['nama_lengkap'] ?></td>
            </tr>
        <?php } 
		?>
    </table>
</body>
</html>