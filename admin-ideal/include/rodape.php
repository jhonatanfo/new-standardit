
<script type="text/javascript" src="<?php echo URL; ?>content/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>content/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>content/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>content/aos-master/dist/aos.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>content/js/action.js"></script>
		
<script type="text/javascript">	
	$(document).ready(function(){

		$(function(){
			var url  = window.location.href; 
			var current = url.split("/")[url.split("/").length -1];

            /*if(current == "pt" || current == "en" || current == "es"){
                current = url.split("/")[url.split("/").length -2];
                
            }*/
            if(current == ""){
                
            }else{
                $('.navbar-nav a').each(function(){
                    var $this = $(this);
                    if($this.attr('href').indexOf(current) !== -1){
                        $this.addClass('active');
                    }
                })
            }
		});
	});

	$('.banner').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  infinite: true,
	  speed: 800,
	  dots: false,
	  arrows: true,
	});

	$('.slick-clientes').slick({
	  slidesToShow: 4,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  infinite: true,
	  speed: 800,
	  dots: true,
	  arrows: true,
	});


	$('.slick-depoimentos').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 5000,
	  infinite: true,
	  speed: 800,
	  dots: false,
	  arrows: true,
	});
	
	$(document).ready(function(){
		

			// Modal video
		$('.modal-video .fechar').on('click', function() {
			$('.incluir-video').css("opacity","0");
			setTimeout(function(){ $('.modal-video').css("left","105%"); }, 500);
			setTimeout(function(){ 
				$('.backdrop').css("left","-110%");
			}, 500);
			$(".incluir-video").html("");
		});
		
		// Play Video
		$('.play, .btn-play').on('click', function() {
			var videoid = $(this).attr('data-video');
			$('.backdrop').css("left","0");
			setTimeout(function(){ $('.modal-video').css("left","5%"); }, 500);
			setTimeout(function(){ 
				$('<iframe width="100%" height="100%" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>')
				.attr("src", "https://www.youtube.com/embed/" + videoid + "?autoplay=1")
				.appendTo(".incluir-video");
				setTimeout(function(){ $('.incluir-video').css("opacity","1"); }, 500);
				
			}, 2000);
			
		});
		
		
		$('#enviar').on('click', function() {
			var nome = $("#nome");
			var nomePost = nome.val();
			var email = $("#email");
			var emailPost = email.val();
			var telefone = $("#telefone");
			var telefonePost = telefone.val();
			var mensagem = $("#mensagem");
			var mensagemPost = mensagem.val();

			$(".erro").html("Carregando...").css('padding', "13px");
			$.post("enviar.php", {
				nome: nomePost,
				email: emailPost,
				telefone: telefonePost,
				mensagem: mensagemPost
			},

			function(resposta) {
				if (resposta == "nome") {
					$(".erro").html("Preencha o Nome!");
					$("#nome").css('border-color', "#1ab4e4");
					$("#nome").focus();
					return false;
				} else {
					$("#nome").css('color', "#8b8b8b");
				}
				if (resposta == "email") {
					$(".erro").html("O e-mail invalido!");
					$("#email").css('border-color', "#1ab4e4");
					$("#email").focus();
					return false;
				} else {
					$("#email").css('color', "#8b8b8b");
				}
				if (resposta == "telefone") {
					$(".erro").html("Preencha o telefone!");
					$("#telefone").css('border-color', "#1ab4e4");
					$("#telefone").focus();
					return false;
				} else {
					$("#telefone").css('color', "#8b8b8b");
				}
				if (resposta == "mensagem") {
					$(".erro").html("Preencha o mensagem!");
					$("#mensagem").css('border-color', "#1ab4e4");
					$("#mensagem").focus();
					return false;
				} else {
					$("#mensagem").css('color', "#8b8b8b");
				}
				$(".erro").html(resposta);
				setTimeout(function(){ 
					$(".erro").html("");
					$("#mensagem").html("");
					$("#telefone").html("");
					$("#nome").html("");
					$("#email").html("");
				}, 2000);
			}, "html");
		});
	});

  AOS.init();

  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>

</body>
</html>