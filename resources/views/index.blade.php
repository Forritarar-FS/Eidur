@extends('app')
@section('content')
<html>
<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
<style>
/* (320x480) iPhone (Original, 3G, 3GS) */
@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
    /* insert styles here */
}

/* (320x480) Smartphone, Portrait */
@media only screen and (device-width: 320px) and (orientation: portrait) {
    /* insert styles here */
}

/* (320x480) Smartphone, Landscape */
@media only screen and (device-width: 480px) and (orientation: landscape) {
    /* insert styles here */
}

/* (480x800) Android */
@media only screen and (min-device-width: 480px) and (max-device-width: 800px) {
    /* insert styles here */
}

/* (640x960) iPhone 4 & 4S */
@media only screen and (min-device-width: 640px) and (max-device-width: 960px) {
    /* insert styles here */
}

/* (720x1280) Galaxy Nexus, WXGA */
@media only screen and (min-device-width: 720px) and (max-device-width: 1280px) {
    /* insert styles here */
}

/* (720x1280) Galaxy Nexus, Landscape */
@media only screen and (min-device-width: 720px) and (max-device-width: 1280px) and (orientation: landscape) {
    /* insert styles here */
}

/* (1024x768) iPad 1 & 2, XGA */
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
    /* insert styles here */
}

/* (768x1024) iPad 1 & 2, Portrait */
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: portrait) {
    /* insert styles here */
}

/* (1024x768) iPad 1 & 2, Landscape */
@media only screen and (min-device-width: 768px) and (max-device-width: 1024px) and (orientation: landscape) {
    /* insert styles here */
}

/* (2048x1536) iPad 3 */
@media only screen and (min-device-width: 1536px) and (max-device-width: 2048px) {
    /* insert styles here */
}

/* (1280x720) Galaxy Note 2, WXGA */
@media only screen and (min-device-width: 720px) and (max-device-width: 1280px) {
    /* insert styles here */
}

/* (1366x768) WXGA Display */
@media  screen and (max-width: 1366px) {
    /* insert styles here */
}

/* (1280x1024) SXGA Display */
 @media screen and (max-width: 1280px) and (max-height: 1024px) {
  body {
    overflow-x: hidden;
  }
  .flex_container {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
  }
  .flex_item1 {
    -webkit-flex: 2 0 0;
    flex: 2 0 0;
  }
  .flex_item2 {
    -webkit-flex: 1 0 0;
    flex: 1 0 0;
  }
  .flex_space {
    -webkit-flex: 0.2 0 0;
    flex: 0.2 0 0;
  }
  .panel-body-height {
    height: 500px;
  }
  .custom_container {
    height: auto;
    overflow: hidden;
    margin-left: 3%;
    padding-top: 20px;
    padding-left: 25px;
    padding-bottom: 25px;
  }
  #divimg {
    position: relative;
    display: inline-block;
    margin: 5px;
    width: 165px;
    height: 165px;
    max-width: 165px;
    min-height: 165px;
  }
  #img {
    position: absolute;
    margin: 5px;
    height: auto;
    width: 165px;
    min-height: 165px;
    max-height: 165px;
    overflow: hidden;
  }
  .img_featured {
    position: absolute;
    width: 125px;
    height: 125px;
    min-height: 125px;
    overflow: hidden;
  }
  .divimg_featured {
    position: relative;
    display: inline-block;
    width: 125px;
    height: 125px;
    min-height: 125px;
    overflow: hidden;
  }
}


/* (1920x1080) Full HD Display */
@media  screen and (min-width: 1920px) {
  .flex_container {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
  }
  .flex_item1 {
    -webkit-flex: 2 0 0;
    flex: 3 0 0;
  }
  .flex_item2 {
    -webkit-flex: 1 0 0;
    flex: 1 0 0;
  }
  .flex_space {
    -webkit-flex: 0.5 0 0;
    flex: 0.5 0 0;
  }
  .panel-body-height {
    height: 674px;
  }
  .custom_container {
    height: auto;
    overflow: hidden;
    margin-left: 3%;
    padding-top: 20px;
    padding-left: 25px;
    padding-bottom: 25px;
  }
  #divimg {
    position: relative;
    display: inline-block;
    margin: 5px;
    width: 225px;
    height: 225px;
    max-width: 225px;
    min-height: 225px;
  }
  #img {
    position: absolute;
    margin: 5px;
    height: auto;
    width: 225px;
    min-height: 225px;
    max-height: 225px;
    overflow: hidden;
  }
  .img_featured {
    position: absolute;
    width: 125px;
    height: 125px;
    min-height: 125px;
    overflow: hidden;
  }
  .divimg_featured {
    position: relative;
    display: inline-block;
    width: 125px;
    height: 125px;
    min-height: 125px;
    overflow: hidden;
  }
}

/* (1600x900) HD+ Display */
@media  screen and (min-width: 1600px) and (max-height: 900px) {
  .flex_container {
    display: flex;
    flex-direction: row;
    flex-wrap: nowrap;
  }
  .flex_item1 {
    -webkit-flex: 2 0 0;
    flex: 3 0 0;
  }
  .flex_item2 {
    -webkit-flex: 1 0 0;
    flex: 1 0 0;
  }
  .flex_space {
    -webkit-flex: 0.5 0 0;
    flex: 0.5 0 0;
  }
  .panel-body-height {
    height: 550px;
  }
  .custom_container {
    height: auto;
    overflow: hidden;
    background-color: #2b2b2b;
    margin-left: 3%;
    padding-top: 20px;
    padding-left: 25px;
    padding-bottom: 25px;
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
    display: inline-block;
    margin: 5px;
    width: 230px;
    height: 230px;
    max-width: 230px;
    min-height: 230px;
  }
  #img {
    position: absolute;
    margin: 5px;
    height: auto;
    width: 230px;
    min-height: 230px;
    max-height: 230px;
    overflow: hidden;
  }
  .img_featured {
    position: absolute;
    width: 125px;
    height: 125px;
    min-height: 125px;
    overflow: hidden;
  }
  .divimg_featured {
    position: relative;
    display: inline-block;
    width: 125px;
    height: 125px;
    min-height: 125px;
    overflow: hidden;
  }
}
/* (1600x900) HD+ Display */
@media  screen and (max-width: 800px) {
  .custom_container {
    height: auto;
    overflow: auto;
    background-color: #2b2b2b;
    margin: 50px;
    padding: 0;
  }
  .div_shadow
  {
    box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -webkit-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -moz-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
    -o-box-shadow: inset 0px 0px 16px -7px #111111,4px 5px 11px -1px #242424;
  }
  #divimg {
    display: inline-block;
    margin-left: 2px;
    margin-right: 2px;
    width: 226px;
    height: 226px;
    min-height: 226px;
    overflow: hidden;
  }
  .divimg_featured {
    display: inline-block;
    margin-left: 2px;
    margin-right: 2px;
    width: 85px;
    height: 85px;
    min-height: 85px;
    overflow: hidden;
  }

  #img {
    margin-left: 2px;
    margin-right: 2px;
    width: 226px;
    height: 226px;
    min-height: 226px;
    overflow: hidden;
  }
  .img_featured {
    margin-left: 2px;
    margin-right: 2px;
    width: 85px;
    height: 85px;
    min-height: 85px;
    overflow: hidden;
  }
}
</style>
<div id="fb-root"></div>
<body style="overflow-y: scroll;">
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
  <div class="flex_container">
    <div class="jumbotron flex_item1 custom_container">
      @foreach ($posts as $post)
        <a href="{{ action('PostsController@show', [$post->id]) }}">
          <div id="divimg">
              <img src="{{ $post->fileToUpload }}" class="img-responsive" id="img">
              <hr>
          </div>
      </a>
      @endforeach
    </div>
    <div class="flex_space">
    </div>
    <div class="flex_item2">
      <div class="follow-scroll">
        <div class="panel-default" style="width: 300px;">
          <div class="panel-heading">
            <h2 class="panel-title title">
              <a style="font-weight: bold;">Featured Posts</a>
            </h2>
          </div>
        </div>
        <div class="panel-body-height">
        <div class="panel-body panel-body-height" style="overflow-y: auto; width: 300px;">
          @foreach ($posts as $post)
            <a href="{{ action('PostsController@show', [$post->id]) }}">
              <div class="divimg_featured">
                <img src="{{ $post->fileToUpload }}" class="img_featured">
              </div>
            </a>
          @endforeach
        </div>
        <div class="panel-footer" style="width: 300px;">
        </div>
    </div>
    </div>
  </div>
    <!--<center>{!! $posts->render(); !!}</center>-->
  </body>
</html>
@stop
