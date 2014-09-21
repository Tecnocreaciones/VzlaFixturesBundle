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
use Tecnocreaciones\Vzla\EntityBundle\Entity\Parish;

/**
 * Data de parroquias
 *
 * @see https://github.com/marydn/venezuela-sql/blob/master/venezuela.sql
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadParishData extends AbstractFixture implements OrderedFixtureInterface
{
    //parroquias del distrito capital
    public function load(ObjectManager $manager)
    {
            $parish = new Parish();
            $parish->setDescription('Altagracia')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-Altagracia-dc", $parish);
                $manager->persist($parish);
            
            $parish = new Parish();
            $parish->setDescription('Antimano')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-Antimano-dc", $parish);
                $manager->persist($parish);
                
            $parish = new Parish();
            $parish->setDescription('Candelaria')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-Candelaria-dc", $parish);
                $manager->persist($parish);
                
            $parish = new Parish();
            $parish->setDescription('Caricuao')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-Caricuao-dc", $parish);
                $manager->persist($parish);
                
            $parish = new Parish();
            $parish->setDescription('Catedral')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-Catedral-dc", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Coche')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-Coche-dc", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('El Junquito')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-El-Junquito-dc", $parish);
                $manager->persist($parish);            
                
            $parish = new Parish();
            $parish->setDescription('El Paraiso')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-El-Paraiso-dc", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('El Recreo')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-El-Recreo-dc", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('El valle')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-El-valle-dc", $parish);
                $manager->persist($parish); 
                
            $parish = new Parish();
            $parish->setDescription('La Pastora')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-La-Pastora-dc", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('La Vega')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-La-Vega-dc", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Macarao')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-Macarao-dc", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San Agustin')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-San-Agustin-dc", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('San Bernardino')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-San-Bernardino-dc", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San Jose')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-San-Jose-dc", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('San Juan')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-San-Juan-dc", $parish);
                $manager->persist($parish);             
                
            $parish = new Parish();
            $parish->setDescription('San Pedro')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-San-Pedro-dc", $parish);
                $manager->persist($parish);
                
            $parish = new Parish();
            $parish->setDescription('Santa Rosalia')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-Santa-Rosalia-dc", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Santa Teresa')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-Santa-Teresa-dc", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Sucre')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-Sucre-dc", $parish);
                $manager->persist($parish);            
                
            $parish = new Parish();
            $parish->setDescription('23 De Enero')
                    ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                    ->setState($this->getReference("State-Distrito-Capital-dc"))
                    ;
                    $this->addReference("Parish-23-De-Enero-dc", $parish);
                $manager->persist($parish);  
                
            //parroquias del estado amazonas    
                
            $parish = new Parish();
            $parish->setDescription('Alto Orinoco')
                    ->setMunicipality($this->getReference('Municipality-autonomo-alto-orinoco-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Alto-Orinoco-ama", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Huachamacare')
                    ->setMunicipality($this->getReference('Municipality-autonomo-alto-orinoco-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Huachamacare-ama", $parish);
                $manager->persist($parish); 
                
            $parish = new Parish();
            $parish->setDescription('Marawaka')
                    ->setMunicipality($this->getReference('Municipality-autonomo-alto-orinoco-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Marawaka-ama", $parish);
                $manager->persist($parish); 
                
            $parish = new Parish();
            $parish->setDescription('Mavaka')
                    ->setMunicipality($this->getReference('Municipality-autonomo-alto-orinoco-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Mavaka-ama", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Sierra-Parimabe')
                    ->setMunicipality($this->getReference('Municipality-autonomo-alto-orinoco-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Sierra-Parimabe-ama", $parish);
                $manager->persist($parish); 
                
            $parish = new Parish();
            $parish->setDescription('Atabapo')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-atabapo-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Atabapo-ama", $parish);
                $manager->persist($parish); 
                
            $parish = new Parish();
            $parish->setDescription('Ucata')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-atabapo-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Ucata-ama", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Yapacana')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-atabapo-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Yapacana-ama", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Caname')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-atabapo-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Caname-ama", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Samariapo')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-autana-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Samariapo-ama", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Sipapo')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-autana-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Sipapo-ama", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Munduapo')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-autana-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Munduapo-ama", $parish);
                $manager->persist($parish);     
                        
            $parish = new Parish();
            $parish->setDescription('Guayapo')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-autana-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Guayapo-ama", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('Manapiare')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-manapiare-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Manapiare-ama", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Alto Ventuari')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-manapiare-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Alto-Ventuari-ama", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Medio Ventuari')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-manapiare-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Medio-Ventuari-ama", $parish);
                $manager->persist($parish);      
            
            $parish = new Parish();
            $parish->setDescription('Bajo Ventuari')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-manapiare-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Bajo-Ventuari-ama", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Maroa')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-maroa-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Maroa-ama", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Victorino')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-maroa-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Victorino-ama", $parish);
                $manager->persist($parish); 
            
            $parish = new Parish();
            $parish->setDescription('Comunidad')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-maroa-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Comunidad-ama", $parish);
                $manager->persist($parish);    
                
                
                
            $parish = new Parish();
            $parish->setDescription('Casiquiare')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-rio-negro-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Casiquiare-ama", $parish);
                $manager->persist($parish);            
                
            $parish = new Parish();
            $parish->setDescription('Cocuy')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-rio-negro-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Cocuy-ama", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San Carlos')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-rio-negro-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-San-Carlos-ama", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Solano')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-rio-negro-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Solano-ama", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('Atures')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-atures-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Atures-ama", $parish);
                $manager->persist($parish);         
                
                
                
            $parish = new Parish();
            $parish->setDescription('Fernando Girón Tovar')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-atures-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Fernando-Girón-Tovar-ama", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Luis Alberto Gómez')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-atures-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Luis-Alberto-Gómez-ama", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Pahueña')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-atures-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Pahueña-ama", $parish);
                $manager->persist($parish);
                
            $parish = new Parish();
            $parish->setDescription('Platanillal')
                    ->setMunicipality($this->getReference('Municipality-Autonomo-atures-ama'))
                    ->setState($this->getReference("State-Amazonas"))
                    ;
                    $this->addReference("Parish-Platanillal-ama", $parish);
                $manager->persist($parish);          
                
                
            //parroquias del estado anzoategui
                
            $parish = new Parish();
            $parish->setDescription('Anaco')
                    ->setMunicipality($this->getReference('Municipality-Anaco-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Anaco-anz", $parish);
                $manager->persist($parish);              
                
            $parish = new Parish();
            $parish->setDescription('Buena Vista')
                    ->setMunicipality($this->getReference('Municipality-Anaco-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Buena-Vista-anz", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('San Joaquin')
                    ->setMunicipality($this->getReference('Municipality-Anaco-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-San-Joaquin-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Aragua de Barcelona')
                    ->setMunicipality($this->getReference('Municipality-Aragua-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Aragua-de-Barcelona-anz", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Cachipo')
                    ->setMunicipality($this->getReference('Municipality-Aragua-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Cachipo-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Bergantín')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Bergantin-anz", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Caigua')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Caigua-anz", $parish);
                $manager->persist($parish);           
            
            $parish = new Parish();
            $parish->setDescription('El Carmen')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-El-Carmen-anz", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('El Pilar')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-El-Pilar-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Naricual')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Naricual-anz", $parish);
                $manager->persist($parish);     
                   
            $parish = new Parish();
            $parish->setDescription('San Cristóbal')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-San-Cristóbal-anz", $parish);
                $manager->persist($parish);     
                       
            $parish = new Parish();
            $parish->setDescription('Clarines')
                    ->setMunicipality($this->getReference('Municipality-Bruzual-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Clarines-anz", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Guanape')
                    ->setMunicipality($this->getReference('Municipality-Bruzual-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Guanape-anz", $parish);
                $manager->persist($parish);      
            
            $parish = new Parish();
            $parish->setDescription('Sabana de Uchire')
                    ->setMunicipality($this->getReference('Municipality-Bruzual-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Sabana-de-Uchire-anz", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Valle de Guanape')
                    ->setMunicipality($this->getReference('Municipality-Carvajal-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Valle-de-Guanape-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Santa Bárbara')
                    ->setMunicipality($this->getReference('Municipality-Carvajal-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Santa-Bárbara-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Onoto')
                    ->setMunicipality($this->getReference('Municipality-Cajigal-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Onoto-anz", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('San Pablo')
                    ->setMunicipality($this->getReference('Municipality-Cajigal-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-San-Pablo-anz", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('Lechería')
                    ->setMunicipality($this->getReference('Municipality-Diego-Bautista-Urbaneja-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Lechería-anz", $parish);
                $manager->persist($parish);
                
            $parish = new Parish();
            $parish->setDescription('El Morro')
                    ->setMunicipality($this->getReference('Municipality-Diego-Bautista-Urbaneja-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-El-Morro-anz", $parish);
                $manager->persist($parish);

            $parish = new Parish();
            $parish->setDescription('Cantaura')
                    ->setMunicipality($this->getReference('Municipality-Freites-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Cantaura-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Libertador')
                    ->setMunicipality($this->getReference('Municipality-Freites-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Libertador-anz", $parish);
                $manager->persist($parish);
                
            $parish = new Parish();
            $parish->setDescription('Santa Rosa')
                    ->setMunicipality($this->getReference('Municipality-Freites-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Santa-Rosa-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Úrica')
                    ->setMunicipality($this->getReference('Municipality-Freites-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Úrica-anz", $parish);
                $manager->persist($parish);
                
            $parish = new Parish();
            $parish->setDescription('Guanta')
                    ->setMunicipality($this->getReference('Municipality-Guanta-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Guanta-anz", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Chorrerón')
                    ->setMunicipality($this->getReference('Municipality-Guanta-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Chorrerón-anz", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('San José de Guanipa')
                    ->setMunicipality($this->getReference('Municipality-Guanipa-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-San-José-de-Guanipa-anz", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Mamo')
                    ->setMunicipality($this->getReference('Municipality-Independencia-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Mamo-anz", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Soledad')
                    ->setMunicipality($this->getReference('Municipality-Independencia-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Soledad-anz", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('San Mateo')
                    ->setMunicipality($this->getReference('Municipality-Libertad-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-San-Mateo-anz", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('El Carito')
                    ->setMunicipality($this->getReference('Municipality-Libertad-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-El-Carito-anz", $parish);
                $manager->persist($parish);
                
            $parish = new Parish();
            $parish->setDescription('Santa Ines')
                    ->setMunicipality($this->getReference('Municipality-Libertad-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Santa-Ines-anz", $parish);
                $manager->persist($parish); 
                
            $parish = new Parish();
            $parish->setDescription('El Chaparro')
                    ->setMunicipality($this->getReference('Municipality-McGregor-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-El-Chaparro-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Tomás Alfaro')
                    ->setMunicipality($this->getReference('Municipality-McGregor-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Tomás-Alfaro-anz", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Calatrava')
                    ->setMunicipality($this->getReference('Municipality-McGregor-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Calatrava-anz", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Atapirire')
                    ->setMunicipality($this->getReference('Municipality-Miranda-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Atapirire-anz", $parish);
                $manager->persist($parish);      
                    
            $parish = new Parish();
            $parish->setDescription('Boca del Pao')
                    ->setMunicipality($this->getReference('Municipality-Miranda-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Boca-del-Pao-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('El Pao')
                    ->setMunicipality($this->getReference('Municipality-Miranda-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-El-Pao-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Pariaguán')
                    ->setMunicipality($this->getReference('Municipality-Miranda-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Pariaguán-anz", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Múcura')
                    ->setMunicipality($this->getReference('Municipality-Miranda-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Múcura-anz", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('Mapire')
                    ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Mapire-anz", $parish);
                $manager->persist($parish);  
                
                  
            $parish = new Parish();
            $parish->setDescription('Piar')
                    ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Piar-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Santa Clara')
                    ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Santa-Clara-anz", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('San Diego de Cabrutica')
                    ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-San-Diego-de-Cabrutica-anz", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Uverito')
                    ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Uverito-anz", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Zuata')
                    ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Zuata-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Puerto Píritu')
                    ->setMunicipality($this->getReference('Municipality-Peñalver-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Puerto-Pírituta-anz", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('San Miguel')
                    ->setMunicipality($this->getReference('Municipality-Peñalver-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-San-Miguel-anz", $parish);
                $manager->persist($parish);  
                
                
            $parish = new Parish();
            $parish->setDescription('Sucre')
                    ->setMunicipality($this->getReference('Municipality-Peñalver-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Sucre-anz", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Píritu')
                    ->setMunicipality($this->getReference('Municipality-Piritu-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Píritu-anz", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('San Francisco')
                    ->setMunicipality($this->getReference('Municipality-Piritu-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-San-Francisco-anz", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Boca de Uchire')
                    ->setMunicipality($this->getReference('Municipality-San-Juan-de-Capistrano-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Boca-de-Uchire-anz", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Boca de Chávez')
                    ->setMunicipality($this->getReference('Municipality-San-Juan-de-Capistrano-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Boca-de-Chávez-anz", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Pueblo Nuevo')
                    ->setMunicipality($this->getReference('Municipality-Santa-Ana-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Pueblo-Nuevo-anz", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Santa Ana')
                    ->setMunicipality($this->getReference('Municipality-Santa-Ana-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Santa-Ana-anz", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Edmundo Barrios')
                    ->setMunicipality($this->getReference('Municipality-Simon-Rodriguez-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Edmundo-Barrios-anz", $parish);
                $manager->persist($parish);      
                    
            $parish = new Parish();
            $parish->setDescription('Miguel Otero Silva')
                    ->setMunicipality($this->getReference('Municipality-Simon-Rodriguez-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Miguel-Otero-Silva-anz", $parish);
                $manager->persist($parish);      
                       
            $parish = new Parish();
            $parish->setDescription('Pozuelos')
                    ->setMunicipality($this->getReference('Municipality-Sotillo-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Pozuelos-anz", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Puerto La Cruz')
                    ->setMunicipality($this->getReference('Municipality-Sotillo-anz'))
                    ->setState($this->getReference("State-Anzoategui"))
                    ;
                    $this->addReference("Parish-Puerto-La-Cruz-anz", $parish);
                $manager->persist($parish);      
                
                
         //parroquias del estado apure
                
            $parish = new Parish();
            $parish->setDescription('Achaguas')
                    ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Achaguas-apu", $parish);
                $manager->persist($parish);             
                
            $parish = new Parish();
            $parish->setDescription('Apurito')
                    ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Apurito-apu", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('El Yagual')
                    ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-El-Yagual-apu", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Guachara')
                    ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Guachara-apu", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('Mucuritas')
                    ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Mucuritas-apu", $parish);
                $manager->persist($parish);   
                    
            $parish = new Parish();
            $parish->setDescription('Queseras del medio')
                    ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Queseras-del-medio-apu", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Biruaca')
                    ->setMunicipality($this->getReference('Municipality-Biruaca-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Biruaca-apu", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Bruzual')
                    ->setMunicipality($this->getReference('Municipality-Muñoz-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Bruzual-apu", $parish);
                $manager->persist($parish);             
                
            $parish = new Parish();
            $parish->setDescription('Mantecal')
                    ->setMunicipality($this->getReference('Municipality-Muñoz-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Mantecal-apu", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Quintero')
                    ->setMunicipality($this->getReference('Municipality-Muñoz-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Quintero-apu", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Rincón Hondo')
                    ->setMunicipality($this->getReference('Municipality-Muñoz-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Rincón-Hondo-apu", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('San Vicente')
                    ->setMunicipality($this->getReference('Municipality-Muñoz-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                        $this->addReference("Parish-San-Vicente-apu", $parish);
                $manager->persist($parish);        
                                
                
            $parish = new Parish();
            $parish->setDescription('San Juan de Payara')
                    ->setMunicipality($this->getReference('Municipality-Pedro-Camejo-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-San-Juan-de-Payara-apu", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Codazzi')
                    ->setMunicipality($this->getReference('Municipality-Pedro-Camejo-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Codazzi-apu", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Cunaviche')
                    ->setMunicipality($this->getReference('Municipality-Pedro-Camejo-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Cunaviche-apu", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Guasdualito')
                    ->setMunicipality($this->getReference('Municipality-Paez-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Guasdualito-apu", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('Arismendi')
                    ->setMunicipality($this->getReference('Municipality-Paez-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Arismendi-apu", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('El Amparo')
                    ->setMunicipality($this->getReference('Municipality-Paez-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-El-Amparo-apu", $parish);
                $manager->persist($parish);    
                   
            $parish = new Parish();
            $parish->setDescription('San Camilo')
                    ->setMunicipality($this->getReference('Municipality-Paez-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-San-Camilo-apu", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('Urdaneta')
                    ->setMunicipality($this->getReference('Municipality-Paez-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Urdaneta-apu", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Elorza')
                    ->setMunicipality($this->getReference('Municipality-Romulo-Gallegos-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Elorza-apu", $parish);
                $manager->persist($parish);    
                    
            $parish = new Parish();
            $parish->setDescription('La Trinidad')
                    ->setMunicipality($this->getReference('Municipality-Romulo-Gallegos-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-La-Trinidad-apu", $parish);
                $manager->persist($parish);  
                
                
            $parish = new Parish();
            $parish->setDescription('El Recreo')
                    ->setMunicipality($this->getReference('Municipality-San-Fernando-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-El-Recreo-apu", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Peñalver')
                    ->setMunicipality($this->getReference('Municipality-San-Fernando-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-Peñalver-apu", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('San Fernando')
                    ->setMunicipality($this->getReference('Municipality-San-Fernando-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-San-Fernando-apu", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('San Rafael de Atamaica')
                    ->setMunicipality($this->getReference('Municipality-San-Fernando-apu'))
                    ->setState($this->getReference("State-Apure"))
                    ;
                    $this->addReference("Parish-San-Rafael-de-Atamaica-apu", $parish);
                $manager->persist($parish);      
                
                
        //parroquias del estado Aragua
                
            $parish = new Parish();
            $parish->setDescription('San Mateo')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-San-Mateo-ara", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('Camatagua')
                    ->setMunicipality($this->getReference('Municipality-Camatagua-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Camatagua-ara", $parish);
                $manager->persist($parish); 
                
            $parish = new Parish();
            $parish->setDescription('Carmen de Cura')
                    ->setMunicipality($this->getReference('Municipality-Camatagua-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Carmen-de-Cura-ara", $parish);
                $manager->persist($parish);     
                
                
                
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Rita')
                    ->setMunicipality($this->getReference('Municipality-Francisco-Linares-Alcantara-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Santa-Rita-ara", $parish);
                $manager->persist($parish);          
              
            $parish = new Parish();
            $parish->setDescription('Francisco de Miranda')
                    ->setMunicipality($this->getReference('Municipality-Francisco-Linares-Alcantara-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Francisco-de-Miranda-ara", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Monseñor Feliciano González')
                    ->setMunicipality($this->getReference('Municipality-Francisco-Linares-Alcantara-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Monseñor-Feliciano-González-ara", $parish);
                $manager->persist($parish);    
                
               
            $parish = new Parish();
            $parish->setDescription('Andrés Eloy Blanco')
                    ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Andrés-Eloy-Blanco-ara", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Choroní')
                    ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Choroní-ara", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Joaquín Crespo')
                    ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Joaquín-Crespo-ara", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('José Casanova Godoy')
                    ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-José-Casanova-Godoy-ara", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Las Delicias')
                    ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Las-Delicias-ara", $parish);
                $manager->persist($parish);     
                   
            $parish = new Parish();
            $parish->setDescription('Los Tacariguas')
                    ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Los-Tacariguas-ara", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Pedro José Ovalles')
                    ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Pedro-José-Ovalles-ara", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San José')
                    ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-San-José-ara", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Santa Cruz')
                    ->setMunicipality($this->getReference('Municipality-Jose-Angel-Lamas-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Santa-Cruz-ara", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Juan Vicente Bolívar y Ponte')
                    ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Juan-Vicente-Bolívar-y-Ponte-ara", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Castor Nieves Ríos')
                    ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Castor-Nieves-Ríos-ara", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('No Urbana Las Guacamayas')
                    ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-No-Urbana-Las-Guacamayas-ara", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('No Urbana Pao de Zárate')
                    ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-No-Urbana-Pao-de-Zárate-ara", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('No Urbana Zuata')
                    ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-No-Urbana-Zuata-ara", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('El Consejo')
                    ->setMunicipality($this->getReference('Municipality-Jose-Rafael-Revenga-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-El-Consejo-ara", $parish);
                $manager->persist($parish);      
                   
            $parish = new Parish();
            $parish->setDescription('Palo Negro')
                    ->setMunicipality($this->getReference('Municipality-Libertador-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Palo-Negro-ara", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('San Martín de Porres')
                    ->setMunicipality($this->getReference('Municipality-Libertador-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-San-Martín-de-Porres-ara", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Mario Briceño Iragorry')
                    ->setMunicipality($this->getReference('Municipality-Mario-Briceño-Iragorry-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Mario-Briceño-Iragorry-ara", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Caña de Azúcar')
                    ->setMunicipality($this->getReference('Municipality-Mario-Briceño-Iragorry-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Caña-de-Azúcar-ara", $parish);
                $manager->persist($parish);        
                   
                
            $parish = new Parish();
            $parish->setDescription('Ocumare de La Costa de Oro')
                    ->setMunicipality($this->getReference('Municipality-Ocumare-de-la-Costa-de-Oro-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Ocumare-de-La-Costa-de-Oro-ara", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('San Casimiro')
                    ->setMunicipality($this->getReference('Municipality-San-Casimiro-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-San-Casimiro-ara", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Urbana Güiripa')
                    ->setMunicipality($this->getReference('Municipality-San-Casimiro-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Urbana-Güiripa-ara", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Urbana Ollas de Caramacate')
                    ->setMunicipality($this->getReference('Municipality-San-Casimiro-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Urbana-Ollas-de-Caramacate-ara", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Urbana Valle Morín')
                    ->setMunicipality($this->getReference('Municipality-San-Casimiro-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Urbana-Valle-Morín-ara", $parish);
                $manager->persist($parish);        
                
                
                
            $parish = new Parish();
            $parish->setDescription('San-Sebastian')
                    ->setMunicipality($this->getReference('Municipality-San-Sebastian-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-San-Sebastian-ara", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Turmero')
                    ->setMunicipality($this->getReference('Municipality-Santiago-Mariño-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Turmero-ara", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Arevalo Aponte')
                    ->setMunicipality($this->getReference('Municipality-Santiago-Mariño-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Arevalo-Aponte-ara", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Chuao')
                    ->setMunicipality($this->getReference('Municipality-Santiago-Mariño-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Chuao-ara", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Samán de Güere')
                    ->setMunicipality($this->getReference('Municipality-Santiago-Mariño-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Samán-de-Güere-ara", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Alfredo Pacheco Miranda')
                    ->setMunicipality($this->getReference('Municipality-Santiago-Mariño-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Alfredo-Pacheco-Miranda-ara", $parish);
                $manager->persist($parish);     
             
                
            $parish = new Parish();
            $parish->setDescription('Santos Michelena')
                    ->setMunicipality($this->getReference('Municipality-Santos-Michelena-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Santos-Michelena-ara", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('No Urbana Tiara')
                    ->setMunicipality($this->getReference('Municipality-Santos-Michelena-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-No-Urbana-Tiara-ara", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Sucre')
                    ->setMunicipality($this->getReference('Municipality-Sucre-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Sucre-ara", $parish);
                $manager->persist($parish);             
                
                
            $parish = new Parish();
            $parish->setDescription('Bella Vista')
                    ->setMunicipality($this->getReference('Municipality-Sucre-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Bella-Vista-ara", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Parroquia Capital Tovar')
                    ->setMunicipality($this->getReference('Municipality-Tovar-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Parroquia-Capital-Tovar-ara", $parish);
                $manager->persist($parish);        
                   
            $parish = new Parish();
            $parish->setDescription('Capital Urdaneta')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Capital-Urdaneta-ara", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('No Urbana Las Peñitas')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-No-Urbana-Las-Peñitas-ara", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('No Urbana San Francisco de Cara')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-No-Urbana-San-Francisco-de-Cara-ara", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('No Urbana Taguay')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-No-Urbana-Taguay-ara", $parish);
                $manager->persist($parish); 
                
                
                
            $parish = new Parish();
            $parish->setDescription('Capital Zamora')
                    ->setMunicipality($this->getReference('Municipality-Zamora-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-Capital-Zamora-ara", $parish);
                $manager->persist($parish);     
                
                
                
            $parish = new Parish();
            $parish->setDescription('No Urbana Magdaleno')
                    ->setMunicipality($this->getReference('Municipality-Zamora-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-No-Urbana-Magdaleno-ara", $parish);
                $manager->persist($parish);     
                   
                
                
            $parish = new Parish();
            $parish->setDescription('No Urbana San Francisco de Asís')
                    ->setMunicipality($this->getReference('Municipality-Zamora-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-No-Urbana-San-Francisco-de-Asís-ara", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('No Urbana Valles de Tucutunemo')
                    ->setMunicipality($this->getReference('Municipality-Zamora-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-No-Urbana-Valles-de-Tucutunemo-ara", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('No Urbana Augusto Mijares')
                    ->setMunicipality($this->getReference('Municipality-Zamora-ara'))
                    ->setState($this->getReference("State-Aragua"))
                    ;
                    $this->addReference("Parish-No-Urbana-Augusto-Mijares-ara", $parish);
                $manager->persist($parish);
                
            //parroquias del estado barinas
                
                
            $parish = new Parish();
            $parish->setDescription('Arismendi')
                    ->setMunicipality($this->getReference('Municipality-Arismendi-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Arismendi-bar", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Guadarrama')
                    ->setMunicipality($this->getReference('Municipality-Arismendi-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Guadarrama-bar", $parish);
                $manager->persist($parish);    
                    
            $parish = new Parish();
            $parish->setDescription('La Unión,')
                    ->setMunicipality($this->getReference('Municipality-Arismendi-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-La-Unión-bar", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San Antonio')
                    ->setMunicipality($this->getReference('Municipality-Arismendi-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-San-Antonio-bar", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Barinas')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Barinas-bar", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Alfredo Arvelo Larriva')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Alfredo-Arvelo-Larriva-bar", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San Silvestre')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-San-Silvestre-bar", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Inés')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Santa-Inés-bar", $parish);
                $manager->persist($parish);         
                
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Lucía')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Santa-Lucía-bar", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Torunos')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Torunos-bar", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('EL Carmen')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-EL-Carmen-bar", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Rómulo Betancourt')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Rómulo-Betancourt-bar", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Corazón de Jesús')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Corazón-de-Jesús-bar", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Ramón Ignacio Méndez')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Ramón-Ignacio-Méndez-bar", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Alto Barinas')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Alto-Barinas-bar", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Manuel Palacio Fajardo')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Manuel-Palacio-Fajardo-bar", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Juan Antonio Rodríguez Domínguez')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Juan-Antonio-Rodríguez-Domínguez-bar", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Dominga Ortiz de Páez')
                    ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Dominga-Ortiz-de-Páez-bar", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('El Cantón')
                    ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-El-Cantón-bar", $parish);
                $manager->persist($parish);            
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Cruz de Guacas')
                    ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Santa-Cruz-de-Guacas-bar", $parish);
                $manager->persist($parish);            
                
                
            $parish = new Parish();
            $parish->setDescription('Puerto Vivas')
                    ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Puerto-Vivas-bar", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Barinitas')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Barinitas-bar", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Altamira de Cáceres')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Altamira-de-Cáceres-bar", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Calderas')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Calderas-bar", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Masparrito')
                    ->setMunicipality($this->getReference('Municipality-Cruz-Paredes-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Masparrito-bar", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('El Socorro')
                    ->setMunicipality($this->getReference('Municipality-Cruz-Paredes-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-El-Socorro-bar", $parish);
                $manager->persist($parish);            
                
                
                
            $parish = new Parish();
            $parish->setDescription('Barrancas')
                    ->setMunicipality($this->getReference('Municipality-Cruz-Paredes-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Barrancas-bar", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Ciudad Bolivia')
                    ->setMunicipality($this->getReference('Municipality-Pedraza-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Ciudad-Bolivia-bar", $parish);
                $manager->persist($parish);             
                
                
            $parish = new Parish();
            $parish->setDescription('Ignacio Briceño')
                    ->setMunicipality($this->getReference('Municipality-Pedraza-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Ignacio-Briceño-bar", $parish);
                $manager->persist($parish);         
                
               
                
            $parish = new Parish();
            $parish->setDescription('José Félix Ribas')
                    ->setMunicipality($this->getReference('Municipality-Pedraza-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-José-Félix-Ribas-bar", $parish);
                $manager->persist($parish);            
                
                
            $parish = new Parish();
            $parish->setDescription('Páez')
                    ->setMunicipality($this->getReference('Municipality-Pedraza-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Páez-bar", $parish);
                $manager->persist($parish);       
                
            
            $parish = new Parish();
            $parish->setDescription('Libertad')
                    ->setMunicipality($this->getReference('Municipality-Rojas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Libertad-bar", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Dolores')
                    ->setMunicipality($this->getReference('Municipality-Rojas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Dolores-bar", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Rosa')
                    ->setMunicipality($this->getReference('Municipality-Rojas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Santa-Rosa-bar", $parish);
                $manager->persist($parish);               
                
                
            $parish = new Parish();
            $parish->setDescription('Simón Rodríguez')
                    ->setMunicipality($this->getReference('Municipality-Rojas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Simón-Rodríguez-bar", $parish);
                $manager->persist($parish);     
                
                
                
            $parish = new Parish();
            $parish->setDescription('Palacio Fajardo')
                    ->setMunicipality($this->getReference('Municipality-Rojas-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Palacio-Fajardo-bar", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Ciudad de Nutrias')
                    ->setMunicipality($this->getReference('Municipality-Sosa-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Ciudad-de-Nutrias-bar", $parish);
                $manager->persist($parish);      
                    
                
            $parish = new Parish();
            $parish->setDescription('El Regalo')
                    ->setMunicipality($this->getReference('Municipality-Sosa-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-El-Regalo-bar", $parish);
                $manager->persist($parish);      
                        
                
            $parish = new Parish();
            $parish->setDescription('Puerto Nutrias')
                    ->setMunicipality($this->getReference('Municipality-Sosa-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Puerto-Nutrias-bar", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Catalina')
                    ->setMunicipality($this->getReference('Municipality-Sosa-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Santa-Catalina-bar", $parish);
                $manager->persist($parish);         
                    
                
            $parish = new Parish();
            $parish->setDescription('Simón Bolívar')
                    ->setMunicipality($this->getReference('Municipality-Sosa-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Simón-Bolívar-bar", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Nicolás Pulido')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Jose-de-Sucre-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Nicolás-Pulido-bar", $parish);
                $manager->persist($parish);         
            
            $parish = new Parish();
            $parish->setDescription('Ticoporo')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Jose-de-Sucre-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Ticoporo-bar", $parish);
                $manager->persist($parish);         
          
                
            $parish = new Parish();
            $parish->setDescription('Andrés Bello')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Jose-de-Sucre-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Andrés-Bello-bar", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Sabaneta')
                    ->setMunicipality($this->getReference('Municipality-Alberto-Arvelo-Torrealba-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Sabaneta-bar", $parish);
                $manager->persist($parish);      
                    
                
            $parish = new Parish();
            $parish->setDescription('Rodríguez Domínguez')
                    ->setMunicipality($this->getReference('Municipality-Alberto-Arvelo-Torrealba-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Rodríguez-Domínguez-bar", $parish);
                $manager->persist($parish);      
                
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Bárbara')
                    ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Santa-Bárbara-bar", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Parroquia Pedro Briceño Méndez')
                    ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Parroquia-Pedro-Briceño-Méndez-bar", $parish);
                $manager->persist($parish);          
                
                
                
            $parish = new Parish();
            $parish->setDescription('Ramón Ignacio Méndez')
                    ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Ramón-Ignacio-Méndez-ez-bar", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('José Ignacio del Pumar')
                    ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-José-Ignacio-del-Pumar-bar", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('Obispos')
                    ->setMunicipality($this->getReference('Municipality-Obispos-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Obispos-bar", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('El Real')
                    ->setMunicipality($this->getReference('Municipality-Obispos-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-El-Real-bar", $parish);
                $manager->persist($parish);      
            
            $parish = new Parish();
            $parish->setDescription('La Luz')
                    ->setMunicipality($this->getReference('Municipality-Obispos-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-La-Luz-bar", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('Los Guasimitos')
                    ->setMunicipality($this->getReference('Municipality-Obispos-bar'))
                    ->setState($this->getReference("State-Barinas"))
                    ;
                    $this->addReference("Parish-Los-Guasimitos-bar", $parish);
                $manager->persist($parish);           
                   
                
                
        //parroquias del estado Bolivar
                
                
            $parish = new Parish();
            $parish->setDescription('Capital Angostura')
                    ->setMunicipality($this->getReference('Municipality-Angostura-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Capital-Angostura-bol", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Barceloneta')
                    ->setMunicipality($this->getReference('Municipality-Angostura-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Barceloneta-bol", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('San Francisco')
                    ->setMunicipality($this->getReference('Municipality-Angostura-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-San-Francisco-bol", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Bárbara')
                    ->setMunicipality($this->getReference('Municipality-Angostura-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Santa-Bárbara-bol", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('5 de Julio')
                    ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-5-de-Julio-bol", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Cachamay')
                    ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Cachamay-bol", $parish);
                $manager->persist($parish);      
                
                
                
            $parish = new Parish();
            $parish->setDescription('Chirica')
                    ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Chirica-bol", $parish);
                $manager->persist($parish);     
                
                
                
            $parish = new Parish();
            $parish->setDescription('Once de Abril')
                    ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Once-de-Abril-bol", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Dalla Costa')
                    ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Dalla-Costa-car-bol", $parish);
                $manager->persist($parish);     
                    
                
            $parish = new Parish();
            $parish->setDescription('Pozo Verde')
                    ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Pozo-Verde-bol", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Simón Bolívar')
                    ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Simón-Bolívar-bol", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Unare')
                    ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Unare-bol", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Universidad')
                    ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Universidad-bol", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Vista al Sol')
                    ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Vista-al-Sol-bol", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Yocoima')
                    ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Yocoima-bol", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Altagracia')
                    ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Altagracia-bol", $parish);
                $manager->persist($parish);     
                   
                
            $parish = new Parish();
            $parish->setDescription('Ascención Farreras')
                    ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Ascención-Farreras-bol", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Caicara del Orinoco')
                    ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Caicara-del-Orinoco-bol", $parish);
                $manager->persist($parish);             
                
                
            $parish = new Parish();
            $parish->setDescription('Guaniamo')
                    ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Guaniamo-bol", $parish);
                $manager->persist($parish);             
                    
                
                
            $parish = new Parish();
            $parish->setDescription('La Urbana')
                    ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-La-Urbana-bol", $parish);
                $manager->persist($parish);             
                                       
                
            $parish = new Parish();
            $parish->setDescription('Pijiguaos')
                    ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Pijiguaos-bol", $parish);
                $manager->persist($parish);             
                            
                
            $parish = new Parish();
            $parish->setDescription('El Palmar')
                    ->setMunicipality($this->getReference('Municipality-Padre-Pedro-Chien-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-El-Palmar-bol", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Río Grande')
                    ->setMunicipality($this->getReference('Municipality-Padre-Pedro-Chien-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Río-Grande-bol", $parish);
                $manager->persist($parish);       
                
                
                
            $parish = new Parish();
            $parish->setDescription('El Callao')
                    ->setMunicipality($this->getReference('Municipality-El-Callao-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-El-Callao-bol", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Gran Sabana')
                    ->setMunicipality($this->getReference('Municipality-Gran-Sabana-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Gran-Sabana-bol", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Ikabarú')
                    ->setMunicipality($this->getReference('Municipality-Gran-Sabana-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Ikabarú-bol", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Agua Salada')
                    ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Agua-Salada-bol", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Catedral')
                    ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Catedral-bol", $parish);
                $manager->persist($parish);      
                   
                
            $parish = new Parish();
            $parish->setDescription('José Antonio Páez')
                    ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-José-Antonio-Páez-bol", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('La Sabanita')
                    ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-La-Sabanita-bol", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Vista Hermosa')
                    ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Vista-Hermosa-bol", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Marhuanta')
                    ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Marhuanta-bol", $parish);
                $manager->persist($parish);      
                    
                
            $parish = new Parish();
            $parish->setDescription('Orinoco')
                    ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Orinoco-bol", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Panapana')
                    ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Panapana-bol", $parish);
                $manager->persist($parish);         
                
                          
            $parish = new Parish();
            $parish->setDescription('Zea')
                    ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Zea-bol", $parish);
                $manager->persist($parish);              
                
                
                
            $parish = new Parish();
            $parish->setDescription('Andrés Eloy Blanco')
                    ->setMunicipality($this->getReference('Municipality-Piar-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Andrés-Eloy-Blanco-bol", $parish);
                $manager->persist($parish);              
                     
                
            $parish = new Parish();
            $parish->setDescription('Pedro Cova')
                    ->setMunicipality($this->getReference('Municipality-Piar-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Pedro-Cova-bol", $parish);
                $manager->persist($parish);              
                         
                
            $parish = new Parish();
            $parish->setDescription('Upata')
                    ->setMunicipality($this->getReference('Municipality-Piar-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Upata-bol", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Salom')
                    ->setMunicipality($this->getReference('Municipality-Roscio-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Salom-bol", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Roscio')
                    ->setMunicipality($this->getReference('Municipality-Roscio-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Roscio-bol", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Dalla Costa')
                    ->setMunicipality($this->getReference('Municipality-Sifontes-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Dalla-Costa-bol", $parish);
                $manager->persist($parish);        
                 
                
            $parish = new Parish();
            $parish->setDescription('San Isidro')
                    ->setMunicipality($this->getReference('Municipality-Sifontes-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-San-Isidro-bol", $parish);
                $manager->persist($parish);         
                
                                
            $parish = new Parish();
            $parish->setDescription('Tumeremo')
                    ->setMunicipality($this->getReference('Municipality-Sifontes-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Tumeremo-bol", $parish);
                $manager->persist($parish);     
                
                                
            $parish = new Parish();
            $parish->setDescription('Sucre')
                    ->setMunicipality($this->getReference('Municipality-Sucre-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Sucre-bol", $parish);
                $manager->persist($parish);        
                
                
                
            $parish = new Parish();
            $parish->setDescription('Aripao')
                    ->setMunicipality($this->getReference('Municipality-Sucre-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Aripao-bol", $parish);
                $manager->persist($parish);        
                    
                
            $parish = new Parish();
            $parish->setDescription('Guarataro')
                    ->setMunicipality($this->getReference('Municipality-Sucre-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Guarataro-bol", $parish);
                $manager->persist($parish);        
                        
                
            $parish = new Parish();
            $parish->setDescription('Las Majadas')
                    ->setMunicipality($this->getReference('Municipality-Sucre-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Las-Majadas-bol", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Moitaco')
                    ->setMunicipality($this->getReference('Municipality-Sucre-bol'))
                    ->setState($this->getReference("State-Bolivar"))
                    ;
                    $this->addReference("Parish-Moitaco-bol", $parish);
                $manager->persist($parish);         
                    
                
          //parroquias del estado carabobo
                            
                
            $parish = new Parish();
            $parish->setDescription('Bejuma')
                    ->setMunicipality($this->getReference('Municipality-Bejuma-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Bejuma-car", $parish);
                $manager->persist($parish);         
                
                
                
            $parish = new Parish();
            $parish->setDescription('Canoabo')
                    ->setMunicipality($this->getReference('Municipality-Bejuma-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Canoabo-car", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Simón Bolívar')
                    ->setMunicipality($this->getReference('Municipality-Bejuma-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Simón-Bolívar-car", $parish);
                $manager->persist($parish);     
                   
                
            $parish = new Parish();
            $parish->setDescription('Güigüe')
                    ->setMunicipality($this->getReference('Municipality-Carlos-Arvelo-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Güigüe-car", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('No Urbana Belén')
                    ->setMunicipality($this->getReference('Municipality-Carlos-Arvelo-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-No-Urbana-Belén-car", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('No Urbana Tacarigua')
                    ->setMunicipality($this->getReference('Municipality-Carlos-Arvelo-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-No-Urbana-Tacarigua-car", $parish);
                $manager->persist($parish);       
                    
                
                
            $parish = new Parish();
            $parish->setDescription('Mariara')
                    ->setMunicipality($this->getReference('Municipality-Diego-Ibarra-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Mariara-car", $parish);
                $manager->persist($parish);           
                
                
                
            $parish = new Parish();
            $parish->setDescription('Aguas Calientes')
                    ->setMunicipality($this->getReference('Municipality-Diego-Ibarra-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Aguas-Calientes-car", $parish);
                $manager->persist($parish);      
                
            
            $parish = new Parish();
            $parish->setDescription('Ciudad Alianza')
                    ->setMunicipality($this->getReference('Municipality-Guacara-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Ciudad-Alianza-car", $parish);
                $manager->persist($parish);
                
                
            $parish = new Parish();
            $parish->setDescription('Guacara')
                    ->setMunicipality($this->getReference('Municipality-Guacara-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Guacara-car", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('Yagua')
                    ->setMunicipality($this->getReference('Municipality-Guacara-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Yagua-car", $parish);
                $manager->persist($parish);     
                
                
                
            $parish = new Parish();
            $parish->setDescription('Morón')
                    ->setMunicipality($this->getReference('Municipality-Juan-Jose-Mora-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Morón-car", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Urama')
                    ->setMunicipality($this->getReference('Municipality-Juan-Jose-Mora-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Urama-car", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Independecia')
                    ->setMunicipality($this->getReference('Municipality-Libertador-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Independecia-car", $parish);
                $manager->persist($parish);       
                    
                
            $parish = new Parish();
            $parish->setDescription('Tocuyito')
                    ->setMunicipality($this->getReference('Municipality-Libertador-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Tocuyito-car", $parish);
                $manager->persist($parish);       
                       
                                
            $parish = new Parish();
            $parish->setDescription('Los Guayos')
                    ->setMunicipality($this->getReference('Municipality-Los-Guayos-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Los-Guayos-car", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Miranda')
                    ->setMunicipality($this->getReference('Municipality-Miranda-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Miranda-car", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Montalbán')
                    ->setMunicipality($this->getReference('Municipality-Montalban-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Montalbán-car", $parish);
                $manager->persist($parish);      
                
            
            $parish = new Parish();
            $parish->setDescription('Naguanagua')
                    ->setMunicipality($this->getReference('Municipality-Naguanagua-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Naguanagua-car", $parish);
                $manager->persist($parish);          
                
                
                
            $parish = new Parish();
            $parish->setDescription('Bartolomé Salom')
                    ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Bartolomé-Salom-car", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Borburata')
                    ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Borburata-car", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Democracia')
                    ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Democracia-car", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Fraternidad')
                    ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Fraternidad-car", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Goaigoaza')
                    ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Goaigoaza-car", $parish);
                $manager->persist($parish);        
                    
                
            $parish = new Parish();
            $parish->setDescription('Juan José Flores')
                    ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Juan-José-Flores-car", $parish);
                $manager->persist($parish);            
                
                
            $parish = new Parish();
            $parish->setDescription('Patanemo')
                    ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Patanemo-car", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Unión')
                    ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Unión-car", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('San Diego')
                    ->setMunicipality($this->getReference('Municipality-San-Diego-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-San-Diego-car", $parish);
                $manager->persist($parish);       
                
                
                
            $parish = new Parish();
            $parish->setDescription('San Joaquín')
                    ->setMunicipality($this->getReference('Municipality-San-Joaquin-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-San-Joaquín-car", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Urbana Candelaria')
                    ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Urbana-Candelaria-car", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Urbana Catedral')
                    ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Urbana-Catedral-car", $parish);
                $manager->persist($parish);        
                   
                
            $parish = new Parish();
            $parish->setDescription('El Socorro')
                    ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-El-Socorro-car", $parish);
                $manager->persist($parish);        
                    
            $parish = new Parish();
            $parish->setDescription('Miguel Peña')
                    ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Miguel-Peña-car", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Rafael Urdaneta')
                    ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Rafael-Urdaneta-car", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('San Blas')
                    ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-San-Blas-car", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('San-José')
                    ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-San-José-car", $parish);
                $manager->persist($parish);     
                   
                
            $parish = new Parish();
            $parish->setDescription('Santa Rosa')
                    ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Santa-Rosa-car", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Negro Primero')
                    ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                    ->setState($this->getReference("State-Carabobo"))
                    ;
                    $this->addReference("Parish-Negro-Primero-car", $parish);
                $manager->persist($parish);       
                
                
        // parroquias del estado cojedes
                
                
            $parish = new Parish();
            $parish->setDescription('Cojedes')
                    ->setMunicipality($this->getReference('Municipality-Anzoategui-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-Cojedes-coj", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Juan de Mata Suárez')
                    ->setMunicipality($this->getReference('Municipality-Anzoategui-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-Juan-de-Mata-Suárez-coj", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('El Pao')
                    ->setMunicipality($this->getReference('Municipality-Pao-de-San-Juan-Bautista-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-El-Pao-coj", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Tinaquillo')
                    ->setMunicipality($this->getReference('Municipality-Tinaquillo-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-Tinaquillo-coj", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('El Baúl')
                    ->setMunicipality($this->getReference('Municipality-Girardot-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-El-Baúl-coj", $parish);
                $manager->persist($parish);        
                   
                
            $parish = new Parish();
            $parish->setDescription('Sucre')
                    ->setMunicipality($this->getReference('Municipality-Girardot-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-Sucre-coj", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Macapo')
                    ->setMunicipality($this->getReference('Municipality-Lima-Blanco-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-Macapo-coj", $parish);
                $manager->persist($parish);    
                
                
                
            $parish = new Parish();
            $parish->setDescription('La Aguadita')
                    ->setMunicipality($this->getReference('Municipality-Lima-Blanco-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-La-Aguadita-coj", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Libertad de Cojedes')
                    ->setMunicipality($this->getReference('Municipality-Ricaurte-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-Libertad-de-Cojedes-coj", $parish);
                $manager->persist($parish);       
                    
                
            $parish = new Parish();
            $parish->setDescription('El Amparo')
                    ->setMunicipality($this->getReference('Municipality-Ricaurte-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-El-Amparo-coj", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Rómulo Gallegos')
                    ->setMunicipality($this->getReference('Municipality-Romulo-Gallegos-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-Rómulo-Gallegos-coj", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('San Carlos')
                    ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-San-Carlos-coj", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Juan Angel Bravo')
                    ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-Juan-Angel-Bravo-coj", $parish);
                $manager->persist($parish);
                
                
            $parish = new Parish();
            $parish->setDescription('Manuel Manrique')
                    ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-Manuel-Manrique-coj", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('General en Jefe José Silva')
                    ->setMunicipality($this->getReference('Municipality-Tinaco-coj'))
                    ->setState($this->getReference("State-Cojedes"))
                    ;
                    $this->addReference("Parish-General-en-Jefe-José-Silva-coj", $parish);
                $manager->persist($parish);          
                
            
            //  parroquias del estado delta amacuro  
                
                
                
            $parish = new Parish();
            $parish->setDescription('Curiapo')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Curiapo-del", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Almirante Luis Brión')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Almirante Luis Brión-del", $parish);
                $manager->persist($parish);          
                    
                
            $parish = new Parish();
            $parish->setDescription('Francisco Aniceto Lugo')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Francisco-Aniceto-Lugo-del", $parish);
                $manager->persist($parish);     
            
                
            $parish = new Parish();
            $parish->setDescription('Manuel Renaud')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Manuel-Renaud-del", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Padre Barral')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Padre-Barral-del", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Santos de Abelgas')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Santos-de-Abelgas-del", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Imataca Moruca')
                    ->setMunicipality($this->getReference('Municipality-Casacoima-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Imataca-Moruca-del", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Cinco de Julio Piacoa')
                    ->setMunicipality($this->getReference('Municipality-Casacoima-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Cinco-de-Julio-Piacoa-del", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Juan Bautista Arismendi')
                    ->setMunicipality($this->getReference('Municipality-Casacoima-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Juan-Bautista-Arismendi-del", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Manuel Piar')
                    ->setMunicipality($this->getReference('Municipality-Casacoima-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Manuel-Piar-del", $parish);
                $manager->persist($parish);     
                
                
                
            $parish = new Parish();
            $parish->setDescription('Rómulo Gallegos')
                    ->setMunicipality($this->getReference('Municipality-Casacoima-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Rómulo-Gallegos-del", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Pedernales')
                    ->setMunicipality($this->getReference('Municipality-Pedernales-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Pedernales-del", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Luis Beltrán Prieto Figueroa')
                    ->setMunicipality($this->getReference('Municipality-Pedernales-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Luis-Beltrán-Prieto-Figueroa-del", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('San José')
                    ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-San-José-del", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('José Vidal Marcano')
                    ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-José-Vidal-Marcano-del", $parish);
                $manager->persist($parish);        
                
                    
            $parish = new Parish();
            $parish->setDescription('Juan Millán')
                    ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Juan-Millán-del", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Leonardo Ruíz Pineda')
                    ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Leonardo-Ruíz-Pineda-del", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('Mariscal Antonio José de Sucre')
                    ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Mariscal-Antonio-José-de-Sucre-del", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Monseñor Argimiro García')
                    ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Monseñor-Argimiro-García-del", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('San Rafael')
                    ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-San-Rafael-del", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Virgen del Valle')
                    ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                    ->setState($this->getReference("State-Delta-Amacuro"))
                    ;
                    $this->addReference("Parish-Virgen-del-Valle-del", $parish);
                $manager->persist($parish);     
                   
                
            //parroquias del estado falcon
                
            $parish = new Parish();
            $parish->setDescription('Capadare')
                    ->setMunicipality($this->getReference('Municipality-Acosta-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Capadare-fal", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('La Pastora')
                    ->setMunicipality($this->getReference('Municipality-Acosta-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-La-Pastora-fal", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Libertador')
                    ->setMunicipality($this->getReference('Municipality-Acosta-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Libertador-fal", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San Juan de los Cayos')
                    ->setMunicipality($this->getReference('Municipality-Acosta-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-San-Juan-de-los-Cayos-fal", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Aracua')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Aracua-fal", $parish);
                $manager->persist($parish);     
                   
                
            $parish = new Parish();
            $parish->setDescription('La Peña')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-La-Peña-fal", $parish);
                $manager->persist($parish);     
                       
                
            $parish = new Parish();
            $parish->setDescription('San Luis')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-San-Luis-fal", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Bariro')
                    ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Bariro-fal", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Borojo')
                    ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Borojo-fal", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Capatárida')
                    ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Capatárida-fal", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Guajiro')
                    ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Guajiro-fal", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Seque')
                    ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Seque-fal", $parish);
                $manager->persist($parish);        
                    
            $parish = new Parish();
            $parish->setDescription('Zazárida')
                    ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Zazárida-fal", $parish);
                $manager->persist($parish);        
                        
            $parish = new Parish();
            $parish->setDescription('Valle de Eroa')
                    ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Valle-de-Eroa-fal", $parish);
                $manager->persist($parish);        
                           
                
            $parish = new Parish();
            $parish->setDescription('Cacique Manaure')
                    ->setMunicipality($this->getReference('Municipality-Cacique-Manaure-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Cacique-Manaure-fal", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Norte')
                    ->setMunicipality($this->getReference('Municipality-Carirubana-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Norte-fal", $parish);
                $manager->persist($parish);           
                  
                
            $parish = new Parish();
            $parish->setDescription('Carirubana')
                    ->setMunicipality($this->getReference('Municipality-Carirubana-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Carirubana-fal", $parish);
                $manager->persist($parish);           
                  
                
            $parish = new Parish();
            $parish->setDescription('Santa Ana')
                    ->setMunicipality($this->getReference('Municipality-Carirubana-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Santa-Ana-fal", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Urbana Punta Cardón')
                    ->setMunicipality($this->getReference('Municipality-Carirubana-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Urbana-Punta-Cardón-fal", $parish);
                $manager->persist($parish);   
                
                
                
            $parish = new Parish();
            $parish->setDescription('La Vela de Coro')
                    ->setMunicipality($this->getReference('Municipality-Colina-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-La-Vela-de-Coro-fal", $parish);
                $manager->persist($parish);    
                
                
                
            $parish = new Parish();
            $parish->setDescription('Acurigua')
                    ->setMunicipality($this->getReference('Municipality-Colina-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Acurigua-fal", $parish);
                $manager->persist($parish);     
                
            
            $parish = new Parish();
            $parish->setDescription('Guaibacoa')
                    ->setMunicipality($this->getReference('Municipality-Colina-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Guaibacoa-fal", $parish);
                $manager->persist($parish); 
                
            $parish = new Parish();
            $parish->setDescription('Las Calderas')
                    ->setMunicipality($this->getReference('Municipality-Colina-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Las-Calderas-fal", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Macoruca')
                    ->setMunicipality($this->getReference('Municipality-Colina-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Macoruca-fal", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Agua Clara')
                    ->setMunicipality($this->getReference('Municipality-Democracia-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Agua-Clara-fal", $parish);
                $manager->persist($parish);          
                
            
            $parish = new Parish();
            $parish->setDescription('Avaria')
                    ->setMunicipality($this->getReference('Municipality-Democracia-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Avaria-fal", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('Pedregal')
                    ->setMunicipality($this->getReference('Municipality-Democracia-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Pedregal-fal", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Piedra Grande')
                    ->setMunicipality($this->getReference('Municipality-Democracia-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Piedra-Grande-fal", $parish);
                $manager->persist($parish);               
                
                
            $parish = new Parish();
            $parish->setDescription('Purureche')
                    ->setMunicipality($this->getReference('Municipality-Democracia-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Purureche-fal", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Adaure')
                    ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Adaure-fal", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Adícora')
                    ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Adícora-fal", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Baraived')
                    ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Baraived-fal", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Buena Vista')
                    ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Buena-Vista-fal", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Jadacaquiva')
                    ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Jadacaquiva-fal", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('El Vínculo')
                    ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-El-Vínculo-fal", $parish);
                $manager->persist($parish);    
                    
                
            $parish = new Parish();
            $parish->setDescription('El Hato')
                    ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-El-Hato-fal", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Moruy')
                    ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Moruy-fal", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Pueblo Nuevo')
                    ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Pueblo-Nuevo-fal", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Agua Larga')
                    ->setMunicipality($this->getReference('Municipality-Federacion-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Agua-Larga-fal", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Churuguara')
                    ->setMunicipality($this->getReference('Municipality-Federacion-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Churuguara-fal", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('El Paují')
                    ->setMunicipality($this->getReference('Municipality-Federacion-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-El-Paují-fal", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Independencia')
                    ->setMunicipality($this->getReference('Municipality-Federacion-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Independencia-fal", $parish);
                $manager->persist($parish);       
                   
                
            $parish = new Parish();
            $parish->setDescription('Mapararí')
                    ->setMunicipality($this->getReference('Municipality-Federacion-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Mapararí-fal", $parish);
                $manager->persist($parish);       
                       
                
            $parish = new Parish();
            $parish->setDescription('Agua Linda')
                    ->setMunicipality($this->getReference('Municipality-Jacura-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Agua-Linda-fal", $parish);
                $manager->persist($parish);       
                           
            $parish = new Parish();
            $parish->setDescription('Araurima')
                    ->setMunicipality($this->getReference('Municipality-Jacura-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Araurima-fal", $parish);
                $manager->persist($parish);         
                
            
            $parish = new Parish();
            $parish->setDescription('Jacura')
                    ->setMunicipality($this->getReference('Municipality-Jacura-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Jacura-fal", $parish);
                $manager->persist($parish);      
                
                
                
            $parish = new Parish();
            $parish->setDescription('Los Taques')
                    ->setMunicipality($this->getReference('Municipality-Los-Taques-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Los-Taques-fal", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Judibana')
                    ->setMunicipality($this->getReference('Municipality-Los-Taques-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Judibana-fal", $parish);
                $manager->persist($parish);     
                    
                
                
            $parish = new Parish();
            $parish->setDescription('Casigua')
                    ->setMunicipality($this->getReference('Municipality-Mauroa-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Casigua-fal", $parish);
                $manager->persist($parish);     
                        
                
            $parish = new Parish();
            $parish->setDescription('Mene de Mauroa')
                    ->setMunicipality($this->getReference('Municipality-Mauroa-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Mene-de-Mauroa-fal", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('San Félix')
                    ->setMunicipality($this->getReference('Municipality-Mauroa-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-San-Félix-fal", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Guzmán Guillermo')
                    ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Guzmán-Guillermo-fal", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Mitare')
                    ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Mitare-fal", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Río Seco')
                    ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Río-Seco-fal", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Sabaneta')
                    ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Sabaneta-fal", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('San Antonio')
                    ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-San-Antonio-fal", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('San Gabriel')
                    ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-San-Gabriel-fal", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Ana')
                    ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Santa-Ana-mi-fal", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('Boca de Tocuyo')
                    ->setMunicipality($this->getReference('Municipality-Monseñor-Iturriza-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Boca-de-Tocuyo-fal", $parish);
                $manager->persist($parish);   
                  
            $parish = new Parish();
            $parish->setDescription('Chichiriviche')
                    ->setMunicipality($this->getReference('Municipality-Monseñor-Iturriza-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Chichiriviche-fal", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('Tocuyo de la Costa')
                    ->setMunicipality($this->getReference('Municipality-Monseñor-Iturriza-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Tocuyo-de-la-Costa-fal", $parish);
                $manager->persist($parish);      
                
                
          /*  $parish = new Parish();
            $parish->setDescription('Palmasola')
                    ->setMunicipality($this->getReference('Municipality-Palmasola-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Palmasola-fal", $parish);
                $manager->persist($parish);  */    
                
                
            $parish = new Parish();
            $parish->setDescription('Cabure')
                    ->setMunicipality($this->getReference('Municipality-Petit-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Cabure-fal", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Colina')
                    ->setMunicipality($this->getReference('Municipality-Petit-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Colina-fal", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Curimagua')
                    ->setMunicipality($this->getReference('Municipality-Petit-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Curimagua-fal", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('San José de la Costa')
                    ->setMunicipality($this->getReference('Municipality-Piritu-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-San José-de-la-Costa-fal", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Píritu')
                    ->setMunicipality($this->getReference('Municipality-Piritu-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Píritu-fal", $parish);
                $manager->persist($parish);         
                    
                
           /* $parish = new Parish();
            $parish->setDescription('San Francisco')
                    ->setMunicipality($this->getReference('Municipality-San-Francisco-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-San-Francisco-fal", $parish);
                $manager->persist($parish); */          
                
            $parish = new Parish();
            $parish->setDescription('Tucacas')
                    ->setMunicipality($this->getReference('Municipality-Silva-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Tucacas-fal", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Boca de Aroa')
                    ->setMunicipality($this->getReference('Municipality-Silva-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Boca-de-Aroa-fal", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Pecaya')
                    ->setMunicipality($this->getReference('Municipality-Sucre-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Pecaya-fal", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Sucre')
                    ->setMunicipality($this->getReference('Municipality-Sucre-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Sucre-fal", $parish);
                $manager->persist($parish);     
                

            $parish = new Parish();
            $parish->setDescription('El Charal')
                    ->setMunicipality($this->getReference('Municipality-Union-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-El-Charal-fal", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Las Vegas del Tuy')
                    ->setMunicipality($this->getReference('Municipality-Union-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Las-Vegas-del-Tuy-fal", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Cruz de Bucaral')
                    ->setMunicipality($this->getReference('Municipality-Union-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Santa-Cruz-de-Bucaral-fal", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Bruzual')
                    ->setMunicipality($this->getReference('Municipality-Urumaco-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Bruzual-fal", $parish);
                $manager->persist($parish);     
                    
                
            $parish = new Parish();
            $parish->setDescription('Urumaco')
                    ->setMunicipality($this->getReference('Municipality-Urumaco-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Urumaco-fal", $parish);
                $manager->persist($parish);     
                         
                
            $parish = new Parish();
            $parish->setDescription('Puerto Cumarebo')
                    ->setMunicipality($this->getReference('Municipality-Zamora-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Puerto-Cumarebo-fal", $parish);
                $manager->persist($parish);         
                
            
            $parish = new Parish();
            $parish->setDescription('La Ciénaga')
                    ->setMunicipality($this->getReference('Municipality-Zamora-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-La-Ciénaga-fal", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('La Soledad')
                    ->setMunicipality($this->getReference('Municipality-Zamora-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-La-Soledad-fal", $parish);
                $manager->persist($parish);     
                
            
            $parish = new Parish();
            $parish->setDescription('Pueblo Cumarebo')
                    ->setMunicipality($this->getReference('Municipality-Zamora-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Pueblo-Cumarebo-fal", $parish);
                $manager->persist($parish);  
                
                
            $parish = new Parish();
            $parish->setDescription('Zazárida')
                    ->setMunicipality($this->getReference('Municipality-Zamora-fal'))
                    ->setState($this->getReference("State-Falcon"))
                    ;
                    $this->addReference("Parish-Zazárida-za-fal", $parish);
                $manager->persist($parish);     
                
                
        //parroQUIAS del estado guarico        
                
                
            $parish = new Parish();
            $parish->setDescription('Uverito')
                    ->setMunicipality($this->getReference('Municipality-Camaguan-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Uverito-gua", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Puerto Miranda')
                    ->setMunicipality($this->getReference('Municipality-Camaguan-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Puerto-Miranda-gua", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Camaguán')
                    ->setMunicipality($this->getReference('Municipality-Camaguan-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Camaguán-gua", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Chaguaramas')
                    ->setMunicipality($this->getReference('Municipality-Chaguaramas-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Chaguaramas-gua", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('El Socorro')
                    ->setMunicipality($this->getReference('Municipality-El-socorro-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-El-Socorro-gua", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Espino')
                    ->setMunicipality($this->getReference('Municipality-Leonardo-Infante-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Espino-gua", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Valle de la Pascua')
                    ->setMunicipality($this->getReference('Municipality-Leonardo-Infante-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Valle-de-la-Pascua-gua", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Cabruta')
                    ->setMunicipality($this->getReference('Municipality-Las-Mercedes-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Cabruta-gua", $parish);
                $manager->persist($parish);           
                    
                
            $parish = new Parish();
            $parish->setDescription('Santa Rita de Manapire')
                    ->setMunicipality($this->getReference('Municipality-Las-Mercedes-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Santa-Rita-de-Manapire-gua", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Las Mercedes')
                    ->setMunicipality($this->getReference('Municipality-Las-Mercedes-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Las-Mercedes-gua", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('El Sombrero')
                    ->setMunicipality($this->getReference('Municipality-Julian-Mellado-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-El-Sombrero-gua", $parish);
                $manager->persist($parish);      
                    
                
            $parish = new Parish();
            $parish->setDescription('Sosa')
                    ->setMunicipality($this->getReference('Municipality-Julian-Mellado-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Sosa-gua", $parish);
                $manager->persist($parish);      
                    
            $parish = new Parish();
            $parish->setDescription('El Calvario')
                    ->setMunicipality($this->getReference('Municipality-Francisco-de-Miranda-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-El-Calvario-gua", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('El Rastro')
                    ->setMunicipality($this->getReference('Municipality-Francisco-de-Miranda-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-El-Rastro-gua", $parish);
                $manager->persist($parish);          
                    
                
            $parish = new Parish();
            $parish->setDescription('Guardatinajas')
                    ->setMunicipality($this->getReference('Municipality-Francisco-de-Miranda-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Guardatinajas-gua", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Capital Urbana Calabozo')
                    ->setMunicipality($this->getReference('Municipality-Francisco-de-Miranda-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Capital-Urbana-Calabozo-gua", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Altagracia de Orituco')
                    ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Altagracia-de-Orituco-gua", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('San Rafael de Orituco')
                    ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-San Rafael-de-Orituco-gua", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('San Francisco Javier de Lezama')
                    ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-San Francisco-Javier-de-Lezama-gua", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Paso Real de Macaira')
                    ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Paso-Real-de-Macaira-gua", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Carlos Soublette')
                    ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Carlos-Soublette-gua", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('San Francisco de Macaira')
                    ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-San-Francisco-de-Macaira-gua", $parish);
                $manager->persist($parish);      
       
            $parish = new Parish();
            $parish->setDescription('Libertad de Orituco')
                    ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Libertad-de-Orituco-gua", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Ortiz')
                    ->setMunicipality($this->getReference('Municipality-Ortiz-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Ortiz-gua", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('San Francisco de Tiznado')
                    ->setMunicipality($this->getReference('Municipality-Ortiz-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-San-Francisco-de-Tiznado-gua", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('San José de Tiznado')
                    ->setMunicipality($this->getReference('Municipality-Ortiz-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-San-José-de-Tiznado-gua", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('San Lorenzo de Tiznado')
                    ->setMunicipality($this->getReference('Municipality-Ortiz-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-San-Lorenzo-de-Tiznado-gua", $parish);
                $manager->persist($parish);        
           
            $parish = new Parish();
            $parish->setDescription('Tucupido')
                    ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Tucupido-gua", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('San Rafael de Laya')
                    ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-San-Rafael-de-Laya-gua", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Cantagallo')
                    ->setMunicipality($this->getReference('Municipality-Juan-German-Roscio-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Cantagallo-gua", $parish);
                $manager->persist($parish);      
                    
                
            $parish = new Parish();
            $parish->setDescription('San Juan de Los Morros')
                    ->setMunicipality($this->getReference('Municipality-Juan-German-Roscio-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-San-Juan-de-Los-Morros-gua", $parish);
                $manager->persist($parish);      
                        
                
            $parish = new Parish();
            $parish->setDescription('Parapara')
                    ->setMunicipality($this->getReference('Municipality-Juan-German-Roscio-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Parapara-gua", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Cazorla')
                    ->setMunicipality($this->getReference('Municipality-San-Geronimo-de-Guayabal-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Cazorla-gua", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Guayabal')
                    ->setMunicipality($this->getReference('Municipality-San-Geronimo-de-Guayabal-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Guayabal-gua", $parish);
                $manager->persist($parish);            
                
                
            $parish = new Parish();
            $parish->setDescription('San José de Guaribe')
                    ->setMunicipality($this->getReference('Municipality-San-Jose-de-Guaribe-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-San-José-de-Guaribe-gua", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Uveral')
                    ->setMunicipality($this->getReference('Municipality-San-Jose-de-Guaribe-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Uveral-gua", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Altamira')
                    ->setMunicipality($this->getReference('Municipality-Santa-Maria-de-Ipire-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Altamira-gua", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Santa María de Ipire')
                    ->setMunicipality($this->getReference('Municipality-Santa-Maria-de-Ipire-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Santa-María-de-Ipire-gua", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('San José de Unare')
                    ->setMunicipality($this->getReference('Municipality-Pedro-Zaraza-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-San-José-de-Unare-gua", $parish);
                $manager->persist($parish);          
                
                
            /*$parish = new Parish();
            $parish->setDescription('Tacalito')
                    ->setMunicipality($this->getReference('Municipality-Pedro-Zaraza-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Tacalito-gua", $parish);
                $manager->persist($parish);  */   
                
                
            $parish = new Parish();
            $parish->setDescription('Zaraza')
                    ->setMunicipality($this->getReference('Municipality-Pedro-Zaraza-gua'))
                    ->setState($this->getReference("State-Guarico"))
                    ;
                    $this->addReference("Parish-Zaraza-gua", $parish);
                $manager->persist($parish);     
                    
                
         //parroquias del estado Lara       
                
            $parish = new Parish();
            $parish->setDescription('Quebrada Honda de Guache')
                    ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Quebrada-Honda-de-Guache-lar", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Tamayo')
                    ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Tamayo-lar", $parish);
                $manager->persist($parish);    
                    
            $parish = new Parish();
            $parish->setDescription('Yacambú')
                    ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Yacambú-lar", $parish);
                $manager->persist($parish);        
                
                
                
            $parish = new Parish();
            $parish->setDescription('Freitez')
                    ->setMunicipality($this->getReference('Municipality-Crespo-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Freitez-lar", $parish);
                $manager->persist($parish);        
                    
                
            $parish = new Parish();
            $parish->setDescription('José María Blanco')
                    ->setMunicipality($this->getReference('Municipality-Crespo-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-José-María-Blanco-lar", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Aguedo F. Alvarado')
                    ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Aguedo-Alvarado-lar", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Buena Vista')
                    ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Buena-Vista-lar", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Catedral')
                    ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Catedral-lar", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('El Cuji')
                    ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-El-Cuji-lar", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('Juan de Villegas')
                    ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Juan-de-Villegas-lar", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Juárez')
                    ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Juárez-lar", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('La Concepción')
                    ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-La-Concepción-lar", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('Santa Rosa')
                    ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Santa-Rosa-lar", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Tamaca')
                    ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Tamaca-lar", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Unión')
                    ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Unión-lar", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Coronel Mariano Peraza')
                    ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Coronel-Mariano-Peraza-lar", $parish);
                $manager->persist($parish);            
                
            $parish = new Parish();
            $parish->setDescription('Cuara')
                    ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Cuara-lar", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Diego de Lozada')
                    ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Diego-de-Lozada-lar", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('José Berardo Dorante')
                    ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-José-Berardo-Dorante-lar", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Juan Bautista Rodríguez')
                    ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Juan-Bautista-Rodríguez-lar", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Paraíso de San José')
                    ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Paraíso-de-San-José-lar", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('San Miguel')
                    ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-San-Miguel-lar", $parish);
                $manager->persist($parish);   
                   
            $parish = new Parish();
            $parish->setDescription('Tintorero')
                    ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Tintorero-lar", $parish);
                $manager->persist($parish);   
                       
            $parish = new Parish();
            $parish->setDescription('Anzoátegui')
                    ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Anzoátegui-lar", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Bolívar')
                    ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Bolívar-lar", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Guárico')
                    ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Guárico-lar", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Hilario Luna y Luna')
                    ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Hilario-Luna-y-Luna-lar", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Humocaro Bajo')
                    ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Humocaro-Bajo-lar", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Humocaro Alto')
                    ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Humocaro-Alto-lar", $parish);
                $manager->persist($parish);     
                    
                
            $parish = new Parish();
            $parish->setDescription('La Candelaria')
                    ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-La-Candelaria-lar", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Morán')
                    ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Morán-lar", $parish);
                $manager->persist($parish);       
                
                   
            $parish = new Parish();
            $parish->setDescription('Agua Viva')
                    ->setMunicipality($this->getReference('Municipality-Palavecino-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Agua-Viva-lar", $parish);
                $manager->persist($parish);       
                   
            $parish = new Parish();
            $parish->setDescription('Cabudare')
                    ->setMunicipality($this->getReference('Municipality-Palavecino-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Cabudare-lar", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('José Gregorio Bastidas')
                    ->setMunicipality($this->getReference('Municipality-Palavecino-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-José-Gregorio-Bastidas-lar", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Buría')
                    ->setMunicipality($this->getReference('Municipality-Simon-Planas-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Buría-lar", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Gustavo Vegas León')
                    ->setMunicipality($this->getReference('Municipality-Simon-Planas-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Gustavo-Vegas-León-lar", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Sarare')
                    ->setMunicipality($this->getReference('Municipality-Simon-Planas-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Sarare-lar", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('Altagracia')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Altagracia-lar", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Antonio Díaz')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Antonio-Díaz-lar", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Camacaro')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Camacaro-lar", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Castañeda')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Castañeda-lar", $parish);
                $manager->persist($parish);     
                    
                
            $parish = new Parish();
            $parish->setDescription('Cecilio Zubillaga')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Cecilio-Zubillaga-lar", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Chiquinquira')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Chiquinquira-lar", $parish);
                $manager->persist($parish);     
                   
                
            $parish = new Parish();
            $parish->setDescription('El Blanco')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-El-Blanco-lar", $parish);
                $manager->persist($parish);     
                       
                
            $parish = new Parish();
            $parish->setDescription('Espinoza de los Monteros')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Espinoza-de-los-Monteros-lar", $parish);
                $manager->persist($parish);     
                       
                    
            $parish = new Parish();
            $parish->setDescription('Heriberto Arroyo')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Heriberto-Arroyo-lar", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Lara')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Lara-lar", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Las Mercedes')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Las-Mercedes-lar", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Manuel Morillo')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Manuel-Morillo-lar", $parish);
                $manager->persist($parish);    
                    
                
            $parish = new Parish();
            $parish->setDescription('Montaña Verde')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Montaña-Verde-lar", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Montes de Oca')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Montes-de-Oca-lar", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Reyes Vargas')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Reyes-Vargas-lar", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Torres')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Torres-lar", $parish);
                $manager->persist($parish);       
                
                    
            $parish = new Parish();
            $parish->setDescription('Trinidad Samuel')
                    ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Trinidad-Samuel-lar", $parish);
                $manager->persist($parish);       
                   
                
            $parish = new Parish();
            $parish->setDescription('Siquisique')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Siquisique-lar", $parish);
                $manager->persist($parish);       
                   
            $parish = new Parish();
            $parish->setDescription('San Miguel')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-San-Miguel-ur-lar", $parish);
                $manager->persist($parish);       
                           
            $parish = new Parish();
            $parish->setDescription('Moroturo')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Moroturo-lar", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Xaguas')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-lar'))
                    ->setState($this->getReference("State-Lara"))
                    ;
                    $this->addReference("Parish-Xaguas-lar", $parish);
                $manager->persist($parish);        
                   
                
            //parroquias del estado Merida    
                
            $parish = new Parish();
            $parish->setDescription('Gabriel Picón Gonzáles')
                    ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Gabriel-Picón-Gonzáles-mer", $parish);
                $manager->persist($parish);        
                       
            $parish = new Parish();
            $parish->setDescription('Héctor Amable Mora')
                    ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Gabriel-Héctor-Amable-Mora-mer", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('José Nucete Sardi')
                    ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-José-Nucete-Sardi-mer", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Presidente Betancourt')
                    ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Presidente-Betancourt-mer", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Presidente Páez')
                    ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Presidente-Páez-mer", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Presidente Rómulo Gallegos')
                    ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Presidente-Rómulo-Gallegos-mer", $parish);
                $manager->persist($parish);     
                    
                
            $parish = new Parish();
            $parish->setDescription('Pulido Méndez')
                    ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Pulido-Méndez-mer", $parish);
                $manager->persist($parish);     
                        
           /* $parish = new Parish();
            $parish->setDescription('Andrés Bello')
                    ->setMunicipality($this->getReference('Municipality-Andres-Bello-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Andrés-Bello-mer", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Andrés Bello')
                    ->setMunicipality($this->getReference('Municipality-Andres-Bello-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Andrés-Bello-mer", $parish);
                $manager->persist($parish);    */
                
            $parish = new Parish();
            $parish->setDescription('Santa Cruz de Mora')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Pinto-Salinas-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Santa-Cruz-de-Mora-mer", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Mesa Bolívar')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Pinto-Salinas-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Mesa-Bolívar-mer", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Mesa las Palmas')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Pinto-Salinas-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Mesa-las-Palmas-mer", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Aricagua')
                    ->setMunicipality($this->getReference('Municipality-Aricagua-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Aricagua-mer", $parish);
                $manager->persist($parish);        
                    
            $parish = new Parish();
            $parish->setDescription('San Antonio')
                    ->setMunicipality($this->getReference('Municipality-Aricagua-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-San-Antonio-mer", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Canaguá')
                    ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Canaguá-mer", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Mucutuy')
                    ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Mucutuy-mer", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Mucuchachí')
                    ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Mucuchachí-mer", $parish);
                $manager->persist($parish);        
           
                
            $parish = new Parish();
            $parish->setDescription('Chacantá')
                    ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Chacantá-mer", $parish);
                $manager->persist($parish);        
              
            $parish = new Parish();
            $parish->setDescription('El Molino')
                    ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-El-Molino-mer", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Capurí')
                    ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Capurí-mer", $parish);
                $manager->persist($parish);       
                
                
                
            $parish = new Parish();
            $parish->setDescription('Guaimaral')
                    ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Guaimaral-mer", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Fernández Peña')
                    ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Fernández-Peña-mer", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Matriz')
                    ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Matriz-mer", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Montalbán')
                    ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Montalbán-mer", $parish);
                $manager->persist($parish);      
                    
                
            $parish = new Parish();
            $parish->setDescription('Acequias')
                    ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Acequias-mer", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Jají')
                    ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Jají-mer", $parish);
                $manager->persist($parish); 
                
                
            $parish = new Parish();
            $parish->setDescription('La Mesa')
                    ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-La-Mesa-mer", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('San José del Sur')
                    ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-San-José-del-Sur-mer", $parish);
                $manager->persist($parish);        
                   
                
            $parish = new Parish();
            $parish->setDescription('Tucaní')
                    ->setMunicipality($this->getReference('Municipality-Caraccilo-Parra-y-Olmedo-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Tucaní-mer", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Florencio Ramírez')
                    ->setMunicipality($this->getReference('Municipality-Caraccilo-Parra-y-Olmedo-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Florencio-Ramírez-mer", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Santo Domingo')
                    ->setMunicipality($this->getReference('Municipality-Cardenal-Quintero-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Santo-Domingo-mer", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Las Piedras')
                    ->setMunicipality($this->getReference('Municipality-Cardenal-Quintero-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Las-Piedras-mer", $parish);
                $manager->persist($parish);    
                
            
            $parish = new Parish();
            $parish->setDescription('Mesa de Quintero')
                    ->setMunicipality($this->getReference('Municipality-Guaraque-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Mesa-de-Quintero-mer", $parish);
                $manager->persist($parish);  
                
                
            $parish = new Parish();
            $parish->setDescription('Río Negro')
                    ->setMunicipality($this->getReference('Municipality-Guaraque-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Río-Negro-mer", $parish);
                $manager->persist($parish);  
                   
            $parish = new Parish();
            $parish->setDescription('Guaraque')
                    ->setMunicipality($this->getReference('Municipality-Guaraque-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Guaraque-mer", $parish);
                $manager->persist($parish);     
                
                
            
                
            $parish = new Parish();
            $parish->setDescription('Arapuey')
                    ->setMunicipality($this->getReference('Municipality-Julio-Cesar-Salas-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Arapuey-mer", $parish);
                $manager->persist($parish);            
                
                
               
            $parish = new Parish();
            $parish->setDescription('Palmira')
                    ->setMunicipality($this->getReference('Municipality-Julio-Cesar-Salas-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Palmira-mer", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Torondoy')
                    ->setMunicipality($this->getReference('Municipality-Justo-Briceño-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Torondoy-mer", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('San Cristóbal de Torondoy')
                    ->setMunicipality($this->getReference('Municipality-Justo-Briceño-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-San-Cristóbal-de-Torondoy-mer", $parish);
                $manager->persist($parish);   
                    
                
            $parish = new Parish();
            $parish->setDescription('Antonio Spinetti Dini')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Antonio-Spinetti-Dini-mer", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Arias')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Arias-mer", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Caracciolo Parra Pérez ')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Caracciolo-Parra-Pérez-mer", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Domingo Peña')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Domingo-Peña-mer", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('El Llano')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-El-Llano-mer", $parish);
                $manager->persist($parish);    
                    
                
            $parish = new Parish();
            $parish->setDescription('Gonzalo Picón Febres')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Gonzalo-Picón-Febres-mer", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Jacinto Plaza')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Jacinto-Plaza-mer", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Juan Rodríguez Suárez')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Juan-Rodríguez-Suárez-mer", $parish);
                $manager->persist($parish);     
                   
            $parish = new Parish();
            $parish->setDescription('Lasso de la Vega')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Lasso-de-la-Vega-mer", $parish);
                $manager->persist($parish); 
                
                
            $parish = new Parish();
            $parish->setDescription('Mariano Picón Salas')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Mariano-Picón-Salas-mer", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('Milla')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Milla-mer", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Osuna Rodríguez')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Osuna-Rodríguez-mer", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Sagrario')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Sagrario-mer", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('El Morro')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-El-Morro-mer", $parish);
                $manager->persist($parish);     
                   
                
            $parish = new Parish();
            $parish->setDescription('Los Nevados')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Los-Nevados-mer", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Andrés Eloy Blanco')
                    ->setMunicipality($this->getReference('Municipality-Miranda-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Andrés-Eloy-Blanco-mer", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('La Venta')
                    ->setMunicipality($this->getReference('Municipality-Miranda-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-La-Venta-mer", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Piñango')
                    ->setMunicipality($this->getReference('Municipality-Miranda-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Piñango-mer", $parish);
                $manager->persist($parish);    
                   
                
            $parish = new Parish();
            $parish->setDescription('Timotes')
                    ->setMunicipality($this->getReference('Municipality-Miranda-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Timotes-mer", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Eloy Paredes')
                    ->setMunicipality($this->getReference('Municipality-Obispo-Ramos-de-Lora-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Eloy-Paredes-mer", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('San Rafael de Alcázar')
                    ->setMunicipality($this->getReference('Municipality-Obispo-Ramos-de-Lora-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-San-Rafael-de-Alcázar-mer", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Santa Elena de Arenales')
                    ->setMunicipality($this->getReference('Municipality-Obispo-Ramos-de-Lora-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Santa-Elena-de-Arenales-mer", $parish);
                $manager->persist($parish);     
                    
                
           /* $parish = new Parish();
            $parish->setDescription('Padre Noguera')
                    ->setMunicipality($this->getReference('Municipality-Padre-Noguera-mer'))
                    ->setState($this->getReference("State-Merida-mer"))
                    ;
                    $this->addReference("Parish-Padre-Noguera-mer", $parish);
                $manager->persist($parish); */       
                
                                
            $parish = new Parish();
            $parish->setDescription('Pueblo Llano')
                    ->setMunicipality($this->getReference('Municipality-Pueblo-Llano-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Pueblo-Llano-mer", $parish);
                $manager->persist($parish);        
                   
                                
            $parish = new Parish();
            $parish->setDescription('Rangel')
                    ->setMunicipality($this->getReference('Municipality-Rangel-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Rangel-mer", $parish);
                $manager->persist($parish);        
                      
                
            $parish = new Parish();
            $parish->setDescription('Cacute')
                    ->setMunicipality($this->getReference('Municipality-Rangel-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Cacute-mer", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('La toma')
                    ->setMunicipality($this->getReference('Municipality-Rangel-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-La-toma-mer", $parish);
                $manager->persist($parish);          
                   
                
            $parish = new Parish();
            $parish->setDescription('Mucurubá')
                    ->setMunicipality($this->getReference('Municipality-Rangel-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Mucurubá-mer", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('San Rafael')
                    ->setMunicipality($this->getReference('Municipality-Rangel-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-San-Rafael-mer", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Bailadores')
                    ->setMunicipality($this->getReference('Municipality-Rivas-Davila-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Bailadores-mer", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Gerónimo')
                    ->setMunicipality($this->getReference('Municipality-Rivas-Davila-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Gerónimo-mer", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('Tabay')
                    ->setMunicipality($this->getReference('Municipality-Santos-Marquina-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Tabay-mer", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Chiguará')
                    ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Chiguará-mer", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Estánquez')
                    ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Estánquez-mer", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Lagunillas')
                    ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Lagunillas-mer", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('La Trampa')
                    ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-La-Trampa-mer", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('Pueblo Nuevo del Sur')
                    ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Pueblo-Nuevo-del-Sur-mer", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San Juan')
                    ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-San-Juan-mer", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Urbana El Llano')
                    ->setMunicipality($this->getReference('Municipality-Tovar-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Urbana-El-Llano-mer", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('San Francisco')
                    ->setMunicipality($this->getReference('Municipality-Tovar-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-San-Francisco-mer", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('El Amparo')
                    ->setMunicipality($this->getReference('Municipality-Tovar-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-El-Amparo-mer", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('Tovar')
                    ->setMunicipality($this->getReference('Municipality-Tovar-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Tovar-mer", $parish);
                $manager->persist($parish);             
            
                
                
                
                
                
            $parish = new Parish();
            $parish->setDescription('Independencia')
                    ->setMunicipality($this->getReference('Municipality-Tulio-Febres-Cordero-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Independencia-mer", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('Santa Apolonia')
                    ->setMunicipality($this->getReference('Municipality-Tulio-Febres-Cordero-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Santa-Apolonia-mer", $parish);
                $manager->persist($parish);           
                    
                
            $parish = new Parish();
            $parish->setDescription('Maria de La Concepción Palacios')
                    ->setMunicipality($this->getReference('Municipality-Tulio-Febres-Cordero-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Maria-de-La-Concepción-Palacios-mer", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Nueva Bolivia')
                    ->setMunicipality($this->getReference('Municipality-Tulio-Febres-Cordero-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Nueva-Bolivia-mer", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Caño El Tigre')
                    ->setMunicipality($this->getReference('Municipality-Zea-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Caño-El-Tigre-mer", $parish);
                $manager->persist($parish);        
                    
            $parish = new Parish();
            $parish->setDescription('Zea')
                    ->setMunicipality($this->getReference('Municipality-Zea-mer'))
                    ->setState($this->getReference("State-Merida"))
                    ;
                    $this->addReference("Parish-Zea-mer", $parish);
                $manager->persist($parish);     
                
                           
                
        //parroquias del estado miranda       
                
            $parish = new Parish();
            $parish->setDescription('Aragüita')
                    ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Aragüita-mir", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Arevalo González')
                    ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Arevalo-González-mir", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Capaya')
                    ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Capaya-mir", $parish);
                $manager->persist($parish);   
                
                
                
            $parish = new Parish();
            $parish->setDescription('Caucagua')
                    ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Caucagua-mir", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('El Café')
                    ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-El-Café-mir", $parish);
                $manager->persist($parish);     
                   
            $parish = new Parish();
            $parish->setDescription('Marizapa')
                    ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Marizapa-mir", $parish);
                $manager->persist($parish);     
                       
            $parish = new Parish();
            $parish->setDescription('Panaquire')
                    ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Panaquire-mir", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Ribas')
                    ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Ribas-mir", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('Cumbo')
                    ->setMunicipality($this->getReference('Municipality-Andres-Bello-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Cumbo-mir", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('San José de Barlovento')
                    ->setMunicipality($this->getReference('Municipality-Andres-Bello-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-San-José-de-Barlovento-mir", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Baruta')
                    ->setMunicipality($this->getReference('Municipality-Baruta-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Baruta-mir", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('El Cafetal')
                    ->setMunicipality($this->getReference('Municipality-Baruta-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-El-Cafetal-mir", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Las Minas')
                    ->setMunicipality($this->getReference('Municipality-Baruta-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Las-Minas-mir", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Higuerote')
                    ->setMunicipality($this->getReference('Municipality-Brion-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Higuerote-mir", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Curiepe')
                    ->setMunicipality($this->getReference('Municipality-Brion-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Curiepe-mir", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Tacarigua')
                    ->setMunicipality($this->getReference('Municipality-Brion-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Tacarigua-mir", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Mamporal')
                    ->setMunicipality($this->getReference('Municipality-Buroz-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Mamporal-mir", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Carrizal')
                    ->setMunicipality($this->getReference('Municipality-Carrizal-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Carrizal-mir", $parish);
                $manager->persist($parish);      
                    
                
            $parish = new Parish();
            $parish->setDescription('Chacao')
                    ->setMunicipality($this->getReference('Municipality-Chacao-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Chacao-mir", $parish);
                $manager->persist($parish);      
                        
                
           
                
            $parish = new Parish();
            $parish->setDescription('Charallave')
                    ->setMunicipality($this->getReference('Municipality-Cristobal-Rojas-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Charallave-mir", $parish);
                $manager->persist($parish);      
                                
                
            $parish = new Parish();
            $parish->setDescription('Las Brisas')
                    ->setMunicipality($this->getReference('Municipality-Cristobal-Rojas-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Las-Brisas-mir", $parish);
                $manager->persist($parish);     
                
               
                
                
            $parish = new Parish();
            $parish->setDescription('El Hatillo')
                    ->setMunicipality($this->getReference('Municipality-El-Hatillo-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-El-Hatillo-mir", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Altagracia de la Montaña')
                    ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Altagracia-de-la-Montaña-mir", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Cecilio Acosta')
                    ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Cecilio-Acosta-mir", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('El Jarillo')
                    ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-El-Jarillo-mir", $parish);
                $manager->persist($parish);    
                   
                
            $parish = new Parish();
            $parish->setDescription('Los Teques')
                    ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Los-Teques-mir", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Paracotos')
                    ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Paracotos-mir", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('San Pedro')
                    ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-San-Pedro-mir", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('Tácata')
                    ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Tácata-mir", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('El Cartanal')
                    ->setMunicipality($this->getReference('Municipality-Independencia-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-El-Cartanal-mir", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Santa Teresa del Tuy')
                    ->setMunicipality($this->getReference('Municipality-Independencia-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Santa-Teresa-del-Tuy-mir", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('La Democracia')
                    ->setMunicipality($this->getReference('Municipality-Tomas-Lander-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-La-Democracia-mir", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Ocumare del Tuy')
                    ->setMunicipality($this->getReference('Municipality-Tomas-Lander-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Ocumare-del-Tuy-mir", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Bárbara')
                    ->setMunicipality($this->getReference('Municipality-Tomas-Lander-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Santa-Bárbara-mir", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('San Antonio de los Altos')
                    ->setMunicipality($this->getReference('Municipality-Los-Salias-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-San-Antonio-de-los-Altos-mir", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Río Chico')
                    ->setMunicipality($this->getReference('Municipality-Paez-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-RíoChico-mir", $parish);
                $manager->persist($parish);             
                
            $parish = new Parish();
            $parish->setDescription('Paparo')
                    ->setMunicipality($this->getReference('Municipality-Paez-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Paparo-mir", $parish);
                $manager->persist($parish);               
                
            $parish = new Parish();
            $parish->setDescription('Tacarigua de La Laguna')
                    ->setMunicipality($this->getReference('Municipality-Paez-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Tacarigua-de-La-Laguna-mir", $parish);
                $manager->persist($parish);               
                    
            $parish = new Parish();
            $parish->setDescription('El Guapo')
                    ->setMunicipality($this->getReference('Municipality-Paez-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-El-Guapo-mir", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('San Fernando del Guapo')
                    ->setMunicipality($this->getReference('Municipality-Paez-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-San-Fernando-del-Guapo-mir", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Lucía del Tuy')
                    ->setMunicipality($this->getReference('Municipality-Paz-Castillo-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Santa-Lucía-del-Tuy-mir", $parish);
                $manager->persist($parish);       
                   
            $parish = new Parish();
            $parish->setDescription('Machurucuto')
                    ->setMunicipality($this->getReference('Municipality-Pedro-Gual-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Machurucuto-mir", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Cúpira')
                    ->setMunicipality($this->getReference('Municipality-Pedro-Gual-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Cúpira-mir", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Guarenas')
                    ->setMunicipality($this->getReference('Municipality-Plaza-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Guarenas-mir", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('San Antonio de Yare')
                    ->setMunicipality($this->getReference('Municipality-Simon-Bolivar-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-San-Antonio-de-Yare-mir", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San Francisco de Yare')
                    ->setMunicipality($this->getReference('Municipality-Simon-Bolivar-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-San-Francisco-de-Yare-mir", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Cúa')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Cúa-mir", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Nueva Cúa')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Nueva-Cúa-mir", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Caucaguita')
                    ->setMunicipality($this->getReference('Municipality-Sucre-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Caucaguita-mir", $parish);
                $manager->persist($parish);       
                    
            $parish = new Parish();
            $parish->setDescription('Filas de Mariches')
                    ->setMunicipality($this->getReference('Municipality-Sucre-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Filas-de-Mariches-mir", $parish);
                $manager->persist($parish);       
                        
            $parish = new Parish();
            $parish->setDescription('La Dolorita')
                    ->setMunicipality($this->getReference('Municipality-Sucre-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-La-Dolorita-mir", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Leoncio Martínez')
                    ->setMunicipality($this->getReference('Municipality-Sucre-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Leoncio-Martínez-mir", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Petare')
                    ->setMunicipality($this->getReference('Municipality-Sucre-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Petare-mir", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Bolívar')
                    ->setMunicipality($this->getReference('Municipality-Zamora-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Bolívar-mir", $parish);
                $manager->persist($parish);    
            
            $parish = new Parish();
            $parish->setDescription('Guatire')
                    ->setMunicipality($this->getReference('Municipality-Zamora-mir'))
                    ->setState($this->getReference("State-Miranda"))
                    ;
                    $this->addReference("Parish-Guatire-mir", $parish);
                $manager->persist($parish);      
                
            
                
                
         //PARROQUIAS DEL ESTADO MONAGAS       
                
            $parish = new Parish();
            $parish->setDescription('San Antonio')
                    ->setMunicipality($this->getReference('Municipality-Acosta-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-San-Antonio-mon", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('San Francisco')
                    ->setMunicipality($this->getReference('Municipality-Acosta-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-San-Francisco-mon", $parish);
                $manager->persist($parish);
                   
            $parish = new Parish();
            $parish->setDescription('El Guacharo')
                    ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-El-Guacharo-mon", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('La Guanota')
                    ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-La-Guanota-mon", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Sabana de Piedra')
                    ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Sabana-de-Piedra-mon", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('San Agustín')
                    ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-San-Agustín-mon", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Teresen')
                    ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Teresen-mon", $parish);
                $manager->persist($parish);          
                   
                
            $parish = new Parish();
            $parish->setDescription('Caripe')
                    ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Caripe-mon", $parish);
                $manager->persist($parish);          
                      
            $parish = new Parish();
            $parish->setDescription('Areo')
                    ->setMunicipality($this->getReference('Municipality-Cedeño-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Areo-mon", $parish);
                $manager->persist($parish);          
            
           
                
            $parish = new Parish();
            $parish->setDescription('Caicara')
                    ->setMunicipality($this->getReference('Municipality-Cedeño-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Caicara-mon", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('San Félix')
                    ->setMunicipality($this->getReference('Municipality-Cedeño-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-San-Félix-mon", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Viento Freco')
                    ->setMunicipality($this->getReference('Municipality-Cedeño-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Viento-Freco-mon", $parish);
                $manager->persist($parish);            
                
            $parish = new Parish();
            $parish->setDescription('Chaguaramas')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Chaguaramas-mon", $parish);
                $manager->persist($parish);              
                
            $parish = new Parish();
            $parish->setDescription('Las Alhuacas')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Las-Alhuacas-mon", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Tabasca')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Tabasca-mon", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Temblador')
                    ->setMunicipality($this->getReference('Municipality-Libertador-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Temblador-mon", $parish);
                $manager->persist($parish);    
                   
            $parish = new Parish();
            $parish->setDescription('Maturin')
                    ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Maturin-mon", $parish);
                $manager->persist($parish);  
                
                
                
            $parish = new Parish();
            $parish->setDescription('Alto de Los Godos')
                    ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Alto-de-Los-Godos-mon", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Boquerón')
                    ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Boquerón-mon", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Las Cocuizas')
                    ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Las-Cocuizas-mon", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('San Simón')
                    ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-San-Simón-mon", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Cruz')
                    ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Santa-Cruz-mon", $parish);
                $manager->persist($parish);         
                    
                
            $parish = new Parish();
            $parish->setDescription('El Corozo')
                    ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-El-Corozo-mon", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('El Furrial')
                    ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-El-Furrial-mon", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Jusepín')
                    ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Jusepín-mon", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('La Pica')
                    ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-La-Pica-mon", $parish);
                $manager->persist($parish);     
         
            $parish = new Parish();
            $parish->setDescription('San Vicente')
                    ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-San-Vicente-mon", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Aparicio')
                    ->setMunicipality($this->getReference('Municipality-Piar-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Aparicio-mon", $parish);
                $manager->persist($parish);      
                    
                
            $parish = new Parish();
            $parish->setDescription('Aragua')
                    ->setMunicipality($this->getReference('Municipality-Piar-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Aragua-mon", $parish);
                $manager->persist($parish);      
                        
                
            $parish = new Parish();
            $parish->setDescription('Chaguaramal')
                    ->setMunicipality($this->getReference('Municipality-Piar-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Chaguaramal-mon", $parish);
                $manager->persist($parish);      
                        
                    
            $parish = new Parish();
            $parish->setDescription('El Pinto')
                    ->setMunicipality($this->getReference('Municipality-Piar-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-El-Pinto-mon", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Guanaguana')
                    ->setMunicipality($this->getReference('Municipality-Piar-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Guanaguana-mon", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('La Toscana')
                    ->setMunicipality($this->getReference('Municipality-Piar-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-La-Toscana-mon", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Taguaya')
                    ->setMunicipality($this->getReference('Municipality-Piar-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Taguaya-mon", $parish);
                $manager->persist($parish);        
                   
                
            $parish = new Parish();
            $parish->setDescription('Cachipo')
                    ->setMunicipality($this->getReference('Municipality-Punceres-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Cachipo-mon", $parish);
                $manager->persist($parish);     
                
                
                
            $parish = new Parish();
            $parish->setDescription('Quiriquire')
                    ->setMunicipality($this->getReference('Municipality-Punceres-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Quiriquire-mon", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Bárbara')
                    ->setMunicipality($this->getReference('Municipality-Santa-Barbara-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Santa-Bárbara-mon", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Barrancas')
                    ->setMunicipality($this->getReference('Municipality-Sotillo-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Barrancas-mon", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Los Barrancos de Fajardo')
                    ->setMunicipality($this->getReference('Municipality-Sotillo-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Los-Barrancos-de-Fajardo-mon", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Uracoa')
                    ->setMunicipality($this->getReference('Municipality-Uracoa-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Uracoa-mon", $parish);
                $manager->persist($parish);        
                    
            $parish = new Parish();
            $parish->setDescription('El Tejero')
                    ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-El-Tejero-mon", $parish);
                $manager->persist($parish);            
                
                
            $parish = new Parish();
            $parish->setDescription('Punta de Mata')
                    ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-mon'))
                    ->setState($this->getReference("State-Monagas"))
                    ;
                    $this->addReference("Parish-Punta-de-Mata-mon", $parish);
                $manager->persist($parish);             
                
             //parroquias del estado nueva esparta   
                
            $parish = new Parish();
            $parish->setDescription('Antolín del Campo')
                    ->setMunicipality($this->getReference('Municipality-Antolin-del-Campo-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Antolín-del-Campo-nesp", $parish);
                $manager->persist($parish);             
                    
                
                   
                        
                
          /*  $parish = new Parish();
            $parish->setDescription('Arismendi')
                    ->setMunicipality($this->getReference('Municipality-Arismendi-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Arismendi-nesp", $parish);
                $manager->persist($parish);     */
                            
                
                
          
            $parish = new Parish();
            $parish->setDescription('San Juan Bautista')
                    ->setMunicipality($this->getReference('Municipality-Diaz-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-San-Juan-Bautista-nesp", $parish);
                $manager->persist($parish);                 
                
                
            $parish = new Parish();
            $parish->setDescription('Zabala')
                    ->setMunicipality($this->getReference('Municipality-Diaz-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Zabala-nesp", $parish);
                $manager->persist($parish);                 
                    
                
            $parish = new Parish();
            $parish->setDescription('Francisco Fajardo')
                    ->setMunicipality($this->getReference('Municipality-Garcia-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Francisco-Fajardo-nesp", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('El Valle')
                    ->setMunicipality($this->getReference('Municipality-Garcia-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-El-Valle-nesp", $parish);
                $manager->persist($parish);    
                    
                
            $parish = new Parish();
            $parish->setDescription('Bolívar')
                    ->setMunicipality($this->getReference('Municipality-Gomez-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Bolívar-nesp", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Guevara')
                    ->setMunicipality($this->getReference('Municipality-Gomez-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Guevara-nesp", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('Matasiete')
                    ->setMunicipality($this->getReference('Municipality-Gomez-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Matasiete-nesp", $parish);
                $manager->persist($parish);      
                
          
            $parish = new Parish();
            $parish->setDescription('Santa Ana')
                    ->setMunicipality($this->getReference('Municipality-Gomez-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Santa-Ana-nesp", $parish);
                $manager->persist($parish);                 
                
                
            $parish = new Parish();
            $parish->setDescription('Sucre')
                    ->setMunicipality($this->getReference('Municipality-Gomez-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Sucre-nesp", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Aguirre')
                    ->setMunicipality($this->getReference('Municipality-Maneiro-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Aguirre-nesp", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Pampatar')
                    ->setMunicipality($this->getReference('Municipality-Maneiro-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Pampatar-nesp", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Adrián')
                    ->setMunicipality($this->getReference('Municipality-Marcano-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Adrián-nesp", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Juan Griego')
                    ->setMunicipality($this->getReference('Municipality-Marcano-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Juan-Griego-nesp", $parish);
                $manager->persist($parish);         
                    
                
          /*  $parish = new Parish();
            $parish->setDescription('Porlamar')
                    ->setMunicipality($this->getReference('Municipality-Mariño-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Porlamar-nesp", $parish);
                $manager->persist($parish);   */    
                
                
            $parish = new Parish();
            $parish->setDescription('Boca del Río')
                    ->setMunicipality($this->getReference('Municipality-Peninsula-de-Macanao-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Boca-del-Río-nesp", $parish);
                $manager->persist($parish);       
                    
            $parish = new Parish();
            $parish->setDescription('San Francisco')
                    ->setMunicipality($this->getReference('Municipality-Peninsula-de-Macanao-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-San-Francisco-nesp", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Los Barales')
                    ->setMunicipality($this->getReference('Municipality-Tubores-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Los-Barales-nesp", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Punta de Piedras')
                    ->setMunicipality($this->getReference('Municipality-Tubores-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Punta-de-Piedras-nesp", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Vicente Fuentes')
                    ->setMunicipality($this->getReference('Municipality-Villalba-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-Vicente-Fuentes-nesp", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('San Pedro de Coche')
                    ->setMunicipality($this->getReference('Municipality-Villalba-nesp'))
                    ->setState($this->getReference("State-Nueva-Esparta"))
                    ;
                    $this->addReference("Parish-San-Pedro-de-Coche-nesp", $parish);
                $manager->persist($parish);        
                
                 
                
                
            //parroquias del estado Portuguesa   
                
            $parish = new Parish();
            $parish->setDescription('Agua Blanca')
                    ->setMunicipality($this->getReference('Municipality-Agua-Blanca-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Agua-Blanca-por", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Araure')
                    ->setMunicipality($this->getReference('Municipality-Araure-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Araure-por", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Río Acarigua')
                    ->setMunicipality($this->getReference('Municipality-Araure-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Río-Acarigua-por", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Píritu')
                    ->setMunicipality($this->getReference('Municipality-Esteller-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Píritu-por", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Uveral')
                    ->setMunicipality($this->getReference('Municipality-Esteller-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Uveral-por", $parish);
                $manager->persist($parish);      
                   
                
            $parish = new Parish();
            $parish->setDescription('Guanare')
                    ->setMunicipality($this->getReference('Municipality-Guanare-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Guanare-por", $parish);
                $manager->persist($parish);      
                      
            $parish = new Parish();
            $parish->setDescription('Cordova')
                    ->setMunicipality($this->getReference('Municipality-Guanare-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Cordova-por", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('San José de la Montaña')
                    ->setMunicipality($this->getReference('Municipality-Guanare-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-San-José-de-la-Montaña-por", $parish);
                $manager->persist($parish);          
                    
                
            $parish = new Parish();
            $parish->setDescription('San Juan de Guanaguanare')
                    ->setMunicipality($this->getReference('Municipality-Guanare-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-San-Juan-de-Guanaguanare-por", $parish);
                $manager->persist($parish);          
                        
            $parish = new Parish();
            $parish->setDescription('Virgen de Coromoto')
                    ->setMunicipality($this->getReference('Municipality-Guanare-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Virgen-de-Coromoto-por", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Guanarito')
                    ->setMunicipality($this->getReference('Municipality-Guanarito-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Guanarito-por", $parish);
                $manager->persist($parish);       
                    
            $parish = new Parish();
            $parish->setDescription('Trinidad de la Capilla')
                    ->setMunicipality($this->getReference('Municipality-Guanarito-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Trinidad-de-la-Capilla-por", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('La Divina Pastora')
                    ->setMunicipality($this->getReference('Municipality-Guanarito-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-La-Divina-Pastora-por", $parish);
                $manager->persist($parish);  
            
            $parish = new Parish();
            $parish->setDescription('Monseñor')
                    ->setMunicipality($this->getReference('Municipality-Monseñor-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Monseñor-por", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('Peña Blanca')
                    ->setMunicipality($this->getReference('Municipality-Monseñor-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Peña-Blanca-por", $parish);
                $manager->persist($parish);        
                    
            $parish = new Parish();
            $parish->setDescription('Aparición')
                    ->setMunicipality($this->getReference('Municipality-Ospino-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Aparición-por", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('La Estación')
                    ->setMunicipality($this->getReference('Municipality-Ospino-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-La-Estación-por", $parish);
                $manager->persist($parish);        
                
                    
            $parish = new Parish();
            $parish->setDescription('Ospino')
                    ->setMunicipality($this->getReference('Municipality-Ospino-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Ospino-por", $parish);
                $manager->persist($parish);        
                    
          
            $parish = new Parish();
            $parish->setDescription('Acarigua')
                    ->setMunicipality($this->getReference('Municipality-Paez-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Acarigua-por", $parish);
                $manager->persist($parish);        
                        
            $parish = new Parish();
            $parish->setDescription('Payara')
                    ->setMunicipality($this->getReference('Municipality-Paez-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Payara-por", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Pimpinela')
                    ->setMunicipality($this->getReference('Municipality-Paez-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Pimpinela-por", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Ramón Peraza')
                    ->setMunicipality($this->getReference('Municipality-Paez-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Ramón-Peraza-por", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Caño Delgadito')
                    ->setMunicipality($this->getReference('Municipality-Papelon-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Caño-Delgadito-por", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Papelón')
                    ->setMunicipality($this->getReference('Municipality-Papelon-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Papelón-por", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Antolín Tovar Aquino')
                    ->setMunicipality($this->getReference('Municipality-San-Genaro-de-Boconoito-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Antolín-Tovar-Aquino-por", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('Boconoíto')
                    ->setMunicipality($this->getReference('Municipality-San-Genaro-de-Boconoito-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Boconoíto-por", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Fe')
                    ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Onoto-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Santa-Fe-por", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('San Rafael de Onoto')
                    ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Onoto-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-San-Rafael-de-Onoto-por", $parish);
                $manager->persist($parish);     
                       
            $parish = new Parish();
            $parish->setDescription('Thermo Morles')
                    ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Onoto-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Thermo-Morles-por", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Florida')
                    ->setMunicipality($this->getReference('Municipality-Santa-Rosalia-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Florida-por", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('El Playón')
                    ->setMunicipality($this->getReference('Municipality-Santa-Rosalia-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-El-Playón-por", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Biscucuy')
                    ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Biscucuy-por", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Concepción')
                    ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Concepción-por", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San José de Saguaz')
                    ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-San-José-de-Saguaz-por", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('San Rafael de Palo Alzado')
                    ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-San-Rafael-de-Palo-Alzado-por", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Uvencio Antonio Velásquez')
                    ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Uvencio-Antonio-Velásquez-por", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Villa Rosa')
                    ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Villa-Rosa-por", $parish);
                $manager->persist($parish);  
            
            $parish = new Parish();
            $parish->setDescription('Villa Bruzual')
                    ->setMunicipality($this->getReference('Municipality-Turen-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Villa Bruzual-por", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('Canelones')
                    ->setMunicipality($this->getReference('Municipality-Turen-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Canelones-por", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Santa Cruz')
                    ->setMunicipality($this->getReference('Municipality-Turen-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-Santa-Cruz-por", $parish);
                $manager->persist($parish);      
                
           
            $parish = new Parish();
            $parish->setDescription('San Isidro Labrador')
                    ->setMunicipality($this->getReference('Municipality-Turen-por'))
                    ->setState($this->getReference("State-Portuguesa"))
                    ;
                    $this->addReference("Parish-San-Isidro-Labrador-por", $parish);
                $manager->persist($parish);                 
                
        // parroquias del estado sucre   
                
            $parish = new Parish();
            $parish->setDescription('El Morro')
                    ->setMunicipality($this->getReference('Municipality-Arismendi-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-El-Morro-suc", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Puerto Santo')
                    ->setMunicipality($this->getReference('Municipality-Arismendi-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Puerto-Santo-suc", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Río Caribe')
                    ->setMunicipality($this->getReference('Municipality-Arismendi-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Río-Caribe-suc", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Sucre')
                    ->setMunicipality($this->getReference('Municipality-Arismendi-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Sucre-suc", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('San Juan de las Galdonas')
                    ->setMunicipality($this->getReference('Municipality-Arismendi-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-San-Juan-de-las-Galdonas-suc", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Mariño')
                    ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Mariño-suc", $parish);
                $manager->persist($parish);     
                   
                
            $parish = new Parish();
            $parish->setDescription('Rómulo Gallegos')
                    ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                        $this->addReference("Parish-Rómulo-Gallegos-suc", $parish);
                $manager->persist($parish);     
                   
            $parish = new Parish();
            $parish->setDescription('El Pilar')
                    ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-El-Pilar-suc", $parish);
                $manager->persist($parish);     
                           
                
            $parish = new Parish();
            $parish->setDescription('El Rincón')
                    ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-El-Rincón-suc", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Francisco Vásquez')
                    ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Francisco-Vásquez-suc", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('Guaraunos')
                    ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Guaraunos-suc", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Tunapuicito')
                    ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Tunapuicito-suc", $parish);
                $manager->persist($parish);       
                   
                
            $parish = new Parish();
            $parish->setDescription('Unión')
                    ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Unión-suc", $parish);
                $manager->persist($parish);       
                       
                
            $parish = new Parish();
            $parish->setDescription('Bolívar')
                    ->setMunicipality($this->getReference('Municipality-Bermudez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Bolívar-suc", $parish);
                $manager->persist($parish);       
                          
            $parish = new Parish();
            $parish->setDescription('Macarapana')
                    ->setMunicipality($this->getReference('Municipality-Bermudez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Macarapana-suc", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('Santa Catalina')
                    ->setMunicipality($this->getReference('Municipality-Bermudez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Santa-Catalina-suc", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Santa Rosa')
                    ->setMunicipality($this->getReference('Municipality-Bermudez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Santa-Rosa-suc", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Santa Teresa')
                    ->setMunicipality($this->getReference('Municipality-Bermudez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Santa-Teresa-suc", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Mariguitar')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Mariguitar-suc", $parish);
                $manager->persist($parish);      
                   
            $parish = new Parish();
            $parish->setDescription('Libertad')
                    ->setMunicipality($this->getReference('Municipality-Cajigal-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Libertad-suc", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('El Paujil')
                    ->setMunicipality($this->getReference('Municipality-Cajigal-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-El-Paujil-suc", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Yaguaraparo')
                    ->setMunicipality($this->getReference('Municipality-Cajigal-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Yaguaraparo-suc", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Araya')
                    ->setMunicipality($this->getReference('Municipality-Cruz-Salmeron-Acosta-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Araya-suc", $parish);
                $manager->persist($parish);        
                
                    
            $parish = new Parish();
            $parish->setDescription('Chacopata')
                    ->setMunicipality($this->getReference('Municipality-Cruz-Salmeron-Acosta-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Chacopata-suc", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Manicuare')
                    ->setMunicipality($this->getReference('Municipality-Cruz-Salmeron-Acosta-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Manicuare-suc", $parish);
                $manager->persist($parish);         
                   
            $parish = new Parish();
            $parish->setDescription('Tunapuy')
                    ->setMunicipality($this->getReference('Municipality-Libertador-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Tunapuy-suc", $parish);
                $manager->persist($parish);            
                
            $parish = new Parish();
            $parish->setDescription('Campo Elías')
                    ->setMunicipality($this->getReference('Municipality-Libertador-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Campo-Elías-suc", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('San José de Aerocuar')
                    ->setMunicipality($this->getReference('Municipality-Andres-Mata-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-San-José-de-Aerocuar-suc", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Tavera Acosta')
                    ->setMunicipality($this->getReference('Municipality-Andres-Mata-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Tavera-Acosta-suc", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('Irapa')
                    ->setMunicipality($this->getReference('Municipality-Mariño-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Irapa-suc", $parish);
                $manager->persist($parish);           
                    
            $parish = new Parish();
            $parish->setDescription('Campo Claro')
                    ->setMunicipality($this->getReference('Municipality-Mariño-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Campo-Claro-suc", $parish);
                $manager->persist($parish);           
                        
            $parish = new Parish();
            $parish->setDescription('Marabal')
                    ->setMunicipality($this->getReference('Municipality-Mariño-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Marabal-suc", $parish);
                $manager->persist($parish);           
                        
            $parish = new Parish();
            $parish->setDescription('San Antonio de Irapa')
                    ->setMunicipality($this->getReference('Municipality-Mariño-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-San-Antonio-de-Irapa-suc", $parish);
                $manager->persist($parish);           
                                
                
            $parish = new Parish();
            $parish->setDescription('Soro')
                    ->setMunicipality($this->getReference('Municipality-Mariño-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Soro-suc", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Mejía')
                    ->setMunicipality($this->getReference('Municipality-Mejia-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Mejía-suc", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Cumanacoa')
                    ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Cumanacoa-suc", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Arenas')
                    ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Arenas-suc", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Aricagua')
                    ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Aricagua-suc", $parish);
                $manager->persist($parish);         
                        
            $parish = new Parish();
            $parish->setDescription('Cocollar')
                    ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Cocollar-suc", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('San Fernando')
                    ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-San-Fernando-suc", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('San Lorenzo')
                    ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-San-Lorenzo-suc", $parish);
                $manager->persist($parish);    
                    
            $parish = new Parish();
            $parish->setDescription('Cariaco')
                    ->setMunicipality($this->getReference('Municipality-Ribero-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Cariaco-suc", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Catuaro')
                    ->setMunicipality($this->getReference('Municipality-Ribero-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Catuaro-suc", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Rendón')
                    ->setMunicipality($this->getReference('Municipality-Ribero-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Rendón-suc", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('San Cruz')
                    ->setMunicipality($this->getReference('Municipality-Ribero-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-San-Cruz-suc", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Santa María')
                    ->setMunicipality($this->getReference('Municipality-Ribero-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Santa-María-suc", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Altagracia')
                    ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Altagracia-suc", $parish);
                $manager->persist($parish);       
                    
            $parish = new Parish();
            $parish->setDescription('Ayacucho')
                    ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Ayacucho-suc", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Gran Mariscal')
                    ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Gran-Mariscal-suc", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Raúl Leoni')
                    ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Raúl-Leoni-suc", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('San Juan')
                    ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-San-Juan-suc", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Santa Inés')
                    ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Santa-Inés-suc", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Valentín Valiente')
                    ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Valentín-Valiente-suc", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Cristóbal Colón')
                    ->setMunicipality($this->getReference('Municipality-Valdez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Cristóbal-Colón-suc", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Bideau')
                    ->setMunicipality($this->getReference('Municipality-Valdez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Bideau-suc", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Punta de Piedras')
                    ->setMunicipality($this->getReference('Municipality-Valdez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Punta-de-Piedras-suc", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Güiria')
                    ->setMunicipality($this->getReference('Municipality-Valdez-suc'))
                    ->setState($this->getReference("State-Sucre"))
                    ;
                    $this->addReference("Parish-Güiria-suc", $parish);
                $manager->persist($parish);  
                
                
            //parroquias del estado tachira    
                
                
            $parish = new Parish();
            $parish->setDescription('Andrés Bello')
                    ->setMunicipality($this->getReference('Municipality-Andres-Bello-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Andrés-Bello-tac", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Antonio Rómulo Costa')
                    ->setMunicipality($this->getReference('Municipality-Antonio-Romulo-Costa-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Antonio-Rómulo-Costa-tac", $parish);
                $manager->persist($parish);        
                    
            $parish = new Parish();
            $parish->setDescription('Ayacucho')
                    ->setMunicipality($this->getReference('Municipality-Ayacucho-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Ayacucho-tac", $parish);
                $manager->persist($parish);        
                        
            $parish = new Parish();
            $parish->setDescription('Rivas Berti')
                    ->setMunicipality($this->getReference('Municipality-Ayacucho-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Rivas-Berti-tac", $parish);
                $manager->persist($parish);        
                            
            $parish = new Parish();
            $parish->setDescription('San Pedro del Río')
                    ->setMunicipality($this->getReference('Municipality-Ayacucho-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-San-Pedro-del-Río-tac", $parish);
                $manager->persist($parish);            
                
            $parish = new Parish();
            $parish->setDescription('Bolívar')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Bolívar-tac", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Palotal')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Palotal-tac", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('General Juan Vicente Gómez')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-General-Juan-Vicente-Gómez-tac", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Isaías Medina Angarita')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Isaías-Medina-Angarita-tac", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Amenodoro Rangel Lamús')
                    ->setMunicipality($this->getReference('Municipality-Cardenas-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Amenodoro-Rangel-Lamús-tac", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('La Florida')
                    ->setMunicipality($this->getReference('Municipality-Cardenas-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-La-Florida-tac", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Cárdenas')
                    ->setMunicipality($this->getReference('Municipality-Cardenas-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Cárdenas-tac", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Córdoba')
                    ->setMunicipality($this->getReference('Municipality-Cordoba-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Córdoba-tac", $parish);
                $manager->persist($parish);     
                   
            $parish = new Parish();
            $parish->setDescription('Fernández Feo')
                    ->setMunicipality($this->getReference('Municipality-Fernandez-Feo-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Fernández-Feo-tac", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Alberto Adriani')
                    ->setMunicipality($this->getReference('Municipality-Fernandez-Feo-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Alberto-Adriani-tac", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Santo Domingo')
                    ->setMunicipality($this->getReference('Municipality-Fernandez-Feo-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Santo-Domingo-tac", $parish);
                $manager->persist($parish);     
                
           /* $parish = new Parish();
            $parish->setDescription('Francisco de Miranda')
                    ->setMunicipality($this->getReference('Municipality-Francisco-de-Miranda-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Francisco-de-Miranda-tac", $parish);
                $manager->persist($parish);     */
                
            $parish = new Parish();
            $parish->setDescription('García de Hevia')
                    ->setMunicipality($this->getReference('Municipality-Garcia-de-Hevia-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-García-de-Hevia-tac", $parish);
                $manager->persist($parish);            
                
            $parish = new Parish();
            $parish->setDescription('Boca de Grita')
                    ->setMunicipality($this->getReference('Municipality-Garcia-de-Hevia-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Boca-de-Grita-tac", $parish);
                $manager->persist($parish);            
                    
            $parish = new Parish();
            $parish->setDescription('José Antonio Páez')
                    ->setMunicipality($this->getReference('Municipality-Garcia-de-Hevia-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-José-Antonio-Páez-tac", $parish);
                $manager->persist($parish);     
                
           /* $parish = new Parish();
            $parish->setDescription('Guasimo')
                    ->setMunicipality($this->getReference('Municipality-Guasimo-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Guasimo-tac", $parish);
                $manager->persist($parish);  */  
                
            $parish = new Parish();
            $parish->setDescription('Independencia')
                    ->setMunicipality($this->getReference('Municipality-Independencia-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Independencia-tac", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Juan Germán Roscio')
                    ->setMunicipality($this->getReference('Municipality-Independencia-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Juan-Germán-Roscio-tac", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Román Cárdenas')
                    ->setMunicipality($this->getReference('Municipality-Independencia-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Román-Cárdenas-tac", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Jáuregui')
                    ->setMunicipality($this->getReference('Municipality-Jauregui-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Jáuregui-tac", $parish);
                $manager->persist($parish);      
                   
                
            $parish = new Parish();
            $parish->setDescription('Emilio Constantino Guerrero')
                    ->setMunicipality($this->getReference('Municipality-Jauregui-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Emilio-Constantino-Guerrero-tac", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Monseñor Miguel Antonio Salas')
                    ->setMunicipality($this->getReference('Municipality-Jauregui-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Monseñor-Miguel-Antonio-Salas-tac", $parish);
                $manager->persist($parish);       
                    
            
                
            $parish = new Parish();
            $parish->setDescription('Junín')
                    ->setMunicipality($this->getReference('Municipality-Junin-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Junín-tac", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('La Petrólea')
                    ->setMunicipality($this->getReference('Municipality-Junin-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-La-Petrólea-tac", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Quinimarí')
                    ->setMunicipality($this->getReference('Municipality-Junin-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Quinimarí-tac", $parish);
                $manager->persist($parish);       
                    
                
            $parish = new Parish();
            $parish->setDescription('Bramón')
                    ->setMunicipality($this->getReference('Municipality-Junin-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Bramón-tac", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('Libertad')
                    ->setMunicipality($this->getReference('Municipality-Libertad-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Libertad-tac", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Cipriano Castro')
                    ->setMunicipality($this->getReference('Municipality-Libertad-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Cipriano-Castro-tac", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Manuel Felipe Rugeles')
                    ->setMunicipality($this->getReference('Municipality-Libertad-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Manuel-Felipe-Rugeles-tac", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Capital Libertador')
                    ->setMunicipality($this->getReference('Municipality-Libertador-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Capital-Libertador-tac", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Doradas')
                    ->setMunicipality($this->getReference('Municipality-Libertador-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Doradas-tac", $parish);
                $manager->persist($parish);      
                   
            $parish = new Parish();
            $parish->setDescription('Don Emeterio Ochoa')
                    ->setMunicipality($this->getReference('Municipality-Libertador-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Don-Emeterio-Ochoa-tac", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('San Joaquín de Navay')
                    ->setMunicipality($this->getReference('Municipality-Libertador-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-San-Joaquín-de-Navay-tac", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Lobatera')
                    ->setMunicipality($this->getReference('Municipality-Lobatera-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Lobatera-tac", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Constitución')
                    ->setMunicipality($this->getReference('Municipality-Lobatera-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Constitución-tac", $parish);
                $manager->persist($parish);          
                
            
                
                
            $parish = new Parish();
            $parish->setDescription('Panamericano')
                    ->setMunicipality($this->getReference('Municipality-Panamericano-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Panamericano-tac", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('La Palmita')
                    ->setMunicipality($this->getReference('Municipality-Panamericano-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-La-Palmita-tac", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Pedro María Ureña')
                    ->setMunicipality($this->getReference('Municipality-Pedro-Maria-Ureña-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Pedro-María-Ureña-tac", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Nueva Arcadia')
                    ->setMunicipality($this->getReference('Municipality-Pedro-Maria-Ureña-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Nueva-Arcadia-tac", $parish);
                $manager->persist($parish);    
                   
            
                
                 
                
                
            $parish = new Parish();
            $parish->setDescription('Samuel Darío Maldonado')
                    ->setMunicipality($this->getReference('Municipality-Samuel-Dario-Maldonado-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Samuel-Darío-Maldonado-tac", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Boconó')
                    ->setMunicipality($this->getReference('Municipality-Samuel-Dario-Maldonado-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Boconó-tac", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Hernández')
                    ->setMunicipality($this->getReference('Municipality-Samuel-Dario-Maldonado-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Hernández-tac", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('La Concordia')
                    ->setMunicipality($this->getReference('Municipality-San-Cristobal-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-La-Concordia-tac", $parish);
                $manager->persist($parish);            
                
            $parish = new Parish();
            $parish->setDescription('San Juan Bautista')
                    ->setMunicipality($this->getReference('Municipality-San-Cristobal-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-San-Juan-Bautista-tac", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Pedro María Morantes')
                    ->setMunicipality($this->getReference('Municipality-San-Cristobal-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Pedro-María-Morantes-tac", $parish);
                $manager->persist($parish);       
                
                   
            $parish = new Parish();
            $parish->setDescription('San Sebastián')
                    ->setMunicipality($this->getReference('Municipality-San-Cristobal-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-San-Sebastián-tac", $parish);
                $manager->persist($parish);       
                    
                
            $parish = new Parish();
            $parish->setDescription('Dr. Francisco Romero Lobo')
                    ->setMunicipality($this->getReference('Municipality-San-Cristobal-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Dr-Francisco-Romero-Lobo-tac", $parish);
                $manager->persist($parish);      
             
            $parish = new Parish();
            $parish->setDescription('Sucre')
                    ->setMunicipality($this->getReference('Municipality-Sucre-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Sucre-tac", $parish);
                $manager->persist($parish);         
            
            $parish = new Parish();
            $parish->setDescription('Eleazar López Contreras')
                    ->setMunicipality($this->getReference('Municipality-Simon-Rodriguez-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Eleazar-López-Contreras-tac", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('San Pablo')
                    ->setMunicipality($this->getReference('Municipality-Simon-Rodriguez-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-San-Pablo-tac", $parish);
                $manager->persist($parish);     
                
          /*  $parish = new Parish();
            $parish->setDescription('San José Obrero')
                    ->setMunicipality($this->getReference('Municipality-Torbes-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-San-José-Obrero-tac", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('San Juan Eudes')
                    ->setMunicipality($this->getReference('Municipality-Torbes-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-San-Juan-Eudes-tac", $parish);
                $manager->persist($parish);     
                */
                
            $parish = new Parish();
            $parish->setDescription('Uribante')
                    ->setMunicipality($this->getReference('Municipality-Uribante-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Uribante-tac", $parish);
                $manager->persist($parish);     
                   
            $parish = new Parish();
            $parish->setDescription('Cárdenas')
                    ->setMunicipality($this->getReference('Municipality-Uribante-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Cárdenas-uri-tac", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Juan Pablo Peñalosa')
                    ->setMunicipality($this->getReference('Municipality-Uribante-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Juan-Pablo-Peñalosa-tac", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Potosí')
                    ->setMunicipality($this->getReference('Municipality-Uribante-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-Potosí-tac", $parish);
                $manager->persist($parish);       
                
            /*$parish = new Parish();
            $parish->setDescription('San Judas Tadeo')
                    ->setMunicipality($this->getReference('Municipality-San-Judas-Tadeo-tac'))
                    ->setState($this->getReference("State-Tachira"))
                    ;
                    $this->addReference("Parish-San-Judas-Tadeo-tac", $parish);
                $manager->persist($parish);   */    
                   
               //parroquias del estado trujillo
                
            $parish = new Parish();
            $parish->setDescription('Araguaney')
                    ->setMunicipality($this->getReference('Municipality-Andres-Bello-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Araguaney-tru", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('El Jaguito')
                    ->setMunicipality($this->getReference('Municipality-Andres-Bello-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-El-Jaguito-tru", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('La Esperanza')
                    ->setMunicipality($this->getReference('Municipality-Andres-Bello-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-La-Esperanza-tru", $parish);
                $manager->persist($parish);         
                    
                
            $parish = new Parish();
            $parish->setDescription('Santa Isabel')
                    ->setMunicipality($this->getReference('Municipality-Andres-Bello-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Santa-Isabel-tru", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Boconó')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Boconó-tru", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('El Carmen')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-El-Carmen-tru", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Mosquey')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Mosquey-tru", $parish);
                $manager->persist($parish);           
                    
            $parish = new Parish();
            $parish->setDescription('Ayacucho')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Ayacucho-tru", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Burbusay')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Burbusay-tru", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('General Ribas')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-General-Ribas-tru", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Guaramacal')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Guaramacal-tru", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Vega de Guaramacal')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Vega-de-Guaramacal-tru", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Monseñor Jáuregui')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Monseñor-Jáuregui-tru", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Rafael Rangel')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Rafael-Rangel-tru", $parish);
                $manager->persist($parish);       
                   
            $parish = new Parish();
            $parish->setDescription('San Miguel')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-San-Miguel-tru", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('San José')
                    ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-San-José-boc-tru", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Sabana Grande')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Sabana-Grande-tru", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('Cheregüé')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Cheregüé-tru", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Granados')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Granados-tru", $parish);
                $manager->persist($parish);          
                    
                
            $parish = new Parish();
            $parish->setDescription('Arnoldo Gabaldón')
                    ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Arnoldo-Gabaldón-tru", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Bolivia')
                    ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Bolivia-tru", $parish);
                $manager->persist($parish);         
                    
            $parish = new Parish();
            $parish->setDescription('Carrillo')
                    ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Carrillo-tru", $parish);
                $manager->persist($parish);             
                
            $parish = new Parish();
            $parish->setDescription('Cegarra')
                    ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Cegarra-tru", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('Chejendé')
                    ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Chejendé-tru", $parish);
                $manager->persist($parish);           
                   
            $parish = new Parish();
            $parish->setDescription('Manuel Salvador Ulloa')
                    ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Manuel-Salvador-Ulloa-tru", $parish);
                $manager->persist($parish);             
                
            $parish = new Parish();
            $parish->setDescription('San José')
                    ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-San-José-tru", $parish);
                $manager->persist($parish);             
                    
            $parish = new Parish();
            $parish->setDescription('Carache')
                    ->setMunicipality($this->getReference('Municipality-Carache-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Carache-tru", $parish);
                $manager->persist($parish);             
                       
            $parish = new Parish();
            $parish->setDescription('La Concepción')
                    ->setMunicipality($this->getReference('Municipality-Carache-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-La-Concepción-tru", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Cuicas')
                    ->setMunicipality($this->getReference('Municipality-Carache-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Cuicas-tru", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Panamericana')
                    ->setMunicipality($this->getReference('Municipality-Carache-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Panamericana-tru", $parish);
                $manager->persist($parish);      
                    
            $parish = new Parish();
            $parish->setDescription('Santa Cruz')
                    ->setMunicipality($this->getReference('Municipality-Carache-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                        $this->addReference("Parish-Santa-Cruz-tru", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('Carvajal')
                    ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Carvajal-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Carvajal-tru", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('Campo Alegre')
                    ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Carvajal-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Campo-Alegre-tru", $parish);
                $manager->persist($parish);       
                
                
                
            $parish = new Parish();
            $parish->setDescription('Antonio Nicolás Briceño')
                    ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Carvajal-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Antonio-Nicolás-Briceño-tru", $parish);
                $manager->persist($parish);       
                    
            $parish = new Parish();
            $parish->setDescription('José Leonardo Suárez')
                    ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Carvajal-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-José-Leonardo-Suárez-tru", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Arnoldo Gabaldón')
                    ->setMunicipality($this->getReference('Municipality-Campo-Elias-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Arnoldo-Gabaldón-ce-tru", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Campo Elías')
                    ->setMunicipality($this->getReference('Municipality-Campo-Elias-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Campo-Elías-tru", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('Escuque')
                    ->setMunicipality($this->getReference('Municipality-Escuque-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Escuque-tru", $parish);
                $manager->persist($parish);   
                    
            $parish = new Parish();
            $parish->setDescription('La Unión')
                    ->setMunicipality($this->getReference('Municipality-Escuque-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-La-Unión-tru", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Santa Rita')
                    ->setMunicipality($this->getReference('Municipality-Escuque-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Santa-Rita-tru", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Sabana Libre')
                    ->setMunicipality($this->getReference('Municipality-Escuque-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Sabana-Libre-tru", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Santa Apolonia')
                    ->setMunicipality($this->getReference('Municipality-La-Ceiba-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Santa-Apolonia-tru", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('El Progreso')
                    ->setMunicipality($this->getReference('Municipality-La-Ceiba-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-El-Progreso-tru", $parish);
                $manager->persist($parish);      
          
            $parish = new Parish();
            $parish->setDescription('La Ceiba')
                    ->setMunicipality($this->getReference('Municipality-La-Ceiba-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-La-Ceiba-tru", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Tres de Febrero')
                    ->setMunicipality($this->getReference('Municipality-La-Ceiba-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Tres-de-Febrero-tru", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('El Socorro')
                    ->setMunicipality($this->getReference('Municipality-Marquez-Caziñales-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-El-Socorro-tru", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Los Caprichos')
                    ->setMunicipality($this->getReference('Municipality-Marquez-Caziñales-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Los-Caprichos-tru", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Antonio José de Sucre')
                    ->setMunicipality($this->getReference('Municipality-Marquez-Caziñales-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Antonio-José-de-Sucre-tru", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('El Dividive')
                    ->setMunicipality($this->getReference('Municipality-Miranda-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-El-Dividive-tru", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('Agua Santa')
                    ->setMunicipality($this->getReference('Municipality-Miranda-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Agua-Santa-tru", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Agua Caliente')
                    ->setMunicipality($this->getReference('Municipality-Miranda-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Agua-Caliente-tru", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('El Cenizo')
                    ->setMunicipality($this->getReference('Municipality-Miranda-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-El-Cenizo-tru", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Valerita')
                    ->setMunicipality($this->getReference('Municipality-Miranda-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Valerita-tru", $parish);
                $manager->persist($parish);        
                    
            $parish = new Parish();
            $parish->setDescription('Monte Carmelo')
                    ->setMunicipality($this->getReference('Municipality-Monte-Carmelo-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Monte-Carmelo-tru", $parish);
                $manager->persist($parish);        
                        
            $parish = new Parish();
            $parish->setDescription('Buena Vista')
                    ->setMunicipality($this->getReference('Municipality-Monte-Carmelo-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Buena-Vista-tru", $parish);
                $manager->persist($parish);        
                           
            $parish = new Parish();
            $parish->setDescription('Santa María del Horcón')
                    ->setMunicipality($this->getReference('Municipality-Monte-Carmelo-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Santa-María-del-Horcón-tru", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('Motatán')
                    ->setMunicipality($this->getReference('Municipality-Motatan-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Motatán-tru", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('El Baño')
                    ->setMunicipality($this->getReference('Municipality-Motatan-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-El-Baño-tru", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Jalisco')
                    ->setMunicipality($this->getReference('Municipality-Motatan-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Jalisco-tru", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Santa Ana')
                    ->setMunicipality($this->getReference('Municipality-Pampan-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Santa-Ana-tru", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('La Paz')
                    ->setMunicipality($this->getReference('Municipality-Pampan-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-La-Paz-tru", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Flor de Patria')
                    ->setMunicipality($this->getReference('Municipality-Pampan-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Flor-de-Patria-tru", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Pampan')
                    ->setMunicipality($this->getReference('Municipality-Pampan-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Pampan-tru", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Pampanito')
                    ->setMunicipality($this->getReference('Municipality-Pampanito-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Pampanito-tru", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('La Concepción')
                    ->setMunicipality($this->getReference('Municipality-Pampanito-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-La-Concepción-pam-tru", $parish);
                $manager->persist($parish);       
                    
                
            $parish = new Parish();
            $parish->setDescription('Pampanito II')
                    ->setMunicipality($this->getReference('Municipality-Pampanito-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Pampanito-II-tru", $parish);
                $manager->persist($parish);       
                       
            $parish = new Parish();
            $parish->setDescription('Betijoque')
                    ->setMunicipality($this->getReference('Municipality-Rafael-Rangel-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Betijoque-tru", $parish);
                $manager->persist($parish);       
                          
            $parish = new Parish();
            $parish->setDescription('José Gregorio Hernández')
                    ->setMunicipality($this->getReference('Municipality-Rafael-Rangel-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-José-Gregorio-Hernández-tru", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('La Pueblita')
                    ->setMunicipality($this->getReference('Municipality-Rafael-Rangel-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-La-Pueblita-tru", $parish);
                $manager->persist($parish);       
                   
            $parish = new Parish();
            $parish->setDescription('Los Cedros')
                    ->setMunicipality($this->getReference('Municipality-Rafael-Rangel-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Los-Cedros-tru", $parish);
                $manager->persist($parish);                           
                
                
            $parish = new Parish();
            $parish->setDescription('Sabana de Mendoza')
                    ->setMunicipality($this->getReference('Municipality-Sucre-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Sabana-de-Mendoza-tru", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Junín')
                    ->setMunicipality($this->getReference('Municipality-Sucre-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Junín-tru", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Valmore Rodríguez')
                    ->setMunicipality($this->getReference('Municipality-Sucre-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Valmore-Rodríguez-tru", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('El Paraíso')
                    ->setMunicipality($this->getReference('Municipality-Sucre-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-El-Paraíso-tru", $parish);
                $manager->persist($parish);     
                        
            $parish = new Parish();
            $parish->setDescription('Andrés Linares')
                    ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Andrés-Linares-tru", $parish);
                $manager->persist($parish);     
                           
            $parish = new Parish();
            $parish->setDescription('Chiquinquira')
                    ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Chiquinquira-tru", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('Cristóbal Mendoza')
                    ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Cristóbal-Mendoza-tru", $parish);
                $manager->persist($parish);     
            
            $parish = new Parish();
            $parish->setDescription('Cruz Carrillo')
                    ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Cruz-Carrillo-tru", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Matriz')
                    ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Matriz-tru", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Monseñor Carrillo')
                    ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Monseñor-Carrillo-tru", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Tres Esquinas')
                    ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Tres-Esquinas-tru", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('Cabimbú')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Cabimbú-tru", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Jajó')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Jajó-tru", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('La Mesa')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-La-Mesa-tru", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Santiago')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Santiago-tru", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Tuñame')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Tuñame-tru", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('La Quebrada')
                    ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-La-Quebrada-tru", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Valera')
                    ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Valera-tru", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('Juan Ignacio Montilla')
                    ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Juan-Ignacio-Montilla-tru", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('La Beatriz')
                    ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-La-Beatriz", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('La Puerta')
                    ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-La-Puerta-tru", $parish);
                $manager->persist($parish);    
                    
            $parish = new Parish();
            $parish->setDescription('Mendoza del Valle del Momboy')
                    ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Mendoza-del-Valle-del-Momboy-tru", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Mercedes Díaz')
                    ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-Mercedes-Díaz-tru", $parish);
                $manager->persist($parish);   
                
            $parish = new Parish();
            $parish->setDescription('San Luis')
                    ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                    ->setState($this->getReference("State-Trujillo"))
                    ;
                    $this->addReference("Parish-San-Luis-tru", $parish);
                $manager->persist($parish);       
                
            //parroquias del estado vargas
                
                                
            $parish = new Parish();
            $parish->setDescription('Caraballeda')
                    ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                    ->setState($this->getReference("State-Vargas"))
                    ;
                    $this->addReference("Parish-Caraballeda-var", $parish);
                $manager->persist($parish);       
            
            $parish = new Parish();
            $parish->setDescription('Carayaca')
                    ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                    ->setState($this->getReference("State-Vargas"))
                    ;
                    $this->addReference("Parish-Carayaca-var", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Carlos Soublette')
                    ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                    ->setState($this->getReference("State-Vargas"))
                    ;
                    $this->addReference("Parish-Carlos Soublette-var", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Caruao')
                    ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                    ->setState($this->getReference("State-Vargas"))
                    ;
                    $this->addReference("Parish-Caruao-var", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Catia La Mar')
                    ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                    ->setState($this->getReference("State-Vargas"))
                    ;
                    $this->addReference("Parish-Catia-La-Mar-var", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('El Junko')
                    ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                    ->setState($this->getReference("State-Vargas"))
                    ;
                    $this->addReference("Parish-El-Junko-var", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('La Guaira')
                    ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                    ->setState($this->getReference("State-Vargas"))
                    ;
                    $this->addReference("Parish-La-Guaira-var", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Macuto')
                    ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                    ->setState($this->getReference("State-Vargas"))
                    ;
                    $this->addReference("Parish-Macuto-var", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Maiquetía')
                    ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                    ->setState($this->getReference("State-Vargas"))
                    ;
                    $this->addReference("Parish-Maiquetía-var", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Naiguatá')
                    ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                    ->setState($this->getReference("State-Vargas"))
                    ;
                    $this->addReference("Parish-Naiguatá-var", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Urimare')
                    ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                    ->setState($this->getReference("State-Vargas"))
                    ;
                    $this->addReference("Parish-Urimare-var", $parish);
                $manager->persist($parish);          
                
            
            //parroquias del estado yaracuy    
                
                
                
           $parish = new Parish();
           $parish->setDescription('Arístides Bastidas')
                    ->setMunicipality($this->getReference('Municipality-Bastidas-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Arístides-Bastidas-yar", $parish);
                $manager->persist($parish); 
                
           $parish = new Parish();
           $parish->setDescription('Bolívar')
                    ->setMunicipality($this->getReference('Municipality-Bolivar-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Bolívar-yar", $parish);
                $manager->persist($parish);    
                
           $parish = new Parish();
           $parish->setDescription('Campo Elías')
                    ->setMunicipality($this->getReference('Municipality-Bruzual-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Campo-Elías-yar", $parish);
                $manager->persist($parish);        
                
                
           $parish = new Parish();
           $parish->setDescription('Chivacoa')
                    ->setMunicipality($this->getReference('Municipality-Bruzual-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Chivacoa-yar", $parish);
                $manager->persist($parish);           
                
           $parish = new Parish();
           $parish->setDescription('Cocorote')
                    ->setMunicipality($this->getReference('Municipality-Cocorote-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Cocorote-yar", $parish);
                $manager->persist($parish);           
                
            $parish = new Parish();
            $parish->setDescription('Independencia')
                    ->setMunicipality($this->getReference('Municipality-Independencia-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Independencia-yar", $parish);
                $manager->persist($parish);             
                
            $parish = new Parish();
            $parish->setDescription('La Trinidad')
                    ->setMunicipality($this->getReference('Municipality-La-Trinidad-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-La-Trinidad-yar", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Manuel Monge')
                    ->setMunicipality($this->getReference('Municipality-Manuel-Monge-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Manuel-Monge-yar", $parish);
                $manager->persist($parish);      
                    
            $parish = new Parish();
            $parish->setDescription('Salóm')
                    ->setMunicipality($this->getReference('Municipality-Nirgua-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Salóm-yar", $parish);
                $manager->persist($parish);      
                        
            $parish = new Parish();
            $parish->setDescription('Temerla')
                    ->setMunicipality($this->getReference('Municipality-Nirgua-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Temerla-yar", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Nirgua')
                    ->setMunicipality($this->getReference('Municipality-Nirgua-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Nirgua-yar", $parish);
                $manager->persist($parish);       
                    
            $parish = new Parish();
            $parish->setDescription('José Antonio Páez')
                    ->setMunicipality($this->getReference('Municipality-Jose-Antonio-Paez-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-José-Antonio-Páez-yar", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San Andrés')
                    ->setMunicipality($this->getReference('Municipality-Peña-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-San-Andrés-yar", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Yaritagua')
                    ->setMunicipality($this->getReference('Municipality-Peña-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Yaritagua-yar", $parish);
                $manager->persist($parish);        
                   
            $parish = new Parish();
            $parish->setDescription('San Javier')
                    ->setMunicipality($this->getReference('Municipality-San-Felipe-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-San-Javier-yar", $parish);
                $manager->persist($parish);         
                
                
            $parish = new Parish();
            $parish->setDescription('Albarico')
                    ->setMunicipality($this->getReference('Municipality-San-Felipe-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Albarico-yar", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('San Felipe')
                    ->setMunicipality($this->getReference('Municipality-San-Felipe-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-San-Felipe-yar", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Sucre')
                    ->setMunicipality($this->getReference('Municipality-Sucre-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Sucre-yar", $parish);
                $manager->persist($parish);        
                    
            $parish = new Parish();
            $parish->setDescription('Urachiche')
                    ->setMunicipality($this->getReference('Municipality-Urachiche-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Urachiche-yar", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('El Guayabo')
                    ->setMunicipality($this->getReference('Municipality-Veroes-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-El-Guayabo-yar", $parish);
                $manager->persist($parish);      
            
            $parish = new Parish();
            $parish->setDescription('Farriar')
                    ->setMunicipality($this->getReference('Municipality-Veroes-yar'))
                    ->setState($this->getReference("State-Yaracuy"))
                    ;
                    $this->addReference("Parish-Farriar-yar", $parish);
                $manager->persist($parish);      
            
            
                
                //parroquias del estado zulia
                
                
                
            $parish = new Parish();
            $parish->setDescription('Isla de Toas')
                    ->setMunicipality($this->getReference('Municipality-Almirante-Padilla-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Isla-de-Toas-zul", $parish);
                $manager->persist($parish);     
                
               
                
            $parish = new Parish();
            $parish->setDescription('Monagas')
                    ->setMunicipality($this->getReference('Municipality-Almirante-Padilla-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Monagas-zul", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('San Timoteo')
                    ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-San-Timoteo-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('General Urdaneta')
                    ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-General-Urdaneta-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Libertador')
                    ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Libertador-zul", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Manuel Guanipa Matos')
                    ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Manuel-Guanipa-Matos-zul", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Marcelino Briceño')
                    ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Marcelino-Briceño-zul", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Pueblo Nuevo')
                    ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Pueblo-Nuevo-zul", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Germán Ríos Linares')
                    ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Germán-Ríos-Linares-zul", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Ambrosio')
                    ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Ambrosio-zul", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Carmen Herrera')
                    ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Carmen-Herrera-zul", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('La Rosa')
                    ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-La-Rosa-zul", $parish);
                $manager->persist($parish);         
                   
            $parish = new Parish();
            $parish->setDescription('San Benito')
                    ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-San-Benito-zul", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Arístides Calvani')
                    ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Arístides-Calvani-zul", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Jorge Hernández')
                    ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Jorge-Hernández-zul", $parish);
                $manager->persist($parish);       
                    
            $parish = new Parish();
            $parish->setDescription('Rómulo Betancourt')
                    ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Rómulo-Betancourt-zul", $parish);
                $manager->persist($parish);   
                
                
            $parish = new Parish();
            $parish->setDescription('Punta Gorda')
                    ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Punta-Gorda-zul", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Encontrados')
                    ->setMunicipality($this->getReference('Municipality-Catatumbo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Encontrados-zul", $parish);
                $manager->persist($parish);       
                   
                
            $parish = new Parish();
            $parish->setDescription('Udón Pérez')
                    ->setMunicipality($this->getReference('Municipality-Catatumbo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Udón-Pérez-zul", $parish);
                $manager->persist($parish);     
                
            
            $parish = new Parish();
            $parish->setDescription('Moralito')
                    ->setMunicipality($this->getReference('Municipality-Colon-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Moralito-zul", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('San Carlos del Zulia')
                    ->setMunicipality($this->getReference('Municipality-Colon-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-San-Carlos-del-Zulia-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Santa Cruz del Zulia')
                    ->setMunicipality($this->getReference('Municipality-Colon-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Santa-Cruz-del-Zulia-zul", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Santa Bárbara')
                    ->setMunicipality($this->getReference('Municipality-Colon-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Santa-Bárbara-zul", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Urribarri')
                    ->setMunicipality($this->getReference('Municipality-Colon-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Urribarri-zul", $parish);
                $manager->persist($parish);  
                
                   
            $parish = new Parish();
            $parish->setDescription('Carlos Quevedo')
                    ->setMunicipality($this->getReference('Municipality-Francisco-Javier-Pulgar-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Carlos-Quevedo-zul", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('Francisco Javier Pulgar')
                    ->setMunicipality($this->getReference('Municipality-Francisco-Javier-Pulgar-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Francisco-Javier-Pulgar-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Simón Rodríguez')
                    ->setMunicipality($this->getReference('Municipality-Francisco-Javier-Pulgar-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Simón-Rodríguez-zul", $parish);
                $manager->persist($parish);  
                
            $parish = new Parish();
            $parish->setDescription('Agustin Codazzi')
                    ->setMunicipality($this->getReference('Municipality-Francisco-Javier-Pulgar-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Agustin-Codazzi-zul", $parish);
                $manager->persist($parish);     
                
                
            $parish = new Parish();
            $parish->setDescription('La Concepción')
                    ->setMunicipality($this->getReference('Municipality-Jesus-Enrique-Lossada-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-La-Concepción-zul", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('San José')
                    ->setMunicipality($this->getReference('Municipality-Jesus-Enrique-Lossada-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-San-José-zul", $parish);
                $manager->persist($parish);     
                    
            $parish = new Parish();
            $parish->setDescription('Mariano Parra León')
                    ->setMunicipality($this->getReference('Municipality-Jesus-Enrique-Lossada-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Mariano-Parra-León-zul", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('José Ramón Yépez')
                    ->setMunicipality($this->getReference('Municipality-Jesus-Enrique-Lossada-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-José-Ramón-Yépez-zul", $parish);
                $manager->persist($parish);        
                
                
            $parish = new Parish();
            $parish->setDescription('Jesús María Semprún')
                    ->setMunicipality($this->getReference('Municipality-Jesus-Maria-Semprun-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Jesús-María-Semprún-zul", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Barí')
                    ->setMunicipality($this->getReference('Municipality-Jesus-Maria-Semprun-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Barí-zul", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Concepción')
                    ->setMunicipality($this->getReference('Municipality-La-Cañada-de-Urdaneta-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Concepción-zul", $parish);
                $manager->persist($parish);       
                
                
            $parish = new Parish();
            $parish->setDescription('Andrés Bello')
                    ->setMunicipality($this->getReference('Municipality-La-Cañada-de-Urdaneta-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Andrés-Bello-zul", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Chiquinquirá')
                    ->setMunicipality($this->getReference('Municipality-La-Cañada-de-Urdaneta-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Chiquinquirá-zul", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('El Carmelo')
                    ->setMunicipality($this->getReference('Municipality-La-Cañada-de-Urdaneta-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-El-Carmelo-zul", $parish);
                $manager->persist($parish);     
                    
                
            $parish = new Parish();
            $parish->setDescription('Potreritos')
                    ->setMunicipality($this->getReference('Municipality-La-Cañada-de-Urdaneta-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Potreritos-zul", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Alonso de Ojeda')
                    ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Alonso-de-Ojeda-zul", $parish);
                $manager->persist($parish);         
                    
                
            $parish = new Parish();
            $parish->setDescription('Libertad')
                    ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Libertad-zul", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Campo Lara')
                    ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Campo-Lara-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Eleazar López Contreras')
                    ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Eleazar-López-Contreras-zul", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('Venezuela')
                    ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Venezuela-zul", $parish);
                $manager->persist($parish); 
                
            $parish = new Parish();
            $parish->setDescription('El Danto')
                    ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-El-Danto-zul", $parish);
                $manager->persist($parish);      
                
                
                
            $parish = new Parish();
            $parish->setDescription('Bartolomé de las Casas')
                    ->setMunicipality($this->getReference('Municipality-Machiques-de-Perija-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Bartolomé-de-las-Casas-zul", $parish);
                $manager->persist($parish);      
                    
            $parish = new Parish();
            $parish->setDescription('Libertad')
                    ->setMunicipality($this->getReference('Municipality-Machiques-de-Perija-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Libertad-mp-zul", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Río Negro')
                    ->setMunicipality($this->getReference('Municipality-Machiques-de-Perija-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Río-Negro-zul", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('San José de Perijá')
                    ->setMunicipality($this->getReference('Municipality-Machiques-de-Perija-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-San-José-de-Perijá-zul", $parish);
                $manager->persist($parish);    
                    
            $parish = new Parish();
            $parish->setDescription('San Rafael')
                    ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-San-Rafael-zul", $parish);
                $manager->persist($parish);    
                        
            $parish = new Parish();
            $parish->setDescription('La Sierrita')
                    ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-La-Sierrita-zul", $parish);
                $manager->persist($parish);    
                            
                
            $parish = new Parish();
            $parish->setDescription('Las Parcelas')
                    ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Las-Parcelas-zul", $parish);
                $manager->persist($parish);    
                               
            $parish = new Parish();
            $parish->setDescription('Luis de Vicente')
                    ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Luis-de-Vicente-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Monseñor Marcos Sergio Godoy')
                    ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Monseñor-Marcos-Sergio-Godoy-zul", $parish);
                $manager->persist($parish);      
                    
            $parish = new Parish();
            $parish->setDescription('Ricaurte')
                    ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Ricaurte-zul", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('Tamare')
                    ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Tamare-zul", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Antonio Borjas Romero')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Antonio-Borjas-Romero-zul", $parish);
                $manager->persist($parish);    
                   
            $parish = new Parish();
            $parish->setDescription('Bolívar')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Bolívar-zul", $parish);
                $manager->persist($parish);    
            
            $parish = new Parish();
            $parish->setDescription('Cacique Mara')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Cacique-Mara-zul", $parish);
                $manager->persist($parish);             
                
            $parish = new Parish();
            $parish->setDescription('Carracciolo Parra Pérez')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Carracciolo-Parra-Pérez-zul", $parish);
                $manager->persist($parish);             
                    
            $parish = new Parish();
            $parish->setDescription('Cecilio Acosta')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Cecilio-Acosta-zul", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Cristo de Aranza')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Cristo-de-Aranza-zul", $parish);
                $manager->persist($parish);         
                
            $parish = new Parish();
            $parish->setDescription('Coquivacoa')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Coquivacoa-zul", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Chiquinquirá')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Chiquinquirá-mar-zul", $parish);
                $manager->persist($parish);          
                
               
                
            $parish = new Parish();
            $parish->setDescription('Francisco Eugenio Bustamante')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Francisco-Eugenio-Bustamante-zul", $parish);
                $manager->persist($parish);          
                
                
            $parish = new Parish();
            $parish->setDescription('Idelfonso Vásquez')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Idelfonso-Vásquez-zul", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Juana de Ávila')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Juana-de-Ávila-zul", $parish);
                $manager->persist($parish);     
                    
                
            $parish = new Parish();
            $parish->setDescription('Luis Hurtado Higuera')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Luis-Hurtado-Higuera-zul", $parish);
                $manager->persist($parish);     
                        
            $parish = new Parish();
            $parish->setDescription('Manuel Dagnino')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Manuel-Dagnino-zul", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Olegario Villalobos')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Olegario-Villalobos-zul", $parish);
                $manager->persist($parish);     
                    
                
            $parish = new Parish();
            $parish->setDescription('Raúl Leoni')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Raúl-Leoni-zul", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Santa Lucía')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Santa-Lucía-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('San Isidro')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-San-Isidro-zul", $parish);
                $manager->persist($parish);      
                    
            $parish = new Parish();
            $parish->setDescription('Venancio Pulgar')
                    ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Venancio-Pulgar-zul", $parish);
                $manager->persist($parish);      
                       
            $parish = new Parish();
            $parish->setDescription('Altagracia')
                    ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Altagracia-zul", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Ana María Campos')
                    ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Ana-María-Campos-zul", $parish);
                $manager->persist($parish);       
                   
            $parish = new Parish();
            $parish->setDescription('Faría')
                    ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Faría-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('San Antonio')
                    ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-San-Antonio-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('San José')
                    ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-San-José-mi-zul", $parish);
                $manager->persist($parish);
                
            $parish = new Parish();
            $parish->setDescription('José Antonio Chaves')
                    ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-José-Antonio-Chaves-zul", $parish);
                $manager->persist($parish);      
                
                
            $parish = new Parish();
            $parish->setDescription('Sinamaica')
                    ->setMunicipality($this->getReference('Municipality-Indígena-Bolivariano-Guajira-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Sinamaica-zul", $parish);
                $manager->persist($parish);      
                    
                
            $parish = new Parish();
            $parish->setDescription('Alta Guajira')
                    ->setMunicipality($this->getReference('Municipality-Indígena-Bolivariano-Guajira-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Alta-Guajira-zul", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Elías Sánchez Rubio')
                    ->setMunicipality($this->getReference('Municipality-Indígena-Bolivariano-Guajira-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Elías-Sánchez-Rubio-zul", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Guajira')
                    ->setMunicipality($this->getReference('Municipality-Indígena-Bolivariano-Guajira-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Guajira-zul", $parish);
                $manager->persist($parish);    
                
                
            $parish = new Parish();
            $parish->setDescription('Donaldo García')
                    ->setMunicipality($this->getReference('Municipality-Rosario-de-Perija-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Donaldo-García-zul", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('El Rosario')
                    ->setMunicipality($this->getReference('Municipality-Rosario-de-Perija-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-El-Rosario-zul", $parish);
                $manager->persist($parish);        
                   
            $parish = new Parish();
            $parish->setDescription('Sixto Zambrano')
                    ->setMunicipality($this->getReference('Municipality-Rosario-de-Perija-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Sixto-Zambrano-zul", $parish);
                $manager->persist($parish);                                    
                
                
            $parish = new Parish();
            $parish->setDescription('San Francisco')
                    ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-San-Francisco-zul", $parish);
                $manager->persist($parish);       
                    
            $parish = new Parish();
            $parish->setDescription('El Bajo')
                    ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-El-Bajo-zul", $parish);
                $manager->persist($parish);           
                
                
            $parish = new Parish();
            $parish->setDescription('Domitila Flores')
                    ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Domitila-Flores-zul", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Francisco Ochoa')
                    ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Francisco-Ochoa-zul", $parish);
                $manager->persist($parish);    
                    
            $parish = new Parish();
            $parish->setDescription('Los Cortijos')
                    ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Los-Cortijos-zul", $parish);
                $manager->persist($parish);    
                        
            $parish = new Parish();
            $parish->setDescription('Marcial Hernández')
                    ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Marcial-Hernández-zul", $parish);
                $manager->persist($parish);    
                           
            $parish = new Parish();
            $parish->setDescription('Jose Domingo Rus')
                    ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Jose-Domingo-Rus-zul", $parish);
                $manager->persist($parish);    
                               
            $parish = new Parish();
            $parish->setDescription('El Mene')
                    ->setMunicipality($this->getReference('Municipality-Santa-Rita-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-El-Mene-zul", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('José Cenobio Urribarrí')
                    ->setMunicipality($this->getReference('Municipality-Santa-Rita-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-José-Cenobio-Urribarrí-zul", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Pedro Lucas Urribarrí')
                    ->setMunicipality($this->getReference('Municipality-Santa-Rita-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Pedro-Lucas-Urribarrí-zul", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Santa Rita')
                    ->setMunicipality($this->getReference('Municipality-Santa-Rita-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Santa Rita-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Rafael Maria Baralt')
                    ->setMunicipality($this->getReference('Municipality-Simon-Bolivar-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Rafael-Maria-Baralt-zul", $parish);
                $manager->persist($parish);    
                
            $parish = new Parish();
            $parish->setDescription('Manuel Manrique')
                    ->setMunicipality($this->getReference('Municipality-Simon-Bolivar-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Manuel-Manrique-zul", $parish);
                $manager->persist($parish);    
                    
            $parish = new Parish();
            $parish->setDescription('Rafael Urdaneta')
                    ->setMunicipality($this->getReference('Municipality-Simon-Bolivar-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Rafael-Urdaneta-sb-zul", $parish);
                $manager->persist($parish);     
                
            $parish = new Parish();
            $parish->setDescription('Bobures')
                    ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Bobures-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Gibraltar')
                    ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Gibraltar-zul", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('Heras')
                    ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Heras-zul", $parish);
                $manager->persist($parish);        
                
            $parish = new Parish();
            $parish->setDescription('Monseñor Arturo Álvarez')
                    ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Monseñor-Arturo-Álvarez-zul", $parish);
                $manager->persist($parish);      
                
            $parish = new Parish();
            $parish->setDescription('Rómulo Gallegos')
                    ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Rómulo-Gallegos-zul", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('El Batey')
                    ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-El-Batey-zul", $parish);
                $manager->persist($parish);       
                
            $parish = new Parish();
            $parish->setDescription('Rafael Urdaneta')
                    ->setMunicipality($this->getReference('Municipality-Valmore Rodriguez-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Rafael-Urdaneta-zul", $parish);
                $manager->persist($parish); 
                
            $parish = new Parish();
            $parish->setDescription('La Victoria')
                    ->setMunicipality($this->getReference('Municipality-Valmore Rodriguez-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-La-Victoria-zul", $parish);
                $manager->persist($parish);          
                
            $parish = new Parish();
            $parish->setDescription('Raúl Cuenca')
                    ->setMunicipality($this->getReference('Municipality-Valmore Rodriguez-zul'))
                    ->setState($this->getReference("State-Zulia"))
                    ;
                    $this->addReference("Parish-Raúl-Cuenca-zul", $parish);
                $manager->persist($parish);
                
        $manager->flush();
       
    }
    
    public function getOrder() {
        return 4;
    }
}
