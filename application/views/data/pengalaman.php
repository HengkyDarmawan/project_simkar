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

                <a href="<?= base_url('pengalaman/addpengalaman'); ?>" class="btn btn-outline-primary btn-md">Add New Pengalaman</a>
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
                            <th>Nama Perusahaan</th>
                            <th>Jabatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                            <th>Alasan Berhenti</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Nama Perusahaan</th>
                            <th>Jabatan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                            <th>Alasan Berhenti</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($pengalaman as $penga) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $penga['name']; ?></td>
                                <td><?= $penga['nama_perusahaan']; ?></td>
                                <td><?= $penga['jabatan']; ?></td>
                                <td><?= mediumdate_indo($penga['tgl_mulai']); ?></td>
                                <td><?= mediumdate_indo($penga['tgl_berakhir']); ?></td>
                                <td>
                                    <?php
                                    if ($penga['status'] == "review") { ?>
                                        <span class="badge badge-pill badge-warning "><?= $penga['status']; ?></span>
                                    <?php } else if ($penga['status'] == "approved") { ?>
                                        <span class="badge badge-pill badge-success "><?= $penga['status']; ?></span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-danger "><?= $penga['status']; ?></span>
                                    <?php } ?>
                                </td>
                                <td><?= $penga['alasan_berhenti']; ?></td>
                                <td>
                                <?php if(access_jabatan("access_update",17)): ?>

									<?php if($penga['status'] == 'review') { ?>
										<a href="<?= base_url(); ?>pengalaman/approved/<?= $penga['id_pengalaman']; ?>" class="btn btn-outline-success btn-sm my-2" onclick="return confirm('yakin?');">Approved</a>
										<a href="<?= base_url(); ?>pengalaman/rejected/<?= $penga['id_pengalaman']; ?>" class="btn btn-outline-danger btn-sm my-2" onclick="return confirm('yakin?');">Rejected</a>
									<?php } ?>
                                    <a href="<?= base_url(); ?>pengalaman/detailpengalaman/<?= $penga['id_pengalaman']; ?>" class="btn btn-outline-info btn-sm my-2">Detail</a>
                                <?php endif ?>
                                <?php if(access_jabatan("access_delete",17)): ?>

                                    <a href="<?= base_url(); ?>pengalaman/hapuspengalaman/<?= $penga['id_pengalaman']; ?>" class="btn btn-outline-danger btn-sm my-2" onclick="return confirm('yakin?');">Delete</a>
                                <?php endif ?>
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
