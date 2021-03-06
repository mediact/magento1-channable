<?php
/**
 * Magmodules.eu - http://www.magmodules.eu
 *
 * NOTICE OF LICENSE
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@magmodules.eu so we can send you a copy immediately.
 *
 * @category      Magmodules
 * @package       Magmodules_Channable
 * @author        Magmodules <info@magmodules.eu)
 * @copyright     Copyright (c) 2018 (http://www.magmodules.eu)
 * @license       http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 */

class Magmodules_Channable_Model_Adminhtml_System_Config_Source_Textattribute
    extends Magmodules_Channable_Model_Adminhtml_System_Config_Source_Attribute_Abstract
{

    /**
     * @return array
     */
    public function getBackendTypes()
    {
        return array('text', 'varchar', 'static');
    }

    /**
     * @return array
     */
    public function getExludeAttributes()
    {
        return array(
            'compatibility',
            'gallery',
            'installation',
            'language_support',
            'country_of_manufacture',
            'links_title',
            'current_version',
            'custom_design',
            'custom_layout_update',
            'gift_message_available',
            'image',
            'image_label',
            'media_gallery',
            'msrp_display_actual_price_type',
            'msrp_enabled',
            'options_container',
            'price_view',
            'page_layout',
            'samples_title',
            'sku_type',
            'tier_price',
            'url_key',
            'small_image',
            'small_image_label',
            'thumbnail',
            'thumbnail_label',
            'recurring_profile',
            'version_info',
            'meta_title',
            'meta_keyword',
            'category_ids',
            'has_options',
            'required_options',
            'url_path',
            'updated_at'
        );
    }
}