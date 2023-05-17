<?php
header('Content-Type: application/json');

// Read JSON data from the file
$json_data = file_get_contents('fakedata.json');
$data = json_decode($json_data, true);

// Check for query parameters
$id = isset($_GET['id']) ? (int)$_GET['id'] : null;
$ingredientsHas = isset($_GET['ingredientshas']) ? $_GET['ingredientshas'] : null;

// Filter function by id
function filterById($recipe) {
    global $id;
    return $recipe['id'] === $id;
}

// Filter function by ingredient
function filterByIngredient($recipe) {
    global $ingredientsHas;
    foreach ($recipe['ingredients'] as $ingredient) {
        if (stripos($ingredient, $ingredientsHas) !== false) {
            return true;
        }
    }
    return false;
}

// Apply filters
if ($id) {
    $data['recipes'] = array_values(array_filter($data['recipes'], 'filterById'));
} elseif ($ingredientsHas) {
    $data['recipes'] = array_values(array_filter($data['recipes'], 'filterByIngredient'));
}

echo json_encode($data);
?>
