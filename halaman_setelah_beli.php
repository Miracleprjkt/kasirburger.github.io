<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian Berhasil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Styling untuk pop-up */
        #popup {
            display: none;
            position: fixed;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 128, 0, 0.9); /* Warna hijau */
            color: white;
            padding: 20px;
            border-radius: 8px;
            z-index: 1000;
        }
    </style>
</head>
<body class="bg-gray-900 text-white flex items-center justify-center min-h-screen">
    <div id="popup" class="flex flex-col items-center">
        <h1 class="text-2xl font-bold">Sukses Membeli!</h1>
        <p>Diamond telah ditambahkan ke akun Anda.</p>
        <button onclick="closePopup()" class="mt-4 bg-white text-black py-2 px-4 rounded">Tutup</button>
    </div>

    <script>
        // Tampilkan pop-up setelah halaman dimuat
        window.onload = function() {
            document.getElementById('popup').style.display = 'flex';
        }

        // Fungsi untuk menutup pop-up
        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            window.location.href = 'mautopup.html'; // Ganti dengan halaman yang sesuai
        }
    </script>
</body>
</html>
