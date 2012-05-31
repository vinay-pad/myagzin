
<?php
/*
Template Name: PostToGroup
*/

wp_footer();


function get_groups_by_userID($userId){
	
	global $userAccessManager;

	if (isset($userAccessManager)) {
		$uamAccessHandler = $userAccessManager->getAccessHandler();
		$userGroupsForUser = $uamAccessHandler->getUserGroupsForObject('user', $userId);

		foreach($userGroupsForUser as $element){
			 echo $element->getGroupName();
		}
	}


	return $userGroupsForUser;

}

$current_url = $_GET['url'];
global $current_user;
get_currentuserinfo();

$groupsObj = get_groups_by_userID($current_user->ID);

$groups_name = array();
$groups_title = array();
$in = 0;
foreach($groupsObj as $arr){
	$groups_name[$in] = $arr->getGroupName();
	$groups_title[$in] = $arr->getGroupTitle();
	$in++;
}


 ?>



<div style="padding-top: 20px;" id="choose_groups">
	<div align="right"><?php wp_loginout('http://vinpad.us/wp/bklogin?url='.$current_url); ?></div>
	<h3>Select the group that you want to share with</h3>
	<form id="chooseGroupsForm" type="post" action="">
		<input name="username" type="hidden" value="<?php echo $current_user->user_login; ?>" />
		<input name="current_url" type="hidden" value="<?php echo $current_url; ?>" />
		<select name="selectGroups[]" id="selectGroups" multiple="multiple">
		</select><br><br>
		<tr><th><input type="hidden" name="action" value="postToGroups"/>
		<input type="submit"></th></tr>
	</form>
</div>
<div style="padding-top: 20px;" class="showMsg" id="feedback"></div>

<script type="text/javascript">	
	 var groupList=new Array;

    <?php

        for($i=0;$i<count($groups_name); $i++)
                {
            echo "groupList[$i]='".$groups_name[$i].":".$groups_title[$i]."';\n";
        }
     ?>
	
	selectValues = {};
	jQuery.each(groupList, function(key, value) { 
		 var temp = value.split(":");  
		 jQuery('#selectGroups')
			 .append(jQuery("<option></option>")
			 .attr("value", temp[0])
			 .text(temp[1])); 
	});

</script>

<script type="text/javascript">
						jQuery('#chooseGroupsForm').submit(ajaxSubmit); 
						
						function ajaxSubmit(){
							
							var chooseGroupsForm = jQuery(this).serialize();
							
							jQuery.ajax({
								type:"POST",
								url: "../wp-admin/admin-ajax.php",
								data: chooseGroupsForm,
								success:function(data){
					                jQuery("#feedback").html(data);
					
					   			},
					            error: function(errorThrown){
									alert('error');
					                alert(errorThrown);
					            }	
							});
							
							return false;
						}
</script>