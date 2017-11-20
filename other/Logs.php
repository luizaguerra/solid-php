<?php

interface Logger
{
    public function __construct(Adapter $database);
    public function logger($message);
}

class DatabaseLogger extends Logger
{
    public function __construct(Database $database)
    {
        $this->Database = $database;
    }
    public function logger($message)
    {
        // logica
        $this->Database->insert(['message'=>$message]);
        //return  'ok';
    }
}

class FileLogger  extends Logger
{
    public function logger($message)
    {
        // logica
        $this->FileManager->create('error.log', $message);
        //return  'ok';
    }
}