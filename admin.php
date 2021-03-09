<?php
session_start(); // always this at start of file 
include 'include/functions.php';


$adminLoggedIn = false;

if (isset($_SESSION['name'])) {
echo '<p>Hello ' . $_SESSION['name'] . '</p>';

     deleteSessBtn(); 
      // logout button!
  }

 // some text DCSadmin01


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

// if ($adminLoggedIn) {

// echo '<p>Hello ' . $_SESSION['name'] . '</p>'; 
// registerForm(); 
// } else {
//     // adminForm();
// }


    // if ($_SESSION['name'] === 'Admin') {
    //     deleteSessBtn();
    //     // registerForm();
    //     echo "Admin is logged in";
    // } else {
    //     adminForm();
    // }
    //     if (isset($_POST['destroySession'])) {
    //     // call function to obliterate session
    //     destroySession();
    //     }


// if ($adminLoggedIn) {
// echo '<p>Hello ' . $_SESSION['name'] . '</p>';
//     registerForm(); 
// } else {
//     adminForm();
// }

?>
<!DOCTYPE html>
<html>
<?php include 'include/head.php' ?>

    <body>
        <div id="wrapper">
        <?php $self = htmlentities($_SERVER['PHP_SELF']); 


            // adminForm();


         ?>





        <hr>

        <h1>Welcome to the DCS Admin Page <?php if ($adminLoggedIn) {
            
         echo $_SESSION['name']; } ?></h1>

<?php     
if ($_SESSION['name'] === 'Admin') {
        registerForm();
        echo $_SESSION['name']. " is logged in";
        secureLinks();
    } else {
        adminForm();
    }
        if (isset($_POST['destroySession'])) {
        // call function to obliterate session
        destroySession();
        }

// new user code, to write into db.txt file
      if (isset($_POST['register'])) {
        $trim = $_POST['title'];
        $data = array(
          trim($_POST['username']),
          trim($_POST['password']),
          
        );

        $userData = $data['0'] . ':' . $data['1'] . PHP_EOL;

      
     $handle = fopen('db.txt', 'a+');
     // $title = $_POST['title'] . ':'; 
     // $firstName = $_POST['fN'] . ':'; 
     // $lastName = $_POST['lN'] . PHP_EOL;
     // $dataArray = [$title, $firstName, $lastName];
     $result = fwrite($handle, $userData);
     if ($result === false) {
      echo '<p>Oops! data not written</p>';
    } else {
    echo '<p>Wrote '.$result.' bytes</p>';
    }
  }

        ?>


     
        <ul>

            <li><a href="index.php?<?php echo SID; ?>">Home</a></li>
            <li><a href="admin.php?<?php echo SID; ?>">Admin</a></li>
            <li><a href="intranet.php?<?php echo SID; ?>">Intranet</a></li>
            <li><a href="dummypage.php?<?php echo SID; ?>">dummypage</a></li>
        </ul>

            <p>
                DCSadmin01 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam massa eros, iaculis sed eleifend nec, ullamcorper sit amet ante. Aliquam interdum venenatis semper. Proin eu nisi augue. Phasellus ex orci, faucibus et tortor nec, vulputate egestas tortor. Aliquam vel erat est. Mauris vestibulum mauris semper urna fermentum, non dignissim odio euismod. Integer tortor erat, volutpat eu egestas quis, consectetur sed diam. Phasellus auctor risus eget elit faucibus condimentum. Suspendisse tempus sagittis turpis, ut blandit purus hendrerit malesuada.
            </p>

            <p>
                Nulla id fringilla tellus. Etiam ut ipsum nec tellus blandit dapibus a nec neque. Maecenas justo risus, sollicitudin at nunc vitae, tincidunt eleifend purus. Quisque eros nibh, ullamcorper quis purus sagittis, suscipit vehicula enim. Nullam hendrerit consectetur urna ut dignissim. Donec eu laoreet nibh. Pellentesque elit nibh, accumsan nec turpis ut, finibus consectetur eros. Aliquam eget justo eu sapien viverra egestas. Integer non lacus at risus fringilla facilisis eu consequat mi.
            </p>
        
        </div>
    </body>



</html>