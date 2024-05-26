<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css");

        :root {
            --header-height: 4rem;
            --nav-width: 260px;
            --first-color: #4723D9;
            --first-color-light: #AFA5D9;
            --white-color: #F7F6FB;
            --body-font: 'Nunito', sans-serif;
            --normal-font-size: 1rem;
            --z-fixed: 100
        }

        body {
            position: relative;
            margin: var(--header-height) 0 0 0;
            padding: 0 1rem;
            font-family: var(--body-font);
            font-size: var(--normal-font-size);
            transition: .5s;
        }

        hr {
            margin-left: -60px;
            margin-right: -16px;
        }

        a {
            text-decoration: none
        }

        .container {
            margin-top: 6rem;
        }

        .header {
            width: 100%;
            height: var(--header-height);
            position: fixed;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            background-color: var(--white-color);
            z-index: var(--z-fixed);
            transition: .5s;
        }

        .header_toggle {
            color: var(--first-color);
            font-size: 1.5rem;
        }

        .header_img {
            width: 100px;
            height: 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .header_img i {
            width: 20px
        }

        .header_img p {
            font-size: 10px;
        }


        .l-navbar {
            position: fixed;
            top: 0;
            left: -30%;
            display: flex;
            width: var(--nav-width);
            height: 100vh;
            background-color: var(--first-color);
            padding: .5rem 1rem 0 0;
            transition: .5s;
            z-index: var(--z-fixed)
        }

        .nav {
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden
        }

        .nav_logo,
        .nav_link {
            display: grid;
            grid-template-columns: max-content max-content;
            align-items: center;
            column-gap: 1rem;
            padding: .5rem 0 .5rem 1.5rem
        }

        .nav_logo {
            margin-top: 2rem;
            margin-bottom: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav_logo-icon {
            font-size: 1.25rem;
            color: var(--white-color)
        }

        .nav_logo-name {
            color: var(--white-color);
            font-weight: 700
        }

        .nav_link {

            position: relative;
            color: var(--first-color-light);
            margin-bottom: 1.5rem;
            transition: .3s
        }

        .nav_link:hover {
            color: var(--white-color)
        }

        .nav_icon {
            font-size: 1.25rem
        }

        .nav_list {
            margin-top: 5rem;
        }

        .show {
            left: 0
        }

        .body-pd {
            padding-left: calc(var(--nav-width) + 1rem)
        }

        .active {
            color: var(--white-color)
        }

        .active::before {
            content: '';
            position: absolute;
            left: 0;
            width: 2px;
            height: 32px;
            background-color: var(--white-color)
        }

        .height-100 {
            height: 100vh
        }

        @media screen and (min-width: 768px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem)
            }

            .header {
                height: calc(var(--header-height) + 1rem);
                padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
            }

            .header_img {
                width: 40px;
                height: 40px
            }

            .header_img img {
                width: 45px
            }

            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0
            }

            .show {
                width: calc(var(--nav-width) + 156px)
            }

            .body-pd {
                padding-left: calc(var(--nav-width) + 188px)
            }
        }
    </style>
</head>

<body id="body-pd">
    <main>
        <header class="header" id="header">
            <div class="header_toggle">
                <h1>School Management System <i class="bi bi-building"></i></h1>
            </div>
            <div class="header_img">
                <h1><i class="bi bi-person-circle"></i></h1>
            </div>
        </header>
        <hr />
        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div> <a href="#" class="nav_logo"><span class="nav_logo-icon">
                        </span>
                        <h4 class="nav_logo-name">Welcome User</h4>
                    </a>
                    <div class="nav_list">
                        <a href="#" class="nav_link"><i class="bi bi-house-fill nav_icon"></i>Home</a>
                        <a id="stu" href="{{url('/students')}}" class="nav_link"> <i class="bi bi-person nav_icon"></i> <span class="nav_name">Students</span> </a>
                        <a id='tea' href="{{url('/teachers')}}" class="nav_link"> <i class='bi-people-fill nav_icon'></i> <span class="nav_name">Teachers</span></a>
                        <a id='crs' href="{{url('/courses')}}" class="nav_link"> <i class='bi bi-book-half nav_icon'></i> <span class="nav_name">Courses</span> </a>
                        <a href="#" class="nav_link"> <i class='bi bi-person-add nav_icon'></i> <span class="nav_name">Enrollment</span> </a>
                        <a href="#" class="nav_link"> <i class='bi bi-credit-card-2-front-fill nav_icon'></i> <span class="nav_name">Payment</span> </a>
                    </div>
            </nav>
        </div>
        <!--Container Main start-->
        <div class="container">
            @yield('content')
        </div>
        <!--Container Main end-->
        </div>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')
            const stu =document.getElementById('stu')

            function colorLink() { 
                stu.classList.add('active')
                stu.classList.remove('active')
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))
        });
    </script>
</body>

</html>