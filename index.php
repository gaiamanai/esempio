<?php
//variabili contenenti i dati di connessione al sito
$db_hostname='localhost';
$db_username='root';
$db_password='root';
$db_name='miosito';

//nuova connessione
$connection = new mysql ($db_hostname, $db_username, $db_password $db_name)
//mex in caso di connessione non ruscita 
if ($connection->connect_error)
 {
    die('Connessione al database non riuscita. Spiaze.' $connection->connect_error)
 }
//QUERY
 $query= 'SELECT id,title,date,content FROM posts';
 $query_result=$connection->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sito</title>
</head>
<body>
    <?php
        if ($query_result->num_rows > 0) {
            while ($row= $query_result->fetch_assoc()) {
    ?>
    <div id="<?php echo $row['id']; ?>">
        <h3><?php echo $row['title']; ?></h3>
        <time datetime="<?php echo $row['date']; ?>"></time>
        <p><?php echo $row['content']; ?></p>
    </div>
    <?php
   }
}    
?>
    <div class="pagecontainer">
        <h1>Titolo della pagina</h1>
        <time datetime="27/11/2023">27/11/2023</time>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris libero dui, hendrerit volutpat bibendum
            fermentum, pulvinar in lectus. Vivamus ultricies elementum elit, vitae auctor felis porta eget. Phasellus
            consequat tortor in nibh consequat feugiat. Aenean malesuada leo vel ante rutrum euismod. Suspendisse
            tincidunt
            aliquam blandit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            Nam
            iaculis ligula mollis, volutpat nunc vitae, vestibulum nulla. Nulla iaculis tincidunt magna et semper.
            Phasellus
            bibendum et neque in auctor. Pellentesque vehicula blandit gravida. Nulla est urna, iaculis sed convallis a,
            convallis vitae ex. Vivamus nec magna venenatis dolor volutpat faucibus. Nulla accumsan bibendum iaculis.
            Quisque mattis dictum erat eget dignissim.
            Sed feugiat nisi mauris, vitae pellentesque nibh sodales a. Maecenas id varius arcu. Vestibulum urna quam,
            imperdiet eget neque ut, posuere vestibulum sapien. Nunc non pharetra metus, nec bibendum elit. In vitae
            arcu facilisis mi feugiat sodales nec sed metus. Vestibulum quis facilisis sem, vitae molestie odio. Orci
            varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus consectetur urna
            eget sapien pellentesque euismod. Quisque maximus sagittis eros, sit amet facilisis quam vestibulum iaculis.
            Ut ultrices scelerisque nulla ullamcorper ultricies. Etiam dapibus erat lacus. Maecenas eu luctus urna, et
            mattis mauris. Donec aliquet viverra ornare. Suspendisse vitae ante ex. Maecenas venenatis justo orci, non
            condimentum lorem bibendum vel.


        </p>
        ?>
    </div>
</body>

</html>