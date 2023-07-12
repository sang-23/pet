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
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Registration Form</title>
</head>
<body>
    <div class="container-fluid mt-5" >
        <header class="text-center">
            <h1>REGISTRATION FORM</h1>
        </header>
    </div>
    <section class="container w-75 mt-3">
        <form action="{{ route('form.submit') }}" method="post" autocomplete="on">
            @csrf
            <fieldset class="border p-5">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputfname">First Name:</label>
                        <input name="customers_fname" type="text" class="form-control custom-input" id="inputfname"
                            placeholder="First Name" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputlname">Last Name:</label>
                        <input name="customers_lname" type="text" class="form-control custom-input" id="inputlname"
                            placeholder="Last Name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputnumber">Contact Number:</label>
                        <input name="customers_phone" type="tel" class="form-control  custom-input" id="inputnumber"
                            placeholder="Contact" minlength="10" maxlength="10" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email:</label>
                        <input name="customers_email" type="email" class="form-control custom-input" id="inputEmail4"
                            placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Address:</label>
                    <input name="customers_address" type="text" class="form-control custom-input" id="inputAddress"
                        placeholder="Address" required>
                </div>
                <div class="form-row">

                    <div class="form-group col-md-4">
                        <label for="inputState">Country:</label>
                        <select name="customers_country" id="country" class="form-control custom-input" required>
                            <option value = "">Select country</option>
                            @foreach($country as $list)
				<option value="{{$list->countrys_id}}">{{$list->country}}</option>
			@endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputCity">State:</label>
                        <select name="customers_state" id="state" class="form-control custom-input" required>
                            <option value = "">Select state</option>
                          
                        </select>
                    </div>
                   
                    <div class="form-group col-md-4">
                        <label for="inputCity">City:</label>
                        <select name="customers_city" id="city" class="form-control custom-input" required>
                            <option value = "" selected>Select city</option>
                          
                        </select>
                    </div>
                </div>
                <hr>
               
                    <div class="form-row">
                        <div class="form-group col-md-8">
                            <label for="inputPname">Pet Name:</label>
                            <input name="pet_name" type="text" class="form-control custom-input" id="inputPname"
                                placeholder="Pet Name" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="dob">Date of Birth:</label><br>
                            <input type="date" id="dob" name="pet_bday" class="form-control custom-input">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputType">Type:</label>
                            <select name="pet_type" id="inputType" class="form-control custom-input" required>
                                <option selected></option>
                                <option>dog</option>
                                <option>cat</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputGender">Gender:</label>
                            <select name="pet_gender" id="inputGender" class="form-control custom-input" required>
                                <option selected></option>
                                <option>male</option>
                                <option>female</option>
                                <option>others</option>

                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputBreed">Breed:</label>
                            <select name="breed_name" id="inputBreed" class="form-control custom-input" required>
                                <option selected></option>
                                <option> Labrador Retriever</option>
                            </select>
                        </div>
                    </div>
                </form>
                <div id="container"></div>
                <template id="template">
                    <div class="form-section">
                        <hr>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label for="inputPname">Pet Name:</label>
                                <input name="pet_name" type="text" class="form-control custom-input" id="inputPname"
                                    placeholder="Pet Name" required>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="dob">Date of Births:</label><br>
                                <input type="date" id="dob" name="pet_bday" class="custom-input form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputType">Type:</label>
                                <select name="pet_type" id="inputType" class="form-control custom-input" required>
                                    <option selected></option>
                                    <option>dog</option>
                                    <option>cat</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputGender">Gender:</label>
                                <select name="pet_gender" id="inputGender" class="form-control custom-input" required>
                                    <option selected></option>
                                    <option>male</option>
                                    <option>female</option>
                                    <option>others</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputBreed">Breed:</label>
                                <select name="breed_name" id="inputBreed" class="form-control custom-input" required>
                                    <option selected></option>
                                    <option> Labrador Retriever</option>
                                    <option value="">German Shepherd</option>
                                    <option value="">Golden Retriever</option>
                                    <option value="">Dachshund</option>
                                    <option value="">Beagle</option>
                                    <option value="">Boxer</option>
                                    <option value="">Tibetan Mastif</option>
                                    <option value="">Pug</option>
                                    <option value="">Rottweiler</option>
                                    <option value="">Doberman</option>
                                    <option value="">Great Dane</option>
                                    <option value="">Dalmatian</option>
                                    <option value="">English Cocker Spaniel
                                    </option>
                                    <option value="">Indian Spitz</option>
                                    <option value="">Bengal</option>
                                    <option value="">Persian:</option>
                                    <option value="">Spotted ( Indian Billi )</option>
                                    <option value="">Bombay:</option>
                                    <option value="">Himalayan:</option>
                                    <option value="">Exotic</option>
                                    <option value="">Maine Coon:</option>
                                    <option value="">Others</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn btn-danger del-btn-style float-right ml-2" onclick="removeFormSection(this)">Delete</button>
                </template>
                <div class="float-right">
                    <button class="btn add-btn-style" onclick="addFormSection()">Add Pet</button>
                </div>
                <br>
                <div class="form-group">
                    <div class="form-check checkbox">
                        <input name="checkbox" class="form-check-input" type="checkbox" id="gridCheck" required>
                        <label class="form-check-label" for="gridCheck">
                            I agree to get notified.
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-dark sub-btn-style">Submit</button>

            </fieldset>
        </form>
    </section>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>



jQuery(document).ready(function(){
			jQuery('#country').change(function(){
              
				let cid=jQuery(this).val();
				jQuery('#city').html('<option value="">Select City</option>')
				jQuery.ajax({
					url:'/getState',
					type:'post',
					data:'cid='+cid+'&_token={{csrf_token()}}',
					success:function(result){
						jQuery('#state').html(result)
					}
				});
			});
			
			jQuery('#state').change(function(){
				let sid=jQuery(this).val();
				jQuery.ajax({
					url:'/getCity',
					type:'post',
					data:'sid='+sid+'&_token={{csrf_token()}}',
					success:function(result){
						jQuery('#city').html(result)
					}
				});
			});
			
		});
</script>
</body>
</html>














