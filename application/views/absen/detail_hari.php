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
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tanggal </th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>jam masuk</th>
                            <th>jam pulang</th>
                        </tr>
                    </thead>
                    <tfoot class="text-center">
                        <tr>
                            <th>#</th>
                            <th>Tanggal</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>jam masuk</th>
                            <th>jam pulang</th>
                        </tr>
                    </tfoot>
                    <tbody class="text-center">
                        <tr>
                            <td>1</td>
                            <td>24 Desember 2022</td>
                            <td>1234</td>
                            <td>Athiyyah Nadiya</td>
                            <td>08.02</td>
                            <td>14.00</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>23 Desember 2022</td>
                            <td>1234</td>
                            <td>Athiyyah Nadiya</td>
                            <td>08.00</td>
                            <td>16.05</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php endif ?>

</div>
<!-- /.container-fluid -->