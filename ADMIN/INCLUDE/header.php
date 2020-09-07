<header>

	<div class="header">
		<div>
			<a href="../indexA.php"><img src="../IMAGES/logoAEN-1.png" alt="aerodrome-logo" width="160px" style="margin-left:5.4%;margin-bottom: 5% " title="Accueil">
			</a>

		</div>
		<div>
			<nav>
				<ul>
					<li><a href="../indexA.php" class="linkstyle">Accueil<div> </div></a></li>

					<li><a href="#" id="linkhover">L’Aéro-Club</a>
						<div id="divhoveroff">

							<a href="#Baptême">Baptême de l'air</a><br>
							<a href="#saut">Saut en parachute</a><br>
							<a href="#location">Location ULM</a><br>
							<a href="#formation">Formation au brevet de pilote</a>

						</div>
					</li>


					<li><a href="../prestation.php" class="linkstyle">Nos prestations<div> </div></a></li>
					<li><a href="../propos.php" class="linkstyle">A propos<div> </div></a></li>
					<li><a href="../contact.php" class="linkstyle">Contact<div> </div></a></li>

				</ul>
			</nav>
		</div>
		<div class="espaceMButton">

				<!--*CODE POUR VERIFIER SI USERS EST CONNECTER OU PAS -->
			<?php if (isset($_SESSION['session_start']) && !empty($_SESSION['session_start'])) {
				if ($_SESSION['session_start'] == 1) {
					echo '<a href="../ESPACE/profil.php">MON ESPACE</a>
					<a href="../deconnexion.php">DECONNEXION</a>';
				}
			} else if (!isset($_SESSION['session_start']) && empty($_SESSION['session_start'])) {
				echo '
				<a href="../pageConnexion.php">ESPACE MEMBRE</a>';
			} ?>
			<!--*FIN ---DU CODE POUR VERIFIER SI USERS EST CONNECTER OU PAS -->



			

		</div>
	</div>

	<!--HEADER RESPONSIVE POUR mobile-->

	<div class="headerResponsive">
		<div>
			<a href="../indexA.php"><img src="../IMAGES/logoAEN-1.png" alt="aerodrome-logo" width="100px" style="margin-left:2%;margin-bottom: 2% " title="Accueil">
			</a>

		</div>
		<div><span class="Bar-center01" id="btn-Hm" role="active">

			</span></div>
		<div style="position: relative;">
			<div class="slideMenueoff">
				<div>
					<nav>
						<ul>
							<li><a href="../indexA.php" class="linkstyle">Accueil<div> </div></a></li>
							<li>
								<div class="dropdown">
									<a class="" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										L’Aéro-Club <img src="IMAGES/ico-Chevron.png" alt="" width="15px" style="margin-left: 10px;">
									</a>

									<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

										<a href="#Baptême" class="dropdown-item">Baptême de l'air</a>
										<a href="#saut" class="dropdown-item">Saut en parachute</a>
										<a href="#location" class="dropdown-item">Location ULM</a>
										<a href="#formation" class="dropdown-item">Formation au brevet de pilote</a>
										
									</div>
								</div>

							</li>

							<li><a href="../prestation.php" class="linkstyle">Nos prestations<div> </div></a></li>
							<li><a href="../propos.php" class="linkstyle">A propos<div> </div></a></li>
							<li><a href="../contact.php" class="linkstyle">Contact<div> </div></a></li>
						</ul>
					</nav>
				</div>
				<div class="espaceMButton" style="    margin-top: 18rem;">
					<a href="../pageConnexion.php">ESPACE MEMBRE</a>

				</div>
			</div>
		</div>


	</div>
	<!--HEADER RESPONSIVE-->
	<script>
		let linkHover = document.getElementById("linkhover");
		let divHover = document.getElementById("divhoveroff");

		linkHover.addEventListener("mouseover", function() {
			console.log("over");
			divHover.id = 'divhover';

		});
		/*
		linkHover.addEventListener("mouseout", function() {   
			
			divHover.id='divhoveroff';
			console.log("out");
			
		});*/

		divHover.addEventListener("mouseout", function() {

			divHover.id = 'divhoveroff';
			console.log("out :" + divHover.id);
		})
		divHover.addEventListener("mouseover", function() {
			console.log("over");
			divHover.id = 'divhover';

		})
	</script>
</header>
<script type="text/javascript">
	document.getElementById("btn-Hm").addEventListener("click", function() {

		if (!this.hasAttribute("role")) {
			console.log("hover");
			this.classList.remove("rotateButton");
			this.setAttribute("role", "active");
			let test = document.getElementsByClassName("slideMenue");
			test[0].className = "slideMenueoff";

		} else if (this.hasAttribute("role")) {
			this.removeAttribute("role");
			console.log("Click active");

			this.classList.add("rotateButton");
			let test = document.getElementsByClassName("slideMenueoff");

			test[0].className = "slideMenue";

			// this.setAttribute('style', '-webkit-transform: translateX(-59%) rotate(90deg); transition: all 500ms cubic-bezier(0.18, 0.89, 0.32, 1.28);');

		}




	})
</script>