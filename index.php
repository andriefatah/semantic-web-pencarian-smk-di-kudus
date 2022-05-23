<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Our CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/d4c43b34d4.js" crossorigin="anonymous"></script>

    <title>SMK BISA!</title>
</head>

<body>
    <!-- Navigation Menu -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="assets/image/smk-1.png" height="50" class="d-inline-block align-top" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#tentangKami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#cariSMK">Kenapa Pilih SMK?</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Jumbotron -->
    <div class="section-1">
        <div class="jumbotron jumbotron-fluid">
            <div class="container">
                <h1 class="display-4">Raih <span>Impianmu</span> <br> Bersama <span>SMK</span></h1>
                <p class="lead">Siap Kerja - Santun - Mandiri - Kreatif</p>
                <a href="#cariSMK" class="btn btn-primary tombol">Cari SMK</a>
            </div>
        </div>
    </div>

    <!-- Container -->
    <div class="container">
        <!-- Search Panel -->
        <div class="row justify-content-center" id="cariSMK">
            <div class="col-10 search-panel justify-content-center">
                <p>Pencarian Sekolah</p>
                <form action="result.php" method="POST">
                    <?php
                    $sekolah = "";
                    $jurusan = "";
                    $alamat = "";

                    if(isset($_POST['filter_pencarian'])){
                        if($_POST['filter_pencarian'] == "sekolah"){
                            $sekolah ="selected";
                        }else if($_POST['filter_pencarian'] == "jurusan"){
                            $jurusan = "selected";
                        }else{
                            $alamat = "selected";
                        }
                    }
                    ?>
                    <div class="form-row">
                        <div class="col-md-4">
                            <select class="form-control" name="filter_pencarian">
                                <option value="sekolah" <?php echo $sekolah; ?>>Sekolah</option>
                                <option value="jurusan" <?php echo $jurusan; ?>>Jurusan</option>
                                <option value="alamat" <?php echo $alamat; ?>>Alamat</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="kata_kunci" class="form-control" placeholder="Ketikkan Kata Kunci">
                        </div>
                        <div class="col-md-2">
                            <input type="submit" value="Cari" class="btn btn-primary" width="100%">
                        </div>
                    </div>
                </form>
            </div>
        </div>


        <div class="row section-3" id="why-smk">
            <div class="col-lg-6">
                <img src="assets/image/students.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6">
                <h3>Kenapa Saya Memutuskan <br> Memilih <span>SMK</span> ?</h3>
                <ul>
                    <li>Pengembangan Potensi Keahlian</li>
                    <li>Pembekalan Kewirausahaan</li>
                    <li>Bisa Melanjutkan ke Pendidikan Tinggi</li>
                    <li>Siap Untuk Bekerja Setelah Lulus SMK</li>
                    <li>Peluang Membuka Usaha Lebih Mudah</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        2022. Hak Cipta Dilindungi oleh Undang-undang.
    </footer>

    <!-- Modal -->
    !-- Modal -->
    <div class="modal fade" id="tentangKami" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="Tentang-Kami">Tentang Kami</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum reiciendis, adipisci pariatur enim dolorem rerum incidunt quae, nam nostrum vitae accusamus facilis eius illo, molestias qui? Explicabo similique ratione nobis.
                    Quas, blanditiis nihil hic quaerat velit inventore laboriosam laudantium quisquam reiciendis, tempora ex? Quisquam esse exercitationem dolorem veritatis deleniti aut, odit pariatur laudantium provident optio odio voluptate illo expedita consequatur.
                    Et quod iste, iusto id aliquid debitis, commodi consequatur sint ipsum doloribus veritatis ratione blanditiis, excepturi quae quia molestias est deleniti! Magni perspiciatis facilis atque sint dolorum similique cumque minima!
                    Sequi, dolore tenetur. Voluptatibus vel consectetur doloremque aut voluptates voluptatum nobis totam a corrupti unde itaque tenetur, consequatur dolore! Commodi accusamus provident dolores hic molestiae esse quam sed voluptatem eius?
                    Fugiat ab saepe, quasi id at, corrupti dicta optio obcaecati animi consectetur quidem eaque magnam ea. Vel quo velit natus odio, ab eum facere nobis. Omnis quae voluptatum consequuntur ipsum?
                    Officiis necessitatibus iusto enim, molestiae ab incidunt tenetur, facere dicta ducimus quas obcaecati consequuntur modi ullam dolores, perspiciatis ea doloribus ut dolor esse voluptatem repellat. Culpa dolorem quam voluptate aliquid.
                    Optio voluptatem sint odit ullam unde blanditiis adipisci est fugiat iusto corrupti totam aut exercitationem rem, harum doloremque ab, nisi at neque earum cum provident maxime commodi numquam necessitatibus? Impedit!
                    Saepe eius, ab quidem esse illum quibusdam facilis voluptatem accusamus deserunt assumenda explicabo, in, mollitia commodi quo doloribus eum consectetur nulla molestiae totam officiis possimus debitis dolorem nobis distinctio! Fugiat!
                    Dolorum vero deleniti totam praesentium placeat nam incidunt nesciunt et maxime officia, in aperiam vel eum aliquam, molestiae quis harum dolore, aspernatur eius reiciendis laborum recusandae. Vel labore dignissimos voluptates.
                    Dicta fugit officiis reiciendis voluptas consectetur atque dignissimos repudiandae soluta. At, quasi, suscipit dignissimos nostrum commodi dolore ut eius, mollitia saepe quia obcaecati sed expedita ea similique error. Veritatis, porro.
                    Sint exercitationem laudantium itaque quas culpa veritatis cupiditate. Ipsa unde consequatur commodi, est dolore iusto accusamus laborum fugit illo, neque voluptates porro quisquam, praesentium obcaecati odit molestiae? Quia, aliquam doloremque.
                    Adipisci sint et, hic animi quis explicabo accusantium laudantium ut quibusdam totam doloribus eligendi, at id minima doloremque. Aliquid, id ducimus! Odio, ratione optio similique autem voluptatibus est nam magnam.
                    Quis, eaque quod nisi eos eveniet quam iste unde eligendi temporibus voluptate laudantium provident! Tenetur eius rerum quasi, provident perferendis dicta quidem nobis pariatur reprehenderit nulla aliquid eum itaque ducimus?
                    Quia velit dolores laboriosam consectetur! Laudantium, voluptatem dignissimos blanditiis corrupti quod officia exercitationem culpa nisi, sunt suscipit pariatur! Magnam eius nisi reiciendis odio! Nulla ipsum aperiam inventore nisi rem magnam.
                    Hic soluta temporibus, tempora mollitia magni sint veniam dolorum natus odio, laudantium doloremque deserunt distinctio voluptate numquam quis tenetur. Optio totam ea vel officia reiciendis amet, sit culpa corrupti temporibus?
                    Provident cupiditate hic tempora accusantium laboriosam odit impedit nemo vero. Delectus pariatur amet maiores optio voluptas veniam nihil cum neque? Nesciunt voluptatum debitis reiciendis. Obcaecati quaerat tempora ut libero omnis?
                    Totam aliquam atque obcaecati? Obcaecati deleniti non laborum nam. Debitis, eos quidem. Voluptas quam enim nisi nobis, optio voluptatum, molestiae dolores iusto quae rem impedit esse magnam officiis ea atque.
                    Et nihil, harum culpa quos quae sequi nemo doloribus repellendus, sunt nobis quisquam, earum nam saepe autem esse fugiat iste ex dolor suscipit sed molestias ducimus! Possimus inventore unde quam?
                    Atque debitis totam nam dolore veniam consequuntur modi omnis? Hic qui temporibus nihil voluptates asperiores corporis nostrum totam maiores officia, molestiae, reprehenderit unde sequi alias fugiat commodi est porro aliquam?
                    Non doloremque impedit iure, voluptatum consequuntur distinctio temporibus sequi eaque doloribus sint possimus ex autem quisquam mollitia rem eum expedita magni provident recusandae ut! Minus, consequatur tempora. Harum, expedita? Atque.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal End -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>