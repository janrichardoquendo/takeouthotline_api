<?php
namespace TakeOutHotline\Resources;
/**
 * Created by PhpStorm.
 * User: joenefloresca
 * Date: 28/02/2017
 * Time: 3:27 PM
 */
use Doctrine\Common\Collections\ArrayCollection;
use TakeOutHotline\AbstractResource;
use TakeOutHotline\Entities\Customer as Customer;

class CustomerResource extends AbstractResource
{
    public function getCustomer($id)
    {
        /**
         * @var \TakeOutHotline\Entities\Customer $customer
         */
        $customer =  $this->getEntityManager()->getRepository('TakeOutHotline\Entities\Customer')->find($id);

        return [
            "fname" => $customer->getFirstName(),
            "lname" => $customer->getLastName(),
        ];

    }



    public function getCustomerByLogin($params)
    {
        /**
         * @var \TakeOutHotline\Entities\Customer $customer
         */
        $customer =  $this->getEntityManager()->getRepository('TakeOutHotline\Entities\Customer')->findOneBy(array('email' => $params['email']));             
        if($customer)
        {
             
            $pass1 = $this->trim($customer->getMypass());
            $pass2 = $this->trim(md5($params['mypass']));
            if( strcmp($pass1,$pass2) == 0)
            {
                return [
                    "success"=>true,
                    "msg"=>"Login Successfull",
                    "data"=>$this->mapCustomerData($customer)
                ];

            }
            else
            {
                return [
                    "success"=>false,
                    "msg"=>"Incorrect Password",
                    "data"=>null
                ];
            }
        }
        else
        {
            return [
                    "success"=>false,
                    "msg"=>"Incorrect Email/Password",
                    "data"=>null
                ];
        }

    }

    public function getCustomerProfile($customer_id)
    {
        /**
         * @var \TakeOutHotline\Entities\Customer $customer
         */
        $customer =  $this->getEntityManager()->getRepository('TakeOutHotline\Entities\Customer')->find($customer_id);


        if(count($customer) >0){
            $data = [
                "fname"  => $customer->getFirstName(),
                "lname"  => $customer->getLastName(),
                "email"  => $customer->getEmail(),
                "address"  => $customer->getAddress(),
                "address2"  => $customer->getAddress2(),
                "city"  => $customer->getCity(),
                "postal"  => $customer->getPostalCode(),
                "phone"  => $customer->getPhone(),
                "password"  => $customer->getMypass(),
            ];

            return array("data" => $data, "success" => true, "msg" => "Success getting data");
        } else {
            return array("data" => "", "success" => false, "msg" => "No data found");
        }
    }

    public function updateCustomerProfile($params)
    {
        $customer_id = $params["customer_id"];

        /**
         * @var \TakeOutHotline\Entities\Customer $customer
         */
        $customer =  $this->getEntityManager()->getRepository('TakeOutHotline\Entities\Customer')->find($customer_id);

        $currentPassword = $this->trim($customer->getMypass());

        // Check if password changed
        if($currentPassword == $params["password"]){
            $customer->setFirstName($params['fname']);
            $customer->setLastName($params['lname']);
            $customer->setEmail($params['email']);
            $customer->setAddress($params['address']);
            $customer->setAddress2($params['address2']);
            $customer->setCity($params['city']);
            $customer->setPostalCode($params['postal']);
            $customer->setPhone($params['phone']);
        } else {
            $newPassword = md5($params['password']);
            $customer->setFirstName($params['fname']);
            $customer->setLastName($params['lname']);
            $customer->setEmail($params['email']);
            $customer->setAddress($params['address']);
            $customer->setAddress2($params['address2']);
            $customer->setCity($params['city']);
            $customer->setPostalCode($params['postal']);
            $customer->setPhone($params['phone']);
            $customer->setMypass($newPassword);
        }

        $this->getEntityManager()->persist($customer);
        $this->getEntityManager()->flush();

        return array("success" => true, "msg" => "Success updating profile");
    }


    public function getCustomerAll()
    {
        $dataArr = [];

        /**
         * @var \TakeOutHotline\Entities\Customer $customer
         */
        $customer =  $this->getEntityManager()->getRepository('TakeOutHotline\Entities\Customer')->findAll();

        foreach ($customer as $key => $val)
        {
            /**
             * @var \TakeOutHotline\Entities\Customer $val
             */

            $dataArr[] = [
                "fname" => $val->getFirstName(),
                "lname" => $val->getLastName(),
                "email" => $val->getEmail(),
                "mypass" => $val->getMypass(),
            ];
        }

        return $dataArr;
    }


    public function createCustomer($params)
    {


        // Check if Email is existing
        $customerExist = $this->getEntityManager()->getRepository('TakeOutHotline\Entities\Customer')->findOneBy(["email"=>$params['email']]);

        if(count($customerExist) > 0){
            return ["error" => 1, "msg" => "Email already registered"];
        } else {
            $customer = $this->initCustomer($params);
            $this->getEntityManager()->persist($customer);
            $this->getEntityManager()->flush();
            return $this->mapCustomerData($customer);
        }
    }


    private function initCustomer($item)
    {

        $customer = new Customer();
        $customer->setFirstName($item['first_name']);
        $customer->setLastName($item['last_name']);
        $customer->setEmail($item['email']);
        $customer->setAddress($item['address']);
        $customer->setAddress2($item['address2']);
        $customer->setPhone($item['phone']);
        $customer->setPostalCode($item['postal_code']);
        $customer->setCity($item['city']);
        $customer->setMypass(md5($item['mypass']));
        $customer->setNameTitle($item['name_title']);
        $customer->setStatus('Yes');
        $customer->setDateRegistered(new \DateTime());
        $customer->setCusFrom('app');
        $customer->setRemarks('');
        $customer->setEmailVerified(0);

        return $customer;
    }

    private function mapCustomerData(Customer $data)
    {
        return[
            "id"=>$data->getId(),
            "first_name"=>$data->getFirstName(),
            "last_name"=>$data->getLastName(),
            "email"=>$data->getEmail(),
            "phone"=>$data->getPhone(),
            "address"=>$data->getAddress(),
            "address2"=>$data->getAddress2(),
            "postal_code"=>$data->getPostalCode(),
            "city"=>$data->getCity(),
            "name_title"=>$data->getNameTitle(),
            "status"=>$data->getStatus(),
            "remarks"=>$data->getRemarks(),
            "email_verified"=>$data->getEmailVerified()
         
        ];
    }



    private function trim($pass)
    {
        return preg_replace('/\s+/','',$pass);
    }
}