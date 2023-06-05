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
                    <div class="row">
                        <div class="col">
                            <label>NIK KTP</label>
                            <input required type="text" name="nik_ktp" class="form-control">
                            <?= form_error('nik_ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>NIK Pegawai</label>
                            <input required type="text" name="nik_karyawan" class="form-control">
                            <?= form_error('nik_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input required type="text" name="name" class="form-control">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Email Pribadi</label>
                            <input required type="email" name="email" class="form-control">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Email Undira</label>
                            <input required type="email" name="email_undira" class="form-control">
                            <?= form_error('email_undira', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Tempat lahir</label>
                            <input required type="text" name="tmpt_lahir" class="form-control">
                            <?= form_error('tmpt_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Tanggal Lahir</label>
                            <input required type="date" name="tgl_lahir" class="form-control">
                            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Agama</label>
                            <select required name="agama" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katolik">Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghuchu">Konghuchu</option>
                            </select>
                            <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Jenis Kelamin</label>
                            <select required name="jenis_kelamin" class="form-control">
                                <option value="">- Pilih -</option>
                                <option value="pria">Pria</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Status Pernikahan</label>
                            <select required name="status_pernikahan" class="form-control">
                                <option value="">- Pilih Status Pernikahan -</option>
                                <option value="nikah">Nikah</option>
                                <option value="belum menikah">Belum Menikah</option>
                                <option value="cerai mati">Cerai Mati</option>
                                <option value="cerai hidup">Cerai Hidup</option>
                            </select>
                        </div>
                        <div class="col">
                            <label>Nomor Telpon (WA)</label>
                            <input required type="text" name="telp" class="form-control">
                            <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="address"></textarea>
                    <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Nama Kontak Darurat</label>
                            <input required type="text" name="nama_darurat" class="form-control">
                            <?= form_error('nama_darurat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Telpon Kontak Darurat</label>
                            <input required type="text" name="telp_darurat" class="form-control">
                            <?= form_error('telp_darurat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <!-- <select required class="form-control" name="jabatan_id[]" multiple style="height:200px">
                        <option value="">Select Jabatan</option>
                        <?= form_error('jabatan_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </select> -->
                        <?php foreach ($jabatan as $jab) : ?>
                            <br><input type="checkbox"  name="jabatan_id[]" value="<?= $jab['id_jabatan']; ?>">
                            <?= $jab['jabatan']; ?>
                        <?php endforeach; ?>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Bank</label>
                            <input required type="text" name="nama_bank" class="form-control">
                            <?= form_error('nama_bank', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Nomor Rekening</label>
                            <input required type="text" name="no_rek" class="form-control">
                            <?= form_error('no_rek', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>NPWP</label>
                    <input required type="text" name="npwp" class="form-control">
                    <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>No BPJS Kesehatan</label>
                            <input required type="text" name="no_bpjs_kesehatan" class="form-control">
                            <?= form_error('no_bpjs_kesehatan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>No BPJS Ketenagakerjaan</label>
                            <input required type="text" name="no_bpjs_ketenagakerjaan" class="form-control">
                            <?= form_error('no_bpjs_ketenagakerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input required type="text" name="password" class="form-control">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select required class="form-control" name="role_id">
                        <option value="">Select role</option>
                        <?php foreach ($role as $rol) : ?>
                            <option value="<?= $rol['id']; ?>"><?= $rol['role']; ?></option>
                        <?php endforeach; ?>
                        <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Bergabung</label>
                    <input required type="date" name="tgl_bergabung" class="form-control">
                    <?= form_error('tgl_bergabung', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                        <label class="form-check-label" for="is_active">
                            Active?
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label>Approval</label>
                    <select required name="approval" class="form-control">
                        <option value="">- Pilih Approval-</option>
                        <option value="review">Review</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">rejected</option>
                    </select>
                </div>
                <!-- keluarga -->
                <!-- <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Keluarga</h6>
                <hr>
                <div class="form-group">
                    <label>Nama</label>
                    <input required type="text" name="nama_keluarga" class="form-control">
                    <?= form_error('nama_keluarga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Hubungan</label>
                    <select name="hubungan" class="form-control">
                        <option value="">- Pilih Hubungan -</option>
                        <option value="Ibu">Ibu</option>
                        <option value="Ayah">Ayah</option>
                        <option value="Saudara">Saudara</option>
                        <option value="Istri">Istri</option>
                        <option value="Suami">Suami</option>
                        <option value="Bibi">Bibi</option>
                        <option value="Paman">Paman</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Telpon</label>
                    <input required type="text" name="telp_keluarga" class="form-control">
                    <?= form_error('telp_keluarga', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                pendidikan
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Pendidikan</h6>
                <hr>
                <div class="form-group">
                    <label>Tingkat Pendidikan</label>
                    <select name="tingkat_pendidikan" class="form-control">
                        <option value="">- Pilih Tingkat Pendidikan -</option>
                        <option value="D1">D1</option>
                        <option value="D2">D2</option>
                        <option value="D3">D3</option>
                        <option value="D4">D4</option>
                        <option value="S1">S1</option>
                        <option value="S2">S2</option>
                        <option value="S3">S3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Jurusan</label>
                    <input required type="text" name="jurusan" class="form-control">
                    <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nama Universitas</label>
                    <input required type="text" name="universitas" class="form-control">
                    <?= form_error('universitas', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Alamat Universitas</label>
                    <input required type="text" name="alamat_univ" class="form-control">
                    <?= form_error('alamat_univ', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Judul Skripsi</label>
                    <input required type="text" name="judul_skripsi" class="form-control">
                    <?= form_error('judul_skripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Nama Dosen Pembimbing</label>
                    <input required type="text" name="nama_dospem" class="form-control">
                    <?= form_error('nama_dospem', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>URL</label>
                    <input required type="text" name="url" class="form-control">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Mulai </label>
                    <input required type="date" name="tgl_mulai" class="form-control">
                    <?= form_error('tgl_mulai', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <label>Tanggal Selesai</label>
                    <input required type="date" name="tgl_lulus" class="form-control">
                    <?= form_error('tgl_lulus', '<small class="text-danger pl-3">', '</small>'); ?>
                </div> -->
                <button type="submit" class="btn btn-primary">add</button>
                <a href="<?= base_url('pegawai'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>