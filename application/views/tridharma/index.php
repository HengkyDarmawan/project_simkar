<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
                <?php if(access_jabatan("access_create",17)): ?>

                <a href="<?= base_url('seminar/addseminar'); ?>" class="btn btn-outline-primary btn-md">Add New Seminar</a>
                <?php endif ?>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Nama Kegiatan</th>
                            <th>Lokasi Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Status</th>
                            <th>Surat Pengajuan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Nama Kegiatan</th>
                            <th>Lokasi Kegiatan</th>
                            <th>Tanggal Kegiatan</th>
                            <th>Status</th>
                            <th>Surat Pengajuan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($tridharma as $row) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $row['name']; ?></td>
                                <td><?= $row['nama_kegiatan']; ?></td>
                                <td><?= $row['lokasi_kegiatan']; ?></td>
                                <td><?= mediumdate_indo($row['tgl_kegiatan_mulai']); ?> s/d <?= mediumdate_indo($row['tgl_kegiatan_selesai']); ?></td>
                                <td>
                                    <?php
                                    if ($row['status_kegiatan'] == "review") { ?>
                                        <span class="badge badge-pill badge-warning "><?= $row['status_kegiatan']; ?></span>
                                    <?php } else if ($row['status_kegiatan'] == "selesai") { ?>
                                        <span class="badge badge-pill badge-success "><?= $row['status_kegiatan']; ?></span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-danger "><?= $row['status_kegiatan']; ?></span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?= $row['link_surat']; ?>" class="btn btn-outline-primary btn-sm" target="_blank">Link</a>
                                </td>
                                <td>
									<?php if($row['status_kegiatan'] == 'review') { ?>
										<a href="<?= base_url(); ?>tridharma/approved/<?= $row['id_tridharma']; ?>" class="btn btn-outline-success btn-sm" onclick="return confirm('yakin?');">Approved</a>
										<a href="<?= base_url(); ?>tridharma/rejected/<?= $row['id_tridharma']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('yakin?');">Rejected</a>
									<?php } ?>
                                    <a href="<?= base_url(); ?>tridharma/hapustridharma/<?= $row['id_tridharma']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('yakin?');">Delete</a>
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
