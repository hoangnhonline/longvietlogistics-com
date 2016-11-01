<?php
/**
 * The template for displaying all single posts
 *
 * @package WordPress
 * @subpackage i-transform
 * @since i-transform 1.0
 */
get_header();
if(qtrans_getLanguage()=='en'){
	$arrLang = array(
		'tieu_de' => 'Freight request',
		'ten'            => 'Name',
		'email'          => 'Email',
		'dien_thoai'      => 'Phone number',
		'noi_nhan_hang'  =>'Palce of receipt',
		'noi_giao_hang'  =>'Place of dilivery',
		'ten_hang_hoa'   =>'Description of goods',
		'trong_luong'=>'Weight, measurement',
		'loai_cont'=>'Kinds of container',
        'other' => 'Other request',
        'error_ten' => 'Please enter name.',
        'error_dien_thoai' => 'Please enter phone number.',
        'error_noi_nhan_hang' => 'Please enter place of receipt.',
        'error_noi_giao_hang' => 'Please enter place of dilivery.',
        'error_email_blank' => 'Please enter email.',
        'error_email_invalid' => 'Email invalid.',
        'thanh_cong' => 'Send request success.',
        'bao_loi' => 'An error occurred,please try again later'

	);
}else{
	$arrLang = array(
		'tieu_de' => 'Yêu cầu vận chuyển',
		'ten'            => 'Họ tên',
		'email'          => 'Email',
		'dien_thoai'      => 'Điện thoại',
		'noi_nhan_hang'  => 'Nơi nhận hàng',
		'noi_giao_hang'  =>'Nơi giao hàng',
		'ten_hang_hoa'   =>'Tên hàng hóa',
		'trong_luong'=>'Trọng lượng',
		'loai_cont'=>'Loại container',
        'other' => 'Yêu cầu khác',
        'error_ten' => 'Chưa nhập họ tên.',
        'error_dien_thoai' => 'Chưa nhập số điện thoại.',
        'error_noi_nhan_hang' => 'Chưa nhập nơi nhận hàng.',
        'error_noi_giao_hang' => 'Chưa nhập nơi giao hàng',
        'error_email_blank' => 'Chưa nhập email.',
        'error_email_invalid' => 'Email không hợp lệ.',
        'thanh_cong' => 'Gửi yêu cầu thành công.',
        'bao_loi' => 'Đã có lỗi xảy ra. Vui lòng thử lại'

	);
}
?>

<div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

        <?php /* The loop */ ?>
        <?php while (have_posts()) : the_post(); ?>

            <article class="post-2 page type-page status-publish hentry" id="post-2">
                <header class="entry-header">

                    <h1 class="entry-title">Freight request</h1>
                </header><!-- .entry-header -->

                <div class="entry-content">
                    <form action="../send_mail.php" method="post" id="freightform" class="comment-form" novalidate="">
                        <p class="comment-notes">Your email address will not be published.</p>
                        <p class="comment-form-author"><label for="author"><?php echo $arrLang['ten']; ?><span class="red">&nbsp*&nbsp</span></label>
                            <input id="ten" name="ten" type="text" value="" size="30"><i id="error_ten" class="error" class="requireds"><?php echo $arrLang['error_ten']; ?></i>
                        </p>
                        <p class="comment-form-email"><label for="email"><?php echo $arrLang['email']; ?><span class="red">&nbsp*&nbsp</span></label>
                            <input id="email_customer" name="email_customer" type="email" value="" size="30"><i id="error_email" class="error"><?php echo $arrLang['error_email']; ?></i>
                        </p>
                        <p class="comment-form-url"><label for="url"><?php echo $arrLang['dien_thoai']; ?><span class="red">&nbsp*&nbsp</span></label>
                            <input id="dien_thoai" name="dien_thoai" type="text" value="" size="30" class="requireds"><i id="error_dien_thoai" class="error"><?php echo $arrLang['error_dien_thoai']; ?></i>
                        </p>
                        <p class="comment-form-author"><label for="author"><?php echo $arrLang['noi_nhan_hang']; ?><span class="red">&nbsp*&nbsp</span></label>
                            <input id="noi_nhan_hang" name="noi_nhan_hang" type="text" value="" size="30" class="requireds"><i id="error_noi_nhan_hang" class="error"><?php echo $arrLang['error_noi_nhan_hang']; ?></i>
                        </p>
                        <p class="comment-form-email"><label for="email"><?php echo $arrLang['noi_giao_hang']; ?><span class="red">&nbsp*&nbsp</span></label>
                            <input id="noi_giao_hang" name="noi_giao_hang" type="text" value="" size="30" class="requireds"><i id="error_noi_giao_hang" class="error"><?php echo $arrLang['error_noi_giao_hang']; ?></i>
                        </p>
                        <p class="comment-form-author"><label for="author"><?php echo $arrLang['ten_hang_hoa']; ?></label>
                            <input id="ten_hang_hoa" name="ten_hang_hoa" type="text" value="" size="30">
                        </p>
                        <p class="comment-form-email"><label for="email"><?php echo $arrLang['trong_luong']; ?></label>
                            <input id="trong_luong" name="trong_luong" type="text" value="" size="30">
                        </p>
                        <p class="comment-form-url"><label for="url"><?php echo $arrLang['loai_cont']; ?></label>
                            <input id="loai_cont" name="loai_cont" type="text" value="" size="30">
                        </p>
                        <p class="comment-form-comment"><label for="comment"><?php echo $arrLang['other']; ?></label>
                            <textarea id="other" name="other" cols="45" rows="8" aria-required="true"></textarea>
                        </p>
                        <input name="submit" type="button" id="btnSendRequest" value="Send request">
                        <input name="submit" type="submit" id="submit" value="Cancel">

                        </p>
                    </form>
                </div><!-- .entry-content -->

            </article>
            <?php itransform_post_nav(); ?>

        <?php endwhile; ?>

    </div><!-- #content -->
    <?php get_sidebar(); ?>
</div><!-- #primary -->
<div id="dialog-modal" title="Hệ thống đang xử lý.....">
  <p id="loading_image"></p>
</div>
<style type="text/css">
    span.red, i.error{
        color:red;
    }
    i.error{margin-left: 10px;font-size:12px;display: none}
    .ui-dialog .ui-dialog-title {font-size:12px}
    .ui-widget-header {
    background: none;
    color: #FFF;
    font-weight: bold;
    background-color: #DC241C;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
 <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript">
function validateEmail(sEmail) {
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    if (filter.test(sEmail)) {
        return true;
    }
    else {
        return false;
    }
}
	$(document).ready(function() {
        $('i.error').hide();
	   $('#btnSendRequest').click(function() {
            var flag = false;
            var sName = $.trim($('#ten').val());
	        if (sName.length == 0) {
	            $('#error_ten').show();
                $('#ten').css('1px solid #DC241C');
	        }else{
                flag = true;
            }

	        var sEmail = $.trim($('#email_customer').val());
	        if (sEmail.length == 0) {
	            $('#error_email').text("<?php echo $arrLang['error_email_blank'];?>").show();
                $('#email_customer').css('1px solid #DC241C');
	        }else{
                flag = true;
            }
	        if (!validateEmail(sEmail)) {
	            $('#error_email').text("<?php echo $arrLang['error_email_invalid'];?>").show();
                $('#ten').css('1px solid #DC241C');
	        }else{
                flag = true;
            }
            var dien_thoai = $.trim($('#dien_thoai').val());
	        if (dien_thoai.length == 0) {
	            $('#error_dien_thoai').show();
                $('#dien_thoai').css('1px solid #DC241C');
	        }else{
                flag = true;
            }

            var noi_nhan_hang = $.trim($('#noi_nhan_hang').val());
	        if (noi_nhan_hang.length == 0) {
	            $('#error_noi_nhan_hang').show();
                $('#noi_nhan_hang').css('1px solid #DC241C');
	        }else{
                flag = true;
            }

            var noi_giao_hang = $.trim($('#noi_giao_hang').val());
	        if (noi_giao_hang.length == 0) {
	            $('#error_noi_giao_hang').show();
                $('#noi_giao_hang').css('1px solid #DC241C');
	        }else{
                flag = true;
            }
            if(flag==false){
                $('html,body').animate({ scrollTop:  $("#breadcrumb").offset().top }, 'slow', function () {});
            }else{
                $.ajax({
                    url: '../send_mail.php',
                    type: "POST",
                    data:{
                        'name': sName,
                        'email_customer' : sEmail,
                        'dien_thoai' :dien_thoai,
                        'noi_nhan_hang': noi_nhan_hang,
                        'noi_giao_hang':noi_giao_hang,
                        'ten_hang_hoa' : $.trim($('#ten_hang_hoa').val()),
                        'trong_luong' :$.trim($('#trong_luong').val()),
                        'loai_cont': $.trim($('#loai_cont').val()),
                        'other':$.trim($('#other').val())
                    },
                    beforeSend:function(){
                        $('#loading_image').html('<div style="float:left;width:250px;text-align:center;padding-top:30px;color:red"><img src="http://longvietlogistics.com/wp-content/uploads/2014/03/loading2.gif"></div>').show();
                    },
                    success: function(html){
                        if($.trim(html)=='1'){
                            $('#loading_image').html('<div style="float:left;width:250px;text-align:center;padding-top:30px;color:#0171B7"><?php echo $arrLang['thanh_cong']; ?></div>').show();
                            $('input, textarea').val('');
                        }else if($.trim(html)=='0'){
                            $('#loading_image').html('<div style="float:left;width:250px;text-align:center;padding-top:30px;color:red"><?php echo $arrLang['bao_loi']; ?></div>').show();
                            return false;
                        }else{
                            $('#loading_image').html('<div style="float:left;width:250px;text-align:center;padding-top:30px;color:red">'+html+'</div>').show();
                            return false;
                        }
                       setTimeout(function(){
                         window.location.href="http://longvietlogistics.com";
                       },3000);
                    }
                });
            $( "#dialog-modal" ).dialog({
                    height: 200,
                    width:300
                  });
            }
            return flag;
	    });
        $('input.required').blur(function(){
            if($.trim($(this).val())!=''){
                $('i.error').hide();
            }
        });
	});
</script>
<?php get_footer(); ?>