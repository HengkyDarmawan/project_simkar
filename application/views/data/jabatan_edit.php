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
                <input type="hidden" name="id_jabatan" value="<?= $jabatan['id_jabatan']; ?>">
                <div class="form-group">
                    <label>Nama Karyawan</label>
                    <select class="form-control" name="parent_jabatan_id">
                        <option value="">Select Karyawan</option>
                        <?php foreach ($parentJabatan as $pj) : ?>
                            <option value="<?= $pj['id_jabatan']; ?>" <?= $pj['id_jabatan'] == $jabatan['parent_jabatan_id'] ? "selected" : null ?>><?= $pj['jabatan']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Nama Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" value="<?= $jabatan['jabatan']; ?>">
                    <?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
				<div class="form-group">
                    <label>Pilih Role</label>
                    <select class="form-control" name="role_id">
                        <option value="">Select Role</option>
                        <?php foreach ($role as $val) : ?>
                            <option value="<?= $val['id']; ?>" <?= $val['id'] == $jabatan['role_id'] ? "selected" : null ?>><?= $val['role']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                <a href="<?= base_url('jabatan'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
