<?php

namespace ErikFig\DB;

class Postgres implements Db
{
    public function connect() :string
    {
        return 'connected to Posgres';
    }
}
