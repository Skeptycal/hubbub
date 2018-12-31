    <title>
        <?php
            if ($title_string = '') {
                $title_string = "Michael Treanor";
            }
            echo $title_string;

            // Markdown parser
            require 'vendor/autoload.php';
            use Michelf\Markdown;
            // Read file and pass content through the Markdown parser
            // $text = file_get_contents('Readme.md');
            // $html = Markdown::defaultTransform($text);
        ?>
    </title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <link rel="stylesheet prefetch" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet prefetch" href="https://fonts.googleapis.com/css?family=Muli:200,900">
    
	<link rel="stylesheet" href="/css/fireflies-1-0-1.css">
