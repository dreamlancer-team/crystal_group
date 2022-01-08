@extends('admin.layout.app')
@inject('setting', 'App\Models\Setting')
@push('main')
    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="general-tab" data-toggle="pill" href="#general" role="tab" aria-controls="general" aria-selected="true">General</a>
                    <a class="nav-link" id="address-tab" data-toggle="pill" href="#address" role="tab" aria-controls="address" aria-selected="false">Address</a>
                    <a class="nav-link" id="social-media-tab" data-toggle="pill" href="#social-media" role="tab" aria-controls="social-media" aria-selected="false">Social Media</a>
                  </div>
                </div>
                <div class="col-9">
                  <div class="tab-content" id="v-pills-tabContent">
                    @include('admin.setting.partials.general')
                    @include('admin.setting.partials.address')
                    @include('admin.setting.partials.social-media')
                   </div>
                </div>
              </div>
        </div>
    </div>
@endpush