<?php
/*
 * VIỆT FRAME WORK
 * FRAMEWORK VIỆT CHO NGƯỜI VIỆT
 * 
 * NHÓM PHÁT TRIỂN          Việt Framework Group
 * NĂM PHÁT TRIỂN           2014
 * TRANG CHỦ                http://vietframework.com
 * HÒM THƯ                  admin@vietframework.com
 * NGÀY VIẾT                03/06/2014
 * PHIÊN BẢN                2.0.0
 * BẢN QUYỀN                HỆ THỐNG MÃ NGUỒN MỞ NHƯNG VUI LÒNG TÔN TRỌNG CÁC THÔNG TIN NHÓM PHÁT TRIỂN
 */

/*
 * CHỨC NĂNG TỆP:
 * Tệp báo lỗi khi xảy ra các lỗi thuộc về SQL
 */
?>
<div class="header">
    <span><?php echo $maLoi; ?> - Mã Lỗi: <?php echo $mangLoiPHP[0]; ?></span>
</div>
<div class="article">
    <p><strong>Lỗi SQL: </strong><?php echo $mangLoiPHP[1]; ?></p>
</div>
<div class="footer">
    <p><strong>Lưu ý: </strong> bạn có thể tạo 1 trang báo lỗi này tùy thích theo ý bạn bằng cách khởi tạo 1 tệp theo đường dẫn: <?php echo DUONGDANTHUMUCTRANG . "hienthi" . DS . "baoloi" . DS . $mangLoi[$maLoi]['Tệp Báo Lỗi'] . ".php"; ?></p>
</div>