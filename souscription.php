<?php
require("INCLUDES/config.php");
require("INCLUDES/head.php");
require("INCLUDES/header.php");
?>
<link rel="stylesheet" type="text/css" href="CSS/InscriptionConnexion.css">
<link rel="stylesheet" type="text/css" href="CSS/Souscription.css">

<main>
<div id="wrap">
	<div id="accordian">
		<div class="step" id="step1">
			<div class="number">
				<span>1</span>
			</div>
			<div class="title">
				<h1>Email Address</h1>
			</div>
			<div class="modify">
				<i class="fa fa-plus-circle"></i>
			</div>
		</div>
		<div class="content" id="email">
			<form class="go-right">
				<div>
        <input type="email" name="email" value="" id="email-address" placeholder="Email Address" data-trigger="change" data-validation-minlength="1" data-type="email" data-required="true" data-error-message="Enter a valid email address."/><label for="email">Email Address</label>
        </div>
				
			</form>
			<a class="continue" href="#">Continue</a>
		</div>
		<div class="step" id="step2">
			<div class="number">
				<span>2</span>
			</div>
			<div class="title">
				<h1>Information sur l'utilisateur</h1>
			</div>
			<div class="modify">
				<i class="fa fa-plus-circle"></i>
			</div>
		</div>
		<div class="content" id="address">
			<form class="go-right">
				<div>
				<input type="name" name="first_name" value="" id="first_name" placeholder="John" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your First Name"/><label for="first_name">Nom</label>
        </div>
				<div>
				<label for="last_name">Last Name</label>
				<input type="name" name="last_name" value="" id="last_name" placeholder="Smith" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Last Name"/><label for="last_name">Prenom</label>
				</div>
				<div>
				<input type="phone" name="telephone" value="" id="telephone" placeholder="(555)-867-5309" data-trigger="change" data-validation-minlength="1" data-type="number" data-required="true" data-error-message="Enter Your Telephone Number"/><label for="telephone">Telephone</label>
				</div>
				
				<div>
				<input type="text" name="address" value="" id="address" placeholder="123 Main Street" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing Address"/><label for="Address">Adresse</label>
				</div>
				<div>
				<input type="text" name="city" value="" id="city" placeholder="Everytown" data-trigger="change" data-validation-minlength="1" data-type="text" data-required="true" data-error-message="Enter Your Billing City"/><label for="city">Pays</label>
				</div>
				<div>
				
				</div>
			
				<div>
				
				</div>
				<div>
				<input type="checkbox"/>
				<label class="same" for="same_as_shipping">Same As Shipping Address</label><span></span>
				</div>
			</form>
			<a class="continue" href="#">Continue</a>
		</div>
		
		<div class="step" id="step3">
			<div class="number">
				<span>3</span>
			</div>
			<div class="title">
				<h1>Payment Information</h1>
			</div>
			<div class="modify">
				<i class="fa fa-plus-circle"></i>
			</div>
		</div>
		<div class="content" id="payment">
			<div class="left credit_card">
			<form class="go-right">
				<div>
				<input type="text" name="card_number" value="" id="card_number" placeholder="xxxx-xxxx-xxxx-xxxx" data-trigger="change" data-validation-minlength="1" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Number"/><label for="card_number">Card Number</label>
				</div>
				<div>
				  <div class="expiry">	
				      <div class="month_select">
				        <select name="exp_month" value="" id="exp_month" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
							<option value = "1">01 (Jan)</option>
                   			<option value = "2">02 (Feb)</option>
                   			<option value = "3">03 (Mar)</option>
                   			<option value = "4">04 (Apr)</option>
                   			<option value = "5">05 (May)</option>
                   			<option value = "6">06 (Jun)</option>
                   			<option value = "7">07 (Jul)</option>
                   			<option value = "8">08 (Aug)</option>
                   			<option value = "9">09 (Sep)</option>
                   			<option value = "10">10 (Oct)</option>
                   			<option value = "11">11 (Nov)</option>
                   			<option value = "12">12 (Dec)</option>
                        </select>
                      </div>
                      <span class="divider">-</span>
                      <div class="year_select">
				        <select name="exp_year" value="" id="exp_year" placeholder="" data-trigger="change" data-type="name" data-required="true" data-error-message="Enter Your Credit Card Expiration Date">
							<option value = "1">14 </option>
                   			<option value = "2">15 (Feb)</option>
                   			<option value = "3">16 (Mar)</option>
                   			<option value = "4">17 (Apr)</option>
                   			<option value = "5">18 (May)</option>
                   			<option value = "6">19 (Jun)</option>
                   			<option value = "7">20 (Jul)</option>
                   			<option value = "8">22 (Aug)</option>
                   			<option value = "9">23 (Sep)</option>
                   			<option value = "10">24 (Oct)</option>
                   			<option value = "11">25 (Nov)</option>
                   			<option value = "12">26 (Dec)</option>
                        </select>
            	      </div>
            	    </div>
                 <label class="exp_date" for="Exp_Date">Exp Date</label>
            	  </div>
            	<div class="sec_num">
              <div>
				        <input type="text" name="ccv" value="" id="ccv" placeholder="123" data-trigger="change" data-validation-minlength="3" data-type="name" data-required="true" data-error-message="Enter Your Card Security Code"/>
                <label for="ccv">Security Code</label>
				      </div>
				      </div>
			      </form>
			</div>
			<div class="right">
				<div class="accepted">
					<span><img src="https://i.imgur.com/Z5HVIOt.png"></span>
					<span><img src="https://i.imgur.com/Le0Vvgx.png"></span>
					<span><img src="https://i.imgur.com/D2eQTim.png"></span>
					<span><img src="https://i.imgur.com/Pu4e7AT.png"></span>
					<span><img src="https://i.imgur.com/ewMjaHv.png"></span>
					<span><img src="https://i.imgur.com/3LmmFFV.png"></span>
				</div>
				<div class="secured">
					<img class="lock" src="https://i.imgur.com/hHuibOR.png">
						</div>
			</div>
			<a class="continue" href="#">Continue</a>

 		</div>
 		
    

    <?php

    require("INCLUDES/footer.php");
    ?>