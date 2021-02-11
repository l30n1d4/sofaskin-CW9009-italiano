progetto tradotto da https://github.com/weatherstorm/Sofaskin-CW9009

# Sofaskin-CW9009-Italiano
CW9009 Meridian è il codice modificato di Sofaskin, la web page per Weewx originariamente sviluppato da Sven su https://neoground.com/projects/weewx. Vi prego di vedere il readme per i requisiti di installazione per usare questo skin.

Sofaskin V1.1 è sviluppata da Sven su Neoground: https://neoground.com/projects/weewx. Questo è un grande template ma Josh ha fatto alcune modifiche per adattarlo alle sue esigenze. Ha anche aggiunto del codice da un altro template da dajda.net per fare lo storico e le tabelle NOAA. C’è anche del codice aggiunto di Björn Torkelsson. Una lista di cambiamenti è mostrata di seguito con le istruzioni per installare le tabelle storiche.
-   Aggiunte altre variabili sul file skin.conf per aiutare a personalizzare le pagine.
-    Rimossi i sommari mensili e annuali e aggiunte delle pagine separate.
-    Usate sempre le variabili weewx per creare le tabelle.
-    Aggiunta una pagina della stazione per lo storico e le informazioni con i link ai network meteo dove i dati sono inviati.
-    Aggiunto un bottone Menu per gli schermi piccoli.
-    Refresh della pagina ogni dieci minuti.
-    Aggiunto il codice da dajda.net per produrre le tabelle storiche. Lo script historygenerator.py deve essere aggiunto a WeeWx per far aggiornare le tabelle.
-    Creata una pagina PHP template per mostrare i testi NOAA.
 

<b>Responsive Menu:</b><br>
Aggiunto un migliore sistema di responsive menu che usa meno spazio verticale sugli schermi piccoli.

![screenshot_20161127-062548](https://cloud.githubusercontent.com/assets/22601363/20864991/f2f14eb8-b9c2-11e6-8bba-b4043f425bbb.png)
![screenshot_20161201-124209](https://cloud.githubusercontent.com/assets/22601363/20864992/f4b96654-b9c2-11e6-8346-650fee6db484.png)
<br><br>
<b>Tabella storico:</b><br>
Lo script historygenerator.py era una parte del template sviluppato da https://www.dajda.net/index.html. Più informazioni sul template sono disponibili a https://www.dajda.net/about.html e il template originale è disponibile su GitHub a https://github.com/brewster76/fuzzy-archer. È stato modificato il codice in historygenerator.py per creare gli esatti link html links nel sommario meteo NOAA e scrivere la pagina php per mostrare il sommario.


![template](https://cloud.githubusercontent.com/assets/22601363/20864962/3f40b91c-b9c2-11e6-8298-75bec529dc40.jpg)
<br><br>
<b>Istruzioni di installazione:</b><br>
Installare il template è come per la maggior parte degli altri skins. Devi mettere i file dello skin in una propria cartella in /etc/weewx/skins directory. Devi anche cambiare la variabile skin nel file weewx.conf sotto Standard Reports.

Example:
<pre>
    [[StandardReport]]
        skin = Sofaskin 
</pre>
Alla fine, devi mettere lo script historygenerator.py python in /usr/share/weewx/user directory. Lo skin.conf ha già il codice per usare queste tabelle così non devi modificare nulla a meno che tu non voglia cambiare i colori. Dovresti aggiornare le varibiali nel file skin.conf per collegarle alle informazioni della stazione. Più informazioni sullo script historygenerator.py e come usare le tabelle sono disponibili nel link di seguito. https://github.com/brewster76/fuzzy-archer/blob/master/INSTALL
