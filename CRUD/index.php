<?php
  session_start();
  require 'db_con.php';
?>

<?php include('includes/header.php'); ?>

    <div class="container mt-4">
      <?php include('message.php'); ?>

      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>
                People Details
                <a href="people-create.php"class="btn btn-primary float-end">Add People</a>
              </h4>
            </div>
            <div class="card-body">
              <table class="table table=border table-striped">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>People Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    $query="SELECT * FROM people";
                    $query_run=mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run)>0)
                    {
                      foreach( $query_run as $people)
                      {
                        ?>
                        <tr>
                            <td><?= $people['id'];?></td>
                            <td><?= $people['name'];?></td>
                            <td><?= $people['age'];?></td>
                            <td><?= $people['sex'];?></td>
                            <td><?= $people['phone'];?></td>
                            <td><?= $people['country'];?></td>
                            <td>
                              <a href="people-view.php?id=<?= $people['id'];?>"class="btn btn-info btn-sm">View</a>
                              <a href="people-edit.php?id=<?= $people['id'];?>"class="btn btn-success btn-sm">Edit</a>
                              <form action="code.php"  method= "POST" class="d-inline">
                                <button type="submit" name="delete_people" value="<?=$people['id'];?>" class="btn btn-danger btn-sm">Delete</a>
                            </form>
                            </td>
                        </tr>
                        <?php
                      }
                    }
                    else
                    {
                      echo "<h5> No Record Found </h5>";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include('includes/footer.php'); ?> 