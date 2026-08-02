<?php
declare(strict_types=1);

/*
|--------------------------------------------------------------------------
| Napoleon Bikes Platform V2
| Database Connection
|--------------------------------------------------------------------------
|
| Single PDO connection for the entire application.
| Never create PDO anywhere else.
|
*/

if (!defined('ROOT_PATH')) {
    exit('Direct access is not allowed.');
}

final class Database
{
    private static ?PDO $connection = null;

    private function __construct()
    {
    }

    public static function connection(): PDO
    {
        if (self::$connection instanceof PDO) {
            return self::$connection;
        }

        $dsn = sprintf(
            'mysql:host=%s;port=%s;dbname=%s;charset=%s',
            DB_HOST,
            DB_PORT,
            DB_NAME,
            DB_CHARSET
        );

        try {

            self::$connection = new PDO(
                $dsn,
                DB_USER,
                DB_PASS,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_EMULATE_PREPARES => false,
                    PDO::ATTR_PERSISTENT => false
                ]
            );

            self::$connection->exec(
                "SET NAMES " . DB_CHARSET .
                " COLLATE " . DB_COLLATION
            );

            return self::$connection;

        } catch (PDOException $exception) {

            if (ENVIRONMENT === 'development') {
                throw new RuntimeException(
                    'Database Connection Failed: ' .
                    $exception->getMessage()
                );
            }

            error_log(
                '[Database] ' .
                $exception->getMessage()
            );

            http_response_code(500);

            exit(
                'A database error occurred.'
            );
        }
    }

    public static function beginTransaction(): bool
    {
        return self::connection()->beginTransaction();
    }

    public static function commit(): bool
    {
        return self::connection()->commit();
    }

    public static function rollback(): bool
    {
        return self::connection()->rollBack();
    }

    public static function lastInsertId(): string
    {
        return self::connection()->lastInsertId();
    }
}
