<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>') ?>
    <?= $this->session->flashdata('message'); ?>

    <!-- DataTales Example -->
    <?php if(access_jabatan("access_read",31)): ?>
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
                            <th>Tanggal Pengajuan</th>
                            <th>NIP</th>
                            <th>Nama Karyawan</th>
                            <th>Status</th>
                            <th>Alasan</th>
                            <th>Bukti</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tanggal Pengajuan</th>
                            <th>NIP</th>
                            <th>Nama Karyawan</th>
                            <th>Status</th>
                            <th>Alasan</th>
                            <th>Bukti</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i=1;?>
                        <?php foreach ($absen as $row) : ?>
                        <tr>
                            <td><?= $i++;?></td>
                            <td><?= mediumdate_indo($row['tgl_pengajuan']); ?></td>
                            <td><?= $row['nik_karyawan']; ?></td>
                            <td><?= $row['name']; ?></td>
                            <td>
                                <?php
                                if ($row['status_izin'] == "1") { ?>
                                    <span class="badge badge-pill badge-warning ">Review</span>
                                <?php } else if ($row['status_izin'] == "2") { ?>
                                    <span class="badge badge-pill badge-success ">approved</span>
                                <?php } else { ?>
                                    <span class="badge badge-pill badge-danger ">rejected</span>
                                <?php } ?>
                            </td>
                            <td><?= $row['alasan']; ?></td>
                            <td>
                                <a href="<?= $row['bukti']; ?>" class="btn btn-outline-primary btn-sm" target="_blank">Link</a>
                            </td>
                            <td>
                                <?php if($row['status_izin'] == "1") { ?>
                                    <a href="<?= base_url(); ?>izin/approved/<?= $row['id_izin_absen']; ?>" onclick="return confirm('yakin?');" class="btn btn-outline-success btn-sm my-2">Approved</a>
                                    <a href="<?= base_url(); ?>izin/rejected/<?= $row['id_izin_absen']; ?>" onclick="return confirm('yakin?');" class="btn btn-outline-danger btn-sm my-2">Rejected</a>
                                <?php } ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php endif ?>

</div>
<!-- /.container-fluid -->