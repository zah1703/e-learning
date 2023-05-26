<!DOCTYPE html>
<html>
<head>
  <title>Halaman Data Pengumpulan Tugas</title>
  <style>
    /* CSS untuk tampilan halaman */
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #4CAF50;
      color: white;
    }
  </style>
</head>
<body>
  <h2>Halaman Data Pengumpulan Tugas</h2>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Mahasiswa</th>
        <th>Tugas</th>
        <th>Tanggal Pengumpulan</th>
        <th>Nilai</th>
      </tr>

    </thead>
			<tbody>
				<?php 
				include 'koneksi.php';
				$no = 1;
				$data = mysqli_query($koneksi,"SELECT * FROM `baru` WHERE 1");
				while($d = mysqli_fetch_array($data))
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['Nama']; ?></td>
      <tr>
        <td>1</td>
        <td>John Doe</td>
        <td>Tugas 1</td>
        <td>2023-05-15</td>
        <td>Lengkap</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Jane Smith</td>
        <td>Tugas 2</td>
        <td>2023-05-17</td>
        <td>Belum Lengkap</td>
      </tr>
      <!-- Tambahkan baris data tugas lainnya sesuai kebutuhan -->
    </tbody>
  </table>
</body>
</html>
