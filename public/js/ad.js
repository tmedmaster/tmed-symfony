$('#add-image').click(function(){
    // Je récupère le numéro des futures champs que je vais créer
    const index = +$('#widgets-counter').val();
    console.log(index);
    // Je recupere le prototype des entrees 
    const tmpl = $('#ad_images').data('prototype').replace(/__name__/g, index);

    // console.log(tmpl);
    // J'inject ce code au sein de la div
    $('#ad_images').append(tmpl);

    $('#widgets-counter').val(index + 1);

    // Je gére le button supprimer
    handleDeleteButtons();
});

function handleDeleteButtons() {
    $('button[data-action="delete"').click(function(){
        const target = this.dataset.target;
        //console.log(target);
        $(target).remove();
    });
}

function updateCounter() {
    const count = +$('#ad_images div.form-group').length;
    $('#widgets-counter').val(count);
}

updateCounter();
handleDeleteButtons();