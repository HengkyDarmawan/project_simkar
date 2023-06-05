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
                    <label>Nama Seminar</label>
                    <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id') ?>" class="form-control">
                    <input type="text" name="nama_seminar" class="form-control">
                    <?= form_error('nama_seminar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Deskripsi Seminar</label>
                    <input type="text" name="deskripsi_seminar" class="form-control">
                    <?= form_error('deskripsi_seminar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Organisasi pelaksana Seminar</label>
                    <input type="text" name="organisasi_pelaksana" class="form-control">
                    <?= form_error('organisasi_pelaksana', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Lokasi Seminar</label>
                    <input type="text" name="lokasi_seminar" class="form-control">
                    <?= form_error('lokasi_seminar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Seminar </label>
                    <input type="date" name="tgl_seminar" class="form-control">
                    <?= form_error('tgl_seminar', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>URL Sertifikat</label>
                    <input type="text" name="url" class="form-control">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">add</button>
                <a href="<?= base_url('setting'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
