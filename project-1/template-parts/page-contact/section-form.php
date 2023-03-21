<section class="section-form container-fluid">
	<?php get_template_part('template-parts/page-title-header');?>
	<div class="container">
		<div class="text-start col-lg-7 col-12">
			<h3>Scrieți-ne un mesaj </h3>
			<div>Ne face plăcere să va sfătuim. Nu ezitați să ne scrieți un mesaj și vă vom răspunde cât de curând posibil.</div>
		</div>
		<div class="form-wrapper">
			<form method="POST" action="">
				<div class="form-floating mb-3 icol-2">
					<input type="text" class="form-control" id="floatingInput" placeholder="Nume" value="">
					<label class="label" for="floatingInput">Nume</label>
				</div>
				<div class="form-floating mb-3 icol-2">
					<input type="email" class="form-control email-field" id="floatingInput" placeholder="Adresa de email" value="">
					<label class="label" for="floatingInput">Adresa de email</label>
				</div>
				<div class="form-floating mb-3 icol-2">
					<input type="text" class="form-control" id="floatingInput" placeholder="Telefon" value="">
					<label class="label" for="floatingInput">Telefon</label>
				</div>
				<div class="form-floating mb-3 icol-2">
					<input type="text" class="form-control" id="floatingInput" placeholder="Localitate" value="">
					<label class="label" for="floatingInput">Localitate</label>
				</div>
				<div class="form-floating w-100 mb-5">
					<textarea class="form-control textarea" placeholder="Subiect" id="floatingTextarea" value="" oninput="auto_grow(this)"></textarea>
					<label class="label" for="floatingTextarea">Subiect</label>
				</div>
				<div class="form-floating w-100 mb-5">
					<textarea class="form-control textarea" placeholder="Mesajul dumneavoastră" id="floatingTextarea" value="" oninput="auto_grow(this)"></textarea>
					<label class="label" for="floatingTextarea">Mesajul dumneavoastră</label>
				</div>
				<button type="submit" class="btn btn-outline-primary mt-6">Trimite mesajul</button>
			</form>
		</div>
	</div>
</section>