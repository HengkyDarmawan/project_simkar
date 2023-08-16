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
                <a href="<?= base_url('gaji/addGaji'); ?>" class="btn btn-outline-primary btn-md">Add New Gaji</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Periode</th>
                            <th>Golongan</th>
                            <th>Gaji Kotor</th>
                            <th>BPJS Yayasan</th>
                            <th>BPJS Pribadi</th>
                            <th>PPH 21</th>
                            <th>Gaji Bersih</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Periode</th>
                            <th>Golongan</th>
                            <th>Gaji Kotor</th>
                            <th>BPJS Yayasan</th>
                            <th>BPJS Pribadi</th>
                            <th>PPH 21</th>
                            <th>Gaji Bersih</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <?= $i = 1;?>
                        <?php foreach ($gaji as $g) : ?>
                        <?php $gaji_kotor = $g['gaji_pokok'] + $g['t_jabatan_fungsional'] + $g['t_pendidikan_s3'] + $g['transport_makan'] + $g['t_jabatan_struktural'] + $g['t_jabatan_rangkap']?>
                        <?php $bpjs_fasilitas = ($gaji_kotor * $g['bpjs_yayasan_ketnaker']) / 100 + ($gaji_kotor * $g['bpjs_yayasan_kesehatan']) / 100?>
                        <?php $bpjs_pribadi = ($gaji_kotor * $g['bpjs_pribadi_ketnaker']) / 100 + ($gaji_kotor * $g['bpjs_pribadi_kesehatan']) / 100?>
                        <?php $pph = ($gaji_kotor * $g['pph']) / 100 ?>
                        <?php $gaji_bersih = ($gaji_kotor + $bpjs_fasilitas) - ($bpjs_pribadi + $pph)?>
                        <tr>
                            <td><?= $i++;?></td>
                            <td><?= mediumdate_indo($g['periode']); ?></td>
                            <td><?= $g['golongan']; ?></td>
                            <td>Rp.<?= number_format($gaji_kotor,0,',','.');?></td>
                            <td>Rp.<?= number_format($bpjs_fasilitas,0,',','.');?></td>
                            <td>(Rp.<?= number_format($bpjs_pribadi,0,',','.');?>)</td>
                            <td>(Rp.<?= number_format($pph,0,',','.');?>)</td>
                            <td>Rp.<?= number_format($gaji_bersih,0,',','.');?></td>
                            <td>
                                <a href="<?= base_url(); ?>gaji/detailgaji/<?= $g['id_golongan']; ?>" class="btn btn-outline-info btn-sm">detail</a>
                                <a href="<?= base_url(); ?>gaji/hapusgaji/<?= $g['id_golongan']; ?>" class="btn btn-outline-danger btn-sm">Delete</a>
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