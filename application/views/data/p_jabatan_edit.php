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
                <input type="hidden" name="id_parent_jabatan" value="<?= $parentjabatan['id_parent_jabatan']; ?>">
                <div class="form-group">
                    <label>Nama Parent Jabatan</label>
                    <input type="text" name="parent_jabatan" class="form-control" value="<?= $parentjabatan['parent_jabatan']; ?>">
                    <?= form_error('parent_jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" name="edit" class="btn btn-primary">Edit</button>
                <a href="<?= base_url('jabatan/parentjabatan'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>