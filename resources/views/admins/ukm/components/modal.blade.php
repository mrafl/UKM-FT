<div class="modal fade show" id="ukm-modal" tabindex="-1" role="dialog" aria-labelledby="ukm-modal" aria-modal="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <form id="modal-form" method="POST" enctype="multipart/form-data" action="">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title">Tambah Ukm</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf

                    <input type="hidden" name="type" id="ukm-type" value="{{ $type }}">

                    <div class="form-group">
                        <label class="form-control-label" for="name">Nama<sup class="text-danger">*</sup></label>
                        <input class="form-control" type="text" placeholder="Nama" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="slug">Slug<sup class="text-danger">*</sup></label>
                        <input class="form-control" type="text" placeholder="Slug" id="slug" name="slug" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="description">Deskripsi<sup
                                class="text-danger">*</sup></label>
                        <textarea class="form-control" placeholder="Deskripsi" id="description" name="description"
                                  required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="visi">Visi<sup class="text-danger">*</sup></label>
                        <textarea class="form-control" placeholder="Visi" id="visi" name="visi" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="misi">Misi<sup class="text-danger">*</sup></label>
                        <textarea class="form-control" placeholder="Misi" id="misi" name="misi" required></textarea>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="logo">Logo<sup class="text-danger">*</sup></label>
                        <input class="form-control" type="file" placeholder="Logo" id="logo" name="logo" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" id="ukm-btn-save">
                        Save changes
                    </button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
