<?php 

if(isset($_REQUEST['submit'])){
    function registration_frm_func(){
        $frm = '<form action="" method="post"> 
        <p>Student Name: <input type="text" name="" id=""></p>
        <p>Student Phone Number: <input type="text" name="" id=""></p>
        <p>Student Email: <input type="text" name="" id=""></p>
        <p>District: <input type="text" name="" id=""></p>
        <p>College Name: <input type="text" name="" id=""></p>
        <p>
            <input type="submit" value="Registration">
        </p>
    </form>';
    return $frm;
    }
    add_filter('registration_frm', 'registration_frm_func', 10);
    // wp_redirect( “http://www.my-blog.com/a-new-destination”, 301 );
    wp_redirect( home_url().'/registration-page', 301 ); exit;
    // var_dump(home_url().'/registration-page'); exit;
}
else {
    wp_redirect( home_url('/'), 301 );
}




?>