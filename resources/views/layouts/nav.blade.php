<nav class="container d-flex justify-content-between">
    <div class="mt-1">
        <a href="/">
            <img src="/img/logo.png" alt="logo" height="50px" width="150px">
        </a>
    </div>
    <span id="icon-nav" style="font-size:30px;cursor:pointer; " onclick="openNav()">&#9776;</span>

    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/">Beranda</a>
        <span> Profil</span>
        <ul>
            <li><a href="/sejarah">Sejarah Desa</a></li>
            <li><a href="/informasi">Informasi Desa</a></li>

        </ul>
        <a href="/komoditas">Komoditas</a>
        <ul>
            <li><a href="/komoditas#perikanan">Sektor Perikanan</a></li>
            <li><a href="/komoditas#pertanian">Sektor Pertanian</a></li>
        </ul>
        <a href="/umkm">UMKM</a>
        <ul>
            <li><a href="/umkm#kuliner">Bidang Kuliner</a></li>
            <li><a href="/umkm#kerajinan">Bidang Kerajinan</a></li>
        </ul>
        @if (auth()->check())
            <a href="/dashboard">Dashboard</a>
            <form action="/logout" method="post">
                @csrf
                <button type="submit">Sign Out</button>
            </form>
        @else
            <a href="/login">Login Admin</a>
        @endif
    </div>



    <div class="d-flex" id="nav-normal">
        <a class="d-flex align-items-center" href="/" style="margin-right: 20px">Beranda</a>
        <span class="dropdown-profil mx-2 d-flex align-items-center">
            <span> Profil</span>
            <div class="dropdown-content-profil">
                <a href="/sejarah">Sejarah Desa</a>
                <a href="/informasi">Informasi Desa</a>
            </div>
        </span>
        <span class="dropdown-komoditas mx-2 d-flex align-items-center">
            <a href="/komoditas">Komoditas</a>
            <div class="dropdown-content-komoditas">
                <a href="/komoditas#perikanan">Sektor Perikanan</a>
                <a href="/komoditas#pertanian">Sektor Pertanian</a>
            </div>
        </span>
        <span class="dropdown-umkm mx-2 d-flex align-items-center">
            <a href="/umkm">UMKM</a>
            <div class="dropdown-content-umkm">
                <a href="/umkm#kuliner">Bidang Kuliner</a>
                <a href="/umkm#kerajinan">Bidang Kerajinan</a>
            </div>
        </span>
        @if (auth()->check())
        <span class="mx-2 d-flex align-items-center">
            <a href="/dashboard">Dashboard</a>
        </span>
            <form action="/logout" method="post">
                @csrf
                <button class="login-btn mx-2 my-2" type="submit">Sign Out</button>
            </form>
        @else
            <a href="/login">
                <button class="login-btn mx-2 my-2">
                    Login Admin
                </button>
            </a>
        @endif

    </div>
</nav>


<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "50%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
</script>
