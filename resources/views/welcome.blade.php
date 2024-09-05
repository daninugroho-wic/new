<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="css/home.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'rel='stylesheet'>

</head>

<body>
    @if (session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <div id="header">
        <div class="container">
            <nav>
                <img src="img/nn2.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#service">Service</a></li>
                    <li><a href="#portofolio">Portofolio</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i class='bx bx-x' onclick="closemenu()"></i>
                </ul>
                <i class='bx bx-menu' id='menu-icon' onclick="openmenu()"></i>

                <!-- Login/Registration Links -->
                @if (Route::has('login'))
                    <nav class="flex flex-1 justify-end">
                        <ul id="sidemenu">
                            <li>
                                @auth
                                    <a href="{{ url('/dashboard') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Dashboard
                                    </a>
                                @else
                                    <a href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                            Register
                                        </a>
                                    @endif
                                @endauth
                            </li>
                        </ul>
                    </nav>
                @endif
            </nav>
            <div class="header-text">
                <p>PORTOFOLIO</p>
                <h1>Hai Saya <span>Dani Nugroho Wicaksono</span><br>Dari Sukoharjo</h1>
            </div>
        </div>
    </div>
</body>

</html>

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
