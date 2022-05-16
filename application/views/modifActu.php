<div class=" container col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Modification d'Actualités</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
             <form action="<?php echo site_url("ActuBackController/modifierActu"); ?>" method="post"> 
                <input type="hidden" name="id" value="<?php echo $actualite['id'] ?>" />

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeText">Date</label>
                <input name="date" type="date" id="typeText" value="<?php echo $actualite['date'] ?>" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeText">Titre</label>
                <input name="titre" type="text" id="typeText" value="<?php echo $actualite['titre'] ?>" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeText">Description</label>
                <textarea name="description"  id="typeText" class="form-control form-control-lg" ><?php echo $actualite['description'] ?></textarea>
              </div>

              <button class="btn btn-outline-dark btn-lg px-5" type="submit">Modifier</button>
</form>
</div>
</div>
</div>