<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <!-- DataTales Example -->
    <?php if(access_jabatan("access_create",34)): ?>
    <!-- <div class="card shadow mb-4">
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
    </div> -->
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
            <a href="<?= base_url('dosen') ?>" class="btn btn-primary mb-4">Kembali</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Periode Absen</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Masuk</th>
                            <th>Izin</th>
                            <th>Alpa</th>
                            <th>Total Absen</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Periode Absen</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Masuk</th>
                            <th>Izin</th>
                            <th>Alpa</th>
                            <th>Total Absen</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php foreach ($absensiDosen as $key => $value): ?>
                            <tr>
                                <td><?= $key+1 ?></td>
                                <td><?= date("F",strtotime('2022-'.$value['month'].'-01')) ?></td>
                                <td><?= $value['nik_karyawan'] ?></td>
                                <td><?= $value['name'] ?></td>
                                <td><?= $value['count_masuk'] ?></td>
                                <td><?= $value['count_izin'] ?></td>
                                <td><?= $value['count_alpha'] ?></td>
                                <td><?= $value['count'] ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>dosen/detailHari/<?= $value['user_id'].'/'.$value['month'] ?>" class="btn btn-outline-info btn-sm">detail</a>
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