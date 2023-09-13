<!-- Begin Page Content -->
<div class="container-fluid my-5">
    <!-- pinjaman Details -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex col-sm">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 bold">NIP</div>
                <div class="col-md-6"><?= $user['nik_karyawan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Nama</div>
                <div class="col-md-6"><?= $user['name']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Jumlah Pinjaman</div>
                <div class="col-md-6">Rp.<?= number_format($pinjaman['total_pinjaman'],0,',','.');?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Lama Pinjaman</div>
                <div class="col-md-6"><?= $pinjaman['tenor']; ?> Bulan</div>
            </div>
            <hr>
            <?php $cicilan = $pinjaman['total_pinjaman'] / $pinjaman['tenor'];?>
            <div class="row">
                <?php $n = 1;?>
                <?php $nextMonth = strtotime("+1 month");?>
                <?php for ($i = 1; $i <= $pinjaman['tenor']; $i++) { ?>
                <div class="col-md-6 bold">Cicilan ke- <?= $n++;?><hr></div>
                <div class="col-md-6"><?= date("F", $nextMonth); ?> = Rp.<?= number_format($cicilan,0,',','.');?><hr></div>
                <?php $nextMonth = strtotime("+1 month", $nextMonth); ?>
                <hr>
                <?php }?>
            </div>
            <div class="row mb-3">
                <div class="col-md-6 bold">Alasan Pinjaman</div>
                <div class="col-md-6"><?= $pinjaman['alasan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tanggal Pengajuan</div>
                <div class="col-md-6"><?= mediumdate_indo($pinjaman['tgl_pengajuan']); ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tanggal disetujui</div>
                <div class="col-md-6"><?= mediumdate_indo($pinjaman['tgl_approval']); ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Status</div>
                <div class="col-md-6">
                    <?php
                    if ($pinjaman['status_pengajuan'] == "1") { ?>
                        <span class="badge badge-pill badge-warning">Review</span>
                    <?php } else if ($pinjaman['status_pengajuan'] == "2") { ?>
                        <span class="badge badge-pill badge-success">approved</span>
                    <?php } else { ?>
                        <span class="badge badge-pill badge-danger">rejected</span>
                    <?php } ?>
                </div>
            </div>
            <hr>
        </div>
    </div>
</div>