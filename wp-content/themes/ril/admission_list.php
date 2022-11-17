<?php
/*
 Template Name: Admission List
*/
get_header();
?>

<?php
require_once('wp-content/themes/ril/header.php');
if($_REQUEST['export']==1)
{
 header("Content-type: application/vnd.ms-excel");
 header("Content-Disposition: attachment;Filename=Admission_List".trim().".xls");
}
?>

<style>
table {
    font-size: 15px !important;
    margin-top:35px;
    
}
    
body{
background:#fff !important;    
}    

html {
    overflow-x: visible;
    overflow-y: scroll !important;
}

.horizontal-scroll-except-first-column {
  width: 100%;
  overflow: auto;
}

.horizontal-scroll-except-first-column > table {
  margin: 0px 15px;
}



.horizontal-scroll-except-first-column > table > * > tr > th,
.horizontal-scroll-except-first-column > table > * > tr > td {
  /* Without this, if a cell wraps onto two lines, the first column
   * will look bad, and may need padding. */
  white-space: nowrap;
}
</style>



<div class="clearfix"></div>

<div class="wrapper pageintro" style="background-image:url(http://renaissancelawcollege.com/wp-content/uploads/2015/04/about_banner.jpg);">
   <div id="pageintro" class="clear">
    <div class="pagetitle">
      <h1>Admission List</h1>
    </div>
   <nav class="breadcrumb clear">
      <ul>
        <li>&nbsp;</li>
        <li>&nbsp;</li>
      </ul>
    </nav>
  </div>
</div>

<h3 style="margin-left:1%">Admission List -  <? echo date('d-m-Y')?></h3>
<?php if ( is_user_logged_in() ) { ?>

<? if($_REQUEST['export']!=1) {?>
<a style="margin-left:1%" target="_blank" href="<?=$_SERVER['admission_list.php']?>?export=1">Export to Excel</a>
<? }?>


<div class="horizontal-scroll-except-first-column">
 

<table style="margin-top: 50px;" class="table table-striped" border="1" cellpadding="2" cellspacing="0" width="100%">
<thead>
	<tr>
	<th>S.No.</th>
	<th>First Name </th>
	<th>Last Name </th>
	<th>Course</th>
	<th>Email  </th>
	<th>Mobile No. </th>
	<th>DOB  </th>
	<th>Father Name</th>
	<th>Mother Name</th>
	<th>Guardian Name</th>
	<th>Mobile No.</th>
	<th>Alternate Mobile No</th>
	<th>Email</th>
	<th>Street Address Line 1</th>
	<th>Street Address Line 2</th>
	<th>City</th>
	<th>Region</th>
	<th>Postal / Zip Code</th>
	<th>Country</th>
	<th>Admission Date</th>
	<th>Transaction Status</th>
	<th>Transaction Ref. No.</th>
	<th>Transaction Amount</th>
	<th>Bank Transaction No.</th>
	<th>Transaction Date</th>
	</tr>
</thead>
<tbody>
<?
$sr=1;
$query="select * from admission where id>18 order by id desc ";    
$posts = $wpdb->get_results($query);
foreach ($posts as $post)
{	
?>
	<tr>
	<td><?=$sr?></td>
	<td><?=$post->first_name?></td>
	<td><?=$post->last_name?></td>
	<td><?=$post->course?></td>
	<td><?=$post->email_id?></td>
	<td><?=$post->mobile_no?></td>
	<td><?=date('d-m-Y',strtotime($post->dob))?></td>
	<td><?=$post->father_name?></td>
	<td><?=$post->mother_name?></td>
	<td><?=$post->guardian_name?></td>
	<td><?=$post->father_mobile_no?></td>
	<td><?=$post->alternate_no?></td>
	<td><?=$post->father_email_id?></td>
	<td><?=$post->address1?></td>
	<td><?=$post->address2?></td>
	<td><?=$post->city?></td>
	<td><?=$post->region?></td>
	<td><?=$post->pincode?></td>
	<td><?=$post->country?></td>
	<td><?=date('d-m-Y h:i A',strtotime($post->createdate))?></td>
	<td><? if($post->status=='TXN_SUCCESS'){echo 'Success';}elseif($post->status=='TXN_FAILURE'){echo 'Failed';}else{echo $post->status;}?></td>
	<td><?=$post->txnid?></td>
	<td align="center"><?=$post->txnamount?></td>
	<td><?=$post->banktxnid?></td>
	<td><? if($post->txndate != '0000-00-00 00:00:00') { echo date('d-m-Y h:i A',strtotime($post->txndate));}?></td>
	</tr>
<?
$sr++;
}
?>	
</tbody>
</table></div>

<?php } else { ?>
   <div class"" align="center" style="min-height:300px;"> <h3><a href="https://renaissancelawcollege.com/wp-login.php" title="Members Area Login" rel="home">Members Login</a></h3></div>
<?php } ?>

<?php
get_footer();
?>