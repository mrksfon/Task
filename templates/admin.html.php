<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <?php include __DIR__ . '/../templates/bootstrap.html.php' ?>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
    <form class="form-inline my-2 my-lg-0" action="/logout" method="GET">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
    </form>
  </div>
</nav>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Description</th>
      <th scope="col">Approve</th>
      <th scope="col">Reject</th>
    </tr>
  </thead>
  <tbody>
      <?php foreach($comments as $comment): ?>
    <tr>
      <th scope="row"><?=$comment->id?></th>
      <td><?=$comment->name?></td>
      <td><?=$comment->email?></td>
      <td><?=$comment->description?></td>
      <td>
            <form class="form-inline my-2 my-lg-0" action="/updatecomment" method="POST">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Approve</button>
                <input type="hidden" name="id" value="<?=$comment->id?>">
            </form>
      </td>
      <td>
            <form class="form-inline my-2 my-lg-0" action="/deleteComment" method="POST">
                <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Reject</button>
                <input type="hidden" name="id" value="<?=$comment->id?>">
            </form>
      </td>
    </tr>
      <?php endforeach; ?>
  </tbody>
</table>
      
</body>
</html>