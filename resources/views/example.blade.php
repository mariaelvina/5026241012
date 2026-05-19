<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 4 Example - Colors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #fff5f7;
            font-family: 'Outfit', sans-serif;
        }

        /* FONT JUDUL */
        .font-judul {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 45px;
            margin-top: 30px;
            color: #c2185b;
        }

        /* FONT SUBJUDUL */
        .font-subjudul {
            font-family: 'Outfit', sans-serif;
            font-weight: 300;
            font-size: 20px;
            margin-top: 10px;
            margin-left: 5px;
            color: #e91e8c;
        }

        /* HEADER TABEL */
        .header-tabel {
            font-family: 'Outfit', sans-serif;
            font-weight: 600;
            font-size: 18px;
            margin-top: 30px;
            color: #880e4f;
            margin-left: 0;
            margin-right: 0;
        }

        /*ini buat atur per kolom di baris header tabel*/
        .header-tabel .col-3,
        .header-tabel .col-7,
        .header-tabel .col-2 {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            border-color: #f48fb1 !important;
            background-color: #fce4ec;
        }

        /* BARIS ISI TUGASNYA */
        .baris-tugas {
            margin-left: 0;
            margin-right: 0;
            font-family: 'Outfit', sans-serif;
            font-size: 16px;
        }

        /*ini buat atur per kolom di baris isi tugas*/
        .baris-tugas .col-3,
        .baris-tugas .col-7,
        .baris-tugas .col-2 {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 55px;
            border-color: #f8bbd0 !important;
            padding: 10px;
            text-align: center;
        }

        /* BADGE STATUS */
        .badge-selesai {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
        }

        .badge-proses {
            background-color: #fff8e1;
            color: #f57f17;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
        }

        .badge-belum {
            background-color: #fce4ec;
            color: #c2185b;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            opacity: 0.85;
        }

        /* TAMPILAN LINK */
        .link-tugas {
            color: #e91e8c;
            font-size: 14px;
            text-decoration: none;
        }

        .link-tugas:hover {
            color: #880e4f;
            text-decoration: underline;
        }

        /* TEKS STATUS */
        .teks-selesai {
            color: #2e7d32;
            text-decoration: line-through;
        }

        .teks-proses {
            color: #f57f17;
        }

        .teks-belum {
            color: #c2185b;
        }

        /* KET WARNA */
        .keterangan {
            margin-top: 30px;
            padding: 15px 20px;
            background-color: #fce4ec;
            border-radius: 10px;
            font-size: 14px;
            color: #880e4f;
        }
    </style>
</head>

<body>
    <div class="container">

        <!-- JUDUL -->
        <div>
            <h1 class="font-judul">📋 LIST TUGAS VINA!</h1>
        </div>
        <div>
            <h2 class="font-subjudul">Semakin cepet selesai, semakin cepet nyantai :P</h2>
        </div>

        <!-- HEADER TABEL -->
        <div class="row header-tabel">
            <div class="col-3 border">
                Status
            </div>
            <div class="col-7 border">
                Detail Tugas
            </div>
            <div class="col-2 border">
                Link
            </div>
        </div>

        <!-- BARIS 1 - Belum -->
        <div class="row baris-tugas">
            <div class="col-3 border border-secondary">
                <span class="badge-belum">❌ Belum</span>
            </div>
            <div class="col-7 border border-secondary">
                <span class="teks-belum">PWEB - Implementasi BS4 (sesuai pembagian di sps)</span>
            </div>
            <div class="col-2 border border-secondary">
                <a href="#" class="link-tugas">Lihat →</a>
            </div>
        </div>

        <!-- BARIS 2 - Belum -->
        <div class="row baris-tugas">
            <div class="col-3 border border-secondary">
                <span class="badge-belum">❌ Belum</span>
            </div>
            <div class="col-7 border border-secondary">
                <span class="teks-belum">DMJK (Handout 4)</span>
            </div>
            <div class="col-2 border border-secondary">
                <a href="#" class="link-tugas">Lihat →</a>
            </div>
        </div>

        <!-- BARIS 3 - Sedang Dikerjakan -->
        <div class="row baris-tugas">
            <div class="col-3 border border-secondary">
                <span class="badge-proses">⏳ On Going</span>
            </div>
            <div class="col-7 border border-secondary">
                <span class="teks-proses">Tugas DPP (PPT Define)</span>
            </div>
            <div class="col-2 border border-secondary">
                <a href="#" class="link-tugas">Lihat →</a>
            </div>
        </div>

        <!-- BARIS 4 - Selesai (Implementasi dari Opacity) -->
        <div class="row baris-tugas" style="opacity: 0.5;">
            <div class="col-3 border border-secondary">
                <span class="badge-selesai">✅ Selesai</span>
            </div>
            <div class="col-7 border border-secondary">
                <span class="teks-selesai">DLH (Buat Starschema dari soal di PPT)</span>
            </div>
            <div class="col-2 border border-secondary">
                <a href="#" class="link-tugas">Lihat →</a>
            </div>
        </div>

        <!-- BARIS 5 - Selesai (Implementasi dari Opacity) -->
        <div class="row baris-tugas" style="opacity: 0.5;">
            <div class="col-3 border border-secondary">
                <span class="badge-selesai">✅ Selesai</span>
            </div>
            <div class="col-7 border border-secondary">
                <span class="teks-selesai">Tugas DPP (PPT Needfinding)</span>
            </div>
            <div class="col-2 border border-secondary">
                <a href="#" class="link-tugas">Lihat →</a>
            </div>
        </div>
        <br>

        <!-- KETERANGAN WARNA (Implementasi dari Background Colors)-->
        <p class="bg-success text-white">Tugas selesai</p>
        <p class="bg-warning">Tugas sedang dikerjakan</p>
        <p class="bg-danger text-white">Tugas belum dikerjakan</p>

        <br>

    </div>
</body>

</html>
