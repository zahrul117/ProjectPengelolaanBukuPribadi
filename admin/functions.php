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
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $gambar = uploadGambarBuku();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO buku
                Values
                ('','$judul','$penulis','$tahunTerbit','$kategori','$status','$deskripsi','$gambar')    
            ";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

// function uploadGambarBuku
function uploadGambarBuku()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "
        <script>
        alert('Pilih gambar terlebih dahulu');
        </script>
        ";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
        alert('yang anda upload bukan gambar')
        </script>
        ";
        return false;
    }

    if($ukuranFile > 1000000){
        echo "
        <script>
        alert('ukuran gambar terlalu besar')
        </script>
        ";
        return false;
    }

    move_uploaded_file($tmpName, '../assets/img/buku/' . $namaFile);

    return $namaFile;
}


// tambah Wishlist
function tambahWishlist($data)
{
    global $konek;

    $judul = htmlspecialchars($data['judulBuku']);
    $penulis = htmlspecialchars($data['penulis']);
    $kategori = htmlspecialchars($data['kategori']);
    $alasan = htmlspecialchars($data['alasan']);
    $tanggalDiTambahkan = htmlspecialchars($data['tanggalDiTambahkan']);
    $linkBeli = htmlspecialchars($data['linkBeli']);

        $gambar = uploadGambarWishlist();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO wishlist
                Values
                ('','$judul','$penulis','$kategori','$alasan','$gambar','$tanggalDiTambahkan','$linkBeli')
                ";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

function uploadGambarWishlist()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    if ($error === 4) {
        echo "
        <script>
        alert('Pilih gambar terlebih dahulu');
        </script>
        ";
        return false;
    }

    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "
        <script>
        alert('yang anda upload bukan gambar')
        </script>
        ";
        return false;
    }

    if($ukuranFile > 1000000){
        echo "
        <script>
        alert('ukuran gambar terlalu besar')
        </script>
        ";
        return false;
    }

    move_uploaded_file($tmpName, '../assets/img/wishlist/' . $namaFile);

    return $namaFile;
}

// tambah ulasan
function tambahUlasan($data)
{
    global $konek;

    $judul = htmlspecialchars($data['judulBuku']);
    $komentar = htmlspecialchars($data['komentar']);
    $rating = htmlspecialchars($data['rating']);
    $tanggal = htmlspecialchars($data['tanggal']);

    $query = "INSERT INTO ulasan
                Values
                ('','$judul','$komentar','$rating','$tanggal')
                ";
    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}
// function untuk hapus
// hapus buku
function hapusBuku($id)
{
    global $konek;

    mysqli_query($konek, "DELETE FROM buku WHERE id_buku = '$id'");

    return mysqli_affected_rows($konek);
}

//hapus Wishlist
function hapusWishlist($id)
{
    global $konek;

    mysqli_query($konek, "DELETE FROM wishlist WHERE id_wishlist = '$id'");

    return mysqli_affected_rows($konek);
}

// function untuk edit
// edit buku
function editBuku($data)
{
    global $konek;

    $id = $data['id'];
    $judul = htmlspecialchars($data['judul']);
    $penulis = htmlspecialchars($data['penulis']);
    $tahunTerbit = htmlspecialchars($data['tahunTerbit']);
    $kategori = htmlspecialchars($data['kategori']);
    $status = htmlspecialchars($data['status']);
    $gambar = htmlspecialchars($data['gambar']);
    $deskripsi = htmlspecialchars($data['deskripsi']);

    $query = "UPDATE buku SET
                judul = '$judul',
                penulis = '$penulis',
                tahunTerbit = '$tahunTerbit',
                kategori = '$kategori',
                `status` = '$status',
                gambar = '$gambar',
                deskripsi = '$deskripsi'
                WHERE id_buku = '$id';
            ";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

function editWishlist($data)
{
    global $konek;

    $id = $data['id'];
    $judul = htmlspecialchars($data['judulBuku']);
    $penulis = htmlspecialchars($data['penulis']);
    $kategori = htmlspecialchars($data['kategori']);
    $alasan = htmlspecialchars($data['alasan']);
    $gambar = htmlspecialchars($data['gambar']);
    $tanggalDiTambahkan = htmlspecialchars($data['tanggalDiTambahkan']);
    $linkBeli = htmlspecialchars($data['linkBeli']);

    $query = "UPDATE wishlist SET
                judulBuku = '$judul',
                penulis = '$penulis',
                kategori = '$kategori',
                alasan = '$alasan',
                gambar = '$gambar',
                tanggalDiTambahkan = '$tanggalDiTambahkan',
                linkBeli = '$linkBeli'
                WHERE id_wishlist = '$id';
                ";

    mysqli_query($konek, $query);

    return mysqli_affected_rows($konek);
}

function cari($keyword)
{

    $query = "SELECT * FROM buku
        WHERE
        judul like '%$keyword%' OR
        kategori like '%$keyword%' OR
        `status` like '%$keyword%' 
    ";

    return query($query);
}
