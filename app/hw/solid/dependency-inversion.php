<?php
interface DataProviderInterface
{
    public function getData();

}

class MySql implements DataProviderInterface
{
    public function getData()
    {
        return 'some data from database';
    }
}

class Controller
{
    private DataProviderInterface $adapter;

    public function __construct(DataProviderInterface $mysql)
    {
        $this->adapter = $mysql;
    }

    function getData()
    {
        $this->adapter->getData();
    }
}