<?php
namespace TakeOutHotline\Resources;
use TakeOutHotline\AbstractResource;
use TakeOutHotline\Entities\Client;
use TakeOutHotline\Entities\Customer;
use TakeOutHotline\Entities\Menus;
use TakeOutHotline\Entities\Order;
use TakeOutHotline\Entities\OrdersItem;


class OrderResouce extends AbstractResource
{

    public function createOrder($params)
    {
        date_default_timezone_set("Asia/Manila");

        $customerParams = $params["customer"];
        $clientParams = $params["client"];
        $ordersParams = $params["orders"];
        $total = $params["total"];
        //$orderItems = [];

        // Customer
        /**
         * @var \TakeOutHotline\Entities\Customer $customer
         */
        $customer = $this->getEntityManager()->getRepository('TakeOutHotline\Entities\Customer')->find($customerParams["id"]);
        $customer->setFirstName($customerParams["first_name"]);
        $customer->setLastName($customerParams["last_name"]);
        $customer->setAddress($customerParams["address"]);
        $customer->setAddress2($customerParams["address2"]);
        $customer->setCity($customerParams["city"]);
        $customer->setPostalCode($customerParams["postal_code"]);
        $customer->setPhone($customerParams["phone"]);

        /**
         * @var \TakeOutHotline\Entities\Client $client
         */
        $client = $this->getEntityManager()->getRepository('TakeOutHotline\Entities\Client')->find($clientParams['client_id']);


        $order = new Order();
        $order->setClient($client);
        $order->setTotal($total);
        $order->setCustomer($customer);
        $order->setFirstName($customer->getFirstName());
        $order->setLastName($customer->getLastName());
        $order->setAddress1($customer->getAddress());
        $order->setAddress2($customer->getAddress2());
        $order->setCity($customer->getCity());
        $order->setCookie("1488192762");
        $order->setPostcode($customer->getPostalCode());
        $order->setPhone($customer->getPhone());
        $order->setTakenOrder(0);
        $order->setOrderDate(new \DateTime());
        $order->setDataFrom('app');
        $order->setStatus(0);


        $this->getEntityManager()->persist($order);
        $this->getEntityManager()->flush();

        foreach ($ordersParams as $key => $item)
        {
            $orderItemsObj = new OrdersItem();

            /**
             * @var \TakeOutHotline\Entities\Menus $menuItem
             */
            $menuItem = $this->getEntityManager()->getRepository('TakeOutHotline\Entities\Menus')->find($item['_id']);

            $orderItemsObj->setMenus($menuItem);
            $orderItemsObj->setQuantity($item['_quantity']);
            $orderItemsObj->setClient($client);
            $orderItemsObj->setOrder($order);
            $orderItemsObj->setItemId(1);
            $orderItemsObj->setAddon(0);

            $this->getEntityManager()->persist($orderItemsObj);
            $this->getEntityManager()->flush();
        }

        return $order->getId();

    }

    public function getOrderHistory($customer_id)
    {
        $data = [];
        /**
         * @var \TakeOutHotline\Entities\Customer $customer
         */
        $customer = $this->getEntityManager()->getRepository('TakeOutHotline\Entities\Customer')->find($customer_id);

        //$orders_arr = array_reverse($customer->getOrders()->getValues());
        $orders_arr = [];
        $tempValOrdersItem = $customer->getOrders()->getValues();
        foreach ($tempValOrdersItem as $itemTemp){
            /**
             * @var \TakeOutHotline\Entities\Order $itemTemp
             */
            if($itemTemp->getStatus() == 1){
                $orders_arr[] = $itemTemp;
            }
        }

        foreach ($orders_arr as $item){
            $tempItems = [];
            $orderItems = [];
            /**
             * @var \TakeOutHotline\Entities\Order $item
             */

            $ordersItem = $item->getOrderItem();
            foreach ($ordersItem as $items){
                /**
                 * @var \TakeOutHotline\Entities\Ordersitem $items
                 */
                /**
                 * @var \TakeOutHotline\Entities\Menus $menuName
                 */

                $menuName = $items->getMenus();
                $tempItem = [
                    "order_item_id" => $items->getId(),
                    "quantity" => $items->getQuantity(),
                    "menu_name" => $menuName->getMenuName()
                ];
                $tempItems[] = $tempItem;

            }

            $orderItems = [
                "order_id" => $item->getId(),
                "order_date" => date("Y-m-d h:i:s", $item->getOrderDate()->getTimestamp()),
                "order_from" => $item->getDataFrom(),
                "payment_mode" => $item->getMode(),
                "items" => $tempItems,
                "status" => $item->getStatus(),
                "total" => $item->getTotal()
            ];


            $data[] = $orderItems;

        }

        if(count($data) > 0){
            return array("data" => $data, "success" => true, "msg" => "Success getting data");
        } else {
            return array("data" => $data, "success" => false, "msg" => "No data found");
        }

        return $data;

    }
}
