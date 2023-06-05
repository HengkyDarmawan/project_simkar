<!-- Begin Page Content -->
<div class="container-fluid my-5">
    <!-- seminar Details -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex col-sm">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
                <a href="<?= base_url(); ?>seminar/editseminar/<?= $seminar['id_seminar']; ?>" class="btn btn-outline-primary">Edit seminar</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 bold">Nama Pegawai</div>
                <div class="col-md-6"><?= $seminar['name']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Nama seminar</div>
                <div class="col-md-6"><?= $seminar['nama_seminar']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Deskripsi seminar</div>
                <div class="col-md-6"><?= $seminar['deskripsi_seminar']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Organisasi Pelaksana Seminar</div>
                <div class="col-md-6"><?= $seminar['organisasi_pelaksana']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Lokasi seminar</div>
                <div class="col-md-6"><?= $seminar['lokasi_seminar']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tanggal Seminar</div>
                <div class="col-md-6"><?= mediumdate_indo($seminar['tgl_seminar']); ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Sertifikat URL</div>
                <div class="col-md-6">
                    <a href="<?= $seminar['url']; ?>" class="btn btn-outline-primary btn-sm" target="_blank">Link</a>
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Status</div>
                <div class="col-md-6">
                    <?php
                    if ($seminar['status'] == "review") { ?>
                        <span class="badge badge-pill badge-warning "><?= $seminar['status']; ?></span>
                    <?php } else if ($seminar['status'] == "approved") { ?>
                        <span class="badge badge-pill badge-success "><?= $seminar['status']; ?></span>
                    <?php } else { ?>
                        <span class="badge badge-pill badge-danger "><?= $seminar['status']; ?></span>
                    <?php } ?>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>