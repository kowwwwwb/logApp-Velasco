<?php

    require('config/config.php');
    require('config/db.php');

    $query = 'SELECT * FROM PERSON';
    $result = mysqli_query($conn, $query);
    $persons = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($conn);

?>

<?php include('inc/header.php'); ?>
	<div class="container">
    <br/>
		<h2>Person's Log</h2>
        <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Address</th>
                    <th scope="col">Log Date and Time</th>
                    </tr>
                </thead>
		
			<div class="well">
                <tbody>
                <?php foreach($persons as $PERSON) : ?>
                    <tr>
                    <th scope="row"><?php echo $person['p_id'];?></th>
                    <td><?php echo $PERSON['firstname'];?></td>
                    <td><?php echo $PERSON['lastname'];?></td>
                    <td><?php echo $PERSON['address'];?></td>
                    <td><?php echo $PERSON['logdt'];?></td>
                    </tr>
                <?php endforeach; ?>   
                </tbody>
            </div>
        </table>
        <br/>

            <button type="button" class="btn btn-dark btn-sm" onclick="document.location='guestbook-login.php'">Logout</button>
</div>
<?php include('inc/footer.php'); ?>