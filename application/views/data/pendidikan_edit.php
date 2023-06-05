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
                <input type="hidden" name="id_pendidikan" value="<?= $pendidikan['id_pendidikan']; ?>">
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <select class="form-control" name="user_id">
                        <option value="">Select Pegawai</option>
                        <?php foreach ($users as $user) : ?>
                            <option value="<?= $user['id']; ?>" <?= $user['id'] == $pendidikan['user_id'] ? "selected" : null ?>><?= $user['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tingkat Pendidikan</label>
                    <select name="tingkat_pendidikan" class="form-control">
                        <?php
                        if ($pendidikan['tingkat_pendidikan'] == "D1") { ?>
                            <option value="D1" selected>D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        <?php } else if ($pendidikan['tingkat_pendidikan'] == "D2") { ?>
                            <option value="D1">D1</option>
                            <option value="D2" selected>D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        <?php } else if ($pendidikan['tingkat_pendidikan'] == "D3") { ?>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3" selected>D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        <?php } else if ($pendidikan['tingkat_pendidikan'] == "D4") { ?>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4" selected>D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        <?php } else if ($pendidikan['tingkat_pendidikan'] == "S1") { ?>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1" selected>S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        <?php } else if ($pendidikan['tingkat_pendidikan'] == "S2") { ?>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2" selected>S2</option>
                            <option value="S3">S3</option>
                        <?php } else { ?>
                            <option value="D1">D1</option>
                            <option value="D2">D2</option>
                            <option value="D3">D3</option>
                            <option value="D4">D4</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3" selected>S3</option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="text" name="jurusan" class="form-control" value="<?= $pendidikan['jurusan']; ?>">
                    <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nama Universitas</label>
                    <input type="text" name="universitas" class="form-control" value="<?= $pendidikan['universitas']; ?>">
                    <?= form_error('universitas', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Alamat Universitas</label>
                    <input type="text" name="alamat_univ" class="form-control" value="<?= $pendidikan['alamat_univ']; ?>">
                    <?= form_error('alamat_univ', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Judul Skripsi</label>
                    <input type="text" name="judul_skripsi" class="form-control" value="<?= $pendidikan['judul_skripsi']; ?>">
                    <?= form_error('judul_skripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nama Dosen Pembimbing</label>
                    <input type="text" name="nama_dospem" class="form-control" value="<?= $pendidikan['nama_dospem']; ?>">
                    <?= form_error('nama_dospem', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Url</label>
                    <input type="text" name="url" class="form-control" value="<?= $pendidikan['url']; ?>">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Mulai</label>
                    <input type="date" name="tgl_mulai" class="form-control" value="<?= $pendidikan['tgl_mulai']; ?>">
                    <?= form_error('tgl_mulai', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" name="tgl_lulus" class="form-control" value="<?= $pendidikan['tgl_lulus']; ?>">
                    <?= form_error('tgl_lulus', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <?php
                        if ($pendidikan['status'] == "review") { ?>
                            <option value="review" selected>Review</option>
                            <option value="approved">Approved</option>
                            <option value="rejected">Rejected</option>
                        <?php } else if ($pendidikan['status'] == "approved") { ?>
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
                <a href="<?= base_url('pendidikan'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>