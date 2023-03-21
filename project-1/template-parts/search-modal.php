<!-- Modal -->
<div class="modal fade search-modal" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="btn-close text-primary" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
	  	<form class="d-flex" action="<?php echo home_url(); ?>" id="search-form" method="get">
			<div class="input-group mb-3">
				<input class="form-control" type="text" name="s" id="s" value="Caută în site" onblur="if(this.value=='')this.value='Caută în site'"
				onfocus="if(this.value=='Caută în site')this.value=''" />
				<button class="btn btn-outline-primary ms-4" type="submit">Caută</button>
				<input type="hidden" value="submit" />
			</div>
		</form>
      </div>
    </div>
  </div>
</div>