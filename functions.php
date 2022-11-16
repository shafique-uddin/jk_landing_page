<?php 

// HOME PAGE FORM
function opening_question_frm_func(){
    $frm = '<form action="" method="post">
    <p>
            তুমি কি এইচএসসি পরীক্ষায় ভালো ফলাফল করতে চাও ? 
            <input type="checkbox" name="hsc_xm_opone" value="yes" id="">হ্যা
            <input type="checkbox" name="hsc_xm_optwo" value="no" id="">না
        </p>
        <p>
            তুমি কি এডমিশন পরীক্ষায় ভালো ফলাফল করতে চাও ?
            <input type="checkbox" name="ad_xm_opone" value="yes" id="">হ্যা
            <input type="checkbox" name="ad_xm_optwo" value="no" id="">না
        </p>
        <p>
            তুমি কি তোমার স্বপ্নে বিশ্ববিদ্যালয় চান্স পেতে চাও ?
            <input type="checkbox" name="uni_chance_opone" value="yes" id="">হ্যা
            <input type="checkbox" name="uni_chance_optwo" value="no" id="">না
        </p>
        <p>
            তুমি কি এডমিশনের জন্য সেরা বই সংগ্রহ করে ঘরে বসেই ভালো প্রস্তুতি নিতে চাও ?
            <input type="checkbox" name="ad_book_opone" value="yes" id="">হ্যা
            <input type="checkbox" name="ad_book_optwo" value="no" id="">না
        </p>
        <p>
            <input type="submit" value="Submit" name="submit">
        </p>
        </form>';
    return $frm;
}
add_filter('opening_question_frm', 'opening_question_frm_func', 10);


// SECOND STAGE STUDENTS REGISGRATION (INFORMATION) FORM
function registration_frm_func(){
    $frm = '<form action="" method="post"> 
    <p>ছাত্র/ছাত্রীর নাম : <input type="text" name="" id=""></p>
    <p>মোবাইল নম্বর : <input type="text" name="" id=""></p>
    <p>ইমেইল এড্রেস : <input type="text" name="" id=""></p>
    <p>জেলা : <input type="text" name="" id=""></p>
    <p>কলেজের নাম: <input type="text" name="" id=""></p>
    <p> বর্তমানে পড়াশুনা করছেন :
        <select>
        <option>এইচএসসি ১ম বর্ষ</option>
        <option>এইচএসসি ২য় বর্ষ</option>
        <option>এডমিশন প্রস্তুতি</option>
        <select> 
    </p>
    <p>
        <input type="submit" value="Registration" name="ren">
    </p>
</form>';
return $frm;
}
add_filter('registration_frm', 'registration_frm_func', 10);
    // wp_redirect( “http://www.my-blog.com/a-new-destination”, 301 );
    // wp_redirect( home_url().'/registration-page', 301 ); exit;
    // var_dump(home_url().'/registration-page'); exit;

// RESULT [THANK YOU] INFORMATION SECTION
function successfully_reg_com_func(){
    $ThanksYouMSG = 'তোমার স্বপ্ন পূরণ করতে অবশ্যই তোমাকে জয়কলি’র নিম্মোক্ত বইগুলো পড়তে হবে -';
    return $ThanksYouMSG;
}
add_filter('successfully_reg_complete', 'successfully_reg_com_func', 10);


// HOMW PAGE FORM VALIDATION
// REGISTRATION FORM VALIDATION
// ACTIVE ALL DB (DATABASE) INFORMATION PLUGIN SETUP
/**
 * SHOWING ALL STUDENT NAME - REGISTRATION DATE - CURRENT
 */


?>