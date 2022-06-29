@extends('layouts.main-layout')

@section('siteContent')
    <div style="border-radius: 15px;" id="responseModal" class="ui modal">
      <i style="color: white;" class="close icon"></i>
      <div id="modalBG" class="ui content">
        <p id="modalHeader">Header</p>
        <p id="modalContent">Content...</p>
      </div>
    </div>

    <h2 style="display: inline-block;" id="contactTitle">{{__('localization.contactTitle')}}</h2>

    <div id="contactInfoGrid" class="ui stackable grid">
      <div id="contactInfoCol" class="ui nine wide column">
        <div class="ui centered grid">
          <div class="ui row">
            <div style="margin: 0; padding: 0;" class="ui one wide right aligned column">
              <i class="fas fa-map-marker-alt contactIcon"></i>
            </div>
            <div class="ui eleven wide column">
              <p class="contactText">{{__('localization.contactA1')}}</p>
            </div>
          </div>

          <div style="padding-top: 0; margin-top: 0;" class="ui row">
            <div class="ui one wide right aligned column">
            </div>
            <div class="ui eleven wide column">
              <p class="contactText">{{__('localization.contactA2')}}</p>
            </div>
          </div>

          <div class="ui row">
            <div style="margin: 0; padding: 0;" class="ui one wide right aligned column">
              <i class="fas fa-envelope contactIcon"></i>
            </div>
            <div class="ui eleven wide column">
              <p class="contactText">{{__('localization.contactEmail')}}</p>
            </div>
          </div>

          <div class="ui row">
            <div style="margin: 0; padding: 0;" class="ui one wide right aligned column">
              <i class="fas fa-phone contactIcon"></i>
            </div>
            <div class="ui eleven wide column">
              <p class="contactText">+90 123 456 7899</p>
            </div>
          </div>

          <div style="padding-top: 0; margin-top: 0;" class="ui row">
            <div class="ui one wide right aligned column">
            </div>
            <div class="ui eleven wide column">
              <p class="contactText">+90 123 456 7899</p>
            </div>
          </div>

          <div class="ui row">
            <div style="padding-left: 4%;" class="ui eleven wide column">
              <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-facebook-square menuIcon"></i></a>
              <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-linkedin menuIcon"></i></a>
              <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-twitter-square menuIcon"></i></a>
              <a style="float: none;" class="menuSocialIcon" href="#"><i class="fab fa-instagram menuIcon"></i></a>
            </div>
          </div>

          <div class="ui row">
            <div style="padding-left: 4%;" class="ui eleven wide column">
              <button id="contactBtn" class="ui primary button">{{__('localization.contactBtn')}}</button>
            </div>
          </div>
        </div>
      </div>

      <div class="ui seven wide computer tablet only column"></div>
    </div>

    <p id="contactFormText">{{__('localization.contactFormText')}}</p>

    <div class="ui container">
      <div id="contactFormGrid" class="ui one column grid">
        <div class="ui column">
          <form id="contactForm" class="ui form">
            {{ csrf_field() }}

            <div class="ui field">
              <div id="formError" class="ui error message"></div>
            </div>

            <div class="ui two fields">
              <div class="ui field">
                <input type="text" maxlength="50" name="name" placeholder="{{__('localization.contactFormName')}} *">
              </div>

              <div class="ui field">
                <input type="text" maxlength="50" name="surname" placeholder="{{__('localization.contactFormSurname')}} *">
              </div>
            </div>

            <div class="ui two fields">
              <div class="ui field">
                <input type="text" maxlength="350" name="email" placeholder="{{__('localization.contactFormEmail')}} *">
              </div>

              <div class="ui field">
                <input id="phone" maxlength="50" type="text" name="phone" placeholder="{{__('localization.contactFormPhone')}} *">
              </div>
            </div>

            <div class="ui field">
              <input type="text" maxlength="350" name="address" placeholder="{{__('localization.contactFormAddress')}} *">
            </div>

            <div class="ui field">
              <textarea name="message" placeholder="{{__('localization.contactFormMessage')}} *"></textarea>
            </div>

            <button id="sendBtn" name="sendBtn" type="submit" class="ui fade animated large primary button">
              <div class="visible content">{{__('localization.contactFormBtn')}}</div>
              <div class="hidden content">
                <i class="fas fa-paper-plane icon"></i>
              </div>
            </button>
          </form>
        </div>
      </div>
    </div>
@endsection

@section('scriptContent')
    <script>
      $('#phone').on('input', function(event){
        var key = event.which || this.value.substr(-1).charCodeAt(0);

        if((key != 43) && ((key < 48) || (57 < key)))
        {
          var p = $('#phone').val();
          $('#phone').val(p.substring(0, p.length - 1));
        }
      });

      $('#contactForm').form(
        {
          fields: {
            name: {
              identifier: 'name',
              rules: [
                {
                  type: 'empty',
                  prompt: '{{__('localization.nameError')}}'
                }
              ]
            },

            surname: {
              identifier: 'surname',
              rules: [
                {
                  type: 'empty',
                  prompt: '{{__('localization.surnameError')}}'
                }
              ]
            },

            phone: {
              identifier: 'phone',
              rules: [
                {
                  type: 'empty',
                  prompt: '{{__('localization.phoneError')}}'
                }
              ]
            },

            email: {
              identifier: 'email',
              rules: [
                {
                  type: 'regExp[^\.+\@\.+\\.[a-zA-Z]+\.*$]',
                  prompt: '{{__('localization.emailError')}}'
                }
              ]
            },

            address: {
              identifier: 'address',
              rules: [
                {
                  type: 'empty',
                  prompt: '{{__('localization.addressError')}}'
                }
              ]
            },

            message: {
              identifier: 'message',
              rules: [
                {
                  type: 'empty',
                  prompt: '{{__('localization.messageError')}}'
                }
              ]
            }
          },

          onSuccess: function(event, fields){
            event.preventDefault();

            var serializedData = $('#contactForm').serialize();

            $('#contactForm').addClass('loading');

            var request = $.ajax(
              {
                url: '/contact',
                type: 'post',
                data: serializedData
              }
            );

            request.done(
              function(response, textStatus, jqXHR)
              {
                if(response.status === 'success')
                {
                  $('#modalHeader').text(response.title);
                  $('#modalContent').text(response.text);
                }

                $('#responseModal').modal({closable: false}).modal('show');
              }
            );

            request.fail(
              function(jqXHR, textStatus, errorThrown)
              {
                $('#modalHeader').text('{{__('localization.unknownErrorTitle')}}');
                $('#modalContent').text('{{__('localization.unknownErrorText')}}');
                $('#responseModal').modal({closable: false}).modal('show');
              }
            );

            request.always(
              function()
              {
                $('#contactForm').removeClass('loading');

                $('input[name=name]').val('');
                $('input[name=surname]').val('');
                $('input[name=email]').val('');
                $('input[name=phone]').val('');
                $('input[name=address]').val('');
                $('textarea[name=message]').val('');
              }
            );
          }
        }
      );
    </script>
@endsection
