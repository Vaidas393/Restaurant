<x-guest-layout>
  <div class="login-container text-c animated flipInX">
          <div>
              <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
          </div>
              <p class="text-whitesmoke">Login</p>
          <div class="container-content">
              <form class="margin-t" method="post" action="{{route('register')}}">
                <x-jet-validation-errors class="mb-4" />
                @csrf
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="name" :value="name" required autofocus autocomplete="name">
                </div>
                  <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="email" :value="email" required autofocus>
                  </div>
                  <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="password" required autocomplete="new-password">
                  </div>
                  <div class="form-group">
                      <input type="password" name="password_confirmation" class="form-control" placeholder="confirm password" required autocomplete="new-password">
                  </div>
                  <button type="submit" name="register" class="form-button button-l margin-b">Register</button>
              </form>
          </div>
      </div>
</x-guest-layout>
