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
                <input required type="hidden" name="id" value="<?= $pegawai['id']; ?>">
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>NIK KTP</label>
                            <input required type="text" name="nik_ktp" class="form-control" value="<?= $pegawai['nik_ktp']; ?>">
                            <?= form_error('nik_ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>NIK Pegawai</label>
                            <input required type="text" name="nik_karyawan" class="form-control" value="<?= $pegawai['nik_karyawan']; ?>">
                            <?= form_error('nik_karyawan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Nama Pegawai</label>
                    <input required type="text" name="name" class="form-control" value="<?= $pegawai['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Email Pribadi</label>
                            <input required type="email" name="email" class="form-control" value="<?= $pegawai['email']; ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Email Undira</label>
                            <input required type="email" name="email_undira" class="form-control" value="<?= $pegawai['email_undira']; ?>">
                            <?= form_error('email_undira', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Tempat lahir</label>
                            <input required type="text" name="tmpt_lahir" class="form-control" value="<?= $pegawai['tmpt_lahir']; ?>">
                            <?= form_error('tmpt_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Tanggal Lahir</label>
                            <input required type="date" name="tgl_lahir" class="form-control" value="<?= $pegawai['tgl_lahir']; ?>">
                            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Agama</label>
                            <input required type="text" name="agama" class="form-control" value="<?= $pegawai['agama']; ?>">
                            <?= form_error('agama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Jenis Kelamin</label>
                            <select required name="jenis_kelamin" class="form-control">
                            <?php
                                if ($pegawai['jenis_kelamin'] == "Pria") { ?>
                                    <option value="">- Pilih -</option>
                                    <option value="Pria" selected>Pria</option>
                                    <option value="Perempuan">Perempuan</option>
                                <?php } else { ?>
                                    <option value="">- Pilih -</option>
                                    <option value="Pria">Pria</option>
                                    <option value="Perempuan" selected>Perempuan</option>
                                <?php } ?>
                            </select>
                            <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Status</label>
                            <input required type="text" name="status_pernikahan" class="form-control" value="<?= $pegawai['status_pernikahan']; ?>">
                            <?= form_error('status_pernikahan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Nomor Telpon (WA)</label>
                            <input required type="text" name="telp" class="form-control" value="<?= $pegawai['telp']; ?>">
                            <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea class="form-control" name="address"><?= $pegawai['address'];?></textarea>
                    <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Nama Kontak Darurat</label>
                            <input required type="text" name="nama_darurat" class="form-control" value="<?= $pegawai['nama_darurat']; ?>">
                            <?= form_error('nama_darurat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Telpon Kontak Darurat</label>
                            <input required type="text" name="telp_darurat" class="form-control" value="<?= $pegawai['telp_darurat']; ?>">
                            <?= form_error('telp_darurat', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Jabatan</label>
                    <!-- <select required multiple class="form-control" name="jabatan_id[]" multiple style="height:200px">
                        <option value="">Select Jabatan</option>
                        <?= form_error('jabatan_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </select> -->
                        <?php  
                            $same = false;
                        ?>
                        <?php foreach ($jabatan as $jab) : 
                            $golongan = 0;
                            ?>
                            <?php foreach ($user_jabatan as $jab2) : ?>
                                <?php                                  
                                    $same = false;
                                    if($jab['id_jabatan'] == $jab2['jabatan_id']){
                                    $golongan = $jab2['golongan_id'];
                                        $same = true;
                                        break;
                                    }
                                ?>
                            <?php endforeach; ?>
                            <!-- <option value="<?= $jab['id_jabatan']; ?>" <?= $same ? "selected" : "" ?>><?= $jab['jabatan']; ?></option> -->
                            <br><input type="checkbox" data-jabatan="<?= $jab['jabatan']; ?>" data-id="<?= $jab['id_jabatan']; ?>" name="jabatan_id[]" value="<?= $jab['id_jabatan']; ?>"<?= $same ? "checked" : "" ?>>
                            <?= $jab['jabatan']; ?>
                            <select class="form-control <?= $golongan == 0 ? 'd-none' : '' ?>" name="id_golongan[]" id="golongan-<?= $jab['id_jabatan']; ?>">
                                <option>Pilih Golongan Gaji</option>
                                <?php foreach ($gaji as $val_gaji) : ?>
                                    <option <?= $golongan == $val_gaji['id_golongan'] ? 'selected' : '' ?> value="<?= $val_gaji['id_golongan'] ?>"><?= $val_gaji['golongan'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        <?php endforeach; ?>

                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>Bank</label>
                            <input required type="text" name="nama_bank" class="form-control" value="<?= $pegawai['nama_bank']; ?>">
                            <?= form_error('nama_bank', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>Nomor Rekening</label>
                            <input required type="text" name="no_rek" class="form-control" value="<?= $pegawai['no_rek']; ?>">
                            <?= form_error('no_rek', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>NPWP</label>
                    <input required type="text" name="npwp" class="form-control" value="<?= $pegawai['npwp']; ?>">
                    <?= form_error('npwp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col">
                            <label>No BPJS Kesehatan</label>
                            <input required type="text" name="no_bpjs_kesehatan" class="form-control" value="<?= $pegawai['no_bpjs_kesehatan']; ?>">
                            <?= form_error('no_bpjs_kesehatan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="col">
                            <label>No BPJS Ketenagakerjaan</label>
                            <input required type="text" name="no_bpjs_ketenagakerjaan" class="form-control" value="<?= $pegawai['no_bpjs_ketenagakerjaan']; ?>">
                            <?= form_error('no_bpjs_ketenagakerjaan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Role</label>
                    <select required class="form-control" name="role_id">
                        <option value="">Select role</option>
                        <?php foreach ($role as $rol) : ?>
                            <option value="<?= $rol['id']; ?>" <?= $rol['id'] == $pegawai['role_id'] ? "selected" : null ?>><?= $rol['role']; ?></option>
                        <?php endforeach; ?>
                        <?= form_error('role_id', '<small class="text-danger pl-3">', '</small>'); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label>Tanggal Bergabung</label>
                    <input required type="date" name="tgl_bergabung" class="form-control" value="<?= $pegawai['tgl_bergabung']; ?>">
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
                        <?php
                        if ($pegawai['approval'] == "review") { ?>
                            <option value="review" selected>Review</option>
                            <option value="approved">Approved</option>
                            <option value="rejected">Rejected</option>
                        <?php } else if ($pegawai['approval'] == "approved") { ?>
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
                <a href="<?= base_url('pegawai'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>