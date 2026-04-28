<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt | AD Hotel</title>
    <?php require('inc/links.php'); ?>
</head>

<body class="bg-light">
    
    <?php require('inc/header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Kontaktujte nás</h2>
        <div class="h-line bg-dark"></div>
        <p class="text-center mt-3">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Exercitationem impedit voluptatibus modi, non ad qui minima
            blanditiis natus<br>repudiandae necessitatibus fugiat quidem
            veritatis iure nesciunt ex maiores! Molestias, obcaecati officiis.
        </p>
    </div>

    <div class="container">
        <div class="row">
            <!-- Map and contact -->
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 h-100">
                    <iframe class="w-100 rounded mb-4" height="350px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d82507.18991581592!2d13.289570349001426!3d49.74186386558592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470af1e5133d11b7%3A0x31b9406e3fc10b83!2zUGx6ZcWI!5e0!3m2!1scs!2scz!4v1777224372755!5m2!1scs!2scz" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    <h5>Adresa</h5>
                    <a href="https://maps.app.goo.gl/8YUz7nnzPazin9TM7" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> XYZ, Plzeň, Česká republika
                    </a>

                    <h5 class="mt-4">Zavolejte nám</h5>
                    <a href="tel: +420 123 456 789" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +420 123 456 789
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: info@adhotel.cz" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> info@adhotel.cz
                    </a>

                    <h5 class="mt-4">Sledujte nás</h5>
                    <a href="https://x.com/" target="_blank" class="d-inline-block text-dark fs-5 me-2">
                        <i class="bi bi-twitter-x me-1"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="d-inline-block text-dark fs-5 me-2" >
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                    <a href="https://www.facebook.com/" target="_blank" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-facebook me-1"></i> 
                    </a>
                </div>
            </div>
            
            <!-- Form -->
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 h-100">
                    <form class="h-100 d-flex flex-column">
                        <h5>Napište nám zprávu</h5>
                        <div class="mt-4">
                            <label class="form-label" style="font-weight: 500;">Jméno a příjmení</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-4">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                         <div class="mt-4">
                            <label class="form-label" style="font-weight: 500;">Téma</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-4 flex-grow-1 d-flex flex-column">
                            <label class="form-label" style="font-weight: 500;">Zpráva</label>
                            <textarea class="form-control shadow-none flex-grow-1" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" class="btn text-white custom-bg mt-4 py-2 fs-5">Odeslat zprávu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php require('inc/footer.php'); ?>
</body>
</html>