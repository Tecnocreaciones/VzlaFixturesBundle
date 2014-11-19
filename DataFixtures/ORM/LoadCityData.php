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
use Tecnocreaciones\Vzla\EntityBundle\Entity\City;

/**
 * Data de las ciudades
 *
 * @see https://github.com/marydn/venezuela-sql/blob/master/venezuela.sql
 * @author Carlos Mendoza <inhack20@tecnocreaciones.com>
 */
class LoadCityData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) {
        //distrito capital
        $city = new City();
        $city
                ->setDescription('Caracas')
                ->setCapital(false)
                ->setState($this->getReference('State-Distrito-Capital-dc'))
                ->setMunicipality($this->getReference('Municipality-Libertador-dc'))
                ->addParish($this->getReference('Parish-Altagracia-dc'))
                ->addParish($this->getReference('Parish-Antimano-dc'))
                ->addParish($this->getReference('Parish-Candelaria-dc'))
                ->addParish($this->getReference('Parish-Caricuao-dc'))
                ->addParish($this->getReference('Parish-Catedral-dc'))
                ->addParish($this->getReference('Parish-Coche-dc'))
                ->addParish($this->getReference('Parish-El-Junquito-dc'))
                ->addParish($this->getReference('Parish-El-Paraiso-dc'))
                ->addParish($this->getReference('Parish-El-Recreo-dc'))
                ->addParish($this->getReference('Parish-El-valle-dc'))
                ->addParish($this->getReference('Parish-La-Pastora-dc'))
                ->addParish($this->getReference('Parish-La-Vega-dc'))
                ->addParish($this->getReference('Parish-Macarao-dc'))
                ->addParish($this->getReference('Parish-San-Agustin-dc'))
                ->addParish($this->getReference('Parish-San-Bernardino-dc'))
                ->addParish($this->getReference('Parish-San-Jose-dc'))
                ->addParish($this->getReference('Parish-San-Juan-dc'))
                ->addParish($this->getReference('Parish-San-Pedro-dc'))
                ->addParish($this->getReference('Parish-Santa-Rosalia-dc'))
                ->addParish($this->getReference('Parish-Santa-Teresa-dc'))
                ->addParish($this->getReference('Parish-Sucre-dc'))
                ->addParish($this->getReference('Parish-23-De-Enero-dc'))
                ;
                $this->addReference("City-Caracas-alt-dc", $city);
                $manager->persist($city);
                
        //ciudadades de amazonas
                
        $city = new City();
        $city
                ->setDescription('La Esmeralda')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-autonomo-alto-orinoco-ama'))
                ->setParish($this->getReference('Parish-Alto-Orinoco-ama'))
                ;
                $this->addReference("City-La-Esmeralda-ama", $city);
                $manager->persist($city);
        
        
        $city = new City();
        $city
                ->setDescription('Acanaña')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-autonomo-alto-orinoco-ama'))
                ->setParish($this->getReference('Parish-Huachamacare-ama'))
                ;
                $this->addReference("City-Acanaña-ama", $city);
                $manager->persist($city);
        
        $city = new City();
        $city
                ->setDescription('Toky-Shamanaña')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-autonomo-alto-orinoco-ama'))
                ->setParish($this->getReference('Parish-Marawaka-ama'))
                ;
                $this->addReference("City-Toky-Shamanaña-ama", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Mavaca')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-autonomo-alto-orinoco-ama'))
                ->setParish($this->getReference('Parish-Mavaka-ama'))
                ;
                $this->addReference("City-Mavaca-ama", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Parimabé')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-autonomo-alto-orinoco-ama'))
                ->setParish($this->getReference('Parish-Sierra-Parimabe-ama'))
                ;
                $this->addReference("City-Parimabé-ama", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('San Fernando de Atabapo')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-atabapo-ama'))
                ->setParish($this->getReference('Parish-Atabapo-ama'))
                ;
                $this->addReference("City-San-Fernando-de-Atabapo-ama", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Laja Lisa')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-atabapo-ama'))
                ->setParish($this->getReference('Parish-Ucata-ama'))
                ;
                $this->addReference("City-Laja-Lisa-ama", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Macuruco')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-atabapo-ama'))
                ->setParish($this->getReference('Parish-Yapacana-ama'))
                ;
                $this->addReference("City-Macuruco-ama", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Guarinuma')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-atabapo-ama'))
                ->setParish($this->getReference('Parish-Caname-ama'))
                ;
                $this->addReference("City-Guarinuma-ama", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Puerto Ayacucho')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-atures-ama'))
                ->setParish($this->getReference('Parish-Fernando-Girón-Tovar-ama'))
                ;
                $this->addReference("City-Puerto-Ayacucho-ama", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Puerto Ayacucho')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-atures-ama'))
                ->setParish($this->getReference('Parish-Luis-Alberto-Gómez-ama'))
                ;
                $this->addReference("City-Puerto-Ayacucho-lag-ama", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Limón de Parhueña')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-atures-ama'))
                ->setParish($this->getReference('Parish-Pahueña-ama'))
                ;
                $this->addReference("City-Limón-de-Parhueña-ama", $city);
                $manager->persist($city);       
                
        $city = new City();
        $city
                ->setDescription('Platanillal')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-atures-ama'))
                ->setParish($this->getReference('Parish-Platanillal-ama'))
                ;
                $this->addReference("City-Platanillal-ama", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Samariapo')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-autana-ama'))
                ->setParish($this->getReference('Parish-Samariapo-ama'))
                ;
                $this->addReference("City-Samariapo-ama", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Pendare')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-autana-ama'))
                ->setParish($this->getReference('Parish-Sipapo-ama'))
                ;
                $this->addReference("City-Pendare-ama", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Munduapo')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-autana-ama'))
                ->setParish($this->getReference('Parish-Munduapo-ama'))
                ;
                $this->addReference("City-Munduapo-ama", $city);
                $manager->persist($city);         
                       
        $city = new City();
        $city
                ->setDescription('San Pedro del Orinoco ')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-autana-ama'))
                ->setParish($this->getReference('Parish-Guayapo-ama'))
                ;
                $this->addReference("City-San-Pedro-del-Orinoco-ama", $city);
                $manager->persist($city);         
                               
        $city = new City();
        $city
                ->setDescription('Maroa')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-maroa-ama'))
                ->setParish($this->getReference('Parish-Maroa-ama'))
                ;
                $this->addReference("City-Maroa-ama", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Victorino')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-maroa-ama'))
                ->setParish($this->getReference('Parish-Victorino-ama'))
                ;
                $this->addReference("City-Victorino-ama", $city);
                $manager->persist($city);                   
                
                
        $city = new City();
        $city
                ->setDescription('Comunidad')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-maroa-ama'))
                ->setParish($this->getReference('Parish-Comunidad-ama'))
                ;
                $this->addReference("City-Comunidad-ama", $city);
                $manager->persist($city);                   
                        
                
        $city = new City();
        $city
                ->setDescription('San Juan de Manapiare')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-manapiare-ama'))
                ->setParish($this->getReference('Parish-Manapiare-ama'))
                ;
                $this->addReference("City-San-Juan-de-Manapiare-ama", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Cacurí')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-manapiare-ama'))
                ->setParish($this->getReference('Parish-Alto-Ventuari-ama'))
                ;
                $this->addReference("City-Cacurí-ama", $city);
                $manager->persist($city);         
                        
        $city = new City();
        $city
                ->setDescription('Camani')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-manapiare-ama'))
                ->setParish($this->getReference('Parish-Medio-Ventuari-ama'))
                ;
                $this->addReference("City-Camani-ama", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Marueta')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-manapiare-ama'))
                ->setParish($this->getReference('Parish-Bajo-Ventuari-ama'))
                ;
                $this->addReference("City-Marueta-ama", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('San Carlos de Río Negro')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-rio-negro-ama'))
                ->setParish($this->getReference('Parish-San-Carlos-ama'))
                ;
                $this->addReference("City-San-Carlos-de-Río-Negro-ama", $city);
                $manager->persist($city);     
                
                        
        $city = new City();
        $city
                ->setDescription('Solano')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-rio-negro-ama'))
                ->setParish($this->getReference('Parish-Solano-ama'))
                ;
                $this->addReference("City-Solano-ama", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Curimacare')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-rio-negro-ama'))
                ->setParish($this->getReference('Parish-Casiquiare-ama'))
                ;
                $this->addReference("City-Curimacare-ama", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('Santa Lucía')
                ->setCapital(false)
                ->setState($this->getReference('State-Amazonas'))
                ->setMunicipality($this->getReference('Municipality-Autonomo-rio-negro-ama'))
                ->setParish($this->getReference('Parish-Cocuy-ama'))
                ;
                $this->addReference("City-Santa-Lucía-ama", $city);
                $manager->persist($city);                
                        
        //ciudades del estado anzoategui   
                                     
        $city = new City();
        $city
                ->setDescription('Anaco')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Anaco-anz'))
                ->setParish($this->getReference('Parish-Anaco-anz'))
                ;
                $this->addReference("City-Santa-Lucía-anz", $city);
                $manager->persist($city);               
                
        $city = new City();
        $city
                ->setDescription('San Joaquín')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Anaco-anz'))
                ->setParish($this->getReference('Parish-San-Joaquin-anz'))
                ;
                $this->addReference("City-San-Joaquín-anz", $city);
                $manager->persist($city);                  
                
        $city = new City();
        $city
                ->setDescription('Buena Vista')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Anaco-anz'))
                ->setParish($this->getReference('Parish-Buena-Vista-anz'))
                ;
                $this->addReference("City-Buena-Vista-anz", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Aragua de Barcelona')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Aragua-anz'))
                ->setParish($this->getReference('Parish-Aragua-de-Barcelona-anz'))
                ;
                $this->addReference("City-Aragua-de-Barcelona-anz", $city);
                $manager->persist($city);            
                        
        $city = new City();
        $city
                ->setDescription('Cachipo')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Aragua-anz'))
                ->setParish($this->getReference('Parish-Cachipo-anz'))
                ;
                $this->addReference("City-Cachipo-anz", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Puerto Píritu')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Peñalver-anz'))
                ->setParish($this->getReference('Parish-Cachipo-anz'))
                ;
                $this->addReference("City-Puerto-Píritu-anz", $city);
                $manager->persist($city);            
                       
                
        $city = new City();
        $city
                ->setDescription('San Miguel')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Peñalver-anz'))
                ->setParish($this->getReference('Parish-Cachipo-anz'))
                ;
                $this->addReference("City-San-Miguel-anz", $city);
                $manager->persist($city);                                                      
                
                
        $city = new City();
        $city
                ->setDescription('El Hatillo')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Peñalver-anz'))
                ->setParish($this->getReference('Parish-Sucre-anz'))
                ;
                $this->addReference("City-El-Hatillo-anz", $city);
                $manager->persist($city);         
                        
        $city = new City();
        $city
                ->setDescription('Valle de Guanape')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Carvajal-anz'))
                ->setParish($this->getReference('Parish-Valle-de-Guanape-anz'))
                ;
                $this->addReference("City-Valle-de-Guanape-anz", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Santa Bárbara')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Carvajal-anz'))
                ->setParish($this->getReference('Parish-Santa-Bárbara-anz'))
                ;
                $this->addReference("City-Santa-Bárbara-anz", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Pariaguán')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Miranda-anz'))
                ->setParish($this->getReference('Parish-Pariaguán-anz'))
                ;
                $this->addReference("City-Pariaguán-anz", $city);
                $manager->persist($city);        
                        
                
        $city = new City();
        $city
                ->setDescription('Atapirire')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Miranda-anz'))
                ->setParish($this->getReference('Parish-Atapirire-anz'))
                ;
                $this->addReference("City-Atapirire-anz", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('Boca del Pao')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Miranda-anz'))
                ->setParish($this->getReference('Parish-Boca-del-Pao-anz'))
                ;
                $this->addReference("City-Boca-del-Pao-anz", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('El Pao de Barcelona')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Miranda-anz'))
                ->setParish($this->getReference('Parish-El-Pao-anz'))
                ;
                $this->addReference("City-El-Pao-de-Barcelona-anz", $city);
                $manager->persist($city);       
                
        $city = new City();
        $city
                ->setDescription('Múcura')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Miranda-anz'))
                ->setParish($this->getReference('Parish-Múcura-anz'))
                ;
                $this->addReference("City-Múcura-anz", $city);
                $manager->persist($city);       
                       
        $city = new City();
        $city
                ->setDescription('Guanta')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Guanta-anz'))
                ->setParish($this->getReference('Parish-Guanta-anz'))
                ;
                $this->addReference("City-Guanta-anz", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Pertigalete')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Guanta-anz'))
                ->setParish($this->getReference('Parish-Chorrerón-anz'))
                ;
                $this->addReference("City-Pertigalete-anz", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Soledad')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Independencia-anz'))
                ->setParish($this->getReference('Parish-Soledad-anz'))
                ;
                $this->addReference("City-Soledad-anz", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Carapa')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Independencia-anz'))
                ->setParish($this->getReference('Parish-Mamo-anz'))
                ;
                $this->addReference("City-Carapa-anz", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Puerto La Cruz')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Sotillo-anz'))
                ->setParish($this->getReference('Parish-Puerto-La-Cruz-anz'))
                ;
                $this->addReference("City-Puerto-La-Cruz-anz", $city);
                $manager->persist($city);            
                        
        $city = new City();
        $city
                ->setDescription('Pozuelos')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Sotillo-anz'))
                ->setParish($this->getReference('Parish-Pozuelos-anz'))
                ;
                $this->addReference("City-Pozuelos-anz", $city);
                $manager->persist($city);            
                                
                
        $city = new City();
        $city
                ->setDescription('Onoto')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Cajigal-anz'))
                ->setParish($this->getReference('Parish-Onoto-anz'))
                ;
                $this->addReference("City-Onoto-anz", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('San Pablo')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Cajigal-anz'))
                ->setParish($this->getReference('Parish-San-Pablo-anz'))
                ;
                $this->addReference("City-San-Pablo-anz", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Mapire')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                ->setParish($this->getReference('Parish-Mapire-anz'))
                ;
                $this->addReference("City-Mapire", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Santa Cruz de Orinoco')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                ->setParish($this->getReference('Parish-Mapire-anz'))
                ;
                $this->addReference("City-Santa-Cruz-de-Orinoco-anz", $city);
                $manager->persist($city);            
                        
        $city = new City();
        $city
                ->setDescription('San Diego de Cabrutica')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                ->setParish($this->getReference('Parish-Mapire-anz'))
                ;
                $this->addReference("City-San-Diego-de-Cabrutica-anz", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Santa Clara')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                ->setParish($this->getReference('Parish-Santa-Clara-anz'))
                ;
                $this->addReference("City-Santa-Clara-anz", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Uverito')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                ->setParish($this->getReference('Parish-Uverito-anz'))
                ;
                $this->addReference("City-Uverito-anz", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Zuata')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Monagas-anz'))
                ->setParish($this->getReference('Parish-Zuata-anz'))
                ;
                $this->addReference("City-Zuata-anz", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('San Mateo')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Libertad-anz'))
                ->setParish($this->getReference('Parish-San-Mateo-anz'))
                ;
                $this->addReference("City-San-Mateo-anz", $city);
                $manager->persist($city);          
                                
        $city = new City();
        $city
                ->setDescription('El Carito')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Libertad-anz'))
                ->setParish($this->getReference('Parish-El-Carito-anz'))
                ;
                $this->addReference("City-El-Carito-anz", $city);
                $manager->persist($city);          
        
        $city = new City();
        $city
                ->setDescription('Santa Inés')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Libertad-anz'))
                ->setParish($this->getReference('Parish-Santa-Ines-anz'))
                ;
                $this->addReference("City-Santa-Inés-anz", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Clarines')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Bruzual-anz'))
                ->setParish($this->getReference('Parish-Clarines-anz'))
                ;
                $this->addReference("City-Clarines-anz", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('Guanape')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Bruzual-anz'))
                ->setParish($this->getReference('Parish-Guanape-anz'))
                ;
                $this->addReference("City-Guanape-anz", $city);
                $manager->persist($city);                      
                
        $city = new City();
        $city
                ->setDescription('Sabana de Uchire')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Bruzual-anz'))
                ->setParish($this->getReference('Parish-Sabana-de-Uchire-anz'))
                ;
                $this->addReference("City-Sabana-de-Uchire-anz", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Cantaura')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Freites-anz'))
                ->setParish($this->getReference('Parish-Cantaura-anz'))
                ;
                $this->addReference("City-Cantaura-anz", $city);
                $manager->persist($city);        
                
        $city = new City();
        $city
                ->setDescription('Mundo Nuevo')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Freites-anz'))
                ->setParish($this->getReference('Parish-Libertador-anz'))
                ;
                $this->addReference("City-Mundo-Nuevo-anz", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Santa Rosa')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Freites-anz'))
                ->setParish($this->getReference('Parish-Santa-Rosa-anz'))
                ;
                $this->addReference("City-Santa-Rosa-anz", $city);
                $manager->persist($city);         
                
                
               
        $city = new City();
        $city
                ->setDescription('Urica')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Freites-anz'))
                ->setParish($this->getReference('Parish-Úrica-anz'))
                ;
                $this->addReference("City-Urica-anz", $city);
                $manager->persist($city);        
         
        $city = new City();
        $city
                ->setDescription('Píritu')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Piritu-anz'))
                ->setParish($this->getReference('Parish-Píritu-anz'))
                ;
                $this->addReference("City-Píritu-anz", $city);
                $manager->persist($city);        
         
        $city = new City();
        $city
                ->setDescription('San Francisco')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Piritu-anz'))
                ->setParish($this->getReference('Parish-San-Francisco-anz'))
                ;
                $this->addReference("City-San-Francisco-anz", $city);
                $manager->persist($city);                     
                
        $city = new City();
        $city
                ->setDescription('San José de Guanipa-El Tigrito')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Guanipa-anz'))
                //->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-San-José-de-Guanipa-El-Tigrito-anz", $city);
                $manager->persist($city);                     
                        
                
        $city = new City();
        $city
                ->setDescription('Boca de Uchire')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-San-Juan-de-Capistrano-anz'))
                ->setParish($this->getReference('Parish-Boca-de-Uchire-anz'))
                ;
                $this->addReference("City-Boca-de-Uchire-anz", $city);
                $manager->persist($city);                     
                       
        $city = new City();
        $city
                ->setDescription('Boca de Chávez')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-San-Juan-de-Capistrano-anz'))
                ->setParish($this->getReference('Parish-Boca-de-Chávez-anz'))
                ;
                $this->addReference("City-Boca-de-Chávez-anz", $city);
                $manager->persist($city);                     
                               
        $city = new City();
        $city
                ->setDescription('Santa Ana')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Santa-Ana-anz'))
                ->setParish($this->getReference('Parish-Santa-Ana-anz'))
                ;
                $this->addReference("City-Santa-Ana-anz", $city);
                $manager->persist($city);                     
                                       
        $city = new City();
        $city
                ->setDescription('Pueblo Nuevo')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Santa-Ana-anz'))
                ->setParish($this->getReference('Parish-Pueblo-Nuevo-anz'))
                ;
                $this->addReference("City-Pueblo-Nuevo-anz", $city);
                $manager->persist($city);                     
                                              
                
        $city = new City();
        $city
                ->setDescription('Barcelona')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                ->setParish($this->getReference('Parish-El-Carmen-anz'))
                ;
                $this->addReference("City-Barcelona-anz", $city);
                $manager->persist($city);                     
                                                    
                
        $city = new City();
        $city
                ->setDescription('Barcelona')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                ->setParish($this->getReference('Parish-San-Cristóbal-anz'))
                ;
                $this->addReference("City-Barcelona-sc-anz", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Bergantín')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                ->setParish($this->getReference('Parish-Cachipo-anz'))
                ;
                $this->addReference("City-Bergantín-sc-anz", $city);
                $manager->persist($city);              
                        
                
        $city = new City();
        $city
                ->setDescription('Caigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                ->setParish($this->getReference('Parish-Caigua-anz'))
                ;
                $this->addReference("City-Caigua-anz", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('El Pilar')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                ->setParish($this->getReference('Parish-El-Pilar-anz'))
                ;
                $this->addReference("City-El-Pilar-anz", $city);
                $manager->persist($city);                  
                
                
                
        $city = new City();
        $city
                ->setDescription('Naricual')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-anz'))
                ->setParish($this->getReference('Parish-Naricual-anz'))
                ;
                $this->addReference("City-Naricual-anz", $city);
                $manager->persist($city);                  
                
        $city = new City();
        $city
                ->setDescription('El Tigre')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Simon-Rodriguez-anz'))
                ->setParish($this->getReference('Parish-Edmundo-Barrios-anz'))
                ;
                $this->addReference("City-El-Tigre-eb-anz", $city);
                $manager->persist($city);                  
                
      
        $city = new City();
        $city
                ->setDescription('El Tigre')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Simon-Rodriguez-anz'))
                ->setParish($this->getReference('Parish-Miguel-Otero-Silva-anz'))
                ;
                $this->addReference("City-El-Tigre-mos-anz", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('El Chaparro')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-McGregor-anz'))
                ->setParish($this->getReference('Parish-El-Chaparro-anz'))
                ;
                $this->addReference("City-El-Chaparro-anz", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('José Gregorio Monagas')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-McGregor-anz'))
                ->setParish($this->getReference('Parish-Tomás-Alfaro-anz'))
                ;
                $this->addReference("City-José-Gregorio-Monagas-anz", $city);
                $manager->persist($city);                         
                
        $city = new City();
        $city
                ->setDescription('Lecherías')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Diego-Bautista-Urbaneja-anz'))
                ->setParish($this->getReference('Parish-Lechería-anz'))
                ;
                $this->addReference("City-Lecherías-anz", $city);
                $manager->persist($city);                         
                        
        $city = new City();
        $city
                ->setDescription('Lecherías')
                ->setCapital(false)
                ->setState($this->getReference('State-Anzoategui'))
                ->setMunicipality($this->getReference('Municipality-Diego-Bautista-Urbaneja-anz'))
                ->setParish($this->getReference('Parish-El-Morro-anz'))
                ;
                $this->addReference("City-Lecherías-em-anz", $city);
                $manager->persist($city);               
                
                
         //ciudades del estado apure
                
        $city = new City();
        $city
                ->setDescription('Achaguas')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                ->setParish($this->getReference('Parish-Achaguas-apu'))
                ;
                $this->addReference("City-Achaguas-apu", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Apurito')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                ->setParish($this->getReference('Parish-Apurito-apu'))
                ;
                $this->addReference("City-Apurito-apu", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('El Yagual')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                ->setParish($this->getReference('Parish-El-Yagual-apu'))
                ;
                $this->addReference("City-El-Yagual-apu", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Guachara')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                ->setParish($this->getReference('Parish-Guachara-apu'))
                ;
                $this->addReference("City-Guachara-apu", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('El Samán de Apure')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                ->setParish($this->getReference('Parish-Mucuritas-apu'))
                ;
                $this->addReference("City-El-Samán-de-Apure-apu", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Guasimal')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Achaguas-apu'))
                ->setParish($this->getReference('Parish-Queseras-del-medio-apu'))
                ;
                $this->addReference("City-Guasimal-apu", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Biruaca')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Biruaca-apu'))
                ->setParish($this->getReference('Parish-Biruaca-apu'))
                ;
                $this->addReference("City-Biruaca-apu", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Bruzual')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Muñoz-apu'))
                ->setParish($this->getReference('Parish-Bruzual-apu'))
                ;
                $this->addReference("City-Bruzual-apu", $city);
                $manager->persist($city);             
                        
                
        $city = new City();
        $city
                ->setDescription('Mantecal')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Muñoz-apu'))
                ->setParish($this->getReference('Parish-Mantecal-apu'))
                ;
                $this->addReference("City-Mantecal-apu", $city);
                $manager->persist($city);             
                                
                
        $city = new City();
        $city
                ->setDescription('Quintero')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Muñoz-apu'))
                ->setParish($this->getReference('Parish-Quintero-apu'))
                ;
                $this->addReference("City-Quintero-apu", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('La Estacada')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Muñoz-apu'))
                ->setParish($this->getReference('Parish-Rincón-Hondo-apu'))
                ;
                $this->addReference("City-La-Estacada-apu", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('San Vicente')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Muñoz-apu'))
                ->setParish($this->getReference('Parish-San-Vicente-apu'))
                ;
                $this->addReference("City-San-Vicente-apu", $city);
                $manager->persist($city);             
                       
                
        $city = new City();
        $city
                ->setDescription('Guasdualito')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Paez-apu'))
                ->setParish($this->getReference('Parish-Guasdualito-apu'))
                ;
                $this->addReference("City-Guasdualito-apu", $city);
                $manager->persist($city);             
                               
                
        $city = new City();
        $city
                ->setDescription('Palmarito')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Paez-apu'))
                ->setParish($this->getReference('Parish-Arismendi-apu'))
                ;
                $this->addReference("City-Palmarito-apu", $city);
                $manager->persist($city);             
                                       
        $city = new City();
        $city
                ->setDescription('El Amparo')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Paez-apu'))
                ->setParish($this->getReference('Parish-El-Amparo-apu'))
                ;
                $this->addReference("City-El-Amparo-apu", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('El Nula')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Paez-apu'))
                ->setParish($this->getReference('Parish-San-Camilo-apu'))
                ;
                $this->addReference("City-El-Nula-apu", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('La Victoria')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Paez-apu'))
                ->setParish($this->getReference('Parish-Urdaneta-apu'))
                ;
                $this->addReference("City-La-Victoria-apu", $city);
                $manager->persist($city);          
                
           
        $city = new City();
        $city
                ->setDescription('San Juan de Payara')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Pedro-Camejo-apu'))
                ->setParish($this->getReference('Parish-San-Juan-de-Payara-apu'))
                ;
                $this->addReference("City-San-Juan-de-Payara-apu", $city);
                $manager->persist($city);             
                
        
        $city = new City();
        $city
                ->setDescription('Puerto Páez')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Pedro-Camejo-apu'))
                ->setParish($this->getReference('Parish-Codazzi-apu'))
                ;
                $this->addReference("City-Puerto-Páez-apu", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('San Miguel de Cunaviche')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Pedro-Camejo-apu'))
                ->setParish($this->getReference('Parish-Cunaviche-apu'))
                ;
                $this->addReference("City-San-Miguel-de-Cunaviche-apu", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Elorza')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Romulo-Gallegos-apu'))
                ->setParish($this->getReference('Parish-Elorza-apu'))
                ;
                $this->addReference("City-Elorza-apu", $city);
                $manager->persist($city);         
                
                
                
        $city = new City();
        $city
                ->setDescription('La Trinidad de Orichuna')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-Romulo-Gallegos-apu'))
                ->setParish($this->getReference('Parish-La-Trinidad-apu'))
                ;
                $this->addReference("City-La-Trinidad-de-Orichuna-apu", $city);
                $manager->persist($city);                 
                
                
                
        $city = new City();
        $city
                ->setDescription('San Fernando de Apure')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-San-Fernando-apu'))
                ->setParish($this->getReference('Parish-San-Fernando-apu'))
                ;
                $this->addReference("City-San-Fernando-de-Apure-apu", $city);
                $manager->persist($city);                 
                        
                
        $city = new City();
        $city
                ->setDescription('El Recreo')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-San-Fernando-apu'))
                ->setParish($this->getReference('Parish-El-Recreo-apu'))
                ;
                $this->addReference("City-El-Recreo-apu", $city);
                $manager->persist($city);                 
                        
                        
                
        $city = new City();
        $city
                ->setDescription('Arichuna')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-San-Fernando-apu'))
                ->setParish($this->getReference('Parish-Peñalver-apu'))
                ;
                $this->addReference("City-Arichuna-apu", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('San Rafael de Atamaica')
                ->setCapital(false)
                ->setState($this->getReference('State-Apure'))
                ->setMunicipality($this->getReference('Municipality-San-Fernando-apu'))
                ->setParish($this->getReference('Parish-San-Rafael-de-Atamaica-apu'))
                ;
                $this->addReference("City-San-Rafael-de-Atamaica-apu", $city);
                $manager->persist($city);                
                
        //ciudades del estado aragua
                                           
                
        $city = new City();
        $city
                ->setDescription('San Mateo')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-ara'))
                ->setParish($this->getReference('Parish-San-Mateo-ara'))
                ;
                $this->addReference("City-San-Mateo-ara", $city);
                $manager->persist($city);                
                
                         
                
        $city = new City();
        $city
                ->setDescription('Camatagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Camatagua-ara'))
                ->setParish($this->getReference('Parish-Camatagua-ara'))
                ;
                $this->addReference("City-Camatagua-ara", $city);
                $manager->persist($city);                
                        
                
        $city = new City();
        $city
                ->setDescription('Carmen de Cura')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Camatagua-ara'))
                ->setParish($this->getReference('Parish-Carmen-de-Cura-ara'))
                ;
                $this->addReference("City-Carmen-de-Cura-ara", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Choroní')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                ->setParish($this->getReference('Parish-Choroní-ara'))
                ;
                $this->addReference("City-Choroní-ara", $city);
                $manager->persist($city);           
                
                
                
        $city = new City();
        $city
                ->setDescription('Maracay')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                ->setParish($this->getReference('Parish-Las-Delicias-ara'))
                ;
                $this->addReference("City-Maracay-ld-ara", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('Maracay')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                ->setParish($this->getReference('Parish-San-José-ara'))
                ;
                $this->addReference("City-Maracay-sj-ld-ara", $city);
                $manager->persist($city);                   
                
                
        $city = new City();
        $city
                ->setDescription('Maracay')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                ->setParish($this->getReference('Parish-Joaquín-Crespo-ara'))
                ;
                $this->addReference("City-Maracay-jc-ld-ara", $city);
                $manager->persist($city);                   
                
                
                
        $city = new City();
        $city
                ->setDescription('Maracay')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                ->setParish($this->getReference('Parish-Pedro-José-Ovalles-ara'))
                ;
                $this->addReference("City-Maracay-po-ara", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Maracay')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                ->setParish($this->getReference('Parish-José-Casanova-Godoy-ara'))
                ;
                $this->addReference("City-Maracay-jg-ara", $city);
                $manager->persist($city);          
                        
                
                
        $city = new City();
        $city
                ->setDescription('Maracay')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                ->setParish($this->getReference('Parish-Andrés-Eloy-Blanco-ara'))
                ;
                $this->addReference("City-Maracay-ab-ara", $city);
                $manager->persist($city);          
                                
                
                
        $city = new City();
        $city
                ->setDescription('Maracay')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Girardot-ara'))
                ->setParish($this->getReference('Parish-Los-Tacariguas-ara'))
                ;
                $this->addReference("City-Maracay-lt-ara", $city);
                $manager->persist($city);             
                
                
                
        $city = new City();
        $city
                ->setDescription('Santa Cruz')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Jose-Angel-Lamas-ara'))
                ->setParish($this->getReference('Parish-Santa-Cruz-ara'))
                ;
                $this->addReference("City-Santa-Cruz-ara", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('La Victoria')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-ara'))
                ->setParish($this->getReference('Parish-Juan-Vicente-Bolívar-y-Ponte-ara'))
                ;
                $this->addReference("City-La-Victoria-ara", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Las Mercedes')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-ara'))
                ->setParish($this->getReference('Parish-Castor-Nieves-Ríos-ara'))
                ;
                $this->addReference("City-Las-Mercedes-ara", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Las Guacamayas')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-ara'))
                ->setParish($this->getReference('Parish-No-Urbana-Las-Guacamayas-ara'))
                ;
                $this->addReference("City-Las-Guacamayas-ara", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Pao de Zárate')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-ara'))
                ->setParish($this->getReference('Parish-No-Urbana-Pao-de-Zárate-ara'))
                ;
                $this->addReference("City-Pao-de-Zárate-ara", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Zuata')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-ara'))
                ->setParish($this->getReference('Parish-No-Urbana-Zuata-ara'))
                ;
                $this->addReference("City-Zuata-ara", $city);
                $manager->persist($city);                
                        
                
                
        $city = new City();
        $city
                ->setDescription('El Consejo')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Jose-Rafael-Revenga-ara'))
                ->setParish($this->getReference('Parish-Palo-Negro-ara'))
                ;
                $this->addReference("City-El-Consejo-ara", $city);
                $manager->persist($city);                
                                
                
                
        $city = new City();
        $city
                ->setDescription('Palo Negro')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Libertador-ara'))
                ->setParish($this->getReference('Parish-Palo-Negro-ara'))
                ;
                $this->addReference("City-Palo-Negro-ara", $city);
                $manager->persist($city);                
                                        
                
        $city = new City();
        $city
                ->setDescription('La Pica')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Libertador-ara'))
                ->setParish($this->getReference('Parish-San-Martín-de-Porres-ara'))
                ;
                $this->addReference("City-La-Pica-ara", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('El Limón')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Mario-Briceño-Iragorry-ara'))
                ->setParish($this->getReference('Parish-Mario-Briceño-Iragorry-ara'))
                ;
                $this->addReference("City-El-Limón-ara", $city);
                $manager->persist($city);                
                
                
                
        $city = new City();
        $city
                ->setDescription('Caña de Azúcar')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Mario-Briceño-Iragorry-ara'))
                ->setParish($this->getReference('Parish-Caña-de-Azúcar-ara'))
                ;
                $this->addReference("City-Caña-de-Azúcar-ara", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('San Casimiro')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-San-Casimiro-ara'))
                ->setParish($this->getReference('Parish-San-Casimiro-ara'))
                ;
                $this->addReference("City-San-Casimiro-ara", $city);
                $manager->persist($city);          
                
                
                
        $city = new City();
        $city
                ->setDescription('Güiripa')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-San-Casimiro-ara'))
                ->setParish($this->getReference('Parish-Urbana-Güiripa-ara'))
                ;
                $this->addReference("City-Güiripa-ara", $city);
                $manager->persist($city);          
                       
                
                
        $city = new City();
        $city
                ->setDescription('Ollas de Caramacate')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-San-Casimiro-ara'))
                ->setParish($this->getReference('Parish-Urbana-Ollas-de-Caramacate-ara'))
                ;
                $this->addReference("City-Ollas-de-Caramacate-ara", $city);
                $manager->persist($city);          
                               
                
        $city = new City();
        $city
                ->setDescription('Valle Morín')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-San-Casimiro-ara'))
                ->setParish($this->getReference('Parish-Urbana-Valle-Morín-ara'))
                ;
                $this->addReference("City-Valle-Morín-ara", $city);
                $manager->persist($city);          
                                       
                
        $city = new City();
        $city
                ->setDescription('San Sebastián de Los Reyes')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-San-Sebastian-ara'))
                ->setParish($this->getReference('Parish-San-Sebastian-ara'))
                ;
                $this->addReference("City-San-Sebastián-de-Los-Reyes-ara", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Turmero')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Santiago-Mariño-ara'))
                ->setParish($this->getReference('Parish-Turmero-ara'))
                ;
                $this->addReference("City-Turmero-ara", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Rosario de Paya')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Santiago-Mariño-ara'))
                ->setParish($this->getReference('Parish-Arevalo-Aponte-ara'))
                ;
                $this->addReference("City-Rosario-de-Paya-ara", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Chuao')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Santiago-Mariño-ara'))
                ->setParish($this->getReference('Parish-Chuao-ara'))
                ;
                $this->addReference("City-Chuao-ara", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('19 de Abril')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Santiago-Mariño-ara'))
                ->setParish($this->getReference('Parish-Samán-de-Güere-ara'))
                ;
                $this->addReference("City-19-de-Abril-ara", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('San Joaquín')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Santiago-Mariño-ara'))
                ->setParish($this->getReference('Parish-Alfredo-Pacheco-Miranda-ara'))
                ;
                $this->addReference("City-San-Joaquín-ara", $city);
                $manager->persist($city);                    
                
                
        $city = new City();
        $city
                ->setDescription('Las Tejerías')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Santos-Michelena-ara'))
                ->setParish($this->getReference('Parish-Santos-Michelena-ara'))
                ;
                $this->addReference("City-Las-Tejerías-ara", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Tiara')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Santos-Michelena-ara'))
                ->setParish($this->getReference('Parish-No-Urbana-Tiara-ara'))
                ;
                $this->addReference("City-Tiara-ara", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Cagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Sucre-ara'))
                ->setParish($this->getReference('Parish-Sucre-ara'))
                ;
                $this->addReference("City-Cagua-ara", $city);
                $manager->persist($city);             
                        
        $city = new City();
        $city
                ->setDescription('Bella Vista')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Sucre-ara'))
                ->setParish($this->getReference('Parish-Bella-Vista-ara'))
                ;
                $this->addReference("City-Bella-Vista-ara", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('La Colonia Tovar')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Tovar-ara'))
                ->setParish($this->getReference('Parish-Parroquia-Capital-Tovar-ara'))
                ;
                $this->addReference("City-La-Colonia-Tovar-ara", $city);
                $manager->persist($city);          
                
                
                
        $city = new City();
        $city
                ->setDescription('Barbacoas')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-ara'))
                ->setParish($this->getReference('Parish-Capital-Urdaneta-ara'))
                ;
                $this->addReference("City-Barbacoas-ara", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('Las Peñitas')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-ara'))
                ->setParish($this->getReference('Parish-No-Urbana-Las-Peñitas-ara'))
                ;
                $this->addReference("City-Las-Peñitas-ara", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('San Francisco de Cara')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-ara'))
                ->setParish($this->getReference('Parish-No-Urbana-San-Francisco-de-Cara-ara'))
                ;
                $this->addReference("City-San-Francisco-de-Cara-ara", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Taguay')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-ara'))
                ->setParish($this->getReference('Parish-No-Urbana-Taguay-ara'))
                ;
                $this->addReference("City-Taguay-ara", $city);
                $manager->persist($city);             
                
                
                
        $city = new City();
        $city
                ->setDescription('Villa de Cura')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Zamora-ara'))
                ->setParish($this->getReference('Parish-Capital-Zamora-ara'))
                ;
                $this->addReference("City-Villa-de-Cura-ara", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Magdaleno')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Zamora-ara'))
                ->setParish($this->getReference('Parish-No-Urbana-Magdaleno-ara'))
                ;
                $this->addReference("City-Magdaleno-ara", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('San Francisco de Asís')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Zamora-ara'))
                ->setParish($this->getReference('Parish-No-Urbana-San-Francisco-de-Asís-ara'))
                ;
                $this->addReference("City-San-Francisco-de-Asís-ara", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Los Bagres')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Zamora-ara'))
                ->setParish($this->getReference('Parish-No-Urbana-Valles-de-Tucutunemo-ara'))
                ;
                $this->addReference("City-Los-Bagres-ara", $city);
                $manager->persist($city);          
                        
                
                
        $city = new City();
        $city
                ->setDescription('Tocorón')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Zamora-ara'))
                ->setParish($this->getReference('Parish-No-Urbana-Augusto-Mijares-ara'))
                ;
                $this->addReference("City-Tocorón-ara", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Santa Rita')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Francisco-Linares-Alcantara-ara'))
                ->setParish($this->getReference('Parish-Santa-Rita-ara'))
                ;
                $this->addReference("City-Santa-Rita-ara", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Francisco de Miranda')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Francisco-Linares-Alcantara-ara'))
                ->setParish($this->getReference('Parish-Francisco-de-Miranda-ara'))
                ;
                $this->addReference("City-Francisco-de-Miranda-ara", $city);
                $manager->persist($city);                
                        
                
        $city = new City();
        $city
                ->setDescription('Paraparal')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Francisco-Linares-Alcantara-ara'))
                ->setParish($this->getReference('Parish-Monseñor-Feliciano-González-ara'))
                ;
                $this->addReference("City-Paraparal-ara", $city);
                $manager->persist($city);                
                                
                
                
        $city = new City();
        $city
                ->setDescription('Ocumare de la Costa')
                ->setCapital(false)
                ->setState($this->getReference('State-Aragua'))
                ->setMunicipality($this->getReference('Municipality-Ocumare-de-la-Costa-de-Oro-ara'))
                ->setParish($this->getReference('Parish-Ocumare-de-La-Costa-de-Oro-ara'))
                ;
                $this->addReference("City-Ocumare-de-la-Costa-ara", $city);
                $manager->persist($city);                
                                        
        //ciudades del estado barinas     
                
        $city = new City();
        $city
                ->setDescription('Sabaneta')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Alberto-Arvelo-Torrealba-bar'))
                ->setParish($this->getReference('Parish-Sabaneta-bar'))
                ;
                $this->addReference("City-Sabaneta-bar", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Veguitas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Alberto-Arvelo-Torrealba-bar'))
                ->setParish($this->getReference('Parish-Rodríguez-Domínguez-bar'))
                ;
                $this->addReference("City-Veguitas-bar", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('Socopó')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Jose-de-Sucre-bar'))
                ->setParish($this->getReference('Parish-Ticoporo-bar'))
                ;
                $this->addReference("City-Socopó-bar", $city);
                $manager->persist($city);                 
                        
                
        $city = new City();
        $city
                ->setDescription('Bum-Bum')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Jose-de-Sucre-bar'))
                ->setParish($this->getReference('Parish-Andrés-Bello-bar'))
                ;
                $this->addReference("City-Bum-Bum-bar", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Chameta')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Jose-de-Sucre-bar'))
                ->setParish($this->getReference('Parish-Nicolás-Pulido-bar'))
                ;
                $this->addReference("City-Chameta-bar", $city);
                $manager->persist($city);               
                
        $city = new City();
        $city
                ->setDescription('Arismendi')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Arismendi-bar'))
                ->setParish($this->getReference('Parish-Arismendi-bar'))
                ;
                $this->addReference("City-Arismendi-bar", $city);
                $manager->persist($city);            
                
                
                
        $city = new City();
        $city
                ->setDescription('Guadarrama')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Arismendi-bar'))
                ->setParish($this->getReference('Parish-Guadarrama-bar'))
                ;
                $this->addReference("City-Guadarrama-bar", $city);
                $manager->persist($city);                   
                
                
        $city = new City();
        $city
                ->setDescription('La Unión')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Arismendi-bar'))
                ->setParish($this->getReference('Parish-La-Unión-bar'))
                ;
                $this->addReference("City-La-Unión-bar", $city);
                $manager->persist($city);                   
                       
                
        $city = new City();
        $city
                ->setDescription('San Antonio')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Arismendi-bar'))
                ->setParish($this->getReference('Parish-San-Antonio-bar'))
                ;
                $this->addReference("City-San-Antonio-bar", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Barinas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Barinas-bar'))
                ;
                $this->addReference("City-Barinas-bar", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Quebrada Seca')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Alfredo-Arvelo-Larriva-bar'))
                ;
                $this->addReference("City-Quebrada-Seca-bar", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('San Silvestre')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-San-Silvestre-bar'))
                ;
                $this->addReference("City-San-Silvestre-bar", $city);
                $manager->persist($city);              
                        
        $city = new City();
        $city
                ->setDescription('Santa Inés')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Santa-Inés-bar'))
                ;
                $this->addReference("City-Santa-Inés-bar", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Santa Lucía')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Santa-Lucía-bar'))
                ;
                $this->addReference("City-Santa-Lucía-bar", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('Torunos')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Torunos-bar'))
                ;
                $this->addReference("City-Torunos-bar", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Barinas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-EL-Carmen-bar'))
                ;
                $this->addReference("City-Barinas-ec-bar", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('Barinas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Rómulo-Betancourt-bar'))
                ;
                $this->addReference("City-Barinas-rg-bar", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Barinas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Corazón-de-Jesús-bar'))
                ;
                $this->addReference("City-Barinas-cj-bar", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Barinas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Ramón-Ignacio-Méndez-bar'))
                ;
                $this->addReference("City-Barinas-rim-bar", $city);
                $manager->persist($city);           
                               
                
        $city = new City();
        $city
                ->setDescription('Barinas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Alto-Barinas-bar'))
                ;
                $this->addReference("City-Barinas-ab-bar", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('La Caramuca')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Manuel-Palacio-Fajardo-bar'))
                ;
                $this->addReference("City-La-Caramuca-bar", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('El Corozo')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Juan-Antonio-Rodríguez-Domínguez-bar'))
                ;
                $this->addReference("City-El-Corozo-bar", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('La Mula')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Barinas-bar'))
                ->setParish($this->getReference('Parish-Dominga-Ortiz-de-Páez-bar'))
                ;
                $this->addReference("City-La-Mula-bar", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Barinitas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-bar'))
                ->setParish($this->getReference('Parish-Barinitas-bar'))
                ;
                $this->addReference("City-Barinitas-bar", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Altamira')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-bar'))
                ->setParish($this->getReference('Parish-Altamira-de-Cáceres-bar'))
                ;
                $this->addReference("City-Altamira-bar", $city);
                $manager->persist($city);             
                        
                
        $city = new City();
        $city
                ->setDescription('Calderas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-bar'))
                ->setParish($this->getReference('Parish-Calderas-bar'))
                ;
                $this->addReference("City-Calderas-bar", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Barrancas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Cruz-Paredes-bar'))
                ->setParish($this->getReference('Parish-Barrancas-bar'))
                ;
                $this->addReference("City-Barrancas-bar", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('La Yuca')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Cruz-Paredes-bar'))
                ->setParish($this->getReference('Parish-El-Socorro-bar'))
                ;
                $this->addReference("City-La-Yuca-bar", $city);
                $manager->persist($city);            
                        
                
        $city = new City();
        $city
                ->setDescription('Masparrito')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Cruz-Paredes-bar'))
                ->setParish($this->getReference('Parish-Masparrito-bar'))
                ;
                $this->addReference("City-Masparrito-bar", $city);
                $manager->persist($city);                 
                
        $city = new City();
        $city
                ->setDescription('Santa Bárbara')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-bar'))
                ->setParish($this->getReference('Parish-Santa-Bárbara-bar'))
                ;
                $this->addReference("City-Santa-Bárbara-bar", $city);
                $manager->persist($city);                 
                
        $city = new City();
        $city
                ->setDescription('Pedraza La Vieja')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-bar'))
                ->setParish($this->getReference('Parish-José-Ignacio-del-Pumar-bar'))
                ;
                $this->addReference("City-Pedraza-La-Vieja-bar", $city);
                $manager->persist($city);                 
                        
        $city = new City();
        $city
                ->setDescription('Capitanejo')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-bar'))
                ->setParish($this->getReference('Parish-Parroquia-Pedro-Briceño-Méndez-bar'))
                ;
                $this->addReference("City-Capitanejo-bar", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Punta de Piedra')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-bar'))
                ->setParish($this->getReference('Parish-Ramón-Ignacio-Méndez-ez-bar'))
                ;
                $this->addReference("City-Punta-de-Piedra-bar", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Obispos')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Obispos-bar'))
                ->setParish($this->getReference('Parish-Obispos-bar'))
                ;
                $this->addReference("City-Obispos-bar", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('El Real')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Obispos-bar'))
                ->setParish($this->getReference('Parish-El-Real-bar'))
                ;
                $this->addReference("City-El-Real-bar", $city);
                $manager->persist($city);           
                       
                
        $city = new City();
        $city
                ->setDescription('La Luz')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Obispos-bar'))
                ->setParish($this->getReference('Parish-La-Luz-bar'))
                ;
                $this->addReference("City-La-Luz-bar", $city);
                $manager->persist($city);           
                               
        $city = new City();
        $city
                ->setDescription('Los Guasimitos')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Obispos-bar'))
                ->setParish($this->getReference('Parish-Los-Guasimitos-bar'))
                ;
                $this->addReference("City-Los-Guasimitos-bar", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Bolivia')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Pedraza-bar'))
                ->setParish($this->getReference('Parish-Ciudad-Bolivia-bar'))
                ;
                $this->addReference("City-Ciudad-Bolivia-bar", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Maporal')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Pedraza-bar'))
                ->setParish($this->getReference('Parish-Ignacio-Briceño-bar'))
                ;
                $this->addReference("City-Maporal-bar", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Curbatí')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Pedraza-bar'))
                ->setParish($this->getReference('Parish-José-Félix-Ribas-bar'))
                ;
                $this->addReference("City-Curbatí-bar", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('San Rafael de Canaguá')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Pedraza-bar'))
                ->setParish($this->getReference('Parish-Páez-bar'))
                ;
                $this->addReference("City-San-Rafael-de-Canaguá-bar", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Libertad')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Rojas-bar'))
                ->setParish($this->getReference('Parish-Libertad-bar'))
                ;
                $this->addReference("City-Libertad-bar", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Dolores')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Rojas-bar'))
                ->setParish($this->getReference('Parish-Dolores-bar'))
                ;
                $this->addReference("City-Dolores-bar", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Mijagual')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Rojas-bar'))
                ->setParish($this->getReference('Parish-Palacio-Fajardo-bar'))
                ;
                $this->addReference("City-Mijagual-bar", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Santa Rosa')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Rojas-bar'))
                ->setParish($this->getReference('Parish-Santa-Rosa-bar'))
                ;
                $this->addReference("City-Santa-Rosa-bar", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Arauquita')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Rojas-bar'))
                ->setParish($this->getReference('Parish-Simón-Rodríguez-bar'))
                ;
                $this->addReference("City-Arauquita-bar", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Ciudad de Nutrias')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Sosa-bar'))
                ->setParish($this->getReference('Parish-Ciudad-de-Nutrias-bar'))
                ;
                $this->addReference("City-Ciudad-de-Nutrias-bar", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('El Regalo')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Sosa-bar'))
                ->setParish($this->getReference('Parish-El-Regalo-bar'))
                ;
                $this->addReference("City-El-Regalo-bar", $city);
                $manager->persist($city);             
                        
        $city = new City();
        $city
                ->setDescription('Puerto de Nutrias')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Sosa-bar'))
                ->setParish($this->getReference('Parish-Puerto-Nutrias-bar'))
                ;
                $this->addReference("City-Puerto-de-Nutrias-bar", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Santa Catalina')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Sosa-bar'))
                ->setParish($this->getReference('Parish-Santa-Catalina-bar'))
                ;
                $this->addReference("City-Santa-Catalina-bar", $city);
                $manager->persist($city);           
                        
           
        $city = new City();
        $city
                ->setDescription('Las Casitas del Vegón de Nutrias')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Sosa-bar'))
                ->setParish($this->getReference('Parish-Simón-Bolívar-bar'))
                ;
                $this->addReference("City-Las-Casitas-del-Vegón-de-Nutrias-bar", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('El Cantón')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-bar'))
                ->setParish($this->getReference('Parish-El-Cantón-bar'))
                ;
                $this->addReference("City-El-Cantón-bar", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Santa Cruz de Guacas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-bar'))
                ->setParish($this->getReference('Parish-Santa-Cruz-de-Guacas-bar'))
                ;
                $this->addReference("City-Santa-Cruz-de-Guacas-bar", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Puerto Vivas')
                ->setCapital(false)
                ->setState($this->getReference('State-Barinas'))
                ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-bar'))
                ->setParish($this->getReference('Parish-Puerto-Vivas-bar'))
                ;
                $this->addReference("City-Puerto-Vivas-bar", $city);
                $manager->persist($city);                 
                
      //ciudades del estado Bolivar  
                
        $city = new City();
        $city
                ->setDescription('Ciudad Guayana')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                ->setParish($this->getReference('Parish-Dalla-Costa-car-bol'))
                ;
                $this->addReference("City-Ciudad-Guayana-dc-bol", $city);
                $manager->persist($city);              
                        
                
                
                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Guayana')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                ->setParish($this->getReference('Parish-Cachamay-bol'))
                ;
                $this->addReference("City-Ciudad-Guayana-bol", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Guayana')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                ->setParish($this->getReference('Parish-Chirica-bol'))
                ;
                $this->addReference("City-Ciudad-Guayana-ch-bol", $city);
                $manager->persist($city);              
                        
                
        $city = new City();
        $city
                ->setDescription('Ciudad Guayana')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                ->setParish($this->getReference('Parish-Once-de-Abril-bol'))
                ;
                $this->addReference("City-Ciudad-Guayana-oa-bol", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Guayana')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                ->setParish($this->getReference('Parish-Simón-Bolívar-bol'))
                ;
                $this->addReference("City-Ciudad-Guayana-sb-bol", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Guayana')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                ->setParish($this->getReference('Parish-Unare-bol'))
                ;
                $this->addReference("City-Ciudad-Guayana-un-bol", $city);
                $manager->persist($city);                         
                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Guayana')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                ->setParish($this->getReference('Parish-Universidad-bol'))
                ;
                $this->addReference("City-Ciudad-Guayana-uv-bol", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Guayana')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                ->setParish($this->getReference('Parish-Vista-al-Sol-bol'))
                ;
                $this->addReference("City-Ciudad-Guayana-vs-bol", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Pozo Verde')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                ->setParish($this->getReference('Parish-Pozo-Verde-bol'))
                ;
                $this->addReference("City-Pozo-Verde-bol", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('El Rosario')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                ->setParish($this->getReference('Parish-Yocoima-bol'))
                ;
                $this->addReference("City-El-Rosario-bol", $city);
                $manager->persist($city);          
                
                        
        $city = new City();
        $city
                ->setDescription('Moruca')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Caroni-bol'))
                ->setParish($this->getReference('Parish-5-de-Julio-bol'))
                ;
                $this->addReference("City-Moruca-bol", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Caicara del Orinoco')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                ->setParish($this->getReference('Parish-Caicara-del-Orinoco-bol'))
                ;
                $this->addReference("City-Caicara-del-Orinoco-bol", $city);
                $manager->persist($city);              
                
                
                
        $city = new City();
        $city
                ->setDescription('Las Bonitas')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                ->setParish($this->getReference('Parish-Altagracia-bol'))
                ;
                $this->addReference("City-Las-Bonitas-bol", $city);
                $manager->persist($city);              
                        
                
        $city = new City();
        $city
                ->setDescription('Santa Rosalía')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                ->setParish($this->getReference('Parish-Ascención-Farreras-bol'))
                ;
                $this->addReference("City-Santa-Rosalía-bol", $city);
                $manager->persist($city);              
                        
                        
        $city = new City();
        $city
                ->setDescription('El Milagro')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                ->setParish($this->getReference('Parish-Guaniamo-bol'))
                ;
                $this->addReference("City-El-Milagro-bol", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('La Urbana')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                ->setParish($this->getReference('Parish-La-Urbana-bol'))
                ;
                $this->addReference("City-La-Urbana-bol", $city);
                $manager->persist($city);         
                        
                
        $city = new City();
        $city
                ->setDescription('Morichalito')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Cedeño-bol'))
                ->setParish($this->getReference('Parish-Pijiguaos-bol'))
                ;
                $this->addReference("City-Morichalito-bol", $city);
                $manager->persist($city);         
                                
                
                
        $city = new City();
        $city
                ->setDescription('El Callao')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-El-Callao-bol'))
                ->setParish($this->getReference('Parish-El-Callao-bol'))
                ;
                $this->addReference("City-El-Callao-bol", $city);
                $manager->persist($city);         
                                        
                
        $city = new City();
        $city
                ->setDescription('Santa Elena de Uairén')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Gran-Sabana-bol'))
                ->setParish($this->getReference('Parish-Gran-Sabana-bol'))
                ;
                $this->addReference("City-Santa-Elena-de-Uairén-bol", $city);
                $manager->persist($city);         
                                               
                
                
        $city = new City();
        $city
                ->setDescription('Ikabarú')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Gran-Sabana-bol'))
                ->setParish($this->getReference('Parish-Ikabarú-bol'))
                ;
                $this->addReference("City-Ikabarú-bol", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Bolívar')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                ->setParish($this->getReference('Parish-Agua-Salada-bol'))
                ;
                $this->addReference("City-Ciudad-Bolívar-bol", $city);
                $manager->persist($city);        
                
                        
                
        $city = new City();
        $city
                ->setDescription('Ciudad Bolívar')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                ->setParish($this->getReference('Parish-Catedral-bol'))
                ;
                $this->addReference("City-Ciudad-Bolívar-ct-bol", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Bolívar')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                ->setParish($this->getReference('Parish-José-Antonio-Páez-bol'))
                ;
                $this->addReference("City-Ciudad-Bolívar-jp-bol", $city);
                $manager->persist($city);                
                
                        
        $city = new City();
        $city
                ->setDescription('Ciudad Bolívar')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                ->setParish($this->getReference('Parish-La-Sabanita-bol'))
                ;
                $this->addReference("City-Ciudad-Bolívar-ls-bol", $city);
                $manager->persist($city);                
                        
                
        $city = new City();
        $city
                ->setDescription('Ciudad Bolívar')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                ->setParish($this->getReference('Parish-Marhuanta-bol'))
                ;
                $this->addReference("City-Ciudad-Bolívar-mh-bol", $city);
                $manager->persist($city);               
                
        $city = new City();
        $city
                ->setDescription('Ciudad Bolívar')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                ->setParish($this->getReference('Parish-Vista-Hermosa-bol'))
                ;
                $this->addReference("City-Ciudad-Bolívar-vh-bol", $city);
                $manager->persist($city);        
                
        $city = new City();
        $city
                ->setDescription('Almacén')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                ->setParish($this->getReference('Parish-Orinoco-bol'))
                ;
                $this->addReference("City-Almacén-bol", $city);
                $manager->persist($city);        
                
                
                        
        $city = new City();
        $city
                ->setDescription('San José de Bongo')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                ->setParish($this->getReference('Parish-Panapana-bol'))
                ;
                $this->addReference("City-San-José-de-Bongo-bol", $city);
                $manager->persist($city);        
                        
                
        $city = new City();
        $city
                ->setDescription('La Carolina')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Heres-bol'))
                ->setParish($this->getReference('Parish-Zea-bol'))
                ;
                $this->addReference("City-La-Carolina-bol", $city);
                $manager->persist($city);               
             
                
        $city = new City();
        $city
                ->setDescription('Upata')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Piar-bol'))
                ->setParish($this->getReference('Parish-Upata-bol'))
                ;
                $this->addReference("City-Upata-bol", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('El Pao de El Hierro')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Piar-bol'))
                ->setParish($this->getReference('Parish-Andrés-Eloy-Blanco-bol'))
                ;
                $this->addReference("City-El-Pao-de-El-Hierro-bol", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('El Manteco')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Piar-bol'))
                ->setParish($this->getReference('Parish-Pedro-Cova-bol'))
                ;
                $this->addReference("City-El-Manteco-bol", $city);
                $manager->persist($city);         
                                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Piar')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Angostura-bol'))
                ->setParish($this->getReference('Parish-Capital-Angostura-bol'))
                ;
                $this->addReference("City-Ciudad-Piar-bol", $city);
                $manager->persist($city);         
                                
        $city = new City();
        $city
                ->setDescription('La Paragua')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Angostura-bol'))
                ->setParish($this->getReference('Parish-Barceloneta-bol'))
                ;
                $this->addReference("City-La-Paragua-bol", $city);
                $manager->persist($city);        
                        
                
        $city = new City();
        $city
                ->setDescription('San Francisco')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Angostura-bol'))
                ->setParish($this->getReference('Parish-San-Francisco-bol'))
                ;
                $this->addReference("City-San-Francisco-bol", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Santa Bárbara de Centurión')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Angostura-bol'))
                ->setParish($this->getReference('Parish-Santa-Bárbara-bol'))
                ;
                $this->addReference("City-Santa-Bárbara-de-Centurión-bol", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Guasipati')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Roscio-bol'))
                ->setParish($this->getReference('Parish-Roscio-bol'))
                ;
                $this->addReference("City-Guasipati-bol", $city);
                $manager->persist($city);                  
                    
                       
        $city = new City();
        $city
                ->setDescription('El Miamo')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Roscio-bol'))
                ->setParish($this->getReference('Parish-Salom-bol'))
                ;
                $this->addReference("City-El-Miamo-bol", $city);
                $manager->persist($city);                    
                
                
                
        $city = new City();
        $city
                ->setDescription('Tumeremo')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Sifontes-bol'))
                ->setParish($this->getReference('Parish-Tumeremo-bol'))
                ;
                $this->addReference("City-Tumeremo-bol", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('El Dorado')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Sifontes-bol'))
                ->setParish($this->getReference('Parish-Dalla-Costa-bol'))
                ;
                $this->addReference("City-El-Dorado-bol", $city);
                $manager->persist($city);             
                
                        
                
        $city = new City();
        $city
                ->setDescription('Las Claritas')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Sifontes-bol'))
                ->setParish($this->getReference('Parish-San-Isidro-bol'))
                ;
                $this->addReference("City-Las-Claritas-bol", $city);
                $manager->persist($city);             
                        
                
        $city = new City();
        $city
                ->setDescription('Maripa')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Sucre-bol'))
                ->setParish($this->getReference('Parish-Sucre-bol'))
                ;
                $this->addReference("City-Maripa-bol", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Aripao')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Sucre-bol'))
                ->setParish($this->getReference('Parish-Aripao-bol'))
                ;
                $this->addReference("City-Aripao-bol", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Guarataro')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Sucre-bol'))
                ->setParish($this->getReference('Parish-Guarataro-bol'))
                ;
                $this->addReference("City-Guarataro-bol", $city);
                $manager->persist($city);           
                
                
                
        $city = new City();
        $city
                ->setDescription('Las Majadas')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Sucre-bol'))
                ->setParish($this->getReference('Parish-Las-Majadas-bol'))
                ;
                $this->addReference("City-Las-Majadas-bol", $city);
                $manager->persist($city);           
                
                        
        $city = new City();
        $city
                ->setDescription('Moitaco')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Sucre-bol'))
                ->setParish($this->getReference('Parish-Moitaco-bol'))
                ;
                $this->addReference("City-Moitaco-bol", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('El Palmar')
                ->setCapital(false)
                ->setState($this->getReference('State-Bolivar'))
                ->setMunicipality($this->getReference('Municipality-Padre-Pedro-Chien-bol'))
                ->setParish($this->getReference('Parish-El-Palmar-bol'))
                ;
                $this->addReference("City-El-Palmar-bol", $city);
                $manager->persist($city);           
                                
                
        //ciudades del estado Carabobo        
                
                
                
                
        $city = new City();
        $city
                ->setDescription('Bejuma')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Bejuma-car'))
                ->setParish($this->getReference('Parish-El-Palmar-bol'))
                ;
                $this->addReference("City-Bejuma-car", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Canoabo')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Bejuma-car'))
                ->setParish($this->getReference('Parish-Bejuma-car'))
                ;
                $this->addReference("City-Canoabo-car", $city);
                $manager->persist($city);    
                
                
        $city = new City();
        $city
                ->setDescription('Chirgua')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Bejuma-car'))
                ->setParish($this->getReference('Parish-Simón-Bolívar-car'))
                ;
                $this->addReference("City-Chirgua-car", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Güigüe')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Carlos-Arvelo-car'))
                ->setParish($this->getReference('Parish-Güigüe-car'))
                ;
                $this->addReference("City-Güigüe-car", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('Belén')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Carlos-Arvelo-car'))
                ->setParish($this->getReference('Parish-No-Urbana-Belén-car'))
                ;
                $this->addReference("City-Belén-car", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Central Tacarigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Carlos-Arvelo-car'))
                ->setParish($this->getReference('Parish-No-Urbana-Tacarigua-car'))
                ;
                $this->addReference("City-Central-Tacarigua-car", $city);
                $manager->persist($city);                  
                        
                
        $city = new City();
        $city
                ->setDescription('Mariara')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Diego-Ibarra-car'))
                ->setParish($this->getReference('Parish-Mariara-car'))
                ;
                $this->addReference("City-Mariara-car", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Mariara')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Diego-Ibarra-car'))
                ->setParish($this->getReference('Parish-Aguas-Calientes-car'))
                ;
                $this->addReference("City-Mariara-ac-car", $city);
                $manager->persist($city);            
                        
                
                
        $city = new City();
        $city
                ->setDescription('Guacara')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Guacara-car'))
                ->setParish($this->getReference('Parish-Ciudad-Alianza-car'))
                ;
                $this->addReference("City-Guacara-ca-car", $city);
                $manager->persist($city);            
                                
                
        $city = new City();
        $city
                ->setDescription('Guacara')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Guacara-car'))
                ->setParish($this->getReference('Parish-Guacara-car'))
                ;
                $this->addReference("City-Guacara-car", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Yagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Guacara-car'))
                ->setParish($this->getReference('Parish-Yagua-car'))
                ;
                $this->addReference("City-Yagua-car", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Morón')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Juan-Jose-Mora-car'))
                ->setParish($this->getReference('Parish-Morón-car'))
                ;
                $this->addReference("City-Morón-car", $city);
                $manager->persist($city);            
                
                        
        $city = new City();
        $city
                ->setDescription('Urama')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Juan-Jose-Mora-car'))
                ->setParish($this->getReference('Parish-Urama-car'))
                ;
                $this->addReference("City-Urama-car", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Tocuyito')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Libertador-car'))
                ->setParish($this->getReference('Parish-Tocuyito-car'))
                ;
                $this->addReference("City-Tocuyito-car", $city);
                $manager->persist($city);          
                
                
                
        $city = new City();
        $city
                ->setDescription('Tocuyito')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Libertador-car'))
                ->setParish($this->getReference('Parish-Independecia-car'))
                ;
                $this->addReference("City-Tocuyito-in-car", $city);
                $manager->persist($city);          
                
                        
        $city = new City();
        $city
                ->setDescription('Los Guayos')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Los-Guayos-car'))
                ->setParish($this->getReference('Parish-Los-Guayos-car'))
                ;
                $this->addReference("City-Los-Guayos-car", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Miranda')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Miranda-car'))
                ->setParish($this->getReference('Parish-Miranda-car'))
                ;
                $this->addReference("City-Miranda-car", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Montalbán')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Montalban-car'))
                ->setParish($this->getReference('Parish-Montalbán-car'))
                ;
                $this->addReference("City-Montalbán-car", $city);
                $manager->persist($city);          
                
                        
        $city = new City();
        $city
                ->setDescription('Naguanagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Naguanagua-car'))
                ->setParish($this->getReference('Parish-Naguanagua-car'))
                ;
                $this->addReference("City-Naguanagua-car", $city);
                $manager->persist($city);          
                                        
                        
        $city = new City();
        $city
                ->setDescription('Puerto Cabello')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                ->setParish($this->getReference('Parish-Bartolomé-Salom-car'))
                ;
                $this->addReference("City-Puerto-Cabello-bs-car", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Puerto Cabello')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                ->setParish($this->getReference('Parish-Democracia-car'))
                ;
                $this->addReference("City-Puerto-Cabello-de-car", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Puerto Cabello')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                ->setParish($this->getReference('Parish-Fraternidad-car'))
                ;
                $this->addReference("City-Puerto-Cabello-fr-car", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Puerto Cabello')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                ->setParish($this->getReference('Parish-Goaigoaza-car'))
                ;
                $this->addReference("City-Puerto-Cabello-go-car", $city);
                $manager->persist($city);          
                
                        
        $city = new City();
        $city
                ->setDescription('Puerto Cabello')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                ->setParish($this->getReference('Parish-Juan-José-Flores-car'))
                ;
                $this->addReference("City-Puerto-Cabello-jf-car", $city);
                $manager->persist($city);          
                       
                
        $city = new City();
        $city
                ->setDescription('Puerto Cabello')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                ->setParish($this->getReference('Parish-Unión-car'))
                ;
                $this->addReference("City-Puerto-Cabello-un-car", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Borburata')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                ->setParish($this->getReference('Parish-Borburata-car'))
                ;
                $this->addReference("City-Borburata-car", $city);
                $manager->persist($city);         
                        
                
        $city = new City();
        $city
                ->setDescription('Patanemo')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Puerto-Cabello-car'))
                ->setParish($this->getReference('Parish-Patanemo-car'))
                ;
                $this->addReference("City-Patanemo-car", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('San Diego')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-San-Diego-car'))
                ->setParish($this->getReference('Parish-San-Diego-car'))
                ;
                $this->addReference("City-San-Diego-car", $city);
                $manager->persist($city);         
                
                        
        $city = new City();
        $city
                ->setDescription('San Joaquín')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-San-Joaquin-car'))
                ->setParish($this->getReference('Parish-San-Joaquín-car'))
                ;
                $this->addReference("City-San-Joaquín-car", $city);
                $manager->persist($city);         
                
                                
        $city = new City();
        $city
                ->setDescription('Valencia')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                ->setParish($this->getReference('Parish-Urbana-Candelaria-car'))
                ;
                $this->addReference("City-Valencia-ca-car", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Valencia')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                ->setParish($this->getReference('Parish-Urbana-Catedral-car'))
                ;
                $this->addReference("City-Valencia-cat-car", $city);
                $manager->persist($city);         
                                                
                
        $city = new City();
        $city
                ->setDescription('Valencia')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                ->setParish($this->getReference('Parish-El-Socorro-car'))
                ;
                $this->addReference("City-Valencia-es-car", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Valencia')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                ->setParish($this->getReference('Parish-Miguel-Peña-car'))
                ;
                $this->addReference("City-Valencia-mp-car", $city);
                $manager->persist($city);            
                
                        
        $city = new City();
        $city
                ->setDescription('Valencia')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                ->setParish($this->getReference('Parish-Rafael-Urdaneta-car'))
                ;
                $this->addReference("City-Valencia-ru-car", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Valencia')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                ->setParish($this->getReference('Parish-San-Blas-car'))
                ;
                $this->addReference("City-Valencia-sb-car", $city);
                $manager->persist($city);              
                        
                
        $city = new City();
        $city
                ->setDescription('Valencia')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                ->setParish($this->getReference('Parish-San-José-car'))
                ;
                $this->addReference("City-Valencia-sj-car", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Valencia')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                ->setParish($this->getReference('Parish-Santa-Rosa-car'))
                ;
                $this->addReference("City-Valencia-sr-car", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Los Naranjos')
                ->setCapital(false)
                ->setState($this->getReference('State-Carabobo'))
                ->setMunicipality($this->getReference('Municipality-Valencia-car'))
                ->setParish($this->getReference('Parish-Negro-Primero-car'))
                ;
                $this->addReference("City-Los-Naranjos-car", $city);
                $manager->persist($city);             
                                
        //ciudades del estado Cojedes        
                
        $city = new City();
        $city
                ->setDescription('Cojedes')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Anzoategui-coj'))
                ->setParish($this->getReference('Parish-Cojedes-coj'))
                ;
                $this->addReference("City-Cojedes-coj", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Apartaderos')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Anzoategui-coj'))
                ->setParish($this->getReference('Parish-Juan-de-Mata-Suárez-coj'))
                ;
                $this->addReference("City-Apartaderos-coj", $city);
                $manager->persist($city);                  
                        
                
        $city = new City();
        $city
                ->setDescription('Tinaquillo')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Tinaquillo-coj'))
                ->setParish($this->getReference('Parish-Tinaquillo-coj'))
                ;
                $this->addReference("City-Tinaquillo-coj", $city);
                $manager->persist($city);                  
                                
                
        $city = new City();
        $city
                ->setDescription('El Baúl')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Girardot-coj'))
                ->setParish($this->getReference('Parish-El-Baúl-coj'))
                ;
                $this->addReference("City-El-Baúl-coj", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Sucre')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Girardot-coj'))
                ->setParish($this->getReference('Parish-Sucre-coj'))
                ;
                $this->addReference("City-Sucre-coj", $city);
                $manager->persist($city);               
                
                        
        $city = new City();
        $city
                ->setDescription('Macapo')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Lima-Blanco-coj'))
                ->setParish($this->getReference('Parish-Macapo-coj'))
                ;
                $this->addReference("City-Macapo-coj", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('La Aguadita')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Lima-Blanco-coj'))
                ->setParish($this->getReference('Parish-La-Aguadita-coj'))
                ;
                $this->addReference("City-La-Aguadita-coj", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('El Pao')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Pao-de-San-Juan-Bautista-coj'))
                ->setParish($this->getReference('Parish-El-Pao-coj'))
                ;
                $this->addReference("City-El-Pao-coj", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Libertad')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Ricaurte-coj'))
                ->setParish($this->getReference('Parish-Libertad-de-Cojedes-coj'))
                ;
                $this->addReference("City-Libertad-coj", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('El Amparo')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Ricaurte-coj'))
                ->setParish($this->getReference('Parish-El-Amparo-coj'))
                ;
                $this->addReference("City-El-Amparo-coj", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Las Vegas')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Romulo-Gallegos-coj'))
                ->setParish($this->getReference('Parish-Rómulo-Gallegos-coj'))
                ;
                $this->addReference("City-Las-Vegas-coj", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('San Carlos')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-coj'))
                ->setParish($this->getReference('Parish-San-Carlos-coj'))
                ;
                $this->addReference("City-San-Carlos-coj", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('La Sierra')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-coj'))
                ->setParish($this->getReference('Parish-Juan-Angel-Bravo-coj'))
                ;
                $this->addReference("City-La-Sierra-coj", $city);
                $manager->persist($city);          
                                
                
        $city = new City();
        $city
                ->setDescription('Manrique')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-coj'))
                ->setParish($this->getReference('Parish-Manuel-Manrique-coj'))
                ;
                $this->addReference("City-Manrique-coj", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('Tinaco')
                ->setCapital(false)
                ->setState($this->getReference('State-Cojedes'))
                ->setMunicipality($this->getReference('Municipality-Tinaco-coj'))
                ->setParish($this->getReference('Parish-General-en-Jefe-José-Silva-coj'))
                ;
                $this->addReference("City-Tinaco-coj", $city);
                $manager->persist($city);                 
                
        //ciudades del estado Delta Amacuro       
                        
           
        $city = new City();
        $city
                ->setDescription('Curiapo')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                ->setParish($this->getReference('Parish-Curiapo-del'))
                ;
                $this->addReference("City-Curiapo-del", $city);
                $manager->persist($city);                 
                        
                
                
        $city = new City();
        $city
                ->setDescription('Manoa')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                ->setParish($this->getReference('Parish-Almirante Luis Brión-del'))
                ;
                $this->addReference("City-Manoa-del", $city);
                $manager->persist($city);                 
                        
        $city = new City();
        $city
                ->setDescription('Boca de Cuyubini')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                ->setParish($this->getReference('Parish-Francisco-Aniceto-Lugo-del'))
                ;
                $this->addReference("City-Boca-de-Cuyubini-del", $city);
                $manager->persist($city);                 
                                        
                
                
        $city = new City();
        $city
                ->setDescription('Araguabisi')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                ->setParish($this->getReference('Parish-Manuel-Renaud-del'))
                ;
                $this->addReference("City-Araguabisi-del", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('San Francisco de Guayo')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                ->setParish($this->getReference('Parish-Padre-Barral-del'))
                ;
                $this->addReference("City-San-Francisco-de-Guayo-del", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Araguaimujo')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Diaz-del'))
                ->setParish($this->getReference('Parish-Santos-de-Abelgas-del'))
                ;
                $this->addReference("City-Araguaimujo-del", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Sierra Imataca')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Casacoima-del'))
                ->setParish($this->getReference('Parish-Imataca-Moruca-del'))
                ;
                $this->addReference("City-Sierra-Imataca-del", $city);
                $manager->persist($city);         
                        
                
        $city = new City();
        $city
                ->setDescription('La Masa de Moriche')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Casacoima-del'))
                ->setParish($this->getReference('Parish-Cinco-de-Julio-Piacoa-del'))
                ;
                $this->addReference("City-La-Masa-de-Moriche-del", $city);
                $manager->persist($city);         
                                
        $city = new City();
        $city
                ->setDescription('Piacoa')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Casacoima-del'))
                ->setParish($this->getReference('Parish-Juan-Bautista-Arismendi-del'))
                ;
                $this->addReference("City-Piacoa-del", $city);
                $manager->persist($city);         
                                
        $city = new City();
        $city
                ->setDescription('El Triunfo')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Casacoima-del'))
                ->setParish($this->getReference('Parish-Manuel-Piar-del'))
                ;
                $this->addReference("City-El-Triunfo-del", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Santa Catalina')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Casacoima-del'))
                ->setParish($this->getReference('Parish-Rómulo-Gallegos-del'))
                ;
                $this->addReference("City-Santa-Catalina-del", $city);
                $manager->persist($city);                  
                        
                
        $city = new City();
        $city
                ->setDescription('Pedernales')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Pedernales-del'))
                ->setParish($this->getReference('Parish-Pedernales-del'))
                ;
                $this->addReference("City-Pedernales-del", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Capure')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Pedernales-del'))
                ->setParish($this->getReference('Parish-Luis-Beltrán-Prieto-Figueroa-del'))
                ;
                $this->addReference("City-Capure-del", $city);
                $manager->persist($city);                     
                
                
        $city = new City();
        $city
                ->setDescription('Tucupita')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                ->setParish($this->getReference('Parish-San-José-del'))
                ;
                $this->addReference("City-Tucupita-del", $city);
                $manager->persist($city);                     
                        
                
        $city = new City();
        $city
                ->setDescription('Hacienda del Medio')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                ->setParish($this->getReference('Parish-José-Vidal-Marcano-del'))
                ;
                $this->addReference("City-Hacienda-del-Medio-del", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Carapal de Guara')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                ->setParish($this->getReference('Parish-Juan-Millán-del'))
                ;
                $this->addReference("City-Carapal-de-Guara-del", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Urbanización Leonardo Ruíz Pineda')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                ->setParish($this->getReference('Parish-Leonardo-Ruíz-Pineda-del'))
                ;
                $this->addReference("City-Urbanización-Leonardo-Ruíz-Pineda-del", $city);
                $manager->persist($city);                      
                
                
        $city = new City();
        $city
                ->setDescription('Paloma')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                ->setParish($this->getReference('Parish-Mariscal-Antonio-José-de-Sucre-del'))
                ;
                $this->addReference("City-Paloma-del", $city);
                $manager->persist($city);                      
                        
                
        $city = new City();
        $city
                ->setDescription('Urbanización Delfín Mendoza')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                ->setParish($this->getReference('Parish-Monseñor-Argimiro-García-del'))
                ;
                $this->addReference("City-Urbanización-Delfín-Mendoza-del", $city);
                $manager->persist($city);                      
                        
                        
        $city = new City();
        $city
                ->setDescription('San Rafael')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                ->setParish($this->getReference('Parish-San-Rafael-del'))
                ;
                $this->addReference("City-San-Rafael-del", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('La Horqueta')
                ->setCapital(false)
                ->setState($this->getReference('State-Delta-Amacuro'))
                ->setMunicipality($this->getReference('Municipality-Tucupita-del'))
                ->setParish($this->getReference('Parish-Virgen-del-Valle-del'))
                ;
                $this->addReference("City-La-Horqueta-del", $city);
                $manager->persist($city);              
                        
        //ciudades del estado Falcon        
                
        $city = new City();
        $city
                ->setDescription('San Juan de los Cayos')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Acosta-fal'))
                ->setParish($this->getReference('Parish-San-Juan-de-los-Cayos-fal'))
                ;
                $this->addReference("City-San-Juan-de-los-Cayos-fal", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Capadare')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Acosta-fal'))
                ->setParish($this->getReference('Parish-Capadare-fal'))
                ;
                $this->addReference("City-Capadare-fal", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('La Pastora')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Acosta-fal'))
                ->setParish($this->getReference('Parish-La-Pastora-fal'))
                ;
                $this->addReference("City-La-Pastora-fal", $city);
                $manager->persist($city);         
                
                
                
        $city = new City();
        $city
                ->setDescription('El Mene de San Lorenzo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Acosta-fal'))
                ->setParish($this->getReference('Parish-Libertador-fal'))
                ;
                $this->addReference("City-El-Mene-de-San-Lorenzo-fal", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('San Luis')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-fal'))
                ->setParish($this->getReference('Parish-San-Luis-fal'))
                ;
                $this->addReference("City-San-Luis-fal", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Aracua')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-fal'))
                ->setParish($this->getReference('Parish-Aracua-fal'))
                ;
                $this->addReference("City-Aracua-fal", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('La Peña')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-fal'))
                ->setParish($this->getReference('Parish-La-Peña-fal'))
                ;
                $this->addReference("City-La-Peña-fal", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('Capatárida')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                ->setParish($this->getReference('Parish-Capatárida-fal'))
                ;
                $this->addReference("City-Capatárida-fal", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Bariro')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                ->setParish($this->getReference('Parish-Bariro-fal'))
                ;
                $this->addReference("City-Bariro-fal", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Borojó')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                ->setParish($this->getReference('Parish-Borojo-fal'))
                ;
                $this->addReference("City-Borojó-fal", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Guajiro')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                ->setParish($this->getReference('Parish-Guajiro-fal'))
                ;
                $this->addReference("City-Guajiro-fal", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('San José de Seque')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                ->setParish($this->getReference('Parish-Seque-fal'))
                ;
                $this->addReference("City-San-José-de-Seque-fal", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Zazárida')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Buchivacoa-fal'))
                ->setParish($this->getReference('Parish-Zazárida-fal'))
                ;
                $this->addReference("City-Zazárida-fal", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('Yaracal')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Cacique-Manaure-fal'))
                ->setParish($this->getReference('Parish-Cacique-Manaure-fal'))
                ;
                $this->addReference("City-Yaracal-fal", $city);
                $manager->persist($city);           
                                
                
        $city = new City();
        $city
                ->setDescription('Punto Fijo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Carirubana-fal'))
                ->setParish($this->getReference('Parish-Carirubana-fal'))
                ;
                $this->addReference("City-Punto-Fijo-fal", $city);
                $manager->persist($city);           
                                        
                
        $city = new City();
        $city
                ->setDescription('Punto Fijo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Carirubana-fal'))
                ->setParish($this->getReference('Parish-Norte-fal'))
                ;
                $this->addReference("City-Punto-Fijo-no-fal", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Punta Cardón')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Carirubana-fal'))
                ->setParish($this->getReference('Parish-Urbana-Punta-Cardón-fal'))
                ;
                $this->addReference("City-Punta-Cardón-fal", $city);
                $manager->persist($city);          
                
                        
        $city = new City();
        $city
                ->setDescription('Santa Ana')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Carirubana-fal'))
                ->setParish($this->getReference('Parish-Santa-Ana-fal'))
                ;
                $this->addReference("City-Santa-Ana-fal", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('La Vela de Coro')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Colina-fal'))
                ->setParish($this->getReference('Parish-La-Vela-de-Coro-fal'))
                ;
                $this->addReference("City-La-Vela-de-Coro-fal", $city);
                $manager->persist($city);             
                
                        
        $city = new City();
        $city
                ->setDescription('Acurigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Colina-fal'))
                ->setParish($this->getReference('Parish-Acurigua-fal'))
                ;
                $this->addReference("City-Acurigua-fal", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Guaibacoa')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Colina-fal'))
                ->setParish($this->getReference('Parish-Guaibacoa-fal'))
                ;
                $this->addReference("City-Guaibacoa-fal", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Las Calderas')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Colina-fal'))
                ->setParish($this->getReference('Parish-Las-Calderas-fal'))
                ;
                $this->addReference("City-Las-Calderas-fal", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('El Moyepo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Colina-fal'))
                ->setParish($this->getReference('Parish-Macoruca-fal'))
                ;
                $this->addReference("City-El-Moyepo-fal", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Dabajuro')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Dabajuro-fal'))
                //->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Dabajuro-fal", $city);
                $manager->persist($city);           
                
                        
           
        $city = new City();
        $city
                ->setDescription('Pedregal')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Democracia-fal'))
                ->setParish($this->getReference('Parish-Pedregal-fal'))
                ;
                $this->addReference("City-Pedregal-fal", $city);
                $manager->persist($city);           
                
                                
        $city = new City();
        $city
                ->setDescription('El Manantial')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Democracia-fal'))
                ->setParish($this->getReference('Parish-Agua-Clara-fal'))
                ;
                $this->addReference("City-El-Manantial-fal", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Tupure')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Democracia-fal'))
                ->setParish($this->getReference('Parish-Avaria-fal'))
                ;
                $this->addReference("City-Tupure-fal", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Piedra Grande')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Democracia-fal'))
                ->setParish($this->getReference('Parish-Piedra-Grande-fal'))
                ;
                $this->addReference("City-Piedra-Grande-fal", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Purureche')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Democracia-fal'))
                ->setParish($this->getReference('Parish-Purureche-fal'))
                ;
                $this->addReference("City-Purureche-fal", $city);
                $manager->persist($city);             
                
                        
        $city = new City();
        $city
                ->setDescription('Pueblo Nuevo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                ->setParish($this->getReference('Parish-Pueblo-Nuevo-fal'))
                ;
                $this->addReference("City-Pueblo-Nuevo-fal", $city);
                $manager->persist($city);             
                        
                
        $city = new City();
        $city
                ->setDescription('Adícora')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                ->setParish($this->getReference('Parish-Adícora-fal'))
                ;
                $this->addReference("City-Adícora-fal", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Baraived')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                ->setParish($this->getReference('Parish-Baraived-fal'))
                ;
                $this->addReference("City-Baraived-fal", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Buena Vista')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                ->setParish($this->getReference('Parish-Buena-Vista-fal'))
                ;
                $this->addReference("City-Buena-Vista-fal", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Jadacaquiva')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                ->setParish($this->getReference('Parish-Jadacaquiva-fal'))
                ;
                $this->addReference("City-Jadacaquiva-fal", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Moruy')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                ->setParish($this->getReference('Parish-Moruy-fal'))
                ;
                $this->addReference("City-Moruy-fal", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Adaure')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                ->setParish($this->getReference('Parish-Adaure-fal'))
                ;
                $this->addReference("City-Adaure-fal", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('El Hato')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                ->setParish($this->getReference('Parish-El-Hato-fal'))
                ;
                $this->addReference("City-El-Hato-fal", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('El Vínculo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Falcon-fal'))
                ->setParish($this->getReference('Parish-El-Vínculo-fal'))
                ;
                $this->addReference("City-El-Vínculo-fal", $city);
                $manager->persist($city);              
          
                
        $city = new City();
        $city
                ->setDescription('Churuguara')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Federacion-fal'))
                ->setParish($this->getReference('Parish-Churuguara-fal'))
                ;
                $this->addReference("City-Churuguara-fal", $city);
                $manager->persist($city);              
                  
                
        $city = new City();
        $city
                ->setDescription('Agua Larga')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Federacion-fal'))
                ->setParish($this->getReference('Parish-Agua-Larga-fal'))
                ;
                $this->addReference("City-Agua-Larga-fal", $city);
                $manager->persist($city);                    
                
                
        $city = new City();
        $city
                ->setDescription('El Paují')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Federacion-fal'))
                ->setParish($this->getReference('Parish-El-Paují-fal'))
                ;
                $this->addReference("City-El-Paují-fal", $city);
                $manager->persist($city);                    
                        
        $city = new City();
        $city
                ->setDescription('El Tupí')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Federacion-fal'))
                ->setParish($this->getReference('Parish-Independencia-fal'))
                ;
                $this->addReference("City-El-Tupí-fal", $city);
                $manager->persist($city);                    
                        
                        
        $city = new City();
        $city
                ->setDescription('Mapararí')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Federacion-fal'))
                ->setParish($this->getReference('Parish-Mapararí-fal'))
                ;
                $this->addReference("City-Mapararí-fal", $city);
                $manager->persist($city);                    
                                
                
        $city = new City();
        $city
                ->setDescription('Jacura')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Jacura-fal'))
                ->setParish($this->getReference('Parish-Jacura-fal'))
                ;
                $this->addReference("City-Jacura-fal", $city);
                $manager->persist($city);                    
                                        
                
        $city = new City();
        $city
                ->setDescription('Agua Linda')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Jacura-fal'))
                ->setParish($this->getReference('Parish-Agua-Linda-fal'))
                ;
                $this->addReference("City-Agua-Linda-fal", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Araurima')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Jacura-fal'))
                ->setParish($this->getReference('Parish-Araurima-fal'))
                ;
                $this->addReference("City-Araurima-fal", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('Santa Cruz de Los Taques')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Los-Taques-fal'))
                ->setParish($this->getReference('Parish-Los-Taques-fal'))
                ;
                $this->addReference("City-Santa-Cruz-de-Los-Taques-fal", $city);
                $manager->persist($city);          
                                
                
        $city = new City();
        $city
                ->setDescription('Judibana')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Los-Taques-fal'))
                ->setParish($this->getReference('Parish-Judibana-fal'))
                ;
                $this->addReference("City-Judibana-fal", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Mene de Mauroa')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Mauroa-fal'))
                ->setParish($this->getReference('Parish-Mene-de-Mauroa-fal'))
                ;
                $this->addReference("City-Mene-de-Mauroa-fal", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Casigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Mauroa-fal'))
                ->setParish($this->getReference('Parish-Casigua-fal'))
                ;
                $this->addReference("City-Casigua-fal", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('San Félix')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Mauroa-fal'))
                ->setParish($this->getReference('Parish-San-Félix-fal'))
                ;
                $this->addReference("City-San-Félix-fal", $city);
                $manager->persist($city);                 
                        
                
        $city = new City();
        $city
                ->setDescription('Santa Ana de Coro')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                ->setParish($this->getReference('Parish-San-Antonio-fal'))
                ;
                $this->addReference("City-Santa-Ana-de-Coro-sa-fal", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Santa Ana de Coro')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                ->setParish($this->getReference('Parish-San-Gabriel-fal'))
                ;
                $this->addReference("City-Santa-Ana-de-Coro-sg-fal", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Santa Ana de Coro')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                ->setParish($this->getReference('Parish-Santa-Ana-mi-fal'))
                ;
                $this->addReference("City-Santa-Ana-de-Coro-san-fal", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('La Negrita')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                ->setParish($this->getReference('Parish-Guzmán-Guillermo-fal'))
                ;
                $this->addReference("City-La-Negrita-fal", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('Mitare')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                ->setParish($this->getReference('Parish-Mitare-fal'))
                ;
                $this->addReference("City-Mitare-fal", $city);
                $manager->persist($city);                  
                
        $city = new City();
        $city
                ->setDescription('Río Seco')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                ->setParish($this->getReference('Parish-Río-Seco-fal'))
                ;
                $this->addReference("City-Río-Seco-fal", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Sabaneta')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Miranda-fal'))
                ->setParish($this->getReference('Parish-Sabaneta-fal'))
                ;
                $this->addReference("City-Sabaneta-fal", $city);
                $manager->persist($city);                  
                                
                
        $city = new City();
        $city
                ->setDescription('Chichiriviche')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Monseñor-Iturriza-fal'))
                ->setParish($this->getReference('Parish-Chichiriviche-fal'))
                ;
                $this->addReference("City-Chichiriviche-fal", $city);
                $manager->persist($city);                  
                                        
                
        $city = new City();
        $city
                ->setDescription('Boca de Tocuyo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Monseñor-Iturriza-fal'))
                ->setParish($this->getReference('Parish-Boca-de-Tocuyo-fal'))
                ;
                $this->addReference("City-Boca-de-Tocuyo-fal", $city);
                $manager->persist($city);                  
                                                
        $city = new City();
        $city
                ->setDescription('Tocuyo de La Costa')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Monseñor-Iturriza-fal'))
                ->setParish($this->getReference('Parish-Tocuyo-de-la-Costa-fal'))
                ;
                $this->addReference("City-Tocuyo-de-La-Costa-fal", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Palmasola')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Palmasola-fal'))
                //->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Palmasola-fal", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('Cabure')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Petit-fal'))
                ->setParish($this->getReference('Parish-Cabure-fal'))
                ;
                $this->addReference("City-Cabure-fal", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Pueblo Nuevo de la Sierra')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Petit-fal'))
                ->setParish($this->getReference('Parish-Colina-fal'))
                ;
                $this->addReference("City-Pueblo-Nuevo-de-la-Sierra-fal", $city);
                $manager->persist($city);         
                        
        $city = new City();
        $city
                ->setDescription('Curimagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Petit-fal'))
                ->setParish($this->getReference('Parish-Curimagua-fal'))
                ;
                $this->addReference("City-Curimagua-fal", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Píritu')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Piritu-fal'))
                ->setParish($this->getReference('Parish-Píritu-fal'))
                ;
                $this->addReference("City-Píritu-fal", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('San José de la Costa')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Piritu-fal'))
                ->setParish($this->getReference('Parish-San José-de-la-Costa-fal'))
                ;
                $this->addReference("City-San-José de-la-Costa-fal", $city);
                $manager->persist($city);        
                        
                
        $city = new City();
        $city
                ->setDescription('Mirimire')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-San-Francisco-fal'))
                //->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Mirimire-fal", $city);
                $manager->persist($city);        
                                
                
        $city = new City();
        $city
                ->setDescription('Tucacas')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Silva-fal'))
                ->setParish($this->getReference('Parish-Tucacas-fal'))
                ;
                $this->addReference("City-Tucacas-fal", $city);
                $manager->persist($city);        
                                        
                
        $city = new City();
        $city
                ->setDescription('Boca de Aroa')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Silva-fal'))
                ->setParish($this->getReference('Parish-Boca-de-Aroa-fal'))
                ;
                $this->addReference("City-Boca-de-Aroa-fal", $city);
                $manager->persist($city);        
                                                
                
        $city = new City();
        $city
                ->setDescription('La Cruz de Taratara')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Sucre-fal'))
                ->setParish($this->getReference('Parish-Sucre-fal'))
                ;
                $this->addReference("City-La-Cruz-de-Taratara-fal", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Pecaya')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Sucre-fal'))
                ->setParish($this->getReference('Parish-Pecaya-fal'))
                ;
                $this->addReference("City-Pecaya-fal", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Tocópero')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Tocopero-fal'))
               // ->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Tocópero-fal", $city);
                $manager->persist($city);             
                
                        
        $city = new City();
        $city
                ->setDescription('Santa Cruz de Bucaral')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Union-fal'))
                ->setParish($this->getReference('Parish-Santa-Cruz-de-Bucaral-fal'))
                ;
                $this->addReference("City-Santa-Cruz-de-Bucaral-fal", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('El Charal')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Union-fal'))
                ->setParish($this->getReference('Parish-El-Charal-fal'))
                ;
                $this->addReference("City-El-Charal-fal", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Las Vegas del Tuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Union-fal'))
                ->setParish($this->getReference('Parish-Las-Vegas-del-Tuy-fal'))
                ;
                $this->addReference("City-Las-Vegas-del-Tuy-fal", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('Urumaco')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Urumaco-fal'))
                ->setParish($this->getReference('Parish-Urumaco-fal'))
                ;
                $this->addReference("City-Urumaco-fal", $city);
                $manager->persist($city);           
                                
                
        $city = new City();
        $city
                ->setDescription('San José de Bruzual')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Urumaco-fal'))
                ->setParish($this->getReference('Parish-Bruzual-fal'))
                ;
                $this->addReference("City-San-José-de-Bruzual-fal", $city);
                $manager->persist($city);           
                                        
                
        $city = new City();
        $city
                ->setDescription('Puerto Cumarebo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Zamora-fal'))
                ->setParish($this->getReference('Parish-Puerto-Cumarebo-fal'))
                ;
                $this->addReference("City-Puerto-Cumarebo-fal", $city);
                $manager->persist($city);           
                                                
                
        $city = new City();
        $city
                ->setDescription('La Ciénaga')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Zamora-fal'))
                ->setParish($this->getReference('Parish-La-Ciénaga-fal'))
                ;
                $this->addReference("City-La-Ciénaga-fal", $city);
                $manager->persist($city);           
                                                        
                
        $city = new City();
        $city
                ->setDescription('La Soledad')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Zamora-fal'))
                ->setParish($this->getReference('Parish-La-Soledad-fal'))
                ;
                $this->addReference("City-La-Soledad-fal", $city);
                $manager->persist($city);           
                                                        
                        
        $city = new City();
        $city
                ->setDescription('Pueblo Cumarebo')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Zamora-fal'))
                ->setParish($this->getReference('Parish-Pueblo-Cumarebo-fal'))
                ;
                $this->addReference("City-Pueblo-Cumarebo-fal", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Zazárida')
                ->setCapital(false)
                ->setState($this->getReference('State-Falcon'))
                ->setMunicipality($this->getReference('Municipality-Zamora-fal'))
                ->setParish($this->getReference('Parish-Zazárida-za-fal'))
                ;
                $this->addReference("City-Zazárida-za-fal", $city);
                $manager->persist($city);              
                
       //ciudades del estado Guarico
                
        $city = new City();
        $city
                ->setDescription('Camaguán')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Camaguan-gua'))
                ->setParish($this->getReference('Parish-Camaguán-gua'))
                ;
                $this->addReference("City-Camaguán-gua", $city);
                $manager->persist($city);               
              
        $city = new City();
        $city
                ->setDescription('Puerto Miranda')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Camaguan-gua'))
                ->setParish($this->getReference('Parish-Puerto-Miranda-gua'))
                ;
                $this->addReference("City-Puerto-Miranda-gua", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Uverito')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Camaguan-gua'))
                ->setParish($this->getReference('Parish-Uverito-gua'))
                ;
                $this->addReference("City-Uverito-gua", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Chaguaramas')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Chaguaramas-gua'))
                ->setParish($this->getReference('Parish-Chaguaramas-gua'))
                ;
                $this->addReference("City-Chaguaramas-gua", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('El Socorro')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-El-socorro-gua'))
                ->setParish($this->getReference('Parish-El-Socorro-gua'))
                ;
                $this->addReference("City-El-Socorro-gua", $city);
                $manager->persist($city);                  
                
        $city = new City();
        $city
                ->setDescription('Guayabal')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-San-Geronimo-de-Guayabal-gua'))
                ->setParish($this->getReference('Parish-Guayabal-gua'))
                ;
                $this->addReference("City-Guayabal-gua", $city);
                $manager->persist($city);                  
                
        $city = new City();
        $city
                ->setDescription('Cazorla')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-San-Geronimo-de-Guayabal-gua'))
                ->setParish($this->getReference('Parish-Cazorla-gua'))
                ;
                $this->addReference("City-Cazorla-gua", $city);
                $manager->persist($city);                  
                
        $city = new City();
        $city
                ->setDescription('Valle de La Pascua')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Leonardo-Infante-gua'))
                ->setParish($this->getReference('Parish-Valle-de-la-Pascua-gua'))
                ;
                $this->addReference("City-Valle-de-La-Pascua-gua", $city);
                $manager->persist($city);                  
                
                                        
        $city = new City();
        $city
                ->setDescription('Espino')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Leonardo-Infante-gua'))
                ->setParish($this->getReference('Parish-Espino-gua'))
                ;
                $this->addReference("City-Espino-gua", $city);
                $manager->persist($city);                                  
                
        $city = new City();
        $city
                ->setDescription('Las Mercedes')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Las-Mercedes-gua'))
                ->setParish($this->getReference('Parish-Las-Mercedes-gua'))
                ;
                $this->addReference("City-Las-Mercedes-gua", $city);
                $manager->persist($city);                                  
                
                
        $city = new City();
        $city
                ->setDescription('Cabruta')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Las-Mercedes-gua'))
                ->setParish($this->getReference('Parish-Cabruta-gua'))
                ;
                $this->addReference("City-Cabruta-gua", $city);
                $manager->persist($city);                    
                
                
        $city = new City();
        $city
                ->setDescription('Santa Rita')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Las-Mercedes-gua'))
                ->setParish($this->getReference('Parish-Santa-Rita-de-Manapire-gua'))
                ;
                $this->addReference("City-Santa-Rita-gua", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('El Sombrero')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Julian-Mellado-gua'))
                ->setParish($this->getReference('Parish-El-Sombrero-gua'))
                ;
                $this->addReference("City-El-Sombrero-gua", $city);
                $manager->persist($city);                 
                        
                
        $city = new City();
        $city
                ->setDescription('Sosa')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Julian-Mellado-gua'))
                ->setParish($this->getReference('Parish-Sosa-gua'))
                ;
                $this->addReference("City-Sosa-gua", $city);
                $manager->persist($city);                 
                                
                
        $city = new City();
        $city
                ->setDescription('Calabozo')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Francisco-de-Miranda-gua'))
                ->setParish($this->getReference('Parish-Capital-Urbana-Calabozo-gua'))
                ;
                $this->addReference("City-Calabozo-gua", $city);
                $manager->persist($city);                 
                                        
                
        $city = new City();
        $city
                ->setDescription('El Calvario')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Francisco-de-Miranda-gua'))
                ->setParish($this->getReference('Parish-El-Calvario-gua'))
                ;
                $this->addReference("City-El-Calvario-gua", $city);
                $manager->persist($city);                 
                                        
        $city = new City();
        $city
                ->setDescription('El Rastro')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Francisco-de-Miranda-gua'))
                ->setParish($this->getReference('Parish-El-Rastro-gua'))
                ;
                $this->addReference("City-El-Rastro-gua", $city);
                $manager->persist($city);                      
                
                
        $city = new City();
        $city
                ->setDescription('Guardatinajas')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Francisco-de-Miranda-gua'))
                ->setParish($this->getReference('Parish-Guardatinajas-gua'))
                ;
                $this->addReference("City-Guardatinajas-gua", $city);
                $manager->persist($city);                      
                
                        
                
        $city = new City();
        $city
                ->setDescription('Altagracia de Orituco')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                ->setParish($this->getReference('Parish-Altagracia-de-Orituco-gua'))
                ;
                $this->addReference("City-Altagracia-de-Orituco-gua", $city);
                $manager->persist($city);                      
                
                               
        $city = new City();
        $city
                ->setDescription('Lezama')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                ->setParish($this->getReference('Parish-San Francisco-Javier-de-Lezama-gua'))
                ;
                $this->addReference("City-Lezama-gua", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('Libertad de Orituco')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                ->setParish($this->getReference('Parish-Libertad-de-Orituco-gua'))
                ;
                $this->addReference("City-Libertad-de-Orituco-gua", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Paso Real de Macaira')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                ->setParish($this->getReference('Parish-Paso-Real-de-Macaira-gua'))
                ;
                $this->addReference("City-Paso-Real-de-Macaira-gua", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('San Francisco de Macaira')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                ->setParish($this->getReference('Parish-San-Francisco-de-Macaira-gua'))
                ;
                $this->addReference("City-San-Francisco-de-Macaira-gua", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('San Rafael de Orituco')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                ->setParish($this->getReference('Parish-San Rafael-de-Orituco-gua'))
                ;
                $this->addReference("City-San-Rafael-de-Orituco-gua", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('Sabana Grande de Orituco')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Jose-Tadeo-Monagas-gua'))
                ->setParish($this->getReference('Parish-Carlos-Soublette-gua'))
                ;
                $this->addReference("City-Sabana-Grande-de-Orituco-gua", $city);
                $manager->persist($city);           
                                
                
        $city = new City();
        $city
                ->setDescription('Ortiz')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Ortiz-gua'))
                ->setParish($this->getReference('Parish-Ortiz-gua'))
                ;
                $this->addReference("City-Ortiz-gua", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('San Francisco de Tiznado')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Ortiz-gua'))
                ->setParish($this->getReference('Parish-San-Francisco-de-Tiznado-gua'))
                ;
                $this->addReference("City-San-Francisco-de-Tiznado-gua", $city);
                $manager->persist($city);        
                
        $city = new City();
        $city
                ->setDescription('San José de Tiznado')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Ortiz-gua'))
                ->setParish($this->getReference('Parish-San-José-de-Tiznado-gua'))
                ;
                $this->addReference("City-San-José-de-Tiznado-gua", $city);
                $manager->persist($city);        
                        
        $city = new City();
        $city
                ->setDescription('La Unión de Canuto')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Ortiz-gua'))
                ->setParish($this->getReference('Parish-San-Lorenzo-de-Tiznado-gua'))
                ;
                $this->addReference("City-La-Unión-de-Canuto-gua", $city);
                $manager->persist($city);     
                
                
        $city = new City();
        $city
                ->setDescription('Tucupido')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-gua'))
                ->setParish($this->getReference('Parish-Tucupido-gua'))
                ;
                $this->addReference("City-Tucupido-gua", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('San Rafael de Laya')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Jose-Felix-Ribas-gua'))
                ->setParish($this->getReference('Parish-San-Rafael-de-Laya-gua'))
                ;
                $this->addReference("City-San-Rafael-de-Laya-gua", $city);
                $manager->persist($city);         
                        
                
        $city = new City();
        $city
                ->setDescription('San Juan de los Morros')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Juan-German-Roscio-gua'))
                ->setParish($this->getReference('Parish-San-Juan-de-Los-Morros-gua'))
                ;
                $this->addReference("City-San-Juan-de-los-Morros-gua", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('Cantagallo')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Juan-German-Roscio-gua'))
                ->setParish($this->getReference('Parish-Cantagallo-gua'))
                ;
                $this->addReference("City-Cantagallo-gua", $city);
                $manager->persist($city);                 
                
                        
        $city = new City();
        $city
                ->setDescription('Parapara')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Juan-German-Roscio-gua'))
                ->setParish($this->getReference('Parish-Parapara-gua'))
                ;
                $this->addReference("City-Parapara-gua", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('San José de Guaribe')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-San-Jose-de-Guaribe-gua'))
                ->setParish($this->getReference('Parish-San-José-de-Guaribe-gua'))
                ;
                $this->addReference("City-San-José-de-Guaribe-gua", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('Santa María de Ipire')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Santa-Maria-de-Ipire-gua'))
                ->setParish($this->getReference('Parish-Santa-María-de-Ipire-gua'))
                ;
                $this->addReference("City-Santa-María-de-Ipire-gua", $city);
                $manager->persist($city);                 
                         
                
        $city = new City();
        $city
                ->setDescription('Altamira')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Santa-Maria-de-Ipire-gua'))
                ->setParish($this->getReference('Parish-Altamira-gua'))
                ;
                $this->addReference("City-Altamira-gua", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Zaraza')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Pedro-Zaraza-gua'))
                ->setParish($this->getReference('Parish-Zaraza-gua'))
                ;
                $this->addReference("City-Zaraza-gua", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('San José de Unare')
                ->setCapital(false)
                ->setState($this->getReference('State-Guarico'))
                ->setMunicipality($this->getReference('Municipality-Pedro-Zaraza-gua'))
                ->setParish($this->getReference('Parish-San-José-de-Unare-gua'))
                ;
                $this->addReference("City-San-José-de-Unare-gua", $city);
                $manager->persist($city);           
                
                
       //ciudades del estado Lara         
                
                
        $city = new City();
        $city
                ->setDescription('Sanare')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-lar'))
                ->setParish($this->getReference('Parish-Tamayo-lar'))
                ;
                $this->addReference("City-Sanare-lar", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('La Bucarita')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-lar'))
                ->setParish($this->getReference('Parish-Quebrada-Honda-de-Guache-lar'))
                ;
                $this->addReference("City-La-Bucarita-lar", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('La Escalera')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-lar'))
                ->setParish($this->getReference('Parish-Yacambú-lar'))
                ;
                $this->addReference("City-La-Escalera-lar", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Duaca')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Crespo-lar'))
                ->setParish($this->getReference('Parish-Freitez-lar'))
                ;
                $this->addReference("City-Duaca-lar", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('El Eneal')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Crespo-lar'))
                ->setParish($this->getReference('Parish-José-María-Blanco-lar'))
                ;
                $this->addReference("City-El-Eneal-lar", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Barquisimeto')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                ->setParish($this->getReference('Parish-Catedral-lar'))
                ;
                $this->addReference("City-Barquisimeto-ct-lar", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('Barquisimeto')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                ->setParish($this->getReference('Parish-La-Concepción-lar'))
                ;
                $this->addReference("City-Barquisimeto-lc-lar", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Barquisimeto')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                ->setParish($this->getReference('Parish-El-Cuji-lar'))
                ;
                $this->addReference("City-Barquisimeto-ec-lar", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Barquisimeto')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                ->setParish($this->getReference('Parish-Juan-de-Villegas-lar'))
                ;
                $this->addReference("City-Barquisimeto-jv-lar", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('Barquisimeto')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                ->setParish($this->getReference('Parish-Santa-Rosa-lar'))
                ;
                $this->addReference("City-Barquisimeto-st-lar", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Barquisimeto')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                ->setParish($this->getReference('Parish-Tamaca-lar'))
                ;
                $this->addReference("City-Barquisimeto-ta-lar", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('Barquisimeto')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                ->setParish($this->getReference('Parish-Unión-lar'))
                ;
                $this->addReference("City-Barquisimeto-un-lar", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('Bobare')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                ->setParish($this->getReference('Parish-Aguedo-Alvarado-lar'))
                ;
                $this->addReference("City-Bobare-lar", $city);
                $manager->persist($city);                 
                        
                
        $city = new City();
        $city
                ->setDescription('Buena Vista')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                ->setParish($this->getReference('Parish-Buena-Vista-lar'))
                ;
                $this->addReference("City-Buena-Vista-lar", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Río Claro')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Iribarren-lar'))
                ->setParish($this->getReference('Parish-Juárez-lar'))
                ;
                $this->addReference("City-Río-Claro-lar", $city);
                $manager->persist($city);               
                
                        
        $city = new City();
        $city
                ->setDescription('Quíbor')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                ->setParish($this->getReference('Parish-Juan-Bautista-Rodríguez-lar'))
                ;
                $this->addReference("City-Quíbor-lar", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Cuara')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                ->setParish($this->getReference('Parish-Cuara-lar'))
                ;
                $this->addReference("City-Cuara-lar", $city);
                $manager->persist($city);          
                
       
        $city = new City();
        $city
                ->setDescription('Cubiro')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                ->setParish($this->getReference('Parish-Diego-de-Lozada-lar'))
                ;
                $this->addReference("City-Cubiro-lar", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Agua Negra')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                ->setParish($this->getReference('Parish-Paraíso-de-San-José-lar'))
                ;
                $this->addReference("City-Agua-Negra-lar", $city);
                $manager->persist($city);             
                        
                
        $city = new City();
        $city
                ->setDescription('San Miguel')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                ->setParish($this->getReference('Parish-San-Miguel-lar'))
                ;
                $this->addReference("City-San-Miguel-lar", $city);
                $manager->persist($city);                  
                
        $city = new City();
        $city
                ->setDescription('Tintorero')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                ->setParish($this->getReference('Parish-Tintorero-lar'))
                ;
                $this->addReference("City-Tintorero-lar", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('El Hato')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                ->setParish($this->getReference('Parish-José-Berardo-Dorante-lar'))
                ;
                $this->addReference("City-El-Hato-lar", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('La Ceiba')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Jimenez-lar'))
                ->setParish($this->getReference('Parish-Coronel-Mariano-Peraza-lar'))
                ;
                $this->addReference("City-La-Ceiba-lar", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('El Tocuyo')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                ->setParish($this->getReference('Parish-Bolívar-lar'))
                ;
                $this->addReference("City-El-Tocuyo-lar", $city);
                $manager->persist($city);               
                
                        
        $city = new City();
        $city
                ->setDescription('Anzoátegui')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                ->setParish($this->getReference('Parish-Anzoátegui-lar'))
                ;
                $this->addReference("City-Anzoátegui-lar", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Guarico')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                ->setParish($this->getReference('Parish-Guárico-lar'))
                ;
                $this->addReference("City-Guarico-lar", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Villanueva')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                ->setParish($this->getReference('Parish-Hilario-Luna-y-Luna-lar'))
                ;
                $this->addReference("City-Villanueva-lar", $city);
                $manager->persist($city);            
                
                
                
        $city = new City();
        $city
                ->setDescription('Humocaro Alto')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                ->setParish($this->getReference('Parish-Humocaro-Alto-lar'))
                ;
                $this->addReference("City-Humocaro-Alto-lar", $city);
                $manager->persist($city);            
                        
                
        $city = new City();
        $city
                ->setDescription('Humocaro Bajo')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                ->setParish($this->getReference('Parish-Humocaro-Bajo-lar'))
                ;
                $this->addReference("City-Humocaro-Bajo-lar", $city);
                $manager->persist($city);          
                
                
                
        $city = new City();
        $city
                ->setDescription('Guaitó')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                ->setParish($this->getReference('Parish-La-Candelaria-lar'))
                ;
                $this->addReference("City-Guaitó-lar", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Barbacoas')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Moran-lar'))
                ->setParish($this->getReference('Parish-Morán-lar'))
                ;
                $this->addReference("City-Barbacoas-lar", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Cabudare')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Palavecino-lar'))
                ->setParish($this->getReference('Parish-Cabudare-lar'))
                ;
                $this->addReference("City-Cabudare-lar", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('Los Rastrojos')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Palavecino-lar'))
                ->setParish($this->getReference('Parish-José-Gregorio-Bastidas-lar'))
                ;
                $this->addReference("City-Los-Rastrojos-lar", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Agua Viva')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Palavecino-lar'))
                ->setParish($this->getReference('Parish-Agua-Viva-lar'))
                ;
                $this->addReference("City-Agua-Viva-lar", $city);
                $manager->persist($city);             
                        
                
        $city = new City();
        $city
                ->setDescription('Sarare')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Simon-Planas-lar'))
                ->setParish($this->getReference('Parish-Sarare-lar'))
                ;
                $this->addReference("City-Sarare-lar", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Manzanita')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Simon-Planas-lar'))
                ->setParish($this->getReference('Parish-Buría-lar'))
                ;
                $this->addReference("City-Manzanita-lar", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('La Miel')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Simon-Planas-lar'))
                ->setParish($this->getReference('Parish-Gustavo-Vegas-León-lar'))
                ;
                $this->addReference("City-La-Miel-lar", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Carora')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Trinidad-Samuel-lar'))
                ;
                $this->addReference("City-Carora-lar", $city);
                $manager->persist($city);               
                                
                
        $city = new City();
        $city
                ->setDescription('Curarigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Antonio-Díaz-lar'))
                ;
                $this->addReference("City-Curarigua-lar", $city);
                $manager->persist($city);             
            
                
                
        $city = new City();
        $city
                ->setDescription('Río Tocuyo')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Camacaro-lar'))
                ;
                $this->addReference("City-Río-Tocuyo-lar", $city);
                $manager->persist($city);             
                    
                
        $city = new City();
        $city
                ->setDescription('Atarigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Castañeda-lar'))
                ;
                $this->addReference("City-Atarigua-lar", $city);
                $manager->persist($city);             
                            
                
        $city = new City();
        $city
                ->setDescription('La Pastora')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Cecilio-Zubillaga-lar'))
                ;
                $this->addReference("City-La-Pastora-lar", $city);
                $manager->persist($city);                   
                
                
        $city = new City();
        $city
                ->setDescription('Aregue')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Chiquinquira-lar'))
                ;
                $this->addReference("City-Aregue-lar", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Quebrada Arriba')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-El-Blanco-lar'))
                ;
                $this->addReference("City-Quebrada-Arriba-lar", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Arenales')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Espinoza-de-los-Monteros-lar'))
                ;
                $this->addReference("City-Arenales-lar", $city);
                $manager->persist($city);                
                        
                
        $city = new City();
        $city
                ->setDescription('San Pedro')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Lara-lar'))
                ;
                $this->addReference("City-San-Pedro-lar", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Burere')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Las-Mercedes-lar'))
                ;
                $this->addReference("City-Burere-lar", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('El Empedrado')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Manuel-Morillo-lar'))
                ;
                $this->addReference("City-El-Empedrado-lar", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Palmarito')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Montaña-Verde-lar'))
                ;
                $this->addReference("City-Palmarito-lar", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('San Francisco')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Montaña-Verde-lar'))
                ;
                $this->addReference("City-San-Francisco-lar", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('El Jabón')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Torres-lar'))
                ;
                $this->addReference("City-El-Jabón-lar", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('El Paradero')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Heriberto-Arroyo-lar'))
                ;
                $this->addReference("City-El-Paradero-lar", $city);
                $manager->persist($city);             
                        
                
                
        $city = new City();
        $city
                ->setDescription('Parapara')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Reyes-Vargas-lar'))
                ;
                $this->addReference("City-Parapara-lar", $city);
                $manager->persist($city);             
                                
                
        $city = new City();
        $city
                ->setDescription('Altagracia')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Torres-lar'))
                ->setParish($this->getReference('Parish-Altagracia-lar'))
                ;
                $this->addReference("City-Altagracia-lar", $city);
                $manager->persist($city);             
                                
                        
        $city = new City();
        $city
                ->setDescription('Siquisique')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-lar'))
                ->setParish($this->getReference('Parish-Siquisique-lar'))
                ;
                $this->addReference("City-Siquisique-lar", $city);
                $manager->persist($city);                     
                
                
        $city = new City();
        $city
                ->setDescription('Santa Inés')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-lar'))
                ->setParish($this->getReference('Parish-Moroturo-lar'))
                ;
                $this->addReference("City-Santa-Inés-lar", $city);
                $manager->persist($city);                     
                        
                
        $city = new City();
        $city
                ->setDescription('Aguada Grande')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-lar'))
                ->setParish($this->getReference('Parish-San-Miguel-ur-lar'))
                ;
                $this->addReference("City-Aguada-Grande-lar", $city);
                $manager->persist($city);                     
                        
                
        $city = new City();
        $city
                ->setDescription('Baragua')
                ->setCapital(false)
                ->setState($this->getReference('State-Lara'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-lar'))
                ->setParish($this->getReference('Parish-Xaguas-lar'))
                ;
                $this->addReference("City-Baragua-lar", $city);
                $manager->persist($city);                      
                
                
        //ciudades del estado Mèrida        
                
                
        $city = new City();
        $city
                ->setDescription('El Vigía')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                ->setParish($this->getReference('Parish-Presidente-Betancourt-mer'))
                ;
                $this->addReference("City-El-Vigía-mer", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('El Vigía')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                ->setParish($this->getReference('Parish-Presidente-Páez-mer'))
                ;
                $this->addReference("City-El-Vigía-pp-mer", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('El Vigía')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                ->setParish($this->getReference('Parish-Presidente-Rómulo-Gallegos-mer'))
                ;
                $this->addReference("City-El-Vigía-pr-mer", $city);
                $manager->persist($city);           
                                
                
        $city = new City();
        $city
                ->setDescription('La Palmita')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                ->setParish($this->getReference('Parish-Gabriel-Picón-Gonzáles-mer'))
                ;
                $this->addReference("City-La-Palmita-mer", $city);
                $manager->persist($city);           
                                
                        
        $city = new City();
        $city
                ->setDescription('Mucujepe')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                ->setParish($this->getReference('Parish-Gabriel-Héctor-Amable-Mora-mer'))
                ;
                $this->addReference("City-Mucujepe-mer", $city);
                $manager->persist($city);           
                                        
                
        $city = new City();
        $city
                ->setDescription('Los Naranjos')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                ->setParish($this->getReference('Parish-José-Nucete-Sardi-mer'))
                ;
                $this->addReference("City-Los-Naranjos-mer", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('La Blanca')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Alberto-Adriani-mer'))
                ->setParish($this->getReference('Parish-Pulido-Méndez-mer'))
                ;
                $this->addReference("City-La-Blanca-mer", $city);
                $manager->persist($city);                 
                        
                
        $city = new City();
        $city
                ->setDescription('La Azulita')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Andres-Bello-mer'))
               // ->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-La-Azulita-mer", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Santa Cruz de Mora')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Pinto-Salinas-mer'))
                ->setParish($this->getReference('Parish-Santa-Cruz-de-Mora-mer'))
                ;
                $this->addReference("City-Santa-Cruz-de-Mora-mer", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Mesa Bolívar')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Pinto-Salinas-mer'))
                ->setParish($this->getReference('Parish-Mesa-Bolívar-mer'))
                ;
                $this->addReference("City-Mesa-Bolívar-mer", $city);
                $manager->persist($city);                
                        
                
        $city = new City();
        $city
                ->setDescription('Mesa de las Palmas')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Antonio-Pinto-Salinas-mer'))
                ->setParish($this->getReference('Parish-Mesa-las-Palmas-mer'))
                ;
                $this->addReference("City-Mesa-de-las-Palmas-mer", $city);
                $manager->persist($city);                
                                
                
        $city = new City();
        $city
                ->setDescription('Aricagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Aricagua-mer'))
                ->setParish($this->getReference('Parish-Aricagua-mer'))
                ;
                $this->addReference("City-Aricagua-mer", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Campo Elías')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Aricagua-mer'))
                ->setParish($this->getReference('Parish-San-Antonio-mer'))
                ;
                $this->addReference("City-Campo-Elías-mer", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Canaguá')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                ->setParish($this->getReference('Parish-Canaguá-mer'))
                ;
                $this->addReference("City-Canaguá-mer", $city);
                $manager->persist($city);                
                        
        $city = new City();
        $city
                ->setDescription('Capurí')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                ->setParish($this->getReference('Parish-Capurí-mer'))
                ;
                $this->addReference("City-Capurí-mer", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Chacantá')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                ->setParish($this->getReference('Parish-Chacantá-mer'))
                ;
                $this->addReference("City-Chacantá-mer", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('El Molino')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                ->setParish($this->getReference('Parish-El-Molino-mer'))
                ;
                $this->addReference("City-El-Molino-mer", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('El Viento')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                ->setParish($this->getReference('Parish-Guaimaral-mer'))
                ;
                $this->addReference("City-El-Viento-mer", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Mucutuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                ->setParish($this->getReference('Parish-Mucutuy-mer'))
                ;
                $this->addReference("City-Mucutuy-mer", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Mucuchachí')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Arzobispo-Chacon-mer'))
                ->setParish($this->getReference('Parish-Mucuchachí-mer'))
                ;
                $this->addReference("City-Mucuchachí-mer", $city);
                $manager->persist($city);           
                
                        
        $city = new City();
        $city
                ->setDescription('Ejido')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                ->setParish($this->getReference('Parish-Fernández-Peña-mer'))
                ;
                $this->addReference("City-Ejido-fp-mer", $city);
                $manager->persist($city);                               
                
                
        $city = new City();
        $city
                ->setDescription('Ejido')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                ->setParish($this->getReference('Parish-Matriz-mer'))
                ;
                $this->addReference("City-Ejido-mt-mer", $city);
                $manager->persist($city);                               
                        
                
        $city = new City();
        $city
                ->setDescription('Ejido')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                ->setParish($this->getReference('Parish-Montalbán-mer'))
                ;
                $this->addReference("City-Ejido-mb-mer", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Acequias')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                ->setParish($this->getReference('Parish-Acequias-mer'))
                ;
                $this->addReference("City-Acequias-mer", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Jají')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                ->setParish($this->getReference('Parish-Jají-mer'))
                ;
                $this->addReference("City-Jají-mer", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('La Mesa')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                ->setParish($this->getReference('Parish-La-Mesa-mer'))
                ;
                $this->addReference("City-La-Mesa-mer", $city);
                $manager->persist($city);          
                         
                
        $city = new City();
        $city
                ->setDescription('San José')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Campo-Elias-mer'))
                ->setParish($this->getReference('Parish-San-José-del-Sur-mer'))
                ;
                $this->addReference("City-San-José-mer", $city);
                $manager->persist($city);          
                                 
                
        $city = new City();
        $city
                ->setDescription('Tucaní')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Caraccilo-Parra-y-Olmedo-mer'))
                ->setParish($this->getReference('Parish-Tucaní-mer'))
                ;
                $this->addReference("City-Tucaní-mer", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('El Pinar')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Caraccilo-Parra-y-Olmedo-mer'))
                ->setParish($this->getReference('Parish-Florencio-Ramírez-mer'))
                ;
                $this->addReference("City-El-Pinar-mer", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Santo Domingo')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Cardenal-Quintero-mer'))
                ->setParish($this->getReference('Parish-Santo-Domingo-mer'))
                ;
                $this->addReference("City-Santo-Domingo-mer", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Las Piedras')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Cardenal-Quintero-mer'))
                ->setParish($this->getReference('Parish-Las-Piedras-mer'))
                ;
                $this->addReference("City-Las-Piedras-mer", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('Guaraque')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Guaraque-mer'))
                ->setParish($this->getReference('Parish-Guaraque-mer'))
                ;
                $this->addReference("City-Guaraque-mer", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Mesa de Quintero')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Guaraque-mer'))
                ->setParish($this->getReference('Parish-Mesa-de-Quintero-mer'))
                ;
                $this->addReference("City-Mesa-de-Quintero-mer", $city);
                $manager->persist($city);               
                       
              
        $city = new City();
        $city
                ->setDescription('Río Negro')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Guaraque-mer'))
                ->setParish($this->getReference('Parish-Río-Negro-mer'))
                ;
                $this->addReference("City-Río-Negro-mer", $city);
                $manager->persist($city);               
                               
        $city = new City();
        $city
                ->setDescription('Arapuey')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Julio-Cesar-Salas-mer'))
                ->setParish($this->getReference('Parish-Arapuey-mer'))
                ;
                $this->addReference("City-Arapuey-mer", $city);
                $manager->persist($city);               
                                       
        $city = new City();
        $city
                ->setDescription('San José de Palmira')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Julio-Cesar-Salas-mer'))
                ->setParish($this->getReference('Parish-Arapuey-mer'))
                ;
                $this->addReference("City-San-José-de-Palmira-mer", $city);
                $manager->persist($city);               
                                               
        $city = new City();
        $city
                ->setDescription('Torondoy')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Justo-Briceño-mer'))
                ->setParish($this->getReference('Parish-Torondoy-mer'))
                ;
                $this->addReference("City-Torondoy-mer", $city);
                $manager->persist($city);               
                                                                                                           
                
        $city = new City();
        $city
                ->setDescription('San Cristóbal de Torondoy')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Justo-Briceño-mer'))
                ->setParish($this->getReference('Parish-San-Cristóbal-de-Torondoy-mer'))
                ;
                $this->addReference("City-San-Cristóbal-de-Torondoy-mer", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Antonio-Spinetti-Dini-mer'))
                ;
                $this->addReference("City-Mérida-as-mer", $city);
                $manager->persist($city);                 
                        
                
         
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Arias-mer'))
                ;
                $this->addReference("City-Mérida-ar-mer", $city);
                $manager->persist($city);                 
                                
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Caracciolo-Parra-Pérez-mer'))
                ;
                $this->addReference("City-Mérida-cp-mer", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Domingo-Peña-mer'))
                ;
                $this->addReference("City-Mérida-dp-mer", $city);
                $manager->persist($city);         
                        
                
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-El-Llano-mer'))
                ;
                $this->addReference("City-Mérida-ll-mer", $city);
                $manager->persist($city);         
                               
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Gonzalo-Picón-Febres-mer'))
                ;
                $this->addReference("City-Mérida-gp-mer", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Jacinto-Plaza-mer'))
                ;
                $this->addReference("City-Mérida-jp-mer", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Juan-Rodríguez-Suárez-mer'))
                ;
                $this->addReference("City-Mérida-jr-mer", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Lasso-de-la-Vega-mer'))
                ;
                $this->addReference("City-Mérida-lv-mer", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Mariano-Picón-Salas-mer'))
                ;
                $this->addReference("City-Mérida-mp-mer", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Milla-mer'))
                ;
                $this->addReference("City-Mérida-mi-mer", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Osuna-Rodríguez-mer'))
                ;
                $this->addReference("City-Mérida-or-mer", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('Mérida')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Sagrario-mer'))
                ;
                $this->addReference("City-Mérida-sa-mer", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('El Morro')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-El-Morro-mer'))
                ;
                $this->addReference("City-El-Morro-mer", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('Los Nevados')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Libertador-mer'))
                ->setParish($this->getReference('Parish-Los-Nevados-mer'))
                ;
                $this->addReference("City-Los-Nevados-mer", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Timotes')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Miranda-mer'))
                ->setParish($this->getReference('Parish-Timotes-mer'))
                ;
                $this->addReference("City-Timotes-mer", $city);
                $manager->persist($city);           
                  
        $city = new City();
        $city
                ->setDescription('Chachopo')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Miranda-mer'))
                ->setParish($this->getReference('Parish-Andrés-Eloy-Blanco-mer'))
                ;
                $this->addReference("City-Chachopo-mer", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('La Venta')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Miranda-mer'))
                ->setParish($this->getReference('Parish-La-Venta-mer'))
                ;
                $this->addReference("City-La-Venta-mer", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Piñango')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Miranda-mer'))
                ->setParish($this->getReference('Parish-Piñango-mer'))
                ;
                $this->addReference("City-Piñango-mer", $city);
                $manager->persist($city);            
                        
                
        $city = new City();
        $city
                ->setDescription('Santa Elena de Arenales')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Obispo-Ramos-de-Lora-mer'))
                ->setParish($this->getReference('Parish-Santa-Elena-de-Arenales-mer'))
                ;
                $this->addReference("City-Santa-Elena-de-Arenales-mer", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Guayabones')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Obispo-Ramos-de-Lora-mer'))
                ->setParish($this->getReference('Parish-Eloy-Paredes-mer'))
                ;
                $this->addReference("City-Guayabones-mer", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('San Rafael de Alcázar')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Obispo-Ramos-de-Lora-mer'))
                ->setParish($this->getReference('Parish-San-Rafael-de-Alcázar-mer'))
                ;
                $this->addReference("City-San-Rafael-de-Alcázar-mer", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Santa María de Caparo')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Padre-Noguera-mer'))
               // ->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Santa-María-de-Caparo-mer", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Pueblo Llano')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Pueblo-Llano-mer'))
                ->setParish($this->getReference('Parish-Pueblo-Llano-mer'))
                ;
                $this->addReference("City-Pueblo-Llano-mer", $city);
                $manager->persist($city);               
                
        $city = new City();
        $city
                ->setDescription('Mucuchíes')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Rangel-mer'))
                ->setParish($this->getReference('Parish-Rangel-mer'))
                ;
                $this->addReference("City-Mucuchíes-mer", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Cacute')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Rangel-mer'))
               ->setParish($this->getReference('Parish-Cacute-mer'))
                ;
                $this->addReference("City-Cacute-mer", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('La Toma')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Rangel-mer'))
               ->setParish($this->getReference('Parish-La-toma-mer'))
                ;
                $this->addReference("City-La-Toma-mer", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Mucurubá')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Rangel-mer'))
               ->setParish($this->getReference('Parish-Mucurubá-mer'))
                ;
                $this->addReference("City-Mucurubá-mer", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('San Rafael')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Rangel-mer'))
               ->setParish($this->getReference('Parish-San-Rafael-mer'))
                ;
                $this->addReference("City-San-Rafael-mer", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Bailadores')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Rivas-Davila-mer'))
               ->setParish($this->getReference('Parish-Bailadores-mer'))
                ;
                $this->addReference("City-Bailadores-mer", $city);
                $manager->persist($city);            
                       
        $city = new City();
        $city
                ->setDescription('La Playa')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Rivas-Davila-mer'))
               ->setParish($this->getReference('Parish-Bailadores-mer'))
                ;
                $this->addReference("City-La-Playa-mer", $city);
                $manager->persist($city);            
                              
        $city = new City();
        $city
                ->setDescription('Tabay')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Rivas-Davila-mer'))
               ->setParish($this->getReference('Parish-Tabay-mer'))
                ;
                $this->addReference("City-Tabay-mer", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Lagunillas')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
               ->setParish($this->getReference('Parish-Lagunillas-mer'))
                ;
                $this->addReference("City-Lagunillas-mer", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Chiguará')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
               ->setParish($this->getReference('Parish-Chiguará-mer'))
                ;
                $this->addReference("City-Chiguará-mer", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Estánques')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
               ->setParish($this->getReference('Parish-Estánquez-mer'))
                ;
                $this->addReference("City-Estánques-mer", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('La Trampa')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
               ->setParish($this->getReference('Parish-La-Trampa-mer'))
                ;
                $this->addReference("City-La-Trampa-mer", $city);
                $manager->persist($city);           
                                
        $city = new City();
        $city
                ->setDescription('Pueblo Nuevo del Sur')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
               ->setParish($this->getReference('Parish-Pueblo-Nuevo-del-Sur-mer'))
                ;
                $this->addReference("City-Pueblo-Nuevo-del-Sur-mer", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('San Juan')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Sucre-mer'))
               ->setParish($this->getReference('Parish-San-Juan-mer'))
                ;
                $this->addReference("City-San-Juan-mer", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Tovar')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Tovar-mer'))
               ->setParish($this->getReference('Parish-El-Amparo-mer'))
                ;
                $this->addReference("City-Tovar-ea-mer", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('Tovar')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Tovar-mer'))
               ->setParish($this->getReference('Parish-Urbana-El-Llano-mer'))
                ;
                $this->addReference("City-Tovar-ll-mer", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('Tovar')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Tovar-mer'))
               ->setParish($this->getReference('Parish-San-Francisco-mer'))
                ;
                $this->addReference("City-Tovar-sf-mer", $city);
                $manager->persist($city);                        
                
        $city = new City();
        $city
                ->setDescription('Tovar')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Tovar-mer'))
               ->setParish($this->getReference('Parish-Tovar-mer'))
                ;
                $this->addReference("City-Tovar-mer", $city);
                $manager->persist($city);                        
                        
        $city = new City();
        $city
                ->setDescription('Nueva Bolivia')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Tulio-Febres-Cordero-mer'))
               ->setParish($this->getReference('Parish-Nueva-Bolivia-mer'))
                ;
                $this->addReference("City-Nueva-Bolivia-mer", $city);
                $manager->persist($city);                                
                
        $city = new City();
        $city
                ->setDescription('Palmarito')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Tulio-Febres-Cordero-mer'))
               ->setParish($this->getReference('Parish-Independencia-mer'))
                ;
                $this->addReference("City-Palmarito-mer", $city);
                $manager->persist($city);                                
                        
        $city = new City();
        $city
                ->setDescription('Las Virtudes')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Tulio-Febres-Cordero-mer'))
               ->setParish($this->getReference('Parish-Maria-de-La-Concepción-Palacios-mer'))
                ;
                $this->addReference("City-Las-Virtudes-mer", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Santa Apolonia')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Tulio-Febres-Cordero-mer'))
               ->setParish($this->getReference('Parish-Santa-Apolonia-mer'))
                ;
                $this->addReference("City-Santa-Apolonia-mer", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Zea')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Zea-mer'))
               ->setParish($this->getReference('Parish-Zea-mer'))
                ;
                $this->addReference("City-Zea-mer", $city);
                $manager->persist($city);             
        
        $city = new City();
        $city
                ->setDescription('Caño Tigre')
                ->setCapital(false)
                ->setState($this->getReference('State-Merida'))
                ->setMunicipality($this->getReference('Municipality-Zea-mer'))
               ->setParish($this->getReference('Parish-Caño-El-Tigre-mer'))
                ;
                $this->addReference("City-Caño-Tigre-mer", $city);
                $manager->persist($city);             
                
        //ciudades del estado miranda  
                
                
        $city = new City();
        $city
                ->setDescription('Caucagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
               ->setParish($this->getReference('Parish-Caucagua-mir'))
                ;
                $this->addReference("City-Caucagua-mir", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Aragüita')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
               ->setParish($this->getReference('Parish-Aragüita-mir'))
                ;
                $this->addReference("City-Aragüita-mir", $city);
                $manager->persist($city);         
                        
        $city = new City();
        $city
                ->setDescription('El Clavo')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
               ->setParish($this->getReference('Parish-Arevalo-González-mir'))
                ;
                $this->addReference("City-El-Clavo-mir", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Capaya')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
               ->setParish($this->getReference('Parish-Capaya-mir'))
                ;
                $this->addReference("City-Capaya-mir", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('El Café')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
               ->setParish($this->getReference('Parish-El-Café-mir'))
                ;
                $this->addReference("City-El-Café-mir", $city);
                $manager->persist($city);               
                
        $city = new City();
        $city
                ->setDescription('Marizapa')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
               ->setParish($this->getReference('Parish-Marizapa-mir'))
                ;
                $this->addReference("City-Marizapa-mir", $city);
                $manager->persist($city);               
                
        $city = new City();
        $city
                ->setDescription('Panaquire')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
               ->setParish($this->getReference('Parish-Panaquire-mir'))
                ;
                $this->addReference("City-Panaquire-mir", $city);
                $manager->persist($city);               
                       
                
        $city = new City();
        $city
                ->setDescription('Tapipa')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Acevedo-mir'))
               ->setParish($this->getReference('Parish-Ribas-mir'))
                ;
                $this->addReference("City-Tapipa-mir", $city);
                $manager->persist($city);               
                               
        $city = new City();
        $city
                ->setDescription('San José de Barlovento')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Andres-Bello-mir'))
               ->setParish($this->getReference('Parish-San-José-de-Barlovento-mir'))
                ;
                $this->addReference("City-San-José-de-Barlovento-mir", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Cumbo')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Andres-Bello-mir'))
               ->setParish($this->getReference('Parish-Cumbo-mir'))
                ;
                $this->addReference("City-Cumbo-mir", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('Nuestra Señora del Rosario de Baruta')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Baruta-mir'))
               ->setParish($this->getReference('Parish-Baruta-mir'))
                ;
                $this->addReference("City-Nuestra-Señora-del-Rosario-de-Baruta-mir", $city);
                $manager->persist($city);          
                               
        $city = new City();
        $city
                ->setDescription('El Cafetal')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Baruta-mir'))
               ->setParish($this->getReference('Parish-El-Cafetal-mir'))
                ;
                $this->addReference("City-El-Cafetal-mir", $city);
                $manager->persist($city);          
                                       
        $city = new City();
        $city
                ->setDescription('Las Minas de Baruta')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Baruta-mir'))
               ->setParish($this->getReference('Parish-Las-Minas-mir'))
                ;
                $this->addReference("City-Las-Minas-de-Baruta-mir", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Higuerote')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Brion-mir'))
               ->setParish($this->getReference('Parish-Higuerote-mir'))
                ;
                $this->addReference("City-Higuerote-mir", $city);
                $manager->persist($city);              
                        
        $city = new City();
        $city
                ->setDescription('Curiepe')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Brion-mir'))
               ->setParish($this->getReference('Parish-Curiepe-mir'))
                ;
                $this->addReference("City-Curiepe-mir", $city);
                $manager->persist($city);              
                                
        $city = new City();
        $city
                ->setDescription('Tacarigua de Mamporal')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Brion-mir'))
               ->setParish($this->getReference('Parish-Tacarigua-mir'))
                ;
                $this->addReference("City-Tacarigua-de-Mamporal-mir", $city);
                $manager->persist($city);              
                                        
        $city = new City();
        $city
                ->setDescription('Mamporal')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Buroz-mir'))
               ->setParish($this->getReference('Parish-Mamporal-mir'))
                ;
                $this->addReference("City-Mamporal-mir", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Chacao')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Chacao-mir'))
               ->setParish($this->getReference('Parish-Chacao-mir'))
                ;
                $this->addReference("City-Chacao-mir", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Charallave')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Cristobal-Rojas-mir'))
               ->setParish($this->getReference('Parish-Charallave-mir'))
                ;
                $this->addReference("City-Charallave-mir", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Las Brisas')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Cristobal-Rojas-mir'))
               ->setParish($this->getReference('Parish-Las-Brisas-mir'))
                ;
                $this->addReference("City-Las-Brisas-mir", $city);
                $manager->persist($city);            
                                
        $city = new City();
        $city
                ->setDescription('El Hatillo')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-El-Hatillo-mir'))
               ->setParish($this->getReference('Parish-El-Hatillo-mir'))
                ;
                $this->addReference("City-El-Hatillo-mir", $city);
                $manager->persist($city);            
                                        
        $city = new City();
        $city
                ->setDescription('Los Teques')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
               ->setParish($this->getReference('Parish-Los-Teques-mir'))
                ;
                $this->addReference("City-Los-Teques-mir", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Altagracia de la Montaña')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
               ->setParish($this->getReference('Parish-Altagracia-de-la-Montaña-mir'))
                ;
                $this->addReference("City-Altagracia-de-la-Montaña-mir", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('San Diego')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
               ->setParish($this->getReference('Parish-Cecilio-Acosta-mir'))
                ;
                $this->addReference("City-San-Diego-mir", $city);
                $manager->persist($city);          
                                
        $city = new City();
        $city
                ->setDescription('El Jarillo')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
               ->setParish($this->getReference('Parish-El-Jarillo-mir'))
                ;
                $this->addReference("City-El-Jarillo-mir", $city);
                $manager->persist($city);          
                                        
        $city = new City();
        $city
                ->setDescription('Paracotos')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
               ->setParish($this->getReference('Parish-Paracotos-mir'))
                ;
                $this->addReference("City-Paracotos-mir", $city);
                $manager->persist($city);          
                                                
        $city = new City();
        $city
                ->setDescription('San Pedro')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
               ->setParish($this->getReference('Parish-San-Pedro-mir'))
                ;
                $this->addReference("City-San-Pedro-mir", $city);
                $manager->persist($city);          
                                                   
                
        $city = new City();
        $city
                ->setDescription('Tácata')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Guaicaipuro-mir'))
               ->setParish($this->getReference('Parish-Tácata-mir'))
                ;
                $this->addReference("City-Tácata-mir", $city);
                $manager->persist($city);          
                                                  
                
        $city = new City();
        $city
                ->setDescription('Santa Teresa del Tuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Independencia-mir'))
               ->setParish($this->getReference('Parish-Santa-Teresa-del-Tuy-mir'))
                ;
                $this->addReference("City-Santa-Teresa-del-Tuy-mir", $city);
                $manager->persist($city);            
        
        $city = new City();
        $city
                ->setDescription('El Cartanal')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Independencia-mir'))
               ->setParish($this->getReference('Parish-El-Cartanal-mir'))
                ;
                $this->addReference("City-El-Cartanal-mir", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Ocumare del Tuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Tomas-Lander-mir'))
               ->setParish($this->getReference('Parish-Ocumare-del-Tuy-mir'))
                ;
                $this->addReference("City-Ocumare-del-Tuy-mir", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('La Democracia')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Tomas-Lander-mir'))
               ->setParish($this->getReference('Parish-La-Democracia-mir'))
                ;
                $this->addReference("City-La-Democracia-mir", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Santa Bárbara')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Tomas-Lander-mir'))
               ->setParish($this->getReference('Parish-Santa-Bárbara-mir'))
                ;
                $this->addReference("City-Santa-Bárbara-mir", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('San Antonio de Los Altos')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Los-Salias-mir'))
               ->setParish($this->getReference('Parish-San-Antonio-de-los-Altos-mir'))
                ;
                $this->addReference("City-San-Antonio-de-Los-Altos-mir", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Río Chico')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Paez-mir'))
               ->setParish($this->getReference('Parish-RíoChico-mir'))
                ;
                $this->addReference("City-Río-Chico-mir", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('El Guapo')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Paez-mir'))
               ->setParish($this->getReference('Parish-El-Guapo-mir'))
                ;
                $this->addReference("City-El-Guapo-mir", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Tacarigua de La Laguna')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Paez-mir'))
               ->setParish($this->getReference('Parish-Tacarigua-de-La-Laguna-mir'))
                ;
                $this->addReference("City-Tacarigua-de-La-Laguna-mir", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Paparo')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Paez-mir'))
               ->setParish($this->getReference('Parish-Paparo-mir'))
                ;
                $this->addReference("City-Paparo-mir", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('San Fernando del Guapo')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Paez-mir'))
               ->setParish($this->getReference('Parish-San-Fernando-del-Guapo-mir'))
                ;
                $this->addReference("City-San-Fernando-del-Guapo-mir", $city);
                $manager->persist($city);             
                        
        $city = new City();
        $city
                ->setDescription('Santa Lucía')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Paz-Castillo-mir'))
               ->setParish($this->getReference('Parish-Santa-Lucía-del-Tuy-mir'))
                ;
                $this->addReference("City-Santa-Lucía-mir", $city);
                $manager->persist($city);             
                               
        $city = new City();
        $city
                ->setDescription('Cúpira')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Pedro-Gual-mir'))
               ->setParish($this->getReference('Parish-Cúpira-mir'))
                ;
                $this->addReference("City-Cúpira-mir", $city);
                $manager->persist($city);             
                                       
        $city = new City();
        $city
                ->setDescription('Machurucuto')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Pedro-Gual-mir'))
               ->setParish($this->getReference('Parish-Machurucuto-mir'))
                ;
                $this->addReference("City-Machurucuto-mir", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Guarenas')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Plaza-mir'))
               ->setParish($this->getReference('Parish-Guarenas-mir'))
                ;
                $this->addReference("City-Guarenas-mir", $city);
                $manager->persist($city);         
                        
        $city = new City();
        $city
                ->setDescription('San Francisco de Yare')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Simon-Bolivar-mir'))
               ->setParish($this->getReference('Parish-San-Francisco-de-Yare-mir'))
                ;
                $this->addReference("City-San-Francisco-de-Yare-mir", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('San Antonio de Yare')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Simon-Bolivar-mir'))
               ->setParish($this->getReference('Parish-San-Antonio-de-Yare-mir'))
                ;
                $this->addReference("City-San-Antonio-de-Yare-mir", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Petare')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Sucre-mir'))
               ->setParish($this->getReference('Parish-Petare-mir'))
                ;
                $this->addReference("City-Petare-mir", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Caucagüita')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Sucre-mir'))
               ->setParish($this->getReference('Parish-Caucaguita-mir'))
                ;
                $this->addReference("City-Caucagüita-mir", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Fila de Mariche')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Sucre-mir'))
               ->setParish($this->getReference('Parish-Filas-de-Mariches-mir'))
                ;
                $this->addReference("City-Fila-de-Mariche-mir", $city);
                $manager->persist($city);                      
                
                
        $city = new City();
        $city
                ->setDescription('La Dolorita')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Sucre-mir'))
               ->setParish($this->getReference('Parish-La-Dolorita-mir'))
                ;
                $this->addReference("City-La-Dolorita-mir", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Los Dos Caminos')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Sucre-mir'))
               ->setParish($this->getReference('Parish-Leoncio-Martínez-mir'))
                ;
                $this->addReference("City-Los-Dos-Caminos-mir", $city);
                $manager->persist($city);         
                       
        $city = new City();
        $city
                ->setDescription('Cúa')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-mir'))
               ->setParish($this->getReference('Parish-Cúa-mir'))
                ;
                $this->addReference("City-Cúa-mir", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Nueva Cúa')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-mir'))
               ->setParish($this->getReference('Parish-Nueva-Cúa-mir'))
                ;
                $this->addReference("City-Nueva-Cúa-mir", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Guatire')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Zamora-mir'))
               ->setParish($this->getReference('Parish-Guatire-mir'))
                ;
                $this->addReference("City-Guatire-mir", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Araira')
                ->setCapital(false)
                ->setState($this->getReference('State-Miranda'))
                ->setMunicipality($this->getReference('Municipality-Zamora-mir'))
               ->setParish($this->getReference('Parish-Bolívar-mir'))
                ;
                $this->addReference("City-Araira-mir", $city);
                $manager->persist($city);           
                
        //CIUDADES DEL ESTADO MONAGAS
                
        $city = new City();
        $city
                ->setDescription('San Antonio')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ->setMunicipality($this->getReference('Municipality-Acosta-mon'))
               ->setParish($this->getReference('Parish-San-Antonio-mon'))
                ;
                $this->addReference("City-San-Antonio-mon", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('San Francisco')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
                ->setMunicipality($this->getReference('Municipality-Acosta-mon'))
               ->setParish($this->getReference('Parish-San-Francisco-mon'))
                ;
                $this->addReference("City-San-Francisco-mon", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Aguasay')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Aguasay-mon'))
               //->setParish($this->getReference('nO TIENE'))
                ;
                $this->addReference("City-Aguasay-mon", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('Caripito')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Bolivar-mon'))
               //->setParish($this->getReference('nO TIENE'))
                ;
                $this->addReference("City-Caripito-mon", $city);
                $manager->persist($city);          
                                
        $city = new City();
        $city
                ->setDescription('Caripe')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
               ->setParish($this->getReference('Parish-Caripe-mon'))
                ;
                $this->addReference("City-Caripe-mon", $city);
                $manager->persist($city);          
                                        
        $city = new City();
        $city
                ->setDescription('El Guácharo')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
               ->setParish($this->getReference('Parish-El-Guacharo-mon'))
                ;
                $this->addReference("City-El-Guácharo-mon", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('La Guanota')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
               ->setParish($this->getReference('Parish-La-Guanota-mon'))
                ;
                $this->addReference("City-La-Guanota-mon", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Sabana de Piedra')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
               ->setParish($this->getReference('Parish-Sabana-de-Piedra-mon'))
                ;
                $this->addReference("City-Sabana-de-Piedra-mon", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('San Agustín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
               ->setParish($this->getReference('Parish-San-Agustín-mon'))
                ;
                $this->addReference("City-San-Agustín-mon", $city);
                $manager->persist($city);
                
        $city = new City();
        $city
                ->setDescription('Teresén')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Caripe-mon'))
               ->setParish($this->getReference('Parish-Teresen-mon'))
                ;
                $this->addReference("City-Teresén-mon", $city);
                $manager->persist($city);                    
                
        $city = new City();
        $city
                ->setDescription('Caicara')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Cedeño-mon'))
               ->setParish($this->getReference('Parish-Caicara-mon'))
                ;
                $this->addReference("City-Caicara-mon", $city);
                $manager->persist($city);                 
                
        $city = new City();
        $city
                ->setDescription('Areo')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Cedeño-mon'))
               ->setParish($this->getReference('Parish-Areo-mon'))
                ;
                $this->addReference("City-Areo-mon", $city);
                $manager->persist($city);                 
                        
        $city = new City();
        $city
                ->setDescription('San Félix')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Cedeño-mon'))
               ->setParish($this->getReference('Parish-San-Félix-mon'))
                ;
                $this->addReference("City-San-Félix-mon", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Viento Fresco')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Cedeño-mon'))
               ->setParish($this->getReference('Parish-Viento-Freco-mon'))
                ;
                $this->addReference("City-Viento-Fresco-mon", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Punta de Mata')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-mon'))
               ->setParish($this->getReference('Parish-Punta-de-Mata-mon'))
                ;
                $this->addReference("City-Punta-de-Mata-mon", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('El Tejero')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Ezequiel-Zamora-mon'))
               ->setParish($this->getReference('Parish-El-Tejero-mon'))
                ;
                $this->addReference("City-El-Tejero-mon", $city);
                $manager->persist($city);             
                        
        $city = new City();
        $city
                ->setDescription('Temblador')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Libertador-mon'))
               ->setParish($this->getReference('Parish-Temblador-mon'))
                ;
                $this->addReference("City-Temblador-mon", $city);
                $manager->persist($city);             
                                
        $city = new City();
        $city
                ->setDescription('Chaguaramas')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Libertador-mon'))
               ->setParish($this->getReference('Parish-Chaguaramas-mon'))
                ;
                $this->addReference("City-Chaguaramas-mon", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Las Alhuacas')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Libertador-mon'))
               ->setParish($this->getReference('Parish-Las-Alhuacas-mon'))
                ;
                $this->addReference("City-Las-Alhuacas-mon", $city);
                $manager->persist($city);            
                        
        $city = new City();
        $city
                ->setDescription('Tabasca')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Libertador-mon'))
               ->setParish($this->getReference('Parish-Tabasca-mon'))
                ;
                $this->addReference("City-Tabasca-mon", $city);
                $manager->persist($city);            
                                
        $city = new City();
        $city
                ->setDescription('Maturín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
               ->setParish($this->getReference('Parish-Maturin-mon'))
                ;
                $this->addReference("City-Maturín-mon", $city);
                $manager->persist($city);            
                                        
        $city = new City();
        $city
                ->setDescription('Maturín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
               ->setParish($this->getReference('Parish-Alto-de-Los-Godos-mon'))
                ;
                $this->addReference("City-Maturín-ag-mon", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Maturín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
               ->setParish($this->getReference('Parish-Boquerón-mon'))
                ;
                $this->addReference("City-Maturín-bq-mon", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('Maturín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
               ->setParish($this->getReference('Parish-Las-Cocuizas-mon'))
                ;
                $this->addReference("City-Maturín-lc-mon", $city);
                $manager->persist($city);          
                                
        $city = new City();
        $city
                ->setDescription('Maturín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
               ->setParish($this->getReference('Parish-San-Simón-mon'))
                ;
                $this->addReference("City-Maturín-ss-mon", $city);
                $manager->persist($city);          
                                        
        $city = new City();
        $city
                ->setDescription('Maturín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
               ->setParish($this->getReference('Parish-Santa-Cruz-mon'))
                ;
                $this->addReference("City-Maturín-sc-mon", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('El Corozo')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
               ->setParish($this->getReference('Parish-El-Corozo-mon'))
                ;
                $this->addReference("City-El-Corozo-mon", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('El Furrial')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
               ->setParish($this->getReference('Parish-El-Furrial-mon'))
                ;
                $this->addReference("City-El-Furrial-mon", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Jusepín')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
               ->setParish($this->getReference('Parish-Jusepín-mon'))
                ;
                $this->addReference("City-Jusepín-mon", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('La Pica')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
               ->setParish($this->getReference('Parish-La-Pica-mon'))
                ;
                $this->addReference("City-La-Pica-mon", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('San Vicente')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Maturin-mon'))
               ->setParish($this->getReference('Parish-San-Vicente-mon'))
                ;
                $this->addReference("City-San-Vicente-mon", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Aragua')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Piar-mon'))
               ->setParish($this->getReference('Parish-Aragua-mon'))
                ;
                $this->addReference("City-Aragua-mon", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('Aparicio')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Piar-mon'))
               ->setParish($this->getReference('Parish-Aparicio-mon'))
                ;
                $this->addReference("City-Aparicio-mon", $city);
                $manager->persist($city);           
                                
        $city = new City();
        $city
                ->setDescription('Chaguaramal')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Piar-mon'))
               ->setParish($this->getReference('Parish-Chaguaramal-mon'))
                ;
                $this->addReference("City-Chaguaramal-mon", $city);
                $manager->persist($city);           
                                        
        $city = new City();
        $city
                ->setDescription('El Pinto')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Piar-mon'))
               ->setParish($this->getReference('Parish-El-Pinto-mon'))
                ;
                $this->addReference("City-El-Pinto-mon", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Guanaguana')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Piar-mon'))
               ->setParish($this->getReference('Parish-Guanaguana-mon'))
                ;
                $this->addReference("City-Guanaguana-mon", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('La Toscana')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Piar-mon'))
               ->setParish($this->getReference('Parish-La-Toscana-mon'))
                ;
                $this->addReference("City-La-Toscana-mon", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('Taguaya')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Piar-mon'))
               ->setParish($this->getReference('Parish-Taguaya-mon'))
                ;
                $this->addReference("City-Taguaya-mon", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Quiriquire')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Punceres-mon'))
               ->setParish($this->getReference('Parish-Quiriquire-mon'))
                ;
                $this->addReference("City-Quiriquire-mon", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Cachipo')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Punceres-mon'))
               ->setParish($this->getReference('Parish-Cachipo-mon'))
                ;
                $this->addReference("City-Cachipo-mon", $city);
                $manager->persist($city);              
                        
                
        $city = new City();
        $city
                ->setDescription('Santa Bárbara')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Santa-Barbara-mon'))
               ->setParish($this->getReference('Parish-Santa-Bárbara-mon'))
                ;
                $this->addReference("City-Santa-Bárbara-mon", $city);
                $manager->persist($city);              
                                
                
        $city = new City();
        $city
                ->setDescription('Barrancas')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Sotillo-mon'))
               ->setParish($this->getReference('Parish-Barrancas-mon'))
                ;
                $this->addReference("City-Barrancas-mon", $city);
                $manager->persist($city);              
                                        
        $city = new City();
        $city
                ->setDescription('Los Barrancos de Fajardo')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Sotillo-mon'))
               ->setParish($this->getReference('Parish-Los-Barrancos-de-Fajardo-mon'))
                ;
                $this->addReference("City-Los-Barrancos-de-Fajardo-mon", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Uracoa')
                ->setCapital(false)
                ->setState($this->getReference('State-Monagas'))
               ->setMunicipality($this->getReference('Municipality-Uracoa-mon'))
               ->setParish($this->getReference('Parish-Uracoa-mon'))
                ;
                $this->addReference("City-Uracoa-mon", $city);
                $manager->persist($city);         
                
                
        //ciudades del estado nueva esparta
                
                
        $city = new City();
        $city
                ->setDescription('La Plaza de Paraguachí')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Antolin-del-Campo-nesp'))
               ->setParish($this->getReference('Parish-Antolín-del-Campo-nesp'))
                ;
                $this->addReference("City-La-Plaza-de-Paraguachí-nesp", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('La Asunción')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Arismendi-nesp'))
              // ->setParish($this->getReference('Parish-Antolín-del-Campo-nesp'))
                ;
                $this->addReference("City-La-Asunción-nesp", $city);
                $manager->persist($city);            
                        
        $city = new City();
        $city
                ->setDescription('San Juan Bautista')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Diaz-nesp'))
                ->setParish($this->getReference('Parish-San-Juan-Bautista-nesp'))
                ;
                $this->addReference("City-San-Juan-Bautista-nesp", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('La Guardia')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Diaz-nesp'))
                ->setParish($this->getReference('Parish-Zabala-nesp'))
                ;
                $this->addReference("City-La-Guardia-nesp", $city);
                $manager->persist($city);   
                
        $city = new City();
        $city
                ->setDescription('El Valle del Espíritu Santo')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Garcia-nesp'))
                ->setParish($this->getReference('Parish-El-Valle-nesp'))
                ;
                $this->addReference("City-El-Valle-del-Espíritu-Santo-nesp", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Villa Rosa')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Garcia-nesp'))
                ->setParish($this->getReference('Parish-Francisco-Fajardo-nesp'))
                ;
                $this->addReference("City-Villa-Rosa-nesp", $city);
                $manager->persist($city);        
                
        $city = new City();
        $city
                ->setDescription('Santa Ana')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Gomez-nesp'))
                ->setParish($this->getReference('Parish-Santa-Ana-nesp'))
                ;
                $this->addReference("City-Santa-Ana-nesp", $city);
                $manager->persist($city);        
                       
        $city = new City();
        $city
                ->setDescription('El Maco')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Gomez-nesp'))
                ->setParish($this->getReference('Parish-Bolívar-nesp'))
                ;
                $this->addReference("City-El-Maco-nesp", $city);
                $manager->persist($city);        
                       
        $city = new City();
        $city
                ->setDescription('Tacarigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Gomez-nesp'))
                ->setParish($this->getReference('Parish-Guevara-nesp'))
                ;
                $this->addReference("City-Tacarigua-nesp", $city);
                $manager->persist($city);                     
                
                
        $city = new City();
        $city
                ->setDescription('Pedro González')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Gomez-nesp'))
                ->setParish($this->getReference('Parish-Matasiete-nesp'))
                ;
                $this->addReference("City-Pedro-González-nesp", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Altagracia')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Gomez-nesp'))
                ->setParish($this->getReference('Parish-Sucre-nesp'))
                ;
                $this->addReference("City-Altagracia-nesp", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Pampatar')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Maneiro-nesp'))
                ->setParish($this->getReference('Parish-Pampatar-nesp'))
                ;
                $this->addReference("City-Pampatar-nesp", $city);
                $manager->persist($city);            
                        
        $city = new City();
        $city
                ->setDescription('El Pilar')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Maneiro-nesp'))
                ->setParish($this->getReference('Parish-Aguirre-nesp'))
                ;
                $this->addReference("City-El-Pilar-nesp", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('Juangriego')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Marcano-nesp'))
                ->setParish($this->getReference('Parish-Juan-Griego-nesp'))
                ;
                $this->addReference("City-Juangriego-nesp", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Los Millanes')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Marcano-nesp'))
                ->setParish($this->getReference('Parish-Adrián-nesp'))
                ;
                $this->addReference("City-Los-Millanes-nesp", $city);
                $manager->persist($city);            
                       
        $city = new City();
        $city
                ->setDescription('Porlamar')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Mariño-nesp'))
              //  ->setParish($this->getReference('Parish-Adrián-nesp'))
                ;
                $this->addReference("City-Porlamar-nesp", $city);
                $manager->persist($city);            
                               
        $city = new City();
        $city
                ->setDescription('Boca de Río')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Peninsula-de-Macanao-nesp'))
                ->setParish($this->getReference('Parish-Boca-del-Río-nesp'))
                ;
                $this->addReference("City-Boca-de-Río-nesp", $city);
                $manager->persist($city);            
                                      
        $city = new City();
        $city
                ->setDescription('Boca de Pozo')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Peninsula-de-Macanao-nesp'))
                ->setParish($this->getReference('Parish-San-Francisco-nesp'))
                ;
                $this->addReference("City-Boca-de-Pozo-nesp", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Punta de Piedras')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Tubores-nesp'))
                ->setParish($this->getReference('Parish-Punta-de-Piedras-nesp'))
                ;
                $this->addReference("City-Punta-de-Piedras-nesp", $city);
                $manager->persist($city);   
                
        $city = new City();
        $city
                ->setDescription('El Guamache')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Tubores-nesp'))
                ->setParish($this->getReference('Parish-Los-Barales-nesp'))
                ;
                $this->addReference("City-El-Guamache-nesp", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('San Pedro de Coche')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Villalba-nesp'))
                ->setParish($this->getReference('Parish-San-Pedro-de-Coche-nesp'))
                ;
                $this->addReference("City-San-Pedro-de-Coche-nesp", $city);
                $manager->persist($city);          
                                
        $city = new City();
        $city
                ->setDescription('Güinima')
                ->setCapital(false)
                ->setState($this->getReference('State-Nueva-Esparta'))
               ->setMunicipality($this->getReference('Municipality-Villalba-nesp'))
                ->setParish($this->getReference('Parish-Vicente-Fuentes-nesp'))
                ;
                $this->addReference("City-Güinima-nesp", $city);
                $manager->persist($city);          
                                       
                
      //ciudades del estado portuguesa
                
                
        $city = new City();
        $city
                ->setDescription('Agua Blanca')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Agua-Blanca-por'))
                ->setParish($this->getReference('Parish-Agua-Blanca-por'))
                ;
                $this->addReference("City-Agua-Blanca-por", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Araure')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Araure-por'))
                ->setParish($this->getReference('Parish-Araure-por'))
                ;
                $this->addReference("City-Araure-por", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Río Acarigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Araure-por'))
                ->setParish($this->getReference('Parish-Río-Acarigua-por'))
                ;
                $this->addReference("City-Río-Acarigua-por", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('Píritu')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Esteller-por'))
                ->setParish($this->getReference('Parish-Píritu-por'))
                ;
                $this->addReference("City-Píritu-por", $city);
                $manager->persist($city);                
                        
                
        $city = new City();
        $city
                ->setDescription('Uveral')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Esteller-por'))
                ->setParish($this->getReference('Parish-Uveral-por'))
                ;
                $this->addReference("City-Uveral-por", $city);
                $manager->persist($city);        
                
        $city = new City();
        $city
                ->setDescription('Guanare')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Guanare-por'))
                ->setParish($this->getReference('Parish-Guanare-por'))
                ;
                $this->addReference("City-Guanare-por", $city);
                $manager->persist($city);        
                        
        $city = new City();
        $city
                ->setDescription('Córdoba')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Guanare-por'))
                ->setParish($this->getReference('Parish-Cordova-por'))
                ;
                $this->addReference("City-Córdoba-por", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('San José de la Montaña')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Guanare-por'))
                ->setParish($this->getReference('Parish-San-José-de-la-Montaña-por'))
                ;
                $this->addReference("City-San-José-de-la-Montaña-por", $city);
                $manager->persist($city);                     
                
        $city = new City();
        $city
                ->setDescription('Mesa de Cavacas')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Guanare-por'))
                ->setParish($this->getReference('Parish-San-Juan-de-Guanaguanare-por'))
                ;
                $this->addReference("City-Mesa-de-Cavacas-por", $city);
                $manager->persist($city);                     
                        
                
        $city = new City();
        $city
                ->setDescription('Quebrada de la Virgen')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Guanare-por'))
                ->setParish($this->getReference('Parish-Virgen-de-Coromoto-por'))
                ;
                $this->addReference("City-Quebrada-de-la-Virgen-por", $city);
                $manager->persist($city);                     
                        
                        
        $city = new City();
        $city
                ->setDescription('Guanarito')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Guanarito-por'))
                ->setParish($this->getReference('Parish-Guanarito-por'))
                ;
                $this->addReference("City-Guanarito-por", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Trinidad de la Capilla')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Guanarito-por'))
                ->setParish($this->getReference('Parish-Trinidad-de-la-Capilla-por'))
                ;
                $this->addReference("City-Trinidad-de-la-Capilla-por", $city);
                $manager->persist($city);           
                         
        $city = new City();
        $city
                ->setDescription('Morrones')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Guanarito-por'))
                ->setParish($this->getReference('Parish-La-Divina-Pastora-por'))
                ;
                $this->addReference("City-Morrones-por", $city);
                $manager->persist($city);           
                                 
        $city = new City();
        $city
                ->setDescription('Paraíso de Chabasquén')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Monseñor-por'))
                ->setParish($this->getReference('Parish-Monseñor-por'))
                ;
                $this->addReference("City-Paraíso-de-Chabasquén-por", $city);
                $manager->persist($city);           
                                        
        $city = new City();
        $city
                ->setDescription('Peña Blanca')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Monseñor-por'))
                ->setParish($this->getReference('Parish-Peña-Blanca-por'))
                ;
                $this->addReference("City-Peña-Blanca-por", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Ospino')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Ospino-por'))
                ->setParish($this->getReference('Parish-Ospino-por'))
                ;
                $this->addReference("City-Ospino-por", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('La Aparición')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Ospino-por'))
                ->setParish($this->getReference('Parish-Aparición-por'))
                ;
                $this->addReference("City-La-Aparición-por", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('La Estación')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Ospino-por'))
                ->setParish($this->getReference('Parish-La-Estación-por'))
                ;
                $this->addReference("City-La-Estación-por", $city);
                $manager->persist($city);            
                        
        $city = new City();
        $city
                ->setDescription('Acarigua')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Paez-por'))
                ->setParish($this->getReference('Parish-Acarigua-por'))
                ;
                $this->addReference("City-Acarigua-por", $city);
                $manager->persist($city);            
                                
        $city = new City();
        $city
                ->setDescription('Payara')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Paez-por'))
                ->setParish($this->getReference('Parish-Payara-por'))
                ;
                $this->addReference("City-Payara-por", $city);
                $manager->persist($city);            
                                       
                
        $city = new City();
        $city
                ->setDescription('Pimpinela')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Paez-por'))
                ->setParish($this->getReference('Parish-Pimpinela-por'))
                ;
                $this->addReference("City-Pimpinela-por", $city);
                $manager->persist($city);            
                                               
        $city = new City();
        $city
                ->setDescription('Mijagüito')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Paez-por'))
                ->setParish($this->getReference('Parish-Ramón-Peraza-por'))
                ;
                $this->addReference("City-Mijagüito-por", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Papelón')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Papelon-por'))
                ->setParish($this->getReference('Parish-Papelón-por'))
                ;
                $this->addReference("City-Papelón-por", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Caño Delgadito')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Papelon-por'))
                ->setParish($this->getReference('Parish-Caño-Delgadito-por'))
                ;
                $this->addReference("City-Caño-Delgadito-por", $city);
                $manager->persist($city);                   
                
                
        $city = new City();
        $city
                ->setDescription('Boconoito')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-San-Genaro-de-Boconoito-por'))
                ->setParish($this->getReference('Parish-Boconoíto-por'))
                ;
                $this->addReference("City-Boconoito-por", $city);
                $manager->persist($city);                   
                        
                
        $city = new City();
        $city
                ->setDescription('San Nicolás')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-San-Genaro-de-Boconoito-por'))
                ->setParish($this->getReference('Parish-Antolín-Tovar-Aquino-por'))
                ;
                $this->addReference("City-San-Nicolás-por", $city);
                $manager->persist($city);                   
                                
        $city = new City();
        $city
                ->setDescription('San Rafael de Onoto')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Onoto-por'))
                ->setParish($this->getReference('Parish-San-Rafael-de-Onoto-por'))
                ;
                $this->addReference("City-San-Rafael-de-Onoto-por", $city);
                $manager->persist($city);                   
                                        
                
        $city = new City();
        $city
                ->setDescription('Santa Fe')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Onoto-por'))
                ->setParish($this->getReference('Parish-Santa-Fe-por'))
                ;
                $this->addReference("City-Santa-Fe-por", $city);
                $manager->persist($city);                   
                                                
                
        $city = new City();
        $city
                ->setDescription('El Algarrobito')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Onoto-por'))
                ->setParish($this->getReference('Parish-Thermo-Morles-por'))
                ;
                $this->addReference("City-El-Algarrobito-por", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('El Playón')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Santa-Rosalia-por'))
                ->setParish($this->getReference('Parish-El-Playón-por'))
                ;
                $this->addReference("City-El-Playón-por", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Nueva Florida')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Santa-Rosalia-por'))
                ->setParish($this->getReference('Parish-Florida-por'))
                ;
                $this->addReference("City-Nueva-Florida-por", $city);
                $manager->persist($city);           
                      
        $city = new City();
        $city
                ->setDescription('Biscucuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                ->setParish($this->getReference('Parish-Biscucuy-por'))
                ;
                $this->addReference("City-Biscucuy-por", $city);
                $manager->persist($city);               
                
        $city = new City();
        $city
                ->setDescription('La Concepción')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                ->setParish($this->getReference('Parish-Concepción-por'))
                ;
                $this->addReference("City-La-Concepción-por", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('San Rafael de Palo Alzado')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                ->setParish($this->getReference('Parish-San-Rafael-de-Palo-Alzado-por'))
                ;
                $this->addReference("City-San-Rafael-de-Palo-Alzado-por", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Las Cruces')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                ->setParish($this->getReference('Parish-Uvencio-Antonio-Velásquez-por'))
                ;
                $this->addReference("City-Las-Cruces-por", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('San José de Saguaz')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                ->setParish($this->getReference('Parish-San-José-de-Saguaz-por'))
                ;
                $this->addReference("City-San-José-de-Saguaz-por", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Villa Rosa')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Sucre-por'))
                ->setParish($this->getReference('Parish-Villa-Rosa-por'))
                ;
                $this->addReference("City-Villa-Rosa-por", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Villa Bruzual')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Turen-por'))
                ->setParish($this->getReference('Parish-Villa Bruzual-por'))
                ;
                $this->addReference("City-Villa-Bruzual-por", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('La Misión')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Turen-por'))
                ->setParish($this->getReference('Parish-Canelones-por'))
                ;
                $this->addReference("City-La-Misión-por", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Santa Cruz')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Turen-por'))
                ->setParish($this->getReference('Parish-Santa-Cruz-por'))
                ;
                $this->addReference("City-Santa-Cruz-por", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Colonia Turén')
                ->setCapital(false)
                ->setState($this->getReference('State-Portuguesa'))
               ->setMunicipality($this->getReference('Municipality-Turen-por'))
                ->setParish($this->getReference('Parish-San-Isidro-Labrador-por'))
                ;
                $this->addReference("City-Colonia-Turén-por", $city);
                $manager->persist($city);                     
                
          //ciudades del estado sucre
                
        $city = new City();
        $city
                ->setDescription('Casanay')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-suc'))
                ->setParish($this->getReference('Parish-Mariño-suc'))
                ;
                $this->addReference("City-Casanay-suc", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('San Vicente')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Andres-Eloy-Blanco-suc'))
                ->setParish($this->getReference('Parish-Rómulo-Gallegos-suc'))
                ;
                $this->addReference("City-San-Vicente-suc", $city);
                $manager->persist($city);            
                        
                
        $city = new City();
        $city
                ->setDescription('San José de Aerocuar')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Andres-Mata-suc'))
                ->setParish($this->getReference('Parish-San-José-de-Aerocuar-suc'))
                ;
                $this->addReference("City-San-José-de-Aerocuar-suc", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Río Caribe')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Arismendi-suc'))
                ->setParish($this->getReference('Parish-Río-Caribe-suc'))
                ;
                $this->addReference("City-Río-Caribe-suc", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('San Juan de Unare')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Arismendi-suc'))
                ->setParish($this->getReference('Parish-Sucre-suc'))
                ;
                $this->addReference("City-San-Juan-de-Unare-suc", $city);
                $manager->persist($city);         
                        
        $city = new City();
        $city
                ->setDescription('El Morro de Puerto Santo')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Arismendi-suc'))
                ->setParish($this->getReference('Parish-El-Morro-suc'))
                ;
                $this->addReference("City-El-Morro-de-Puerto-Santo-suc", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Puerto Santo')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Arismendi-suc'))
                ->setParish($this->getReference('Parish-Puerto-Santo-suc'))
                ;
                $this->addReference("City-Puerto-Santo-suc", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('San Juan de Las Galdonas')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Arismendi-suc'))
                ->setParish($this->getReference('Parish-San-Juan-de-las-Galdonas-suc'))
                ;
                $this->addReference("City-San-Juan-de-Las-Galdonas-suc", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('El Pilar')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                ->setParish($this->getReference('Parish-El-Pilar-suc'))
                ;
                $this->addReference("City-El-Pilar-suc", $city);
                $manager->persist($city);        
                
                
        $city = new City();
        $city
                ->setDescription('El Rincón')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                ->setParish($this->getReference('Parish-El-Rincón-suc'))
                ;
                $this->addReference("City-El-Rincón-suc", $city);
                $manager->persist($city);        
                        
        $city = new City();
        $city
                ->setDescription('Los Arroyos')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                ->setParish($this->getReference('Parish-Francisco-Vásquez-suc'))
                ;
                $this->addReference("City-Los-Arroyos-suc", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Guaraúnos')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                ->setParish($this->getReference('Parish-Guaraunos-suc'))
                ;
                $this->addReference("City-Guaraúnos-suc", $city);
                $manager->persist($city);            
                        
        $city = new City();
        $city
                ->setDescription('Tunapuicito')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                ->setParish($this->getReference('Parish-Tunapuicito-suc'))
                ;
                $this->addReference("City-Tunapuicito-suc", $city);
                $manager->persist($city);            
                                
        $city = new City();
        $city
                ->setDescription('Guariquén')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Benítez-suc'))
                ->setParish($this->getReference('Parish-Unión-suc'))
                ;
                $this->addReference("City-Guariquén-suc", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Playa Grande')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Bermudez-suc'))
                ->setParish($this->getReference('Parish-Unión-suc'))
                ;
                $this->addReference("City-Playa-Grande-suc", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Carúpano')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Bermudez-suc'))
                ->setParish($this->getReference('Parish-Macarapana-suc'))
                ;
                $this->addReference("City-Carúpano-ma-suc", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Carúpano')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Bermudez-suc'))
                ->setParish($this->getReference('Parish-Santa-Catalina-suc'))
                ;
                $this->addReference("City-Carúpano-sc-suc", $city);
                $manager->persist($city);         
                        
        $city = new City();
        $city
                ->setDescription('Carúpano')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Bermudez-suc'))
                ->setParish($this->getReference('Parish-Santa-Rosa-suc'))
                ;
                $this->addReference("City-Carúpano-sr-suc", $city);
                $manager->persist($city);         
                                
        $city = new City();
        $city
                ->setDescription('Carúpano')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Bermudez-suc'))
                ->setParish($this->getReference('Parish-Santa-Teresa-suc'))
                ;
                $this->addReference("City-Carúpano-st-suc", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Marigüitar')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Bolivar-suc'))
                ->setParish($this->getReference('Parish-Mariguitar-suc'))
                ;
                $this->addReference("City-Marigüitar-suc", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('Yaguaraparo')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Cajigal-suc'))
                ->setParish($this->getReference('Parish-Yaguaraparo-suc'))
                ;
                $this->addReference("City-Yaguaraparo-suc", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('El Paujil')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Cajigal-suc'))
                ->setParish($this->getReference('Parish-El-Paujil-suc'))
                ;
                $this->addReference("City-El-Paujil-suc", $city);
                $manager->persist($city);             
                        
        $city = new City();
        $city
                ->setDescription('Río Seco')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Cajigal-suc'))
                ->setParish($this->getReference('Parish-Libertad-suc'))
                ;
                $this->addReference("City-Río-Seco-suc", $city);
                $manager->persist($city);             
                               
        $city = new City();
        $city
                ->setDescription('Araya')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Cruz-Salmeron-Acosta-suc'))
                ->setParish($this->getReference('Parish-Araya-suc'))
                ;
                $this->addReference("City-Araya-suc", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Chacopata')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Cruz-Salmeron-Acosta-suc'))
                ->setParish($this->getReference('Parish-Chacopata-suc'))
                ;
                $this->addReference("City-Chacopata-suc", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('Manicuare')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Cruz-Salmeron-Acosta-suc'))
                ->setParish($this->getReference('Parish-Manicuare-suc'))
                ;
                $this->addReference("City-Manicuare-suc", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Tunapuy')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Libertador-suc'))
                ->setParish($this->getReference('Parish-Tunapuy-suc'))
                ;
                $this->addReference("City-Tunapuy-suc", $city);
                $manager->persist($city);               
                        
        $city = new City();
        $city
                ->setDescription('Guayana')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Libertador-suc'))
                ->setParish($this->getReference('Parish-Campo-Elías-suc'))
                ;
                $this->addReference("City-Guayana-suc", $city);
                $manager->persist($city);               
                               
        $city = new City();
        $city
                ->setDescription('Irapa')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Mariño-suc'))
                ->setParish($this->getReference('Parish-Irapa-suc'))
                ;
                $this->addReference("City-Irapa-suc", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Campo Claro')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Mariño-suc'))
                ->setParish($this->getReference('Parish-Campo-Claro-suc'))
                ;
                $this->addReference("City-Campo-Claro-suc", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('Marabal')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Mariño-suc'))
                ->setParish($this->getReference('Parish-Marabal-suc'))
                ;
                $this->addReference("City-Marabal-suc", $city);
                $manager->persist($city);          
                                
        $city = new City();
        $city
                ->setDescription('San Antonio de Irapa')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Mariño-suc'))
                ->setParish($this->getReference('Parish-San-Antonio-de-Irapa-suc'))
                ;
                $this->addReference("City-San-Antonio-de-Irapa-suc", $city);
                $manager->persist($city);          
                                
        $city = new City();
        $city
                ->setDescription('Soro')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Mariño-suc'))
                ->setParish($this->getReference('Parish-Soro-suc'))
                ;
                $this->addReference("City-Soro-suc", $city);
                $manager->persist($city);                      
                
                
        $city = new City();
        $city
                ->setDescription('San Antonio del Golfo')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Mejia-suc'))
                ->setParish($this->getReference('Parish-Mejía-suc'))
                ;
                $this->addReference("City-San-Antonio-del-Golfo-suc", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Cumanacoa')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                ->setParish($this->getReference('Parish-Cumanacoa-suc'))
                ;
                $this->addReference("City-Cumanacoa-suc", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Arenas')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                ->setParish($this->getReference('Parish-Arenas-suc'))
                ;
                $this->addReference("City-Arenas-suc", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('Aricagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                ->setParish($this->getReference('Parish-Aricagua-suc'))
                ;
                $this->addReference("City-Aricagua-suc", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Las Piedras')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                ->setParish($this->getReference('Parish-Cocollar-suc'))
                ;
                $this->addReference("City-Las-Piedras-suc", $city);
                $manager->persist($city);               
                
        $city = new City();
        $city
                ->setDescription('Villarroel')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                ->setParish($this->getReference('Parish-San-Fernando-suc'))
                ;
                $this->addReference("City-Villarroel-suc", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('San Lorenzo')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Montes-suc'))
                ->setParish($this->getReference('Parish-San-Lorenzo-suc'))
                ;
                $this->addReference("City-San-Lorenzo-suc", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Cariaco')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Ribero-suc'))
                ->setParish($this->getReference('Parish-Cariaco-suc'))
                ;
                $this->addReference("City-Cariaco-suc", $city);
                $manager->persist($city);           
                        
        
        $city = new City();
        $city
                ->setDescription('Catuaro')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Ribero-suc'))
                ->setParish($this->getReference('Parish-Catuaro-suc'))
                ;
                $this->addReference("City-Catuaro-suc", $city);
                $manager->persist($city);           
                                 
                
        $city = new City();
        $city
                ->setDescription('Villa Frontado')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Ribero-suc'))
                ->setParish($this->getReference('Parish-Rendón-suc'))
                ;
                $this->addReference("City-Villa-Frontado-suc", $city);
                $manager->persist($city);           
                                 
                        
        $city = new City();
        $city
                ->setDescription('Santa Cruz')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Ribero-suc'))
                ->setParish($this->getReference('Parish-San-Cruz-suc'))
                ;
                $this->addReference("City-Santa-Cruz-suc", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Santa María')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Ribero-suc'))
                ->setParish($this->getReference('Parish-Santa-María-suc'))
                ;
                $this->addReference("City-Santa-María-suc", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Cumaná')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                ->setParish($this->getReference('Parish-Altagracia-suc'))
                ;
                $this->addReference("City-Cumaná-alt-suc", $city);
                $manager->persist($city);                  
                
        $city = new City();
        $city
                ->setDescription('Cumaná')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                ->setParish($this->getReference('Parish-Ayacucho-suc'))
                ;
                $this->addReference("City-Cumaná-aya-suc", $city);
                $manager->persist($city);                  
                        
        $city = new City();
        $city
                ->setDescription('Cumaná')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                ->setParish($this->getReference('Parish-Santa-Inés-suc'))
                ;
                $this->addReference("City-Cumaná-si-suc", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Caigüire')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                ->setParish($this->getReference('Parish-Valentín-Valiente-suc'))
                ;
                $this->addReference("City-Caigüire-suc", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('San Juan')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                ->setParish($this->getReference('Parish-San-Juan-suc'))
                ;
                $this->addReference("City-San-Juan-suc", $city);
                $manager->persist($city);           
                                
                
        $city = new City();
        $city
                ->setDescription('Los Puertos de Santa Fe')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                ->setParish($this->getReference('Parish-Raúl-Leoni-suc'))
                ;
                $this->addReference("City-Los-Puertos-de-Santa-Fe-suc", $city);
                $manager->persist($city);           
                                       
        $city = new City();
        $city
                ->setDescription('Los Altos de Sucre')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Sucre-suc'))
                ->setParish($this->getReference('Parish-Gran-Mariscal-suc'))
                ;
                $this->addReference("City-Los-Altos-de-Sucre-suc", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Güiria')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Valdez-suc'))
                ->setParish($this->getReference('Parish-Güiria-suc'))
                ;
                $this->addReference("City-Güiria-suc", $city);
                $manager->persist($city);         
                        
                
        $city = new City();
        $city
                ->setDescription('Rio Salado')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Valdez-suc'))
                ->setParish($this->getReference('Parish-Bideau-suc'))
                ;
                $this->addReference("City-Rio-Salado-suc", $city);
                $manager->persist($city);         
                                
        $city = new City();
        $city
                ->setDescription('Macuro')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Valdez-suc'))
                ->setParish($this->getReference('Parish-Cristóbal-Colón-suc'))
                ;
                $this->addReference("City-Macuro-suc", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Yoco')
                ->setCapital(false)
                ->setState($this->getReference('State-Sucre'))
               ->setMunicipality($this->getReference('Municipality-Valdez-suc'))
                ->setParish($this->getReference('Parish-Punta-de-Piedras-suc'))
                ;
                $this->addReference("City-Yoco-suc", $city);
                $manager->persist($city);          
                        
        //CIUDADES DEL ESTADO TACHIRA       
                
           
        $city = new City();
        $city
                ->setDescription('Cordero')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Andres-Bello-tac'))
                ->setParish($this->getReference('Parish-Andrés-Bello-tac'))
                ;
                $this->addReference("City-Cordero-tac", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Las Mesas')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Antonio-Romulo-Costa-tac'))
                ->setParish($this->getReference('Parish-Antonio-Rómulo-Costa-tac'))
                ;
                $this->addReference("City-Las-Mesas-tac", $city);
                $manager->persist($city);         
                        
        $city = new City();
        $city
                ->setDescription('Colón')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Ayacucho-tac'))
                ->setParish($this->getReference('Parish-Ayacucho-tac'))
                ;
                $this->addReference("City-Colón-tac", $city);
                $manager->persist($city);         
                                
                
        $city = new City();
        $city
                ->setDescription('San Félix')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Ayacucho-tac'))
                ->setParish($this->getReference('Parish-Rivas-Berti-tac'))
                ;
                $this->addReference("City-San-Félix-tac", $city);
                $manager->persist($city);               
                
        $city = new City();
        $city
                ->setDescription('San Pedro del Río')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Ayacucho-tac'))
                ->setParish($this->getReference('Parish-San-Pedro-del-Río-tac'))
                ;
                $this->addReference("City-San-Pedro-del-Río-tac", $city);
                $manager->persist($city);               
                        
        $city = new City();
        $city
                ->setDescription('San Antonio del Táchira')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Bolivar-tac'))
                ->setParish($this->getReference('Parish-Bolívar-tac'))
                ;
                $this->addReference("City-San-Antonio-del-Táchira-tac", $city);
                $manager->persist($city);               
                                
        $city = new City();
        $city
                ->setDescription('Palotal')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Bolivar-tac'))
                ->setParish($this->getReference('Parish-Palotal-tac'))
                ;
                $this->addReference("City-Palotal-tac", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('El Recreo')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Bolivar-tac'))
                ->setParish($this->getReference('Parish-General-Juan-Vicente-Gómez-tac'))
                ;
                $this->addReference("City-El-Recreo-tac", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Las Dantas')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Bolivar-tac'))
                ->setParish($this->getReference('Parish-Isaías-Medina-Angarita-tac'))
                ;
                $this->addReference("City-Las-Dantas-tac", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('Táriba')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Cardenas-tac'))
                ->setParish($this->getReference('Parish-Cárdenas-tac'))
                ;
                $this->addReference("City-Táriba-tac", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Palo Gordo')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Cardenas-tac'))
                ->setParish($this->getReference('Parish-Amenodoro-Rangel-Lamús-tac'))
                ;
                $this->addReference("City-Palo-Gordo-tac", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('La Florida')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Cardenas-tac'))
                ->setParish($this->getReference('Parish-La-Florida-tac'))
                ;
                $this->addReference("City-La-Florida-tac", $city);
                $manager->persist($city);            
                        
        $city = new City();
        $city
                ->setDescription('Santa Ana')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Cardenas-tac'))
             //   ->setParish($this->getReference('nO TIENE'))
                ;
                $this->addReference("City-Santa-Ana-tac", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('San Rafael del Piñal')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Fernandez-Feo-tac'))
                ->setParish($this->getReference('Parish-Fernández-Feo-tac'))
                ;
                $this->addReference("City-San-Rafael-del-Piñal-tac", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Puerto Teteo')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Fernandez-Feo-tac'))
                ->setParish($this->getReference('Parish-Alberto-Adriani-tac'))
                ;
                $this->addReference("City-Puerto-Teteo-tac", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('San Lorenzo')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Fernandez-Feo-tac'))
                ->setParish($this->getReference('Parish-Santo-Domingo-tac'))
                ;
                $this->addReference("City-San-Lorenzo-tac", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('San José de Bolívar')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Francisco-de-Miranda-tac'))
              //  ->setParish($this->getReference('Parish-Santo-Domingo-tac'))
                ;
                $this->addReference("City-San-José-de-Bolívar-tac", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('La Fría')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Garcia-de-Hevia-tac'))
                ->setParish($this->getReference('Parish-García-de-Hevia-tac'))
                ;
                $this->addReference("City-La-Fría-tac", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Boca de Grita')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Garcia-de-Hevia-tac'))
                ->setParish($this->getReference('Parish-Boca-de-Grita-tac'))
                ;
                $this->addReference("City-Boca-de-Grita-tac", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Orope')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Garcia-de-Hevia-tac'))
                ->setParish($this->getReference('Parish-José-Antonio-Páez-tac'))
                ;
                $this->addReference("City-Orope-tac", $city);
                $manager->persist($city);                  
                                      
        $city = new City();
        $city
                ->setDescription('Palmira')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
               ->setMunicipality($this->getReference('Municipality-Guasimo-tac'))
                //->setParish($this->getReference('Parish-José-Antonio-Páez-tac'))
                ;
                $this->addReference("City-Palmira-tac", $city);
                $manager->persist($city);                  
                                              
        $city = new City();
        $city
                ->setDescription('Capacho Nuevo')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Independencia-tac'))
                ->setParish($this->getReference('Parish-Independencia-tac'))
                ;
                $this->addReference("City-Capacho-Nuevo-tac", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('El Valle')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Independencia-tac'))
                ->setParish($this->getReference('Parish-Juan-Germán-Roscio-tac'))
                ;
                $this->addReference("City-El-Valle-tac", $city);
                $manager->persist($city);                 
                
        $city = new City();
        $city
                ->setDescription('Peribeca')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Independencia-tac'))
                ->setParish($this->getReference('Parish-Román-Cárdenas-tac'))
                ;
                $this->addReference("City-Peribeca-tac", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('La Grita')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Jauregui-tac'))
                ->setParish($this->getReference('Parish-Jáuregui-tac'))
                ;
                $this->addReference("City-La-Grita-tac", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('Pueblo Hondo')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Jauregui-tac'))
                ->setParish($this->getReference('Parish-Emilio-Constantino-Guerrero-tac'))
                ;
                $this->addReference("City-Pueblo-Hondo-tac", $city);
                $manager->persist($city);           
                                
        $city = new City();
        $city
                ->setDescription('Sabana Grande')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Jauregui-tac'))
                ->setParish($this->getReference('Parish-Monseñor-Miguel-Antonio-Salas-tac'))
                ;
                $this->addReference("City-Sabana-Grande-tac", $city);
                $manager->persist($city);           
                                
                        
        $city = new City();
        $city
                ->setDescription('El Cobre')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Jose-Maria-Vargas-tac'))
              //  ->setParish($this->getReference('Parish-Monseñor-Miguel-Antonio-Salas-tac'))
                ;
                $this->addReference("City-El-Cobre-tac", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Rubio')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Junin-tac'))
                ->setParish($this->getReference('Parish-Junín-tac'))
                ;
                $this->addReference("City-Rubio-tac", $city);
                $manager->persist($city);             
                        
                
        $city = new City();
        $city
                ->setDescription('Río Chiquito')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Junin-tac'))
                ->setParish($this->getReference('Parish-La-Petrólea-tac'))
                ;
                $this->addReference("City-Río-Chiquito-tac", $city);
                $manager->persist($city);             
                                
        $city = new City();
        $city
                ->setDescription('San Vicente de la Revancha')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Junin-tac'))
                ->setParish($this->getReference('Parish-Quinimarí-tac'))
                ;
                $this->addReference("City-San-Vicente-de-la-Revancha-tac", $city);
                $manager->persist($city);             
                                        
        $city = new City();
        $city
                ->setDescription('Bramón')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Junin-tac'))
                ->setParish($this->getReference('Parish-Bramón-tac'))
                ;
                $this->addReference("City-Bramón-tac", $city);
                $manager->persist($city);             
                                        
        $city = new City();
        $city
                ->setDescription('Capacho Viejo')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Libertad-tac'))
                ->setParish($this->getReference('Parish-Libertad-tac'))
                ;
                $this->addReference("City-Capacho-Viejo-tac", $city);
                $manager->persist($city);             
                                                       
        $city = new City();
        $city
                ->setDescription('Hato de la Virgen')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Libertad-tac'))
                ->setParish($this->getReference('Parish-Cipriano-Castro-tac'))
                ;
                $this->addReference("City-Hato-de-la-Virgen-tac", $city);
                $manager->persist($city);             
                                                       
                        
        $city = new City();
        $city
                ->setDescription('El Pueblito')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Libertad-tac'))
                ->setParish($this->getReference('Parish-Manuel-Felipe-Rugeles-tac'))
                ;
                $this->addReference("City-El-Pueblito-tac", $city);
                $manager->persist($city);             
                                                       
        $city = new City();
        $city
                ->setDescription('Abejales')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Libertador-tac'))
                ->setParish($this->getReference('Parish-Capital-Libertador-tac'))
                ;
                $this->addReference("City-Abejales-tac", $city);
                $manager->persist($city);             
                
     
        $city = new City();
        $city
                ->setDescription('Puerto Nuevo')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Libertador-tac'))
                ->setParish($this->getReference('Parish-Don-Emeterio-Ochoa-tac'))
                ;
                $this->addReference("City-Puerto-Nuevo-tac", $city);
                $manager->persist($city);             
                        
                
        $city = new City();
        $city
                ->setDescription('El Milagro')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Libertador-tac'))
                ->setParish($this->getReference('Parish-Doradas-tac'))
                ;
                $this->addReference("City-El-Milagro-tac", $city);
                $manager->persist($city);             
                        
        $city = new City();
        $city
                ->setDescription('San Joaquín de Navay')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Libertador-tac'))
                ->setParish($this->getReference('Parish-San-Joaquín-de-Navay-tac'))
                ;
                $this->addReference("City-San-Joaquín-de-Navay-tac", $city);
                $manager->persist($city);             
                                        
                
        $city = new City();
        $city
                ->setDescription('Lobatera')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Lobatera-tac'))
                ->setParish($this->getReference('Parish-Lobatera-tac'))
                ;
                $this->addReference("City-Lobatera-tac", $city);
                $manager->persist($city);             
                                               
                
        $city = new City();
        $city
                ->setDescription('Borotá')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Lobatera-tac'))
                ->setParish($this->getReference('Parish-Constitución-tac'))
                ;
                $this->addReference("City-Borotá-tac", $city);
                $manager->persist($city);                  
                
        $city = new City();
        $city
                ->setDescription('Michelena')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Michelena-tac'))
                //->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Michelena-tac", $city);
                $manager->persist($city);                  
                       
        $city = new City();
        $city
                ->setDescription('Coloncito')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Panamericano-tac'))
                ->setParish($this->getReference('Parish-Panamericano-tac'))
                ;
                $this->addReference("City-Coloncito-tac", $city);
                $manager->persist($city);                  
                               
        $city = new City();
        $city
                ->setDescription('La Palmita')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Panamericano-tac'))
                ->setParish($this->getReference('Parish-La-Palmita-tac'))
                ;
                $this->addReference("City-La-Palmita-tac", $city);
                $manager->persist($city);                 
                
        $city = new City();
        $city
                ->setDescription('Ureña')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Pedro-Maria-Ureña-tac'))
                ->setParish($this->getReference('Parish-Pedro-María-Ureña-tac'))
                ;
                $this->addReference("City-Ureña-tac", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Aguas Calientes')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Pedro-Maria-Ureña-tac'))
                ->setParish($this->getReference('Parish-Nueva-Arcadia-tac'))
                ;
                $this->addReference("City-Aguas-Calientes-tac", $city);
                $manager->persist($city);               
                        
                
        $city = new City();
        $city
                ->setDescription('Delicias')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Rafael-Urdaneta-tac'))
                //->setParish($this->getReference('Parish-Nueva-Arcadia-tac'))
                ;
                $this->addReference("City-Delicias-tac", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('La Tendida')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Samuel-Dario-Maldonado-tac'))
                ->setParish($this->getReference('Parish-Samuel-Darío-Maldonado-tac'))
                ;
                $this->addReference("City-La-Tendida-tac", $city);
                $manager->persist($city);           
                       
        $city = new City();
        $city
                ->setDescription('Boconó')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Samuel-Dario-Maldonado-tac'))
                ->setParish($this->getReference('Parish-Boconó-tac'))
                ;
                $this->addReference("City-Boconó-tac", $city);
                $manager->persist($city);           
                               
        $city = new City();
        $city
                ->setDescription('Hernández')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Samuel-Dario-Maldonado-tac'))
                ->setParish($this->getReference('Parish-Hernández-tac'))
                ;
                $this->addReference("City-Hernández-tac", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('San Cristóbal')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-San-Cristobal-tac'))
                ->setParish($this->getReference('Parish-La-Concordia-tac'))
                ;
                $this->addReference("City-San-Cristóbal-tac", $city);
                $manager->persist($city);            
                        
        $city = new City();
        $city
                ->setDescription('San Cristóbal')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-San-Cristobal-tac'))
                ->setParish($this->getReference('Parish-Pedro-María-Morantes-tac'))
                ;
                $this->addReference("City-San-Cristóbal-pmm-tac", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('San Cristóbal')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-San-Cristobal-tac'))
                ->setParish($this->getReference('Parish-San-Juan-Bautista-tac'))
                ;
                $this->addReference("City-San-Cristóbal-sjb-tac", $city);
                $manager->persist($city);          
                        
        $city = new City();
        $city
                ->setDescription('San Cristóbal')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-San-Cristobal-tac'))
                ->setParish($this->getReference('Parish-San-Sebastián-tac'))
                ;
                $this->addReference("City-San-Cristóbal-ss-tac", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('Macanillo')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-San-Cristobal-tac'))
                ->setParish($this->getReference('Parish-Dr-Francisco-Romero-Lobo-tac'))
                ;
                $this->addReference("City-Macanillo-tac", $city);
                $manager->persist($city);          
                                
        $city = new City();
        $city
                ->setDescription('Seboruco')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Seboruco-tac'))
                //->setParish($this->getReference('Parish-Dr-Francisco-Romero-Lobo-tac'))
                ;
                $this->addReference("City-Seboruco-tac", $city);
                $manager->persist($city);                          
                
        $city = new City();
        $city
                ->setDescription('San Simón')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Simon-Rodriguez-tac'))
                //->setParish($this->getReference('Parish-Dr-Francisco-Romero-Lobo-tac'))
                ;
                $this->addReference("City-San-Simón-tac", $city);
                $manager->persist($city);                          
                        
                
        $city = new City();
        $city
                ->setDescription('Queniquea')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Sucre-tac'))
                ->setParish($this->getReference('Parish-Sucre-tac'))
                ;
                $this->addReference("City-Queniquea-tac", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('Mesa del Tigre')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Sucre-tac'))
                ->setParish($this->getReference('Parish-Eleazar-López-Contreras-tac'))
                ;
                $this->addReference("City-Mesa-del-Tigre-tac", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('San Pablo')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Sucre-tac'))
                ->setParish($this->getReference('Parish-San-Pablo-tac'))
                ;
                $this->addReference("City-San-Pablo-tac", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('San Josecito')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Torbes-tac'))
               // ->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-San-Josecito-tac", $city);
                $manager->persist($city);          
                                
        $city = new City();
        $city
                ->setDescription('Pregonero')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Uribante-tac'))
                ->setParish($this->getReference('Parish-Uribante-tac'))
                ;
                $this->addReference("City-Pregonero-tac", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('La Fundación')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Uribante-tac'))
                ->setParish($this->getReference('Parish-Cárdenas-uri-tac'))
                ;
                $this->addReference("City-La-Fundación-tac", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('Laguna de García')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Uribante-tac'))
                ->setParish($this->getReference('Parish-Cárdenas-tac'))
                ;
                $this->addReference("City-Laguna-de-García-tac", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('Patio Redondo')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Uribante-tac'))
                ->setParish($this->getReference('Parish-Potosí-tac'))
                ;
                $this->addReference("City-Patio-Redondo-tac", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Umuquena')
                ->setCapital(false)
                ->setState($this->getReference('State-Tachira'))
                ->setMunicipality($this->getReference('Municipality-Uribante-tac'))
              //  ->setParish($this->getReference('Parish-Potosí-tac'))
                ;
                $this->addReference("City-Umuquena-tac", $city);
                $manager->persist($city);               
                
        //ciudades del estado Trujillo
                
                
        $city = new City();
        $city
                ->setDescription('Santa Isabel')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Andres-Bello-tru'))
                ->setParish($this->getReference('Parish-Santa-Isabel-tru'))
                ;
                $this->addReference("City-Santa-Isabel-tru", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Araguaney')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Andres-Bello-tru'))
                ->setParish($this->getReference('Parish-Araguaney-tru'))
                ;
                $this->addReference("City-Araguaney-tru", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('El Jagüito')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Andres-Bello-tru'))
                ->setParish($this->getReference('Parish-El-Jaguito-tru'))
                ;
                $this->addReference("City-El-Jagüito-tru", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('El Gallo')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Andres-Bello-tru'))
                ->setParish($this->getReference('Parish-La-Esperanza-tru'))
                ;
                $this->addReference("City-El-Gallo-tru", $city);
                $manager->persist($city);          
                               
                
        $city = new City();
        $city
                ->setDescription('Boconó')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-Boconó-tru'))
                ;
                $this->addReference("City-Boconó-tru", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('El Carmen')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-El-Carmen-tru'))
                ;
                $this->addReference("City-El-Carmen-tru", $city);
                $manager->persist($city);                      
                
        $city = new City();
        $city
                ->setDescription('Mosquey')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-Mosquey-tru'))
                ;
                $this->addReference("City-Mosquey-tru", $city);
                $manager->persist($city);                      
                        
                
        $city = new City();
        $city
                ->setDescription('Batatal')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-Ayacucho-tru'))
                ;
                $this->addReference("City-Batatal-tru", $city);
                $manager->persist($city);                      
                                
        $city = new City();
        $city
                ->setDescription('Burbusay')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-Burbusay-tru'))
                ;
                $this->addReference("City-Burbusay-tru", $city);
                $manager->persist($city);                      
                                        
                
        $city = new City();
        $city
                ->setDescription('Las Mesitas')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-General-Ribas-tru'))
                ;
                $this->addReference("City-Las-Mesitas-tru", $city);
                $manager->persist($city);                      
                                                
        $city = new City();
        $city
                ->setDescription('Guaramacal')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-Guaramacal-tru'))
                ;
                $this->addReference("City-Guaramacal-tru", $city);
                $manager->persist($city);                      
                                                      
        $city = new City();
        $city
                ->setDescription('Vega de Guaramacal')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-Vega-de-Guaramacal-tru'))
                ;
                $this->addReference("City-Vega-de-Guaramacal-tru", $city);
                $manager->persist($city);      
                
                
        $city = new City();
        $city
                ->setDescription('Niquitao')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-Monseñor-Jáuregui-tru'))
                ;
                $this->addReference("City-Niquitao-tru", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('San Rafael')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-Rafael-Rangel-tru'))
                ;
                $this->addReference("City-San-Rafael-tru", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('San Miguel')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-San-Miguel-tru'))
                ;
                $this->addReference("City-San-Miguel-tru", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('Tostós')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bocono-tru'))
                ->setParish($this->getReference('Parish-San-José-boc-tru'))
                ;
                $this->addReference("City-Tostós-tru", $city);
                $manager->persist($city);                
                                
                
        $city = new City();
        $city
                ->setDescription('Sabana Grande')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-tru'))
                ->setParish($this->getReference('Parish-Sabana-Grande-tru'))
                ;
                $this->addReference("City-Sabana-Grande-bo-tru", $city);
                $manager->persist($city);                
                                        
        $city = new City();
        $city
                ->setDescription('Altamira de Caús')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-tru'))
                ->setParish($this->getReference('Parish-Cheregüé-tru'))
                ;
                $this->addReference("City-Altamira-de-Caús-tru", $city);
                $manager->persist($city);                
                                        
                        
        $city = new City();
        $city
                ->setDescription('Granados')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-tru'))
                ->setParish($this->getReference('Parish-Granados-tru'))
                ;
                $this->addReference("City-Granados-tru", $city);
                $manager->persist($city);                
                                                
                
        $city = new City();
        $city
                ->setDescription('Chejendé')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                ->setParish($this->getReference('Parish-Chejendé-tru'))
                ;
                $this->addReference("City-Chejendé-tru", $city);
                $manager->persist($city);                
                                                   
        $city = new City();
        $city
                ->setDescription('Minas')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                ->setParish($this->getReference('Parish-Arnoldo-Gabaldón-tru'))
                ;
                $this->addReference("City-Minas-tru", $city);
                $manager->persist($city);                
                                                       
                
        $city = new City();
        $city
                ->setDescription('Bolivia')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                ->setParish($this->getReference('Parish-Bolivia-tru'))
                ;
                $this->addReference("City-Bolivia-tru", $city);
                $manager->persist($city);                                                                                                        
                                
        $city = new City();
        $city
                ->setDescription('Torococo')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                ->setParish($this->getReference('Parish-Carrillo-tru'))
                ;
                $this->addReference("City-Torococo-tru", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Mitón')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                ->setParish($this->getReference('Parish-Cegarra-tru'))
                ;
                $this->addReference("City-Mitón-tru", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Sabana Grande')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                ->setParish($this->getReference('Parish-Manuel-Salvador-Ulloa-tru'))
                ;
                $this->addReference("City-Sabana-Grande-tru", $city);
                $manager->persist($city);           
                
                        
        $city = new City();
        $city
                ->setDescription('Las Llanadas')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Candelaria-tru'))
                ->setParish($this->getReference('Parish-San-José-tru'))
                ;
                $this->addReference("City-Las-Llanadas-tru", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('Carache')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Carache-tru'))
                ->setParish($this->getReference('Parish-Carache-tru'))
                ;
                $this->addReference("City-Carache-tru", $city);
                $manager->persist($city);           
                                
                
        $city = new City();
        $city
                ->setDescription('Cuicas')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Carache-tru'))
                ->setParish($this->getReference('Parish-Cuicas-tru'))
                ;
                $this->addReference("City-Cuicas-tru", $city);
                $manager->persist($city);           
                                
                        
                
        $city = new City();
        $city
                ->setDescription('La Concepción')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Carache-tru'))
                ->setParish($this->getReference('Parish-La-Concepción-tru'))
                ;
                $this->addReference("City-La-Concepción-tru", $city);
                $manager->persist($city);           
                                        
                
        $city = new City();
        $city
                ->setDescription('El Zapatero')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Carache-tru'))
                ->setParish($this->getReference('Parish-Panamericana-tru'))
                ;
                $this->addReference("City-El-Zapatero-tru", $city);
                $manager->persist($city);           
                                        
                        
        $city = new City();
        $city
                ->setDescription('La Cuchilla')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Carache-tru'))
                ->setParish($this->getReference('Parish-Santa-Cruz-tru'))
                ;
                $this->addReference("City-La-Cuchilla-tru", $city);
                $manager->persist($city);           
                                        
                                
        $city = new City();
        $city
                ->setDescription('Escuque')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Escuque-tru'))
                ->setParish($this->getReference('Parish-Escuque-tru'))
                ;
                $this->addReference("City-Escuque-tru", $city);
                $manager->persist($city);           
                                               
                
        $city = new City();
        $city
                ->setDescription('El Alto')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Escuque-tru'))
                ->setParish($this->getReference('Parish-La-Unión-tru'))
                ;
                $this->addReference("City-El-Alto-tru", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Sabana Libre')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Escuque-tru'))
                ->setParish($this->getReference('Parish-Sabana-Libre-tru'))
                ;
                $this->addReference("City-Sabana-Libre-tru", $city);
                $manager->persist($city);              
                        
                
        $city = new City();
        $city
                ->setDescription('La Mata')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Escuque-tru'))
                ->setParish($this->getReference('Parish-Santa-Rita-tru'))
                ;
                $this->addReference("City-La-Mata-tru", $city);
                $manager->persist($city);              
                                
                
        $city = new City();
        $city
                ->setDescription('El Paradero')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Marquez-Caziñales-tru'))
                ->setParish($this->getReference('Parish-El-Socorro-tru'))
                ;
                $this->addReference("City-El-Paradero-tru", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('La Placita')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Marquez-Caziñales-tru'))
                ->setParish($this->getReference('Parish-Antonio-José-de-Sucre-tru'))
                ;
                $this->addReference("City-La-Placita-tru", $city);
                $manager->persist($city);              
                
                        
        $city = new City();
        $city
                ->setDescription('Los Caprichos')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Marquez-Caziñales-tru'))
                ->setParish($this->getReference('Parish-Los-Caprichos-tru'))
                ;
                $this->addReference("City-Los-Caprichos-tru", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Campo Elías')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Campo-Elias-tru'))
                ->setParish($this->getReference('Parish-Campo-Elías-tru'))
                ;
                $this->addReference("City-Campo-Elías-tru", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Las Quebradas')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Campo-Elias-tru'))
                ->setParish($this->getReference('Parish-Arnoldo-Gabaldón-ce-tru'))
                ;
                $this->addReference("City-Las-Quebradas-tru", $city);
                $manager->persist($city);            
                       
                
        $city = new City();
        $city
                ->setDescription('Santa Apolonia')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-La-Ceiba-tru'))
                ->setParish($this->getReference('Parish-Santa-Apolonia-tru'))
                ;
                $this->addReference("City-Santa-Apolonia-tru", $city);
                $manager->persist($city);            
                               
                
        $city = new City();
        $city
                ->setDescription('Zona Rica')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-La-Ceiba-tru'))
                ->setParish($this->getReference('Parish-El-Progreso-tru'))
                ;
                $this->addReference("City-Zona-Rica-tru", $city);
                $manager->persist($city);            
                                   
                
                
        $city = new City();
        $city
                ->setDescription('La Ceiba')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-La-Ceiba-tru'))
                ->setParish($this->getReference('Parish-La-Ceiba-tru'))
                ;
                $this->addReference("City-La-Ceiba-tru", $city);
                $manager->persist($city);            
                                           
                
        $city = new City();
        $city
                ->setDescription('Tres de Febrero')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-La-Ceiba-tru'))
                ->setParish($this->getReference('Parish-Tres-de-Febrero-tru'))
                ;
                $this->addReference("City-Tres-de-Febrero-tru", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('El Dividive')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Miranda-tru'))
                ->setParish($this->getReference('Parish-El-Dividive-tru'))
                ;
                $this->addReference("City-El-Dividive-tru", $city);
                $manager->persist($city);            
                
        $city = new City();
        $city
                ->setDescription('Agua Santa')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Miranda-tru'))
                ->setParish($this->getReference('Parish-Agua-Santa-tru'))
                ;
                $this->addReference("City-Agua-Santa-tru", $city);
                $manager->persist($city);            
                        
                        
        $city = new City();
        $city
                ->setDescription('Agua Caliente')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Miranda-tru'))
                ->setParish($this->getReference('Parish-Agua-Caliente-tru'))
                ;
                $this->addReference("City-Agua-Caliente-tru", $city);
                $manager->persist($city);            
                                 
                
        $city = new City();
        $city
                ->setDescription('El Cenizo')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Miranda-tru'))
                ->setParish($this->getReference('Parish-El-Cenizo-tru'))
                ;
                $this->addReference("City-El-Cenizo-tru", $city);
                $manager->persist($city);            
                                         
                
        $city = new City();
        $city
                ->setDescription('Valerita')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Miranda-tru'))
                ->setParish($this->getReference('Parish-Valerita-tru'))
                ;
                $this->addReference("City-Valerita-tru", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Monte Carmelo')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Monte-Carmelo-tru'))
                ->setParish($this->getReference('Parish-Monte-Carmelo-tru'))
                ;
                $this->addReference("City-Monte-Carmelo-tru", $city);
                $manager->persist($city);         
                        
        $city = new City();
        $city
                ->setDescription('Buena Vista')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Monte-Carmelo-tru'))
                ->setParish($this->getReference('Parish-Buena-Vista-tru'))
                ;
                $this->addReference("City-Buena-Vista-tru", $city);
                $manager->persist($city);         
                                
                
        $city = new City();
        $city
                ->setDescription('Casa de Tabla')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Monte-Carmelo-tru'))
                ->setParish($this->getReference('Parish-Santa-María-del-Horcón-tru'))
                ;
                $this->addReference("City-Casa-de-Tabla-tru", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Motatán')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Motatan-tru'))
                ->setParish($this->getReference('Parish-Motatán-tru'))
                ;
                $this->addReference("City-Motatán-tru", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('El Baño')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Motatan-tru'))
                ->setParish($this->getReference('Parish-El-Baño-tru'))
                ;
                $this->addReference("City-El-Baño-tru", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Jalisco')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Motatan-tru'))
                ->setParish($this->getReference('Parish-Jalisco-tru'))
                ;
                $this->addReference("City-Jalisco-tru", $city);
                $manager->persist($city);         
                        
                
                
        $city = new City();
        $city
                ->setDescription('Pampán')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Pampan-tru'))
                ->setParish($this->getReference('Parish-Pampan-tru'))
                ;
                $this->addReference("City-Pampán-tru", $city);
                $manager->persist($city);         
                                
                
        $city = new City();
        $city
                ->setDescription('Flor de Patria')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Pampan-tru'))
                ->setParish($this->getReference('Parish-Flor-de-Patria-tru'))
                ;
                $this->addReference("City-Flor-de-Patria-tru", $city);
                $manager->persist($city);         
                                        
        $city = new City();
        $city
                ->setDescription('Monay')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Pampan-tru'))
                ->setParish($this->getReference('Parish-La-Paz-tru'))
                ;
                $this->addReference("City-Monay-tru", $city);
                $manager->persist($city);                 
                
                
                                          
        $city = new City();
        $city
                ->setDescription('Santa Ana')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Pampan-tru'))
                ->setParish($this->getReference('Parish-Santa-Ana-tru'))
                ;
                $this->addReference("City-Santa-Ana-tru", $city);
                $manager->persist($city);                 
                        
                
        $city = new City();
        $city
                ->setDescription('Pampanito')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Pampanito-tru'))
                ->setParish($this->getReference('Parish-Pampanito-tru'))
                ;
                $this->addReference("City-Pampanito-tru", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('La Concepción')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Pampanito-tru'))
                ->setParish($this->getReference('Parish-La-Concepción-pam-tru'))
                ;
                $this->addReference("City-La-Concepción-pam-tru", $city);
                $manager->persist($city);             
                        
                
        $city = new City();
        $city
                ->setDescription('Pampanito II')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Pampanito-tru'))
                ->setParish($this->getReference('Parish-Pampanito-II-tru'))
                ;
                $this->addReference("City-Pampanito-II-tru", $city);
                $manager->persist($city);             
                               
                
        $city = new City();
        $city
                ->setDescription('Betijoque')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Rafael-Rangel-tru'))
                ->setParish($this->getReference('Parish-Betijoque-tru'))
                ;
                $this->addReference("City-Betijoque-tru", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Las Rurales')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Rafael-Rangel-tru'))
                ->setParish($this->getReference('Parish-La-Pueblita-tru'))
                ;
                $this->addReference("City-Las-Rurales-tru", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('Los Cedros')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Rafael-Rangel-tru'))
                ->setParish($this->getReference('Parish-Los-Cedros-tru'))
                ;
                $this->addReference("City-Los-Cedros-tru", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Isnotú ')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Rafael-Rangel-tru'))
                ->setParish($this->getReference('Parish-José-Gregorio-Hernández-tru'))
                ;
                $this->addReference("City-Isnotú-tru", $city);
                $manager->persist($city);         
                        
                
        $city = new City();
        $city
                ->setDescription('Carvajal')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Carvajal-tru'))
                ->setParish($this->getReference('Parish-Carvajal-tru'))
                ;
                $this->addReference("City-Carvajal-tru", $city);
                $manager->persist($city);         
                                
                
                
        $city = new City();
        $city
                ->setDescription('La Cejita')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Carvajal-tru'))
                ->setParish($this->getReference('Parish-Antonio-Nicolás-Briceño-tru'))
                ;
                $this->addReference("City-La-Cejita-tru", $city);
                $manager->persist($city);         
                                
                
        $city = new City();
        $city
                ->setDescription('Campo Alegre')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Carvajal-tru'))
                ->setParish($this->getReference('Parish-Campo-Alegre-tru'))
                ;
                $this->addReference("City-Campo-Alegre-tru", $city);
                $manager->persist($city);         
                                
        $city = new City();
        $city
                ->setDescription('Las Mesetas')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-San-Rafael-de-Carvajal-tru'))
                ->setParish($this->getReference('Parish-José-Leonardo-Suárez-tru'))
                ;
                $this->addReference("City-Las-Mesetas-tru", $city);
                $manager->persist($city);         
                                
        $city = new City();
        $city
                ->setDescription('Sabana de Mendoza')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Sucre-tru'))
                ->setParish($this->getReference('Parish-Sabana-de-Mendoza-tru'))
                ;
                $this->addReference("City-Sabana-de-Mendoza-tru", $city);
                $manager->persist($city);                                                    
                
                
        $city = new City();
        $city
                ->setDescription('El Paraíso')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Sucre-tru'))
                ->setParish($this->getReference('Parish-El-Paraíso-tru'))
                ;
                $this->addReference("City-El-Paraíso-tru", $city);
                $manager->persist($city);                                                    
                       
                
        $city = new City();
        $city
                ->setDescription('Junín')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Sucre-tru'))
                ->setParish($this->getReference('Parish-Junín-tru'))
                ;
                $this->addReference("City-Junín-tru", $city);
                $manager->persist($city);                                                    
                       
                       
        $city = new City();
        $city
                ->setDescription('Valmore Rodríguez')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Sucre-tru'))
                ->setParish($this->getReference('Parish-Valmore-Rodríguez-tru'))
                ;
                $this->addReference("City-Valmore-Rodríguez-tru", $city);
                $manager->persist($city);                                                    
                               
                
        $city = new City();
        $city
                ->setDescription('San Lázaro')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                ->setParish($this->getReference('Parish-Andrés-Linares-tru'))
                ;
                $this->addReference("City-San-Lázaro-tru", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Chiquinquirá')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                ->setParish($this->getReference('Parish-Chiquinquira-tru'))
                ;
                $this->addReference("City-Chiquinquirá-tru", $city);
                $manager->persist($city);           
                
                        
        $city = new City();
        $city
                ->setDescription('Santa Rosa')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                ->setParish($this->getReference('Parish-Cristóbal-Mendoza-tru'))
                ;
                $this->addReference("City-Santa-Rosa-tru", $city);
                $manager->persist($city);           
                       
        $city = new City();
        $city
                ->setDescription('La Plazuela')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                ->setParish($this->getReference('Parish-Cruz-Carrillo-tru'))
                ;
                $this->addReference("City-La-Plazuela-tru", $city);
                $manager->persist($city);             
                
                
                
        $city = new City();
        $city
                ->setDescription('Matriz')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                ->setParish($this->getReference('Parish-Matriz-tru'))
                ;
                $this->addReference("City-Matriz-tru", $city);
                $manager->persist($city);             
                        
                
        $city = new City();
        $city
                ->setDescription('San Jacinto')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                ->setParish($this->getReference('Parish-Monseñor-Carrillo-tru'))
                ;
                $this->addReference("City-San-Jacinto-tru", $city);
                $manager->persist($city);             
                               
        $city = new City();
        $city
                ->setDescription('Tres Esquinas')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Trujillo-tru'))
                ->setParish($this->getReference('Parish-Tres-Esquinas-tru'))
                ;
                $this->addReference("City-Tres-Esquinas-tru", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('La Quebrada')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                ->setParish($this->getReference('Parish-La-Quebrada-tru'))
                ;
                $this->addReference("City-La-Quebrada-tru", $city);
                $manager->persist($city);          
                
                
                
        $city = new City();
        $city
                ->setDescription('Cabimbú')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                ->setParish($this->getReference('Parish-Cabimbú-tru'))
                ;
                $this->addReference("City-Cabimbú-tru", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Jajó')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                ->setParish($this->getReference('Parish-Jajó-tru'))
                ;
                $this->addReference("City-Jajó-tru", $city);
                $manager->persist($city);               
                
        $city = new City();
        $city
                ->setDescription('La Mesa de Esnujaque')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                ->setParish($this->getReference('Parish-La-Mesa-tru'))
                ;
                $this->addReference("City-La-Mesa-de-Esnujaque-tru", $city);
                $manager->persist($city);       
                
                
        $city = new City();
        $city
                ->setDescription('Santiago')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                ->setParish($this->getReference('Parish-Santiago-tru'))
                ;
                $this->addReference("City-Santiago-tru", $city);
                $manager->persist($city);       
                        
                
        $city = new City();
        $city
                ->setDescription('Tuñame')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Urdaneta-tru'))
                ->setParish($this->getReference('Parish-Tuñame-tru'))
                ;
                $this->addReference("City-Tuñame-tru", $city);
                $manager->persist($city);       
                                
                
        $city = new City();
        $city
                ->setDescription('Valera')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                ->setParish($this->getReference('Parish-Valera-tru'))
                ;
                $this->addReference("City-Valera-tru", $city);
                $manager->persist($city);       
                                        
                
        $city = new City();
        $city
                ->setDescription('Juan Ignacio Montilla')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                ->setParish($this->getReference('Parish-Juan-Ignacio-Montilla-tru'))
                ;
                $this->addReference("City-Juan-Ignacio-Montilla-tru", $city);
                $manager->persist($city);       
                                                
                
                
        $city = new City();
        $city
                ->setDescription('La Beatriz')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                ->setParish($this->getReference('Parish-La-Beatriz'))
                ;
                $this->addReference("City-La-Beatriz-tru", $city);
                $manager->persist($city);       
                                                        
                
        $city = new City();
        $city
                ->setDescription('Mercedes Díaz')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                ->setParish($this->getReference('Parish-Mercedes-Díaz-tru'))
                ;
                $this->addReference("City-Mercedes-Díaz-tru", $city);
                $manager->persist($city);       
                                                        
        $city = new City();
        $city
                ->setDescription('San Luis')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                ->setParish($this->getReference('Parish-San-Luis-tru'))
                ;
                $this->addReference("City-San-Luis-tru", $city);
                $manager->persist($city);                      
                
        $city = new City();
        $city
                ->setDescription('La Puerta')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                ->setParish($this->getReference('Parish-La-Puerta-tru'))
                ;
                $this->addReference("City-La-Puerta-tru", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Mendoza')
                ->setCapital(false)
                ->setState($this->getReference('State-Trujillo'))
                ->setMunicipality($this->getReference('Municipality-Valera-tru'))
                ->setParish($this->getReference('Parish-Mendoza-del-Valle-del-Momboy-tru'))
                ;
                $this->addReference("City-Mendoza-tru", $city);
                $manager->persist($city);         
                        
                
     //ciudades del estado yaracuy
                
                
        $city = new City();
        $city
                ->setDescription('San Pablo')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Bastidas-yar'))
                ->setParish($this->getReference('Parish-Arístides-Bastidas-yar'))
                ;
                $this->addReference("City-San-Pablo-yar", $city);
                $manager->persist($city);                
                
        $city = new City();
        $city
                ->setDescription('Aroa')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Bolivar-yar'))
               // ->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Aroa-yar", $city);
                $manager->persist($city);                      
                
                
        $city = new City();
        $city
                ->setDescription('Chivacoa')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Bruzual-yar'))
                ->setParish($this->getReference('Parish-Chivacoa-yar'))
                ;
                $this->addReference("City-Chivacoa-yar", $city);
                $manager->persist($city);                      
                        
        $city = new City();
        $city
                ->setDescription('Campo Elías')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Bruzual-yar'))
                ->setParish($this->getReference('Parish-Campo-Elías-yar'))
                ;
                $this->addReference("City-Campo-Elías-yar", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Cocorote')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Bruzual-yar'))
                //->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Cocorote-yar", $city);
                $manager->persist($city);             
                
                        
        $city = new City();
        $city
                ->setDescription('Cocorote')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Cocorote-yar'))
                //->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Cocorote-co-yar", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Independencia')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Independencia-yar'))
                //->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Independencia-yar", $city);
                $manager->persist($city);             
                
                        
        $city = new City();
        $city
                ->setDescription('Sabana de Parra')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Jose-Antonio-Paez-yar'))
                //->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Sabana-de-Parra-yar", $city);
                $manager->persist($city);             
                
                               
        $city = new City();
        $city
                ->setDescription('Boraure')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-La-Trinidad-yar'))
                //->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Boraure-yar", $city);
                $manager->persist($city);             
                        
        $city = new City();
        $city
                ->setDescription('Yumare')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Manuel-Monge-yar'))
                //->setParish($this->getReference('No tiene'))
                ;
                $this->addReference("City-Yumare-yar", $city);
                $manager->persist($city);             
                               
        $city = new City();
        $city
                ->setDescription('Nirgua')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Nirgua-yar'))
                ->setParish($this->getReference('Parish-Nirgua-yar'))
                ;
                $this->addReference("City-Nirgua-yar", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Salom')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Nirgua-yar'))
                ->setParish($this->getReference('Parish-Salóm-yar'))
                ;
                $this->addReference("City-Salom-yar", $city);
                $manager->persist($city);               
                
        $city = new City();
        $city
                ->setDescription('Temerla')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Nirgua-yar'))
                ->setParish($this->getReference('Parish-Temerla-yar'))
                ;
                $this->addReference("City-Temerla-yar", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Yaritagua')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Peña-yar'))
                ->setParish($this->getReference('Parish-Yaritagua-yar'))
                ;
                $this->addReference("City-Yaritagua-yar", $city);
                $manager->persist($city);                
                        
        $city = new City();
        $city
                ->setDescription('Cambural')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Peña-yar'))
                ->setParish($this->getReference('Parish-San-Andrés-yar'))
                ;
                $this->addReference("City-Cambural-yar", $city);
                $manager->persist($city);                
                                
                
        $city = new City();
        $city
                ->setDescription('San Felipe')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-San-Felipe-yar'))
                ->setParish($this->getReference('Parish-San-Felipe-yar'))
                ;
                $this->addReference("City-San-Felipe-yar", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Albarico')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-San-Felipe-yar'))
                ->setParish($this->getReference('Parish-Albarico-yar'))
                ;
                $this->addReference("City-Albarico-yar", $city);
                $manager->persist($city);              
                        
                
                
        $city = new City();
        $city
                ->setDescription('Marín')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-San-Felipe-yar'))
                ->setParish($this->getReference('Parish-San-Javier-yar'))
                ;
                $this->addReference("City-Marín-yar", $city);
                $manager->persist($city);              
                        
        $city = new City();
        $city
                ->setDescription('Guama')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Sucre-yar'))
               // ->setParish($this->getReference('Parish-San-Javier-yar'))
                ;
                $this->addReference("City-Guama-yar", $city);
                $manager->persist($city);              
                               
        $city = new City();
        $city
                ->setDescription('Urachiche')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Urachiche-yar'))
               // ->setParish($this->getReference('Parish-San-Javier-yar'))
                ;
                $this->addReference("City-Urachiche-yar", $city);
                $manager->persist($city);              
                               
                       
        $city = new City();
        $city
                ->setDescription('Farriar')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Veroes-yar'))
                ->setParish($this->getReference('Parish-Farriar-yar'))
                ;
                $this->addReference("City-Farriar-yar", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Casimiro Vásquez')
                ->setCapital(false)
                ->setState($this->getReference('State-Yaracuy'))
                ->setMunicipality($this->getReference('Municipality-Veroes-yar'))
                ->setParish($this->getReference('Parish-El-Guayabo-yar'))
                ;
                $this->addReference("City-Casimiro-Vásquez-yar", $city);
                $manager->persist($city);                  
                
                        
       //ciudades dek estado vargas
                
        $city = new City();
        $city
                ->setDescription('La Guaira')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                ->setParish($this->getReference('Parish-La-Guaira-var'))
                ;
                $this->addReference("City-La-Guaira-var", $city);
                $manager->persist($city);                  
                        
        $city = new City();
        $city
                ->setDescription('Caraballeda')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                ->setParish($this->getReference('Parish-Caraballeda-var'))
                ;
                $this->addReference("City-Caraballeda-var", $city);
                $manager->persist($city);                  
                                
        $city = new City();
        $city
                ->setDescription('Carayaca')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                ->setParish($this->getReference('Parish-Carayaca-var'))
                ;
                $this->addReference("City-Carayaca-var", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('La Sabana')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                ->setParish($this->getReference('Parish-Caruao-var'))
                ;
                $this->addReference("City-La-Sabana-var", $city);
                $manager->persist($city);              
                        
                
        $city = new City();
        $city
                ->setDescription('Catia La Mar')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                ->setParish($this->getReference('Parish-Catia-La-Mar-var'))
                ;
                $this->addReference("City-Catia-La-Mar-var", $city);
                $manager->persist($city);              
                                
                
        $city = new City();
        $city
                ->setDescription('El Junko')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                ->setParish($this->getReference('Parish-El-Junko-var'))
                ;
                $this->addReference("City-El-Junko-var", $city);
                $manager->persist($city);              
                                
                        
        $city = new City();
        $city
                ->setDescription('Macuto')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                ->setParish($this->getReference('Parish-Macuto-var'))
                ;
                $this->addReference("City-Macuto-var", $city);
                $manager->persist($city);              
                                
                                
        $city = new City();
        $city
                ->setDescription('Maiquetía')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                ->setParish($this->getReference('Parish-Maiquetía-var'))
                ;
                $this->addReference("City-Maiquetía-var", $city);
                $manager->persist($city);              
                                        
        $city = new City();
        $city
                ->setDescription('Naiguatá')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                ->setParish($this->getReference('Parish-Naiguatá-var'))
                ;
                $this->addReference("City-Naiguatá-var", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Catia La Mar')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                ->setParish($this->getReference('Parish-Urimare-var'))
                ;
                $this->addReference("City-Catia-La-Mar-uri-var", $city);
                $manager->persist($city);              
                       
                
        $city = new City();
        $city
                ->setDescription('Maiquetía')
                ->setCapital(false)
                ->setState($this->getReference('State-Vargas'))
                ->setMunicipality($this->getReference('Municipality-Vargas-var'))
                ->setParish($this->getReference('Parish-Carlos Soublette-var'))
                ;
                $this->addReference("City-Maiquetía-cs-var", $city);
                $manager->persist($city);            
                
                
       //ciudADES DEL ESTADO ZULIA
                
                
        $city = new City();
        $city
                ->setDescription('El Toro')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Almirante-Padilla-zul'))
                ->setParish($this->getReference('Parish-Isla-de-Toas-zul'))
                ;
                $this->addReference("City-El-Toro-zul", $city);
                $manager->persist($city);                    
                
                
        $city = new City();
        $city
                ->setDescription('San Carlos')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Almirante-Padilla-zul'))
                ->setParish($this->getReference('Parish-Monagas-zul'))
                ;
                $this->addReference("City-San-Carlos-zul", $city);
                $manager->persist($city);                 
                
        $city = new City();
        $city
                ->setDescription('San Timoteo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                ->setParish($this->getReference('Parish-San-Timoteo-zul'))
                ;
                $this->addReference("City-San-Timoteo-zul", $city);
                $manager->persist($city);                 
                
        $city = new City();
        $city
                ->setDescription('Ceuta')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                ->setParish($this->getReference('Parish-General-Urdaneta-zul'))
                ;
                $this->addReference("City-Ceuta-zul", $city);
                $manager->persist($city);                 
                
        $city = new City();
        $city
                ->setDescription('Mene Grande')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                ->setParish($this->getReference('Parish-Libertador-zul'))
                ;
                $this->addReference("City-Mene-Grande-zul", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('El Venado')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                ->setParish($this->getReference('Parish-Manuel-Guanipa-Matos-zul'))
                ;
                $this->addReference("City-El-Venado-zul", $city);
                $manager->persist($city);           
                               
        $city = new City();
        $city
                ->setDescription('El Tigre')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                ->setParish($this->getReference('Parish-Marcelino-Briceño-zul'))
                ;
                $this->addReference("City-El-Tigre-zul", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Pueblo Nuevo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Baralt-zul'))
                ->setParish($this->getReference('Parish-Pueblo-Nuevo-zul'))
                ;
                $this->addReference("City-Pueblo-Nuevo-zul", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('Cabimas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                ->setParish($this->getReference('Parish-Ambrosio-zul'))
                ;
                $this->addReference("City-Cabimas-am-zul", $city);
                $manager->persist($city);               
                        
        $city = new City();
        $city
                ->setDescription('Cabimas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                ->setParish($this->getReference('Parish-Carmen-Herrera-zul'))
                ;
                $this->addReference("City-Cabimas-ch-zul", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Cabimas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                ->setParish($this->getReference('Parish-Germán-Ríos-Linares-zul'))
                ;
                $this->addReference("City-Cabimas-gr-zul", $city);
                $manager->persist($city);         
                        
        $city = new City();
        $city
                ->setDescription('Cabimas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                ->setParish($this->getReference('Parish-La-Rosa-zul'))
                ;
                $this->addReference("City-Cabimas-lr-zul", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Cabimas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                ->setParish($this->getReference('Parish-Jorge-Hernández-zul'))
                ;
                $this->addReference("City-Cabimas-jh-zul", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Cabimas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                ->setParish($this->getReference('Parish-Rómulo-Betancourt-zul'))
                ;
                $this->addReference("City-Cabimas-rb-zul", $city);
                $manager->persist($city);                
                
                       
        $city = new City();
        $city
                ->setDescription('Cabimas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                ->setParish($this->getReference('Parish-San-Benito-zul'))
                ;
                $this->addReference("City-Cabimas-sb-zul", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Palito Blanco')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                ->setParish($this->getReference('Parish-Arístides-Calvani-zul'))
                ;
                $this->addReference("City-Palito-Blanco-zul", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('Punta Gorda')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Cabimas-zul'))
                ->setParish($this->getReference('Parish-Punta-Gorda-zul'))
                ;
                $this->addReference("City-Punta-Gorda-zul", $city);
                $manager->persist($city);          
                                
                
        $city = new City();
        $city
                ->setDescription('Encontrados')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Catatumbo-zul'))
                ->setParish($this->getReference('Parish-Encontrados-zul'))
                ;
                $this->addReference("City-Encontrados-zul", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('El Guayabo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Catatumbo-zul'))
                ->setParish($this->getReference('Parish-Udón-Pérez-zul'))
                ;
                $this->addReference("City-El-Guayabo-zul", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('San Carlos del Zulia')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Colon-zul'))
                ->setParish($this->getReference('Parish-San-Carlos-del-Zulia-zul'))
                ;
                $this->addReference("City-San-Carlos-del-Zulia-zul", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('El Moralito')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Colon-zul'))
                ->setParish($this->getReference('Parish-Moralito-zul'))
                ;
                $this->addReference("City-El-Moralito-zul", $city);
                $manager->persist($city);           
                                
                
        $city = new City();
        $city
                ->setDescription('Santa Bárbara')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Colon-zul'))
                ->setParish($this->getReference('Parish-Santa-Bárbara-zul'))
                ;
                $this->addReference("City-Santa-Bárbara-zul", $city);
                $manager->persist($city);           
                                        
        $city = new City();
        $city
                ->setDescription('Santa Cruz del Zulia')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Colon-zul'))
                ->setParish($this->getReference('Parish-Santa-Cruz-del-Zulia-zul'))
                ;
                $this->addReference("City-Santa-Cruz-del-Zulia-zul", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Concha')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Colon-zul'))
                ->setParish($this->getReference('Parish-Urribarri-zul'))
                ;
                $this->addReference("City-Concha-zul", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Pueblo Nuevo El Chivo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Francisco-Javier-Pulgar-zul'))
                ->setParish($this->getReference('Parish-Simón-Rodríguez-zul'))
                ;
                $this->addReference("City-Pueblo-Nuevo-El-Chivo-zul", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Cuatro Esquinas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Francisco-Javier-Pulgar-zul'))
                ->setParish($this->getReference('Parish-Carlos-Quevedo-zul'))
                ;
                $this->addReference("City-Cuatro-Esquinas-zul", $city);
                $manager->persist($city);          
                       
                
        $city = new City();
        $city
                ->setDescription('Los Naranjos')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Francisco-Javier-Pulgar-zul'))
                ->setParish($this->getReference('Parish-Francisco-Javier-Pulgar-zul'))
                ;
                $this->addReference("City-Los-Naranjos-zul", $city);
                $manager->persist($city);          
                       
                        
        $city = new City();
        $city
                ->setDescription('La Ceibita')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Francisco-Javier-Pulgar-zul'))
                ->setParish($this->getReference('Parish-Agustin-Codazzi-zul'))
                ;
                $this->addReference("City-La-Ceibita-zul", $city);
                $manager->persist($city);           
                
                
                
        $city = new City();
        $city
                ->setDescription('La Concepción')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Jesus-Enrique-Lossada-zul'))
                ->setParish($this->getReference('Parish-La-Concepción-zul'))
                ;
                $this->addReference("City-La-Concepción-zul", $city);
                $manager->persist($city);           
                
                        
        $city = new City();
        $city
                ->setDescription('La Paz')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Jesus-Enrique-Lossada-zul'))
                ->setParish($this->getReference('Parish-José-Ramón-Yépez-zul'))
                ;
                $this->addReference("City-La-Paz-zul", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('Jobo Alto')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Jesus-Enrique-Lossada-zul'))
                ->setParish($this->getReference('Parish-Mariano-Parra-León-zul'))
                ;
                $this->addReference("City-Jobo-Alto-zul", $city);
                $manager->persist($city);            
                
                
                
        $city = new City();
        $city
                ->setDescription('San José')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Jesus-Enrique-Lossada-zul'))
                ->setParish($this->getReference('Parish-San-José-zul'))
                ;
                $this->addReference("City-San-José-zul", $city);
                $manager->persist($city);            
                
                        
        $city = new City();
        $city
                ->setDescription('Casigua El Cubo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Jesus-Maria-Semprun-zul'))
                ->setParish($this->getReference('Parish-Jesús-María-Semprún-zul'))
                ;
                $this->addReference("City-Casigua-El-Cubo-zul", $city);
                $manager->persist($city);               
                
                
        $city = new City();
        $city
                ->setDescription('El Cruce')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Jesus-Maria-Semprun-zul'))
                ->setParish($this->getReference('Parish-Barí-zul'))
                ;
                $this->addReference("City-El-Cruce-zul", $city);
                $manager->persist($city);               
                        
        $city = new City();
        $city
                ->setDescription('Concepción')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-La-Cañada-de-Urdaneta-zul'))
                ->setParish($this->getReference('Parish-Concepción-zul'))
                ;
                $this->addReference("City-Concepción-zul", $city);
                $manager->persist($city);               
                                
                
        $city = new City();
        $city
                ->setDescription('Kilómetro 48')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-La-Cañada-de-Urdaneta-zul'))
                ->setParish($this->getReference('Parish-Andrés-Bello-zul'))
                ;
                $this->addReference("City-Kilómetro-48-zul", $city);
                $manager->persist($city);               
                                        
                
        $city = new City();
        $city
                ->setDescription('La Ensenada')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-La-Cañada-de-Urdaneta-zul'))
                ->setParish($this->getReference('Parish-Chiquinquirá-zul'))
                ;
                $this->addReference("City-La-Ensenada-zul", $city);
                $manager->persist($city);               
                                                
                
        $city = new City();
        $city
                ->setDescription('El Carmelo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-La-Cañada-de-Urdaneta-zul'))
                ->setParish($this->getReference('Parish-El-Carmelo-zul'))
                ;
                $this->addReference("City-El-Carmelo-zul", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Potreritos')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-La-Cañada-de-Urdaneta-zul'))
                ->setParish($this->getReference('Parish-Potreritos-zul'))
                ;
                $this->addReference("City-Potreritos-zul", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Ciudad Ojeda')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                ->setParish($this->getReference('Parish-Alonso-de-Ojeda-zul'))
                ;
                $this->addReference("City-Ciudad-Ojeda-zul", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Ojeda')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                ->setParish($this->getReference('Parish-Libertad-zul'))
                ;
                $this->addReference("City-Ciudad-Ojeda-li-zul", $city);
                $manager->persist($city);           
                       
                
        $city = new City();
        $city
                ->setDescription('Campo Lara')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                ->setParish($this->getReference('Parish-Campo-Lara-zul'))
                ;
                $this->addReference("City-Campo-Lara-zul", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Picapica')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                ->setParish($this->getReference('Parish-Eleazar-López-Contreras-zul'))
                ;
                $this->addReference("City-Picapica-zul", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('Lagunillas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                ->setParish($this->getReference('Parish-Venezuela-zul'))
                ;
                $this->addReference("City-Lagunillas-zul", $city);
                $manager->persist($city);          
                                
                
        $city = new City();
        $city
                ->setDescription('Ciudad Ojeda')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Lagunillas-zul'))
                ->setParish($this->getReference('Parish-El-Danto-zul'))
                ;
                $this->addReference("City-Ciudad-Ojeda-ed-zul", $city);
                $manager->persist($city);          
                                       
        $city = new City();
        $city
                ->setDescription('Machiques')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Machiques-de-Perija-zul'))
                ->setParish($this->getReference('Parish-Libertad-mp-zul'))
                ;
                $this->addReference("City-Machiques-zul", $city);
                $manager->persist($city);          
                                               
        $city = new City();
        $city
                ->setDescription('Las Piedras')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Machiques-de-Perija-zul'))
                ->setParish($this->getReference('Parish-Bartolomé-de-las-Casas-zul'))
                ;
                $this->addReference("City-Las-Piedras-zul", $city);
                $manager->persist($city);                  
                
        $city = new City();
        $city
                ->setDescription('Río Negro')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Machiques-de-Perija-zul'))
                ->setParish($this->getReference('Parish-Río-Negro-zul'))
                ;
                $this->addReference("City-Río-Negro-zul", $city);
                $manager->persist($city);                  
                
        $city = new City();
        $city
                ->setDescription('San José')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Machiques-de-Perija-zul'))
                ->setParish($this->getReference('Parish-San-José-de-Perijá-zul'))
                ;
                $this->addReference("City-San-José-mac-zul", $city);
                $manager->persist($city);                    
                
                
        $city = new City();
        $city
                ->setDescription('San Rafael de El Moján')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                ->setParish($this->getReference('Parish-San-Rafael-zul'))
                ;
                $this->addReference("City-San-Rafael-de-El-Moján-zul", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('La Sierrita')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                ->setParish($this->getReference('Parish-La-Sierrita-zul'))
                ;
                $this->addReference("City-La-Sierrita-zul", $city);
                $manager->persist($city);                 
                        
                
        $city = new City();
        $city
                ->setDescription('Las Parcelas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                ->setParish($this->getReference('Parish-Las-Parcelas-zul'))
                ;
                $this->addReference("City-Las-Parcelas-zul", $city);
                $manager->persist($city);                 
                                
                
        $city = new City();
        $city
                ->setDescription('Carrasquero')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                ->setParish($this->getReference('Parish-Luis-de-Vicente-zul'))
                ;
                $this->addReference("City-Carrasquero-zul", $city);
                $manager->persist($city);                 
                                        
                
        $city = new City();
        $city
                ->setDescription('Cachirí')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                ->setParish($this->getReference('Parish-Monseñor-Marcos-Sergio-Godoy-zul'))
                ;
                $this->addReference("City-Cachirí-zul", $city);
                $manager->persist($city);                 
                                                
        $city = new City();
        $city
                ->setDescription('Santa Cruz de Mara')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                ->setParish($this->getReference('Parish-Ricaurte-zul'))
                ;
                $this->addReference("City-Santa-Cruz-de-Mara-zul", $city);
                $manager->persist($city);                 
                                                     
        $city = new City();
        $city
                ->setDescription('Tamare')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Mara-zul'))
                ->setParish($this->getReference('Parish-Tamare-zul'))
                ;
                $this->addReference("City-Tamare-zul", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Antonio-Borjas-Romero-zul'))
                ;
                $this->addReference("City-Maracaibo-ab-zul", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Bolívar-zul'))
                ;
                $this->addReference("City-Maracaibo-bo-zul", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Cacique-Mara-zul'))
                ;
                $this->addReference("City-Maracaibo-cm-zul", $city);
                $manager->persist($city);          
                
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Carracciolo-Parra-Pérez-zul'))
                ;
                $this->addReference("City-Maracaibo-cp-zul", $city);
                $manager->persist($city);          
                
                        
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Cecilio-Acosta-zul'))
                ;
                $this->addReference("City-Maracaibo-ca-zul", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Cristo-de-Aranza-zul'))
                ;
                $this->addReference("City-Maracaibo-cda-zul", $city);
                $manager->persist($city);           
                
                        
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Coquivacoa-zul'))
                ;
                $this->addReference("City-Maracaibo-coq-zul", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Chiquinquirá-mar-zul'))
                ;
                $this->addReference("City-Maracaibo-chi-zul", $city);
                $manager->persist($city);           
                        
                        
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Francisco-Eugenio-Bustamante-zul'))
                ;
                $this->addReference("City-Maracaibo-feb-zul", $city);
                $manager->persist($city);           
                                
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Idelfonso-Vásquez-zul'))
                ;
                $this->addReference("City-Maracaibo-iv-zul", $city);
                $manager->persist($city);           
                                
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Juana-de-Ávila-zul'))
                ;
                $this->addReference("City-Maracaibo-ja-zul", $city);
                $manager->persist($city);           
                                              
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Luis-Hurtado-Higuera-zul'))
                ;
                $this->addReference("City-Maracaibo-lhh-zul", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Manuel-Dagnino-zul'))
                ;
                $this->addReference("City-Maracaibo-pm-zul", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Olegario-Villalobos-zul'))
                ;
                $this->addReference("City-Maracaibo-ov-zul", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Raúl-Leoni-zul'))
                ;
                $this->addReference("City-Maracaibo-rl-zul", $city);
                $manager->persist($city);          
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Santa-Lucía-zul'))
                ;
                $this->addReference("City-Maracaibo-sl-zul", $city);
                $manager->persist($city);          
                        
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-Venancio-Pulgar-zul'))
                ;
                $this->addReference("City-Maracaibo-vp-zul", $city);
                $manager->persist($city);         
                
        $city = new City();
        $city
                ->setDescription('Maracaibo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-San-Isidro-zul'))
                ;
                $this->addReference("City-Maracaibo-si-zul", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('San Isidro')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Maracaibo-zul'))
                ->setParish($this->getReference('Parish-San-Isidro-zul'))
                ;
                $this->addReference("City-San-Isidro-zul", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('Los Puertos de Altagracia')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                ->setParish($this->getReference('Parish-Altagracia-zul'))
                ;
                $this->addReference("City-Los-Puertos-de-Altagracia-zul", $city);
                $manager->persist($city);                
                
                
        $city = new City();
        $city
                ->setDescription('El Mecocal')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                ->setParish($this->getReference('Parish-Ana-María-Campos-zul'))
                ;
                $this->addReference("City-El-Mecocal-zul", $city);
                $manager->persist($city);                
                        
                
        $city = new City();
        $city
                ->setDescription('Quisiro')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                ->setParish($this->getReference('Parish-Faría-zul'))
                ;
                $this->addReference("City-Quisiro-zul", $city);
                $manager->persist($city);                
                                
                
        $city = new City();
        $city
                ->setDescription('El Consejo de Ciruma')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                ->setParish($this->getReference('Parish-San-Antonio-zul'))
                ;
                $this->addReference("City-El-Consejo-de-Ciruma-zul", $city);
                $manager->persist($city);              
                
                
        $city = new City();
        $city
                ->setDescription('Sabaneta de Palmas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                ->setParish($this->getReference('Parish-San-José-mi-zul'))
                ;
                $this->addReference("City-Sabaneta-de-Palmas-zul", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('Punta de Piedras')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Miranda-zul'))
                ->setParish($this->getReference('Parish-José-Antonio-Chaves-zul'))
                ;
                $this->addReference("City-Punta-de-Piedras-zul", $city);
                $manager->persist($city);             
                        
                
        $city = new City();
        $city
                ->setDescription('Sinamaica')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Indígena-Bolivariano-Guajira-zul'))
                ->setParish($this->getReference('Parish-Sinamaica-zul'))
                ;
                $this->addReference("City-Sinamaica-zul", $city);
                $manager->persist($city);           
                
        $city = new City();
        $city
                ->setDescription('Cojoro')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Indígena-Bolivariano-Guajira-zul'))
                ->setParish($this->getReference('Parish-Alta-Guajira-zul'))
                ;
                $this->addReference("City-Cojoro-zul", $city);
                $manager->persist($city);            
       
                
        $city = new City();
        $city
                ->setDescription('El Molinete')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Indígena-Bolivariano-Guajira-zul'))
                ->setParish($this->getReference('Parish-Elías-Sánchez-Rubio-zul'))
                ;
                $this->addReference("City-El-Molinete-zul", $city);
                $manager->persist($city);            
               
                
                
        $city = new City();
        $city
                ->setDescription('Paraguaipoa')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Indígena-Bolivariano-Guajira-zul'))
                ->setParish($this->getReference('Parish-Guajira-zul'))
                ;
                $this->addReference("City-Paraguaipoa-zul", $city);
                $manager->persist($city);            
               
                
        $city = new City();
        $city
                ->setDescription('La Villa del Rosario')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Rosario-de-Perija-zul'))
                ->setParish($this->getReference('Parish-El-Rosario-zul'))
                ;
                $this->addReference("City-La-Villa-del-Rosario-zul", $city);
                $manager->persist($city);            
               
        $city = new City();
        $city
                ->setDescription('Barranquitas')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Rosario-de-Perija-zul'))
                ->setParish($this->getReference('Parish-Donaldo-García-zul'))
                ;
                $this->addReference("City-Barranquitas-zul", $city);
                $manager->persist($city);            
                       
        $city = new City();
        $city
                ->setDescription('San Ignacio')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Rosario-de-Perija-zul'))
                ->setParish($this->getReference('Parish-Sixto-Zambrano-zul'))
                ;
                $this->addReference("City-San-Ignacio-zul", $city);
                $manager->persist($city);                               
                
                
        $city = new City();
        $city
                ->setDescription('San Francisco')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                ->setParish($this->getReference('Parish-San-Francisco-zul'))
                ;
                $this->addReference("City-San-Francisco-zul", $city);
                $manager->persist($city);         
                
                
        $city = new City();
        $city
                ->setDescription('El Bajo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                ->setParish($this->getReference('Parish-El-Bajo-zul'))
                ;
                $this->addReference("City-El-Bajo-zul", $city);
                $manager->persist($city);         
                
                       
        $city = new City();
        $city
                ->setDescription('El Silencio')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                ->setParish($this->getReference('Parish-Domitila-Flores-zul'))
                ;
                $this->addReference("City-El-Silencio-zul", $city);
                $manager->persist($city);         
                        
                
        $city = new City();
        $city
                ->setDescription('Sierra Maestra')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                ->setParish($this->getReference('Parish-Francisco-Ochoa-zul'))
                ;
                $this->addReference("City-Sierra-Maestra-zul", $city);
                $manager->persist($city);         
                                
                
                 
        $city = new City();
        $city
                ->setDescription('Los Cortijos')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                ->setParish($this->getReference('Parish-Los-Cortijos-zul'))
                ;
                $this->addReference("City-Los-Cortijos-zul", $city);
                $manager->persist($city);         
                                        
        $city = new City();
        $city
                ->setDescription('Sur América')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                ->setParish($this->getReference('Parish-Marcial-Hernández-zul'))
                ;
                $this->addReference("City-Sur-América-zul", $city);
                $manager->persist($city);                 
                
        $city = new City();
        $city
                ->setDescription('Urbanización El Caujaro')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-San-Francisco-zul'))
                ->setParish($this->getReference('Parish-Jose-Domingo-Rus-zul'))
                ;
                $this->addReference("City-Urbanización-El-Caujaro-zul", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Santa Rita')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Santa-Rita-zul'))
                ->setParish($this->getReference('Parish-Santa Rita-zul'))
                ;
                $this->addReference("City-Santa-Rita-zul", $city);
                $manager->persist($city);           
                        
                
        $city = new City();
        $city
                ->setDescription('El Mene')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Santa-Rita-zul'))
                ->setParish($this->getReference('Parish-El-Mene-zul'))
                ;
                $this->addReference("City-El-Mene-zul", $city);
                $manager->persist($city);           
                               
                
        $city = new City();
        $city
                ->setDescription('Palmarejo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Santa-Rita-zul'))
                ->setParish($this->getReference('Parish-José-Cenobio-Urribarrí-zul'))
                ;
                $this->addReference("City-Palmarejo-zul", $city);
                $manager->persist($city);           
                                       
        $city = new City();
        $city
                ->setDescription('El Guanábano')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Santa-Rita-zul'))
                ->setParish($this->getReference('Parish-Pedro-Lucas-Urribarrí-zul'))
                ;
                $this->addReference("City-El-Guanábano-zul", $city);
                $manager->persist($city);              
                
        $city = new City();
        $city
                ->setDescription('Tía Juana')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Simon-Bolivar-zul'))
                ->setParish($this->getReference('Parish-Manuel-Manrique-zul'))
                ;
                $this->addReference("City-Tía-Juana-zul", $city);
                $manager->persist($city);             
                
                
        $city = new City();
        $city
                ->setDescription('San Isidro')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Simon-Bolivar-zul'))
                ->setParish($this->getReference('Parish-Rafael-Maria-Baralt-zul'))
                ;
                $this->addReference("City-San-Isidro-sb-zul", $city);
                $manager->persist($city);             
                
        $city = new City();
        $city
                ->setDescription('Sabana de La Plata')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Simon-Bolivar-zul'))
                ->setParish($this->getReference('Parish-Rafael-Urdaneta-sb-zul'))
                ;
                $this->addReference("City-Sabana-de-La-Plata-zul", $city);
                $manager->persist($city);                 
                
                
        $city = new City();
        $city
                ->setDescription('Bobures')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                ->setParish($this->getReference('Parish-Bobures-zul'))
                ;
                $this->addReference("City-Bobures-zul", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('El Batey')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                ->setParish($this->getReference('Parish-El-Batey-zul'))
                ;
                $this->addReference("City-El-Batey-zul", $city);
                $manager->persist($city);           
                
                
        $city = new City();
        $city
                ->setDescription('Gibraltar')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                ->setParish($this->getReference('Parish-Gibraltar-zul'))
                ;
                $this->addReference("City-Gibraltar-zul", $city);
                $manager->persist($city);           
                        
        $city = new City();
        $city
                ->setDescription('San Antonio')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                ->setParish($this->getReference('Parish-Heras-zul'))
                ;
                $this->addReference("City-San-Antonio-zul", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Santa María')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                ->setParish($this->getReference('Parish-Monseñor-Arturo-Álvarez-zul'))
                ;
                $this->addReference("City-Santa-María-zul", $city);
                $manager->persist($city);            
                
                
        $city = new City();
        $city
                ->setDescription('Caja Seca')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Sucre-zul'))
                ->setParish($this->getReference('Parish-Rómulo-Gallegos-zul'))
                ;
                $this->addReference("City-Caja-Seca-zul", $city);
                $manager->persist($city);            
                        
                
                
        $city = new City();
        $city
                ->setDescription('Bachaquero')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Valmore Rodriguez-zul'))
                ->setParish($this->getReference('Parish-La-Victoria-zul'))
                ;
                $this->addReference("City-Bachaquero-zul", $city);
                $manager->persist($city);                  
                
                
        $city = new City();
        $city
                ->setDescription('Bachaquero')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Valmore Rodriguez-zul'))
                ->setParish($this->getReference('Parish-Rafael-Urdaneta-zul'))
                ;
                $this->addReference("City-Bachaquero-ru-zul", $city);
                $manager->persist($city);         
                
                
         $city = new City();
        $city
                ->setDescription('El Corozo')
                ->setCapital(false)
                ->setState($this->getReference('State-Zulia'))
                ->setMunicipality($this->getReference('Municipality-Valmore Rodriguez-zul'))
                ->setParish($this->getReference('Parish-Raúl-Cuenca-zul'))
                ;
                $this->addReference("City-El-Corozo-ru-zul", $city);
                $manager->persist($city);          
        
            $manager->flush();
    }

    public function getOrder() {
        return 5;
    }
}
