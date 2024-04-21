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
      <!-- Scripts --> 
     
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
              <a class="nav-link" href="{{ route('login'); }}">Login</a>
         </li>
       

           </ul>
        </div>
      </nav>
<div class="row">
        <div class="col-12 col-md-12 col-lg-6 card">


            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                   <img style="width:100%" src="{{ asset('images/imagesPlantilla/1/6.jpg') }}">
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                   <img src="{{ asset('images/imagesPlantilla/1/1.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/2.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/3.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/5.jpg') }}" style="width: 45%;">
                </div>
            </div>
            <div class="card-body">
              <h3 class="text-left" style="color: #4a9375!important"><small>Cottage in Zaslauje</small></h3>
              <p class="text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
              <div class="row">
                  <div class="col-12 col-md-12 col-lg-6" style="background-color:#e9ecef">
                    5 rooms, 2 bathrooms, 2 floors
                    <p style="color:#4a9375!important">Price: 2000 BYN/week</p>
                  </div>
                  <div class="col-12 col-md-12 col-lg-6 w3-flat-sun-flower btn" data-toggle="modal" data-target="#myModal5">
                    READ MORE
                  </div>
                  <div class="modal" id="myModal5">
                     <div class="modal-dialog">
                       <div class="modal-content">
      <!-- Modal Header -->
                        <div class="modal-header">
                         <h4 class="modal-title">House in Zaslauje</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
      <!-- Modal body -->
                         <div class="modal-body">
                                 <p class="text-justify">
                                     <img src="{{ asset('images/imagesPlantilla/1/5.jpg') }}">
                                 </p>
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
        <div class="col-12 col-md-12 col-lg-6 card">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                   <img style="max-width: -moz-available;" src="{{ asset('images/imagesPlantilla/1/5.jpg') }}">
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                   <img src="{{ asset('images/imagesPlantilla/1/1.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/2.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/3.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/4.jpg') }}" style="width: 45%;">
                </div>
            </div>
            <div class="card-body">
              <h3 class="text-left" style="color: #4a9375!important"><small>Cottage in Zaslauje</small></h3>
              <p class="text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
              <div class="row">
                  <div class="col-12 col-md-12 col-lg-6" style="background-color:#e9ecef">
                    5 rooms, 2 bathrooms, 2 floors
                    <p style="color:#4a9375!important">Price: 2000 BYN/week</p>
                  </div>
                  <div class="col-12 col-md-12 col-lg-6 w3-flat-sun-flower btn" data-toggle="modal" data-target="#myModal4">
                    READ MORE
                  </div>
                  <div class="modal" id="myModal4">
                     <div class="modal-dialog">
                       <div class="modal-content">
      <!-- Modal Header -->
                        <div class="modal-header">
                         <h4 class="modal-title">House in Zaslauje</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
      <!-- Modal body -->
                         <div class="modal-body">
                                 <p class="text-justify">
                                     The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                     <img src="{{ asset('images/imagesPlantilla/1/5.jpg') }}">
                                 </p>
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
      </div>
      <div class="row">
        <div class="col-12 col-md-12 col-lg-6 card">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                   <img style="max-width: -moz-available;" src="{{ asset('images/imagesPlantilla/1/5.jpg') }}">
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                   <img src="{{ asset('images/imagesPlantilla/1/1.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/2.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/3.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/4.jpg') }}" style="width: 45%;">
                </div>
            </div>
            <div class="card-body">
              <h3 class="text-left" style="color: #4a9375!important"><small>Cottage in Zaslauje</small></h3>
              <p class="text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
              <div class="row">
                  <div class="col-12 col-md-12 col-lg-6" style="background-color:#e9ecef">
                    5 rooms, 2 bathrooms, 2 floors
                    <p style="color:#4a9375!important">Price: 2000 BYN/week</p>
                  </div>
                  <div class="col-12 col-md-12 col-lg-6 w3-flat-sun-flower btn" data-toggle="modal" data-target="#myModal3">
                    READ MORE
                  </div>
                  <div class="modal" id="myModal3">
                     <div class="modal-dialog">
                       <div class="modal-content">
      <!-- Modal Header -->
                        <div class="modal-header">
                         <h4 class="modal-title">House in Zaslauje</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
      <!-- Modal body -->
                         <div class="modal-body">
                                 <p class="text-justify">
                                     The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                     <img src="{{ asset('images/imagesPlantilla/1/6.jpg') }}">
                                 </p>
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
        <div class="col-12 col-md-12 col-lg-6 card">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-6">
                   <img style="max-width: -moz-available;" src="{{ asset('images/imagesPlantilla/1/7.jpg') }}">
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                   <img src="{{ asset('images/imagesPlantilla/1/1.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/2.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/3.jpg') }}" style="width: 45%;">
                   <img src="{{ asset('images/imagesPlantilla/1/4.jpg') }}" style="width: 45%;">
                </div>
            </div>
            <div class="card-body">
              <h3 class="text-left" style="color: #4a9375!important"><small>Cottage in Zaslauje</small></h3>
              <p class="text-left">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
              <div class="row">
                  <div class="col-12 col-md-12 col-lg-6" style="background-color:#e9ecef">
                    5 rooms, 2 bathrooms, 2 floors
                    <p style="color:#4a9375!important">Price: 2000 BYN/week</p>
                  </div>
                  <div class="col-12 col-md-12 col-lg-6 w3-flat-sun-flower btn" data-toggle="modal" data-target="#myModal2">
                    READ MORE
                  </div>
                  <div class="modal" id="myModal2">
                     <div class="modal-dialog">
                       <div class="modal-content">
      <!-- Modal Header -->
                        <div class="modal-header">
                         <h4 class="modal-title">House in Zaslauje</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                         </div>
      <!-- Modal body -->
                         <div class="modal-body">
                                 <p class="text-justify">
                                     The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                     <img style="max-width: -moz-available;" src="{{ asset('images/imagesPlantilla/1/5.jpg ') }}">
                                 </p>
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
      </div>

    
     <div class="seven jumbotron jumbotron-fluid container">
      <div class="row">
         <div class="col-12 col-md-12 col-lg-3">
            <img src="{{ asset('images/imagesPlantilla/11.jpg') }}">
            <img src="{{ asset('images/imagesPlantilla/12.jpg') }}">
            <img src="{{ asset('images/imagesPlantilla/15.jpg') }}">
         </div>
         <div class="col-12 col-md-12 col-lg-6"><br><br><br>
             <h3 class="" style="color:#16a085!important">Why choose us?</h3>
             <br><img src="{{ asset('images/imagesPlantilla/logo3.png') }}" style="width:20%"><br><br>
             <p>
               There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p><br><p>By injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem.</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.</p><br><p>By injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. <br>  If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.
                              </p>
                              <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden. <br> In the middle of text.There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.<br></p>
               <div class="row container">
                 <div class="col-12 col-md-12 col-lg-6">
                    <img src="{{ asset('images/imagesPlantilla/17.jpg') }}">
                 </div>
                 <div class="col-12 col-md-12 col-lg-6">
                    <img src="{{ asset('images/imagesPlantilla/18.jpg') }}">
                 </div>
               </div>
             </div>
          <div class="col-12 col-md-12 col-lg-3">
             <img src="{{ asset('images/imagesPlantilla/13.jpg') }}">
             <img src="{{ asset('images/imagesPlantilla/14.jpg') }}">
             <img src="{{ asset('images/imagesPlantilla/16.jpg') }}">
          </div>
       </div>
        </div>
     </div>
   


  </body>
</html>