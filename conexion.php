<?php
//$link = mysqli_connect("localhost", "aa_000taq", "N-4-nRu?KAdX", "aa_000taq");
$link = mysqli_connect("localhost", "root", "", "bd_testimonials");


if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

$Testimonials = array(
    array(
        "Review"       => "Shirley F. in Duluth, GA",
        "Project"      => "Repair or Partially Replace Wood or Fiber-Cement Siding",
        "Comment"      => "On time, professional, affordable and very easy to work with.",
        "date"         => "03-17-2019",
        "stars"        => 5,
        //Tipos: homeadvisor,facebook/google
        "company"      => 'homeadvisor',
    ), 
);
?>