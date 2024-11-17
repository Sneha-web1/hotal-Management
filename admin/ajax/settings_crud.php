 <?php
    require('../inc/db_config.php');
    require('../inc/essentials.php');
    adminLogin();

    if(isset($_POST['get_general']))
    {
        $q = "SELECT* FROM settings WHERE sr_no=?
";
        $values = [1];
        $res = select($q,$values,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;

    }
    if(isset($_POST['upd_general']))
    {
        $frm_data = filteration($_POST);

        UPDATE `settings` SET `sr_no`='[value-1]',`site_title`='[value-2]',`site_about`='[value-3]',`shutdown`='[value-4]' WHERE 1
    }
?> 