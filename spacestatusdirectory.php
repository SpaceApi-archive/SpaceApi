<?php

header("Access-Control-Allow-Origin: *");
header("Cache-Control: max-age=300, public");
header("Content-Type: application/json");

$dir=  array(
	  'RevSpace' => 'https://revspace.nl/status/status.php',
	  'Bitlair' => 'https://bitlair.nl/statejson.php',
	  'TkkrLab' => 'http://tkkrlab.nl/statejson.php',
	  'Frack' => 'http://frack.nl/spacestate/?api',
	  'Fablier' => 'http://status.fabelier.org/status.json',
	  'Syn2cat' => 'http://www.hackerspace.lu/od/',
	  'Tetalab' => 'http://status.tetalab.org/status.json',
	  'ACKspace' => 'https://ackspace.nl/status.php',
	  'Milwaukee Makerspace' => 'http://apps.2xlnetworks.net/milwaukeemakerspace/',
	  'Noisebridge' => 'http://api.noisebridge.net/spaceapi/',
	  'Pumping Station: One' => 'http://spacemon.pumpingstationone.org:8000/spaceapi/ps1',
	  'Void Warranties' => 'http://we.voidwarranties.be/SpaceAPI/',
	  'Makers Local 256' => 'https://256.makerslocal.org/status.json',
	  'HeatSync Labs' => 'http://intranet.heatsynclabs.org/~access/cgi-bin/spaceapi.rb',
	  'Kwartzlab MakerSpace' => 'http://at.kwartzlab.ca/spaceapi/index.php',
	  'MidsouthMakers' => 'http://midsouthmakers.org/spaceapi/',
	  'Hickerspace' => 'https://hickerspace.org/api/room_extended/',
	  'TOG' => 'http://tog.ie/cgi-bin/space',
	  'miLKlabs' => 'http://status.mlkl.bz/json',
	  'Hack42' => 'http://hack42.nl/spacestate/json.php',
	  'Garoa Hacker Clube' => 'https://garoahc.appspot.com/status',
	  'Beta-Space' => 'http://status.kreativitaet-trifft-technik.de/status.json',
	  'Farset Labs' => 'http://unit1.farsetlabs.org.uk/spaceapi/space',
	  'Make, Hack, Void Canberra' => 'http://space.makehackvoid.com/status',
	  'FIXME Hackerspace' => 'https://fixme.ch/cgi-bin/spaceapi.py',
	  'TechInc' => 'https://techinc.nl/space/spacestate.json',
	  'Stratum 0' => 'http://status.stratum0.org/status.json'
	);

if(isset($_GET['fmt']) && $_GET['fmt']=='a') {
  Class SpaceDirEntry {
    public $name;
    public $url;
    public function __construct($name,$url) {
      $this->name=$name;
      $this->url=$url;
    }
  }
 
  $objdir=array(); 
  foreach($dir as $name=>$url) {
    $objdir[]=new SpaceDirEntry($name,$url);
  }

  
  
  echo json_encode((object)array('spaces'=>$objdir));
} else {
  echo json_encode($dir);
}

