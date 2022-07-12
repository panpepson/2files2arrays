<?php

error_reporting(0);

//require "./f_ciecie.php";

$plik = $argv[1];


$f =  ciecie($plik);
$csv = $f.'.csv';
$current = file_get_contents($csv);

$xml = simplexml_load_file($plik);
$list = $xml->invoicelist->invoice;
#var_dump($list);

$current .=  "customer_no;member_no;member_club;member_subclub;order_no;invoice_no;purchase_no;ocr;invoice_no_in_batch;invoice_bundle_no;invoicedate;duedate;invoicetext;nextdeliverydate;payment_type;shipment_type;payment_terms;shipment_terms;ordertype; language;currency;amount_invoiced;discount;shipment_fee;payment_fee;charge;rounding;amount_credited_or_paid;amount_to_pay;amount_checksum;package_code;seller_no;email;phone;cellphone;vat_reg_no;gender;person_flg;order_text;type;first_name; last_name;street;co;zip;city;country;country_iso2;rowno;itemno;name;pluno;attribute1;attribute2;attribute3;price;vat_rate;quantity;quantity_delivered;discount;personalization_text;rowno;itemno;name;pluno;attribute1;attribute2;attribute3; quantity;stockhouse;type;campaign_name;campaign_name_display;campaign_code;\n";
for ($i = 0; $i < count($list); $i++) {
		$current .= $xml->invoicelist->invoice[$i]->customer_no.";";	
         $current .= $xml->invoicelist->invoice[$i]->member_no.";";
         $current .= $xml->invoicelist->invoice[$i]->member_club.";";
         $current .= $xml->invoicelist->invoice[$i]->member_subclub	.";";
         $current .= $xml->invoicelist->invoice[$i]->order_no.";";
         $current .= $xml->invoicelist->invoice[$i]->invoice_no.";";
         $current .= $xml->invoicelist->invoice[$i]->purchase_no.";";
         $current .= $xml->invoicelist->invoice[$i]->ocr.";";
         $current .= $xml->invoicelist->invoice[$i]->invoice_no_in_batch.";";
         $current .= $xml->invoicelist->invoice[$i]->invoice_bundle_no.";";
         $current .= $xml->invoicelist->invoice[$i]->invoicedate.";";
         $current .= $xml->invoicelist->invoice[$i]->duedate.";";
         $current .= $xml->invoicelist->invoice[$i]->invoicetext.";";
         $current .= $xml->invoicelist->invoice[$i]->nextdeliverydate.";";
         $current .= $xml->invoicelist->invoice[$i]->payment_type.";";
         $current .= $xml->invoicelist->invoice[$i]->shipment_type.";";
         $current .= $xml->invoicelist->invoice[$i]->payment_terms.";";
         $current .= $xml->invoicelist->invoice[$i]->shipment_terms.";";
         $current .= $xml->invoicelist->invoice[$i]->ordertype.";";
         $current .= $xml->invoicelist->invoice[$i]->language.";";
         $current .= $xml->invoicelist->invoice[$i]->currency.";";
         $current .= $xml->invoicelist->invoice[$i]->amount_invoiced.";";
         $current .= $xml->invoicelist->invoice[$i]->discount.";";
         $current .= $xml->invoicelist->invoice[$i]->shipment_fee.";";
         $current .= $xml->invoicelist->invoice[$i]->payment_fee.";";
         $current .= $xml->invoicelist->invoice[$i]->charge.";";
         $current .= $xml->invoicelist->invoice[$i]->rounding.";";
         $current .= $xml->invoicelist->invoice[$i]->amount_credited_or_paid.";";
         $current .= $xml->invoicelist->invoice[$i]->amount_to_pay.";";
         $current .= $xml->invoicelist->invoice[$i]->amount_checksum.";";
         $current .= $xml->invoicelist->invoice[$i]->package_code.";";
         $current .= $xml->invoicelist->invoice[$i]->seller_no.";";
         $current .= $xml->invoicelist->invoice[$i]->email.";";
         $current .= $xml->invoicelist->invoice[$i]->phone.";";
         $current .= $xml->invoicelist->invoice[$i]->cellphone.";";
         $current .= $xml->invoicelist->invoice[$i]->vat_reg_no.";";
         $current .= $xml->invoicelist->invoice[$i]->gender.";";
         $current .= $xml->invoicelist->invoice[$i]->person_flg.";";
         $current .= $xml->invoicelist->invoice[$i]->order_text.";";
         $current .= $xml->invoicelist->invoice[$i]->type.";";
         $current .= $xml->invoicelist->invoice[$i]->address[0]->first_name.";";
         $current .= $xml->invoicelist->invoice[$i]->address[0]->last_name.";";
         $current .= $xml->invoicelist->invoice[$i]->address[0]->street.";";
         $current .= $xml->invoicelist->invoice[$i]->address[0]->co.";";
         $current .= $xml->invoicelist->invoice[$i]->address[0]->zip.";";
         $current .= $xml->invoicelist->invoice[$i]->address[0]->city.";";
         $current .= $xml->invoicelist->invoice[$i]->address[0]->country.";";
         $current .= $xml->invoicelist->invoice[$i]->address[0]->country_iso2.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->rowno.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->itemno.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->name.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->pluno.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->attribute1.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->attribute2.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->attribute3.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->price.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->vat_rate.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->quantity.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->quantity_delivered.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->discount.";";
         $current .= $xml->invoicelist->invoice[$i]->goods->item->personalization_text.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->rowno.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->itemno.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->name.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->pluno.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->attribute1.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->attribute2.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->attribute3.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->quantity.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->stockhouse.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->type.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->campaign_name.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->campaign_name_display.";";
         $current .= $xml->invoicelist->invoice[$i]->pickinglist->item->campaign_code.";\n";
 }

file_put_contents($csv, $current);

function ciecie($plik){
        $DO = explode('_',$plik);
        $OD = explode('_',$DO[1]);
       $nplik = $OD[0];
       return $nplik; 
 }

?>
