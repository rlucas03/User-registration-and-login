<?php
$output ='';

  function userName($name) {
    if(strlen($name) > 150) {
        return false;
    }
    if ($name == '') {
        return false;
    }
    if (strpos($name, ' ') === false) {
        return false;
    }
    return true;
	}  

function greetings() {
	if (isset($_SESSION['name']) || isset($_SESSION['username'])) {

	echo '<p>Hello ' . htmlentities($_SESSION['name']) . ': ' . 
		htmlentities($_SESSION['username']) . '</p>'; 
	     deleteSessBtn(); 
	      // logout button!
	}	
}

	function secureLinks() {
		$output .= '<ul>

            <li><a href="DTresults.php?<?php echo SID; ?>">DTresults</a></li>
            <li><a href="P1results.php?<?php echo SID; ?>">P1results</a></li>
            <li><a href="PfPresults.php?<?php echo SID; ?>">PfPresults</a></li>
            </ul>';

            echo $output;
	}


	function deleteSessBtn() {
		$self = htmlentities($_SERVER['PHP_SELF']); 

		$output .= '<form action ="' . $self .'" method ="post"> 
					<input type ="submit" name ="destroySession" value ="Log out">

	</form>';
	echo $output;
	}

    function destroySession () {
            $_SESSION = array();
            if (ini_get("session.use_cookies")) {
                $yesterday = time() - (24 * 60 * 60); $params = session_get_cookie_params(); setcookie(session_name(), '', $yesterday,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"] );
            } 
            session_destroy();
            echo "Logged out";
            header('Location: '.$_SERVER['PHP_SELF']);

            
        
    }


function adminForm () {
	$self = htmlentities($_SERVER['PHP_SELF']); 
$output .=	'<form action="' . $self . '"method="post">
            <fieldset>
                <legend>Admin login</legend>
                

                <div class ="row">
                  <div class="col-25"> 
                    <label for="password">Admin Password</label>
                  </div>

                  <div class="col-75"> 
                    <input type="password" name="adminPass" id="password" />
                  </div>
                </div>

                 <input type="submit" name="login" value="Admin Login" />

            </fieldset>

        </form>';

      echo $output;
}


function userForm () {
	$self = htmlentities($_SERVER['PHP_SELF']); 
$output .=	'<form action="' . $self . '"method="post">
            <fieldset>
                <legend>User login</legend>
                
                
                <div class="row">
                  <div class="col-25">
                    <label for="username">Username</label>
                  </div>

                  <div class="col-75"> 
                    <input type="text" name="username" id="username" />
                  </div>
                </div>

                <div class="row">
                <div class="col-25">
                  <label for="password">Password</label>
                </div>

                <div class="col-75"> 
                  <input type="password" name="password" id="password" />
                </div>
                </div>

                <div class="row">
                 <input type="submit" name="login" value="Login user" />
                 </div>

            </fieldset>

        </form>';

      echo $output;
}

function registerForm() {
	$self = htmlentities($_SERVER['PHP_SELF']); 

	$output .= '<form action="' . $self . '"method="post">
            <fieldset>
                <legend>New User Details</legend>

                 <div>
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" />
                </div>               <div>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" />
                </div> 
                
                <div>
                    <label for="title">Title</label>
                    <select name="title" id="title">
								    <optgroup label="title">
								      <option value="mr">Mr</option>
								      <option value="miss">Miss</option>
								      <option value="mrs">Mrs</option>
								      <option value="doc">Doctor</option>
								    </optgroup>
								    </select>
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
                </div>               




                 <input type="submit" name="register" value="Register" />

            </fieldset>

        </form>';

      echo $output;


}


?>