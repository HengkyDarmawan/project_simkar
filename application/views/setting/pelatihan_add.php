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
                    <label>Nama Pelatihan</label>
                    <input type="text" name="nama_pelatihan" class="form-control">
                    <?= form_error('nama_pelatihan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Organisasi Penerbit</label>
                    <input type="text" name="organisasi_penerbit" class="form-control">
                    <?= form_error('organisasi_penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>lokasi Pelatihan</label>
                    <input type="text" name="lokasi_pelatihan" class="form-control">
                    <?= form_error('lokasi_pelatihan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Deskripsi Pelatihan</label>
                    <input type="text" name="deskripsi" class="form-control">
                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Mulai </label>
                    <input type="date" name="tgl_mulai" class="form-control">
                    <?= form_error('tgl_mulai', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" name="tgl_selesai" class="form-control">
                    <?= form_error('tgl_selesai', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>URL Sertifikat</label>
                    <input type="text" name="url" class="form-control">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
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
                <a href="<?= base_url('setting'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>