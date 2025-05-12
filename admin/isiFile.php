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

        // untuk whislist buku
        elseif($page=='wishlistBuku'){
            include "wishlistBuku.php";
        }
    }else {
        include "home.php";
    }
//simpan :isifile    
    ?>
</body>
</html>