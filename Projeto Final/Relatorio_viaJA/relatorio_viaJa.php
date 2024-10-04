<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>viaJA</title>
</head>
<body>
    <h1>Relatório de cidades mais visitadas através do viaJA</h1>
    <?php
    // Defina as variáveis ​​de configuração do relatório do Power BI
    $embedUrl = "https://app.powerbi.com/view?r=eyJrIjoiOTQ0MDlmNGEtYWVhZC00ZDMwLWJkYzEtMGUzNmRjMjlkMDg1IiwidCI6ImNmNzJlMmJkLTdhMmItNDc4My1iZGViLTM5ZDU3YjA3Zjc2ZiIsImMiOjR9";    
    // Gere o código HTML para o iframe que incorpora o relatório do Power BI
    $iframeHtml = '<iframe width="800" height="600" src="' . $embedUrl . '" frameborder="0" allowFullScreen="true"></iframe>';

    // Exiba o iframe
    echo $iframeHtml;
    ?>
</body>
</html>
