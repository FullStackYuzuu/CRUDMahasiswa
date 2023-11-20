<section class="page-section" id="services">
    <div class="container px-4 px-lg-5">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="row">
                <div class="col-md-6"><a href="<?= base_url() ?>Prodi/tambah" class="btn btn-info mb-2"> Tambah Prodi </a></div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama Prodi</td>
                                <td>Ruangan</td>
                                <td>Jurusan</td>
                                <td>Akreditasi</td>
                                <td>Nama Kaprodi</td>
                                <td>Tahun Berdiri</td>
                                <td>Output Lulusan</td>
                                <td>gambar</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if (!empty($prodi)) {
                                $count = 1;
                                foreach ($prodi as $row) {
                                    echo "<tr>";
                                    echo "<td>" . $count++ . "</td>";
                                    echo "<td>" . $row['nama'] . "</td>";
                                    echo "<td>" . $row['ruangan'] . "</td>";
                                    echo "<td>" . $row['jurusan'] . "</td>";
                                    echo "<td>" . $row['akreditasi'] . "</td>";
                                    echo "<td>" . $row['kaprodi'] . "</td>";
                                    echo "<td>" . $row['tahun_berdiri'] . "</td>";
                                    echo "<td>" . $row['lulusan'] . "</td>";
                                    echo "<td><img src='" . base_url('assets/img/prodi/') . $row['gambar'] . "' style='width: 100px;' class='img-thumbnail'></td>";
                                    echo '<td><a href="' . base_url() . 'Prodi/hapus/' . $row['id'] . '" class="badge text-bg-danger no-underline">Hapus</a>
                                    <a href="' . base_url() . 'Prodi/edit/' . $row['id'] . '" class="badge text-bg-warning no-underline">Edit</a></td></tr>';

                                }
                            } else {
                                echo "<tr><td colspan='5'>No data available</td></tr>";
                            }
                            ?>
                            </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
</section>