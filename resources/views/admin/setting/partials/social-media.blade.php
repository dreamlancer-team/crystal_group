<div class="tab-pane fade" id="social-media" role="tabpanel" aria-labelledby="social-media-tab">
    <form action="{{ route('setting.social') }}" method="post">
        @csrf
        <div class="mb-3">
            <label>Instagram</label>
            <input class="form-control form-control-solid" value="{{ $setting->get('instagram') }}" name="instagram" type="text" placeholder="https://www.instagram.com/...">
        </div>
        <div class="mb-3">
            <label>Facebook</label>
            <input class="form-control form-control-solid" value="{{ $setting->get('facebook') }}" name="facebook" type="text" placeholder="https://www.facebook.com/...">
        </div>
        <div class="mb-3">
            <label>Twitter</label>
            <input class="form-control form-control-solid" value="{{ $setting->get('twitter') }}" name="twitter" type="text" placeholder="https://www.twitter.com/...">
        </div>
        <div class="mb-3">
            <label>LinkedIn</label>
            <input class="form-control form-control-solid" value="{{ $setting->get('linkedin') }}" name="linkedin" type="text" placeholder="https://www.linkedin.com/in/...">
        </div>
        <button class="btn btn-primary" type="submit">Save</button>
    </form>
</div>