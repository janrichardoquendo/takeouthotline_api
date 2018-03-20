<?php
/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 08/03/2017
 * Time: 6:31 PM
 */

namespace TakeOutHotline\Resources;
use TakeOutHotline\AbstractResource;
use TakeOutHotline\Entitites\Client as Client;
date_default_timezone_set("Asia/Bangkok");
class ClientResource extends AbstractResource
{
    public function getClient($id)
    {

        

        $result = [];

        $clientData =  $this->getEntityManager()->getRepository('TakeOutHotline\Entities\Client')->findBy(['postcode' => $id]);




        foreach($clientData as $key => $value){
            $categories = [];

            


            /**
             * @var \TakeOutHotline\Entities\Client $value
             */

            $temCategory= $value->getFilteredCategories();

            foreach ($temCategory as $cagegoryKeys => $category){

                /**
                 * @var \TakeOutHotline\Entities\Category $category
                 */
                $menus = [];
                $tempMenus = $category->getFilteredMenus();


                foreach ($tempMenus as $menusKeys => $menusValue){
                    /**
                     * @var \TakeOutHotline\Entities\Menus $menusValue
                     */

                    $menuPrices= [];
                    $tempMenuPrices = $menusValue->getMenuPrices();

                    foreach ($tempMenuPrices as $menuPriceKey => $menuPriceValue){
                        /**
                         * @var \TakeOutHotline\Entities\MenuPrice $menuPriceValue
                         */
                        $menuPrices[$menuPriceKey]["price_id"] = $menuPriceValue->getId();
                        $menuPrices[$menuPriceKey]["price"] = $menuPriceValue->getPrice();
                        $menuPrices[$menuPriceKey]["opt_type"] = utf8_encode($menuPriceValue->getOptType());

                    }

                    $menus[$menusKeys]["menu_id"] = $menusValue->getId();
                    $menus[$menusKeys]["menu_name"] = utf8_encode($menusValue->getMenuName());
                    $menus[$menusKeys]["menu_description"] = $menusValue->getMenuDescription();
                    $menus[$menusKeys]["menu_image"] = $menusValue->getMenuImage();
                    $menus[$menusKeys]["menu_prices"] = $menuPrices;
                }

                $categories[$cagegoryKeys]["category_id"] = $category->getId();
                $categories[$cagegoryKeys]["catname"] = utf8_encode($category->getCatName());
                $categories[$cagegoryKeys]["catdescription"] = utf8_encode($category->getCatDescription());
                $categories[$cagegoryKeys]["menus"] = $menus;

            }


            $result[$key]["client_id"] = $value->getId();
            $result[$key]["title"] = $value->getTitle();
            $result[$key]["firstname"] = utf8_encode($value->getFirstname());
            $result[$key]["middlename"] = utf8_encode($value->getMiddlename());
            $result[$key]["lastname"] = utf8_encode($value->getLastname());
            $result[$key]["name_resto"] = utf8_encode($value->getNameResto());
            $result[$key]["postcode"] = $value->getPostcode();
            $result[$key]["phone"] = $value->getPhone();
            $result[$key]["contact"] = $value->getContact();
            $result[$key]["address"] = utf8_encode($value->getAddress());
            $result[$key]["address2"] = utf8_encode($value->getAddress2());
            $result[$key]["city"] = utf8_encode($value->getCity());
            $result[$key]["town"] = utf8_encode($value->getTown());
            $result[$key]["country"] = utf8_encode($value->getCountry());
            $result[$key]["exchange_rate"] = $value->getExchangeRate();
            $result[$key]["categories"] = $categories;

        }

        return $result;

    }
}
