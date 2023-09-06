<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- DataTales Example -->
    <?php if(access_jabatan("access_create",34)): ?>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2">Upload dan Donwload Data Absen</h6>
                <a href="<?= base_url('assets/excel/template absensi.xlsx') ?>" class="btn btn-success"><i class="fas fa-download"></i> Donwload</a>
            </div>
        </div>
        <div class="card-body">
            <form  method="POST" action="<?= base_url('absensi/import') ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label><strong>Data Absensi</strong></label>
                    <input type="file" name="file" accept=".xls, .xlsx" class="form-control mb-4"> 
                    <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Upload</button>
                </div>
            </form>
        </div>
    </div>
    <?php endif ?>

    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <?php if(access_jabatan("access_read",34)): ?>
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
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jumlah Absen</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Jumlah Absen</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php foreach ($absensi as $key => $value): ?>
                            <tr>
                                <td><?= $key+1 ?></td>
                                <td><?= $value['nik_karyawan'] ?></td>
                                <td><?= $value['name'] ?></td>
                                <td><?= $value['count'] ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>absensi/detailBulan/<?= $value['id_user'] ?>" class="btn btn-outline-info btn-sm">detail</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php endif ?>
</div>
<!-- /.container-fluid -->