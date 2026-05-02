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
                    <iframe class="w-100 rounded mb-4" height="350px" src="<?php echo $contact_r['iframe']?>" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    
                    <h5>Adresa</h5>
                    <a href="<?php echo $contact_r['gmap']?>" target="_blank" class="d-inline-block text-decoration-none text-dark mb-2">
                        <i class="bi bi-geo-alt-fill"></i> <?php echo $contact_r['address']?>
                    </a>

                    <h5 class="mt-4">Zavolejte nám</h5>
                    <a href="tel: +<?php echo $contact_r['pn1']?>" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-telephone-fill"></i> +<?php echo $contact_r['pn1']?>
                    </a>

                    <h5 class="mt-4">Email</h5>
                    <a href="mailto: <?php echo $contact_r['email']?>" class="d-inline-block text-decoration-none text-dark">
                        <i class="bi bi-envelope-fill"></i> <?php echo $contact_r['email']?>
                    </a>

                    <h5 class="mt-4">Sledujte nás</h5>
                    <?php
                        if($contact_r['twitter']!='')
                        {
                            echo <<<data
                                <a href="<?php echo $contact_r[twitter]?>" target="_blank" class="d-inline-block text-dark fs-5 me-2">
                                    <i class="bi bi-twitter-x me-1"></i>
                                </a>
                            data;
                        }
                    ?>
                    <a href="<?php echo $contact_r['insta']?>" target="_blank" class="d-inline-block text-dark fs-5 me-2" >
                        <i class="bi bi-instagram me-1"></i>
                    </a>
                    <a href="<?php echo $contact_r['fb']?>" target="_blank" class="d-inline-block text-dark fs-5">
                        <i class="bi bi-facebook me-1"></i> 
                    </a>
                </div>
            </div>
            
            <!-- Form -->
            <div class="col-lg-6 col-md-6 mb-5 px-4">
                <div class="bg-white rounded shadow p-4 h-100">
                    <form method="POST" class="h-100 d-flex flex-column">
                        <h5>Napište nám zprávu</h5>
                        <div class="mt-4">
                            <label class="form-label" style="font-weight: 500;">Jméno a příjmení</label>
                            <input name="name" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-4">
                            <label class="form-label" style="font-weight: 500;">Email</label>
                            <input name="email" required type="email" class="form-control shadow-none">
                        </div>
                         <div class="mt-4">
                            <label class="form-label" style="font-weight: 500;">Téma</label>
                            <input name="subject" required type="text" class="form-control shadow-none">
                        </div>
                        <div class="mt-4 flex-grow-1 d-flex flex-column">
                            <label class="form-label" style="font-weight: 500;">Zpráva</label>
                            <textarea name="message" required class="form-control shadow-none flex-grow-1" style="resize: none;"></textarea>
                        </div>
                        <button type="submit" name="send" class="btn text-white custom-bg mt-4 py-2 fs-5">Odeslat zprávu</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        if(isset($_POST['send']))
        {
            $frm_data = filteration($_POST);

            $q = "INSERT INTO `user_queries`(`name`, `email`, `subject`, `message`) VALUES (?, ?, ?, ?)";
            $values = [$frm_data['name'], $frm_data['email'], $frm_data['subject'], $frm_data['message']];

            $res = insert($q, $values, 'ssss');
            if($res==1)
            {
                alert('success', 'Zpráva odeslána');
            }
            else
            {
                alert('error', 'Výpadek serveru! Zkus znovu později');
            }
        }
    ?>

    <?php require('inc/footer.php'); ?>
</body>
</html>