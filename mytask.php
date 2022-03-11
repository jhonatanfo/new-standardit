<?php include "content/include/head.php"; ?>	
<?php include "content/include/tags.php"; ?>
</head>
<body>
<?php include "content/include/menu.php"; ?>	

<section class="texto-produtos mytask">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 texto-servicos text-center" data-aos="fade-right" data-aos-delay="300">
				<div class="gestao">
					<div class="item-gestao">
						<img src="uploads/paginas/<?= $seo[0]["imagem"]; ?>" width="300" />
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 texto-servicos" data-aos="fade-right" data-aos-delay="300">
				<h3><?=  $chamada[0]; ?></h3>
				<h2><?=  $chamada[1]; ?></h2>
				<p><?= $seo[0]["texto"]; ?></p>
			</div>
		</div>
	</div>
</section>

<section class="visao">
	<div class="container">
		<div class="row">
            <?php $beneficios = 0; $num = 1; for($index = 0;$index < $totalblocos;$index++){ 
			if($blocos[$index]["id_categoria"] == $Arraycategorias[0]['id_categoria']){ 

            if($index % 2 == 0){ ?>

			<div class="col-12 col-md-5" data-aos="fade-left" data-aos-delay="300">
				<h4>0<?= $num; ?>.</h4>
                <h3><?php $bloco = unserialize($blocos[$index]["chamada"]);  echo $bloco[0]; ?></h3>
                <p><?= $blocos[$index]["texto"]; ?></p>
			</div>

            <div class="col-12 col-md-7 text-right" data-aos="fade-right" data-aos-delay="300">
                <img src="uploads/blocos/<?= $blocos[$index]["imagem"]; ?>" width="90%"/>
				<span class="seta1" data-aos="fade-in" data-aos-delay="300"><img src="content/img/seta2.png"/></span>
            </div>

            <?php    
             } else { ?>   

            <div class="col-12 col-md-7 text-left" data-aos="fade-right" data-aos-delay="300">
                <img src="uploads/blocos/<?= $blocos[$index]["imagem"]; ?>" width="90%"/>
				<span class="seta2" data-aos="fade-in" data-aos-delay="300"><img src="content/img/seta1.png"/></span>
            </div>

            <div class="col-12 col-md-5" data-aos="fade-left" data-aos-delay="300">
				<h4>0<?= $num; ?>.</h4>
                <h3><?php $bloco = unserialize($blocos[$index]["chamada"]);  echo $bloco[0]; ?></h3>
                <p><?= $blocos[$index]["texto"]; ?></p>
			</div>
            <?php } ?>
            <?php } $num++;  } ?>
		</div>
	</div>
</section>

<section class="gerencie">	
	<?php $beneficios = 0; $num = 1; for($index = 0;$index < $totalblocos;$index++){ 
	 if($blocos[$index]["id_categoria"] == $Arraycategorias[4]['id_categoria']){  ?>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6 text-center">
				<img src="uploads/blocos/<?= $blocos[$index]["imagem"]; ?>" width="300" />
			</div>
			<div class="col-12 col-md-6">
				<h2><?= $blocos[$index]["titulo"]; ?></h2>
			</div>
		</div>
	</div>
	<?php } } ?>
</section>

<section class="utilizado">
	<?php $beneficios = 0; $num = 1; for($index = 0;$index < $totalblocos;$index++){ 
	 if($blocos[$index]["id_categoria"] == $Arraycategorias[3]['id_categoria']){  ?>
	<img src="uploads/blocos/<?= $blocos[$index]["imagem"]; ?>" />
	<div class="container">
		<div class="row">
			<div class="col-12 offset-0 col-md-6 offset-md-6">
				<h2><?= $blocos[$index]["titulo"]; ?></h2>
			</div>
		</div>
	</div>
	<?php } } ?>
</section>

<section class="processos">
	<div class="container">
		<div class="row">
            <div class="col-12">
				<h3>Desenvolva processos <br>integrados <strong>de ponta a ponta</strong></h3>
            </div>
				<?php $beneficios = 0; for($index = 0;$index < $totalblocos;$index++){ 
					if($blocos[$index]["id_categoria"] == $Arraycategorias[1]['id_categoria']){ 
				?>			
				<div class="col-12 col-md-4">
					<i><img src="uploads/blocos/<?= $blocos[$index]["imagem"]; ?>" /></i>
					<h4><?php $bloco = unserialize($blocos[$index]["chamada"]);  echo $bloco[0]; ?></h4>
					<p><?= $blocos[$index]["texto"]; ?></p>
				</div>
				<?php } } ?>
			</div>
		</div>
	</div>
</section>

<section class="ambientes">
	<div class="container">
		<div class="row">
            <?php $beneficios = 0; for($index = 0;$index < $totalblocos;$index++){ 
				if($blocos[$index]["id_categoria"] == $Arraycategorias[2]['id_categoria']){ 
			?>

			<div class="col-12 col-md-6">
				<h2><?= $blocos[$index]["titulo"]; ?></h2>
				<h4><?php $bloco = unserialize($blocos[$index]["chamada"]);  echo $bloco[0]; ?></h4>
                <p><?= $blocos[$index]["texto"]; ?></p>
                <a><?php $bloco = unserialize($blocos[$index]["chamada"]);  echo $bloco[1]; ?></a>
			</div>
			<div class="col-12 col-md-6 text-center">
				<img src="uploads/blocos/<?= $blocos[$index]["imagem"]; ?>" width="90%"/>
			</div>
            <?php } } ?>
		</div>
	</div>
</section>

<section class="agende">
	<div class="container">	
		<div class="row">
			<div class="col-12">
				<h2>Nosso foco <strong>é o seu foco</strong></h2>
				<a>Agende uma demonstração </a>
			</div>
		</div>
	</div>
</section>

<?php include ('content/include/social.php'); ?>	
<?php include ('content/include/rodape.php'); ?>	

<div class="backdrop"></div>

<div class="modal-video">
	<div class="bg-ripple">
        <div class="lds-ripple"><div></div><div></div></div>
    </div>
	<a class="fechar"></a>
	<div class="incluir-video"></div>
</div>

<script type="text/javascript" src="<?php echo URL; ?>content/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>content/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>content/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>content/aos-master/dist/aos.js"></script>
<script type="text/javascript" src="<?php echo URL; ?>content/js/action.js"></script>
		
<script type="text/javascript">	
	
$(document).ready(function(){

	$('.numeros-produtos .item-numeros').hover(function() {
		$('.numeros-produtos .item-numeros').removeClass("active");
		$(this).addClass("active");
	});

	$('.slick-video').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 4000,
	  infinite: true,
	  speed: 800,
	  dots: false,
	  arrows: false,
	});
		
	$('.list-numeros').slick({
	  dots: false,
	  arrows: false,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 5,
	  slidesToScroll: 3,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 2,
			dots: true,
			slidesToScroll: 2
		  }
		}
	  ]
	});
	});

  AOS.init();

</script>

</body>
</html>