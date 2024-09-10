<!-- resources/views/kontak.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Project</title>
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
        <h1 class="mb-4">Edit Project</h1>
        {{-- ISI KONTEN DI SINI --}}
        <div class="container">
        
            <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
        
                <div class="form-group">
                    <label for="name">Project Name:</label>
                    <input type="text" name="judul" class="form-control" value="{{ $project->judul }}">
                </div>
        
                <div class="form-group">
                    <label for="deskripsi">Project deskripsi:</label>
                    <input type="file" name="deskripsi" class="form-control">
                </div>
        
                @if ($project->image)
                    <div class="form-group">
                        <img src="{{ asset('images/' . $project->image) }}" alt="{{ $project->name }}" width="150">
                    </div>
                @endif
        
                <button type="submit" class="btn btn-primary">Update</button>
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
