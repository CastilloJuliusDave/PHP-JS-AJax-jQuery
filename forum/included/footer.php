<footer>
<!-- Contact -->
<!-- <section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<h5>DO YOU STILL HAVE A QUESTION REGARDING OUR SERVICES?</h5>
				<p>Please do contact us on the number provided or you can leave your message to us by filling-out all the information needed in our contact form.</p>
			</div>
			<div class="offset-lg-1 col-lg-2">
				<a href="contact.html" class="btn btn-primary btn-lg">CONTACT US</a>
			</div>
		</div>
	</div>
</section>
<br/><br/> -->

<!-- Footer -->
<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5 class="wow fadeInUp">Description</h5>
					<p class="text-light text-justify instructionsList">
					<span class="text-danger">WuxiaWorld Forum</span> is a Website developed to practice and make myself familiar with the use of THTML, JavaScript, PHP, CSS and jQuery.
					</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5 class="wow fadeInUp">Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="index.html"><i class="fa fa-angle-double-right"></i>About The Developer</a></li>
						<li><a href=""><i class="fa fa-angle-double-right"></i>Chinese Novel</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5 class="wow fadeInUp">Contacts</h5>
					<p class="text-light instructionsList">pahiram.castillo@gmail.com</p>
					<p class="text-light instructionsList">castillojuliusdave@gmail.com</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fab fa-google-plus"></i></a></li>
						<li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				</hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 text-center text-white">
					<p class="h6 instructionsList">&copy All rights Reversed.<a class="text-green ml-2" href="" target="_blank">pahiram.castillo@gmail.com</a></p>
				</div>
				</hr>
			</div>	
		</div>
</section>

</footer>

  <script src="assets/css/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
  <script src="assets/css/js/mobiscroll.jquery.min.js"></script>
<script src="assets/css/js/jquery.validate.min.js"></script>

<script>
	mobiscroll.settings = {
    theme: 'ios'
};

$(function () {

    $('#bday').mobiscroll().calendar({
        display: 'bubble',
        touchUi: false
    });

});

$('.accordion-2a, .accordion-2b, .accordion-3').on('show.bs.collapse', function(n){
  $(n.target).siblings('.panel-heading').find('.panel-title i').toggleClass('fa-minus fa-plus');
});
$('.accordion-2a, .accordion-2b, .accordion-3').on('hide.bs.collapse', function(n){
  $(n.target).siblings('.panel-heading').find('.panel-title i').toggleClass('fa-plus fa-minus');
});

</script>
</html>
