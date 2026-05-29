<!-- Container Fluid-->
<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><?= $title; ?></h1>
    </div>

    <div class="row mb-3">

        <!-- Pengaturan Dress Code -->
        <div class="col-xl-6 col-lg-6 mb-4">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Pengaturan Dress Code</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label>Judul Dress Code</label>
                            <input type="text" class="form-control" placeholder="Contoh : Dress Code Undangan" value="">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <textarea class="form-control" rows="3" placeholder="Contoh : Tamu undangan diharapkan mengenakan pakaian formal dengan warna yang sesuai tema."></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tampilkan Dress Code</label>
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="switchDressCode" checked>
                                <label class="custom-control-label" for="switchDressCode">Aktif</label>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalSimpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Daftar Warna Dress Code -->
        <div class="col-xl-6 col-lg-6 mb-4">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Palet Warna</h6>
                </div>
                <div class="card-body">
                    <div id="konten-warna">

                        <!-- Contoh item warna 1 -->
                        <div id="warna1" class="warna-item border rounded p-3 mb-3">
                            <div class="row align-items-center mb-2">
                                <div class="col-auto">
                                    <strong>#1</strong>
                                </div>
                                <div class="col text-right">
                                    <a class="btn btn-sm btn-danger btn_remove_warna" data-id="1">Hapus</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Warna</label>
                                        <input type="text" class="form-control" placeholder="Contoh : Dusty Rose" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kode Warna</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text p-1">
                                                    <input type="color" class="color-picker" value="#d4a5a5" style="width:32px;height:32px;border:none;cursor:pointer;padding:0;">
                                                </span>
                                            </div>
                                            <input type="text" class="form-control color-hex" placeholder="#d4a5a5" value="#d4a5a5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Contoh item warna 2 -->
                        <div id="warna2" class="warna-item border rounded p-3 mb-3">
                            <div class="row align-items-center mb-2">
                                <div class="col-auto">
                                    <strong>#2</strong>
                                </div>
                                <div class="col text-right">
                                    <a class="btn btn-sm btn-danger btn_remove_warna" data-id="2">Hapus</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nama Warna</label>
                                        <input type="text" class="form-control" placeholder="Contoh : Sage Green" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Kode Warna</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text p-1">
                                                    <input type="color" class="color-picker" value="#9caf88" style="width:32px;height:32px;border:none;cursor:pointer;padding:0;">
                                                </span>
                                            </div>
                                            <input type="text" class="form-control color-hex" placeholder="#9caf88" value="#9caf88">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row mt-2">
                        <div class="col text-center">
                            <a id="addWarna" class="btn btn-primary btn-block" style="color:#fff">+ Tambah Warna</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Preview Dress Code -->
    <div class="row mb-3">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Preview Tampilan</h6>
                </div>
                <div class="card-body text-center py-5" style="background: #f8f9fc;">
                    <h5 class="font-weight-bold mb-2">Dress Code Undangan</h5>
                    <p class="text-muted mb-4">Tamu undangan diharapkan mengenakan pakaian formal dengan warna yang sesuai tema.</p>
                    <div class="d-flex justify-content-center flex-wrap gap-3" id="preview-warna">
                        <div class="text-center mx-3">
                            <div style="width:70px;height:70px;border-radius:50%;background:#d4a5a5;margin:0 auto;box-shadow:0 2px 8px rgba(0,0,0,0.15);"></div>
                            <small class="d-block mt-2 text-muted">Dusty Rose</small>
                            <small class="d-block text-muted" style="font-size:11px;">#d4a5a5</small>
                        </div>
                        <div class="text-center mx-3">
                            <div style="width:70px;height:70px;border-radius:50%;background:#9caf88;margin:0 auto;box-shadow:0 2px 8px rgba(0,0,0,0.15);"></div>
                            <small class="d-block mt-2 text-muted">Sage Green</small>
                            <small class="d-block text-muted" style="font-size:11px;">#9caf88</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Modal Konfirmasi Simpan -->
<div class="modal fade" id="modalSimpan" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Peringatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah kamu yakin ingin menyimpan perubahan?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" id="btnSimpanDressCode">Ya</button>
                <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>

<script>
    var warnaCount = 2;

    // Tambah warna baru
    $('#addWarna').click(function() {
        warnaCount++;
        var html = '<div id="warna' + warnaCount + '" class="warna-item border rounded p-3 mb-3">' +
            '<div class="row align-items-center mb-2">' +
                '<div class="col-auto"><strong>#' + warnaCount + '</strong></div>' +
                '<div class="col text-right">' +
                    '<a class="btn btn-sm btn-danger btn_remove_warna" data-id="' + warnaCount + '">Hapus</a>' +
                '</div>' +
            '</div>' +
            '<div class="row">' +
                '<div class="col-md-6">' +
                    '<div class="form-group">' +
                        '<label>Nama Warna</label>' +
                        '<input type="text" class="form-control" placeholder="Contoh : Navy Blue" value="">' +
                    '</div>' +
                '</div>' +
                '<div class="col-md-6">' +
                    '<div class="form-group">' +
                        '<label>Kode Warna</label>' +
                        '<div class="input-group">' +
                            '<div class="input-group-prepend">' +
                                '<span class="input-group-text p-1">' +
                                    '<input type="color" class="color-picker" value="#cccccc" style="width:32px;height:32px;border:none;cursor:pointer;padding:0;">' +
                                '</span>' +
                            '</div>' +
                            '<input type="text" class="form-control color-hex" placeholder="#cccccc" value="#cccccc">' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</div>' +
        '</div>';
        $('#konten-warna').append(html);
        bindColorPicker();
    });

    // Hapus warna
    $(document).on('click', '.btn_remove_warna', function() {
        var id = $(this).data('id');
        $('#warna' + id).remove();
    });

    // Sync color picker ke text input
    function bindColorPicker() {
        $('.color-picker').off('input').on('input', function() {
            $(this).closest('.input-group').find('.color-hex').val($(this).val());
        });
        $('.color-hex').off('input').on('input', function() {
            var val = $(this).val();
            if (/^#[0-9A-Fa-f]{6}$/.test(val)) {
                $(this).closest('.input-group').find('.color-picker').val(val);
            }
        });
    }
    bindColorPicker();

    // Tombol simpan (placeholder)
    $('#btnSimpanDressCode').on('click', function() {
        $('#modalSimpan').modal('hide');
        // TODO: hubungkan ke backend
    });
</script>
