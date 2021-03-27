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
                <img class="mb-2 mt-3" style="filter:drop-shadow(1px 1px 3px black);" src="img/logo-7.png" alt="" width="72" height="57">
                <h1 class="h3 mb-3 mt-3 text-white fw-bold">Please register</h1>
            
                <div class="form-floating mt-5 mb-3">
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

                <button class="w-100 btn mt-5 btn-lg btn-success" wire:click.prevent="login" type="submit">Register</button>

                <div class="col-md-12 mt-3"><a class="text-dark" wire:click.prevent="register">Login</a></div>

            </form>
        </main>
    </div>
    
    @elseif ($loginForm)
        <div>
            <a href="table"><h2>enter table</h2></a>
        </div> 

    @else
    <div class="text-center">
        <main class="form-signin">
            <form>
                <img class="mb-2 mt-3" style="filter:drop-shadow(1px 1px 3px black);" src="img/logo-7.png" alt="" width="72" height="57">
                <h1 class="h3 mb-3 mt-3 text-white fw-bold">Please Sign in</h1>
            
                <div class="form-floating mt-5 mb-3">
                    <input type="email" wire:model="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" wire:model="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
                <button class="w-100 mb-3 mt-5 btn btn-lg btn-primary" wire:click.prevent="login" type="submit">Sign in</button>
                <div class="col-md-12 mt-1">Don't have account? <a class="text-dark" wire:click.prevent="register">Register Here</a></div>
            </form>
        </main>
    </div>
 
    @endif
</div>