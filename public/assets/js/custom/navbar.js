// custom navbar

class navbar extends HTMLElement {
    connectedCallback() {
        this.innerHTML = `
        <header class="edu-header header-style-2">
      <!--<div class="header-top-bar">
                <div class="container">
                    <div class="header-top">
                        <div class="header-top-left">
                            <ul class="header-info">
                                <li><a href="tel:+011235641231"><i class="icon-phone"></i>Call: 123 4561 5523</a></li>
                                <li><a href="mailto:info@shmu.com" target="_blank"><i class="icon-envelope"></i>Email: info@shmu.com</a></li>
                            </ul>
                        </div>
                        <div class="header-top-right">
                            <ul class="header-info">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li class="header-btn"><a href="#" class="edu-btn btn-secondary btn-medium">Apply Now <i class="icon-4"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>-->
      <div id="edu-custom-placeholder"></div>
      <div class="header-mainmenu">
        <div class="">
          <div class="header-navbar">
            <div class="header-brand">
              <div class="logo">
                <a href="/">
                  <img class="logo-light" src="/assets/images/logo/Website-Final-1-2.png" alt="Corporate Logo" />
                  <img class="logo-dark" src="assets/images/logo/Website-Final-1-2.png" alt="Corporate Logo" />
                </a>
              </div>
            </div>
            <div class="header-mainnav">
              <nav class="mainmenu-nav">
                <ul class="mainmenu">
                  <li><a href="/">Home</a></li>
                  <li class="has-droupdown">
                    <a href="#">About us</a>
                    <ul class="submenu">
                      <li><a href="/shmu-act">SHMU Act</a></li>
                      <li><a href="/ins-code">Institution Code</a></li>
                      <li><a href="/campus-detail">Campus Details</a></li>
                      <li><a href="/campus-map">Campus Map</a></li>
                      <li>
                        <a href="/vision-mission">Vision & Mission</a>
                      </li>
                      <li><a href="/event">News & Events</a></li>
                    </ul>
                  </li>

                  <li class="has-droupdown">
                    <a href="#">Administration</a>
                    <ul class="submenu">
                      <li><a href="/chancellor">Chancellor</a></li>
                      <li>
                        <a href="/vice-chancellor">Vice Chancellor</a>
                      </li>
                      <li>
                        <a href="/syndicate">University Syndicate</a>
                      </li>
                      <li>
                        <a href="/academic-council">Academic Council</a>
                      </li>
                      <li><a href="/admin-council">Admin Council</a></li>
                      <li class="has-droupdown">
                        <a href="#">Deans of faculty</a>
                        <ul class="submenu">
                          <li>
                            <a href="/faculty-of-medicine">Faculty of Medicine</a>
                          </li>
                          <li>
                            <a href="/faculty-of-basic-science-and-para-clinical-science">Faculty of Basic Science
                              and para clinical
                              Science</a>
                          </li>
                          <li>
                            <a href="/faculty-of-nursing">Faculty of Nursing</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>

                  <li class="has-droupdown">
                    <a href="#">Academic</a>
                    <ul class="submenu">
                      <li><a href="/program-all">Program Offered</a></li>
                      <li>
                        <a href="/academmic-calender">Academic Calendar</a>
                      </li>
                      <li>
                        <a href="/certificate">Certificate Details</a>
                      </li>
                      <li class="has-droupdown">
                        <a href="#">Affiliated Institutions</a>
                        <ul class="submenu">
                          <li>
                            <a href="/affiliated-institutions-government">Medical Colleges</a>
                          </li>
                          <li>
                            <a href="/affiliated-institutions-non-government">Nursing Colleges</a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="#">Admission & Registration</a></li>
                    </ul>
                  </li>
                  <li><a href="/frontNotice">Notice</a></li>
                  <li><a href="/event-gallary">Events & Gallary</a></li>
                  <li class="has-droupdown">
                    <a href="#">Quick links</a>
                    <ul class="submenu">
                      <li><a href="/noc">NOC</a></li>
                      <li><a href="/apa">APA</a></li>
                      <li><a href="/tender">Tender</a></li>
                      <li>
                        <a target="_blank" href="https://moedu.gov.bd/">Ministry of education</a>
                      </li>
                      <li>
                        <a target="_blank" href="http://www.mohfw.gov.bd/">Health ministry</a>
                      </li>
                      <li><a target="_blank" href="https://www.bmdc.org.bd/">BMDC</a></li>
                      <li><a target="_blank" href="http://www.bnmc.gov.bd/">BNMC</a></li>
                      <li><a target="_blank" href="https://ugc.gov.bd/">UGC</a></li>
                      <li><a href="/career">Career</a></li>
                      <li><a href="/form">Forms </a></li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="header-right">
              <ul class="header-action">
                <li class="icon search-icon">
                  <a href="javascript:void(0)" class="search-trigger">
                    <i class="icon-2"></i>
                  </a>
                </li>
                <li class="mobile-menu-bar d-block d-xl-none">
                  <button class="hamberger-button">
                    <i class="icon-54"></i>
                  </button>
                </li>
              </ul>
            </div>
            <div class="nav-img">
              <div class="img-nav-left">
                <img src="/assets/images/about/mujib_logo.png" alt="mujib_logo" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="popup-mobile-menu">
        <div class="inner">
          <div class="header-top">
            <div class="logo">
              <a href="/">
                <img class="logo-light" src="/assets/images/logo/Website-Final-1-2.png" alt="Corporate Logo" />
                <img class="logo-dark" src="/assets/images/logo/Website-Final-1-2.png" alt="Corporate Logo" />
              </a>
            </div>
            <div class="close-menu">
              <button class="close-button">
                <i class="icon-73"></i>
              </button>
            </div>
          </div>
          <ul class="mainmenu">
            <li><a href="/">Home</a></li>
            <li class="has-droupdown">
              <a href="#">About us</a>
              <ul class="submenu">
                <li><a href="/shmu-act">SHMU Act</a></li>
                <li><a href="/ins-code">Institution Code</a></li>
                <li><a href="/campus-detail">Campus Details</a></li>
                <li><a href="/campus-map">Campus Map</a></li>
                <li>
                  <a href="/vision-mission">Vision & Mission</a>
                </li>
                <li><a href="/event">News & Events</a></li>
              </ul>
            </li>

            <li class="has-droupdown">
              <a href="#">Administration</a>
              <ul class="submenu">
                <li><a href="/chancellor">Chancellor</a></li>
                <li>
                  <a href="/vice-chancellor">Vice Chancellor</a>
                </li>
                <li><a href="/syndicate">University Syndicate</a></li>
                <li><a href="/academic-council">Academic Council</a></li>
                <li><a href="/admin-council">Admin Council</a></li>
                <li class="has-droupdown">
                  <a href="#">Deans of faculty</a>
                  <ul class="submenu">
                    <li>
                      <a href="/faculty-of-medicine">Faculty of Medicine</a>
                    </li>
                    <li>
                      <a href="/faculty-of-basic-science-and-para-clinical-science">Faculty of Basic Science and
                        para clinical Science</a>
                    </li>
                    <li>
                      <a href="/faculty-of-nursing">Faculty of Nursing</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="has-droupdown">
              <a href="#">Academic</a>
              <ul class="submenu">
                <li><a href="/program-all">Program Offered</a></li>
                <li>
                  <a href="/academmic-calender">Academic Calendar</a>
                </li>
                <li><a href="/certificate">Certificate Details</a></li>
                <li class="has-droupdown">
                  <a href="#">Affiliated Institutions</a>
                  <ul class="submenu">
                    <li>
                      <a href="/affiliated-institutions-government">Medical Colleges</a>
                    </li>
                    <li>
                      <a href="/affiliated-institutions-non-government">Nursing Colleges</a>
                    </li>
                  </ul>
                </li>
                <li><a href="#">Admission & Registration</a></li>
              </ul>
            </li>
            <li><a href="/frontNotice">Notice</a></li>
            <li><a href="/event-gallary">Events & Gallary</a></li>
            <li class="has-droupdown">
              <a href="#">Quick links</a>
              <ul class="submenu">
                <li><a href="/noc">NOC</a></li>
                <li><a href="/apa">APA</a></li>
                <li><a href="/tender">Tender</a></li>
                <li><a target="_blank" href="https://moedu.gov.bd/">Ministry of education</a></li>
                <li><a target="_blank" href="http://www.mohfw.gov.bd/">Health ministry</a></li>
                <li><a target="_blank" href="https://www.bmdc.org.bd/">BMDC</a></li>
                <li><a target="_blank" href="http://www.bnmc.gov.bd/">BNMC</a></li>
                <li><a target="_blank" href="https://ugc.gov.bd/">UGC</a></li>
                <li><a href="/career">Career</a></li>
                <li><a href="/form">Forms </a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <!-- Start Search Popup  -->
      <div class="edu-search-popup">
        <div class="content-wrap">
          <div class="site-logo">
            <img class="logo-light" src="/assets/images/logo/Website-Final-1-2.png" alt="Corporate Logo" />
            <img class="logo-dark" src="/assets/images/logo/Website-Final-1-2.png" alt="Corporate Logo" />
          </div>
          <div class="close-button">
            <button class="close-trigger"><i class="icon-73"></i></button>
          </div>
          <div class="inner">
            <form class="search-form" action="#">
              <input type="text" class="SHMU-search-popup-field" placeholder="Search Here..." />
              <button class="submit-button"><i class="icon-2"></i></button>
            </form>
          </div>
        </div>
      </div>
      <!-- End Search Popup  -->
    </header>

        `
    }
}

class footer extends HTMLElement {
  connectedCallback() {
    this.innerHTML = `
    <footer class="edu-footer footer-dark bg-image footer-style-3">
    <div class="footer-top">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <div class="edu-footer-widget">
              <div class="logo">
                <a href="/">
                  <img class="logo-light" src="/assets/images/logo/Website-Final-1-2.png" alt="Corporate Logo" />
                </a>
              </div>
              <div class="widget-information">
                <ul class="information-list">
                  <li>
                    <span>Add:</span>Holding no: 8, Road no: 1 Nirala Khulna-9100, Bangladesh.
                  </li>
                  <li>
                    <span>Call:</span><a href="tel:+011235641231">+01 123 5641 231</a>
                  </li>
                  <li>
                    <span>Email:</span><a href="mailto:info@SHMU.com" target="_blank">info@SHMU.com</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="edu-footer-widget explore-widget">
              <h4 class="widget-title">Quick Link</h4>
              <div class="inner">
                <ul class="footer-link link-hover">
                  <li><a href="/apa">APA/NOC</a></li>
                  <li><a href="/tender">Tender</a></li>
                  <li><a href="/career">Career</a></li>
                  <li><a href="/form">Forms</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6">
            <div class="edu-footer-widget quick-link-widget">
              <h4 class="widget-title">Links</h4>
              <div class="inner">
                <ul class="footer-link link-hover">
                  <li><a href="/contact-us">Contact Us</a></li>
                  <li><a href="/event">Events Gallery</a></li>
                  <li><a href="/shmu-act">SHMU ACT</a></li>
                  <li><a href="/faq">FAQ's</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="edu-footer-widget">
              <h4 class="widget-title">Contacts</h4>
              <div class="inner">
                <!-- <p class="description">
                  Enter your email address to register to our newsletter
                  subscription
                </p> -->
                <div class="input-group footer-subscription-form">
                  <input type="email" class="form-control" placeholder="Your email" />
                  <button class="edu-btn btn-secondary btn-medium" type="button">
                    Subscribe <i class="icon-4"></i>
                  </button>
                </div>
                <ul class="social-share icon-transparent">
                  <li>
                    <a href="#" class="color-fb"><i class="icon-facebook"></i></a>
                  </li>
                  <li>
                    <a href="#" class="color-linkd"><i class="icon-linkedin2"></i></a>
                  </li>
                  <li>
                    <a href="#" class="color-ig"><i class="icon-instagram"></i></a>
                  </li>
                  <li>
                    <a href="#" class="color-twitter"><i class="icon-twitter"></i></a>
                  </li>
                  <li>
                    <a href="#" class="color-yt"><i class="icon-youtube"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner text-center">
              <p>
                &copy; 2023
                <a href="/" target="_blank">SHMU</a>
                Designed By
                <a href="www.ussbd.com" target="_blank">Unicorn</a>. All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
    `
  }
}

customElements.define ("my-nav", navbar);
customElements.define ("my-footer", footer);