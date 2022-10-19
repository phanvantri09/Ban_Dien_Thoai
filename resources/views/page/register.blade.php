<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./homepage/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('./homepage/fontawesome/css/all.min.css') }}">
    <title>Đăng ký</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid"
                alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                @if(Session::has('success'))
                <div class="alert alert-danger" role="alert">
                  {{Session::get('success')}}
                </div>
              @endif 
              @if(Session::has('error'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('error')}}
                </div>
              @endif
              <form action="{{ route('home.postRegister') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('POST')
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Đăng ký với</p>
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-facebook-f"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-twitter"></i>
                  </button>
      
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                    <i class="fab fa-linkedin-in"></i>
                  </button>
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">Hoặc</p>
                </div>
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                    @error('email')
                            <small class="help-block">{{$message}}</small>
                    @enderror
                  <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                    placeholder="Nhập địa chỉ Email" />
                  <label class="form-label" for="form3Example3">Địa chỉ Email</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                    @error('password')
                            <small class="help-block">{{$message}}</small>
                    @enderror
                  <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="nhập mật khẩu" />
                  <label class="form-label" for="form3Example4">Mật khẩu</label>
                </div>
                <div class="form-outline mb-3">
                    @error('password2')
                            <small class="help-block">{{$message}}</small>
                    @enderror
                    <input type="password" name="password2" id="form3Example4" class="form-control form-control-lg"
                      placeholder="Nhập lại mật khẩu" />
                    <label class="form-label" for="form3Example4">Nhập lại mật khẩu</label>
                  </div>    
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng ký</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Bạn Đã có tài khoản! <a href="{{ route('home.login') }}"
                      class="link-danger">Đăng nhập ngay</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>