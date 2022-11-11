<?php
require_once __DIR__ . '/db_connect.php';

if(isset($_POST['btn_register'])){
    $nome = $connect->real_escape_string($_POST['nome']);
    $cognome = $connect->real_escape_string($_POST['cognome']);
    $email = $connect->real_escape_string($_POST['email']);
    $password = $connect->real_escape_string($_POST['password']);
    $password = md5($password);

    $sql = "INSERT INTO utenti (nome, cognome, email, password) VALUES ('$nome', '$cognome', '$email', '$password')";

    if($connect->query($sql) === true) {
        echo "Dati salvati con successo";
    } else{
        echo "Errore durante inserimento: " . $connect->error;
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione | Edusogno</title>

    <link rel="stylesheet" href="assets/styles/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="h-container">
            <a href="#" >
                <svg width="110px" height="46.8" viewBox="0 0 665 283" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="logo-3" transform="translate(0.000000, -797.000000)" fill="#000">
                            <g id="Group" transform="translate(0.000000, 797.000000)">
                                <polygon id="Fill-1" points="50.6787 169.5293 76.2997 179.1843 99.8607 116.1223 74.2397 106.4673"></polygon>
                                <polygon id="Fill-2" points="194.166 172.626 153.276 59.407 135.27 65.965 140.908 81.575 99.864 81.575 99.864 179.185 140.909 179.185 140.909 81.578 176.161 179.185"></polygon>
                                <g id="Group-21">
                                    <path d="M456.2842,160.1572 C461.4152,160.1572 463.0342,156.6452 463.0342,140.8582 C463.0342,124.7992 461.4152,121.4272 456.2842,121.4272 C451.4272,121.4272 449.8072,124.7992 449.6742,140.8582 C449.5402,156.6452 451.4272,160.1572 456.2842,160.1572 M477.6082,198.8852 C477.6082,195.7822 474.3702,194.1632 465.5972,193.7572 L439.6872,192.5442 C439.0122,194.1632 438.7442,195.7822 438.7442,197.8042 C438.7442,204.4192 449.6742,207.3852 457.3642,207.3852 C473.0172,207.3852 477.6082,201.9872 477.6082,198.8852 M493.5292,191.1912 C493.5292,205.0922 477.7422,212.9192 457.3642,212.9192 C440.2272,213.0542 425.3842,208.6002 425.3842,199.9642 C425.3842,195.2422 428.0832,191.8672 432.9402,189.5722 C430.1082,186.8732 428.2162,182.5542 428.2162,177.4292 C428.2162,169.0602 432.2672,163.1232 437.3922,160.4242 C430.1082,156.1062 425.7902,149.0892 425.7902,140.8582 C425.7902,127.4982 438.0682,116.5692 456.2842,116.5692 C464.6532,116.5692 471.8052,118.4582 477.0682,122.1002 C477.0682,122.1002 503.0882,122.3972 520.0812,119.8792 C525.3732,119.0952 529.9122,117.6662 531.9952,116.0292 L522.2692,129.9832 L482.0602,126.5542 C485.1652,130.4692 486.9182,135.3272 486.9182,140.8582 C486.9182,154.0832 474.7732,165.0142 456.2842,165.0142 C451.1592,165.0142 446.5682,164.2032 442.5222,162.8552 C440.6312,163.7992 439.1482,165.2822 439.1482,167.3072 C439.1482,169.1972 440.3642,170.8162 444.4092,170.9522 L457.5002,171.2202 C483.4102,171.6262 493.5292,179.0492 493.5292,191.1912" id="Fill-3"></path>
                                    <path d="M547.918,173.3789 L547.918,139.1059 C547.918,133.8409 546.568,129.3899 541.035,129.3899 C536.989,129.3899 534.693,130.7359 533.345,132.8959 L533.345,173.3789 C533.345,179.1829 534.424,183.2319 536.583,185.6599 L501.497,185.6599 C503.656,183.2319 504.736,179.1829 504.736,173.3789 L504.736,130.7359 C504.736,124.9349 505.334,123.9039 503.309,121.4779 C509.785,121.0709 526.38,120.2779 531.995,116.0289 L531.995,126.6909 C535.37,121.2929 541.308,115.0829 553.046,115.0829 C571.129,115.0829 576.66,126.8239 576.66,143.1509 L576.66,173.3789 C576.66,179.1829 577.739,183.2319 579.898,185.6599 L544.68,185.6599 C546.839,183.2319 547.918,179.1829 547.918,173.3789" id="Fill-5"></path>
                                    <path d="M344.75,90.1426 L344.75,100.8046 L274.983,100.8046 C277.683,98.3756 279.032,94.7336 279.032,87.8506 L279.032,15.5196 C279.032,8.6366 277.683,4.9946 274.983,2.5656 L343.266,2.5656 L343.266,13.2266 L343.13,13.2266 C340.701,10.6626 337.598,9.4486 330.581,9.4486 L307.91,9.4486 L307.91,43.5886 L323.698,43.5886 C329.501,43.5886 333.549,42.5086 335.979,40.3496 L335.979,53.5746 C333.549,51.4146 329.501,50.3356 323.698,50.3356 L307.91,50.3356 L307.91,93.9206 L332.065,93.9206 C338.947,93.9206 342.186,92.7076 344.614,90.1426 L344.75,90.1426 Z" id="Fill-7"></path>
                                    <path d="M399.9473,80.833 L399.9473,51.279 C397.5183,46.287 394.5493,44.668 390.7703,44.668 C384.4283,44.668 381.1893,49.256 381.0543,66.125 C380.9203,82.586 384.4283,87.58 390.7703,87.58 C394.5493,87.58 397.5183,85.961 399.9473,80.833 L399.9473,80.833 Z M401.0263,100.805 L399.9473,89.199 C395.0893,97.16 387.8013,101.75 376.8723,101.75 C362.2983,101.75 350.5573,90.549 350.5573,66.125 C350.5573,41.429 364.3223,30.364 377.9513,30.364 C387.6673,30.364 394.9543,34.952 399.9473,42.915 L399.9473,14.847 C399.9473,9.042 398.8673,5.13 396.7083,2.699 C403.1853,2.295 418.9743,1.216 428.5553,0 L428.5553,88.523 C428.5553,94.327 429.6343,98.375 431.7943,100.805 L401.0263,100.805 Z" id="Fill-9"></path>
                                    <path d="M486.4531,100.8047 L485.7761,89.1997 C482.6751,94.5967 477.0071,101.7507 463.6451,101.7507 C448.3971,101.7507 442.0551,93.2477 442.0551,76.9207 L442.0551,43.7217 C442.0551,37.9207 440.9751,36.4377 438.8161,34.0057 C448.6671,33.6027 460.1381,32.3867 470.6631,31.3067 L470.6631,77.7277 C470.6631,83.1257 472.0131,87.5797 477.5471,87.5797 C480.5161,87.5797 482.6751,85.9607 484.4281,82.7217 L484.4281,43.7217 C484.4281,37.9207 483.3481,36.4377 481.1881,34.0057 C491.0411,33.6027 502.5101,32.3867 513.0351,31.3067 L513.0351,88.5237 C513.0351,94.3267 514.1151,98.3757 516.2741,100.8047 L486.4531,100.8047 Z" id="Fill-11"></path>
                                    <path d="M331.8745,120.2134 L328.7695,128.3104 L328.6355,128.3104 C327.0165,126.8244 320.1335,122.2364 311.3635,122.2364 C303.3995,122.2364 299.7575,124.2594 299.7575,128.9834 C299.7575,138.0254 335.2475,141.6684 335.2475,162.9894 C335.2475,179.1824 321.0795,186.6064 298.4085,186.6064 C282.6185,186.6064 275.7375,182.9614 271.9595,181.0724 L274.9285,173.1114 L275.0615,173.1114 C276.2775,174.1914 283.9685,179.3164 294.6295,179.3164 C303.1305,179.3164 307.1785,176.8894 307.1785,171.7594 C307.1785,159.7514 272.4995,161.6394 272.0925,138.4294 C271.9595,125.4754 282.2155,115.0834 308.2575,115.0834 C319.1895,115.0834 326.3405,117.5144 331.8745,120.2134" id="Fill-13"></path>
                                    <path d="M371.0107,150.8447 C370.8747,175.8107 373.3037,181.0727 379.6477,181.0727 C386.1247,181.0727 388.4177,175.8107 388.2837,150.8447 C388.1477,125.8787 386.1247,120.7537 379.6477,120.7537 C373.3037,120.7537 371.1447,125.8787 371.0107,150.8447 M418.6447,150.8447 C418.6447,170.1407 404.2047,186.6067 379.6477,186.6067 C353.7387,186.6067 340.5137,171.3567 340.5137,150.8447 C340.5137,131.5487 355.0847,115.0827 379.6477,115.0827 C405.2837,115.0827 418.6447,130.3327 418.6447,150.8447" id="Fill-15"></path>
                                    <path d="M616.8975,150.8447 C616.7615,175.8107 619.1905,181.0727 625.5345,181.0727 C632.0115,181.0727 634.3035,175.8107 634.1705,150.8447 C634.0345,125.8787 632.0115,120.7537 625.5345,120.7537 C619.1905,120.7537 617.0315,125.8787 616.8975,150.8447 M664.5315,150.8447 C664.5315,170.1407 650.0905,186.6067 625.5345,186.6067 C599.6255,186.6067 586.3975,171.3567 586.3975,150.8447 C586.3975,131.5487 600.9715,115.0827 625.5345,115.0827 C651.1705,115.0827 664.5315,130.3327 664.5315,150.8447" id="Fill-17"></path>
                                    <path d="M13.4902,15.2461 L13.4902,124.1231 C13.4902,178.3311 43.2912,227.6771 91.2652,252.9071 L122.4442,269.3071 L153.6242,252.9071 C201.5992,227.6771 231.4002,178.3311 231.4002,124.1231 L231.4002,15.2461 L13.4902,15.2461 Z M122.4462,282.6671 C121.2402,282.6671 120.0342,282.3781 118.9352,281.7991 L85.3592,264.1381 C33.2022,236.7081 0.8022,183.0561 0.8022,124.1231 L0.8022,2.5581 L244.0882,2.5581 L244.0882,124.1231 C244.0882,183.0561 211.6872,236.7081 159.5312,264.1381 L125.9482,281.8021 C124.8522,282.3781 123.6502,282.6671 122.4462,282.6671 L122.4462,282.6671 Z" id="Fill-19"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <section>
            <div class="container">
                <h1>
                    Crea il tuo account?
                </h1>
                <!-- form -->
                <div class="form-container">
                    <form action="" method="post">
                        <div>
                            <label for="nome">Inserisci il nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Mario" required>
                        </div>

                        <div>
                            <label for="cognome">Inserisci il cognome</label>
                            <input type="text" name="cognome" id="cognome" placeholder="Rossi" required>
                        </div>

                        <div>
                            <label for="email">Inserisci l'e-mail</label>
                            <input type="email" name="email" id="email" placeholder="name@example.com" required>
                        </div>

                        <div class="password-container">
                            <label for="password">Inserisci la password</label>
                            <input type="password" name="password" id="password" placeholder="Scrivila qui" required>
                            <i class="fa-solid fa-eye" id="show-password"></i>
                        </div>

                        <div>
                            <button type="submit" class="btn" name="btn_register">REGISTRATI</button>
                        </div>

                        <?php

                        

                        $connect->close();
                        ?>

                        <div class="form-text">
                            Hai già un account? <a href="index.php">Accedi</a>
                        </div>
                
                    </form>
                </div>
                <!-- end form -->
            </div>
        </section>     

    </main>
  
    <script type="text/javascript" src="assets/js/script.js"></script>
</body>
</html>