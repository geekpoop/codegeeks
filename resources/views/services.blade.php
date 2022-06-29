@extends('layouts.main-layout')

@section('siteContent')
    <div id="entranceGrid" style="background-image: url('res/images/services-bg1.jpg');" class="ui grid">
      <div style="padding-top: 10%; padding-bottom: 10%;" class="sixteen wide column entranceCol">
        <h1 id="entranceTitle">{{__('localization.servicesEntrance')}}</h1>
      </div>
    </div>

    <h2 style="display: inline-block;" id="contactTitle">{{__('localization.servicesOMS')}}</h2>

    <div style="margin-top: 25px;" class="ui two column stackable grid">
      <div class="ui column">
        <img class="ui image" src="res/images/website-bg.png" alt="example Software Services">
      </div>

      <div style="padding-left: 3%; padding-right: 3%;" class="ui center aligned middle aligned column">
        <h3 class="servicesTitle">{{__('localization.servicesOMSWebsiteTitle')}}</h3>

        <p class="servicesText">{{__('localization.servicesOMSWebsiteText')}}</p>
      </div>
    </div>

    <div style="margin-top: 0; padding-top: 0;" class="ui two column mobile reversed stackable grid">
      <div style="padding-left: 3%; padding-right: 3%;" class="ui center aligned middle aligned column">
        <h3 class="servicesTitle">{{__('localization.servicesOMSWebAppTitle')}}</h3>

        <p class="servicesText">{{__('localization.servicesOMSWebAppText')}}</p>
      </div>

      <div class="ui column">
        <img class="ui right floated image" src="res/images/webapp-bg.png" alt="example Software Services">
      </div>
    </div>

    <div style="margin-top: 0; padding-top: 0;" class="ui two column stackable grid">
      <div class="ui column">
        <img class="ui image" src="res/images/logo-bg.png" alt="example Software Services">
      </div>

      <div style="padding-left: 3%; padding-right: 3%;" class="ui center aligned middle aligned column">
        <h3 class="servicesTitle">{{__('localization.servicesOMSLogoTitle')}}</h3>

        <p class="servicesText">{{__('localization.servicesOMSLogoText')}}</p>
      </div>
    </div>

    <div style="margin-top: 0; padding-top: 0;" class="ui two column mobile reversed stackable grid">
      <div style="padding-left: 3%; padding-right: 3%;" class="ui center aligned middle aligned column">
        <h3 class="servicesTitle">{{__('localization.servicesOMSSSLTitle')}}</h3>

        <p class="servicesText">{{__('localization.servicesOMSSSLText')}}</p>
      </div>

      <div class="ui column">
        <img class="ui right floated image" src="res/images/ssl-bg.png" alt="example Software Services">
      </div>
    </div>

    <div id="servicesBtnGrid" style="margin-top: 50px;" class="ui stackable two column grid">
      <div id="portfolioBtnLeft" class="ui right aligned column">
        <a id="servicesGridBtn" class="ui large primary button" href="portfolio">{{__('localization.seeOurPortfolioBtn')}}</a>
      </div>

      <div id="portfolioBtnRight" class="ui left aligned column">
        <a id="servicesGridBtn" style="width: 179px;" class="ui large primary button" href="contact">{{__('localization.workWithUsBtn')}}</a>
      </div>
    </div>

    <h2 style="display: inline-block;" id="contactTitle">{{__('localization.servicesCBS')}}</h2>

    <div style="margin-top: 25px;" class="ui mobile reversed stackable two column grid">
      <div style="padding-left: 5%; padding-right: 5%;" class="ui center aligned middle aligned column">
        <h3 class="servicesTitle">{{__('localization.servicesCBSCMPTitle')}}</h3>

        <p class="servicesText">{{__('localization.servicesCBSCMPText')}}</p>

        <a id="servicesGridBtn" style="width: 179px;" class="ui large primary button" target="_blank" href="#">{{__('localization.servicesCBSCMPBtn')}}</a>
      </div>

      <div class="ui column">
        <img class="ui large centered image" src="res/images/devices-ss.png" alt="example Software Customer Monitor Panel">
      </div>
    </div>

    <h2 style="display: inline-block;" id="contactTitle">{{__('localization.servicesPBS')}}</h2>

    <div style="margin-top: 25px; padding-left: 3%; padding-right: 3%;" class="ui stackable centered grid">
      <div class="ui six wide column">
        <div class="ui grid">
          <div style="margin: 0; padding: 0;" class="ui one wide right aligned column">
            <i style="font-size: 25px; padding-top: 17px; color: #404040;" class="fas fa-book-open"></i>
          </div>

          <div class="ui fifteen wide column">
            <h3 class="servicesTitle">{{__('localization.servicesPBSUserGuideTitle')}}</h3>

            <p class="servicesText">{{__('localization.servicesPBSUserGuideText')}}</p>
          </div>
        </div>
      </div>

      <div class="ui six wide column">
        <div class="ui grid">
          <div style="margin: 0; padding: 0;" class="ui one wide right aligned column">
            <i style="font-size: 25px; padding-top: 17px; color: #404040;" class="fas fa-file"></i>
          </div>

          <div class="ui fifteen wide column">
            <h3 class="servicesTitle">{{__('localization.servicesPBSDocsTitle')}}</h3>

            <p class="servicesText">{{__('localization.servicesPBSDocsText')}}</p>
          </div>
        </div>
      </div>

      <div class="ui six wide column">
        <div class="ui grid">
          <div style="margin: 0; padding: 0;" class="ui one wide right aligned column">
            <i style="font-size: 25px; padding-top: 17px; color: #404040;" class="fas fa-life-ring"></i>
          </div>

          <div class="ui fifteen wide column">
            <h3 class="servicesTitle">{{__('localization.servicesPBSSupportTitle')}}</h3>

            <p class="servicesText">{{__('localization.servicesPBSSupportText')}}</p>
          </div>
        </div>
      </div>

      <div class="ui six wide column">
        <div class="ui grid">
          <div style="margin: 0; padding: 0;" class="ui one wide right aligned column">
            <i style="font-size: 25px; padding-top: 17px; color: #404040;" class="fas fa-tachometer-alt"></i>
          </div>

          <div class="ui fifteen wide column">
            <h3 class="servicesTitle">{{__('localization.servicesPBSPanelTitle')}}</h3>

            <p class="servicesText">{{__('localization.servicesPBSPanelText')}}</p>
          </div>
        </div>
      </div>

      <div class="ui six wide column">
        <div class="ui grid">
          <div style="margin: 0; padding: 0;" class="ui one wide right aligned column">
            <i style="font-size: 25px; padding-top: 17px; color: #404040;" class="fas fa-globe"></i>
          </div>

          <div class="ui fifteen wide column">
            <h3 class="servicesTitle">{{__('localization.servicesPBSLangTitle')}}</h3>

            <p class="servicesText">{{__('localization.servicesPBSLangText')}}</p>
          </div>
        </div>
      </div>
    </div>

    <h2 style="display: inline-block;" id="contactTitle">{{__('localization.servicesTools')}}</h2>

    <div style="margin-top: 50px;" class="ui stackable centered grid">
      <div id="toolsLeftCol" style="border-right: 1px solid #4391FF;" class="ui four wide center aligned column">
        <img class="ui small centered image" src="res/images/backend-logos.png" alt="Backend Tools used by example Software">

        <h3 style="margin-top: 25px;" class="servicesTitle">Laravel & Spring Boot</h3>

        <p class="servicesText">{{__('localization.servicesToolsBackendText')}}</p>
      </div>

      <div id="toolsMiddleCol" style="border-left: 1px solid #4391FF; border-right: 1px solid #4391FF;" class="ui four wide center aligned column">
        <img class="ui small centered image" src="res/images/frontend-logos.png" alt="Frontend Tools used by example Software">

        <h3 style="margin-top: 25px;" class="servicesTitle">Semantic UI & Bootstrap</h3>

        <p class="servicesText">{{__('localization.servicesToolsFrontendText')}}</p>
      </div>

      <div id="toolsRightCol" style="border-left: 1px solid #4391FF;" class="ui four wide center aligned column">
        <img class="ui small centered image" src="res/images/db-logos.png" alt="Database Tools used by example Software">

        <h3 style="margin-top: 25px;" class="servicesTitle">MySQL & PostgreSQL</h3>

        <p class="servicesText">{{__('localization.servicesToolsDBText')}}</p>
      </div>
    </div>

    <div id="servicesBtnGrid" style="margin-top: 100px;" class="ui stackable two column grid">
      <div id="portfolioBtnLeft2" class="ui right aligned column">
        <a id="servicesGridBtn" class="ui large primary button" href="portfolio">{{__('localization.seeOurPortfolioBtn')}}</a>
      </div>

      <div id="portfolioBtnRight2" class="ui left aligned column">
        <a id="servicesGridBtn" style="width: 179px;" class="ui large primary button" href="contact">{{__('localization.workWithUsBtn')}}</a>
      </div>
    </div>
@endsection
