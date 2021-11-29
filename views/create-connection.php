<?php set_header() ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

    <div class="w3-container" id="contact" style="margin-top:75px">
        <h1 class="w3-xxxlarge w3-text-red"><b>Create Connection</b></h1>
        <hr style="width:50px;border:5px solid red" class="w3-round">
  

        <form action="index.php" method="POST">
            <div class="mb-3 mt-3">
                <label for="email">Mode Of Transport:</label>
                <select name="mode" class="form-select">
                    <option value="1">Flight</option>
                    <option value="2">Train</option>
                    <option value="3">Bus</option>
                    <option value="4">Ship</option>
                </select>
            </div>
            <div class="mb-3 col-md-4">
                <label for="t_name">Name:</label>
                <input type="text" class="form-control" id="t_name" placeholder="" name="t_name">
            </div>
            <div class="mb-3 col-md-4">
                <label for="from">From:</label>
                <input type="text" class="form-control" id="from" placeholder="From Place" name="from">
            </div>

            <div class="mb-3 col-md-4">
                <label for="xxx">To:</label>
                <input type="text" class="form-control" id="xxx" placeholder="To Place" name="to">
            </div>
   
            <div class="mb-3 col-md-4">
                <label for="dep">Departure Date:</label>
                <input type="date" class="form-control" id="dep" placeholder="" name="depart_date">
            </div>
            <div class="mb-3  col-md-2">
                <label for="dep">Departure Time:</label>
                <input type="time" class="form-control" id="dep" placeholder="From Time" name="depart_time">
            </div>
            <div class="mb-3 col-md-4">
                <label for="arrival">Arrival Date:</label>
                <input type="date" class="form-control" id="arrival" placeholder="" name="arrival_date">
            </div>
            <div class="mb-3 col-md-2">
                <label for="arr">Arrival Time:</label>
                <input type="time" class="form-control" id="arr" placeholder="Arr Time" name="arr_time">
            </div>
            <div class="mb-3 col-md-4">
                <label for="fare">Fare:</label>
                <input type="text" class="form-control" id="fare" placeholder="" name="fare">
            </div>

            <input type="hidden" name="doAction" value="create-connection">

            <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">Submit</button>
        </form>
    </div>


    <!-- End page content -->
</div>

<?php set_footer() ?>