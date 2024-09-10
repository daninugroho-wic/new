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
        <h1 class="mb-4">Daftar Project</h1>
        {{-- ISI KONTEN DI SINI --}}


        <a href="{{ route('admin.projects.create') }}" class="btn btn-primary mb-3">New Project</a>

        @if ($projects->count() > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Project Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $project->judul }}</td>
                            <td>{{ $project->deskripsi }}</td>
                            <td>
                                @if ($project->gambar)
                                    <img src="{{ asset('images/' . $project->gambar) }}" alt="{{ $project->judul }}"
                                        width="100">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('admin.projects.edit', $project->id) }}"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST"
                                    style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No projects found.</p>
        @endif

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
