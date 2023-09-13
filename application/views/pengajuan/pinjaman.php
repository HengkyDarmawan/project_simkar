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
                <a href="<?= base_url('pengajuan/addPinjaman'); ?>" class="btn btn-outline-primary btn-md">Ajukan Pinjaman</a>
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
                            <th>Total Pinjaman</th>
                            <th>Tenor (bulan)</th>
                            <th>Status</th>
                            <th>Alasan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tanggal Pengajuan</th>
                            <th>NIP</th>
                            <th>Nama Karyawan</th>
                            <th>Total Pinjaman</th>
                            <th>Tenor (bulan)</th>
                            <th>Status</th>
                            <th>Alasan</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?php $i=1;?>
                        <?php foreach ($pinjaman as $p) : ?>
                        <tr>
                            <td><?= $i++;?></td>
                            <td><?= mediumdate_indo($p['tgl_pengajuan']); ?></td>
                            <td><?= $p['nik_karyawan']; ?></td>
                            <td><?= $p['name']; ?></td>
                            <td>Rp.<?= number_format($p['total_pinjaman'],0,',','.');?></td>
                            <td><?= $p['tenor']; ?></td>
                            <td>
                                <?php
                                if ($p['status_pengajuan'] == "1") { ?>
                                    <span class="badge badge-pill badge-warning ">Review</span>
                                <?php } else if ($p['status_pengajuan'] == "2") { ?>
                                    <span class="badge badge-pill badge-success ">approved</span>
                                <?php } else { ?>
                                    <span class="badge badge-pill badge-danger ">rejected</span>
                                <?php } ?>
                            </td>
                            <td><?= $p['alasan']; ?></td>
                            <td>
                              <?php if($p['status_pengajuan'] == '2') {?>
                                <a href="<?= base_url(); ?>pengajuan/detailpinjaman/<?= $p['id_pinjaman']; ?>" class="btn btn-outline-info btn-sm">detail</a>
                              <?php } elseif($p['status_pengajuan'] == '1' || $p['status_pengajuan'] == '3') {?>
                                
                              <?php }?>
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