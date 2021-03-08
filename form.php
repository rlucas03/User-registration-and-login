<?php
$output = ''

    $self = htmlentities($_SERVER['PHP_SELF']);
    $output .= '<form action="' . $self . '"method="post">
            <input type="text" name="username">

            <label for="password">Password</label>
            <input type="password" name="password">

            <input type="submit" name="login" value="    Login    " />

    </form>';

?>