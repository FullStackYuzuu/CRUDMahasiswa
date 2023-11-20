<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?php echo $mahasiswa['nama']?></h2>
                    <h6 class="card-subtitle nb-2
text-muted"><?php echo $mahasiswa['email']?></h6>
                    <div class="row">
                        <div class="col-md-4">NIM</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $mahasiswa['nim']?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Jenis Kelamin</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $mahasiswa['jenis_kelamin']?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Prodi</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $mahasiswa['prodi']?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Asal Sekolah</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $mahasiswa['asal_sekolah']?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">No Hp</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $mahasiswa['no_hp']?></div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">Alamat</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?php echo $mahasiswa['alamat']?></div>
                    </div>
                    <div class="card-footer justify-content-center">
                        <a href="<?= base_url('Mahasiswa')?>" class = "btn btn-danger">Tutup</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>