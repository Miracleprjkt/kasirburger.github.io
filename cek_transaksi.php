<?php
// koneksi ke database
$servername = "localhost";
$username = "username_db"; // ganti dengan username database
$password = "password_db"; // ganti dengan password database
$database = "topup_db"; // ganti dengan nama database

$conn = new mysqli($servername, $username, $password, $database);

// cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ambil data transaksi
$sql = "SELECT * FROM transactions";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data dari setiap baris
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Jumlah Diamond</th>
                <th>Server</th>
                <th>Tanggal</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["user_id"]. "</td>
                <td>" . $row["diamond_amount"]. "</td>
                <td>" . $row["server"]. "</td>
                <td>" . $row["created_at"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>
