<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Diri</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #ffb6c1, #87ceeb, #d8bfd8);
            margin: 0;
            padding: 20px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #ff69b4;
            margin-bottom: 30px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            color: #9370db;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 12px;
            border: 2px solid #87ceeb;
            border-radius: 8px;
            font-size: 16px;
            transition: border-color 0.3s;
            box-sizing: border-box;
        }
        
        input[type="text"]:focus,
        input[type="date"]:focus,
        select:focus {
            border-color: #ff69b4;
            outline: none;
        }
        
        button {
            background: linear-gradient(45deg, #ff69b4, #9370db);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            transition: transform 0.2s;
            display: block;
            margin: 0 auto;
        }
        
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .result {
            margin-top: 30px;
            padding: 20px;
            background: linear-gradient(135deg, #e6e6fa, #f0f8ff);
            border-radius: 10px;
            border-left: 5px solid #9370db;
        }
        
        .result h2 {
            color: #9370db;
            margin-top: 0;
        }
        
        .result p {
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }
        
        .highlight {
            color: #ff69b4;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Form Data Diri</h1>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="nama">Nama Lengkap:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir:</label>
                <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>
            </div>
            
            <div class="form-group">
                <label for="pekerjaan">Pekerjaan:</label>
                <select id="pekerjaan" name="pekerjaan" required>
                    <option value="">-- Pilih Pekerjaan --</option>
                    <option value="Software Engineer">Software Engineer</option>
                    <option value="Data Scientist">Data Scientist</option>
                    <option value="Web Developer">Web Developer</option>
                    <option value="Graphic Designer">Graphic Designer</option>
                    <option value="Digital Marketer">Digital Marketer</option>
                </select>
            </div>
            
            <button type="submit">Kirim Data</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil data dari form
            $nama = htmlspecialchars($_POST['nama']);
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $pekerjaan = $_POST['pekerjaan'];
            
            // Menghitung umur
            $tgl_lahir = new DateTime($tanggal_lahir);
            $today = new DateTime();
            $umur = $today->diff($tgl_lahir)->y;
            
            // Menentukan gaji berdasarkan pekerjaan
            $gaji = 0;
            switch ($pekerjaan) {
                case "Software Engineer":
                    $gaji = "Rp 15.000.000 - Rp 25.000.000";
                    break;
                case "Data Scientist":
                    $gaji = "Rp 12.000.000 - Rp 20.000.000";
                    break;
                case "Web Developer":
                    $gaji = "Rp 8.000.000 - Rp 15.000.000";
                    break;
                case "Graphic Designer":
                    $gaji = "Rp 5.000.000 - Rp 10.000.000";
                    break;
                case "Digital Marketer":
                    $gaji = "Rp 6.000.000 - Rp 12.000.000";
                    break;
                default:
                    $gaji = "Belum ditentukan";
            }
            
            // Menampilkan hasil
            echo "<div class='result'>";
            echo "<h2>Hasil Data Diri</h2>";
            echo "<p>Nama: <span class='highlight'>$nama</span></p>";
            echo "<p>Tanggal Lahir: <span class='highlight'>" . date('d F Y', strtotime($tanggal_lahir)) . "</span></p>";
            echo "<p>Umur: <span class='highlight'>$umur tahun</span></p>";
            echo "<p>Pekerjaan: <span class='highlight'>$pekerjaan</span></p>";
            echo "<p>Perkiraan Gaji: <span class='highlight'>$gaji</span></p>";
            echo "</div>";
        }
        ?>
    </div>
</body>
</html>