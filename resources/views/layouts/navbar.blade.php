<head>
    <link rel="stylesheet" href="visimisi.css">
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('accordionSidebar');
            sidebar.classList.toggle('toggled');
        }
    </script>
</head>
<nav class="custom-navbar">
    <button class="fa-solid fa-circle-arrow-left" onclick="toggleSidebar()" style="color: #f8f9fa; cursor: pointer;"></button>
    <div class="navbar-right text-white text-right p-2 ml-auto">
        <i class="far fa-bell"></i>
        <span class="mr-2">Pemberitahuan</span>
    </div>
</nav>

<!-- Navbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow custom-navbar" style="height:45px">
    
    <!-- Topbar Search -->
    <div class="navbar-left text-secondary">
        <span><b>Visi Misi</b></span>
    </div>

    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">
        <!-- Nav Item - Alerts -->
        <li class="nav-item">
            <a class="nav-link text-secondary" href="#" role="button" style="font-size: 14px;">
                Dashboard
            </a>
        </li>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i>/</i>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="visimisi" style="color: #08a4c4; font-size: 14px; ">
                    Visi Misi
                </a>
            </li>
        </ul>
    </ul>
</nav>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
