<?php
include 'model/model.php';
$model = new Model();
$userID = $_REQUEST['userID'];
$row = $model->edit($userID);

// Data
$fname = $row['fname'];
$lname = $row['lname'];
$email = $row['email'];
$number = $row['number'];
$password = $row['password'];

if (isset($_POST['update'])) {
    if (isset($_POST['userID']) && isset($_POST['fname']) && isset($_POST['lname']) && isset($_POST['email']) && isset($_POST['number']) && isset($_POST['password'])) {
        if (!empty($_POST['userID']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['number']) && !empty($_POST['password'])) {

            $data['userID'] = $_POST['userID'];
            $data['fname'] = $_POST['fname'];
            $data['lname'] = $_POST['lname'];
            $data['email'] = $_POST['email'];
            $data['number'] = $_POST['number'];
            $data['password'] = $_POST['password'];

            $update = $model->update($data);

            if ($update) {
                echo "<script>alert('Update!');</script>";
                echo "<script>window.location.href='.?page=record';</script>";
            } else {
                echo "<script>alert('empty');</script>";
                echo "<script>window.location.href='record.php';</script>";
            }

            // $query = "UPDATE tbl_users fname='$fname',lname='$lname', email='$email',number='$number',password='$password' WHERE userID='$userID'";

        } else {
            echo "<script>alert('empty');</script>";
            echo "<script>window.location.href='edit.php?userID=$userID';</script>";
        }
    }
}

// var_dump($row);
if (!empty($row)) {
?>
    <div class="signUp-form">
        <form action="" method="post">
            <h2>Register</h2>
            <p class="hint-text">Create your account. It's free and only takes a minute.</p>
            <div class="form-group">
                <div class="row">
                    <input type="hidden" value="<?php echo $userID; ?>" name="userID">
                    <div class="col"><input type="text" class="form-control" value="<?php echo $fname; ?>" name="fname" placeholder="First Name" required="required"></div>
                    <div class="col"><input type="text" class="form-control" value="<?php echo $lname; ?>" name="lname" placeholder="Last Name" required="required"></div>
                </div>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="Email" required="required">
            </div>
            <div class="form-group">
                <input type="text" maxlength="11" class="form-control" value="<?php echo $number; ?>" name="number" placeholder="Mobile No." required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" value="<?php echo $password; ?>" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" value="<?php echo $password; ?>" name="confirm_password" placeholder="Confirm Password" required="required">
            </div>
            <div class="form-group">
                <label class="form-check-label"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
            </div>
            <div class="form-group">
                <button type="submit" name="update" class="btn btn-success btn-lg btn-block">Update</button>
                <button type="button" onclick="goBack()" class="btn btn-secondary btn-lg btn-block">Cancel</button>
            </div>
        </form>
        <div class="text-center">Already have an account? <a href="#">Sign in</a></div>
    </div>
<?php } ?>
<script src="assets/back.js"></script>