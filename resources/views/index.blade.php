@extends('layouts.main-layout')

@section('siteContent')
    <div id="entranceGrid" class="ui grid">
      <div style="padding-top: 8%;" class="sixteen wide column entranceCol">
        <h1 id="entranceTitle">{{__('localization.homeEntrance')}}</h1>
      </div>
      <div style="padding-bottom: 8%; padding-top: 3%;" class="sixteen wide column entranceCol">
        <a id="entranceBtn" class="ui primary button" href="about">{{__('localization.homeEntranceBtn')}}</a>
      </div>
    </div>

    <div id="servicesGrid" class="ui stackable centered grid">
      <div style="margin-right: 3%;" class="four wide center aligned column">
        <img id="homeWebsiteImg" style="border: 3px solid #4391FF;" class="ui circular centered image" src="res/images/home-website.jpg" alt="example Software Website Design" width="200px">

        <h2 class="servicesGridTitle">{{__('localization.homeWebDesing')}}</h2>
        <p class="servicesGridText">{{__('localization.homeWebDesingText')}}</p>
      </div>

      <div style="margin-right: 3%; margin-left: 3%;" class="four wide center aligned column">
        <img id="homeWebappImg" style="border: 3px solid #4391FF;" class="ui circular centered image" src="res/images/home-webapp.jpg" alt="example Software Web Application Design" width="200px">

        <h2 class="servicesGridTitle">{{__('localization.homeWebApp')}}</h2>
        <p class="servicesGridText">{{__('localization.homeWebAppText')}}</p>
      </div>

      <div style="margin-left: 3%;" class="four wide center aligned column">
        <img id="homeLogoImg" style="border: 3px solid #4391FF;" class="ui circular centered image" src="res/images/home-logo.jpg" alt="example Software Logo Design" width="200px">

        <h2 class="servicesGridTitle">{{__('localization.homeLogoDesign')}}</h2>
        <p class="servicesGridText">{{__('localization.homeLogoDesignText')}}</p>
      </div>

      <div style="margin-top: 3%;" class="twelve wide center aligned column">
        <a id="servicesGridBtn" class="ui primary large button" href="services">{{__('localization.ourServicesBtn')}}</a>
      </div>
    </div>

    <h2 style="display: inline-block;" id="contactTitle">{{__('localization.homePortfolioTitle')}}</h2>

    <div id="portfolioGrid" class="ui stackable centered grid">
      <div id="portfolioSample1" class="ui five wide column portfolioSample" onclick="showSamplePortfolioImg(this)" data-url="res/images/compass-plus-index.png"></div>
      <div id="portfolioSample2" class="ui five wide column portfolioSample" onclick="showSamplePortfolioImg(this)" data-url="res/images/dd-pro-photographer-index.png"></div>
      <div id="portfolioSample3" class="ui five wide column portfolioSample" onclick="showSamplePortfolioImg(this)" data-url="res/images/og-pro-composer-index.png"></div>
      <div id="portfolioSample4" class="ui five wide column portfolioSample" onclick="showSamplePortfolioImg(this)" data-url="res/images/space-pix-index.png"></div>

      <div id="portfolioBtnLeft" class="ui eight wide right aligned column">
        <a id="servicesGridBtn" class="ui large primary button" href="portfolio">{{__('localization.seeOurPortfolioBtn')}}</a>
      </div>

      <div id="portfolioBtnRight" class="ui eight wide left aligned column">
        <a id="servicesGridBtn" style="width: 179px;" class="ui large primary button" href="contact">{{__('localization.workWithUsBtn')}}</a>
      </div>
    </div>
@endsection
