<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Per Elisa</title>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="description" content="❤️">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="./index.css?v=5">
    <script src="./index.js" defer></script>
</head>

<body>

    <?php
    $filename = "counter.txt"; // This is at root of the file using this script.
    $fd = fopen ($filename, "r"); // opening the file counter.txt in read mode
    $contents = fread ($fd, filesize($filename)); // reading the content of the file
    fclose ($fd); // Closing the file pointer
    $contents=$contents+1; // incrementing the counter value by one
    echo $contents; // printing the incremented counter value
    /*
    The above code will do the reading and displaying the counter to the screen, now we have to store the above value in the same counter.txt file by overwriting the old data with the new counter data. We will open the counter.txt file in write mode and then write to it.
    */

    $fp = fopen ($filename, "w"); // Open the file in write mode
    fwrite ($fp,$contents); // Write the new data to the file
    fclose ($fp); // Closing the file pointer
    ?>

    <main>
        <span>La strada dello switch contiene attenzione, desiderio e bacini ❤️</span>
        <label for="switch-2" class="gui-switch" style="--track-active: hotpink">
            <input type="checkbox" role="switch" id="switch-2">
            <span class="elisa"></span>
            <span class="frase">Velle est posse.</span>
            <span class="frase2">Ci sono.</span>
        </label>
    </main>



</body>

</html>





