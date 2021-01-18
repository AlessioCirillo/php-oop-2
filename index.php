<?php
include_once __DIR__ . '/classes/notebook.php';
include_once __DIR__ . '/classes/smartphone.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>My E-Commerce</h1>

    <section>
        <h2>Notebook</h2>

        <?php
        $notebook_one = new Notebook('Acer', 'Aspire 3 ', '779€', 'disponibile', 'i710510U0', '16gb', '512GB', 'NVIDIA MX230', '15,6"');
        ?>

        <div class="product">
            <h3>
                <?php echo $notebook_one->name; ?>
            </h3>

            <p>
                Modello: <?php echo $notebook_one->model; ?>
            </p>

            <p>
                Prezzo: <?php echo $notebook_one->price; ?>
            </p>

            <p>
                Disponibilità: <?php echo $notebook_one->availability; ?>
            </p>

            <p>
                Processore: <?php echo $notebook_one->processore; ?>
            </p>

            <p>
                Ram: <?php echo $notebook_one->ram; ?>
            </p>

            <p>
                Archiviazione: <?php echo $notebook_one->storage; ?>
            </p>

            <p>
                Scheda Video: <?php echo $notebook_one->scheda_video; ?>
            </p>

            <p>
                Display: <?php echo $notebook_one->schermo; ?>
            </p>
        </div>
    </section>

    <section>
        <h2>Smartphone</h2>

        <?php $smartphone_one = new Smartphone('Samsung', 'Galaxy A20e', '169.99€', 'Disponibile', 'Android 9.0', '64GB', '3GB', '13MP', '5.8"') ?>

        <div class="product">
            <h3>
                <?php echo $smartphone_one->name; ?>
            </h3>

            <p>
                Modello: <?php echo $smartphone_one->model; ?>
            </p>

            <p>
                Prezzo: <?php echo $smartphone_one->price; ?>
            </p>

            <p>
                Disponibilità: <?php echo $smartphone_one->availability; ?>
            </p>

            <p>
                Sitema Operativo: <?php echo $smartphone_one->sistema_operativo; ?>
            </p>

            <p>
                Archiviazione: <?php echo $smartphone_one->storage; ?>
            </p>

            <p>
                Ram: <?php echo $smartphone_one->ram; ?>
            </p>

            <p>
                Fotocamera: <?php echo $smartphone_one->camera; ?>
            </p>

            <p>
                Display: <?php echo $smartphone_one->schermo; ?>
            </p>
        </div>
    </section>
</body>

</html>