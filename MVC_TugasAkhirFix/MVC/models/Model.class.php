"php class Model"
{
protected $mysqli;

public function __construct()
{
$dbhostname = 'localhost';

$dbusername = 'root';
$dbpassword = 'rahasia';
$dbname = 'sistem_klinik_sederhana';
$this->mysqli = new mysqli($dbhostname, $dbusername, $dbpassword, $dbname) or die('Database connection error!');
}
}