<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-6">
            <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
        </div>
    </div>

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?= $title ?></title>

        <!-- Custom fonts for this template -->
        <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this page -->
        <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    </head>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Bahan Ajar Dosen</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 1%">#</th>
                            <th style="width: 30%">Nama Dosen</th>
                            <th style="width: 20%">Matakuliah</th>
                            <th style="width: 10%">Semester</th>
                            <th style="width: 10%">Tahun</th>
                            <th style="width: 10%">Bahan Ajar</th>
                            <th style="width: 10%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($bahan as $b) : ?>
                            <tr>
                                <td align="center"><b><?= $i; ?></b></td>
                                <td><?= $b['nama_dosen']; ?></td>
                                <td><?= $b['matakuliah']; ?></td>
                                <td><?= $b['semester']; ?></td>
                                <td><?= $b['tahun']; ?></td>
                                <td align="center">
                                    <a href="<?= base_url('assets/bahanajar/') . $b['file']; ?>" id="<?= 'id' ?>" target="_blank" class="btn btn-success btn-sm tombol"><i class="fas fa-eye"></i> Lihat</a>
                                </td>
                                <td>
                                    <a href="<?= base_url('admin/hapus/'); ?><?= $b['id']; ?>" class="btn btn-danger hapus"><i class="far fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Javascript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>