function AskChan(){
    let chanName = prompt("Quel salon rejoindre ?","");
    $.ajax({
        url: 'http://localhost/DisChat/WishCord/verifChan.php', //script à appeler
        type: 'POST',
        data : 'chanName='+chanName,
        success: function (data, statut) {
        },
        error: function (resultat, data, statut) {
        },
        complete: function (resultat, statut) {
        }
    })
}