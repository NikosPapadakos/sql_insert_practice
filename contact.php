<?php require 'components/head.php';?>



<div class="container" >
    <div class="row">
        <div class="col 6"
            <div class="mt-5">
                <h3 class="sendH1">Send me your email Ill contact you </h3>
            </div>

            <form class="mt-5" action="db.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input for="email" name="email" pattern="^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$" type="email" class="form-control" id="email" aria-describedby="emailHelp"  size="50" required>
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            
            <button type="submit" value="Submit" class="btn btn-primary">Submit</button>
            </form>
        </div>   
    </div>
</div>


<?php require 'components/footer.php';?>

