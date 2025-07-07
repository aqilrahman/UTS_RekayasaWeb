<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Edit || Mata Kuliah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
</head>

<body>

    <div class="container mt-4">
        <div class="d-flex justify-content-center mb-4">
            <h2>Edit Mata Kuliah</h2>
        </div>
        <form action="#" method="POST" class="mx-auto" style="max-width: 500px;">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $matkul->nama }}"
                    required />
            </div>

            <div class="mb-3">
                <label for="kode" class="form-label">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{ $matkul->kode }}"
                    required />
            </div>

            <div class="mb-3">
                <label for="sks" class="form-label">SKS</label>
                <input type="number" class="form-control" id="sks" name="sks" value="{{ $matkul->sks }}"
                    required min="1" max="6" />
            </div>

            <div class="mb-3">
                <label for="kode_dosen" class="form-label">Dosen Pengajar</label>
                <select class="form-select" id="kode_dosen" name="kode_dosen" required>
                    <option value="" disabled>Pilih Dosen</option>
                    @foreach ($dosen as $ds)
                        <option value="{{ $ds->id }}" {{ $matkul->kode_dosen == $ds->id ? 'selected' : '' }}>
                            {{ $ds->nama }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('MataKuliah.index') }}" class="btn btn-secondary ms-2">Kembali</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
