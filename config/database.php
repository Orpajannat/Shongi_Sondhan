<?php
/**
 * Database Configuration for Matrimony BD
 * 
 * This file contains database connection settings and helper functions
 */

// Database configuration constants
define('DB_HOST', 'localhost');
define('DB_NAME', 'matrimony_bd');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_CHARSET', 'utf8mb4');

// Database connection class
class Database {
    private static $instance = null;
    private $connection;
    
    private function __construct() {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;
            $this->connection = new PDO($dsn, DB_USER, DB_PASS, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        } catch (PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
    
    // Singleton pattern to ensure only one database connection
    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }
    
    // Get the PDO connection
    public function getConnection() {
        return $this->connection;
    }
    
    // Execute a query with parameters
    public function query($sql, $params = []) {
        try {
            $stmt = $this->connection->prepare($sql);
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $e) {
            die("Query failed: " . $e->getMessage());
        }
    }
    
    // Fetch a single row
    public function fetchOne($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt->fetch();
    }
    
    // Fetch all rows
    public function fetchAll($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt->fetchAll();
    }
    
    // Insert and return last insert ID
    public function insert($sql, $params = []) {
        $this->query($sql, $params);
        return $this->connection->lastInsertId();
    }
    
    // Update/Delete and return affected rows
    public function execute($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt->rowCount();
    }
}

// Helper function to get database instance
function getDB() {
    return Database::getInstance();
}

// Helper function for common database operations
function dbQuery($sql, $params = []) {
    return getDB()->query($sql, $params);
}

function dbFetchOne($sql, $params = []) {
    return getDB()->fetchOne($sql, $params);
}

function dbFetchAll($sql, $params = []) {
    return getDB()->fetchAll($sql, $params);
}

function dbInsert($sql, $params = []) {
    return getDB()->insert($sql, $params);
}

function dbExecute($sql, $params = []) {
    return getDB()->execute($sql, $params);
}

// Test database connection
function testDatabaseConnection() {
    try {
        $db = getDB();
        $result = $db->fetchOne("SELECT 1 as test");
        return $result && $result['test'] == 1;
    } catch (Exception $e) {
        return false;
    }
}

// Database utility functions
function sanitizeInput($input) {
    if (is_array($input)) {
        return array_map('sanitizeInput', $input);
    }
    return htmlspecialchars(trim($input), ENT_QUOTES, 'UTF-8');
}

function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function validateMobile($mobile) {
    // Bangladesh mobile number validation
    return preg_match('/^(\+?88)?01[3-9]\d{8}$/', $mobile);
}

function generateVerificationCode($length = 6) {
    return str_pad(rand(0, pow(10, $length) - 1), $length, '0', STR_PAD_LEFT);
}

function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
}

function verifyPassword($password, $hash) {
    return password_verify($password, $hash);
}

function generateSessionToken($length = 32) {
    return bin2hex(random_bytes($length));
}

// Error logging
function logError($message, $context = []) {
    $logFile = __DIR__ . '/../logs/error.log';
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] $message";
    
    if (!empty($context)) {
        $logMessage .= " Context: " . json_encode($context);
    }
    
    $logMessage .= PHP_EOL;
    
    // Create logs directory if it doesn't exist
    $logsDir = dirname($logFile);
    if (!is_dir($logsDir)) {
        mkdir($logsDir, 0755, true);
    }
    
    file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX);
}

// Success logging
function logSuccess($message, $context = []) {
    $logFile = __DIR__ . '/../logs/success.log';
    $timestamp = date('Y-m-d H:i:s');
    $logMessage = "[$timestamp] $message";
    
    if (!empty($context)) {
        $logMessage .= " Context: " . json_encode($context);
    }
    
    $logMessage .= PHP_EOL;
    
    // Create logs directory if it doesn't exist
    $logsDir = dirname($logFile);
    if (!is_dir($logsDir)) {
        mkdir($logsDir, 0755, true);
    }
    
    file_put_contents($logFile, $logMessage, FILE_APPEND | LOCK_EX);
}
?>
