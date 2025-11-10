# Lab7Web
# Praktikum 7: PHP Dasar

**Nama: Nadine Amelia Putri**

**Nim: 312410188**

**Kelas: TI.24.A2**

**Pemrograman Web1**

## 1. Membuat File Baru dengan nama php_dasar.php. Kemudian isi dengan kode seperti berikut

## Code:

```
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Dasar</title>
</head>
<body>
  <h1>Belajar PHP Dasar</h1>
  <?php
    echo "Hello World";
  ?>
</body>
</html>
```
## Hasil:
<img width="800" height="245" alt="Cuplikan layar 2025-11-10 131942" src="https://github.com/user-attachments/assets/a616cb05-c899-456a-bdd8-90c686cb47c3" />


## 2. Menambahkan Variable pada program

## Code:
```
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Dasar</title>
</head>
<body>
  <h1>Belajar PHP Dasar</h1>
  <?php
    echo "Hello World";
  ?>
<h2>Menggunakan Variable</h2>
$nim = "0411500400";
$nama = 'Abdullah';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
</body>
</html>
<?php
```

## Hasil:

<img width="800" height="245" alt="Cuplikan layar 2025-11-10 132522" src="https://github.com/user-attachments/assets/44001e77-db60-478f-9447-3de5965d8468" />

## 3. Menambahkan Predefine Variable $_GET

## Code:
```
<?php
echo 'Selamat Datang ' . $_GET['nama'];
?>
```

## Hasil:
<img width="800" height="245" alt="Cuplikan layar 2025-11-10 133108" src="https://github.com/user-attachments/assets/fd422e8b-f63f-4062-ba5e-0c1280a64fb3" />

## 4.Membuat Form Input

## Code:
```
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Dasar</title>
</head>
<body>
<h2>Form Input</h2>
<form method="post">
  <label>Nama: </label>
  <input type="text" name="nama">
  <input type="submit" value="Kirim">
</form>
<?php
echo 'Selamat Datang ' . $_POST['nama'];
?>
</body>
</html>
```

## Hasil:
<img width="800" height="245" alt="Cuplikan layar 2025-11-10 133833" src="https://github.com/user-attachments/assets/e98f0d48-d618-4f59-80aa-b86b89407200" />

## 5. Operator

## Code:
```
<?php
$gaji = 1000000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
echo "Gaji sebelum pajak = Rp. $gaji <br>";
echo "Gaji yang dibawa pulang = Rp. $thp";
?>
```

## Hasil:

<img width="800" height="245" alt="image" src="https://github.com/user-attachments/assets/accb9328-bb44-4ab9-819c-7df3d7ea068d" />

## 6. Kondisi If

## Code: 
```
<?php
$nama_hari = date("l");
if ($nama_hari == "Sunday") {
echo "Minggu";
} elseif ($nama_hari == "Monday") {
echo "Senin";
} else {
echo "Selasa";
}
?>
```

## Hasil:
<img width="800" height="245" alt="image" src="https://github.com/user-attachments/assets/11912771-d3cf-4cfb-a9e8-eb0b458f8a1a" />

## 7. Kondisi Switch

## Code:
```
<?php
$nama_hari = date("l");
switch ($nama_hari) {
  case "Sunday":
    echo "Minggu";
    break;
  case "Monday":
    echo "Senin";
    break;
  case "Tuesday":
    echo "Selasa";
    break;
  default:
    echo "Sabtu";
?>
```

## Hasil:

<img width="800" height="245" alt="image" src="https://github.com/user-attachments/assets/72c6c63c-6f0c-4478-8161-6668339b2d67" />

## 8. Perulangan For

## Code:
```
<?php
echo "Perulangan 1 sampai 10 <br />";
for ($i=1; $i<=10; $i++) {
echo "Perulangan ke: " . $i . '<br />';
}
echo "Perulangan Menurun dari 10 ke 1 <br />";
for ($i=10; $i>=1; $i--) {
echo "Perulangan ke: " . $i . '<br />';
}
?>
```
## Hasil:

<img width="800" height="245" alt="image" src="https://github.com/user-attachments/assets/8f1ca883-ecba-449c-bedd-d0c689fd05df" />

## 9. Perulangan While

## Code:
```
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
while ($i<=10) {
echo "Perulangan ke: " . $i . '<br />';
$i++;
}
?>
```
## Hasil:

<img width="800" height="245" alt="image" src="https://github.com/user-attachments/assets/07cc67cd-957f-47e2-8622-dbbca004e78b" />

## 10. Perulangan Dowhile
## Code:
```
<?php
echo "Perulangan 1 sampai 10 <br />";
$i=1;
do {
  echo "Perulangan ke: " . $i . '<br />';
  $i++;
} while ($i<=10);
?>
```
## Hasil:
<img width="800" height="245" alt="image" src="https://github.com/user-attachments/assets/21db6985-bedf-4c7a-9d83-515386ff3a72" />
