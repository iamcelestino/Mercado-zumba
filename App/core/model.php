<?php

declare(strict_types=1);

namespace App\Core;
use App\Core\Database;
use Exception;

class Model extends Database
{
    protected mixed $table;
    public array $errors = [];

    public function __construct()
    {
        if(property_exists($this, 'table')) {

            $this->table = strtolower((new \ReflectionClass($this))->getShortName());

        } 
    }

    public function where($column, $value): array|object|bool
    {   
        $column = addslashes($column);
        $query = "SELECT * FROM " . $this->table . " WHERE " . $column . " = :value";
        $data = $this->query($query, [
           'value' => $value 
        ]);
        return $data;
    }

    public function first(string $column, mixed $value): array|object 
    {
       $column = addslashes($column);
       $query = "SELECT * FROM " . $this->table . "WHERE " . $column . "= :value";
       $data = $this->query($query, [
            'value' => $value
       ]); 

       if(is_array($data)) {

            if(property_exists($this, 'after_select')) {
                foreach($this->after_select as $function) {
                    $data = $this->$function($data);
                }
            }
       }

       if(is_array($data)) {
            $data = $data[0];
       }

       return $data;
    }

    public function findAll(): array|object|bool
    {
        $query = " SELECT * FROM ". $this->table;
        $data = $this->query($query);

        if(is_array($data)) {
            
            if(property_exists($this, 'after_select')) {

                foreach($this->after_select as $function) {
                    $data = $this->$function($data);
                }
            }
        }

        return $data;
    }

    public function insert(array $data): string|false
    {
        if(property_exists($this , 'allowed_columns')) {

            foreach($data as $key => $columns) {

                if(!in_array($key, $this->allowed_columns)) {
                    unset($data[$key]);
                }
            }
        }

        if(property_exists($this, 'before_insert')) {

            foreach($this->before_insert as $function) {
                $data = $this->$function($data);
            }
        }

        $keys = array_keys($data);
        $columns = implode(',', $keys);
        $values = implode(',:', $keys);

        $query = "INSERT INTO $this->table($columns) VALUES(:$values)";

        return $this->query($query, $data);

    }

    public function update(mixed $id, array $data): mixed 
    {
        if(property_exists($this, 'allowed_columns')) {
            
            foreach($data as $key => $columns) {

                if(!in_array($key, $this->allowed_columns)) {
                    unset($data[$key]);
                }
            }
        }

        if(property_exists($this, 'before_insert')) {
            
            foreach($this->before_insert as $funtion) {

                $data = $this->$funtion($data);
            }
        }

        $string = '';
        foreach($data as $key => $value) {
            $string .= "$key = :$key, ";
        }

        $strg = rtrim($string, ", ");
        $primary_key = $this->get_primary_key();
        $data[$primary_key] = $id;

        $query = "UPDATE $this->table SET $strg WHERE $primary_key = :$primary_key";
        return $this->query($query, $data);
    }

    public function get_primary_key(): string
    {
        static $primary_keys = [];

        if(!isset($primary_keys[$this->table])) {
            $query = "SHOW KEYS FROM {$this->table} WHERE Key_name = 'PRIMARY'";
            $result = $this->query($query, [], 'array');

            if(!empty($result)) {
                $primary_keys[$this->table] = $result[0]['Column_name'];
            } else {
                throw new Exception("primary Key not Found for table {$this->table}");
            }
        }
        return $primary_keys[$this->table];
    }

    public function delete(mixed $id) 
    {
        $primary_key = $this->get_primary_key(); 

        $query = "DELETE FROM $this->table WHERE $primary_key = :$primary_key";
        $data[$primary_key] = $id;
        return $this->query($query, $data);
    }
    
    public function beginTransaction(): bool
    {
        return $this->connection()->beginTransaction();
    }

    public function commit(): bool
    {
        return $this->connection()->commit();
    }

    public function rollback(): bool
    {
        return $this->connection()->rollBack();
    }

    public function lastInsertedId(): string
    {
        return $this->connection()->lastInsertId();
    }

}
