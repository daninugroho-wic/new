<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Admin</title>
    <link rel="stylesheet" href="admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="dashadmin">Admin Dashboard</a>
            <a class="navbar-brand ms-3" href="kontak">Kontak</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <!-- Admin Dropdown Button -->
                        <button class="btn btn-dark dropdown-toggle" type="button" id="adminDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Admin
                        </button>
                
                        <!-- Dropdown Menu Positioned to the Right -->
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">
                            <!-- Profile Link -->
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile</a>
                            </li>
                
                            <!-- Log Out Link -->
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 this.closest('form').submit();">
                                        Log Out
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <!-- Main Content -->
        <div class="content p-4" id="mainContent">
            <h3>HALAMAN ADMIN</h3>
            <p>Selamat datang di halaman admin! Anda dapat mengelola aplikasi dari sini.</p>
        </div>
    </div>

    {{-- PROJECT SHOW --}}
    <div class="container mt-5">
        <h1 class="mb-4">Project</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Dibuat Pada</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach 
                ($kontak as $kontak)
                    <tr>
                        <td>{{ $kontak->id }}</td>
                        <td>{{ $kontak->nama }}</td>
                        <td>{{ $kontak->email }}</td>
                        <td>{{ $kontak->pesan }}</td>
                        <td>{{ $kontak->created_at }}</td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript to toggle sidebar
        document.getElementById('toggleSidebar').addEventListener('click', function() {
            var sidebar = document.getElementById('sidebar');
            var content = document.getElementById('mainContent');
            sidebar.classList.toggle('hide-sidebar');
            content.classList.toggle('full-width');
        });
    </script>
</body>
<style>
    body{
        background: url(/img/nb.jpg);
        background-size: cover;
    }

    .mb-4{
        color: orange
    }
    .h3{
        font: aliceblue
    }
</style>
</html>