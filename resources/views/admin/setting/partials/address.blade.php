<div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
    <div class="mb-3">
        <label>Address</label>
        <input class="form-control form-control-solid" value="{{ $setting->get('address') }}" name="address" type="text" placeholder="Enter address">
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input class="form-control form-control-solid" value="{{ $setting->get('email') }}" name="email" type="email" placeholder="Enter email">
    </div>
    <div class="mb-3">
        <label>Mobile</label>
        <input class="form-control form-control-solid" value="{{ $setting->get('mobile') }}" name="mobile_1" type="number" placeholder="Enter mobile">
    </div>
    <button class="btn btn-primary" type="submit">Save</button>
</div>