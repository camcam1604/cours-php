
   <?php include 'inc/header.php';?>
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="mb-3">
                    <label for="name" class="form-label"> Name : </label>
                    <input type="text" name="name" class="form-control" id="name">
                    <br>
                    <br>
                    <label for="email" class="form-label"> Email:</label>
                    <input type="email" name="email" class="form-control">
                    <br>
                    <br>
                    <label for="message" class="form-label"> Message:</label>
                    <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                    <br>
                    <br>
                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                    <br>
                    <br>
                </div>
            </form>
       
    <?php include 'inc/footer.php';?>