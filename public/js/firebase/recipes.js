firebase.database().ref('/recipes').on('value', function(recipes) {
    $('.recipes-card').remove();
    recipes.forEach(function(recipe) {
        drawCard('recipes-container', recipe);
    });
})