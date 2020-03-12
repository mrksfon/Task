<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include __DIR__ . '/../templates/bootstrap.html.php' ?>
</head>
<body>
    <nav class="navbar navbar-light bg-light" style="margin-bottom: 20px;">
        <a class="navbar-brand" href="">Welcome to TASK</a>
    </nav>
    <div class="container">
    <div class="row" style="margin-bottom: 40px;">
    <?php for($i = 0; $i < 3;$i++): ?>
        
        <div class="col">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="<?=$products[$i]->image?>" alt="<?=$products[$i]->description?>" width="300" height="200">
                <div class="card-body">
                    <h5 class="card-title"><?=$products[$i]->title?></h5>
                    <p class="card-text"><?=$products[$i]->description?></p>
                </div>
            </div>
        </div>
        
    <?php endfor; ?>
    </div>
    <div class="row" style="margin-bottom: 40px;">
    <?php for($i = 3; $i < 6;$i++): ?>
        
        <div class="col">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="<?=$products[$i]->image?>" alt="<?=$products[$i]->description?>" width="300" height="200">
                <div class="card-body">
                    <h5 class="card-title"><?=$products[$i]->title?></h5>
                    <p class="card-text"><?=$products[$i]->description?></p>
                </div>
            </div>
        </div>
        
    <?php endfor; ?>
    </div>

    <div class="row" style="margin-bottom: 40px;">
    <?php for($i = 6; $i < 9;$i++): ?>
        
        <div class="col">
            <div class="card" style="width: 20rem;">
                <img class="card-img-top" src="<?=$products[$i]->image?>" alt="<?=$products[$i]->description?>" width="300" height="200">
                <div class="card-body">
                    <h5 class="card-title"><?=$products[$i]->title?></h5>
                    <p class="card-text"><?=$products[$i]->description?></p>
                </div>
            </div>
        </div>
        
    <?php endfor; ?>
    </div>
    
    <div class="card w-100 p-3" style="margin-bottom: 40px;">
        <div class="card-header">
            Comments about company and products
        </div>
        <ul class="list-group list-group-flush">
           <?php foreach($comments as $comment): ?>
                <li class="list-group-item"><?=$comment->name?> says : <?=$comment->description?></li>
           <?php endforeach; ?>
        </ul>
    </div>
    <div class="leaveComment" style="margin-bottom: 40px;">
        <h2 class="text-center">Leave a comment</h2>
        <form action="/leavecomment" method="POST">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name"  placeholder="Enter name" name="name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <!-- <input type="textarea" class="form-control" id="description" placeholder="Description"> -->
                <textarea name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Leave comment</button>
        </form>
    </div>
    
    </div>
</body>
</html>