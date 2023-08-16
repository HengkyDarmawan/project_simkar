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

                <a href="<?= base_url('libur/addLibur'); ?>" class="btn btn-outline-primary btn-md">Add New Libur</a>
                <?php endif ?>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tanggal Mulai Libur</th>
                            <th>Tanggal Akhir Libur</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tanggal Mulai Libur</th>
                            <th>Tanggal Akhir Libur</th>
                            <th>Keterangan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($libur as $lib) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= mediumdate_indo($lib['tgl_mulai']); ?></td>
                                <td><?= mediumdate_indo($lib['tgl_akhir']); ?></td>
                                <td><?= $lib['keterangan']; ?></td>
                                <td>
                <?php if(access_jabatan("access_update",17)): ?>

                                    <a href="<?= base_url(); ?>libur/editlibur/<?= $lib['id_libur']; ?>" class="btn btn-outline-success btn-sm">Edit</a>
                <?php endif ?>
                <?php if(access_jabatan("access_delete",17)): ?>

                                    <a href="<?= base_url(); ?>libur/hapuslibur/<?= $lib['id_libur']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('yakin?');">Delete</a>
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