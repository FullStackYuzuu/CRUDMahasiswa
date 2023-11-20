<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Prodi
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype = "multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama prodi</label>
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                            
                        </div>
                        <div class="form-group">
                            <label for="ruang">Ruangan</label>
                            <input type="text" name="ruangan" class="form-control" id="ruangan" placeholder="Ruangan">
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" name="jurusan" class="form-control" id="jurusan" placeholder="jurusan">
                        </div>
                        <div class="form-group">
                            <label for="akreditasi">Akreditasi</label>
                            <select name="akreditasi" id="akreditasi" class="form-control">
                                <option value="" disabled >Jenis akreditasi</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>                            
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kaprodi">Nama Kaprodi</label>
                            <input type="text" name="nama_Kaprodi" class="form-control" id="kaprodi" placeholder="Kaprodi">
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun Berdiri</label>
                            <input type="date" name="tahun_berdiri" class="form-control" id="tahun" placeholder="Tahun Berdiri">
                        </div>
                        <div class="form-group">
                            <label for="lulusan">Output Lulusan</label>
                            <input type="text" name="output_lulusan" class="form-control" id="lulusan" placeholder="lulusan">
                        </div>
                        <div class="form-group">
                            <label for="gambar">gambar</label>
                            <div class = "custom-file">
                                <input type="file" class="custom-file-input" name="gambar" id="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label>
                            </div>
                        </div>
                        <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a> <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>