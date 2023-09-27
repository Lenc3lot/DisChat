function recupDataUsername() {
    let usrn = document.getElementById("Username").value;
    return usrn;
}

function recupDataMsg() {
    let msg = document.getElementById("Message").value;
    return msg;
}

function PutMsg() {
    let zone = document.getElementById("Chat");
    let message = recupDataMsg();
    let username = recupDataUsername();
    zone.value += ">>> " + username + " -- " + message + "\n";
}

function EnvoyerMsg() {

    let UsernameData = recupDataUsername();
    let MsgData = recupDataMsg();

    $.ajax({

        url: 'http://localhost/WishCord/StockMsg.php', //script à appeler
        type: 'POST',
        data: 'Username=' + UsernameData + "&Message=" + MsgData,
        success: function (data, statut) {
        },
        error: function (resultat, data, statut) {
        },
        complete: function (resultat, statut) {
        }
    })
}

function MajMsg(){
    //console.log("bonjour")
    let zone = document.getElementById("ZnChat");
    $.ajax({
        url: 'http://localhost/WishCord/RecupMsg.php',
        type: 'POST',

        success: function(data,statut){
            //console.log(data);
            let obj = JSON.parse(data);
            console.log(obj);
            zone.value = "";
            obj.forEach(element => {
                console.log(element["Heure"]);
                console.log(element["Pseudo"]);
                console.log(element["Message"]);
                zone.value += element["Heure"] + " " + element["Pseudo"] + " : " + element["Message"]+"\n";
            });
        },

        error: function (resultat, data, statut) {
        },

        complete: function (resultat, statut) {
        }
    })
}

setInterval(MajMsg,1000);