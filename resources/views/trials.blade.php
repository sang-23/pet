<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Dashboard</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="NishthaStyles.css">
    <link href="{{ URL::asset('assets/css/NishthaStyles.css') }}"  rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/NishthaScript.js') }}"></script>

   <script>
    
// Example usage
var startingDate = new Date("2023-01-01"); // Provide your starting date here
checkWeekStatus(startingDate);

     </script>
</head>

<body>



    <header>
        <nav>
            <ul class="navbarList d-flex justify-content-between ">
                <div>
                <li><h1 class="WebsiteName">PettyGraph</h1></li>
            </div>
            <div class="d-flex">
                <li>
                    <img src="https://st3.depositphotos.com/1017228/18878/i/450/depositphotos_188781580-stock-photo-handsome-cheerful-young-man-standing.jpg" alt="avatar" width="45px" height="45px" class="UserAvatar mx-3">
                   </li>
                   <li> <b><span class="display-6">Welcome,</span></b><span class="displayName display-6">Adam</span></li>
                </div>
            </ul>
        </nav>
    </header>
    <section class="sec1">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="https://img.freepik.com/free-vector/glowing-blue-cuircuit-lines-diagram_1017-33018.jpg?w=1380&t=st=1688540926~exp=1688541526~hmac=618956671fbbe130b49657cb1222cacd8dd21e3a78157287728121a83db98d2b" class="d-block w-100 CarouselPoster" alt="...">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="https://static.vecteezy.com/system/resources/previews/001/851/269/original/luxury-business-banner-background-free-vector.jpg" class="d-block w-100 CarouselPoster" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://as1.ftcdn.net/v2/jpg/01/64/56/20/1000_F_164562000_AuB4fwJAm5KWP9KxpYvXqH86gVDpnRho.jpg" class="d-block w-100 CarouselPoster" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section class="sec2">
        <div class="container">
            <div class="row py-5">
              <div class="col-lg-8">
                <div class="addCustomerModal">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add Customer</button>
                   
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
               
                <table id="myTable" class="table table-hover responsive nowrap" style="width:100%">
                  <thead>
                    <tr>
                      <th>Client Name</th>
                      <th>Phone Number</th>
                      {{-- <th>Profession</th> --}}
                      <th>Pet Type</th>
                      {{-- <th>Date of Birth</th> --}}
                      <th>Pet Name</th>
                      {{-- <th>App Access</th> --}}
                      <th>Vaccination Period</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($pet_info as $pet)
                  
                    <tr>
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
              <div class="col-lg-4">
                <div class="wrap">   
                    <h2>Horizontal Bar Chart</h2>
                    <div class="barGraph">
                      <ul class="graph">
                        <span class="graph-barBack">
                          <li class="graph-bar" data-value="28.5">
                            <span class="graph-legend">Mon</span>
                          </li>
                        </span>  
                  
                        <span class="graph-barBack">    
                          <li class="graph-bar" data-value="85">
                            <span class="graph-legend">Tue</span>
                          </li>
                        </span>
                  
                        <span class="graph-barBack">    
                          <li class="graph-bar" data-value="70">
                            <span class="graph-legend">Wed</span>
                          </li>
                        </span>
                  
                        <span class="graph-barBack">    
                          <li class="graph-bar" data-value="50">
                            <span class="graph-legend">Thu</span>
                          </li>
                        </span>
                  
                        <span class="graph-barBack">    
                          <li class="graph-bar" data-value="68">
                            <span class="graph-legend">Fri</span>
                          </li>
                        </span>      
                      </ul>
                    </div>
                </div>

              </div>
            </div>
          </div>
          
          {{-- <div class="container text-center">
            <div class="row py-5">
              <div class="col-12">
                <h6 class="small text-danger">Currently I'm just experimenting with this stuff, so there might be lots of redundant CSS.</h6>
              </div>
            </div>
          </div> --}}
    </section>
 
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script src="{{asset('NishthaScript.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
   
</body>
</html>