<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Kontak</title>
</head>
<body>
    <h1>Contact Form</h1>
    <form action="{{ route('kontak.store') }}" method="POST">
        @csrf
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="pesan">Pesan:</label>
            <textarea id="pesan" name="pesan" required></textarea>
        </div>
        <div>
            <button type="submit">Kirim</button>
        </div>
    </form>
</body>
</html>
