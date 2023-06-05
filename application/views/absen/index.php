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
                <button type="submit" class="btn btn-success"><i class="fas fa-download"></i> Donwload</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" width="100%" cellspacing="0">
                    <tbody class="text-center">
                    <div class="form-group">
                        <label><strong>Data Absen</strong></label>
                        <input type="file" name="status_pernikahan" class="form-control mb-4"> 
                        <button type="submit" class="btn btn-primary"><i class="fas fa-upload"></i> Upload</button>
                    </div>
                    </tbody>
                </table>
            </div>
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
                            <th>Periode Absen</th>
                            <th>NIK Pegawai</th>
                            <th>Nama</th>
                            <th>Jumlah Absen</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Periode Absen</th>
                            <th>NIK Pegawai</th>
                            <th>Nama</th>
                            <th>Jumlah Absen</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>Desember 2022</td>
                            <td>1234</td>
                            <td>Athiyyah Nadiya</td>
                            <td>20</td>
                            <td>
                                <a href="" class="btn btn-outline-info btn-sm">detail</a>
                            </td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Desember 2022</td>
                            <td>554431554544</td>
                            <td>Hengky Darmawan</td>
                            <td>12</td>
                            <td>
                                <a href="" class="btn btn-outline-info btn-sm">detail</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php endif ?>
</div>
<!-- /.container-fluid -->