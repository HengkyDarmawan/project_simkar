<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <!-- Content Row -->
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <?php if(access_jabatan("access_read",3)): ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
            </div>
        </div>
        <div class="card-body">
            <a href="<?= base_url('dosen/detailBulan/'.$this->uri->segment('3')) ?>" class="btn btn-primary mb-4">Kembali</a>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Prodi</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Prodi</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php foreach ($absensiDosen as $key => $value): ?>
                            <tr>
                                <td><?= $key+1 ?></td>
                                <td><?= $value['tanggal'] ?></td>
                                <td><?= $value['nik_karyawan'] ?></td>
                                <td><?= $value['name'] ?></td>
                                <td><?= $value['kelas'] ?></td>
                                <td><?= $value['prodi'] ?></td>
                                <td>
                                    <?php
                                    if ($value['status'] == "I") { ?>
                                        <span class="badge badge-pill badge-primary">Izin</span>
                                    <?php } else if ($value['status'] == "Y") { ?>
                                        <span class="badge badge-pill badge-success">Masuk</span>
                                    <?php } else { ?>
                                        <span class="badge badge-pill badge-danger">Alpha</span>
                                    <?php } ?>
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