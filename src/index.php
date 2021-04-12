<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="theme-color" content="#7289da">
    <title>Sixes</title>

    <script>
        var rounds;
        var playersRaw;
        var players;

        function startGame() {
            document.getElementById("tabledemo").style.display = "none";
            document.getElementById("table").style.display = "initial";

            rounds = document.getElementById("rounds").value;
            playersRaw = document.getElementById("players").value;
            players = playersRaw.split(";");

            genPlayers();
        }

        function genPlayers() {
            var playertr = document.getElementById("playertr");
            playertr.innerHTML = "<th scope=\"col\">#</th>";
            for (player of players) {
                playertr.innerHTML = playertr.innerHTML + "<td>" + player + "</td>";
            }

            genTable();
        }

        function genTable() {
            let initMulti = 3;
            let initRoundCycle = 1;
            let tbody = document.getElementById("tbody");


            let i;
            for (i = 1; i <= rounds; i++) {
                console.log(tbody.innerHTML);
                tbody.innerHTML = tbody.innerHTML +
                    "<th scope=\"row\">" + initRoundCycle + "*" + initMulti + "</th>";


                let j;
                for (j = 1; j <= players.length; j++) {
                    tbody.innerHTML = tbody.innerHTML + "<td><input type='text' name='input" + i + j + initRoundCycle + initMulti + "' ></td>";
                }

                // tbody.innerHTML = tbody.innerHTML + "</tr>"

                if (initRoundCycle === 2) {
                    initRoundCycle = 1;
                    initMulti++;
                    continue;
                }
                initRoundCycle++;
            }



        }



    </script>

</head>
    <body>
        <nav class="navbar navbar-dark fixed-top bg-dark p-1" >
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Sixes</a>
            </div>
        </nav>

        <main class="container mt-5">
            <div id="controls" class="container-fluid">
                <div id="options">
                    <div class="row justify-content-center">
                        <div class="col m-2 position-relative col-auto align-self-center w-auto">
                            <label>Amount of rounds: <input id="rounds" type="text" name="rounds"></label>
                        </div>

                        <div class="col m-2 position-relative col-auto align-self-center w-auto">
                            <button type="button" class="btn btn-primary position-relative col m-2" onclick="startGame()">
                                Start Game
                            </button>
                        </div>

                        <div class="col m-2 position-relative col-auto align-self-center w-auto">
                            <label>Players Names: <input id="players" type="text" name="players" placeholder="Use ; to separate"></label>
                        </div>
                    </div>
                </div>
            </div>

            <div id="table" class="p-5" style="display: none">
                <table class="table">
                    <thead>
                    <tr id="playertr">
                        <!-- Java Script -->
                    </tr>
                    </thead>
                    <tbody id="tbody">

                    </tbody>
                </table>
            </div>

            <div id="tabledemo" class="p-5">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Player 1</th>
                        <th scope="col">Player 2</th>
                        <th scope="col">Player 3</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1*3</th>
                        <td>100</td>
                        <td>200</td>
                        <td>150</td>
                    </tr>
                    <tr>
                        <th scope="row">2*3</th>
                        <td>-100</td>
                        <td>150</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <th scope="row">1*4</th>
                        <td>250</td>
                        <td>250</td>
                        <td>300</td>
                    </tr>
                    <tr>
                        <th scope="row">Totals</th>
                        <th scope="row">250</th>
                        <th scope="row">600</th>
                        <th scope="row">750</th>
                    </tr>
                    </tbody>
                </table>
            </div>
        </main>

    <footer class="container-fluid fixed-bottom bg-dark p-1" >
        <div class="container-fluid">
            <div id="loading-options" class="row">
                <button type="button" class="btn btn-primary position-relative col m-2">
                    New Game
                </button>

<!--                <button type="button" class="btn btn-success position-relative col m-2">-->
<!--                    Save Game-->
<!--                </button>-->

                <button type="button" class="btn btn-danger position-relative col m-2">
                    Reset Game
                </button>
            </div>
        </div>
    </footer>
    </body>
</html>
