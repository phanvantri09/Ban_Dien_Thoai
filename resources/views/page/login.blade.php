<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('./homepage/css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('./homepage/fontawesome/css/all.min.css') }}">
    <title>login</title>
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
              <form action="{{ route('home.postLogin') }}" method="POST" enctype="multipart/form-data">
                @csrf @method('POST')
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Đăng nhập với</p>
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
                    placeholder="Enter a valid email address" />
                  <label class="form-label" for="form3Example3">Địa chỉ Email</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  @error('password')
                    <small class="help-block">{{$message}}</small>
                  @enderror
                  <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" />
                  <label class="form-label" for="form3Example4">Mật khẩu</label>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" name="rememberMe" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Nhớ cho lần đăng nhập sau
                    </label>
                  </div>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Đăng nhập</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">Bạn chưa có tài khoản! <a href="{{ route('home.register') }}"
                      class="link-danger">Đăng ký ngay</a></p>
                      <p class="small fw-bold mt-2 pt-1 mb-0"><a href="{{ route('home.changepass') }}"
                        class="link-danger">Quên mật khẩu</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
      </section>
    
</body>
</html>