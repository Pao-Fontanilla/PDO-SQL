<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
		table, th, td {
		  border:1px solid black;
          width: 25%
		}
	</style>
</head>
<body>
    <?php 
    //no.3 
    //how fetchAll() is used w/ "<pre>"
    //$stmt = $pdo->prepare("SELECT * FROM student");
    //if ($stmt->execute()){
        //echo "<pre>";
        //print_r($stmt->fetchAll());
        //echo "<pre>";
	//}

    //no.4
    //how fetch() is used w/ "<pre>"
    //$stmt = $pdo->prepare("SELECT * FROM student");
    //if ($stmt->execute()){
        //echo "<pre>";
        //print_r($stmt->fetch());
        //echo "<pre>";
    //}

    //no.5
    //demo insertion of record in database
    //$query = "INSERT INTO Student (student_id, enrolled_subject_id, first_name, last_name, grade_level) 
    //VALUES (?, ?, ?, ?, ?)";

    //$stmt = $pdo->prepare($query);
    //$executeQuery = $stmt->execute(
        //[6, 1, 'James', 'Rodenas', 12]
    //);

    //if ($executeQuery) {
        //echo "Query successful!";
    //}
    //else{
        //echo "Query failed";
    //}

    //no.6
    //delete of record in database
    //$query = "DELETE FROM Student WHERE student_id = 2";

    //$stmt = $pdo->prepare($query);
    //$executeQuery = $stmt->execute();

    //if ($executeQuery) {
        //echo "Delete successful!";
    //}
    //else{
        //echo "Delete failed";
    //}

    //no.7
    //updating a user in database
    //$query = "UPDATE Student SET first_name = ? WHERE student_id = 1";

    //$stmt = $pdo->prepare($query);
    //$executeQuery = $stmt->execute(
        //["Lance"]
    //);

    //if ($executeQuery) {
        //echo "update successful!";
    //}
    //else{
        //echo "update failed";
    //}

    //no.8
    //demo SQL query's result set on an html table
    //$query = "SELECT first_name, last_name FROM Student";
    
    //$stmt = $pdo->prepare($query);
    //execute
    //$executeQuery = $stmt->execute();
    //verify
    //if ($executeQuery){
        //$students = $stmt->fetchAll();
    //}

    //else{
        //echo "query failed";
    //}

    ?>

    <table>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php foreach ($students as $row) { ?>
            <tr>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['last_name'] ?></td>
            </tr>
        <?php } ?>
    </table>
    
</body>
</html>