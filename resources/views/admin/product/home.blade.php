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
            <a class="navbar-brand ms-1" href="products">Product</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">

                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1 class="mb-4">Daftar Produk</h1>


        <div class="d-flex justify-content-end mb-1">
            <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add Product</a>
        </div>

        @if (Session::has('Berhasil'))
            <div class="alert alert-success" role="alert">
                {{ session::get('Berhasil') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Dibuat Pada</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($products as $product)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->category }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td>

                            <a href="{{ route('admin.products.edit', ['id' => $product->id]) }}" type="button"
                                class="btn btn-secondary">Edit</a>
                            <a href="{{ route('admin.products.delete', ['id' => $product->id]) }}" type="button"
                                class="btn btn-secondary">Hapus</a>

                        </td>
                    </tr>
                @empty
                    <tr>
                        <td class="text-center" colspan="6">Product not found</td>
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
