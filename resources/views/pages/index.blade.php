@extends('layout')

    <body>
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav_logo">BetterMentory</a>

                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list grid">
                        <!-- list itens menu -->
                        <li class="nav_item">
                            <a href="#home" class="nav_link" id="active-link">
                                Home
                            </a>
                        </li>
                         
                        <li class="nav_item">
                            <a href="#platform" class="nav_link">
                                Plataforma
                            </a>
                        </li>

                        <li class="nav_item">
                            <a href="#mentors" class="nav_link">
                                Mentores
                            </a>
                        </li>

                        <li class="nav_item">
                            <a href="#contact" class="nav_link btn_menu">
                                Contate-nos
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="nav_btns">
                    <!-- theme change btn -->
                    <i class="uil uil-moon change-theme" id="theme-button"></i>

                    <div class="nav_toggle" id="nav-toggle">
                        <i class="uil uil-apps"></i>
                    </div>
                </div>
            </nav>
        </header>
    </body>
</html>

