<?php
$mahasiswa = [
    [
        "nim" => "264029",
        "nama" => "Tuti Hasna",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "tuti23@gmail.com",
        "nilai" => "84",
    ],
    [
        "nim" => "263219",
        "nama" => "Ali Nurjaman",
        "jurusan" => "Pendidikan Guru Sekolah Dasar",
        "email" => "Aliaja83@gmail.com",
        "nilai" => "63",
    ],
    [
        "nim" => "265445",
        "nama" => "Gintama Rafi",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "GinRa44@gmail.com",
        "nilai" => "92",
    ],
    [
        "nim" => "265738",
        "nama" => "Syaufudin Dinra",
        "jurusan" => "Pendidikan Guru Pendidikan Anak Usia Dini",
        "email" => "Syaufd21@gmail.com",
        "nilai" => "89",
    ],
    [
        "nim" => "267728",
        "nama" => "Selia Cantika",
        "jurusan" => "Mekatronika Kecerdasan Buatan",
        "email" => "Selcat44@gmail.com",
        "nilai" => "75",
    ],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
        body {
            font-family: 'Trebuchet MS', sans-serif;
            background-color: #01ffe1;
            margin: 0;
            padding: 50px 20px;
            color: #23405A;
        }

        .kartu {
            background-color: white;
            max-width: 1300px;
            margin: 0 auto;
            padding: 50px;
            border-radius: 12px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 40px;
        }

        .header h2 {
            margin: 0 0 8px 0;
            color: #006cfa;
        }

        .header p {
            margin: 0;
            color: #23405A;
        }

        .tombol {
            display: inline-block;
            background-color: #006cfa;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 18px;
            border-radius: 10px;
        }

        .tombol:hover {
            background-color: #094ca3;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        table, th, td {
            border: 1px solid #90CAF9;
        }

        th {
            background-color: #006cfa;
            color: white;
            text-align: left;
        }

        th, td {
            padding: 12px;
        }

        .lulus {
            color: #16852a;
            font-weight: bold;
            padding: 4px 10px;
            border-radius: 12px;
            white-space: nowrap;
        }

        .tidak-lulus {
            color: #c62828;
            font-weight: bold;
            padding: 4px 10px;
            border-radius: 12px;
            white-space: nowrap;
        }
    </style>
</head>
<body>
    <div class="kartu">
        <div class="header">
            <div>
                <h2>Daftar Mahasiswa</h2>
                <p>Mini Website PHP Dasar</p>
            </div>
            <a href="form_pesan.php" class="tombol">Isi Form Pesan</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach($mahasiswa as $data): ?>

                    <?php
                    if ($data["nilai"] >= 90) {
                        $grade = "A";
                    } elseif ($data["nilai"] >= 80) {
                        $grade = "B";
                    } elseif ($data["nilai"] >= 65) {
                        $grade = "C";
                    } else {
                        $grade = "D";
                    }

                    if ($data["nilai"] >= 70) {
                        $status = "Lulus";
                        $kelas_status = "lulus";
                    } else {
                        $status = "Tidak Lulus";
                        $kelas_status = "tidak-lulus";
                    }

                    $url = "detail.php?nim=" . $data["nim"]
                         . "&nama=" . $data["nama"]
                         . "&jurusan=" . $data["jurusan"]
                         . "&email=" . $data["email"]
                         . "&nilai=" . $data["nilai"]
                         . "&grade=" . $grade
                         . "&status=" . $status;
                    ?>

                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data["nim"] ?></td>
                        <td><?= $data["nama"] ?></td>
                        <td><?= $data["jurusan"] ?></td>
                        <td><?= $data["nilai"] ?></td>
                        <td><?= $grade ?></td>
                        <td><span class="<?= $kelas_status ?>"><?= $status ?></span></td>
                        <td><a href="<?= $url ?>" class="tombol">Lihat Detail</a></td>
                    </tr>
                    <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>