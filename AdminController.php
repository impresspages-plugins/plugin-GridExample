<?php
/**
 * @package   ImpressPages
 *
 *
 */
namespace Plugin\GridExample;



class AdminController extends \Ip\GridController
{



    protected function config()
    {



        return array(
            'title' => 'Person list (gridExample table)',
            'table' => 'gridExample',

            // you can comment sortField and createPosition out
            'sortField' => 'gridOrder',
            'createPosition' => 'top', // 'top' or 'bottom'

//            'pageSize' => 3,
            'fields' => array(
                array(
                    'label' => 'Name',
                    'field' => 'name',
                ),
                array(
                    'type' => 'Select',
                    'label' => 'Age',
                    'field' => 'age',
                    'values' => array(
                        array('young', 'Young'),
                        array('old', 'Old'),
                    )
                ),
                array(
                    'type' => 'Checkbox',
                    'label' => 'In love',
                    'showInList' => true,
                    'field' => 'inLove'
                ),
                array(
                    'type' => 'RepositoryFile',
                    'label' => 'CV',
                    'showInList' => true,
                    'field' => 'cv'
                )

            )
        );
    }



}
