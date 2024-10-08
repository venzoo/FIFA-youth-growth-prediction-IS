<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fifa Youth Growth Prediction</title>

        <script src="https://cdn.tailwindcss.com"></script>

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    </head>
    <body>

        <div id="app">
            <?php
            include 'components/navbar.php';
            ?>

            <div class="w-full flex justify-between items-center bg-gray-200 p-4">
                <!-- Contenuto a sinistra -->
                <div class="flex-1 text-left">
                    <p class="text-gray-700">
                        <?php
                        include 'components/search.php'
                        ?>
                    </p>
                </div>

                <!-- Contenuto al centro -->
                <div class="flex-1 text-center">
                    <p class="text-gray-700"></p>
                </div>

                <!-- Contenuto a destra -->
                <div class="flex-1 text-right">
                    <p class="text-gray-700">
                        <?php
                        include 'components/dropdown.php'
                        ?>

                    </p>
                </div>

            </div>

            <div class="w-full flex justify-between items-center bg-pink-200 p-4 h-72 ">
                <!-- Contenuto a sinistra -->
                <div class="flex-1 text-left">
                    <p class="text-gray-700"></p>
                </div>

                <!-- Contenuto al centro -->
                <div class="flex-1 text-center">
                    <p class="text-gray-700"></p>
                </div>

                <!-- Contenuto a destra -->
                <div class="flex-1 text-right">
                    <p class="text-gray-700"></p>
                </div>

            </div>
        </div>

        <script src="static/js/vue.js"></script>
        <script src="static/js/app.js"></script>
    </body>
</html>
