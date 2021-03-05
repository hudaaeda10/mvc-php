    <div class="container mt-4">
        <div class="col-lg-6">
            <div class="row">
                <?php FLasher::flash(); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-toggle="modal" data-target="#formModal">
                    Tambah Mahasiswa
                </button>
                <h3>Daftar Mahasiswa</h3>
                <ul class="list-group mt-4">
                    <?php foreach ($data['mhs'] as $mhs) : ?>
                        <li class="list-group-item"><?= $mhs['nama']; ?>
                            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right ml-1" onclick="return confirm('yakin?');">Hapus</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-success float-right ml-1 tampilModalUbah" data-toggle="modal" data-target="#formModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary float-right ml-1">Detail</a>
                        </li>
                    <?php endforeach; ?>
                </ul>

            </div>
        </div>
    </div>

    <!-- modals -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Form Tambah Mahasiswa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
                        <input type="hidden" name="id" id="id">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>

                        <div class="form-group">
                            <label for="nim">Nim</label>
                            <input type="number" class="form-control" id="nim" name="nim">
                        </div>

                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select class="form-control" id="jurusan" name="jurusan">
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Pertambangan">Teknik Pertambangan</option>
                                <option value="Teknik Pertanian">Teknik Pertanian</option>
                                <option value="Teknik Perikanan">Teknik Perikanan</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email">
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                </form>
            </div>
        </div>
    </div>