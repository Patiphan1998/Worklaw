<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>เว็บทนาย</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="eCommerce HTML Template Free Download" name="keywords" />
    <meta content="eCommerce HTML Template Free Download" name="description" />

    <!-- Favicon -->
    <link href="img/kisspng-lawyer-symbol-criminal-law-justice-lawyer-5ac000a0427870.3452729415225325122723.png"
        rel="icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap"
        rel="stylesheet" />

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="lib/slick/slick.css" rel="stylesheet" />
    <link href="lib/slick/slick-theme.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/question.css" rel="stylesheet" />
</head>

<body class="container">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://www.w3schools.com/howto/img_nature.jpg" class="box-shadow img-resp" />
            </div>
            <div class="carousel-item">
                <img src="https://www.w3schools.com/howto/img_mountains.jpg" class="box-shadow img-resp" />
            </div>
            <div class="carousel-item">
                <img src="https://www.w3schools.com/howto/img_snow.jpg" class="box-shadow img-resp" />
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
                <img src="img/kisspng-lawyer-symbol-criminal-law-justice-lawyer-5ac000a0427870.3452729415225325122723.png"
                    style="width: 40px;" />
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto text-center">
                        <a href="/Worklaw/index.php" class="nav-item nav-link"><i class="fa fa-home"></i> หน้าหลัก</a>
                        <a href="#" class="nav-item nav-link">ติดต่อเรา</a>
                        <a href="#" class="nav-item nav-link">เกี่ยวกับ</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">เนื้อหา</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">เนื้อหา1</a>
                                <a href="#" class="dropdown-item">เนื้อหา2</a>
                            </div>
                        </div>
                        <a href="#" class="nav-item nav-link">บริการ</a>
                        <a href="/question.php" class="nav-item nav-link active">ปรึกษากฎหมาย</a>
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
                                                    <input class="form-control" type="email" placeholder="Enter email"
                                                        id="email" />
                                                </div>
                                            </div>
                                            <div class="row mb-1">
                                                <div class="col-md-3">
                                                    <label for="pwd">Password : </label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input class="form-control" type="password"
                                                        placeholder="Enter password" id="pwd" />
                                                </div>
                                                <div class="col-ms-1">
                                                    <i class="fa fa-eye mt-3 ml-0" aria-hidden="true" type="button"
                                                        id="eye"></i>
                                                </div>
                                            </div>
                                            <p class="text-right mr-10">
                                                <a href="/question.html">ลืมรหัสผ่านใช่ไหม ?</a>
                                            </p>
                                            <div class="col-mg-12 text-center">
                                                <button type="submit" class="btn"
                                                    style="border-radius: 18px;background-color: #B6622D;color: #ffffff;">เข้าสู่ระบบ</button>
                                            </div>
                                            <hr />
                                            <div class="col-mg-12 text-center">
                                                <button type="button" class="btn"
                                                    style="border-radius: 18px;background-color: #D9A774;color: #000;"
                                                    data-toggle="modal" data-target="#register">สมัครสมาชิก
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
                                                    <input class="form-control" type="username"
                                                        placeholder="Enter username" id="username" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4 col-ms-12">
                                                    <label for="pwd">Password : </label>
                                                </div>
                                                <div class="col-md-7 col-ms-11">
                                                    <input class="form-control" type="password"
                                                        placeholder="Enter password" id="pwd" />
                                                </div>
                                                <div class="col-ms-1">
                                                    <i class="fa fa-eye mt-3 ml-0" aria-hidden="true" type="button"
                                                        id="eye"></i>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4  col-ms-12">
                                                    <label for="cpwd">Confirm Password : </label>
                                                </div>
                                                <div class="col-md-7 col-ms-11">
                                                    <input class="form-control" type="password"
                                                        placeholder="Enter password" id="cpwd" />
                                                </div>
                                                <div class="col-ms-1">
                                                    <i class="fa fa-eye mt-3 ml-0" aria-hidden="true" type="button"
                                                        id="eye"></i>
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4 col-ms-12">
                                                    <label for="telephone">* Tel : </label>
                                                </div>
                                                <div class="col-md-7 col-ms-11">
                                                    <input class="form-control" type="text"
                                                        placeholder="Enter telephone number" id="telephone" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4 col-ms-12">
                                                    <label for="email">* Email : </label>
                                                </div>
                                                <div class="col-md-7 col-ms-12">
                                                    <input class="form-control" type="email" placeholder="Enter email"
                                                        id="email" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4">
                                                    <label for="line">Line ID : </label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input class="form-control" type="text" placeholder="Enter line"
                                                        id="line" />
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-4 col-ms-12">
                                                    <label for="facebook">Facebookl : </label>
                                                </div>
                                                <div class="col-md-7 col-ms-12">
                                                    <input class="form-control" type="text" placeholder="Enter facebook"
                                                        id="facebook" />
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
                                                <button type="submit" class="btn btn-success"
                                                    style="border-radius: 18px;color: #ffffff;">ตกลง</button>
                                                <button type="button" class="btn btn-danger closs"
                                                    style="border-radius: 18px;color: #ffffff;">ยกเลิก</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </nav>
    </div>

    <div class="question">
        <div class="container">
            <div class="row qheader">
                <!-- Button trigger modal -->
                <button type="button" class="btn" data-toggle="modal" data-target="#modal-status">
                    + เพิ่มคำถามใหม่
                </button>
                <!-- Modal -->
                <div class="modal fade" id="modal-status" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <div class="col-12">
                                    <h5 class="text-center" style="color: black;">ตั้งกระทู้แบบไหน ?</h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="btn" data-dismiss="modal"
                                            style=" background-color: #b6622d;color: #ffffff;width: 100%;">สาธารณะ
                                        </button>
                                        <p>สามารถให้ทุกคนเข้ามามีส่วนร่วมในการตอบกระทู้ของคุณได้และทุกคนสามารถเห็นกระทู้ของคุณได้
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="button" class="btn" data-dismiss="modal"
                                            style=" background-color: #b6622d;color: #ffffff;width: 100%">ส่วนตัว
                                        </button>
                                        <p>สามารถซ่อนกระทู้และปรึกษาทนายตัวต่อตัวได้ผ่านทางการตั้งกระทู้</p>
                                    </div>
                                </div>
                                <button type="button" class="btn" data-dismiss="modal"
                                    style=" background-color: red;width: 30%;color: #ffffff;">ยกเลิก
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row qtitle">
                <div class="col-md-5">
                    <p>ห้องสนทนา</p>
                </div>
                <div class="col-md-2">
                    <p>กระทู้</p>
                </div>
                <div class="col-md-2">
                    <p>ตอบ</p>
                </div>
                <div class="col-md-3">
                    <p>กระทู้ล่าสุด</p>
                </div>
            </div>
            <div class="row qbody">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" src="img/1-840x840.png" alt="Card image cap">
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="row">
                                <p>ถาม - ตอบ ปัญหากฎหมาย</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>1</p>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>1</p>
                </div>
                <div class="col-md-3" style="padding-top: 2.5%;">
                    <p>20</p>
                </div>
            </div>
            <div class="row qbody">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" src="img/1-840x840.png" alt="Card image cap">
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="row">
                                <p>ห้องคดีแพ่งเกี่ยวกับมรดก</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>1</p>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>1</p>
                </div>
                <div class="col-md-3" style="padding-top: 2.5%;">
                    <p>20</p>
                </div>
            </div>
            <div class="row qbody">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" src="img/1-840x840.png" alt="Card image cap">
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="row">
                                <p>ห้องคดีแพ่งเกี่ยวกับที่ดิน</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>1</p>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>1</p>
                </div>
                <div class="col-md-3" style="padding-top: 2.5%;">
                    <p>20</p>
                </div>
            </div>
            <div class="row qbody">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" src="img/1-840x840.png" alt="Card image cap">
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="row">
                                <p>ห้องคดีอาญา</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>1</p>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>1</p>
                </div>
                <div class="col-md-3" style="padding-top: 2.5%;">
                    <p>20</p>
                </div>
            </div>
            <div class="row qbody">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" src="img/1-840x840.png" alt="Card image cap">
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="row">
                                <p>ห้องแพ่งทั่วไป</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>1</p>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>1</p>
                </div>
                <div class="col-md-3" style="padding-top: 2.5%;">
                    <p>20</p>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="row qheader">
                <h5>บล็อกกระทู้</h5>
            </div>
            <div class="row qtitle ">
                <div class="col-md-5">
                    <p>กระทู้</p>
                </div>
                <div class="col-md-2">
                    <p>ผู้ตั้งกระทู้</p>
                </div>
                <div class="col-md-2">
                    <p>ตอบ</p>
                </div>
                <div class="col-md-3">
                    <p>การเข้าชม</p>
                </div>
            </div>
            <div class="row qbody">
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="card-img-top" src="img/photo-1596079890744-c1a0462d0975.jpg"
                                alt="Card image cap">
                        </div>
                        <div class="col-md-6 text-left">
                            <div class="row">
                                <p>ฟ้องอย่าสามีเยอรมัน</p><br>
                                <p>ตอบกระทู้เมื่อ 2018-03-07 10:26<br>โดย บุญมี คงมั่น</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>คนที่ถูกหลอก</p>
                </div>
                <div class="col-md-2" style="padding-top: 2.5%;">
                    <p>1</p>
                </div>
                <div class="col-md-3" style="padding-top: 2.5%;">
                    <p>20</p>
                </div>
            </div>
            <div class="row qfooter">
                <div class="col-ms-1">
                    <img src="img/photo-1596079890744-c1a0462d0975.jpg" alt="">
                </div>
                <div class="col-ms-1">
                    <p>กระทู้ทั่วไป</p>
                </div>
                <div class="col-ms-1">
                    <img src="img/photo-1596079890744-c1a0462d0975.jpg" alt="">
                </div>
                <div class="col-ms-1">
                    <p>กระทู้ทั่วไป</p>
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