<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Riccardo Basso">
    <meta name="description" content="">
    <link rel="icon" href="img/Icon.png">
    <title>RememberTo</title>
    <!-- link google font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" />
    <!-- link font-awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
    <!-- link fogli di stile -->
    <link rel="stylesheet" href="css/libreriaRB.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- collegamento a Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- collegamento pagina JavaScript -->
    <script defer src="js/script.js"></script>
</head>

<body>
    <div id="root">
        <!-- Header -->
        <?php include 'includes/header.html' ?>


        <!-- main -->
        <main>
            <div class="card-l">
                <div class="card-header space-between-X center-Y">
                    <h2>Cose da fare</h2>
                    <!-- Tasto per far comparire l' input -->
                    <div class="center-Y gap-1">
                        <span>Aggiungi</span>
                        <button v-on:click="showImput"><img src="img/add.png" alt="add-icon"></button>
                    </div>
                </div>

                <div class="card-body">
                    <ul>
                        <!-- Input per inserire un nuovo elemento alla lista -->
                        <li v-if="showInputElement === true" class="gap-1">
                            <input v-model.trim="newItem" @keyup.enter="addAction" type="text" placeholder="Aggiungi">
                            <button v-on:click="addAction" class="newListitem">Invia</button>
                        </li>
                        <!-- lista delle cose da fare -->
                        <li v-for="(action, i) in actions" :class="{ done : action.done}">
                            {{ action.text }}
                            <div>
                                <button v-on:click="actionComplete(i)" class="completed mr-1">Completato</button>
                                <button v-on:click="removeAction(i)" class="removed">Rimuovi</button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </main>

    </div>
</body>

</html>