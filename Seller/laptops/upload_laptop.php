<?php

    if($_FILES['image']['name'] != '') {

        $test = explode(".", $_FILES['image']['name']);
        $extension = end($test);

        $name = rand(100, 999) . '.' . $extension;

        $location = '../images/uploads/laptops/'. $name;

        move_uploaded_file($_FILES['image']['tmp_name'], $location);

        echo '<input type="hidden" name="image_name" value="'.$name.'"></div>';

    }    

?>