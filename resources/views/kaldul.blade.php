<html lang="en">

<head>
    <title>5026241012 - Linktree Kedai Kaladulu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Outfit:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <script>
        function showme()
        {
            //alert("Halo Selamat Siang");
            Swal.fire({
                title: "Halo!",
                text: "Selamat Siang",
                icon: "success"
            });
            console.log("Ini baris 18, sudah sampai disini");
            a = 18 + 10;
            console.log("Hasil PEnjumlahan : " + a);
            c = 1 * 2 * 3 ;
            console.log ("Hasil perkalian : " + c)
        }


        function changeText() {
            const element = document.getElementById("intro");
            element.innerHTML = "Sistem Informasi ITS";
        }

        function changeStyle(){
            const element = document.getElementById("tombol");
            element.style.color = "red";
            element.style.background = "yellow";
        }

    </script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #343A3C;
            color: white;
            text-align: center;
        }

        .container {
            max-width: 550px;
            margin: 40px auto 0;
            padding: 20px;
            background-color: #2A3235;
            border-radius: 20px 20px 0 0;
            position: relative;
        }

        /* Profil bagian atas tengah */
        .fotoprofil {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-top: 50px;
        }

        .username {
            font-size: x-large;
            font-weight: bold;
            margin-top: 10px;
        }

        .bio {
            font-size: medium;
            color: #ffffff;
            margin-bottom: 30px;
            font-weight: 500;
        }

        /* Link card */
        .link-card {
            display: flex;
            align-items: center;
            background: #ffffff;
            color: #2E3840;
            text-decoration: none;
            padding: 10px;
            margin: 10px 10px;
            position: relative;
            border-radius: 12px;

        }

        .link-card:hover {
            background: #f1f0f0;
        }

        .link-card img {
            width: 50px;
            height: 50px;
            object-fit: cover;
            margin-right: 10px;
        }

        .link-text {
            flex: 1;
            padding-right: 30px;
        }

        /* Icon titik tiga */
        .menu-btn {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            background: transparent;
            color: #bdbcbc;
            cursor: pointer;
            border-radius: 50%;
        }

        .menu-btn:hover {
            opacity: 1;
            background: #0000001a;
        }

        /* Judul Link */
        .judul {
            font-weight: 500;
        }

        /* Detail Link */
        .desc {
            color: #bdbcbc;
            font-size: small;
            font-weight: 500;
            line-height: 1.2;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            line-clamp: 1;
        }

        /* Icon atas */
        .iconatas {
            position: absolute;
            top: 20px;
            left: 0;
            width: 100%;
        }

        .icon-btn {
            position: absolute;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #ffffffb3;
            color: black;
            border: 1px solid #ffffff66;
            backdrop-filter: blur(5px);
            cursor: pointer;
            transition: 0.2s;
        }

        .icon-btn:hover {
            background: #ffffff;
        }

        .icon-btn:active {
            transform: scale(0.95);
        }

        /* Icon atas kiri */
        .icon-btn:first-child {
            left: 20px;
        }

        /* Icon atas kanan */
        .icon-btn:last-child {
            right: 20px;
        }

        /* Join Linktree */
        .cta-button {
            display: flex;
            justify-content: center;
            align-items: center;
            width: fit-content;
            max-width: 320px;
            margin: 70px auto 30px;
            padding: 15px 15px;
            background-color: #ffffff;
            color: #000;
            border: 1px solid #ddd;
            border-radius: 9999px;
            text-decoration: none;
            font-weight: bold;
            font-size: medium;
            box-shadow: 0px 4px 8px #00000033;
            transition: all 0.2s ease-in-out;
        }

        .cta-button:hover {
            background-color: #f2f2f2;
            border-color: #ccc;
        }

        .cta-button:active {
            transform: scale(0.98);
        }

        /* Footer */
        .footer-links {
            text-align: center;
            margin-bottom: 30px;
            font-size: x-small;
            color: #ffffff;
        }

        .footer-links a {
            color: #ffffff;
            font-weight: 600;
            text-decoration: none;
            margin: 0 2px;
            transition: color 0.2s ease;
        }

        .footer-links a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .logososmed {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 15px;
            margin-bottom: 20px;
        }

        .sosmed-item img {
            width: 32px;
            height: 32px;
            object-fit: contain;
            transition: 0.3s;
        }

        /* Efek saat ikon disentuh mouse (Hover) */
        .sosmed-item img:hover {
            transform: scale(1.1);
            filter: brightness(1.2);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="iconatas">
            <!-- logo linktree di kiri atas -->
            <div class="icon-btn">
                <img src="assets/img/logolinktree.png" alt="logolinktree" width="20px" height="20px">
            </div>
            <!-- Icon share di kanan atas-->
            <div class="icon-btn">
                <img src="assets/img/tombolshare.png" alt="tombolshare" width="20px" height="20px">
            </div>
        </div>
        <!-- Profile -->
        <div class="header-container">
            <img src="assets/img/fotoprofilkaladulu.png" alt="profile" class="fotoprofil">

            <div id="intro" class="username">Kedai Kaladulu</div>
            <div class="bio">tempat berkoempoel & bersantap 📍Jl. Dharma <br> Husada Indah, SBY 📍Jl. Panglima Sudirman,
                Pasuruan</div>
        </div>
        <!-- Card 1 (Menu) -->
        <a id="tombol" href="https://ugc.production.linktr.ee/d746dba8-047e-484e-b342-75a37ca62e38_Kedai-Kaladulu---Menu-Book-compressed--1-.pdf"
            class="link-card" target="_blank">
            <img src="assets/img/iconjempol.png" alt="">
            <div class="link-text">
                <div class="judul">Buku Menu</div>
                <div class="desc">Document</div>
            </div>
            <button class="menu-btn" onclick="event.stopPropagation()">
                <svg width="4" height="14" viewBox="0 0 3 11">
                    <path d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z" fill="currentColor"></path>
                </svg></button>
        </a>

        <!-- Card 2 (Grab Food) -->
        <a href="https://food.grab.com/id/en/restaurant/online-delivery/6-C7ATRBMCBA4ZHE?sourceID=20250711_132504_22D83C974F364CE19355FAA5F0DED266_MEXMPS"
            class="link-card">
            <img src="assets/img/iconsepeda.png" alt="">
            <div class="link-text">
                <div class="judul">Grab Food</div>
            </div>
            <button class="menu-btn" onclick="event.stopPropagation()">
                <svg width="4" height="14" viewBox="0 0 3 11">
                    <path
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z"
                        fill="currentColor"></path>
                </svg>
            </button>
        </a>

        <!-- Card 3 (Reservasi Pasuruan) -->
        <a href="https://api.whatsapp.com/send/?phone=6281315202277&text=Halo%2C+saya+ingin+reservasi.&type=phone_number&app_absent=0"
            class="link-card">
            <img src="assets/img/iconwhatsappitem.png" alt="">
            <div class="link-text">
                <div class="judul">Reservasi Pasuruan</div>
            </div>
            <button class="menu-btn" onclick="event.stopPropagation()">
                <svg width="4" height="14" viewBox="0 0 3 11">
                    <path
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z"
                        fill="currentColor"></path>
                </svg>
            </button>
        </a>

        <!--Card 4 (Reservasi Dharmahusada)-->
        <a href="https://api.whatsapp.com/send?phone=6282128541486&text=Halo%20Kedai%20Kaladulu%2C%20saya%20ingin%20reservasi%20tempat%20koempoel%20%F0%9F%98%8A%F0%9F%91%8B%F0%9F%8F%BB"
            class="link-card" target="_blank">
            <img src="assets/img/iconwhatsappputih.png" alt="">
            <div class="link-text">
                <div class="judul">Reservasi Dharmahusada</div>
            </div>
            <button class="menu-btn" onclick="event.stopPropagation()">
                <svg width="4" height="14" viewBox="0 0 3 11">
                    <path
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z"
                        fill="currentColor"></path>
                </svg>
            </button>
        </a>

        <!--Card 5 (Lokasi Kaladulu)-->
        <a href="https://www.google.com/maps?ll=-7.276566,112.77294&z=17&t=m&hl=en-US&gl=US&mapclient=embed&cid=9655527994794887454"
            class="link-card">
            <img src="assets/img/iconmap.png" alt="">
            <div class="link-text">
                <div class="title">Lokasi Kompoel Disini</div>
                <div class="desc">
                    <svg viewBox="0 0 32 32" width="16" height="16" style="vertical-align: middle;">
                        <path fill="currentColor"
                            d="M16 3a9 9 0 0 0-9 9c0 6.75 9 17 9 17s9-10.25 9-17a9 9 0 0 0-9-9Zm0 12.5a3.5 3.5 0 1 1 0-7 3.5 3.5 0 0 1 0 7Z">
                        </path>
                    </svg>
                    Jl. Raya Dharma Husada Indah No.D-16, Mulyorejo, Surabaya
                </div>
            </div>
            <button class="menu-btn" onclick="event.stopPropagation()">
                <svg width="4" height="14" viewBox="0 0 3 11">
                    <path
                        d="M1.33333 10.6667C0.966667 10.6667 0.652778 10.5361 0.391667 10.275C0.130556 10.0139 0 9.7 0 9.33333C0 8.96667 0.130556 8.65278 0.391667 8.39167C0.652778 8.13056 0.966667 8 1.33333 8C1.7 8 2.01389 8.13056 2.275 8.39167C2.53611 8.65278 2.66667 8.96667 2.66667 9.33333C2.66667 9.7 2.53611 10.0139 2.275 10.275C2.01389 10.5361 1.7 10.6667 1.33333 10.6667ZM1.33333 6.66667C0.966667 6.66667 0.652778 6.53611 0.391667 6.275C0.130556 6.01389 0 5.7 0 5.33333C0 4.96667 0.130556 4.65278 0.391667 4.39167C0.652778 4.13056 0.966667 4 1.33333 4C1.7 4 2.01389 4.13056 2.275 4.39167C2.53611 4.65278 2.66667 4.96667 2.66667 5.33333C2.66667 5.7 2.53611 6.01389 2.275 6.275C2.01389 6.53611 1.7 6.66667 1.33333 6.66667ZM1.33333 2.66667C0.966667 2.66667 0.652778 2.53611 0.391667 2.275C0.130556 2.01389 0 1.7 0 1.33333C0 0.966667 0.130556 0.652778 0.391667 0.391667C0.652778 0.130556 0.966667 0 1.33333 0C1.7 0 2.01389 0.130556 2.275 0.391667C2.53611 0.652778 2.66667 0.966667 2.66667 1.33333C2.66667 1.7 2.53611 2.01389 2.275 2.275C2.01389 2.53611 1.7 2.66667 1.33333 2.66667Z"
                        fill="currentColor"></path>
                </svg>
            </button>
        </a>

        <button class="btn btn-primary" onclick="showme()"> Show me</button>
        <button class="btn btn-primary" onclick="changeText()"> Change Text</button>
        <button class="btn btn-primary" onclick="changeStyle()"> Change Style</button>

        <!---logo sosmed ig dan tiktok-->
        <div class="logososmed">
            <a href="https://www.instagram.com/kedaikaladulu" target="_blank" class="sosmed-item">
                <img src="assets/img/logoinstagramputih.png" alt="Instagram">
            </a>

            <a href="https://www.tiktok.com/@kedaikaladulu" target="_blank" class="sosmed-item">
                <img src="assets/img/logotiktokputih.png" alt="TikTok">
            </a>
        </div>

        <!-- Join Linktree -->
        <a href="https://linktr.ee/?utm_source=linktree&amp;utm_medium=profile&amp;utm_campaign=footer_logo_cta&amp;utm_content=photoismid"
            class="cta-button">
            <span>Join kedaikaladulu on Linktree</span>
        </a>
        <!-- Footer -->
        <div class="footer-links">
            <a href="#">Cookie Preferences</a>
            <span>•</span>
            <a href="#">Report</a>
            <span>•</span>
            <a href="#">Privacy</a>
            <span>•</span>
            <a href="#">Explore</a>
        </div>
    </div>
</body>

</html>
