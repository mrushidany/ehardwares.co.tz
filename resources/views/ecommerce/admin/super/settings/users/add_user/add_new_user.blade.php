@extends('ecommerce.admin.super.main')

@section('content')
    <div class="col-lg-6 col-xl-12 col-xxl-6 h-100">
        <div class="d-flex mb-4">
            <span class="fa-stack me-2 ms-n1">
                <i class="fas fa-circle fa-stack-2x text-300"></i>
                <i class="fa-inverse fa-stack-1x text-primary fas fa-check-double"></i>
            </span>
            <div class="col">
                <h5 class="mb-0 text-primary position-relative">
                    <span class="bg-200 dark__bg-1100 pe-3">Add new user details</span>
                    <span class="border position-absolute top-50 translate-middle-y w-100 start-0 z-index--1"></span>
                </h5>
            </div>
        </div>
        <div class="card theme-wizard h-100 mb-5">
            <div class="card-header bg-light pt-3 pb-2">
                <ul class="nav justify-content-between nav-wizard">
                    <li class="nav-item">
                        <a class="nav-link active fw-semi-bold" href="#bootstrap-wizard-validation-tab1" data-bs-toggle="tab" data-wizard-step="data-wizard-step">
                             <span class="nav-item-circle-parent">
                                 <span class="nav-item-circle">
                                    <span class="fas fa-lock"></span>
                                </span>
                            </span>
                            <span class="d-none d-md-block mt-1 fs--1">Account</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semi-bold" href="#bootstrap-wizard-validation-tab2" data-bs-toggle="tab" data-wizard-step="data-wizard-step">
                            <span class="nav-item-circle-parent">
                                <span class="nav-item-circle">
                                    <span class="fas fa-user"></span>
                                </span>
                            </span>
                            <span class="d-none d-md-block mt-1 fs--1">Roles and Priviledges</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semi-bold" href="#bootstrap-wizard-validation-tab4" data-bs-toggle="tab" data-wizard-step="data-wizard-step">
                            <span class="nav-item-circle-parent">
                                <span class="nav-item-circle">
                                    <span class="fas fa-thumbs-up"></span>
                                </span>
                            </span>
                            <span class="d-none d-md-block mt-1 fs--1">Done</span>
                        </a>
                    </li>
                </ul>
            </div>
        <div class="card-body py-4" id="wizard-controller">
            <div class="tab-content">
                <div class="tab-pane active px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab1" id="bootstrap-wizard-validation-tab1">
                    <form class="needs-validation" novalidate="novalidate">
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="First Name">First Name</label>
                                    <input class="form-control" type="text" name="first_name" placeholder="John" id="bootstrap-wizard-validation-wizard-name">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="Last Name">Last Name</label>
                                    <input class="form-control" type="text" name="last_name" placeholder="Smith" id="bootstrap-wizard-validation-wizard-name">
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="Email">Email*</label>
                                    <input class="form-control" type="email" name="email" placeholder="Email address" pattern="^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-])+.)+([a-zA-Z0-9]{2,4})+$" required="required" id="bootstrap-wizard-validation-wizard-email" data-wizard-validate-email="true">
                                    <div class="invalid-feedback">You must add email</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="Phone Number">Phone Number*</label>
                                    <input class="form-control" type="text" name="phone_number" placeholder="0718999000" required="required"  data-wizard-validate-email="true">
                                    <div class="invalid-feedback">You must add phone number</div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="Password">Password*</label>
                                    <input class="form-control" type="password" name="password" placeholder="Password" required="required" id="bootstrap-wizard-validation-wizard-password" data-wizard-validate-password="true">
                                    <div class="invalid-feedback">Please enter password</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-3">
                                    <label class="form-label" for="Confirm Password">Confirm Password*</label>
                                    <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password" required="required" id="bootstrap-wizard-validation-wizard-confirm-password" data-wizard-validate-confirm-password="true">
                                    <div class="invalid-feedback">Passwords need to match</div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
          <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab2" id="bootstrap-wizard-validation-tab2">
            <form>
              <div class="mb-3">
                <div class="row dz-clickable" data-dropzone="data-dropzone" data-options="{&quot;maxFiles&quot;:1,&quot;data&quot;:[{&quot;name&quot;:&quot;avatar.png&quot;,&quot;size&quot;:&quot;54kb&quot;,&quot;url&quot;:&quot;../../assets/img/team&quot;}]}">

                  <div class="col-md-auto">
                    <div class="dz-preview dz-preview-single"><div class="dz-preview-cover d-flex align-items-center justify-content-center mb-3 mb-md-0 dz-image-preview">                                  <div class="avatar avatar-4xl"><img class="rounded-circle" src="../../assets/img/team/avatar.png" alt="avatar.png" data-dz-thumbnail="data-dz-thumbnail"></div>                                  <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""></span></div>                                </div></div>
                  </div>
                  <div class="col-md">
                    <div class="dz-message dropzone-area px-2 py-3" data-dz-message="data-dz-message">
                      <div class="text-center"><img class="me-2" src="../../assets/img/icons/cloud-upload.svg" width="25" alt="">Upload your profile picture<p class="mb-0 fs--1 text-400">Upload a 300x300 jpg image with <br>a maximum size of 400KB</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mb-3"><label class="form-label" for="bootstrap-wizard-validation-gender">Gender</label><select class="form-select" name="gender" id="bootstrap-wizard-validation-gender">
                  <option value="">Select your gender ...</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select></div>
              <div class="mb-3"><label class="form-label" for="bootstrap-wizard-validation-wizard-phone">Phone</label><input class="form-control" type="text" name="phone" placeholder="Phone" id="bootstrap-wizard-validation-wizard-phone"></div>
              <div class="mb-3"><label class="form-label" for="bootstrap-wizard-validation-wizard-datepicker">Date of Birth</label><input class="form-control datetimepicker flatpickr-input" type="text" placeholder="d/m/y" data-options="{&quot;dateFormat&quot;:&quot;d/m/y&quot;,&quot;disableMobile&quot;:true}" id="bootstrap-wizard-validation-wizard-datepicker" readonly="readonly"></div>
              <div class="mb-3"><label class="form-label" for="bootstrap-wizard-validation-wizard-address">Address</label><textarea class="form-control" rows="4" id="bootstrap-wizard-validation-wizard-address"></textarea></div>
            </form>
          </div>
          <div class="tab-pane px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab3" id="bootstrap-wizard-validation-tab3">
            <form class="form-validation">
              <div class="row g-2">
                <div class="col">
                  <div class="mb-3"><label class="form-label" for="bootstrap-wizard-validation-card-number">Card Number</label><input class="form-control" placeholder="XXXX XXXX XXXX XXXX" type="text" id="bootstrap-wizard-validation-card-number"></div>
                </div>
                <div class="col">
                  <div class="mb-3"><label class="form-label" for="bootstrap-wizard-validation-card-name">Name on Card</label><input class="form-control" placeholder="John Doe" name="cardName" type="text" id="bootstrap-wizard-validation-card-name"></div>
                </div>
              </div>
              <div class="row g-2">
                <div class="col-6">
                  <div class="mb-3"><label class="form-label" for="bootstrap-wizard-validation-card-holder-country">Country</label><select class="form-select" name="customSelectCountry" id="bootstrap-wizard-validation-card-holder-country">
                      <option value="">Select your country ...</option>
                      <option value="Afghanistan">Afghanistan</option>
                      <option value="Albania">Albania</option>
                      <option value="Algeria">Algeria</option>
                      <option value="American Samoa">American Samoa</option>
                      <option value="Andorra">Andorra</option>
                      <option value="Angola">Angola</option>
                      <option value="Anguilla">Anguilla</option>
                      <option value="Antarctica">Antarctica</option>
                      <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Armenia">Armenia</option>
                      <option value="Aruba">Aruba</option>
                      <option value="Australia">Australia</option>
                      <option value="Austria">Austria</option>
                      <option value="Azerbaijan">Azerbaijan</option>
                      <option value="Bahamas">Bahamas</option>
                      <option value="Bahrain">Bahrain</option>
                      <option value="Bangladesh">Bangladesh</option>
                      <option value="Barbados">Barbados</option>
                      <option value="Belarus">Belarus</option>
                      <option value="Belgium">Belgium</option>
                      <option value="Belize">Belize</option>
                      <option value="Benin">Benin</option>
                      <option value="Bermuda">Bermuda</option>
                      <option value="Bhutan">Bhutan</option>
                      <option value="Bolivia">Bolivia</option>
                      <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                      <option value="Botswana">Botswana</option>
                      <option value="Bouvet Island">Bouvet Island</option>
                      <option value="Brazil">Brazil</option>
                      <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                      <option value="Brunei Darussalam">Brunei Darussalam</option>
                      <option value="Bulgaria">Bulgaria</option>
                      <option value="Burkina Faso">Burkina Faso</option>
                      <option value="Burundi">Burundi</option>
                      <option value="Cambodia">Cambodia</option>
                      <option value="Cameroon">Cameroon</option>
                      <option value="Canada">Canada</option>
                      <option value="Cape Verde">Cape Verde</option>
                      <option value="Cayman Islands">Cayman Islands</option>
                      <option value="Central African Republic">Central African Republic</option>
                      <option value="Chad">Chad</option>
                      <option value="Chile">Chile</option>
                      <option value="China">China</option>
                      <option value="Christmas Island">Christmas Island</option>
                      <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                      <option value="Colombia">Colombia</option>
                      <option value="Comoros">Comoros</option>
                      <option value="Congo">Congo</option>
                      <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                      <option value="Cook Islands">Cook Islands</option>
                      <option value="Costa Rica">Costa Rica</option>
                      <option value="Cote d'Ivoire">Cote d'Ivoire</option>
                      <option value="Croatia (Hrvatska)">Croatia (Hrvatska)</option>
                      <option value="Cuba">Cuba</option>
                      <option value="Cyprus">Cyprus</option>
                      <option value="Czech Republic">Czech Republic</option>
                      <option value="Denmark">Denmark</option>
                      <option value="Djibouti">Djibouti</option>
                      <option value="Dominica">Dominica</option>
                      <option value="Dominican Republic">Dominican Republic</option>
                      <option value="East Timor">East Timor</option>
                      <option value="Ecuador">Ecuador</option>
                      <option value="Egypt">Egypt</option>
                      <option value="El Salvador">El Salvador</option>
                      <option value="Equatorial Guinea">Equatorial Guinea</option>
                      <option value="Eritrea">Eritrea</option>
                      <option value="Estonia">Estonia</option>
                      <option value="Ethiopia">Ethiopia</option>
                      <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                      <option value="Faroe Islands">Faroe Islands</option>
                      <option value="Fiji">Fiji</option>
                      <option value="Finland">Finland</option>
                      <option value="France">France</option>
                      <option value="France Metropolitan">France Metropolitan</option>
                      <option value="French Guiana">French Guiana</option>
                      <option value="French Polynesia">French Polynesia</option>
                      <option value="French Southern Territories">French Southern Territories</option>
                      <option value="Gabon">Gabon</option>
                      <option value="Gambia">Gambia</option>
                      <option value="Georgia">Georgia</option>
                      <option value="Germany">Germany</option>
                      <option value="Ghana">Ghana</option>
                      <option value="Gibraltar">Gibraltar</option>
                      <option value="Greece">Greece</option>
                      <option value="Greenland">Greenland</option>
                      <option value="Grenada">Grenada</option>
                      <option value="Guadeloupe">Guadeloupe</option>
                      <option value="Guam">Guam</option>
                      <option value="Guatemala">Guatemala</option>
                      <option value="Guinea">Guinea</option>
                      <option value="Guinea-Bissau">Guinea-Bissau</option>
                      <option value="Guyana">Guyana</option>
                      <option value="Haiti">Haiti</option>
                      <option value="Heard and Mc Donald Islands">Heard and Mc Donald Islands</option>
                      <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                      <option value="Honduras">Honduras</option>
                      <option value="Hong Kong">Hong Kong</option>
                      <option value="Hungary">Hungary</option>
                      <option value="Iceland">Iceland</option>
                      <option value="India">India</option>
                      <option value="Indonesia">Indonesia</option>
                      <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
                      <option value="Iraq">Iraq</option>
                      <option value="Ireland">Ireland</option>
                      <option value="Israel">Israel</option>
                      <option value="Italy">Italy</option>
                      <option value="Jamaica">Jamaica</option>
                      <option value="Japan">Japan</option>
                      <option value="Jordan">Jordan</option>
                      <option value="Kazakhstan">Kazakhstan</option>
                      <option value="Kenya">Kenya</option>
                      <option value="Kiribati">Kiribati</option>
                      <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                      <option value="Korea, Republic of">Korea, Republic of</option>
                      <option value="Kuwait">Kuwait</option>
                      <option value="Kyrgyzstan">Kyrgyzstan</option>
                      <option value="Lao, People's Democratic Republic">Lao, People's Democratic Republic</option>
                      <option value="Latvia">Latvia</option>
                      <option value="Lebanon">Lebanon</option>
                      <option value="Lesotho">Lesotho</option>
                      <option value="Liberia">Liberia</option>
                      <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                      <option value="Liechtenstein">Liechtenstein</option>
                      <option value="Lithuania">Lithuania</option>
                      <option value="Luxembourg">Luxembourg</option>
                      <option value="Macau">Macau</option>
                      <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                      <option value="Madagascar">Madagascar</option>
                      <option value="Malawi">Malawi</option>
                      <option value="Malaysia">Malaysia</option>
                      <option value="Maldives">Maldives</option>
                      <option value="Mali">Mali</option>
                      <option value="Malta">Malta</option>
                      <option value="Marshall Islands">Marshall Islands</option>
                      <option value="Martinique">Martinique</option>
                      <option value="Mauritania">Mauritania</option>
                      <option value="Mauritius">Mauritius</option>
                      <option value="Mayotte">Mayotte</option>
                      <option value="Mexico">Mexico</option>
                      <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                      <option value="Moldova, Republic of">Moldova, Republic of</option>
                      <option value="Monaco">Monaco</option>
                      <option value="Mongolia">Mongolia</option>
                      <option value="Montserrat">Montserrat</option>
                      <option value="Morocco">Morocco</option>
                      <option value="Mozambique">Mozambique</option>
                      <option value="Myanmar">Myanmar</option>
                      <option value="Namibia">Namibia</option>
                      <option value="Nauru">Nauru</option>
                      <option value="Nepal">Nepal</option>
                      <option value="Netherlands">Netherlands</option>
                      <option value="Netherlands Antilles">Netherlands Antilles</option>
                      <option value="New Caledonia">New Caledonia</option>
                      <option value="New Zealand">New Zealand</option>
                      <option value="Nicaragua">Nicaragua</option>
                      <option value="Niger">Niger</option>
                      <option value="Nigeria">Nigeria</option>
                      <option value="Niue">Niue</option>
                      <option value="Norfolk Island">Norfolk Island</option>
                      <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                      <option value="Norway">Norway</option>
                      <option value="Oman">Oman</option>
                      <option value="Pakistan">Pakistan</option>
                      <option value="Palau">Palau</option>
                      <option value="Panama">Panama</option>
                      <option value="Papua New Guinea">Papua New Guinea</option>
                      <option value="Paraguay">Paraguay</option>
                      <option value="Peru">Peru</option>
                      <option value="Philippines">Philippines</option>
                      <option value="Pitcairn">Pitcairn</option>
                      <option value="Poland">Poland</option>
                      <option value="Portugal">Portugal</option>
                      <option value="Puerto Rico">Puerto Rico</option>
                      <option value="Qatar">Qatar</option>
                      <option value="Reunion">Reunion</option>
                      <option value="Romania">Romania</option>
                      <option value="Russian Federation">Russian Federation</option>
                      <option value="Rwanda">Rwanda</option>
                      <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                      <option value="Saint Lucia">Saint Lucia</option>
                      <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                      <option value="Samoa">Samoa</option>
                      <option value="San Marino">San Marino</option>
                      <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                      <option value="Saudi Arabia">Saudi Arabia</option>
                      <option value="Senegal">Senegal</option>
                      <option value="Seychelles">Seychelles</option>
                      <option value="Sierra Leone">Sierra Leone</option>
                      <option value="Singapore">Singapore</option>
                      <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
                      <option value="Slovenia">Slovenia</option>
                      <option value="Solomon Islands">Solomon Islands</option>
                      <option value="Somalia">Somalia</option>
                      <option value="South Africa">South Africa</option>
                      <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                      <option value="Spain">Spain</option>
                      <option value="Sri Lanka">Sri Lanka</option>
                      <option value="St. Helena">St. Helena</option>
                      <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
                      <option value="Sudan">Sudan</option>
                      <option value="Suriname">Suriname</option>
                      <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
                      <option value="Swaziland">Swaziland</option>
                      <option value="Sweden">Sweden</option>
                      <option value="Switzerland">Switzerland</option>
                      <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                      <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                      <option value="Tajikistan">Tajikistan</option>
                      <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                      <option value="Thailand">Thailand</option>
                      <option value="Togo">Togo</option>
                      <option value="Tokelau">Tokelau</option>
                      <option value="Tonga">Tonga</option>
                      <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                      <option value="Tunisia">Tunisia</option>
                      <option value="Turkey">Turkey</option>
                      <option value="Turkmenistan">Turkmenistan</option>
                      <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                      <option value="Tuvalu">Tuvalu</option>
                      <option value="Uganda">Uganda</option>
                      <option value="Ukraine">Ukraine</option>
                      <option value="United Arab Emirates">United Arab Emirates</option>
                      <option value="United Kingdom">United Kingdom</option>
                      <option value="United States">United States</option>
                      <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                      <option value="Uruguay">Uruguay</option>
                      <option value="Uzbekistan">Uzbekistan</option>
                      <option value="Vanuatu">Vanuatu</option>
                      <option value="Venezuela">Venezuela</option>
                      <option value="Vietnam">Vietnam</option>
                      <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                      <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
                      <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
                      <option value="Western Sahara">Western Sahara</option>
                      <option value="Yemen">Yemen</option>
                      <option value="Yugoslavia">Yugoslavia</option>
                      <option value="Zambia">Zambia</option>
                      <option value="Zimbabwe">Zimbabwe</option>
                    </select></div>
                </div>
                <div class="col-6">
                  <div class="mb-3"><label class="form-label" for="bootstrap-wizard-validation-card-holder-zip-code">Zip Code</label><input class="form-control" placeholder="1234" name="zipCode" type="text" id="bootstrap-wizard-validation-card-holder-zip-code"></div>
                </div>
                <div class="col-6">
                  <div class="form-group mb-0"><label class="form-label" for="bootstrap-wizard-validation-card-exp-date">Exp Date</label><input class="form-control" placeholder="15/2024" name="expDate" type="text" id="bootstrap-wizard-validation-card-exp-date"></div>
                </div>
                <div class="col-6">
                  <div class="form-group mb-0"><label class="form-label" for="bootstrap-wizard-validation-card-cvv">CVV</label><span class="ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Card verification value" aria-label="Card verification value"><svg class="svg-inline--fa fa-question-circle fa-w-16" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fa fa-question-circle"></span> Font Awesome fontawesome.com --></span><input class="form-control" placeholder="123" name="cvv" maxlength="3" pattern="[0-9]{3}" type="text" id="bootstrap-wizard-validation-card-cvv"></div>
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane text-center px-sm-3 px-md-5" role="tabpanel" aria-labelledby="bootstrap-wizard-validation-tab4" id="bootstrap-wizard-validation-tab4">
            <div class="wizard-lottie-wrapper">
              <div class="lottie wizard-lottie mx-auto my-3" data-options="{&quot;path&quot;:&quot;../../assets/img/animated-icons/celebration.json&quot;}"></div>
            </div>
            <h4 class="mb-1">Your account is all set!</h4>
            <p>Now you can access to your account</p><a class="btn btn-primary px-5 my-3" href="wizard.html">Start Over</a>
          </div>
        </div>
      </div>
      <div class="card-footer bg-light">
        <div class="px-sm-3 px-md-5">
          <ul class="pager wizard list-inline mb-0">
            <li class="previous"><button class="btn btn-link ps-0 d-none" type="button"><svg class="svg-inline--fa fa-chevron-left fa-w-10 me-2" data-fa-transform="shrink-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5em;"><g transform="translate(160 256)"><g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z" transform="translate(-160 -256)"></path></g></g></svg><!-- <span class="fas fa-chevron-left me-2" data-fa-transform="shrink-3"></span> Font Awesome fontawesome.com -->Prev</button></li>
            <li class="next"><button class="btn btn-primary px-5 px-sm-6" type="submit">Next<svg class="svg-inline--fa fa-chevron-right fa-w-10 ms-2" data-fa-transform="shrink-3" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="" style="transform-origin: 0.3125em 0.5em;"><g transform="translate(160 256)"><g transform="translate(0, 0)  scale(0.8125, 0.8125)  rotate(0 0 0)"><path fill="currentColor" d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z" transform="translate(-160 -256)"></path></g></g></svg><!-- <span class="fas fa-chevron-right ms-2" data-fa-transform="shrink-3"> </span> Font Awesome fontawesome.com --></button></li>
          </ul>
        </div>
      </div>
    </div>
  </div>



@endsection
