@if(!isset($_COOKIE['cookies']))


    <div id="cookies-message">

        <div class="container">

            <p>

                Táto webová stránka používa súbory cookies. Využívaním cookies nedochádza k spracúvaniu osobných údajov podľa <a href="/{{asset("files/axis-gdpr.pdf")}}" target="_blank" title="GDPR destroy.sk">GDPR</a>. Prehliadaním webovej stránky návštevník akceptuje využívanie cookies. Viac informácií o využívaní cookies a možnostiach ich vypnutia nájdete

                <a href="javascript:void(0)" data-toggle="modal" data-target="#cookiesModal">tu</a>.

                <button id="cookie-button" onclick="iAgreeWithCookies()">

                    Súhlasím

                </button>

                <button onclick="iDisagreeWithCookies()" style="color: #aaa">

                    Nesúhlasím

                </button>

                <script>

                    function iAgreeWithCookies() {

                        expiry = new Date();

                        expiry.setTime(expiry.getTime()+ (365*24*60*60*1000));

                        document.cookie = "cookies=1; expires=" + expiry.toGMTString()+"; path=/";

                        document.getElementById('cookies-message').remove();

                    }

                    function iDisagreeWithCookies() {

                        expiry = new Date();

                        expiry.setTime(expiry.getTime()+ (365*24*60*60*1000));

                        document.cookie = "cookies=0; expires=" + expiry.toGMTString()+"; path=/";

                        document.getElementById('cookies-message').remove();

                    }

                </script>

            </p>

        </div>

    </div>



    <div id="cookiesModal" class="modal fade" role="dialog">

        <div class="modal-dialog" style="width: 100%;">



            <!-- Modal content-->

            <div class="modal-content">

                <div class="modal-header">

                    <h4 class="modal-title">Cookies</h4>

                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                </div>

                <div class="modal-body">

                    <div>

                        <ol>

                            <li>

                                Uvedené informácie poskytujú návštevníkovi webovej stránky www.axis.sk (ďalej len

                                „webová stránka“) bližší prehľad o využívaných cookies.

                            </li>

                            <li>

                                Prevádzkovateľ webovej stránky si prostredníctvom tohto dokumentu a nastavením webovej

                                stránky plní zákonné povinnosti, ktoré mu vyplývajú z § 55 ods. 5 zákona č. 351/2011 Z. z.

                                o elektronických komunikáciách v znení neskorších predpisov.

                            </li>

                            <li>

                                Na tejto webovej stránke dochádza k využívaniu základných a funkčných cookies, zaisťujú

                                najmä výkon základných funkcií webovej stránky a jej samotné fungovanie. Účelom

                                využívania cookies je aj možnosť uskutočniť analýzu návštevnosti webovej stránky a určiť

                                správanie návštevníka.

                            </li>

                            <li>

                                Súbory cookies, ktoré sú na webovej stránke používané nepredstavujú spracúvanie

                                osobných údajov podľa Nariadenia Európskeho parlamentu a Rady (EÚ) 2016/679 o ochrane

                                fyzických osôb pri spracúvaní osobných údajov a o voľnom pohybe takýchto údajov.

                            </li>

                            <li>

                                Cookies predstavujú malé textové súbory, ktoré môžu byť do internetového prehliadača

                                odosielané pri návšteve webových stránok a ukladané do zvoleného zariadenia návštevníka.

                                Ich uloženie sa realizuje do prehliadača návštevníka webovej stránky. Ich význam spočíva

                                v tom, že pri ďalšej návšteve webovej stránky umožní webový prehliadač znovu načítať

                                súbory cookies a tieto informácie odošle späť webovej stránke, ktorá pôvodne cookies

                                vytvorila.

                            </li>

                            <li>

                                Návštevníkovi je po načítaní webovej stránky oznámené, že táto používa súbory cookies.

                                Prehliadaním webovej stránky návštevník používanie súborov cookies akceptuje a vyjadruje

                                svoje súhlas. Takéto vyjadrenie súhlasu je spĺňa požiadavku udelenia súhlasu

                                prostredníctvom použitia príslušného nastavenia webového prehliadača. Návšteva webovej

                                stránky a poskytnutie informácií o využívaní súborov cookies na webovej stráne bez toho,

                                aby návštevník uskutočnil zmeny vo využívaní cookies v rámci svojho prehliadača, je

                                považované za takéto akceptovanie cookies a vyjadrenie súhlasu s podmienkami ich

                                využívania

                            </li>

                            <li>

                                Návštevník webovej stránky je oprávnený v ktoromkoľvek štádiu jej prehliadania zmeniť

                                nastavenia využívania cookies a tieto v celom rozsahu alebo v časti zmeniť zablokovať. Takéto

                                opatrenia návštevník webovej stránky realizuje prostredníctvom svojho prehliadača, kde je

                                mu zároveň umožnené získať bližšie informácie o využívaných cookies. Návštevník však

                                v zmysle týchto informácií berie na vedomie, že blokovaním cookies môže dôjsť k zníženiu

                                funkčnosti webovej stránky, čo môže návštevníkovi webovej stránky spôsobiť komplikácie pri

                                prehliadaní webovej stránky. Inštrukcie na zmenu cookies a ich prípadné blokovanie nájdete

                                v časti „pomoc“ každého prehliadača. Pri využívaní rozličných zariadení návštevníka webovej

                                stánky sa odporúča nastaviť každý prehliadač v rámci týchto zariadení osobitne, a tým

                                prispôsobiť prezeranie webových stránok preferenciám návštevníka.

                            </li>

                            <li>

                                Webová stránka obsahuje a/alebo môže obsahovať aj pluginy jednotlivých sietí tretích

                                subjektov. Pokiaľ na logá nekliknete nebudú prenesené žiadne údaje do sociálnych sietí.

                                Kliknutím na tieto logá akceptujete komunikáciu so servermi sociálnej siete. Bližšie

                                informácie o následnom využívaní cookies poskytujú tieto tretie subjekty osobitne, a to

                                najmä informácie o účeloch využívania cookies, rozsahu údajov zhromažďovaných

                                prostredníctvom týchto sietí tretích subjektov, ako aj informácie o ich ďalšom spracúvaní a

                                využívaní údajov takouto sieťou tretieho subjektu.

                            </li>

                            <li>

                                Webová stránka využíva cookies potrebné pre zaistenie funkčnosti služieb Google Analytics,

                                ktoré umožňujú získavať štatistické údaje najmä o návštevnosti webovej stránky a správaní

                                návštevníka na webovej stránke. Prostredníctvom služieb Google Analytics nedochádza k spracúvaniu osobných údajov návštevníka webovej stránky. Návštevník môže zamedziť

                                tomu, aby jeho prehliadanie internetových stránok bolo ukladané do analytických súborov

                                cookies. (Google Analytics: <a href="https://policies.google.com/privacy?hl=sk" target="_blank">https://policies.google.com/privacy?hl=sk</a>).

                            </li>

                            <li>

                                Cookies využívané na webovej stránke nezhromažďujú o návštevníkovi webovej stránky

                                žiadne informácie, ktoré by mali charakter osobných údajov, a ktoré by sa dali využiť v rámci

                                marketingovej činnosti alebo pre využitie behaviorálnej reklamy. Webová stránka nespracúva

                                a nearchivuje IP adresu návštevníka, prípadne ju nespracúva tak, aby bola umožnená

                                identifikácia návštevníka webovej stránky.

                            </li>

                            <li>

                                Tieto informácie o využívaní súborov cookies je prevádzkovateľ webovej stránky oprávnený

                                kedykoľvek meniť, a to v súvislosti so zmenami prijatými pri používaní cookies.

                            </li>

                        </ol>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Zatvoriť</button>

                </div>

            </div>



        </div>

    </div>

@endif

