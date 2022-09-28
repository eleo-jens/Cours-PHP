<?php
// Créez un array contenant de noms de sites web (ex: Startpage, Wikipedia), leur lien d'internet (ex: www.startpage.com) 
// et une description de chacun (ex: moteur de recherche).
//Une fois crée, rajoutez encore deux sites.

    $startpage = ["url" => "www.startpage.com", "description" => "moteur de recherche"];
    $wikipedia = ["url" => "www.wikipedia.org", "description" => "encyclopedie en ligne" ];

    $sites = ["Starpage" => $startpage, "Wikipedia" => $wikipedia];

    $interface3 = ["url" => "www.interface3.org", "description" => "site du centre de formation if3"];
    $ebay = ["url" => "www.ebay.com", "description" => "site de vente en ligne"];

    $sites["Interface3"] = $interface3;
    $sites["Ebay"] = $ebay;

    foreach ($sites as $nom => $site){
        print $nom . " :\n";
        foreach ($site as $cle => $val){
            print $cle. " : " . $val ."\n";
        }
    }
?>