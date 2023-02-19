<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Dashboard </title>
    <!--material CDN-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <!-- Stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>

<body>
    <div class="container">
        <aside>
            <div class="top">
                <div class="logo">
                    <img src="./images/logo1.png">
                    <h2>BEE friendly</span></h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-symbols-sharp">close</span>
                </div>
            </div>
            <div class="sidebar">
                <a href="index.html" class="active">
                    <span class="material-symbols-sharp">grid_view</span>
                    <h3>Tableau de bord</h3>
                </a>
                <a href="">
                    <span class="material-symbols-sharp">person</span>
                    <h3>Profil</h3>
                </a>
                <a href="historique.html">
                    <span class="material-symbols-sharp">receipt_long</span>
                    <h3>Historique</h3>
                </a>
                <a href="reclamation.html">
                    <span class="material-symbols-sharp">mail_outline</span>
                    <h3>Réclamation</h3>
                    <!--<span class="message-count">26</span>-->
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">insights</span>
                    <h3>Fonctionnalité</h3>
                </a>
                <a href="#">
                    <span class="material-symbols-sharp">logout</span>
                    <h3>Logout</h3>
                </a>
                <a href="ameliorations/">
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
            <h1>Dashboard</h1>

            <div class="date">
                <input type="date">
            </div>

            <div class="insights">
                <div class="sales">
                    <span class="material-symbols-sharp">analytics</span>
                    <div class="middle">
                        <div class="left">

                            <h1>Hiver</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>81%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-mutted">Last 24 Hours</small>
                </div>
                <!-----------END OF SALES ---------------->

                <div class="expenses">
                    <span class="material-symbols-sharp">bar_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3></h3>
                            <h1>Printemps</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>62%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-mutted">Last 24 Hours</small>
                </div>
                <!-----------END OF EXPENSES ---------------->

                <div class="income">
                    <span class="material-symbols-sharp">stacked_line_chart</span>
                    <div class="middle">
                        <div class="left">
                            <h3></h3>
                            <h1>Ete</h1>
                        </div>
                        <div class="progress">
                            <svg>
                                <circle cx='38' cy='38' r="36"></circle>
                            </svg>
                            <div class="number">
                                <p>44%</p>
                            </div>
                        </div>
                    </div>
                    <small class="text-mutted">Last 24 Hours</small>
                </div>
                <!-----------END OF INCOMES ---------------->
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
                    <span class="material-symbols-outlined">
                        notifications_active
                    </span>
                </div>
                <div class="profile">
                    <div class="info">
                        <p>Hey, <b></b></p>
                        <small class="text-muted">Admin</small>
                        <div class="profile-photo">
                            <img src="./images/profil4.jpg">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>