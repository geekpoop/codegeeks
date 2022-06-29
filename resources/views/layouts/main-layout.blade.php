<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{__('localization.metaDescription')}}">
    <meta name="keywords" content="example, example Software, example, example software, example yazılım, example Yazılım, customer monitor panel, müşteri monitör paneli, Customer Monitor Panel, Müşteri Monitör Paneli">
    <meta name="copyright"content="{{__('localization.brandText')}}">
    <meta name="language" content="tr">
    <meta name="language" content="en">
    <meta name="robots" content="index,follow">
    <meta name="author" content="{{__('localization.brandText')}}, {{__('localization.contactEmail')}}">
    <meta name="url" content="https://examplesoft.com">

    <meta name="og:title" content="{{$pageTitle}} | {{__('localization.brandText')}}">
    <meta name="og:url" content="https://examplesoft.com">
    <meta name="og:image" content="http://examplesoft.com/res/images/logo.png">
    <meta name="og:site_name" content="{{__('localization.brandText')}}">
    <meta name="og:description" content="{{__('localization.metaDescription')}}">
    <meta name="og:email" content="{{__('localization.contactEmail')}}">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Mobile Chrome, Firefox And Opera -->
    <meta name="theme-color" content="#4391ff">

    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#4391ff">

    <!-- iOS Safari  -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="#4391ff">

    <link rel="canonical" href="https://examplesoft.com">

    <link rel="icon" href="res/images/icon.png">

    <title>{{$pageTitle}} | {{__('localization.brandText')}}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/example.css">
  </head>

  <body>
    <div id="portfolioSampleModal" class="ui large image modal">
      <i class="ui close icon"></i>
      <img id="modalImg" src="" alt="example Software Portfolio">
    </div>

    <div id="modalMenu" class="ui basic modal">
      <i style="position: absolute !important; right: 15% !important; font-size: 25px !important;" class="close icon"></i>

      <div class="ui center aligned grid">
        <div class="ui sixteen wide column">
          <a class="ui small image" href="index.html">
            <img src="res/images/logo.png" alt="example Software Logo">
          </a>
        </div>
        <div class="ui sixteen wide column">
          <a @php if($pageTitle == 'Home' || $pageTitle == 'Ana Sayfa') echo 'style="border-bottom: 1px solid white;"' @endphp class="item menuItem" href="/">{{__('localization.home')}}</a>
        </div>
        <div class="ui sixteen wide column">
          <a @php if($pageTitle == 'Services' || $pageTitle == 'Hizmetlerimiz') echo 'style="border-bottom: 1px solid white;"' @endphp class="item menuItem" href="services">{{__('localization.services')}}</a>
        </div>
        <div class="ui sixteen wide column">
          <a @php if($pageTitle == 'Portfolio' || $pageTitle == 'Galeri') echo 'style="border-bottom: 1px solid white;"' @endphp class="item menuItem" href="portfolio">{{__('localization.portfolio')}}</a>
        </div>
        <div class="ui sixteen wide column">
          <a @php if($pageTitle == 'About' || $pageTitle == 'Hakkımızda') echo 'style="border-bottom: 1px solid white;"' @endphp class="item menuItem" href="about">{{__('localization.about')}}</a>
        </div>
        <div class="ui sixteen wide column">
          <a @php if($pageTitle == 'Contact' || $pageTitle == 'İletişim') echo 'style="border-bottom: 1px solid white;"' @endphp class="item menuItem" href="contact">{{__('localization.contact')}}</a>
        </div>
        <div class="ui sixteen wide column">
          <div style="float: none;" id="langDropdownModal" class="ui dropdown">
            <i style="margin-right: 5px; font-size: 22px;" class="fas fa-globe"></i>
            <i class="fas fa-caret-down"></i>
            <div class="menu">
              <div class="@if($lang == 'en') {{'active'}} @endif item dropdownItem" onclick="changeLang(this)">English</div>
              <div class="@if($lang == 'tr') {{'active'}} @endif item dropdownItem" onclick="changeLang(this)">Türkçe</div>
            </div>
          </div>
        </div>
        <div class="ui sixteen wide column">
          <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-facebook-square menuIcon"></i></a>
          <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-linkedin menuIcon"></i></a>
          <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-twitter-square menuIcon"></i></a>
          <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-instagram menuIcon"></i></a>
        </div>
        <div class="ui sixteen wide column">
          <i style="font-size: 20px;" class="fas fa-envelope menuIcon"></i> &nbsp;
          <a style="margin-top: 50px;" class="menuLink" href="mailto:{{__('localization.contactEmail')}}">{{__('localization.contactEmail')}}</a>
        </div>
      </div>
    </div>

    <div id="menuGrid" class="ui grid">
      <div class="row">
        <div id="logoCol" class="middle aligned eight wide column">
          <a class="ui small image" href="/">
            <img src="res/images/logo.png" alt="example Software Logo">
          </a>

          <button id="modalMenuBtn" class="ui big right floated inverted basic icon button"><i class="fas fa-bars"></i></button>
        </div>

        <div id="menuCol" class="eight wide middle aligned column">
          <div style="border-bottom: 1px solid white;" class="row">
            <div style="margin-bottom: 10px;" class="eight wide column">
              <i style="font-size: 23px;" class="fas fa-envelope menuIcon"></i> &nbsp;

              <a style="margin-top: 50px;" class="menuLink" href="mailto:{{__('localization.contactEmail')}}">{{__('localization.contactEmail')}}</a>

              <a class="menuSocialIcon" href="#"><i class="fab fa-instagram menuIcon"></i></a>
              <a class="menuSocialIcon" href="#"><i class="fab fa-twitter-square menuIcon"></i></a>
              <a class="menuSocialIcon" href="#"><i class="fab fa-linkedin menuIcon"></i></a>
              <a class="menuSocialIcon" href="#"><i class="fab fa-facebook-square menuIcon"></i></a>
            </div>
          </div>

          <div style="border-top: 1px solid white;" class="row">
            <div style="margin-top: 10px;" class="eight wide column">
              <a @php if($pageTitle == 'Home' || $pageTitle == 'Ana Sayfa') echo 'style="border-bottom: 1px solid white;"' @endphp class="menuLink" href="/">{{__('localization.home')}}</a>
              <a @php if($pageTitle == 'Services' || $pageTitle == 'Hizmetlerimiz') echo 'style="border-bottom: 1px solid white;"' @endphp class="menuLink" href="services">{{__('localization.services')}}</a>
              <a @php if($pageTitle == 'Portfolio' || $pageTitle == 'Galeri') echo 'style="border-bottom: 1px solid white;"' @endphp class="menuLink" href="portfolio">{{__('localization.portfolio')}}</a>
              <a @php if($pageTitle == 'About' || $pageTitle == 'Hakkımızda') echo 'style="border-bottom: 1px solid white;"' @endphp class="menuLink" href="about">{{__('localization.about')}}</a>
              <a @php if($pageTitle == 'Contact' || $pageTitle == 'İletişim') echo 'style="border-bottom: 1px solid white;"' @endphp class="menuLink" href="contact">{{__('localization.contact')}}</a>

              <div id="langDropdown" class="ui dropdown">
                <i style="margin-right: 5px;" class="fas fa-globe"></i>
                <i class="fas fa-caret-down"></i>
                <div class="menu">
                  <div class="@if($lang == 'en') {{'active'}} @endif item dropdownItem" onclick="changeLang(this)">English</div>
                  <div class="@if($lang == 'tr') {{'active'}} @endif item dropdownItem" onclick="changeLang(this)">Türkçe</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    @yield('siteContent')

    <footer>
      <div class="ui centered grid">
        <div class="ui sixteen wide center aligned column">
          <a class="menuLink" href="/">{{__('localization.home')}}</a>
          <a class="menuLink" href="services ">{{__('localization.services')}}</a>
          <a class="menuLink" href="portfolio">{{__('localization.portfolio')}}</a>
          <a class="menuLink" href="about">{{__('localization.about')}}</a>
          <a class="menuLink" href="contact">{{__('localization.contact')}}</a>
        </div>

        <div class="ui sixteen wide center aligned column">
          <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-facebook-square menuIcon"></i></a>
          <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-linkedin menuIcon"></i></a>
          <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-twitter-square menuIcon"></i></a>
          <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-instagram menuIcon"></i></a>
        </div>

        <div class="ui sixteen wide center aligned column">
          <p id="footerText">{{__('localization.copyrightText')}} | {{__('localization.brandText')}}</p>
        </div>
      </div>
    </footer>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
  <script src="js/example.js"></script>
  <script>
    function changeLang(element)
    {
      var choosenLang = $(element).text();

      var request = $.ajax(
        {
          url: '/change-language',
          type: 'post',
          data: {toLang: choosenLang, _token: '{{ csrf_token() }}'}
        }
      );

      request.done(
        function(response, textStatus, jqXHR)
        {
          if(response.status === 'success')
          {
            window.location.reload();
          }
          else
          {
            console.log('ERROR in DONE METHOD!');
          }
        }
      );

      request.fail(
        function(jqXHR, textStatus, errorThrown)
        {
          console.log('ERROR in FAIL METHOD!');
        }
      );
    }
  </script>

  @yield('scriptContent')
</html>
