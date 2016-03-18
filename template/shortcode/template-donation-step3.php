<div>
    <?php
            /*
             *  Check request for new user
             */
        if(!isset($_GET['donator'])){
            /*
             *  Login Fields
             */
    ?>
	<div class="main-section">	
		<h3 class="heading">Returning Participant or User Login</h3>
		<div class="text-define">
			<span>New User</span>
			<form action="" method="get">
				<span class="nevigation-btn">
				<?php get_all_query_fields();?>
				<input type="hidden" name="donator" value="new" />
				<input type="submit" name="" value="Join as a New Participant" />
				</span>
			</form>
			<!--a class="yellowbtn margin-left-10" href="?step=3&cname=<?php echo $_GET['cname']?>&cgoal=<?php echo $_GET['cgoal']?>&donator=new">Join as a New Participant</a-->
		</div>
		<div class="text-box-parti">
			<span class="subheading">Returning User</span>
			<div class="form-input">
				<label><sup>*</sup> User Name:</label>
				<input type="text" name="txt" placeholder="" required aria-required="true"/>					
			</div>
			<div class="form-input">
				<label><sup>*</sup> Password:</label>
				<input type="password" name="txt" placeholder="" class="required" />					
			</div>
			<div class="form-input">
				<a href="#" class="yellowbtn">Log In</a>
			</div>
			<!--div>
				<a href="#">Email me my login information</a>
			</div>
			<div>
				<label><sup>*</sup> Email:</label>
				<input type="text" name="txt" placeholder="" />					
			</div>
			<div>
				<a href="#">Send User Name</a>
			</div-->
		</div>
	
	</div>
		<?php
        }else{
            /*
             *  Registration Fields
             */
        ?>
		<div class="main-section">	
			<h3 class="heading">Registration</h3>
			<div class="text-box-parti">
				<p>* Indicates Required</p>
				<form action="?step=4" method="post" id="frmRegisterCFS">
					<div>
						<span class="subheading">Personal Information</span>
						<div>
							<div class="form-input">
								<label><sup>*</sup> First</label>
								<input type="text" name="txtFirstName" placeholder="" class="required" />					
							</div>
							<div class="form-input">
								<label><sup>*</sup> Last</label>
								<input type="text" name="txtLastName" placeholder="" class="required" />					
							</div>
						</div>
					</div>
					<hr/>
					<div>
						<span class="subheading">Contact Information</span>
						<div>
							<div class="form-input">
								<label>Street 1:</label>
								<input type="text" name="txtStreet1" placeholder="" />					
							</div>
							<div class="form-input">
								<label>Street 2:</label>
								<input type="text" name="txtStreet2" placeholder="" />					
							</div>
							<div class="form-input">
								<label>City/Town:</label>
								<input type="text" name="txtCity" placeholder="" />					
							</div>
							<div class="form-input">
								<label>State / Province:</label>
								<input type="text" name="txtState" placeholder="" />					
							</div>
							<div class="form-input">
								<label>ZIP / Postal Code:</label>
								<input type="text" name="txtZipcode" placeholder="" />					
							</div>
							<div class="form-input">
								<label>Country:</label>
								<select name="comboCountry">
									<option></option>
									<option selected="selected" value="United States">United States</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Aland Islands">Aland Islands</option>
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
									<option value="Bolivarian Republic of Venezuela">Bolivarian Republic of Venezuela</option>
									<option value="Bonaire, Sint Eustatios and Saba">Bonaire, Sint Eustatios and Saba</option>
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
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
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Cote D'Ivoire">Cote D'Ivoire</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Curacao">Curacao</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Democratic People's Republic of Korea">Democratic People's Republic of Korea</option>
									<option value="The Democratic Republic of the Congo">The Democratic Republic of the Congo</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Federated States of Micronesia">Federated States of Micronesia</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="The Former Yugoslav Republic of Macedonia">The Former Yugoslav Republic of Macedonia</option>
									<option value="France">France</option>
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
									<option value="Guernsey">Guernsey</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-Bissau">Guinea-Bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
									<option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Islamic Republic of Iran">Islamic Republic of Iran</option>
									<option value="Isle of Man">Isle of Man</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jersey">Jersey</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libya">Libya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macao">Macao</option>
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
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
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
									<option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Pitcairn">Pitcairn</option>
									<option value="Plurinational State of Bolivia">Plurinational State of Bolivia</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Republic of Korea">Republic of Korea</option>
									<option value="Republic of Moldova">Republic of Moldova</option>
									<option value="Reunion">Reunion</option>
									<option value="Romania">Romania</option>
									<option value="Russian Federation">Russian Federation</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Saint Barthelemy">Saint Barthelemy</option>
									<option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									<option value="Saint Lucia">Saint Lucia</option>
									<option value="Saint Martin (French)">Saint Martin (French)</option>
									<option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
									<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Serbia">Serbia</option>
									<option value="Seychelles">Seychelles</option>
									<option value="S. Georgia &amp; S. Sandwich Isls.">S. Georgia &amp; S. Sandwich Isls.</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Sint Maarten (Dutch)">Sint Maarten (Dutch)</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="South Sudan">South Sudan</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syrian Arab Republic">Syrian Arab Republic</option>
									<option value="Taiwan, Province of China">Taiwan, Province of China</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Thailand">Thailand</option>
									<option value="Timor-Leste">Timor-Leste</option>
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
									<option value="United Republic of Tanzania">United Republic of Tanzania</option>
									<option value="Uruguay">Uruguay</option>
									<option value="USA Minor Outlying Islands">USA Minor Outlying Islands</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Viet Nam">Viet Nam</option>
									<option value="Virgin Islands (British)">Virgin Islands (British)</option>
									<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
									<option value="Wallis and Futuna">Wallis and Futuna</option>
									<option value="Western Sahara">Western Sahara</option>
									<option value="Yemen">Yemen</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
								</select>				
							</div>
							<div class="form-input">
								<label><sup>*</sup>Email:</label>
								<input type="email" id="txtEmail" name="txtEmail" placeholder="" class="required email" />					
							</div>
							<div class="form-input">
								<label>Phone Number:</label>
								<input type="text" name="txtNumber" placeholder="" />					
							</div>
							<div class="form-input">
								<div class="chkboxdiv">
									<input type="checkbox" checked="checked" name="chkGiftNotification" /><span>I would like to be emailed when a gift is made on my behalf.</span>
								</div>
								<div class="chkboxdiv">
									<input type="checkbox" checked="checked" name="chkSubscriber" /><span>Yes, I would like to receive e-mail from Food Bank</span>
								</div>
							</div>
							<div>
								<div class="form-input">
									<label>Country:</label>
									<select>
										<option value="0" selected="selected">&nbsp;</option>
										<option value="1">HTML</option>
										<option value="2">Plain Text</option>
									</select>			
								</div>
								<div class="chkboxdiv">
									<input type="checkbox" name="chk" /><span>Yes, I would like to receive postal mail from Food Bank</span></div>
								<div class="chkboxdiv">
									<input type="checkbox" checked="checked" name="chk" /><span>Keep me logged in. <a href="#" class="yellowbtn margin-left-10">What's this?</a></span></div>
							</div>
						</div>
					</div>
					<hr/>
					<div>
						<span class="subheading">Participant log-in</span>
						<div>
							<div class="form-input">
								<label><sup>*</sup> User Name:</label>
								<input type="text" id="txtUserName" name="txtUserName" placeholder="" class="required" />	
								<span><small>5 to 60 characters</small></span>
							</div>
							<div class="form-input">
								<label><sup>*</sup> Password:</label>
								<input type="password" id="txtPassword" name="txtPassword" placeholder="" class="required" />	
								<span><small>5 to 20 characters</small></span>					
							</div>
							<div class="form-input">
								<label><sup>*</sup> Repeat Password:</label>
								<input type="password" id="txtRepeatPassword" name="txtRepeatPassword" placeholder="" class="required" />					
							</div>
						</div>				
					</div>
					<div class="nevigation-btn">
						<!--input type="hidden" name="cname" value="<?php echo $_GET['cname'];?>" />
						<input type="hidden" name="cgoal" value="<?php echo $_GET['cgoal'];?>" />
						<input type="hidden" name="donator" value="confirmation" /-->
						<?php get_all_query_fields()?>
						<input type="hidden" name="page_url" value="<?php echo get_permalink($post->ID);?>" />
						<input type="hidden" name="action" value="register_new_user" />
						<input type="button" value="Previous Step" onclick="history.go(-1);"/>
						<input type="submit" name="btnSaveCompany" method="post" value="Next" />
					</div>
				</form>
				<div class="hide loader"></div>
			</div>
		</div>
<?php
        }
?>
        <div class="nevigation-btn">
			 
			<!--input type="submit" value="Next Step" class="nevi-right" name="btnNextStep">
            <input type="hidden" name="step" value="4" /-->
		</div>
	</div>