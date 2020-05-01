<head>
    <title>INTERNSHIP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="./assets/image3/fevicon.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.0.js"
        integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css2/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css2/animate.css">

    <link rel="stylesheet" href="./assets/css2/owl.carousel.min.css">
    <link rel="stylesheet" href="./assets/css2/owl.theme.default.min.css">
    <link rel="stylesheet" href="./assets/css2/magnific-popup.css">
    <link rel="stylesheet" href="./assets/css2/aos.css">
    <link rel="stylesheet" href="./assets/css2/ionicons.min.css">
    <link rel="stylesheet" href="./assets/css2/bootstrap-datepicker.css">
    <link rel="stylesheet" href="./assets/css2/jquery.timepicker.css">
    <link rel="stylesheet" href="./assets/css2/flaticon.css">
    <link rel="stylesheet" href="./assets/css2/icomoon.css">
    <link rel="stylesheet" href="./assets/css2/style.css">
</head>

<body style="background-color:#f1f0f0">

    <nav>
        <div class="navTp">
            <div class="container-fluid">
                <div class="navTpLogoL">
                    <a href="javascript:void(0)" class="logoTp"><img src="./assets/images3/image1.png" title="" alt=""
                            style="width: 150px"></a>
                    <a href="javascript:void(0)" class="logoTp"><img src="./assets/images3/mhrdlogo.png" title="" alt=""
                            style="width: 150px"></a>
                    <a href="javascript:void(0)" class="logoTp"><img src="./assets/images3/aictelogo.png" title=""
                            alt="" style="width: 283px"></a>
                </div>
                <div class="navTpLogoR">
                    <ul>
                        <li><a href="javascript:void(0)">Team</a></li>
                        <li class=""><a href="callTo:011-29581050"><i class="fa fa-phone-square" aria-hidden="true"></i>
                                011-29581050</a></li>
                        <li class=""><a href="mailTo:neat@aicte-india.org" class=""><i class="fa fa-envelope-square"
                                    aria-hidden="true"></i> neat@aicte-india.org</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navBtm">
            <div class="container-fluid">
                <div class="navBtmIn">
                    <div class="naBtmLftDiv"><a href="javascript:void(0)"><img
                                src="./assets/images3/internshiplogo.png"></a></div>
                    <div class="navBtmLang">
                        <span id="langDivId">English <i class="fa fa-angle-down" aria-hidden="true"></i>
                            <div id="navBtmLangC" class="navBtmLangCnt">
                                <ul>
                                    <li><a href="#" value="English" abbr="Eng">English</a></li>
                                    <li><a href="#" value="Tamil" abbr="Tam">Hindi</a></li>
                                    <li><a href="#" value="Hindi" abbr="Hin">Bangali</a></li>
                                    <li><a href="#" value="Kannada" abbr="Kan">Gujrati</a></li>

                                    <li><a href="#" value="Telugu" abbr="Tel">Kannada</a></li>
                                    <li><a href="#" value="Gujarati" abbr="Guj">Marathi</a></li>
                                    <li><a href="#" value="Marathi" abbr="Mar">Punjabi</a></li>
                                    <li><a href="#" value="Bengali" abbr="Ben">Sindhi</a></li>
                                    <li><a href="#" value="Malayalam" abbr="Mal">Tamil</a></li>
                                    <li><a href="#" value="Punjabi" abbr="Pun">Telugu</a></li>
                                    <li><a href="#" value="Oriya" abbr="Ori">Urdu</a></li>

                                </ul>
                            </div>
                        </span>
                    </div>
                    <!--  <div id="google_translate_element"></div>
                            <script type="text/javascript">
                        function googleTranslateElementInit() {
                     new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
                }
                        </script>
 -->
                    <script>
                    $(document).ready(
                        function() {
                            //$.cookie('lang','',{path:"/",expires:-1});
                            var lang = getCookieLang("lang");
                            if (lang && lang != "English") {
                                $("#langDivId").text($(".navBtmLangCnt .dropdown li [value=" + lang + "]").attr(
                                    'value'));
                            } else if (lang && lang == "English") {
                                document.cookie =
                                    "lang=;domain=.startupindia.gov.in;path=/;Expires=Thu, 01 Jan 1970 00:00:01 GMT;"
                            }
                            // $("#header_lang a").each(function () {
                            //     $(this).text($(this).attr("value"))
                            // });
                            $("#lang_container a").click(changeLanguageFn);
                        });


                    function getCookieLang(cname) {
                        var name = cname + "=";
                        var ca = document.cookie.split(';');
                        for (var i = 0; i < ca.length; i++) {
                            var c = ca[i];
                            while (c.charAt(0) == ' ') {
                                c = c.substring(1);
                            }
                            if (c.indexOf(name) == 0) {
                                return c.substring(name.length, c.length);
                            }
                        }
                        return "";
                    }

                    function setLangCookie(cname, cvalue) {
                        if (cvalue && cvalue !== "English") {
                            document.cookie = cname + "=" + cvalue + ";domain=.startupindia.gov.in;path=/"
                            //$.cookie(cname, cvalue, {domain: '.startupindia.gov.in', path: '/'});
                        } else {
                            //$.cookie(cname, cvalue, {domain: '.startupindia.gov.in', path: '/', expires: -1});
                            document.cookie = cname + "=" + cvalue +
                                ";domain=.startupindia.gov.in;path=/;Expires=Thu, 01 Jan 1970 00:00:01 GMT;"
                        }
                        window.location.reload(true);
                    }

                    function changeLanguageFn() {
                        var updatedLang = $(this).attr("value");
                        //var abbr = $(this).attr("value");
                        $("#P9LngDdl").text(updatedLang);
                        if (updatedLang === "English")
                            setLangCookie("lang", '');
                        else
                            setLangCookie("lang", updatedLang);
                    }
                    </script>
                    <script type="text/javascript"
                        src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    <div class="navBtmRgtBtn">
                        <ul>
                            <li><a href="login_type.php">Post Internship</a></li>
                            <li><a href="register.php">Register</a></li>
                            <!-- <li><a data-toggle="modal" data-target="#exampleModal" href="login_type.php">Login</a></li> -->
                            <li><a href="login_type.php">Login</a></li>
                        </ul>
                    </div>
                    <div class="navBtmMdlCnt">
                        <h3 style="margin-left:20px;color:#ffd900">1 Crore Internships by 2025 </h3>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <select name="login_type" id="login_type">
                            <option value="Student">Student</option>
                            <option value="Corporate">Corporate</option>
                            <option value="ULB">ULB</option>
                            <option value="ULB Department">Student</option>

                        </select>
                    </div>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div class="hero-wrap img hero-wrap_new" style="background-image: url(./assets/images3/bg_1.jpg); height:200px">
    </div>