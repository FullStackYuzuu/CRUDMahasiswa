<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">
        <?php echo $judul; ?>
    </h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Prodi
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Prodi/update'); ?>" method="POST">
                        <input type="hidden" name="id" value="<?= $Prodi['id']; ?> ">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" name="name" value="<?= $Prodi['nama']; ?> " class="form-control" id="Prodi" placeholder="Prodi">
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" name="ruang" value="<?= $Prodi['ruangan']; ?> " class="form-control" id="nim" placeholder="ruangan">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" value="<?= $Prodi['jurusan']; ?> " class="form-control" id="jurusan" placeholder="jurusan">

                        </div>
                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <select name="akreditasi" id="akreditasi" class="form-control">
                                <option value="A" <?php if($Prodi['akreditasi'] = 'A'){echo "selected";}?>>A</option>
                                <option value="B" <?php if($Prodi['akreditasi'] = 'B'){echo "selected";}?>>B</option>
                                <option value="C" <?php if($Prodi['akreditasi'] = 'C'){echo "selected";}?>>C</option>                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nama kaprodi">Nama Kaprodi</label>
                            <input type="text" name="kaprodi" value="<?= $Prodi['kaprodi']; ?> " class="form-control" id="nama_kaprodi" placeholder="nama kaprodi">

                        </div>
                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" name="tahun" value="<?= $Prodi['tahun_berdiri']; ?> " class="form-control" id="tahun_berdiri" placeholder="tahun berdiri">

                        </div>
                        <div class="form-group">
                            <label for="output_lulusan">Output Lulusan</label>
                            <input type="text" name="lulusan" value="<?= $Prodi['lulusan']; ?> " class="form-control" id="output_lulusan" placeholder="output lulusan">

                        </div>
                        <div class="form-group">
                            <img src="<?= base_url('assets/img/prodi/') . $Prodi['gambar']; ?>" style="width: 100px;" class="img-thumbnail">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                            Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>