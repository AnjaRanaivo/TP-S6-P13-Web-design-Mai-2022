<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Liste des Actualités</h3>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Titre</th>
                      <th>Date</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php for($i=0;$i<count($listeActu);$i++){ ?>
                        <tr>
                            <td><?php echo $listeActu[$i]['id'] ?></td>
                            <td><?php echo $listeActu[$i]['titre'] ?></td>
                            <td><?php echo $listeActu[$i]['date'] ?></td>
                            <td>
                                <form action="<?php echo site_url("ActuBackController/supprimer"); ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $listeActu[$i]['id'] ?>"/>
                                <button class="btn btn-outline-dark btn-md px-5" type="submit">Supprimer</button>
                                </form>
                            </td>
                            <td>
                                <form action="<?php echo site_url("ActuBackController/modification"); ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $listeActu[$i]['id'] ?>"/>
                                <button class="btn btn-outline-dark btn-md px-5" type="submit">Modifier</button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?> 
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        