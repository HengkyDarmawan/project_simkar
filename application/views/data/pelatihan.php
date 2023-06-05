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
                <a href="<?= base_url('pelatihan/addPelatihan'); ?>" class="btn btn-outline-primary btn-md">Add New Pelatihan</a>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Nama Pelatihan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                            <th>Sertifikat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Nama Pelatihan</th>
                            <th>Tanggal Mulai</th>
                            <th>Tanggal Selesai</th>
                            <th>Status</th>
                            <th>Sertifikat</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($pelatihan as $pel) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $pel['name']; ?></td>
                                <td><?= $pel['nama_pelatihan']; ?>
                                    <br><strong>(<?= $pel['organisasi_penerbit']; ?>)</strong>
                                </td>
                                <td><?= mediumdate_indo($pel['tgl_mulai']); ?></td>
                                <td><?= mediumdate_indo($pel['tgl_selesai']); ?></td>
                                <td>
                                    <?php
                                    if ($pel['status'] == "review") { ?>
                                        <span class="badge badge-pill badge-warning "><?= $pel['status']; ?></span>
                                    <?php } else if ($pel['status'] == "approved") { ?>
                                        <span class="badge badge-pill badge-success "><?= $pel['status']; ?></span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-danger "><?= $pel['status']; ?></span>
                                    <?php } ?>
                                </td>
                                <td>
                                    <a href="<?= $pel['url']; ?>" class="btn btn-outline-primary btn-sm" target="_blank">Link</a>
                                </td>
                                <td>
                                    <a href="<?= base_url(); ?>pelatihan/detailpelatihan/<?= $pel['id_pelatihan']; ?>" class="btn btn-outline-info btn-sm my-2">Detail</a>
                                    <a href="<?= base_url(); ?>pelatihan/hapuspelatihan/<?= $pel['id_pelatihan']; ?>" class="btn btn-outline-danger btn-sm my-2" onclick="return confirm('yakin?');">Delete</a>
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