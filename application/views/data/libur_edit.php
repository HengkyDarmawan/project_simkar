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
                <input type="hidden" name="id_libur" value="<?= $libur['id_libur']; ?>">
                <div class="form-group">
                    <label>Tanggal Mulai Libur</label>
                    <input type="date" name="tgl_mulai" class="form-control" value="<?= $libur['tgl_mulai']; ?>">
                    <?= form_error('tgl_mulai', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Akhir Libur</label>
                    <input type="date" name="tgl_akhir" class="form-control" value="<?= $libur['tgl_akhir']; ?>">
                    <?= form_error('tgl_akhir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" value="<?= $libur['keterangan']; ?>">
                    <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                <a href="<?= base_url('libur'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>