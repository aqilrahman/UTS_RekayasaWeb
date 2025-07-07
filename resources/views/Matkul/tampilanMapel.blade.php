<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Mata Pelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous" />
</head>

<body>
    <!--Navbar-->
    @include('nav')
    <div class="container mt-4">
        <div class="d-flex justify-content-center mb-4">
            <h2>Mata Pelajaran</h2>
        </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahMapelModal">
                Tambah Mata Kuliah
            </button>
        </div>

        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th scope="col" style="width: 5%;">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kode</th>
                    <th scope="col">SKS</th>
                    <th scope="col">Dosen Mengajar</th>
                    <th scope="col" style="width: 15%;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($matkul as $mt)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $mt->nama }}</td>
                        <td>{{ $mt->kode }}</td>
                        <td>{{ $mt->sks }}</td>
                        <td>{{ $mt->dosen->nama }}</td>
                        <td>
                            <a href="{{ route('MataKuliah.show', $mt->id) }}" class="btn btn-sm btn-warning me-1">Edit</a>
                            <form action="{{ route('MataKuliah.destroy', $mt->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahMapelModal" tabindex="-1" aria-labelledby="tambahDosenLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="#" method="POST">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tambahMapelLabel">Tambah Mata Kuliah</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" id="nama" name="nama" required />
                        </div>
                        <div class="mb-3">
                            <label for="kode" class="form-label">Kode</label>
                            <input type="text" class="form-control" id="kode" name="kode" required />
                        </div>
                        <div class="mb-3">
                            <label for="sks" class="form-label">SKS</label>
                            <input type="number" class="form-control" id="sks" name="sks" required
                                min="1" max="6" />
                        </div>
                        <div class="mb-3">
                            <label for="kode_dosen" class="form-label">Dosen Pengajar</label>
                            <select class="form-select" id="kode_dosen" name="kode_dosen" required>
                                <option value="" selected disabled>Pilih Dosen</option>
                                @foreach ($dosen as $dosen)
                                    <option value="{{ $dosen->id }}">{{ $dosen->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan Dosen</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
