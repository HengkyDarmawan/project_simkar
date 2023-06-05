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
                    <label>Nama Pegawai</label>
                    <select class="form-control" name="user_id">
                        <option value="">Select Pegawai</option>
                        <?php foreach ($users as $user) : ?>
                            <option value="<?= $user['id']; ?>"><?= $user['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Perusahaan</label>
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
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="">- Pilih Status-</option>
                        <option value="review">Review</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">rejected</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">add</button>
                <a href="<?= base_url('pengalaman'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>