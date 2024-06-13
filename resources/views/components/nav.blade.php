<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Admin Dashboard </title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                        <ion-icon name="aperture-outline"></ion-icon>
                        </span>
                        <span class="title">EvenTo</span>
                        </a>
                </li>

                <li>
                    <a href="/dashboard">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="/client">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Clients</span>
                    </a>
                </li>

                <li>
                    <a href="/event">
                        <span class="icon">
                        <ion-icon name="calendar-outline"></ion-icon>
                            
                        </span>
                        <span class="title">Events</span>
                    </a>
                </li>
                <li>
                    <a href="/events_types">
                        <span class="icon">
                        <ion-icon name="musical-notes-outline"></ion-icon>
                            
                        </span>
                        <span class="title">Events types</span>
                    </a>
                </li>
                

                <li>
                    <a href="/comment">
                        <span class="icon">
                        <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Comments</span>
                    </a>
                </li>
                <li>
                    <a href="/home">
                        <span class="icon">
                        <ion-icon name="home"></ion-icon>
                        </span>
                        <span class="title">Home page</span>
                    </a>
                </li>

                <li>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf
                    <a href="/">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span type="submit" class="title">Sign Out</span>
                    </a>
                    </form> 
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="assets/imgs/customer01.jpg" alt="">
                </div>
            </div>
            <section class="content">
      @yield('content')
    </section> 
        </div>
       
    </div>
    
</body>

</html>
      