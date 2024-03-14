<?php
// Exercici 1: PHP Avançat: enums.
echo "--- Exercici 1 --- \n";

enum Theme {
    case PHP;
    case CSS;
    case HTML;
    case SQL;
    case Laravel;
}
// Quan afegim el tipus de dada es diu que estem fent backed enums, no poden ser null.
enum Type: string {
    case File = 'Fitxer';
    case WebArticle = 'Article web';
    case Video = 'Vídeo';
}

class RecursDidactic {
    public $name;
    // El ? indica que la propietat pot ser null.
    public ?Theme $theme; // enum (que només podrà ser PHP, CSS, HTML, SQL, Laravel)
    public $url;
    public Type $type; // enum (que només podrà ser Fitxer, Article web, Vídeo de tipus string).

    public function __construct($name, $theme, $url, $type)
    {
        $this->name = $name;
        $this->theme = $theme;
        $this->url = $url;
        $this->type = $type;
    }

    public function getRecursDidactic()
    {
        // Com el enum és un object no es pot imprimir directament, però es pot accedir a les seves propietats i guardar-les en una variable local.
        $printTheme = $this->theme?->name; // Utilitzem el nullsafe operator(?) per comprovar si la propietat és null.
        $printType = $this->type->value; // Utilitzem la propietat value per accedir al valor de l'enum, no pot ser null perquè és de tipus string.
        return "El nom del recurs és: $this->name. \nEl tema és $printTheme, és de tipus $printType, i el pots trobar a aquesta URL: $this->url \n";
    }
}

$recursDidactic = new RecursDidactic('New PHP 8.0 release', Theme::PHP, 'https://www.php.net/releases/8.0/en.php', Type::WebArticle);
echo $recursDidactic->getRecursDidactic();