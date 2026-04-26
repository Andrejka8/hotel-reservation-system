<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AD Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/style.css">

    <style>
        .availability-form{
            margin-top: -50px;
            z-index: 2;
            position: relative;
        }

        @media screen and (max-width: 575px) {
            .availability-form{
                margin-top: 25px;
                padding: 0 35px;
            }
        }
    </style>
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">AD Hotel</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="#">Domovská stránka</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Pokoje</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Vybavení</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="#">Kontaktuje nás</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">O nás</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                        Přihlásit se
                    </button>
                     <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
                        Registrovat se
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Login -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-circle fs-3 me-2"></i> Přihlášení uživatele
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                         <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Heslo</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">Přihlásit se</button>
                            <a href="javascript: void(0)" class="text-secondary text-decoration-underline">Zapomenuté heslo?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Registration -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">
                            <i class="bi bi-person-lines-fill fs-3 me-2"></i> Registrace uživatele
                        </h5>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
                            Vaše údaje se musí shodovat s vaším průkazem totožnosti (občanský průkaz, cestovní pas, řidičský průkaz),
                            který bude vyžadován při check-inu.
                        </span>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Jméno a přijmení</label>
                                    <input type="text" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Telefonní číslo</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Fotografie</label>
                                    <input type="file" class="form-control shadow-none">
                                </div>
                                <div class="col-md-12 p-0 mb-3">
                                    <label class="form-label">Adresa</label>
                                    <textarea class="form-control shadow-none" rows="1"></textarea>
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">PSČ</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Datum narození</label>
                                    <input type="date" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 ps-0 mb-3">
                                    <label class="form-label">Heslo</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                                <div class="col-md-6 p-0 mb-3">
                                    <label class="form-label">Potvrzení hesla</label>
                                    <input type="password" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-1">
                            <button type="submit" class="btn btn-dark shadow-none">Registrovat se</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Carousel -->
    <div class="container-fluid px-lg-4 mt-4">
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="images/carousel/1.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/2.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/3.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/4.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/5.png" class="w-100 d-block">
                </div>
                <div class="swiper-slide">
                    <img src="images/carousel/6.png" class="w-100 d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- Availability -->
    <div class="container availability-form">
        <div class="row">
           <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="mb-4">Zkontrolujte dostupnost</h5>
                <form>
                    <div class="row align-items-end">
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Od</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                         <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Do</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-lg-3 mb-3">
                            <label class="form-label" style="font-weight: 500;">Dospělý</label>
                            <select class="form-select sahow-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <label class="form-label" style="font-weight: 500;">Dítě</label>
                            <select class="form-select sahow-none">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="col-lg-1 mb-lg-3 mt-2">
                            <button type="submit" class="btn text-white shadow-none custom-bg">Potvrdit</button>
                        </div>
                    </div>
                </form>
           </div> 
        </div>
    </div>

    <!-- Rooms -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Nabídka pokojů</h2>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Apartmán pro 4 osoby</h5>
                        <h6 class="mb-4">5000 Kč za noc</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Popis</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Pokoje
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Koupelna
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balkón
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Pohovky
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Vybavení</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wi-Fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Televize
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Klimatizace
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Topení
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Hodnocení</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Rezervovat</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Více informací</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Apartmán pro 4 osoby</h5>
                        <h6 class="mb-4">5000 Kč za noc</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Popis</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Pokoje
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Koupelna
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balkón
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Pohovky
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Vybavení</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wi-Fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Televize
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Klimatizace
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Topení
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Hodnocení</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Rezervovat</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Více informací</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 my-3">
                <div class="card border-0 shadow" style="max-width: 350px; margin: auto">
                    <img src="images/rooms/1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5>Apartmán pro 4 osoby</h5>
                        <h6 class="mb-4">5000 Kč za noc</h6>
                        <div class="features mb-4">
                            <h6 class="mb-1">Popis</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                2 Pokoje
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Koupelna
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                1 Balkón
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                3 Pohovky
                            </span>
                        </div>
                        <div class="facilities mb-4">
                            <h6 class="mb-1">Vybavení</h6>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Wi-Fi
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Televize
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Klimatizace
                            </span>
                            <span class="badge rounded-pill bg-light text-dark text-wrap">
                                Topení
                            </span>
                        </div>
                        <div class="rating mb-4">
                            <h6 class="mb-1">Hodnocení</h6>
                            <span class="badge rounded-pill bg-light">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </span>
                        </div>
                        <div class="d-flex justify-content-evenly mb-2">
                            <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Rezervovat</a>
                            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">Více informací</a>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Další pokoje >>></a>
            </div>
        </div>
    </div>

    <!-- Features -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Nabídka vybavení</h2>
    <div class="container">
        <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/wifi.svg" width="80px">
                <h5 class="mt-3">Wi-Fi</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/ac.svg" width="80px">
                <h5 class="mt-3">Klimatizace</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/massage.svg" width="80px">
                <h5 class="mt-3">Masáže</h5>
            </div>
            <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
                <img src="images/facilities/television.svg" width="80px">
                <h5 class="mt-3">Televize</h5>
            </div>
           
            <div class="col-lg-12 text-center mt-5">
                <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Další vybavení >>></a>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Recenze</h2>
    <div class="container mt-5">
        <div class="swiper swiper-testimonials">
            <div class="swiper-wrapper mb-5">
                
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/about/rating.svg" width="30px">
                        <h6 class="m-0 ms-2">Pepa z Brna</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Iusto nihil, esse eum accusamus atque cum veritatis sunt 
                        laborum, dolor voluptatum soluta maiores et, voluptas 
                        fuga a incidunt consequatur voluptate at.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/about/rating.svg" width="30px">
                        <h6 class="m-0 ms-2">Pepa z Brna</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Iusto nihil, esse eum accusamus atque cum veritatis sunt 
                        laborum, dolor voluptatum soluta maiores et, voluptas 
                        fuga a incidunt consequatur voluptate at.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/about/rating.svg" width="30px">
                        <h6 class="m-0 ms-2">Pepa z Brna</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Iusto nihil, esse eum accusamus atque cum veritatis sunt 
                        laborum, dolor voluptatum soluta maiores et, voluptas 
                        fuga a incidunt consequatur voluptate at.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/about/rating.svg" width="30px">
                        <h6 class="m-0 ms-2">Pepa z Brna</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Iusto nihil, esse eum accusamus atque cum veritatis sunt 
                        laborum, dolor voluptatum soluta maiores et, voluptas 
                        fuga a incidunt consequatur voluptate at.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
                <div class="swiper-slide bg-white p-4">
                    <div class="profile d-flex align-items-center mb-3">
                        <img src="images/about/rating.svg" width="30px">
                        <h6 class="m-0 ms-2">Pepa z Brna</h6>
                    </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Iusto nihil, esse eum accusamus atque cum veritatis sunt 
                        laborum, dolor voluptatum soluta maiores et, voluptas 
                        fuga a incidunt consequatur voluptate at.
                    </p>
                    <div class="rating">
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Reach us -->
     <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Kontaktujte nás</h2>
     <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
                <iframe class="w-100 rounded" height="400px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82507.18991581592!2d13.289570349001426!3d49.74186386558592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1e5133d11b7%3A0x31b9406e3fc10b83!2zUGx6ZcWI!5e0!3m2!1scs!2scz!4v1777224372755!5m2!1scs!2scz" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            
            <div class="col-lg-4 col-md-4 d-flex flex-column gap-4">
                
                <div class="bg-white p-4 rounded">
                    <h5>Zavolejte nám</h5>
                    <a href="tel: +420 123 456 789" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +420 123 456 789
                    </a>
                </div>
                
                <div class="bg-white p-4 rounded">
                    <h5>Napište nám</h5>
                    <a href="mailto: info@tvujhotel.cz" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> info@adhotel.cz
                    </a>
                </div>
                
                <div class="bg-white p-4 rounded">
                    <h5>Sledujte nás</h5>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-twitter-x me-1"></i> Twitter
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block mb-3">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-instagram me-1"></i> Instagram
                        </span>
                    </a>
                    <br>
                    <a href="#" class="d-inline-block">
                        <span class="badge bg-light text-dark fs-6 p-2">
                        <i class="bi bi-facebook me-1"></i> Facebook
                        </span>
                    </a>
                </div>
                
            </div>
        </div>
    </div>


<br><br><br>
<br><br><br>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container",
        {
            spaceBetween: 30,
            effect: "fade",
            loop: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            }
        });

        var swiper = new Swiper(".swiper-testimonials", 
        {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            slidesPerView: "3",
            loop: true,
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            breakpoints: {
                320: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                },
            }
        });
    </script>
</body>
</html>