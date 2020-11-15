# Virtuális Tanösvény (Drupal 9 teszt)

Telepítés:

`git clone git@github.com:codeonehu/vtanosveny.git`

`cp docker-compose.override.yml.dev docker-compose.override.yml`

A docker-compose.override.yml-ben a megfelelő `port` és `host` módosítása.

`docker-compose up`

-d paraméter nélkül, mivel a MySQL konténer miatt a daemon módban indítás nem lesz valamiért sikeres. (//TODO)
Meg kell várni a Drupal rendszer telepítésének végét.
Ha ezt az üzenetet látjuk `[success] The configuration was imported successfully.` kiléphetünk a konténerből.

`docker-compose up -d`

A site a `docker-compose.override.yml` -ben beállított `hoston` és `porton` érhető el.

## Miről szól a feladat?

A Virtuális Tanösvény egy valós, fejlesztés alatt álló projekt, aminek jelenlegi fázisában a régi legacy PHP5-ös rendszer
átültetése zajlik Drupal 9 alapokra.

Ez a teszt oldal tartalmaz egy VTanosveny nevű modult, ami egyelőre egy filter pluginból áll. A filter feladata a szövegekben előforduló
turistejelzésekről szóló placeholderek ikonokká alakítása.

<img src="https://i.ibb.co/41z8pDp/Ke-pernyo-foto-2020-11-15-10-11-45.png">


