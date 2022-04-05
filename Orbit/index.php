<?php
require 'wc-api-php-master/vendor/autoload.php';
use Automattic\WooCommerce\Client;
use Automattic\WooCommerce\HttpClient\HttpClientException;

$key = 'ck_9d51b5720b6083034f123e8f2fe8790e3476e450';
$secret = 'cs_48a3407ee7ccc6d70fe9c15dea5db0a8e472bf37';
$woocommerceAPI = new Client(
    'http://l.l/waitress',
    $key,
    $secret,
    [
        'version' => 'wc/v3',
    ]
);

function debug($var, $title) {  
    $vocabularly = [
    'PId' => 'Κωδικός Προσφοράς (Ακινήτου)', 
    'PID_Display' => 'Αρχικά πωλητή και id ακινήτου (Αναλόγως ρύθμισης)', 
    'PTmimaID' => 'Τμήμα Εργασίας', 
    'PDiath' => 'Διαθέσιμο', 
    'PSalesMan' => 'Πωλητής ( ΒΑ )', 
    'PAgoroPol' => 'Αγοραπωλησία', 
    'PEnoikiasi' => 'Ενοικίαση', 
    'PAntipar' => 'Αντιπαροχή', 
    'PManagement' => 'Διαχείριση', 
    'PMisthCat' => 'Κατηγορία χρήσης ( Fixed Array )', 
    'PAkinCat' => 'Κατηγορία Ακινήτου ( ΒΑ )', 
    'PDemoHrs' => 'Ώρες Επίδειξης', 
    'PPerioxi' => 'Περιοχή Ακινήτου για το Πρόγραμμα ( ΒΑ )', 
    'PTotEpiOik' => 'Συνολική Επιφάνεια Οικοπέδου', 
    'PTotEpiKat' => 'Συνολική Επιφάνεια Ακινήτου', 
    'PEpifMemo' => 'Σχόλια Επιφάνειας', 
    'PKatasDate' => 'Ημερομηνία Κατασκευής', 
    'PAnakDate' => 'Ημερομηνία Ανακατασκευής', 
    'POrofos' => 'Όροφος', 
    'POrofosNA' => 'N/A Ένδειξη για μη εμπλοκή του ορόφου', 
    'POrofosHO' => 'Ένδειξη για Ημιόροφο', 
    'POrofosHY' => 'Ένδειξη για Ημιυπόγεο', 
    'PBedroom' => 'Υπνοδωμάτια', 
    'PBathRoom' => 'Μπάνια', 
    'PToilet' => 'WC', 
    'PTzaki' => 'Τζάκια', 
    'POffice' => 'Γραφεία', 
    'PServRoom' => 'Δωμάτια Υπηρεσίας', 
    'PApothiki' => 'Αποθήκες', 
    'PGarage' => 'Garage', 
    'PParking' => 'Parking', 
    'PFloors' => 'Πατώματα ', 
    'PBasements' => 'Υπόγεια', 
    'PThermansi' => 'Θέρμανση ( ΒΑ )', 
    'PAirCond' => 'Air Condition', 
    'PPhones' => 'Κουζίνες (Χρήση παλιού πεδίου για τηλέφωνα)', 
    'PAskPrice' => 'Ζητούμενη Τιμή', 
    'PAskCurr' => 'Νόμισμα "Ζητούμενης Τιμής"', 
    'PMemo' => 'Γενικά Σχόλια', 
    'PPos' => 'Υποπεριοχή (Θέση) ( ΒΑ ) ', 
    'PStType' => 'Είδος Δρόμου ( BA ) ', 
    'PFromSea' => 'Απόσταση απο Θάλασσα (Μέτρα)', 
    'PFromVil' => 'Απόσταση απο Χωριό (Μέτρα)', 
    'PFromCity' => 'Απόσταση απο Πόλη (Μέτρα)', 
    'PApoxet' => 'Αποχέτευση (Fixed Array)', 
    'PWater' => 'Νερό', 
    'PPower' => 'Δεή', 
    'PPool' => 'Πισίνα', 
    'PCode' => 'Κωδικός Προσφοράς - 2 ', 
    'PSyntDom' => 'Συντελεστής Δόμησης %  ', 
    'PSyntKal' => 'Συντελεστής Κάλυψης %', 
    'PAntPrc1' => 'Αντιπαροχή  % από  ', 
    'PAntPrc2' => 'Αντιπαροχή % εως  ', 
    'PPlatos' => 'Πλάτος Δρόμου', 
    'PProsops' => 'Πρόσοψη Οικοπέδου', 
    'PBathos' => 'Βάθος', 
    'POikkat' => 'Οικοδομεί Κατ.  (m2)', 
    'POiktour' => 'Οικοδομεί Επάγγ. (m2) ', 
    'PEpipsos' => 'Επιτρ. Ύψος', 
    'PXrgisId' => 'Χρήση Γης ( ΒΑ )', 
    'PAntPrice' => 'Αντικειμενική Αξία', 
    'PAntCurr' => 'Νόμισμα Αντικειμενικής Αξίας', 
    'PAggelia' => 'Κείμενο Αγγελίας', 
    'POikOrof' => 'Οικοδομεί Ορόφου', 
    'PsxdPolId' => 'Σχέδιο Πόλεως (ΒΑ Κωδ )', 
    'PIsogeio' => 'Ισόγειο (m2)', 
    'PPatari' => 'Πατάρι (m2)', 
    'POrofEna' => '1ος Όροφος (m2)', 
    'POrofDio' => '2ος Όροφος (m2)', 
    'PYpogEna' => '1ο Υπόγειο (m2)', 
    'PYpogDio' => '2ο Υπόγειο (m2)', 
    'PreqAir' => 'Απαιτείται Αέρας', 
    'PprcAir' => 'Τιμή Αέρα', 
    'POrof03' => '3ος Όροφος (m2)', 
    'POrof04' => '4ος Όροφος (m2)', 
    'POrof05' => '5ος Όροφος (m2) ', 
    'POrof06' => '6ος Όροφος (m2)  ', 
    'POrof07' => '7ος Όροφος (m2)', 
    'POrof08' => '8ος Όροφος (m2) ', 
    'POrof09' => '9ος Όροφος (m2) ', 
    'POrof10' => '10ος Όροφος(m2) ', 
    'PSofita' => 'Σοφίτα(m2) ', 
    'PDoma' => 'Δώμα(m2) ', 
    'PMisthom' => 'Είναι Μισθωμένο', 
    'PPrcMisth' => 'Τιμή Μισθώματος', 
    'PHmiYpaith' => 'Ημιυπαίθριου/Βεράντας (m2)', 
    'PEntType' => 'Τύπος Εντολής', 
    'PYpog03' => '3ο Υπόγειο(m2)', 
    'PYpog04' => '4ο Υπόγειο (m2)', 
    'PAllocate' => 'Επιμερίζει Τετραγωνικά Μέτρα', 
    'PNomosID' => 'Νομός ( BA )', 
    'PDimosID' => 'Δήμος ( BA ) ', 
    'PDDiamID' => 'Δημοτικό Διαμέρισμα ( BA )', 
    'PToponym' => 'Τοπωνύμιο', 
    'PKathKouz' => 'Σαλόνια (Χρήση Παλιού Πεδίου για Καθιστικό)', 
    'PAnapEpID' => 'Αναπροσαρμογή Ενοικίου ( ΒΑ )', 
    'PProsAkin' => 'Πρόσοψη Ακινήτου', 
    'PKatastasi' => 'Κατάσταση Ακινήτου ( ΒΑ )', 
    'PFromMetro' => 'Απόσταση απο Μετρό', 
    'PDateFree' => 'Διαθέισμο Από ( Ημερομηνία )', 
    'PArDiam' => 'Αριθμός Διαμερίσματος', 
    'PDblGlass' => 'Διπλα Τζάμια', 
    'PJacuzzi' => 'Tζακούζι', 
    'PBoiler' => 'Μπόϊλερ', 
    'PNatGas' => 'Φυσικό Αέριο', 
    'PSatDish' => 'Δορυφορική Κεραία', 
    'PPlayroom' => 'Playroom', 
    'PElevator' => 'Ανελκυστήρας/Ασανσέρ', 
    'PBarbecue' => 'Μπάρμπεκιου', 
    'PTerrace' => 'Ταράτσα', 
    'PTerraceTM' => 'Ταράτσα(m2)', 
    'PAttic' => 'Σοφίτα', 
    'PVeranta' => 'Βεράντα', 
    'PVerantes' => 'Βεράντες(m2)', 
    'PGarden' => 'Κήπος', 
    'PGardenTM' => 'Κήπος(m2)', 
    'PFurnished' => 'Επιπλωμένο', 
    'PAlarm' => 'Συναγερμός', 
    'PCorner' => 'Γωνιακό', 
    'PBright' => 'Διαμπερές', 
    'PTents' => 'Τέντες', 
    'PSecDoor' => 'Πόρτα Ασφαλείας', 
    'PSolarHeat' => 'Ηλιακός Θερμοσίφωνας', 
    'PEnClassID' => 'Ενεργειακή Κλάση ( ΒΑ )', 
    'PFloTypeID' => 'Τύπος Δαπέδου ( ΒΑ )', 
    'PViewID' => 'Θέα ( ΒΑ )', 
    'POrientID' => 'Προσανατολισμός ( ΒΑ )', 
    'PCottage' => 'Εξοχική Κατοικία', 
    'PSemiFloor' => 'Ημιόροφος(m2)', 
    'PStudent' => 'Φοιτητικό', 
    'PShowOnlyOnSite' => 'Spitogatos: Εμφάνιση μόνο στο site και όχι στο portal', 
    'PLuxury' => 'Πολυτελές', 
    'PInvestment' => 'Επενδυτικό', 
    'PPreserved' => 'Διατηρηταίο', 
    'PNeoclassical' => 'Νεοκλασικό', 
    'PPetsAllowed' => 'Επιτρέπονται Κατοικίδια', 
    'PUnderfllorHeat' => 'Ενδοδαπέδια Θέρμανση', 
    'PInternalStaircase' => 'Εσωτερική Σκάλα', 
    'PNightPower' => 'Νυχτερινό Ρεύμα', 
    'PCableTV' => 'Καλωδιακή TV', 
    'PPowerTypeID' => 'Τύπος Ρεύματος ( Fixed Array )', 
    'PLoadingRamp' => 'Ράμπα Φορτοεκφόρτωσης', 
    'PFreightElevator' => 'Ανελκυστήρας Φορτίων', 
    'PFalseCeiling' => 'Ψευδοροφή', 
    'PFullyEquipped' => 'Με πλήρη Εξοπλισμό', 
    'PPestNet' => 'Σίτες', 
    'PPainted' => 'Βαμένο', 
    'PDoorTV' => 'Θυροτηλεόραση', 
    'PPenthouse' => 'Ρετιρέ', 
    'PFacade' => 'Προσώψεος', 
    'Pfoteino' => 'Φωτεινό', 
    'Pinterior' => 'Εσωτερικό', 
    'Presidential' => 'Οικιστικό', 
    'Pcommercial' => 'Για Επαγγελματική Χρήση', 
    'Pagricultural' => 'Για Αγροτική Χρήση', 
    'PWithinCityPlan' => 'Εντός Σχεδίου Πόλεως', 
    'PHasParking' => 'Έχει Parking ( Επαγγελματικό )', 
    'PShopWindowLength' => 'Μήκος Βιτρίνας', 
    'PCommonExpences' => 'Μέσα Μηνιαία Κοινόχρηστα', 
    'PMasterBedroom' => 'Κύριες Κρεβατοκάμερες', 
    'PSlopeID' => 'Κλίση ( Fixed Array 1=Επίπεδο, 2=Επικλινές, 3=Αμφιθεατρικό)', 
    'PJoineryID' => 'Κουφώματα ( BA )', 
    'PPlusFPA' => 'Ένδειξη "Πλέον ΦΠΑ"', 
    'PFromAirport' => 'Απόσταση απο Αεροδρόμιο', 
    'PFromSeaport' => 'Απόσταση απο Λιμάνι', 
    'PFromHospital' => 'Απόσταση απο Νοσοκομείο', 
    'PCanBeSplit' => 'Ένδειξη Δυνατότητας Κατάτμησης', 
    'POikCommercial' => 'Ένδειξη Δυνατότητας Επαγγελματικής Δραστηριότητας', 
    'POikismosID' => 'Οικισμός ( Fixed Array )', 
    'PSPGListingID' => 'Spitogatos: ListingID', 
    'PAirBnB' => 'Ένδειξη για AirBnb', 
    'PSizitisimi' => 'Ένδειξη για Ζητήσιμη Τιμή', 
    'PHasApoth' => 'Ένδειξη για Αποθήκη ( Επαγγελματικό )', 
    'PApothMetr' => 'm2 για Αποθήκη ( Επαγγελματικό )', 
    'PEpagIpsos' => 'Ύψος σε Μέτρα ( Επαγγελματικό )', 
    'Pkalodiosi' => 'Δομημένη Καλωδίωση ( Επαγγελματικό )', 
    'PAnelkVaros' => 'Μέγιστο Φορτίο Ανελκυστήρα σε Κιλά ( Επαγγελματικό )', 
    'PWebSiteURL' => 'Web Σελίδα Ακινήτου στο Εταιρικό site (Όχι σε Spitogatos)', 
    'PCommonExpencesEngage' => 'Ένδειξη Κοινοχρήστων', 
    'PCommonExpences' => 'Ποσό Κοινοχρήστων', 
    'PAccessAMEA' => 'Ένδειξη για Πρόσβαση ΑΜΕΑ', 
    'PSemiBasement' => 'm2 για Ημιυπόγειο', 
    // VIDEO URL ΚΑΙ ΣΤΙΓΜΑ ΧΑΡΤΗ	
    'PVideoURL' => 'Url για Video ( Youtube )', 
    'PView360URL' => 'Url για 360 Video', 
    'PVirtualTourURL' => 'Url για Virtual Tour Video', 
    'PLongitude' => 'Γεωγραφικό Μήκος (*1)', 
    'Platitude' => 'Γεωγραφικό Πλάτος (*1)', 
    'PMapStatus' => 'Status Εμφάνισης Χάρτη (*1)', 
    // 	0 = Area  ( Κατα Προσέγγιση )
    // 	1 = Exact ( Ακριβής Θέση )
    // 	2 = Off   ( Απόκρυψη Χάρτη )
    'PLongitude2' => 'Εναλλακτικό Γεωγραφικό Μήκος (*2)', 
    'Platitude2' => 'Εναλλακτικό Γεωγραφικό Πλάτος (*2)', 
    // (*1) ΤΑ ΠΕΔΙΑ ΣΤΙΓΜΑΤΟΣ ΧΑΡΤΗ ΣΥΜΠΕΡΙΛΑΜΒΑΝΟΝΤΑΙ ΚΑΤΑ ΤΗΝ ΔΙΑΔΙΚΑΣΙΑ 	
    // ΕΞΑΓΩΓΗΣ ΔΕΔΟΜΕΝΩΝ ΣΕ PORTAL, ΚΑΤΟΠΙΝ ΕΠΙΛΟΓΗΣ ΣΤΙΣ ΡΥΘΜΙΣΕΙΣ 	
    // ΤΟΥ ΚΑΘΕ PORTAL ΞΕΧΩΡΙΣΤΑ	
    // (*2) ΤΑ ΕΝΑΛΛΑΚΤΙΚΑ ΠΕΔΙΑ ΣΤΙΓΜΑΤΟΣ ΧΑΡΤΗ ΣΥΜΠΕΡΙΛΑΜΒΑΝΟΝΤΑΙ ΚΑΤΑ ΤΗΝ ΔΙΑΔΙΚΑΣΙΑ 	
    // ΕΞΑΓΩΓΗΣ ΔΕΔΟΜΕΝΩΝ ΣΕ PORTAL, ΑΝΑΛΟΓΩΣ ΕΝΔΕΙΞΗΣ ΕΜΦΑΝΙΣΗΣ ΣΕ ΚΆΘΕ ΑΚΙΝΗΤΟ	
    // ΟΔΗΓΙΕΣ ΓΙΑ ΤΗΝ ΔΙΑΧΕΙΡΙΣΗ ΤΟΥ ΟΡΟΦΟΥ	
    'ΠΕΔΙΟ' => 'ΣΗΜΑΣΙΑ', 
    'POrofosNA' => 'N/A ( πχ σε περίπτωση οικοπέδου )', 
    'POrofosHO' => '1 = Ημιόροφος', 
    'POrofosHY' => '1 = Ημιυπόγειο', 
    'POrofosYI' => '1 = Υπερυψωμένο Ισόγειο', 
    'POrofos' => 'Όροφος ( 0 = Ισόγειο, > 0 Σημαίνει Όροφος, < 0 Σημαίνει Υπόγειο )', 
    // Αν όλα τα πεδία POrofosNA, POrofosHO, POrofosHY, POrofosYI έχουν τιμή 0, 	
    // τότε χρησιμοποιείστε το POrofos 	
    // Αν ένα από τα πεδία POrofosNA, POrofosHO, POrofosHY, POrofosYI έχει τιμή 1, 	
    // τότε χρησιμοποιείστε αυτό το πεδίο που έχει την τιμή 1.	
    // Μόνο ένα πεδίο από τα πεδία POrofosNA, POrofosHO, POrofosHY, POrofosYI μπορεί να έχει τιμή 1.	
    // ΕΝΔΕΙΞΕΙΣ ΕΠΙΠΕΔΩΝ ΧΡΥΣΗΣ ΕΥΚΑΙΡΙΑΣ	
    'PXE_L0' => 'Ισόγειο', 
    'PXE_L1' => '1ος Όροφος', 
    'PXE_L2' => '1ος Όροφος', 
    'PXE_L3' => '1ος Όροφος', 
    'PXE_L4' => '1ος Όροφος', 
    'PXE_L5' => '1ος Όροφος', 
    'PXE_L6' => '1ος Όροφος', 
    'PXE_L7' => '1ος Όροφος', 
    'PXE_L8' => '1ος Όροφος', 
    'PXE_LΗ' => 'Ημιόροφος', 
    'PXE_LΗH' => 'Υπερυψωμένο', 
    'PXE_S1' => 'Υπόγειο', 
    'PXE_SH' => 'Ημιυπόγειο', 
    // ΔΕΔΟΜΕΝΑ ΠΟΥ ΑΦΟΡΟΥΝ ΤΕΛΕΥΤΑΙΑ ΕΝΗΜΕΡΩΣΗ	ΤΟΥ Ακινήτου	
    'LastUpdate' => 'Ημερομηνία Τελ.Ενημέρωσης', 
    'LastTime' => 'Ώρα Τελ.Ενημέρωσης', 
    'LastUser' => 'Κωδ.Χρήστη Τελ.Ενημέρωσης', 
    // ΦΩΤΟΓΡΑΦΙΩΝ ΤΟΥ ΣΥΓΚΕΚΡΙΜΕΝΟΥ Ακινήτου	
    'LastPhUpdt' => 'Ημερομηνία Τελ.Ενημέρωσης', 
    'LastPhTime' => 'Ώρα Τελ.Ενημέρωσης', 
    'LastPhUser' => 'Κωδ.Χρήστη Τελ.Ενημέρωσης ', 
    // ΔΕΔΟΜΕΝΑ ΠΟΥ ΑΦΟΡΟΥΝ PORTALS	
    'PrtAreaID' => 'Κωδικός Περιοχής Ακινήτου του Portal', 
    'PrtCategID' => 'Κωδικός Είδος Ακινήτου του Portal', 
    'PrtThermID' => 'Κωδικός Θέρμανσης Ακινήτου του Portal', 
    'PrtCondID' => 'Κωδικός Κατάστασης Ακινήτου του Portal', 
    'PrtSxPolID' => 'Κωδικός Σχεδίου Πόλεως Ακινήτου του Portal', 
    'PrtEnClsID' => 'Κωδικός Ενεργειακής Κλάσης του Portal', 
    'PrtFlTypID' => 'Κωδικός Τύπου Δαπέδου του Portal', 
    'PrtViewID' => 'Κωδικός Θέας του Portal', 
    'PrtOrienID' => 'Κωδικός Προσανατολισμού του Portal', 
    'PrtJoineID' => 'Κωδικός Κουφομάτων του Portal', 
    'PrtXrGisID' => 'Κωδικός Χρήσης Γης/Ζώνης του Portal', 
    'PrtStTypID' => 'Κωδικός Είδους Δρόμου ( Πρόσβασης ) του Portal', 
    // ΔΕΔΟΜΕΝΑ ΠΟΥ ΑΦΟΡΟΥΝ ΞΕΝΟΔΟΧΕΙΑ	
    'PHRooms' => 'Δωμάτια', 
    'PHBeds' => 'Κλίνες', 
    'PHBungalow' => 'Bungalows', 
    'PHSuites' => 'Σουίτες', 
    'PHSingles' => 'Μονόκλινα', 
    'PHDoubles' => 'Δίκλινα', 
    'PHDAirport' => 'Distance Near Airport (Km)', 
    'PHDBeach' => 'Distance Near Beach (Km)', 
    'PHDPort' => 'Distance Near Port (Km)', 
    'PHDTown' => 'Distance Near Town (Km)', 
    'PHOperFrom' => 'Περίοδος Λειτουργίας Από (ΜΗΝΑΣ)', 
    'PHOperUpto' => 'Περίοδος Λειτουργίας Εως (ΜΗΝΑΣ)', 
    'PHAirCond' => 'Air Condition', 
    'PHRestaura' => 'Εστιατόρια', 
    'PHOutPool' => 'Outdoor Swimming Pool', 
    'PHConfCent' => 'Conference Center', 
    'PHParking' => 'Parking', 
    'PHClub' => 'Club', 
    'PHExerRoom' => 'Exercise Room', 
    'PHBar' => 'Bar', 
    'PHMemo' => 'Σχόλια', 
    // ΠΕΔΙΑ ΠΟΥ ΑΦΟΡΟΥΝ ΠΛΗΡΟΦΟΡΙΕΣ ΓΙΑ ΤΟ INTERNET	
    'PInternet' => 'Εμφάνιση στο Internet', 
    'PGrkTitle' => 'Ελληνικός Τίτλος', 
    'PGrkNote1' => 'Ελληνικό Σχόλιο 1', 
    'PGrkNote2' => 'Ελληνικό Σχόλιο 2 ', 
    'PGrkPrApo' => 'Ελληνική Τιμή Πώλησης Internet Απο', 
    'PGrkPrEos' => 'Ελληνική Τιμή Πώλησης Internet Εως', 
    'PGrkCurID' => 'Ελληνικό Νόμισμα Πώλησης Internet (ΚΩΔ)', 
    'PEngTitle' => 'Αγγλικά, Ανάλογα Πεδία', 
    'PEngNote1' => '-//-', 
    'PEngNote2' => '-//-', 
    'PEngPrApo' => '-//-', 
    'PEngPrEos' => '-//-', 
    'PEngCurID' => '-//-', 
    'PLg3Title' => 'Γερμανικά, Ανάλογα Πεδία', 
    'PLg3Note1' => '-//-', 
    'PLg3Note2' => '-//-', 
    'PLg3PrApo' => '-//-', 
    'PLg3PrEos' => '-//-', 
    'PLg3CurID' => '-//-', 
    'PLg4Title' => 'Γαλλικά, Ανάλογα Πεδία', 
    'PLg4Note1' => '-//-', 
    'PLg4Note2' => '-//-', 
    'PLg4PrApo' => '-//-', 
    'PLg4PrEos' => '-//-', 
    'PLg4CurID' => '-//-', 
    'PLg5Title' => 'Ρωσικά, Ανάλογα Πεδία', 
    'PLg5Note1' => '-//-', 
    'PLg5Note2' => '-//-', 
    'PLg5PrApo' => '-//-', 
    'PLg5PrEos' => '-//-', 
    'PLg5CurID' => '-//-', 
    'PGrkMDTitl' => 'Ελληνικά, Metadata Title', 
    'PGrkMDDesc' => '-//-      Metadata Description', 
    'PGrkMDKeyw' => '-//-      Metadata Keywords', 
    'PEngMDTitl' => 'Αγγλικά, Metadata Title', 
    'PEngMDDesc' => '-//-     Metadata Description', 
    'PEngMDKeyw' => '-//-     Metadata Keywords', 
    'PLg3MDTitl' => 'Γερμανικά, Metadata Title', 
    'PLg3MDDesc' => '-//-       Metadata Description', 
    'PLg3MDKeyw' => '-//-       Metadata Keywords', 
    'PLg4MDTitl' => 'Γαλλικά, Metadata Title', 
    'PLg4MDDesc' => '-//-    Metadata Description', 
    'PLg4MDKeyw' => '-//-    Metadata Keywords', 
    'PLg5MDTitl' => 'Ρωσικά, Metadata Title', 
    'PLg5MDDesc' => '-//-    Metadata Description', 
    'PLg5MDKeyw' => '-//-    Metadata Keywords', 
    // ΠΕΔΙΑ ΑΚΙΝΗΤΩΝ ΟΡΙΣΜΕΝΑ ΑΠΟ ΤΟΝ ΧΡΗΣΤΗ	
    'PBAID1' => 'BA Κωδ - 1 ', 
    'PBAID2' => 'BA Κωδ - 2 ', 
    'PBAID3' => 'BA Κωδ - 3 ', 
    'PBAID4' => 'BA Κωδ - 4 ', 
    'PBAID5' => 'BA Κωδ - 5 ', 
    'PCheck1' => 'Check - 1  ', 
    'PCheck2' => 'Check - 2  ', 
    'PCheck3' => 'Check - 3  ', 
    'PCheck4' => 'Check - 4 ', 
    'PCheck5' => 'Check - 5  ', 
    'PNumber1' => 'Number - 1 ', 
    'PNumber2' => 'Number - 2 ', 
    'PNumber3' => 'Number - 3 ', 
    'PNumber4' => 'Number - 4 ', 
    'PNumber5' => 'Number - 5 ', 
    'PString1' => 'String - 1 ', 
    'PString2' => 'String - 2 ', 
    'PString3' => 'String - 3 ', 
    'PString4' => 'String - 4', 
    'PString5' => 'String - 5', 
    'PUserMemo' => 'Memo', 
    'PMoney1' => 'Money - 1', 
    'PMoney2' => 'Money - 2', 
    'PMoney3' => 'Money - 3', 
    'PMoney4' => 'Money - 4', 
    'PMoney5' => 'Money – 5', 
    // ΠΕΔΙΑ ΠΟΥ ΑΦΟΡΟΥΝ ΠΕΡΙΓΡΑΦΕΣ ΚΑΙ ΠΛΗΡΟΦΟΡΙΕΣ ΑΠΟ ΑΛΛΑ ΑΡΧΕΙΑ	
    'CatTypeID' => 'ID Τύπου Κατηγορίας Ακινήτου', 
    // 	0-Μη Χαρακτηρισμένο  1-Κατοικία  2-Επαγγελματικό  3-Γη
    'Politis' => 'Ονομασία Πωλητή', 
    'Mesitiko1' => 'Ονομασία Μεσιτικού Γραφείου (GRK)', 
    'Mesitiko2' => 'Ονομασία Μεσιτικού Γραφείου (ENG)', 
    'Xrisi1' => 'Ονομασία Χρήσης (GRK)', 
    'Xrisi2' => 'Ονομασία Χρήσης (ENG)', 
    'EidosAkin1' => 'Ονομασία Είδους Ακινήτου (GRK)', 
    'EidosAkin2' => 'Ονομασία Είδους Ακινήτου (ENG)', 
    'Perioxi1' => 'Ονομασία Περιοχής (GRK)', 
    'Perioxi2' => 'Ονομασία Περιοχής (ENG)', 
    'Thesi1' => 'Ονομασία Θέσης (GRK)', 
    'Thesi2' => 'Ονομασία Θέσης (ENG)', 
    'Thermansi1' => 'Ονομασία Θέρμανσης (GRK)', 
    'Thermansi2' => 'Ονομασία Θέρμανσης (ENG)', 
    'SxedioPol1' => 'Ονομασία Σχεδίου Πόλεως (GRK)', 
    'SxedioPol2' => 'Ονομασία Σχεδίου Πόλεως (ENG)', 
    'XrisiGis1' => 'Ονομασία Χρήσης Γης (GRK)', 
    'XrisiGis2' => 'Ονομασία Χρήσης Γης (ENG)', 
    'Prosvasi1' => 'Ονομασία Πρόσβασης (GRK)', 
    'Prosvasi2' => 'Ονομασία Πρόσβασης (ENG)', 
    'Apoxet1' => 'Ονομασία Αποχέτευσης (GRK)', 
    'Apoxet2' => 'Ονομασία Αποχέτευσης (ENG)', 
    'Nomos1' => 'Ονομασία Νομού (GRK)', 
    'Nomos2' => 'Ονομασία Νομού (ENG)', 
    'Dimos1' => 'Ονομασία Δήμου (GRK)', 
    'Dimos2' => 'Ονομασία Δήμου (ENG)', 
    'DimDiam1' => 'Ονομασία Δημοτικόυ Διαμερίσματος (GRK)', 
    'Dimdiam2' => 'Ονομασία Δημοτικόυ Διαμερίσματος (ENG)', 
    'Katastasi1' => 'Ονομασία Κατάσταση Ακινήτου (GRK)', 
    'Katastasi2' => 'Ονομασία Κατάσταση Ακινήτου (ENG)', 
    'EnerClass1' => 'Ονομασία Ενεργειακής Κλάσης (GRK)', 
    'EnerClass2' => 'Ονομασία Ενεργειακής Κλάσης (ENG)', 
    'FloorType1' => 'Ονομασία Τύπου Δαπέδου (GRK)', 
    'FloorType2' => 'Ονομασία Τύπου Δαπέδου (ENG)', 
    'View1' => 'Ονομασία Θέας (GRK)', 
    'View2' => 'Ονομασία Θέας (ENG)', 
    'Orient1' => 'Ονομασία Προσανατολισμού (GRK)', 
    'Orient2' => 'Ονομασία Προσανατολισμού (ENG)', 
    'Joinery1' => 'Ονομασία Κουφομάτων (GRK)', 
    'Joinery2' => 'Ονομασία Κουφομάτων (ENG)', 
    'Apodosi' => 'Απόδοση Ποσοστό(%) ', 
    'BACustom11' => 'Ονομασία BA Χρήστη 1 (GRK)', 
    'BACustom12' => 'Ονομασία BA Χρήστη 1 (ENG)', 
    'BACustom21' => 'Ονομασία BA Χρήστη 2 (GRK)', 
    'BACustom22' => 'Ονομασία BA Χρήστη 2 (ENG)', 
    'BACustom31' => 'Ονομασία BA Χρήστη 3 (GRK)', 
    'BACustom32' => 'Ονομασία BA Χρήστη 3 (ENG)', 
    'BACustom41' => 'Ονομασία BA Χρήστη 4 (GRK)', 
    'BACustom42' => 'Ονομασία BA Χρήστη 4 (ENG)', 
    'BACustom51' => 'Ονομασία BA Χρήστη 5 (GRK)', 
    'BACustom52' => 'Ονομασία BA Χρήστη 5 (ENG)', 
    'PhotoFile1' => 'Ονομασία Αρχείου Φωτογραφίας 1', 
    'PhotoFile2' => 'Ονομασία Αρχείου Φωτογραφίας 2', 
    'PhotoFile3' => 'Ονομασία Αρχείου Φωτογραφίας 3', 
    'PhotoFiles' => 'Ονομασίες Αρχείων Φωτογραφιών Γενικώς', 
    'CategCodes' => 'Κωδικοί Κατηγοριών Ακινήτων', 
    'PhotoGrk..10' => 'Λεζάντα Φωτογραφίας 1..10 στα Ελληνικά', 
    'PhotoEng..10' => 'Λεζάντα Φωτογραφίας 1..10 στα Αγγλικά', 
    'PhotoLg3..10' => 'Λεζάντα Φωτογραφίας 1..10 στα Γερμανικά', 
    'PhotoLg4..10' => 'Λεζάντα Φωτογραφίας 1..10 στα Γαλλικά', 
    'PhotoLg5..10' => 'Λεζάντα Φωτογραφίας 1..10 στη Ρωσικά', 
    'PhotoLg6..10' => 'Λεζάντα Φωτογραφίας 1..10 στη Γλώσσα #6', 
    'PhotoLg7..10' => 'Λεζάντα Φωτογραφίας 1..10 στη Γλώσσα #7', 
    'PhotoLg8..10' => 'Λεζάντα Φωτογραφίας 1..10 στη Γλώσσα #8', 
    // ΤΑ ΠΑΡΑΚΑΤΩ ΠΕΔΙΑ ΣΧΟΛΙΩΝ ΕΞΑΙΡΟΥΝΤΑΙ	
    // ΣΥΜΠΕΡΙΛΑΜΒΑΝΟΝΤΑΙ ΜΟΝΟ ΜΕ ΑΝΑΛΟΓΗ ΕΝΔΕΙΞΗ, ΑΝΑΛΟΓΩΣ ΕΓΚΑΤΑΣΤΑΣΗΣ	
    'PMemo' => 'Γενικά Σχόλια ', 
    'PEpifMemo' => 'Σχόλια Επιφάνειας', 
    'PUserMemo' => 'Memo Χρήστη', 
    ];
    $vocabularly = array_change_key_case($vocabularly, CASE_UPPER);
    $voca_key = str_replace('$', '', $title);
    // echo $voca_key;
    echo "<h2>$vocabularly[$voca_key] - $title</h2>";
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

$products = $woocommerceAPI->get('products');

// $attributes = [
//     'PTZAKI',
//     'PAPOTHIKI',
//     'PTOILET',
    
//     ];
    
// $attributes_labels = [
//     'Τζάκι',
//     'Αποθήκη',
//     'Τουαλέτα'];

// var_dump($woocommerceAPI);
// $xml = 'DOWN/orbit_20220324_164419_DOWN.xml';
$xml = 'RENEWALL/orbit_20220324_164516_RENEWALL.xml';
// $xml = 'UP/orbit_20220324_164319_UP.xml';
$properties_xml    = file_get_contents($xml);
$properties_array = (array) new SimpleXMLElement($properties_xml );
$array_keys= array_keys($properties_array);
//Parse inside properties 
$properties = $properties_array['Properties']->Property;
// debug($properties, '$properties');
foreach($properties as $property) {
    // var_dump(    $property->PNOMOSID);
    $property_id = $property->PID; 
    $PID = $property->PID;
    $PID_DISPLAY = $property->PID_DISPLAY;
    $PDIATH = $property->PDIATH;
    $PMESITIKO = $property->PMESITIKO;
    $PSALESMAN = $property->PSALESMAN;
    $PAGOROPOL = $property->PAGOROPOL;
    $PENOIKIASI = $property->PENOIKIASI;
    $PANTIPAR = $property->PANTIPAR;
    $PMISTHCAT = $property->PMISTHCAT;
    $PAKINCAT = $property->PAKINCAT;
    $PPERIOXI = $property->PPERIOXI;
    $PADD2 = $property->PADD2;
    $PADD3 = $property->PADD3;
    $PDEMOHRS = $property->PDEMOHRS;
    $PTOTEPIOIK = $property->PTOTEPIOIK;
    $PKATASDATE = $property->PKATASDATE;
    $PANAKDATE = $property->PANAKDATE;
    $POROFOS = $property->POROFOS;
    $PBEDROOM = $property->PBEDROOM;
    $PBATHROOM = $property->PBATHROOM;
    $PTOILET = $property->PTOILET;
    $PTZAKI = $property->PTZAKI;
    $POFFICE = $property->POFFICE;
    $PSERVROOM = $property->PSERVROOM;
    $PAPOTHIKI = $property->PAPOTHIKI;
    $PGARAGE = $property->PGARAGE;
    $PPARKING = $property->PPARKING;
    $PFLOORS = $property->PFLOORS;
    $PBASEMENTS = $property->PBASEMENTS;
    $PTHERMANSI = $property->PTHERMANSI;
    $PAIRCOND = $property->PAIRCOND;
    $PPHONES = $property->PPHONES;
    $PASKPRICE = $property->PASKPRICE;
    $PASKCURR = $property->PASKCURR;
    $PPOS = $property->PPOS;
    $PSTTYPE = $property->PSTTYPE;
    $PFROMSEA = $property->PFROMSEA;
    $PFROMVIL = $property->PFROMVIL;
    $PFROMCITY = $property->PFROMCITY;
    $PAPOXET = $property->PAPOXET;
    $PWATER = $property->PWATER;
    $PPOWER = $property->PPOWER;
    $PPOOL = $property->PPOOL;
    $PBAID1 = $property->PBAID1;
    $PBAID2 = $property->PBAID2;
    $PBAID3 = $property->PBAID3;
    $PBAID4 = $property->PBAID4;
    $PBAID5 = $property->PBAID5;
    $PCHECK1 = $property->PCHECK1;
    $PCHECK2 = $property->PCHECK2;
    $PCHECK3 = $property->PCHECK3;
    $PCHECK4 = $property->PCHECK4;
    $PCHECK5 = $property->PCHECK5;
    $PNUMBER1 = $property->PNUMBER1;
    $PNUMBER2 = $property->PNUMBER2;
    $PNUMBER3 = $property->PNUMBER3;
    $PNUMBER4 = $property->PNUMBER4;
    $PNUMBER5 = $property->PNUMBER5;
    $PSTRING1 = $property->PSTRING1;
    $PSTRING2 = $property->PSTRING2;
    $PSTRING3 = $property->PSTRING3;
    $PSTRING4 = $property->PSTRING4;
    $PSTRING5 = $property->PSTRING5;
    $PMONEY1 = $property->PMONEY1;
    $PMONEY2 = $property->PMONEY2;
    $PMONEY3 = $property->PMONEY3;
    $PMONEY4 = $property->PMONEY4;
    $PMONEY5 = $property->PMONEY5;
    $PCODE = $property->PCODE;
    $PSYNTDOM = $property->PSYNTDOM;
    $PSYNTKAL = $property->PSYNTKAL;
    $PANTPRC1 = $property->PANTPRC1;
    $PANTPRC2 = $property->PANTPRC2;
    $PPLATOS = $property->PPLATOS;
    $PPROSOPS = $property->PPROSOPS;
    $PBATHOS = $property->PBATHOS;
    $POIKKAT = $property->POIKKAT;
    $POIKTOUR = $property->POIKTOUR;
    $PEPIPSOS = $property->PEPIPSOS;
    $PXRGISID = $property->PXRGISID;
    $PANTPRICE = $property->PANTPRICE;
    $PANTCURR = $property->PANTCURR;
    $PAGGELIA = $property->PAGGELIA;
    $PARDIAM = $property->PARDIAM;
    $PDATEFREE = $property->PDATEFREE;
    $POIKOROF = $property->POIKOROF;
    $PSXDPOLID = $property->PSXDPOLID;
    $PISOGEIO = $property->PISOGEIO;
    $PPATARI = $property->PPATARI;
    $POROFENA = $property->POROFENA;
    $POROFDIO = $property->POROFDIO;
    $PYPOGENA = $property->PYPOGENA;
    $PYPOGDIO = $property->PYPOGDIO;
    $PREQAIR = $property->PREQAIR;
    $PPRCAIR = $property->PPRCAIR;
    $POROF03 = $property->POROF03;
    $POROF04 = $property->POROF04;
    $POROF05 = $property->POROF05;
    $POROF06 = $property->POROF06;
    $POROF07 = $property->POROF07;
    $POROF08 = $property->POROF08;
    $POROF09 = $property->POROF09;
    $POROF10 = $property->POROF10;
    $PSOFITA = $property->PSOFITA;
    $PDOMA = $property->PDOMA;
    $PMISTHOM = $property->PMISTHOM;
    $PPRCMISTH = $property->PPRCMISTH;
    $PHMIYPAITH = $property->PHMIYPAITH;
    $PENTTYPE = $property->PENTTYPE;
    $LASTUPDATE = $property->LASTUPDATE;
    $LASTUSER = $property->LASTUSER;
    $LASTTIME = $property->LASTTIME;
    $PYPOG03 = $property->PYPOG03;
    $PYPOG04 = $property->PYPOG04;
    $PHROOMS = $property->PHROOMS;
    $PHBEDS = $property->PHBEDS;
    $PHBUNGALOW = $property->PHBUNGALOW;
    $PHSUITES = $property->PHSUITES;
    $PHSINGLES = $property->PHSINGLES;
    $PHDOUBLES = $property->PHDOUBLES;
    $PHDAIRPORT = $property->PHDAIRPORT;
    $PHDBEACH = $property->PHDBEACH;
    $PHDPORT = $property->PHDPORT;
    $PHDTOWN = $property->PHDTOWN;
    $PHOPERFROM = $property->PHOPERFROM;
    $PHOPERUPTO = $property->PHOPERUPTO;
    $PHAIRCOND = $property->PHAIRCOND;
    $PHRESTAURA = $property->PHRESTAURA;
    $PHOUTPOOL = $property->PHOUTPOOL;
    $PHCONFCENT = $property->PHCONFCENT;
    $PHPARKING = $property->PHPARKING;
    $PHCLUB = $property->PHCLUB;
    $PHEXERROOM = $property->PHEXERROOM;
    $PHBAR = $property->PHBAR;
    $PHMEMO = $property->PHMEMO;
    $PINTERNET = $property->PINTERNET;
    $PGRKTITLE = $property->PGRKTITLE;
    $PGRKNOTE1 = $property->PGRKNOTE1;
    $PGRKNOTE2 = $property->PGRKNOTE2;
    $PGRKPRAPO = $property->PGRKPRAPO;
    $PGRKPREOS = $property->PGRKPREOS;
    $PGRKCURID = $property->PGRKCURID;
    $PENGTITLE = $property->PENGTITLE;
    $PENGNOTE1 = $property->PENGNOTE1;
    $PENGNOTE2 = $property->PENGNOTE2;
    $PENGPRAPO = $property->PENGPRAPO;
    $PENGPREOS = $property->PENGPREOS;
    $PENGCURID = $property->PENGCURID;
    $PNOMOSID = $property->PNOMOSID;
    $PDIMOSID = $property->PDIMOSID;
    $PDDIAMID = $property->PDDIAMID;
    $PTOPONYM = $property->PTOPONYM;
    $PKATHKOUZ = $property->PKATHKOUZ;
    $PVERANTES = $property->PVERANTES;
    $PPROSAKIN = $property->PPROSAKIN;
    $PLINKSITE2 = $property->PLINKSITE2;
    $PLINKSITE3 = $property->PLINKSITE3;
    $PKATASTASI = $property->PKATASTASI;
    $PFROMMETRO = $property->PFROMMETRO;
    $PDBLGLASS = $property->PDBLGLASS;
    $PJACUZZI = $property->PJACUZZI;
    $PBOILER = $property->PBOILER;
    $PNATGAS = $property->PNATGAS;
    $PSATDISH = $property->PSATDISH;
    $PPLAYROOM = $property->PPLAYROOM;
    $PELEVATOR = $property->PELEVATOR;
    $PBARBECUE = $property->PBARBECUE;
    $PTERRACE = $property->PTERRACE;
    $PATTIC = $property->PATTIC;
    $PVERANTA = $property->PVERANTA;
    $PGARDEN = $property->PGARDEN;
    $PFURNISHED = $property->PFURNISHED;
    $PALARM = $property->PALARM;
    $PCORNER = $property->PCORNER;
    $PBRIGHT = $property->PBRIGHT;
    $PTENTS = $property->PTENTS;
    $PSECDOOR = $property->PSECDOOR;
    $PSOLARHEAT = $property->PSOLARHEAT;
    $PENCLASSID = $property->PENCLASSID;
    $PFLOTYPEID = $property->PFLOTYPEID;
    $PVIEWID = $property->PVIEWID;
    $PORIENTID = $property->PORIENTID;
    $PVIDEOURL = $property->PVIDEOURL;
    $PLongitude2 = $property->PLongitude2;
    $PLatitude2 = $property->PLatitude2;
    $POROFOSNA = $property->POROFOSNA;
    $PLADEFCOMM = $property->PLADEFCOMM;
    $PXE_L0 = $property->PXE_L0;
    $PXE_L1 = $property->PXE_L1;
    $PXE_L2 = $property->PXE_L2;
    $PXE_L3 = $property->PXE_L3;
    $PXE_L4 = $property->PXE_L4;
    $PXE_L5 = $property->PXE_L5;
    $PXE_L6 = $property->PXE_L6;
    $PXE_L7 = $property->PXE_L7;
    $PXE_L8 = $property->PXE_L8;
    $PXE_LH = $property->PXE_LH;
    $PXE_LHH = $property->PXE_LHH;
    $PXE_S1 = $property->PXE_S1;
    $PXE_SH = $property->PXE_SH;
    $PGRKNOTE3 = $property->PGRKNOTE3;
    $PENGNOTE3 = $property->PENGNOTE3;
    $PSENDSMS = $property->PSENDSMS;
    $PSENDEMAIL = $property->PSENDEMAIL;
    $PCOTTAGE = $property->PCOTTAGE;
    $PSEMIFLOOR = $property->PSEMIFLOOR;
    $PSTUDENT = $property->PSTUDENT;
    $PSHOWONLYONSITE = $property->PSHOWONLYONSITE;
    $PLUXURY = $property->PLUXURY;
    $PINVESTMENT = $property->PINVESTMENT;
    $PPRESERVED = $property->PPRESERVED;
    $PNEOCLASSICAL = $property->PNEOCLASSICAL;
    $PPETSALLOWED = $property->PPETSALLOWED;
    $PUNDERFLOORHEATING = $property->PUNDERFLOORHEATING;
    $PINTERNALSTAIRCASE = $property->PINTERNALSTAIRCASE;
    $PNIGHTPOWER = $property->PNIGHTPOWER;
    $PPOWERTYPEID = $property->PPOWERTYPEID;
    $PLOADINGRAMP = $property->PLOADINGRAMP;
    $PFALSECEILING = $property->PFALSECEILING;
    $PFREIGHTELEVATOR = $property->PFREIGHTELEVATOR;
    $PFULLYEQUIPPED = $property->PFULLYEQUIPPED;
    $PCABLETV = $property->PCABLETV;
    $PMANAGEMENT = $property->PMANAGEMENT;
    $PSIZITISIMI = $property->PSIZITISIMI;
    $PHASAPOTH = $property->PHASAPOTH;
    $PAPOTHMETR = $property->PAPOTHMETR;
    $PEPAGIPSOS = $property->PEPAGIPSOS;
    $PKALODIOSI = $property->PKALODIOSI;
    $PANELKpropertyOS = $property->PANELKpropertyOS;
    $PPESTNET = $property->PPESTNET;
    $PPAINTED = $property->PPAINTED;
    $PPENTHOUSE = $property->PPENTHOUSE;
    $PFACADE = $property->PFACADE;
    $PFOTEINO = $property->PFOTEINO;
    $PRESIDENTIAL = $property->PRESIDENTIAL;
    $PCOMMERCIAL = $property->PCOMMERCIAL;
    $PAGRICULTURAL = $property->PAGRICULTURAL;
    $PWITHINCITYPLAN = $property->PWITHINCITYPLAN;
    $PHASPARKING = $property->PHASPARKING;
    $PSHOPWINDOWLENGTH = $property->PSHOPWINDOWLENGTH;
    $PCOMMONEXPENCES = $property->PCOMMONEXPENCES;
    $PMASTERBEDROOM = $property->PMASTERBEDROOM;
    $PINTERIOR = $property->PINTERIOR;
    $PSLOPEID = $property->PSLOPEID;
    $PCOMMONEXPENCESENGAGE = $property->PCOMMONEXPENCESENGAGE;
    $PJOINERYID = $property->PJOINERYID;
    $PSPGNOAGENTFEE = $property->PSPGNOAGENTFEE;
    $PTOURISTRENTAL = $property->PTOURISTRENTAL;
    $PGARDENTM = $property->PGARDENTM;
    $PTERRACETM = $property->PTERRACETM;
    $PPRASIA = $property->PPRASIA;
    $PPRASIATM = $property->PPRASIATM;
    $PLINKSITE9 = $property->PLINKSITE9;
    $PLINKSITE10 = $property->PLINKSITE10;
    $PLINKSITE11 = $property->PLINKSITE11;
    $PLINKSITE12 = $property->PLINKSITE12;
    $PLINKSITE13 = $property->PLINKSITE13;
    $PLINKSITE14 = $property->PLINKSITE14;
    $PLINKSITE15 = $property->PLINKSITE15;
    $PLINKSITE16 = $property->PLINKSITE16;
    $PKEY = $property->PKEY;
    $POPENSPACE = $property->POPENSPACE;
    $PDOORTV = $property->PDOORTV;
    $PPILOTI = $property->PPILOTI;
    $PGOLDENVISA = $property->PGOLDENVISA;
    $PCOMSTATUSID = $property->PCOMSTATUSID;
    $PCOMUSERID1 = $property->PCOMUSERID1;
    $PCOMCONTACTID1 = $property->PCOMCONTACTID1;
    $PCOMCONTACTCHECK1 = $property->PCOMCONTACTCHECK1;
    $PCOMPERCENT1 = $property->PCOMPERCENT1;
    $PCOMAMOUNT1 = $property->PCOMAMOUNT1;
    $PCOMUSERID2 = $property->PCOMUSERID2;
    $PCOMCONTACTID2 = $property->PCOMCONTACTID2;
    $PCOMCONTACTCHECK2 = $property->PCOMCONTACTCHECK2;
    $PCOMPERCENT2 = $property->PCOMPERCENT2;
    $PCOMAMOUNT2 = $property->PCOMAMOUNT2;
    $PCOMUSERID3 = $property->PCOMUSERID3;
    $PCOMCONTACTID3 = $property->PCOMCONTACTID3;
    $PCOMCONTACTCHECK3 = $property->PCOMCONTACTCHECK3;
    $PCOMPERCENT3 = $property->PCOMPERCENT3;
    $PCOMAMOUNT3 = $property->PCOMAMOUNT3;
    $PCOMUSERID4 = $property->PCOMUSERID4;
    $PCOMCONTACTID4 = $property->PCOMCONTACTID4;
    $PCOMCONTACTCHECK4 = $property->PCOMCONTACTCHECK4;
    $PCOMPERCENT4 = $property->PCOMPERCENT4;
    $PCOMAMOUNT4 = $property->PCOMAMOUNT4;
    $PPLUSFPA = $property->PPLUSFPA;
    $PFROMAIRPORT = $property->PFROMAIRPORT;
    $PFROMSEAPORT = $property->PFROMSEAPORT;
    $PFROMHOSPITAL = $property->PFROMHOSPITAL;
    $PCANBESPLIT = $property->PCANBESPLIT;
    $POIKCOMMERCIAL = $property->POIKCOMMERCIAL;
    $POIKISMOSID = $property->POIKISMOSID;
    $PSPGLISTINGID = $property->PSPGLISTINGID;
    $PAIRBNB = $property->PAIRBNB;
    $PVIEW360URL = $property->PVIEW360URL;
    $DEFAULTFOLDER = $property->DEFAULTFOLDER;
    $POROFOSHO = $property->POROFOSHO;
    $POROFOSHY = $property->POROFOSHY;
    $POROFOSYI = $property->POROFOSYI;
    $PWEBPAGEURL = $property->PWEBPAGEURL;
    $PACCESSAMEA = $property->PACCESSAMEA;
    $PWEBSELECTEDPROPERTIES = $property->PWEBSELECTEDPROPERTIES;
    $PVIRTUALTOURURL = $property->PVIRTUALTOURURL;
    $PSEMIBASEMENT = $property->PSEMIBASEMENT;
    $PPLOTLISTINGID = $property->PPLOTLISTINGID;
    $PBANKPROVIDER = $property->PBANKPROVIDER;
    $PBANKAVCHECKED = $property->PBANKAVCHECKED;
    $PBANKLEGALCHECK = $property->PBANKLEGALCHECK;
    $PBANKTECHCHECK = $property->PBANKTECHCHECK;
    $PBANKASSETSTATUS = $property->PBANKASSETSTATUS;
    $PPAYMENTID = $property->PPAYMENTID;
    $CATTYPEID = $property->CATTYPEID;
    $POLITIS = $property->POLITIS;
    $MESITIKO1 = $property->MESITIKO1;
    $MESITIKO2 = $property->MESITIKO2;
    $XRISI1 = $property->XRISI1;
    $XRISI2 = $property->XRISI2;
    $EIDOSAKIN1 = $property->EIDOSAKIN1;
    $EIDOSAKIN2 = $property->EIDOSAKIN2;
    $PERIOXI1 = $property->PERIOXI1;
    $PERIOXI2 = $property->PERIOXI2;
    $THESI1 = $property->THESI1;
    $THESI2 = $property->THESI2;
    $THERMANSI1 = $property->THERMANSI1;
    $THERMANSI2 = $property->THERMANSI2;
    $SXEDIOPOL1 = $property->SXEDIOPOL1;
    $SXEDIOPOL2 = $property->SXEDIOPOL2;
    $XRISIGIS1 = $property->XRISIGIS1;
    $XRISIGIS2 = $property->XRISIGIS2;
    $PROSVASI1 = $property->PROSVASI1;
    $PROSVASI2 = $property->PROSVASI2;
    $APOXET1 = $property->APOXET1;
    $APOXET2 = $property->APOXET2;
    $NOMOS1 = $property->NOMOS1;
    $NOMOS2 = $property->NOMOS2;
    $DIMOS1 = $property->DIMOS1;
    $DIMOS2 = $property->DIMOS2;
    $DIMDIAM1 = $property->DIMDIAM1;
    $DIMDIAM2 = $property->DIMDIAM2;
    $BACUSTOM11 = $property->BACUSTOM11;
    $BACUSTOM12 = $property->BACUSTOM12;
    $BACUSTOM21 = $property->BACUSTOM21;
    $BACUSTOM22 = $property->BACUSTOM22;
    $BACUSTOM31 = $property->BACUSTOM31;
    $BACUSTOM32 = $property->BACUSTOM32;
    $BACUSTOM41 = $property->BACUSTOM41;
    $BACUSTOM42 = $property->BACUSTOM42;
    $BACUSTOM51 = $property->BACUSTOM51;
    $BACUSTOM52 = $property->BACUSTOM52;
    $KATASTASI1 = $property->KATASTASI1;
    $KATASTASI2 = $property->KATASTASI2;
    $ENERCLASS1 = $property->ENERCLASS1;
    $ENERCLASS2 = $property->ENERCLASS2;
    $FLOORTYPE1 = $property->FLOORTYPE1;
    $FLOORTYPE2 = $property->FLOORTYPE2;
    $VIEW1 = $property->VIEW1;
    $VIEW2 = $property->VIEW2;
    $ORIENT1 = $property->ORIENT1;
    $ORIENT2 = $property->ORIENT2;
    $JOINERY1 = $property->JOINERY1;
    $JOINERY2 = $property->JOINERY2;
    $APODOSI = $property->APODOSI;
    $PICTFILE1 = $property->PICTFILE1;
    $PHOTOGRK1 = $property->PHOTOGRK1;
    $PHOTOENG1 = $property->PHOTOENG1;
    $PICTFILE2 = $property->PICTFILE2;
    $PHOTOGRK2 = $property->PHOTOGRK2;
    $PHOTOENG2 = $property->PHOTOENG2;
    $PICTFILE3 = $property->PICTFILE3;
    $PHOTOGRK3 = $property->PHOTOGRK3;
    $PHOTOENG3 = $property->PHOTOENG3;
    $PICTFILE4 = $property->PICTFILE4;
    $PHOTOGRK4 = $property->PHOTOGRK4;
    $PHOTOENG4 = $property->PHOTOENG4;
    $PICTFILE5 = $property->PICTFILE5;
    $PHOTOGRK5 = $property->PHOTOGRK5;
    $PHOTOENG5 = $property->PHOTOENG5;
    $PICTFILE6 = $property->PICTFILE6;
    $PHOTOGRK6 = $property->PHOTOGRK6;
    $PHOTOENG6 = $property->PHOTOENG6;
    $PICTFILE7 = $property->PICTFILE7;
    $PHOTOGRK7 = $property->PHOTOGRK7;
    $PHOTOENG7 = $property->PHOTOENG7;
    $PICTFILE8 = $property->PICTFILE8;
    $PHOTOGRK8 = $property->PHOTOGRK8;
    $PHOTOENG8 = $property->PHOTOENG8;
    $PICTFILE9 = $property->PICTFILE9;
    $PHOTOGRK9 = $property->PHOTOGRK9;
    $PHOTOENG9 = $property->PHOTOENG9;
    $PICTFILE10 = $property->PICTFILE10;
    $PHOTOGRK10 = $property->PHOTOGRK10;
    $PHOTOENG10 = $property->PHOTOENG10;
    $PICTFILE11 = $property->PICTFILE11;
    $PHOTOGRK11 = $property->PHOTOGRK11;
    $PHOTOENG11 = $property->PHOTOENG11;
    $PICTFILE12 = $property->PICTFILE12;
    $PHOTOGRK12 = $property->PHOTOGRK12;
    $PHOTOENG12 = $property->PHOTOENG12;
    $PICTFILE13 = $property->PICTFILE13;
    $PHOTOGRK13 = $property->PHOTOGRK13;
    $PHOTOENG13 = $property->PHOTOENG13;
    $PICTFILE14 = $property->PICTFILE14;
    $PHOTOGRK14 = $property->PHOTOGRK14;
    $PHOTOENG14 = $property->PHOTOENG14;
    $PICTFILE15 = $property->PICTFILE15;
    $PHOTOGRK15 = $property->PHOTOGRK15;
    $PHOTOENG15 = $property->PHOTOENG15;
    $PICTFILE16 = $property->PICTFILE16;
    $PHOTOGRK16 = $property->PHOTOGRK16;
    $PHOTOENG16 = $property->PHOTOENG16;
    $PICTFILE17 = $property->PICTFILE17;
    $PHOTOGRK17 = $property->PHOTOGRK17;
    $PHOTOENG17 = $property->PHOTOENG17;
    $PICTFILE18 = $property->PICTFILE18;
    $PHOTOGRK18 = $property->PHOTOGRK18;
    $PHOTOENG18 = $property->PHOTOENG18;
    $PICTFILE19 = $property->PICTFILE19;
    $PHOTOGRK19 = $property->PHOTOGRK19;
    $PHOTOENG19 = $property->PHOTOENG19;
    $PICTFILE20 = $property->PICTFILE20;
    $PHOTOGRK20 = $property->PHOTOGRK20;
    $PHOTOENG20 = $property->PHOTOENG20;
    $PICTFILE21 = $property->PICTFILE21;
    $PHOTOGRK21 = $property->PHOTOGRK21;
    $PHOTOENG21 = $property->PHOTOENG21;
    $PICTFILE22 = $property->PICTFILE22;
    $PHOTOGRK22 = $property->PHOTOGRK22;
    $PHOTOENG22 = $property->PHOTOENG22;
    $PICTFILE23 = $property->PICTFILE23;
    $PHOTOGRK23 = $property->PHOTOGRK23;
    $PHOTOENG23 = $property->PHOTOENG23;
    $PICTFILE24 = $property->PICTFILE24;
    $PHOTOGRK24 = $property->PHOTOGRK24;
    $PHOTOENG24 = $property->PHOTOENG24;
    $PICTFILE25 = $property->PICTFILE25;
    $PHOTOGRK25 = $property->PHOTOGRK25;
    $PHOTOENG25 = $property->PHOTOENG25;
    $PICTFILE26 = $property->PICTFILE26;
    $PHOTOGRK26 = $property->PHOTOGRK26;
    $PHOTOENG26 = $property->PHOTOENG26;
    $PICTFILE27 = $property->PICTFILE27;
    $PHOTOGRK27 = $property->PHOTOGRK27;
    $PHOTOENG27 = $property->PHOTOENG27;
    $PICTFILE28 = $property->PICTFILE28;
    $PHOTOGRK28 = $property->PHOTOGRK28;
    $PHOTOENG28 = $property->PHOTOENG28;
    $PICTFILE29 = $property->PICTFILE29;
    $PHOTOGRK29 = $property->PHOTOGRK29;
    $PHOTOENG29 = $property->PHOTOENG29;
    $PICTFILE30 = $property->PICTFILE30;
    $PHOTOGRK30 = $property->PHOTOGRK30;
    $PHOTOENG30 = $property->PHOTOENG30;
    $PHOTOFILES = $property->PHOTOFILES;
    $CATEGCODES = $property->CATEGCODES;
    $LASTPHUPDT = $property->LASTPHUPDT;
    $LASTPHTIME = $property->LASTPHTIME;
    $LASTPHUSER = $property->LASTPHUSER;
    echo "($PID, 'PID');";
    // echo "($PID_DISPLAY, 'PID_DISPLAY');";
    // echo "($PDIATH, 'PDIATH');";
    // echo "($PMESITIKO, 'PMESITIKO');";
    // echo "($PSALESMAN, 'PSALESMAN');";
    // echo "($PAGOROPOL, 'PAGOROPOL');";
    // echo "($PENOIKIASI, 'PENOIKIASI');";
    // echo "($PANTIPAR, 'PANTIPAR');";
    // echo "($PMISTHCAT, 'PMISTHCAT');";
    // echo "($PAKINCAT, 'PAKINCAT');";
    // echo "($PPERIOXI, 'PPERIOXI');";
    // echo "($PADD2, 'PADD2');";
    // echo "($PADD3, 'PADD3');";
    // echo "($PDEMOHRS, 'PDEMOHRS');";
    // echo "($PTOTEPIOIK, 'PTOTEPIOIK');";
    // echo "($PKATASDATE, 'PKATASDATE');";
    // echo "($PANAKDATE, 'PANAKDATE');";
    // echo "($POROFOS, 'POROFOS');";
    // echo "($PBEDROOM, 'PBEDROOM');";
    // echo "($PBATHROOM, 'PBATHROOM');";
    // echo "($PTOILET, 'PTOILET');";
    // echo "($PTZAKI, 'PTZAKI');";
    // echo "($POFFICE, 'POFFICE');";
    // echo "($PSERVROOM, 'PSERVROOM');";
    // echo "($PAPOTHIKI, 'PAPOTHIKI');";
    // echo "($PGARAGE, 'PGARAGE');";
    // echo "($PPARKING, 'PPARKING');";
    // echo "($PFLOORS, 'PFLOORS');";
    // echo "($PBASEMENTS, 'PBASEMENTS');";
    // echo "($PTHERMANSI, 'PTHERMANSI');";
    // echo "($PAIRCOND, 'PAIRCOND');";
    // echo "($PPHONES, 'PPHONES');";
    // echo "($PASKPRICE, 'PASKPRICE');";
    // echo "($PASKCURR, 'PASKCURR');";
    // echo "($PPOS, 'PPOS');";
    // echo "($PSTTYPE, 'PSTTYPE');";
    // echo "($PFROMSEA, 'PFROMSEA');";
    // echo "($PFROMVIL, 'PFROMVIL');";
    // echo "($PFROMCITY, 'PFROMCITY');";
    // echo "($PAPOXET, 'PAPOXET');";
    // echo "($PWATER, 'PWATER');";
    // echo "($PPOWER, 'PPOWER');";
    // echo "($PPOOL, 'PPOOL');";
    // echo "($PBAID1, 'PBAID1');";
    // echo "($PBAID2, 'PBAID2');";
    // echo "($PBAID3, 'PBAID3');";
    // echo "($PBAID4, 'PBAID4');";
    // echo "($PBAID5, 'PBAID5');";
    // echo "($PCHECK1, 'PCHECK1');";
    // echo "($PCHECK2, 'PCHECK2');";
    // echo "($PCHECK3, 'PCHECK3');";
    // echo "($PCHECK4, 'PCHECK4');";
    // echo "($PCHECK5, 'PCHECK5');";
    // echo "($PNUMBER1, 'PNUMBER1');";
    // echo "($PNUMBER2, 'PNUMBER2');";
    // echo "($PNUMBER3, 'PNUMBER3');";
    // echo "($PNUMBER4, 'PNUMBER4');";
    // echo "($PNUMBER5, 'PNUMBER5');";
    // echo "($PSTRING1, 'PSTRING1');";
    // echo "($PSTRING2, 'PSTRING2');";
    // echo "($PSTRING3, 'PSTRING3');";
    // echo "($PSTRING4, 'PSTRING4');";
    // echo "($PSTRING5, 'PSTRING5');";
    // echo "($PMONEY1, 'PMONEY1');";
    // echo "($PMONEY2, 'PMONEY2');";
    // echo "($PMONEY3, 'PMONEY3');";
    // echo "($PMONEY4, 'PMONEY4');";
    // echo "($PMONEY5, 'PMONEY5');";
    // echo "($PCODE, 'PCODE');";
    // echo "($PSYNTDOM, 'PSYNTDOM');";
    // echo "($PSYNTKAL, 'PSYNTKAL');";
    // echo "($PANTPRC1, 'PANTPRC1');";
    // echo "($PANTPRC2, 'PANTPRC2');";
    // echo "($PPLATOS, 'PPLATOS');";
    // echo "($PPROSOPS, 'PPROSOPS');";
    // echo "($PBATHOS, 'PBATHOS');";
    // echo "($POIKKAT, 'POIKKAT');";
    // echo "($POIKTOUR, 'POIKTOUR');";
    // echo "($PEPIPSOS, 'PEPIPSOS');";
    // echo "($PXRGISID, 'PXRGISID');";
    // echo "($PANTPRICE, 'PANTPRICE');";
    // echo "($PANTCURR, 'PANTCURR');";
    // echo "($PAGGELIA, 'PAGGELIA');";
    // echo "($PARDIAM, 'PARDIAM');";
    // echo "($PDATEFREE, 'PDATEFREE');";
    // echo "($POIKOROF, 'POIKOROF');";
    // echo "($PSXDPOLID, 'PSXDPOLID');";
    // echo "($PISOGEIO, 'PISOGEIO');";
    // echo "($PPATARI, 'PPATARI');";
    // echo "($POROFENA, 'POROFENA');";
    // echo "($POROFDIO, 'POROFDIO');";
    // echo "($PYPOGENA, 'PYPOGENA');";
    // echo "($PYPOGDIO, 'PYPOGDIO');";
    // echo "($PREQAIR, 'PREQAIR');";
    // echo "($PPRCAIR, 'PPRCAIR');";
    // echo "($POROF03, 'POROF03');";
    // echo "($POROF04, 'POROF04');";
    // echo "($POROF05, 'POROF05');";
    // echo "($POROF06, 'POROF06');";
    // echo "($POROF07, 'POROF07');";
    // echo "($POROF08, 'POROF08');";
    // echo "($POROF09, 'POROF09');";
    // echo "($POROF10, 'POROF10');";
    // echo "($PSOFITA, 'PSOFITA');";
    // echo "($PDOMA, 'PDOMA');";
    // echo "($PMISTHOM, 'PMISTHOM');";
    // echo "($PPRCMISTH, 'PPRCMISTH');";
    // echo "($PHMIYPAITH, 'PHMIYPAITH');";
    // echo "($PENTTYPE, 'PENTTYPE');";
    // echo "($LASTUPDATE, 'LASTUPDATE');";
    // echo "($LASTUSER, 'LASTUSER');";
    // echo "($LASTTIME, 'LASTTIME');";
    // echo "($PYPOG03, 'PYPOG03');";
    // echo "($PYPOG04, 'PYPOG04');";
    // echo "($PHROOMS, 'PHROOMS');";
    // echo "($PHBEDS, 'PHBEDS');";
    // echo "($PHBUNGALOW, 'PHBUNGALOW');";
    // echo "($PHSUITES, 'PHSUITES');";
    // echo "($PHSINGLES, 'PHSINGLES');";
    // echo "($PHDOUBLES, 'PHDOUBLES');";
    // echo "($PHDAIRPORT, 'PHDAIRPORT');";
    // echo "($PHDBEACH, 'PHDBEACH');";
    // echo "($PHDPORT, 'PHDPORT');";
    // echo "($PHDTOWN, 'PHDTOWN');";
    // echo "($PHOPERFROM, 'PHOPERFROM');";
    // echo "($PHOPERUPTO, 'PHOPERUPTO');";
    // echo "($PHAIRCOND, 'PHAIRCOND');";
    // echo "($PHRESTAURA, 'PHRESTAURA');";
    // echo "($PHOUTPOOL, 'PHOUTPOOL');";
    // echo "($PHCONFCENT, 'PHCONFCENT');";
    // echo "($PHPARKING, 'PHPARKING');";
    // echo "($PHCLUB, 'PHCLUB');";
    // echo "($PHEXERROOM, 'PHEXERROOM');";
    // echo "($PHBAR, 'PHBAR');";
    // echo "($PHMEMO, 'PHMEMO');";
    // echo "($PINTERNET, 'PINTERNET');";
    // echo "($PGRKTITLE, 'PGRKTITLE');";
    // echo "($PGRKNOTE1, 'PGRKNOTE1');";
    // echo "($PGRKNOTE2, 'PGRKNOTE2');";
    // echo "($PGRKPRAPO, 'PGRKPRAPO');";
    // echo "($PGRKPREOS, 'PGRKPREOS');";
    // echo "($PGRKCURID, 'PGRKCURID');";
    // echo "($PENGTITLE, 'PENGTITLE');";
    // echo "($PENGNOTE1, 'PENGNOTE1');";
    // echo "($PENGNOTE2, 'PENGNOTE2');";
    // echo "($PENGPRAPO, 'PENGPRAPO');";
    // echo "($PENGPREOS, 'PENGPREOS');";
    // echo "($PENGCURID, 'PENGCURID');";
    // echo "($PNOMOSID, 'PNOMOSID');";
    // echo "($PDIMOSID, 'PDIMOSID');";
    // echo "($PDDIAMID, 'PDDIAMID');";
    // echo "($PTOPONYM, 'PTOPONYM');";
    // echo "($PKATHKOUZ, 'PKATHKOUZ');";
    // echo "($PVERANTES, 'PVERANTES');";
    // echo "($PPROSAKIN, 'PPROSAKIN');";
    // echo "($PLINKSITE2, 'PLINKSITE2');";
    // echo "($PLINKSITE3, 'PLINKSITE3');";
    // echo "($PKATASTASI, 'PKATASTASI');";
    // echo "($PFROMMETRO, 'PFROMMETRO');";
    // echo "($PDBLGLASS, 'PDBLGLASS');";
    // echo "($PJACUZZI, 'PJACUZZI');";
    // echo "($PBOILER, 'PBOILER');";
    // echo "($PNATGAS, 'PNATGAS');";
    // echo "($PSATDISH, 'PSATDISH');";
    // echo "($PPLAYROOM, 'PPLAYROOM');";
    // echo "($PELEVATOR, 'PELEVATOR');";
    // echo "($PBARBECUE, 'PBARBECUE');";
    // echo "($PTERRACE, 'PTERRACE');";
    // echo "($PATTIC, 'PATTIC');";
    // echo "($PVERANTA, 'PVERANTA');";
    // echo "($PGARDEN, 'PGARDEN');";
    // echo "($PFURNISHED, 'PFURNISHED');";
    // echo "($PALARM, 'PALARM');";
    // echo "($PCORNER, 'PCORNER');";
    // echo "($PBRIGHT, 'PBRIGHT');";
    // echo "($PTENTS, 'PTENTS');";
    // echo "($PSECDOOR, 'PSECDOOR');";
    // echo "($PSOLARHEAT, 'PSOLARHEAT');";
    // echo "($PENCLASSID, 'PENCLASSID');";
    // echo "($PFLOTYPEID, 'PFLOTYPEID');";
    // echo "($PVIEWID, 'PVIEWID');";
    // echo "($PORIENTID, 'PORIENTID');";
    // echo "($PVIDEOURL, 'PVIDEOURL');";
    // echo "($PLongitude2, 'PLongitude2');";
    // echo "($PLatitude2, 'PLatitude2');";
    // echo "($POROFOSNA, 'POROFOSNA');";
    // echo "($PLADEFCOMM, 'PLADEFCOMM');";
    // echo "($PXE_L0, 'PXE_L0');";
    // echo "($PXE_L1, 'PXE_L1');";
    // echo "($PXE_L2, 'PXE_L2');";
    // echo "($PXE_L3, 'PXE_L3');";
    // echo "($PXE_L4, 'PXE_L4');";
    // echo "($PXE_L5, 'PXE_L5');";
    // echo "($PXE_L6, 'PXE_L6');";
    // echo "($PXE_L7, 'PXE_L7');";
    // echo "($PXE_L8, 'PXE_L8');";
    // echo "($PXE_LH, 'PXE_LH');";
    // echo "($PXE_LHH, 'PXE_LHH');";
    // echo "($PXE_S1, 'PXE_S1');";
    // echo "($PXE_SH, 'PXE_SH');";
    // echo "($PGRKNOTE3, 'PGRKNOTE3');";
    // echo "($PENGNOTE3, 'PENGNOTE3');";
    // echo "($PSENDSMS, 'PSENDSMS');";
    // echo "($PSENDEMAIL, 'PSENDEMAIL');";
    // echo "($PCOTTAGE, 'PCOTTAGE');";
    // echo "($PSEMIFLOOR, 'PSEMIFLOOR');";
    // echo "($PSTUDENT, 'PSTUDENT');";
    // echo "($PSHOWONLYONSITE, 'PSHOWONLYONSITE');";
    // echo "($PLUXURY, 'PLUXURY');";
    // echo "($PINVESTMENT, 'PINVESTMENT');";
    // echo "($PPRESERVED, 'PPRESERVED');";
    // echo "($PNEOCLASSICAL, 'PNEOCLASSICAL');";
    // echo "($PPETSALLOWED, 'PPETSALLOWED');";
    // echo "($PUNDERFLOORHEATING, 'PUNDERFLOORHEATING');";
    // echo "($PINTERNALSTAIRCASE, 'PINTERNALSTAIRCASE');";
    // echo "($PNIGHTPOWER, 'PNIGHTPOWER');";
    // echo "($PPOWERTYPEID, 'PPOWERTYPEID');";
    // echo "($PLOADINGRAMP, 'PLOADINGRAMP');";
    // echo "($PFALSECEILING, 'PFALSECEILING');";
    // echo "($PFREIGHTELEVATOR, 'PFREIGHTELEVATOR');";
    // echo "($PFULLYEQUIPPED, 'PFULLYEQUIPPED');";
    // echo "($PCABLETV, 'PCABLETV');";
    // echo "($PMANAGEMENT, 'PMANAGEMENT');";
    // echo "($PSIZITISIMI, 'PSIZITISIMI');";
    // echo "($PHASAPOTH, 'PHASAPOTH');";
    // echo "($PAPOTHMETR, 'PAPOTHMETR');";
    // echo "($PEPAGIPSOS, 'PEPAGIPSOS');";
    // echo "($PKALODIOSI, 'PKALODIOSI');";
    // echo "($PANELKpropertyOS, 'PANELKpropertyOS');";
    // echo "($PPESTNET, 'PPESTNET');";
    // echo "($PPAINTED, 'PPAINTED');";
    // echo "($PPENTHOUSE, 'PPENTHOUSE');";
    // echo "($PFACADE, 'PFACADE');";
    // echo "($PFOTEINO, 'PFOTEINO');";
    // echo "($PRESIDENTIAL, 'PRESIDENTIAL');";
    // echo "($PCOMMERCIAL, 'PCOMMERCIAL');";
    // echo "($PAGRICULTURAL, 'PAGRICULTURAL');";
    // echo "($PWITHINCITYPLAN, 'PWITHINCITYPLAN');";
    // echo "($PHASPARKING, 'PHASPARKING');";
    // echo "($PSHOPWINDOWLENGTH, 'PSHOPWINDOWLENGTH');";
    // echo "($PCOMMONEXPENCES, 'PCOMMONEXPENCES');";
    // echo "($PMASTERBEDROOM, 'PMASTERBEDROOM');";
    // echo "($PINTERIOR, 'PINTERIOR');";
    // echo "($PSLOPEID, 'PSLOPEID');";
    // echo "($PCOMMONEXPENCESENGAGE, 'PCOMMONEXPENCESENGAGE');";
    // echo "($PJOINERYID, 'PJOINERYID');";
    // echo "($PSPGNOAGENTFEE, 'PSPGNOAGENTFEE');";
    // echo "($PTOURISTRENTAL, 'PTOURISTRENTAL');";
    // echo "($PGARDENTM, 'PGARDENTM');";
    // echo "($PTERRACETM, 'PTERRACETM');";
    // echo "($PPRASIA, 'PPRASIA');";
    // echo "($PPRASIATM, 'PPRASIATM');";
    // echo "($PLINKSITE9, 'PLINKSITE9');";
    // echo "($PLINKSITE10, 'PLINKSITE10');";
    // echo "($PLINKSITE11, 'PLINKSITE11');";
    // echo "($PLINKSITE12, 'PLINKSITE12');";
    // echo "($PLINKSITE13, 'PLINKSITE13');";
    // echo "($PLINKSITE14, 'PLINKSITE14');";
    // echo "($PLINKSITE15, 'PLINKSITE15');";
    // echo "($PLINKSITE16, 'PLINKSITE16');";
    // echo "($PKEY, 'PKEY');";
    // echo "($POPENSPACE, 'POPENSPACE');";
    // echo "($PDOORTV, 'PDOORTV');";
    // echo "($PPILOTI, 'PPILOTI');";
    // echo "($PGOLDENVISA, 'PGOLDENVISA');";
    // echo "($PCOMSTATUSID, 'PCOMSTATUSID');";
    // echo "($PCOMUSERID1, 'PCOMUSERID1');";
    // echo "($PCOMCONTACTID1, 'PCOMCONTACTID1');";
    // echo "($PCOMCONTACTCHECK1, 'PCOMCONTACTCHECK1');";
    // echo "($PCOMPERCENT1, 'PCOMPERCENT1');";
    // echo "($PCOMAMOUNT1, 'PCOMAMOUNT1');";
    // echo "($PCOMUSERID2, 'PCOMUSERID2');";
    // echo "($PCOMCONTACTID2, 'PCOMCONTACTID2');";
    // echo "($PCOMCONTACTCHECK2, 'PCOMCONTACTCHECK2');";
    // echo "($PCOMPERCENT2, 'PCOMPERCENT2');";
    // echo "($PCOMAMOUNT2, 'PCOMAMOUNT2');";
    // echo "($PCOMUSERID3, 'PCOMUSERID3');";
    // echo "($PCOMCONTACTID3, 'PCOMCONTACTID3');";
    // echo "($PCOMCONTACTCHECK3, 'PCOMCONTACTCHECK3');";
    // echo "($PCOMPERCENT3, 'PCOMPERCENT3');";
    // echo "($PCOMAMOUNT3, 'PCOMAMOUNT3');";
    // echo "($PCOMUSERID4, 'PCOMUSERID4');";
    // echo "($PCOMCONTACTID4, 'PCOMCONTACTID4');";
    // echo "($PCOMCONTACTCHECK4, 'PCOMCONTACTCHECK4');";
    // echo "($PCOMPERCENT4, 'PCOMPERCENT4');";
    // echo "($PCOMAMOUNT4, 'PCOMAMOUNT4');";
    // echo "($PPLUSFPA, 'PPLUSFPA');";
    // echo "($PFROMAIRPORT, 'PFROMAIRPORT');";
    // echo "($PFROMSEAPORT, 'PFROMSEAPORT');";
    // echo "($PFROMHOSPITAL, 'PFROMHOSPITAL');";
    // echo "($PCANBESPLIT, 'PCANBESPLIT');";
    // echo "($POIKCOMMERCIAL, 'POIKCOMMERCIAL');";
    // echo "($POIKISMOSID, 'POIKISMOSID');";
    // echo "($PSPGLISTINGID, 'PSPGLISTINGID');";
    // echo "($PAIRBNB, 'PAIRBNB');";
    // echo "($PVIEW360URL, 'PVIEW360URL');";
    // echo "($DEFAULTFOLDER, 'DEFAULTFOLDER');";
    // echo "($POROFOSHO, 'POROFOSHO');";
    // echo "($POROFOSHY, 'POROFOSHY');";
    // echo "($POROFOSYI, 'POROFOSYI');";
    // echo "($PWEBPAGEURL, 'PWEBPAGEURL');";
    // echo "($PACCESSAMEA, 'PACCESSAMEA');";
    // echo "($PWEBSELECTEDPROPERTIES, 'PWEBSELECTEDPROPERTIES');";
    // echo "($PVIRTUALTOURURL, 'PVIRTUALTOURURL');";
    // echo "($PSEMIBASEMENT, 'PSEMIBASEMENT');";
    // echo "($PPLOTLISTINGID, 'PPLOTLISTINGID');";
    // echo "($PBANKPROVIDER, 'PBANKPROVIDER');";
    // echo "($PBANKAVCHECKED, 'PBANKAVCHECKED');";
    // echo "($PBANKLEGALCHECK, 'PBANKLEGALCHECK');";
    // echo "($PBANKTECHCHECK, 'PBANKTECHCHECK');";
    // echo "($PBANKASSETSTATUS, 'PBANKASSETSTATUS');";
    // echo "($PPAYMENTID, 'PPAYMENTID');";
    // echo "($CATTYPEID, 'CATTYPEID');";
    // echo "($POLITIS, 'POLITIS');";
    // echo "($MESITIKO1, 'MESITIKO1');";
    // echo "($MESITIKO2, 'MESITIKO2');";
    // echo "($XRISI1, 'XRISI1');";
    // echo "($XRISI2, 'XRISI2');";
    // echo "($EIDOSAKIN1, 'EIDOSAKIN1');";
    // echo "($EIDOSAKIN2, 'EIDOSAKIN2');";
    // echo "($PERIOXI1, 'PERIOXI1');";
    // echo "($PERIOXI2, 'PERIOXI2');";
    // echo "($THESI1, 'THESI1');";
    // echo "($THESI2, 'THESI2');";
    // echo "($THERMANSI1, 'THERMANSI1');";
    // echo "($THERMANSI2, 'THERMANSI2');";
    // echo "($SXEDIOPOL1, 'SXEDIOPOL1');";
    // echo "($SXEDIOPOL2, 'SXEDIOPOL2');";
    // echo "($XRISIGIS1, 'XRISIGIS1');";
    // echo "($XRISIGIS2, 'XRISIGIS2');";
    // echo "($PROSVASI1, 'PROSVASI1');";
    // echo "($PROSVASI2, 'PROSVASI2');";
    // echo "($APOXET1, 'APOXET1');";
    // echo "($APOXET2, 'APOXET2');";
    // echo "($NOMOS1, 'NOMOS1');";
    // echo "($NOMOS2, 'NOMOS2');";
    // echo "($DIMOS1, 'DIMOS1');";
    // echo "($DIMOS2, 'DIMOS2');";
    // echo "($DIMDIAM1, 'DIMDIAM1');";
    // echo "($DIMDIAM2, 'DIMDIAM2');";
    // echo "($BACUSTOM11, 'BACUSTOM11');";
    // echo "($BACUSTOM12, 'BACUSTOM12');";
    // echo "($BACUSTOM21, 'BACUSTOM21');";
    // echo "($BACUSTOM22, 'BACUSTOM22');";
    // echo "($BACUSTOM31, 'BACUSTOM31');";
    // echo "($BACUSTOM32, 'BACUSTOM32');";
    // echo "($BACUSTOM41, 'BACUSTOM41');";
    // echo "($BACUSTOM42, 'BACUSTOM42');";
    // echo "($BACUSTOM51, 'BACUSTOM51');";
    // echo "($BACUSTOM52, 'BACUSTOM52');";
    // echo "($KATASTASI1, 'KATASTASI1');";
    // echo "($KATASTASI2, 'KATASTASI2');";
    // echo "($ENERCLASS1, 'ENERCLASS1');";
    // echo "($ENERCLASS2, 'ENERCLASS2');";
    // echo "($FLOORTYPE1, 'FLOORTYPE1');";
    // echo "($FLOORTYPE2, 'FLOORTYPE2');";
    // echo "($VIEW1, 'VIEW1');";
    // echo "($VIEW2, 'VIEW2');";
    // echo "($ORIENT1, 'ORIENT1');";
    // echo "($ORIENT2, 'ORIENT2');";
    // echo "($JOINERY1, 'JOINERY1');";
    // echo "($JOINERY2, 'JOINERY2');";
    // echo "($APODOSI, 'APODOSI');";
    // echo "($PICTFILE1, 'PICTFILE1');";
    // echo "($PHOTOGRK1, 'PHOTOGRK1');";
    // echo "($PHOTOENG1, 'PHOTOENG1');";
    // echo "($PICTFILE2, 'PICTFILE2');";
    // echo "($PHOTOGRK2, 'PHOTOGRK2');";
    // echo "($PHOTOENG2, 'PHOTOENG2');";
    // echo "($PICTFILE3, 'PICTFILE3');";
    // echo "($PHOTOGRK3, 'PHOTOGRK3');";
    // echo "($PHOTOENG3, 'PHOTOENG3');";
    // echo "($PICTFILE4, 'PICTFILE4');";
    // echo "($PHOTOGRK4, 'PHOTOGRK4');";
    // echo "($PHOTOENG4, 'PHOTOENG4');";
    // echo "($PICTFILE5, 'PICTFILE5');";
    // echo "($PHOTOGRK5, 'PHOTOGRK5');";
    // echo "($PHOTOENG5, 'PHOTOENG5');";
    // echo "($PICTFILE6, 'PICTFILE6');";
    // echo "($PHOTOGRK6, 'PHOTOGRK6');";
    // echo "($PHOTOENG6, 'PHOTOENG6');";
    // echo "($PICTFILE7, 'PICTFILE7');";
    // echo "($PHOTOGRK7, 'PHOTOGRK7');";
    // echo "($PHOTOENG7, 'PHOTOENG7');";
    // echo "($PICTFILE8, 'PICTFILE8');";
    // echo "($PHOTOGRK8, 'PHOTOGRK8');";
    // echo "($PHOTOENG8, 'PHOTOENG8');";
    // echo "($PICTFILE9, 'PICTFILE9');";
    // echo "($PHOTOGRK9, 'PHOTOGRK9');";
    // echo "($PHOTOENG9, 'PHOTOENG9');";
    // echo "($PICTFILE10, 'PICTFILE10');";
    // echo "($PHOTOGRK10, 'PHOTOGRK10');";
    // echo "($PHOTOENG10, 'PHOTOENG10');";
    // echo "($PICTFILE11, 'PICTFILE11');";
    // echo "($PHOTOGRK11, 'PHOTOGRK11');";
    // echo "($PHOTOENG11, 'PHOTOENG11');";
    // echo "($PICTFILE12, 'PICTFILE12');";
    // echo "($PHOTOGRK12, 'PHOTOGRK12');";
    // echo "($PHOTOENG12, 'PHOTOENG12');";
    // echo "($PICTFILE13, 'PICTFILE13');";
    // echo "($PHOTOGRK13, 'PHOTOGRK13');";
    // echo "($PHOTOENG13, 'PHOTOENG13');";
    // echo "($PICTFILE14, 'PICTFILE14');";
    // echo "($PHOTOGRK14, 'PHOTOGRK14');";
    // echo "($PHOTOENG14, 'PHOTOENG14');";
    // echo "($PICTFILE15, 'PICTFILE15');";
    // echo "($PHOTOGRK15, 'PHOTOGRK15');";
    // echo "($PHOTOENG15, 'PHOTOENG15');";
    // echo "($PICTFILE16, 'PICTFILE16');";
    // echo "($PHOTOGRK16, 'PHOTOGRK16');";
    // echo "($PHOTOENG16, 'PHOTOENG16');";
    // echo "($PICTFILE17, 'PICTFILE17');";
    // echo "($PHOTOGRK17, 'PHOTOGRK17');";
    // echo "($PHOTOENG17, 'PHOTOENG17');";
    // echo "($PICTFILE18, 'PICTFILE18');";
    // echo "($PHOTOGRK18, 'PHOTOGRK18');";
    // echo "($PHOTOENG18, 'PHOTOENG18');";
    // echo "($PICTFILE19, 'PICTFILE19');";
    // echo "($PHOTOGRK19, 'PHOTOGRK19');";
    // echo "($PHOTOENG19, 'PHOTOENG19');";
    // echo "($PICTFILE20, 'PICTFILE20');";
    // echo "($PHOTOGRK20, 'PHOTOGRK20');";
    // echo "($PHOTOENG20, 'PHOTOENG20');";
    // echo "($PICTFILE21, 'PICTFILE21');";
    // echo "($PHOTOGRK21, 'PHOTOGRK21');";
    // echo "($PHOTOENG21, 'PHOTOENG21');";
    // echo "($PICTFILE22, 'PICTFILE22');";
    // echo "($PHOTOGRK22, 'PHOTOGRK22');";
    // echo "($PHOTOENG22, 'PHOTOENG22');";
    // echo "($PICTFILE23, 'PICTFILE23');";
    // echo "($PHOTOGRK23, 'PHOTOGRK23');";
    // echo "($PHOTOENG23, 'PHOTOENG23');";
    // echo "($PICTFILE24, 'PICTFILE24');";
    // echo "($PHOTOGRK24, 'PHOTOGRK24');";
    // echo "($PHOTOENG24, 'PHOTOENG24');";
    // echo "($PICTFILE25, 'PICTFILE25');";
    // echo "($PHOTOGRK25, 'PHOTOGRK25');";
    // echo "($PHOTOENG25, 'PHOTOENG25');";
    // echo "($PICTFILE26, 'PICTFILE26');";
    // echo "($PHOTOGRK26, 'PHOTOGRK26');";
    // echo "($PHOTOENG26, 'PHOTOENG26');";
    // echo "($PICTFILE27, 'PICTFILE27');";
    // echo "($PHOTOGRK27, 'PHOTOGRK27');";
    // echo "($PHOTOENG27, 'PHOTOENG27');";
    // echo "($PICTFILE28, 'PICTFILE28');";
    // echo "($PHOTOGRK28, 'PHOTOGRK28');";
    // echo "($PHOTOENG28, 'PHOTOENG28');";
    // echo "($PICTFILE29, 'PICTFILE29');";
    // echo "($PHOTOGRK29, 'PHOTOGRK29');";
    // echo "($PHOTOENG29, 'PHOTOENG29');";
    // echo "($PICTFILE30, 'PICTFILE30');";
    // echo "($PHOTOGRK30, 'PHOTOGRK30');";
    // echo "($PHOTOENG30, 'PHOTOENG30');";
    // echo "($PHOTOFILES, 'PHOTOFILES');";
    // echo "($CATEGCODES, 'CATEGCODES');";
    // echo "($LASTPHUPDT, 'LASTPHUPDT');";
    // echo "($LASTPHTIME, 'LASTPHTIME');";
    // echo "($LASTPHUSER, 'LASTPHUSER');";
    debug($PID, '$PID');
    debug($PID_DISPLAY, '$PID_DISPLAY');
    debug($PDIATH, '$PDIATH');
    debug($PMESITIKO, '$PMESITIKO');
    debug($PSALESMAN, '$PSALESMAN');
    debug($PAGOROPOL, '$PAGOROPOL');
    debug($PENOIKIASI, '$PENOIKIASI');
    debug($PANTIPAR, '$PANTIPAR');
    debug($PMISTHCAT, '$PMISTHCAT');
    debug($PAKINCAT, '$PAKINCAT');
    debug($PPERIOXI, '$PPERIOXI');
    debug($PADD2, '$PADD2');
    debug($PADD3, '$PADD3');
    debug($PDEMOHRS, '$PDEMOHRS');
    debug($PTOTEPIOIK, '$PTOTEPIOIK');
    debug($PKATASDATE, '$PKATASDATE');
    debug($PANAKDATE, '$PANAKDATE');
    debug($POROFOS, '$POROFOS');
    debug($PBEDROOM, '$PBEDROOM');
    debug($PBATHROOM, '$PBATHROOM');
    debug($PTOILET, '$PTOILET');
    debug($PTZAKI, '$PTZAKI');
    debug($POFFICE, '$POFFICE');
    debug($PSERVROOM, '$PSERVROOM');
    debug($PAPOTHIKI, '$PAPOTHIKI');
    debug($PGARAGE, '$PGARAGE');
    debug($PPARKING, '$PPARKING');
    debug($PFLOORS, '$PFLOORS');
    debug($PBASEMENTS, '$PBASEMENTS');
    debug($PTHERMANSI, '$PTHERMANSI');
    debug($PAIRCOND, '$PAIRCOND');
    debug($PPHONES, '$PPHONES');
    debug($PASKPRICE, '$PASKPRICE');
    debug($PASKCURR, '$PASKCURR');
    debug($PPOS, '$PPOS');
    debug($PSTTYPE, '$PSTTYPE');
    debug($PFROMSEA, '$PFROMSEA');
    debug($PFROMVIL, '$PFROMVIL');
    debug($PFROMCITY, '$PFROMCITY');
    debug($PAPOXET, '$PAPOXET');
    debug($PWATER, '$PWATER');
    debug($PPOWER, '$PPOWER');
    debug($PPOOL, '$PPOOL');
    debug($PBAID1, '$PBAID1');
    debug($PBAID2, '$PBAID2');
    debug($PBAID3, '$PBAID3');
    debug($PBAID4, '$PBAID4');
    debug($PBAID5, '$PBAID5');
    debug($PCHECK1, '$PCHECK1');
    debug($PCHECK2, '$PCHECK2');
    debug($PCHECK3, '$PCHECK3');
    debug($PCHECK4, '$PCHECK4');
    debug($PCHECK5, '$PCHECK5');
    debug($PNUMBER1, '$PNUMBER1');
    debug($PNUMBER2, '$PNUMBER2');
    debug($PNUMBER3, '$PNUMBER3');
    debug($PNUMBER4, '$PNUMBER4');
    debug($PNUMBER5, '$PNUMBER5');
    debug($PSTRING1, '$PSTRING1');
    debug($PSTRING2, '$PSTRING2');
    debug($PSTRING3, '$PSTRING3');
    debug($PSTRING4, '$PSTRING4');
    debug($PSTRING5, '$PSTRING5');
    debug($PMONEY1, '$PMONEY1');
    debug($PMONEY2, '$PMONEY2');
    debug($PMONEY3, '$PMONEY3');
    debug($PMONEY4, '$PMONEY4');
    debug($PMONEY5, '$PMONEY5');
    debug($PCODE, '$PCODE');
    debug($PSYNTDOM, '$PSYNTDOM');
    debug($PSYNTKAL, '$PSYNTKAL');
    debug($PANTPRC1, '$PANTPRC1');
    debug($PANTPRC2, '$PANTPRC2');
    debug($PPLATOS, '$PPLATOS');
    debug($PPROSOPS, '$PPROSOPS');
    debug($PBATHOS, '$PBATHOS');
    debug($POIKKAT, '$POIKKAT');
    debug($POIKTOUR, '$POIKTOUR');
    debug($PEPIPSOS, '$PEPIPSOS');
    debug($PXRGISID, '$PXRGISID');
    debug($PANTPRICE, '$PANTPRICE');
    debug($PANTCURR, '$PANTCURR');
    debug($PAGGELIA, '$PAGGELIA');
    debug($PARDIAM, '$PARDIAM');
    debug($PDATEFREE, '$PDATEFREE');
    debug($POIKOROF, '$POIKOROF');
    debug($PSXDPOLID, '$PSXDPOLID');
    debug($PISOGEIO, '$PISOGEIO');
    debug($PPATARI, '$PPATARI');
    debug($POROFENA, '$POROFENA');
    debug($POROFDIO, '$POROFDIO');
    debug($PYPOGENA, '$PYPOGENA');
    debug($PYPOGDIO, '$PYPOGDIO');
    debug($PREQAIR, '$PREQAIR');
    debug($PPRCAIR, '$PPRCAIR');
    debug($POROF03, '$POROF03');
    debug($POROF04, '$POROF04');
    debug($POROF05, '$POROF05');
    debug($POROF06, '$POROF06');
    debug($POROF07, '$POROF07');
    debug($POROF08, '$POROF08');
    debug($POROF09, '$POROF09');
    debug($POROF10, '$POROF10');
    debug($PSOFITA, '$PSOFITA');
    debug($PDOMA, '$PDOMA');
    debug($PMISTHOM, '$PMISTHOM');
    debug($PPRCMISTH, '$PPRCMISTH');
    debug($PHMIYPAITH, '$PHMIYPAITH');
    debug($PENTTYPE, '$PENTTYPE');
    debug($LASTUPDATE, '$LASTUPDATE');
    debug($LASTUSER, '$LASTUSER');
    debug($LASTTIME, '$LASTTIME');
    debug($PYPOG03, '$PYPOG03');
    debug($PYPOG04, '$PYPOG04');
    debug($PHROOMS, '$PHROOMS');
    debug($PHBEDS, '$PHBEDS');
    debug($PHBUNGALOW, '$PHBUNGALOW');
    debug($PHSUITES, '$PHSUITES');
    debug($PHSINGLES, '$PHSINGLES');
    debug($PHDOUBLES, '$PHDOUBLES');
    debug($PHDAIRPORT, '$PHDAIRPORT');
    debug($PHDBEACH, '$PHDBEACH');
    debug($PHDPORT, '$PHDPORT');
    debug($PHDTOWN, '$PHDTOWN');
    debug($PHOPERFROM, '$PHOPERFROM');
    debug($PHOPERUPTO, '$PHOPERUPTO');
    debug($PHAIRCOND, '$PHAIRCOND');
    debug($PHRESTAURA, '$PHRESTAURA');
    debug($PHOUTPOOL, '$PHOUTPOOL');
    debug($PHCONFCENT, '$PHCONFCENT');
    debug($PHPARKING, '$PHPARKING');
    debug($PHCLUB, '$PHCLUB');
    debug($PHEXERROOM, '$PHEXERROOM');
    debug($PHBAR, '$PHBAR');
    debug($PHMEMO, '$PHMEMO');
    debug($PINTERNET, '$PINTERNET');
    debug($PGRKTITLE, '$PGRKTITLE');
    debug($PGRKNOTE1, '$PGRKNOTE1');
    debug($PGRKNOTE2, '$PGRKNOTE2');
    debug($PGRKPRAPO, '$PGRKPRAPO');
    debug($PGRKPREOS, '$PGRKPREOS');
    debug($PGRKCURID, '$PGRKCURID');
    debug($PENGTITLE, '$PENGTITLE');
    debug($PENGNOTE1, '$PENGNOTE1');
    debug($PENGNOTE2, '$PENGNOTE2');
    debug($PENGPRAPO, '$PENGPRAPO');
    debug($PENGPREOS, '$PENGPREOS');
    debug($PENGCURID, '$PENGCURID');
    debug($PNOMOSID, '$PNOMOSID');
    debug($PDIMOSID, '$PDIMOSID');
    debug($PDDIAMID, '$PDDIAMID');
    debug($PTOPONYM, '$PTOPONYM');
    debug($PKATHKOUZ, '$PKATHKOUZ');
    debug($PVERANTES, '$PVERANTES');
    debug($PPROSAKIN, '$PPROSAKIN');
    debug($PLINKSITE2, '$PLINKSITE2');
    debug($PLINKSITE3, '$PLINKSITE3');
    debug($PKATASTASI, '$PKATASTASI');
    debug($PFROMMETRO, '$PFROMMETRO');
    debug($PDBLGLASS, '$PDBLGLASS');
    debug($PJACUZZI, '$PJACUZZI');
    debug($PBOILER, '$PBOILER');
    debug($PNATGAS, '$PNATGAS');
    debug($PSATDISH, '$PSATDISH');
    debug($PPLAYROOM, '$PPLAYROOM');
    debug($PELEVATOR, '$PELEVATOR');
    debug($PBARBECUE, '$PBARBECUE');
    debug($PTERRACE, '$PTERRACE');
    debug($PATTIC, '$PATTIC');
    debug($PVERANTA, '$PVERANTA');
    debug($PGARDEN, '$PGARDEN');
    debug($PFURNISHED, '$PFURNISHED');
    debug($PALARM, '$PALARM');
    debug($PCORNER, '$PCORNER');
    debug($PBRIGHT, '$PBRIGHT');
    debug($PTENTS, '$PTENTS');
    debug($PSECDOOR, '$PSECDOOR');
    debug($PSOLARHEAT, '$PSOLARHEAT');
    debug($PENCLASSID, '$PENCLASSID');
    debug($PFLOTYPEID, '$PFLOTYPEID');
    debug($PVIEWID, '$PVIEWID');
    debug($PORIENTID, '$PORIENTID');
    debug($PVIDEOURL, '$PVIDEOURL');
    debug($PLongitude2, '$PLongitude2');
    debug($PLatitude2, '$PLatitude2');
    debug($POROFOSNA, '$POROFOSNA');
    debug($PLADEFCOMM, '$PLADEFCOMM');
    debug($PXE_L0, '$PXE_L0');
    debug($PXE_L1, '$PXE_L1');
    debug($PXE_L2, '$PXE_L2');
    debug($PXE_L3, '$PXE_L3');
    debug($PXE_L4, '$PXE_L4');
    debug($PXE_L5, '$PXE_L5');
    debug($PXE_L6, '$PXE_L6');
    debug($PXE_L7, '$PXE_L7');
    debug($PXE_L8, '$PXE_L8');
    debug($PXE_LH, '$PXE_LH');
    debug($PXE_LHH, '$PXE_LHH');
    debug($PXE_S1, '$PXE_S1');
    debug($PXE_SH, '$PXE_SH');
    debug($PGRKNOTE3, '$PGRKNOTE3');
    debug($PENGNOTE3, '$PENGNOTE3');
    debug($PSENDSMS, '$PSENDSMS');
    debug($PSENDEMAIL, '$PSENDEMAIL');
    debug($PCOTTAGE, '$PCOTTAGE');
    debug($PSEMIFLOOR, '$PSEMIFLOOR');
    debug($PSTUDENT, '$PSTUDENT');
    debug($PSHOWONLYONSITE, '$PSHOWONLYONSITE');
    debug($PLUXURY, '$PLUXURY');
    debug($PINVESTMENT, '$PINVESTMENT');
    debug($PPRESERVED, '$PPRESERVED');
    debug($PNEOCLASSICAL, '$PNEOCLASSICAL');
    debug($PPETSALLOWED, '$PPETSALLOWED');
    debug($PUNDERFLOORHEATING, '$PUNDERFLOORHEATING');
    debug($PINTERNALSTAIRCASE, '$PINTERNALSTAIRCASE');
    debug($PNIGHTPOWER, '$PNIGHTPOWER');
    debug($PPOWERTYPEID, '$PPOWERTYPEID');
    debug($PLOADINGRAMP, '$PLOADINGRAMP');
    debug($PFALSECEILING, '$PFALSECEILING');
    debug($PFREIGHTELEVATOR, '$PFREIGHTELEVATOR');
    debug($PFULLYEQUIPPED, '$PFULLYEQUIPPED');
    debug($PCABLETV, '$PCABLETV');
    debug($PMANAGEMENT, '$PMANAGEMENT');
    debug($PSIZITISIMI, '$PSIZITISIMI');
    debug($PHASAPOTH, '$PHASAPOTH');
    debug($PAPOTHMETR, '$PAPOTHMETR');
    debug($PEPAGIPSOS, '$PEPAGIPSOS');
    debug($PKALODIOSI, '$PKALODIOSI');
    debug($PANELKpropertyOS, '$PANELKpropertyOS');
    debug($PPESTNET, '$PPESTNET');
    debug($PPAINTED, '$PPAINTED');
    debug($PPENTHOUSE, '$PPENTHOUSE');
    debug($PFACADE, '$PFACADE');
    debug($PFOTEINO, '$PFOTEINO');
    debug($PRESIDENTIAL, '$PRESIDENTIAL');
    debug($PCOMMERCIAL, '$PCOMMERCIAL');
    debug($PAGRICULTURAL, '$PAGRICULTURAL');
    debug($PWITHINCITYPLAN, '$PWITHINCITYPLAN');
    debug($PHASPARKING, '$PHASPARKING');
    debug($PSHOPWINDOWLENGTH, '$PSHOPWINDOWLENGTH');
    debug($PCOMMONEXPENCES, '$PCOMMONEXPENCES');
    debug($PMASTERBEDROOM, '$PMASTERBEDROOM');
    debug($PINTERIOR, '$PINTERIOR');
    debug($PSLOPEID, '$PSLOPEID');
    debug($PCOMMONEXPENCESENGAGE, '$PCOMMONEXPENCESENGAGE');
    debug($PJOINERYID, '$PJOINERYID');
    debug($PSPGNOAGENTFEE, '$PSPGNOAGENTFEE');
    debug($PTOURISTRENTAL, '$PTOURISTRENTAL');
    debug($PGARDENTM, '$PGARDENTM');
    debug($PTERRACETM, '$PTERRACETM');
    debug($PPRASIA, '$PPRASIA');
    debug($PPRASIATM, '$PPRASIATM');
    debug($PLINKSITE9, '$PLINKSITE9');
    debug($PLINKSITE10, '$PLINKSITE10');
    debug($PLINKSITE11, '$PLINKSITE11');
    debug($PLINKSITE12, '$PLINKSITE12');
    debug($PLINKSITE13, '$PLINKSITE13');
    debug($PLINKSITE14, '$PLINKSITE14');
    debug($PLINKSITE15, '$PLINKSITE15');
    debug($PLINKSITE16, '$PLINKSITE16');
    debug($PKEY, '$PKEY');
    debug($POPENSPACE, '$POPENSPACE');
    debug($PDOORTV, '$PDOORTV');
    debug($PPILOTI, '$PPILOTI');
    debug($PGOLDENVISA, '$PGOLDENVISA');
    debug($PCOMSTATUSID, '$PCOMSTATUSID');
    debug($PCOMUSERID1, '$PCOMUSERID1');
    debug($PCOMCONTACTID1, '$PCOMCONTACTID1');
    debug($PCOMCONTACTCHECK1, '$PCOMCONTACTCHECK1');
    debug($PCOMPERCENT1, '$PCOMPERCENT1');
    debug($PCOMAMOUNT1, '$PCOMAMOUNT1');
    debug($PCOMUSERID2, '$PCOMUSERID2');
    debug($PCOMCONTACTID2, '$PCOMCONTACTID2');
    debug($PCOMCONTACTCHECK2, '$PCOMCONTACTCHECK2');
    debug($PCOMPERCENT2, '$PCOMPERCENT2');
    debug($PCOMAMOUNT2, '$PCOMAMOUNT2');
    debug($PCOMUSERID3, '$PCOMUSERID3');
    debug($PCOMCONTACTID3, '$PCOMCONTACTID3');
    debug($PCOMCONTACTCHECK3, '$PCOMCONTACTCHECK3');
    debug($PCOMPERCENT3, '$PCOMPERCENT3');
    debug($PCOMAMOUNT3, '$PCOMAMOUNT3');
    debug($PCOMUSERID4, '$PCOMUSERID4');
    debug($PCOMCONTACTID4, '$PCOMCONTACTID4');
    debug($PCOMCONTACTCHECK4, '$PCOMCONTACTCHECK4');
    debug($PCOMPERCENT4, '$PCOMPERCENT4');
    debug($PCOMAMOUNT4, '$PCOMAMOUNT4');
    debug($PPLUSFPA, '$PPLUSFPA');
    debug($PFROMAIRPORT, '$PFROMAIRPORT');
    debug($PFROMSEAPORT, '$PFROMSEAPORT');
    debug($PFROMHOSPITAL, '$PFROMHOSPITAL');
    debug($PCANBESPLIT, '$PCANBESPLIT');
    debug($POIKCOMMERCIAL, '$POIKCOMMERCIAL');
    debug($POIKISMOSID, '$POIKISMOSID');
    debug($PSPGLISTINGID, '$PSPGLISTINGID');
    debug($PAIRBNB, '$PAIRBNB');
    debug($PVIEW360URL, '$PVIEW360URL');
    debug($DEFAULTFOLDER, '$DEFAULTFOLDER');
    debug($POROFOSHO, '$POROFOSHO');
    debug($POROFOSHY, '$POROFOSHY');
    debug($POROFOSYI, '$POROFOSYI');
    debug($PWEBPAGEURL, '$PWEBPAGEURL');
    debug($PACCESSAMEA, '$PACCESSAMEA');
    debug($PWEBSELECTEDPROPERTIES, '$PWEBSELECTEDPROPERTIES');
    debug($PVIRTUALTOURURL, '$PVIRTUALTOURURL');
    debug($PSEMIBASEMENT, '$PSEMIBASEMENT');
    debug($PPLOTLISTINGID, '$PPLOTLISTINGID');
    debug($PBANKPROVIDER, '$PBANKPROVIDER');
    debug($PBANKAVCHECKED, '$PBANKAVCHECKED');
    debug($PBANKLEGALCHECK, '$PBANKLEGALCHECK');
    debug($PBANKTECHCHECK, '$PBANKTECHCHECK');
    debug($PBANKASSETSTATUS, '$PBANKASSETSTATUS');
    debug($PPAYMENTID, '$PPAYMENTID');
    debug($CATTYPEID, '$CATTYPEID');
    debug($POLITIS, '$POLITIS');
    debug($MESITIKO1, '$MESITIKO1');
    debug($MESITIKO2, '$MESITIKO2');
    debug($XRISI1, '$XRISI1');
    debug($XRISI2, '$XRISI2');
    debug($EIDOSAKIN1, '$EIDOSAKIN1');
    debug($EIDOSAKIN2, '$EIDOSAKIN2');
    debug($PERIOXI1, '$PERIOXI1');
    debug($PERIOXI2, '$PERIOXI2');
    debug($THESI1, '$THESI1');
    debug($THESI2, '$THESI2');
    debug($THERMANSI1, '$THERMANSI1');
    debug($THERMANSI2, '$THERMANSI2');
    debug($SXEDIOPOL1, '$SXEDIOPOL1');
    debug($SXEDIOPOL2, '$SXEDIOPOL2');
    debug($XRISIGIS1, '$XRISIGIS1');
    debug($XRISIGIS2, '$XRISIGIS2');
    debug($PROSVASI1, '$PROSVASI1');
    debug($PROSVASI2, '$PROSVASI2');
    debug($APOXET1, '$APOXET1');
    debug($APOXET2, '$APOXET2');
    debug($NOMOS1, '$NOMOS1');
    debug($NOMOS2, '$NOMOS2');
    debug($DIMOS1, '$DIMOS1');
    debug($DIMOS2, '$DIMOS2');
    debug($DIMDIAM1, '$DIMDIAM1');
    debug($DIMDIAM2, '$DIMDIAM2');
    debug($BACUSTOM11, '$BACUSTOM11');
    debug($BACUSTOM12, '$BACUSTOM12');
    debug($BACUSTOM21, '$BACUSTOM21');
    debug($BACUSTOM22, '$BACUSTOM22');
    debug($BACUSTOM31, '$BACUSTOM31');
    debug($BACUSTOM32, '$BACUSTOM32');
    debug($BACUSTOM41, '$BACUSTOM41');
    debug($BACUSTOM42, '$BACUSTOM42');
    debug($BACUSTOM51, '$BACUSTOM51');
    debug($BACUSTOM52, '$BACUSTOM52');
    debug($KATASTASI1, '$KATASTASI1');
    debug($KATASTASI2, '$KATASTASI2');
    debug($ENERCLASS1, '$ENERCLASS1');
    debug($ENERCLASS2, '$ENERCLASS2');
    debug($FLOORTYPE1, '$FLOORTYPE1');
    debug($FLOORTYPE2, '$FLOORTYPE2');
    debug($VIEW1, '$VIEW1');
    debug($VIEW2, '$VIEW2');
    debug($ORIENT1, '$ORIENT1');
    debug($ORIENT2, '$ORIENT2');
    debug($JOINERY1, '$JOINERY1');
    debug($JOINERY2, '$JOINERY2');
    debug($APODOSI, '$APODOSI');
    debug($PICTFILE1, '$PICTFILE1');
    debug($PHOTOGRK1, '$PHOTOGRK1');
    debug($PHOTOENG1, '$PHOTOENG1');
    debug($PICTFILE2, '$PICTFILE2');
    debug($PHOTOGRK2, '$PHOTOGRK2');
    debug($PHOTOENG2, '$PHOTOENG2');
    debug($PICTFILE3, '$PICTFILE3');
    debug($PHOTOGRK3, '$PHOTOGRK3');
    debug($PHOTOENG3, '$PHOTOENG3');
    debug($PICTFILE4, '$PICTFILE4');
    debug($PHOTOGRK4, '$PHOTOGRK4');
    debug($PHOTOENG4, '$PHOTOENG4');
    debug($PICTFILE5, '$PICTFILE5');
    debug($PHOTOGRK5, '$PHOTOGRK5');
    debug($PHOTOENG5, '$PHOTOENG5');
    debug($PICTFILE6, '$PICTFILE6');
    debug($PHOTOGRK6, '$PHOTOGRK6');
    debug($PHOTOENG6, '$PHOTOENG6');
    debug($PICTFILE7, '$PICTFILE7');
    debug($PHOTOGRK7, '$PHOTOGRK7');
    debug($PHOTOENG7, '$PHOTOENG7');
    debug($PICTFILE8, '$PICTFILE8');
    debug($PHOTOGRK8, '$PHOTOGRK8');
    debug($PHOTOENG8, '$PHOTOENG8');
    debug($PICTFILE9, '$PICTFILE9');
    debug($PHOTOGRK9, '$PHOTOGRK9');
    debug($PHOTOENG9, '$PHOTOENG9');
    debug($PICTFILE10, '$PICTFILE10');
    debug($PHOTOGRK10, '$PHOTOGRK10');
    debug($PHOTOENG10, '$PHOTOENG10');
    debug($PICTFILE11, '$PICTFILE11');
    debug($PHOTOGRK11, '$PHOTOGRK11');
    debug($PHOTOENG11, '$PHOTOENG11');
    debug($PICTFILE12, '$PICTFILE12');
    debug($PHOTOGRK12, '$PHOTOGRK12');
    debug($PHOTOENG12, '$PHOTOENG12');
    debug($PICTFILE13, '$PICTFILE13');
    debug($PHOTOGRK13, '$PHOTOGRK13');
    debug($PHOTOENG13, '$PHOTOENG13');
    debug($PICTFILE14, '$PICTFILE14');
    debug($PHOTOGRK14, '$PHOTOGRK14');
    debug($PHOTOENG14, '$PHOTOENG14');
    debug($PICTFILE15, '$PICTFILE15');
    debug($PHOTOGRK15, '$PHOTOGRK15');
    debug($PHOTOENG15, '$PHOTOENG15');
    debug($PICTFILE16, '$PICTFILE16');
    debug($PHOTOGRK16, '$PHOTOGRK16');
    debug($PHOTOENG16, '$PHOTOENG16');
    debug($PICTFILE17, '$PICTFILE17');
    debug($PHOTOGRK17, '$PHOTOGRK17');
    debug($PHOTOENG17, '$PHOTOENG17');
    debug($PICTFILE18, '$PICTFILE18');
    debug($PHOTOGRK18, '$PHOTOGRK18');
    debug($PHOTOENG18, '$PHOTOENG18');
    debug($PICTFILE19, '$PICTFILE19');
    debug($PHOTOGRK19, '$PHOTOGRK19');
    debug($PHOTOENG19, '$PHOTOENG19');
    debug($PICTFILE20, '$PICTFILE20');
    debug($PHOTOGRK20, '$PHOTOGRK20');
    debug($PHOTOENG20, '$PHOTOENG20');
    debug($PICTFILE21, '$PICTFILE21');
    debug($PHOTOGRK21, '$PHOTOGRK21');
    debug($PHOTOENG21, '$PHOTOENG21');
    debug($PICTFILE22, '$PICTFILE22');
    debug($PHOTOGRK22, '$PHOTOGRK22');
    debug($PHOTOENG22, '$PHOTOENG22');
    debug($PICTFILE23, '$PICTFILE23');
    debug($PHOTOGRK23, '$PHOTOGRK23');
    debug($PHOTOENG23, '$PHOTOENG23');
    debug($PICTFILE24, '$PICTFILE24');
    debug($PHOTOGRK24, '$PHOTOGRK24');
    debug($PHOTOENG24, '$PHOTOENG24');
    debug($PICTFILE25, '$PICTFILE25');
    debug($PHOTOGRK25, '$PHOTOGRK25');
    debug($PHOTOENG25, '$PHOTOENG25');
    debug($PICTFILE26, '$PICTFILE26');
    debug($PHOTOGRK26, '$PHOTOGRK26');
    debug($PHOTOENG26, '$PHOTOENG26');
    debug($PICTFILE27, '$PICTFILE27');
    debug($PHOTOGRK27, '$PHOTOGRK27');
    debug($PHOTOENG27, '$PHOTOENG27');
    debug($PICTFILE28, '$PICTFILE28');
    debug($PHOTOGRK28, '$PHOTOGRK28');
    debug($PHOTOENG28, '$PHOTOENG28');
    debug($PICTFILE29, '$PICTFILE29');
    debug($PHOTOGRK29, '$PHOTOGRK29');
    debug($PHOTOENG29, '$PHOTOENG29');
    debug($PICTFILE30, '$PICTFILE30');
    debug($PHOTOGRK30, '$PHOTOGRK30');
    debug($PHOTOENG30, '$PHOTOENG30');
    debug($PHOTOFILES, '$PHOTOFILES');
    debug($CATEGCODES, '$CATEGCODES');
    debug($LASTPHUPDT, '$LASTPHUPDT');
    debug($LASTPHTIME, '$LASTPHTIME');
    debug($LASTPHUSER, '$LASTPHUSER');
    echo "<br>";
    echo "<br>";
    echo "<br>";
    debug($property_id, '$property_id');
    $name = "$EIDOSAKIN1 $PTOTEPIOIK τ.μ.";
    $description = $PGRKNOTE1;

    if($PDIATH == '1') {
        $status = 'publish';
    } else {
        $status = 'private';
    }

    if($PAGOROPOL == '1') {
        $category = 'ΠΩΛΗΣΗ';
    } else {
        $category = 'ΕΝΟΙΚΙΑΣΗ';
    }

    $images_path = "http://l.l/waitress/orbit/RENEWALL/$PID/" ;
    // http://orbit.waitress.gr/orbit/RENEWALL/1557/rs_IMG_20220322_102731.jpg
    
    $data = [
        'name' => $name,
        'type' => 'variable',
        'description' => (string)$description,
        'short_description' => (string)$description,
        'sku' => (string)$PID,
        // 'categories' => [
        //     [
        //         'id' => 9
        //     ],
        //     [
        //         'id' => 14
        //     ]
        // ],
        'images' => [
            [
                'src' => $images_path.$PICTFILE1
            ],
            [
                'src' => $images_path.$PICTFILE2
            ],
            [
                'src' => $images_path.$PICTFILE3
            ],
            [
                'src' => $images_path.$PICTFILE4
            ],
            [
                'src' => $images_path.$PICTFILE5
            ]
        ],
        // 'attributes' => [
        //     [
        //         'id' => 6,
        //         'position' => 0,
        //         'visible' => false,
        //         'variation' => true,
        //         'options' => [
        //             'Black',
        //             'Green'
        //         ]
        //     ],
        //     [
        //         'name' => 'Size',
        //         'position' => 0,
        //         'visible' => true,
        //         'variation' => true,
        //         'options' => [
        //             'S',
        //             'M'
        //         ]
        //     ]
        // ],
        // 'default_attributes' => [
        //     [
        //         'id' => 6,
        //         'option' => 'Black'
        //     ],
        //     [
        //         'name' => 'Size',
        //         'option' => 'S'
        //     ]
        // ]
    ];
    $found = false;
    foreach($products as $product) {
        if($product->sku == (string)$PID) {
            //delete media from product 
            // $images_ids = $product->images;
            // foreach($images_ids as $image){
            //     delete_images($image->id);
            // }
            $productid = (string)$product->id;
            $woocommerceAPI->put("products/$productid", $data);
            echo "update";
            $found = true;
            unset($productid);
        }
    }
    if($found === false) {
        print_r($woocommerceAPI->post('products', $data));
    } else {
        echo 'updated';
    }
}

// function delete_images($id){
//     echo $id;
// }