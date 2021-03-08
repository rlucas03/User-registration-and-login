<?php



function adminForm () {
	$self = htmlentities($_SERVER['PHP_SELF']); 
$output =	'<form action="' . $self . '"method="post">
            <fieldset>
                <legend>Admin login</legend>
                

                <div>
                    <label for="password">Admin Password</label>
                    <input type="password" name="adminPass" id="password" />
                </div>

                 <input type="submit" name="login" value="Admin Login" />

            </fieldset>

        </form>';

      echo $output;
}


function userForm () {
	$self = htmlentities($_SERVER['PHP_SELF']); 
$output =	'<form action="' . $self . '"method="post">
            <fieldset>
                <legend>Your details</legend>
                
                <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="=username" />
                </div>

                <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                </div>

                 <input type="submit" name="login" value="Login user" />

            </fieldset>

        </form>';

      echo $output;
}

function registerForm() {
	$self = htmlentities($_SERVER['PHP_SELF']); 

	$output = '<form action="' . $self . '"method="post">
            <fieldset>
                <legend>New User Details</legend>
                
                <div>
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" />
                </div>                
               <div>
                    <label for="fN">First name</label>
                    <input type="text" name="fN" id="fN" />
                </div>               <div>
                    <label for="lN">Last name</label>
                    <input type="text" name="lN" id="fN" />
                </div>               <div>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" />
                </div>               <div>
                    <label for="username">Username</label>
                    <input type="text" name="newUser" id="username" />
                </div>               <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                </div> 



                 <input type="submit" name="Register" value="Register" />

            </fieldset>

        </form>';

      echo $output;


}


?>