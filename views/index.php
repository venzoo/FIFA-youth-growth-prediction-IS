<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Fifa Youth Growth Prediction</title>

        <script src="https://cdn.tailwindcss.com"></script>

        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <link rel="stylesheet" href="static/css/div-center.css">
    </head>
    <body>

        <div id="app">
            <?php
            include 'components/navbar.php';
            ?>

            <div class="w-full flex justify-between items-center bg-lime-900 p-4">
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

            <div class="w-full flex justify-between items-center bg-lime-800 p-4 h-72 ">
                <!-- Contenuto a sinistra -->
                <div class="flex-1 text-left">
                    <p class="text-gray-700">
                        <img src="static/img/cristiano-ronaldo.png" width="287px">
                    </p>
                </div>

                <!-- Contenuto al centro -->
                <div class="player-card bg-lime-900 text-white p-4 rounded-lg shadow-lg w-2/3 h-auto mx-auto">
                    <div>
                        <h1 class="text-2xl font-bold">Cristiano Ronaldo dos Santos Aveiro</h1>
                        <div class="flex items-center space-x-2">
                            <!-- Bandiera -->
                            <img src="https://upload.wikimedia.org/wikipedia/commons/5/5c/Flag_of_Portugal.svg" alt="Portugal Flag" class="w-6 h-6">
                            <!-- Posizioni -->
                            <span class="bg-green-700 text-xs font-semibold px-2 py-1 rounded">LW</span>
                            <span class="bg-blue-700 text-xs font-semibold px-2 py-1 rounded">ST</span>
                        </div>
                        <p class="text-sm mt-2">32y.o. (Feb 5, 1985) 185cm / 6'1" 80kg / 176lbs</p>
                    </div>

                    <!-- Statistiche giocatore -->
                    <div class="flex justify-between mt-4">
                        <div class="stat">
                            <div class="text-green-500 text-lg font-bold">94</div>
                            <div class="text-gray-400 text-xs">Overall rating</div>
                        </div>
                        <div class="stat">
                            <div class="text-green-500 text-lg font-bold">94</div>
                            <div class="text-gray-400 text-xs">Potential</div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="border-t border-gray-300 mx-6"></div>

            <div>
                <div class="flex player-attributes bg-lime-900 text-white p-6 rounded-lg shadow-lg w-auto mt-0">
                    <div class="flex-1 grid grid-cols-3 gap-6">
                        <!-- Attacking -->
                        <div>
                            <h3 class="text-lg font-bold mb-2">Attacking</h3>
                            <ul>
                                <li class="flex justify-between mb-2">
                                    <span>Crossing</span> <span class="bg-green-700 px-2 py-1 rounded">85</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Finishing</span> <span class="bg-green-700 px-2 py-1 rounded">94</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Heading accuracy</span> <span class="bg-green-700 px-2 py-1 rounded">88</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Short passing</span> <span class="bg-green-700 px-2 py-1 rounded">83</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Volleys</span> <span class="bg-green-700 px-2 py-1 rounded">88</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Skill -->
                        <div>
                            <h3 class="text-lg font-bold mb-2">Skill</h3>
                            <ul>
                                <li class="flex justify-between mb-2">
                                    <span>Dribbling</span> <span class="bg-green-700 px-2 py-1 rounded">91</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Curve</span> <span class="bg-green-700 px-2 py-1 rounded">81</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>FK Accuracy</span> <span class="bg-green-500 px-2 py-1 rounded">76</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Long passing</span> <span class="bg-green-500 px-2 py-1 rounded">77</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Ball control</span> <span class="bg-green-700 px-2 py-1 rounded">93</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Movement -->
                        <div>
                            <h3 class="text-lg font-bold mb-2">Movement</h3>
                            <ul>
                                <li class="flex justify-between mb-2">
                                    <span>Acceleration</span> <span class="bg-green-700 px-2 py-1 rounded">89</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Sprint speed</span> <span class="bg-green-700 px-2 py-1 rounded">91</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Agility</span> <span class="bg-green-700 px-2 py-1 rounded">89</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Reactions</span> <span class="bg-green-700 px-2 py-1 rounded">96</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Balance</span> <span class="bg-yellow-500 px-2 py-1 rounded">63</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Power -->
                        <div>
                            <h3 class="text-lg font-bold mb-2">Power</h3>
                            <ul>
                                <li class="flex justify-between mb-2">
                                    <span>Shot power</span> <span class="bg-green-700 px-2 py-1 rounded">94</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Jumping</span> <span class="bg-green-700 px-2 py-1 rounded">95</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Stamina</span> <span class="bg-green-700 px-2 py-1 rounded">92</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Strength</span> <span class="bg-green-500 px-2 py-1 rounded">80</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Long shots</span> <span class="bg-green-700 px-2 py-1 rounded">92</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Mentality -->
                        <div>
                            <h3 class="text-lg font-bold mb-2">Mentality</h3>
                            <ul>
                                <li class="flex justify-between mb-2">
                                    <span>Aggression</span> <span class="bg-yellow-500 px-2 py-1 rounded">63</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Interceptions</span> <span class="bg-red-500 px-2 py-1 rounded">29</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Att. Position</span> <span class="bg-green-700 px-2 py-1 rounded">95</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Vision</span> <span class="bg-green-700 px-2 py-1 rounded">85</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Penalties</span> <span class="bg-green-700 px-2 py-1 rounded">85</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Composure</span> <span class="bg-green-700 px-2 py-1 rounded">95</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Defending -->
                        <div>
                            <h3 class="text-lg font-bold mb-2">Defending</h3>
                            <ul>
                                <li class="flex justify-between mb-2">
                                    <span>Marking</span> <span class="bg-red-500 px-2 py-1 rounded">22</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Standing tackle</span> <span class="bg-red-500 px-2 py-1 rounded">31</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>Sliding tackle</span> <span class="bg-red-500 px-2 py-1 rounded">23</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Goalkeeping -->
                        <div>
                            <h3 class="text-lg font-bold mb-2">Goalkeeping</h3>
                            <ul>
                                <li class="flex justify-between mb-2">
                                    <span>GK Diving</span> <span class="bg-red-500 px-2 py-1 rounded">7</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>GK Handling</span> <span class="bg-red-500 px-2 py-1 rounded">11</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>GK Kicking</span> <span class="bg-red-500 px-2 py-1 rounded">15</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>GK Positioning</span> <span class="bg-red-500 px-2 py-1 rounded">14</span>
                                </li>
                                <li class="flex justify-between mb-2">
                                    <span>GK Reflexes</span> <span class="bg-red-500 px-2 py-1 rounded">11</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Traits -->
                        <div>
                            <h3 class="text-lg font-bold mb-2">Traits</h3>
                            <ul>
                                <li class="flex justify-between mb-2">Power free-kick</li>
                                <li class="flex justify-between mb-2">Flair</li>
                                <li class="flex justify-between mb-2">Long shot taker (AI)</li>
                                <li class="flex justify-between mb-2">Speed dribbler (AI)</li>
                                <li class="flex justify-between mb-2">Through ball</li>
                            </ul>
                        </div>
                    </div>

                    <div class="ml-6">
                        <img src="static/img/graphic-player.png" alt="Grafico" class="w-64 h-auto rounded-lg shadow-md" />
                    </div>
                </div>
            </div>


        </div>

        <script src="static/js/vue.js"></script>
        <script src="static/js/app.js"></script>
    </body>
</html>
