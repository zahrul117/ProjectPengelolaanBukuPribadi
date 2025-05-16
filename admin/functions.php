<?php
$konek = mysqli_connect('localhost', 'root', '', 'kelolabuku');


// ambil buku
function query($query)
{
    global $konek;
    $result = mysqli_query($konek, $query);
    $books = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $books[] = $row;
    }
    return $books;
}

// hitung total buku
function totalBuku()
{
    global $konek;
    $query = "SELECT COUNT(*) AS total FROM buku";
    $result = mysqli_query($konek, $query);
    $data = mysqli_fetch_assoc($result);
    return $data['total'];
}

function hitungBukuBelumDibaca()
{
    global $konek;
    $query = "SELECT COUNT(*) as total_belum_dibaca FROM buku WHERE status = 'Belum Dibaca'";
    $result = mysqli_query($konek, $query);

    $row = mysqli_fetch_assoc($result);

    return $row['total_belum_dibaca'];
}

function hitungBukuSudahDibaca()
{
    global $konek;
    $query = "SELECT COUNT(*) as total_sudah_dibaca FROM buku WHERE status = 'Sudah Dibaca'";
    $result = mysqli_query($konek, $query);

    $row = mysqli_fetch_assoc($result);

    return $row['total_sudah_dibaca'];
}

//function untuk tambah
//tambah buku
function tambahBuku($data)
{
    global $konek;

    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $tahunTerbit = htmlspecialchars($data['tahunTerbit']);
    $kategori = htmlspecialchars($data['kategori']);
    $status = htmlspecialchars($data['status']);
    $gambar = htmlspecialchars($data['gambar']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $query = "INSERT INTO buku
                Values
                ('','$judul','$penulis','$tahunTerbit','$kategori','$status','$deskripsi','$gambar')    
            ";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

// tambah Wishlist
function tambahWishlist($data){
    global $konek;

    $judul = htmlspecialchars($data['judulBuku']);
    $penulis = htmlspecialchars($data['penulis']);
    $kategori = htmlspecialchars($data['kategori']);
    $alasan = htmlspecialchars($data['alasan']);
    $gambar = htmlspecialchars($data['gambar']);
    $tanggalDiTambahkan = htmlspecialchars($data['tanggalDiTambahkan']);
    $linkBeli = htmlspecialchars($data['linkBeli']);

    $query = "INSERT INTO wishlist
                Values
                ('','$judul','$penulis','$kategori','$alasan','$gambar','$tanggalDiTambahkan','$linkBeli')
                ";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);

}

// tambah ulasan
function tambahUlasan($data){
    global $konek;

    $judul = htmlspecialchars($data['judulBuku']);
    $komentar = htmlspecialchars($data['komentar']);
    $rating = htmlspecialchars($data['rating']);
    $tanggal = htmlspecialchars($data['tanggal']);

    $query = "INSERT INTO ulasan
                Values
                ('','$judul','$komentar','$rating','$tanggal')
                ";
    mysqli_query($konek,$query);

    return mysqli_affected_rows($konek);
}
// function untuk hapus
// hapus buku
function hapusBuku($id){
    global $konek;

    mysqli_query($konek, "DELETE FROM buku WHERE id_buku = '$id'");

    return mysqli_affected_rows($konek);
}

//hapus Wishlist
function hapusWishlist($id){
    global $konek;

    mysqli_query($konek, "DELETE FROM wishlist WHERE id_wishlist = '$id'");

    return mysqli_affected_rows($konek);
}