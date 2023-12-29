<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | EHS MMI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>
<style>
  body{
    background-image: initial;
    background-position-x: initial;
    background-position-y: initial;
    background-size: initial;
    background-repeat-x: initial;
    background-repeat-y: initial;
    background-attachment: initial;
    background-origin: initial;
    background-clip: initial;
    background-color: rgb(0, 201, 183);
  }
</style>

<body>
  <div class="container" style="margin-top: 100px;">
    <div class="row justify-content-center">
      <div class="col-md-7 col-lg-5 col-sm-10 col-xs">
      <h4 class="text-center">Form Login EHS MMI</h4>
        <div class="card">
          <div class="card-header">
            <img src="/asset/img/logo-ehs.png" alt="" style="width: 60px;" class="float-start">
          </div>
          <div class="card-body">
            @if(session()->has('status'))
            <div class="alert alert-danger" role="alert">
              {{ session('status') }}
            </div>
            @endif
            <form action="/login" method="post">
              @csrf
              <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" />
                @error('nik')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
            </form>
            <p class="mt-2 fst-italic">Informasi!</p>
            <p class="fst-italic">
              * Bila belum punya akun dan tidak bisa login <br>
              * Segera hubungi Bpk. Arif Rahman Dept EHS
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>