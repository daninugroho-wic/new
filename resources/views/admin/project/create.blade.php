<!-- resources/views/kontak.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Project</title>
    <link rel="stylesheet" href="css/kontak.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand ms-3" href="/admin/projects">Admin Dashboard</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <h1 class="mb-4">Tambah Kontak</h1>
        {{-- ISI KONTEN DI SINI --}}
        <div class="container">
            {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
        
            <form action="{{ route('admin.project.save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Project Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter project name" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Project Deskripsi:</label>
                    <input type="text" name="deskripsi" class="form-control" placeholder="Enter Project diskripsi" value="{{ old('deskripsi')}}">
                </div>
                <div class="form-group">
                    <label for="image">Project Image:</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
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
