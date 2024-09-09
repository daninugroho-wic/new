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
                @foreach ($kontak as $kontak)
                <tr>
                    <td>{{ $kontak->id }}</td>
                    <td>{{ $kontak->nama }}</td>
                    <td>{{ $kontak->email }}</td>
                    <td>{{ $kontak->pesan }}</td>
                    <td>{{ $kontak->created_at }}</td>
                    <td>
                        <div class="d-flex">
                            <!-- Link Edit -->
                            <a href="{{ route('admin.kontak.edit', ['id' => $kontak->id]) }}" class="btn btn-secondary me-2">Edit</a>
                            
                            <!-- Form Hapus -->
                            <form action="{{ route('admin.kontak.destroy', ['id' => $kontak->id]) }}" method="POST">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            </div>
                        </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
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
