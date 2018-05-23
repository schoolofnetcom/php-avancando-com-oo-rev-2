<?php

namespace ErikFig\DB;

class MySql implements Db
{
    use \ErikFig\GetterSetter;

    public function connect() :string
    {
        return 'connected to MySQL';
    }
}
