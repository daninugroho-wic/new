<!-- resources/views/kontak.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Kontak</title>
    <link rel="stylesheet" href="css/kontak.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="/">Admin Dashboard</a>
            <a class="navbar-brand ms-5" href="kontak">Kontak</a>
            <a class="navbar-brand ms-1" href="products">Product</a>
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
    <div class="container mt-5">
        <h1 class="mb-4">Edit Kontak</h1>
        {{-- ISI KONTEN DI SINI --}}
    </div>
    </div>
    </td>
</body>
<style>
    body {
        background: url(/img/nb.jpg);
        background-size: cover;
    }

    .mb-4 {
        color: orange
    }
</style>

</html>
