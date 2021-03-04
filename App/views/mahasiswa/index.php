<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Mahasiswa</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <h3>Daftar Mahasiswa</h3>
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <ul>
                        <li><?= $mhs['nama']; ?></li>
                        <li><?= $mhs['nim']; ?></li>
                        <li><?= $mhs['email']; ?></li>
                        <li><?= $mhs['jurusan']; ?></li>
                    </ul>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>

</html>