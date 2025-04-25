<?php
// form-aspirasi.php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Aspirasi - Kelurahan Peterongan</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fff;
        }
        header {
            background-color: #b62d23;
            padding: 10px 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav {
            background-color: #f4c400;
            padding: 10px 20px;
        }
        .container {
            padding: 20px;
            display: flex;
            justify-content: space-between;
        }
        .form-section {
            width: 60%;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="number"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .row {
            display: flex;
            gap: 10px;
        }
        .row .form-group {
            flex: 1;
        }
        .upload-section {
            margin-top: 10px;
        }
        .btn-upload, .btn-submit {
            background-color: #b62d23;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .btn-submit {
            background-color: #f4c400;
            color: black;
            font-weight: bold;
            margin-top: 20px;
        }
        .image-section {
            width: 35%;
        }
        .image-section img {
            width: 100%;
        }
        footer {
            background-color: #b62d23;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 30px;
        }
    </style>
</head>
<body>
    <header>
        <div>📞 (024) 8312240 | 📧 kelurahanpeterongan18@gmail.com</div>
        <div>Selamat Datang, User</div>
    </header>
    <nav>
        <strong>Aspirasi</strong>
    </nav>
    <div class="container">
        <div class="form-section">
            <form action="submit-aspirasi.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" id="nik" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Pengirim</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon / HP</label>
                    <input type="text" id="telepon" name="telepon">
                </div>
                <div class="row">
                    <div class="form-group">
                        <label for="rt">RT</label>
                        <input type="number" id="rt" name="rt">
                    </div>
                    <div class="form-group">
                        <label for="rw">RW</label>
                        <input type="number" id="rw" name="rw">
                    </div>
                </div>
                <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" id="judul" name="judul" required>
                </div>
                <div class="form-group">
                    <label for="isi">Isi</label>
                    <textarea id="isi" name="isi" rows="5"></textarea>
                </div>
                <div class="form-group upload-section">
                    <label for="lampiran">Lampiran</label>
                    <input type="file" name="lampiran" accept=".jpg,.jpeg,.png">
                    <p><small>* Format .jpg, .jpeg, .png | Ukuran Maksimal 500KB</small></p>
                </div>
                <button type="submit" class="btn-submit">Kirim Aspirasi</button>
            </form>
        </div>
        <div class="image-section">
            <img src="aspirasi-ilustrasi.png" alt="Ilustrasi Aspirasi">
        </div>
    </div>
    <footer>
        &copy; 2025 KELURAHAN PETERONGAN All rights reserved
    </footer>
</body>
</html>
