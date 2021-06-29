<div class="mt-5 col-md-6 offset-3">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    @include('layouts.messages.flash')
    <h3>Login Page</h3>
      <form wire:submit.prevent="loginUser()">
          <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input type="email" wire:model='email' class="form-control">
              @error('email')
              <span class="text text-danger">
                {{ $message }}
              </span>
              @enderror
          </div>
          <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" wire:model='password' class="form-control">
                @error('password')
                <span class="text text-danger">
                  {{ $message }}
                </span>
                @enderror
          </div>
          <button type="submit" class="btn btn-primary" >Login</button>
      </form>

</div>
