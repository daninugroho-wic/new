<!-- resources/views/kontak.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kontak</title>
    <link rel="stylesheet" href="css/kontak.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="/admin/dashadmin">Admin Dashboard</a>
            <a class="navbar-brand ms-5" href="kontak">Kontak</a>
            <a class="navbar-brand ms-1" href="products">Skill</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Kontak</h1>
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
                @forelse ($kontak as $kontak)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $kontak->nama }}</td>
                        <td>{{ $kontak->email }}</td>
                        <td>{{ $kontak->pesan }}</td>
                        <td>{{ $kontak->created_at }}</td>
                        <td>
                            <a href="{{ route('kontak.edit', ['id' => $kontak->id]) }}"type="button"
                                class="btn btn-secondary">Edit</a>
                            <a href="{{ route('kontak.delete', ['id' => $kontak->id]) }}"type="button"
                                class="btn btn-secondary">Hapus</a>
                        </td>
                    <tr>
                    @empty
                    <tr>
                        <td class="text-center" colspan="5">Pduct not found</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
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
