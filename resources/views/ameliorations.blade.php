<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ameliorations</title>
    <!--material CDN-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="{{ asset('images/logo1.png') }}">
                    <h2>BEE friendly</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="{{ route('home') }}" >
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Tableau de bord</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">person</span>
                    <h3>Profil</h3>
                </a>
                <a href="/historique">
                    <span class="material-symbols-sharp">receipt_long</span>
                    <h3>Historique</h3>
                </a>
                <a href="/reclamations">
                    <span class="material-symbols-sharp">mail_outline</span>
                    <h3>Réclamation</h3>
                    <!--<span class="message-count">26</span>-->
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">insights</span>
                    <h3>Fonctionnalité</h3>
                </a>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                         document.getElementById('logout-form').submit();">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
                <a href="/ameliorations" class="active">
                    <span class="material-symbols-sharp">report</span>
                    <h3>Comment se protoger</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
            
            
            
            </div>

        </aside>
        <!-------------------- END OF ASIDE--------------->
        <main class="amelioration">
            <h1>Comment améliorer sa protection ?</h1>
            <main>

                <div class="main3">
                    <div class="main33"></div>
                    <div class="main32">
                        <form>
                            <div class="row input">
                                <div class="col-6">
                                    <input id="fname" placeholder="Type des ruches*" />
                                </div>
                                <div class="col-6">
                                    <input id="fname" placeholder="Nombre des ruches*" />
                                </div>

                            </div>
                            <div class="row input">
                                <!-- <div class="col-6">
                                    <input id="fname" type="date" placeholder="superficie des champs*" />
                                </div> -->
                                <div class="col-6">
                                    <input id="lname" placeholder="Nation*" />
                                </div>

                            </div>
                            <div class="row input">

                                <div class="col-6">
                                    <input id="fname" placeholder="Espace par surface*" />
                                </div>


                            </div>

                            <input type="submit" value="Register" id="submit">
                            <p class="margin-top:100px" id="pp">already have an account? <a href="login.html"
                                    style="color: rgb(0, 0, 0);">Login</a></p>
                        </form>
                    </div>
                </div>


            </main>




        </main>
        <!----------------- END OF MAIN --------------->

        <!-------------- END OF TOP --------------
            <div class="recent-updates">
                <h2>Recent Updates</h2>
                <div class="updates">
                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profil1.png" alt="">
                        </div>
                        <div class="message">
                            <p><b>Nesrine Mezzi</b> received his order of Night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profil2.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Nesrine Mezzi</b> received his order of Night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>

                    <div class="update">
                        <div class="profile-photo">
                            <img src="./images/profil3.jpg" alt="">
                        </div>
                        <div class="message">
                            <p><b>Nesrine Mezzi</b> received his order of Night lion tech GPS drone.</p>
                            <small class="text-muted">2 Minutes Ago</small>
                        </div>
                    </div>
                </div>
            </div>
            ------------------- END OF RECENT UPDATES -------------->

    </div>
    </div>
</body>

</html>