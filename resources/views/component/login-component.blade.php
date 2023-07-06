<div class="container py-3 col-12 col-md-9 ">
    <div class="row justify-content-center ">
        <div class="col-12 col-md-7 ">


            <form method="POST" action="{{ route('post-login') }}" class="form-container">
                @csrf
                <legend class="text-center letter-color">Iniciar sesion</legend>

                <div class="form-group py-3 fs-4">
                    <label for="role">Usuario: </label>
                    <input id="role" type="text" class="form-control py-3 @error('role') is-invalid @enderror"
                        name="role" value="{{ old('role') }}" required autofocus>
                    @error('role')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group py-3 fs-4">
                    <label for="password">Contraseña:</label>
                    <input id="password" type="password"
                        class="form-control py-3 @error('password') is-invalid @enderror" name="password" required
                        autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group py-2 text-center background rounded ">
                    <button type="submit" class="btn form-control fs-4">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>
</div>
