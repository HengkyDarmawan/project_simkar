<!-- Begin Page Content -->
<div class="container-fluid my-5">
    <!-- Gaji Details -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex col-sm">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
                <a href="<?= base_url(); ?>gaji/editgaji/<?= $gaji['id_golongan']; ?>" class="btn btn-outline-primary">Edit Gaji</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 bold">Golongan</div>
                <div class="col-md-6"><?= $gaji['golongan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Gaji Pokok</div>
                <div class="col-md-6"><?= $gaji['gaji_pokok']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tunjangan Jabatan Fungsional</div>
                <div class="col-md-6"><?= $gaji['t_jabatan_fungsional']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tunjangan Pendidikan S3</div>
                <div class="col-md-6"><?= $gaji['t_pendidikan_s3']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Transport & Makan</div>
                <div class="col-md-6"><?= $gaji['transport_makan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tunjangan Jabatan Struktural</div>
                <div class="col-md-6"><?= $gaji['t_jabatan_struktural']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tunjangan Jabatan Rangkap</div>
                <div class="col-md-6"><?= $gaji['t_jabatan_rangkap']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">BPJS Yayasan Ketenagakerjaan</div>
                <div class="col-md-6"><?= $gaji['bpjs_yayasan_ketnaker']; ?>%</div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">BPJS Yayasan Kesehatan</div>
                <div class="col-md-6"><?= $gaji['bpjs_yayasan_kesehatan']; ?>%</div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">BPJS Pribadi Ketenagakerjaan</div>
                <div class="col-md-6"><?= $gaji['bpjs_pribadi_ketnaker']; ?>%</div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">BPJS Pribadi Kesehatan</div>
                <div class="col-md-6"><?= $gaji['bpjs_pribadi_kesehatan']; ?>%</div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Transisi</div>
                <div class="col-md-6"><?= $gaji['transisi']; ?>%</div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">PPH 21</div>
                <div class="col-md-6"><?= $gaji['pph']; ?>%</div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Periode</div>
                <div class="col-md-6"><?= mediumdate_indo($gaji['periode']); ?></div>
            </div>
            <hr>
        </div>
    </div>
</div>