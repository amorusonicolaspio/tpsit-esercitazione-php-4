<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo Dati Auto</title>
    <link rel="stylesheet" href="esercitazione4CSS.css">
</head>
<body>

    <div class="contenitore">
        <div class="titolo">------------------ Riepilogo Auto Inserita ------------------</div>

        <?php
            $marca = $_POST["marca"];
            $modello = $_POST["modello"];

            if (isset($_POST["stato"])) {
                $stato = $_POST["stato"];
            } else {
                $stato = "Non specificato";
            }

            $anno = $_POST["anno"];
            $cilindrata = $_POST["cilindrata"];
            $cavalli = $_POST["cavalli"];
            $prezzo = $_POST["prezzo"];
            $targa = $_POST["targa"];
            $descrizione = $_POST["descrizione"];

            if (isset($_POST["accessori"])) {
                $accessori = implode(", ", $_POST["accessori"]);
            } else {
                $accessori = "Nessuno";
            }
            
            

            $file = fopen("F_AUTO.DAT", "a");

            $record = "";
            $record .= $marca;
            $record .= "; ";
            $record .= $modello;
            $record .= "; ";
            $record .= $stato;
            $record .= "; ";
            $record .= $anno;
            $record .= "; ";
            $record .= $cilindrata;
            $record .= "; ";
            $record .= $cavalli;
            $record .= "; ";
            $record .= $prezzo;
            $record .= "; ";
            $record .= $targa;
            $record .= "; ";
            $record .= $accessori;

            fwrite($file, $record);
            fclose($file);
            
            echo "<br>";
            echo "File 'F_AUTO.DAT' degli input dell'auto salvato nella stessa cartella!"
        ?>

        <table class="tabella-riepilogo">
            <tr>
                <td class="etichetta"><b>Marca</b></td>
                <td><?php echo $marca; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Modello</b></td>
                <td><?php echo $modello; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Stato</b></td>
                <td><?php echo $stato; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Anno Costruzione</b></td>
                <td><?php echo $anno; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Cilindrata</b></td>
                <td><?php echo $cilindrata; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Cavalli</b></td>
                <td><?php echo $cavalli; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Prezzo</b></td>
                <td><?php echo $prezzo; ?> Euro</td>
            </tr>
            <tr>
                <td class="etichetta"><b>Targa</b></td>
                <td><?php echo $targa; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Accessori</b></td>
                <td><?php echo $accessori; ?></td>
            </tr>
            <tr>
                <td class="etichetta"><b>Descrizione Aggiuntiva</b></td>
                <td><?php echo $descrizione; ?></td>
            </tr>
        </table>
    </div>

</body>
</html>