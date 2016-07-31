
<script type= "text/javascript">
			var semester_arr = new Array("Six", "Seven","Eight","Nine","Ten");
			var s_a = new Array();
			s_a[0] ="";
			s_a[1] ="Bangla Frist Paper | Bangla Second Paper | English First Paper | English Second Paper | Mathmatics | Islamic History";

			s_a[2] ="Bangla Frist Paper | Bangla Second Paper | English First Paper | English Second Paper | Mathmatics | Islamic History | General Science";

			s_a[3] = "Bangla Frist Paper | Bangla Second Paper | English First Paper | English Second Paper | Mathmatics | Islamic History | Social Science";

			s_a[4] = "Bangla Frist Paper | Bangla Second Paper | English First Paper | English Second Paper | Mathmatics | Islamic History | Social Science | Physics | Chemistry | Biology";
			
			s_a[5] = "Bangla Frist Paper | Bangla Second Paper | English First Paper | English Second Paper | Mathmatics | Islamic History | Social Science | Physics | Chemistry | Biology";

			function semester(semester_id){ 
				// given the id of the <select> tag as function argument, it inserts <option> tags
				var option_str = document.getElementById(semester_id);
				option_str.length=0;
				option_str.options[0] = new Option('Select Semester','');
				option_str.selectedIndex = 0;
				for (var i=0; i<semester_arr.length; i++) {
					option_str.options[option_str.length] = new Option(semester_arr[i],semester_arr[i]);
				}
			}

			function subject(subject_id, subject_index){
				var option_str = document.getElementById(subject_id);
				option_str.length=0;
				option_str.options[0] = new Option('Select subject','');
				option_str.selectedIndex = 0;
				var sub = s_a[subject_index].split("|");
				for (var i=0; i<sub.length; i++) {
					option_str.options[option_str.length] = new Option(sub[i],sub[i]);
				}
			}
		</script>