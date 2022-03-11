<?php include "content/include/head.php"; ?>	

<section class="banner">
	<?php for($index = 0;$index < $totalbanners;$index++){ ?>	
		<div>
		<div class="item-banner" style="background-image:  url(<?php echo URL; ?>/uploads/banners/<?php echo $banners[$index]["desktop"]; ?>);">
			<div class="container texto-banner">
				<div class="container">
					<div class="row">
						<div class="col-12 col-md-6 descricao" data-aos="fade-zoom-in" data-aos-delay="300">
							<h4><?php echo $banners[$index]["titulo"]; ?> </h4>
							<h3 class="texto-banner1"><?php echo $banners[$index]["frase"]; ?></h3>
							<a href="#produtos"><?php echo $banners[$index]["botao"]; ?></a>
						</div>  
					</div>  
				</div>
			</div>
		</div>
		</div>
	<?php } ?>
</section>

<section class="sobre">
	<div class="container">
		<div class="row">
			<div class="col-6 sobre-img">
				<img src="<?php echo URL; ?>/uploads/paginas/<?php echo $seo[0]["imagem"]; ?>"/>
			</div>
			<div class="col-6">
				<h4><?=  $seo[0]["titulo"]; ?></h4>
				<h3><?= $chamada[0]; ?></h3>
				<?= $seo[0]["texto"]; ?>
				<a href="">Entre em contato conosco</a>
			</div>
		</div>
	</div>
</section>

<section class="solucoes">
	<div class="container-fluid">
		<div class="row">
			<?php for($index = 0;$index < $totalblocos;$index++){ if($blocos[$index]["id_categoria"] == $Arraycategorias[0]['id_categoria']){ ?>
				
				<?php if($index < 3){  ?>


				<div class="col-12 col-md-6">
					<div class="itens-solucoes" style="background:  url(<?php echo URL; ?>/uploads/blocos/<?= $blocos[$index]["imagem"]; ?>) no-repeat center / cover;">
						<div class="itens-solucoes-destaque">
							<span><?php $bloco = unserialize($blocos[$index]["chamada"]);  echo $bloco[1];  ?></span>
							<h2><?= $blocos[$index]["titulo"]; ?></h2>
							<p><?php $bloco = unserialize($blocos[$index]["chamada"]);  echo $bloco[0];  ?></p>
							<a>Saiba mais</a>
						</div>
						<div class="itens-solucoes-destaque">
							<h2><?= $blocos[$index + 1]["titulo"]; ?></h2>
							<p><?php $bloco = unserialize($blocos[$index + 1]["chamada"]);  echo $bloco[0];  $index ++;?></p>
							<a>Saiba mais</a>
						</div>
					</div>
				</div>
				
				

				<?php } else if($index > 3) {  ?>


				<div class="col-12 <?php echo "col-md-4"; ?> ">
					<div class="itens-solucoes full" style="background:  url(<?php echo URL; ?>/uploads/blocos/<?= $blocos[$index]["imagem"]; ?>) no-repeat center / cover;">
						<span><?php $bloco = unserialize($blocos[$index]["chamada"]);  echo $bloco[1];  ?></span>
						<h2><?= $blocos[$index]["titulo"]; ?></h2>
						<p><?php $bloco = unserialize($blocos[$index]["chamada"]);  echo $bloco[0];  ?></p>
						<a></a>
					</div>
				</div>

				<?php } ?>


			<?php } } ?>
		</div>
	</div>
</section>

<section class="numeros">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<h5>98% dos nossos clientes tiveram sucesso em seus projetos</h5>
				<p>Veja alguns de nossos números</p>
			</div>
		</div>
		<div class="row">
			<?php for($index = 0;$index < $totalblocos;$index++){ if($blocos[$index]["id_categoria"] == $Arraycategorias[1]['id_categoria']){ ?>
				<div class="col-3">
					<div class="itens-numeros">
						<i style="background-image:  url(<?php echo URL; ?>/uploads/blocos/<?= $blocos[$index]["imagem"]; ?>);"></i>
						<h3><?php $bloco = unserialize($blocos[$index]["chamada"]);  echo $bloco[0];  ?></h3>
						<h2><?= $blocos[$index]["titulo"]; ?></h2>
						<h4><?php $bloco = unserialize($blocos[$index]["chamada"]);  echo $bloco[1];  ?></h4>
					</div>
				</div>
			<?php } } ?>
		</div>
	</div>
</section>

<section class="depoimentos img">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h5>Veja o que nossos clientes empoderados tem a dizer </h5>
			</div>
		</div>
	</div>
</section>

<section class="depoimentos slick">
	<div class="container">	
		<div class="row">
			<div class="col-12">
				<div class="slick-depoimentos">
					<div class="itens-depoimentos">
					    <img src="content/img/aspas.png"/>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada orci ut elit elementum, efficitur porta neque rhoncus. Nullam elit leo, maximus sit amet cursus egestas, pellentesque sed erat. </p>
						<div class="assinatura">
							<i><img src="content/img/avatar-depoimento.png"/></i>
							<h4>Empresa Gomara<span>Rodrigo Cruz - CEO</span></h4>
						</div>
					</div>

					<div class="itens-depoimentos">
						<img src="content/img/aspas.png"/>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada orci ut elit elementum, efficitur porta neque rhoncus. Nullam elit leo, maximus sit amet cursus egestas, pellentesque sed erat. </p>
						<div class="assinatura">
							<i><img src="content/img/avatar-depoimento.png"/></i>
							<h4>Empresa Gomara<span>Rodrigo Cruz - CEO</span></h4>
						</div>
					</div>

					<div class="itens-depoimentos">
						<img src="content/img/aspas.png"/>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada orci ut elit elementum, efficitur porta neque rhoncus. Nullam elit leo, maximus sit amet cursus egestas, pellentesque sed erat. </p>
						<div class="assinatura">
							<i><img src="content/img/avatar-depoimento.png"/></i>
							<h4>Empresa Gomara<span>Rodrigo Cruz - CEO</span></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php include ('content/include/social.php'); ?>	
<?php include ('content/include/rodape.php'); ?>	

 