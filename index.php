<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>

<body>
    <header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graffiti Text</title>
    <!-- Link font Russo One dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <style>
        /* Styling untuk teks graffiti */
        .graffiti-text {
            font-family: 'Russo One', sans-serif;
            font-size: 3em;
            color: #333;
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.5);
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <!-- Teks yang ingin diubah menjadi gaya graffiti -->
    <h1 class="graffiti-text">website dinamis</h1>
</body>
</html>
        <!-- navbar -->
        <?php include "includes/navbar.php" ?>
        <!-- ./navbar -->

        <!-- konten -->
        <div class="container mt-3">
            <?php include "konten.php"?>
        </div>
        <!-- konten -->

        <script src="assets/jquery-3.7.1.js"></script>
        <script src="assets/datatables/dataTables.js"></script>

        <script src="assets/js/bootstrap.bundle.min.js"></script>

        <script>
        new DataTable('#example');
        </script>

</body>

</html>