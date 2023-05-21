<?php 
  require_once "../outil/outils.php";
  require_once 'OrdiManager.php';
  
  $ordi = array
        (
            "denomination" => "Ordinateur Apple MACBOOK CTO Pro 13 New M1 16 256 iGris sideral",
            "prix" => 1549.99,
            "processeur" => "Puce Apple M1",
            "ecran" => "13,3 pouces (33,8 cm)",
            "vive" => "16 Go",
            "image" => "01.png",
            "lien" => "https://www.boulanger.com/ref/1156449"
        );
  $tabOrdis[]=$ordi;
  $ordi = array
        (
            "denomination" => "PACKARD BELL PB314-35-P53X",
            "prix" => 449,
            "processeur" => "Intel Pentium Silver N6000",
            "ecran" => "14 pouces (35,6 cm)",
            "vive" => "8 Go",
            "image" => "02.png",
            "lien" => "https://www.boulanger.com/ref/1164052"
        );
  $tabOrdis[]=$ordi;
  $ordi = array
  (
      "denomination" => "Matebook 14s 2021 I7 16Go 512 Touch",
      "prix" => 1049,
      "processeur" => "Intel Core i7 11370H",
      "ecran" => "14,2 pouces (36,06 cm)",
      "vive" => "16 Go",
      "image" => "03.png",
      "lien" => "https://www.boulanger.com/ref/1171445"
  );
  $tabOrdis[]=$ordi;
  $ordi = array
  (
      "denomination" => "ACER Aspire A317-52-54QM Noir",
      "prix" => 699,
      "processeur" => "Intel Core i7 11370H",
      "ecran" => "17,3 pouces (43,9 cm)",
      "vive" => "8 Go",
      "image" => "04.png",
      "lien" => "https://www.boulanger.com/ref/1148125"
  );
  $tabOrdis[]=$ordi;
  $ordi = array
  (
      "denomination" => "ACER Aspire Vero AV15-51-78H5",
      "prix" => 899,
      "processeur" => "Intel Core i7 1195G7",
      "ecran" => "15,6 pouces (39,6 cm)",
      "vive" => "16 Go",
      "image" => "05.png",
      "lien" => "https://www.boulanger.com/ref/1170405"
  );
  $tabOrdis[]=$ordi;
  $ordi = array
  (
      "denomination" => "PC Hybride HP ENVY x360 13-ay0034nf",
      "prix" => 799,
      "processeur" => "AMD Ryzen 5 4500U",
      "ecran" => "13,3 pouces (33,8 cm)",
      "vive" => "8 Go",
      "image" => "06.png",
      "lien" => "https://www.boulanger.com/ref/1163913"
  );
  $tabOrdis[]=$ordi;
  $ordi = array
  (
      "denomination" => "PC Hybride LENOVO Flex 5 14ITL05-257",
      "prix" => 936.17,
      "processeur" => "Intel Core i5 1135G7",
      "ecran" => "14 pouces (35,6 cm)",
      "vive" => "16 Go",
      "image" => "07.png",
      "lien" => "https://www.boulanger.com/ref/1164775"
  );
  $tabOrdis[]=$ordi;
  $ordi = array
  (
      "denomination" => "HP Envy 17-ch0039nf",
      "prix" => 1499.39,
      "processeur" => "Intel Core i7 1165G7",
      "ecran" => "17,3 pouces (43,9 cm)",
      "vive" => "16 Go",
      "image" => "08.png",
      "lien" => "https://www.boulanger.com/ref/1161111"
  );
  $tabOrdis[]=$ordi;
  $ordi = array
  (
      "denomination" => "HP 17-cp0054",
      "prix" => 449,
      "processeur" => "AMD Athlon Silver 3050U",
      "ecran" => "17 pouces (43,18 cm)",
      "vive" => "8 Go",
      "image" => "09.png",
      "lien" => "https://www.boulanger.com/ref/1169654"
  );
  $tabOrdis[]=$ordi;
  $ordi = array 
  (
      "denomination" => "ACER Aspire A517-52G-757L",
      "prix" => 1099,
      "processeur" => "Intel Core i7 1165G7",
      "ecran" => "17,3 pouces (43,9 cm)",
      "vive" => "16 Go",
      "image" => "10.png",
      "lien" => "https://www.boulanger.com/ref/1164115"
  );
  $tabOrdis[]=$ordi;
  $ordi = array
  (
      "denomination" => "PC Gamer MSI GS66 Stealth 11UG-289FR",
      "prix" => 3199,
      "processeur" => "Intel Core i7 11800H - 32 Go",
      "ecran" => "15,6 pouces (39,6 cm)",
      "vive" => "32 Go",
      "image" => "11.png",
      "lien" => "https://www.boulanger.com/ref/1164182"
  );
  $tabOrdis[]=$ordi;
  $ordi = array
  (
      "denomination" => "ACER Swift SF514-55T-73TS Vert",
      "prix" => 1199,
      "processeur" => "Intel Core i7 11800H - 32 Go",
      "ecran" => "14 pouces (35,6 cm)",
      "vive" => "16 Go",
      "image" => "12.png",
      "lien" => "https://www.boulanger.com/ref/1164097"
  );
  $tabOrdis[]=$ordi;

foreach($tabOrdis as $ordi){
    ajouterOrdiBd($ordi['denomination'],$ordi['prix'],$ordi['processeur'],$ordi['ecran'],$ordi['vive'],$ordi['image'],$ordi['lien'],);
}