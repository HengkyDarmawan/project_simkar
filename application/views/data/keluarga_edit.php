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
                <input type="hidden" name="id_keluarga" value="<?= $keluarga['id_keluarga']; ?>">
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <select class="form-control" name="user_id">
                        <option value="">Select Pegawai</option>
                        <?php foreach ($users as $user) : ?>
                            <option value="<?= $user['id']; ?>" <?= $user['id'] == $keluarga['user_id'] ? "selected" : null ?>><?= $user['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama_keluarga" class="form-control" value="<?= $keluarga['nama_keluarga']; ?>">
                    <?= form_error('nama_keluarga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Hubungan</label>
                    <input type="text" name="hubungan" class="form-control" value="<?= $keluarga['hubungan']; ?>">
                    <?= form_error('hubungan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Telpon</label>
                    <input type="text" name="telp_keluarga" class="form-control" value="<?= $keluarga['telp_keluarga']; ?>">
                    <?= form_error('telp_keluarga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                <a href="<?= base_url('keluarga'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>