<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>เว็บทนาย</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="eCommerce HTML Template Free Download" name="keywords" />
    <meta content="eCommerce HTML Template Free Download" name="description" />

    <!-- Favicon -->
    <link href="img/logo.png" rel="icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet" />

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="lib/slick/slick.css" rel="stylesheet" />
    <link href="lib/slick/slick-theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/index.css" rel="stylesheet" />
    <link href="css/read_content.css" rel="stylesheet" />

</head>

<body class="container">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/photo-1573652636601-d6fdcfc59640.jpg" class="box-shadow img-resp" />
            </div>
            <div class="carousel-item">
                <img src="img/photo-1523217582562-09d0def993a6.jpg" class="box-shadow img-resp" />
            </div>
            <div class="carousel-item">
                <img src="img/photo-1567525884226-4ae9d7bc1aab.jpg" class="box-shadow img-resp" />
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Nav Bar Start -->
    <div class="nav box-shadow">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <img src="img/kisspng-lawyer-symbol-criminal-law-justice-lawyer-5ac000a0427870.3452729415225325122723.png" style="width: 40px;" />
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto text-center">
                        <a href="/Worklaw/index.php" class="nav-item nav-link"><i class="fa fa-home"></i>
                            หน้าหลัก</a>
                        <a href="#" class="nav-item nav-link">ติดต่อเรา</a>
                        <a href="#" class="nav-item nav-link">เกี่ยวกับ</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">เนื้อหา</a>
                            <div class="dropdown-menu">
                                <a href="/Worklaw/content.php" class="dropdown-item">เนื้อหา1</a>
                                <a href="/Worklaw/content.php" class="dropdown-item">เนื้อหา2</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link">บริการ</a>
                        <a href="/Worklaw/question.php" class="nav-item nav-link">ปรึกษากฎหมาย</a>
                    </div>
                    <div class="navbar-nav ml-auto">

                    </div>
                    <div class="navbar-nav">
                        <button type="button" class="btn nav-item nav-link" data-toggle="modal" data-target="#login">
                            <img src="img/user.png" class="avatar" /> เข้าสู่ระบบ
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="login" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <h3 class="text-center" style="color: black;">เข้าสู่ระบบ</h3>
                                        </div>
                                        <br>
                                        <form action="#">
                                            <div class="row mb-3">
                                                <div class="col-md-3">
                                                    <label for="email">Username : </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="email" placeholder="Enter email" id="email" />
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-md-3">
                                                    <label for="pwd">Password : </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="password" placeholder="Enter password" id="pwd" />
                                                </div>
                                                <div class="col-ms-1">
                                                    <i class="fa fa-eye mt-3 ml-0" aria-hidden="true" type="button" id="eye"></i>
                                                </div>
                                            </div>
                                            <p class="text-right mr-10">
                                                <a href="/question.html">ลืมรหัสผ่านใช่ไหม ?</a>
                                            </p>
                                            <div class="col-mg-12 text-center">
                                                <button type="submit" class="btn" style="border-radius: 18px;background-color: #B6622D;color: #ffffff;">เข้าสู่ระบบ</button>
                                            </div>
                                            <hr />
                                            <div class="col-mg-12 text-center">
                                                <button type="button" class="btn" style="border-radius: 18px;background-color: #D9A774;color: #000;" data-toggle="modal" data-target="#register">สมัครสมาชิก
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="register" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="col-md-12">
                                            <h3 class="text-center" style="color: black;">สมัครสมาชิก</h3>
                                        </div>
                                        <br>
                                        <form action="#">
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="username">Username : </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="username" placeholder="Enter username" id="username" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4 col-ms-12">
                                                    <label for="pwd">Password : </label>
                                                </div>
                                                <div class="col-md-7 col-ms-11">
                                                    <input class="form-control" type="password" placeholder="Enter password" id="pwd" />
                                                </div>
                                                <div class="col-ms-1">
                                                    <i class="fa fa-eye mt-3 ml-0" aria-hidden="true" type="button" id="eye"></i>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4  col-ms-12">
                                                    <label for="cpwd">Confirm Password : </label>
                                                </div>
                                                <div class="col-md-7 col-ms-11">
                                                    <input class="form-control" type="password" placeholder="Enter password" id="cpwd" />
                                                </div>
                                                <div class="col-ms-1">
                                                    <i class="fa fa-eye mt-3 ml-0" aria-hidden="true" type="button" id="eye"></i>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4 col-ms-12">
                                                    <label for="telephone">* Tel : </label>
                                                </div>
                                                <div class="col-md-7 col-ms-11">
                                                    <input class="form-control" type="text" placeholder="Enter telephone number" id="telephone" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4 col-ms-12">
                                                    <label for="email">* Email : </label>
                                                </div>
                                                <div class="col-md-7 col-ms-12">
                                                    <input class="form-control" type="email" placeholder="Enter email" id="email" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="line">Line ID : </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" placeholder="Enter line" id="line" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4 col-ms-12">
                                                    <label for="facebook">Facebookl : </label>
                                                </div>
                                                <div class="col-md-7 col-ms-12">
                                                    <input class="form-control" type="text" placeholder="Enter facebook" id="facebook" />
                                                </div>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="remember">
                                                    <p><a href="#">ยอมรับ</a>เงื่อนไขในการเข้าถึงของคุณ
                                                        และเว็บไซต์ของเรา</p>
                                                </label>
                                            </div>
                                            <div class="col-mg-12 text-center">
                                                <button type="submit" class="btn btn-success" style="border-radius: 18px;color: #ffffff;">ตกลง</button>
                                                <button type="button" class="btn btn-danger closs" style="border-radius: 18px;color: #ffffff;">ยกเลิก</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </nav>
        </div>
    </div>

    <div class="read_c">
        <div class="row">
            <div class="col-lg-8 col-md-6 text-left ">
                <div class="read_header box-shadow" style="padding-top: 1px;">
                    <h4 style="color: #ffffff;">สินสมรส , สินค้าส่วนตัว</h4><p style="color: #000;">Last updated: 2018 - 09 - 13 | 8568 จำนวนผู้เข้าชม</p>
                </div>
                <div class="read_body text-left box-shadow">
                    <div class="col-lg-12 col-md-12 text-center">
                        <img src="img/photo-1591994843349-f415893b3a6b.jpg" style="width: 50%;padding-top: 20px;height: 250px;padding-bottom: 30px;" />
                    </div>
                    <p>คู่สามีภรรยาเมื่อได้อยู่กินสร้างครอบครัวขึ้นมา ย่อมมีทรัพย์สินเกิดขึ้น จากการทำมาหากิน
                        แต่ที่เป็นปัญหาถกเถียงกันอยู่ ปัญหาเกิดขึ้นเมื่อหย่ากัน นอกจากเรื่องการเลี้ยงดูบุตรแล้ว
                        ปัญหาใหญ่คือเรื่องทรัพย์สินนี่แหละ
                    </p>
                    <p>ในกรณีที่จดทะเบียนสมรสกัน ทรัพย์สินที่เกิดหลังจดทะเบียน
                        ทรัพย์สินนั้นให้สันนิษฐานไว้ก่อนว่าเป็นสินสมรส แม้จะเกิดขึ้นจากน้ำพักน้ำแรงฝ่ายใดฝ่ายหนึ่ง
                        โดยที่อีกฝ่ายหนึ่งไม่ได้ออกแรงในการหาเงินมาซื้อทรัพย์สินนั้น
                        เพราะ กฎหมายถือว่าได้มาในระหว่างสมรสย่อมเป็นสินสมรส ฝ่ายที่ออกเงินฝ่ายเดียวจะเอาไว้คนเดียวไม่ได้
                        แต่ถ้าทรัพย์สินนั้น คู่สมรสฝ่ายใดฝ่ายหนึ่ง ใช้เงินเก็บมาได้ก่อนจดทะเบียนสมรส
                        ก็เป็นสินส่วนตัวของฝ่ายนั้น แต่มันพิสูจน์ยาก ฉะนั้นทรัพย์สินไหนที่ซื้อมาใช้เงินก้อนใด
                        จะต้องเก็บหลักฐานไว้ให้ดี จะได้ไม่ต้องมาถกเถียงกันว่า ทรัพย์สินนี้เป็นสินสมรส หรือเป็นสินส่วนตัว
                    </p>
                    <p>ส่วนในกรณีที่ไม่ได้จดทะเบียนสมรส ทรัพย์สินที่หามาได้ระหว่างอยู่กินด้วยกัน กฎหมายให้ใช้
                        หลักการแบ่งในเรื่องกรรมสิทธิ์รวม แม้อีกฝ่ายหนึ่งไม่ได้ออกแรงในการหาสิ่งนั้นมาก็ถือว่า
                        เป็นกรรมสิทธิ์รวม เช่น ภรรยาไม่ได้ทำงาน เป็นแม่บ้าน เลี้ยงดูบุตร
                        ฝ่ายสามีทำงานหาเลี้ยงครอบครัวคนเดียว ฝ่ายสามีจะมาอ้างว่า อีกฝ่ายไม่ได้ออกแรงหาเงินมาเลย
                        และไม่ได้มีการจดทะเบียนสมรสกัน ทรัพย์สินดังกล่าวจึงเป็นของฝ่ายชายแต่เพียงผู้เดียว
                        ข้อความอ้างของฝ่ายชายนี้ฟังไม่ขึ้น เนื่องจากคำพิพากษาฎีกา วินิจฉัยออกมาแล้วว่า
                        ถึงแม้ฝ่ายหญิงจะไม่ได้ทำงาน แต่ก็อยู่บ้านดูแลบุตร จึงเป็นการแบ่งหน้าที่กันทำ
                        ทรัพย์สินดังกล่าวจึงเป็นกรรมสิทธิ์รวมของทั้งสองฝ่าย
                    </p>


                    <p>อ้างอิงโดย..ทนายกฤษณะ</p>

                    <div class="mt-3 row">
                        <div class="col-md-8">

                        </div>
                        <div class="col-md-2 text-left mt-2" style="background-color: #ffffff;">
                            <img src="img/facebook2.png" style="width:20px;pading-right:2px;" class="mt-1 mb-1" /> ถูกใจ 0
                        </div>
                        <div class="col-md-2 text-left">
                            <img src="img/facebook2.png" style="width: 35px;" />
                            <img src="img/line.png" style="width: 35px;" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="col-lg-12">
                    <div class="row box-shadow page">
                        <div class="w3-bar topic text-center">
                            <h5>ฝากติดตามเพจ</h5>
                        </div>
                        <iframe class="page-facebook" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fweb.facebook.com%2F%25E0%25B8%25A3%25E0%25B8%25A7%25E0%25B8%2587%25E0%25B8%2582%25E0%25B9%2589%25E0%25B8%25B2%25E0%25B8%25A7%25E0%25B8%25AA%25E0%25B8%25B5%25E0%25B8%25A3%25E0%25B8%25B8%25E0%25B9%2588%25E0%25B8%2587-Rice-Rainbow-100141648685185&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1048947702217247" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                    </div>
                    <div class="row box-shadow page">
                        <div class="w3-bar topic text-center mb-3">
                            <h5>ลิ้งค์ด้วยกฎหมาย</h5>
                        </div>
                        <div class="ml-3 mr-3" style="width: 100%;">
                            <a href="#">
                                <div class="media media-law box-shadow">
                                    <img class="card-img-top" src="img/20200513d41d8cd98f00b204e9800998ecf8427e094310.png" alt="Card image cap">
                                    <div class="media-body text-left">
                                        <h4 class="mt-0 pl-3">สำนักงานศาลยุติธรรม</h4>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="media media-law box-shadow">
                                    <img class="card-img-top" src="img/1-840x840.png" alt="Card image cap">
                                    <div class="media-body text-left">
                                        <h4 class="mt-0 pl-3">สภาทนายความ</h4>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="media media-law box-shadow">
                                    <img class="card-img-top" src="img/img_d009c29f72cd6103cc744037e08933fc.png" alt="Card image cap">
                                    <div class="media-body text-left">
                                        <h4 class="mt-0 pl-3">สำนักงานกฤษฎีกา</h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <br>
        <hr class="ryzen" />

        <h2>เกี่ยวข้อง</h2>
        <div class="row ml-3 mr-3">
            <div class="column">
                <div class="card">
                    <img src="img/photo-1503428593586-e225b39bddfe.jpg" alt="Jane" style="width:100%">
                    <div class="container">
                        <h3>ทรัพย์สินของบริษัทและกรรมการ</h3>
                        <h5 class="title">Feb . 29 . 2021</h5>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/photo-1596079890744-c1a0462d0975.jpg" alt="Mike" style="width:100%">
                    <div class="container">
                        <h3>การฟ้องหย่า...ชาวต่างชาติ</h3>
                        <h5 class="title">Feb . 29 . 2021</h5>

                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="img/photo-1591994843349-f415893b3a6b.jpg" alt="John" style="width:100%">
                    <div class="container">
                        <h3>คดีเช่าซื้อรถยนต์</h3>
                        <h5 class="title">Feb . 29 . 2021</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

</body>

</html>