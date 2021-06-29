<div class="mt-5 col-md-6 offset-3">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <h3>Register Page</h3>

    <form wire:submit.prevent='submitForm()'>
        <div class="mb-3">
          <label for="name" class="form-label">Name</label>
          <input type="text" wire:model='name' class="form-control" aria-describedby="emailHelp">
          @error('name')  
          <span class="text text-danger">
              {{ $message }}
            </span>
          @enderror
        </div>
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
          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Password</label>
            <input type="password" wire:model='password_confirmation' class="form-control">
            @error('password_confirmation')
            <span class="text text-danger">
              {{ $message }}
            </span>
          @enderror
          </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary" >Submit</button>
      </form>

</div>
