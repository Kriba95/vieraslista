# vieraslista


Guestbook,

PDO Rekisteröityminen sekä Vieraskirja.

Sisältää admin käyttöliittymän. 
Kun yrittää kirjautua ja jos username on "admin" se vie suoraan admin käyttöliittymään. 
Muuten kun tavis käyttäjä yrittää kirjautua se heittää sen normaali käyttöliittymään.


Admin käyttöliittymää ei voi erehtyä koska Teema muuttuu punaiseksi. Adminillä ja vaan adminillä on oikeus poistaa nimiä. guestDel.php on huomioitu jos tavis käyttäjä yrittää kirjautua se heitää kirjaudu_error.php sivulle. 


Guestbookkiin pystyy vain rekisteröidyt käyttäjät lisäämään nimen. MySql tietokantaan tallentuuu id, nyt-aika, Username ja viesti.

Eli halutessaan voi myös lisätä keneltä kommentti on, mutta se pysyy piilossa tietokannassa, toistaiseksi.


server.php joka hallitsee rekisteröitymistä sekä sisäänkirjaantumista. 

On huomioitu myös että salasana tallennetaan md5 muodossa, joka parantaa turvallisuutta. Näin ainakaan "admin" ei pääse näkemään salasanaa ja jos hyökkäys onnistuu PDOn läpi se on silti salainen. 

Muuten hyvin simppeli, Guestbookin data liikkuu JSON muodossa. Rekisteröityminen taas php action tyylillä. 

Sekä Server-connect.php ja guestbook-connect.php ovat erillään, eli molemmilla on oma MySql tietokanta.

Sisältää myös .CSS tiedostoa kymmenen kiloa liika.


