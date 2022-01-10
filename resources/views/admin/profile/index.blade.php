@extends('admin.layout.app')

@push('main')
    <div class="card col-md-8 offset-md-2">
        <div class="card-header">About</div>
        <div class="card-body">
           <form action="{{ route('profile.create') }}" method="post">
            @csrf
            <div class="mb-3">
                <textarea id="editor" class="form-control" name="about_text" rows="10" placeholder="Enter about us . . .">{{ $about_text }}</textarea>
            </div>
            <button class="btn btn-primary btn-block" type="submit">Save</button>
           </form>
        </div>
    </div>
@endpush

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>

   <script>
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
   </script>
@endpush