<?php
include("dodatabase.php");
$q="INSERT INTO dooctor (Disease_name,Drug1,Drug2,Drug3,age) VALUES ('DiaBetes','Amaryl 6mg','Aldactone 25mg or 100mg','Glucophage 850mg or 500mg','greater than 15'),('Hypertension','Capril 12.5mg or 25mg or 50mg','CardioDril 5mg or 10mg','Concor 2.5mg or 5mg','greater than 20'),
                         ('Angina','Angilat 20mg or 10mg','Amlor 10mg or 5mg','Cardioprol 5mg','greater than 15'),('Cholosterol','Lipitor 40mg or 80mg or 10mg or 20','Astatin 10mg or 20mg or 40mg','Atorva 10mg or 20mg or 40mg or 80mg','greater than 15'),('common cold','Congestal 60mg or 650mg','Comtrex 30mg','panadol','greater than15'),
                         ('Glucoma','Timogel 5ml','Travonorm 5ml','Alphonova 5ml','greater than 15'),('Peptic Ulcer','OmperoZole 40mg or 120mg','Nexium 20mg or 40mg','Rani 150mg','greater than 15'),
                         ('Varicose Vein','Coumadin 2mg or 2.5mg or 10mg or 7.5mg or 5mg','Jantoven','Venorex 160mg or 40mg or 80mg','greater than 15'),('Renal Failure','Intropin 160mg or 40mg or 80mg','DoPamineHCL 153.18g/mol','not exist','greater than 15'),
                         ('Heart Failure','Cardiopril 25mg','CapocoRD 25mg or 50mg','Acetab 25mg','greater than 15'),('Hepatitis','Cardex 10mg or 20mg','lodoz 2.5mg or 6.25mg','Cardioprol','greater than 15'),
                         ('Arthritis','Ibuprofen 1200mg','Naproxen 200mg or 220mg or 500mg 375mg','Sulindac 150mg or 200mg','greater than 15'),('Headache','Exdrine','Asprin 300mg or 900mg','Apimol 650mg or 325mg','greater than 15');";






$db->myExec($q);
?>
