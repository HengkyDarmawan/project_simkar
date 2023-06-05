<!-- Begin Page Content -->
<div class="container-fluid my-5">
    <!-- pengalaman Details -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex col-sm">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
                <a href="<?= base_url(); ?>pengalaman/editpengalaman/<?= $pengalaman['id_pengalaman']; ?>" class="btn btn-outline-primary">Edit pengalaman</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 bold">Nama Pegawai</div>
                <div class="col-md-6"><?= $pengalaman['name']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Nama Perusahaan</div>
                <div class="col-md-6"><?= $pengalaman['nama_perusahaan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Jabatan</div>
                <div class="col-md-6"><?= $pengalaman['jabatan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tanggal Mulai</div>
                <div class="col-md-6"><?= $pengalaman['tgl_mulai']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tanggal Berakhir</div>
                <div class="col-md-6"><?= $pengalaman['tgl_berakhir']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Status</div>
                <div class="col-md-6">
                    <?php
                    if ($pengalaman['status'] == "review") { ?>
                        <span class="badge badge-pill badge-warning "><?= $pengalaman['status']; ?></span>
                    <?php } else if ($pengalaman['status'] == "approved") { ?>
                        <span class="badge badge-pill badge-success "><?= $pengalaman['status']; ?></span>
                    <?php } else { ?>
                        <span class="badge badge-pill badge-danger "><?= $pengalaman['status']; ?></span>
                    <?php } ?>
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Alasan Berhenti</div>
                <div class="col-md-6"><?= $pengalaman['alasan_berhenti']; ?></div>
            </div>
            <hr>
        </div>
    </div>
</div>