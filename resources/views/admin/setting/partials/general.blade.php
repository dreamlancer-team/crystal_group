<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
    <form action="{{ route('setting.general') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Site Name</label>
            <input class="form-control form-control-solid" value="{{ $setting->get('site_name') }}" name="site_name" type="text" placeholder="Enter footer text">
        </div>
        <div class="mb-3">
            <label>Logo</label>
            <input class="form-control form-control-solid" value="{{ $setting->get('site_logo') }}" name="site_logo" type="text" placeholder="Enter footer text">
        </div>
        <div class="mb-3">
            <label>Footer Text</label>
            <input class="form-control form-control-solid" value="{{ $setting->get('footer_text') }}" name="footer_text" type="text" placeholder="Enter footer text">
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</div>