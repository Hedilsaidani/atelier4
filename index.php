<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Gestion des etudiants</title>
</head>
<body>
   <div class="container">
   <div class="jumbotron">
      <h3> Liste des étudiants DSI 21 g2 ISET BIZERTE 2019/2020</h3>
    </div>
    <button class="btn btn-primary" >Nouvel étudiant</button><br>
<table class="table table-hover">
       <thead>
          <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Opérations</th>
          </tr>
        </thead>
        <tbody>
            <?php
                include 'classes/student.class.php';
                $student =new students;
                $listeSt= $student->readAllStudents();
                while($data= $listeSt->fetch())
                    {
            ?>
              <tr>
                    <td><?=$data['id']?></td>
                    <td><?=$data['firstname']?></td>
                    <td><?=$data['lastname']?></td>
                    <td><?=$data['email']?></td>
                    <td><?=$data['phone']?></td>
              </tr>
            <?php 
            }
            ?>
        </tbody>

</table>
   </div> 
</body>
</html>





