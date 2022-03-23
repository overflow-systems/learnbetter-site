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
            </nav>
        </header>
        <main class="main">
            <!-- Hero section -->
            <section class="hero section" id="home">
                <div class="hero_container">
                    <div class="hero_data">
                        <h1 class="section_title">
                        ENCONTRE A <p class="first_color_text">MENTORIA CERTA</p> PARA VOCÊ
                        </h1>
                        <p class="hero_data_subtext">
                        A LearnBetter é a solução para quem busca ensinar,<br>
                        a fim de por em prática o conteúdo entendido e<br>
                        para aquele que procura uma ajudinha,<br>
                        no aprendizado e não sabe por onde começar.<br>
                        </p>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>

