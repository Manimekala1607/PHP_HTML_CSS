<?php

$text = $_POST['text'];

$length = strlen($text);

$wordCount = str_word_count($text);

$vowels = 0;
$consonants = 0;
$digits = 0;
$spaces = 0;

for($i = 0; $i < strlen($text); $i++)
{
    $char = strtolower($text[$i]);

    if(ctype_digit($char))
    {
        $digits++;
    }
    elseif($char == " ")
    {
        $spaces++;
    }
    elseif(in_array($char, ['a','e','i','o','u']))
    {
        $vowels++;
    }
    elseif(ctype_alpha($char))
    {
        $consonants++;
    }
}

$reverse = strrev($text);

?>

<!DOCTYPE html>
<html>

<head>

    <title>String Analysis Result</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

<div class="container">

    <h2>String Analysis Result</h2>

    <p class="success">
        String Analyzed Successfully!
    </p>

    <table>

        <tr>
            <th>Original String</th>
            <td><?php echo htmlspecialchars($text); ?></td>
        </tr>

        <tr>
            <th>String Length</th>
            <td><?php echo $length; ?></td>
        </tr>

        <tr>
            <th>Number of Words</th>
            <td><?php echo $wordCount; ?></td>
        </tr>

        <tr>
            <th>Number of Vowels</th>
            <td><?php echo $vowels; ?></td>
        </tr>

        <tr>
            <th>Number of Consonants</th>
            <td><?php echo $consonants; ?></td>
        </tr>

        <tr>
            <th>Number of Digits</th>
            <td><?php echo $digits; ?></td>
        </tr>

        <tr>
            <th>Number of Spaces</th>
            <td><?php echo $spaces; ?></td>
        </tr>

        <tr>
            <th>Reverse String</th>
            <td><?php echo htmlspecialchars($reverse); ?></td>
        </tr>

    </table>

    <br>

    <a href="index.php">
        <button>Analyze Another String</button>
    </a>

</div>

</body>
</html>