<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="mb-0">Edit Kontak</h1>
                    <hr />
                    <form action="{{ route('admin.kontak.update', $kontak->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <div class="col mb-3">
                                <label class="form-label">Nama Kontak</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ old('nama', $kontak->nama) }}">
                                @error('nama')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email', $kontak->email) }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-label">Pesan</label>
                                <input type="text" name="pesan" class="form-control" placeholder="Pesan" value="{{ old('pesan', $kontak->pesan) }}">
                                @error('pesan')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="d-grid">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
