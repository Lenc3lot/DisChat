function AskChan(){
    let chanName = prompt("Quel salon rejoindre ?","");
    console.log("hey");
    $.ajax({
        url: 'http://localhost/DisChat/WishCord/verifChan.php', //script à appeler
        type: 'POST',
        data : 'chanName='+chanName,
        success: function (data, statut) {
            console.log(data);
        },
        error: function (resultat, data, statut) {
        },
        complete: function (resultat, statut) {
        }
    })
}

function GetChanUser(){
    $.ajax({
        url :'http://localhost/DisChat/WishCord/scripts/recupSalons.php',
        type:'POST',
        success: function(data,statut){
            console.log(data);
        }
    })
}
