<div class="card">
    <div class="card-header">
        <h1>Record</h1>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Mobile No</td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'model/model.php';
                $model = new Model();
                $rows = $model->retrieve();
                // var_dump($row);
                $i = 1;
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                        # code...
                        $userID = $row['userID'];
                        $fname = $row['fname'];
                        $lname = $row['lname'];
                        $email = $row['email'];
                        $number = $row['number'];
                ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $fname . ' ' . $lname; ?></td>
                        <td><?php echo $email; ?></td>
                        <td><?php echo $number; ?></td>
                        <td>
                            <a class="btn btn-success eye" href=".?page=read&userID=<?php echo $userID; ?>">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                            <a class="btn btn-primary" href=".?page=edit&userID=<?php echo $userID; ?>">
                                <i class="bi bi-pencil-fill"></i>
                            </a>
                            <a class="btn btn-danger" href=".?page=delete&userID=<?php echo $userID; ?>" name="delete">
                                <i class="bi bi-trash-fill"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                    }
                } else {
                    echo "No data found!";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>