<div class="site-navbar-top">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-9">
                <script>
                    var myVar = setInterval(myTimer, 1000);

                    function myTimer() {
                        var d = new Date(),
                            displayDate;
                        var data = new Date();
                        monName = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                            "Dec");
                        var dia = data.getDate();
                        if (navigator.userAgent.toLowerCase().indexOf('firefox') > -1) {
                            displayDate = d.toLocaleTimeString('pt-BR');
                        } else {
                            displayDate = d.toLocaleTimeString('pt-BR', {
                                timeZone: 'GMT'
                            });
                        }
                        document.getElementById("horazulu").innerHTML = dia + " " + monName[data.getMonth()] + " " +
                            displayDate + "z";
                    }
                </script>
                <span class="p-2 pl-0"><span class="fa fa-cloud text-muted"></span><span class="pl-2"
                        id="horazulu"></span></span>
                <span class="p-2 pl-2"><span class="fa fa-envelope text-muted"></span><a
                        href="mailto:support@nortesulvirtual.com"
                        class="pl-2 a-muted">support@nortesulvirtual.com</a></span>
            </div>
            <div class="col-3">
                <a href="https://twitter.com/nortesulvirtual" class="p-2 pl-0 btn btn-twitter"><i class="fa fa-twitter"
                        aria-hidden="true"></i></a>
                <a href="https://www.facebook.com/nortesulvirtual/" class="p-2 pl-0 btn btn-facebook"><i
                        class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="https://www.youtube.com/channel/UCxeniklwjQp2FbNFwB5jlpw" class="p-2 pl-0 btn btn-youtube"><i
                        class="fa fa-youtube-play" aria-hidden="true"></i></a>
                <a href="https://www.instagram.com/nsv_virtual/" class="p-2 pl-0 btn btn-instagram"><i
                        class="fa fa-instagram" aria-hidden="true"></i></span></a>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="<?php echo SITE_URL;?>"><img
                src="<?php echo SITE_URL;?>/lib/skins/nortesul/images/logo.png" style="height:100px; width:auto;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>/index.php/" class="nav-link">Home</a></li>
                <li class="nav-item has-children"><a href="#" class="nav-link">Corporation</a>
                    <ul class="dropdown">
                        <li><a href="<?php echo SITE_URL; ?>/index.php/staff">Staffs</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/index.php/rules">Enroll</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/index.php/contact">Contact us</a></li>
                    </ul>
                </li>
                <li class="nav-item has-children">
                    <a href="#" class="nav-link">Operations</a>
                    <ul class="dropdown arrow-top">
                        <li><a href="<?php echo SITE_URL; ?>/index.php/frota">Fleet</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/index.php/last">Recent Flights</a></li>
                    </ul>
                </li>
                <li class="nav-item has-children">
                    <a href="projects.html" class="nav-link">Members</a>
                    <ul class="dropdown arrow-top">
                        <li><a href="<?php echo SITE_URL; ?>/index.php/pilots">Pilot Roster</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/index.php/rank">Rank Structure</a></li>
                        <li><a href="<?php echo SITE_URL; ?>/index.php/awards">Our Awards</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a href="<?php echo SITE_URL; ?>/index.php/ACARS" class="nav-link">Tracking</a>
                </li>
                <?php if(!Auth::LoggedIn())
					{
					?>
                <li class="nav-item"><a href="https://nortesulvirtual.com/beta/index.php/login"
                        class="nav-link">Login</a></li>
                <?php }elseif(Auth::LoggedIn())
					{
					?>
                <li class="nav-item"><a href="https://nortesulvirtual.com/beta/index.php/profile"
                        class="nav-link btn btn-nsv">CrewCenter &raquo;</a></li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->