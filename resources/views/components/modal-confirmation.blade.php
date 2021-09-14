<div>
       <!-- Modal -->
       <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h5>Deseja realmente excluir esse registro?</h5>
                </div>
                <div class="modal-footer">
                    <form id="form-delete" method="POST" action="">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-floppy-o"></i> Sim</button>
                    </form>
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal"><i class="fa fa-undo"></i> Não</button>
                </div>
            </div>
        </div>
    </div>
</div>