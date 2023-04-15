<?php
    session_start();
    $title = 'Ajánló';
    $page = 'ajanlo';
?>
<!DOCTYPE html>
<html lang="hu">
<?php include 'head.php'; ?>
<body>
    <?php include 'header.html'; ?>
    <?php include 'navbar.php'; ?>
    <div class="kerdoiv-container">
        <form class="kerdoiv">
            <h1>Milyen kutya illik hozzád?</h1>
            <div class="fieldset-container">
                <fieldset id="meret">
                    <legend>Kutya mérete</legend>
                    <div class="valasz">
                        <input type="radio" name="meret">
                        <label>Óriás vagy nagytestű</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="meret">
                        <label>Közepes méretű</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="meret">
                        <label>Kistestű</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="meret">
                        <label>Nem számít</label>
                    </div>
                </fieldset>
                <fieldset id="szor">
                    <legend>Szőrtípus</legend>
                    <div class="valasz">
                        <input type="radio" name="szor">
                        <label>Hosszú vagy félhosszú</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="szor">
                        <label>Normál hossz</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="szor">
                        <label>Rövid</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="szor">
                        <label>Kopasz</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="szor">
                        <label>Nem számít</label>
                    </div>
                </fieldset>
                <fieldset id="test">
                    <legend>Testfelépítés</legend>
                    <div class="valasz">
                        <input type="radio" name="test">
                        <label>Erős csontozatú</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="test">
                        <label>Átlagos, normál testalkat</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="test">
                        <label>Vékony</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="test">
                        <label>Nem számít</label>
                    </div>
                </fieldset>
                <fieldset id="mozg">
                    <legend>Mozgásigény</legend>
                    <div class="valasz">
                        <input type="radio" name="mozg">
                        <label>Magas mozgásigény</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="mozg">
                        <label>Közepes mozgásigény</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="mozg">
                        <label>Legyen lusta</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="mozg">
                        <label>Nem tudom</label>
                    </div>
                </fieldset>
                <fieldset id="turelemes">
                    <legend>Gyerekbarát</legend>
                    <div class="valasz">
                        <input type="radio" name="turelem">
                        <label>Türelmes</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="turelem">
                        <label>Közepesen türelmes</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="turelem">
                        <label>Nem kell türelmesnek lennie</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="turelem">
                        <label>Nem számít</label>
                    </div>
                </fieldset>
                <fieldset id="ido">
                    <legend>Ráfordított idő</legend>
                    <div class="valasz">
                        <input type="radio" name="ido">
                        <label>Nagyon sok</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="ido">
                        <label>Napi 1-2 óra</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="ido">
                        <label>Nem túl sok</label>
                    </div>
                    <div class="valasz">
                        <input type="radio" name="ido">
                        <label>Nem tudom</label>
                    </div>
                </fieldset>
            </div>
            <div class="gomb">
                <button type="submit">Elküldés</button>
                <button type="reset" >Újrakezdés</button>
            </div>
        </form>
    </div>
    <div class="tapajanlo">
        <div class="table-wrapper">
            <h1>Mennyit egyen a kutyád?</h1>
            <table>
                <tr>
                    <th colspan="7">Ajánlott napi mennyiség grammban</th>
                </tr>
                <tr>
                    <th colspan="1" rowspan="2">Kor hónapban</th>
                    <th colspan="6">Kutya súlya</th>
                </tr>
                <tr>
                    <td>25 kg</td>
                    <td>30 kg</td>
                    <td>35 kg</td>
                    <td>40 kg</td>
                    <td>50 kg</td>
                    <td>50-70 kg</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>230</td>
                    <td>250</td>
                    <td>270</td>
                    <td>290</td>
                    <td>320</td>
                    <td>320-350</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>310</td>
                    <td>340</td>
                    <td>380</td>
                    <td>420</td>
                    <td>460</td>
                    <td>460-600</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>350</td>
                    <td>390</td>
                    <td>430</td>
                    <td>465</td>
                    <td>545</td>
                    <td>545-620</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>400</td>
                    <td>450</td>
                    <td>520</td>
                    <td>560</td>
                    <td>590</td>
                    <td>590-720</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>435</td>
                    <td>490</td>
                    <td>540</td>
                    <td>590</td>
                    <td>665</td>
                    <td>665-900</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>415</td>
                    <td>470</td>
                    <td>500</td>
                    <td>550</td>
                    <td>635</td>
                    <td>635-900</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>400</td>
                    <td>455</td>
                    <td>485</td>
                    <td>535</td>
                    <td>595</td>
                    <td>595-880</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>365</td>
                    <td>420</td>
                    <td>480</td>
                    <td>530</td>
                    <td>580</td>
                    <td>580-810</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td>365</td>
                    <td>420</td>
                    <td>480</td>
                    <td>530</td>
                    <td>580</td>
                    <td>580-810</td>
                </tr>
                <tr>
                    <td>24</td>
                    <td>350</td>
                    <td>395</td>
                    <td>450</td>
                    <td>460</td>
                    <td>490</td>
                    <td>490-710</td>
                </tr>
            </table>
        </div>
    </div>
    <?php include_once 'footer.html'; ?>
</body>
</html>