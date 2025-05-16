<?php
require 'functions.php';

$id = $_GET['id'];

if (hapusBuku($id) > 0) {
    echo '
        <!DOCTYPE html>
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "success",
                    title: "Berhasil!",
                    text: "Buku berhasil dihapus!",
                    confirmButtonText: "OK"
                }).then(() => {
                    window.location.href = "dashboard.php?page=tampilBuku";
                });
            </script>
        </body>
        </html>
        ';
    exit;
} else {
    // Alert gagal
    echo '
        <!DOCTYPE html>
        <html>
        <head>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        </head>
        <body>
            <script>
                Swal.fire({
                    icon: "error",
                    title: "Gagal!",
                    text: "Buku gagal ditambahkan.",
                    confirmButtonText: "Coba Lagi"
                }).then(() => {
                    window.location.href = "dashboard.php?page=tampilBuku";
                });
            </script>
        </body>
        </html>
        ';
    exit;
}
