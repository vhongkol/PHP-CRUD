<?php
session_start();
?>

<?php include('includes/header.php'); ?> 
    
  <div class="container mt-5">   
     <?php include('message.php'); ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Jesusa Ville
              <a href="index.php"class="btn btn-danger float-end">Back</a>
            </h4>
            <div class="card-body">
              
          <form action="code.php"method="POST">
            <div class="mb-3">
                <label>Name</label>
                <input type="text"name="name"class="form-control">
            </div>
            
            <div class="mb-3">
                <label>Age</label>
                <input type="text"name="age"class="form-control">
            </div>

            <div class="mb-3">
                <label>Sex</label>
                <input type="text"name="sex"class="form-control">
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="text"name="phone"class="form-control">
            </div>

            <div class="mb-3">
                <label>Country</label>
                <input type="text"name="country"class="form-control">
            </div>

            <div class="mb-3">
               <button type="submit" name="save_people" class="btn btn-primary">Save People</button>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php include('includes/footer.php'); ?> 