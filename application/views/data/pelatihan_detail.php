<!-- Begin Page Content -->
<div class="container-fluid my-5">
    <!-- Pelatihan Details -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex col-sm">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
                <a href="<?= base_url(); ?>pelatihan/editpelatihan/<?= $pelatihan['id_pelatihan']; ?>" class="btn btn-outline-primary">Edit Pelatihan</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 bold">Nama Pegawai</div>
                <div class="col-md-6"><?= $pelatihan['name']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Nama Pelatihan</div>
                <div class="col-md-6"><?= $pelatihan['nama_pelatihan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Organisasi Penerbit</div>
                <div class="col-md-6"><?= $pelatihan['organisasi_penerbit']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Lokasi Pelatihan</div>
                <div class="col-md-6"><?= $pelatihan['lokasi_pelatihan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Deskripsi Pelatihan</div>
                <div class="col-md-6"><?= $pelatihan['deskripsi']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Sertifikat URL</div>
                <div class="col-md-6">
                    <a href="<?= $pelatihan['url']; ?>" class="btn btn-outline-primary btn-sm" target="_blank">Link</a>
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tanggal Mulai</div>
                <div class="col-md-6"><?= mediumdate_indo($pelatihan['tgl_mulai']); ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tanggal Selesai</div>
                <div class="col-md-6"><?= mediumdate_indo($pelatihan['tgl_mulai']); ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Status</div>
                <div class="col-md-6">
                    <?php
                    if ($pelatihan['status'] == "review") { ?>
                        <span class="badge badge-pill badge-warning "><?= $pelatihan['status']; ?></span>
                    <?php } else if ($pelatihan['status'] == "approved") { ?>
                        <span class="badge badge-pill badge-success "><?= $pelatihan['status']; ?></span>
                    <?php } else { ?>
                        <span class="badge badge-pill badge-danger "><?= $pelatihan['status']; ?></span>
                    <?php } ?>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>