<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="vendor.css">
    
    <title>Profile Setup</title>
</head>

<body>
    <div class="container-fluid">
        <header class="text-center">
            <h1>Set Up Your Profile</h1>
        </header>
    </div>
    <section class="container">
        <form action="{{ route('venderform.submit') }}" method="post" autocomplete="on">
            @csrf
            <fieldset class="border p-5">
                <div class="form-group col-md-12">
                    <div class="personal-image">
                        <label class="label">
                            <input type="file" name="vendors_avatar"/>
                            <figure class="personal-figure">
                                <img src="1000_F_499624495_ykJ51H6S225ytNBbpVzIg6xPC1UE98a2.jpg" class="personal-avatar"
                                    alt="avatar">
                                <figcaption class="personal-figcaption">
                                    <img
                                        src="https://raw.githubusercontent.com/ThiagoLuizNunes/angular-boilerplate/master/src/assets/imgs/camera-white.png">
                                </figcaption>
                            </figure>
                        </label>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputfname">First Name:</label>
                        <input name="vendors_fname" type="text" class="form-control custom-input" id="inputfname"
                            placeholder="First Name" value="{{ $user->vendors ? $user->vendors->vendors_fname : '' }}" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputlname">Last Name:</label>
                        <input name="vendors_lname" type="text" class="form-control custom-input" id="inputlname"
                            placeholder="Last Name" value="{{ $user->vendors ? $user->vendors->vendors_lname : '' }}" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputnumber">Contact Number:</label>
                        <input name="vendors_phone" type="number" class="form-control  custom-input" id="inputnumber"
                            placeholder="Contact" value="{{ $user->vendors ? $user->vendors->vendors_phone : '' }}"required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email:</label>
                        <input type="email" class="form-control custom-input" id="email"
                            placeholder="Email" name = "email" value = "{{ $user->email}}" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Shop Address:</label>
                    <input  type="text" class="form-control custom-input" id="inputAddress"
                        placeholder="Shop Address" name = "vendors_address" value="{{ $user->vendors ? $user->vendors->vendors_address : '' }}"required>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputCity">City:</label>
                        <select  id="inputCity" class="form-control custom-input" name = "vendors_city" value="{{ $user->vendors ? $user->vendors->vendors_city : '' }}" required>
                            <option selected></option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State:</label>
                        <select name="vendors_state" id="inputState" class="form-control custom-input" value="{{ $user->vendors ? $user->vendors->vendors_state : '' }}" required>
                            <option selected></option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputPassword">Password</label>
                        <input type = "password" name="password" id="password" class="form-control custom-input" required value = "{{ $user->password }}"/>
                            
                    </div>
                   
                </div>
                <button type="submit" class="btn btn-dark">Submit</button>
            </fieldset>
        </form>
    </section>
    <script src="vendor.js"></script>
</body>

</html>