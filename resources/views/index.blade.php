@extends('app')
@section('content')
<html style="overflow-y: scroll; overflow-x: hidden;">
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1621725061412866',
      xfbml      : true,
      version    : 'v2.5'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
<style>
/* Smartphones (portrait and landscape) ----------- */
@media only screen
and (min-device-width : 320px)
and (max-device-width : 480px) {
/* Styles */
}

/* Smartphones (landscape) ----------- */
@media only screen
and (min-width : 321px) {
  .custom_container {
    height: auto;
    overflow: auto;
    background-color: #011;
  }
  .div_shadow
  {
    box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -webkit-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -moz-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -o-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
  }
  #divimg {
    position: relative;
    display: inline;
    padding: 10px;
    height: 160px;
    width: 160px;
    padding-left: auto;
    overflow: hidden;
  }
  #img {
    position: absolute;
    display: inline;
    padding-top: 20px;
    padding-bottom: 20px;
    min-width: 180px;
    height: 200px;
  }
}

/* iPhone 4 ----------- */
@media
only screen and (-webkit-min-device-pixel-ratio : 1.5),
only screen and (min-device-pixel-ratio : 1.5) {
  .custom_container {
    height: auto;
    overflow: auto;
    background-color: #011;
  }
  .div_shadow
  {
    box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -webkit-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -moz-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -o-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
  }
  #divimg {
    position: relative;
    display: inline;
    padding: 10px;
    height: 155px;
    width: 155px;
    padding-left: auto;
    overflow: hidden;
  }
  #img {
    position: absolute;
    display: inline;
    padding-top: 20px;
    padding-bottom: 20px;
    min-width: 180px;
    height: 200px;
  }
}
/* iPhone 6 Plus ----------- */
@media
only screen and (-webkit-min-device-pixel-ratio : 3),
only screen and (min-device-pixel-ratio : 3) {
  .custom_container {
    height: auto;
    overflow: auto;
    background-color: #011;
  }
  .div_shadow
  {
    box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -webkit-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -moz-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -o-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
  }
  #divimg {
    position: relative;
    display: inline;
    width: 200px;
    height: 200px;
    overflow: hidden;
    margin-bottom: -25px;
  }
  #img {
    position: absolute;
    display: inline;
    min-height: 200px;
    max-height: 200px;
    height: 150px;
    width: 200px;
  }
}

/* LG G3 (Portrait) ----------- */
@media only screen and (max-width:460px){
  .custom_container {
    height: auto;
    overflow: auto;
    background-color: #011;
  }
  .div_shadow
  {
    box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -webkit-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -moz-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -o-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
  }
  #divimg {
    position: relative;
    display: inline;
    width: 350px;
    height: auto;
    overflow: hidden;
    padding-top: 25px;
    margin-bottom: -25px;
  }
  #img {
    position: absolute;
    display: inline;
    min-height: auto;
    max-height: 15000px;
    height: auto;
    width: 350px;
  }
}

/* Average Monitors (landscape) ----------- */
@media only screen
and (max-device-width : 1920px)
and (orientation : landscape) {
  .custom_container {
    height: auto;
    overflow: auto;
    background-color: #011;
  }
  .div_shadow
  {
    box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -webkit-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -moz-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -o-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
  }
  #divimg {
    position: relative;
    display: inline;
    width: 315px;
    height: 315px;
    overflow: hidden;
    margin-bottom: -25px;
  }
  #img {
    position: absolute;
    display: inline;
    min-height: 315px;
    max-height: 315px;
    height: 315px;
    width: 315px;
  }
}
</style>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.5&appId=1621725061412866";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- TopPage Ad -->
<!--<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-7615602607750846"
     data-ad-slot="9801669814"></ins>-->
<h1 class="container" style="dispaly: inline-block;font-weight: bold; color: white; margin-top: 65px;">Posts</h1>

<hr/>
  @if (!Auth::user() || Auth::user()->isAdmin != 1)

  @else

  @endif
    <div class="div_shadow custom_container">
      @foreach ($posts as $post)
        <a href="{{ action('PostsController@show', [$post->id]) }}">
          <div id="divimg" class="col-md-2 col-sm-3 col-xs-6">
              <img data-gifffer="{{ $post->fileToUpload }}" class="img-responsive" id="img">
              <hr>
          </div>
      </a>
      @endforeach
    </div>
    <center><div class="fb-like" data-href="https://suchdank.com" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div></center>
    <center>{!! $posts->render(); !!}</center>
</html>
@stop
