@extends('admin.layout.app')

@inject('item', 'App\Models\Common')

@push('main')
    <div class="card col-md-8 offset-md-2">
        <div class="card-header">About</div>
        <div class="card-body">
           <form action="{{ route('general.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label>Welcome Title</label>
                <input class="form-control form-control-solid" value="{{ $item->get('welcome_title') }}" name="welcome_title" type="text" placeholder="Enter welcome title">
            </div>
            <div class="mb-3">
                <label>Welcome Caption</label>
                <input class="form-control form-control-solid" value="{{ $item->get('welcome_caption') }}" name="welcome_caption" type="text" placeholder="Enter welcome caption">
            </div>
            <div class="mb-3">
                <label>Feature Caption 1</label>
                <input class="form-control form-control-solid" value="{{ $item->get('feature_1') }}" name="feature_1" type="text" placeholder="Enter feature caption 1">
            </div>
            <div class="mb-3">
                <label>Feature Caption 2</label>
                <input class="form-control form-control-solid" value="{{ $item->get('feature_2') }}" name="feature_2" type="text" placeholder="Enter feature caption 2">
            </div>
            <div class="mb-3">
                <label>Services</label>
                <input class="form-control form-control-solid" value="{{ $item->get('services') }}" name="services" type="text" placeholder="Enter services">
            </div>
            <div class="mb-3">
                <label>Total Project</label>
                <input class="form-control form-control-solid" value="{{ $item->get('total_project') }}" name="total_project" type="number" placeholder="Enter total project">
            </div>
            <div class="mb-3">
                <label>Happy Client</label>
                <input class="form-control form-control-solid" value="{{ $item->get('happy_client') }}" name="happy_client" type="number" placeholder="Enter happy client">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Save</button>
           </form>
        </div>
    </div>
@endpush