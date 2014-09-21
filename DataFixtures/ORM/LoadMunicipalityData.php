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
                ->setState($this->getReference("State-Distrito-Capital-dc"));
                $this->addReference('Municipality-Libertador-dc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo alto orinoco')
                ->setState($this->getReference("State-Amazonas"));
                $this->addReference('Municipality-autonomo-alto-orinoco-ama', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo atabapo')
                ->setState($this->getReference("State-Amazonas"));
                $this->addReference('Municipality-Autonomo-atabapo-ama', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo atures')
                ->setState($this->getReference("State-Amazonas"));
                $this->addReference('Municipality-Autonomo-atures-ama', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo autana')
                ->setState($this->getReference("State-Amazonas"));
                $this->addReference('Municipality-Autonomo-autana-ama', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo maroa')
                ->setState($this->getReference("State-Amazonas"));
                $this->addReference('Municipality-Autonomo-maroa-ama', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo manapiare')
                ->setState($this->getReference("State-Amazonas"));
                $this->addReference('Municipality-Autonomo-manapiare-ama', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Autonomo rio negro')
                ->setState($this->getReference("State-Amazonas"));
                $this->addReference('Municipality-Autonomo-rio-negro-ama', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Anaco')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Anaco-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Aragua')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Aragua-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Peñalver')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Peñalver-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Carvajal')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Carvajal-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Miranda')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Miranda-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guanta')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Guanta-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Independencia')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Independencia-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sotillo')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Sotillo-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cajigal')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Cajigal-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Monagas')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Monagas-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertad')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Libertad-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bruzual')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Bruzual-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Freites')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Freites-anz', $municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Piritu')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Piritu-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guanipa')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Guanipa-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Juan de Capistrano')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-San-Juan-de-Capistrano-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santa Ana')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Santa-Ana-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Bolivar-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Rodriguez')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Simon-Rodriguez-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('McGregor')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-McGregor-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Diego Bautista Urbaneja')
                ->setState($this->getReference("State-Anzoategui"));
                $this->addReference('Municipality-Diego-Bautista-Urbaneja-anz', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Achaguas')
                ->setState($this->getReference("State-Apure"));
                $this->addReference('Municipality-Achaguas-apu', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Biruaca')
                ->setState($this->getReference("State-Apure"));
                $this->addReference('Municipality-Biruaca-apu', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Muñoz')
                ->setState($this->getReference("State-Apure"));
                $this->addReference('Municipality-Muñoz-apu', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Paez')
                ->setState($this->getReference("State-Apure"));
                $this->addReference('Municipality-Paez-apu', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedro Camejo')
                ->setState($this->getReference("State-Apure"));
                $this->addReference('Municipality-Pedro-Camejo-apu', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Romulo Gallegos')
                ->setState($this->getReference("State-Apure"));
                $this->addReference('Municipality-Romulo-Gallegos-apu', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Fernando')
                ->setState($this->getReference("State-Apure"));
                $this->addReference('Municipality-San-Fernando-apu', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Bolivar-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Gregorio Monagas')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Jose-Gregorio-Monagas-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Girardot')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Girardot-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Angel Lamas')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Jose-Angel-Lamas-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Felix Ribas')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Jose-Felix-Ribas-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Rafael Revenga')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Jose-Rafael-Revenga-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Libertador-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mario Briceño Iragorry')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Mario-Briceño-Iragorry-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Casimiro')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-San-Casimiro-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Sebastian')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-San-Sebastian-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santiago Mariño')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Santiago-Mariño-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santos Michelena')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Santos-Michelena-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Sucre-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tovar')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Tovar-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Urdaneta')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Urdaneta-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Zamora')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Zamora-ara', $municipality);
        $manager->persist($municipality);
        
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Francisco Linares Alcantara')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Francisco-Linares-Alcantara-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ocumare de la Costa de Oro')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Ocumare-de-la-Costa-de-Oro-ara', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Camatagua')
                ->setState($this->getReference("State-Aragua"));
                $this->addReference('Municipality-Camatagua-ara', $municipality);
        $manager->persist($municipality);
        
        
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Alberto Arvelo Torrealba')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Alberto-Arvelo-Torrealba-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Antonio Jose de Sucre')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Antonio-Jose-de-Sucre-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Arismendi')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Arismendi-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Barinas')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Barinas-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Bolivar-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cruz Paredes')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Cruz-Paredes-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ezequiel Zamora')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Ezequiel-Zamora-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Obispos')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Obispos-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedraza')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Pedraza-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rojas')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Rojas-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sosa')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Sosa-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Eloy Blanco')
                ->setState($this->getReference("State-Barinas"));
                $this->addReference('Municipality-Andres-Eloy-Blanco-bar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Caroni')
                ->setState($this->getReference("State-Bolivar"));
             $this->addReference('Municipality-Caroni-bol', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cedeño')
                ->setState($this->getReference("State-Bolivar"));
                $this->addReference('Municipality-Cedeño-bol', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('El Callao')
                ->setState($this->getReference("State-Bolivar"));
                $this->addReference('Municipality-El-Callao-bol', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Gran Sabana')
                ->setState($this->getReference("State-Bolivar"));
                $this->addReference('Municipality-Gran-Sabana-bol', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Heres')
                ->setState($this->getReference("State-Bolivar"));
                $this->addReference('Municipality-Heres-bol', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Piar')
                ->setState($this->getReference("State-Bolivar"));
                $this->addReference('Municipality-Piar-bol', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Angostura')
                ->setState($this->getReference("State-Bolivar"));
                $this->addReference('Municipality-Angostura-bol', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Roscio')
                ->setState($this->getReference("State-Bolivar"));
                $this->addReference('Municipality-Roscio-bol', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sifontes')
                ->setState($this->getReference("State-Bolivar"));
                $this->addReference('Municipality-Sifontes-bol', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Bolivar"));
                $this->addReference('Municipality-Sucre-bol', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Padre Pedro Chien')
                ->setState($this->getReference("State-Bolivar"));
                $this->addReference('Municipality-Padre-Pedro-Chien-bol', $municipality);
        $manager->persist($municipality);

        $municipality = new Municipality();
        $municipality
                ->setDescription('Bejuma')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Bejuma-car', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Carlos Arvelo')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Carlos-Arvelo-car', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Diego Ibarra')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Diego-Ibarra-car', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guacara')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Guacara-car', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Juan Jose Mora')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Juan-Jose-Mora-car', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Libertador-car', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Los Guayos')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Los-Guayos-car', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Miranda')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Miranda-car', $municipality);     
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Montalban')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Montalban-car', $municipality);     
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Naguanagua')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Naguanagua-car', $municipality);     
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Puerto Cabello')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Puerto-Cabello-car', $municipality);    
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Diego')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-San-Diego-car', $municipality);    
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Joaquin')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-San-Joaquin-car', $municipality);   
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Valencia')
                ->setState($this->getReference("State-Carabobo"));
                $this->addReference('Municipality-Valencia-car', $municipality);  
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Anzoategui')
                ->setState($this->getReference("State-Cojedes"));
                $this->addReference('Municipality-Anzoategui-coj', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Girardot')
                ->setState($this->getReference("State-Cojedes"));
                $this->addReference('Municipality-Girardot-coj', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Lima Blanco')
                ->setState($this->getReference("State-Cojedes"));
                $this->addReference('Municipality-Lima-Blanco-coj', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pao de San Juan Bautista')
                ->setState($this->getReference("State-Cojedes"));
                $this->addReference('Municipality-Pao-de-San-Juan-Bautista-coj', $municipality); 
        $municipality = new Municipality();
        
        $municipality
                ->setDescription('Ricaurte')
                ->setState($this->getReference("State-Cojedes"));
                $this->addReference('Municipality-Ricaurte-coj', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Romulo Gallegos')
                ->setState($this->getReference("State-Cojedes"));
                $this->addReference('Municipality-Romulo-Gallegos-coj', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ezequiel Zamora')
                ->setState($this->getReference("State-Cojedes"));
                $this->addReference('Municipality-Ezequiel-Zamora-coj', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tinaco')
                ->setState($this->getReference("State-Cojedes"));
                $this->addReference('Municipality-Tinaco-coj', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tinaquillo')
                ->setState($this->getReference("State-Cojedes"));
                $this->addReference('Municipality-Tinaquillo-coj', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Antonio Diaz')
                ->setState($this->getReference("State-Delta-Amacuro"));
                $this->addReference('Municipality-Antonio-Diaz-del', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Casacoima')
                ->setState($this->getReference("State-Delta-Amacuro"));
                $this->addReference('Municipality-Casacoima-del', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedernales')
                ->setState($this->getReference("State-Delta-Amacuro"));
                $this->addReference('Municipality-Pedernales-del', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tucupita')
                ->setState($this->getReference("State-Delta-Amacuro"));
                $this->addReference('Municipality-Tucupita-del', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Acosta')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Acosta-fal', $municipality); 
        $manager->persist($municipality);

        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Bolivar-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Buchivacoa')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Buchivacoa-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cacique Manaure')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Cacique-Manaure-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Carirubana')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Carirubana-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Colina')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Colina-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Dabajuro')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Dabajuro-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Democracia')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Democracia-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Falcon')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Falcon-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Federacion')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Federacion-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jacura')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Jacura-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Los Taques')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Los-Taques-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mauroa')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Mauroa-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Miranda')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Miranda-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Monseñor Iturriza')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Monseñor-Iturriza-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Palmasola')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Palmasola-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Petit')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Petit-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Piritu')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Piritu-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Francisco')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-San-Francisco-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Silva')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Silva-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Sucre-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tocopero')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Tocopero-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Union')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Union-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Urumaco')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Urumaco-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Zamora')
                ->setState($this->getReference("State-Falcon"));
                $this->addReference('Municipality-Zamora-fal', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Camaguan')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Camaguan-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Chaguaramas')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Chaguaramas-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('El socorro')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-El-socorro-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Geronimo de Guayabal')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-San-Geronimo-de-Guayabal-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Federacion')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Federacion-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Leonardo Infante')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Leonardo-Infante-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Las Mercedes')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Las-Mercedes-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Julian Mellado')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Julian-Mellado-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Francisco de Miranda')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Francisco-de-Miranda-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Tadeo Monagas')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Jose-Tadeo-Monagas-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ortiz')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Ortiz-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Felix Ribas')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Jose-Felix-Ribas-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Juan German Roscio')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Juan-German-Roscio-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Jose de Guaribe')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-San-Jose-de-Guaribe-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santa Maria de Ipire')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Santa-Maria-de-Ipire-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedro Zaraza')
                ->setState($this->getReference("State-Guarico"));
                $this->addReference('Municipality-Pedro-Zaraza-gua', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Eloy Blanco')
                ->setState($this->getReference("State-Lara"));
                $this->addReference('Municipality-Andres-Eloy-Blanco-lar', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Crespo')
                ->setState($this->getReference("State-Lara"));
                $this->addReference('Municipality-Crespo-lar', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Iribarren')
                ->setState($this->getReference("State-Lara"));
                $this->addReference('Municipality-Iribarren-lar', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jimenez')
                ->setState($this->getReference("State-Lara"));
                $this->addReference('Municipality-Jimenez-lar', $municipality); 
        $manager->persist($municipality);

        $municipality = new Municipality();
        $municipality
                ->setDescription('Moran')
                ->setState($this->getReference("State-Lara"));
                $this->addReference('Municipality-Moran-lar', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Palavecino')
                ->setState($this->getReference("State-Lara"));
                $this->addReference('Municipality-Palavecino-lar', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Planas')
                ->setState($this->getReference("State-Lara"));
                $this->addReference('Municipality-Simon-Planas-lar', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Torres')
                ->setState($this->getReference("State-Lara"));
                $this->addReference('Municipality-Torres-lar', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Urdaneta')
                ->setState($this->getReference("State-Lara"));
                $this->addReference('Municipality-Urdaneta-lar', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Alberto Adriani')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Alberto-Adriani-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Bello')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Andres-Bello-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Antonio Pinto Salinas')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Antonio-Pinto-Salinas-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Aricagua')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Aricagua-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Arzobispo Chacon')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Arzobispo-Chacon-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Caraccilo Parra y Olmedo')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Caraccilo-Parra-y-Olmedo-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Campo Elias')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Campo-Elias-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Felix Ribas')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Jose-Felix-Ribas-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cardenal Quintero')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Cardenal-Quintero-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guaraque')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Guaraque-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Julio Cesar Salas')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Julio-Cesar-Salas-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Justo Briceño')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Justo-Briceño-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Libertador-mer', $municipality); 
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Miranda')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Miranda-mer', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Obispo Ramos de Lora')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Obispo-Ramos-de-Lora-mer', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Padre Noguera')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Padre-Noguera-mer', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pueblo Llano')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Pueblo-Llano-mer', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rangel')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Rangel-mer', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rivas Davila')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Rivas-Davila-mer', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santos Marquina')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Santos-Marquina-mer', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Sucre-mer', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tovar')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Tovar-mer', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tulio Febres Cordero')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Tulio-Febres-Cordero-mer', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Zea')
                ->setState($this->getReference("State-Merida"));
                $this->addReference('Municipality-Zea-mer', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Acevedo')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Acevedo-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Bello')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Andres-Bello-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Baruta')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Baruta-mir', $municipality);
        $manager->persist($municipality);

        $municipality = new Municipality();
        $municipality
                ->setDescription('Brion')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Brion-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Buroz')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Buroz-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Carrizal')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Carrizal-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Chacao')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Chacao-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cristobal Rojas')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Cristobal-Rojas-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('El Hatillo')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-El-Hatillo-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guaicaipuro')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Guaicaipuro-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Independencia')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Independencia-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tomas Lander')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Tomas-Lander-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Los Salias')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Los-Salias-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Paez')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Paez-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Paz Castillo')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Paz-Castillo-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedro Gual')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Pedro-Gual-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Plaza')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Plaza-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Bolivar')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Simon-Bolivar-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Sucre-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Urdaneta')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Urdaneta-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Zamora')
                ->setState($this->getReference("State-Miranda"));
                $this->addReference('Municipality-Zamora-mir', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Acosta')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Acosta-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Aguasay')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Aguasay-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Bolivar-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Caripe')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Caripe-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cedeño')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Cedeño-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ezequiel Zamora')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Ezequiel-Zamora-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Libertador-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Maturin')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Maturin-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Piar')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Piar-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Punceres')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Punceres-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santa Barbara')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Santa-Barbara-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sotillo')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Sotillo-mon', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Uracoa')
                ->setState($this->getReference("State-Monagas"));
                $this->addReference('Municipality-Uracoa-mon', $municipality);
              $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Antolin del Campo')
                ->setState($this->getReference("State-Nueva-Esparta"));
                $this->addReference('Municipality-Antolin-del-Campo-nesp', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Arismendi')
                ->setState($this->getReference("State-Nueva-Esparta"));
                $this->addReference('Municipality-Arismendi-nesp', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Diaz')
                ->setState($this->getReference("State-Nueva-Esparta"));
                $this->addReference('Municipality-Diaz-nesp', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Garcia')
                ->setState($this->getReference("State-Nueva-Esparta"));
                $this->addReference('Municipality-Garcia-nesp', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Gomez')
                ->setState($this->getReference("State-Nueva-Esparta"));
                $this->addReference('Municipality-Gomez-nesp', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Maneiro')
                ->setState($this->getReference("State-Nueva-Esparta"));
                $this->addReference('Municipality-Maneiro-nesp', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Marcano')
                ->setState($this->getReference("State-Nueva-Esparta"));
                $this->addReference('Municipality-Marcano-nesp', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mariño')
                ->setState($this->getReference("State-Nueva-Esparta"));
                $this->addReference('Municipality-Mariño-nesp', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Peninsula de Macanao')
                ->setState($this->getReference("State-Nueva-Esparta"));
                $this->addReference('Municipality-Peninsula-de-Macanao-nesp', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Tubores')
                ->setState($this->getReference("State-Nueva-Esparta"));
                $this->addReference('Municipality-Tubores-nesp', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Villalba')
                ->setState($this->getReference("State-Nueva-Esparta"));
                $this->addReference('Municipality-Villalba-nesp', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Agua Blanca')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Agua-Blanca-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Araure')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Araure-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Esteller')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Esteller-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guanare')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Guanare-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guanarito')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Guanarito-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Monseñor')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Monseñor-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ospino')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Ospino-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Paez')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Paez-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Papelon')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Papelon-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Genaro de Boconoito')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-San-Genaro-de-Boconoito-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Rafael de Onoto')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-San-Rafael-de-Onoto-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santa Rosalia')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Santa-Rosalia-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Sucre-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Turen')
                ->setState($this->getReference("State-Portuguesa"));
                $this->addReference('Municipality-Turen-por', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Eloy Blanco')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Andres-Eloy-Blanco-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Mata')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Andres-Mata-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Arismendi')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Arismendi-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Benítez')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Benítez-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bermudez')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Bermudez-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Bolivar-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cajigal')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Cajigal-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cruz Salmeron Acosta')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Cruz-Salmeron-Acosta-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Libertador-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mariño')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Mariño-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mejia')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Mejia-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Montes')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Montes-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ribero')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Ribero-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Sucre-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Valdez')
                ->setState($this->getReference("State-Sucre"));
                $this->addReference('Municipality-Valdez-suc', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Bello')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Andres-Bello-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Antonio Romulo Costa')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Antonio-Romulo-Costa-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Ayacucho')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Ayacucho-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Bolivar-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cardenas')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Cardenas-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cordoba')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Cordoba-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Fernandez Feo')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Fernandez-Feo-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Francisco de Miranda')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Francisco-de-Miranda-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Garcia de Hevia')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Garcia-de-Hevia-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bermudez')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Bermudez-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Independencia')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Independencia-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jauregui')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Jauregui-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Maria Vargas')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Jose-Maria-Vargas-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Junin')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Junin-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertad')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Libertad-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Libertador')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Libertador-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Lobatera')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Lobatera-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Michelena')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Michelena-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Panamericano')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Panamericano-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pedro Maria Ureña')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Pedro-Maria-Ureña-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rafael Urdaneta')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Rafael-Urdaneta-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Samuel Dario Maldonado')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Samuel-Dario-Maldonado-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Cristobal')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-San-Cristobal-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Seboruco')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Seboruco-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Rodriguez')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Simon-Rodriguez-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Sucre-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Torbes')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Torbes-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Uribante')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Uribante-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Guasimo')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-Guasimo-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Judas Tadeo')
                ->setState($this->getReference("State-Tachira"));
                $this->addReference('Municipality-San-Judas-Tadeo-tac', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Andres Bello')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Andres-Bello-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bocono')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Bocono-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Bolivar-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Candelaria')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Candelaria-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Carache')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Carache-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Escuque')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Escuque-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Marquez Caziñales')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Marquez-Caziñales-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Campo Elias')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Campo-Elias-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('La Ceiba')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-La-Ceiba-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Miranda')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Miranda-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Monte Carmelo')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Monte-Carmelo-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Motatan')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Motatan-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pampan')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Pampan-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Pampanito')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Pampanito-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rafael Rangel')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Rafael-Rangel-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Rafael de Carvajal')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-San-Rafael-de-Carvajal-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Sucre-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Trujillo')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Trujillo-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Urdaneta')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Urdaneta-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Valera')
                ->setState($this->getReference("State-Trujillo"));
                $this->addReference('Municipality-Valera-tru', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bastidas')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Bastidas-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bolivar')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Bolivar-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Bruzual')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Bruzual-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cocorote')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Cocorote-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Independencia')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Independencia-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jose Antonio Paez')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Jose-Antonio-Paez-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('La Trinidad')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-La-Trinidad-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Manuel Monge')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Manuel-Monge-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Nirgua')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Nirgua-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Peña')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Peña-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Felipe')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-San-Felipe-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Sucre-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Urachiche')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Urachiche-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Veroes')
                ->setState($this->getReference("State-Yaracuy"));
                $this->addReference('Municipality-Veroes-yar', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Almirante Padilla')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Almirante-Padilla-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Baralt')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Baralt-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Cabimas')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Cabimas-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Catatumbo')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Catatumbo-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Colon')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Colon-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Francisco Javier Pulgar')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Francisco-Javier-Pulgar-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jesus Enrique Lossada ')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Jesus-Enrique-Lossada-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Jesus Maria Semprun')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Jesus-Maria-Semprun-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('La Cañada de Urdaneta')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-La-Cañada-de-Urdaneta-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Lagunillas')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Lagunillas-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Machiques de Perija')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Machiques-de-Perija-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Mara')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Mara-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Maracaibo')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Maracaibo-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Miranda')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Miranda-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Indígena Bolivariano Guajira')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Indígena-Bolivariano-Guajira-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Rosario de Perija')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Rosario-de-Perija-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('San Francisco')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-San-Francisco-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Santa Rita')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Santa-Rita-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Simon Bolivar')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Simon-Bolivar-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Sucre')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Sucre-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Valmore Rodriguez')
                ->setState($this->getReference("State-Zulia"));
                $this->addReference('Municipality-Valmore Rodriguez-zul', $municipality);
        $manager->persist($municipality);
        
        $municipality = new Municipality();
        $municipality
                ->setDescription('Vargas')
                ->setState($this->getReference("State-Vargas"));
                $this->addReference('Municipality-Vargas-var', $municipality);
        $manager->persist($municipality);
                
        $municipality = new Municipality();
        $municipality
                ->setDescription('Dependencias Federales')
                ->setState($this->getReference("State-Dependencias-Federales"));
                $this->addReference('Municipality-Dependencias-Federales-dp', $municipality);
        $manager->persist($municipality);





























        












            

            
              
            
            
            
           
           
                
           
        
        
        
        
        
        
        
        
        
        
            
           
            
           
            
          
            
           
            
            
           
            
            
            
            
           
            
            
           
        
    }
    public function getOrder() {
        return 3;
    }
}
