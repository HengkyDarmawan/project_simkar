<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <!-- Profile Details -->
    <div class="card mb-3">
        <div class="card-header">
            <div class="d-flex col-sm">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Pegawai</h6>
                <?php if(access_jabatan("access_update",17)): ?>
                    <a href="<?= base_url(); ?>pegawai/editpegawai/<?= $pegawai['id']; ?>" class="btn btn-outline-primary btn-md"><i class="fas fa-fw fa-user-edit"></i> Edit Pegawai</a>
                <?php endif ?>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md">
                    <img src="<?= base_url('assets/img/profile/') . $pegawai['image']; ?>" alt="..." class="img-fluid" style="height: 100%;">
                </div>
                <div class="col-md text-right">
                    <?php
                    if ($pegawai['approval'] == "review") { ?>
                        <span class="badge badge-pill badge-warning "><?= $pegawai['approval']; ?></span>
                    <?php } else if ($pegawai['approval'] == "approved") { ?>
                        <span class="badge badge-pill badge-success "><?= $pegawai['approval']; ?></span>
                    <?php } else { ?>
                        <span class="badge badge-pill badge-danger "><?= $pegawai['approval']; ?></span>
                    <?php } ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 bold">Nomor Pegawai</div>
                <div class="col-md-6"><?= $pegawai['nik_karyawan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">NIK KTP</div>
                <div class="col-md-6"><?= $pegawai['nik_ktp']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Nama Pegawai</div>
                <div class="col-md-6"><?= $pegawai['name']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Email Pegawai</div>
                <div class="col-md-6"><?= $pegawai['email_undira']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Jabatan</div>
                <div class="col-md-6 font-weight-bold">
                    <?php  
                        $same = false;
                        $no = 0;
                        foreach ($jabatan as $jab) : 
                            $golongan = 0;
                            foreach ($user_jabatan as $jab2) :         
                                $same = false;
                                if($jab['id_jabatan'] == $jab2['jabatan_id']){
                                $golongan = $jab2['golongan_id'];
                                    $same = true;
                                    break;
                                }
                            endforeach; 
                    ?>
                        <!-- <option value="<?= $jab['id_jabatan']; ?>" <?= $same ? "selected" : "" ?>><?= $jab['jabatan']; ?></option> -->
                        <?php foreach ($gaji as $val_gaji) : ?>
                            <?php if ($golongan == $val_gaji['id_golongan']): 
                                $no += 1;
                            ?> 
                            <?= ($no != 1) ? '<hr>' : '' ?> 
                            <?= $jab['jabatan']; ?>
                            <br>
                            Golongan Gaji : <?=$val_gaji['golongan']?>
                            
                            <?php endif ?>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tempat & Tanggal Lahir</div>
                <div class="col-md-6"><?= $pegawai['tmpt_lahir']; ?>, <?= mediumdate_indo($pegawai['tgl_lahir']); ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Nomor Hp</div>
                <div class="col-md-6"><?= $pegawai['telp']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Alamat</div>
                <div class="col-md-6"><?= $pegawai['address']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Status Pernikahan</div>
                <div class="col-md-6"><?= $pegawai['status_pernikahan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Kontak Darurat</div>
                <div class="col-md-6"><strong><?= $pegawai['nama_darurat']; ?><hr><?= $pegawai['telp_darurat']; ?></strong></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Jenis Kelamin</div>
                <div class="col-md-6"><?= $pegawai['jenis_kelamin']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Agama</div>
                <div class="col-md-6"><?= $pegawai['agama']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Nama Bank</div>
                <div class="col-md-6"><?= $pegawai['nama_bank']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Nomor Rekening</div>
                <div class="col-md-6"><?= $pegawai['no_rek']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">NPWP</div>
                <div class="col-md-6"><?= $pegawai['npwp']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">BPJS Kesehatan</div>
                <div class="col-md-6"><?= $pegawai['no_bpjs_kesehatan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">BPJS Ketenagakerjaan</div>
                <div class="col-md-6"><?= $pegawai['no_bpjs_ketenagakerjaan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tanggal Mulai Berkerja</div>
                <div class="col-md-6"><?= mediumdate_indo($pegawai['tgl_bergabung']); ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Status</div>
                <?php if ($pegawai['is_active'] == 1) { ?>
                    <div class="col-md-6"><?= "Active" ?></div>
                <?php } else { ?>
                    <div class="col-md-6"><?= "Not Active" ?></div>
                <?php } ?>
            </div>
            <hr>
        </div>

    </div>
</div>

<!-- Begin Page Content Keluarga -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Keluarga</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Hubungan</th>
                            <th>Telpon</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Hubungan</th>
                            <th>Telpon</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($keluarga as $kel) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $kel['nama_keluarga']; ?></td>
                                <td><?= $kel['hubungan']; ?></td>
                                <td><?= $kel['telp_keluarga']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Begin Page Content Pendidikan -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Pendidikan</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tingkat Pendidikan</th>
                            <th>Jurusan & Universitas</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tingkat Pendidikan</th>
                            <th>Jurusan & Universitas</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($pendidikan as $pen) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $pen['tingkat_pendidikan']; ?></td>
                                <td><?= $pen['jurusan']; ?>
                                    <br><strong>(<?= $pen['universitas']; ?>)</strong>
                                </td>
                                <td><?= mediumdate_indo($pen['tgl_mulai']); ?></td>

                                <td><?= mediumdate_indo($pen['tgl_lulus']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Begin Page Content Pengalaman -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Pengalaman Kerja</h6>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Perusahaan</th>
                            <th>Jabatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Alasan Berhenti</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Perusahaan</th>
                            <th>Jabatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Alasan Berhenti</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($pengalaman as $penga) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $penga['nama_perusahaan']; ?></td>
                                <td><?= $penga['jabatan']; ?></td>
                                <td><?= mediumdate_indo($penga['tgl_mulai']); ?></td>
                                <td><?= mediumdate_indo($penga['tgl_berakhir']); ?></td>
                                <td><?= $penga['alasan_berhenti']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Begin Page Content Pelatihan -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Pelatihan</h6>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pelatihan</th>
                            <th>Deskripsi Pelatihan</th>
                            <th>Lokasi Pelatihan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                            <th>Link Sertifikat</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pelatihan</th>
                            <th>Deskripsi Pelatihan</th>
                            <th>Lokasi Pelatihan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                            <th>Link Sertifikat</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($pelatihan as $pel) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $pel['nama_pelatihan']; ?>
                                    <br><strong>(<?= $pel['organisasi_penerbit']; ?>)</strong>
                                </td>
                                <td><?= $pel['deskripsi']; ?></td>
                                <td><?= $pel['lokasi_pelatihan']; ?></td>
                                <td><?= mediumdate_indo($pel['tgl_mulai']); ?></td>
                                <td><?= mediumdate_indo($pel['tgl_selesai']); ?></td>
                                <td><?= $pel['status']; ?></td>
                                <td>
                                    <a href="<?= $pel['url']; ?>" class="btn btn-outline-primary">Link</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Begin Page Content Seminar -->
<div class="container-fluid">

    <!-- Page Heading -->
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Data Seminar</h6>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered"  width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Seminar</th>
                            <th>Deskripsi Seminar</th>
                            <th>Lokasi Seminar</th>
                            <th>Tanggal Seminar</th>
                            <th>Link Sertifikat</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Seminar</th>
                            <th>Deskripsi Seminar</th>
                            <th>Lokasi Seminar</th>
                            <th>Tanggal Seminar</th>
                            <th>Link Sertifikat</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($seminar as $seminar) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $seminar['nama_seminar']; ?>
                                    <br><strong>(<?= $seminar['organisasi_pelaksana']; ?>)</strong>
                                </td>
                                <td><?= $seminar['deskripsi_seminar']; ?></td>
                                <td><?= $seminar['lokasi_seminar']; ?></td>
                                <td><?= mediumdate_indo($seminar['tgl_seminar']); ?></td>
                                <td>
                                    <a href="<?= $seminar['url']; ?>" class="btn btn-outline-primary">Link</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->