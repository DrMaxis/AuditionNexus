
<div class="text-center" href=""><img class="" src="{{asset('/img/frontend/audition/logo.png')}}" ></div>
<br><br>


<div class="container">
  <div class="row no-gutters justify-content-around mt-2 mb-5" id="header-links">
    <!-- Fun fact, you can make a div inside the a element and still be valid HTML5!
         https://www.w3.org/TR/html5-diff/#content-model (search for "The a element now") -->
    <a href="#" title="" class="col-3 col-md-2 text-center"><div>Events</div></a>
    <a href="#" title="" class="col-3 col-md-2 text-center"><div>Download</div></a>
    <a href="#" title="" class="col-3 col-md-2 text-center"><div>Shop</div></a>
    <a href="#" title="" class="col-3 col-md-2 text-center"><div>Register</div></a>
</div>


<br><br>


<div class="container">
  <div class="row">


    <div class="col-7">
      
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="{{asset('/img/frontend/slide/slide1.png')}}">
        
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="{{asset('/img/frontend/slide/slide2.png')}}">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('/img/frontend/slide/slide3.png')}}">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    </div>


    <div class="col-5">
      
    <div class="card text-white bg-dark mb-3" style="width: 100%; height: 100%;">
  <div class="card-header"><p class="text-center">News</p></div>
  <div class="card-body">

  <table class="table text-white">
  <thead>
    <tr>
      <th>News 1 : Lorem ipsum dolor sit amet, consectetur</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>News 2: Lorem ipsum dolor sit amet, consectetur</th>
    </tr>
    <tr>
      <th>News 3: Lorem ipsum dolor sit amet, consectetur</th>

    </tr>
    <tr>
      <th>News 4 : Lorem ipsum dolor sit amet, consectetur</th>

    </tr>

  </tbody>
</table>


  </div>
</div>


    </div>
  
  
  </div>
</div>



@section('page-scripts')



<script type="text/javascript">
  $(function () {
  $('[data-toggle="tooltip"]').tooltip()
  })
  
  
      $('.emojis-plain').emojiarea({wysiwyg: false});
      
      var $wysiwyg = $('.emojis-wysiwyg').emojiarea({wysiwyg: true});
      var $wysiwyg_value = $('#emojis-wysiwyg-value');
      
      $wysiwyg.on('change', function() {
        $wysiwyg_value.text($(this).val());
      });
      $wysiwyg.trigger('change');
  
  
      document.onkeydown = function(e) {
    if(event.keyCode == 123) {
       return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
       return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
       return false;
    }
    if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
       return false;
    }
    if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
       return false;
    }
  }
      </script>

@endsection