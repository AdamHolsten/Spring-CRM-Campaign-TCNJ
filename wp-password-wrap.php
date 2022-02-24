<?php
// STARTS - wrapp your content with this conditional statement
if ( post_password_required() ) {

    // if your post is password protected with our Pro version, show our password form instead
    echo '<div style="text-align:center;">' . get_the_password_form() . '</div>';

}/* display the password protected content if the correct password is entered */ 
else {
?>


    <?php
 }
// ENDS - hide custom fields with PPWP password protection
?>
