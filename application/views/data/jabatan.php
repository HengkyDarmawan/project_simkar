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
                <a href="<?= base_url('jabatan/addJabatan'); ?>" class="btn btn-outline-primary btn-md">Add New Jabatan</a>
            </div>

        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Jabatan</th>
                            <th>Parent Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Jabatan</th>
                            <th>Parent Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i = 1; ?>
                        <?php foreach ($jabatan as $jab) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $jab['jabatan']; ?></td>
                                <td><?= $jab['parent']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>jabatan/parentjabatan" class="btn btn-outline-info btn-sm"><i class="fas fa-bars"></i></a>
                                    <a href="<?= base_url(); ?>jabatan/detailGaji/<?= $jab['id_jabatan']; ?>" class="btn btn-outline-info btn-sm">Detail</a>
                                    <a href="<?= base_url(); ?>jabatan/editjabatan/<?= $jab['id_jabatan']; ?>" class="btn btn-outline-success btn-sm">Edit</a>
                                    <a href="<?= base_url(); ?>jabatan/hapusjabatan/<?= $jab['id_jabatan']; ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('yakin?');">Delete</a>
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
