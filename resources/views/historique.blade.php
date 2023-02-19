<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique </title>
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
            <a href="/historique" class="active">
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
            <a href="/ameliorations">
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
        <main>
            <h1>HISTORIQUES</h1>

            <div class="date">
                <input type="date">
            </div>


            <!------------------- END OF INSIGHTS -------------->
            <div class="recent-orders">

                <table class="tb">
                    <thead>
                        <tr>
                            <th>Numéro</th>
                            <th>Information</th>
                            <th>Date</th>
                            <th>Heure</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Attaque</td>
                            <td>10/11/2022</td>
                            <td class="warning">14:24</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Attaque</td>
                            <td>05/09/2022</td>
                            <td class="warning">09:15</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Attaque</td>
                            <td>01/09/2022</td>
                            <td class="warning">15:44</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Attaque</td>
                            <td>24/08/2022</td>
                            <td class="warning">16:12</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Attaque</td>
                            <td>12/07/2022</td>
                            <td class="warning">10:32</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
        <!----------------- END OF MAIN --------------->
        <div class="right">
            <div class="top">
                <button id="menu-btn">
                    <span class="material-symbols-sharp"> menu</span>
                </button>
                <div class="theme-toggler">
                    <span class="material-symbols-sharp active">light_mode</span>
                    <span class="material-symbols-sharp">dark_mode</span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b>Nesrine</b></p>
                        <small class="text-muted">Admin</small>
                        <div class="profile-photo">
                            <span class="material-symbols-sharp">person</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>