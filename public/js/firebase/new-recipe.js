function saveRecipe(recipe_name, steps, resources) {
        
    // Create preparation and return key
    var preparation_key = firebase.database().ref('/preparation').push().key;
    
    // Create preparation steps
    steps.forEach(function(step) {
        firebase.database().ref('/preparation/' + preparation_key).child('steps').push({
            description: step
        });
    });

    // Create resource and return key
    var resource_key = firebase.database().ref('/resources').push().key;

    // Create all resources
    resources.forEach(function(resource) {
        firebase.database().ref('/resources/' + resource_key).child('resource').push({
            name: resource
        });
    });

    // Create recipe attributes with preparation key and 
    var recipe_attributes = {
        name: recipe_name,
        recyclecount: 0,
        preparation: preparation_key,
        resource: resource_key
    };

    // Create recipe
    var recipe_key = firebase.database().ref('/recipes').push(recipe_attributes).key;

}