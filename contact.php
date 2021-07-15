<?php include 'head.php' ?>
	<body data-scrolling-animations="true">
        <div class="sp-body">
			
<?php include 'header.php' ?>	
			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>NOSSOS CONTATOS E LOCALIZAÇÃO</h1></a>
					<div class="pull-right">
						<a href=""><i class="fa fa-home fa-lg"></i></a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Nossos Contatos</a>
					</div>
				</div>
			</div>

			<!-- <iframe class="we-onmap wow fadeInUp" data-wow-delay="0.3s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.807473228056!2d36.78432136429551!3d-1.2897720990592767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10a6630bb1c5%3A0x50ddf1cf28b5fa40!2sSifa+Towers%2C+Ring+Rd+Kilimani%2C+Nairobi%2C+Kenya!5e0!3m2!1sen!2s!4v1497946740933"></iframe> -->
				<!-- <iframe class="we-onmap wow fadeInUp" data-wow-delay="0.3s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.615657791336!2d-48.46847558626451!3d-1.4068372989739601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a48bcee215ca51%3A0x479a8ab8845fd0b9!2zQXYuIErDumxpbyBDw6lzYXIsIEJlbMOpbSAtIFBB!5e0!3m2!1spt-BR!2sbr!4v1625969698494!5m2!1spt-BR!2sbr"></iframe> -->
				<iframe class="we-onmap wow fadeInUp" data-wow-delay="0.3s" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.6324886782327!2d-48.47510368524597!3d-1.3969579989811598!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92a48a2ea684917f%3A0xcd74c3b573ced058!2sR.%20S%C3%A3o%20Paulo%2C%20204%20-%20Val%20de%20Caes%2C%20Bel%C3%A9m%20-%20PA%2C%2066617-050!5e0!3m2!1spt-BR!2sbr!4v1626050153421!5m2!1spt-BR!2sbr"></iframe>
			<div class="container-fluid block-content">
				<div class="row main-grid">
					<div class="col-sm-4">
						<h4>ESCRITÓRIO CENTRAL</h4>
						<p>Cada dia é um novo dia para nós e trabalhamos muito para satisfazer nossos 
							clientes de todos os lugares.</p>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong>North Logistic Ltd.</strong><br>Belém, Pará, Brazil.</div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>+55 91 99256 4185 </div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>reserva.bel@northbrazil.com</div>
							</div>
							<div>
								<span><i class="fa fa-clock-o"></i></span>
								<div>Seg - Sab  8.00 - 17.00</div>
							</div>
						</div>
						<br><br><hr><br>
						<h4>FINANCEIRO</h4>
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong>North Logistics Ltd.</strong>
								<!-- <br>American Block Residence Lane,Building 1,Door 3,Airport Road  -->
							</div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>+55 91 98077 2993 / 91 98343 5514 </div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>financeiro@northbrazillog.com</div>
							</div>
							<div>
								<span><i class="fa fa-clock-o"></i></span>
								<div>Seg - Sab  8.00 - 17.00</div>
							</div>
						</div>
					</div>
					<div class="col-sm-8 wow fadeInRight" data-wow-delay="0.3s">
						<h4>ENVIE-NOS UMA MENSAGEM</h4>
                        
				<?php
                    if(isset($_GET['response1'])){	
                    @$response1 = $_GET['response1'];
                ?>
                <div class="col-md-12" >
			         <div class="alert alert-success display" id="msg">
                    <span class="glyphicon glyphicon-ok"></span> <?php echo "".$response1.""; ?>
                    </div>
				</div>
				<?php } ?>
						<p>Estamos aqui para responder a quaisquer perguntas que você possa ter sobre nossas experiências. Entre em contato conosco e responderemos assim que possível.</p>
						<div id="success"></div>
						<form  method="post"  action="send-email.php" class=" form-inline">
							<div class="row form-elem">	
								<div class="col-sm-6 form-elem">
									<div class="form-group default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="primeiro_name" id="user-name" placeholder="Primeiro nome" required="required">
									</div>
									<div class="form-group default-inp form-elem">
										<i class="fa fa-envelope"></i>
										<input type="text" name="email" id="user-email" placeholder="Endereço de e-mail" required="required">
									</div>
								</div>
								<div class="col-sm-6 form-elem">
									<div class="form-group default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="last_name" id="user-lastname" placeholder="Sobrenome">
                                        
									</div>
									<div class="form-group default-inp form-elem">
										<i class="fa fa-phone"></i>
										<input type="text" name="telephone" id="user-phone" placeholder="Nº Telefônico">
									</div>
								</div>
							</div>
							<div class="form-group default-inp form-elem">
								<input type="text" name="subject" id="user-subject" placeholder="Assunto">
							</div>
							<div class="form-group form-elem default-inp">
								<textarea id="comments" name="comments" placeholder="Mensagem"></textarea>
							</div>
							<div class="form-action form-elem">
                                <button type="submit" name="submit" class="btn btn-success">Enviar mensagem</button>
                            </div>
						</form>
					</div>
				</div>
			</div>

			<?php include 'footer.php' ?>
		</div>

		<!--Main-->   
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
		<!--Owl Carousel-->
		<script src="assets/owl-carousel/owl.carousel.min.js"></script>
		<!--
		<script src="assets/contact/jqBootstrapValidation.js"></script> 
		<script src="assets/contact/contact_me.js"></script>
		<!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
		<!--Theme-->
		<script src="js/jquery.smooth-scroll.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
		<script src="js/theme.js"></script>
	</body>

</html>