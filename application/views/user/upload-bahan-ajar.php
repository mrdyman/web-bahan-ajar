<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>
    <div class="card col-lg-6">
        <div class="ml-2 mt-1">

            <?= form_open_multipart('user/upload'); ?>
            <div class="form-group mb-2 mt-2">
                <input type="text" class="form-control" id="matakuliah" name="matakuliah" placeholder="Masukkan nama matakuliah">
                <?= form_error('matakuliah', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group mb-2">
                <input type="text" class="form-control" id="semester" name="semester" placeholder="Semester">
                <?= form_error('semester', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group mb-2">
                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="Tahun">
                <?= form_error('tahun', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Bahan Ajar</label>
                <input type="file" class="form-control-file" id="bahan" name="bahan">
                <small id="emailHelp" class="form-text text-muted">*Type file yang diizinikan(*.ppt, *.xls, *docx).</small>
                <?= form_error('bahan', '<small class="text-danger pl-3">', '</small>'); ?>
            </div>

            <button type="submit" class="btn btn-success btn-sm mb-2">Kirim</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Javascript -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>