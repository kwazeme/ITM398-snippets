<?php
/**
 * Selecting a field from another table using the recordset
 */

// Check for record
$check_sql = 'SELECT surname'
   . ' FROM contact'
   . " WHERE contact_id = '" . $cid . "'";

sc_select(rs, $check_sql);

//initialize the field
//{field_total} = 0;
if (false == {rs})     // Error while accessing database
{
    sc_error_message('Error while accessing database.');
}
else
{
   while(!$rs->EOF)
    {
		{c_surname} = $rs->fields[0];
		$rs->MoveNext();
    }
    $rs->Close();
}

'distance_percentage' => round((100 - ($distance / max(strlen($inputString), strlen($value))) * 100), 0)


/**
 * Hide/show a block
 */

 if ({premium_waiver} == 'Yes')     // Display block
 {
     sc_field_display(date_of_suspension, 'on');
 }
 else      // Hide block
 {
     sc_field_display(date_of_suspension, 'off');
 }
 
 /**
  * Hide/show drivers license block
  */
 
 if ({car_hire} == 'Yes')     // Display block
 {
     sc_field_display(nominated_driver, 'on');
     sc_field_display(driver_license_number, 'on');
     sc_field_display(license_issue_date, 'on');
     sc_field_display(where_veh_required, 'on');
     sc_field_display(date_vehicle_required, 'on');
 }
 else      // Hide block
 {
     sc_field_display(nominated_driver, 'off');
     sc_field_display(driver_license_number, 'off');
     sc_field_display(license_issue_date, 'off');
     sc_field_display(where_veh_required, 'off');
     sc_field_display(date_vehicle_required, 'off');
 }
 
 /**
  * Hide/show airtime block
  */
 
 if ({prepaid_airtime} == 'Yes')     // Display block
 {
     sc_field_display(airtime_network, 'on');
     sc_field_display(nominated_cellphone, 'on');
 }
 else      // Hide block
 {
     sc_field_display(airtime_network, 'off');
     sc_field_display(nominated_cellphone, 'off');
 }
 
 
 /**
  * Hide/show repariation block
  */
 
 if ({repatriation} == 'Yes')     // Display block
 {
     sc_field_display(town_deceased_in, 'on');
     sc_field_display(deceased_in_keep, 'on');
     sc_field_display(deceased_to_be_taken_to, 'on');
     sc_field_display(day_to_move_deceased, 'on');
 }
 else      // Hide block
 {
     sc_field_display(town_deceased_in, 'off');
     sc_field_display(deceased_in_keep, 'off');
     sc_field_display(deceased_to_be_taken_to, 'off');
     sc_field_display(day_to_move_deceased, 'off');
 }




?>


// Check for record
$check_sql = 'SELECT 
				universal_branch_code,
				bank_name'
   . ' FROM bank'
   . " WHERE bank_name = '" . {bank_name} . "'";

sc_select(rs, $check_sql);
echo 'baaaa';
//initialize the field

if (false == {rs})     // Error while accessing database
{
    sc_error_message('Error while accessing database.');
}
else
{
   while(!$rs->EOF)
    {
		{c_branch_code} = $rs->fields[0];
		$rs->MoveNext();
    }
    $rs->Close();
}


SELECT c.id_number
FROM contact c
JOIN beneficiary b ON c.contact_id = b.contact_id


Error inserting:
Column count doesn't match value count at row 1
{SC_DB_ERROR_INI}View SQL{SC_DB_ERROR_MID}
INSERT INTO 
attachment (
    attachment_id, 
    uploaded, 
    attachment_name, 
    attachment_size, 
    parent_id, 
    parent_type, 
    attachement_type_id, 
    attachment_path, 
    created_date, 
    modified_date, 
    base_url, 
    created_by, 
    modified_by) 
VALUES (
    4, 
    'levi-2.php', 
    'levi-2.php', 
    '1553', 
    1, 
    '2024-11-26 21:43:33', 
    '2024-11-26 21:43:33', 
    '192.168.20.1', 
    '192.168.20.1'){SC_DB_ERROR_CLS}Close{SC_DB_ERROR_END}


    Error inserting:
Unknown column 'attachement_ype' in 'field list'
{SC_DB_ERROR_INI}View SQL{SC_DB_ERROR_MID}
INSERT INTO attachment (
    attachment_id, 
    uploaded, 
    attachment_name, 
    parent_id, 
    parent_type, 
    attachement_type_id, 
    attachment_path, 
    attachment_size, 
    created_date, 
    modified_date, 
    base_url, 
    created_by, 
    modified_by) 
VALUES (
    4, 
    'levi_rc.php', 
    'levi_rc.php', 
    1, 
    'parentype', 
    attachement_ype, 
    'path', 
    f_note, 
    '2024-11-26 21:51:53', 
    '2024-11-26 21:51:53', 
    'baseurl', 
    '192.168.20.1', 
    '192.168.20.1')
{SC_DB_ERROR_CLS}Close{SC_DB_ERROR_END}