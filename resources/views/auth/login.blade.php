<x-guest-layout>
  <div class="login-container text-c animated flipInX">
          <div>
              <h1 class="logo-badge text-whitesmoke"><span class="fa fa-user-circle"></span></h1>
          </div>
              <p class="text-whitesmoke">Login</p>
          <div class="container-content">
              <form class="margin-t" method="post" action="{{route('login')}}">
                <x-jet-validation-errors class="mb-4" />
                @csrf
                  <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="email" :value="old('email')" required autofocus>
                  </div>
                  <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="password" required autocomplete="current-password">
                  </div>
                  <button type="submit" class="form-button button-l margin-b">Login</button>
                  <div class="group"> <input name="remember" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Logedin</label> </div>
                  <a class="text-darkyellow" href="{{route('password.request')}}"><small>Forgot your password?</small></a>
              </form>
          </div>
      </div>
</x-guest-layout>
