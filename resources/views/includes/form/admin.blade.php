]<div class="row">
  {{-- Name --}}
  <div class="col-md-12 mb-3">
    <x-input key="name" placeholder="نام" />
  </div>
  {{-- Email --}}
  <div class="col-md-12 mb-3">
    <x-input key="email" placeholder="ایمیل" />
  </div>
  {{-- Passwords --}}
  <div class="col-md-12 mb-3">
    <label for="password">رمز جدید:</label>
    <input type="password" name="password" id="password" placeholder="رمز جدید" autocomplete="new-password">
  </div>
  <div class="col-md-12">
    <label for="password-confirm">تکرار رمز جدید:</label>
    <input type="password" name="password-confirm" id="password-confirm" placeholder="تکرار رمز جدید" autocomplete="new-password">
  </div>
</div>

