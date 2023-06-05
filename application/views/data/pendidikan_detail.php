<!-- Begin Page Content -->
<div class="container-fluid my-5">
    <!-- pendidikan Details -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex col-sm">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
                <a href="<?= base_url(); ?>pendidikan/editpendidikan/<?= $pendidikan['id_pendidikan']; ?>" class="btn btn-outline-primary">Edit pendidikan</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 bold">Nama Pegawai</div>
                <div class="col-md-6"><?= $pendidikan['name']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tingkat Pendidikan</div>
                <div class="col-md-6"><?= $pendidikan['tingkat_pendidikan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Jurusan</div>
                <div class="col-md-6"><?= $pendidikan['jurusan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Universitas</div>
                <div class="col-md-6"><?= $pendidikan['universitas']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Alamat Universitas</div>
                <div class="col-md-6"><?= $pendidikan['alamat_univ']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Judul Skripsi</div>
                <div class="col-md-6"><?= $pendidikan['judul_skripsi']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Nama Dosen Pembimbing</div>
                <div class="col-md-6"><?= $pendidikan['nama_dospem']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Status</div>
                <div class="col-md-6"><?php
                    if ($pendidikan['status'] == "review") { ?>
                        <span class="badge badge-pill badge-warning "><?= $pendidikan['status']; ?></span>
                    <?php } else if ($pendidikan['status'] == "approved") { ?>
                        <span class="badge badge-pill badge-success "><?= $pendidikan['status']; ?></span>
                    <?php } else { ?>
                        <span class="badge badge-pill badge-danger "><?= $pendidikan['status']; ?></span>
                    <?php } ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Url</div>
                <div class="col-md-6">
                    <a href="<?= $pendidikan['url']; ?>" class="btn btn-outline-primary btn-sm" target="_blank">Link</a>
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tanggal Mulai</div>
                <div class="col-md-6"><?= $pendidikan['tgl_mulai']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tanggal Selesai</div>
                <div class="col-md-6"><?= $pendidikan['tgl_lulus']; ?></div>
            </div>
            <hr>
        </div>
    </div>
</div>