<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="language" content="tr">
    <meta name="language" content="en">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <style>
      html
      {
        width: 100%;
        height: 100%;
      }

      body
      {
        width: 100%;
        height: 100%;
      }

      p, a, b
      {
        font-family: 'Poppins', sans-serif;
      }
    </style>
  </head>

  <body>
    <div class="ui container">
      <div style="margin-top: 5%;" class="ui one column grid">
        <div class="ui column">
          <p><b>Name:</b> {{$name}}</p>
          <p><b>Surname:</b> {{$surname}}</p>
          <p><b>Email:</b> <a href="mailto:{{$email}}" class="ui item">{{$email}}</a></p>
          <p><b>Phone:</b> <a href="tel:{{$phone}}" class="ui item">{{$phone}}</a></p>
          <p><b>Address:</b> {{$address}}</p>
        </div>
        <div class="ui column">
          <b>Message:</b>
          <p style="margin-top: 10px;">{{$contactMessage}}</p>
        </div>
      </div>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
</html>
