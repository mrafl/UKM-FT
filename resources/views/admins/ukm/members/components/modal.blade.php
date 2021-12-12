<div class="modal fade show" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-modal="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
        <div class="modal-content">
            <form id="modal-form" method="POST" enctype="multipart/form-data" action="">
                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title">Tambah Admin</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    @csrf

                    <input name="ukmId" type="hidden" value="{{ $ukm['id'] }}">

                    <div class="form-group">
                        <label class="form-control-label" for="name">Nama<sup class="text-danger">*</sup></label>
                        <input class="form-control" type="text" placeholder="Nama" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="position">Jabatan<sup class="text-danger">*</sup></label>
                        <select class="form-control" name="position" id="position">
                            <option value="1" selected>Ketua</option>
                            <option value="2">Wakil Ketua</option>
                            <option value="3">Bendahara</option>
                            <option value="4">Wakil Bendahara</option>
                            <option value="5">Sekretaris</option>
                            <option value="6">Wakil Sekretaris</option>
                            <option value="7">Anggota</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-control-label" for="photo">Photo<sup class="text-danger">*</sup></label>
                        <input class="form-control" type="file" placeholder="Photo" id="photo" name="photo" required>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">
                        Save changes
                    </button>
                    <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
