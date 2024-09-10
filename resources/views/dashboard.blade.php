<x-app-layout>
    <x-slot name="header">
        {{-- <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard USER') }}
        </h2> --}}
    </x-slot>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio USER</title>
    <link rel="stylesheet" href="css/home.css">
    {{-- <link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/dash.css">
    <link rel="stylesheet" href="css/project.css">
    <link rel="stylesheet" href="css/service.css"> --}}
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'rel='stylesheet'>

</head>

<body>
    @if (session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <div id="header">
        <div class="container">
            
            <div class="header-text">
                <p>PORTOFOLIO USER</p>
                <h1>Hai Saya <span>Dani Nugroho Wicaksono</span><br>Dari Sukoharjo</h1>
            </div>
        </div>
    </div>
</body>

</html>

<!-- ABOUT -->
<div id="about">
    <div class="container">
        <div class="row">
            <div class="about-col-1">
                <img src="img/pp.jpeg">
            </div>
            <div class="about-col-2">
                <h1 class="sub-title">About Me</h1>
                <p class="sub-p">Nama saya DANI NUGROHO WICAKSONO, saat ini saya sedang menempuh pendidikan di
                    semester 7 di Universitas Duta Bangsa, jurusan Sistem Informasi. Selama perjalanan akademik
                    saya, saya fokus pada pemahaman integrasi teknologi, dan saya sangat tertarik untuk menerapkan
                    pengetahuan ini di dunia nyata. Selama studi, saya telah mendapatkan pengalaman langsung dalam
                    berbagai bahasa pemrograman, manajemen basis data, dan pengembangan perangkat lunak. Saya
                    memiliki minat khusus pada pengembangan web, serta telah mengerjakan beberapa proyek yang
                    memungkinkan saya menerapkan keterampilan ini dengan efektif. Saya berharap dapat berkontribusi
                    pada proyek-proyek menarik yang sejalan dengan tujuan karir saya.</p>
                <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                </div>
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>CorelDraw</span><br>Banner, MMT</li>
                        <li><span>Photosop</span><br>Illustrator</li>
                        <li><span>VS Code</span><br>UI</li>
                    </ul>
                </div>
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>Membuat aplikasi</span><br>Microsoft Visual Studio</li>
                        <li><span>Webinar pelatihan membuat framework</span><br>Django, Flutter, ReactJS</li>
                        <li><span>Mengikuti pelatihan dicoding</span><br>Front End</li>
                    </ul>
                </div>
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>SMP Negeri 3 Sukoharjo</span><br>2015 - Pelajar</li>
                        <li><span>SMK Bina Patria 1 Sukoharjo</span><br>2018 - Teknik Komputer dan Jaringan</li>
                        <li><span>Universitas Duta Bangsa Surakarta</span><br>2021 - Sistem Informasi</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sevice -->
<div id="service">
    <div class="container">
        <h1 class="sub-title">My Programming Language</h1>
        <div class="services-list">
            <div>
                <i class='bx bxl-django'></i>
                <h2>DJANGO</h2>
                <p class="sub-p">Django adalah framework open-source gratis yang berbasis pada Python yang dapat
                    digunakan untuk mengembangkan aplikasi web. Django dirancang untuk membuat pengembangan aplikasi
                    web lebih cepat, aman, skalabel, dan mudah dirawat.</p>
                <a href="https://www.djangoproject.com/">learn more</a>
            </div>
            <div>
                <i class='bx bxl-php'></i>
                <h2>LARAVEL</h2>
                <p class="sub-p">Laravel adalah sebuah framework untuk mengembangkan aplikasi web. Dengan
                    menggunakan framework ini, kamu bisa mempercepat waktu pengembangan aplikasi, mempermudah
                    pengelolaan sumber daya dengan performa terbaik, dan mendapatkan aplikasi yang lebih aman dengan
                    OWASP security principles.</p>
                <a href="https://laravel.com/">learn more</a>
            </div>
            <div>
                <i class='bx bxl-flutter'></i>
                <h2>FLUTTER</h2>
                <p class="sub-p">Flutter adalah framework multiplatform sehingga proses pengembangan jadi lebih
                    cepat dan efisien. Serta adanya tambahan fitur Hot Reload, UI widget, data backend, platform
                    integration, aksesibilitas dan internasionalisasi, packages dan plugin yang memudahkan pembuatan
                    aplikasi oleh developer.</p>
                <a href="https://www.flutter.com/">learn more</a>
            </div>
        </div>
    </div>
</div>

<!-- PORTOFOLIO -->
<div id="portofolio">
    <div class="container">
        <div class="sub-title">My Project</div>
        <div class="work-list">
            <div class="work">
                <img src="img/n1.png">
                <div class="layer">
                    <h3>Hasil Project 1</h3>
                    <p class="sub-p">Aplikasi KRS Kartu Rencana Studi, menggunakan aplikasi visual studio </p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            <div class="work">
                <img src="img/n2.png">
                <div class="layer">
                    <h3>Hasil Project 2</h3>
                    <p class="sub-p">Website Mobile game guide, menggunakan framework flutter bahasa dart</p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            <div class="work">
                <img src="img/n3.png">
                <div class="layer">
                    <h3>Hasil Project 3</h3>
                    <p class="sub-p">Membuat tampilan interface KRS </p>
                    <a href="https://www.figma.com/design/LAnpB7Uxgggx24k7rGJ7C0/Interface-KRS-UDB?node-id=66-448&t=gXEjbFRhQH6zuoC9-1"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            <!-- Mulai dari sini, work container disembunyikan secara default -->
            <div class="work hideable">
                <img src="img/n4.png">
                <div class="layer">
                    <h3>Hasil Project 4</h3>
                    <p class="sub-p">Membuat aplikasi e-commerce menggunakan framework flutter</p>
                    <a href="https://github.com/daninugroho-wic/E-Commerce"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            <div class="work hideable">
                <img src="img/n5.png">
                <div class="layer">
                    <h3>Hasil Project 5</h3>
                    <p class="sub-p">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Dolorem numquam, ullam accusamus impedit officiis, </p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                </div>
            </div>
            <div class="work hideable">
                <img src="img/n5.png">
                <div class="layer">
                    <h3>Hasil Project 6</h3>
                    <p class="sub-p">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Dolorem numquam, ullam accusamus impedit officiis, </p>
                    <a href="#"><i class='bx bxl-github'></i></a>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="btn" id="seeMoreBtn">See more</a>
</div>

<!-- CONTACT -->
<div id="contact">
    <div class="container">
        <div class="row">
            <div class="contact-left">
                <h1 class="sub-title">Contact Me</h1>
                <p><i class='bx bxs-envelope'></i> daninugroho04@gmail.com</p>
                <p><i class='bx bxs-phone'></i> 083866474123</p>
                <div class="social-icons">
                    <a href="https://www.whatsapp.com/"><i class='bx bxl-whatsapp'></i></a>
                    <a href="https://www.facebook.com/"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.bxl-twitter.com/"><i class='bx bxl-twitter'></i></a>
                </div>
                <a href="file/meningkatkanproduk.pdf" download class="btn btn2">Download CV</a>
            </div>
            <div class="contact-right">
                <form action="{{ route('kontak.store') }}" method="POST">
                    @csrf
                    <input type="text" id="nama" name="nama" placeholder="Your Name" required>
                    <input type="email" id="email" name="email" placeholder="Your Email" required>
                    <textarea id="pesan" name="pesan" rows="6" placeholder="Your Massage"></textarea>
                    <button type="submit" class="btn btn2">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Script Function Ubah -->
<script>
    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname) {
        for (tablink of tablinks) {
            tablink.classList.remove("active-link");
        }
        for (tabcontent of tabcontents) {
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }

    var sidemeu = document.getElementById("sidemenu");
    var menuicon = document.getElementById("menuicon");

    function openmenu() {
        sidemeu.style.right = "0";
        menuicon.classList.add("hide");
    }

    function closemenu() {
        sidemeu.style.right = "-200px";
        menuicon.classList.remove("hide");
    }
    document.getElementById('seeMoreBtn').addEventListener('click', function(e) {
        e.preventDefault();
        const hideableItems = document.querySelectorAll('.hideable');
        hideableItems.forEach(function(item) {
            if (item.style.display === 'none') {
                item.style.display = 'block';
                document.getElementById('seeMoreBtn').textContent = 'See less';
            } else {
                item.style.display = 'none';
                document.getElementById('seeMoreBtn').textContent = 'See more';
            }
        });
    });
</script>
</body>

</html>

</x-app-layout>
