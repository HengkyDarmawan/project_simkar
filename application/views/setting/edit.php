<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="d-flex">
                <h6 class="m-0 font-weight-bold text-primary mr-auto p-2"><?= $title; ?></h6>
            </div>
        </div>
        <div class="card-body" style="color: #000;">
            <?= form_open_multipart('setting/edit'); ?>
            <div class="form-group">
                <label for="emailUndira">Email Universitas Dian Nusantara</label>
                <input type="text" name="email_undira" class="form-control" id="emailUndira" value="<?= $user['email_undira'] ?>" readonly>
            </div>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" name="name" class="form-control" id="name" value="<?= $user['name'] ?>">
                <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group row">
                <div class="col-sm">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?= $user['email'] ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm">
                    <label for="telp">Telepon</label>
                    <input type="text" name="telp" class="form-control" id="telp" value="<?= $user['telp'] ?>">
                    <?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" class="form-control" id="address" value="<?= $user['address'] ?>">
                <?= form_error('address', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>
            <div class="form-group row">
                <div class="col-sm">
                    <label for="tmpt_lahir">Tempat Lahir</label>
                    <input type="text" name="tmpt_lahir" class="form-control" id="tmpt_lahir" value="<?= $user['tmpt_lahir'] ?>">
                    <?= form_error('tmpt_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <div class="col-sm">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" value="<?= $user['tgl_lahir'] ?>">
                    <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-2">Picture</div>
                <div class="col-sm-10">
                    <div class="row">
                        <div class="col-sm-3 mb-3">
                            <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="img-thumbnail">
                        </div>
                        <div class="col-sm-9">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" name="edit" class="btn btn-primary">Edit</button>
            <a href="<?= base_url('setting'); ?>" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>