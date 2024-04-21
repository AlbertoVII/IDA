<!DOCTYPE html>
<html>
  <head>
    <title>Rent a house</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css"
     integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


       <!-- Styles -->
       @livewireStyles
  </head>
  <body>
    <nav class="navbar navbar-expand-sm row container">
         <div class="col-12 col-md-12 col-lg-6 col-sm-4 text-right">
           <a class="navbar-brand" href="#">
           <img src="{{ asset('images/imagesPlantilla/logo.png') }}" alt="logo" style="width: 30%">
         </a>
       </div>
       <div class="col-8 col-md-12 col-lg-6 col-sm-8 text-right">
         <ul class="navbar-nav container icon">
              <li class="nav-item">
                 <a class="nav-link" href="#"><i class="fab fa-tripadvisor"></i></a>
              </li>
              <li class="nav-item">
                 <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#"><i class="fab fa-youtube"></i></a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="#"><i class="fab fa-google-plus-g"></i></a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="#"><i class="fab fa-pinterest-p"></i></a>
      </li>
          </ul>
          <ul class="navbar-nav menu">
               <li class="nav-item">
                  <a class="nav-link" href="#">Welcome </a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#">| Rent a house </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">| Why us </a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#">| Things to do </a>
           </li>
           <li class="nav-item">
              <a class="nav-link" href="#">| Contacts</a>
         </li>
           </ul>
        </div>
      </nav>
      <div class="main">
        <div class="row jumbotron">
        <div class="col-12 col-md-4 text text-center container">
          <h1><small>You</small></h1>
          <span><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i></span>
          <h2><small>download the HTML-template<br> FOR FREE</small></h2><br>
         
          <a class="btn bg-yellow-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-yellow-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-yellow-600" href="{{ route('portal') }}">Tu nueva <br> Casa</a> 

          <br>
          <br>

  <!-- The Modal -->
          <div class="modal" id="modalone">
                <div class="modal-dialog">
                <div class="modal-content">

        <!-- Modal Header -->
               <div class="modal-header">
               <h4 class="modal-title text-center">What is Lorem Ipsum?</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
             <div class="modal-body text-justify">
               Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
               <div class="row">
                   <div class="col-12 col-md-6 col-lg-6">
                      <img src="{{ asset('images/imagesPlantilla/2.jpg') }} ">
                   </div>
                   <div class="col-12 col-md-6 col-lg-6">
                      <img src="{{ asset('images/imagesPlantilla/3.jpg') }} ">
                   </div>
               </div>

              </div>
        <!-- Modal footer -->
             <div class="modal-footer">
               <button type="button" class="btn w3-flat-sun-flower" data-dismiss="modal">Close</button>
             </div>
           </div>
          </div>
        </div>
       </div>
      </div>
      </div>
      
      <div class="row second">
          <div class="col-12 col-md-12 col-lg-3">
              <img src="{{ asset('images/imagesPlantilla/4.jpg') }}">
              <div class="container w3-flat-midnight-blue">
                <br>
                  <h4 class="text-center text-uppercase"><small>What is Lorem Ipsum</small></h4>
                  <br>
              </div>
          </div>
          <div class="col-12 col-md-12 col-lg-3">
              <img src="{{ asset('images/imagesPlantilla/7.jpg') }}">
              <div class="container w3-flat-nephritis">
                <br>
                  <h4 class="text-center text-uppercase"><small>What is Lorem Ipsum</small></h4>
                  <br>
              </div>
          </div>
          <div class="col-12 col-md-12 col-lg-3">
              <img src="{{ asset('images/imagesPlantilla/6.jpg') }}">
              <div class="container w3-flat-midnight-blue">
                <br>
                  <h4 class="text-center text-uppercase"><small>What is Lorem Ipsum</small></h4>
                  <br>
              </div>
          </div>
          <div class="col-12 col-md-12 col-lg-3">
              <img src="{{ asset('images/imagesPlantilla/7.jpg') }}">
              <div class="container w3-flat-nephritis">
                <br>
                  <h4 class="text-center text-uppercase"><small>What is Lorem Ipsum</small></h4>
                  <br>
              </div>
          </div>
      </div>
      <div class="three jumbotron">
          <div class="row">
              <div class="col-12 col-md-12 col-lg-6 container text-center text1">
                  <h4 class="text-center text-uppercase">Good location: near Minsk</h4>
                  <img src="{{ asset('images/imagesPlantilla/logo3.png') }}" style="width: 10%;"><br>
                  <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p><br>.<p> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>
              </div>
              <div class="col-12 col-md-12 col-lg-6 container text-center local">
              </div>
          </div>
          <div class="row">
            <div class="col-12 col-md-12 col-lg-6 container text-center local2">
            </div>
              <div class="col-12 col-md-12 col-lg-6 container text-center text1">
                  <h4 class="text-center text-uppercase">First-class Interior</h4>
                  <img src="{{ asset('images/imagesPlantilla/logo3.png') }}" style="width: 10%;"><br>
                  <p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p><br>.<p> Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). </p>
              </div>
          </div>
      </div>
      
    
  </body>
</html>
