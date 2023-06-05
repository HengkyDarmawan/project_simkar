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
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>NIK Pegawai</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Approval</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>NIK Pegawai</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Approval</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($users as $pegawai) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $pegawai['nik_karyawan']; ?></td>
                                <td><?= $pegawai['name']; ?></td>
                                <td><?= $pegawai['email_undira']; ?></td>
                                <td>
                                    <?php
                                    if ($pegawai['approval'] == "review") { ?>
                                        <span class="badge badge-pill badge-warning "><?= $pegawai['approval']; ?></span>
                                    <?php } else if ($pegawai['approval'] == "approved") { ?>
                                        <span class="badge badge-pill badge-success "><?= $pegawai['approval']; ?></span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-danger "><?= $pegawai['approval']; ?></span>
                                    <?php } ?>
                                </td>
                                <td>
									<?php if($pegawai['approval'] == "review") { ?>
										<a href="<?= base_url(); ?>pegawai/approved/<?= $pegawai['id']; ?>" onclick="return confirm('yakin?');" class="btn btn-outline-success btn-sm my-2">Approved</a>
										<a href="<?= base_url(); ?>pegawai/rejected/<?= $pegawai['id']; ?>" onclick="return confirm('yakin?');" class="btn btn-outline-danger btn-sm my-2">Rejected</a>
									<?php } ?>
                                    <a href="<?= base_url(); ?>pegawai/detailpegawai/<?= $pegawai['id']; ?>" class="btn btn-outline-info btn-sm my-2">Detail</a>
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
