<?php include ('vmleads_319/main.php') ?>
<?php
	$site_id = (!empty($vmleads_option_319) && !empty($vmleads_option_319['site_id'])) ? $vmleads_option_319['site_id']:'';
	$default_source = (!empty($vmleads_option_319) && !empty($vmleads_option_319['source'])) ? $vmleads_option_319['source']:'';
	$form_title = (!empty($vmleads_option_319) && !empty($vmleads_option_319['form_title'])) ? $vmleads_option_319['form_title']:'';
	$form_submit = (!empty($vmleads_option_319) && !empty($vmleads_option_319['form_submit'])) ? $vmleads_option_319['form_submit']:'Submit';
	$form_loading = (!empty($vmleads_option_319) && !empty($vmleads_option_319['form_loading'])) ? $vmleads_option_319['form_loading']:'Loading, Please wait...';
	$source = isset($_GET['source'])?$_GET['source']:$default_source;
?>

<script src="<?php echo VMLEADS_URL_319.'content/tooltip.js' ?>"></script>
<div class="background-color pb-3 pt-3">
     <div class="quickLoad">
		<div class="quickSpin"><i class="fa fa-spinner fa-pulse fa-fw"></i></div>
	</div>
<div class="container">
<div class="vmform-wrapper submitform">
<p class="hideloading"><img alt="loading" src="<?php echo VMLEADS_URL_319.'content/loading.gif' ?>"><br><?php echo $form_loading; ?></p>
<a name="vmform-319"></a>

<h2 class="main-form-header">Start Your <span class="wordwrap"><span class="form-header-span">FREE Quote</span> Below</span></h2>




<form action="#vmform-319" method="POST" class="vmform" id="generate-319" novalidate> 

           	
            <div class="row">
            <div id="field_joint_application"  class="col-lg-6 col-xl-3">
                <label class="field_name" for="joint_application">Who is the cover for?<em class="requiredmark">*</em></label>
                <select class="form-control form-control-lg" name="joint_application">
                    <option value="Just me">Just me</option>
                    <option value="Me and my partner">Me and my partner</option>
                </select>
                    
			
		    </div>
   
    
		    
			<div id="field_insurance_type" class="col-lg-6 col-xl-3">
			<label class="field_name" for="insurance_type">Type of insurance<em class="requiredmark">*</em><em class="tooltipmark icon-tooltip"></em></label>
			<select class="form-control form-control-lg" name="insurance_type">
			<option selected=selected value="Life Insurance only">Life Insurance only</option>
			<option value="Life Insurance with Critical Illness">Life Insurance with Critical Illness</option>
			<option value="Mortgage Life Insurance">Mortgage Life Insurance</option>
			<option value="Whole of Life">Whole of Life</option>
			</select>
		</div>
		<div id="field_cover_amount" class="col-lg-6 col-xl-3">
			<label class="field_name" for="cover_amount">Amount of cover<em class="requiredmark">*</em><em class="tooltipmark icon-tooltip"></em></label>
			<select class="form-control form-control-lg" name="cover_amount">
			<option  value="10000">£10,000</option>
			<option  value="15000">£15,000</option>
			<option  value="20000">£20,000</option>
			<option  value="25000">£25,000</option>
			<option  value="30000">£30,000</option>
			<option  value="35000">£35,000</option>
			<option  value="40000">£40,000</option>
			<option  value="45000">£45,000</option>
			<option  value="50000">£50,000</option>
			<option  value="55000">£55,000</option>
			<option  value="60000">£60,000</option>
			<option  value="65000">£65,000</option>
			<option  value="70000">£70,000</option>
			<option  value="75000">£75,000</option>
			<option  value="80000">£80,000</option>
			<option  value="85000">£85,000</option>
			<option  value="90000">£90,000</option>
			<option  value="95000">£95,000</option>
			<option  value="100000" selected=selected>£100,000</option>
			<option  value="105000">£105,000</option>
			<option  value="110000">£110,000</option>
			<option  value="115000">£115,000</option>
			<option  value="120000">£120,000</option>
			<option  value="125000">£125,000</option>
			<option  value="130000">£130,000</option>
			<option  value="135000">£135,000</option>
			<option  value="140000">£140,000</option>
			<option  value="145000">£145,000</option>
			<option  value="150000">£150,000</option>
			<option  value="155000">£155,000</option>
			<option  value="160000">£160,000</option>
			<option  value="165000">£165,000</option>
			<option  value="170000">£170,000</option>
			<option  value="175000">£175,000</option>
			<option  value="180000">£180,000</option>
			<option  value="185000">£185,000</option>
			<option  value="190000">£190,000</option>
			<option  value="195000">£195,000</option>
			<option  value="200000">£200,000</option>
			<option  value="210000">£210,000</option>
			<option  value="220000">£220,000</option>
			<option  value="230000">£230,000</option>
			<option  value="240000">£240,000</option>
			<option  value="250000">£250,000</option>
			<option  value="260000">£260,000</option>
			<option  value="270000">£270,000</option>
			<option  value="280000">£280,000</option>
			<option  value="290000">£290,000</option>
			<option  value="300000">£300,000</option>
			<option  value="325000">£325,000</option>
			<option  value="350000">£350,000</option>
			<option  value="375000">£375,000</option>
			<option  value="400000">£400,000</option>
			<option  value="425000">£425,000</option>
			<option  value="450000">£450,000</option>
			<option  value="475000">£475,000</option>
			<option  value="500000">£500,000</option>
			<option  value="525000">£525,000</option>
			<option  value="550000">£550,000</option>
			<option  value="575000">£575,000</option>
			<option  value="600000">£600,000</option>
			<option  value="650000">£650,000</option>
			<option  value="700000">£700,000</option>
			<option  value="750000">£750,000</option>
			<option  value="800000">£800,000</option>
			<option  value="850000">£850,000</option>
			<option  value="900000">£900,000</option>
			<option  value="950000">£950,000</option>
			<option  value="1000000">£1,000,000</option>
			<option  value="1100000">£1,100,000</option>
			<option  value="1200000">£1,200,000</option>
			<option  value="1300000">£1,300,000</option>
			<option  value="1400000">£1,400,000</option>
			<option  value="1500000">£1,500,000</option>
			</select>
		</div>
        <div class="col-lg-6 col-xl-3">
             <a class="btn btn-lg btn-warning" id="collapseform">Find Quotes</a>
        </div>
        </div>        
    <div id="restofform" class="collapse row">
            <div id="quotes-message" class="animated text-center quotes-message">
                <p>CONGRATULATIONS! We have identified several policies for you but need some more information to get you an accurate quote. Complete the form below to get your quotes now.</p>
            </div>
            <div id="field_smoker"  class="col-lg-6 col-xl-3 switch-field">
                <label class="field_name" for="smoker">Have you smoked in the last 12 months?<em class="requiredmark">*</em></label>
                <input class="radio_item" type="radio" checked=checked id="smoker1" name="smoker" value="No"> 
                <label class="smoking-no"  for="smoker1"><i class="fa fa-times" aria-hidden="true"></i></label>   
                <input class="radio_item" type="radio" id="smoker2" name="smoker" value="Yes">
                <label class="smoking-yes"  for="smoker2"><i class="fa fa-check" aria-hidden="true"></i></label>   
            </div>
			<div id="field_cover_length" class="col-lg-6 col-xl-3">
			<label class="field_name pushing-down" for="cover_length">Length of cover<em class="requiredmark">*</em><em class="tooltipmark icon-tooltip"></em></label>
			<select class="form-control form-control-lg" name="cover_length">
			<option value="">(Select)</option>
			<option  value="1">1 year</option>
			<option  value="2">2 years</option>
			<option  value="3">3 years</option>
			<option  value="4">4 years</option>
			<option  value="5">5 years</option>
			<option  value="6">6 years</option>
			<option  value="7">7 years</option>
			<option  value="8">8 years</option>
			<option  value="9">9 years</option>
			<option  value="10">10 years</option>
			<option  value="11">11 years</option>
			<option  value="12">12 years</option>
			<option  value="13">13 years</option>
			<option  value="14">14 years</option>
			<option  value="15">15 years</option>
			<option  value="16">16 years</option>
			<option  value="17">17 years</option>
			<option  value="18">18 years</option>
			<option  value="19">19 years</option>
			<option  selected=selected  value="20">20 years</option>
			<option  value="21">21 years</option>
			<option  value="22">22 years</option>
			<option  value="23">23 years</option>
			<option  value="24">24 years</option>
			<option  value="25">25 years</option>
			<option  value="26">26 years</option>
			<option  value="27">27 years</option>
			<option  value="28">28 years</option>
			<option  value="29">29 years</option>
			<option  value="30">30 years</option>
			<option  value="31">31 years</option>
			<option  value="32">32 years</option>
			<option  value="33">33 years</option>
			<option  value="34">34 years</option>
			<option  value="35">35 years</option>
			<option  value="36">36 years</option>
			<option  value="37">37 years</option>
			<option  value="38">38 years</option>
			<option  value="39">39 years</option>
			<option  value="40">40 years</option>
			<option  value="41">41 years</option>
			<option  value="42">42 years</option>
			<option  value="43">43 years</option>
			<option  value="44">44 years</option>
			<option  value="45">45 years</option>
			<option  value="46">46 years</option>
			<option  value="47">47 years</option>
			<option  value="48">48 years</option>
			<option  value="49">49 years</option>
			<option  value="50">50 years</option>
			</select>
		</div>
        
    <div id="field_dob" class="date-3 col-lg-12 col-xl-6">
			<label class="field_name pushing-down" for="dob">Date of birth<em class="requiredmark">*</em><em class="tooltipmark icon-tooltip"></em></label>
			<div class="date-3-box">
			<select class="form-control form-control-lg" name="dob-date-3-d">
            <option value="" selected=selected>Day</option>
            <option value="01">1</option>
			<option value="02">2</option>
			<option value="03">3</option>
			<option value="04">4</option>
			<option value="05">5</option>
			<option value="06">6</option>
			<option value="07">7</option>
			<option value="08">8</option>
			<option value="09">9</option>
			<option value="10">10</option>
			<option value="11">11</option>
			<option value="12">12</option>
			<option value="13">13</option>
			<option value="14">14</option>
			<option value="15">15</option>
			<option value="16">16</option>
			<option value="17">17</option>
			<option value="18">18</option>
			<option value="19">19</option>
			<option value="20">20</option>
			<option value="21">21</option>
			<option value="22">22</option>
			<option value="23">23</option>
			<option value="24">24</option>
			<option value="25">25</option>
			<option value="26">26</option>
			<option value="27">27</option>
			<option value="28">28</option>
			<option value="29">29</option>
			<option value="30">30</option>
			<option value="31">31</option>
			</select>
			<select class="form-control form-control-lg" name="dob-date-3-m">
			<option value="" selected=selected>Month</option>
            <option value="01">January</option>
			<option value="02">February</option>
			<option value="03">March</option>
			<option value="04">April</option>
			<option value="05">May</option>
			<option value="06">June</option>
			<option value="07">July</option>
			<option value="08">August</option>
			<option value="09">September</option>
			<option value="10">October</option>
			<option value="11">November</option>
			<option value="12">December</option>
			</select>
			<select class="form-control form-control-lg" <?php echo isset($field_errors['dob'])?'class="error"':''; ?> name="dob-date-3-y">
				<option value="" selected=selected  >Year</option>
				<option  value="1998">1998</option>
			<option  value="1997">1997</option>
			<option  value="1996">1996</option>
			<option  value="1995">1995</option>
			<option  value="1994">1994</option>
			<option  value="1993">1993</option>
			<option  value="1992">1992</option>
			<option  value="1991">1991</option>
			<option  value="1990">1990</option>
			<option  value="1989">1989</option>
			<option  value="1988">1988</option>
			<option  value="1987">1987</option>
			<option  value="1986">1986</option>
			<option  value="1985">1985</option>
			<option  value="1984">1984</option>
			<option  value="1983">1983</option>
			<option  value="1982">1982</option>
			<option  value="1981">1981</option>
			<option  value="1980">1980</option>
			<option  value="1979">1979</option>
			<option  value="1978">1978</option>
			<option  value="1977">1977</option>
			<option  value="1976">1976</option>
			<option  value="1975">1975</option>
			<option  value="1974">1974</option>
			<option  value="1973">1973</option>
			<option  value="1972">1972</option>
			<option  value="1971">1971</option>
			<option  value="1970">1970</option>
			<option  value="1969">1969</option>
			<option  value="1968">1968</option>
			<option  value="1967">1967</option>
			<option  value="1966">1966</option>
			<option  value="1965">1965</option>
			<option  value="1964">1964</option>
			<option  value="1963">1963</option>
			<option  value="1962">1962</option>
			<option  value="1961">1961</option>
			<option  value="1960">1960</option>
			<option  value="1959">1959</option>
			<option  value="1958">1958</option>
			<option  value="1957">1957</option>
			<option  value="1956">1956</option>
			<option  value="1955">1955</option>
			<option  value="1954">1954</option>
			<option  value="1953">1953</option>
			<option  value="1952">1952</option>
			<option  value="1951">1951</option>
			<option  value="1950">1950</option>
			<option  value="1949">1949</option>
			<option  value="1948">1948</option>
			<option  value="1947">1947</option>
			<option  value="1946">1946</option>
			<option  value="1945">1945</option>
			<option  value="1944">1944</option>
			<option  value="1943">1943</option>
			<option  value="1942">1942</option>
			<option  value="1941">1941</option>
			<option  value="1940">1940</option>
			<option  value="1939">1939</option>
			<option  value="1938">1938</option>
			<option  value="1937">1937</option>
			<option  value="1936">1936</option>
			</select>
			</div>
<?php if(isset($field_errors['dob'])){ echo '<small class="error">'.$field_errors['dob'].'</small>'; } ?>
		</div>
		    
		
		<div class="col-lg-12 col-xl-6 mb-3">
			<label for="first_name">First name<em class="requiredmark">*</em></label>
			<input class="form-control form-control-lg" <?php echo isset($field_errors['first_name'])?'class="error"':''; ?> type="text" name="first_name" value="<?php echo isset($values['first_name'])?$values['first_name']:'' ?>"  maxlength="30" required>
            <div class="invalid-feedback">
                Please provide a valid name.
            </div>
		</div>
		<div class="col-lg-12 col-xl-6 mb-3">
			<label class="field_name" for="last_name">Last name<em class="requiredmark">*</em></label>
			<input class="form-control form-control-lg" <?php echo isset($field_errors['last_name'])?'class="error"':''; ?> type="text" name="last_name" value="<?php echo isset($values['last_name'])?$values['last_name']:'' ?>"  maxlength="30" required>
            <div class="invalid-feedback">
                Please provide a valid last name.
            </div>
		</div>
		
		
		<div class="col-lg-12 col-xl-6 mb-3">
			<label class="field_name" for="address_line_1">Address line 1<em class="requiredmark">*</em></label>
			<input class="form-control form-control-lg" <?php echo isset($field_errors['address_line_1'])?'class="error"':''; ?> type="text" name="address_line_1" value="<?php echo isset($values['address_line_1'])?$values['address_line_1']:'' ?>"  maxlength="80" required>
            <div class="invalid-feedback">
                Please provide a valid address.
            </div>
		</div>
		<div class="col-lg-12 col-xl-6 mb-3">
			<label class="field_name" for="postcode">Postcode<em class="requiredmark">*</em></label>
			<input class="form-control form-control-lg" <?php echo isset($field_errors['postcode'])?'class="error"':''; ?> type="text" name="postcode" value="<?php echo isset($values['postcode'])?$values['postcode']:'' ?>"  maxlength="8" required>
            <div class="invalid-feedback">
                Please provide a valid postcode.
            </div>
		</div>
				

		
		<div class="col-lg-12 col-xl-6 mb-3">
			<label class="field_name" for="telephone">Phone number<em class="requiredmark">*</em></label>
			<input class="form-control form-control-lg" <?php echo isset($field_errors['telephone'])?'class="error"':''; ?> type="text" name="telephone" value="<?php echo isset($values['telephone'])?$values['telephone']:'' ?>" pattern="^\s*\(?(020[7,8]{1}\)?[ ]?[1-9]{1}[0-9{2}[ ]?[0-9]{4})|(0[1-8]{1}[0-9]{3}\)?[ ]?[1-9]{1}[0-9]{2}[ ]?[0-9]{3})\s*$" required>
            <div class="invalid-feedback">
                Please provide a valid telephone.
            </div>
		</div>
		
		<div class="col-lg-12 col-xl-6 mb-3">
			<label class="field_name" for="email">Email<em class="requiredmark">*</em></label>
			<input class="form-control form-control-lg" <?php echo isset($field_errors['email'])?'class="error"':''; ?> type="text" name="email" value="<?php echo isset($values['email'])?$values['email']:'' ?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
            <div class="invalid-feedback">
                Please provide a valid email.
            </div>
		</div>
		
    
	<input type="hidden" name="affiliate_campaign_id" value="319">
	<div class="vmclear"></div>
	<div class="form-actions">
		<input type="hidden" name="vmform_wptag" value="319" />
		<input type="hidden" name="vmform_hash" value="20879" />
		<input type="hidden" name="vmform_ip" value="<?php echo vmleads_get_ip_319() ?>" />
<?php if(!empty($site_id)){ ?>
<input type="hidden" name="vmform_siteid" value="<?php echo $site_id ?>" />
<?php } ?>
<?php if(!empty($source)){ ?>
<input type="hidden" name="vmform_source" value="<?php echo $source ?>" />
<?php } ?>
</div>
<div class="below-form" >	
		
		 <input type="submit" value="<?php echo htmlspecialchars($form_submit) ?>" class="btn btn-warning CTA" id="submit-button" />
		 <p id="disclaimer">By clicking "GET MY QUOTES NOW" you agree to be contacted by telephone or email by an FCA authorised insurance firm and confirm that you have read and agreed to our Privacy Policy and our Terms &amp; Conditions </p>
	</div>
</div>        
</form>
</div>
</div>
</div> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous" async></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous" async ></script>
        <script src="assets/js/collapse.js" async></script>
        <script src="assets/js/form-validation.js" async></script>
<script src="<?php echo VMLEADS_URL_319.'content/form.js' ?>" async></script>


