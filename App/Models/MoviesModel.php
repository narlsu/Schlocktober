<?php

namespace App\Models;

use PDO;

Class MoviesModel extends DatabaseModel
{
	protected static $tablename = 'movies';
	protected static $columns = ['id','title','year','description'];

}























