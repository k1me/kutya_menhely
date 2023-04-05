<?php
    $title = 'Új Kezdet Kutya Menhely';
    $page = 'index';
?>
<!DOCTYPE html>
<html lang="hu">
<?php include 'head.php'; ?>
<body>
    <?php include 'header.html'; ?>
    <?php include 'navbar.php'; ?>
    <div class="body-container">

        <div class="flex-container">
            <div class="section-container">
                <section>
                    <h2>Menhelyünk története</h2>
                    <p>Alapítványunk 2020. novembere óta működteti az Új Kezdet nevű kutyamenhelyét.</p>
                    <p>A tanya eredetileg egy bentlakásos kutyakiképző bázisként funkcionált, így a megvásárláskor már készen kaptunk kutyák elhelyezésére alkalmas 14 darab kennelt.</p>
                    <p>Kutyamenhelyünket a következő elvek alapján működtetjük:</p>
                    <div class="behuz">
                        <ul>
                            <li>&#x2022; Minden befogadott kutyának joga van megfelelő minőségű és mennyiségű ételre, évente a kötelező és ajánlott védőoltásra, rendszeres külső és belső élősködők elleni kezelésre, szívféregkezelésre, betegség esetén minőségi állategészségügyi ellátásra.</li>
                            <li>&#x2022; Minden befogadott kutyának joga van a rendszeres napi mozgásra, ami a hét minden napján, a kenneléhez tartozó úgynevezett "futtatóudvarban" történő 1-3 órás szabad mozgást, futkározást, ásást, labdázást, nyáron medencés fürdőzést jelent. Önkénteseinknek köszönhetően hétvégente pedig pórázon történő sétáltatásra a menhely körül.</li>
                            <li>&#x2022; A befogadott kutyának joga van az élethez. Helyhiány miatt nincs végleges altatás. A befogadott kutyák örökbefogadásukig vagy természetes elmúlásukig biztonságos otthonra számíthatnak a Tappancstanyán.</li>
                            <li>&#x2022; Minden befogadott kutyának joga van a biztonságra. A kutyamenhelyen élő szigorú szabályok mind az ő biztonságukat szolgálják.</li>
                            <li>&#x2022; Minden menhelyi kutyának joga van a megfelelő élettérre. Több kutya az élete jelentős részét egy kutyamenhelyen tölti, joga van a pihenésre, a nyugalomra, joga van olyan más kutyákkal élni egy térben, akikkel egyébként barátság köt.</li>
                        </ul>
                        <video class="video" width="700" autoplay muted>
                            <!-ide warningot dob a validator, de nem kell vele foglalkozni,
                            mivel html5-ben már specifikálva van a "muted" attribútum
                            ref: https://html.spec.whatwg.org/multipage/media.html#attr-media-muted->
                            <source src="multi/video.mp4" type="video/mp4">
                        </video>
                    </div>
                </section>
                <section>
                    <h2>Rejtélyes lakó</h2>
                    <p>Menhelyünk eredetileg csak kutyáknak adott otthont, ám egy tavaszi reggelen keserves mekegésre lettünk figyelmesek az egyik kennel mögül.</p>
                    <p>Egy gyönyörű kiskecske sírdogált, mert megtámadhatta egy ragadozó, a nyakán található nyomokból ítélve. </p>
                    <p>Azonnal elláttuk, a következő dolgunk pedig az volt, hogy megtaláljuk a gazdáját. Körbekérdeztük az egész környéket, de senki nem kereste, így hát úgy döntöttünk megtartjuk, és elneveztük Kuglófnak a relytéjes túlélőt.</p>
                    <p>Azóta velünk él a menhelyen, és ő lett a szerencsehozó kabalaállatunk.</p>
                    <div class="kuglof-wrapper">
                        <img class="kuglof-img" src="img/babakuglof.jpg" alt="Kis Kuglóf" width="265">
                        <img class="kuglof-img" src="img/kiskuglof.jpg" alt="Kis Kuglóf" width="200">
                        <img class="kuglof-img" src="img/kuglof.jpg" alt="Kuglóf" width="305">
                        <img class="kuglof-img" src="img/kuglof2.jpg" alt="Kuglóf" width="305">
                    </div>
                </section>
            </div>
            <div class="aside-container">
                <aside>
                    <h2>Fogadjon örökbe</h2>
                    <?php include 'queries/kutya_index.php'; ?>
                </aside>
            </div>
        </div>
    </div>
    <?php include 'footer.html'; ?>
</body>
</html>