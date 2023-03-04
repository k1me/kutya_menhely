#To-do

##-[Git letöltés](https://git-scm.com/download/win)
  Ha ez megvan akkor elméletileg létrejön egy **Git bash** nevezetű proram
  Létrehozol egy directory-t ahol akarsz
  
##-Git bash-ban:
  Belelépsz az előzőzeleg létrehozott directory-ba:
    **cd [path_to_directory]**
  Belemásolod a repo tartalmát:
    **git clone https://github.com/k1me/kutya_menhely**
  Megnyitod a projektet amiben szeretnéd
  
##-Websorm-ban:
  Létrehozol egy github fiókot, ha még nincs és bejelentkezel
  ![image](https://user-images.githubusercontent.com/103959673/222919013-f3a294a6-d986-4888-8d58-32f546de2c03.png)
  Ennyi elméletileg
  
##-Alternativ megoldás:
  Elméletileg, amikor megnyitod a Webstormot, akkor nyílik egy ilyen ablak:         ![image](https://user-images.githubusercontent.com/103959673/222919691-c7ebfcbe-9cd1-4997-b453-d41ddecf9678.png)
  Ha nem ez jelenik meg, hanem ez:
  ![image](https://user-images.githubusercontent.com/103959673/222920067-03d7f384-4b26-4f27-9f93-b127562d3dd5.png)
  Abban az esetben a felső menüsorból választod ki a VCS-t és hozod létre a git repo-t
  Ezután megjelenik egy Git menüpont felül, ahol lesz egy "Clone" lista elem -->rányomsz a többi adja magát
  Amúgy meg jobb felül rányomsz a VCS-re és kiválasztod a Git lehetőságet
  Megadod a [linket](https://github.com/k1me/kutya_menhely) és a directoryt, amit korábban létrehoztál 
  Rányomsz a Clone gombra és megtörténik a varázslat
  
#-Fontos: 

##Változtatások véglegesítése:
  -Git commit, ami először kelleni fog: kiválasztod a változtatott file(ok)-t és írsz hozzá egy párszavas üzenetet (lehetőség szerint ne csak annyit, hogy "asd")
  -Git pull (valószínüleg csak a **master** branchet fogjuk használni) master. Ez annyit csinál, hogy a jelenleg file(ok)-t "letölti" és megnézi, hogy van-e conflict. Ha nincs:
  -Git push és kiválasztod azokat a "Commit"-okat amiket szeretnél véglegesíteni, majd --> push 
  -Érdemes minden sessiont úgy kezdeni, hogy csinálunk egy pull-t, hogy esetleg a másik által változtatott dolgok megjelenjenek
