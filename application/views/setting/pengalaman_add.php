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
                    <label>Nama Perusahaan</label>
                    <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id') ?>" class="form-control">
                    <input type="text" name="nama_perusahaan" class="form-control">
                    <?= form_error('nama_perusahaan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <input type="text" name="jabatan" class="form-control">
                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Mulai </label>
                    <input type="date" name="tgl_mulai" class="form-control">
                    <?= form_error('tgl_mulai', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" name="tgl_berakhir" class="form-control">
                    <?= form_error('tgl_berakhir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Alasan Berhenti</label>
                    <input type="text" name="alasan_berhenti" class="form-control">
                    <?= form_error('alasan_berhenti', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">add</button>
                <a href="<?= base_url('setting'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
