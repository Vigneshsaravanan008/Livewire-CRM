<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>

        <form>
            <div class="input-group mb-3">
                <input type="email"  class="form-control @error('email') is-invalid @enderror" wire:model="email" placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror
            <div class="row">
                <div class="col-12">
                    <button type="button" wire:click="forgetForm" class="btn btn-primary btn-block">Request new password</button>
                </div>
            </div>
        </form>

        <p class="mt-3 mb-1">
            <a href="{{ route('auth.login') }}">Login</a>
        </p>
        <p class="mb-0">
            <a href="{{ route('auth.register') }}" class="text-center">Register a new membership</a>
        </p>
    </div>
</div>
</div>
