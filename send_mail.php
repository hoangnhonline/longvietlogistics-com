<?php
$to1 = "webphp.hoangnguyen@gmail.com";
$to2 = "mrhoang1989@gmail.com";

if($_COOKIE['lv_freight_request']!=9999){
    $subject = 'Khách hàng gửi yêu cầu vận chuyển';
    $name = trim(strip_tags($_POST['name']));
    $email_customer = trim(strip_tags($_POST['email_customer']));
    $dien_thoai = trim(strip_tags($_POST['dien_thoai']));
    $noi_nhan_hang = trim(strip_tags($_POST['noi_nhan_hang']));
    $noi_giao_hang = trim(strip_tags($_POST['noi_giao_hang']));
    $ten_hang_hoa = trim(strip_tags($_POST['ten_hang_hoa']));
    $trong_luong = trim(strip_tags($_POST['trong_luong']));
    $loai_cont = trim(strip_tags($_POST['loai_cont']));
    $other = trim(strip_tags($_POST['other']));

    $message = '<h3>THÔNG TIN KHÁCH HÀNG:</h3><table width="700px" cellpadding="10px" border="1px">';
    $headers = 'Content-Type: text/html; charset=UTF-8';
    if($name && $email_customer && $dien_thoai && $noi_nhan_hang && $noi_giao_hang){
        $message.='<tr><td width="100px">Họ tên</td><td>'.$name.'</td></tr>';
        $message.='<tr><td width="100px">Email</td><td>'.$email_customer.'</td></tr>';
        $message.='<tr><td width="100px">Điện thoại</td><td>'.$dien_thoai.'</td></tr>';
        $message.='<tr><td width="100px">Nơi nhận hàng</td><td>'.$noi_nhan_hang.'</td></tr>';
        $message.='<tr><td width="100px">Nơi giao hàng</td><td>'.$noi_giao_hang.'</td></tr>';
        $message.='<tr><td width="100px">Tên hàng hóa</td><td>'.$ten_hang_hoa.'</td></tr>';
        $message.='<tr><td width="100px">Trọng lượng</td><td>'.$trong_luong.'</td></tr>';
        $message.='<tr><td width="100px">Loại cont</td><td>'.$loai_cont.'</td></tr>';
        $message.='<tr><td width="100px">Yêu cầu khác</td><td>'.$other.'</td></tr>';
    }
    $message.='</table>';
    // Load WP components, no themes
    define('WP_USE_THEMES', false);
    require('wp-load.php');
}else{
    $error = 'Bạn vừa gửi yêu cầu gần đây.Mỗi lần gửi cách nhau 1h.Xin cảm ơn!';
}
// Call the wp_mail function, display message based on the result.
if($_COOKIE['lv_freight_request']!=9999){

    if( wp_mail( $to1, $subject, $message, $headers ) && wp_mail( $to2, $subject, $message, $headers )) {
        setcookie("lv_freight_request", 9999, time()+3600);
        echo "1";
    } else {
        echo "0";
    };
}else{
    echo $error;
}
?>