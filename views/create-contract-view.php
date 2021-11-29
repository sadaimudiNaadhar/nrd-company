<?php set_header() ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <div class="w3-container" id="contact" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Create Contract</b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">


        <form action="index.php" method="POST">

            <div class="mb-3 col-md-4">
                <label for="t_name">Enter Client Name:</label>
                <input type="text" class="form-control" id="t_name" placeholder="" name="client_name">
            </div>


            <!-- The Team -->
            <div class="w3-row-padding w3-grayscale">
                <?php foreach ($flights as $data) {  ?>
                    <div class="w3-col m4 w3-margin-bottom">
                        <div class="w3-light-grey">
                            <img src="https://media.istockphoto.com/photos/passenger-airplane-flying-above-clouds-during-sunset-picture-id155439315?b=1&k=20&m=155439315&s=170667a&w=0&h=N2BzlH2GYabhWN0LXZTqTkVODuTb8qDAESQYCPzIig8=" alt="John" style="width:100%">
                            <div class="w3-container">
                                <h3><?php echo $data['id'] . " " . $data['name'] ?></h3>
                                <p class="w3-opacity">CEO & Founder</p>
                                <p>Fare: <?php echo $data['fare'] ?></p>
                                <p><input type="checkbox" name="selected_tickets[]" value="<?php echo $data['id'] ?>" /></p>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
            </div>

            <div class="w3-row-padding w3-grayscale">
                <?php foreach ($ships as $data) {  ?>
                    <div class="w3-col m4 w3-margin-bottom">
                        <div class="w3-light-grey">
                            <img src="https://image.cnbcfm.com/api/v1/image/106042801-1564151441390cruiseshot.png?v=1564168367" alt="John" style="width:100%">
                            <div class="w3-container">
                                <h3><?php echo $data['id'] . " " . $data['name'] ?></h3>
                                <p class="w3-opacity">CEO & Founder</p>
                                <p>Fare: <?php echo $data['fare'] ?></p>
                                <p><input type="checkbox" name="selected_tickets[]" value="<?php echo $data['id'] ?>" /></p>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
            </div>

            <div class="w3-row-padding w3-grayscale">
                <?php foreach ($buses as $data) {  ?>
                    <div class="w3-col m4 w3-margin-bottom">
                        <div class="w3-light-grey">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/6/63/LT_471_%28LTZ_1471%29_Arriva_London_New_Routemaster_%2819522859218%29.jpg" alt="John" style="width:100%">
                            <div class="w3-container">
                                <h3><?php echo $data['id'] . " " . $data['name'] ?></h3>
                                <p class="w3-opacity">CEO & Founder</p>
                                <p>Fare: <?php echo $data['fare'] ?></p>
                                <p><input type="checkbox" name="selected_tickets[]" value="<?php echo $data['id'] ?>" /></p>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
            </div>

            <div class="w3-row-padding w3-grayscale">
                <?php foreach ($trains as $data) {  ?>
                    <div class="w3-col m4 w3-margin-bottom">
                        <div class="w3-light-grey">
                            <img src="https://www.collinsdictionary.com/images/full/train_172581671_1000.jpg" alt="John" style="width:100%">
                            <div class="w3-container">
                                <h3><?php echo $data['id'] . " " . $data['name'] ?></h3>
                                <p class="w3-opacity">CEO & Founder</p>
                                <p>Fare: <?php echo $data['fare'] ?></p>
                                <p><input type="checkbox" name="selected_tickets[]" value="<?php echo $data['id'] ?>" /></p>
                            </div>
                        </div>
                    </div>
                <?php }  ?>
            </div>

            <input type="hidden" name="doAction" value="create-contract">

            <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Submit</button>
        </form>
    </div>


    <!-- End page content -->
</div>

<?php set_footer() ?>