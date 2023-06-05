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
                    <label>Nama</label>
					<input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id') ?>">
                    <input type="text" name="nama_keluarga" class="form-control">
                    <?= form_error('nama_keluarga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Hubungan</label>
                    <input type="text" name="hubungan" class="form-control">
                    <?= form_error('hubungan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Telpon</label>
                    <input type="text" name="telp_keluarga" class="form-control">
                    <?= form_error('telp_keluarga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">add</button>
                <a href="<?= base_url('setting'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
