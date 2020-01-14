<div class="text-center" href=""><img class="" src="{{asset('/img/frontend/audition/logo.png')}}"></div>
<br><br>


<div class="container">
  <div class="row no-gutters justify-content-around mt-2 mb-5" id="header-links">
    <!-- Fun fact, you can make a div inside the a element and still be valid HTML5!
         https://www.w3.org/TR/html5-diff/#content-model (search for "The a element now") -->
    <a href="#" title="" class="col-3 col-md-2 text-center">
      <div>Events</div>
    </a>
    <a href="{{route('frontend.downloads.index')}}" title="" class="col-3 col-md-2 text-center">
      <div>Download</div>
    </a>
    <a href="#" title="" class="col-3 col-md-2 text-center">
      <div>Shop</div>
    </a>
    <a href="#" title="" class="col-3 col-md-2 text-center">
      <div>Register</div>
    </a>
  </div>


  <br><br>


  <div class="container" style="border: 5px solid black;">
    <div class="container-header">
      <h1 style="color:white;">Main Game Download ([x] GB)</h1>
      <span style="color:white;"> This is the instaler for the main game. You'll need this to log into Audition Genesis
        using the
        client.</span>
      <div class="row dls">
        <div class="dl-options col-xs-12 col-sm-12 col-md-12 col-lg-12 center">
          <ul class="dl-list">
            <li>
              <a href="#" class="dlbutton btn btn-primary btn-lg active" role="button" aria-pressed="true">FTP</a>

            </li>
            <li>
              <a href="#" class="dlbutton btn btn-primary btn-lg active" role="button" aria-pressed="true">MEGA</a>

            </li>
            <li>
              <a href="#" class="dlbutton btn btn-primary btn-lg active" role="button" aria-pressed="true">Google Drive</a>

            </li>
            <li>
              <a href="#" class="dlbutton btn btn-primary btn-lg active" role="button" aria-pressed="true">Mediafire</a>

            </li>
          </ul>
        </div>
      </div>

    </div>
    <div class="container-content">
      <div class="col-12" style="border: 3px solid black;margin-top: 25px;margin-bottom: 25px;">
        <div class="content-title">
          <h1 style="margin-top:25px; margin-bottom:25px; color:white;">CPS Driver ([x] MB)</h1>
        </div>
        <div class="image-container">
          <div class="row">
            <div id="small-img" class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">
              <ul class="errimg-list">
                <li>
                  <img src="https://place-hold.it/200" class="errimg img-responsive inline-block"
                    alt="Responsive image" />
                </li>
                <li>
                  <img src="https://place-hold.it/200" class="errimg img-responsive inline-block"
                    alt="Responsive image" />
                </li>
                <li>
                  <img src="https://place-hold.it/200" class="errimg img-responsive inline-block"
                    alt="Responsive image" />
                </li>
              </ul>
            </div>
          </div>
          <div class="content-info">
            <p class="info-text">If you see the error messages on the image above, please download the following files
            </p>
            <p class="info-text">Please put CPS.sys on C:/Windows/System32 or C:/Windows/SysWOW64 if you are using a 64
              bit
              computer.</p>
          </div>

          <div class="ftp-option">
            <a href="#" class="dlbutton btn btn-primary btn-lg active" role="button" aria-pressed="true">FTP Download</a>
          </div>
        </div>
      </div>
      <div class="col-12" style="border: 3px solid black;margin-top: 25px;margin-bottom: 25px;">
        <div class="content-title">
          <h1 style="margin-top:25px; margin-bottom:25px; color:white;">T2Embed.dll ([x] MB)</h1>
        </div>
        <div class="image-container">
          <div class="row">
            <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12 center">
              <ul class="errimg-list">
                <li>
                  <img src="https://place-hold.it/200" class="errimg img-responsive inline-block"
                    alt="Responsive image" />
                </li>
                <li>
                  <img src="https://place-hold.it/200" class="errimg img-responsive inline-block"
                    alt="Responsive image" />
                </li>
                <li>
                  <img src="https://place-hold.it/200" class="errimg img-responsive inline-block"
                    alt="Responsive image" />
                </li>
              </ul>
            </div>
          </div>
          <div class="content-info">
            <p class="info-text">If you see the error messages on the image above, please download the following files
            </p>
            <p class="info-text">Please put T2Embed.dll in your Audition Directory.</p>
            <span style="color:white"> Latest Version: 2019-11-7<span>
          </div>

          <div class="ftp-option">
            <a href="#" class="dlbutton btn btn-primary btn-lg active" role="button" aria-pressed="true">FTP Download</a>
          </div>
        </div>
      </div>




    </div>
  </div>


  @section('page-scripts')



  @endsection