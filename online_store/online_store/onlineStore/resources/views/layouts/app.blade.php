<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Online Store')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title> Shop HQT</title>
    <link href="Plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link
      href="Plugins/Bootstrap-icons/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
      integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="style.css" />
    <link href="{{ asset('css/Home.css') }}" rel="stylesheet">
    <style>
      .header-first {
        width: 50%;
      }
    </style>
</head>

<body>
    <form style="top: -5px" action="" class="formthanhcongcu bg-secondary pt-2">
      <div class="container pb-2">
        <div class="row mt-1">
          <div class="col-2">
            <a href="{{ route('home.index') }}">
              <img
                src="../images/QHT.jpg"
                style="width: 70px; height: 50px"
                alt=""
              />
            </a>
          </div>

          <div class="col-auto">
            <a href="{{ route('home.index') }}">
              <img
                class="ms-3"
                src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/18/About_icon_%28The_Noun_Project%29.svg/1024px-About_icon_%28The_Noun_Project%29.svg.png"
                alt="gioi-thieu"
                style="width: 25px; height: 25px"
              />
              <div class="divsp divsp text-light">
                <a href="{{ route('home.index') }}"> Giới thiệu</a>
              </div>
            </a>
          </div>

          <div class="col-auto" id="divchuot">
            <a href="products">
              <img
                class="ms-1"
                src="../images/chuotmaytinh.png"
                alt="chuot"
                style="width: 30px; height: 25px"
              />
            </a>
            <div class="dropdown text-center" role="button">
              <a
                class="dropdown-toggle"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
                href="products"
              >
                Chuột</a
              >
              <ul class="dropdown-menu bg-secondary">
                <li><a class="dropdown-item" href="products"> Chuột Gamming</a></li>
                <li><a class="dropdown-item" href="products">Chuột Bluetooth</a></li>
                <li>
                  <a class="dropdown-item" href="products">CHuột Quang</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="col-auto" id="divtainghe">
            <a href="products">
                <img
                  class="ms-1"
                  src="../images/tainghe.png"
                  alt="tainghe"
                  style="width: 30px; height: 25px"
                />
              </a>
              <div class="dropdown text-center" role="button">
                <a
                  class="dropdown-toggle"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                  href="products"
                >
                  Tai nghe</a
                >
                <ul class="dropdown-menu bg-secondary">
                  <li><a class="dropdown-item" href="products"> Tai nghe Bluetooth</a></li>
                  <li><a class="dropdown-item" href="products">Tai nghe Gamming</a></li>
                  <li>
                    <a class="dropdown-item" href="products">Tai nghe thể thao</a>
                  </li>
                </ul>
              </div>
          </div>

          <div class="col-auto" id="divchuot">
            <a href="">
              <img
                class="ms-1"
                src="../images/cpu.webp"
                alt="CPU"
                style="width: 25px; height: 25px"
              />
              <div class="divsp text-light"><a href="">CPU </a></div>
            </a>
          </div>

          <div class="col-auto" id="divchuot">
            <a href="">
              <img
                class="ms-3"
                src="../images/banphim.png"
                alt="ban-phim"
                style="width: 25px; height: 25px"
              />
              <div class="divsp text-light"><a href="">Bàn phím </a></div>
            </a>
          </div>

          <div class="col-auto" id="divchuot">
            <a href="">
              <img
                class="ms-1"
                src="../images/ram.png"
                alt="RAM"
                style="width: 25px; height: 25px"
              />
              <div class="divsp text-light"><a href=""> RAM</a></div>
            </a>
          </div>

          <div class="col-auto" id="divchuot">
            <a href="products">
              <img
                class="ms-5"
                src="../images/other.png"
                alt="san-pham-khac"
                style="width: 25px; height: 25px"
              />
              <div class="divsp text-light"><a href="products"> Sản phẩm khác </a></div>
            </a>
          </div>

          <div class="col-auto" id="divchuot">
            <a href="">
              <img
                class="ms-2"
                src="https://linhkienstore.vn/source/25x25/icon%20danh%20m%E1%BB%A5c/tintuctonghop_1.png"
                alt="Tin-tuc"
                style="width: 25px; height: 25px"
              />
              <div class="divsp text-light"><a href=""> Tin tức </a></div>
            </a>
          </div>

          @guest
          <div class="col-auto" id="divchuot">
            <a href="{{ route('login') }}">
              <img
                class="ms-2"
                src="https://static.thenounproject.com/png/642902-200.png"
                alt="dang-nhap"
                style="width: 25px; height: 25px"
              />

              <div style="" class="divsp text-light">Login </div>
            </a>
              @else
              <li><a href="{{ route('login') }}">
                <form id="logout" action="{{ route('logout') }}" method="POST">
                    <a href="" role="button"
                    onclick="document.getElementById('logout').submit();">Logout</a>
                    @csrf
                </form>
            </a></li>
    @endguest
            </a>
            
          </div>

          <div class="col-auto text-center">
            
                <a class="nav-link active" href="{{ route('cart.index') }}"><img
                    src="https://cdn4.iconfinder.com/data/icons/shopping-407/36/shopping-15-512.png"
                    alt="gio-hang"
                    style="width: 28px; height: 25px"
                  />
                  <div class="divsp text-light"></div>
                </a>
              
            
          </div>

          <div class="col-auto align-self-center">
            <form action="formtimkiem" method="get">
              <input
                class="ms-5"
                type="text"
                placeholder="Tìm kiếm..."
                name="key"
                value=""
                maxlength="70"
                class="form-check"
                style="border-radius: 7px"
                size="19"
              />

              <button
                style="
                  border: none;
                  position: absolute;
                  right: 165px;
                  top: 18px;
                  color: rgb(0, 0, 0) !important;
                  width: initial !important;
                  border-left: 0 !important;
                  background: transparent;
                  height: 37px !important;
                  width: 42px !important;
                  text-align: center;
                  border-radius: 0 8px 8px 0;
                "
                type="submit"
                class="btn-search-pc"
              >
                <span class="fa fa-search"></span>
              </button>
            </form>
          </div>
        </div>
      </div>
    </form>

    <!-- header -->
        
    <div class="container my-4">
        @yield('content')
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/danielgarax">
                    Daniel Correa
                </a> - <b>Paola Vallejo</b>
            </small>
        </div>
    </div>
    <!-- footer -->
   
</body>

</html>




















