<div class="row">
    <div class="col-lg-7 col-md-7">
        <h2>Book a Discovery Call</h2><br />
        <?php if (!empty($_SESSION['sessErrorMsg'])) {?><p class="error-message"><?php echo $_SESSION['sessErrorMsg'];$_SESSION['sessErrorMsg']='';?></p><?php }?>
        <?php if (!empty($_SESSION['sessSuccessMsg'])) {?><p class="success-message"><?php echo $_SESSION['sessSuccessMsg'];$_SESSION['sessSuccessMsg']='';?></p><?php }?>
        <form class="" method="post" action="free-call.php">
            <select type="select" name="service" class="form-control" required>
                <option value="">-- Please Select --</option>
                <?php if (!empty(SERVICES)) { foreach (SERVICES as $service => $name) {
                    ?>
                    <option value="<?php echo $service;?>"><?php echo $name;?></option>
                <?php }}?>
            </select><br />
            <input type="text" name="name" placeholder="Enter name" class="form-control" required><br />
            <input type="email" name="email" placeholder="Enter email" class="form-control" required><br />
            <input type="moble" name="mobile" placeholder="Enter mobile" class="form-control" required><br />
            <textarea name="query" placeholder="Enter your query if you have..." class="form-control"></textarea><br />
            <input type="submit" value="Book Now" class=" btn btn-primary">
        </form>
    </div>
    <div class="col-lg-5 col-md-5 align-self-center text-center"><img src="img/about/imtiyaz.jpg" 
    class="img-fluid w-50 h-70 rounded-circle"></div>
</div>