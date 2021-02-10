<?php

echo 'HomepageController';

include 'repository/UserRepository.php';

$userRepository = new UserRepository();

$films = $userRepository->getFilms();

include 'templates/homepage.php';
