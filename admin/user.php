<?php
    $sql = "SELECT * FROM user";
    $users = $conn->query($sql);
?>
<div class="card">
    <div class="card-header">
        <h2>List Users</h2>
    </div>
    <div class="card-body">
        <a class="btn btn-primary" style="margin-bottom: 1rem" href="index.php?p=adduser" role="button">Add User</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th width='10%'>ID</th>
                    <th width='15%'>Username</th>
                    <th width='12%'>Password</th>
                    <th width='12%'>Phone</th>
                    <th width='15%'>Email</th>
                    <th width='20%'>Address</th>
                    <th width='6%'></th>
                    <th width='6%'></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        while($row = $users->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['username']; ?></td>
                            <td><?php echo $row['password']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td>
                                <a class="btn btn-info" href="index.php?p=edituser&id=<?php echo $row['id']; ?>" role="button">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="index.php?p=deleteuser&id=<?php echo $row['id']; ?>" role="button"  onclick="return confirm('Are you sure?');">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                    
                </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer text-muted">
        
    </div>
</div>
