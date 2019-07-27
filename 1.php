<?php
$biodata = (
        array (
            "name" => "Reza Rizaldi",
            "age" => 22,
            "address" => "Desa Kepadangan RT.14/RW.05, Kec. Tulangan, Kab. Sidoarjo",
            "hobbies" => array ("Memancing", "Berkebun", "Bermain Game"),
            "is_married" => false,
            "list_school" => array(
                array("name" => "SDN Kenongo 1", "year_in" => 2002, "year_out" => 2008, "major" => null),
                array("name" => "SMPN 1 Tulangan", "year_in" => 2008, "year_out" => 2011, "major" => null),
                array("name" => "SMAN 4 Sidoarjo", "year_in" => 2011, "year_out" => 2014, "major" => "Bahasa"),
            ),
            "skills" => array(
                array("skill_name" => "PHP", "skill_level" => "beginner"),
                array("skill_name" => "JavaScript", "skill_level" => "beginner"),
            ),
            "interest_in_coding" => true,
        )
    );
$returnJSON = json_encode($biodata);

echo $returnJSON;
?>