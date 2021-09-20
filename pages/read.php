<div class="col-md-5 mx-auto">
    <?php
    include 'model/model.php';
    $model = new Model();
    $userID = $_REQUEST['userID'];
    $row = $model->fetch_single($userID);

    // Fetch Data
    $fname = $row['fname'];
    $lname = $row['lname'];
    $email = $row['email'];
    $number = $row['number'];
    // var_dump($row);
    if (!empty($row)) {


    ?>
        <div class="card">
            <div class="card-header">
                <h2>Single Record</h1>
            </div>
            <div class="card-body">
                <p>Name: <?php echo $fname . ' ' . $lname; ?></p>
                <p>Email: <?php echo $row['email']; ?></p>
                <p>Contact No.:<?php echo $row['number']; ?></p>
                <hr>
                <button class="btn btn-primary" onclick="goBack()">Back</button>
            </div>
        </div>
    <?php } else {
        echo "No data!";
    } ?>
</div>
<script src="assets/back.js"></script>