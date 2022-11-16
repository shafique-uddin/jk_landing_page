<?php
wp_head();
if(isset($_REQUEST['submit'])){
    echo apply_filters('registration_frm', 'registration form is here');
}
elseif(isset($_REQUEST['ren'])){
    echo apply_filters('successfully_reg_complete', 'Successfully Registration Completed');
}
else{
    echo apply_filters('opening_question_frm', 'Opening form is here');
}
wp_footer();
?>