<!DOCTYPE html>
<html>

<body>

	<div id="page">
		<div id="logo">
			<h1><a href="/" id="logoLink">Car Sales Shop</a></h1>
		</div>
		<div id="nav">
			<ul>
				<li><a href="#/home.html">Home</a></li>
				<li><a href="#/about.html">About</a></li>
				<li><a href="#/contact.html">Contact</a></li>
			</ul>	
		</div>
		<div id="registerpop" class="form_area leadpopu">
      <div class="title">Register</div>
      <a class="topclose" href="javascript:closeLoginPopUp('registerBackground','userRegisterApiContainer');closeLoginPopUp('loginPopupBackgorund','userLoginApiContainer');" title="Close"><span>close</span></a>
      <form name="userRegistration" id="userRegistration" method="post" action="123">  
          <div class="contact_title"> Contact Information </div>      
        <div class="contact_details">
           <div class="filed_space">
             <span class="bggray"><input tabindex="1" id="firstName" value="Full Name*" name="firstName" maxlength="40" onblur="changeTextValueByObject(this,'Full Name*');" onkeypress="return fnAlphabetwithSpaceError(event);" onfocus="setTextValueByObject(this,'Full Name*');" type="text"> <div id="nameError1" class="spritheadError bottom disnone">This field is required.</div>
              <div id="nameshortError1" class="spritheadError bottom"></div>
             </span>
             <span class="bggray last"><input tabindex="2" id="emailId" name="emailId" onblur="changeTextValueByObject(this,'Email*');" onfocus="setTextValueByObject(this,'Email*');" value="Email*" type="text"><div id="emailError1" class="spritheadError bottom disnone">This field is required.</div>
            <div id="emailvalidError1" class="spritheadError bottom disnone">Please enter valid email.</div>
             </span>
           </div>
    <div class="filed_space"> 
      
         <span class="bggray"><input tabindex="3" maxlength="6" name="pinCode" onkeypress="return fnNotAlphabet(event);" id="pinCode" onblur="changeTextValueByObject(this,'Pin Code*');fillCityByLeadPincode('userRegistration','pinCode','cityName');" "="" onfocus="setTextValueByObject(this,'Pin Code*');" class="pincode" value="Pin Code*" type="text"> <a href="javascript:void(0)" onclick="window.open('https://www.cardekho.com/pincode','PinCode','address=no,width=400,height=300,left=480,top=240,scrollbars=no');createLeadPopUpGAClickEvent('Check Your Pincode');" title="Search pin" class="searchpin">Search pin</a>
          <div id="pincodeError" class="spritheadError bottom disnone">This field is required.</div>
 <div id="pincodeError1" class="spritheadError bottom disnone">Please enter correct pincode.</div>
         </span>
         <!-- <select id="cityName" tabindex="4" name="cityName" class="flexselect" data-placeholder="-Select City-">
      </select> -->
      <span class="bggray last">
        <label id="selectedCityReg" style="display:none;">-Select City-</label>
           <input id="cityName" data-gsv-type="required" placeholder="Enter City" data-gsf-name="cityName" class="gs_ta" autocomplete="off" type="text"><div id="CityError1" class="spritheadError bottom disnone">This field is required.</div></span>
           </div> 

           
           <div class="phonebox bggray">
            <div class="numbar">+91 <i class="spriteheader rightarrow"></i></div>
            <div class="phoneinput"><input tabindex="5" onfocus="setTextValueByObject(this,'Mobile No.*');" onblur="changeTextValueByObject(this,'Mobile No.*');" maxlength="10" id="mobileNo" name="mobileNo" onkeypress="return fnNotAlphabet(event);" value="Mobile No.*" type="text">
              <div id="mobileError" class="spritheadError bottom disnone" style="padding-top: 6px;">Wrong mobile number.</div>
            <div id="mobileError1" class="spritheadError bottom disnone" style="padding-top: 6px;">This field is required.</div>
          </div>            
            </div> 
        </div>
        <div class="contact_details contact_title3">
          <div class="contact_title">  </div>
            <div class="filed_space">
            <!--  <span class="verifyimg radius3"><img src="https://www.cardekho.com/stickyImg" height="35" width="117" alt="verify"/></span> -->
              <div id="reCaptchaForRegister" class="recapcharegisterbox"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?k=6LeU2SQTAAAAAAZ5GujiGUIVJv3l393-F1vmxCvh&amp;co=aHR0cHM6Ly93d3cuY2FyZGVraG8uY29tOjQ0Mw..&amp;hl=en&amp;v=v1519626662381&amp;theme=light&amp;size=normal&amp;cb=i30m8dnlt5z3" role="presentation" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox" width="304" height="78" frameborder="0"></iframe></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1; margin: 10px 25px; padding: 0px; resize: none;  display: none; "></textarea></div></div>
             <!-- <span class="bggray last"><input tabindex="6" maxlength="6" type="text" id="answer" onfocus="setTextValueByObject(this,'Enter The Code*');" onblur="changeTextValueByObject(this,'Enter The Code*');" value="Enter The Code*"><i id="captchaErrorI" class="spriteheader right disnone"></i></span> -->
           </div>
            <div id="captchaError" class="notMatchingDiv recaptchaErrorRegister"></div> 
            <div class="termschk">




              <div class="indisplay chkhold has-js">
              <label class="gs_control gs_checkbox c_on">
              <input checked="checked" name="remember_me" id="subscribeNewsLetter" value="1" type="checkbox">
              <span class="gs_control__indicator" for="subscribeNewsLetter"></span>
              I would like to subscribe to the CarDekho Newsletter.
              </label>
              </div>

<!-- 
            <div class="indisplay chkhold">  
               <div class="label_check labelcheck spriteheader">
               <input checked="checked" name="remember_me" id="subscribeNewsLetter" value="1" type="checkbox">
               <label for="subscribeNewsLetter"> I would like to subscribe to the CarDekho Newsletter.</label>
               </div>
              </div>
 -->
        <div class="indisplay chkhold has-js">
        <label class="gs_control gs_checkbox c_on" id="termsConditionsLabel" for="termsConditions">
        <input checked="checked" name="remember_me" id="termsConditions" value="1" type="checkbox"><span class="gs_control__indicator"></span>
        I agree to <a href="javascript:findTargetInNewTab('https://www.cardekho.com/info/terms_and_condition');" title="terms and conditions">terms and conditions</a>
        </label>
        </div>

    <!--     <div class="indisplay chkhold">  
               <div class="label_check labelcheck spriteheader">
               <input checked="checked" name="remember_me" id="termsConditions" value="1" type="checkbox">
               <label id="termsConditionsLabel" for="termsConditions">  I agree to <a href="javascript:findTargetInNewTab('https://www.cardekho.com/info/terms_and_condition');" title="terms and conditions">terms and conditions</a></label>
               </div>
        </div> -->

            </div>
            <input class="button loginButton" value="Register" id="registerButton" onclick="submitRegistrationForm();" type="button">
        </div>  
        </form>
                <div class="graybott">Already have an account ? <a href="javascript:showOrHideDiv('userLoginApiContainer','userRegisterApiContainer');showOrHideDiv('loginPopupBackgorund','registerBackground');" title="Login" rel="nofollow">Login</a></div> 
    </div>	
		<div id="footer">
			<p>
				Webpage made by <a href="/" target="_blank">[your name]</a>
			</p>
		</div>
	</div>
</body>
</html>