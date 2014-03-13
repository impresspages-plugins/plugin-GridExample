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
            'title' => __('Person list (gridExample table)', 'GridExample', FALSE),
            'table' => 'gridExample',

            // you can comment sortField and createPosition out
            'sortField' => 'gridOrder',
            'createPosition' => 'top', // 'top' or 'bottom'

//            'pageSize' => 3,
            'fields' => array(
                array(
                    'label' => __('Name', 'GridExample', FALSE),
                    'field' => 'name',
                ),
                array(
                    'type' => 'Select',
                    'label' => __('Age', 'GridExample', FALSE),
                    'field' => 'age',
                    'values' => array(
                        array('young', __('Young', 'GridExample', FALSE)),
                        array('old', __('Old', 'GridExample', FALSE))
                    )
                ),
                array(
                    'type' => 'Checkbox',
                    'label' => __('In love', 'GridExample', FALSE),
                    'showInList' => true,
                    'field' => 'inLove'
                ),
                array(
                    'type' => 'RepositoryFile',
                    'label' => __('CV', 'GridExample', FALSE),
                    'showInList' => true,
                    'field' => 'cv'
                )

            )
        );
    }



}
