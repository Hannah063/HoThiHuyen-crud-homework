<?php require_once('partial/header.php'); 
require_once('database/database.php');
?>
    <div class="container p-4">
        <? $id = intval($_GET['id']);
            $st = selectOnestudent($id);
            ?>
        <form action="update_model.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name" value="<?echo $st['name']?>">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Age" name="age" value="<?echo $st['age']?>">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" value="<?echo $st['email']?>">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Image URL" name="image_url" value="<?echo $st['profile']?>">
            </div>
            <input type="hidden" name="id" value="<?echo $id?>">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
    </div>
<?php require_once('partial/footer.php'); ?>