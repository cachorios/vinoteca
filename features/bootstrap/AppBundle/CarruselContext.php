<?php

namespace AppBundle;


require_once 'PHPUnit/Autoload.php';
require_once 'PHPUnit/Framework/Assert/Functions.php';

use Behat\Behat\Definition\Call\Given;
use Behat\Behat\Definition\Call\When;
use Behat\Behat\Output\Node\EventListener\AST\StepListener;
use Behat\Symfony2Extension\Context\KernelDictionary;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Behat\Tester\Exception\PendingException;

use Behat\Mink\Driver\GoutteDriver;
use Behat\Mink\Session;
//use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Context\WebContext;

/**
 * Defines application features from the specific context.
 */
class CarruselContext extends WebContext
{
    protected $campos = array();

    public function __construct()
    {

    }

    protected function setUp()
    {

    }

    /**
     * @Given relleno el formulario:
     */
    public function cargarForm(TableNode $table){
        foreach($table->getHash() as $row ){
            $this->fillField($row['campo'],$row['valor'] );
        }

    }

    /**
     * @Given aun no hay contenido
     */
    public function vaciarContenido(){

        /**
         * @var \Doctrine\ORM\EntityManager $em
         */
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');
        $q = $em->createQuery('delete from AppBundle:Contenido c');
        $q->execute();

    }


}
