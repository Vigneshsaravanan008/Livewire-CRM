<div class="card">
    <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="{{url('/')}}" method="post">
            <div class="input-group mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model="name" placeholder="Full name">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            @error('name') 
                <span class="error">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" wire:model="email" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('email') 
                <span class="error">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" wire:model="password" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('password') 
                <span class="error">{{ $message }}</span>
            @enderror
            <div class="input-group mb-3">
                <input type="password" class="form-control @error('confirm_password') is-invalid @enderror" wire:model="confirm_password" placeholder="Retype password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            @error('confirm_password') 
                <span class="error">{{ $message }}</span>
            @enderror
            <div class="row">
                <div class="col-8">
                    <div class="icheck-primary">
                        <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                        <label for="agreeTerms">
                            I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <div class="col-4">
                    <button type="button" class="btn btn-primary btn-block" wire:click="registerForm">Register</button>
                </div>
            </div>
        </form>

        <div class="social-auth-links text-center">
            <p>- OR -</p>
            <a href="#" class="btn btn-block btn-danger">
                <i class="fab fa-google-plus mr-2"></i>
                Sign up using Google+
            </a>
        </div>

        <a href="{{ route('auth.login') }}" class="text-center">I already have a membership</a>
    </div>
</div>
