<?= $this->extend('pages/backend/menu'); ?>

<?= $this->section('content') ?>
<!-- Default box -->
<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Data Kategori
        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-3">
                <button type="button" class="btn btn-sm btn-primary btn-add"><i class="fa fa-plus"></i> Tambah Kategori</button>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-3">
                <form action="/kategori" method="post">
                    <?= csrf_field() ?>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" name="txtCariKategori" placeholder="Cari nama kategori" autofocus>
                        <span class="input-group-append">
                            <button type="submit" class="btn btn-info btn-flat" name="btnCari">Cari!</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                <table class="table table-sm table-striped">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 50px;">#</th>
                            <th>Nama</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1 + (($nohalaman - 1) * $perpage);
                        foreach ($data_kategori as $row) { ?>
                            <tr>
                                <td class="text-right"><?= $nomor++; ?></td>
                                <td><?= $row['kategori']; ?></td>
                                <td></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="float-right">
                    <?= $pager->links('kategori', 'custom_pagination'); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
        Footer
    </div>
    <!-- /.card-footer-->
</div>
<!-- /.card -->

<!-- Modal -->
<div class="view-modal" style="display: none;" id='mdladdkategori'>

</div>

<!-- java script -->
<script>
    $(document).ready(function() {
        $('.btn-add').click(function(e) {
            e.preventDefault();

            $.ajax({
                url: "<?= site_url('kategori/tambah'); ?>",
                dataType: "json",
                success: function(response) {
                    if (response.data) {
                        $('.view-modal').html(response.data).show();
                        $('#modal-add-kategori').on('shown.bs.modal', function(event) {
                            $('#txtNamaKategori').focus();
                        })
                        $('#modal-add-kategori').modal('show');
                    }
                },
                error: function(xhr, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });

    });
</script>
<?= $this->endSection() ?>