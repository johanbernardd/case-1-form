<?php
require_once __DIR__ . '/../config/Database.php';
require_once __DIR__ . '/../models/Schedule.php';

class ScheduleController {
    private $db;
    private $schedule;

    public function __construct() {
        $database = new Database.php();
        $this->db = $database->getConnection();
        $this->schedule = new Schedule($this->db);
    }

    public function index() {
        $result = $this->schedule->read();
        $schedules = $result->fetchAll(PDO::FETCH_ASSOC);
        require 'views/schedule/index.php';
    }

    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->schedule->hari = $_POST['hari'];
            $this->schedule->tanggal = $_POST['tanggal'];
            $this->schedule->jam_mulai = $_POST['jam_mulai'];
            $this->schedule->jam_selesai = $_POST['jam_selesai'];

            if ($this->schedule->create()) {
                header("Location: index.php");
            } else {
                echo "Error creating schedule.";
            }
        } else {
            require 'views/schedule/add.php';
        }
    }
}
?>
