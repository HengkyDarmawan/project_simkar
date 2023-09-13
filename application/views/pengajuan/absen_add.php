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
                    <label>Keterangan</label>
                    <input type="text" name="alasan" class="form-control">
                    <?= form_error('alasan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Link Bukti</label>
                    <input type="text" name="bukti" class="form-control">
                    <?= form_error('bukti', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Pengajuan Izin</label>
                    <input type="date" name="tgl_pengajuan" class="form-control">
                    <?= form_error('tgl_pengajuan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Ajukan</button>
                <a href="<?= base_url('pengajuan/absen'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>