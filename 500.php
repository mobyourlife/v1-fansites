<?php
require_once "core.inc.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
  <?php include("header.inc.php"); ?>
  <body>

    <?php require "navbar.inc.php"; ?>

    <div class="jumbotron" style="background-image: url('<?php printlink("image?id=cover"); ?>'); ">
      <div class="container">
        <h1>Oops!</h1>
        <p>Estamos enfrentando dificuldades técnicas!</p>
      </div>
    </div>

    <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="error-template">
					<h1>Erro interno do servidor!</h1>
					<div class="error-details">
						<p>Pedimos sinceras desculpas. Estamos passando por dificuldades técnicas em nossos servidores.</p>
						<p>Por favor tente novamente e caso ainda tenha problemas contate o suporte técnico.</p>
					</div>
					<div class="error-actions">
						<a href="<?php printlink(); ?>" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-home"></span> Página Inicial</a>
						<a href="<?php printlink("suporte-tecnico"); ?>" class="btn btn-default btn-lg"><span class="glyphicon glyphicon-envelope"></span> Suporte Técnico</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	<?php require "footer.inc.php"; ?>
  </body>
</html>
