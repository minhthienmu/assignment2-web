<?php
    $sql = "SELECT * FROM contact";
    $users = $conn->query($sql);
?>
<div class="card">
    <div class="card-header">
        <h2>List Contact</h2>
    </div>
    <div class="card-body">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th width='5%'>ID</th>
                    <th width='15%'>Name</th>
                    <th width='10%'>Phone</th>
                    <th width='15%'>Email</th>
                    <th width='15%'>Address</th>
                    <th width='30%'>Message</th>
                    <th width='10%'></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        while($row = $users->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><?php echo $row['message']; ?></td>
                            <td>
                                <a class="btn btn-info" href="index.php?p=viewcontact&id=<?php echo $row['id']; ?>" role="button">View</a>
                            </td>
                        </tr>
                    <?php } ?>
                    
                </tr>
            </tbody>
        </table>
    </div>
</div>
