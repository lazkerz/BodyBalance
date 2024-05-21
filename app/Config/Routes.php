<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

//BMI
$routes->get('/', 'BMIController::index');
$routes->post('/calculate', 'BMIController::calculate');
$routes->get('/history', 'BMIController::history');
$routes->get('/recommendation', 'BMIController::recommendation');
$routes->add('/nutrition-recommendation', 'BMIController::nutritionRecommendation');

//BMR
$routes->get('/calorie', 'BMRController::calorieCalculator');
$routes->post('/calculate-calories', 'BMrController::calculateCalories');
$routes->get('/calorie-history', 'BMRController::history');
