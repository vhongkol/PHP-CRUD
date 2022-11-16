<?php
require 'db_con.php';
?>

<?php include('includes/header.php'); ?> 

<div class="container mt-5">
  
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>People View Details
              <a href="index.php"class="btn btn-danger float-end">Back</a>
            </h4>
            <div class="card-body">
                
                <?php
                if(isset($_GET['id']))
                {
                    $people_id = mysqli_real_escape_string($con, $_GET['id']);
                    $query= "SELECT * FROM people WHERE id='$people_id' ";
                    $query_run =mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        $people = mysqli_fetch_array($query_run);
                        ?>                  

                            <div class="mb-3">
                                <label>Name</label>
                                <p class= "form-control">
                                <?= $people['name'];?>   
                                </p>
                            </div>

                            <div class="mb-3">
                                <label>Age</label>
                                <p class= "form-control">
                                <?= $people['age'];?>   
                                </p>
                            </div>

                            <div class="mb-3">
                                <label>Sex</label>
                                <p class= "form-control">
                                <?= $people['sex'];?>   
                                </p>
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <p class= "form-control">
                                <?= $people['phone'];?>   
                                </p>
                            </div>

                            <div class="mb-3">
                                <label>Country</label>
                                <p class= "form-control">
                                <?= $people['country'];?>   
                                </p>
                            </div>

                        <?php
                        }
                        else
                        {
                            echo "<h5>No Such Id Found!</h5>";
                        }
                    }
                    ?>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <?php include('includes/footer.php'); ?> 