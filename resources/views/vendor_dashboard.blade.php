<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap"
          rel="stylesheet"/>

    <link rel="stylesheet" href="vendor_dashboard_style.css">
</head>

<body>
<header>
    <nav class="navbar  navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid d-flex justify-content-between">
            <div>
                <a class="navbar-brand" href="./vendorDash.html">
                    <img src="logo.jpg" alt="Logo" width="50" height="35" class="d-inline-block align-text-top">
                    PettyGraft
                </a>
            </div>
            <div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="vendorProfiletab d-flex mx-3">
                        <div class="containerr mx-2">
                            <div class="profile">
                                <img id="blah" src="DefaultProfilePic.jpg">
                                <div class="overlay">
                                    <input id="imgInp" type="file">
                                    <p>Change Picture</p>
                                </div>

                            </div>

                        </div>
                        <h3 class="pt-1">Harshita</h3>
                    </div>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-bell fa-shake fa-lg"></i>
                            </a>
                            <ul class="dropdown-menu">

                                <nav id="navbar-example2" class="navbar p-2 bg-body-tertiary BellScrollspy">
                                    <a class="navbar-brand" href="#"><h4 class="notification_heading">Notification</h4></a>
                                    <ul class="nav nav-pills">

                                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2"
                                            data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true"
                                            class="scrollspy-example bg-body-tertiary rounded-2" tabindex="0">
                                            <div class="notifi-item">
                                                <div class="text">
                                                <p><b>Owner name:</b>Lorem Ipsummm</p>
                                                <p><b>Pet name:</b>Lorem Ipsummm</p>
                                                <p>Due this week</p>
                                                
                                                </div>
                                            </div>

                                            <div class="notifi-item">
                                                <div class="text d-flex">
                                                   <p> <b>John Doe</b></p>
                                                    <p>@lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>

                                            <div class="notifi-item">
                                                <div class="text d-flex">
                                                    <p><b>Emad Ali</b></p>
                                                    <p>@lorem ipsum dolor sit amet</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </ul>
                     </nav>

                    </ul>
                 </li>
            </ul>
         </div>

    </div>
</nav>
</header>
{{-- <section class="sec1">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- <div class="bg"></div> -->
            <img src="petBanner2.jpg" class="d-block w-100 caraousalBackgraoundImg" alt="...">
            <div class="carousel-caption banner1TextClass">
                <h1 class="campaignHeading">Boost Your Business with Targeted Campaigns!</h1>
                
                <h3 style="color: black">Let our Admin drive more customers to your pet store!</h3>
              
                <button type="button" class="btn btn-warning">  <h4 style="color: black">Run a Campaign Now!</h4></button>
              </div>
          </div>
          <div class="carousel-item">
            <img src="petBanner3.jpg" class="d-block w-100 caraousalBackgraoundImg" alt="...">
          </div>
          <div class="carousel-item">
            <img src="Petbanner4.jpg" class="d-block w-100 caraousalBackgraoundImg" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</section> --}}
<section class="sec1">
    {{-- <div class="container">
        <div class="row"> --}}
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="petBanner2.jpg" class="d-block w-100 caraousalBackgraoundImg" alt="...">
                        <div class="carousel-caption banner1TextClass">
                            <h1 class="campaignHeading">Boost Your Business with Targeted Campaigns!</h1>
                            <h3 style="color: black">Let our Admin drive more customers to your pet store!</h3>
                            <button type="button" class="btn btn-warning">Run a Campaign Now!</button>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <img src="petBanner3.jpg" class="d-block w-100 caraousalBackgraoundImg" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Petbanner4.jpg" class="d-block w-100 caraousalBackgraoundImg" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        {{-- </div>
    </div> --}}
   
</section>


<section class="sec2">
    <div class="container py-5">
        <div class="row">
          <!-- <div class="col-md-8-sm-12"> -->
            <div class="addCustomerModal">
                {{-- <div class="frame">
                <button type="button" class="btn custom-btn btn-6" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Customer</button>
            </div> --}}
                <div class="modal fade" id="exampleModal" class="tableModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title1" id="exampleModalLabel">Customer Information Form</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <form class="inputFormClass">
                          <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Customer Name</label>
                            <input type="text" class="form-control" id="recipient-name">
                          </div>
                          <div class="mb-3">
                            <label for="Email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="Email">
                          </div>
                          <div class="mb-3">
                            <label for="ContactNo" class="col-form-label">Contact No.</label>
                            <input type="tel" class="form-control" id="ContactNo">
                          </div>
                          <div class="mb-3">
                            <label for="pet-type" class="col-form-label">Pet Type</label>
                            <input type="text" class="form-control" id="pet-type">
                          </div>
                          <div class="mb-3">
                            <label for="PetName" class="col-form-label">Pet Name</label>
                            <input type="text" class="form-control" id="PetName">
                          </div>
                          <div class="mb-3">
                            <label for="RemainingWeeks" class="col-form-label">Remaining Weeks</label>
                            <input type="number" class="form-control" id="RemainingWeeks">
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </form>
                      </div>
                      
                    </div>
                  </div>
                </div>
            </div>
         </div>
           <div class="row">
            <div class="col-lg-12-md-12-sm-12">
                <div class="table-responsive-sm">
                    <div class="frame">
                        <button type="button" class="btn custom-btn btn-6" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span>Add Customer</span></button>
                    </div>
                
            <table id="myTable" class="table table-hover nowrap"  style="width:100%">
              <thead>
                <tr>
                  <th>Client Name</th>
                  <th>Phone Number</th>
                  <th>Pet Type</th>
                  <th>Pet Name</th>
                  <th>Remaining Weeks</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    
                      <div class="d-flex align-items-center">
                        <!-- <div class="avatar avatar-blue mr-3">EB</div> -->
                        <div class="dataColumnOne">
                            <a href="#">
                          <p class="font-weight-bold mb-0 customerName">Ethan Black</p></a>
                          <p class="text-muted mb-0 customerEmail">ethan-black@example.com</p>
                        </div>
                      </div>
                
                  </td>
                  <td>(784) 667 8768</td>
                  <td>Dog</td>
                  <td>Joe</td>       
                  <td> 6</td>
                </tr>
                <tr>
                  <td>
                  
                      <div class="d-flex align-items-center">
                        <!-- <div class="avatar avatar-pink mr-3">JR</div>          -->
                        <div class="dataColumnOne">
                            <a href="#">
                          <p class="font-weight-bold mb-0 customerName">Julie Richards</p></a>
                          <p class="text-muted mb-0 customerEmail">julie_89@example.com</p>
                        </div>
                      </div>
                    
                  </td>
                  <td> (937) 874 6878</td>
                  <td>Cat</td>
                
                  <td>Olivia</td>
                  <td>  10 </td>
                </tr>
              </tbody>
            </table>
        </div>
            </div>
          </div>
        <!-- </div> -->
      </div>
      
</section>

<section class="secChart">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-6 col-md-12-sm-12">
                <div id="chart-container " class="line-chart-container">
                    <canvas id="line-chart"></canvas>
                </div>
            </div>
           <div class="col-lg-6 col-md-12-sm-12">
            <!-- <div id="doughnut-chart-container">
                <canvas id="doughnut-chart"></canvas>
              </div> -->
              <div class="programming-stats mt-3">
                <div class="doughnut-chart-container">
                  <canvas class="my-chart"></canvas>
                </div>
          
                <div class="details">
                  <ul></ul>
                </div>
              </div>
           </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        
    <script src="{{asset('vendor_dashboard_script.js')}}"></script>
</body>

</html>