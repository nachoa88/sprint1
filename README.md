# Sprint 1 - Maquetació i PHP
He fet un merge de tots els temas del Sprint 1 a un nou repositori conservant els commits de cada tema.
Afegit també un fitxer `php.info` per poder treure l'informació de php.

## Tema 0 - Entorn de Desenvolupament
Tasca: Git i GitHub.

## Tema 1 - HTML & CSS
### Nivell 1
Maquetació a partir de wireframe amb una estructura de caixes.

### Nivell 2
Primera part de la maquetació final de la pàgina, només estructura sense molts detalls.

### Nivell 3
Millor experiència d'usuari, aplicant sobre els elements principals de la web animacions usant keyframes.

Importar "styles.css" per utilitzar layout de Nivell 2, i per utilitzar el layout amb grid del nivell 3 importar el "styles-grid.css".

Pendent: 
- Afegir Menú Burguer a la navbar.


## Tema 2 - PHP Bàsic
### Nivell 1
1) Variables de cada tipus: integer, double, string i boolean i print per pantalla. 
2) Transformació de string a upper case, longitud de variable, ordre invers, etc.
3) Operacions matemàtiques.
4) Comptador amb una sequència determinada.
5) Calcular el grau d'un estudiant.
6) Charlie, el mossegador (probabiltats).

### Nivell 2
1) Càlcul del preu per trucada amb condicions. 
2) Càlcul de totals i subtotals de productes.

### Nivell 3
1) Sedàs d'Estratòstenes, trobar nombres primers.


## Tema 3 - Arrays
### Nivell 1
1) Print Array element per element.
2) Manipulació d'arrays, eliminar elements, reordenar.
3) Torbar una lletra a dins d'una array the paraules.
4) Creació d'un array associatiu (clau, valor).

### Nivell 2
1) Buscar valors en comú: `array_intersect()` i Juntar dos arrays: `array_merge()`.
2) Array associatiu i dues funcions per treure l'informació, afegit `array_sum()`.

### Nivell 3
1) Operacions sobre arrays: `array_map()`.
2) Operacions utilitzant: `array_map()`.
3) Operacions amb nombres primers i `array_reduce()`.


## Tema 4 - POO 1
### Nivell 1
1) Creació de classe amb dues funcions, una constructora i otra de print.
2) Creació de classe y subclasse per treballar herència, Shape -> Trigangle / Rectangle.

### Nivell 2
1) Creació de classe Poker Dice, amb funcions per tirar el dau, calcular la cara que surt, etc. Utilitzant també una funció externa per crear instàncies d'aquest objecte.

### Nivell 3
1) Creació de classes cinema i movie, més un fitxer index per presentar els resultats de cada funció.


## Tema 5 - POO 2
### Nivell 1
1) Creació de classes abstractes i mètodes.

### Nivell 2
1) Transformar exercici Tema 4 - Nivell 1 de shapes, utilitzant una funció area() per calcular l'area.

### Nivell 3
1) Afegit circle class i millorat l'access a les propietats de cada shape (protected / private).


## Tema 6 - PHP Avançat
### Nivell 1
1) Formulari utilitzant inputs en HTML pel nom d'usuari i email, guardant la informació i utilitzant la variable superglobal `$_POST`.
2) Millora del formulari guardant l'informació en sessions, utilitzant `session_start()` i `$_SESSION`.

### Nivell 2
1) Constants magiques: `getFile()` - `__FILE__` , `getDir()` - `__DIR__`.
2) Magic methods: Override de mètodes màgics `__get()` i `__set()` per altres personalitzats.

### Nivell 3
1) Enums: creem una classe i afegim diferents característiques que requereixen l'utilització d'un enum.
2) Traits: creem un trait `Turbo` i una funció `boost()` per poder utilitzar aquesta funció en varies classes amb la paraula clau `use`.


## Tema 7 - Debug/Test
Utilització de Composer para instal·lar PHPUnit. També he creat `Dockerfile` per poder treballar amb `Docker` i instal·lar `XDebug`. Inclou al repositori un pdf amb algunes instruccions de com està tot montat, una còpia del file i del `composer.json`.

### Nivell 1
1) Creació carpeta src & tests, primera aproximació a `assertTrue` i `assertFalse`.
2) Pràctica TDD, Test Driven Development. Fem els tests sense tenir la funció que es vol testear, imaginant quines són les posibles falles.

### Nivell 2
1) Treballem amb DataProvider pels tests amb l'exercici 1 del Nivell 1. Refectoritzem els tests.
2) Igual que el primer, però amb l'exercici 2 del Nivell 2.

### Nivell 3
1) També treballem amb el DataProvider i amb `assertEquals` per comprovar el valor donat amb el resultat esperat. 
