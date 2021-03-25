<div>
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success text-center h4">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger text-center h4">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>

    @if($registerForm)

    <div class="text-center">
        <main class="form-signin">
            <form>
                <img class="mb-2" style="filter:drop-shadow(1px 1px 3px black);" src="img/logo-7.png" alt="" width="72" height="57">
                <h1 class="h3 mb-3 text-muted fw-bold">Please register</h1>
            
                <div class="form-floating mb-3">
                    <input type="name" wire:model="name" class="form-control" id="floatingInput" placeholder="Jonas Jonaitis">
                    <label for="floatingInput">Full name</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" wire:model="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" wire:model="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <button class="w-100 btn btn-lg btn-outline-success" wire:click.prevent="login" type="submit">Register</button>

                <div class="col-md-12 mt-3"><a class="text-dark" wire:click.prevent="register">Login</a></div>

                <p class="mt-5 mb-3 h6 text-muted">© 2017–2021</p>
            </form>
        </main>
    </div>
    
    <!---
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

        --->

    @elseif ($loginForm)
        <div>
            <a href="table"><h2>enter table</h2></a>
        </div> 
    @else

    <div class="text-center">
        <main class="form-signin">
            <form>
                <img class="mb-2" style="filter:drop-shadow(1px 1px 3px black);" src="img/logo-7.png" alt="" width="72" height="57">
                <h1 class="h3 mb-3 text-muted fw-bold">Please Log in</h1>
            
                <div class="form-floating mb-3">
                    <input type="email" wire:model="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" wire:model="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 mb-3 btn btn-lg btn-outline-primary" wire:click.prevent="login" type="submit">Sign in</button>
                <div class="col-md-12 mt-1">Don't have account? <a class="text-dark" wire:click.prevent="register">Register Here</a></div>
                <p class="mt-5 mb-1 h6 text-muted">© 2017–2021</p>
            </form>
        </main>
    </div>
        
     <!---

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
        
        ---->

    @endif
</div>