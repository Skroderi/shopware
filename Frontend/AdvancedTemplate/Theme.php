<?php
/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 */

namespace Shopware\Themes\AdvancedTemplate;

use Doctrine\Common\Collections\ArrayCollection;
use Shopware\Components\Form;
use Shopware\Components\Theme\ConfigSet;

class Theme extends \Shopware\Components\Theme{

    protected $extend = 'Responsive';
    protected $name = 'Advanced Template';
    protected $description = '';
    protected $author = 'Bartek';
    protected $license = '';
    protected $inheritanceConfig=false;
    protected $javascript =[
        'src/js/jquery.helloworld.js',
        'src/js/jquery.cart-animation.js',
        'src/js/jquery.slider-demo.js'
    ];

public function createConfig(Form\Container\TabContainer $container)
{
//    $tab = $this -> createTab('first_tab', 'My first tab', []);
//    $fieldSet = $this->createFieldSet('first_fieldset','My fieldset',[]);
//    $textField = $this->createTextField('first_fieldset','My first textfield','some text', []);
//
//    $fieldSet->addElement($textField);
//    $tab-> addElement($fieldSet);
//    $container->addTab($tab);


    $tabPanel = $this->createTabPanel('main_tab_panel');

    $tabPanel -> addTab($this -> createColorTab());

    $tabPanel -> addTab($this -> createSettingsTab());

    $tab= $this->createTab(
       'main_tab',
'My tab Name'
   );

    $tab->addElement($tabPanel);
    $container->addElement($tab);

}

    private function createColorTab(){
    $tab = $this->createTab(
        'color_tab',
        'Colors'
    );

    $fieldSet = $this->createFieldSet(
        'color fieldset',
        'Colors'
        );

    $backgroundColor = $this->createColorPickerField(
'backgroundColor',
        'backgroundColor',
        '#ff0000'
    );

    $primaryColor = $this->createColorPickerField(
        'brand-primary',
        'Primary color',
        '#ffCCCC'
    );

    $fieldSet->addElement($backgroundColor);
    $fieldSet->addElement($primaryColor);
    $tab->addElement($fieldSet);

    return $tab;
    }

    private function createSettingsTab(){

        $tab = $this->createTab(
            'settings_tab',
            'Settings'
        );

        $settingsFieldset = $this->createFieldSet(
            'settings_fieldset',
            'Settings'
        );

        $sloganField = $this->createTextField(
            'themeSlogan',
            'Shop slogan',
            '',
            ['attributes' => [
                'lessCompatible'=> false,
                'anchor' => '100%'
            ]]
        );


        $tab->addElement($settingsFieldset);
        $settingsFieldset->addElement($sloganField);

        return $tab;
    }
//CREATE CONFIG IN CONFIGURE THEME AND LEFT BOTTOM


    public function createConfigSets(ArrayCollection $collection)
    {
         $greenSet = $this->createGreenConfigSet();
         $purpleSet = $this->createPurpleConfigSet();

        $collection->add($greenSet);
        $collection->add($purpleSet);
    }

    private function createGreenConfigSet()
    {
        $greenSet = new ConfigSet();
        $greenSet->setName('Green Set');
        $greenSet->setDescription('Everything is green');
        $greenSet->setValues([
            'backgroundColor'=> '#EDF6F4',
            'brand-primary' => '#00A392'
        ]);
        return $greenSet;
    }

    private function createPurpleConfigSet()
    {
        $purpleSet = new ConfigSet();
        $purpleSet->setName('Purple Set');
        $purpleSet->setDescription('Everything is purple');
        $purpleSet->setValues([
            'backgroundColor'=> '#F4EDF6',
            'brand-primary' => '#84139C'
        ]);
        return $purpleSet;
    }

}



//        $greenSet = new ConfigSet();
//        $greenSet->setName('Green Set');
//        $greenSet->setDescription('Everything is green');
//        $greenSet->setValues([
//            'backgroundColor'=> '#EDF6F4',
//            'brand-primary' => '#EDF6F4'
//        ]);
//        $collection->add($greenSet);
