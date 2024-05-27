<!DOCTYPE html>

<html lang="zxx">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Required meta tags -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>World Vision</title>
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="{{ url('/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/aos.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ url('/css/owl.theme.default.min.css') }}"/>
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="https://demo.bootstrapdash.com/world-vision/assets/images/favicon.png"
    />
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ url('/css/headline.css') }}" />
    <!-- endinject -->
  </head>

  <body
    data-new-gr-c-s-check-loaded="14.1172.0"
    data-gr-ext-installed=""
    style=""
  >
    <div class="container-scroller">
      <div class="main-panel">
        @include('components.guest-navbar')
        <div class="container">
          <div class="banner-top-thumb-wrap">
            <div class="row">
            
            
              <div class="d-flex position-relative float-center">
                <h3 class="section-title">Headline</h3>
              </div>
              <div class="col-lg-12">
                
                <div
                  class="owl-carousel owl-theme owl-loaded owl-drag"
                  id="main-banner-carousel"
                >

                  <div class="owl-stage-outer">
                    <div
                      class="owl-stage"
                      style="
                        transform: translate3d(-2919px, 0px, 0px);
                        transition: all 2s ease 0s;
                        width: 5840px;
                      "
                    >
                      <div class="owl-item" style="width: 729.995px">
                        <div class="item">
                          <div class="carousel-content-wrapper mb-2">
                            <div class="carousel-content">
                              <h1 class="font-weight-bold">
                                {{ $recent1->judul_berita }}
                              </h1>
                              <p
                                class="text-color m-0 pt-2 d-flex align-items-center"
                              >
                              </p>
                            </div>
                            <div class="carousel-image">
                              <img src="{{ url('/images/banner.jpg ') }}" alt="" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 729.995px">
                        <div class="item">
                          <div class="carousel-content-wrapper mb-2">
                            <div class="carousel-content">
                              <h1 class="font-weight-bold">
                                {{ $recent2->judul_berita }}
                              </h1>
                              <p
                                class="text-color m-0 pt-2 d-flex align-items-center"
                              >
                              </p>
                            </div>
                            <div class="carousel-image">
                              <img
                                src="{{ url('/images/banner_1.jpg ') }}"
                                alt=""
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 729.995px">
                        <div class="item">
                          <div class="carousel-content-wrapper mb-2">
                            <div class="carousel-content">
                              <h1 class="font-weight-bold">
                                If you wanted to get rich, how would you do it?
                              </h1>
                              <p
                                class="text-color m-0 pt-2 d-flex align-items-center"
                              >
                              </p>
                            </div>
                            <div class="carousel-image">
                              <img
                                src="{{ url('/images/banner_2.jpg ') }}"
                                alt=""
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="owl-item" style="width: 729.995px">
                        <div class="item">
                          <div class="carousel-content-wrapper mb-2">
                            <div class="carousel-content">
                              <h1 class="font-weight-bold">
                                {{ $recent4->judul_berita }}
                              </h1>
                                <p
                                class="text-color m-0 pt-2 d-flex align-items-center"
                              >
                              </p>
                            </div>
                            <div class="carousel-image">
                              <img
                                src="{{ url('/images/banner_3.jpg ') }}"
                                alt=""
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="owl-prev">
                      <span aria-label="Previous">‹</span></button
                    ><button type="button" role="presentation" class="owl-next">
                      <span aria-label="Next">›</span>
                    </button>
                  </div>
                  <div class="owl-dots">
                    <button role="button" class="owl-dot"><span></span></button
                    ><button role="button" class="owl-dot"><span></span></button
                    ><button role="button" class="owl-dot">
                      <span></span></button
                    ><button role="button" class="owl-dot"><span></span></button>
                  </div>
                </div>
              </div>

            </div>
          </div>

          <div class="world-news">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">International</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-3 col-sm-6 grid-margin mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="{{ url('/images/travel.jpg ') }}"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">INTERNASIONAL</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  Refugees flood Turkey's border with Greece
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a
                  href=""
                  class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="{{ url('/images/news.jpg ') }}"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">INTERNASIONAL</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  South Korea’s Moon Jae-in sworn in vowing address
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a
                  href=""
                  class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="{{ url('/images/art.jpg ') }}"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">INTERNASIONAL</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  These puppies are training to assist in avalanche rescue
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a
                  href=""
                  class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
              <div class="col-lg-3 col-sm-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="{{ url('/images/business.jpg ') }}"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">INTERNASIONAL</span>
                </div>
                <h5 class="font-weight-bold mt-3">
                  'Love Is Blind' couple opens up about their first year
                </h5>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text
                </p>
                <a
                  href=""
                  class="font-weight-bold text-dark pt-2"
                  >Read Article</a
                >
              </div>
            </div>
          </div>
          <div class="editors-news">
            <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">Sport News</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 mb-5 mb-sm-2">
                <div class="position-relative image-hover">
                  <img
                    src="{{ url('/images/glob.jpg ') }}"
                    class="img-fluid"
                    alt="world-news"
                  />
                  <span class="thumb-title">SPORT</span>
                </div>
                <h1 class="font-weight-600 mt-3">
                  Melania Trump speaks about courage at State Department
                </h1>
                <p class="fs-15 font-weight-normal">
                  Lorem Ipsum has been the industry's standard dummy text ever
                  since the 1500s, when an unknown printer took a galley of type
                  and
                </p>
              </div>
              <div class="col-lg-6 mb-5 mb-sm-2">
                <div class="row">
                  <div class="col-sm-6 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="{{ url('/images/star-magazine-5.jpg ') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">SPORT</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      A look at California's eerie plane graveyards
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                  <div class="col-sm-6 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="{{ url('/images/star-magazine-6.jpg ') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">SPORT</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      The world's most beautiful racecourses
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-6 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="{{ url('/images/star-magazine-7.jpg ') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">SPORT</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Japan cancels cherry blossom festivals over virus fears
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                  <div class="col-sm-6">
                    <div class="position-relative image-hover">
                      <img
                        src="{{ url('/images/star-magazine-8.jpg ') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">SPORT</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Classic cars reborn as electric vehicles
                    </h5>
                    <p class="fs-15 font-weight-normal">
                      Lorem Ipsum has been the industry's standard dummy text
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="popular-news">
            <div class="row">
              <div class="col-lg-3">
                <div class="d-flex position-relative float-left">
                  <h3 class="section-title">Other news</h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-9">
                <div class="row">
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="{{ url('/images/star-magazine-9.jpg ') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">NEWS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      The island country that gave Mayor Pete his name
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="{{ url('/images/star-magazine-10.jpg ') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">NEWS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Disney parks expand (good) vegan food options
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="{{ url('/images/star-magazine-11.jpg ') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">NEWS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      A hot springs where clothing is optional after dark
                    </h5>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="{{ url('/images/star-magazine-12.jpg ') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">NEWS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      Japanese chef carves food into incredible pieces of art
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="{{ url('/images/star-magazine-13.jpg ') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">NEWS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      The Misanthrope Society: A Taipei bar for people who
                    </h5>
                  </div>
                  <div class="col-sm-4 mb-5 mb-sm-2">
                    <div class="position-relative image-hover">
                      <img
                        src="{{ url('/images/star-magazine-14.jpg ') }}"
                        class="img-fluid"
                        alt="world-news"
                      />
                      <span class="thumb-title">NEWS</span>
                    </div>
                    <h5 class="font-weight-600 mt-3">
                      From Pakistan to the Caribbean: Curry's journey
                    </h5>
                  </div>
                </div>
              </div>
              <div class="col-lg-3">
                <div class="position-relative mb-3">
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="d-flex position-relative float-left">
                      <h3 class="section-title">Latest News</h3>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        {{ $recent1->judul_berita }}
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        {{ $recent2->judul_berita }}
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">                        
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="border-bottom pt-4 pb-3">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        {{ $recent3->judul_berita }}
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                      </p>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="pt-4">
                      <h5 class="font-weight-600 mt-0 mb-0">
                        {{ $recent4->judul_berita }}
                      </h5>
                      <p class="text-color m-0 d-flex align-items-center">
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="d-flex justify-content-between">
                  <img
                    src="{{ url('/images/logo.svg ') }}"
                    class="footer-logo"
                    alt=""
                  />


                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12">
                <div
                  class="d-lg-flex justify-content-between align-items-center border-top mt-5 footer-bottom"
                >
                  <ul class="footer-horizontal-menu">
                    <li>
                      <a
                        href=""
                        >Terms of Use.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >Privacy Policy.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >Accessibility &amp; CC.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >AdChoices.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >Advertise with us Transcripts.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >License.</a
                      >
                    </li>
                    <li>
                      <a
                        href=""
                        >Sitemap</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script  src="{{ url('/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script  src="{{ url('/js/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script  src="{{ url('/js/demo.js') }}"></script>
    <!-- End custom js for this page-->
  </body>

</html>
