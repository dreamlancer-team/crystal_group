<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form class="modal-content" action="{{ route('slider.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-body text-center">
                <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div>
                <input name="image" class="btn btn-primary form-control" type="file"/>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>