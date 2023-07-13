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
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet"/>

    <link rel="stylesheet" href="/vendor_dashboard_style.css">
    <script src="/vendor_dashboard_style.js"></script>


</head>

<body>
<header>
    <nav class="navbar  navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid d-flex justify-content-between">
            <div>
                <a class="navbar-brand d-flex" href="#">
                    <img src="logo.jpg" alt="Logo" width="60" height="40" class="d-inline-block align-text-top">
                    <h3>PettyGraft</h3>
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
                                                {{-- <div class="notification_text">
                                                <p class="m-0"><b>Owner:</b>Lorem Ipsummm</p>
                                                <p class="m-0"><b>Pet:</b>Lorem Ipsummm</p>
                                                <p class="m-0">Due this week</p>
                                                
                                                </div> --}}
                                                <div class="card noti_card">
                                                  <div class="card-body p-2">
                                                    <p class="card-title m-0"><b>Owner:</b>Lorem Ipsum</p>
                                                    <p class="card-text m-0"><b>Pet:</b>Benjamin</p>
                                                    <div class="dueWeek ">
                                                      <p class="m-0">Due this week</p>
                                                    </div>
                                                    
                                                    {{-- <button class="custom-btn btn-16">Read More</button> --}}
                                                  </div>
                                                </div>
                                            </div>


                                            <div class="notifi-item">
                                              <div class="card noti_card">
                                                <div class="card-body p-2">
                                                  <p class="card-title m-0"><b>Owner:</b>Lorem Ipsum</p>
                                                  <p class="card-text m-0"><b>Pet:</b>Benjamin</p>
                                                  <div class="dueWeek ">
                                                    <p class="m-0">Due this week</p>
                                                  </div>

                                                  
                                                  {{-- <button class="custom-btn btn-16">Read More</button> --}}
                                                </div>
                                              </div>
                                            </div>

                                            <div class="notifi-item">
                                              <div class="card noti_card">
                                                <div class="card-body p-2">
                                                  <p class="card-title m-0"><b>Owner:</b>Lorem Ipsum</p>
                                                  <p class="card-text m-0"><b>Pet:</b>Benjamin</p>
                                                  <div class="dueWeek">
                                                    <p class="m-0">Due this week</p>
                                                  </div>
                                                  
                                                  {{-- <button class="custom-btn btn-16">Read More</button> --}}
                                                </div>
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

<section class="sec0" style="background-color: rgb(255, 255, 245);">
  <nav class="navbar navbar-expand-lg navbar-light bg-light ham-nav m-3">
      <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <img class="companyLogo img-fluid" src="./goageIcon.jpg" alt="companyLogo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./AboutUs.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./portfolio.html">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Page</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./services.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contactUs.html">Contact Us</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
</section>




<section class="sec1">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  
  <div class="carousel-inner" data-bs-interval="10000">

      @foreach ($templates as $key => $template)
          <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
              <img src="{{ 'data:image/jpeg;base64,' . base64_encode($template->templates_image) }}" class="d-block w-100 CarouselPoster" alt="...">
          </div>
      @endforeach

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
</div>

   
</section>


<section class="sec2">
    <div class="container py-5">
        <div class="row">
          <!-- <div class="col-md-8-sm-12"> -->
            <div class="addCustomerModal">
             
               
                <div class="frame d-flex justify-content-between mx-0">
                   <h2>Upcoming Vaccinations</h2> 
                <button type="button" class="btn custom-btn btn-6" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span>Add Customer</span></button>
          
        </div>
            
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

              {{-- cat modal code start --}}
              <div class="modal fade cat_modal" tabindex="-1" id="kt_modal_scrollable_2">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-title">
                            <button type="button" class="btn-close bt-class" data-bs-dismiss="modal"></button>
                            <img src="Untitled design (4).png" class="img-fluid mb-2" alt="...">
                        </div>
                        <div class="modal-body cat_modal_body">
                            <div class="container container-main">

                                <h1 class="modal_cat_name"></h1>
=======
                                <h1 class="modal_cat_name">Juliet</h1>

                                <div class="row">
                                    <div class="col sm-4">
                                        <div class="card card-small">
                                            <div class="card-body">

                                                <h5 class="card-title"></h5>
=======
                                                <h5 class="card-title">2 Years</h5>

                                                <p class="card-text text-muted">Age</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col sm-4">
                                        <div class="card card-small">
                                            <div class="card-body">

                                                <h5 class="card-title"></h5>
=======
                                                <h5 class="card-title">Female</h5>

                                                <p class="card-text text-muted">Sex</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col sm-4">
                                        <div class="card card-small">
                                            <div class="card-body">
                                                <h5 class="card-title">Persian</h5>
                                                <p class="card-text text-muted">Breed</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="card card-profile-cat">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Parent Profile</h4>
                                        <hr>
                                        <p class="card-text">
                                        <p id="joincat" class="fs-5">Name:</p>

                                        <h5 class="joincat">John Doe</h5>
                                        <br>
                                        <p id="joincat" class="fs-5">Contact Number:</p>
                                        <h5 class="joincat"></h5>
                                        <br>
                                        <p id="joincat" class="fs-5">Email:</p>
                                        <h5 class="joincat">abc@gmail.com</h5>
                                       
                                        </p>
                                    </div>
                                </div>
                                <div class="card card-profile-cat">
                                    <div class="card-body">
                                        <h4 class="card-title text-center">Vaccinations</h4>
                                        <hr>
                                        <p class="card-text">
                                        <u><h6 class="text-center">6-8th weeks</h6></u>
                                        <p class="fs-6">Feline panleukopenia (FPV): First dose</p>
                                        <p class="fs-6">Feline herpesvirus (FHV): First dose</p>
                                        <p class="fs-6">Feline calicivirus (FCV): First dose</p>
                                        <u><h6 class="text-center">10-12th weeks</h6></u>
                                        <p class="fs-6">Feline panleukopenia (FPV): Second dose</p>
                                        <p class="fs-6">Feline herpesvirus (FHV): Second dose</p>
                                        <p class="fs-6">Feline calicivirus (FCV): Second dose</p>
                                        <p class="fs-6">Feline leukemia virus (FeLV): First dose</p>
                                        <u><h6 class="text-center">14-16th weeks</h6></u>
                                        <p class="fs-6">Rabies: First dose</p>
                                        <p class="fs-6">Feline panleukopenia (FPV): Third dose</p>
                                        <p class="fs-6">Feline herpesvirus (FHV): Third dose</p>
                                        <p class="fs-6">Feline calicivirus (FCV): Third dose</p>
                                        <p class="fs-6">Feline leukemia virus (FeLV): Second dose </p>
                                        <u><h6 class="text-center">Annually / Every 3 Years</h6></u>
                                        <p class="fs-6">Rabies</p>
                                        <p class="fs-6">Feline Distemper</p>
                                        <p class="fs-6">Feline Herpesvirus-1 (FHV) and Feline Calicivirus (FCV)</p>
                                        <p class="fs-6">Feline Leukemia Virus (FeLV)</p>
                                        </p>
                                    </div> </div> </div> </div> </div> </div>  </div>

            {{-- cat modal code end --}}

            {{-- dog modal code start --}}
            <div class="modal fade" tabindex="-1" id="kt_modal_scrollable_3">

              <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                      <div class="modal-title">
                          <button type="button" class="btn-close bt-class" data-bs-dismiss="modal"></button>
                          <img src="Colorful and Bright 3D Elements Printable Learning Module Schedule Planner (2).png"
                              class="img-fluid" alt="...">
                      </div>

                    
                      <div class="modal-body dog_modal_body">
                       
                          <div class="container container-main">
                              <h1 class="modal_dog_name"></h1>



                              <div class="row">
                                  <div class="col sm-4">
                                      <div class="card card-small">
                                          <div class="card-body">

                                            <h5 class="card-title"></h5>

                                            

                                              <p class="card-text text-muted">Age</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col sm-4">
                                      <div class="card card-small">
                                          <div class="card-body">
                                              <h5 class="card-title"></h5>

                                   

                                              <p class="card-text text-muted">Sex</p>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col sm-4">
                                      <div class="card card-small">
                                          <div class="card-body">
                                              <h5 class="card-title">Labrador</h5>
                                              <p class="card-text text-muted">Breed</p>
                                          </div>
                                      </div>
                                  </div>
                              </div>
      
                              <div class="card card-profile-dog">

                                
                                  <div class="card-body">
                                   

                                 

                                      <h4 class="card-title text-center">Parent Profile</h4>
                                      <hr>
                                      <p class="card-text">
                                      <p id="joindog" class="fs-5">Name:</p>

                                      <h5 id="joindog" class = "joindog"></h5>
                                      <br>
                                      <p id="joindog" class="fs-5">Contact Number:</p>
                                      <h5 id="joindog" class = "joindog" ></h5>
                                      <br>
                                      <p id="joindog" class="fs-5">Email:</p>
                                      <h5 id="joindog" class = "joindog"></h5>
                                      </p>
                                  </div>
                                 

                              </div>
                              <div class="card card-profile-dog">
                                  <div class="card-body">
                                      <h4 class="card-title text-center">Vaccinations</h4>
                                      <hr>
                                      <p class="card-text">
                                      <u><h6 class="text-center">6-8th weeks</h6></u>
                                      <p class="fs-6">Distemper: First dose</p>
                                      <p class="fs-6">Parvovirus: First dose</p>
                                      <p class="fs-6">Canine adenovirus: First dose</p>
                                      <u><h6 class="text-center">10-12th weeks</h6></u>
                                      <p class="fs-6">Distemper: Second dose</p>
                                      <p class="fs-6">Parvovirus: Second dose</p>
                                      <p class="fs-6">Canine adenovirus: Second dose</p>
                                      <p class="fs-6">Parainfluenza: First dose</p>
                                      <p class="fs-6">Leptospirosis: First dose</p>
                                      <u><h6 class="text-center">14-16th weeks</h6></u>
                                      <p class="fs-6">Rabies</p>
                                      <u><h6 class="text-center">16-18th weeks</h6></u>
                                      <p class="fs-6">Distemper: Third dose</p>
                                      <p class="fs-6">Parvovirus: Third dose</p>
                                      <p class="fs-6">Canine adenovirus: Third dose</p>
                                      <p class="fs-6">Parainfluenza: Second dose</p>
                                      <p class="fs-6">Leptospirosis: Second dose (if required)</p>
                                      <u><h6 class="text-center">Annually / Every 3 Years</h6></u>
                                      <p class="fs-6">Rabies</p>
                                      <p class="fs-6">Canine parvovirus</p>
                                      <p class="fs-6">Distemper</p>
                                      <p class="fs-6">Canine hepatitis</p>
                                      </p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          
          </div>
            {{-- dog modal code end --}}
           




                <div class="table-responsive-sm">

            <table id="myTable" class="table table-hover nowrap"  style="width:100%">
              <thead>
                <tr>
                  <th>Client Name</th>
                  <th>Phone Number</th>
                  <th>Pet Type</th>
                  <th>Pet Name</th>
                  <th>Vaccination Period</th>
                </tr>
              </thead>
              <tbody>
              @foreach($pet_info as $pet)
                <tr class="clickable-row" data-bs-toggle="modal" data-bs-target="#kt_modal_scrollable_2" >

                      <td>
                        <a href="#">
                          <div class="d-flex align-items-center">
                            <div class="avatar avatar-blue mr-3">EB</div>
          
                            <div class="dataColumnOne">
                              <p class="font-weight-bold mb-0 customerName">{{$pet->customers_fname}}</p>
                              <p class="text-muted mb-0 customerEmail">{{$pet->customers_email}}</p>
                            </div>
                          </div>
                        </a>
                      </td>
                      <td>{{$pet->customers_phone}}</td>
                      <td>Dog</td>
                      {{-- <td>{{$pet->customers_bday}}</td> --}}
                      <td>{{$pet['pet_name']}}</td>
                      {{-- <td>
                        <div class="badge badge-success badge-success-alt">Enabled</div>
                      </td> --}}
                      <td>
                        {{-- <div class="dropdown">
                          <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip" data-placement="top"
                                  title="Actions"></i>
                              </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                            <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> Edit Profile</a>
                            <a class="dropdown-item text-danger" href="#"><i class="bx bxs-trash mr-2"></i> Remove</a>
                          </div>
                        </div> --}}
                        {{ calculateWeeks($pet['pet_bday'])}}
                      </td>
                 </tr>
              @endforeach
            
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

    
<script>
  // Add a click event listener to the table rows
  const rows = document.querySelectorAll('.clickable-row');
  rows.forEach((row) => {
    row.addEventListener('click', function() {
      // Get the pet ID from the clicked row's data attribute
      const petId = this.getAttribute('data-pet-id');

      // Make an AJAX request to fetch the pet details from the server
      fetch(`/pets/${petId}`)
        .then(response => response.json())
        .then(data => {
          // Update the modal's content with the pet details
          const modal = document.getElementById('kt_modal_scrollable_3');
          modal.querySelector('.modal_dog_name').html = "rrr";
          // modal.querySelector('.card-title').textContent = data.gender;
          // modal.querySelector('#joindog').textContent = data.customer.name;
          // modal.querySelector('#joindog').textContent = data.customer.phone;
          // modal.querySelector('#joindog').textContent = data.customer.email;
        })
        .catch(error => console.error(error));
    });
  });
</script>

</body>

</html>