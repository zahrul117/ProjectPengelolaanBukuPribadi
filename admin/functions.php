<?php
$konek = mysqli_connect('localhost', 'root', '', 'kelolabuku');


// ambil buku
function query($query){
    global $konek;
    $result = mysqli_query($konek,$query);
    $books = [];

    while($row = mysqli_fetch_assoc($result)){
        $books[] = $row;
    }
    return $books;
}

// hitung total buku
function totalBuku() {
    global $konek;
    $query = "SELECT COUNT(*) AS total FROM buku";
    $result = mysqli_query($konek, $query);
    $data = mysqli_fetch_assoc($result);
    return $data['total'];
}

function hitungBukuBelumDibaca(){
    global $konek;
    $query = "SELECT COUNT(*) as total_belum_dibaca FROM buku WHERE status = 'Belum Dibaca'"; 
    $result = mysqli_query($konek, $query);
    
    $row = mysqli_fetch_assoc($result);
    
    return $row['total_belum_dibaca'];
}

function hitungBukuSudahDibaca(){
    global $konek;
    $query = "SELECT COUNT(*) as total_sudah_dibaca FROM buku WHERE status = 'Sudah Dibaca'"; 
    $result = mysqli_query($konek, $query);
    
    $row = mysqli_fetch_assoc($result);
    
    return $row['total_sudah_dibaca'];
}

?>