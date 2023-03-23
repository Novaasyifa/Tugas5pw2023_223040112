<?php 

$mahasiswa= [
    [
        'nama'=>'Nova Asyifa',
        'nrp'=>'223040112',
        'prodi'=>'Teknik Informatika',
        'email'=>'novaasyifa@gmail.com',
        'img'=>'nova.jpg'
    ],
    [
        'nama'=>'Nita Febriany',
        'nrp'=>'223040096',
        'prodi'=>'Tenik Informatika',
        'email'=>'nitafeb@gmail.com',
        'img'=>'nita.jpg'
    ],
    [
        'nama'=>'Maria Oa Paulina Memen',
        'nrp'=>'223040099',
        'prodi'=>'Teknik Informatika',
        'email'=>'marialoly@gmail.com',
        'img'=>'lolyn.jpg'
    ],
    [
        'nama'=>'Andiana Eka Riyanto',
        'nrp'=>'223040115',
        'prodi'=>'Teknik Informatika',
        'email'=>'andien@gmail.com',
        'img'=>'eka.jpg'
    ],
    [
        'nama'=>'Melinda Sulaeman',
        'nrp'=>'223040091',
        'prodi'=>'Teknik Informatka',
        'email'=>'melinda@gmail.com',
        'img'=>'melinda.jpg'
    ],
    [
        'nama'=>'Humaira Syafaira',
        'nrp'=>'223040107',
        'prodi'=>'Teknik Informatika',
        'email'=>'yumaa@gmail.com',
        'img'=>'yuma.jpg'
    ],
    [
        'nama'=>'Anin Denin Nadia',
        'nrp'=>'223040109',
        'prodi'=>'Teknik Informatika',
        'email'=>'anindn@gmail.com',
        'img'=>'anin.jpg'
    ],
    [
        'nama'=>'Nayara Christony',
        'nrp'=>'223040122',
        'prodi'=>'Teknik Informatika',
        'email'=>'nayaracht@gmail.com',
        'img'=>'nayara.jpg'
    ],
    [
        'nama'=>'Al-Riza',
        'nrp'=>'223040123',
        'prodi'=>'Teknik Informatika',
        'email'=>'Alrizaa@gmail.com',
        'img'=>'riza.jpg'
    ],
    [
        'nama'=>'Subagiono Prakoso',
        'nrp'=>'223040124',
        'prodi'=>'Teknik Informatika',
        'email'=>'Gio@gmail.com',
        'img'=>'gio.jpg'
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5a.php</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li><img src="img/<?=$mhs["img"]; ?>" alt="pict" width=100></li>
            <li>Nama : <?= $mhs['nama'] ?></li>
            <li>NRP : <?= $mhs['nrp'] ?></li>
            <li>Jurusan : <?= $mhs['prodi'] ?></li>
            <li>E-mail : <?= $mhs['email'] ?></li>
        </ul>
        <?php endforeach ?>
</body>
</html>