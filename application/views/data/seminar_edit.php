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
                <input type="hidden" name="id_seminar" value="<?= $seminar['id_seminar']; ?>">
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <select class="form-control" name="user_id">
                        <option value="">Select Pegawai</option>
                        <?php foreach ($users as $user) : ?>
                            <option value="<?= $user['id']; ?>" <?= $user['id'] == $seminar['user_id'] ? "selected" : null ?>><?= $user['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama seminar</label>
                    <input type="text" name="nama_seminar" class="form-control" value="<?= $seminar['nama_seminar']; ?>">
                    <?= form_error('nama_seminar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Deskripsi seminar</label>
                    <input type="text" name="deskripsi_seminar" class="form-control" value="<?= $seminar['deskripsi_seminar']; ?>">
                    <?= form_error('deskripsi_seminar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Organisasi Pelaksana Seminar</label>
                    <input type="text" name="organisasi_pelaksana" class="form-control" value="<?= $seminar['organisasi_pelaksana']; ?>">
                    <?= form_error('organisasi_pelaksana', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>lokasi seminar</label>
                    <input type="text" name="lokasi_seminar" class="form-control" value="<?= $seminar['lokasi_seminar']; ?>">
                    <?= form_error('lokasi_seminar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Seminar </label>
                    <input type="date" name="tgl_seminar" class="form-control" value="<?= $seminar['tgl_seminar']; ?>">
                    <?= form_error('tgl_seminar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>URL Sertifikat</label>
                    <input type="text" name="url" class="form-control" value="<?= $seminar['url']; ?>">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <?php
                        if ($seminar['status'] == "review") { ?>
                            <option value="review" selected>Review</option>
                            <option value="approved">Approved</option>
                            <option value="rejected">Rejected</option>
                        <?php } else if ($seminar['status'] == "approved") { ?>
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
                <a href="<?= base_url('seminar'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>