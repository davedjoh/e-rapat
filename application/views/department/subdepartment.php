<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="contents">

        <!-- Start Breadcumb -->
        <div class="breadcrumb"></div>
        <!-- End of Breadcumb -->

        <!-- Start Content Table -->
        <div class="row">
            <div class="col-lg-12">

                <!-- Check for error using form validation -->
                <!-- Alert if Error occurred-->
                <?php if (validation_errors()) : ?>

                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <h4 class="alert-heading">Error!</h4>
                        <hr>
                        <?= validation_errors(); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>

                <!-- Alert if Success saving data to DB -->
                <?= $this->session->flashdata('messages'); ?>

                <!-- DataTales Example -->
                <div class="card shadow-none mb-4">
                    <div class="card-header py-3">
                        <a href="#" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#addSubDepartment">
                            <span class="icon text-white-50">
                                <i class="fas fa-file"></i>
                            </span>
                            <span class="text">Tambah Bagian Baru</span>
                        </a>
                        <h6 class="m-0 font-weight-bold text-primary float-right">Tabel Data Bagian</h6>
                    </div>
                    <div class="card-body">
                        <div class="col-md-12">
                            <table class="table table-hover" id="freeRoom" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center w-30">Nama Bagian</th>
                                        <th class="text-center w-30">Nama Sekretariat</th>
                                        <th class="text-center w-20">Status</th>
                                        <th class="text-center w-20">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($subdepartment as $sd) : ?>
                                        <tr>
                                            <td class="text-center"><?= $i++; ?></td>
                                            <td><strong><?= $sd['sub_department_name']; ?></strong></td>
                                            <td><i><?= $sd['department_name']; ?></i></td>
                                            <td class="text-center">
                                                <?php
                                                if ($sd['is_active'] == 1) { ?>
                                                    <span class="badge badge-success">Aktif</span>
                                                <?php } elseif ($sd['is_active'] == 0) { ?>
                                                    <span class="badge badge-danger">Tidak Aktif</span>
                                                <?php } ?>
                                            </td>
                                            <td class="text-center">
                                                <span class="badge badge-dark" data-toggle="modal" data-target="#editSubDepartment<?= $sd['id']; ?>" style="cursor:pointer"><i class="fas fa-fw fa-marker"></i> Ubah Data</span>
                                                <span class="badge badge-danger" data-toggle="modal" data-target="#deleteSubDepartment<?= $sd['id']; ?>" style="cursor:pointer"><i class="fas fa-fw fa-trash"></i> Hapus Data</span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Content Table -->
    </div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Start of Modal Add -->
<div class="modal fade" id="addSubDepartment" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="addSubDepartment" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addSubDepartment">Tambah Bagian Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/subdepartment'); ?>" method="POST">
                <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" style="display: none">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="sub_department_name" name="sub_department_name" placeholder="Tambah Nama Bagian..." autocomplete="off">
                    </div>
                    <div class="form-group">
                        <select name="department_id" id="department_id" class="form-control">
                            <option value="">-- Pilih Nama Sekretariat --</option>
                            <?php foreach ($dept as $m) : ?>
                                <option value="<?= $m['id']; ?>"><?= $m['department_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    Apakah anda ingin mengaktifkan Menu ini? <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active1" value="1" checked>
                        <label class="form-check-label" for="is_active1">Aktif</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active2" value="0">
                        <label class="form-check-label" for="is_active2">Tidak Aktif</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" id="batal" data-dismiss="modal"><i class="fas fa-power-off fa-sm fa-fw mr-2 text-gray-400"></i> Keluar</button>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Tambah Data Bagian</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End of Modal Add -->

<!-- Start of Modal Edit -->
<?php
foreach ($subdepartment as $sp) :
    $id = $sp['id'];
?>
    <div class="modal fade" id="editSubDepartment<?= $id; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="editSubDepartment" aria-hidden="true">

        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSubDepartment">Ubah Data Bagian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/updatesubdepartment'); ?>" method="POST">
                    <input type="hidden" name="id" value="<?= $sp['id']; ?>">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" style="display: none">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="sub_department_name" name="sub_department_name" value="<?= $sp['sub_department_name']; ?>" placeholder="Masukan Nama Bagian..." autocomplete="off">
                        </div>
                        <div class="form-group">
                            <select class="custom-select mr-sm-2" select name="department_id" id="department_id">
                                <option value="<?= $sp['department_id']; ?>"><?= $sp['department_name']; ?></option>
                                <option disabled>--</option>
                                <?php foreach ($dept as $d) : ?>
                                    <option value="<?= $d['id']; ?>"><?= $d['department_name']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="custom-select mr-sm-2" select name="is_active" id="is_active">
                                <option value="<?= $sp['is_active']; ?>"><?= $sp['is_active'] ? 'Active' : 'Not Active'; ?></option>
                                <option disabled>--</option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="batal" data-dismiss="modal"><i class="fas fa-power-off fa-sm fa-fw mr-2 text-gray-400"></i> Keluar</button>
                        <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Ubah Data Bagian</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End of Modal Edit -->


<!-- Start of Modal Delete -->
<?php
foreach ($subdepartment as $a) :
    $id = $a['id'];
?>
    <div class="modal fade" id="deleteSubDepartment<?= $id; ?>" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSubDepartment">Hapus Data Bagian</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/deletesubdepartment/' . $id); ?>" method="POST">
                    <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" style="display: none">
                    <div class="modal-body">
                        <p>Apakah anda yakin ingin menghapus Data Bagian <b><?= $a['sub_department_name']; ?> ?</b></p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" value="<?= $id; ?>">
                        <button type="button" class="btn btn-secondary" id="batal" data-dismiss="modal"><i class="fas fa-power-off fa-sm fa-fw mr-2 text-gray-400"></i> Keluar</button>
                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Hapus Data Bagian</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- End of Modal Delete -->