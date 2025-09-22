<?php
// Array berisi data buah
$buah = [
    ["nama" => "Mangga", "deskripsi" => "Manis, kadang kecut"],
    ["nama" => "Jeruk", "deskripsi" => "Kecut"],
    ["nama" => "Alpukat", "deskripsi" => "Biasa Aja"],
];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buah-Buahan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body class="p-4">

    <h4>Daftar buah-buahan</h4>
    <div class="d-flex gap-3">

        <?php foreach ($buah as $b): ?>
            <?php 
                
                if ($b["nama"] === "Jeruk") {
                    $classCard = "bg-warning"; 
                } elseif ($b["nama"] === "Mangga") {
                    $classCard = "bg-danger"; 
                } elseif ($b["nama"] === "Alpukat") {
                    $classCard = "bg-success";
                } else {
                    $classCard = "";
                }
            ?>
            <div class="card <?= $classCard ?>" style="width: 12rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $b["nama"]; ?></h5>
                    <p class="card-text"><?= $b["deskripsi"]; ?></p>
                </div>
            </div>
        <?php endforeach; ?>

    </div>

 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
