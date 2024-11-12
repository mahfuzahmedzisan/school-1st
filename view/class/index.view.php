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

        <?php if (isset($_GET['message'])): ?>
          <div class="alert alert-success" role="alert"><?= base64_decode($_GET['message']) ?></div>
        <?php endif; ?>

        <div class="card-header d-flex justify-content-between align-items-center">
          <h2>Create Class</h2>
          <a href="insert.php" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">SN</th>
                <th scope="col">Class No</th>
                <th scope="col">Class Name</th>
                <th scope="col">Status</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($result as $key => $value): ?>
                <tr>
                  <td><?= $key + 1 ?></td>
                  <td><?= $value['class_no'] ?></td>
                  <td><?= $value['class_name'] ?></td>
                  <td>
                    <span class="px-2 py-1 rounded btn <?= $value['status'] ? "btn-success" : "btn-warning" ?>">
                      <?= $value['status'] ? "Active" : "Deactive" ?>
                    </span>
                  </td>
                  <td>
                    <?= date("d-m-y H:i:s A", strtotime($value['created_at'])) ?>
                  </td>
                  <td>
                    <?= $value['updated_at'] ? date("d-m-y H:i:s A", strtotime($value['updated_at'])) : "Null" ?>
                  </td>
                  <td>
                    <a href="edit.php?id=<?= base64_encode($value['id']) ?>" class="btn btn-info">Edit</a>
                    <a href="status.php?id=<?= base64_encode($value['id']) ?>" class="btn <?= $value['status'] ? "btn-warning" : "btn-success" ?>">
                      <?= $value['status'] ? "Deactive" : "Active" ?>
                    </a>
                    <a href="delete.php?id=<?= base64_encode($value['id']) ?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>

        </div>
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>