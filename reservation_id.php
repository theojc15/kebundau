<?php
	session_start();
    if (!isset($_SESSION['name'])){
        header("location:login.php");
    }
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title> Agrotourism Dau | Formulir Reservasi</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/reservation.css">
    </head>
    <body>
        <form action="insert_id.php" method="POST">
        <section class = "banner">
            <div class = "card-container">
                <div class = "card-img">
                    <!-- image here -->
                </div>

                <div class = "card-content">
                    <a href="index_id.php" style="position:relative;top:10px;right:15px;float:right;z-index:99;text-decoration:none;">x</a>

                    <h3>Reservasi</h3>
                    <form>
                        <div class = "form-row">
                            <input type = "date" placeholder="Tahun-Bulan-Hari" name="tanggal" required>
                            
                            <select name = "hours" required>
                                <option value = "hour-select">Pilih Jam</option>
                                <option value = "08:00">08: 00</option>
                                <option value = "10:00">10: 00</option>
                                <option value = "12:00">12: 00</option>
                                <option value = "14:00">14: 00</option>
                            </select>
                        </div>

                        <div class = "form-row">>
                            <input type = "text" placeholder="Nomor Telpon" name="phone" required>
                        </div>

                        <div class = "form-row">
                            <input type = "number" placeholder="Jumlah Orang" min = "1" name="number" required>
                            <select name = "location" required>
                                <option value = "location-select">Lokasi</option>
                                <option value = "Wisata Petik Jeruk">Wisata Petik Jeruk</option>
                                <option value = "Agrowisata Petik Jeruk">Agrowisata Petik Jeruk</option>
                                <option value = "Wisata Petik Jeruk Berdiri Tegak">Wisata Petik Jeruk Berdiri Tegak</option>
                                <option value = "Agrowisata Petik Jeruk Kebun Kita">Agrowisata Petik Jeruk Kebun Kita</option>
                                <option value = "Orange Harvest">Orange Harvest</option>
                            </select>
                        </div>

                        <div class = "form-row">
                            <input type = "submit" value = "BOOK VISIT" name="submit">
                        </div>
                    </form>
                </div>
            </div>
        </section>
        </form>
    </body>
</html>