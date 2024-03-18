<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANG CHU</title>
</head>

<body>

    <header>
        <div class="navbar">
            <h2 class="logo"><img class="img-logo" src="./img/logo.jpg" alt=""></h2>
            <ul>
                <li class="navbar-li"> <a href="#">Home</a></li>
                <li class=" navbar-li"> <a href="#">Lớp học</a></li>
                <li id="show-login" class="navbar-li"> Đăng nhập</li>
                <li class="navbar-li"> <a href="#">Liên hệ</a></li>
                <li class="navbar-li"><a href="#">&equiv;</a><i class="bx bx-menu" id="menu-icon"></i></li>
            </ul>
        </div>
    </header>

    <section class="popup-info">
        <div class="popup">
            <button class="btn-hello-close" id="close">&times </button>
            <h2 class="title-news-feed">Shop News Feed</h2>
            <p class="news-feed">Ưu đãi bất ngờ giảm tới 35%. Nhanh chóng lên lịch trong tháng ngày
                để có thể tham gia lớp học mới được mở tại WorkShop chúng tôi.
                .Nhanh tay lên lớp học đặc biệt có tại cửa hàng của chúng tôi.
            </p>
            <button class="btn-news-feed">Đặt lịch ngay</button>
        </div>
        </div>
    </section>

    <section class="home">
        <div class="home-text">
            <h1>Find your own <br> Happiness</h1>
            <p>Make a bouquet and pick up a gift width <br>
                your wishes. Deliver to any corner of the city</p>
            <a href="#" class="btn">Pick a bouquet</a>
        </div>
    </section>

    <section class="login-popup">
        <div class="lg-popup">
            <div class="close-btn">&times;</div>
            <div class="lg-form">
                <h2>Đăng nhập</h2>
                <div class="form-element-lg">
                    <label for="number">Số điện thoại</label>
                    <input type="text" id="lg-number" placeholder="Nhap so dien thoai">
                </div>
                <div class="form-element-lg">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="lg-password" placeholder="Nhap so dien thoai">
                </div>
                <div class="form-element-lg">
                    <input type="checkbox" id="lg-remember-me">
                    <label for="lg-remember-me">Ghi nhớ tài khoản</label>
                </div>
                <div id="loginSumit" class="form-element-lg">
                    <button>Đăng nhập</button>
                </div>
                <div id="show-rg" class="form-element-lg">
                    <button>Đăng ký</button>
                </div>
                <div class="form-element-lg">
                    <button>Quên mật khẩu?</button>
                </div>
            </div>
        </div>
    </section>

    <section class="register-popup">
        <div class="rg-popup">
            <div class="close-btn">&times;</div>
            <div class="rg-form">
                <h2>Đăng ký</h2>
                <div class="form-element-rg">
                    <label for="number">Số điện thoại</label>
                    <input type="text" id="rg-number" placeholder="Nhap so dien thoai">
                </div>
                <div class="form-element-rg">
                    <label for="password">Mật khẩu</label>
                    <input type="password" id="rg-password" placeholder="Nhap mat khau">
                </div>
                <div class="form-element-rg">
                    <label for="password">Xác nhận lại mật khẩu</label>
                    <input type="password" id="rg-password2" placeholder="Nhap lai mat khau">
                </div>
                <div class="rg-checkbox">
                    <input name="gender" type="radio" id="rg-admin" value="Admin" />Quản trị
                    <input name="gender" type="radio" id="rg-cus" value="Customer" />Học viên

                </div>

                <div id="registerSubmit" class="form-element-rg">
                    <button>Đăng ký</button>
                </div>
                <div id="rg-exit" class="form-element-rg">
                    <button>Thoát</button>
                </div>
            </div>
        </div>
    </section>

    <section class="about-us">
        <h1 class="titile-info"><span>Giới</span> thiệu</h1>
        <div class="row-about-us">
            <div class="img-ad">
                <img src="./img/about-us.jpg" alt="" class="img-client">
                <h3>Lớp học thịnh hành nhất</h3>
            </div>

            <div class="content-about-us">
                <h3>Tại sao lại chọn chúng tôi</h3>
                <p>Trải nghiệm hoàn toàn khác biệt cho team của bạn,
                    cũng như thích hợp với nhiều sự kiện như:
                    Tri ân khách hàng, dịch vụ dành cho khách hàng VIP…</p>
                <a href="#" class="btn-about-us">Đăng ký ngay</a>
            </div>
        </div>
    </section>

    <section class="banner-title">
        <h1 class="titile-info">Chào mừng bạn đến với WorkShop của chúng tôi</h1>
        <div class="banner">
            <div class="banner-img">
                <img src="./img/banner4.jpg" alt="" srcset="">
                <h5 class="tilte-banner">Lớp cắm giỏ hoa</h5>
            </div>

            <div class="banner-img">
                <img src="./img/banner2.jpg" alt="" srcset="">
                <h5 class="tilte-banner">Lớp bó hoa cưới</h5>
            </div>

            <div class="banner-img">
                <img src="./img/banner21.png" alt="" srcset="">
                <h5 class="tilte-banner">Lớp cắm lãng hoa</h5>
            </div>
        </div>
    </section>

    <section class="new-product">
        <div class="center-text">
            <h2>Sản phẩm của học viên</h2>
        </div>

        <div class="new-content">

            <div class="row">
                <img class="img-top" src="./img/old-sp2.webp" alt="" srcset="">
                <h4>Hoa cưới cầm tay Calla lily</h4>
                <h5>950.000đ</h5>
                <div class="top">
                    <p>Workshop</p>
                </div>
                <div class="bbtn">
                    <a id="btn-rg-class" href="./php/vnpay_php/vnpay_pay.php">Đăng ký lớp học</a>
                </div>
            </div>

            <div class="row">
                <img src="./img/old-sp6.jpg" alt="" srcset="">
                <h4>Hoa cưới cầm tay mao lương</h4>
                <h5>850.000đ</h5>
                <div class="top">
                    <p>Workshop</p>
                </div>
                <div class="bbtn">
                    <a id="btn-rg-class" href="./php/vnpay_php/vnpay_pay.php">Đăng ký lớp học</a>
                </div>
            </div>

            <div class="row">
                <img src="./img/old-sp3.jpg" alt="" srcset="">
                <h4>Hoa cưới cầm tay hoa hồng trắng</h4>
                <h5>450.000đ</h5>
                <div class="top">
                    <p>Workshop</p>
                </div>
                <div class="bbtn">
                    <a id="btn-rg-class" href="./php/vnpay_php/vnpay_pay.php">Đăng ký lớp học</a>
                </div>
            </div>

            <div class="row">
                <img src="./img/old-sp6.webp" alt="" srcset="">
                <h4>Hoa giỏ sen trắng</h4>
                <h5>650.000đ</h5>
                <div class="top">
                    <p>Workshop</p>
                </div>
                <div class="bbtn">
                    <a id="btn-rg-class" href="./php/vnpay_php/vnpay_pay.php">Đăng ký lớp học</a>
                </div>
            </div>

            <div class="row">
                <img src="./img/old-sp8.jpg" alt="" srcset="">
                <h4>Bó hoa hồng juliet</h4>
                <h5>1.550.000đ</h5>
                <div class="top">
                    <p>Workshop</p>
                </div>
                <div class="bbtn">
                    <a id="btn-rg-class" href="./php/vnpay_php/vnpay_pay.php">Đăng ký lớp học</a>
                </div>
            </div>

            <div class="row">
                <img src="./img/old-sp1.jpg" alt="" srcset="">
                <h4>Hoa giỏ trái cây</h4>
                <h5>1.850.000đ</h5>
                <div class="top">
                    <p>Workshop</p>
                </div>
                <div class="bbtn">
                    <a id="btn-rg-class" href="./php/vnpay_php/vnpay_pay.php">Đăng ký lớp học</a>
                </div>
            </div>


        </div>
        </div>
    </section>

    <section class="banner-new">
        <h1 class="titile-info">Lớp học mới</h1>
        <div class="banner">
            <div class="banner-img">
                <img src="./img/new-class1.png" alt="" srcset="">
                <h5 class="tilte-banner">Cắm mâm hoa quả hiện đại</h5>
            </div>

            <div class="banner-img">
                <img src="./img/new-class6.jpg" alt="" srcset="">
                <h5 class="tilte-banner">Cắm mâm hoa quả truyền thống</h5>
            </div>
        </div>
    </section>


    <section class="review">
        <div class="center-text">
            <h2>ĐÁNH GIÁ CỦA KHÁCH HÀNG</h2>
        </div>

        <div class="rv-container">
            <div class="box">
                <div class="star">
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                </div>
                <p></p>
                <div class="user">
                    <img src="./img/icon-avata.jpg" alt="">
                    <div class="user-info">
                        <h3>ANH THƯ</h3>
                        <span>Lớp học rất hữu ích</span>
                    </div>
                </div>
                <span></span>
            </div>

            <div class="box">
                <div class="star">
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                </div>
                <p></p>
                <div class="user">
                    <img src="./img/icon-avata.jpg" alt="">
                    <div class="user-info">
                        <h3>ANH THƯ</h3>
                        <span>Lớp học rất hữu ích</span>
                    </div>
                </div>
                <span></span>
            </div>


            <div class="box">
                <div class="star">
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                    <i class="star">&hearts;</i>
                </div>
                <p></p>
                <div class="user">
                    <img src="./img/icon-avata.jpg" alt="">
                    <div class="user-info">
                        <h3>ANH THƯ</h3>
                        <span>Lớp học rất hữu ích</span>
                    </div>
                </div>
                <span></span>
            </div>
        </div>

        </div>
    </section>

    <section class="blog">
        <div class="center-text">
            <h2>Thành phần mới</h2>
        </div>

        <div class="blog-content">
            <div class="main-box">
                <div class="box-img">
                    <img src="./img/new-sp1.jpg" alt="">
                </div>

                <div class="in-box">
                    <div class="in-text">
                        <p>6-1-2024</p>
                    </div>

                    <div class="in-icon">
                        <a href="./php/vnpay_pay.php">&times</a>
                    </div>
                </div>
                <h3>Lorem ipsum dolor sit amet con alit sed</h3>
            </div>

            <div class="main-box">
                <div class="box-img">
                    <img src="./img/new-sp5.jpg" alt="">
                </div>

                <div class="in-box">
                    <div class="in-text">
                        <p>6-1-2024</p>
                    </div>

                    <div class="in-icon">
                        <a href="#">&times</a>
                    </div>
                </div>
                <h3>Lorem ipsum dolor sit amet con alit sed</h3>
            </div>

            <div class="main-box">
                <div class="box-img">
                    <img src="./img/new-sp4.jpg" alt="">
                </div>

                <div class="in-box">
                    <div class="in-text">
                        <p>6-1-2024</p>
                    </div>

                    <div class="in-icon">
                        <a href="#">&times</a>
                    </div>
                </div>
                <h3>Lorem ipsum dolor sit amet con alit sed</h3>
            </div>
        </div>
    </section>

    <section class="chatbot">
        <div class="icon-cb-container">
            <i class="icon-cb float-right fa-solid fa-comment-dots"></i>
        </div>
        <div class="chatbot-container">
            <h5 class="cb-text-center">Awesome Chatbot App</h5>

            <div class="media">
                <img class="rounded-circle float-left img-thumbnail" src="./img/icon-avata.jpg" alt="">
                <div class="media-body">
                    <h6 class="mt-0">Chatbot</h6>
                    <span>Online</span>
                </div>
            </div>

            <!-- MESSAGES container -->
            <div id="cb-container" class="cb-container border overflow-auto" id="cb-container">
                <!-- chatbot design -->

                <!-- <div class="cb-design sys-mes w-50 float-left  shadow-sm">
                        
                    </div> -->

                <!-- <div class="cb-design cus-mes w-50 float-right shadow-sm">
                        
                    </div> -->


            </div>

            <div class="input-group">
                <input type="text" id="textbox" class="form-control">
                <div class="input-group-append">
                    <button id="sendBtn" class="btn btn-primary">Send</button>
                </div>
            </div>
        </div>

    </section>

    <section class="contact">
        <div class="contact-box">
            <h4>My Account</h4>
            <li><a href="#">My account</a></li>
            <li><a href="#">Checkout</a></li>
            <li><a href="#">Shopping Cart</a></li>
            <li><a href="#">WishList</a></li>
        </div>

        <div class="contact-box">
            <h4>QUICK LINKS</h4>
            <li><a href="#">Store Location</a></li>
            <li><a href="#">Order Tracking</a></li>
            <li><a href="#">Size Guide</a></li>
            <li><a href="#">My account</a></li>
            <li><a href="#">FAQs</a></li>
        </div>

        <div class="contact-box">
            <h4>INFORMATION</h4>
            <li><a href="#">Privacy Page</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Delivery Infomation</a></li>
            <li><a href="#">Term & Conditions</a></li>
        </div>

        <div class="contact-box">
            <h4>Customer Service</h4>
            <li><a href="#">Shipping Policy</a></li>
            <li><a href="#">Help & Contact Us</a></li>
            <li><a href="#">Returns & Refunds</a></li>
            <li><a href="#">Online Stores</a></li>
            <li><a href="#">Term & Conditions</a></li>
        </div>

        <div class="contact-box">
            <h4>My Account</h4>
            <h5>Connect with us</h5>
            <div class="social">
                <a href=""><i class="fa-brands fa-facebook"></i></a>
                <a href=""><i class="fa-solid fa-g"></i></a>
                <a href=""><i class="fa-solid fa-z"></i></a>
            </div>
        </div>
    </section>


    <!-- scroll -->
    <a href="#" class="scroll-top">
        <i class="">&uarr;</i>
    </a>
    <div class="end-text">
        <p>@ Vo Ngoc Anh Thu B2004756</p>
    </div>
    <script src="./js/index.js"></script>
    

    <!-- Ke noi Database FireBase -->
    <script type="module">
        import { initializeApp } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-app.js";

        const firebaseConfig = {
            apiKey: "AIzaSyDixK1F_rCIbQWFLW5NygYjV5235kdUNXk",
            authDomain: "flower-store-6a5e5.firebaseapp.com",
            projectId: "flower-store-6a5e5",
            storageBucket: "flower-store-6a5e5.appspot.com",
            messagingSenderId: "919462875797",
            appId: "1:919462875797:web:b5f9f2b9246234df46819c"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);

        import { getDatabase, ref, get, set, child, update, remove }
            from "https://www.gstatic.com/firebasejs/10.7.1/firebase-database.js"

        const db = getDatabase();

        function insertUser() {
            if (userRegister.value == "" || passRegister.value == "" || checkBox.checked == "" || passRegister2.value=="") {
                alert("Vui long nhap thong tin")
            }
            else {
                for (var i = 0; i < checkBox.length; i++) {
                    if (checkBox[i].checked === true) {
                            set(ref(db, 'RegisterUsers/' + userRegister.value), {
                                userRegister: userRegister.value,
                                passRegister: passRegister.value,
                                checkBox: checkBox[i].value,
                            })
                                .then(() => {
                                    alert("Data successfully")
                                })
                                .catch((error) => {
                                    alert("Data unsuccessfully, error" + error)
                                })
                    }
                }
            }

        }
        registerSubmit.addEventListener('click', () => {
            insertUser()
        })
        

        //  --------------- Select User Available --------------
        
        function loginUser() {
            const dbref = ref(db)
            get(child(dbref, 'RegisterUsers/' +  userRegister.value)).then((snapshot) => {
                if(snapshot.exits()) {
                    userRegister.value = snapshot.val().userRegister,
                    passRegister.value = snapshot.val().passRegister,
                    checkBox.value = snapshot.val().checkBox,
                    alert("ok")
                }
                else {
                    alert("Data not found")
                }
            })
            .catch((error) => {
                alert("Data error")
            })
        }

        // function SelectData() {
        //     get(child(dbref, 'RegisterUsers/' +  userRegister.value)).then((snapshot) => {
        //         if(snapshot.exits())
        //     })
        // }

        loginSumit.addEventListener('click', () => {
            loginUser()
        })
    </script>


</body>

</html>