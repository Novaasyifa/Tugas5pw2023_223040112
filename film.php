<?php 
$film = [
    [
        'Poster'=>'The Witch.jpg',
        'Judul'=>'The Witch: Part 1. The Subversion',
        'Tahun'=>'2018',
        'Gendre'=>['Action,','Mystery,','Sci-Fi'],
        'Pemeran utama'=>['Kim Da-mi,','Min-Soo Jo,','Choi Woo-shik'],
        'Sutradara'=>'Park Hoon-Jung'
    ],
    [
        'Poster'=>"what's_Wrong_With_Secretary_Kim.jpg",
        'Judul'=>"What's Wrong With Secretary Kim",
        'Tahun'=>'2018',
        'Gendre'=>['Romantic Comedy'],
        'Pemeran utama'=>['Park Seo-joon,','Park Min-young'],
        'Sutradara'=>'Park Joon-hwa'
    ],
    [
        'Poster'=>'Crash_Landing_on_You_main_poster.jpg',
        'Judul'=>'Crash Landing On You',
        'Tahun'=>'2019',
        'Gendre'=>['Romantic Comedy'],
        'Pemeran utama'=>['Son Ye-jin,','Hyun Bin,','Kim Jung-hyun,','Song Ji-hye'],
        'Sutradara'=>'Lee Jeong-hyo'
    ],
    [
        'Poster'=>'Our_Beloved_Summer.jpg',
        'Judul'=>'Our Beloved Summer',
        'Tahun'=>'2021',
        'Gendre'=>['Romantic Comedy,','Drama'],
        'Pemeran utama'=>['Choi Woo-shik,','Kim Da-mi,','Kim Sung-cheol'],
        'Sutradara'=>'Kim Yoon-jin'
    ],
    [
        'Poster'=>'A_Business_Proposal.jpg',
        'Judul'=>'Business Proposal',
        'Tahun'=>'2022',
        'Gendre'=>['Romantic Comedy'],
        'Pemeran utama'=>['Ahn Hyo-seop,','Kim Se-jeong,','Kim Min-kyu,','Seol In-ah'],
        'Sutradara'=>'Park Sun-ho'
    ]   
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Film</h2>
    <?php foreach($film as $f) { ?>
    <ul>
        <li>Poster: <img src="img/<?=$f["Poster"]; ?>" alt="pict" width=150></li>
        <li>Judul:<?= $f['Judul'];?></li>
        <li>Tahun: <?= $f['Tahun']; ?></li>
        <li>Gendre:
            <?php foreach($f['Gendre'] as $g) 
            echo $g;
            ?>
        </li>
        <li>Pemeran Utama:
            <?php foreach($f['Pemeran utama'] as $p) 
            echo $p;
            ?>
        </li>
        <li>Sutradara: <?= $f['Sutradara'];?></li>
    </ul>
    <?php } ?>
</body>
</html>