<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Addchartelocaux extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('charte_locaux', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => 8,
              'autoincrement' => true,
              'primary' => true,
             ),
             'date' => 
             array(
              'type' => 'timestamp',
              'notnull' => true,
              'length' => 25,
             ),
             'ip' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 15,
             ),
             'semestre_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'asso_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'login' => 
             array(
              'type' => 'string',
              'notnull' => true,
              'length' => 20,
             ),
             'user_id' => 
             array(
              'type' => 'integer',
              'notnull' => true,
              'length' => 8,
             ),
             'porte_mde' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'bat_a' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'locaux_pic' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'mde_complete' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'bureau_polar' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'perm_polar' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'salles_musique' => 
             array(
              'type' => 'boolean',
              'notnull' => true,
              'default' => 0,
              'length' => 25,
             ),
             'statut' => 
             array(
              'type' => 'int',
              'notnull' => true,
              'length' => 1,
             ),
             'motif' => 
             array(
              'type' => 'string',
              'length' => NULL,
             ),
             'created_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             'updated_at' => 
             array(
              'notnull' => true,
              'type' => 'timestamp',
              'length' => 25,
             ),
             ), array(
             'indexes' => 
             array(
             ),
             'primary' => 
             array(
              0 => 'id',
             ),
             'collate' => 'utf8_unicode_ci',
             'charset' => 'utf8',
             ));
    }

    public function down()
    {
        $this->dropTable('charte_locaux');
    }
}