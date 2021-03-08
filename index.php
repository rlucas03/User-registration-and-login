<?php
session_start(); // always this at start of file 
include 'include/functions.php';
if (isset($_POST['username'])) {
    $user = $_POST['username'];
    $_SESSION['name'] = $user;     

}

if (isset($_SESSION['name'])) {
echo '<p>Hello ' . $_SESSION['name'] . '</p>'; 
}

?>
<!DOCTYPE html>
<html>
<?php include 'include/head.php' ?>

    <body>
        <div id="wrapper">
        <nav>
        <ul>
         <li><a href="admin.php?<?php echo SID; ?>">Admin login</a></li></ul></nav>
        <?php $self = htmlentities($_SERVER['PHP_SELF']); 

            // echoing user form from function
           userForm();

         ?>




        <hr>

        <h1>Welcome to the DCS Home Page</h1>

        <ul>

            <li><a href="index.php?<?php echo SID; ?>">Home</a></li>
            <li><a href="admin.php?<?php echo SID; ?>">Admin</a></li>
            <li><a href="intranet.php?<?php echo SID; ?>">Intranet</a></li>
            <li><a href="dummypage.php?<?php echo SID; ?>">dummypage</a></li>
        </ul>

            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam massa eros, iaculis sed eleifend nec, ullamcorper sit amet ante. Aliquam interdum venenatis semper. Proin eu nisi augue. Phasellus ex orci, faucibus et tortor nec, vulputate egestas tortor. Aliquam vel erat est. Mauris vestibulum mauris semper urna fermentum, non dignissim odio euismod. Integer tortor erat, volutpat eu egestas quis, consectetur sed diam. Phasellus auctor risus eget elit faucibus condimentum. Suspendisse tempus sagittis turpis, ut blandit purus hendrerit malesuada.
            </p>

            <p>
                Nulla id fringilla tellus. Etiam ut ipsum nec tellus blandit dapibus a nec neque. Maecenas justo risus, sollicitudin at nunc vitae, tincidunt eleifend purus. Quisque eros nibh, ullamcorper quis purus sagittis, suscipit vehicula enim. Nullam hendrerit consectetur urna ut dignissim. Donec eu laoreet nibh. Pellentesque elit nibh, accumsan nec turpis ut, finibus consectetur eros. Aliquam eget justo eu sapien viverra egestas. Integer non lacus at risus fringilla facilisis eu consequat mi.
            </p>
        
        </div>
    </body>



</html>