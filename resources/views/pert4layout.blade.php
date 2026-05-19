<!DOCTYPE html>
<html lang="en">

<head>
    <title>Layout Week 4 - 5026241012</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        #utama {
            min-height: 100vh;
        }

        .foto {
            object-fit: cover;
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }

        .jarak-atas-bawah {
            padding-top: 150px;
            padding-bottom: 100px;
        }

        .jarak-samping {
            padding-left: 150px;
            padding-right: 100px;
        }

        .deskripsi-judul {
            color: #537cd0;
            padding-right: 70px;
        }

        .isi-poin {
            color: rgb(114, 128, 128);
            padding-right: 20px;
        }
    </style>
</head>

<body>
    <div class="container-fluid px-0">
        <div class="row align-items-stretch" id="utama">

            <!-- FOTO (diupload di imgur dulu biar bisa dapet image addressnya)-->
            <div class="col-md-4 px-0" style="position: relative;">
                <img src="Image.png" alt="foto" class="foto">
            </div>

            <!-- KONTEN TEKS -->
            <!-- Judul dan deskripsinya -->
            <div class="col-md-8 jarak-atas-bawah jarak-samping">
                <h1>Light, Fast & Powerful</h1>
                <p class="deskripsi-judul mt-3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                    ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes,
                    nascetur ridiculus</p>
                <p class="deskripsi-judul mb-3">mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>

            <!-- 4 poin berisi logo dan teks -->
                <div class="row mt-5">
                    <div class="col-md-6 mb-4">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSV9eI9JX47qGlKEiI9AWUZjZGumAZfRLJEmF_pqM7Ge5KnFp8K"
                            alt="logo" width="50" height="50" class="mb-3">
                        <h5 class="mb-2">Title Goes Here</h5>
                        <p class="isi-poin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSV9eI9JX47qGlKEiI9AWUZjZGumAZfRLJEmF_pqM7Ge5KnFp8K"
                            alt="logo" width="50" height="50" class="mb-3">
                        <h5 class="mb-2">Title Goes Here</h5>
                        <p class="isi-poin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSV9eI9JX47qGlKEiI9AWUZjZGumAZfRLJEmF_pqM7Ge5KnFp8K"
                            alt="logo" width="50" height="50" class="mb-3">
                        <h5 class="mb-2">Title Goes Here</h5>
                        <p class="isi-poin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                    <div class="col-md-6 mb-4">
                        <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSV9eI9JX47qGlKEiI9AWUZjZGumAZfRLJEmF_pqM7Ge5KnFp8K"
                            alt="logo" width="50" height="50" class="mb-3">
                        <h5 class="mb-2">Title Goes Here</h5>
                        <p class="isi-poin">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                    </div>
                </div>

            </div><!-- /col kanan -->

        </div><!-- /row utama -->
    </div><!-- /container -->

</body>

</html>
