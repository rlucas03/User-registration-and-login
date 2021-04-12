<?php
session_start(); // always this at start of file 
include 'include/functions.php';


$adminLoggedIn = false;

greetings();


  

 // some text DCSadmin01


if (isset($_POST['adminPass'])) {
    $trimmed = trim($_POST['adminPass']);
    $adminPass = htmlentities($trimmed);
    $storedPass = 'DCSadmin01'; // read txt file for pw later
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
    } else if ($_SESSION['name'] === 'Admin' || $_SESSION['name'] === 'User') {
        // echo "do nothing"; 
    } else {
      adminForm();

    }
        
    
        if (isset($_POST['destroySession'])) {
        // call function to obliterate session
        destroySession();
        }
      $data =[];
// new user code, to write into db.txt file
      if (isset($_POST['register'])) {
        if (isset($_POST['username'])) {
          
        
        $trim = trim($_POST['username']);
        $username = htmlentities($trim);
      }

        if (isset($_POST['password'])) {
          # code...
        
        $trimpw = trim($_POST['password']);
        $password = htmlentities($trimpw);
        // $password = md5($password);
      }

        

        array_push($data, $username, $password);

        $userData = $data[0] . ':' . $data[1] . PHP_EOL;

      
     $handle = fopen('db.txt', 'a+');
     // check if username already exists.. below
     $nameExists = false;
    $i = 0;
    while(!feof($handle)){
    $name = fgets($handle);
    list($user, $password) = explode(':', $name);
    if(trim($user) == $username) {
    $nameExists = true;
        echo "<h2>Username exists, choose another + $i.</h2> ";
        break;


     // new check uname code above
    } else if($nameExists === false) {
      echo "You can write to db ";
      
      echo " $i";
      $i++;
      // break;

    }
  }
  // new if here to write result
  if ($nameExists === false) {
     $result = fwrite($handle, $userData);
     if ($result === false) {
      echo '<p>Oops! data not written</p>';
    } else {
    echo '<p>Wrote '.$result.' bytes</p>';
    }
  }  

}

  echo "<br> username exists = $nameExists";

// temp disable writing user to db.txt
     // $result = fwrite($handle, $userData);
  //    if ($result === false) {
  //     echo '<p>Oops! data not written</p>';
  //   } else {
  //   echo '<p>Wrote '.$result.' bytes</p>';
  //   }
  // }
  


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