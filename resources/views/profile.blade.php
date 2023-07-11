
<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="profileStyles.css">
</head>
<body>
   
    <nav id="primary_nav">
        <a href="#" id="mobile_nav">&#9776;</a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
           
            <form action="{{ route('profile.update') }}" method = "post">
              @csrf
              @method('PUT')

        <section class="sec101 w-75 m-auto ">
            <div class="container">
                <div class="row">
              
                  <div class="col-md-8 offset-md-2 pull-md-2">
                        <h1 class="text-start my-4">Account Settings</h1>
                        
                           <div class="row my-4">
                             <div class="col">
                                {{-- <img src="https://img.freepik.com/free-photo/happiness-wellbeing-confidence-concept-cheerful-attractive-african-american-woman-curly-haircut-cross-arms-chest-self-assured-powerful-pose-smiling-determined-wear-yellow-sweater_176420-35063.jpg" class="card-img-top border border-dark" alt="Vendor Avatar" > --}}
                                <div class="containerr">
                                    <div class="profile">
                                      <img id="blah"src="https://images.unsplash.com/photo-1532021361900-b5c5f49a5679?ixlib=rb-0.3.5&s=00217d9ff796b7d5bae62d2c9dc5994b&auto=format&fit=crop&w=500&q=60"> 
                                    <div class="overlay">
                                      <input type="file" name="vendors_avatar"/>
                                      <p>Change Picture</p>
                                      </div>
                                    </div>
                                    
                                  </div>
                                    
                                    
                            </div>
                           <div class="col">
                            <div class="col">
                            <label for="VendorFirstName" class="form-label darkblue boldw">First Name (required)</label>
                            <input type="text" class="form-control gray border-0" name="vendors_fname"  id="vendors_fname" value = "{{ $vendors->vendors_fname }}"
                              style="background-color: #F0F0F0;" >
                            </div>
                            <div class="col ">
                          <label for="vendors_lname" class="form-label darkblue boldw">Last Name (required)</label>
                          <input type="text" class="form-control  gray border-0" name="vendors_lname" id="vendors_lname" value = "{{ $vendors->vendors_lname }}" placeholder="Last Name: Alwyn"
                            style="background-color: #F0F0F0;">
                        </div>
                        </div>
                      </div>
                      <div class="row my-4 ">
                        <div class="col">
                          <label for="VendorUsername" class="form-label darkblue boldw">Username</label>
                          <input type="text" class="form-control h-75 gray border-0" name="name" id="name" value = "{{ $user->name }}" placeholder="Your username is displayed here"
                            style="background-color: #F0F0F0;">
                        </div>
                      </div>
                      
                      <div class="row my-4 ">
                        <div class="col">
                          <label for="VendorEmail" class="form-label darkblue boldw"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-at-fill mx-2" viewBox="0 0 16 16">
                            <path d="M2 2A2 2 0 0 0 .05 3.555L8 8.414l7.95-4.859A2 2 0 0 0 14 2H2Zm-2 9.8V4.698l5.803 3.546L0 11.801Zm6.761-2.97-6.57 4.026A2 2 0 0 0 2 14h6.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.606-3.446l-.367-.225L8 9.586l-1.239-.757ZM16 9.671V4.697l-5.803 3.546.338.208A4.482 4.482 0 0 1 12.5 8c1.414 0 2.675.652 3.5 1.671Z"/>
                            <path d="M15.834 12.244c0 1.168-.577 2.025-1.587 2.025-.503 0-1.002-.228-1.12-.648h-.043c-.118.416-.543.643-1.015.643-.77 0-1.259-.542-1.259-1.434v-.529c0-.844.481-1.4 1.26-1.4.585 0 .87.333.953.63h.03v-.568h.905v2.19c0 .272.18.42.411.42.315 0 .639-.415.639-1.39v-.118c0-1.277-.95-2.326-2.484-2.326h-.04c-1.582 0-2.64 1.067-2.64 2.724v.157c0 1.867 1.237 2.654 2.57 2.654h.045c.507 0 .935-.07 1.18-.18v.731c-.219.1-.643.175-1.237.175h-.044C10.438 16 9 14.82 9 12.646v-.214C9 10.36 10.421 9 12.485 9h.035c2.12 0 3.314 1.43 3.314 3.034v.21Zm-4.04.21v.227c0 .586.227.8.581.8.31 0 .564-.17.564-.743v-.367c0-.516-.275-.708-.572-.708-.346 0-.573.245-.573.791Z"/>
                          </svg> Email</label>
                          <input type="email" class="form-control h-75 gray border-0" name="email" id="email" value = "{{ $user->email }}" placeholder="Email"
                            style="background-color: #F0F0F0;">
                        </div>
                        <div class="col">
                          <label for="VendorContactNo" class="form-label darkblue boldw mx-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                          </svg> Contact No.</label>
                          <input type="tel" class="form-control h-75 gray border-0" name="vendors_phone" id="vendors_phone"
                          value = "{{ $vendors->vendors_phone  }}" placeholder="Enter contact no." style="background-color: #F0F0F0;">
                        </div>
                      </div>
                      <div class="row my-4 ">
                        <div class="col">
                          <label for="VendorAddress" class="form-label darkblue boldw">Address</label>
                          <input type="text" class="form-control h-75 gray border-0" name="vendors_address" id="vendors_address" value = "{{ $vendors->vendors_address }}"placeholder="Your Address"
                            style="background-color: #F0F0F0;">
                        </div>
                        <div class="col">
                            <label for="VendorCity" class="form-label darkblue boldw">City</label>
                            <select class="form-select h-75 gray border-0" value = "{{  $vendors->vendors_city }}" name="vendors_city" id = "vendors_city" aria-label="Default select example"
                            style="background-color: #F0F0F0;">
                            <option value="yuuu">......</option>
                            </select>
                        </div>
                      </div>
                      <div class="row my-4 ">
                        
                        <div class="col">
                          <label for="VendorState" class="form-label darkblue boldw">State</label>
                          <select class="form-select h-75 gray border-0" name="vendors_state" id = "vendors_state" value = "{{ $vendors->vendors_state  }}" aria-label="Default select example"
                             style="background-color: #F0F0F0;">
                             <option value="uyyuu">......</option>
                            </select>
                        </div>
                      </div>
                      <div class="row my-4">
                        <div class="col">
                        <label for="VendorCurrentPassword" class="form-label darkblue boldw">Enter Current Password</label>
                        <input type="password" class="form-control h-75 gray border-0" name="password" value = "{{ $user->password }}"id="VendorCurrentPassword" 
                                       style="background-color: #F0F0F0;">
                                    </div>
                                    <div class="col">

                                    </div>
                      </div>
                     

                     

                  </div>
                </div>
              </div>
        
          {{-- <h1>Classy Navbar</h1>
          <h3>Stay classy, friends.</h3> --}}

        </section>

        <section class="sec102 text-center">
            <br>
            <input type="checkbox" id="agreeToT&C" name="" value="">
                      <label for="agreeToT&C"> I agree to all terms and conditions </label>
                      <br>
                      <br>
                      <button type="submit" class="submit btn btn-primary">Submit</button>

        </section>
      </form>
        <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="{{asset('profileScript.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>