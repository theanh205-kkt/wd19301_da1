<?php require_once "./views/layout/header.php"; ?>
<?php require_once "./views/layout/menu.php"; ?>

<style>
    .row {
        display: flex;
        justify-content: space-between; /* Giãn khoảng cách giữa các cột */
        align-items: flex-start; /* Căn cột theo hướng trên */
        
    }


    .col-lg-6,
    .col-md-6 {
        flex: 1;
        max-width: 48%; /* Giới hạn độ rộng mỗi cột */
        box-sizing: border-box;
    }

    .contact__content {
        width: 100%; 
        margin-top: 20px;
    }

    .contact__address ul {
        padding: 0;
        list-style: none;
    }

    .contact__address ul li {
        margin-bottom: 10px;
        text-align: left;
        margin-left: 300px;
    }

    .contact__address ul li h3 {
        font-size: 16px;
        margin-bottom: 5px;
    }

    .contact__form input,
    .contact__form textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .contact__form textarea {
        resize: none;
        height: 100px;
    }

    .contact__form .site-btn {
        background-color: #0A68FF;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-align: center;
        display: block;
        width: 100%;
    }

    .contact__form .site-btn:hover {
        background-color: #0056b3;
    }

    .contact__form h5{
        text-align: left;
    }
    .contact__map iframe {
        width: 100%;
        height: 100%;
        border: 0;

    }

    .contact__map {
        height: 500px;
        width: 100%; /* Đảm bảo bản đồ chiếm toàn bộ chiều rộng cột */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    @media (max-width: 768px) {
    .row {
        flex-direction: column;
    }

    .col-lg-6,
    .col-md-6 {
        max-width: 100%; /* Cho phép cột chiếm toàn bộ chiều rộng */
    }

    .contact__map {
        height: 300px;
    }
}

</style>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option">
<section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="contact__content">
                        <div class="contact__address">
                            <h5>THÔNG TIN LIÊN LẠC</h5>
                            <ul>
                                <li>
                                    <h6>Địa chỉ</h6>
                                    <p>Phố Trịnh Văn Bô - Hà Nội</p>
                                </li>
                                <li>
                                    <h6>Số điện thoại</h6>
                                    <p>
                                        <span>0327497662</span> | <span>0327497888</span>
                                    </p>
                                </li>
                                <li>
                                    <h6>Hỗ trợ</h6>
                                    <p>Support.nhom4@gmail.com</p>
                                </li>
                            </ul>
                        </div>
                        <br>
                        <hr>
                        <br>
                        <div class="contact__form">
                            <h5>GỬI TIN NHẮN</h5>                            
                            <br>
                            <form action="#">
                                <input type="text" placeholder="Họ tên">
                                <input type="text" placeholder="Email">
                                <input type="text" placeholder="Website">
                                <textarea placeholder="Tin nhắn"></textarea>
                                <button type="submit" class="site-btn">GỬI TIN NHẮN</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact__map">
                        <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62870.72819613462!2d105.70433070759542!3d9.982080038963828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a08906415c355f%3A0x416815a99ebd841e!2zVHLGsOG7nW5nIENhbyDEkeG6s25nIEZQVCBQb2x5dGVjaG5pYw!5e0!3m2!1svi!2s!4v1698323706006!5m2!1svi!2s"
                        allowfullscreen="">
                        </iframe>                        
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Contact Section End -->

<?php require_once "./views/layout/footer.php"; ?>