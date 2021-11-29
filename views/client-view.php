<?php set_header() ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <div class="w3-container" id="contact" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Show Client Data</b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">


        <form action="index.php" method="POST">

            <div class="mb-3 col-md-4">
                <label for="t_name">Client Name:</label>
                <input type="text" class="form-control" id="t_name" placeholder="" name="client_name">
            </div>


            <input type="hidden" name="doAction" value="store-client-sum">

            <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Submit</button>
        </form>
    </div>


    <!-- End page content -->
</div>

<?php set_footer() ?>