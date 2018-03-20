<?php
if (VALID_GMA != 1) die ("Direct access is not permitted.");

require_once $this->_config->get('app','dir.views') . "/view.html.php";  

class View extends App_View {
    
    public function vwAddEdit() 
    {   
    
     include_once 'sweet-alert.html.php';          
     
               
        $basket_total = $_SESSION[ md5('basket_total') ] > 0 ? $_SESSION[ md5('basket_total') ] : $this->default_amt;

        $net_amount   = sprintf("%.2f", $basket_total * .80);
        $vat_amount   = sprintf("%.2f", $basket_total * $this->config->get('app','app.vat'));
            
        /* Sage Pay */  
        require_once ('class.SagePay.php');    
        
        $sagePay = new SagePay();
        $sagePay->setCurrency('GBP');
        $sagePay->setAmount($basket_total);
        $sagePay->setDescription('Carexcesscover Annual Motoring Protection');
        $sagePay->setBillingSurname($this->vw_member['lastname']);
        $sagePay->setBillingFirstnames($this->vw_member['firstname']);
        $sagePay->setBillingCity($this->vw_member['town']);
        $sagePay->setBillingPostCode($this->vw_member['postcode']);
        $sagePay->setBillingAddress1($this->vw_member['address_line1']);
        $sagePay->setBillingAddress2($this->vw_member['address_line2']);
        $sagePay->setBillingCountry('GB');
        $sagePay->setDeliverySameAsBilling();
        $sagePay->setCustomerName($this->vw_member['firstname'].' '.$this->vw_member['lastname']);
        $sagePay->setCustomerEMail($this->vw_member['email']);
        $sagePay->setSendEMail();

        /* Example of using BasketXML */
        $xml = new DOMDocument();
        $basketNode = $xml->createElement("basket");
        $itemNode = $xml->createElement("item");

        $descriptionNode =  $xml->createElement( 'description' );
        $descriptionNode->nodeValue = 'Carexcesscover Annual Motoring Protection';
        $itemNode->appendChild($descriptionNode);

        $quantityNode =  $xml->createElement('quantity');
        $quantityNode->nodeValue = '1';
        $itemNode->appendChild($quantityNode);

        $unitNetAmountNode =  $xml->createElement('unitNetAmount');
        $unitNetAmountNode->nodeValue = $net_amount;
        $itemNode->appendChild($unitNetAmountNode);

        $unitTaxAmountNode =  $xml->createElement('unitTaxAmount');
        $unitTaxAmountNode->nodeValue = $vat_amount;
        $itemNode->appendChild($unitTaxAmountNode);

        $unitGrossAmountNode =  $xml->createElement('unitGrossAmount');
        $unitGrossAmountNode->nodeValue = $basket_total;
        $itemNode->appendChild($unitGrossAmountNode);

        $totalGrossAmountNode =  $xml->createElement('totalGrossAmount');
        $totalGrossAmountNode->nodeValue = $basket_total;
        $itemNode->appendChild($totalGrossAmountNode);

        $basketNode->appendChild( $itemNode );
        $xml->appendChild( $basketNode );

        //echo "<pre>";
        //print_r($xml);
        //print_r($sagePay);
        //echo "<p>".$basket_total.' '.$vat_amount.' '.$net_amount;
        //die();

        $sagePay->setBasketXML($xml->saveHTML());    

        $sagePay->setSuccessURL($this->config->get('app','url.site')
                                            ."/?app=register&mod=payment&action=welcome&"
                                            .md5('member_id')."={$_SESSION[ md5('member_id') ]}&"
                                            .md5('discount_code')."=".$_SESSION[ md5('discount_code') ]."&"
                                            .md5('mypass')."=".$_SESSION[ md5('mypass') ]);
        $sagePay->setFailureURL($this->config->get('app','url.site')."/?app=register&mod=payment&errmsg=Failed");              
                    

        $outstr .= 
        "                       
     <div id='page-wrap' class='signup'>   
      
      <section id='progress-wrap' >
        <div class='container'>
             <div class='row-spc'>
         
                 <ul id='progress'>
                 <li>
                   <div class='prog-complete'></div>
                   <p>Your vehicle details</p>
                 </li>
                 <li>
                   <div class='prog-complete'></div>
                   <p>Your  details</p>
                 </li>
                 <li>
                   <div class='progress prog-yellow'></div>
                   <p>Your payment details</p>
                 </li>
                 <li>
                   <div class='progress'></div>
                   <p>Completed!</p>
                 </li>

                 
               </ul>   
         
         
         </div> <!--  end row --> 
        </div>    
      </section>
      
      
         
          
      
   <section>
      <div class='container'>
         <div class='row-spc'>
         
            <div class='veh-details payment'>  
               <div class='py-title'> <h2> Your Carexcesscover annual motoring membership is &pound;19.99 </h2> </div>   
               
               <div class='voucher payment-wrapper'>
              
                    <form method='post' >
                                        <h3> Do you have a discount code? </h3>      
                                        <table width='100%'>
                                        <tr>
                                        <td width='50%'>
                                        <input type='text' name='discount_code' value='{$_POST['discount_code']}' class='veh-formbox' maxlength='40' placeholder='Discount code' >
                                        <input type='hidden' name='app' value='{$_REQUEST['app']}' /> 
                                        <input type='hidden' name='mod' value='{$_REQUEST['mod']}' />  
                                        </td>   
                                        <td style='float:left'>           
                                        <input type='submit' name='action' value='Update Total' id='button-update-total' >
                                        </td>
                                        </table>
                                        <div class='vmsg'>{$_REQUEST['voucher']}  </div> 
                                        
                                    <div class='pay-voucher'>      
                                      <input type='hidden' name='basket_total' value='{$basket_total}' />
                                      <input type='text' readonly='readonly'   value='Total to pay: &pound;{$basket_total}'/ >
                                    </div>        
                     </form>   
             
               </div>  <!-- /voucher -->
               
               
               <div id='wowcher' class=' payment-wrapper'>
                    <form method='post'>
                        <h3>Do you have a Wowcher code?</h3>
                           <table width='100%'>
                           <tr>
                           <td width='50%'>
                           <input type='text' name='wowcher_code' value='{$_POST['wowcher_code']}' class='veh-formbox' maxlength='40' placeholder='Enter Wowcher code' >
                           <input type='hidden' name='app' value='{$_REQUEST['app']}' /> 
                           <input type='hidden' name='mod' value='{$_REQUEST['mod']}' />  
                           </td>   
                           <td style='float:left'>  
                         <input type='hidden' name='action' value='wowcher_btn' />       
                         <input type='submit' value='Proceed' id='button-update-total' >
                           </td>
                           </table>
                        
                    </form>
               </div>
               
               
               
               
               <div class='pay-card payment-wrapper'>
                               <h3> Payment options</h3>            
                      <div class='payment-row'> 
                                <div class='down-rowbox col-xs-6' style='margin-right:5px'>
                                    <p class='pay-title'>Pay with Paypal</p>
                                    <div>
                                    
                                    
                                    <form action='".$this->config->get('app','paypal.url')."' method='post'>
                                            <input type='hidden' name='cmd' value='_xclick'>
                                         <!-- <input type='hidden' name='business' value='1ecaccounts@1easycall.com'> -->
                                         <input type='hidden' name='business' value='1ecaccounts-facilitator@1easycall.com'>  
                                            <input type='hidden' name='lc' value='GB'>
                                            <input type='hidden' name='item_name' value='Carexcesscover Annual Motoring Protection'>     
                                            <input type='hidden' name='button_subtype' value='services'>
                                            <input type='hidden' name='no_note' value='0'>    
                                            <input type='hidden' name='item_number' value='PCAMP'> 
                                            <input type='hidden' name='amount' value='{$basket_total}'>
                                            <input type='hidden' name='currency_code' value='GBP'>                                   
                                            <input type='hidden' name='bn' value='PP-BuyNowBF:btn_buynowCC_LG.gif:NonHosted'> 
                                            <input type='hidden' name='cbt' value='Return to Carexcesscover'>
                                            <input type='hidden' name='image_url' value='Carexcesscover'>
                                            
                                            <input type='hidden' name='return' value='".$this->config->get('app','url.site')
                                                ."/?app=register&mod=payment&action=welcome&"
                                                .md5('member_id')."={$_SESSION[ md5('member_id') ]}&"
                                                .md5('discount_code')."=".$_SESSION[ md5('discount_code') ]."&"
                                                .md5('mypass')."=".$_SESSION[ md5('mypass') ]."' />
                                          <input type='hidden' name='hosted_button_id' value='AYLVGMF55DQQQ'>              
                                          <input type='image' src='http://carexcesscover-dev.indigo21.com/themes/images/paypal-btn.png' border='0' name='submit' alt='PayPal – The safer, easier way to pay online!'  class='paypal-card'>
                                         <!-- <img alt='' border='0' src='https://www.paypalobjects.com/en_GB/i/scr/pixel.gif' width='1' height='1'>     -->

                                            
                                                                                                                                      
                                            <!--<input type='image' src='../themes/images/paypal.png' border='0' name='submit' alt='PayPal - The safer, easier way to pay online!'style='max-width:100%;width:300px'>
                                            <img alt='' border='0' src='https://www.paypalobjects.com/en_US/i/scr/pixel.gif' width='1' height='1'>-->
                                        </form>

                                      

                                    </div> 
                                </div>
                                    <div class='down-rowbox col-xs-6' style='margin-left:5px'>
                                    <p class='pay-title'>Pay with Sagepay</p>
                                     <!-- <form method='POST' id='SagePayForm' action='https://test.sagepay.com/gateway/service/vspform-register.vsp' > -->
                                             <form method='POST' id='SagePayForm' action= '" .$this->config->get('app','sagepay.url')."' > 
                                         <input type='hidden' name='VPSProtocol' value= '3.00'>   
                                           <input type='hidden' name='TxType' value= 'PAYMENT'>
                                           <input type='hidden' name='Vendor' value= 'carexcesscover'>
                                           <input type='hidden' name='Crypt' value= '".$sagePay->getCrypt()."'>     
                                           <input type='image' src='../themes/images/Sagepay-visa-master.png' name='submit' style='max-width:100%; border: 1px solid #c0c0c0;'>
                                       </form>  
                                </div>  
                            </div>
             
               </div>  <!-- /payment card -->
                  
                      
            </div>
         
         </div>
      </div>       
   </section>
        
        
   </div> <!--/page-wrap -->
        ";

        echo $outstr;
    }  
    
    public function vwWelcome()
    {   
        $basket_total = $_SESSION[ md5('basket_total') ] > 0 ? $_SESSION[ md5('basket_total') ] : $this->default_amt;
                                                                              
        $outstr .= 
        "
        
         <div id='page-wrap' class='signup'>   
      
      <section id='progress-wrap' >
        <div class='container'>
             <div class='row-spc'>
         
                 <ul id='progress'>
                 <li>
                   <div class='prog-complete'></div>
                   <p>Your vehicle details</p>
                 </li>
                 <li>
                   <div class='prog-complete'></div>
                   <p>Your  details</p>
                 </li>
                 <li>
                   <div class='prog-complete'></div>
                   <p>Your payment details</p>
                 </li>
                 <li>
                   <div class='prog-complete'></div>
                   <p>Completed!</p>
                 </li>

                 
               </ul>   
         
         
         </div> <!--  end row --> 
        </div>    
      </section>
      
                               
   
         <section id='feature' class='signup' >      
         <div class='container'>   
            <div class='row'>   
                <div id='content' style='width:100%'>
                    <div class='post-content'>         
                        <div class='register-container regpadgin'>                                                 
                          
                         
                            ";
                            
                    
                            
                            $member_id = $_SESSION['member_id'];    
                            $outstr .="
                          
                             <div class='success-wrapper'> 
                                <div class=' scheck-hidden'>
                                            <img src='../themes/images/icon/tick-large.png' >
                                </div> 
                                        <div class='p-head'>
                                        <div class='phead-wrap'>
                                            <h1>Thank you for joining car<b>excess</b><br/>cover!</h1>
                                            <p> You can now enjoy the peace of mind that your vehicle excess is covered by us. </p>
                                          </div>  
                                             <div class='succheck'>
                                            <img src='../themes/images/icon/tick-large.png' >
                                          </div>
                                            
                                         </div>
                                         
                                        <div class='p-body'> 
                                        <p class='nx-step'> Next steps</p>
                                        
                                         <div class='fnal-stps'>
                                        <div class='suc_content-div'>
                                         <div class='suc-icon'><img src='../themes/images/icon/sms-icon.png'>  </div>
    
                                           <div class ='ftxt-wrap'> 
                                            You&#39;ll shortly receive a SMS message from us whith your membership number and our 24/7 Accident Assistance phone number.                                           </div>
                                            </div>
                                            

                                            <div class='suc_content-div'>
                                                 <div class='suc-icon' ><img src='../themes/images/icon/phone-icon02.png'>   </div>
                                                 <div class ='ftxt-wrap'>  
                                                 Please save our Accident Assistance number on your phone and remember to call us straightaway in the event of an accident. 
                                                 </div>
                                            </div>

                                            <div class='suc_content-div'>
                                                   <div class='suc-icon'> <img src='../themes/images/icon/document-icon2.png'>   </div>
                                                   <div class ='ftxt-wrap'>  
                                                    You will also receive your excess guarantee document via email so keep an eye out for this, as it will tell you everything you need to know about the cover.                                 </div>
                                            </div>
                                        </div>  
                                     </div>
                                   </div> <!--/fnal-stps -->
                                   
                                   
                                                                         
                        </div> <!-- closing tag register-container -->
                    </div>   
                    <div class='fusion-clearfix'></div>   
                </div>   
            </div>   
        </div>    
        </section> 
        
        
        </div>  <!-- /page-wrap -->   
        ";

        echo $outstr;
    }        
        
  /* public function vwAutoLogin()
    {           
        $outstr .=             
        
       "<form name='form1' action='".str_ireplace('/register', '', $this->config->get('app', 'url.site'))."/drivers/' method='post'>              
            <input type='hidden' name='email' value='{$this->vw_user}' />
            <input type='hidden' name='mypass' value='{$this->vw_pass}' />
            <input type='hidden' name='action' value='login' />
            <script language='javascript'>document.form1.submit();</script>
            
        </form>";
        
        echo $outstr;
    } */
}        

?>
