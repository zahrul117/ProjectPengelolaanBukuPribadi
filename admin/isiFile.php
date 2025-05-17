<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Isi File</title>
</head>

<body>
    <?php
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        if($page=='home'){
            include "home.php";
        }
        //untuk buku
        elseif($page=='tampilBuku') {
            include "BukuTampil.php";
        }
        elseif($page=='tambahBuku'){
            include "BukuTambah.php";
        }
        elseif($page=='hapusBuku'){
            include "BukuHapus.php";
        }
        elseif($page=='editBuku'){
            include "BukuEdit.php";
        }

        // untuk whislist buku
        elseif($page=='wishlistBuku'){
            include "wishlistTampil.php";
        }
        elseif($page=='tambahWishlist'){
            include "wishlistTambah.php";
        }
        elseif($page=='hapusWishlist'){
            include "wishlistHapus.php";
        }
        elseif($page=='editWishlist'){
            include "wishlistEdit.php";
        }

        // untuk ulasan buku
        elseif($page=='tampilUlasan'){
            include "UlasanTampil.php";
        }
        elseif($page=='tambahUlasan'){
            include "UlasanTambah.php";
        }
    }else {
        include "home.php";
    }
//simpan :isifile    
    ?>
</body>
</html>