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
                <a href="<?= base_url('seminar/addseminar'); ?>" class="btn btn-outline-primary btn-md">Add New Seminar</a>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Nama Seminar</th>
                            <th>Lokasi Seminar</th>
                            <th>Tanggal Seminar</th>
                            <th>Status</th>
                            <th>Sertifikat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Nama Seminar</th>
                            <th>Lokasi Seminar</th>
                            <th>Tanggal Seminar</th>
                            <th>Status</th>
                            <th>Sertifikat</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($seminar as $seminar) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $seminar['name']; ?></td>
                                <td><?= $seminar['nama_seminar']; ?></td>
                                <td><?= $seminar['lokasi_seminar']; ?></td>
                                <td><?= mediumdate_indo($seminar['tgl_seminar']); ?></td>
                                <td>
                                    <?php
                                    if ($seminar['status'] == "review") { ?>
                                        <span class="badge badge-pill badge-warning "><?= $seminar['status']; ?></span>
                                    <?php } else if ($seminar['status'] == "approved") { ?>
                                        <span class="badge badge-pill badge-success "><?= $seminar['status']; ?></span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-danger "><?= $seminar['status']; ?></span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?= $seminar['url']; ?>" class="btn btn-outline-primary btn-sm" target="_blank">Link</a>
                                </td>
                                <td>
									<?php if($seminar['status'] == 'review') { ?>
										<a href="<?= base_url(); ?>seminar/approved/<?= $seminar['id_seminar']; ?>" class="btn btn-outline-success btn-sm my-2" onclick="return confirm('yakin?');">Approved</a>
										<a href="<?= base_url(); ?>seminar/rejected/<?= $seminar['id_seminar']; ?>" class="btn btn-outline-danger btn-sm my-2" onclick="return confirm('yakin?');">Rejected</a>
									<?php } ?>
                                    <a href="<?= base_url(); ?>seminar/detailseminar/<?= $seminar['id_seminar']; ?>" class="btn btn-outline-info btn-sm my-2">Detail</a>
                                    <a href="<?= base_url(); ?>seminar/hapusseminar/<?= $seminar['id_seminar']; ?>" class="btn btn-outline-danger btn-sm my-2" onclick="return confirm('yakin?');">Delete</a>
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
