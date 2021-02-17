<div class="modal fade" id="modalPensiunStaff" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pensiun Staff</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="status_kerja">Status Kerja : </label>
                <select class="form-control" id="status_kerja" >
                    <option>Aktif</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status_kerja">Tanggal Berhenti : </label>
                <input type="text" class="form-control" id="tgl_berhenti">
            </div>
            <div class="form-group">
                <label for="status_kerja">Upload Dokumen Berhenti : </label>
                <input type="file" class="form-control-file" id="photo" title="Pilih file" onchange="previewImage();">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
    </div>
</div>
