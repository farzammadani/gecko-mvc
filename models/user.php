<?php 

class User
{
public static function getAll()
{
// Retrieve data from the database (dummy data in this example)
return [
['name' => 'Jack' , 'email' => 'Jack@email.com'],
['name' => 'John' , 'email' => 'John@email.com'],
['name' => 'Tom' , 'email' => 'Tom@email.com']
];

}


}