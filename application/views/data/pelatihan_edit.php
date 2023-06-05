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
                <input type="hidden" name="id_pelatihan" value="<?= $pelatihan['id_pelatihan']; ?>">
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <select class="form-control" name="user_id">
                        <option value="">Select Pegawai</option>
                        <?php foreach ($users as $user) : ?>
                            <option value="<?= $user['id']; ?>" <?= $user['id'] == $pelatihan['user_id'] ? "selected" : null ?>><?= $user['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Pelatihan</label>
                    <input type="text" name="nama_pelatihan" class="form-control" value="<?= $pelatihan['nama_pelatihan']; ?>">
                    <?= form_error('nama_pelatihan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Organisasi Penerbit</label>
                    <input type="text" name="organisasi_penerbit" class="form-control" value="<?= $pelatihan['organisasi_penerbit']; ?>">
                    <?= form_error('organisasi_penerbit', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>lokasi Pelatihan</label>
                    <input type="text" name="lokasi_pelatihan" class="form-control" value="<?= $pelatihan['lokasi_pelatihan']; ?>">
                    <?= form_error('lokasi_pelatihan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Deskripsi Pelatihan</label>
                    <input type="text" name="deskripsi" class="form-control" value="<?= $pelatihan['deskripsi']; ?>">
                    <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Mulai </label>
                    <input type="date" name="tgl_mulai" class="form-control" value="<?= $pelatihan['tgl_mulai']; ?>">
                    <?= form_error('tgl_mulai', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" name="tgl_selesai" class="form-control" value="<?= $pelatihan['tgl_selesai']; ?>">
                    <?= form_error('tgl_selesai', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>URL Sertifikat</label>
                    <input type="text" name="url" class="form-control" value="<?= $pelatihan['url']; ?>">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <?php
                        if ($pelatihan['status'] == "review") { ?>
                            <option value="review" selected>Review</option>
                            <option value="approved">Approved</option>
                            <option value="rejected">Rejected</option>
                        <?php } else if ($pelatihan['status'] == "approved") { ?>
                            <option value="review">Review</option>
                            <option value="approved" selected>Approved</option>
                            <option value="rejected">Rejected</option>
                        <?php } else { ?>
                            <option value="review">Review</option>
                            <option value="approved">Approved</option>
                            <option value="rejected" selected>Rejected</option>
                        <?php } ?>
                    </select>
                </div>
                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                <a href="<?= base_url('pelatihan'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>