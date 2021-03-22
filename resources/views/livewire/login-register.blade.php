<div>
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
    @if($registerForm)
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name :</label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" wire:model="email" class="form-control">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" wire:model="password" class="form-control">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <button class="py-2 btn my-3 col-12 btn-outline-success btn-sm" wire:click.prevent="registerStore">Register</button>
                </div>
                <div class="col-md-12">
                    <a class="text-primary" wire:click.prevent="register"><strong>Login</strong></a>
                </div>
            </div>
        </form>
    @elseif ($loginForm)
        <div>
            <a href="table"><h2>enter table</h2></a>
        </div> 
    @else
        <form>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" wire:model="email" class="form-control">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" wire:model="password" class="form-control">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12 mt-3 mx-auto text-center">
                    <button class="py-2 btn my-2 col-12 btn-outline-primary btn-sm" wire:click.prevent="login">Login</button>
                </div>
                <div class="col-md-12 mt-1">
                    Don't have account? <a class="text-dark" wire:click.prevent="register"><strong>Register Here</strong></a>
                </div>
            </div>
        </form>
    @endif
</div>