<div class="modal fade" id="modal-add-kategori">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Kategori</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('kategori/simpandatabaru', ['class' => 'form-data form-horizontal']); ?>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="txtKategori" class="col-sm-3 col-form-label">Nama Kategori</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="txtNamaKategori" name="txtNamaKategori" placeholder="Masukan nama kategori baru" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-primary btn-simpan">Simpan</button>
            </div>
            <?= form_close(); ?>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    $('.form-data').submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: "post",
            url: $(this).attr('action'),
            data: $(this).serialize(),
            dataType: "json",
            beforeSend: function(e) {
                $('.btn-simpan').prop('disable', true);
                $('.btn-simpan').html('<i class="fa fa-spin fa-spinner"></i>');
            },
            success: function(response) {
                if (response.sukses) {
                    alert(response.sukses);
                }
            },
            error: function(xhr, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });

        return false;
    });
</script>