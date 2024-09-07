<!-- resources/views/addpro.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Addpro</title>
    <link rel="stylesheet" href="css/addpro.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Daftar Addpro</h1>
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
                @foreach ($addpro as $addpro)
                    <tr>
                        <td>{{ $addpro->id }}</td>
                        <td>{{ $addpro->nama }}</td>
                        <td>{{ $addpro->email }}</td>
                        <td>{{ $addpro->pesan }}</td>
                        <td>{{ $addpro->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <td>
        <div class="d-flex">
        <a href="dashboard" class="btn btn-success">edit</a>
        <form action="/addpro{{$addpro->id}}" method="POST">
            @method('delete');
            @csrf
            <button type="submit" class="btn btn-danger">Hapus</button>
        </form>
    </div>
    </td>
</body>
<style>
    body{
        background: url(/img/nb.jpg);
        background-size: cover;
    }

    .mb-4{
        color: orange
    }
</style>
</html>


