@extends('layouts.main-layout')

@section('siteContent')
    <h2 style="display: inline-block;" id="contactTitle">{{__('localization.aboutTitle')}}</h2>

    <div id="aboutGrid" class="ui stackable grid">
      <div id="aboutTextCol" class="ui nine wide column">
        <div class="ui grid">
          <div class="ui sixteen wide column">
            <p id="aboutTitle">{{__('localization.aboutP1')}}</p>
            <p id="aboutText">{{__('localization.aboutP2')}}</p>
          </div>

          <div class="ui sixteen wide center aligned column">
            <a id="aboutBtn" class="ui primary button" href="services">{{__('localization.ourServicesBtn')}}</a>
            <a style="width: 159px;" id="aboutBtn" class="ui primary button" href="contact">{{__('localization.workWithUsBtn')}}</a>
          </div>
        </div>
      </div>

      <div id="aboutBrandCol" class="ui seven wide computer tablet only column"></div>
    </div>

    <p id="contactFormText">{{__('localization.aboutTools')}}</p>

    <div class="ui container">
      <div style="margin-top: 50px;" class="ui centered grid">
        <div class="ui four wide column">
          <img class="ui small centered image" src="res/images/backend-logos.png" alt="Backend Tools used by example Software">
        </div>

        <div class="ui four wide column">
          <img class="ui small centered image" src="res/images/frontend-logos.png" alt="Frontend Tools used by example Software">
        </div>

        <div class="ui four wide column">
          <img class="ui small centered image" src="res/images/db-logos.png" alt="Database Tools used by example Software">
        </div>

        <div style="padding-top: 100px;" class="ui sixteen wide center aligned column">
          <p id="contactFormText">{{__('localization.aboutMessage')}}</p>
        </div>

        <div class="ui sixteen wide center aligned column">
          <a id="servicesGridBtn" class="ui large primary button" href="contact">{{__('localization.workWithUsBtn')}}</a>
        </div>
      </div>
    </div>
@endsection
