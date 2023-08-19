<!-- Begin Page Content -->
<div class="container-fluid my-5">
    <!-- Gaji Details -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex col-sm">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
                <a href="<?= base_url(); ?>gaji/editgaji/<?= $gaji['id_golongan']; ?>" class="btn btn-outline-primary">Edit Gaji</a>
            </div>
        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-md-6 bold">Periode</div>
                <div class="col-md-6"><?= mediumdate_indo($gaji['periode']); ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Golongan</div>
                <div class="col-md-6"><?= $gaji['golongan']; ?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Gaji Pokok</div>
                <div class="col-md-6">Rp.<?= number_format($gaji['gaji_pokok'],0,',','.');?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tunjangan Jabatan Fungsional</div>
                <div class="col-md-6">Rp.<?= number_format($gaji['t_jabatan_fungsional'],0,',','.');?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tunjangan Pendidikan S2/S3</div>
                <div class="col-md-6">Rp.<?= number_format($gaji['t_pendidikan_s3'],0,',','.');?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tunjangan kehadiran</div>
                <div class="col-md-6">Rp.<?= number_format($gaji['tunjangan_kehadiran'],0,',','.');?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tunjangan Makan</div>
                <div class="col-md-6">Rp.<?= number_format($gaji['tunjangan_makan'],0,',','.');?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tunjangan Jabatan Struktural</div>
                <div class="col-md-6">Rp.<?= number_format($gaji['t_jabatan_struktural'],0,',','.');?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Tunjangan Jabatan Rangkap</div>
                <div class="col-md-6">Rp.<?= number_format($gaji['t_jabatan_rangkap'],0,',','.');?></div>
            </div>
            <hr>
            <?php $gaji_kotor = $gaji['gaji_pokok'] + $gaji['t_jabatan_fungsional'] + $gaji['t_pendidikan_s3'] + $gaji['tunjangan_kehadiran'] + $gaji['tunjangan_makan'] + $gaji['t_jabatan_struktural'] + $gaji['t_jabatan_rangkap']?>
            <div class="row mb-3 text-primary">
                <div class="col-md-6 bold">Gaji Kotor</div>
                <div class="col-md-6 bold">Rp.<?= number_format($gaji_kotor,0,',','.');?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">BPJS Yayasan Ketenagakerjaan <span class="text-danger">(<?= $gaji['bpjs_yayasan_ketnaker']; ?>%)</span></div>
                <div class="col-md-6">Rp.<?= number_format(($gaji_kotor * $gaji['bpjs_yayasan_ketnaker']) / 100,0,',','.');?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">BPJS Yayasan Kesehatan <span class="text-danger">(<?= $gaji['bpjs_yayasan_kesehatan']; ?>%)</span></div>
                <div class="col-md-6">Rp.<?= number_format(($gaji_kotor * $gaji['bpjs_yayasan_kesehatan']) / 100,0,',','.');?></div>
            </div>
            <hr>
            <?php $bpjs_fasilitas = ($gaji_kotor * $gaji['bpjs_yayasan_ketnaker']) / 100 + ($gaji_kotor * $gaji['bpjs_yayasan_kesehatan']) / 100?>
            <div class="row mb-3 text-primary">
                <div class="col-md-6 bold">Total BPJS Yayasan</div>
                <div class="col-md-6 bold">Rp.<?= number_format($bpjs_fasilitas,0,',','.');?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">BPJS Pribadi Ketenagakerjaan <span class="text-danger">(<?= $gaji['bpjs_pribadi_ketnaker']; ?>%)</span></div>
                <div class="col-md-6">Rp.<?= number_format(($gaji_kotor * $gaji['bpjs_pribadi_ketnaker']) / 100,0,',','.');?></div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">BPJS Pribadi Kesehatan <span class="text-danger">(<?= $gaji['bpjs_pribadi_kesehatan']; ?>%)</span></div>
                <div class="col-md-6">Rp.<?= number_format(($gaji_kotor * $gaji['bpjs_pribadi_kesehatan']) / 100,0,',','.');?></div>
            </div>
            <hr>
            <?php $bpjs_pribadi = ($gaji_kotor * $gaji['bpjs_pribadi_ketnaker']) / 100 + ($gaji_kotor * $gaji['bpjs_pribadi_kesehatan']) / 100?>
            <div class="row mb-3 text-primary">
                <div class="col-md-6 bold">Total BPJS Pribadi</div>
                <div class="col-md-6 bold">(Rp.<?= number_format($bpjs_pribadi,0,',','.');?>)</div>
            </div>
            <hr>
            <div class="row mb-3">
                <div class="col-md-6 bold">Transisi</div>
                <div class="col-md-6"><?= $gaji['transisi']; ?>%</div>
            </div>
            <hr>
            <?php $pph = ($gaji_kotor * $gaji['pph']) / 100 ?>
            <div class="row mb-3 text-primary">
                <div class="col-md-6 bold">PPH 21 <span class="text-danger">(<?= $gaji['pph']; ?>%)</span></div>
                <div class="col-md-6 bold">(Rp.<?= number_format($pph,0,',','.');?>)</div>
            </div>
            <hr>
            <?php $gaji_bersih = ($gaji_kotor + $bpjs_fasilitas) - ($bpjs_pribadi + $pph)?>
            <div class="row mb-3 text-success">
                <div class="col-md-6 bold">Gaji Bersih</div>
                <div class="col-md-6 bold">Rp.<?= number_format($gaji_bersih,0,',','.');?></div>
            </div>
            <hr>
        </div>
    </div>
</div>