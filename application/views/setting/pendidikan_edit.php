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
                    <label>Tingkat Pendidikan</label>
                    <select name="tingkat_pendidikan" class="form-control">
                        <option value="">- Pilih Tingkat Pendidikan -</option>
                        <option <?php if ($pendidikan['tingkat_pendidikan'] == "D1") {
									echo "selected=\"selected\"";
								} ?> value="D1">D1</option>
                        <option <?php if ($pendidikan['tingkat_pendidikan'] == "D2") {
									echo "selected=\"selected\"";
								} ?> value="D2">D2</option>
                        <option <?php if ($pendidikan['tingkat_pendidikan'] == "D3") {
									echo "selected=\"selected\"";
								} ?> value="D3">D3</option>
                        <option <?php if ($pendidikan['tingkat_pendidikan'] == "D4") {
									echo "selected=\"selected\"";
								} ?> value="D4">D4</option>
                        <option <?php if ($pendidikan['tingkat_pendidikan'] == "S1") {
									echo "selected=\"selected\"";
								} ?> value="S1">S1</option>
                        <option <?php if ($pendidikan['tingkat_pendidikan'] == "S2") {
									echo "selected=\"selected\"";
								} ?> value="S2">S2</option>
                        <option <?php if ($pendidikan['tingkat_pendidikan'] == "S3") {
									echo "selected=\"selected\"";
								} ?> value="S3">S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input type="hidden" name="user_id" value="<?= $this->session->userdata('user_id') ?>" class="form-control">
                    <input type="hidden" name="id_pendidikan" value="<?= $pendidikan['id_pendidikan'] ?>" class="form-control">
                    <input type="text" name="jurusan" value="<?= $pendidikan['jurusan'] ?>" class="form-control">
                    <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nama Universitas</label>
                    <input type="text" name="universitas" value="<?= $pendidikan['universitas'] ?>" class="form-control">
                    <?= form_error('universitas', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Alamat Universitas</label>
                    <input type="text" name="alamat_univ" value="<?= $pendidikan['alamat_univ'] ?>" class="form-control">
                    <?= form_error('alamat_univ', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Judul Skripsi</label>
                    <input type="text" name="judul_skripsi" value="<?= $pendidikan['judul_skripsi'] ?>" class="form-control">
                    <?= form_error('judul_skripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nama Dosen Pembimbing</label>
                    <input type="text" name="nama_dospem" value="<?= $pendidikan['nama_dospem'] ?>" class="form-control">
                    <?= form_error('nama_dospem', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>URL</label>
                    <input type="text" name="url" value="<?= $pendidikan['url'] ?>" class="form-control">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Mulai </label>
                    <input type="date" name="tgl_mulai" value="<?= $pendidikan['tgl_mulai'] ?>" class="form-control">
                    <?= form_error('tgl_mulai', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input type="date" name="tgl_lulus" value="<?= $pendidikan['tgl_lulus'] ?>" class="form-control">
                    <?= form_error('tgl_lulus', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <button type="submit" class="btn btn-primary">edit</button>
                <a href="<?= base_url('setting'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
