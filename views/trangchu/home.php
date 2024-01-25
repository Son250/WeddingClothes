<!-- header close -->
<!-- content begin -->
<div class="no-bottom no-top" id="content">
    <div id="top"></div>
    <section id="section-hero" aria-label="section" class="full-height vertical-center" data-bgimage="url(../assets/images-view/background/7.jpg) bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="spacer-double sm-hide"></div>
                <div class="col-lg-6">
                    <h4><span class="id-color text-info">Nhanh kẻo hếttt</span></h4>
                    <div class="spacer-10"></div>
                    <h2 class="text-info">Wedding Clothes có tất cả mọi thứ bạn cần </h2>
                    <p class="lead"><i>Bạn sắp cưới nhưng chưa có gì để mặc hết? Đừng lo, đã có Wedding Clothes</i> </p>

                    <a class="btn-main bg-info" href="#">Chọn Váy Cưới</a>&nbsp;&nbsp;&nbsp;<a class="btn-main btn-black" href="#">Chọn Vest</a>
                </div>

                <div class="col-lg-6">
                    <img src="../assets/images-view/misc/Váy cưới banner2.jpg" class="img-fluid rounded img-banner" alt="">
                </div>

            </div>
        </div>
    </section>

    <section id="section-cars" class="no-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Top 5 mẫu nổi bật nhất</h2>
                    <p>Với kinh nghiệm hơn 20 năm trong ngành thiết kế váy cưới, các nhà thiết kế của chúng tôi luôn chú trọng sự tỉ mỉ tinh tế trong việc lựa chọn chất</p>
                    <div class="spacer-20"></div>
                </div>

                <div class="clearfix"></div>

                <div id="items-carousel" class="owl-carousel wow fadeIn">

                    <?php foreach ($productTop as $key => $value) : ?>

                        <div class="col-lg-12">
                            <div class="de-item mb30">
                                <div class="d-img">

                                    <img src="../assets/uploads/<?php echo $value['image'] ?>" class="img-fluid" alt="">
                                </div>
                                <div class="d-info">
                                    <div class="d-text">
                                        <h4><?= $value['productName'] ?></h4>
                                        <div class="d-item_like">
                                            <i class="fa fa-heart"></i><span>74</span>
                                        </div>
                                        <div class="d-atr-group">
                                            <span class="d-atr">View: <?= $value['view'] ?></span>
                                            <!-- <span class="d-atr">Bình luận: 2</span> -->
                                            <!-- <span class="d-atr"><img src="../assets/images-view/icons/3-green.svg" alt="">4</span>
                                            <span class="d-atr"><img src="../assets/images-view/icons/4-green.svg" alt="">SUV</span> -->
                                        </div>
                                        <div class="d-price">
                                            Giá thuê: <span><?= number_format($value['price'])  ?>đ</span>
                                            <a class="btn-main bg-info" href="?act=detailProduct&idsp=<?= $value['id'] ?>">Chi tiết</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>

            </div>
        </div>
    </section>


    <?php foreach ($tenDm as $key => $dm) : ?>

        <section id="section-cars" class="no-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 offset-lg-3 text-center">
                        <h2><?= $dm['name'] ?></h2>
                        <p>Với kinh nghiệm hơn 20 năm trong ngành thiết kế áo cưới, các nhà thiết kế của chúng tôi luôn chú trọng sự tỉ mỉ tinh tế trong việc lựa chọn chất</p>
                        <div class="spacer-20"></div>
                    </div>

                    <div class="clearfix"></div>

                    <div id="" class="row">

                        <?php
                        $productDm = getProductDm($dm['id']);
                        // $productDm = getProductDm(1);
                        foreach ($productDm as $stt => $value) : ?>

                            <div class="col-lg-3">
                                <div class="de-item mb30">
                                    <div class="d-img">

                                        <img src="../assets/uploads/<?php echo $value['image'] ?>" class="img-fluid" alt="">
                                    </div>
                                    <div class="d-info">
                                        <div class="d-text">
                                            <h4><?= $value['productName'] ?></h4>
                                         
                                            <div class="d-atr-group">
                                                <span class="d-atr">View: <?= $value['view'] ?></span>

                                            </div>
                                            <div class="">
                                                Giá thuê: <span class="text-md font-weight-bold"><?= number_format($value['price'])  ?>đ</span>
                                                <a class="btn-main bg-info" href="?act=detailProduct&idsp=<?= $value['id'] ?>">Chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                </div>
            </div>
        </section>
    <?php endforeach; ?>




    <!-- Bộ sưu tập  fixx cứng -->
    <section id="section-testimonials" class="no-top ">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <h2>Bộ sưu tập</h2>
                    <p>Với kinh nghiệm hơn 20 năm trong ngành thiết kế váy cưới, các nhà thiết kế của chúng tôi luôn chú trọng sự tỉ mỉ tinh tế trong việc lựa chọn chất</p>
                    <div class="spacer-20"></div>
                </div>
                <div class="col-md-4">
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right text-info"></i></div>
                            <h4>Le Jardin</h4>
                            <blockquote>
                                BST "Le Jardin" khắc hoạ những loài hoa đặc trưng trong khu vườn của đại danh hoạ. Hình ảnh thiên nhiên cũng được đan cài xuyên suốt qua các chi tiết cánh bướm, hoa lá, lông vũ. Ứng dụng các kỹ thuật draping, corset kết hợp tạo chi tiết 3D.
                                <span class="by">Le Jardin</span>
                            </blockquote>
                        </div>
                        <img src="../assets/images-view/do-cuoi/bo-suu-tap-1.jpg" class="img-fluid" alt="">
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right text-info"></i></div>
                            <h4>La Vie Est Belle</h4>
                            <blockquote>
                                Lấy cảm hứng từ niềm khao khát sâu sắc về sự thanh lịch và những giấc mơ hoa mộng về cái đẹp, BST “La Vie Est Belle” giới thiệu những thiết kế đầy lôi cuốn, là sự kết hợp khéo léo và quyến rũ của sự tinh tế, duyên dáng đầy mê hoặc… Toàn bộ chất liệu được sử dụng trong bộ sưu tập là chất liệu cao cấp
                                <span class="by">La Vie Est Belle</span>
                            </blockquote>
                        </div>
                        <img src="../assets/images-view/do-cuoi/bo-suu-tap-2.jpg" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="de-image-text">
                        <div class="d-text">
                            <div class="d-quote id-color"><i class="fa fa-quote-right text-info"></i></div>
                            <h4>THE BLOOM COLLECTION</h4>
                            <blockquote>
                                Món quà Bella muốn dành tặng cho những cô dâu yêu thích sự thanh lịch và muốn toả sáng với vẻ đẹp tự nhiên...
                                <span class="by">THE BLOOM COLLECTION</span>
                            </blockquote>
                        </div>
                        <img src="../assets/images-view/do-cuoi/bo-suu-tap-3.jpg" class="img-fluid" alt="">
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- Thống kê -->
    <section id="section-fun-facts" class="bg-color text-light bg-info">
        <div class="container">
            <div class="row g-custom-x force-text-center">
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer text-info" data-to="15425" data-speed="3000">0</h3>
                        Lượt xem
                        <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea consectetur.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer" data-to="8745" data-speed="3000">0</h3>
                        Lượt bình luận
                        <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea consectetur.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer" data-to="7035" data-speed="3000">0</h3>
                        Lượt đánh giá 5 sao
                        <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea consectetur.</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-sm-30">
                    <div class="de_count wow fadeInUp">
                        <h3 class="timer" data-to="5908" data-speed="3000">0</h3>
                        Lượt thuê
                        <p class="d-small">Lorem ipsum adipisicing officia in adipisicing do velit sit tempor ea consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>
<!-- content close -->
<a href="#" id="back-to-top"></a>
<!-- footer begin -->