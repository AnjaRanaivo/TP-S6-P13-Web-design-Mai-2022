<div class=" container col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Ajout d'Actualités</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <!-- <form action="<?php //echo site_url("ActuBackController/ajouterActu"); ?>" method="post"> -->
                <?php echo form_open_multipart(site_url('ActuBackController/ajouterActu'));?>
          <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeText">Continent</label>
                <select name="idContinent" class="form-control form-control-lg" >
                    <?php for($i=0;$i<count($listContinent);$i++){ ?>
                        <option value="<?php echo $listContinent[$i]['id']; ?>"><?php echo $listContinent[$i]['nom']; ?></option>
                    <?php } ?>
                </select>
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeText">Date</label>
                <input name="date" type="date" id="typeText" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeText">Titre</label>
                <input name="titre" type="text" id="typeText" class="form-control form-control-lg" />
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeText">Description</label>
                <textarea name="description"  id="typeText" class="form-control form-control-lg" ></textarea>
              </div>

              <div class="form-outline form-white mb-4">
                <label class="form-label" for="typeText">Image</label>
                <input name="image" type="file" id="typeText" class="form-control form-control-lg" />
              </div>


              <button class="btn btn-outline-dark btn-lg px-5" type="submit">Ajouter</button>
</form>
</div>
</div>
</div>