<?php
session_start();
require 'db_con.php';
?>

<?php include('includes/header.php'); ?> 

<div class="container mt-5">      
    <?php include('message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>People Edit
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
                        <form action="code.php"method="POST">
                            <input type="hidden" name="people_id" value="<?= $people_id ?>">
 
                            <div class="mb-3">
                                <label>Name</label>
                                <input type= "text" name= "name" value= "<?= $people['name']?>" class= "form-control">
                            </div>

                            <div class="mb-3">
                                <label>Age</label>
                                <input type= "text" name= "age" value= "<?= $people['age']?>" class= "form-control">
                            </div>

                            <div class="mb-3">
                                <label>Sex</label>
                                <input type= "text" name= "sex" value= "<?= $people['sex']?>" class= "form-control">
                            </div>

                            <div class="mb-3">
                                <label>Phone</label>
                                <input type= "text" name= "phone" value= "<?= $people['phone']?>" class= "form-control">
                            </div>

                            <div class="mb-3">
                                <label>Country</label>
                                <input type= "text" name= "country" value= "<?= $people['country']?>" class= "form-control">
                            </div>

                            <div class="mb-3">
                            <button type="submit" name="update_people" class="btn btn-primary">
                                Update People</button>
                            </div>
                        </form>
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