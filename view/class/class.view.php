<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Create Class</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>


   <section class="my-5 py-5">
      <div class="container">
         <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
               <h2>Create Class</h2>
               <a href="index.php" class="btn btn-primary">Back</a>
            </div>
            <div class="card-body">
               <form action="" method="POST">
                  <div class="mb-3">
                     <label for="class_no" class="form-label">Class No</label>
                     <input type="text" class="form-control" id="class_no" name="class_no" value="<?= $class_no?? "" ?>">
                     <span class="text-danger"><?= $class_no_err?? "" ?></span>
                  </div>
                  <div class="mb-3">
                     <label for="class_name" class="form-label">Class Name</label>
                     <input type="text" class="form-control" id="class_name" name="class_name" value="<?= $class_name?? "" ?>">
                     <span class="text-danger"><?= $class_name_err?? "" ?></span>
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </section>





   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>