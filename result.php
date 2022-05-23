<!DOCTYPE html>
<html lang="en">

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
            <a class="navbar-brand" href="#">
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
                        <a class="nav-link" href="index.php" data-toggle="modal" data-target="#tentangKami">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#why-smk">Kenapa Pilih SMK?</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Jumbotron -->
    <div class="section-1">
        <div class="jumbotron jumbotron-fluid">
        </div>
    </div>

    <!-- Card Result -->
    <div class="container result-page">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center">Hasil Pencarian</h3>
                <!-- Content -->
                <?php
                error_reporting(E_ALL ^  E_WARNING || E_NOTICE);
                require_once("./lib/sparqllib.php");

                $db = sparql_connect('http://localhost:3030/smk_kudus/');
                $filter = $_POST['filter_pencarian'];
                $kata_kunci = $_POST['kata_kunci'];

                
                echo 'Menampilkan hasil pencarian untuk <strong>'.strtoupper($filter).'</strong> dengan kata kunci <strong>'.strtoupper($kata_kunci).'</strong>';


                // Proses Seleksi
                if($filter === "sekolah"){
                $sparql = 'PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                PREFIX owl: <http://www.w3.org/2002/07/owl#>
                PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                PREFIX data:<http://www.semanticweb.org/asus/ontologies/2022/2/jurusan#>
                                
                SELECT ?NamaSekolah ?NamaJurusan ?AlamatSekolah
                WHERE { ?jurusan data:dimilikiOleh ?sekolah.
                ?sekolah data:namaSekolah ?NamaSekolah.
                ?jurusan data:namaJurusan ?NamaJurusan.
                ?sekolah data:terletakDi ?alamat.
                ?alamat data:alamatSekolah ?AlamatSekolah.
                FILTER regex(str(?NamaSekolah),"'.$_POST["kata_kunci"].'","i").
                }';
                $result = sparql_query($sparql);
                }else if($filter == "jurusan"){
                $sparql = 'PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                    PREFIX owl: <http://www.w3.org/2002/07/owl#>
                    PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                    PREFIX data:<http://www.semanticweb.org/asus/ontologies/2022/2/jurusan#>
                                    
                    SELECT ?NamaSekolah ?NamaJurusan ?AlamatSekolah
                    WHERE { ?jurusan data:dimilikiOleh ?sekolah.
                    ?sekolah data:namaSekolah ?NamaSekolah.
                    ?jurusan data:namaJurusan ?NamaJurusan.
                    ?sekolah data:terletakDi ?alamat.
                    ?alamat data:alamatSekolah ?AlamatSekolah.
                    FILTER regex(str(?NamaJurusan), "'.$_POST["kata_kunci"].'","i").
                    }';    
                $result = sparql_query($sparql);
                }elseif($filter == "alamat"){
                    $sparql = 'PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                    PREFIX owl: <http://www.w3.org/2002/07/owl#>
                    PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                    PREFIX data:<http://www.semanticweb.org/asus/ontologies/2022/2/jurusan#>
                                    
                    SELECT ?NamaSekolah ?NamaJurusan ?AlamatSekolah
                    WHERE { ?jurusan data:dimilikiOleh ?sekolah.
                    ?sekolah data:namaSekolah ?NamaSekolah.
                    ?jurusan data:namaJurusan ?NamaJurusan.
                    ?sekolah data:terletakDi ?alamat.
                    ?alamat data:alamatSekolah ?AlamatSekolah.
                    FILTER regex(str(?AlamatSekolah),"'.$_POST["kata_kunci"].'","i").
                    }';
                    $result = sparql_query($sparql);
                }else{
                    $sparql = 'PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                    PREFIX owl: <http://www.w3.org/2002/07/owl#>
                    PREFIX xsd: <http://www.w3.org/2001/XMLSchema#>
                    PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                    PREFIX data:<http://www.semanticweb.org/asus/ontologies/2022/2/jurusan#>
                                    
                    SELECT ?NamaSekolah ?NamaJurusan ?AlamatSekolah
                    WHERE { ?jurusan data:dimilikiOleh ?sekolah.
                    ?sekolah data:namaSekolah ?NamaSekolah.
                    ?jurusan data:namaJurusan ?NamaJurusan.
                    ?sekolah data:terletakDi ?alamat.
                    ?alamat data:alamatSekolah ?AlamatSekolah.
                    }';   
                    $result = sparql_query($sparql);   
                }
                ?>
                <table class='table table-bordered mt-2'>
                    <thead>
                        <tr>
                            <th scope='col'>Nama Sekolah</th>
                            <th scope='col'>Nama Jurusan</th>
                            <th scope='col'>Telepon</th>
                            <th scope='col'>Alamat</th>
                        </tr>
                    </thead>
                    <?php

                    while ($row = sparql_fetch_array($result)) {
                        echo "<tr>";
                        echo "<td>$row[NamaSekolah]</td>";
                        echo "<td>$row[NamaJurusan]</td>";
                        echo "<td>$row[Telepon]</td>";
                        echo "<td>$row[AlamatSekolah]</td>";
                        echo "</tr>";
                    };
                    ?>
                </table>
                <button onclick="goBack()" class="btn btn-primary mt-2 mr-auto">Kembali</button>
            </div>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>