<?php // redcap_data_entry_form.php

	return function ($project_id){
		//$path = $_SERVER['REQUEST_URI'];
		parse_str($_SERVER['QUERY_STRING'], $qs_params);
		$parseUrl = parse_url($_SERVER['REQUEST_URI']);
		$relativePath = $parseUrl['path'];

		//echo $relativePath;
		$pid = $qs_params['pid'];
		if($relativePath == '/redcap/redcap_v7.3.6/ProjectSetup/index.php'){?>
			<script type="text/javascript">
			document.addEventListener('DOMContentLoaded', function(){
				var cpsHookHtml = '<div id="setupChklist-design" class="round chklist col-xs-12"><table cellspacing="0" width="100%">'+
									'<tbody><tr><td valign="top" style="width:70px;text-align:center;"><div>'+
									'<img id="img-design" src="/redcap/redcap_v7.3.6/Resources/images/checkbox_gear.png">'+
									'</div><div id="lbl-modules" style="color:#999;">Optional</div></td>'+
									'<td valign="top" style="padding-left:30px;"><div class="chklisthdr">'+
									'<span>Custom Project Settings</span></div>'+
									'<div class="chklisttext">Add settings for REDCap extensions using <a href="/redcap/plugins/redcap_custom_project_settings/index.php?pid=<?php echo $pid; ?>" style="text-decoration:underline;color:#800000;">Custom Project Settings</a>. The extensions need to be installed separately. You will also need to know the attribute each extension expects to read and how to format the values the extension needs to configure itself. '+ 
									''+
									' </div>'+
									'</td></tr></tbody></table></div>';

				$("#setupChklist-modify_project").after(cpsHookHtml);
			});
				
			</script>
			<?php
		}
	}
  ?>