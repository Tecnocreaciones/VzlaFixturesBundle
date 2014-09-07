<?php

/*
 * This file is part of the TecnocreacionesVzlaFixturesBundle package.
 * 
 * (c) www.tecnocreaciones.com.ve
 * 
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tecnocreaciones\Vzla\FixturesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tecnocreaciones\Vzla\EntityBundle\Entity\Municipality;

/**
 * Data de municipios
 * 
 * @see https://github.com/marydn/venezuela-sql/blob/master/venezuela.sql
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadMunicipalityData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Distrito-Capital"));
                $this->addReference('Municipality-Libertador', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo alto orinoco')
                ->setState($this->getReference("State-Amazonas"));
                $this->addReference('Municipality-autonomo-alto-orinoco', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo atabapo')
                ->setState($this->getReference("State-Amazonas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo atures')
                ->setState($this->getReference("State-Amazonas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo autana')
                ->setState($this->getReference("State-Amazonas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo maroa')
                ->setState($this->getReference("State-Amazonas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo manapiare')
                ->setState($this->getReference("State-Amazonas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo rio negro')
                ->setState($this->getReference("State-Amazonas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Anaco')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Aragua')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Fernando de peñalver')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Francisco del carmen carvajaL')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Francisco de miranda')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guanta')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Independencia')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Juan Antonio Sotillo')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Juan manuel cajigal')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose gregorio monagas')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertad')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Manuel ezequiel bruzual')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedro maria freites')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Piritu')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Jose de Guanipa')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Juan de Capistrano')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santa Ana')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Bolivar')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Rodriguez')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sir arthur mc gregor')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Turist diego bautista urbaneja')
                ->setState($this->getReference("State-Anzoategui"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Achaguas')
                ->setState($this->getReference("State-Apure"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Biruaca')
                ->setState($this->getReference("State-Apure"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Muñoz')
                ->setState($this->getReference("State-Apure"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Paez')
                ->setState($this->getReference("State-Apure"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedro Camejo')
                ->setState($this->getReference("State-Apure"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Romulo Gallegos')
                ->setState($this->getReference("State-Apure"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Fernando')
                ->setState($this->getReference("State-Apure"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Gregorio Monagas')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Girardot')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Angel Lamas')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Felix Ribas')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Rafael Revenga')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mario Briceño')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Casimiro')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Sebastian')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santiago Mariño')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santos Michelena')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tovar')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Urdaneta')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Zamora')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Francisco Linares Alcantara')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ocumare de la Costa de Oro')
                ->setState($this->getReference("State-Aragua"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Alberto Arvelo Torrealba')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Antonio Jose de Sucre')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Arismendi')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Barinas')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cruz Paredes')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ezequiel Zamora')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Obispos')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedraza')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rojas')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sosa')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Eloy Blanco')
                ->setState($this->getReference("State-Barinas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Caroni')
                ->setState($this->getReference("State-Bolivar"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cedeño')
                ->setState($this->getReference("State-Bolivar"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('El Callao')
                ->setState($this->getReference("State-Bolivar"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Gran Sabana')
                ->setState($this->getReference("State-Bolivar"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Heres')
                ->setState($this->getReference("State-Bolivar"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Piar')
                ->setState($this->getReference("State-Bolivar"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Raul Leoni')
                ->setState($this->getReference("State-Bolivar"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Roscio')
                ->setState($this->getReference("State-Bolivar"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sifontes')
                ->setState($this->getReference("State-Bolivar"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Bolivar"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Padre Pedro Chien')
                ->setState($this->getReference("State-Bolivar"));
        $manager->persist($municipality);

        $municipality = new Municipality();
        $municipality
                ->setDescription('Bejuma')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Diego Ibarra')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guacara')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Juan Jose Mora')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Los Guayos')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Miranda')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Montalban')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Naguanagua')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Puerto Cabello')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Diego')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Joaquin')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Valencia')
                ->setState($this->getReference("State-Carabobo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Anzoategui')
                ->setState($this->getReference("State-Cojedes"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Girardot')
                ->setState($this->getReference("State-Cojedes"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Lima Blanco')
                ->setState($this->getReference("State-Cojedes"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pao de San Juan Bautista')
                ->setState($this->getReference("State-Cojedes"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ricaurte')
                ->setState($this->getReference("State-Cojedes"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Romulo Gallegos')
                ->setState($this->getReference("State-Cojedes"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Carlos')
                ->setState($this->getReference("State-Cojedes"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tinaco')
                ->setState($this->getReference("State-Cojedes"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tinaquillo')
                ->setState($this->getReference("State-Cojedes"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Antonio Diaz')
                ->setState($this->getReference("State-Delta-Amacuro"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Casacoima')
                ->setState($this->getReference("State-Delta-Amacuro"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedernales')
                ->setState($this->getReference("State-Delta-Amacuro"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tucupita')
                ->setState($this->getReference("State-Delta-Amacuro"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Acosta')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);

        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Buchivacoa')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cacique Manaure')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Carirubana')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Colina')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Dabajuro')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Democracia')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Falcon')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Federacion')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jacura')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Los Taques')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mauroa')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Romulo Gallegos')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Monseñor')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Palmasola')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Petit')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Piritu')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Francisco')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Silva')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tocopero')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Union')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Urumaco')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Zamora')
                ->setState($this->getReference("State-Falcon"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Camaguan')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Chaguaramas')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('El socorro')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Geronimo de Guayabal')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Federacion')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Leonardo Infante')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Las Mercedes')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Julian Mellado')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Francisco de Miranda')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Tadeo Monagas')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ortiz')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Felix Ribas')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Juan German Roscio')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Jose de Guaribe')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santa Maria de Ipire')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedro Zaraza')
                ->setState($this->getReference("State-Guarico"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Eloy Blanco')
                ->setState($this->getReference("State-Lara"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Crespo')
                ->setState($this->getReference("State-Lara"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Iribarren')
                ->setState($this->getReference("State-Lara"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jimenez')
                ->setState($this->getReference("State-Lara"));
        $manager->persist($municipality);

        $municipality = new Municipality();
        $municipality
                ->setDescription('Moran')
                ->setState($this->getReference("State-Lara"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Palavecino')
                ->setState($this->getReference("State-Lara"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Planas')
                ->setState($this->getReference("State-Lara"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Torres')
                ->setState($this->getReference("State-Lara"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Urdaneta')
                ->setState($this->getReference("State-Lara"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Alberto Adriani')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Bello')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Antonio Pinto Salinas')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Aricagua')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Arzobispo Chacon')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Caraccilo Parra y Olmedo')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Campo Elias')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Felix Ribas')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cardenal Quintero')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guaraque')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Julio Cesar Salas')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Justo Briceño')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Miranda')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Obispo Ramos de Lora')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Padre Noguera')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pueblo Llano')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rangel')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rivas Davila')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santos Marquina')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tovar')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tulio Febres Cordero')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Zea')
                ->setState($this->getReference("State-Merida"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Acevedo')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Bello')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Baruta')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);

        $municipality = new Municipality();
        $municipality
                ->setDescription('Brion')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Buroz')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Carrizal')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Chacao')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cristobal Rojas')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('El Hatillo')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guaicaipuro')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Independencia')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tomas Lander')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Los Salias')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Paez')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Paz Castillo')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedro Gual')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Plaza')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Bolivar')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Urdaneta')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Zamora')
                ->setState($this->getReference("State-Miranda"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Acosta')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Aguasay')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Brion')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Caripe')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cedeño')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ezequiel Zamora')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Maturin')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Piar')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Punceres')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santa Barbara')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sotillo')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Uracoa')
                ->setState($this->getReference("State-Monagas"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Antolin del Campo')
                ->setState($this->getReference("State-Nueva-Esparta"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Arismendi')
                ->setState($this->getReference("State-Nueva-Esparta"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Diaz')
                ->setState($this->getReference("State-Nueva-Esparta"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Bolivar')
                ->setState($this->getReference("State-Nueva-Esparta"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Gomez')
                ->setState($this->getReference("State-Nueva-Esparta"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Maneiro')
                ->setState($this->getReference("State-Nueva-Esparta"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Marcano')
                ->setState($this->getReference("State-Nueva-Esparta"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mariño')
                ->setState($this->getReference("State-Nueva-Esparta"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Peninsula de Macanao')
                ->setState($this->getReference("State-Nueva-Esparta"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tubores')
                ->setState($this->getReference("State-Nueva-Esparta"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Villalba')
                ->setState($this->getReference("State-Nueva-Esparta"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Agua Blanca')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Araure')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Esteller')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guanare')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guanarito')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Monseñor')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ospino')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Paez')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Papelon')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Genaro de Boconoito')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Rafael de Onoto')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santa Rosalia')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Turen')
                ->setState($this->getReference("State-Portuguesa"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Eloy Blanco')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Mata')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Arismendi')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Peninsula de Macanao')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bermudez')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cajigal')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cruz Salmeron Acosta')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mariño')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mejia')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Montes')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ribero')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Valdez')
                ->setState($this->getReference("State-Sucre"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Bello')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Antonio Romulo Costa')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ayacucho')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cardenas')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cordoba')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Fernandez Feo')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Francisco de Miranda')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Garcia de Hevia')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bermudez')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Independencia')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jauregui')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Maria Vargas')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Junin')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertad')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Lobatera')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Michelena')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Panamericano')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedro Maria Ureña')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rafael Urdaneta')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Samuel Dario Maldonado')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Cristobal')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Seboruco')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Rodriguez')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Torbes')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Uribante')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guasimo')
                ->setState($this->getReference("State-Tachira"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Bello')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bocono')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Candelaria')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Carache')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Escuque')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Felipe Marquez Caziñales')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Juan Vicente Campo Elias')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('La Ceiba')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Miranda')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Monte Carmelo')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Motatan')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pampan')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pampanito')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rafael Rangel')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Rafael de Carvajal')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Trujillo')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Urdaneta')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Valera')
                ->setState($this->getReference("State-Trujillo"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Bello')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bruzual')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cocorote')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Independencia')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Antonio Paez')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('La Trinidad')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Manuel Monge')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Nirgua')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Peña')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Felipe')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pampan')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Veroes')
                ->setState($this->getReference("State-Yaracuy"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Almirante Padilla')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Baralt')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cabimas')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Catatumbo')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Colon')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Francisco Javier Pulgar')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jesus Enrique Lozada')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jesus Maria Semprun')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Lagunillas')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Machiques de Perija')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mara')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Maracaibo')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Miranda')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Paez')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rosario de Perija')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Francisco')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santa Rita')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Bolivar')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Valmore Rodriguez')
                ->setState($this->getReference("State-Zulia"));
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Vargas')
                ->setState($this->getReference("State-Vargas"));
        $manager->persist($municipality);
                
        $municipality = new Municipality();
        $municipality
                ->setDescription('Dependencias Federales')
                ->setState($this->getReference("State-Dependencias-Federales"));
        $manager->persist($municipality);





























        












            

            
              
            
            
            
           
           
                
           
        
        
        
        
        
        
        
        
        
        
            
           
            
           
            
          
            
           
            
            
           
            
            
            
            
           
            
            
           
        
    }
    public function getOrder() {
        return 3;
    }
}
