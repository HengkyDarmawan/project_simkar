<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
            </div>
        </div>
        <div class="card-body" style="color: #000;">
            <form action="" method="post">
                <div class="form-group">
                    <label>Golongan</label>
                    <input type="text" name="golongan" class="form-control">
                    <?= form_error('golongan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Gaji Pokok</label>
                    <input type="text" name="gaji_pokok" class="form-control">
                    <?= form_error('gaji_pokok', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tunjangan Jabatan Fungsional</label>
                    <input type="text" name="t_jabatan_fungsional" class="form-control">
                    <?= form_error('t_jabatan_fungsional', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tunjangan Pendidikan S3</label>
                    <input type="text" name="t_pendidikan_s3" class="form-control">
                    <?= form_error('t_pendidikan_s3', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Transport & Makan</label>
                    <input type="text" name="transport_makan" class="form-control">
                    <?= form_error('transport_makan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tunjangan Jabatan Struktural</label>
                    <input type="text" name="t_jabatan_struktural" class="form-control">
                    <?= form_error('t_jabatan_struktural', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tunjangan Jabatan Rangkap</label>
                    <input type="text" name="t_jabatan_rangkap" class="form-control">
                    <?= form_error('t_jabatan_rangkap', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="BPJS Yayasan" disabled>
                </div>
                <div class="form-group">
                    <label>BPJS Yayasan Ketenagakerjaan (%)</label>
                    <input type="text" name="bpjs_yayasan_ketnaker" class="form-control" placeholder="cth : 5.4">
                    <?= form_error('bpjs_yayasan_ketnaker', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>BPJS Yayasan Kesehatan (%)</label>
                    <input type="text" name="bpjs_yayasan_kesehatan" class="form-control" placeholder="cth : 1">
                    <?= form_error('bpjs_yayasan_kesehatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="BPJS Pribadi" disabled>
                </div>
                <div class="form-group">
                    <label>BPJS Pribadi Ketenagakerjaan (%)</label>
                    <input type="text" name="bpjs_pribadi_ketnaker" class="form-control" placeholder="cth : 0.5">
                    <?= form_error('bpjs_pribadi_ketnaker', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>BPJS Pribadi Kesehatan (%)</label>
                    <input type="text" name="bpjs_pribadi_kesehatan" class="form-control" placeholder="cth : 2.3">
                    <?= form_error('bpjs_pribadi_kesehatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>PPH 21 (%)</label>
                    <input type="text" name="pph" class="form-control" placeholder="cth : 20">
                    <?= form_error('pph', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Periode</label>
                    <input type="date" name="periode" class="form-control">
                    <?= form_error('periode', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">add</button>
                <a href="<?= base_url('gaji'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>