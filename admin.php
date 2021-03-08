<?php
session_start(); // always this at start of file 
include 'include/functions.php';
$adminLoggedIn = false;

if (isset($_POST['adminPass'])) {
    $trimmed = trim($_POST['adminPass']);
    $adminPass = htmlentities($trimmed);
    $storedPass = 'DCSadmin01'; // read txt file for pw
    if ($adminPass === $storedPass) {
        // echo register form and welcome admin
        $adminLoggedIn = true;
        $_SESSION['name'] = 'Admin';  
    }
       

}

 // some text DCSadmin01

if ($adminLoggedIn) {
echo '<p>Hello ' . $_SESSION['name'] . '</p>';
    registerForm(); 
} else {
    adminForm();
}

?>
<!DOCTYPE html>
<html>
<?php include 'include/head.php' ?>

    <body>
        <?php $self = htmlentities($_SERVER['PHP_SELF']); 


           // adminForm();

         ?>





        <hr>

        <h1>Welcome to the DCS Home Page <?php if ($adminLoggedIn) {
            
         echo $_SESSION['name']; } ?></h1>

     

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
        

    </body>



</html>