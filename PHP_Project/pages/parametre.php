<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php include 'C:\xampp\htdocs\php\project\style\style\style.css'; ?>
        <?php include 'C:\xampp\htdocs\php\project\style\specifications\style.css'; ?>
    </style>
</head>
<body>
    <?php
        include 'C:\xampp\htdocs\php\project\pages\components\mutation\mutation.php';
    ?>
    <div class="page" >
        <div class="pres">
            <div class="param_name">
                <img class="spec_icon" src="http://localhost/php/project/multimedia/specifications/tech.png">
                <h2><?php echo $parametre['char'] ?></h2>
            </div>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['model'] ?></div>
                    <div class="p v">iPhone 7 Plus</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['year'] ?></div>
                    <div class="p v">2016</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['system'] ?></div>
                    <div class="p v">iOS 13</div>
                </div>
            </section>


            <div class="param_name">
                <img class="spec_icon" src="http://localhost/php/project/multimedia/specifications/screen.png">
                <h2><?php echo $parametre['display'] ?></h2>
            </div>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['display'] ?></div>
                    <div class="p v">Retina HD display with 3D Touch, widescreen LCD Multi-Touch display with IPS technology</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['resolution'] ?></div>
                    <div class="p v">1920x1080</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['size'] ?></div>
                    <div class="p v">5.5 palcový </div>
                </div>
            </section>


            <div class="param_name">
                <img class="spec_icon" src="http://localhost/php/project/multimedia/specifications/camera.png">
                <h2><?php echo $parametre['camera'] ?></h2>
            </div>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['self_photo'] ?></div>
                    <div class="p v">7 MP</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['main_camera'] ?></div>
                    <div class="p v">12 MP + 12 MP</div>
                </div>
            </section>


            <div class="param_name">
                <img class="spec_icon" src="http://localhost/php/project/multimedia/specifications/proc.png">
                <h2><?php echo $parametre['memory_and_processor'] ?></h2>
            </div>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['cpu_how_much'] ?></div>
                    <div class="p v">4</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['cpu'] ?></div>
                    <div class="p v">A10 Fusion Embedded M10 motion coprocessor</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['ram'] ?></div>
                    <div class="p v">3 GB</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['memory'] ?></div>
                    <div class="p v">32, 128, 256 GB</div>
                </div>
            </section>


            <div class="param_name">
                <img class="spec_icon" src="http://localhost/php/project/multimedia/specifications/int.png">
                <h2><?php echo $parametre['net'] ?></h2>
            </div>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['standart'] ?></div>
                    <div class="p v">GSM 850 / 900 / 1800 / 1900</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['connection'] ?></div>
                    <div class="p v">GPRS, EDGE</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['4g'] ?></div>
                    <div class="p v">LTE (Bands 1, 2, 3, 4, 5, 7, 8, 12, 13, 17, 18, 19, 20, 25, 26, 27, 28, 29, 30)</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['gps'] ?></div>
                    <div class="p v">áno</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['bluetooth'] ?></div>
                    <div class="p v">áno</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['wifi'] ?></div>
                    <div class="p v">áno</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['3G'] ?></div>
                    <div class="p v">áno</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['nfc'] ?></div>
                    <div class="p v">áno</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['4g'] ?></div>
                    <div class="p v">áno</div>
                </div>
            </section>


            <div class="param_name">
                <img class="spec_icon" src="http://localhost/php/project/multimedia/specifications/charge.png">
                <h2><?php echo $parametre['batery'] ?></h2>
            </div>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['conector'] ?></div>
                    <div class="p v">Lightning konektor</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['wait_time'] ?></div>
                    <div class="p v">Up to 16 days</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['talk_time'] ?></div>
                    <div class="p v">Up to 21 h (3G)</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['type_of_batery'] ?></div>
                    <div class="p v">Li-Ion</div>
                </div>
            </section>
            <section>
                <div class="param">
                    <div class="p n"><?php echo $parametre['size_of_batery'] ?></div>
                    <div class="p v">2900 mAh</div>
                </div>
            </section>



            <div class="param_name">
                <img class="spec_icon" src="http://localhost/php/project/multimedia/specifications/ine.png">
                <h2><?php echo $parametre['other'] ?></h2>
            </div>

            <table>
                <tr>
                  <td class="n"><?php echo $parametre['severity'] ?></td>
                  <td class="v">188 g (6.63 oz)</td>
                </tr>
                <tr>
                  <td class="n"><?php echo $parametre['depth'] ?></td>
                  <td class="v">7.3 mm (0.29 in)</td>
                </tr>
                <tr>
                  <td class="n"><?php echo $parametre['height'] ?></td>
                  <td class="v">158.2 mm (6.23 in)</td>                  
                </tr>
                <tr>
                  <td class="n"><?php echo $parametre['arrow'] ?></td>
                  <td class="v">77.9 mm (3.07 in)</td>
                </tr>
                <tr>
                  <td class="n"><?php echo $parametre['audio'] ?></td>
                  <td class="v">AAC-LC, HE-AAC, HE-AAC v2, Protected AAC, MP3, Linear PCM, Apple Lossless, FLAC, Dolby Digital (AC-3), Dolby Digital Plus (E-AC-3), and Audible (formats 2, 3, 4, Audible Enhanced Audio, AAX, and AAX+)</td>
                </tr>
                <tr>
                  <td class="n"><?php echo $parametre['num_of_sim'] ?></td>
                  <td class="v">1 SIM</td>
                </tr>
            </table>

            
            <div class="param_name">
                <h2><?php echo $parametre['prise'] ?></h2>
            </div>


            <table>
                <tr>
                  <th><?php echo $parametre['country'] ?></th>
                  <th>32GB</th>
                  <th>128GB</th>
                  <th>256GB</th>
                </tr>
                <tr>
                  <td>USA</td>
                  <td>769$</td>
                  <td>869$</td>
                  <td>969$</td>
                </tr>
                <tr>
                  <td>China</td>
                  <td>798$</td>
                  <td>906$</td>
                  <td>1041$</td>
                </tr>
                <tr>
                  <td>US</td>
                  <td>960$</td>
                  <td>1093$</td>
                  <td>1227$</td>
                </tr>
                <tr>
                  <td>Germany</td>
                  <td>1010$</td>
                  <td>1133$</td>
                  <td>1257$</td>
                </tr>
                <tr>
                  <td>Austria</td>
                  <td>1010$</td>
                  <td>1133$</td>
                  <td>1257$</td>
                </tr>
                <tr>
                  <td>France</td>
                  <td>1021$</td>
                  <td>1145$</td>
                  <td>1268$</td>
                </tr>
            </table>


    </div>        
</body>
</html>