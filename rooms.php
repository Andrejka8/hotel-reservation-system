<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nabídka pokojů | AD Hotel</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">
    
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Nabídka pokojů</h2>
        <div class="h-line bg-dark"></div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Left Column -->
            <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow h-100">
                    <div class="container-fluid flex-lg-column align-items-stretch h-100">
                        <h4 class="mt-2">Filtrování</h4>
                        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse d-lg-flex flex-column align-items-stretch mt-2 w-100 flex-grow-1" id="filterDropdown">
                            <div class="border bg-light p-4 rounded mb-4">
                                <h5 class="mb-3" style="font-size: 18px">Zkontrolovat dostupnost</h5>
                                <label class="form-label">Od</label>
                                <input type="date" class="form-control shadow-none mb-3">
                                <label class="form-label">Do</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                             <div class="border bg-light p-4 rounded mb-4">
                                <h5 class="mb-3" style="font-size: 18px">Vybavení</h5>
                                <div class="mb-2">
                                    <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f1">První vybavení</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f2">Druhé vybavení</label>
                                </div>
                                <div class="mb-2">
                                    <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
                                    <label class="form-check-label" for="f3">Třetí vybavení</label>
                                </div>
                            </div>
                            
                            <div class="border bg-light p-4 rounded mb-4">
                                <h5 class="mb-3" style="font-size: 18px">Počet lidí</h5>
                                <div class="d-flex">
                                    <div class="me-3">
                                        <label class="form-label">Dospělý</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                    <div>
                                        <label class="form-label">Děti</label>
                                        <input type="number" class="form-control shadow-none">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-auto mb-3">
                                <button type="button" class="btn text-white custom-bg shadow-none w-100 py-2 fs-5 rounded">Filtrovat</button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            
            <!-- Right Column -->
            <div class="col-lg-9 col-md-12 px-4">
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Apartmán</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Popis</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Pokoje</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Koupelna</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balkón</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">3 Pohovky</span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Vybavení</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Wi-Fi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Televize</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Klimatizace</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Topení</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Počet lidí</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">5 Dospělých</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Děti</span>
                            </div>
                        </div>
                        <div class="col-md-2 mt-lg-0 mt-md-0 mt-4 text-center">
                            <h6 class="mb-4">5000 Kč za noc</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Rezervovat</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Více informací</a>
                        </div>
                    </div>
                </div>  
                <div class="card mb-4 border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Apartmán</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Popis</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Pokoje</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Koupelna</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balkón</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">3 Pohovky</span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Vybavení</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Wi-Fi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Televize</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Klimatizace</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Topení</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Počet lidí</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">5 Dospělých</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Děti</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">5000 Kč za noc</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Rezervovat</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Více informací</a>
                        </div>
                    </div>
                </div>
                <div class="card border-0 shadow">
                    <div class="row g-0 p-3 align-items-center">
                        <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
                            <img src="images/rooms/1.jpg" class="img-fluid rounded">
                        </div>
                        <div class="col-md-5 px-lg-3 px-md-3 px-0">
                            <h5 class="mb-3">Apartmán</h5>
                            <div class="features mb-3">
                                <h6 class="mb-1">Popis</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">2 Pokoje</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Koupelna</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balkón</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">3 Pohovky</span>
                            </div>
                            <div class="facilities mb-3">
                                <h6 class="mb-1">Vybavení</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Wi-Fi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Televize</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Klimatizace</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Topení</span>
                            </div>
                            <div class="guests">
                                <h6 class="mb-1">Počet lidí</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">5 Dospělých</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Děti</span>
                            </div>
                        </div>
                        <div class="col-md-2 text-center">
                            <h6 class="mb-4">5000 Kč za noc</h6>
                            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Rezervovat</a>
                            <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">Více informací</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>
</body>
</html>