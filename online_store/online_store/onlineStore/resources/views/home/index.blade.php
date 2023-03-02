@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<br>
<br>
<br>
<br>
<form action="" class="formkhuyenmai">
    <div class="container">
      <div class="row">
        <div class="col-8">
          <div
            id="carouselExampleRide"
            class="carousel slide"
            data-bs-ride="false"
          >
            <div id="carouselExampleControls" class="carousel slide">
              <div class="carousel-inner">
                <div class="hinhchinh carousel-item active">
                  <img 
                    style="width: 896px; height: 340px;  "
                    src="images/khuyenmai4.jpg"
                    class="d-block img-fluid"
                    alt="..."
                  />
                  
                </div>
                <div class="carousel-item">
                  <img
                    style="width: 901px; height: 340px"
                    src="images/Khuyenmai2.webp"
                    class="d-block img-fluid"
                    alt="..."
                  />
                </div>
                <div class="carousel-item">
                  <img
                    style="width: 896px; height: 340px"
                    src="images/Khuyenmai3.png"
                    class="d-block img-fluid"
                    alt="..."
                  />
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleRide"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleRide"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="col-4">
          <div class="row">
            <img
              class="img-fluid"
              style="height: 166px"
              src="images/Khuyenmai2.webp"
              alt=""
            />
          </div>
          <div class="row mt-2">
            <img
              class="img-fluid"
              style="height: 164px"
              src="images/Khuyenmai3.png"
              alt=""
            />
          </div>
        </div>
      </div>
    </div>
  </form>

  <form class="formbody mt-3" action="">
    <div class="container pt-2 pb-2">
      <div class="row">
        <div class="colbody col text-center py-2 py-2">
          <a href="products">
            <img
              class="ms-1"
              src="{{asset('images/chuotmaytinhimg.jpg')}}"
              alt="chuot"
              style="width: 40px; height: 40px"
            />
           
            <div class="text-dark">Chuột</div>
          </a>
        </div>

        <div class="colbody col text-center py-2">
          <a href="products">
            <img
              class="ms-2"
              src="images/taingheimg.jpg"
              alt="tai-nghe"
              style="width: 40px; height: 40px"
            />
            <div class="text-dark">Tai nghe</div>
          </a>
        </div>

        <div class="colbody col text-center py-2">
          <a href="">
            <img
              class=""
              src="images/cpuimg.jpg"
              alt="CPU"
              style="width: 40px; height: 40px"
            />
            <div class="text-dark">CPU</div>
          </a>
        </div>

        <div class="colbody col text-center py-2">
          <a href="">
            <img
              class=""
              src="images/ramimg.jpg"
              alt="RAM"
              style="width: 40px; height: 40px"
            />
            <div class="text-dark">RAM</div>
          </a>
        </div>

        <div class="colbody col text-center py-2">
          <a href="">
            <img
              class="ms-2"
              src="images/manhinhimg.jpg"
              alt="man-hinh"
              style="width: 40px; height: 40px"
            />
            <div class="text-dark">Màn hình</div>
          </a>
        </div>

        <div class="colbody col text-center py-2">
          <a href="">
            <img
              class="ms-2"
              src="images/tannhietimg.jpg"
              alt="tan-nhiet"
              style="width: 40px; height: 40px"
            />
            <div class="text-dark">Tản nhiệt</div>
          </a>
        </div>

        <div class="colbody col text-center py-2">
          <a href="">
            <img
              class="ms-3"
              src="images/banphimimg.jpg"
              alt="ban-phim"
              style="width: 40px; height: 40px"
            />
            <div class="text-dark">Bàn phim</div>
          </a>
        </div>

        <div class="colbody col text-center py-2">
          <a href="">
            <img
              class="ms-2"
              src="images/ocungimg.jpg"
              alt="o-cung"
              style="width: 40px; height: 40px"
            />
            <div class="text-dark">Ổ cứng</div>
          </a>
        </div>

        <div class="colbody col text-center py-2">
          <a href="">
            <img
              class="ms-2"
              src="images/vocaseimg.jpg"
              alt="vo-case"
              style="width: 40px; height: 40px"
            />
            <div class="text-dark">Vỏ case</div>
          </a>
        </div>
      </div>
    </div>
  </form>

  <form action="" class="formhang-a mt-4">
    <div class="container bg-secondary">
      <div class="col-12">
        <div class="row">
          <div class="col-2 bg-secondary">
            <h5>
              <a class="text-light" href="https://google.com"> CHUỘT</a>
            </h5>
          </div>
        </div>
      </div>
    </div>
  </form>

  <form class="sphang-a mt-3 bg-light" action="">
    <div class="container">
      <div class="row">
        <div class="col ms-2 bg-light">
          
          <div class="row">
            <a href="{{ route('product.index') }}">
              <div>
                <img
                  src="images/Logitech MX Master 3.jpg"
                  style="width: 200px"
                  alt=""
                />
              </div>
              <h6>Logitech MX Master 3</h6>
              <div>
                <span class="gia-moi">149.000 ₫</span>
                <div class="giam-gia">-10%</div>
                <span class="gia-cu">169.000 ₫</span>
              </div>
            </a>
            <div class="area_btn">
              <input
                style="display: none"
                type="text"
                class="form_control"
                id="addtocart_quantity"
                value="1"
                maxlength="10"
              />
              <button class="btn-themgiohang" type="submit">
                <i class="fa fa-cart-arrow-down"></i> Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </div>
      
      
        <div class="col ms-2 bg-light">
          <div class="row">
            <a href="{{ route('product.index') }}">
              <div>
                <img
                  src="images/Logitech G203 Lightsync.jpg"
                  style="width: 200px; height: 200px"
                  alt=""
                />
              </div>
              <h6>Logitech G203 Lightsync</h6>
              <div>
                <span class="gia-moi">199.000 ₫</span>
                <div class="giam-gia">-10%</div>
                <span class="gia-cu">359.000 ₫</span>
              </div>
            </a>
            <div class="area_btn">
              <input
                style="display: none"
                type="text"
                class="form_control"
                id="addtocart_quantity"
                value="1"
                maxlength="10"
              />
              <button class="btn-themgiohang" type="submit">
                <i class="fa fa-cart-arrow-down"></i> Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </div>

        <div class="col ms-2 bg-light">
          <div class="row">
            <a href="{{ route('product.index') }}">
              <div>
                <img
                  src="images/Microsoft Intellimouse Pro.jpg"
                  style="width: 200px; height: 200px"
                  alt=""
                />
              </div>
              <h6>Microsoft Intellimouse Pro</h6>
              <div>
                <span class="gia-moi">499.000 ₫</span>
                <div class="giam-gia">-10%</div>
                <span class="gia-cu">599.000 ₫</span>
              </div>
            </a>
            <div class="area_btn">
              <input
                style="display: none"
                type="text"
                class="form_control"
                id="addtocart_quantity"
                value="1"
                maxlength="10"
              />
              <button class="btn-themgiohang" type="submit">
                <i class="fa fa-cart-arrow-down"></i> Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </div>

        <div class="col ms-2 bg-light">
          <div class="row">
            <a href="{{ route('product.index') }}">
              <div>
                <img
                  src="images/Logitech Pebble.jpg"
                  style="width: 200px; height: 200px"
                  alt=""
                />
              </div>
              <h6>Logitech Pebble</h6>
              <div>
                <span class="gia-moi">729.000 ₫</span>
                <div class="giam-gia">-50%</div>
                <span class="gia-cu">1.459.000 ₫</span>
              </div>
            </a>
            <div class="area_btn">
              <input
                style="display: none"
                type="text"
                class="form_control"
                id="addtocart_quantity"
                value="1"
                maxlength="10"
              />
              <button class="btn-themgiohang" type="submit">
                <i class="fa fa-cart-arrow-down"></i> Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </div>

        <div class="col ms-2 bg-light">
          <div class="row">
            <a href="{{ route('product.index') }}">
              <div>
                <img
                  src="images/Razer DeathAdder Essential.jpg"
                  style="width: 200px; height: 200px"
                  alt=""
                />
              </div>
              <h6>Razer DeathAdder Essential</h6>
              <div>
                <span class="gia-moi">199.000 ₫</span>
                <div class="giam-gia">-10%</div>
                <span class="gia-cu">250.000 ₫</span>
              </div>
            </a>
            <div class="area_btn">
              <input
                style="display: none"
                type="text"
                class="form_control"
                id="addtocart_quantity"
                value="1"
                maxlength="10"
              />
              <button class="btn-themgiohang" type="submit">
                <i class="fa fa-cart-arrow-down"></i> Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <form action="" class="formhang-b mt-5">
    <div class="container bg-secondary">
      <div class="col-12">
        <div class="row">
          <div class="col-2 bg-secondary">
            <h5>
              <a class="text-light" href="https://google.com"> TAI NGHE</a>
            </h5>
          </div>
        </div>
      </div>
    </div>
  </form>

  <form class="sphang-b mt-3 bg-light" action="">
    <div class="container">
      <div class="row">
        <div class="col ms-2 bg-light">
          <div class="row">
            <a href="route{{}}">
              <div>
                <img
                  src="images/10042790-tai-nghe-bluetooth-prolink-phb6003e-den-do-1.jpg"
                  style="width: 200px"
                  alt=""
                />
              </div>
              <h6>Tai nghe không dây Prolink PHB6003E Đen Đỏ</h6>
              <div>
                <span class="gia-moi">449.000 ₫</span>
                <div class="giam-gia">-25%</div>
                <span class="gia-cu">599.000 ₫</span>
              </div>
            </a>
            <div class="area_btn">
              <input
                style="display: none"
                type="text"
                class="form_control"
                id="addtocart_quantity"
                value="1"
                maxlength="10"
              />
              <button class="btn-themgiohang" type="submit">
                <i class="fa fa-cart-arrow-down"></i> Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </div>

        <div class="col ms-2 bg-light">
          <div class="row">
            <a href="{{ route('product.index') }}">
              <div>
                <img
                  src="images/Gaming Soundmax AH335.jpg"
                  style="width: 200px"
                  alt=""
                />
              </div>
              <h6>Tai nghe choàng đầu có mic Gaming Soundmax AH335</h6>
              <div>
                <span class="gia-moi">520.000 ₫</span>
                <span class="gia-cu">650.000 ₫</span>
              </div>
            </a>
            <div class="area_btn">
              <input
                style="display: none"
                type="text"
                class="form_control"
                id="addtocart_quantity"
                value="1"
                maxlength="10"
              />
              <button class="btn-themgiohang" type="submit">
                <i class="fa fa-cart-arrow-down"></i> Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </div>

        <div class="col ms-2 bg-light">
          <div class="row">
            <a href="{{ route('product.index') }}">
              <div>
                <img
                  src="images/tai nghe ONIKUMA.jpg "
                  style="width: 200px"
                  alt=""
                />
              </div>
              <h6>Tai nghe ONIKUMA</h6>
              <div>
                <span class="gia-moi">₫199.000 - ₫359.000</span>
                <div class="giam-gia">-38%</div>
                <span class="gia-cu">₫338.000 - ₫499.000</span>
              </div>
            </a>
            <div class="area_btn">
              <input
                style="display: none"
                type="text"
                class="form_control"
                id="addtocart_quantity"
                value="1"
                maxlength="10"
              />
              <button class="btn-themgiohang" type="submit">
                <i class="fa fa-cart-arrow-down"></i> Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </div>

        <div class="col ms-2 bg-light">
          <div class="row">
            <a href="{{ route('product.index') }}">
              <div>
                <img
                  src="images/AUKEY EP-B52 (2021 – B52 plus ).jpg"
                  style="width: 200px"
                  alt=""
                />
              </div>
              <h6>Tai nghe AUKEY EP-B52 (2021 – B52 plus )</h6>
              <div>
                <span class="gia-moi">499.000 ₫</span>
                <div class="giam-gia">-25%</div>
                <span class="gia-cu">679.000 ₫</span>
              </div>
            </a>
            <div class="area_btn">
              <input
                style="display: none"
                type="text"
                class="form_control"
                id="addtocart_quantity"
                value="1"
                maxlength="10"
              />
              <button class="btn-themgiohang" type="submit">
                <i class="fa fa-cart-arrow-down"></i> Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </div>

        <div class="col ms-2 bg-light">
          <div class="row">
            <a href="{{ route('product.index') }}">
              <div>
                <img
                  src="images/Fuhlen-H200.png"
                  style="width: 200px"
                  alt=""
                />
              </div>
              <h6>Tai nghe Fuhlen-H200</h6>
              <div>
                <span class="gia-moi">599.000 ₫</span>
                <div class="giam-gia">-18%</div>
                <span class="gia-cu">769.000 ₫</span>
              </div>
            </a>
            <div class="area_btn">
              <input
                style="display: none"
                type="text"
                class="form_control"
                id="addtocart_quantity"
                value="1"
                maxlength="10"
              />
              <button class="btn-themgiohang" type="submit">
                <i class="fa fa-cart-arrow-down"></i> Thêm vào giỏ hàng
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>

  <form
    class="formlienlac mt-5 bg-secondary"
    action="six"
    style="padding-top: 20px; border-top: 1px solid #fff"
  >
    <br />
    <hr class="text-light" />
    <br />
    <div class="container">
      <div class="row justify-content-between text-light">
        <div class="col-4">
          <div class="row"><h5>Thông tin linh kiện Store</h5></div>
          <div class="row mt-3">
            <div class="">
              <p>
                <strong><span>Thông Tin Cửa hàng:</span></strong>
              </p>
              <p>
                <strong
                  ><span
                    >CN 1:&nbsp;Phòng trọ Thiên - Quang (Q.&nbsp;Gò Vấp Tp.
                    HCM)</span
                  ></strong
                >
              </p>
              <p>
                <strong
                  ><span
                    >CN 2:&nbsp;Công Viên Phần Mềm Quang Trung - Quận 12</span
                  ></strong
                >
              </p>
              <p>
                <strong><span>Giờ làm việc:</span></strong>
              </p>
              <p>
                <span>T2 - T7: 7:00 - 13:00 , CN &amp; Lễ: Nghỉ</span>
              </p>
              <p>
                <span><strong>Hotline/Zalo</strong>:&nbsp; 0937 374 784</span>
              </p>
              <p>
                <span
                  ><strong>Bảo Hành</strong> :&nbsp; &nbsp; &nbsp;STD Thiên -
                  Quang</span
                >
              </p>
              <p>
                <span
                  ><strong>Khiếu nại:</strong>&nbsp;&nbsp;Email Thiên -
                  Quang</span
                >
              </p>
            </div>
          </div>
        </div>

        <div class="chinhsach col">
          <div class="cate-title">
            <h5>CHÍNH SÁCH</h5>
          </div>
          <div class="content">
            <div class="cate-content" id="col-1">
              <ul style="list-style-type: circle">
                <li>
                  <span style="font-size: 10pt"
                    ><a href="https://google.com">Hướng dẫn mua hàng</a></span
                  >
                </li>
                <li>
                  <span style="font-size: 10pt"
                    ><a href="https://google.com"
                      >Chính sách bảo mật thông tin</a
                    ></span
                  >
                </li>
                <li>
                  <span style="font-size: 10pt"
                    ><a href="https://google.com">Chính sách trả góp</a></span
                  >
                </li>
                <li>
                  <span style="font-size: 10pt"
                    ><a href="https://google.com">Chính sách đổi trả</a></span
                  >
                </li>
                <li>
                  <span style="font-size: 10pt"
                    ><a href="https://google.com"
                      >Chính sách bảo hành</a
                    ></span
                  >
                </li>
                <li>
                  <span style="font-size: 10pt"
                    ><a href="https://google.com">Liên hệ mua giá sỉ</a></span
                  >
                </li>
              </ul>
              <br />
              <a href="https://google.com"
                >Giấy Phép hộ Doanh Số 41N8029572 Do UBND quận Tân Bình Cấp
                Ngày 19/10/2015 – Dương Công Nhật Linh</a
              >
              <p></p>
              <a
                href="http://online.gov.vn/HomePage/CustomWebsiteDisplay.aspx?DocId=29702"
                ><img
                  style="width: 200px; max-width: 100%"
                  src="//bizweb.dktcdn.net/100/141/128/themes/183028/assets/logo-bocongthuong.png?1492676663675"
              /></a>
            </div>
          </div>
        </div>

        <div class="facebook col-3 ms-5">
          <div class="cate-title">
            <h5>FACEBOOK</h5>
          </div>
          <div class="content">
            <div class="cate-content">
              <div
                class="fb-page fb_iframe_widget"
                data-href="https://www.facebook.com/linhkienstoresg/"
                data-small-header="false"
                data-adapt-container-width="true"
                data-hide-cover="false"
                data-show-facepile="true"
                fb-xfbml-state="rendered"
                fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=457968081247741&amp;container_width=217&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Flinhkienstoresg%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"
              >
                <span
                  style="vertical-align: bottom; width: 217px; height: 130px"
                  ><iframe
                    name="f2fac4efbe7fa8c"
                    width="1000px"
                    height="1000px"
                    data-testid="fb:page Facebook Social Plugin"
                    title="fb:page Facebook Social Plugin"
                    frameborder="0"
                    allowtransparency="true"
                    allowfullscreen="true"
                    scrolling="no"
                    allow="encrypted-media"
                    src="https://www.facebook.com/v2.9/plugins/page.php?adapt_container_width=true&amp;app_id=457968081247741&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df3c4c9fa5b1bf1c%26domain%3Dlinhkienstore.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Flinhkienstore.vn%252Ff877252d8df28%26relation%3Dparent.parent&amp;container_width=217&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Flinhkienstoresg%2F&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false"
                    style="
                      border: none;
                      visibility: visible;
                      width: 217px;
                      height: 130px;
                    "
                    class=""
                  ></iframe
                ></span>
              </div>
            </div>

            <div class="footer-social">
              <div class="social-title">
                <h5>LIÊN KẾT VỚI CHÚNG TÔI</h5>
              </div>
              <div class="social-content">
                <ul>
                  <li>
                    <a
                      href="https://www.facebook.com/linhkienstoresg/"
                      class="icon-facebook"
                      ><i class="fa-brands fa-facebook text-dark"></i>
                    </a>
                  </li>
                  <li>
                    <a
                      href="https://www.youtube.com/channel/UCFmmFeshNZf7VZBwarlUZyA"
                      class="icon-youtube"
                      ><i class="fa-brands fa-youtube text-dark"></i
                    ></a>
                  </li>
                  <li>
                    <a href="" class="icon-instagram"
                      ><i class="fa-brands fa-instagram text-dark"></i
                    ></a>
                  </li>
                  <li>
                    <a href="" class="icon-googleplus"
                      ><i class="fa-brands fa-google-plus text-dark"></i
                    ></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <div class="hinhcuoi col-2 text-center">
          <a href="">
            <img src="images/QHT.jpg" alt="" />
          </a>
          <br /><br />
          
        </div>
      </div>
    </div>
  </form>
  <form action="" class="formhotline">
    <div class="hotline">
      <div class="hotline-footer-content">
        <h5>Hotline: 0943 244 904</h5>
      </div>
    </div>
  </form>
  <script src="Plugins\dsasdad.png"></script>
  <script src="Plugins/Bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
  </script>
  @endsection
