#!/usr/bin/perl 

my $wsad   = $ARGV[0];
    chomp $wsad;
    open(A,$wsad);
    @plik=<A>;
    close(A);

my $myrda   = $ARGV[1];
    chomp $myrda;
    open(A,$myrda);
    @plikm=<A>;
    close(A);

$postal_type ="GOODS_PRIO"; $size_class = "3"; $target_sp_point = "1"; $sender_company = "olo";  $sender_country = "PL"; $sender_zip_code = "22-000"; $sender_city = "Włodawa"; $sender_address_line_1 = "wiesz gdzie :)"; $receiver_country = "NO";  $is_documents = "0"; $reason_for_export="SALES OF GOODS"; $terms_of_trade ="DDU"; $sender_tax_id = "PL001200055"; $duty_value_currency = "NOK"; $_quantity = "1"; $_content_type = "GOODS";
$_country_of_origin = "PL"; 

print "postal_type;size_class; weight; target_sp_point; sender_name; sender_company; sender_country; sender_zip_code; sender_city; sender_address_line_1; sender_address_line_2; sender_tel; sender_email; receiver_name; receiver_company; receiver_country; receiver_zip_code; receiver_city; receiver_address_line_1; receiver_address_line_2; receiver_tel ; receiver_email; content; ref; value; value_currency; note1; note2; is_documents; reason_for_export; shipment_date; terms_of_trade; sender_tax_id; receiver_tax_id; duty_value_currency; _unit_value; _quantity; _description; _content_type; _country_of_origin; _hs_tariff_code; _unit_value_gross; _product_url; _sku; _unit_weight_g_net; _unit_weight_g_gross; _unit_of_measurement; sender_eori; invoice_id; ioss_number\n";

foreach $linia(@plik){    
			($customer_no, $member_no, $member_club, $member_subclub, $order_no, $invoice_no, $purchase_no, $ocr, $invoice_no_in_batch, $invoice_bundle_no, $invoicedate, $duedate, $invoicetext, $nextdeliverydate, $payment_type, $shipment_type, $payment_terms, $shipment_terms, $ordertype, $language, $currency, $amount_invoiced, $discount, $shipment_fee, $payment_fee, $charge, $rounding, $amount_credited_or_paid, $amount_to_pay, $amount_checksum, $package_code, $seller_no, $email, $phone, $cellphone, $vat_reg_no, $gender, $person_flg, $order_text, $type, $first_name, $last_name, $street, $co, $zip, $city, $country, $country_iso2, $rowno, $itemno, $name, $pluno, $attribute1, $attribute2, $attribute3, $price, $vat_rate, $quantity, $quantity_delivered, $discount, $personalization_text, $rowno, $itemno2, $name1, $pluno, $attribute1, $attribute2, $attribute3, $quantity, $stockhouse) = split(/;/, $linia);

foreach $liniam(@plikm){        
		        ($kod, $waga, $t)=split(/;/, $liniam);
                 chomp($t);
                 $taryfa = $t;
	if ($itemno2 eq $kod){
           @kody=split(//, $zip);
           $kody = scalar @kody;
            if ($kody == 3){  $zip = '0' . $zip; }

$note1 = $invoice_no; 
            $_sku = $itemno; 
            $content = $name;
            $_description = $name1;
            $_unit_value = $price;
            $receiver_name = "$first_name $last_name";
            $receiver_address_line_1 = $street;
            $receiver_city = $city;
            $receiver_zip_code = $zip; #kody 
  $weight = $waga;
  $_unit_weight_g_gross  = $waga;
  $_hs_tariff_code = $taryfa;

print "$postal_type;$size_class;$weight;$target_sp_point;$sender_name;$sender_company;$sender_country;$sender_zip_code;$sender_city;$sender_address_line_1;$sender_address_line_2;$sender_tel;$sender_email;$receiver_name;$receiver_company;$receiver_country;$receiver_zip_code;$receiver_city;$receiver_address_line_1;$receiver_address_line_2;$receiver_tel;$receiver_email;$content;$ref;$value;$value_currency;$note1;$note2;$is_documents;$reason_for_export;$shipment_date;$terms_of_trade;$sender_tax_id;$receiver_tax_id;$duty_value_currency;$_unit_value;$_quantity;$_description;$_content_type;$_country_of_origin;$_hs_tariff_code;$_unit_value_gross;$_product_url;$_sku;$_unit_weight_g_net; $_unit_weight_g_gross;$_unit_of_measurement;$sender_eori;$invoice_id;$ioss_number\n";
		}else{}
      }
 }


