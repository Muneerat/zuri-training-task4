
<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Add Course</h1>

<table >
    <tbody>
    <?php include 'view_course.php'; ?>
    </tbody>
</table>
<?php include "view_course.php"; ?>
  <form action="add_course.php" method="post">
   <label for="name">Name</label>
   <input type="text" name="full_name" placeholder="Enter your full name"><br><br>
   <label for="name">Course</label>
   <input type="text" name="course" placeholder="Enter your course"><br><br>

   <button type="submit" name="submit" value="submit">Sign up</button>
  </form>  

</body>
</html>