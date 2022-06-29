@extends('layouts.main-layout')

@section('siteContent')
    <div id="entranceGrid" style="background-image: url('res/images/portfolio-bg1.jpg'); background-position: bottom;" class="ui grid">
      <div style="padding-top: 10%; padding-bottom: 10%;" class="sixteen wide column entranceCol">
        <h1 id="entranceTitle">{{__('localization.portfolioEntrance')}}</h1>
      </div>
    </div>

    <h2 style="display: inline-block;" id="contactTitle">{{__('localization.portfolioTitle')}}</h2>

    <div class="ui centered stackable grid">
      <div class="ui sixteen wide column">
        <div class="ui centered stackable grid">
          @foreach ($imgs as $img)
            <div class="ui row">
              @foreach ($img->imgPaths as $path)
                <div style="background-image: url({{$path}}); margin: 25px !important;" class="ui three wide column portfolioSample worksCol" onclick="showSamplePortfolioImg(this)" data-url="{{$path}}"></div>
              @endforeach
            </div>
          @endforeach
        </div>
      </div>

      <div class="ui sixteen wide center aligned column">
        <a id="servicesGridBtn" style="width: 179px;" class="ui large primary button" href="contact">{{__('localization.workWithUsBtn')}}</a>
      </div>
    </div>
@endsection
