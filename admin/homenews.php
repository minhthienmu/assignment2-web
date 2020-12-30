<?php
    $sql = "SELECT * FROM homenews";
    $news = $conn->query($sql);
?>
<div class="card">
    <div class="card-header">
        <h2>List Home News</h2>
    </div>
    <div class="card-body">
        <a class="btn btn-primary" style="margin-bottom: 1rem" href="index.php?p=addhomenews" role="button">Add Home News</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th width='5%'>ID</th>
                    <th width='20%'>Image</th>
                    <th width='20%'>Title</th>
                    <th width='45%'>Body</th>
                    <th width='5%'></th>
                    <th width='5%'></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php
                        while($row = $news->fetch_array(MYSQLI_ASSOC)) { ?>
                        <tr>
                            <td><?php echo $row['id']; ?> </td>
                            <td><img src="../img/<?php echo $row['img'] ?>" class="img-thumbnail" alt="image"></td>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['body']; ?></td>
                            <td>
                                <a class="btn btn-info" href="index.php?p=edithomenews&id=<?php echo $row['id']; ?>" role="button">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-danger" href="index.php?p=deletehomenews&id=<?php echo $row['id']; ?>" role="button"  onclick="return confirm('Are you sure?');">Delete</a>
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
