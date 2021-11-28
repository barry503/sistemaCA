<div class="card">
              <div class="card-header">
                <h3 class="card-title">usuarios activos</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>usuario</th>
                      <th>nombres</th>
                      <th style="width: 40px">Estado</th>
                    </tr>
                  </thead>
                  <tbody>

                    <?php $sql_online=$base->query("SELECT idusuario,usuario,nombre,apellido,status FROM usuario
                    WHERE status='En linea' AND idusuario != '$identificadorUserEnlinea' ")->fetchAll(PDO:: FETCH_OBJ);
                    #while($filaConectados = $conectados->fetch(PDO::FETCH_ASSOC)) { ?>
                      <?php foreach ($sql_online as $line): ?>
                   <tr>
                      <td><?php echo $line->idusuario; ?></td>
                      <td><?php echo $line->usuario; ?></td>
                      <td><?php echo $line->nombre.' , '.$line->apellido; ?></td>
                      <td><?php echo $line->status; ?>
                        <div class="progress progress-xs progress-striped active">
                          <div class="progress-bar bg-success" style="width: 90%"></div>
                        </div>
                      </td>
                      <!-- <td><span class="badge bg-success"><?php #echo $line->status; ?></span></td> -->
                    </tr>
                      <?php endforeach; ?>
            <!-- /.card -->
<!-- <?php // } ?> -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div> -->
            </div>
