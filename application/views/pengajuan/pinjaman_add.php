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
                    <label>Jumlah Pinjaman</label>
                    <input type="text" name="total_pinjaman" class="form-control">
                    <?= form_error('total_pinjaman', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Lama Pinjaman (bulan)</label>
                    <input type="text" name="tenor" class="form-control">
                    <?= form_error('tenor', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Alasan Pinjaman</label>
                    <input type="text" name="alasan" class="form-control">
                    <?= form_error('alasan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">Ajukan</button>
                <a href="<?= base_url('pengajuan/pinjaman'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>